<?php

class Student
{
    public static $name;
    public function value($nm)
    {
         self::$name = $nm;
         echo "my name is" . self::$name;
    }
}


 Student::value("adnan");



?>