<?php
class RequestsController{
    private Admin $admin;
    function __construct(){
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
    
   }
}