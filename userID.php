<?php 

require ('UserConverter.php');

$converter = new UserConverter();
$converter->convert('users.json');

?>