<?php 
include_once __DIR__ ."/../Database/Database.php";
class User {
    const ROLE_ADMIN = "admin";
    const ROLE_TEACHER = "teacher";
    const ROLE_STUDENT = "student";
    const ACTIVE = "ACTIVE";
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

}