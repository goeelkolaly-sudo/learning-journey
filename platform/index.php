<?php

require_once __DIR__ . '/init.php';
require_once __DIR__ . '/functions/register.php';
require_once __DIR__ . '/functions/login.php';


// var_dump($users);

// loginForm();



// $msg = register($_POST, 'email', $users);

// echo $msg;

$msg = login($_POST['email'], $_POST['passowrd'], $users);

echo $msg;
