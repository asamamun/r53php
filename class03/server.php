<pre>
<?php
print_r($_SERVER);
?>
</pre>
<?php
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
