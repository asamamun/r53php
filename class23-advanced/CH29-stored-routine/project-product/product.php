<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php require "header.php"; ?>
    <!-- header -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #topp {
            margin-top: 100px !important;
        }
    </style>
</head>
<?php
require "connection.php";
$selectQuery = "select * from products";
$result = $con->query($selectQuery);
?>

<body>
    <!-- navbar -->
    <?php require "navbar.php"; ?>
    <!-- navbar -->

    <div class="" id="topp"></div>
    <?php require "carousel.php"; ?>
    <div class="container-xl">

        <h2 class="card-title">Our Products:</h2>
    </div>
    <div class="container-xl mx-auto row row-cols-1 row-cols-md-4 g-4">
        <?php
        if ($result->num_rows) {
            while ($res = $result->fetch_assoc()) {

        ?>
                <div class="col ">
                    <div class="card h-100 shadow-lg">
                        <div class="cardsimg">

                            <img src="productimg/<?= $res['images'] ?>" class="card-img-top" alt="Uploading">
                        </div>
                        <div class="card-body">

                            <h5 class="card-title"><?= $res['name'] ?? "" ?></h5>
                            <p class="card-text">Price:<?= $res['price'] ?? "" ?></p>
                            <a href=" product-details.php?id=<?= $res['id'] ?? "" ?>" class="btn btn-primary">See Details</a>

                        </div>
                    </div>
                </div>

        <?php
            }
        }
        ?>



    </div>
    <!-- Footer -->
    <?php require "footer.php"; ?>
    <!-- Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>