<?php
if (isset($_SERVER['PHP_AUTH_USER']) && isset($SERVER['PHP_AUTH_PW'])) {
    echo "Welcome User: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . 
    " Password: " . htmlspecialchars($_SEVER['PHP_AUTH_PW']);
} else {
    header('WWW-Authenticate: Basic realm = "Restricted Aerea"');
    header('HTTP/1.1 401 Unathorized');
    die("Please enter your username and passowrd");
}
?>