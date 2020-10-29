<?php
    session_start();
    $userid = $_POST["userid"];
    $pass = $_POST["pass"];
    echo "$userid"."$pass";

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
    $sql = "SELECT * FROM mem WHERE username='$userid'";

$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];  
            $name = $row["name"];
            $passchk = $row["password"];

            echo "$passchk";
            if ($passchk==$pass){
                //如果是相等
                    echo "<hr>$name"."你好";
                    echo "登入成功";
                    $_SESSION["user_type"] = $id;
                    header("Location: page005-2.php?name=$name&userid=$userid");
            } else{
                if($pass==NULL){
                    header("Location: page005.php?userid=$userid&past=1");
                    //echo "string";
                    //請輸入密碼
                } else{
                header("Location: page005.php?userid=$userid&past=2");
                
                }
                //密碼錯誤
            }
        }
    } else {
        if($userid==NULL){
            header("Location: page005.php?userid=$userid&past=3");
            //請輸入帳號
        } else{
            echo "$userid";
        //帳號錯誤
            header("Location: page005.php?userid=$userid&past=4");
        }   
    }
$conn->close();
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         $id = $row["id"];  
    //         $name = $row["name"];
    //         $passchk = $row["password"];

    //         echo "$passchk";


    //         if ($passchk===$pass){
    //             //如果是相等
    //                 echo "<hr>$name"."你好";
    //                 echo "登入成功";
    //                 $_SESSION["user_type"] = $id;
    //                 header("Location: page005-2.php?name=$name&userid=$userid");
                    
    //         } else{
    //             header("Location: page005.php?userid=$userid&past=1")
    //             //密碼錯誤
    //             }
    //     }
    // } else{
    //     //查無此帳號
    //     header("Location: page005.php?userid=$userid&past=2");
    // }


?>