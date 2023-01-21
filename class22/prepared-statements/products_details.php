<?php 
    require "db/connect.php";

    $id = $_GET['id']??6;
   

    $getProduct = "select * from products where id= $id";

    $result = $connect->query( $getProduct);
    $connect->close();

    $pro =  $result->fetch_assoc();

    

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
    
    <!-- product details area start  -->
    <div class="product-details">
        <div class="container mt-5">
        <h1 class="my-4 text-white">Products Details</h1>
            <hr class="text-bg-light">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-image-area">
                        <img src="assets/products/<?= $pro['images']??''?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-content-area text-white ">
                        <h2><?= $pro['name']??''?></h2>
                        <h5>Price: $<?= $pro['price']??''?></h5>
                        <div class="price-box d-flex align-items-center ">
                                <p class="price">Price: $<?php echo $pro['price'] - ($pro['price'] * $pro['discount'] / 100);  ?></p>
                                <p class="old_price">Old Price: $<?= $pro['price']??"" ?></p>
                            </div>
                            <h6>Quantity: 120</h6>
                        <p><?= $pro['description']??''?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details area end -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>