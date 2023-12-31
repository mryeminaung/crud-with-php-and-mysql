<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'jd@mail.com' and $password === 'jd123') {
    $_SESSION['user'] = ['username' => 'John Doe'];
    header('location: ../profile.php');
} else {
    header('location: ../index.php?incorrect=1');
}
