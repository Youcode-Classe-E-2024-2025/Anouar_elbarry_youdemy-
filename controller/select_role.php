<?php
session_start();
require_once __DIR__ ."/../modal/user.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_SESSION['userId'])) {
        header("Location: ../view/auth/auth.php");
        exit();
    }

    $user = new User();
    $userId = $_SESSION['userId'];
    
    if (isset($_POST["role"])) {   
        $success = false;
        
        switch($_POST["role"]) {
            case "student": 
                $success = $user->updateRole($userId, User::ROLE_STUDENT);
                if ($success) {
                    $_SESSION['role'] = User::ROLE_STUDENT;
                    header("Location: ../view/student/dashboard.php");
                }
                break;
                
            case "teacher": 
                $success = $user->updateRole($userId, User::ROLE_TEACHER);
                if ($success) {
                    $user->updateStatus($userId, User::PENDING);
                    $_SESSION['role'] = User::ROLE_TEACHER;
                    header("Location: ../index.php");
                }
                break;
                
            default:
                header("Location: ../view/components/select-role.php");
                exit();
        }
        
        if (!$success) {
            $_SESSION['error'] = "Failed to update role. Please try again.";
            header("Location: ../view/components/select-role.php");
        }
        exit();
    }
    
    $_SESSION['error'] = "Please select a role";
    header("Location: ../view/components/select-role.php");
    exit();
}