<?php
include 'connection.php';
$pagenum = isset($_GET['page'])? $_GET['page']:"1";
$perpage = 10;
$index = ($pagenum-1) *$perpage;

$tot = "select id from products where 1";
$totr = $con->query($tot);
$totalrecord = $totr->num_rows;
$totalpage = ceil($totalrecord/$perpage);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    #text {
        display: block;/* or inline-block */
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 3.6em;
  line-height: 1.8em;
}
</style>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="add-product.php" class="text-decoration-none text-light"> Add Product</a>

        </button>
        <div class="table-responsive">
        <table class="table">
            <caption>Total records <?= $totalrecord ?></caption>
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <!-- <th scope="col">Category</th>
                    <th scope="col">Sub-Category</th> -->
                    <th scope="col">Name</th>
                    <!-- <th scope="col">Description </th> -->
                    <th scope="col">Sku </th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Discount</th>
                    <!-- <th scope="col">Date </th> -->

                </tr>
            </thead>
            <tbody>
                <?php


                $sql = "select * from `products` where 1 limit $index,$perpage";
                $result = $con->query($sql);
                if ($result) {

                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $cat = $row['category_id'];
                        $scat = $row['subcategory_id'];
                        $name = $row['name'];
                        $desc = $row['description'];
                        $sku = $row['sku'];
                        $image = $row['images'];
                        $price = $row['price'];
                        $quantity = $row['quantity'];
                        $discount = $row['discount'];
                        $date = $row['created_at'];
                        echo '<tr>
    <th scope="row">' . $id . '</th>
    <!--<td>' . $cat . '</td>
    <td>' . $scat . '</td>-->
    <td>' . $name . '</td>
    <!--td id="text">' . $desc . '</td-->
    <td>' . $sku . '</td>
    <td><img src="productimg/' . $image . '" width="50px"/></td>
    <td>' . $price . '</td>
    <td>' . $quantity . '</td>
    <td>' . $discount . '</td>
    <!--td>' . $date . '</td-->
    <td>
        <a class="btn btn-outline-primary  text-decoration-none" href="update.php?updateid=' . $id . '">Edit</a>
   
    
        <a class="btn btn-outline-danger  text-decoration-none" href="delete.php?deleteid=' . $id . '">Delete</a>
   
    <a class="btn btn-outline-info  text-decoration-none" href="product-details.php?id='.$id.'" target="_blank">View</a>
    </td>
  </tr>';
                    }
                }

                ?>

            </tbody>
        </table>
        <!-- pagination -->
        <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="?page=1">Start</a>
    </li>
    <li class="page-item <?= ($pagenum<=1)?'disabled':''; ?>">
      <a class="page-link" href="?page=<?= $pagenum-1;?>">Previous</a>
    </li>
    <?php
    for ($i=1; $i <=$totalpage ; $i++) {
        if(abs($i - $pagenum) < 5){ 
       echo '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
        }
    }
    ?>
    <li class="page-item <?= ($pagenum==$totalpage)?'disabled':''; ?>">
      <a class="page-link" href="?page=<?= $pagenum+1;?>">Next</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="?page=<?= $totalpage?>">End</a>
    </li>
  </ul>
</nav>
        <!-- pagination end -->
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>