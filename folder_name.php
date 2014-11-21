<?php
//get url location 
$directory = dirname($_SERVER['PHP_SELF']);
//split array by "/"
$directory = explode("/", $directory);
//get current folder name
$directory = $directory[count($directory)-1];
?>