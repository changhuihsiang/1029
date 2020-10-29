<?php
session_start();
	$userid = $_SESSION["user_type"];
    $species = $_POST["species"];
    $number = $_POST["num"];
    echo "$userid"."$species"."$number";


if ($userid==NULL) {
    echo "請登入";
    header("Location: ticket.php?tick=1");
} elseif ($species==NULL) {
    echo "種類";
    header("Location: ticket.php?tick=2");
} elseif ($number==NULL) {
    echo "張數";
    header("Location: ticket.php?tick=3");
} else{






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

    $sqll = "INSERT INTO carticket( mid, species, num) VALUES ('$userid','$species','$number')";
        if ($conn->query($sqll) === TRUE) {
            echo "成功";
            header("Location: ticket.php");
          } else {
            echo "Error: " . $sqll . "<br>" . $conn->error;
          }
	$conn->close();

}


?>