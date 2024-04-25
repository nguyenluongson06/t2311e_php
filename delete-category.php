<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connect database failed");
}
$id = $_GET['id'];
$sql = "DELETE from categories where id=$id ";
$result = $conn->query($sql);
header('Location: /categories.php');