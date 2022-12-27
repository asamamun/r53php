<?php
do{
    echo "hi";
} while(false);
?>
<hr>
<?php
for ($i=0; $i < 100 ; $i++) { 
    echo str_pad($i,$i,"~",STR_PAD_BOTH)."<br>";
}