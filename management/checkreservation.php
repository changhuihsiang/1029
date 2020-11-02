<?php
session_start();
    $userid = $_SESSION["user_type"];
    require "../includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    

    $sql = "SELECT * FROM reservation";
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
            $n = 1;
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
            echo "                <th scope='row'>$n</th>";
            echo "                <td>$name</td>";
            echo "                <td>";
             if ($restatus==1){
                echo "<font color='red'><b>等候中</font>";
            } elseif ($restatus==2) {
                echo "<font color='blue'>成功預約</font>";
            } elseif ($restatus==3) {
                echo "失敗預約";
            }
            echo "                </td>";
            echo "                <td><a href='lookreservation.php?rid=$rid'> <button type='button' class='btn btn-outline-dark'>查看</button></a></td>";
            echo "                <td><a href='deletereservation.php?rid=$rid'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
            echo "            </tr>";
            $n=$n+1;
        }
        echo "        </tbody>";
        echo "    </font></table>";
    }

$conn->close();
?>