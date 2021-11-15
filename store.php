<?php
include('UserController.php');
include('StoreRequest.php');

$request = new StoreRequest( 
    $_POST['userName'],
    $_POST['userSurname'],
    $_POST['gender'],
    $_POST['birthDay']
);

$userController = new UserController();
$userController->store($request);

header('Location: ' . $_SERVER['HTTP_REFERER']);

exit();

?>