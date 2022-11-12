<?php 
header("Location: save.html");
$kode = $_POST['hapss'];
$darkpeasant = fopen("bgl/skab.txt","r");
$sup = fread($darkpeasant,filesize("bgl/skab.txt"));
$sup = str_ireplace($kode,"",$sup);
$sup = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $sup);
fclose($darkpeasant);
$darkpeasant2 = fopen("bgl/skab.txt","w");
fwrite($darkpeasant2,$sup);
fclose($darkpeasant2);
if(file_exists("bgl/cnt/$kode.php")){
    unlink("bgl/cnt/$kode.php");
    unlink("bgl/cnt/$kode.txt");
    unlink("bgl/aut/$kode.txt");
    unlink("bgl/cnt/iew/$kode.txt");
    unlink("bgl/cnt/kom/$kode.php");
    unlink("bgl/cnt/kom/$kode.txt");
    unlink("bgl/des/$kode.txt");
    unlink("bgl/gbr/$kode.txt");
    unlink("bgl/jdl/$kode.txt");
}
?>