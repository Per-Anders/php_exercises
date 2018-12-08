// public: Anywhere
// protected: Inside this class and its subclasses
// private: inside this class only

<?php

class User {
  private $is_admin = false;

  private function has_admin_access(){
    return $this->is_admin === true;
  } // has_admin_access();

  public function access_level(){
    return $this->has_admin_access() ? 'Admin' : 'Standard';
  } // access_level();


} // User


$user = new User;
echo $user->is_admin; // error: cant access private property
$user->is_admin = true; // error: cant access private property
echo $user->has_admin_access(); // error: call to private method
echo $user->access_level(); // 'Standard';



 ?>
