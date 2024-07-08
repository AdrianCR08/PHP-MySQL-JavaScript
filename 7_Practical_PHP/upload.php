<?php
echo <<<_END
<html>
<head><title>PHP Form Upload</title></head>
<body>
    <form method='post' action='upload.php' enctype='multipart/form-data'>
        Select File: <input type='file' name='filename' size='10'>
        <input type='submit' value='Upload'>
    </form>
_END;

if ($_FILES) {
    $name = $_FILES['filename']['name'];
    // It's recommended to perform more checks and sanitization here
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Uploaded image '$name' <br><img src='$name'>";
}
echo "</body></html>";

// The contents of the $_FILES array
/*
+------------------+-----------------------------------------------------------------+
| Key              | Description                                                     |
+------------------+-----------------------------------------------------------------+
| name             | The original name of the file on the client machine.            |
+------------------+-----------------------------------------------------------------+
| type             | The mime type of the file, if the browser provided this         |
|                  | information. An example would be "image/gif". This mime type is |
|                  | however not checked on the PHP side and therefore don't take    |
|                  | its value for granted.                                          |
+------------------+-----------------------------------------------------------------+
| tmp_name         | The temporary filename of the file in which the uploaded file   |
|                  | was stored on the server.                                       |
+------------------+-----------------------------------------------------------------+
| error            | The error code associated with this file upload. The error code |
|                  | can be 0 (for no error), 1 (the uploaded file exceeds the       |
|                  | upload_max_filesize directive in php.ini), 2 (the uploaded file |
|                  | exceeds the MAX_FILE_SIZE directive that was specified in the   |
|                  | HTML form), 3 (the uploaded file was only partially uploaded),  |
|                  | 4 (no file was uploaded), 6 (missing a temporary folder) or     |
|                  | 7 (failed to write file to disk).                               |
+------------------+-----------------------------------------------------------------+
| size             | The size, in bytes, of the uploaded file.                       |
+------------------+-----------------------------------------------------------------+
*/

// Some common internet media types

// Some common internet media content types
/*
+--------------------------+-------------------------------------+
| Media Type               | Description                         |
+--------------------------+-------------------------------------+
| text/html                | HTML documents                      |
+--------------------------+-------------------------------------+
| text/plain               | Plain text                          |
+--------------------------+-------------------------------------+
| image/jpeg               | JPEG images                         |
+--------------------------+-------------------------------------+
| image/png                | PNG images                          |
+--------------------------+-------------------------------------+
| video/mp4                | MP4 videos                          |
+--------------------------+-------------------------------------+
| application/json         | JSON format                         |
+--------------------------+-------------------------------------+
| application/javascript   | JavaScript files                    |
+--------------------------+-------------------------------------+
| application/pdf          | Adobe PDF files                     |
+--------------------------+-------------------------------------+
| application/xml          | XML documents                       |
+--------------------------+-------------------------------------+
| application/zip          | ZIP archives                        |
+--------------------------+-------------------------------------+
| application/x-www-form-urlencoded | Form data encoded in URL   |
+--------------------------+-------------------------------------+
| multipart/form-data      | Form data (used for file uploads)   |
+--------------------------+-------------------------------------+
*/