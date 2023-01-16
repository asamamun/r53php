<?php

session_start();

$err = false;
$user = [];



if (isset($_POST['submit'])) {

    $mail = strip_tags($_POST["email"]);
    $pass = strip_tags($_POST["password"]);
    $msg = "";
    // Check input 
    if ($mail == "") {
        $err = true;
        array_push($errMsg, "Last Name Is empty!");
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $err = true;
        array_push($errMsg, "Please enter correct Email!");
    }

    if (strlen($pass) < "6") {
        $err = true;
        array_push($errMsg, "Please enter 6 or more word Password!");
    }
    // Check File
    if (!$err) {
        $file = fopen('users/users.txt', 'r');

        while (!feof($file)) {

            $line = fgets($file);

            if ($line) {
                list($fname, $lname, $email, $password, $address) = explode(' | ', $line);

                if (trim($email) == $mail && password_verify($pass, $password)) {
                    echo $email . ":" . $password;
                    // array_push($user,$fname,$lname,$email,$address);
                    $_SESSION["login"] = "true";
                    $_SESSION['user'] = array();
                    array_push($_SESSION['user'], $fname, $lname, $email, $address);
                    header('Location:index.php');
                    break;
                }else{
                    $err = true;
                }
            }
        }
        fclose($file);
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
            <h2 class="text-center">Member Login</h2>
            <ul class="errmsg">
                <?php
                if ($err) {
                   echo " <li>Email and Password didn't match! </li>  ";               
                }else{
                    echo ""; 
                }
                ?>
            </ul>
            <hr>
            <div class="form-floating mb-3 mt-5">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <input class="btn btn-outline-success mt-4" type="submit" name="submit" value="Login">
            <div class="mt-3">
                <p class="text-center">New to here? <a href="register.php">Create an account</a></p>
            </div>
        </form>
    </div>
</div>
<!-- login form area end -->







<!-- Footer Part Include -->

<?php require_once "components/footer.php"; ?>