<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $userid = $_SESSION["user_type"];

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

   require "includes/db.php";
    $sql = "SELECT * FROM carticket WHERE mid =$userid";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo "<table class='table' bgcolor='#ffffff'>";
        echo " <thead class='thead-dark'>";
         echo "  <tr>";
          echo "   <th scope='col'></th>";
           echo "  <th scope='col'>票種</th>";
           echo "  <th scope='col'>票價</th>";
           echo "  <th scope='col'>張數</th>";
           echo "  <th scope='col'>小計</th>";
           echo "  <th scope='col'>刪除</th>";
          echo " </tr>";
        echo " </thead>";
         $n = 0;
        while($row = $result->fetch_assoc()) {
          $ctid = $row["ctid"];
          $num = $row["num"]; 
          $species = $row["species"];
          $total=$num * $species;
          $totall=$totall+$total;
          $n = $n + 1;
      
			 echo "<tbody>";
				echo "<tr>";
				echo "<th scope='row'>$n</th>";
				echo "<td>";
				if ($species==220){
					echo "一般票";
				} elseif ($species==150) {
					echo "愛心票";
				} elseif ($species==180) {
					echo "軍警票";
				} elseif ($species==110) {
					echo "兒童票";
				}
				echo "</td>";
				echo "<td>$species</td>";
				echo "<td>$num</td>";
				echo "<td>$total</td>";
				echo "<td><a href='deletecar.php?ctid=$ctid'> <button type='button' class='btn btn-outline-danger'>X</button></a></td>";
				echo "</tr>";

			echo "</tbody>";
 
        }

        echo "<tr>";
        echo "<th scope='row'>TOTAL:</th>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td>"."$totall"."</td>";
        echo "</tr>";
echo " </table>";
    }

    $conn->close();
    
?>