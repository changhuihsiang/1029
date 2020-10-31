<?php
session_start();
    $id = $_SESSION["user_type"];
    $userid = $_SESSION["user_type"];
    require "includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    
    $sql = "SELECT * FROM works WHERE mid='$userid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            echo "    <table class='table'>";
            echo "        <thead class='thead-dark'>";
            echo "            <tr align='center'>";
            echo "                <th scope='col'>作品編號</th>";
            echo "                <th scope='col'>作品名稱</th>";
            echo "                <th scope='col'>作品監視</th>";
            echo "                <th scope='col'>作品編輯</th>";
            echo "                <th scope='col'>刪除</th>";
            echo "            </tr>";
            echo "        </thead>";
            echo "        <tbody>";
        while($row = $result->fetch_assoc()) {
            $wid = $row["wid"];
            $wname = $row["wname"];
            $wshort = $row["wshort"];
            $wlink = $row["wlink"];
            $n = 1 ;
            echo "            <tr align='center'>";
            echo "                <th scope='row'>$n</th>";
            echo "                <td>$wname</td>";
            echo "                <td>";

			$tags="<img src='uploads/^^^^'class='card-img-top;' style='height: 5rem;' >"; 
            echo str_replace("^^^^",$wlink,$tags);
			echo "                </td>";

            echo "                <td><a href='updataworks.php?wid=$wid'> <button type='button' class='btn btn-outline-dark'>編輯</button></a></td>";
			echo "                <td><a href='deleteworks.php?wid=$wid'> <button type='button' class='btn btn-outline-dark'>刪除</button></a></td>";
            echo "            </tr>";
            $n = $n+1 ;
        }
        echo "        </tbody>";
        echo "    </font></table>";
    }

?>