<?php
require_once '11.2_connecting_mysql_with_pdo.php';
$query = "SELECT * FROM classics";
$stmt = $pdo->prepare($query);
$stmt->execute();
?>