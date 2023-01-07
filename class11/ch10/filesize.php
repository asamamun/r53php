<?php
function BtoGB($b){
    return $b/(1024*1024*1024);
}
echo filesize("IUT.jpg") . " bytes<br>";
echo filesize("file.txt") . " bytes<br>";
?>
<h1>Free Disk space</h1>
<?php
echo "Free space in C drive : ". BtoGB(disk_free_space("C:/")) . " GB <br>";
echo "Free space in D drive : ". BtoGB(disk_free_space("D:/")) . " GB <br>";
echo "Free space in E drive : ". BtoGB(disk_free_space("E:/")) . " GB <br>";
echo "Free space in F drive : ". BtoGB(disk_free_space("F:/")) . " GB <br>";
?>
<h1>Total Disk space</h1>
<?php
echo "Free space in C drive : ". BtoGB(disk_total_space("C:/")) . " GB <br>";
echo "Free space in D drive : ". BtoGB(disk_total_space("D:/")) . " GB <br>";
echo "Free space in E drive : ". BtoGB(disk_total_space("E:/")) . " GB <br>";
echo "Free space in F drive : ". BtoGB(disk_total_space("F:/")) . " GB <br>";