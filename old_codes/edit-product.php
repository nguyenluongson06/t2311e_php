<?php
$id = $_GET['id'];
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connect database failed");
}
$sql = "SELECT * from products where id = $id";
$result = $conn->query($sql);
$product = null;
while ($row = $result->fetch_assoc()) {
    $product = $row;
}
if ($product == null) {
    header("Location: /notfound.php");
    return;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
    </head>

    <body>
        <div class="container">
            <h1>Edit product</h1>
            <form action="/update-product.php?id=<?php echo $id ?>" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="name" value="<?php echo $product['name'] ?>" class='form-control'>
                    </div>
                    <div class="col">
                        <input type="number" name="price" value="<?php echo $product['price'] ?>" class='form-control'>
                    </div>
                    <div class="col">
                        <input type="number" name="qty" value="<?php echo $product['qty'] ?>" class="form-control">
                    </div>
                    <div class="col">
                        <textarea name="description"
                            class="form-control"><?php echo $product['description'] ?></textarea>
                    </div>

                    <div class="col">
                        <button type="submit" class='btn btn-primary'>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </body>

</html>