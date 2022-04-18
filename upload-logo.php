<?php
$title = 'Upload logo';
require 'include/header.php'; ?>
<!DOCTYPE html>
<html>
<body>
<h1>Upload a logo</h1>
<form action="save-logo.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>