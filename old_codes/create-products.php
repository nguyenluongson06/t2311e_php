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
            <h1>Create a product</h1>
            <form action="/save-product.php" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="name" placeholder='Product Name' class='form-control'>
                    </div>
                    <div class="col">
                        <input type="number" name="price" placeholder="Product Price" class='form-control'>
                    </div>
                    <div class="col">
                        <input type="number" name="qty" placeholder="QTY" class="form-control">
                    </div>
                    <div class="col">
                        <textarea name="description" class="form-control" placeholder='Product description'></textarea>
                    </div>

                    <div class="col">
                        <button type="submit" class='btn btn-primary'>Add product</button>
                    </div>
                </div>
            </form>
        </div>
    </body>

</html>