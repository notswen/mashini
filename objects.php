<?php

class Plane
{
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

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }


}

$plane = new Plane(25800, 'airbus', 'orange', 16, 252, 900);
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
class Car
{
    private $weight;
    private $mark;
    private $color;
    private $length;
    private $numberofseats;
    private $speed;

    public function __construct($weight, $mark, $color, $length, $numberofseats, $speed)
    {
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

$car = new Car(1500, 'chevrolet', 'yellow', 4.4, 2, 285);

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

class Article
{
    public static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }

    public static function getCounter()
    {
        return self::$counter;
    }

}

$first = new Article();
$second = new Article();
$third = new Article();
$fourth = new Article();
var_dump(Article::getCounter());


class Jopa{
    public static $name;

    public static function sum($one, $two){
        echo $one + $two;
    }

    public static function setName($name){
        self::$name=$name;
    }
}
echo '<br>';
Jopa::setName('ignat');
Jopa::sum(12,45.6);
echo Jopa::$name;

//class Tickets{
//    public static $price;
//    public static $age;
//    public static $name;
//    public static $country;
//
//
//    public static function setPrice($price){
//        self::$price=$price;
//    }
//    public static function getPrice()
//    {
//        return self::$price;
//    }
//
//
//    public static function setAge($age){
//        self::$age=$age;
//    }
//    public static function getAge()
//    {
//        return self::$age;
//    }
//
//
//    public static function setName($name){
//        self::$name=$name;
//    }
//    public static function getName()
//    {
//        return self::$name;
//    }
//
//
//    public static function setCountry($country){
//        self::$country=$country;
//    }
//    public static function getCountry()
//    {
//        return self::$country;
//    }
//
//
//
//}
//$nachalo = new Tickets();
//echo '<br>';
//echo '<br>';
//Tickets::setPrice(100);
//echo Tickets::getPrice();
//echo '<br>';
//Tickets::setAge(27);
//echo Tickets::getAge();
//echo '<br>';
//Tickets::setName('Alexey');
//echo Tickets::getName();
//echo '<br>';
//Tickets::setCountry('Kazakhstan');
//echo Tickets::getCountry();

class Tickets{
    public static $price;
    public static $age = 27;
    public static $name = 'Alexey';
    public static $country = 'Kazakhstan';
    public static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }


    public static function setPrice($price){
        self::$price=$price;
    }
    public static function getPrice()
    {
        return self::$price;
    }

    public static function getAge()
    {
        return self::$age;
    }

    public static function getName()
    {
        return self::$name;
    }

    public static function getCountry()
    {
        return self::$country;
    }

    public static function getCounter()
    {
        return self::$counter;
    }






}
$tickone = new Tickets();
Tickets::setPrice(100);
echo '<br>';
echo 'Билет №' . Tickets::getCounter();
echo '<br>';
echo Tickets::getPrice();
echo '<br>';
echo Tickets::getAge();
echo '<br>';
echo Tickets::getName();
echo '<br>';
echo Tickets::getCountry();
echo '<br>';
$ticktwo = new Tickets();
Tickets::setPrice(100);
echo '<br>';
echo 'Билет №' . Tickets::getCounter();
echo '<br>';
echo Tickets::getPrice();
echo '<br>';
echo Tickets::getAge();
echo '<br>';
echo Tickets::getName();
echo '<br>';
echo Tickets::getCountry();
echo '<br>';
$tickthree = new Tickets();
Tickets::setPrice(32);
echo '<br>';
echo 'Билет №' . Tickets::getCounter();
echo '<br>';
echo Tickets::getPrice();
echo '<br>';
echo Tickets::getAge();
echo '<br>';
echo Tickets::getName();
echo '<br>';
echo Tickets::getCountry();
echo '<br>';
$tickfour = new Tickets();
Tickets::setPrice(45);
echo '<br>';
echo 'Билет №' . Tickets::getCounter();
echo '<br>';
echo Tickets::getPrice();
echo '<br>';
echo Tickets::getAge();
echo '<br>';
echo Tickets::getName();
echo '<br>';
echo Tickets::getCountry();
echo '<br>';
$tickfive = new Tickets();
Tickets::setPrice(270);
echo '<br>';
echo 'Билет №' . Tickets::getCounter();
echo '<br>';
echo Tickets::getPrice();
echo '<br>';
echo Tickets::getAge();
echo '<br>';
echo Tickets::getName();
echo '<br>';
echo Tickets::getCountry();
echo '<br>';


