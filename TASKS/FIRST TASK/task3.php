<!-- The “Clean & Secure” Login System (PHP) -->
<?php
//STEP 2
$inputEmail="AdMiN@SyStEm.com";
$inputPassword="123";
//STEP 1
$users=[
[ 
    "name"     => "anas nashaat",
    "email"    => "admin@system.com",
    "role"     => "admin",
    "isActive" => true,
    "password" => "123",
    "skills" => "PHP, JS"
],
[
    

 "name"      => "menna ali",
 "email"     => "user@system.com",
 "role"   =>"user",
 "isActive" => true,
 "password"  =>"3233",
 "skills"   => "HTML, CSS"
],
[
    "name"   => "seif ahmed",
    "email"  => "editor@system.com",
    "role"   => "editor",
    "isActive"  => false,
    "password"  =>"355",
    "skills" => "Writing, Editing"
]
    
];
//STEP 3
$inputEmail=  strtolower(trim($inputEmail));


$currentUser = null;
 //STEP 4
foreach($users as $user){
    if($user["email"] === $inputEmail && $user["password"] === $inputPassword){
        $currentUser =  $user;
        break;
    }
}
 //STEP 5
if($currentUser === null ){
   echo  "login failed : user not fonund";

}else{
    if(!$currentUser["isActive"] ){
        echo "system Alert : your account is deactivated";
    }else{ 
       //STEP 6
   $greeting = ($currentUser["role"]==="admin") ? "master" : "user" ;
     
    echo "welcome back , $greeting  ".":". $currentUser["name"] ;
    }
}


  

?> 