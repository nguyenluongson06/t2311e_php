<?php //save to db
//receive data from form
$name = $_POST["name"];
//connect & query to save data to database
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connect database failed");
}
$sql = "INSERT INTO categories (name) VALUES ('$name')";
$conn->query($sql);
header("Location: /categories.php");