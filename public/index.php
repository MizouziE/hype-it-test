<?php
require __DIR__ . '/../src/bootstrap.php';
require_login();
?>

<?php view('header', ['title' => 'User Dashboard']) ?>

<p>Welcome <?= current_user() ?>, you made it!<a href="logout.php">Logout</a></p>

<?php view('footer') ?>