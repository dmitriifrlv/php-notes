<?php 
 $file = 'extras/users.txt';
 if (file_exists($file)) {
    echo readfile($file);
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    echo $content;
 } else {
  $file = 'extras/new-users.txt';
  $handle = fopen($file, 'w');
  $content = 'Brad' . PHP_EOL . 'Tom';
  fwrite($handle, $content);
  fclose($handle);
 }
?>