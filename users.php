<?php
$title = 'Users';
require 'include/header.php'; ?>

<h1>Users</h1>
<?php
if (!empty($_SESSION['username'])) {
    echo '<a href="game-details.php">Add a New Game</a>';
}

try {
    require 'include/db.php';

    $sql = "SELECT * FROM examusers";

    $cmd = $db->prepare($sql);
    $cmd->execute();
    $users = $cmd->fetchAll();

    echo '<table class="table table-striped table-hover">
        <thead>
            <th>User ID</th>
            <th>Username</th>     
        </thead>';

    foreach ($users as $v) {
        echo '<tr><td>';
        if (!empty($_SESSION['username'])) {
            echo '<p>' . $v['userId'] . '</p>';
        }
        echo '</td>';

        echo '<td>';
        if (!empty($_SESSION['username'])) {
            echo '<p>' . $v['username'] . '</p>';
        }
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';

    $db = null;
}
catch (exception $e) {
    header('location:error.php');
}
?>
</body>
</html>

