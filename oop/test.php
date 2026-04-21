<?php

class Staff {
    public $name;

    public function work(){
       return "Staff member is on duty  :" . $this->name;
    }

}

class Trainer extends staff {

    public function assignPlan(){
        return "Training plan has been created";
    }
} 
$train1 = new trainer();
$train1->name = "ahmed";

echo $train1->assignPlan();
echo "<br>";
echo $train1->work();

?>