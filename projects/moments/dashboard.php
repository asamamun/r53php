<?php require "auth/auth.php" ?>
<?php 

$file = fopen('users/users.txt', 'r');
$users = [];

while (!feof($file)) {

    $line = fgets($file);
    array_push($users,$line);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dashboard.css" />
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
                    <h3 class="fs-4 mb-3">User List</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                           
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                             if($users){
                                for($i= 0; $i < count($users);$i++){
                                    if($users[$i]){
                                    
                                    list($fname,$lname,$email, $password,$address) = explode(' | ', $users[$i]);

                                    $sl = $i + 1;
                                    echo "
                                    <tr>
                                        <th scope='row'>$sl</th>
                                        <td>$fname $lname </td>
                                        <td>$email</td>
                                        <td>$address</td>
                                    </tr>
                                    
                                    ";
                                    }
                                }
                             }
                            ?>
                              
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>