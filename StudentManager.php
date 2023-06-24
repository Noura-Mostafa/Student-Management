<?php

include 'autoload.php';

use Course\Course;
use StudentManagement\Manager;
use StudentManagement\Student;

$manager = new Manager();

// Adding students
$student1 = new Student(1, 'Fatma ', 'Fa@gmail.com');
$student2 = new Student(2, 'Heba', 'heba@gmail.com');
$student3 = new Student(3, 'Noura', 'Noura@gmail.com');

$manager->addStudent($student1);
$manager->addStudent($student2);
$manager->addStudent($student3);


// Adding courses
$course1 = new Course(1, 'React');
$course2 = new Course(2, 'Mobile');
$course3 = new Course(3, 'Web');
$course4 = new Course(4, 'Laravel');


$student1->addCourse($course1);
$student2->addCourse($course2);
$student3->addCourse($course3);
$student3->addCourse($course4);


// Updating student details
$student1->setName('Fatma Emad');
$manager->updateStudent($student1);
$student3->setName('Noura Mostafa');
$manager->updateStudent($student2);



// Deleting a student
$manager->deleteStudent($student2);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center m-4"> Student Management </h1>

    <div class="row">
      <div class="col card bg-info">
      <div class="card-body fs-5 ">

   <?php

  // Retrieving student information
$showStudent = $manager->getStudent(1);
if ($showStudent == true) {
    echo "<pre>";
    echo "<h2>Student Details:</h2>";
    echo "Student ID: " . $showStudent->getId() . "\n";
    echo "Student Name: " . $showStudent->getName() . "\n";
    echo "Email: " . $showStudent->getEmail() . "\n";
    echo "Courses:\n";
    foreach ($showStudent->getCourses() as $course) {
        echo "-" . $course->getName() . "\n";
    }
    echo "</pre>";
} else {
    echo "Student not found.\n";
}
?>
    </div>
    </div>


    <div class="col card bg-light">
    <div class="card-body fs-5">

    <?php
    // Retrieving student information
$showStudent = $manager->getStudent(2);
if ($showStudent == true) {
    echo "<pre>";
    echo "<h2>Student Details:</h2>";
    echo "Student ID: " . $showStudent->getId() . "\n";
    echo "Student Name: " . $showStudent->getName() . "\n";
    echo "Email: " . $showStudent->getEmail() . "\n";
    echo "Courses:\n";
    foreach ($showStudent->getCourses() as $course) {
        echo "-" . $course->getName() . "\n";
    }
    echo "</pre>";
    } else {
    echo "Student not found or deleted.\n";
    }
    ?>
    </div>
    </div>


    <div class="col card bg-info">
    <div class="card-body fs-5">

    <?php
    // Retrieving student information
$showStudent = $manager->getStudent(3);
if ($showStudent == true) {
    echo "<pre>";
    echo "<h2>Student Details:</h2>";
    echo "Student ID: " . $showStudent->getId() . "\n";
    echo "Student Name: " . $showStudent->getName() . "\n";
    echo "Email: " . $showStudent->getEmail() . "\n";
    echo "Courses:\n";
    foreach ($showStudent->getCourses() as $course) {
        echo "-" . $course->getName() . "\n";
    }
    echo "</pre>";
    } else {
    echo "Student not found.\n";
    }
    ?>
    </div>
    </div>
    </div>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
