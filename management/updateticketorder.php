<?php
	$toid = $_GET["toid"];
	$tostatus = $_POST["tostatus"];
	echo "$toid<br>";
	echo "$tostatus<br>";
	require "../includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into 
    $sql = "UPDATE ticketorder SET tostatus='$tostatus' WHERE toid='$toid' ";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    $conn->close();
    header("Location: lookticketorderlist.php?toid=$toid&tostatus=$tostatus");
    exit;
?>