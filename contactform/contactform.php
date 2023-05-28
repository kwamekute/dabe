<?php

$name = mysqli_real_escape_string($_POST['name']);
$email = mysqli_real_escape_string($_POST['email']);
$subject =  mysqli_real_escape_string($_POST['subject']);
$message =  mysqli_real_escape_string($_POST['message']);

$error_message = "";

$mail_to = 'thatkutekwame@gmail.com';


 ?>
