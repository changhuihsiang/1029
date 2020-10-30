<?php
session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
	$userid = $_SESSION["user_type"];
	$toid = $_GET["toid"];

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

	$sql = "DELETE FROM ticketorder WHERE toid =$toid";
    $result = $conn->query($sql);
    $sqll = "DELETE FROM ticketorderlist WHERE toid =$toid";
    $resultt = $conn->query($sqll);
    echo "成功刪除";
	header("Location: page005-2-2-1.php");
$conn->close();

?>