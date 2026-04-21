<?php
include '../layouts/header.php';
require_once '../config/users.php';
require_once '../layouts/functions/function.php';

//===step 4  admin add posts

   //if non admin
if (!isAdmin()){
    echo "access denied";
    include('../layouts/footer.php');
    exit;
} 

// is admin
echo '
<form action="../handlers/add_post_handler.php" method="post">
<input type="text" name="title" ><br>
<input type="text" name="content" ><br>

    <input type="submit" value="Add Post">
</form>
';

include('../layouts/footer.php');
?>
