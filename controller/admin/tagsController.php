<?php
require_once __DIR__ . "/../../modal/tag.php";
require_once __DIR__ . "/../../helpers/CSRF.php";
require_once __DIR__ . "/../../helpers/helper.php";


class TagsController {
      private Tag $tag ;
      private Course $course ;

      public function __construct(){
        $this->tag = new Tag();
        $this->course = new Course();
      }
    public function create() {
            
            if(isset($_POST['tags'])){
               $result = $this->tag->create($_POST['tags']);
               if($result){
                $_SESSION['successTG'] = "Tag created successfully!";
                return true;
               }else{
                $_SESSION['errorTG'] = "Failed to create Tag";
                return false;
               }
            }
            return false;
    }

    public function getAllTags() {
        return $this->tag->getAllTags();
    }

    public function countCourses($tagId) {
        $courses = $this->course->getCoursesByTag($tagId);
        return count($courses);
    }

    public function update() {
        if (isset($_POST['name'])) {
            $tagId = $_POST['tagId'];
            $name = trim($_POST['name']);

      
                $result = $this->tag->update($name,$tagId);
                if($result){
                 $_SESSION['successTG'] = "Tag Updated successfully!";
                 return true;
                }else{
                 $_SESSION['errorTG'] = "Failed to Update Tag";
                 return false;
                }
 
        }
        return false;
    }

    public function delete() {
              $result = $this->tag->delete($_POST['tagId']);
            if ($result) {
                $_SESSION['successTG'] = "tag deleted successfully!";
                return true;
            } else {
                $_SESSION['errorTG'] = "Failed to delete tag";
                return false;
            }
        }
    }

$tag = new TagsController();
if($_SERVER['REQUEST_METHOD'] == 'POST' && validateCsrfToken($_POST['CSRF'])){
    if (isset($_POST['create'])) {
        $tag->create();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['update'])) {
        $tag->update();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['delete'])) {
        $tag->delete();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
$tags = $tag->getAllTags();