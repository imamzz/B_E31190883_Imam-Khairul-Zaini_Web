<?php

interface Car {
    public function setModel($name);

    public function getModel();
}

class minicar implements Car {
    private $model;

    public function setModel($name)
    {
        $this -> model =$name;
    }

    public function getModel()
    {
        return $this -> model;
    }
}

$car1 = new minicar;
$car2 = new minicar;
$car3 = new minicar;

$car1 -> setModel ("multi-purpose vehicle");
$car2 -> setModel ("sedan");
$car3 -> setModel ("hatchback");

echo $car1 -> getModel();
echo "<br>";
echo $car2 -> getModel();
echo "<br>";
echo $car3 -> getModel();

?>