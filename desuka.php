<?php 
header("Location: save.html");
$kode = $_POST['haps'];
$darkpeasant = fopen("skate.txt","r");
$sup = fread($darkpeasant,filesize("skate.txt"));
$sup = str_ireplace($kode,"",$sup);
fclose($darkpeasant);
$darkpeasant2 = fopen("skate.txt","w");
fwrite($darkpeasant2,$sup);
fclose($darkpeasant2);
if(file_exists("konten/$kode.txt")){
    unlink("konten/$kode.txt");
}
?>