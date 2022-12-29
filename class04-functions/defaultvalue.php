<?php
function welcome($name,$t="Jonab"){
    return "<h3>Welcome $t $name</h3>";
}

echo welcome("Mango","Mr");
echo welcome("Tomato","Mrs");
echo welcome("Jalal","Mr");