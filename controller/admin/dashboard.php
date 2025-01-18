<?php 
require_once __DIR__ . "/../../modal/admin.php";  
require_once __DIR__ . "/../../modal/course.php";  
require_once __DIR__ . "/../../modal/tag.php";  
require_once __DIR__ . "/../../modal/category.php";  
class dashboard{
    private Admin $admin;
    private Course $course;
    private Category $category;
    private Tag $tag;

    public function __construct(){
        $this->admin = new Admin();
        $this->course = new Course();
        $this->category = new Category();
        $this->tag = new Tag();
    }

    public function getTotalUsers(){
        $users = $this->admin->getAllusers();
        return count($users);
    }
    public function getTotalTeachers(){
        $teachers = $this->admin->getteachersByStatus();
        return count($teachers);
    }
    public function getActiveCourses(){
        $archivedCourses = $this->course->getAllCourses(Course::published);
        return count($archivedCourses);
    }
    public function getCategories(){
        return  $this->category->getAllCategories();
    }
    public function getTags(){
        $tags = $this->tag->getAllTags();
        return count($tags);
    }

    public function getTotalCategories(){
        return count($this->category->getAllCategories()) ;
    }


}

$statistics = new dashboard();
$countUsers = $statistics->getTotalUsers();
$countTeachers = $statistics->getTotalTeachers();
$countCourses = $statistics->getActiveCourses();
$countCategories = $statistics->getTotalCategories();
$countTags = $statistics->getTags();