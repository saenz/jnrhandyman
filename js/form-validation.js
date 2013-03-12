/*
 * Class to check all items of an HTMLForms form.
 *
 */
var htmlFormsValidation = new function HTMLFormsValidation() {
var formValid;
var focusNode;
var errorSpanIdExtension = '_error';

/* Checks all items defined before.
 * 
 * Accepts: formItems An array of HTMLFormsItem objects to validate.
 * Returns: boolean
 *
 */
this.checkForm = function(formItems) {
	var formItem;
	var formItemNode;
	var formItemErrorNode;

	// At the moment everything is fine...
	formValid = true;
	focusNode = null;

	// Check if we can validate the input using DOM.
	// If not possible, give up and let server validate.
	if (!document.getElementById) {
		return true;
	}

	// Remove all previous error messages
	for (var i = 0; i < formItems.length; i++) {

		formItem = formItems[i];

		// Get some nodes
		formItemNode = document.getElementById(formItem.id);
		formItemErrorNode = document.getElementById(formItem.id + errorSpanIdExtension);

		// Remove error msgs
		if (formItemErrorNode) {
  			formItemErrorNode.innerHTML = '';
		}

		// If no error node exists, add one
		else if (formItemNode) {
			var node = $('<div class="error"/>')
				.attr('id', formItem.id + errorSpanIdExtension);
			$(formItemNode).before(node);
			// Originally...
			// formItemNode.parentNode.appendChild(node);
		}
	}

	// Validate all form items
	for (var i = 0; i < formItems.length; i++) {
		formItem = formItems[i];

		// Go to next item if validation not required
		if (!formItem.required) {
			continue;
		}

		// Get the items' node
		formItemNode = document.getElementById(formItem.id);

		// Check item
		switch (formItem.type){

		// Text input field
		case 'text':
			if (formItemNode == null || formItemNode.value == '') {
				handleHtmlFormError(formItem.id, formItem.msg);
			}
			break;

		// Email
		case 'email':
			if (formItemNode == null || formItemNode.value == '') {
  				handleHtmlFormError(formItem.id, formItem.msg);
			} else {

				var emailRegExpr = /^[\w-\+]+(?:\.[\w-\+]+)*@(?:[\w-\+]+\.)+[a-zA-Z]{2,7}$/;
				if (!emailRegExpr.test(formItemNode.value)) {
	 				handleHtmlFormError(formItem.id, formItem.msg);
				}
			}
			break;

		// Textarea
		case 'textarea':
			if (formItemNode == null || formItemNode.value == '') {
				handleHtmlFormError(formItem.id, formItem.msg);
			}
			if (formItem.maxLength && formItemNode && formItemNode.value.length > formItem.maxLength) {
				handleHtmlFormError(formItem.id, 'You are over the maximum length of ' +
				                    formItem.maxLength + ' characters (' + formItemNode.value.length + ')' );
			}
			break;

		// Dropdown
		case 'dropdown':
			if (formItemNode.selectedIndex == null || formItemNode.selectedIndex == -1 || formItemNode.options[formItemNode.selectedIndex].value == null || formItemNode.options[formItemNode.selectedIndex].value == '') {
				handleHtmlFormError(formItem.id, formItem.msg);
			}
			break;

		// Country
		case 'country':
			if (formItemNode.selectedIndex == null || formItemNode.selectedIndex == -1 || formItemNode.options[formItemNode.selectedIndex].value == null || formItemNode.options[formItemNode.selectedIndex].value == '') {
				handleHtmlFormError(formItem.id, formItem.msg);
			}
			break;

		// Radio butttons
		case 'radio':
			// Get all nodes with this items' name
			var formItemName = formItemNode.getAttribute('name');
			var formItemNameNodes = document.getElementsByName(formItemName);
			var formItemCommonParent = formItemNode.parentNode;

			// Validate whether at least one of these nodes is checked
			var itemSelected = false;
			for (j = 0; j < formItemNameNodes.length; j++) {
				if ( formItemNameNodes[j].nodeName == 'INPUT' &&
					   formItemNameNodes[j].getAttribute('type') == 'radio' &&
				     /* formItemNameNodes[j].parentNode == formItemCommonParent && */
				     formItemNameNodes[j].checked )
				{
					itemSelected = true;
				}
			}
			if (!itemSelected) {
				handleHtmlFormError(formItem.id, formItem.msg);
			}
			break;

		// Checkbox
		case 'checkbox':
			// Get all nodes with this items' name
			var formItemName = formItemNode.getAttribute('name');
			var formItemNameNodes = document.getElementsByName(formItemName);
			var formItemCommonParent = formItemNode.parentNode;

			// Validate whether at least one of these nodes is checked
			var itemSelected = false;
			for (j = 0; j < formItemNameNodes.length; j++) {
				if (formItemNameNodes[j].nodeName == 'INPUT' && formItemNameNodes[j].getAttribute('type') == 'checkbox' && formItemNameNodes[j].parentNode == formItemCommonParent && formItemNameNodes[j].checked) {
				    itemSelected = true;
				}
			}
			if (!itemSelected) {
				handleHtmlFormError(formItem.id, formItem.msg);
			}
			break;
		}
	}

	// Set focus to first invalid item
	if (focusNode != null) {
		focusNode.focus();
	}

	// Return entire form status
	return formValid;
}

/* Handles an error.
 *
 * Accepts: string id DOM-ID of item that causes the error
 * string msg Error message to display
 *
 * Returns: -
 *
 */
function handleHtmlFormError (id, msg) {
	var formItemNode = document.getElementById(id);
	var formItemErrorNode = document.getElementById(id + errorSpanIdExtension);
	formValid = false;

	// Mark current node as focus node if there was none before
	if (focusNode == null ) {
		focusNode = formItemNode;
	}

	// Display error
	if (formItemErrorNode) {
		document.getElementById(id + errorSpanIdExtension).innerHTML = msg;
// 			document.getElementById(id + errorSpanIdExtension).style.color = '#FF0000';
	} else {
		alert(msg);
	}
}
}

/*
 * Class to generate form items.
 *
 */
function HtmlFormsItem(id, type, msg, required, maxLength) {
	this.id = id;
	this.type = type;
	this.msg = msg;
	this.maxLength = maxLength;
	if (required == null || (String(required) != 'true' && String(required) != 'false')) {
		this.required = true;
	} else {
		this.required = required;
	}
}
