<?php
  session_start();

  if (!isset($_SESSION['authUser'])) {
    header("Location: ../auth/login.php");
    exit;
  }

  if (!isset($_SESSION['posts'])) {
    $_SESSION['posts'] = [];
  }

  include("../layouts/header.php");
?>

<h2>Posts</h2>

<?php if (empty($_SESSION['posts'])): ?>
  <p>No posts yet</p>
<?php endif; ?>

<?php foreach ($_SESSION['posts'] as $post): ?>
  <h4><?= htmlspecialchars($post['title']) ?></h4>
  <p><?= htmlspecialchars($post['content']) ?></p>
  <hr>
<?php endforeach; ?>

<?php if ($_SESSION['authUser']['role'] === 'admin'): ?>
  <a href="create.php">Add Post</a>
<?php endif; ?>

<?php
  include("../layouts/footer.php");
?>