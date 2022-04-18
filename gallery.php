<?php
$title = 'Gallery';
require 'include/header.php'; ?>

<h1>Gallery</h1>
<?php
if (!empty($_SESSION['username'])) {
    echo '<p id="output"></p>';
}
else {
    header("login.php");
    exit();
}
?>
</body>
</html>

