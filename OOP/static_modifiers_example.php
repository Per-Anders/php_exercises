<?php


class Student {

  public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
  private static $total_students = 0;

  public static function motto() {
    return "To learn PHP OOP!";
  }

  public static function count(){
    return self::$total_students;
  }

  public static function add_student(){
    self::$total_students++;
  }

} // Student


echo Student::$grades[0] . "<br>";
echo Student::motto();

// echo Student::$total_students; // error:

echo Student::count();
Student::add_student();
echo Student::count();


 ?>
