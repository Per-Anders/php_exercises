<?php

// behaviours related to the class generally
// Not tied to a particular instance
// Often refered to as "Class properties" and "Class methods"
// Accesible directly from the class, widthout any instance.
// USE keyword static

class Student {

  static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];

  static function motto() {
    return "To learn PHP!";
  }
} // Student

// Static methods cant use $this, because we dont have an instance.
// $this refers to an instance, but we are talking to the class directly

// So we can use the classname with 2 colons
// Student::$grades
print_r(Student::$grades);
echo "<br>";
echo Student::motto();

// to refer to the class inside a method we can use the self keyword.
// self::$grades

// Static $properties are not accessible from an instance...





 ?>
