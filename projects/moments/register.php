<?php 

        $err = false;
        $errMsg = [];

    

        if(isset($_POST['email'])){

            $fname = strip_tags($_POST["fname"]);
            $lname = strip_tags($_POST["lname"]);
            $email = strip_tags($_POST["email"]);
            $pass = strip_tags($_POST["password"]);
            $repass = strip_tags($_POST["rePassword"]);
            $address = strip_tags($_POST["address"]);

            $file = file_get_contents("users/users.txt");
        

            if(preg_match_all("/$email/",$file,$match)){
                $err = true;
                array_push($errMsg,"This email already use!");
            }else{
                if($fname == ""){
                    $err = true;
                    array_push($errMsg,"First Name Is empty!");
                }
                if($lname == ""){
                    $err = true;
                    array_push($errMsg,"Last Name Is empty!");
                }
                if($email == ""){
                    $err = true;
                    array_push($errMsg,"Last Name Is empty!");
                }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $err = true;
                    array_push($errMsg,"Please enter correct Email!");
                }
    
                if(strlen($pass) < "6"){
                    $err = true;
                    array_push($errMsg,"Please enter 6 or more word Password!");
                }
    
                if( $pass != $repass){
                    $err = true;
                    array_push($errMsg,"Password and Re-type Password didn't Match!");
                }
    
                if($address == ""){
                    $err = true;
                    array_push($errMsg,"Please enter your Address!");
                }
                
               if(!$err){
    
                    $text = $fname." | ".$lname." | ".$email." | ".password_hash($pass,PASSWORD_DEFAULT)." | ".$address."\n";
    
                    $fh = fopen("users/users.txt","a");
    
                    fwrite($fh,$text);
                    fclose($fh);
                    header("location: login.php");
               }
            }          
            
                   
        }

?>

<!-- Header Part Include -->
<?php require_once "components/header.php"; ?>

<!-- Navbar part Include  -->
<?php require_once "components/navbar.php"; ?>


<!-- login form area start  -->
<div class="login-form">
    <div class="container">

        <form class="form-area" action="" method="post">
            <h2 class="text-center">Member Register</h2>
            <ul class="errmsg">
                <?php 
                    if($err){

                        foreach ($errMsg as $key => $value) {
                            echo "<li>$value</li>";
                        }

                    }
                ?>
            </ul>
            <hr>
            <div class="form-floating mb-3 mt-5">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="name" required>
                <label for="fname">First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="name" required>
                <label for="lname">First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="rePassword" class="form-control" id="repass" placeholder="Password" required>
                <label for="repass">Confirm Password</label>
            </div>
            <div class="form-floating ">
                <input type="text" name="address" class="form-control" id="add" placeholder="address" required>
                <label for="add">Address</label>
            </div>
            <input class="btn btn-outline-success mt-4" type="submit" name="submit" value="Register">
            <div class="mt-3">
                <p class="text-center"> Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</div>
<!-- login form area end -->







<!-- Footer Part Include -->

<?php require_once "components/footer.php"; ?>