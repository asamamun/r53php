<?php

// get catid grom get method and run sql queries to show the film name of that categories
$cid = $_GET['catid'];

/* select film.*, category.name
from film,category,film_category
where film.film_id=film_category.film_id and category.category_id = film_category.category_id and category.category_id=$cid; */