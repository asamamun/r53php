<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $cat = $_POST['category_id'];
    $scat = $_POST['subcategory_id'];
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $sku = $_POST['sku'];
    $image = $_FILES['image'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
    $date = date('Y-m-d H:i:s');
   
    $imagenm=$image['name'];

    $sql = "insert into `products` (category_id,subcategory_id,name,description,sku,images,price,quantity,discount) values($cat,$scat,'$name','$desc','$sku','$imagenm',$price,$quantity,$discount)";
    // echo $sql;
    // exit;

    $result = mysqli_query($con,$sql);
    if ($result) {
        move_uploaded_file($image['tmp_name'], "productimg/" . $image['name']);
        echo "data inserted";
    } else {
        die(mysqli_error($con));
    }
}
// header("Location:add-product.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h2>Add Product From Here</h2>
        <form class="my-5" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="category_id" class="form-label">Category Id:</label>
                <input type="number" name="category_id" class="form-control" id="category_id" value="5" readonly>
                <label for="subcategory_id" class="form-label">Sub-Category Id:</label>
                <input type="number" name="subcategory_id" class="form-control" id="subcategory_id" value="7" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="sku" class="form-label">Sku:</label>
                <input type="text" name="sku" class="form-control" id="sku">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" class="form-control" name="quantity" id="quantity">
            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Discount:</label>
                <input type="number" class="form-control" name="discount" id="discount">
            </div>
            <div class="mb-3">
                <label for="created_at" class="form-label">Created Date:</label>
                <input type="date" class="form-control" name="created_at" id="created_at">
            </div>
           

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>