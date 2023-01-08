<?php
function deleteDirectory($dir)
{
// open a directory handle
if ($dh = opendir($dir))
{
// Iterate through directory contents
while (($file = readdir ($dh)) != false)
{
// skup files . and ..
if (($file == ".") || ($file == "..")) continue;
if (is_dir($dir . '/' . $file))
// Recursive call to delete subdirectory
deleteDirectory($dir . '/' . $file);
else
// delete file
unlink($dir . '/' . $file);
}
closedir($dh);
rmdir($dir);
}
}

$url = "F:/js2/";
if(is_dir($url))
deleteDirectory($url);