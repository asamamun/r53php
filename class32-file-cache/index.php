<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* if(true){
header("location:test.html");
} */
// Check cache and output cached content if available
$cacheKey = md5($_SERVER['REQUEST_URI']);
$cacheExpirationTime = 10; // 1 hour (you can adjust this as needed)

if (file_exists("cache/{$cacheKey}.html") && (time() - filemtime("cache/{$cacheKey}.html")) < $cacheExpirationTime) {
    readfile("cache/{$cacheKey}.html");
    exit;
}
    $html = "<h1>Cache time: ".date("Y-m-d H:i:s a")."</h1>";
$conn = new mysqli("localhost","root","","r53_php");
$conn->set_charset("utf8");
$q = $conn->query("select * from products order by created_at desc");
if($q->num_rows){
    while($row = $q->fetch_assoc()) {
        $html .= "<h3>".$row['name']."</h3>";
    }
}
echo $html;
// Save generated content to cache
file_put_contents("cache/{$cacheKey}.html", $html);
?>
</body>
</html>
<?php
ob_end_flush();
?>