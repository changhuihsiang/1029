<?php
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

    
	case "reg":
	// 檢查帳號是否重複
	$row = All("select * from mem where acc = '".$_POST["acc"]."'")[0];
	// 帳號重複，跳出訊息後返回上一頁
	if(!empty($row["acc"]))	echo "<script>alert('不可重複'); window.history.back();</script>";
	// 帳號可用，寫入資料庫後跳出訊息，返回首頁
	else 
	{
		All("insert into user value(null, '".$_POST["acc"]."', '".$_POST["pw"]."', '".$_POST["mail"]."')");
		echo "<script>alert('註冊完成，歡迎加入'); window.location='index.php';</script>";
	}
	break;

	?>