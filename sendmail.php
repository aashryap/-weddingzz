<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
// the message
$msg = "hello";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$mail = mail("aashryap@gmail.com","My subject",$msg);
if($mail)
{
	echo "sent";
}
else
{
 echo "failed";
}
?>