<?php
//allow CORS
header("Access-Control-Allow-Origin: *");
$a = ['apple', 'orange', 'pineapple', 'https://picsum.photos/200/300'];
header('Content-Type: application/json');
echo json_encode($a);