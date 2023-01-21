<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Project</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

    <style>
        #submit {
            /* background-color: #719efe; */
            border-radius: 10px;
            border: 0px solid;
            padding-left: 80px;
            padding-right: 80px;
            font-size: large;
        }

        #submit:hover {
            background-color: #719efe;
        }

        #formm {
            margin-top: 100px;

        }

        .spanf {
            font-family: serif;
            color: #ff8888;
            font-size: 11pt;
        }

        #registration {
            background-color: rgba(255, 166, 0, 0.695);
            color: aliceblue;
            width: 600px;
        }

        .bgc-orange {
            background-color: rgba(255, 166, 0, 0.695);
        }
    </style>

</head>

<body style="background-image: url(assets/person-using-laptop_53876-95246.jpg);">

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top">

            <a class="navbar-brand ms-2" href="#">
                <img class="" src="assets/mostaklogo2-removebg-preview.png" alt="Mostak Ahmed" width="200px" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container-fluid">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  text-color" aria-current="page" href="/socialmedia.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-color" href="#">Job Network</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Netorks
                            </a>
                            <ul class="dropdown-menu text-color">
                                <li><a class="dropdown-item text-color" href="#">Consultant of IsDB</a></li>
                                <li><a class="dropdown-item text-color" href="#"> Teacher of IsDB</a></li>
                                <li><a class="dropdown-item text-color" href="#"> Ex-Student of IsDB</a></li>
                                <li><a class="dropdown-item text-color" href="#">Student of IsDB</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-color" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-color">Notification</a>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-outline-warning text-white " href="#">Log In</a>
            </div>




        </nav>

    </div>

    <input type="text" media="displa">
    <div class="container-xxl" id="formm">
        <div class="row">


            <div class="shadow-lg p-3 mx-auto mb-5 rounded" id="registration">
                <form class="form-horizontal  mx-auto" method="post">
                    <h4 class="text-center my-4">Input The Correct Information</h4>
                    <div class="form-group row mb-2">
                        <label class="control-label col-sm-4" for="name">User Name:</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" autocomplete="off" required>
                            <div class="spanf" id="nameerror"></div>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="control-label col-sm-4" for="email">Email:</label>
                        <div class="col-sm">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            <div class="spanf" id="emailerror"></div>
                        </div>
                    </div>


                    <div class="form-group row mb-2">
                        <label class="control-label col-sm-4" for="number">Phone Number:</label>
                        <div class="col-sm">
                            <input class="form-control" type="number" name="phone" id="number" required>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="control-label col-sm-4" for="pwd">Password:</label>
                        <div class="col-sm">
                            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pwd" required>
                            <div class="spanf" id="passerror"></div>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="control-label col-sm-4" for="rpass">Re-Type Password:</label>
                        <div class="col-sm">
                            <input type="password" autocomplete="off" class="form-control" id="rpass" placeholder="Enter password" name="rpwd" required>
                            <div class="spanf" id="rpasserror"></div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox" class="check" name="remember" required> Accept all terms
                                    and
                                    conditions.</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <div class="col-sm-offset-2 col-sm-10 mx-auto text-center">
                            <input id="submit" class="bg-outline-primary" name="submit" type="submit" value="Sign Up">
                            <!-- <button onclick="emailCheck()" type="button" class="btn btn-default bg-primary px-4">Submit</button> -->
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {


                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['pwd'];
                    $rpass = $_POST['rpwd'];

                    $fileWrite = "$name|$email|Phone:$phone|Password:$password ";
                    $submissions1 = file_get_contents("form-data.txt");
                    $explor = explode("|", $submissions1);
                    // var_dump($explor) ;

                    // if (strpos($submissions,$name ."|".$email) !== false) {
                    //     echo "You have already submitted this information. Please try again with different name and password.";
                    // } else {
                    //     file_put_contents("form-data.txt", $fileWrite . "\n", FILE_APPEND);
                    // }
                }

                ?>
            </div>
        </div>
        <p class="text-center">Register and Sign In in the website. Thank You</p>
    </div>


    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid my-5">
        <!-- Footer -->
        <footer class="text-center bgc-orange text-lg-start text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Company name
                            </h6>
                            <p>
                                Web design and development is an umbrella term that describes the process of creating a
                                website. Like the name suggests, it involves two major skill sets: web design and web
                                development. Web design determines the look and feel of a website, while web development
                                determines how it functions.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                            <p>
                                <a class="text-white">Bootstrap</a>
                            </p>
                            <p>
                                <a class="text-white">WordPress</a>
                            </p>
                            <p>
                                <a class="text-white">React</a>
                            </p>
                            <p>
                                <a class="text-white">Bootstrap Angular</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Shenpara Parbata,Mirpur-10, Dhaka-1216 </p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                mostakidb@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> +8801752243665 </p>
                            <p><i class="fas fa-print me-3"></i> + 01000000000 </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Copyright:
                <a class="text-white" href="#">Mostak Ahmed</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/script.js"></script>

</body>

</html>