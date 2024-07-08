<?php
$fh = fopen("testfile.txt", 'r') or
die("File does not exists or you lack permission to open it");
$text = fread($fh, 3);
fclose($fh);

echo $text;
