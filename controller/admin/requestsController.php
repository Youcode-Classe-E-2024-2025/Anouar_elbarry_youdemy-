<?php
require_once __DIR__ ."/../../modal/admin.php";
class RequestsController{
    private Admin $admin;
    function __construct(){
        session_start();
        $this->admin = new Admin();
}
   public function accept(){
       if(isset($_GET["id"])){
        $id = $_GET["id"];
        $result = $this->admin->validateTeacher($id);
        if($result){
            $_SESSION['successRE'] = 'the teacher accepted succesfuly';
        }else{
            $_SESSION['errorRE'] = "no teacher with this id";
        }
        header("location: ../../view/admin/requests.php");
       }
   }
   public function reject(){
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $result = $this->admin->rejectTeacher($id);
        if($result){
            $_SESSION['successRE'] = 'the teacher Rejected succesfuly';
        }else{
            $_SESSION['errorRE'] = "no teacher with this id";
        }
        header("location: ../../view/admin/requests.php");
       }
   }
   public function getTeachers(){
    $teachers = $this->admin->getteachersByStatus();
    return $teachers;
   }
   public function getAllrequests(){
    $requests = $this->admin->getteachersByStatus('PENDING');
    return count($requests);
   }
}
$request = new RequestsController();
if(isset($_GET["action"]) && $_GET["action"] == "Accept"){
    $request->accept();
}
if(isset($_GET["action"]) && $_GET["action"] == "Reject"){
    $request->reject() ;
}

$teachers = $request->getTeachers();
$requests = $request->getAllrequests();