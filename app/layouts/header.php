<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mini Blog</title>
</head>
<body>
<?php if (isset($_SESSION['authUser'])): ?>
  Welcome <?= $_SESSION['authUser']['fullname'] ?> |
  <a href="/app/auth/logout.php">Logout</a>
  <hr>
<?php endif; ?>
