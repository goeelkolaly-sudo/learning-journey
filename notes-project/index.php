<?php 
// crud -> create -> read -> update -> delete 

// notes-project 
//|
//| -> includes 
//    --> session.php done 
//    --> functions.php
//add_note.php
//notes.php
//delete_note.php
//update_note.php
// index.php // entery point 

// echo  uniqid();
// echo  date("Y-m-d h:i:s");


require_once 'includes/session.php'
?>

<!DOCTYPE html>
<head> 
      notes sys  
</head>
<body> 

<h1> Welome to Notes Sys </h1>

<a href='/notes-project/add_notes.php'> Add Note </a>
<br>
<br>
<br>
<a href='/notes-project/notes.php'> Show Notes </a>


</body>
</html>
