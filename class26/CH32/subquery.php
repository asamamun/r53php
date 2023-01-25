<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <li>select * from film where title='AFFAIR PREJUDICE'</li>
    <li>select rating from film where title='AFFAIR PREJUDICE'</li>
    <li>select * from film where rating=(select rating from film where title='AFFAIR PREJUDICE')</li>
<li>
    <?php
    $sq = "SELECT AVG(`price`) as average_price FROM `products` WHERE 1";
    $mq = "select * from products where price > ($sq)";
    echo $mq;
    ?>
    </li>
    <li>SELECT AVG(`price`) as average_price FROM `products` WHERE 1</li>
    <li>select * from products where price > (SELECT AVG(`price`) as average_price FROM `products` WHERE 1)</li>
    </ul>
<h1>exists</h1>
show all films where film_id is 1,9,20,30,35

<li>select * from film where film_id=1 or film_id=9 ..... or film_id=35</li>
<li>select * from film where film_id in(1,9,20,30,35)</li>
 <li>   select * from language where language_id in (select distinct language_id from film where 1)</li>
 <li>SELECT distinct `language_id` FROM `film` WHERE 1;</li>

</body>
</html>