<?php
session_start();

    require "../includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    

    $sql = "SELECT * FROM mem ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            echo "    <table class='table'>";
            echo "        <thead class='thead-dark'>";
            echo "            <tr align='center'>";
            echo "                <th scope='col'>編號</th>";
            echo "                <th scope='col'>名稱</th>";
            echo "                <th scope='col'>帳號</th>";
            echo "                <th scope='col'>詳細資訊</th>";
            echo "                <th scope='col'>刪除</th>";
            echo "            </tr>";
            echo "        </thead>";
            echo "        <tbody>";
            $n = 1;
        while($row = $result->fetch_assoc()) {
        	$id = $row["id"];
            $name = $row["name"];
            $username = $row["username"];
            
            echo "            <tr align='center'>";
            echo "                <th scope='row'>$n</th>";
            echo "                <td>$name</td>";
            echo "                <td>$username</td>";
            echo "                <td><a href='lookrmember.php?id=$id&name=$name'> <button type='button' class='btn btn-outline-dark'>查看</button></a></td>";
            echo "                <td><a href='deletermember.php?id=$id'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
            echo "            </tr>";
            $n = $n+1;
        }
        echo "        </tbody>";
        echo "    </font></table>";
    }

$conn->close();
?>