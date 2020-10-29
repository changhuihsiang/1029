<?php
	session_start();
	$mid = $_SESSION["user_type"];
	$wid = $_POST["wid"];
	$message = $_POST["message"];


    echo "$mid"."$wid"." $message";

	// $servername = "localhost";
 //    $username = "root";
 //    $password = "00000000";
 //    $dbname = "gallery";
 //    // Create connection
 //    $conn = new mysqli($servername, $username, $password, $dbname);
 //    // Check connection
 //    if ($conn->connect_error) {
 //        die("Connection failed: " . $conn->connect_error);
 //    }

       require "includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    
    $sql = "INSERT INTO message( mid, wid, message) VALUES ('$mid','$wid','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "成功";
        header("Location: works.php?wid=$wid");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();






?>