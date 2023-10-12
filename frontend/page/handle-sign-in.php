<?php
session_start();
include_once '../../backend/api/User/UserController.class.php';
$UserController = new UserController();
$username = $_POST['username'];
$password = $_POST['password'];
$currentPage = $_POST['currentPage'];

$result = $UserController->signIn($username, $password);
$success = count($result) > 0;
if ($success) {
    $_SESSION['username'] = $username;
    $_SESSION['signIn'] = 'success';
} else {
    $_SESSION['signIn'] = 'fail';
}
header('location: ' . $currentPage);