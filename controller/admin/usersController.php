<?php
ob_start();
include_once __DIR__ . "/../../modal/admin.php";
class UsersController{
     private Admin $admin;
     public function __construct(){
        session_start();
        $this->admin = new Admin();
     }

     public function manageUser($action){
       if(isset($_POST["userId"])){
         $userId = $_POST["userId"];
         return $this->admin->manageUsers($action,$userId);
        }
        return false;
     }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['action']))){
    $usersController = new UsersController();
    if($usersController->manageUser($_POST['action'])){
        $action = $_POST['action'];
        $_SESSION["successUS"] = "the user has been $action successfuly";
        $redirectUrl = "/view/admin/users.php";
        header("Location: " . $redirectUrl, true, 302);
        exit();
    } else {
        $_SESSION["errorUS"] = "Failed to perform the action. Please try again.";
        $redirectUrl = "/view/admin/users.php";
        header("Location: " . $redirectUrl, true, 302);
        exit();
    }
}
ob_end_flush();