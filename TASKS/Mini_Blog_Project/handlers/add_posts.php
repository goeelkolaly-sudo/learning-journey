<?php
require_once '../config/users.php';
require_once '../layouts/functions/function.php';

if ($_POST) {
    $post = [
        "title"=> $_POST['title'],
        "content"=> $_POST['content'],
        "author"=> $_SESSION['authUser']['email']
    ];

    array_push($_SESSION['posts'], $post);

    echo "Post added successfully";
}
?>
