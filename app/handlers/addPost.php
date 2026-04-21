<?php
  session_start();

  if (!isset($_SESSION['authUser'])) {
    header("Location: ../auth/login.php");
    exit;
  }

  if ($_SESSION['authUser']['role'] !== 'admin') {
    die("Access Denied");
  }

  if (!isset($_SESSION['posts'])) {
    $_SESSION['posts'] = [];
  }

  $_SESSION['posts'][] = [
    "title" => $_POST['title'] ?? '',
    "content" => $_POST['content'] ?? ''
  ];

  header("Location: ../posts/index.php");
  exit;
?>