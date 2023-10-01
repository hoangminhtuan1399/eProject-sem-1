<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); //
}
?>
<a href="home.php">HOME</a>