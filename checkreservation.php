<?php
session_start();
    $id = $_SESSION["user_type"];
    $userid = $_SESSION["user_type"];
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

    $sql = "SELECT * FROM reservation WHERE mid='$userid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            echo "    <table class='table'>";
            echo "        <thead class='thead-dark'>";
            echo "            <tr align='center'>";
            echo "                <th scope='col'>訂單編號</th>";
            echo "                <th scope='col'>聯絡人</th>";
            echo "                <th scope='col'>訂單狀態</th>";
            echo "                <th scope='col'>詳細資訊</th>";
            echo "                <th scope='col'>刪除</th>";
            echo "            </tr>";
            echo "        </thead>";
            echo "        <tbody>";
        while($row = $result->fetch_assoc()) {
            $rid = $row["rid"];
            $name = $row["name"];
            $phone = $row["phone"];
            $datet = $row["datet"];
            $timet = $row["timet"];
            $peo = $row["peo"];
            $remarks = $row["remarks"];
            $restatus = $row["restatus"];
            if ($remarks==NULL){
                $remarks="無";
            }
            echo "            <tr align='center'>";
            echo "                <th scope='row'>$rid</th>";
            echo "                <td>$name</td>";
            echo "                <td>";
             if ($restatus==1){
                echo "等候中";
            } elseif ($restatus==2) {
                echo "預約成功";
            } elseif ($restatus==3) {
                echo "預約失敗";
            }
            echo "                </td>";
            echo "                <td><a href='lookreservation.php?rid=$rid'> <button type='button' class='btn btn-outline-dark'>查看</button></a></td>";
            echo "                <td><a href='deletereservation.php?rid=$rid'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
            echo "            </tr>";
        }
        echo "        </tbody>";
        echo "    </font></table>";
    }

$conn->close();
?>