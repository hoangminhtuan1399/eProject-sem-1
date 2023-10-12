<?php
session_start();
$currentPage = $_POST['currentPage'];
$_SESSION['username'] = '';
header('location: ' . $currentPage);