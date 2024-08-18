<?php 
$errors = '';
$myemail = 'ketka_do_kolitka@abv.bg';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<meta http-equiv="Content-Type" Content="text/html; charset=windows-1251">
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
<script type="text/javascript">stLight.options({publisher: "ccd08615-8bc6-47e5-8419-1b34522d8a4b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "ccd08615-8bc6-47e5-8419-1b34522d8a4b", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "googleplus", "amazon_wishlist", "email", "delicious"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>
<head>
	<title>Благодарим Ви!</title>
</head>
<body>
<div 
 style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
<center><h1>Благодарим Ви!</h1>
<h3>Скоро ще получите отговор от нашите колеги!</h3></center></div>
</body>
</html>