<?php
$fh = fopen("Testfile.txt", 'r+') or die ("Failed to open file");
$text = fgets($fh);
fseek($fh, 5, SEEK_CUR);
fwrite($fh, "\n$text") or die ("Could not write to file");
fclose($fh);

echo "File 'testfile.txt' succesfully updated";
