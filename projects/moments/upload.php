<?php require "auth/auth.php" ?>

<?php 

$msg = '';

if(isset($_POST['submit'])){
    $allowed = array("image/jpeg","image/jpg", "image/gif", "image/png",'image/webp');

    $total = count($_FILES['file']['name']);

    for( $i=0 ; $i < $total ; $i++ ) {

        //Get the temp file path
        $tmpFilePath = $_FILES['file']['tmp_name'][$i];

   
        //Make sure we have a file path
        if (in_array($_FILES['file']['type'][$i],$allowed) && $tmpFilePath != ""){

          //Setup our new file path
          $newFilePath = "uploadFiles/" . $_SESSION['user'][2]."_".time().$_FILES['file']['name'][$i];
      
          //Upload the file into the temp dir
          move_uploaded_file($tmpFilePath, $newFilePath);
      
          $msg = "Upload Successfully";
          
        }else{
            $msg = "Error! Please try again.";
        }
      }
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
                    <h3 class="fs-4 mb-3">Upload Image</h3>
                    <div id="output"></div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php  echo  "<h3 class='text-success'>$msg</h3>" ?>
                        
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Choose Images</label>
                            <input onchange="uploadImage(event)" class="form-control" name="file[]" type="file" id="formFileMultiple" multiple>
                        </div>
                        <input class="btn btn-outline-success" type="submit" name="submit" value="Upload">
                    </form>
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
    <script>
        let output = document.getElementById("output");

        let imageArray = [];

        // Upload image fx
        function uploadImage(e) {
            let image = e.target.files;

            for (let i = 0; i < image.length; i++) {
                imageArray.push(image[i]);
            }
            displayImage();
        }

        // Display show fx
        function displayImage() {

            let images = "";

            imageArray.forEach((img, i) => {
                images += `

            <div class="image-wrap">
                <img onclick="deleteImage(${i})" src="${URL.createObjectURL(img)}" >
            </div>
        
        `
            })

            output.innerHTML = images;

        }
    </script>
</body>

</html>