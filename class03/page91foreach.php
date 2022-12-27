<?php
$people = array(
    "Alice" => array(
      "age" => 25,
      "gender" => "female",
      "location" => "New York"
    ),
    "Bob" => array(
      "age" => 30,
      "gender" => "male",
      "location" => "Chicago"
    ),
    "Charlie" => array(
      "age" => 35,
      "gender" => "male",
      "location" => "Los Angeles"
    ),
    "Diana" => array(
      "age" => 40,
      "gender" => "female",
      "location" => "Seattle"
    ),
    "Eve" => array(
      "age" => 45,
      "gender" => "female",
      "location" => "London"
    )
  );
// echo '<a href=""></a>';
  //
  foreach ($people as $k => $v) {
    echo "<h3>".$k." </h3>";
    foreach($v as $kk=>$vv){
        echo "<li>$kk : $vv</li>";
    }
  }
  ?>
<hr>

  <?php

  $links = array(
    "The Apache Web Server" => "www.apache.org",
 "Apress" => "www.apress.com",
 "The PHP Scripting Language" => "www.php.net");
 echo "Online Resources<br>";
foreach($links as $title => $link) {
echo "<a href=\"http://{$link}\">{$title}</a><br>\n";
}
  ?>
 
 
  