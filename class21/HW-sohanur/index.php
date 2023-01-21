<?php
require "db/connect.php";

$getProduct = 'select * from products';

$result = $connect->query($getProduct);
$connect->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>



    <!-- products area start  -->
    <div id="product-area ">

        <div class="container-fluid mt-5">
<?php require "inc/navbar.php" ?>
            <h1 class="my-4 text-white">Products List</h1>
            <hr>
            <div class="row gy-4">
                <?php
                if ($result->num_rows) {
                    // while($res = $result->fetch_row()){
                    // while($res = $result->fetch_array()){
                    while ($res = $result->fetch_assoc()) {
                        // var_dump($res);
                        $price = $res['price'];

                ?>
                        <div class="col-md-4 col-lg-3">
                            <div class="single-products">
                                <div class="img-box">
                                    <img src="assets/products/<?= $res['images'] ?? '' ?>" alt="">
                                </div>
                                <div class="product-content">
                                    <h3><?= $res['name'] ?? "" ?></h3>
                                    <div class="price-box d-flex align-items-center ">
                                        <p class="price">Price: $<?php echo $res['price'] - ($res['price'] * $res['discount'] / 100);  ?></p>
                                        <p class="old_price">Old Price: $<?= $res['price'] ?? "" ?></p>
                                    </div>
                                    <h6>Quantity: 120</h6>
                                    <a href="products_details.php?id=<?= $res['id'] ?? '' ?>">View Details</a>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <!-- products area end -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>