<?php 
require_once __DIR__ . "/courseContent.php";
class VideoContent implements CourseContent {
    private $file;
    private $uploadDir = 'uploads/videos/';

    public function create(): string {
      
        return "";
    }

    public function display(): string {
      
        return "";
    }

    public function validate(): bool {
       
        return false;
    }
}