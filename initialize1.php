<?php
$user = 'root';
$password = '12345_Db!!!';

$dbConnection = new PDO('mysql:host=localhost;dbname=blog-project', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);

$sqlQuery = $dbConnection->query("SELECT * FROM `blog_url`");
$urls = $sqlQuery->fetchAll();
?>