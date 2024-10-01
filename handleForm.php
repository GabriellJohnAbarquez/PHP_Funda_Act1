<?php 
session_start();
if (isset($_SESSION['firstName'])) {
    $_SESSION['error'] = $_SESSION['firstName'] . " is already logged in. Please log out first.";
    header('Location: index.php');
    exit();
}
if (isset($_POST['submitBtn'])) {
    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']);
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;
    header('Location: index.php');
    exit();
}
?>