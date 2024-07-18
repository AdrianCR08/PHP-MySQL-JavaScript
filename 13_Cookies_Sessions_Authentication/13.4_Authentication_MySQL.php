<?php
require_once '13.0_Logging.php';

require_once '13.0_Logging.php';

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    // Temporarily bypass the sanitize function for debugging
    $un_temp = $_SERVER['PHP_AUTH_USER']; // Directly use the input for testing
    $pw_temp = $_SERVER['PHP_AUTH_PW'];
    
    // Debug output
    // echo "Username: $un_temp<br>Password: $pw_temp<br>";

    // Use prepared statements to prevent SQL injection
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$un_temp]);

    if (!$stmt->rowCount()) die("User not found");

    $row = $stmt->fetch();
    $fn = $row['forename'];
    $sn = $row['surname'];
    $un = $row['username'];
    $pw = $row['password'];

    if (password_verify($pw_temp, $pw)) {
        echo htmlspecialchars("$fn $sn : Hi $fn, you are now logged in as '$un'");
    } else {
        die("Invalid username/password combination");
    }
} else {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.1 401 Unauthorized');
    die("Please enter your username and password");
}