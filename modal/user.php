<?php 
include_once __DIR__ ."/../Database/Database.php";
class User {
    const ROLE_ADMIN = "admin";
    const ROLE_TEACHER = "teacher";
    const ROLE_STUDENT = "student";
    const ACTIVE = "ACTIVE";
    const REJECTED = "REJECTED";
    const ARCHIVED = "ARCHIVED";
    const PENDING = "PENDING";
    protected $status;
    protected $id;
    protected $username;
    protected $email;
    protected $role;
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }
    public function setStatus($status) {
         $this->status = $status;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }
    public function getStatus() {
        return $this->status;
    }
    
    public function getUserById($userId) {
        $query = "SELECT * FROM users WHERE id = :userId";
        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute(['userId' => $userId]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
    private function isFirstUser(): bool {
        $query = "SELECT COUNT(*) as count FROM users";
        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return intval($result['count']) === 0;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function register($username,$email,$password) {
        $query = "INSERT INTO users (username,email,password,role,status)
        VALUES (:username, :email, :password, :role, :status)";
        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $isFirstUser = $this->isFirstUser();
            
            $params = [
                "username" => $username,
                "email" => $email,
                "password" => $hashedPassword,
                "role" => $isFirstUser ? self::ROLE_ADMIN : null,
                "status" => self::ACTIVE
            ];
            
            $stmt->execute($params);
            return $this->db->getConnection()->lastInsertId();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function login($email,$password) {
        $query = "SELECT * FROM users WHERE email = :email";
        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute([
                "email" => $email
            ]);
            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($password, $user['password'])) {
                unset($user['password']); // Don't send password back
                return $user;
            }
            return false;
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

}