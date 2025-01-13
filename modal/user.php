<?php 
include_once __DIR__ ."/../Database/Database.php";
class User {
    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }
    public function regester($username,$email,$password) {
        
    }
    public function login($email,$password) {}

    public function setRole($userId, $role) {
        // To be implemented
    }
    public function getUserById($userId) {
        // To be implemented
    }
}