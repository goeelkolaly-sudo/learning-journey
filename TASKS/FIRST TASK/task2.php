<!-- <?php
  
  //task 1

$name=[ "Ahmed","sara","omar","mona" ];

echo "the first name is : ". $name[0] ."<br>";
echo "the last name is  : ". $name[count($name)-1] ."<br>";

 for($i=0 ;$i< count($name) ;$i++)
   {
    
    echo $name[$i]."<br>";
}

?> -->



<!-- 
<?php

//task 2

$user=[

    "name" => "yousef" ,
    "age"  => 21,
    "email"=> "yusf@.com",
    "isActive"=> true,
];

  echo $user["name"]."<br>";
  echo $user["email"]."<br>"."<br>" ;
  foreach($user as $key => $value)
  {

    echo $key. ":".$value."<br>";
  }
?> -->





<?php
//task 3
$mms=[
[
 "id" => 1,
 "name" => "yousef",
 "age" => 40,
 "role" => "admin",
],
[
    
    "id" => 2,
 "name" => "mona",
 "age" => 24,
 "role" => "editor",
    
],
[

"id" => 3,
 "name" => "amera",
 "age" => 26,
 "role" => "user",
]
    
];

foreach($mms as $user){

  //foreach($user as $key => $value)

  echo $user["name"] . "<br>" ;

  

}
?> 




<!-- 
<?php
//task 4
$users=[
[
 "id" => 1,
 "name" => "yousef",
 "age" => 40,
 "role" => "admin",
],
[
    
    "id" => 2,
 "name" => "mona",
 "age" => 24,
 "role" => "editor",
    
],
[

"id" => 3,
 "name" => "amera",
 "age" => 26,
 "role" => "user",
]
    
];

foreach($users as $users)
{
    if($users["age"]>=18 && $users["role"] != "admin" ) //user whose age is 18 or olaer and role not admin
    {
        echo $users["name"]."<br>";
    }
}
?> -->


<!-- 
<?php
//task5

$users=[
[
 "id" => 1,
 "name" => "yousef",
 "age" => 40,
 "role" => "admin",
],
[
    
    "id" => 2,
 "name" => "mona",
 "age" => 24,
 "role" => "editor",
    
],
[

"id" => 3,
 "name" => "amera",
 "age" => 26,
 "role" => "user",
]
    
];
var_dump($users). "<br>";

$total=count($users);

echo "<br>"."total user is :" . $total;
?>
 -->




