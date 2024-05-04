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
$name = $_POST["name"];
$price = $_POST["price"];
$qty = $_POST["qty"];
$description = $_POST["description"];
$sql = "UPDATE products set name='$name', price=$price, qty=$qty, description='$description' where id=$id ";
$result = $conn->query($sql);
header('Location: /products.php');