<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Foreach example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script>
        function imgError(image) {
    image.onerror = "";
    image.src = "not-found.webp";
    return true;
}
    </script>
</head>
<body>
<div class="container">
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Size</th>
        </tr>
    

    <?php 
    require "products.php"; 
    foreach ($products as $p) {
echo "<tr>";
echo "<td>".$p['name']."</td>";
echo "<td>".$p['description']."</td>";
echo "<td><img onerror='imgError(this);' class='img-fluid' src='".$p['image']."'/></td>";
echo "<td>".$p['price']."</td>";
echo "<td>"." "."</td>";
echo "</tr>";
        
    }
    
    ?>
    </table>
    </div>

</body>
</html>