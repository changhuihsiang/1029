<?php
	session_start();


	$mid = $_SESSION["user_type"];
	$wname = $_POST["wname"];
    $wintroduction = $_POST["wintroduction"];
    $wshort = $_POST["wshort"];
    $link = $_POST["fileToUpload"];
    echo "$wname"."$wintroduction"." $wshort"."$link"."$mid";


echo "<hr>";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "檔案名稱已有人使用";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
  echo "檔案太大囉";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "檔案只限 JPG, JPEG, PNG & GIF .";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  
    $link = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
	$servername = "localhost";
    $username = "root";
    $password = "00000000";
    $dbname = "gallery";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    
    $sql = "INSERT INTO works( mid, wname, wintroduction, wshort, wlink) VALUES ('$mid','$wname','$wintroduction','$wshort','$link')";

    if ($conn->query($sql) === TRUE) {
        echo "成功";
        header("Location: page003.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}







?>