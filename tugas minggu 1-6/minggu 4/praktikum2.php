<?php 
// The parent class
class Car {
    //The $model property is private, this it can be accessed
    //Only from inside method
    private $model;
    //
    public function setModel($model)
    {
        $this -> model = $model;
    }
}
// The child class
class SportCar extends Car{
    //Tries to get a private property that belongs to the parent
    public function hello()
    {
        return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
}
//
$sportCar1 = new SportCar();
//
$sportCar1 -> setModel('Mercedes Benz');
