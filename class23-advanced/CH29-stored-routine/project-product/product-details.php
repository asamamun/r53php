<?php
require "connection.php";
$id = $_GET["id"];
$selectQuery = "select * from products where id= $id";
$result = $con->query($selectQuery);
$prod = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <!-- header -->
     <?php require "header.php";?>
    <!-- header -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #topp {
            margin-top: 100px !important;
        }
        .col-md-5 img{
            object-fit: cover;
            max-height:600px; 
            overflow:hidden;
        }
    </style>

</head>

<body>
    <div class="container-xxl text-white" style="background-color: rgb(10,25,47);">
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(10,25,47);">

            <a class="navbar-brand ms-2" href="#">
                <img class="" src="mostaklogo.jpg" alt="Mostak Ahmed" width="200px" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mmb-lg-0 text-white">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="mostak.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">About</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="blog.html">Blog</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success text-white me-2" type="submit">Search</button>
                        <!-- <input class="form-control me-2" type="" placeholder="Search" aria-label="Search"> -->
                        <button class="btn btn-outline-success text-white" type="download">Download</button>
                    </form>
                </div>
            </div>


            <div class="me-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    LogIn
                </button>


            </div>
            <div class="me-2">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Registration
                </button>

                <!-- Modal -->

            </div>
        </nav>

    </div>
    <div class="" id="topp"></div>
    
    <div  class="card shadow-lg mb-3 mx-auto" style="max-width: 1400px; ">
    
        <div class="row g-0">
            <div class="col-md-5">
                <img src="productimg/<?= $prod['images'] ?? "" ?>" alt="Uploading..." class="img-fluid mx-auto object-fit-none border rounded">
                
            </div>
            <!-- d-flex justify-content-between class="position-absolute start-0" -->
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">ID Of The Product: <?= $prod['id'] ?? "" ?></h5>
                    <p class="card-text">Name: <?= $prod['name'] ?? "" ?></p>
                    <p class="card-text">Details: <?= $prod['description'] ?? "" ?></p>
                    <p class="card-text">Stokes: <?= $prod['quantity']?? ""?></p>
                    <p class="card-text"><span> Price: <?= $prod['price']?? ""?></span> <br><span>Discount: <?= $prod['discount']?? ""?></span></p>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Footer with JS link -->
     <?php require "footer.php"; ?>
    <!-- Footer  With JS link-->


   
</body>

</html>