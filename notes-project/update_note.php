<?php
    require_once 'includes/session.php';
    require_once 'includes/functions.php';

    $note_index = getById($_GET['id'], $_SESSION['notes']);
    $note = $_SESSION['notes'][$note_index];
    $error = "";
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        update($_GET['id'], $_POST);
        header("Location: notes.php");
    }
?>

<!DOCTYPE html>
<head> 
      <title> update  Note </title> 
</head>
<body> 

<h1> update Note </h1>
<br> 
<br> 

<?php if($error) echo "this error " .  $error ?>
<br> 
<br> 

<form method="POST">
    <input type="text" name="title" id="" value=<?php echo $note['title']?> placeholder="title">
    <br>
    <br>
    <textarea name="content" placeholder="content" id="" row="5" col="5">
        <?php echo $note['content']?>
    </textarea>
    <br>
    <br>
    <button type="submit"> update note </button>

</form>


</body>
</html>

