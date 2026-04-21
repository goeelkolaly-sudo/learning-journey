<?php 
$host = 'localhost';
$user ='root';
$password = '';
$database = 'school';

$connection = mysqli_connect ($host, $user, $password, $database);

if(!$connection){

die ("DB connection failed " . mysqli_connect_error());

}else{
    
echo "connected successfully". "<br>" ;
 }


?>