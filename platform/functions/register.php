<?php 

require_once __DIR__ . '/helper.php';
require_once __DIR__ . '/forms.php';


function saveUserData($user) {
    // var_dump($_SESSION['users'][] = $user );
    // return
    // array_push($_SESSION['users'], $user);
    $_SESSION['users'][] = $user;
}

function register($userInputs, $key, $array) {
    registerForm();
    $foundedUser = findUser($userInputs['email'], 'email', $array);
    if($foundedUser){
        return 'this is email is used ';
    }
    $user = createUserObj($userInputs);
    saveUserData($user);
    return "the user created ";
} 

