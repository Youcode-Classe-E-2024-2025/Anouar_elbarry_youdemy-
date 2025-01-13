<?php
include_once __DIR__ . "/../Database/Database.php";

class Tag {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    /**
     * Create a new tag.
     *
     * @param string $name
     * @param int $categoryId
     * @return bool
     */
    public function create($name, $categoryId) {
        // To be implemented
    }

    /**
     * Update an existing tag.
     *
     * @param int $tagId
     * @param string $name
     * @param int $categoryId
     * @return bool
     */
    public function update($tagId, $name, $categoryId) {
        // To be implemented
    }

    /**
     * Delete a tag.
     *
     * @param int $tagId
     * @return bool
     */
    public function delete($tagId) {
        // To be implemented
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

    /**
     * Get all tags.
     *
     * @return array Returns a list of all tags.
     */
    public function getAllTags() {
        // To be implemented
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