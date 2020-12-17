<?php
$connection = new mysqli($_SESSION["db_server"], $_SESSION["db_user"], $_SESSION["db_pws"]);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$connection->query("select * from main.users");
?>