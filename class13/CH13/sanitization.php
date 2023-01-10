<?php
$userInput = "Love the site. E-mail me at <a href='http://www.example.com'>Spammer</a>.";
echo filter_var($userInput, FILTER_SANITIZE_STRING);