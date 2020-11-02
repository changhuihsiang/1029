<?php
session_start();
    $userid = $_SESSION["user_type"];
    require "../includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    

    $sql = "SELECT * FROM works";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            echo "    <table class='table'>";
            echo "        <thead class='thead-dark'>";
            echo "            <tr align='center'>";
            echo "                <th scope='col'>編號</th>";
            echo "                <th scope='col'>創作者</th>";
            echo "                <th scope='col'>作品名稱</th>";
            echo "                <th scope='col'>作品小圖</th>";
            echo "                <th scope='col'>詳細資料</th>";
			echo "                <th scope='col'>刪除</th>";
            echo "            </tr>";
            echo "        </thead>";
            echo "        <tbody>";
            $n = 1;
        while($row = $result->fetch_assoc()) {
            $wid = $row["wid"];
            $wname = $row["wname"];
            $mid = $row["mid"];
            $wlink = $row["wlink"];
            	$sqll = "SELECT * FROM mem where id=$mid";
			    $resultt = $conn->query($sqll);
			    if ($resultt->num_rows > 0) {
			    	while($row = $resultt->fetch_assoc()) {
			    		$name = $row["name"];
			    	}}
            echo "            <tr align='center'>";
            echo "                <th scope='row'>$n</th>";
            echo "                <td>$name</td>";
            echo "                <td>$wname</td>";
             echo "                <td>";

            $tags="<img src='../uploads/^^^^'class='card-img-top;' style='height: 5rem;' >"; 
            echo str_replace("^^^^",$wlink,$tags);
            echo "                </td>";
            echo "                <td><a href='looktwords.php?wid=$wid'> <button type='button' class='btn btn-outline-dark'>查看</button></a></td>";
            echo "                <td><a href='deletewords.php?wid=$wid'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
            echo "            </tr>";
            $n=$n+1;
        }
        echo "        </tbody>";
        echo "    </font></table>";
    }

$conn->close();
?>