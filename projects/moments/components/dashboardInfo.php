<?php

$file = fopen('users/users.txt', 'r');
$users = [];

$images = '';

while (!feof($file)) {

    $line = fgets($file);
    array_push($users, $line);
}

$dir = "uploadFiles/";
if (is_dir($dir)) {
    $files = scandir($dir);

    $images = count($files) - 2;
}

?>
<?php
$dir = "uploadFiles/";
$myImages = [];
$extension = array('jpeg', 'jpg', 'gif', 'png', 'webp');
if (is_dir($dir)) {
    $files = scandir($dir);
    $user = $_SESSION['user'][2];

    for ($i = 0; $i < count($files); $i++) {

        if ($files[$i] != "." && $files[$i] != "..") {
            // preg_match('/$user/',$files[$i],$res);


            $result = explode("_", $files[$i]);
            if (in_array($user, $result)) {
                array_push($myImages, $files[$i]);
            }
        }
    }
}

?>

<div class="row g-3 my-2">
    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?= $images ?? 0 ?></h3>
                <p class="fs-5"> Total Image</p>
            </div>
            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?php echo count($myImages) ?? "0" ?></h3>
                <p class="fs-5">My Images</p>
            </div>
            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?= count($users) - 1?? "0" ?></h3>
                <p class="fs-5">Total User</p>
            </div>
            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

</div>