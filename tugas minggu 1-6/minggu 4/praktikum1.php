<?php 
// The parent class
class Car {
    // Private property inside the class
    private $model;

    //Public setter method
    public function setModel($model)
    {
        $this -> model = $model;
    }
    public function hello()
    {
        return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
}

//The child class inherits the code from the parent class
class SportCar extends Car {
    // No code in the child class
}

//
$sportCar1 = new SportCar();

//
//
$sportCar1 -> setModel('Mercedes Benz');

//
echo $sportCar1 -> hello();
?>