<?php
	session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
 	$userid = $_SESSION["user_type"];
    $payment = $_POST["payment"];
    $gettickets = $_POST["gettickets"];
 //    echo "$payment"."$gettickets";
	// echo "<hr>";
	require "includes/db.php";


	$sq = "SELECT * FROM ticketorder";
    $resul = $conn->query($sq);
    if ($resul->num_rows > 0) {
        while($row = $resul->fetch_assoc()) {
        	$toid = $row["toid"];
		}
		$now = $toid+1;
		echo "$now";
	}

   
    $sql = "SELECT * FROM carticket WHERE mid =$userid";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
   
         $n = 0;
        while($row = $result->fetch_assoc()) {
          $ctid = $row["ctid"];
          $num = $row["num"]; 
          $species = $row["species"];
          $total=$num * $species;
          $totall=$totall+$total;
          $n = $n + 1;
      
				echo "$n";
				if ($species==220){
					echo "一般票";
				} elseif ($species==150) {
					echo "愛心票";
				} elseif ($species==180) {
					echo "軍警票";
				} elseif ($species==110) {
					echo "兒童票";
				}
				echo "$species";
				echo "$num";
				echo "$total";
				echo "<hr>";
				$sqll = "INSERT INTO ticketorderlist( toid, species, num) VALUES ('$now','$species','$num')";
                if ($conn->query($sqll) === TRUE) {
                    echo "成功";
                  } else {
                    echo "Error: " . $sqll . "<br>" . $conn->error;
                  }
        }
        echo "$totall";
        $sqlll = "INSERT INTO ticketorder( toid, mid, payment, gettickets, sum, tostatus) VALUES ('$now','$userid','$payment','$gettickets','$totall','1')";
                if ($conn->query($sqlll) === TRUE) {
                    echo "成功";
                    header("Location: successticket.php");
                  } else {
                    echo "Error: " . $sqlll . "<br>" . $conn->error;
                  }
		
    }

    $s = "DELETE FROM carticket WHERE mid =$userid";

    $re = $conn->query($s);
    echo "成功刪除";
	

	








    $conn->close();


?>