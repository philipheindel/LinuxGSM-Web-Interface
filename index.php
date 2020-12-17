<?php
session_start();

require_once("./lib/config_loader.php");
require_once("./lib/db_connect.php");

if (isset($_POST["inputName"])) {
	echo($_POST["inputName"]);
	//header("Location: https://www.google.com");
}
$servername = "192.168.1.234";
$username = "root";
$password = "P@ssw0rd!";
$database = "main";

$config = parse_ini_file("./config/config.ini", true);

printf($config["db"]["server"]."<br>");

$conn = mysqli_connect($_SESSION["db_server"], $_SESSION["db_user"], $password);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$res = mysqli_query($conn, "select * from main.users");
//$res = mysqli_query($conn, "DELETE SCHEMA `test` ;");

//mysqli_free_result($res);

while ($row = mysqli_fetch_assoc($res)) {
	echo "".$row["id"]." ".$row["username"]." ".$row["name"]." ".$row["auth"]." ".$row["password"]."<br>";
}


echo "Connected successfully";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</head>

<body>

</body>

</html>
<form action="." method="post">
    <input type="text" name="inputName" id="inputId">
	<input type="submit" value="go">
</form>