<?php
$file = "file.txt";
echo "File created: ".date("m-d-y g:i:sa", filectime($file)) . "<br>";
echo "File last updated: ".date("m-d-y g:i:sa", filemtime($file)) . "<br>";
echo "File last accessed: ".date("m-d-y g:i:sa", fileatime($file)) . "<br>";
