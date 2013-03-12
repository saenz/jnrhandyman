<!doctype html>
<!--[if IE 7 ]>		 <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>		 <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>		 <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
	<head>
	<?php include '../head-all.inc' ?>
	</head>

	<body>

	<div id="container">

		<div id="pageHeader">
<!--[if (IE 6)|(IE 7)|(IE 8)]>
    <div style="background: url('/images/bg_maroon.png') repeat-x scroll 0 0 #367B09;">
<![endif]-->
			<?php include '../top2.php'; ?>
<!--[if (IE 6)|(IE 7)|(IE 8)]></div><![endif]-->
		</div> 

		<div class="clear" style="width: 960px;"> </div>

		<div id="mainWrap">
			<div id="main">
				<div id="mainTop">
				</div>
<script type="text/javascript">

<!--
function validate_form ( form_name )
{
  valid = true;

  if ( ( form_name.who[0].checked == false ) && ( form_name.who[1].checked == false ) && ( form_name.who[2].checked == false ) )  {
    alert ( "Please choose who to send your message to:\nRuss, Jeff, or General Contact." ); 
    valid = false;
  }
 
  if ( form_name.from_name.value == "" )
  {
    alert ( "Please enter your name in the 'Your name' box." );
    valid = false;
  }

  if ( form_name.from_email.value == "" )
  {
    alert ( "Please enter your email address\nin the 'Your email address' box." );
    valid = false;
  }

  if ( form_name.message.value == "" )
  {
    alert ( "Please type your message in the box\nat the bottom of the form." );
    valid = false;
  }

  return valid;

}

//-->

</script>

				<div id="mainContent">

					<div class="breadcrumbs">
					<a href="/">Home</a> : Contact Us
					</div>
					<h1>Contact Us</h1>
					<p>You can use this form to get in touch with Jeff and Russ, who run J&R. Simply choose who you would like to contact and type in your 
					message, and it will be emailed to us. 
					<div class="infoBox">
						<h3>Reach us by Phone</h3>
						<p>
						If you would like to reach us by phone please call <b>714-457-2595</b>.
						</p>
					</div>

 <form method="post" onsubmit="return htmlFormsValidation.checkForm(htmlFormsValidationItems);" action="/cgi-bin/contact.cgi" id="contactform" onsubmit="return validate_form(this);">

        <table border="0">

          <tr>
            <td><input type="radio" name="who" id="who" value="russ"/></td>
            <td style="padding-right: 10px;"><a href="javascript:void(0)" onclick="javascript:document.getElementById('contactform').who[0].checked=true;" onfocus="window.focus();"><img alt="Russ" src="/images/russ-thumbnail.png" style="width: 100px; height: 100px;"/></a></td>
            <td><p><b>Russ</b> deals with most of the hands on home repair issues and project management for J & R.  He's been doing home maintenance since 1977.</p></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><input type="radio" name="who" id="who" value="jeff"/></td>
            <td style="padding-right: 10px;"><a href="javascript:void(0)" onclick="javascript:document.getElementById('contactform').who[1].checked=true;" onfocus="window.focus();"><img alt="Jeff" src="/images/jeff_thumbnail.png" style="width: 100px; height: 100px;"/></a></td>
            <td><p><b>Jeff</b> is the head web developer and media production guru. He has been doing web development since 1997.</p></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><input type="radio" name="who" id="who" value="general"/></td>
            <td style="padding-right: 10px;"><a href="javascript:void(0)" onclick="javascript:document.getElementById('contactform').who[2].checked=true;" onfocus="window.focus();"><img alt="General contact" src="/images/jr_logo_thumbnail.png" style="width: 100px; height: 100px;"/></a></td>
            <td><p><b>General contact</b>. If you're not sure which of us you'd like to email, then you can send us a general message by clicking this option, and either Jeff or Russ will reply.</p></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
        </table>

        <div style="margin-top: 20px;">

          <label class="fullwidthLeft" style="width: 50%;" for="from_name">Your name :</label>
          <span class="fullwidthRight" style="width: 47%;">
            <input class="textField" type="text" name="from_name" id="from_name" style="width: 80%;"/>
          </span>
          <br class="clear" />

          <label class="fullwidthLeft" style="width: 50%;" for="from_email">Your email address :</label>
          <span class="fullwidthRight" style="width: 47%;">
            <input class="textField" type="text" name="from_email" id="from_email" style="width: 80%;"/>
          </span>
          <br class="clear" />
          
          <label class="fullwidthLeft" style="width: 50%;" for="lead">How did you hear about J & R?</label>
          <span class="fullwidthRight" style="width: 47%;">
            <input class="textField" type="text" name="lead" id="lead" style="width: 80%;"/>
          </span>

          <br class="clear" />

          <label for="message" style="text-align: center; display: block; font-weight: bold; margin: 20px 0 5px 0;">Please type your message below:</label>

          <div style="text-align: center;">
            <textarea name="message" id="message" class="textArea" style="width: 90%;" rows="12" cols="55"></textarea>
            <p style="text-align: center; margin-top: 20px;"><input class="submitButton" type="submit" name="send" value="Send Message"/></p>
          </div>

        </div>

      </form>

				</div>
			</div>

			<div id="mainBot">
			</div>
		</div>

		<div id="sidebarWrap">
			<div id="sidebar">
				<div>
					<h3>Gallery</h3>
					Coming soon!
				</div>
			</div>
		</div>

		<div class="clear"> </div>

		<div id="pageFooter">
			<?php include '../footer2.php'; ?>
			<div class="clear"> </div>
		</div>

	</div>

	<?php include '../followtab.php'; ?>

<script type="text/javascript" src="/js/form-validation.js"></script>

<script type="text/javascript">
var htmlFormsValidationItems = new Array();
htmlFormsValidationItems.push(new HtmlFormsItem('who','radio','Please indicate who you would like to contact.'));
htmlFormsValidationItems.push(new HtmlFormsItem('from_name','text','Please provide your name.'));
htmlFormsValidationItems.push(new HtmlFormsItem('from_email','text','Please provide a valid email address.'));
htmlFormsValidationItems.push(new HtmlFormsItem('lead','text','Please provide how you heard about J & R.'));
htmlFormsValidationItems.push(new HtmlFormsItem('message','textarea','Please provide your message.'));
</script>
	</body>
</html>

