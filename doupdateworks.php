<?php
    session_start();
    $id = $_SESSION["user_type"];
    $wname = $_POST["wname"];
    $wintroduction = $_POST["wintroduction"];
    $wshort = $_POST["wshort"];
    $wid =  $_GET["wid"];
    echo "$wid"."$wname"."$wintroduction"."$wshort";
    require "includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into 
    $sql = "UPDATE works SET wname='$wname',wintroduction='$wintroduction',wshort='$wshort' WHERE wid='$wid' ";

    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    $conn->close();
     header("Location: page005-2-3.php");
    exit;
   
?>