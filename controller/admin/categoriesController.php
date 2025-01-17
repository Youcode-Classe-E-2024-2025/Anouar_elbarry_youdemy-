<?php 
require_once __DIR__ . "/../../modal/category.php";

class CategoriesController{
    private Category $category;
    private Course $course;

    public function __construct(){
        session_start();
        $this->category = new Category();
    }

    public function getCategories(){
        return  $this->category->getAllCategories();
    }

    public function deleteCategory($categoryId){
      return  $this->category->delete($categoryId);
    }
    public function creatCategory($name){
        return $this->category->create($name);
    }
    public function updateCategory($categoryId,$name){
      return  $this->category->update($categoryId,$name);
    }

    public function countCoursesBycategory($categoryId){
        $courses = $this->course->getCoursesByCategory($categoryId);
        return count($courses);
    }
}
$categoryController = new CategoriesController();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if (!isset($_POST['CSRF']) || !validateCsrfToken($_POST['CSRF'])) {
        header('Location: ../view/auth/auth.php');
        exit();
    }
   
if(isset($_POST['creat'])){
      if(isset($_POST['name'])){
        
        $newCategory = $categoryController->creatCategory($_POST['name']);
        if($newCategory){
            $_SESSION['successCAT'] = "new category added successfuly";
        }else{
            $_SESSION["errorCAT"] = "feild to creat new category";
        }
      }
    }elseif(isset($_POST['update']) && isset($_POST['categoryId'])){
      $isUpdated = $categoryController->updateCategory($_POST['categoryId'],$_POST['name']);
      if($isUpdated){
        $_SESSION['successCAT'] = "category updated successfuly";
      }else{
        $_SESSION["errorCAT"] = "feild to Update category";
      }
    }elseif(isset($_POST['delete']) && isset($_POST['categoryId'])){
        $isDeleted = $categoryController->deleteCategory($_POST['categoryId']);
        if($isDeleted){
            $_SESSION['successCAT'] = "Category have been Deleted successfuly";
        }else{
            $_SESSION["errorCAT"] = "feild to Delete category";
        }
    }
}

$categories = $categoryController->getCategories();