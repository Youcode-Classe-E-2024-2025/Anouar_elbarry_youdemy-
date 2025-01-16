<?php
include_once __DIR__ . "/user.php";
class Admin extends User {
   
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function validateTeacher($teacherId) {
        $conn = $this->db->getConnection();
        $query = "UPDATE users SET status = :status WHERE id = :teacherId";
        try{
            $stmt = $conn->prepare($query);
            $stmt->execute([
                "teacherId"=> $teacherId,
                "status"=> self::ACTIVE
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
    }
    public function rejectTeacher($teacherId) {
        $conn = $this->db->getConnection();
        $query = "UPDATE users SET status = :status WHERE id = :teacherId";
        try{
            $stmt = $conn->prepare($query);
            $stmt->execute([
                "teacherId"=> $teacherId,
                "status"=> self::REJECTED
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
    }

    public function manageUsers($action, $userId) {
        // Logic to manage users (activate, suspend, delete)
        return true;
    }

    public function manageContent($action, $contentId) {
        // Logic to manage content (courses, categories, tags)
        return true;
    }

    public function viewGlobalStats() {
        // Logic to fetch global statistics
        return []; // Return statistics array
    }

    public function manageTags($action, $tagData) {
        // Logic to manage tags
        return true;
    }

    public function manageCategories($action, $categoryData) {
        // Logic to manage categories
        return true;
    }
}
?>