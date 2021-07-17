<?php
$file = fopen(“WT.txt”,”r”) or die(“File cannot be opened”);
fread($file,filesize("WT.txt”));
fclose(“$file”);
?>
