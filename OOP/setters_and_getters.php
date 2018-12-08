<?php

// Set property visibility to private.
// Define a method to set the property's value
// Define a method to get the property's value

class Product {
  private $name;

  public function set_name($value) { // Setter method
    $this->name = $value;
  }

  public function get_name() { // getter method
    return $this->name;
  }


} // Product

$p = new Product;
$p->set_name('Birdhouse');
echo $p->get_name();
// Birdhouse

// Only the setter and getter methods have access to private properties.
// USeful to regulate access





 ?>
