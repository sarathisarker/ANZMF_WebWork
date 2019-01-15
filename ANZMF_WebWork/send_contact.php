<?php
// contact subject
$subject = "$subject";

// Message 
$message = "$message";

//Mail of sender 
$mail_from = "cust_email";

// From 
$header = "from: $name <$mail_from>";

// Actual email ID
$to = "asarker@gmail.com";
$send_contact = mail($to,$subject,$message,$header);

// check if email delivered

if($send_contact){
echo " Info received";
}
else {
echo "Error";
}
?>
