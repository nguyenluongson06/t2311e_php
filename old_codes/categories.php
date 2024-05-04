<?php
// query to DB 
//1. connect db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connect database failed");
}
//2. query SQL
//2.1. get params from url query -> apply params
$limit = isset($_GET['limit']) && $_GET['limit'] != '' ? $_GET['limit'] : 20;
$search = isset($_GET['search']) && $_GET['search'] != '' ? $_GET['search'] : '';
$sql = "SELECT * FROM categories  WHERE name like '%$search%' LIMIT $limit";
$result = $conn->query($sql);
$list = [];
while ($row = $result->fetch_assoc()) {
    $list[] = $row;
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
            <form action="/categories.php" method='GET'>
                <div class="row">
                    <div class="col">
                        <input value="<?php echo $search ?>" type="text" name="search" placeholder="Search"
                            class='form-control'>
                    </div>
                    <div class="col">
                        <input value=<?php echo $limit ?> type="number" name='limit' placeholder='Limit'
                            class='form-control' />
                    </div>
                    <div class="col">
                        <button type="submit" class='btn btn-primary'>Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $category): ?>
                    <tr>
                        <th scope="row"><?php echo $category["id"] ?></th>
                        <td><?php echo $category["name"]; ?></td>
                        <td><a href="/edit-category.php?id=<?php echo $category["id"] ?>">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure you want to delete this category?')"
                                class="text-danger"
                                href="/delete-category.php?id=<?php echo $category["id"] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>

</html>