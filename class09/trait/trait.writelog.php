<?php
trait Writelog {
    function writeLog($message) {
    file_put_contents("log.txt", date("Y-m-d H:i:s a").":".$message . "\n", FILE_APPEND);
    }
   }