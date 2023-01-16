<?php require "auth/auth.php" ?>
<?php
$dir = "uploadFiles/";
$extension = array('jpeg', 'jpg', 'gif', 'png', 'webp');
if (is_dir($dir)) {
    $files = scandir($dir);
    $user = $_SESSION['user'][2];

    for ($i = 0; $i < count($files); $i++) {

        if ($files[$i] != "." && $files[$i] != "..") {
            // preg_match('/$user/',$files[$i],$res);


            $result = explode("_", $files[$i]);
            if (in_array($user, $result)) {

                $image_array[] = $files[$i];
                // uploadFiles/$files[$i]

            }
        }
    }
}

$count = 0;
$limit = 6;
$totalPages = ceil(count($image_array) / $limit);
$pageNumber = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$startPage = ($pageNumber - 1) * $limit;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dashboard.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title> Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- sidebar include  -->
        <?php require_once "components/sidebar.php" ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php require "components/dashnav.php" ?>
            <div class="container-fluid px-4">
                <!-- dashboard info include -->
                <?php require_once "components/dashboardInfo.php" ?>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">My Image List</h3>

                    <!-- gallery area start  -->
                    <div id="gallery-area">
                        <div class="container mt-5">

                            <div class="row mt-4 gy-4">
                                <?php for ($i = $startPage; $i < count($image_array); $i++) {
                                    $count++ ?>

                                    <div class='col-lg-4 col-md-6'>
                                        <div class='single-image'>
                                            <img onclick='galleryOpen(event)' src='uploadFiles/<?= $image_array[$i] ?>'>
                                            <a href="deleteFile.php?imageName=<?=$image_array[$i]?>" class="delete-btn">
                                            <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>   
                                                                         
                                    </div>
                                 
                                <?php if ($count == $limit) break;
                                } ?>

                            </div>
                        </div>
                    </div>
                    <!-- gallery area end  -->



                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <!-- pagination area start  -->
    <div class="container mb-5 mt-2 d-flex justify-content-center">
        <nav aria-label="...">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link <?= $pageNumber <= 1 ? "disabled" : "" ?> " href="?page=<?= ($pageNumber - 1) ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                        <li class="page-item"><a class="page-link <?= $pageNumber == $i ?  "active" : "" ?> " href="<?php echo "?page=$i" ?>"><?= $i ?? "" ?></a></li>
                    <?php } ?>
                    <li class="page-item">
                        <a class="page-link <?= $pageNumber == $totalPages ? "disabled" : "" ?>" href="?page=<?= ($pageNumber + 1) ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </nav>
    </div>
    <!-- pagination area end -->

    <!-- Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-modal" src="" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- modal area end  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="assets/js/main.js"></script>
</body>

</html>