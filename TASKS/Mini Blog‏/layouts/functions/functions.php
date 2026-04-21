<?php


//login form
function loginform(){

echo '
<form  action="login.php" method="post">
<input type="email" name= "email">
<input type="password" name= "password">
<input type="submit" value="login">
</form>

';

}
  //find user
function findUser($input , $key,$array){
    foreach($array as $row){
        if($row[$key]===$input){
            return $row;
        }
    }
 return false;
}

//== if user is admin
function isAdmin() {
   if( isset($_SESSION['authUser'])&& $_SESSION['authUser']['role'] === 'admin')
    {
        return true ;
    }
     return false ;
}

// if user login?
function isLoggedIn() {
    if( isset($_SESSION['authUser']))
        {
            return true;
        }
        return false ;
}


?>