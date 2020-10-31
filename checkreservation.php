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
            echo "                <th scope='col'>電話</th>";
            echo "                <th scope='col'>預約日期</th>";
            echo "                <th scope='col'>預約時間</th>";
            echo "                <th scope='col'>預約人數</th>";
            echo "                <th scope='col'>備註</th>";
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
            if ($remarks==NULL){

                $remarks="無";
            }
            echo "            <tr align='center'>";
            echo "                <th scope='row'>$rid</th>";
            echo "                <td>$name</td>";
            echo "                <td>$phone</td>";
            echo "                <td>$datet</td>";
			echo "                <td>$timet</td>";
			echo "                <td>$peo</td>";
			echo "                <td>$remarks</td>";
			echo "                <td><a href='deletereservation.php?rid=$rid'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
            echo "            </tr>";
        }
        echo "        </tbody>";
        echo "    </font></table>";
    }

?>