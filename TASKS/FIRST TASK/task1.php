<!-- <?php

//Task1 Arithmetic Operators

$num1=20;
$num2=30;
   //sum
 $sum= $num1+$num2;
 echo "sum:$sum";
 echo"<br>";
   //sub
 $sub=$num1-$num2;
 echo "sub:$sub";
  echo"<br>";
  //mul
 $mult=$num1*$num2;
 echo "mul:$mult";
 echo"<br>";
  //div
  $Div=$num1/$num2;
   var_dump($Div);
   echo"<br>";
   //Remainder
  $Rema=$num1%$num2;
  echo "Rema:$Rema";

?>  -->





<!-- <?php
 //Task2_Even or odd Number
 $number=27;

if( $number % 2 == 0){

  echo "even";
}

else{
  echo"odd";
}

?>  -->



<!-- <?php
//Task3 age validation
  $age=12;
  if($age >=18){
    echo "allowed";
  }else{

    echo "not allow";
  }

  ?> -->



<!-- <?php
  //Task4 grade system
  $grade=55;
  if($grade >= 90){
    echo "Excellent";
  }
  elseif($grade >= 75 && $grade < 90 ){

    echo"very good";
  }
  elseif($grade >= 50 && $grade < 75){
    echo "pass";
  }else{

    echo"failed";
  }

 ?> -->


<!-- <?php
 
  //Task5 _ logical Operators

 $age=20;
 $hasID=true;
 if($age >= 18 && $hasID == true){
   echo "you can enter ";
 }else{

   echo "access denied";
 }


?> -->


 <!-- <?php
  //task6

  $email="admin@test.com";
  $password="123456";
  if($email==="admin@test.com" && $password==="123456"){
    echo "login successful";
  }else{
    echo"invalid credentials";
  }

 ?> -->




<!-- <?php
// Task7
 $age=30;
 $isAdmin=true;
 if($age > 18){
  if($isAdmin===true){
    echo "welcome Admin";
  }else{
    echo "welcome User";

  }
    
 }elseif($age <= 18){
    echo "Access Denied";
 }
?> -->



<?php
 //task8
$grade = 90;
switch($grade){

  case ($grade >= 90):
    echo "excellent";
    break;
  case (  $grade >= 75 && $grade <= 89):
    case "very good";
    break;
  case ($grade >= 50 && $grade <= 74):
    case "pass";
   break;

   default:
   echo "failed";
   break;
}
?>




<!-- <?php
 //Bonus task
 $username="yusf";
 $age=60;
 $isactive=true;
 if($isactive && $age >= 18){
  echo "Account active";
 }else{
  echo "Account locked ";
 }

?> -->