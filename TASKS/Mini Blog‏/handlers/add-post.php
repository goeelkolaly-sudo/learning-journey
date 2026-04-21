<?php
require_once '../config/users.php';
require_once '../layouts/functions/functions.php';


//===step 4  admin add posts

   //if non admin
if (!isAdmin()){
    echo "access denied";
    exit;
} 

// is admin >> show form
echo '
<form  method="post">
<input type="text" name="title"  placeholder="Post Title" required ><br>
<input type="text" name="content"  placeholder="post content" required ><br>

    <input type="submit" value="Add Post">
</form>
';



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title']) && isset($_POST['content'])) 
    {
    $post = [
        "title"=> $_POST['title'],
        "content"=> $_POST['content'],
        "author"=> $_SESSION['authUser']['email']
    ];

    $_SESSION['posts'][] = $post;

    echo "Post added successfully";
}


?>