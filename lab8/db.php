<?php
$host = "sql209.infinityfree.com";
$port = 3306;
$username = "if0_39135804";
$password = "8nWvyRMtQ3LvD";
$database = "if0_39135804_lab8";

$db = new PDO("mysql:host=$host;port=$port",
               $username,
               $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("use `$database`");
?>