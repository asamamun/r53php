<!-- navbar area start  -->
<nav class="navbar navbar-expand-lg my-4 ">
    <div class="container d-flex align-items-center justify-content-between ">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/images/logo.png" alt="">
            <h1 class="logoName text-center justify-content-center">Moments</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">


            <?php if (!isset($_SESSION['login'])) { ?>
                <a href="login.php" class="btn btn-outline-success ">Login</a>
            <?php } else { ?>

                <div class="dropdown">
                    <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['user'] ? $_SESSION['user'][0] . " " . $_SESSION['user'][1] : "Dashboard" ?>

                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>

                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>

                    </ul>
                </div>
            <?php } ?>
        </div>

    </div>
</nav>
<!-- navbar area end -->