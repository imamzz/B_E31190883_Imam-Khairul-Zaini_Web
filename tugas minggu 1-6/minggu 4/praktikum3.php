<?php 
// The parent class
class Car {
    //The $model property is now protected, so it can be accessed
    //from within the class and its child classes
    protected $model;

    //
    public function setModel($model)
    {
        $this -> model = $model;
    }
}
// The child class
class SportCar extends Car{
    //Has no problem
    public function hello()
    {
        return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
}

//
$sportCar = new sportCar();