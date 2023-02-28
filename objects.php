<?php
class Plane {
    private $weight;
    private $mark;
    private $color;
    private $length;
    private $numberofseats;
    private $speed;

//    public function toString(){
//        echo "Масса :" . $this->weight . "<br>Марка: " .  $this->mark . "<br>Цвет: " . $this->color . "<br>Длина: " .  $this->length . "<br>Кол-во сидений: " .  $this->numberofseats . "<br>Макс. скорость: " .  $this->convert() . "<br>";
//    }
//    public function convert(){
//        return round($this->speed/3.6, 1) . ' м/c';
//    }
    public function __construct($weight, $mark, $color, $length, $numberofseats, $speed)
    {
        $this->weight = $weight;
        $this->mark = $mark;
        $this->color = $color;
        $this->length = $length;
        $this->numberofseats = $numberofseats;
        $this->speed = $speed;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }
    public function __destruct(){
        echo "Вы удалили: " . $this->mark;
    }

}

$plane = new Plane(25800, 'airbus','orange',16,252,900);
//var_dump($plane);

$weight = $plane->getWeight();
var_dump($weight);
$plane->setWeight(35800);
var_dump($plane);
var_dump($plane->getWeight());
//unset($plane);

//$plane->mark = 'Boeing';
//$plane->color = 'white';
//$plane->length = 70;
//$plane->numberofseats = 231;
//$plane->speed = 800;

//echo $plane->weight . '<br>';
//echo $plane->mark . '<br>';
//echo $plane->color . '<br>';
//echo $plane->length . ' metres' . '<br>';
//echo $plane->numberofseats . ' seats' . '<br>';
//echo '<br>';
//
//$plane->toString();
class Car {
    private $weight;
    private $mark;
    private $color;
    private $length;
    private $numberofseats;
    private $speed;

    public function __construct($weight, $mark, $color, $length, $numberofseats, $speed){
        $this->weight = $weight;
        $this->mark = $mark;
        $this->color = $color;
        $this->length = $length;
        $this->numberofseats = $numberofseats;
        $this->speed = $speed;

    }

//    public function toString(){
//        return "Масса :" . $this->weight . "<br>Марка: " .  $this->mark . "<br>Цвет: " . $this->color . "<br>Длина: " .  $this->length . "<br>Кол-во сидений: " .  $this->numberofseats . "<br>Макс. скорость: " .  $this->convert() . "<br>";
//    }
//
//    public function getSpeed(){
//        return  $this->speed . ' км/ч';
//    }
//    public function convert(){
//        return $this->speed/3.6 . ' м/c';
//    }
}

$car = new Car(1500, 'chevrolet', 'yellow', 4.4, 2,285);

//var_dump($car);
//echo '<br>';
//echo $car->mark  . '<br>';
//echo $car->color . '<br>';
//echo $car->length  . ' m' . '<br>';
//echo $car->numberofseats . ' seats' . '<br>';
//echo $car->speed  . ' km/h' . '<br>';
//
//echo '<br>';
//echo $car->toString();

