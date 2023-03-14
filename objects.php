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
abstract class Vehicle
{
    abstract function getName();
}

class Bus extends Vehicle
{
    public $year_of_issue;
    public $weight;


    public function getName()
    {
        echo 'Автобус весом ' . $this->weight . ' и ' . $this->year_of_issue . ' года выпуска';
    }

    public function __construct($year_of_issue, $weight)
    {
        $this->weight = $weight;
        $this->year_of_issue = $year_of_issue;
    }
}

$bus = new Bus(1976, 4000);
echo '<br>';
$bus->getName();

class Tickets
{
    private $price;
    private $extra;
    private $country;
    private $allnumbers;
    public static $counter = 0;

    public function __construct($price)
    {
        self::$counter++;
        $this->price = $price;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public static function getCounter()
    {
        return self::$counter;
    }


    public function setCountry($country)
    {
        $this->country = $country;
    }


    public function getCountry()
    {
        return $this->country;
    }


    public function getTickets($payment, $number)
    {
        if (($payment) > ($this->price * $number)) {
            return 'Вы приобрели ' . $number . ' билетов за: ' . ($number * $this->price) . '<br>' . 'Ваша сдача: ' . ($payment - $this->price * $number);
        }
        if (($payment) == ($this->price * $number)) {
            return 'Вы приобрели ' . $number . ' билетов за: ' . $number * $this->price . '<br>';
        } else {
            return 'Недостаточно средств';
        }


    }

    public function checking()
    {
        if ($this->country == 'Czech' or $this->country == 'Czech Republic' or $this->country == 'Czechia') {
            return ' CZK';
        }
        if ($this->country == 'Russia' or $this->country == 'russia' or $this->country == 'RUSSIA') {
            return ' RUB';
        }
        if ($this->country == 'Switz' or $this->country == 'Switzerland' or $this->country == 'SWITZERLAND') {
            return ' CHF';
        }
        if ($this->country == 'JAPAN' or $this->country == 'japan' or $this->country == 'Japan') {
            return ' JPY';
        }
        if ($this->country == 'poland' or $this->country == 'Polska' or $this->country == 'POLAND') {
            return ' PLN';
        }
    }


}

$tickone = new Tickets(100);
echo $tickone->getTickets(250, 2)
?>
<!--<link rel="stylesheet" type="text/css" href="design.css"/>-->
<!--<div class="bilet">-->
<!--    --><? // $tickone = new Tickets(31);
//    echo '<br>';
//    echo 'Билет №' . Tickets::getCounter() . '<br>';
//    $tickone->setPayment(50);
//    $tickone->setCountry('Czechia');
//    echo 'Стоимость: ' . $tickone->getPrice() .  $tickone->checking() . '<br>';
//    echo 'Принято к оплате: ' . $tickone->getPayment() .  $tickone->checking() .   '<br>';
//    echo 'Сдача: ' . $tickone->getExtra() .  $tickone->checking() . '<br>';
//    ?>
<!--</div>-->
<!---->
<!--<div class="bilet">-->
<!--    --><? // $ticktwo = new Tickets(30);
//    echo '<br>';
//    echo 'Билет №' . Tickets::getCounter() . '<br>';
//    $ticktwo->setPayment(100);
//    $tickone->setCountry('Russia');
//    echo 'Стоимость: ' . $ticktwo->getPrice() .  $tickone->checking() . '<br>';
//    echo 'Принято к оплате: ' . $ticktwo->getPayment() .  $tickone->checking() . '<br>';
//    echo 'Сдача: ' . $ticktwo->getExtra() .  $tickone->checking() . '<br>';
//    ?>
<!--</div>-->
<!---->
<!--<div class="bilet">-->
<!--    --><? // $tickthree = new Tickets(28);
//    echo '<br>';
//    echo 'Билет №' . Tickets::getCounter() . '<br>';
//    $tickthree->setPayment(80);
//    $tickone->setCountry('japan');
//    echo 'Стоимость: ' . $tickthree->getPrice() .  $tickone->checking() . '<br>';
//    echo 'Принято к оплате: ' . $tickthree->getPayment() .  $tickone->checking() . '<br>';
//    echo 'Сдача: ' . $tickthree->getExtra() .  $tickone->checking() . '<br>';
//    ?>
<!--</div>-->
<!---->
<!---->
<!--<div class="bilet">-->
<!--    --><? // $tickfour = new Tickets(29);
//    echo '<br>';
//    echo 'Билет №' . Tickets::getCounter() . '<br>';
//    $tickfour->setPayment(35);
//    $tickone->setCountry('Switz');
//    echo 'Стоимость: ' . $tickfour->getPrice() .  $tickone->checking() . '<br>';
//    echo 'Принято к оплате: ' . $tickfour->getPayment() .  $tickone->checking() . '<br>';
//    echo 'Сдача: ' . $tickfour->getExtra() .  $tickone->checking() . '<br>';
//    ?>
<!--</div>-->


------------------------------------------------------------------------------------------------------------------------
<?php

interface iCanMove
{
    function move();
}

interface iCanFly
{
    function fly();
}

//class Carr implements iCanMove{
//    function move(){
//        echo 'Движение автомобиля';
//    }
//
//}
//
//class AirCraft implements iCanFly{
//    function fly(){
//        echo 'Полёт самолёта';
//    }
//}
//echo '<br>';
//$carr = new Carr();
//$carr->move();
//echo '<br>';
//$aircraft = new AirCraft();
//$aircraft->fly();
?>
<link rel="stylesheet" type="text/css" href="forobj.css"/>
<?php
trait Carrr
{
    public function move()
    {
        echo "Движение автомобиля";
    }
}

trait Aircraftt
{
    public function fly()
    {
        echo "Полёт самолёта";
        echo '<br>';
    }

}

class Carr
{
    use Carrr;
}

class Aircraft
{
    use Aircraftt;
}

$caR = new Carr();
$caR->move();

$aircraftt = new Aircraft();
$aircraftt->fly();


interface Geometry
{
    function area();

    function perimeter();
}

class Square implements Geometry
{
    public $length_of_side;

    function area()
    {
        return $this->length_of_side * $this->length_of_side;
    }

    function perimeter()
    {
        return 4 * $this->length_of_side;
    }

    public function __construct($length_of_side)
    {
        $this->length_of_side = $length_of_side;
    }
}

echo '<br>';
echo '<br>';
$qvadr = new Square(19);
?>
    <div class="square">
        <div class="rght"><? echo $qvadr->length_of_side . '<br>';?></div>
    </div>
<div class="undsq"><? echo $qvadr->length_of_side . '<br>';?></div>
<div class="ploshadi">
   <? echo 'S = ';
    echo $qvadr->area() . '<br>';
    echo 'P = ';
    echo $qvadr->perimeter() . '<br>';
    echo '<br>';?>
</div>
<?php

class Rectangle implements Geometry
{
    public $width;
    public $height;

    function area()
    {
        return $this->width * $this->height;
    }

    function perimeter()
    {
        return 2 * ($this->height + $this->width);
    }

    public function __construct($height, $width)
    {
        $this->width = $width;
        $this->height = $height;
    }
}

?>
<style>
    .rectangle {
        height: 50px;
        width: 90px;
        background-color: #43ff21;
        border: 3px solid #1f1f0d;
    }
</style>
</head>

<div class="rectangle"></div>
<?
$pryamnik = new Rectangle(12,5);
echo 'S = ';
echo $pryamnik->area() . '<br>';
echo 'P = ';
echo $pryamnik->perimeter() . '<br>';
echo '<br>';

class Oval implements Geometry {
public $bigradius;
public $smallradius;

function area(){
return $this->bigradius*$this->smallradius;
}
function perimeter(){
return round(2*sqrt(($this->bigradius*$this->bigradius+$this->smallradius*$this->smallradius)/2));
}

public function __construct($bigradius,$smallradius){
$this->bigradius=$bigradius;
$this->smallradius=$smallradius;
}
use MathConstants;
}
?>
<style>
    .oval {
        width: 200px;
        height: 100px;
        background: #9CD6C0;
        border-radius: 100px/50px;
        border: 3px solid #1f1f0d;
    }
</style>
</head>
<body>

<div class="oval"></div>
<?
$oval4ik = new Oval(13,2);
echo 'S = ';
echo $oval4ik->area();
echo $oval4ik->pi() . '<br>';
echo 'P = ';
echo $oval4ik->perimeter();
echo $oval4ik->pi();

trait MathConstants{
public function pi(){
echo 'π';
}
}

