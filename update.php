<?php
    session_start();
    $id = $_SESSION["user_type"];
    $name = $_POST["name"];
    $userid = $_POST["userid"];
    $passchk = $_POST["passchk"];
    $birth =$_POST["birth"];
    $phone =$_POST["phone"];

    echo "$id"."$name"."$passchk"."$birth"."$phone";


    // $servername = "localhost";
    // $username = "root";
    // $password = "00000000";
    // $dbname = "gallery";
    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

       require "includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into 
    $sql = "UPDATE mem SET name='$name',username='$userid',password='$passchk',birth='$birth',phone='$phone' WHERE id='$id' ";

    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    $conn->close();
    header("Location: page005-2.php");
    exit;
   
?>