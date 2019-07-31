<?php
# mail(string $to, string $subject, string $message, string $additional_headers = null, string $additional_parameters = null)
$to = "sales@goyalhosiery.com";
$sub = "Website response";
$mess = "hello";
// $body = "yeyeyyeyey";
$from = "From: panditjiwebsite@gmail.com";

if(mail($to, $sub, $mess, $from)){
    echo "DONE";
}
else{
    echo "soory";
}
?>

<h1>Welcome online email</h1>



<?php
$to = "sales@goyalhosiery.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: panditjiwebsite@gmail.com";

if(mail($to,$subject,$txt,$headers)){
    echo "DONE";
}
else{
    echo "soory";
}
?>