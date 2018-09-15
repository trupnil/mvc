<?php
$to = "trupnil92@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: noreply@gmail.com" . "\r\n" .
"CC: trupnil.vsmart@gmail.com";

mail($to,$subject,$txt,$headers);
?>