<?php

abstract class BaseMember {
    protected $name ;
 
public function __construct($name){
    $this->name = $name;
   return "successful ";
}


}

class RegularMember  extends BaseMember {
 
}

?>