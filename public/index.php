<?php
require __DIR__ . '/../src/bootstrap.php';
require_login();
?>

<?php view('header', ['title' => 'User Dashboard']) ?>

<p>Welcome <?= current_user() ?>, you made it!</p> <br><a href="logout.php">Logout</a>

<h2>List of Users:</h2>
<div class="">
    <ul>
        <?php
            $sql = "SELECT username FROM users";

            // run the query. Will return a resource or false
            $list = db()->prepare($sql);
            $list->execute();

            $users = $list->fetchAll(PDO::FETCH_COLUMN, 0);

            // if it ran OK
            if ($users) {
                foreach ($users as $user) {
                    // output the data
                    echo '<li>' . $user;
                }
            }
        ?>
    </ul>
</div>

<?php view('footer') ?>