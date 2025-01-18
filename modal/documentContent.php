<?php
require_once __DIR__ . "/courseContent.php";
class DocumentContent implements CourseContent {
    private $markdown;

    
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