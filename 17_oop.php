<?php
//Access modifiers
//public - can be accessed from anywehere
//private - can only be accessed from inside the class
//protected - can only be accessed from inside the class and by inheriting the class
class User {
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

//Instantiate a user object

$user1 = new User("Tom", "test@test.ca", "123");
$user2 = new User("Brad", "test@test.ca", "321");
// $user2->set_name('Red');
// var_dump($user2);
// $user1->name = 'Tom';
// $user1->email = "test@gmail.com";

// var_dump($user1);

// echo $user1->get_name();

//Inheritance
class Employee extends User {
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee = new Employee('Sara', 'test@test.com', '123', 'writer');
try {
  echo $employee1->getTitle();
  echo 'hi';
} catch (Exception $e) {
  echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
  echo 'done';
}
?>