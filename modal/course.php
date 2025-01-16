<?php
include_once __DIR__ . "/../Database/Database.php";

class Course {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    /**
     * Create a new course.
     *
     * @param string $title
     * @param string $description
     * @param string $content
     * @param int $teacherId
     * @param int $categoryId
     * @param array $tagIds
     * @return bool
     */
    public function create($title, $description, $content, $teacherId, $categoryId, $tagIds = [], ) {
        // To be implemented
    }

    /**
     * Update an existing course.
     *
     * @param int $courseId
     * @param string $title
     * @param string $description
     * @param string $content
     * @param int $categoryId
     * @param array $tagIds
     * @return bool
     */
    public function update($courseId, $title, $description, $content, $categoryId, $tagIds = []) {
        // To be implemented
    }

    /**
     * Delete a course.
     *
     * @param int $courseId
     * @return bool
     */
    public function delete($courseId) {
        // To be implemented
    }

    /**
     * Get course details by ID.
     *
     * @param int $courseId
     * @return array|bool Returns course data if found, false otherwise.
     */
    public function getCourseById($courseId) {
        // To be implemented
    }

    /**
     * Get all courses.
     *
     * @return array Returns a list of all courses.
     */
    public function getAllCourses() {
        $conn = $this->db->getConnection();
        $query = "SELECT 
                  c.*,
                  u.username as instructor,
                  cg.name as category
                  FROM courses c
                  INNER JOIN users u ON c.teacher_id = u.id
                  INNER JOIN categories cg ON c.category_id = cg.id
                  ";
        try{
            $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        }
        catch(PDOException $e) {
            return [1, $e->getMessage()];
        }
    }

    /**
     * Get courses by teacher ID.
     *
     * @param int $teacherId
     * @return array Returns a list of courses created by the teacher.
     */
    public function getCoursesByTeacher($teacherId) {
        // To be implemented
    }

    /**
     * Get courses by category ID.
     *
     * @param int $categoryId
     * @return array Returns a list of courses in the specified category.
     */
    public function getCoursesByCategory($categoryId) {
        // To be implemented
    }

    /**
     * Get courses by tag ID.
     *
     * @param int $tagId
     * @return array Returns a list of courses with the specified tag.
     */
    public function getCoursesByTag($tagId) {
        // To be implemented
    }

    /**
     * Get statistics for a course.
     *
     * @param int $courseId
     * @return array Returns course statistics (e.g., number of enrollments).
     */
    public function getCourseStatistics($courseId) {
        // To be implemented
    }
}
?>