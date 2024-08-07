<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setting up the database</title>
</head>
<body>
<h3>Setting up...</h3>
<?php
require_once '29.1_Functions.php';

createTable('members',
    'user VARCHAR(16), 
    pass VARCHAR(16), 
    INDEX(user(6))');

createTable('messages',
    'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    auth VARCHAR(16),
    recip VARCHAR(16),
    pm CHAR(1),
    time INT UNSIGNED,
    message VARCHAR(4096),
    INDEX(auth(6)),
    INDEX(recip(6))');

createTable('friends',
    'user VARCHAR(16),
    friend VARCHAR(16),
    INDEX(user(6)),
    INDEX(friend(6))');

createTable('profiles',
    'user VARCHAR(16),
    text VARCHAR(4096),
    INDEX(user(6))');

function createTable($name, $query) {
    global $pdo;
    try {
        $result = $pdo->query("SHOW TABLES LIKE '$name'");
        if ($result->rowCount() == 0) {
            $pdo->exec("CREATE TABLE $name($query)");
            echo "Table '$name' created successfully.<br>";
        } else {
            echo "Table '$name' already exists.<br>";
        }
    } catch (PDOException $e) {
        die("DB ERROR: " . $e->getMessage());
    }
}
?>

<br>...done.
</body>
</html>