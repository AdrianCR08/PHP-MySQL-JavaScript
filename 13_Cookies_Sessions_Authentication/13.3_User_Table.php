<?php
require_once '13.0_Logging.php';


try {
    $pdo =  new PDO($attr, $user, $pass, $opts);
} catch (\PDOException $e) {
    throw new \PDOException($e -> getMessage(), (int) $e -> getCode());
}

/* $query = "CREATE TABLE users (
    forename VARCHAR(32) NOT NULL,
    surname VARCHAR(32) NOT NULL,
    username VARCHAR(16) NOT NULL,
    password VARCHAR(16) NOT NULL
)";


$result = $pdo -> query($query);

$forename = 'Bill';
$surname = 'Smith';
$username = 'bsmith';
$password = 'mysecret';
$hash = password_hash($password, PASSWORD_DEFAULT);


$forename = 'Pauline';
$surname = 'Jones';
$username = 'pjones';
$password = "acrobat";
$hash = password_hash($password, PASSWORD_DEFAULT);

add_user($pdo, $forename, $surname, $username, $hash);
*/
$forename = 'Copilot';
$surname = "GitHub";
$username = 'copGighub';
$password = 'askme';
$hash = password_hash($password, PASSWORD_DEFAULT);

add_user($pdo, $forename, $username, $surname, $hash);

function add_user($pdo, $fn, $sn, $un, $pw){
    $stmt = $pdo->prepare("INSERT INTO users (forename, surname, username, password) VALUES (?, ?, ?, ?)");
    $stmt -> bindParam(1, $fn, PDO::PARAM_STR, 32);
    $stmt -> bindParam(2, $sn, PDO::PARAM_STR, 32);
    $stmt -> bindParam(3, $un, PDO::PARAM_STR, 32);
    $stmt -> bindParam(4, $pw, PDO::PARAM_STR, 32);

    $stmt -> execute([$fn, $sn, $un, $pw]);

}


