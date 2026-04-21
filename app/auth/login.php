<?php
  require_once("../config/users.php");
  session_start();

  if (isset($_SESSION['authUser'])) {
    header("Location: ../posts/index.php");
    exit;
  }

  if (isset($_POST['login'])) {
    foreach ($users as $u) {
      if ( $u['email'] === $_POST['email'] && $u['password'] === $_POST['password'] && $u['isActive']) {
        $_SESSION['authUser'] = $u;
        header("Location: ../posts/index.php");
        exit;
      }
    }

    $error = "Invalid credentials";
  }
?>

<form method="post">
  Email: <input name="email" required><br>
  Password: <input type="password" name="password" required><br>
  <button name="login">Login</button>
</form>

<?= $error ?? '' ?>