<?php 

$db = @mysqli_connect('localhost', 'root', 'root', 'gb') or die('damn');
mysqli_set_charset($db, "utf8") or die('utf');