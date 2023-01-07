<?php
 $url = "sales@example.com";
 echo strstr($url, "@");//@example.com
 echo ltrim(strstr($url, "@"),"@");//example.com
?>