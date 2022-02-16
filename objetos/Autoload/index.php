<?php

use Controllers\CourseController;
use Models\Course;

spl_autoload_register(function($clase) {
    //echo str_replace('\\', '/', $clase) . '.php';
    if (file_exists(str_replace('\\', '/', $clase) . '.php')) {
        require_once(str_replace('\\', '/', $clase) . '.php');
    }
    
});

$course = new Course;
$course->saludar();

echo "<br>";

$course_controller = new CourseController;
$course_controller->saludar();