<?php
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$to = 'topusarker2008@gmail.com';
$sub = "New message";

mail ($to, $sub, "from" .$firstname);

?>