<?php
include_once __DIR__ . "/../Database/Database.php";

class Category {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function create($name) {
        $conn = $this->db->getConnection();
        $query = "INSERT INTO categories (name) VALUES (:name)";
        try{
            $stmt = $conn->prepare($query);
            $stmt->execute(["name"=> $name]);
            return $conn->lastInsertId();
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($categoryId){
        $conn = $this->db->getConnection();
        $query = "DELETE FROM categories WHERE id = :categoryId";
        try{
            $stmt = $conn->prepare($query);
            $stmt->execute(["categoryId"=> $categoryId]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
    public function update($categoryId,$name){
        $conn = $this->db->getConnection();
        $query = "UPDATE categories SET name = :name WHERE id = :categoryId";
        try{
            $stmt = $conn->prepare($query);
            $stmt->execute([
                "categoryId" => $categoryId,
                "name" => $name
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function getCategoryById($categoryId) {
        // To be implemented
    }

    /**
     * Get all categories.
     *
     * @return array Returns a list of all categories.
     */
    public function getAllCategories() {
        $conn = $this->db->getConnection();
        $query = 'SELECT * FROM categories ORDER BY id ASC';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTagsByCategory($categoryId) {
        // To be implemented
    }
}
