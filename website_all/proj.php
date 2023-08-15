<?php

$name= $_POST['email'];
$message= $_POST['message'];
$header="Heading";
$parameter="parameter";


$mail_head="From: <".$name.">\r\n";

$recipient = "kadiarajiv1@gmail.com";

mail($recipient,$parameter,$message,$header) or die("Error!");

echo"message sent";





?>