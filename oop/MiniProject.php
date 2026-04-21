<?php

abstract class BaseMember {
    protected $name ;
 
public function __construct($name){
    $this->name = $name;
   return "successful register";
}


}

class RegularMember  extends BaseMember {
 public function __construct($name)
 {
    return parent::__construct($name);
 }
  public function getAccess(){
    return "you only have access to the gym " .$this->name;
  }
}

class VipMember extends BaseMember {
    private $localNumber;
    public function __Construct($name, $localNumber){
        parent::__construct($name);
        $this->localNumber = $localNumber;
    }
    public function getAccess(){
        return "You are allowed to enter the lounge, sauna, and swimming pool";
    }
    public function getLocker(){
        return $this->localNumber;
    }

}

$m1 = new RegularMember("yusf");
$v1 = new VipMember("ahmed", 20);

 echo $m1->getAccess()."<br>";
 echo $v1->getAccess()."<br>";

 echo $v1->getLocker();


?>