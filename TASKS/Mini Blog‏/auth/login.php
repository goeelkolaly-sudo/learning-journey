<?php


include '../layouts/header.php';
require_once '../config/users.php';
require_once '../layouts/functions/functions.php';

//=====step 2 login form

if(!isLoggedIn())
    {
loginform();

}




   if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
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
        

        // redirect to  >>>> post page login

        header ("location:posts.php");
        exit;
}


include '../layouts/footer.php';







?>