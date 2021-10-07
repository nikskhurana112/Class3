<?php

// Assocstive Array
// $names = [
//     "first_name" => "John",
//     "last_name" => "Doe"
// ];
// echo $names['first_name'];

$hostname = "localhost";
$username = "root";
$password = "";
$database = "school";
$mysqli = new mysqli($hostname, $username, $password, $database);
// $pname = $_GET['username'];
// $pcity = $_GET['city'];
$pname = $_POST['username'];
$pcity = $_POST['city'];
$result = $mysqli->query("INSERT INTO students (name,city) VALUES('$pname','$pcity')");
if ($result == null) {
    echo $mysqli->error;
} else {
    header("Location:thanks.php");
    exit;
}
