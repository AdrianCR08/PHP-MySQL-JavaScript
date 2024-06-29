<?php
// To check whether a file exists you can use the file_exists() function.

// 1. Create file
$fh = fopen("testfile.txt", 'w') or die("Failed to create file");

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' written successfully";

/*
Mode | Action        | Description
-----+---------------+---------------------------------------------------------
'r'  | Read          | Open file for reading only; place the file pointer at the beginning of the file.
'r+' | Read/Write    | Open file for reading and writing; place the file pointer at the beginning of the file.
'w'  | Write         | Open file for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
'w+' | Read/Write    | Open file for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
'a'  | Write         | Open file for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
'a+' | Read/Write    | Open file for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
'x'  | Write         | Create and open file for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail by returning FALSE and generating an error of level E_WARNING.
'x+' | Read/Write    | Create and open file for reading and writing; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail.
'c'  | Write         | Open file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the file.
'c+' | Read/Write    | Open file for reading and writing; otherwise it has the same behavior as 'c'.
*/
