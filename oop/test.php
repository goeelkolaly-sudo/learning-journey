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

?>