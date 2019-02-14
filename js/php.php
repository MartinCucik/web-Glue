<?php
mail('kontakt@meddex.sk', 'hehe', 'toto je spravaposledna');
mail('kontakt@meddex.sk', email, 'toto je spravaposledna1');
mail('kontakt@meddex.sk', 'hehe', 'toto je spravaposledna');
mail('kontakt@meddex.sk', %email, 'toto je spravaposledna2');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sprava = $_POST['sprava'];
mail('kontakt@meddex.sk', email, 'toto je spravaposledna1');
mail('kontakt@meddex.sk', 'hehe', 'toto je spravaposledna');
mail('kontakt@meddex.sk', %email, 'toto je spravaposledna2');
if(!$result) {   
     echo "Error";   
} else {
    echo "Success";
    
}
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
$myvar = array(1,2,3);
console_log( $myvar ); // [1,2,3]
phpinfo(); 
    
    
    
    
    
    
    
    
    
    
    
$sender = 'someone@somedomain.tld';
$recipient = 'mattko432@azet.sk';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
    
    
    
    
    
    ?>