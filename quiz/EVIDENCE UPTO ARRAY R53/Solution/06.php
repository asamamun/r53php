<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $stid = $_POST['stid'];
        $exid = $_POST['exid'];
        $mid = $_POST['mm'];
        $final = $_POST['fm'];

        $fh = fopen("obtainmarks.csv", "at");
        fwrite($fh, $stid . "," .$exid . "," . $mid . "," . $final . "\n");
        echo "<h3>Submitted Successfully</h3>";
        fclose($fh);
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="stid"><br>
        <label for="">User ID</label><br><br>

        <input type="text" name="exid"><br>
        <label for="">Exam ID</label><br><br>

        <input type="text" name="mm"><br>
        <label for="">Mid Marks</label><br><br>

        <input type="text" name="fm"><br>
        <label for="">Final Marks</label><br><br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>