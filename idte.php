<style>img[alt="www.000webhost.com"]{display:none;}</style>
<?php
$fils = $_POST['kode'];
$edts = $_POST['edsit'];
if (file_exists("konten/{$fils}.txt")){
    $dsd = fopen("konten/{$fils}.txt","w+");
    fwrite($dsd,$edts);
    fclose($dsd);
    echo "Selesai 😀" . "\n";
    ?>
    <a href = "index.php">klik ini untuk kembali</a>
    <?php
}else{
    echo "Kode salah "
    ?>
    <a href = "editf.html">kembali</a>
    <?php
}
?>
