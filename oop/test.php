<?php

interface workable {

public function dowork();

}

trait TimeTrait{

public function showTime(){
echo time();
}
}


class Programmer implements workable {
    use TimeTrait;    
    
    public function dowork(){
        return "do work";
    }

}


?>