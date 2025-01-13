<?php
class Teacher extends User {
    private $createdCourses = [];
    private $totalStudents = 0;

    public function createCourse($courseData) {
        // Logic to create a new course
        $course = new Course($courseData['title'], $courseData['description'], $this->id);
        $this->createdCourses[] = $course;
        return $course;
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