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
abstract class Vehicle{
    abstract function getName();
}

class Bus extends Vehicle{
    public $year_of_issue;
    public $weight;


    public function getName()
    {
        echo 'Автобус весом ' . $this->weight . ' и ' . $this->year_of_issue . ' года выпуска';
    }

    public function __construct($year_of_issue, $weight){
        $this->weight = $weight;
        $this->year_of_issue = $year_of_issue;
    }
}
$bus=new Bus(1976, 4000);
echo '<br>';
$bus->getName();

class Tickets{
    private $price;
    private $payment;
    private $extra;
    private $country;
    public static $counter = 0;

    public function __construct($price)
    {
        self::$counter++;
        $this->price=$price;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public static function getCounter()
    {
        return self::$counter;
    }

    public function getPayment()
    {
        return $this->payment;
    }

    public function setPayment($payment){
        $this->payment=$payment;
    }

    public function getExtra(){
        return $this->payment-$this->price;
    }

    public function setCountry($country){
        $this->country=$country;
    }


    public function getCountry()
    {
        return $this->country;
    }

    public function checking(){
        if ($this->country=='Czech' or $this->country=='Czech Republic' or $this->country=='Czechia' ){
            return $this->getPayment()/3.4 . ' CZK';
        }
        if ($this->country=='Russia' or $this->country=='russia' or $this->country=='RUSSIA' ){
            return ' RUB';
        }
        if ($this->country=='Switz' or $this->country=='Switzerland' or $this->country=='SWITZERLAND' ){
            return $this->getPayment()*0.012 . ' CHF';
        }
        if ($this->country=='JAPAN' or $this->country=='japan' or $this->country=='Japan' ){
            return ' JPY';
        }
        if ($this->country=='poland' or $this->country=='Polska' or $this->country=='POLAND' ){
            return ' PLN';
        }
    }
    public function rub(){
        return ' RUB = ';
    }












}
?>
<link rel="stylesheet" type="text/css" href="design.css"/>
<div class="bilet">
<? $tickone = new Tickets(31);
echo '<br>';
echo 'Билет №' . Tickets::getCounter() . '<br>';
$tickone->setPayment(50);
$tickone->setCountry('Czechia');
echo 'Стоимость: ' . $tickone->getPrice() . $tickone->rub() . $tickone->checking() . '<br>';
echo 'Принято к оплате: ' . $tickone->getPayment() . $tickone->rub() . $tickone->checking() .   '<br>';
echo 'Сдача: ' . $tickone->getExtra() . $tickone->rub() .  $tickone->checking() . '<br>';
?>
</div>

<div class="bilet">
<? $ticktwo = new Tickets(30);
echo '<br>';
echo 'Билет №' . Tickets::getCounter() . '<br>';
$ticktwo->setPayment(100);
$tickone->setCountry('Russia');
echo 'Стоимость: ' . $ticktwo->getPrice() . $tickone->rub() . $tickone->checking() . '<br>';
echo 'Принято к оплате: ' . $ticktwo->getPayment() . $tickone->rub() . $tickone->checking() . '<br>';
echo 'Сдача: ' . $ticktwo->getExtra() . $tickone->rub() . $tickone->checking() . '<br>';
?>
</div>

<div class="bilet">
<? $tickthree = new Tickets(28);
echo '<br>';
echo 'Билет №' . Tickets::getCounter() . '<br>';
$tickthree->setPayment(80);
$tickone->setCountry('japan');
echo 'Стоимость: ' . $tickthree->getPrice() . $tickone->rub() . $tickone->checking() . '<br>';
echo 'Принято к оплате: ' . $tickthree->getPayment() . $tickone->rub() . $tickone->checking() . '<br>';
echo 'Сдача: ' . $tickthree->getExtra() . $tickone->rub() . $tickone->checking() . '<br>';
?>
</div>


<div class="bilet">
<? $tickfour = new Tickets(29);
echo '<br>';
echo 'Билет №' . Tickets::getCounter() . '<br>';
$tickfour->setPayment(35);
$tickone->setCountry('Switz');
echo 'Стоимость: ' . $tickfour->getPrice() . $tickone->rub() . $tickone->checking() . '<br>';
echo 'Принято к оплате: ' . $tickfour->getPayment() . $tickone->rub() . $tickone->checking() . '<br>';
echo 'Сдача: ' . $tickfour->getExtra() . $tickone->rub() . $tickone->checking() . '<br>';
?>
</div>




