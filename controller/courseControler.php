<?php
include_once __DIR__ ."/../modal/course.php";
class CourseControler{
    private Course $course;
    public function __construct(){
        $this->course = new Course(); 
    }
    public function showDetails(){
        if(isset($_GET["courseId"])){
            $courseId = $_GET["courseId"];
            $course = $this->course->getCourseById($courseId);
            return $course;
    }else{
        $previousPage = $_SERVER['HTTP_REFERER'] ?? '../index.php';
        header("Location: " . $previousPage);
    }
}
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $courseControler = new CourseControler();
    if(isset($_GET['courseId']) && $_GET['action'] == 'show'){
       $course = $courseControler->showDetails();
    }
}