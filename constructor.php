<?php

class Student
{
    public $roll;
    function __construct($number)
    {
        echo "Allah bless me";
        $this->roll= $number;
        echo $this->roll;
    }
}

$yoo = new Student(12);

?>