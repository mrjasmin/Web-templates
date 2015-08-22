<?php

function isValid($from) { // Email address verification, do not edit.
		return(preg_match("(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})",$from));
		}
   
$name = ''; 
$message = '';
$from = '' ; 
$error  = '';


if(isset($_POST['submit'])) {
	
	$email = "mrjasmin_90@hotmail.com" ; 
	$from = $_POST['email'] ; 
	$message = $_POST['message'] ; 
	$headers = "From: {$_POST['name']} <$from>"; 
	$name = $_POST['name'] ; 
	$subject = ''; 
	
	if(trim($name) == '' ) {
	$error = '<p>Please enter your name</p>' ;
	}
	elseif(trim($message) == '' ) {
	$error = '<p>Please enter your message</p>' ;
	}
	elseif(trim($from) == '' ) {
	$error = '<p>Please enter your email</p>' ;
	}
	else if(!isValid($from)) {
    $error = '<p>You have enter an invalid e-mail address, try again.</p>';
    }
	
    
    if($error == '') {	

	mail($email, $subject, $message, $headers) ; 
	
	echo "<h3>Your message has been sent successfully</h3>" ; 
	
	}
	
} 

if(!isset($_POST['submit']) || $error !=='' ) {

?>

<?php echo $error ; ?>


<form id="form" name="form" method="post" action="contact.php">

Name:<br />
<input type="text" name="name" id="name"/> <br />

Email:<br />
<input type="text" name="email" id="email" /> <br />

Message:<br />
<textarea name="message" id="message" cols="45" rows="5"></textarea> <br />

<input type="submit" name="submit" id="submit" class="submitbutton" value="Send message"/>

</form>

<?php 
}  



?>