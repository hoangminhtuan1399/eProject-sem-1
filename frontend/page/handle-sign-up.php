<?php
session_start();
include_once '../../backend/api/User/UserController.class.php';
$UserController = new UserController();
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$currentPage = $_POST['currentPage'];

$result = $UserController->signUp($username, $password, $email);
if (!$result) {
    $_SESSION['signUp'] = 'fail';
} else {
    $_SESSION['signUp'] = 'success';
    $_SESSION['username'] = $username;
}
header('location: ' . $currentPage);