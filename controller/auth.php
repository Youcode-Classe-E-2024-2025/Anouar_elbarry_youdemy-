<?php 
require_once __DIR__ ."/../modal/user.php";
require_once __DIR__ ."/../helpers/CSRF.php";
session_start();

$user = new User();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        if(!isset($_POST['CSRF']) || !validateCsrfToken($_POST['CSRF'])){
             header('Location: ../view/auth/auth.php');
             exit();
        }

        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        
        // Attempt registration
        $userId = $user->register($username, $email, $password);
        
        if (is_numeric($userId)) {
           $userData = $user->getUserById($userId);
           if ($userData) {
               $_SESSION['userId'] = $userData['id'];
               $_SESSION['username'] = $userData['username'];
               $_SESSION['email'] = $userData['email'];
               $_SESSION['role'] = $userData['role'];
               
               if ($userData['role'] === User::ROLE_ADMIN) {
                header('Location: ../view/auth/auth.php');
               } else {
                   header('Location: ../view/components/select-role.php');
               }
               exit();
           }
        }
        // Registration failed
        $_SESSION['error'] = "Registration failed. Please try again.";
        header('Location: ../view/auth/auth.php');
        exit();
    } 
    // Missing required fields
    $_SESSION['error'] = "All fields are required";
    header('Location: ../view/auth/auth.php');
    exit();
} 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
   if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password']; // Don't hash here, login method handles verification
        
        $userData = $user->login($email, $password);
        if ($userData) {
            $_SESSION['userId'] = $userData['id'];
            $_SESSION['username'] = $userData['username'];
            $_SESSION['email'] = $userData['email'];
            $_SESSION['role'] = $userData['role'];

            switch ($userData['role']) {
                case User::ROLE_ADMIN:
                    header('Location: ../view/admin/dashboard.php');
                    break;
                case User::ROLE_TEACHER:
                    header('Location: ../view/teacher/dashboard.php');
                    break;
                case User::ROLE_STUDENT:
                    header('Location: ../view/student/dashboard.php');
                    break;
                default:
                    header('Location: ../view/components/select-role.php');
            }
            exit();
        }
        $_SESSION['error'] = "Invalid email or password";
        header('Location: ../view/auth/auth.php');
        exit();
    }
    $_SESSION['error'] = "All fields are required";
    header('Location: ../view/auth/auth.php');
    exit();
}