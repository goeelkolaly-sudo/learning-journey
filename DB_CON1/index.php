<?php
include "config.php";

 $result = mysqli_query($connection, "select * from students ");



?>
<a href="create.php "> add student </a>
<table border="1">
<tr>
<th> id  </th>
<th>  name </th>
<th> email </th>
<th> national id </th>
<th>student phone  </th>
<th>parent phone  </th>
</tr>

<?php while ($row = mysqli_fetch_assoc ($result)) { ?>

<tr>
<td>  <?= $row['id']?> </td>
<td> <?= $row['name']?> </td>
<td>  <?= $row['email']?> </td>
<td>  <?= $row['national_id']?> </td>

<td> <?= $row['student_phone']?> </td>
<td> <?= $row['parent_phone']?> </td>

</tr>
<?php }?>

</table>    