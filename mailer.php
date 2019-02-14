<?php

  $name = $_POST['name'];

  $visitor_email = $_POST['email'];

  $message = $_POST['message'];

 $email_from = 'yourname@yourwebsite.com';
$email_subject = "Novy e-mail";
$email_body = "Nova sprava od: $name.\n Email: $visitor_email.\n Sprava: $message.";
 mail('kontakt@meddex.sk',$email_subject , $email_body);

?>
