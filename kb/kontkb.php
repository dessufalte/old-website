<style>img[alt="www.000webhost.com"]{display:none;}</style>
<?php
header("Location: http://mg2so4.tk/");
$emais = $_POST['emlg'];
$to = "magnesiumsulfat04@gmail.com";
$subject = "Kontak Website";
$psn = $_POST['edsit'];
$psn = wordwrap($psn,70);
$headers = "From: {$emais}"."\r\n"."CC: magnesiumsulfat04@gmail.com";
mail($to,$subject,$psn,$headers);
?>
<?php mail($to_email_address,$subject,$message,[$headers],[$parameters]); ?>