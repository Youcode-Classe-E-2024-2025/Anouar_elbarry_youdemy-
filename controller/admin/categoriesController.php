<?php 
require_once __DIR__ . "/../../modal/category.php";
require_once __DIR__ . "/../../modal/course.php";
require_once __DIR__ . "/../../helpers/CSRF.php";
require_once __DIR__ . "/../../helpers/helper.php";

class CategoryController {
    private Category $category;
    private Course $course;

    public function __construct(){
        session_start();
        $this->category = new Category();
        $this->course = new Course();
    }

    public function validateCategoryName($name) {
        // Only allow letters, numbers, spaces, and hyphens
        // Min length: 3, Max length: 50
        return preg_match('/^[a-zA-Z0-9\s-]{3,50}$/', $name);
    }

    public function create() {
        if (isset($_POST['create']) && validateCsrfToken($_POST['CSRF'])) {
            $name = trim($_POST['name']);
            
            if (!$this->validateCategoryName($name)) {
                $_SESSION['errorCAT'] = "Invalid category name. Use only letters, numbers, spaces, and hyphens (3-50 characters)";
                return false;
            }

            $result = $this->category->create($name);
            if ($result) {
                $_SESSION['successCAT'] = "Category created successfully!";
                return true;
            } else {
                $_SESSION['errorCAT'] = "Failed to create category";
                return false;
            }
        }
        return false;
    }

    public function getAllCategories() {
        return $this->category->getAllCategories();
    }

    public function countCoursesBycategory($categoryId) {
        $courses = $this->course->getCoursesByCategory($categoryId);
        return count($courses);
    }

    public function deleteCategory($categoryId){
      return  $this->category->delete($categoryId);
    }
    public function updateCategory($categoryId,$name){
      return  $this->category->update($categoryId,$name);
    }

    public function update() {
        if (isset($_POST['update']) && validateCsrfToken($_POST['CSRF'])) {
            $categoryId = $_POST['categoryId'];
            $name = trim($_POST['name']);
            
            if (!$this->validateCategoryName($name)) {
                $_SESSION['errorCAT'] = "Invalid category name. Use only letters, numbers, spaces, and hyphens (3-50 characters)";
                return false;
            }

            $result = $this->category->update($categoryId, $name);
            if ($result) {
                $_SESSION['successCAT'] = "Category updated successfully!";
                return true;
            } else {
                $_SESSION['errorCAT'] = "Failed to update category";
                return false;
            }
        }
        return false;
    }

    public function delete() {
        if (isset($_POST['delete']) && validateCsrfToken($_POST['CSRF'])) {
            $categoryId = $_POST['categoryId'];
            
            $result = $this->category->delete($categoryId);
            if ($result) {
                $_SESSION['successCAT'] = "Category deleted successfully!";
                return true;
            } else {
                $_SESSION['errorCAT'] = "Failed to delete category";
                return false;
            }
        }
        return false;
    }
}

$categoryController = new CategoryController();
$categories = $categoryController->getAllCategories();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $categoryController->create();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['update'])) {
        $categoryController->update();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['delete'])) {
        $categoryController->delete();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}