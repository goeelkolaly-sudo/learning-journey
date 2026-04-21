<?php

class Car{

private $speed;

public function __construct($speed){

$this->speed = $speed;

}

public function accelerate($ammount){
    if($this->speed + $ammount > 200){
        echo "risk";
    }else{
    $this->speed += $ammount;
    }
}

public function getSpeed(){
    return $this->speed;
}



}
$car1 = new car(20);
$car1->accelerate(200);
echo $car1->getSpeed();

?>