<?php session_start() ?>

<?php
$dir = "uploadFiles/";
$extension = array('jpeg', 'jpg', 'gif', 'png', 'webp');
if (is_dir($dir)) {
    $files = scandir($dir);

    for ($i = 0; $i < count($files); $i++) {
        if ($files[$i] != "." && $files[$i] != "..") {
            $image_array[] = $files[$i];
        }
    }
}

$count = 0;
$limit = 9;
$totalPages = ceil(count($image_array) / $limit);
$pageNumber = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$startPage = ($pageNumber - 1) * $limit;

?>

<!-- Header Part Include -->
<?php require_once "components/header.php"; ?>

<!-- Navbar part Include  -->
<?php require_once "components/navbar.php"; ?>

<!-- carousel area start  -->
<div id="carousel-area">
    <div class="container">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="assets/images/banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner8.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner12.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner13.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner14.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/banner15.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- carousel area end  -->


<!-- gallery area start  -->
<div id="gallery-area">
    <div class="container mt-5">
        <h1 class="gallery-heading">Image Gallery</h1>
        <hr>
        <div class="row mt-4 gy-4 ">
            <?php for ($i = $startPage; $i < count($image_array); $i++) {
                $count++ ?>

                <div class='  col-lg-4 col-md-6'>
                    <div class='single-image'>
                        <img onclick='galleryOpen(event)' src='<?= $dir . $image_array[$i] ?>'>
                    </div>
                </div>

            <?php if ($count == $limit) break;
            } ?>

        </div>
    </div>
</div>
<!-- gallery area end  -->

<!-- pagination area start  -->
<div class="container mt-4 d-flex justify-content-center">
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

<!-- modal area start  -->
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











<!-- Footer Part Include -->

<?php require_once "components/footer.php"; ?>