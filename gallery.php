<?php
$title = 'Gallery';
require 'include/header.php'; ?>

<h1>Gallery</h1>
<?php
if (!empty($_SESSION['username'])) {
    echo '<div id="output"></div>';
}
else {
    header("login.php");
    exit();
}
?>
<button onclick='galleryArray()'>Gallery</button>
</body>
</html>

