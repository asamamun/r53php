<?php
function __myautoload($class) {
    require_once("class.{$class}.php");
}

__myautoload("p");
__myautoload("r");
__myautoload("l");
