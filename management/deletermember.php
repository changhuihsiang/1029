<?php
session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
	$id = $_GET["id"];

	// $servername = "localhost";
	 //    $username = "root";
	 //    $password = "00000000";
	 //    $dbname = "gallery";
	 //    // Create connection
	 //    $conn = new mysqli($servername, $username, $password, $dbname);
	 //    // Check connection
	 //    if ($conn->connect_error) {
	 //        die("Connection failed: " . $conn->connect_error);
	 //    }

    require "../includes/db.php";
	$ticketordersql = "SELECT * FROM ticketorder WHERE mid =$id";
	$result = $conn->query($ticketordersql);
  	if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
    		$toid = $row["toid"];
			$ticketorderlistsql = "DELETE FROM ticketorderlist WHERE toid =$toid";
			$resultt = $conn->query($ticketorderlistsql);
    	}
    }

	$memsql = "DELETE FROM mem WHERE id =$id";
	$memresult = $conn->query($memsql);

	$carticketsql = "DELETE FROM carticket WHERE mid =$id";
	$carticketresult = $conn->query($carticketsql);

	$reservationsql = "DELETE FROM reservation WHERE mid =$id";
	$reservationresult = $conn->query($reservationsql);

	$ticketordersql = "DELETE FROM ticketorder WHERE mid =$id";
	$ticketorderresult = $conn->query($ticketordersql);

	$workssql = "DELETE FROM works WHERE mid =$id";
    $worksresult = $conn->query($workssql);

	$messagesql = "DELETE FROM message WHERE mid =$id";
    $messageresult = $conn->query($messagesql);

    echo "成功刪除";
	header("Location: page006.php");
$conn->close();

?>