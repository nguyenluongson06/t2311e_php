<?php //save to db
//receive data from form
$name = $_POST["name"];
$price = $_POST["price"];
$qty = $_POST["qty"];
$description = $_POST["description"];
//connect & query to save data to database
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connect database failed");
}
$sql = "INSERT INTO products (name, price, qty, description) VALUES ('$name', $price, $qty, '$description' )";
$conn->query($sql);
header("Location: /products.php");