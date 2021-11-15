<?php
include('UserController.php');
$userController = new UserController();
$users = $userController->index();

$request = new StoreRequest('maks', 'rob', 'male', '123');
$request->validate();
var_dump($users);


?>