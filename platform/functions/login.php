<?php 

require_once __DIR__ . '/forms.php';
require_once __DIR__ . '/helper.php';


function login($email, $password, $users) {
    loginForm();
    $user = findUser($email, 'email', $users);
    if(!$user) {
        return "this user not found ";
    }

    if($user['password'] !== $password) {
        return "the email or the password is not correct ";
    }
    saveUserInCookie($user);
    return 'welcome ' . $user['email'];

}
