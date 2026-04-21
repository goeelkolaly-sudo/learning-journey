<?php
require_once '../config/users.php';
require_once '../layouts/functions/function.php';

// == step 5
//only logged_in users can see posts
if (!isLoggedIn()) {
    echo "Please login to view posts";
    exit;
}

foreach($_SESSION['posts'] as $post)
    {
        echo $post['title'] ."<br>";
        echo $post['content']. "<br>";
        echo $post ['author'] ;
    }

// Bonus 2 nomber of post
echo "Total posts: " . count($_SESSION['posts']) . "<br>";

// Bonus if no post
if (count($posts) === 0) {
    echo "No posts available";
    exit;
}

?>
