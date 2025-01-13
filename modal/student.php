<?php 
include_once __DIR__ ."/user.php";
class Student extends User {
     private Database $db;
     private $enrolledCourses = [];

public function viewCourses($filters) {
    // Logic to fetch courses based on filters
    return []; // Return array of courses
}

public function enrollCourse($courseId) {
    // Logic to enroll student in a course
    $this->enrolledCourses[] = $courseId;
    return true;
}

public function viewEnrolledCourses() {
    // Logic to fetch enrolled courses
    return $this->enrolledCourses;
}

public function getEnrollment($courseId) {
    // Logic to fetch enrollment details
    return null; // Return Enrollment object
}
}