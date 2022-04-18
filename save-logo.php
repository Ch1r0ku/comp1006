<?php
$title = 'Save logo';
require 'include/header.php'; ?>
<?php
$directory = "img/";
$target_file = $directory . basename($_FILES["fileToUpload"]["name"]);
$isgoodtoupload = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ". ";
    $isgoodtoupload = 1;
  } else {
    echo "File is not an image. ";
    $isgoodtoupload = 0;
  }
};

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "File too large. ";
    $uploadOk = 0;
  }

if($imageFileType != "png") {
  echo "PNG files only! ";
  $isgoodtoupload = 0;
};

if ($isgoodtoupload == 0) {
    echo "File not uploaded, try again! ";
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "New logo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. ";
    } else {
      echo "Sorry, there was an error uploading your file, try again! ";
    }
  };
?>