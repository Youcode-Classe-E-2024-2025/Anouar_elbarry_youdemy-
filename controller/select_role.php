<?php

require_once __DIR__ ."/../modal/admin.php";
class Select_role{
    private Admin $admin;
    public function __construct(){
        session_start();
        $this->admin = new Admin();
    }

    public function processRoleSelection(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!isset($_SESSION['userId'])) {
                header("Location: ../view/auth/auth.php");
                exit();
            }
        
            $userId = $_SESSION['userId'];
            
            if (isset($_POST["role"])) {   
                $success = false;
                
                switch($_POST["role"]) {
                    case "student": 
                        $success = $this->admin->updateRole($userId, User::ROLE_STUDENT);
                        if ($success) {
                            header("Location: ../view/auth/auth.php");
                        }
                        break;
                        
                    case "teacher": 
                        $success = $this->admin->updateRole($userId, User::ROLE_TEACHER);
                        if ($success) {
                            $this->admin->updateStatus($userId, User::PENDING);
                            header("Location: ../view/auth/auth.php");
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
    }
}

$selectRole = new Select_role();
$selectRole->processRoleSelection();