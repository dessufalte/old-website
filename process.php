<?php
$file = 'feedback.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= ".\n" . $_GET['info'];
// Write the contents back to the file
echo "Selesai 😀" . "\n";
file_put_contents($file, $current);
?>
<a href = "list.html">klik ini untuk kembali</a>