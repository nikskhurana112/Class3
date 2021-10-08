<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "school";
$mysqli = new mysqli($hostname, $username, $password, $database);
$id = $_POST['id'];
$name = $_POST['username'];
$city = $_POST['city'];

$result =  $mysqli->query("UPDATE students SET name = '$name' , city = '$city' WHERE id = $id");
if ($result == null) {
    echo $mysqli->error;
    exit;
}
header("Location:students.php");
exit;
