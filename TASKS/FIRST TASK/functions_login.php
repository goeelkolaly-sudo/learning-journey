<?php
//step1
$users = [
    [
        "email" => "admin@mail.com",
        "password" => "1234",
        "role" => "admin",
        "isActive" => true,
        "skills" => "php,mysql,html"
    ],
    [
        "email" => "yusf@example.com",
        "password" => "7545",
        "role" => "admin",
        "isActive" => true,
        "skills" => "javascript,python,css"
    ],
    [
        "email" => "user@example.com",
        "password" => "7545",
        "role" => "user", 
        "isActive" => true,
        "skills" => "javascript,php.c++"
    ]
];

//step2 variables to simulate
$inputemail= "admin@mail.com";
$inputpassword="1234";


 


//step3 function
//step3  >> 1
function findUser($users ,$email ,$password){ 
foreach($users as $user)
    {
    if($user['email'] === $email && $user['password']===$password)
    {
       return $user;
    }
    }
  return null;
}
 //step3  >> 2
function isUserActive($user){
    if($user['isActive']){
        return true;
    }
    return false;
}

//step3  >> 3
function getWelcomeMessage($user){
    $welcome=$user['role']==='admin'? "welcome admin" :"welcome user";
    return $welcome;
}

//step3  >> 4
function showSkills($skills){
    $skills=explode(",",$skills);
    foreach($skills as $skill)
    {
      echo "skills:". $skill ."<br>";
    }
  $return=implode( "_",$skills);
  echo "<br> your skill is :".$return;
}


//step 5=============> Bonus


function countUser($users){
    $total=count($users);
    return $total;
}

function isAdmin($user){
    if($user["role"]==="admin"){
        return true;
}
        return false;
}


//step 4
  //check if user is exist
 $check= findUser($users ,$inputemail ,$inputpassword);
 if($check===null)
    {
        echo "Invalid email or password";
        exit;
    }
     //check if  user is active
   if(!isUserActive($check))
    {
        echo " your account is  disabel";
        exit;
    }



   echo getWelcomeMessage($check)."<br>"."<br>";

  showSkills($check['skills']). "<br>";

  echo  " <br> total users in system :". countUser($users);
  echo  "<br> ". isAdmin($check);

?>

