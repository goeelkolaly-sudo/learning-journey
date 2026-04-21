<?php
 session_start();
//========= step 1
if(!isset($_SESSION["users"])){
$_SESSION["users"]=[
    [
        "fullName" => "admin",
        "email" => "admin@mail.com",
        "password" =>"123",
        "role" => "admin",
        "isActive" => true,
    ],
    [
        "fullName" => "user",
        "email" => "user@mail.com",
        "password" =>"123",
        "role" => "user",
        "isActive" => true,
    ],
];
}

//====step 3

if (!isset($_SESSION['posts'])) {
    $_SESSION['posts'] = [
        [
            "title" =>"First Post",
            "content" =>"Hello world",
            "author" => "admin@mail.com"
        ]
    ];
}




?>