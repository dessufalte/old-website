<?php  
header("Location: psst.php");
$content = $_POST['content'];
   $nike =rand(10,99999);
   $items =(string)$nike;
   $handle = fopen("konten/{$items}.txt","w") or die("Cannot open the file");
   fwrite($handle,$content);
   fclose($handle);
   setcookie("lmnas", $items, time() + 3600, '/');
   setcookie("hstr", $_COOKIE["hstr"].$items."\n", time() + 60, '/');
   if (isset($_POST['check1'])) {
    $files = 'skate.txt';
    $current = file_get_contents($files);
    $current =  preg_replace('/^[ \t]*[\r\n]+/m', '', $current);
    $current .= trim($items," ")."\n" ;
    file_put_contents($files, $current);
    }
   ?>