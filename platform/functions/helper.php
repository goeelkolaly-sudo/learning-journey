<?php 


function findUser($input,$key, $array) {
    foreach($array as $row){
        if($row[$key] === $input){
            return $row;
        }
    }
    return false;
}

function createUserObj($data) {
    return [
        "fullName" => $data['fullName'],
        "email" => $data['email'],
        "password" => $data['password'],
        "isActive" => true,
        "role" => "user"
    ];
}

function saveUserInCookie($data) {
    setcookie('name', $data['name'], 1000);
    setcookie('email', $data['email'], 1000);
}

// crud 
// create -> read -> update -> delete 
