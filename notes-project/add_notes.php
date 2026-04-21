<?php 
    require_once 'includes/session.php';
    require_once 'includes/functions.php';

    // var_dump($_SERVER['REQUEST_METHOD']);
    $error = "";
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $title = trim($_POST['title']);
        $content = trim($_POST['content']);

        if(empty($title) || empty($content)) {
            $error = " All Fields Are Reqierd";
            
        }else {
            create($title, $content);
            header("Location: notes.php");
            exit;
        }
    }
?>


<!DOCTYPE html>
<head> 
      <title> Add New Note </title> 
</head>
<body> 

<h1> Add Note </h1>
<br> 
<br> 

<?php if($error) echo "this error " .  $error ?>
<br> 
<br> 

<form method="POST">
    <input type="text" name="title" id="" placeholder="title">
    <br>
    <br>
    <textarea name="content" placeholder="content" id="" row="5" col="5"></textarea>
    <br>
    <br>
    <button type="submit"> add note </button>

</form>


</body>
</html>

