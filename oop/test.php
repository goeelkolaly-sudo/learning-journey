<!-- <?php

class Staf
{
    public $name;

    public function work()
    {
        return "Staff member is on duty  :" . $this->name;
    }
}

class Trainer extends staf
{

    public function assignPlan()
    {
        return "Training plan has been created";
    }
}
$train1 = new trainer();
$train1->name = "ahmed";

echo $train1->assignPlan();
echo "<br>";
echo $train1->work();

?>







<?php

class Staff
{
    public function getSalary()
    {
        return "Base Salary : 1000";
    }
}

class Manager extends Staff
{
    public function getSalary()
    {
        return "manager salary :5000";
    }
}

class Coach extends Manager
{
    public function getSalary()
    {
        return "coach salary :3000";
    }
}
$B1 = new staff();
$B3 = new Coach();
$B2 = new Manager();

echo $B1->getSalary() . "<br>";
echo $B2->getSalary() . "<br>";
echo  $B3->getSalary();


?>
 -->


<?php
abstract class Member
{
    abstract public  function getMembershipPrice();
}

class StudentMember extends Member
{
    public function getMembershipPrice()
    {
        return "1000";
    }
}


class VipMember extends Member
{
    public function getMembershipPrice()
    {
        return "500";
    }
}

$bb = new VipMember();
echo $bb->getMembershipPrice();
?>