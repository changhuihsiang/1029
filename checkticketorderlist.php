<?php
// session_start();
//     $userid = $_SESSION["user_type"];
//     $toid = $_GET["toid"];
//     echo "$toid";
//     // $servername = "localhost";
//     // $username = "root";
//     // $password = "00000000";
//     // $dbname = "gallery";
//     // // Create connection
//     // $conn = new mysqli($servername, $username, $password, $dbname);
//     // // Check connection
//     // if ($conn->connect_error) {
//     //     die("Connection failed: " . $conn->connect_error);
//     // }

//        require "includes/db.php";
//     // 以下建立SQL查詢指令
//     // $sql = "SELECT * FROM news order by id desc";
//     //使用 insert into    
//     $sql = "SELECT * FROM ticketorderlist WHERE toid='$toid'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//             echo "    <table class='table'>";
//             echo "        <thead class='thead-dark'>";
//             echo "            <tr align='center'>";
//             echo "                <th scope='col'>訂單編號</th>";
//             echo "                <th scope='col'>明細編號</th>";
//             echo "                <th scope='col'>票種</th>";
//             echo "                <th scope='col'>票價</th>";
//             echo "                <th scope='col'>張數</th>";
//             echo "            </tr>";
//             echo "        </thead>";
//             echo "        <tbody>";
//         while($row = $result->fetch_assoc()) {
//             $tolid = $row["tolid"];
//             $species = $row["species"];
//             $num = $row["num"];
                        
//             echo "            <tr align='center'>";
//             echo "                <th scope='row'>$toid</th>";
//             echo "                <td>$tolid</td>";
//             echo "                <td>票種</td>";





//             echo "                <td>$species</td>";
//             echo "                <td>$num</td>";
//             echo "            </tr>";
//         }
//         echo "        </tbody>";
//         echo "    </table>";
//     }

?>