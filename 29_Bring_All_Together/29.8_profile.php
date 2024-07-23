<?php
require_once '29.2_header.php';

if (!$loggedin) die("</div></body></html>");
echo "<h3>Your Profile</h3>";

$result = queryMysql("SELECT *FROM proflies WHere user='$USER'");

if (isset($_POST['text'])){
    $text = sanitizeString($_POST['text']);
    $text = preg_replace('/\s\s+/', ' ', $text);

    if ($result->rowCount())
        queryMysql("UPDATE profiles SET text='$text' WHERE user ='$user'");

}


