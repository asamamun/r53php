<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div class="container">
    <h1 id="title">Please select a date to calculate your age</h1>
    <form action="" method="post">
        <input type="date" name="dob" required>
        <input type="test1" name="n">
        <input id="calc" type="submit" name="calc" value="Calculate Age">
    </form>
    <p id="result">
 <?php
if(isset($_POST['dob'])){
var_dump($_POST);
}
?>
</p>
</div>
 </body>
 </html>