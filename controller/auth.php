<?php 
require_once __DIR__ ."/../modal/user.php";
require_once __DIR__ ."/../helpers/CSRF.php";

$user = new User();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        if(!isset($_POST['CSRF']) || !validateCsrfToken($_POST['CSRF'])){
             header('view/auth/auth.php');
        }


        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        
        // Attempt registration
        $result = $user->register($username, $email, $password);
        
        if ($result) {
            // Successful registration
            header('Location: ../view/auth/login.php');
            exit();
        } else {
            // Registration failed
            echo'MOCHKIL';
            exit();
        }
    } else {
        // Missing required fields
        header('Location: ../view/auth/register.php');
        exit();
    }
} 
if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['login'])){
   if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $user->login($email, $password);
}
}