<?php
define("DB_HOST", "localhost");
define("DB_NAME", "mon_portfolio");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
$dbh = new PDO('mysql:host=' .DB_HOST .';dbname=' .DB_NAME, DB_USER, DB_PASSWORD);
?>