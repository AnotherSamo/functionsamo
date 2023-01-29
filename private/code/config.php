
<?php
$host = "localhost";
$username = "root";
$pw = "";
$db_name = "foto_libro";

$link = new mysqli($host, $username, $pw, $db_name);
if (!$link) {
   die('Database connection failed');
}
