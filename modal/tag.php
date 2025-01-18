<?php
include_once __DIR__ . "/../Database/Database.php";

class Tag {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }


    public function create($name) {
           $conn = $this->db->getConnection();
           $query = "INSERT INTO tags (name) VALUE (:name)";
           $stmt = $conn->prepare($query);
           $stmt->execute(["name" => $name]);
           return $conn->lastInsertId();
    }

    public function update($name,$tagId) {
        $conn = $this->db->getConnection();
        $query = "UPDATE tags SET name = :name WHERE id = :tagId" ;
        try{
        $stmt = $conn->prepare($query);
        $stmt->execute([
            "name" => $name,
            "tagId" => $tagId
        ]);
        return true;
    }catch(PDOException $e){
        return $e;
    }
    }


    public function delete($tagId) {
          $conn = $this->db->getConnection();
          $query = "DELETE FROM tags WHERE id = :tagId";
          try{
            $stmt = $conn->prepare($query);
            $stmt->execute(["tagId" => $tagId]);
            return true;
          }catch(PDOException $e){
             return false;
          }
          
    }

    /**
     * Get tag details by ID.
     *
     * @param int $tagId
     * @return array|bool Returns tag data if found, false otherwise.
     */
    public function getTagById($tagId) {
        // To be implemented
    }

    public function getAllTags() {
           $query = "SELECT * FROM tags";
           $stmt = $this->db->getConnection()->prepare($query);
           $stmt->execute();
           $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
           return $result;
    }

    /**
     * Get tags by category ID.
     *
     * @param int $categoryId
     * @return array Returns a list of tags for the category.
     */
    public function getTagsByCategory($categoryId) {
        // To be implemented
    }
}
?>