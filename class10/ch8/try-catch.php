<?php
try {
    if(is_file("header.php")){
    require "header.php";
    }
    else{
        throw new Exception("header.php File Not Found!!!");
        
    }
} catch (Exception $e) {
    // echo "Error (File: ".$e->getFile().", line ". $e->getLine()."): ".$e->getMessage();
    echo $e->getMessage();
}
finally{
    echo "<p>finally block executed</p>";
}

?>

<hr>
<?php
echo "<h1>testing exception handling</h1>";
?>