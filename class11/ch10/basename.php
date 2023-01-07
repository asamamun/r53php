<?php
$url = "http://localhost/Round53/php/r53php/class11/ch10/basename.php";
echo basename($url) ." <br>";
echo dirname($url) ." <br>";
$arr = pathinfo($url);//returns array
var_dump($arr);
?>
<pre>
• Directory name: /home/www/htdocs/book/chapter10
• Base name: index.html
• File extension: html
• File name: index
</pre>
<h1>realpath</h1>
<?php
$filename = "../Hw.regexp/count_chars.php";//relative path
echo realpath($filename);//real path, absolute path
?>