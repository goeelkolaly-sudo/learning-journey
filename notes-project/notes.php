<?php 
    require_once 'includes/session.php';
    require_once 'includes/functions.php';

    $notes = getNotes();

?>


<!DOCTYPE html>
<head> 
      <title> all notes </title> 
</head>
<body> 

<h1> All Notes </h1>
<br> 
<br> 
<a href='/notes-project/add_notes.php'> Add Note </a>
<br> 

<table>
  <tr>
    <th>Title</th>
    <th>Content</th>
    <th>created at </th>
    <th>delete</th>
    <th>update</th>
  </tr>


<?php 
    if(empty($notes)){
        echo "<p>no notes now </p>";
    } else {
        foreach($notes as $note) {
            echo "  <tr>
    <td>{$note['title']}</td>
    <td>{$note['content']}</td>
    <td>{$note['created_at']}</td>
    <td><a href='delete_note.php?id={$note['id']}'> delete </a></td>
    <td><a href='update_note.php?id={$note['id']}'> update </a></td>

  </tr>";
        }
    }
    
    ?>

</table>

</html>