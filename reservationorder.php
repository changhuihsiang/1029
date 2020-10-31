<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
	$user_type = $_SESSION["user_type"];
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$peo = $_POST["peo"];
	$remarks = $_POST["remarks"];

	echo "$name<br>"."$phone<br>"."$date<br>"."$time<br>"."$peo<br>"."$remarks";

	if($user_type==NULL){
	    echo "請登入";
	    header("Location: reservation.php?tick=1");
  	} elseif ($name==NULL) {
  		header("Location: reservation.php?tick=2");
  	} elseif ($phone==NULL) {
  		header("Location: reservation.php?tick=3");
  	} elseif ($date==NULL) {
  		header("Location: reservation.php?tick=4");
  	} elseif ($time==NULL) {
  		header("Location: reservation.php?tick=5");
  	} elseif ($peo==NULL) {
  		header("Location: reservation.php?tick=6");
  	}else {

			require "includes/db.php";

			$sqll = "INSERT INTO reservation( mid, name, phone, datet, timet, peo, restatus, remarks) VALUES ('$user_type','$name','$phone','$date','$time','$peo','1','$remarks')";
                if ($conn->query($sqll) === TRUE) {
                    echo "成功";
                    header("Location: successreservation.php?tick=7");
                  } else {
                    echo "Error: " . $sqll . "<br>" . $conn->error;
                  }




  	}
 ?>