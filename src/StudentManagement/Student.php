<?php

namespace StudentManagement;

class Student
{
    private readonly int $id;
    private String $name;
    private String $email;
    private array $courses;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name=$name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCourses()
    {
        return $this->courses;
    }

    public function addCourse(\Course\Course $course)
    {
        $this->courses[] = $course;
    }
}