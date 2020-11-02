<?php
	$restatus=$_POST["restatus"];
	$rid=$_GET["rid"];
	echo "$restatus"."<br>$rid";
	require "../includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into 
    $sql = "UPDATE reservation SET restatus='$restatus' WHERE rid='$rid' ";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    $conn->close();
    header("Location: lookreservation.php?rid=$rid");
    exit;

?>