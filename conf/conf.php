<?php
define("DB_HOST", "localhost");
define("DB_NAME", "mon_portfolio");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
$pdo = new PDO('mysql:host=' . DB_HOST . ';charset=utf8mb4;dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
?>