<?php
  session_start();

  if (!isset($_SESSION['authUser'])) {
    header("Location: ../auth/login.php");
    exit;
  }

  if ($_SESSION['authUser']['role'] !== 'admin') {
    die("Access Denied");
  }

  include("../layouts/header.php");
?>

<h2>Create Post</h2>

<form method="post" action="../handlers/addPost.php">
  Title: <input name="title" required><br><br>
  Content:<br>
  <textarea name="content" required></textarea><br><br>
  <button>Add Post</button>
</form>

<?php
  include("../layouts/footer.php");
?>