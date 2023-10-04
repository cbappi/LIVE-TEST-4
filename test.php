QUESTION - 1


<?php

class Person {
    public string $name;
    public int  $age;
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
    public function introduce() {
      echo "My name is {$this->name}, I am {$this->age}years old.";
    }
  }

class Student extends Person {

// attribute
public string $mark;
    

// constructor
public function __construct($name,$age,$mark) {
    parent::__construct($name, $age);
    $this->mark = $mark;
    
  }

    

public function calculate_grade_percentage() {

     // Assume that the mark is out of 100
   

     $this->mark = (int)($this->mark*100/100)."%";

     // Implement your logic to calculate the mark percentage here

  
     $stringNumber = sprintf("%.0f",$this->mark);


     return $stringNumber."%.";
     

}

  

}

$student = new Student("Alice", 18, "88");
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();
echo"<br/>";
echo "My grade percentage is {$gradePercentage}";


