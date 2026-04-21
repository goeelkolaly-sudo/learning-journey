<?php
  session_start();

  if (isset($_SESSION['authUser'])) {
    header("Location: posts/index.php");
    exit;
  }

  header("Location: auth/login.php");
  exit;
?>