<style>img[alt="www.000webhost.com"]{display:none;}</style>
<?php  
header("Location: index.php");
    $content = $_POST['content'];
    $content = str_ireplace("unlink"," ",$content);
    $content = str_ireplace("$.ajax","",$content);
    $content = str_ireplace("pante","******",$content);
    $content = str_ireplace("anjii","******",$content);
    $content = str_ireplace(" shit ","******",$content);
    $content = str_ireplace("fuck ","******",$content);
    $content = str_ireplace("taekk","****",$content);
    $content = str_ireplace("taikk","****",$content);
    $content = str_ireplace("dafuq","****",$content);
    $content = str_ireplace("magnesium sulfat","<strong>magnesium sulfat<strong>",$content);
    $content = str_ireplace("bucin","buc*n",$content);
    $content = str_ireplace("anjay","an**y",$content);
    $content = str_ireplace("konto","******",$content);
    $content = str_ireplace("anyii","******",$content);
    $content = str_ireplace("anyin","*****",$content);
    $content = str_ireplace("kalempo","*****",$content);
    $content = str_ireplace("gilo"," **** ",$content);
    $content = str_ireplace("emek","****",$content);
    $content = str_ireplace("mbut","****",$content);
    $content = str_ireplace("kanci","****",$content);
    $content = str_ireplace(" asu ","****",$content);
    $content = str_ireplace("asu ","****",$content);
    $content = str_ireplace(" asu","****",$content);
    $content = str_ireplace(" fak ","****",$content);
    $content = str_ireplace("fak ","****",$content);
    $content = str_ireplace(" fak","****",$content);
    $content = str_ireplace(" anjiang ","****",$content);
    $content = str_ireplace("anjiang ","****",$content);
    $content = str_ireplace(" anjiang","****",$content);
    $content = str_ireplace(" anjia","****",$content);
    $content = str_ireplace("lande","****",$content);
    $content = str_ireplace("kundi","****",$content);
    $content = str_ireplace("monto","****",$content);
    $content = str_ireplace("baruak","****",$content);
    $items = $_POST['emlgs']; 
    $items = str_ireplace("unlink"," ",$items);
    $items = str_ireplace("$.ajax","",$items);
    $items = str_ireplace("pante","******",$items);
    $items = str_ireplace("anjii","******",$items);
    $items = str_ireplace(" shit ","******",$items);
    $items = str_ireplace("fuck ","******",$items);
    $items = str_ireplace("taekk","****",$items);
    $items = str_ireplace("taikk","****",$items);
    $items = str_ireplace("dafuq","****",$items);
    $items = str_ireplace("magnesium sulfat","<strong>magnesium sulfat<strong>",$items);
    $items = str_ireplace("bucin","buc*n",$items);
    $items = str_ireplace("anjay","an**y",$items);
    $items = str_ireplace("konto","******",$items);
$items = str_ireplace("anyii","******",$items);
$items = str_ireplace("anyin","*****",$items);
$items = str_ireplace("kalempo","*****",$items);
$items = str_ireplace("gilo"," **** ",$items);
$items = str_ireplace("emek","****",$items);
$items = str_ireplace("mbut","****",$items);
$items = str_ireplace("kanci","****",$items);
$items = str_ireplace(" asu ","****",$items);
$items = str_ireplace("asu ","****",$items);
$items = str_ireplace(" asu","****",$items);
$items = str_ireplace(" fak ","****",$items);
$items = str_ireplace("fak ","****",$items);
$items = str_ireplace(" fak","****",$items);
$items = str_ireplace(" anjiang ","****",$items);
$items = str_ireplace("anjiang ","****",$items);
$items = str_ireplace(" anjiang","****",$items);
$items = str_ireplace(" anjia","****",$items);
$items = str_ireplace("lande","****",$items);
$items = str_ireplace("kundi","****",$items);
$items = str_ireplace("monto","****",$items);
$items = str_ireplace("baruak","****",$items);
    $handle = fopen("konten/{$items}.txt","w") or die("Cannot open the file");
    fwrite($handle,$content);
    fclose($handle);
   ?>