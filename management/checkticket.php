<?php
session_start();
    $userid = $_SESSION["user_type"];
    require "../includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    

    $sql = "SELECT * FROM ticketorder";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            echo "    <table class='table'>";
            echo "        <thead class='thead-dark'>";
            echo "            <tr align='center'>";
            echo "                <th scope='col'>編號</th>";
            echo "                <th scope='col'>購票者</th>";
            echo "                <th scope='col'>付款方式</th>";
            echo "                <th scope='col'>取票方式</th>";
            echo "                <th scope='col'>總金額</th>";
			echo "                <th scope='col'>查看明細</th>";
			echo "                <th scope='col'>刪除</th>";
            echo "            </tr>";
            echo "        </thead>";
            echo "        <tbody>";
            $n = 1;
        while($row = $result->fetch_assoc()) {
            $toid = $row["toid"];
            $mid = $row["mid"];
            $payment = $row["payment"];
            $gettickets = $row["gettickets"];
            $sum = $row["sum"];
            $tostatus = $row["tostatus"];
            	$sqll = "SELECT * FROM mem where id=$mid";
			    $resultt = $conn->query($sqll);
			    if ($resultt->num_rows > 0) {
			    	while($row = $resultt->fetch_assoc()) {
			    		$name = $row["name"];
			    	}}
            	if ($payment==1){
                	$payments ="現場付款";
	            } elseif ($payment==2) {
	                $payments = "LINE PAY";
	            } elseif ($payment==3) {
	                $payments ="信用卡付款";
	            } elseif ($payment==4) {
	                $payments = "超商代碼付款";
	            }
            	if ($gettickets==1){
                	$getticket ="現場代碼取票";
	            } elseif ($gettickets==2) {
	                $getticket = "超商代碼取票";
	            } elseif ($gettickets==3) {
	                $getticket ="手機電子票";
	            } 
            if ($remarks==NULL){
                $remarks="無";
            }
            echo "            <tr align='center'>";
            echo "                <th scope='row'>$n</th>";
            echo "                <td>$name</td>";
            echo "                <td>$payments</td>";
            echo "                <td>$getticket</td>";
            echo "                <td>$sum</td>";
            echo "                <td><a href='lookticketorderlist.php?toid=$toid&tostatus=$tostatus'> <button type='button' class='btn btn-outline-dark'>查看</button></a></td>";
            echo "                <td><a href='deleteticketorder.php?toid=$toid'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
            echo "            </tr>";
            $n=$n+1;
        }
        echo "        </tbody>";
        echo "    </font></table>";
    }

$conn->close();
?>