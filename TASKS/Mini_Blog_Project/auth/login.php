<?php
session_start();
include '../layouts/header.php';
require_once '../config/users.php';
require_once '../layouts/functions/function.php';

//=====step 2 login form

if(!isLoggedIn())
    {
loginform();


}

if($_POST){
$user = findUser($_POST['email'],'email', $_SESSION['users']);

if (!$user)
    {
        echo "user not found";
        exit;
    }

    if($user['password']!==$_POST['password'])
        {
            echo "wrong passwrd or email";
            exit;
        }

        if (!$user['isActive']) {
        echo "user not active";
        exit;
    }

        $_SESSION['authUser'] =$user;
        //Bonus 1 welcome admin or welcome user
        echo "welcome:" . $user['role'];
}

include '../layouts/footer.php';
?>
