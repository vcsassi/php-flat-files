<?php
$form_data = $_POST['newLine'];
$file = fopen("Einstein.txt", 'a+') or die("Well, this did not work");
fwrite($file, "\n".$form_data);
fclose($file);
header("Location: http://localhost:8080/php-flat-files");
die();
?>