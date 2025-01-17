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
    public function getAllusers($status = null) {
        $conn = $this->db->getConnection();
        $query = "SELECT * FROM users";
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
  public function updateStatus($userId, $status) {
    $query = 'UPDATE users SET status = :status WHERE id = :userId';
    try {
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute([
            'userId' => $userId,
            'status' => $status
        ]);
        return $stmt->rowCount() > 0;
    } catch (PDOException $e) {
        return false;
    }
}

public function updateRole($userId, $role) {
    $query = 'UPDATE users SET role = :role WHERE id = :userId';
    try {
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute([
            'userId' => $userId,
            'role' => $role
        ]);
        return $stmt->rowCount() > 0;
    } catch (PDOException $e) {
        return false;
    }
}
    public function manageUsers($action, $userId) {
        try {
            if ($action !== 'delete') {
                $query = 'UPDATE users SET status = :status WHERE id = :userId';
                $stmt = $this->db->getConnection()->prepare($query);
                
                switch ($action) {
                    case 'activate':  
                        return $stmt->execute([
                            'userId' => $userId,
                            'status' => User::ACTIVE
                        ]);
                    case 'suspend':  
                        return $stmt->execute([
                            'userId' => $userId,
                            'status' => User::ARCHIVED
                        ]);
                }
            } else {
                $query = 'DELETE FROM users WHERE id = :userId';
                $stmt = $this->db->getConnection()->prepare($query);
                return $stmt->execute([
                    'userId' => $userId
                ]);
            }
        } catch (PDOException $e) {
            error_log("Database error in manageUsers: " . $e->getMessage());
            return false;
        }
        return false;
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