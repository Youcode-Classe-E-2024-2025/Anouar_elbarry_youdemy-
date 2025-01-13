<?php
include_once __DIR__ . "/../Database/Database.php";

class Category {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    /**
     * Create a new category.
     *
     * @param string $name
     * @param string $description
     * @return bool
     */
    public function create($name, $description = '') {
        // To be implemented
    }

    /**
     * Update an existing category.
     *
     * @param int $categoryId
     * @param string $name
     * @param string $description
     * @return bool
     */
    public function update($categoryId, $name, $description = '') {
        // To be implemented
    }

    /**
     * Delete a category.
     *
     * @param int $categoryId
     * @return bool
     */
    public function delete($categoryId) {
        // To be implemented
    }

    /**
     * Get category details by ID.
     *
     * @param int $categoryId
     * @return array|bool Returns category data if found, false otherwise.
     */
    public function getCategoryById($categoryId) {
        // To be implemented
    }

    /**
     * Get all categories.
     *
     * @return array Returns a list of all categories.
     */
    public function getAllCategories() {
        // To be implemented
    }

    /**
     * Get tags for a specific category.
     *
     * @param int $categoryId
     * @return array Returns a list of tags for the category.
     */
    public function getTagsByCategory($categoryId) {
        // To be implemented
    }
}
?>