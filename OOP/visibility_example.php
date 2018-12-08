<?php

class Student {

  public $first_name; // anywhere
  public $last_name;
  public $country = "Undefined";

  protected $registration_id; // inside class and its subclasses
  private $tuition = 0.00; //  inside this class only

  public function full_name(){ // anywhere
    return $this->first_name . " " . $this->last_name;
  }

  public function hello_world(){ // anywhere
    return 'Hello World';
  }

  protected function hello_family(){ // inside this class and its subclasses
    return 'Hello Family';
  }

  private function hello_me(){ // inside this class only
    return 'Hello me!';
  }

} // Student Class


class PartTimeStudent extends Student { // subclass of Student
  // this class should have the ability to call the protected hello family method

  // creating a public method we can call from outside to access the protected method hello_family();
  public function hello_parent(){
    return $this->hello_family();
  }

} // PartTimeStudent

//
$student1 = new Student; // Create an instance of the class Student in var $student1
$student1->first_name = "Lucy";
$student1->last_name = "Roberts";

echo $student1->full_name() . "<br>"; // access granted
echo $student1->hello_world() . "<br>"; // access granted
echo $student1->hello_family() . "<br>"; // error protected only class and subclass can access method
echo $student1->hello_me() . "<br>"; // error private, only the class can access the method

$student2 = new PartTimeStudent; // creating an instance of subclass PartTimeStudent
echo $student2->hello_parent(); // call the public method hello_parent to access the protected method hello_family() in its parent class Student




 ?>
