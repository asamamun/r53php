<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="">User Name</label>
            <input type="text" name="uname" class="form-control p-2">

            <label for="">Email</label>
            <input type="text" name="email" class="form-control p-2">

            <input type="submit" name="sub" value="Validate" class="form-control btn-primary p-2 my-2">
        </form>
        <?php
        if (isset($_POST['sub'])) {
            $user = $_POST['uname'];
            $email = $_POST['email'];

            $userLength = strlen($user);
            if ($userLength < 4 || $userLength > 8) {
                echo "<h3 class='text-danger'>Username must be between 4 to 8 characters</h3>";
            } else {
                echo "<h3>Valid Username</h3>";
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<h3>Valid email</h3>";
            } else {
                echo "<h3 class='text-danger'>Invalid email</h3>";
            }
        }
        ?>
    </div>
</body>

</html>