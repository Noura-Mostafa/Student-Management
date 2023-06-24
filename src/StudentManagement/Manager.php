<?php

namespace StudentManagement;

use Loggable\Loggable;

class Manager
{
    use Loggable;

    private $students;

    public function __construct()
    {
        $this->students = [];
    }

    public function addStudent(Student $student)
    {
        $this->students[$student->getId()] = $student;
        $this->log("Added student with ID: " . $student->getId());
    }

    public function getStudent($id)
    {
        if (isset($this->students[$id])) {
            return $this->students[$id];
        }
        return null;
    }

    public function updateStudent(Student $student)
    {
        if (isset($this->students[$student->getId()])) {
            $this->students[$student->getId()] = $student;
            $this->log("Updated student with ID: " . $student->getId());
        }
    }

    public function deleteStudent(Student $student)
    {
        if (isset($this->students[$student->getId()])) {
            unset($this->students[$student->getId()]);
            $this->log("Deleted student with ID: " . $student->getId());
        }
    }
}
