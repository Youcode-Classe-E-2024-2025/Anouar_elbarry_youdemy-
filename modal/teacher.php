<?php
include_once __DIR__ . "/../Database/Database.php";
include_once __DIR__ . "/user.php";
class Teacher extends User {
    private $createdCourses = [];
    private $totalStudents = 0;

    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function createCourse($courseData) {
        // Logic to create a new course
        return ;
    }
    public function getteachersByStatus($status = null) {
          $conn = $this->db->getConnection();
          $query = "SELECT * FROM users WHERE role = 'teacher'";
          if( $status != null ) {
            $query .= " AND status = :status";
            $stmt = $conn->prepare($query);
            $stmt->execute(
                [
                    "status"=> $status
                     ]
            );
          }else {
            $stmt = $conn->prepare($query);
            $stmt->execute();
          }
          
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $result;
    }
    public function updateCourse($courseId, $data) {
        // Logic to update a course
        return true;
    }

    public function deleteCourse($courseId) {
        // Logic to delete a course
        return true;
    }

    public function viewStatistics() {
        // Logic to fetch course statistics
        return []; // Return statistics array
    }
}
?>