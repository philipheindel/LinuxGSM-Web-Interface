<?php
$config = parse_ini_file("./config/config.ini", true);

$db = $config["db"];
$_SESSION["db_server"] = $db["server"];
$_SESSION["db_user"] = $db["user"];
$_SESSION["db_pwd"] = $db["user_password"];
?>