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
    $sql = "SELECT * FROM ticketorder WHERE mid='$userid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            echo "    <table class='table'>";
            echo "        <thead class='thead-dark'>";
            echo "            <tr align='center'>";
            echo "                <th scope='col'>訂單編號</th>";
            echo "                <th scope='col'>取票方式</th>";
            echo "                <th scope='col'>總金額</th>";
            echo "                <th scope='col'>訂單明細</th>";
            echo "                <th scope='col'>訂單狀態</th>";            
            echo "                <th scope='col'>刪除</th>";
            echo "            </tr>";
            echo "        </thead>";
            echo "        <tbody>";
        while($row = $result->fetch_assoc()) {
            $sum = $row["sum"];
            $gettickets = $row["gettickets"];
            $toid = $row["toid"];
            $tostatus = $row["tostatus"];
            
            echo "            <tr align='center'>";
            echo "                <th scope='row'>$toid</th>";
            echo "                <td>";
            if($gettickets==1){
                echo"現場代碼取票";
            } elseif ($gettickets==2) {
                echo"超商代碼取票";
            } elseif ($gettickets==3) {
                echo"手機電子票";
            }
            echo "                </td>";
            echo "                <td>$sum</td>";
           
            echo "                <td>";
            if($tostatus==1){
                echo "<font color='#000000'>尚未繳款</font>";
            } elseif ($tostatus==2) {
                echo"<font color='#000000'>訂單處理中</font>";
            } elseif ($tostatus==3) {
                echo"<font color='#000000'>已收單</font>";
            }
            echo "</td>";
            echo "                <td><a href='looktitcketorderlist.php?toid=$toid' style='color:#000000;'class='btn btn-outline-dark'>查閱</a></td>";

            echo "                <td><a href='deletetitcketorder.php?toid=$toid'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
            echo "            </tr>";
        }
        echo "        </tbody>";
        echo "    </table>";
    }

?>