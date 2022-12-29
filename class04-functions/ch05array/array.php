<?php
$a = array();
$a = [];
//numeric array example
$array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
//associative array example
$array2 = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
];
$states = [
    "OH" => "Ohio", 
    "PA" => "Pennsylvania", 
    "NY" => "New York"
];
echo $array[2];
echo "<br>";
echo $array2['key2'];
$carBrands = [12 => "Rolls Royce", "Bentley", "Porche"];
print_r($carBrands);
echo $states['PA'];
?>
<hr>
<?php
//multidimensional array
$states = [
    "Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
    "Nebraska" => array("population" => "1,711,263", "capital" => "Omaha")
   ];
   echo $states['Ohio']['capital'];
   ?>
   <hr>
   <?php
   $languages = array("English", "Gaelic", "Spanish");
   list($e,,$s) = $languages;
   echo $e . " " . $s;
