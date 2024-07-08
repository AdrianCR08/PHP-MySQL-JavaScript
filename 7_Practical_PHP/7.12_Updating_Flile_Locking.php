<?php
$fh = fopen("testfile.txt", 'r+') or die ("Failed to open fiel");
$text = fgets($fh);

if (flock($fh, LOCK_EX)) {
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "text") or die ("Could not write to file");
    flock($fh, LOCK_UN);
}
fclose($fh);
echo "File 'testfile.txt' succesfully updated";
