<?php
    session_start();
    $id = $_SESSION["user_type"];

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
    $sql = "SELECT * FROM mem WHERE id='$id'";



    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];  
            $name = $row["name"];
            $userid = $row["username"];
            $passchk = $row["password"];
            $birth =$row["birth"];
            $phone =$row["phone"];

            echo "<table>";
                echo "<tr><td>會員名稱：</td><td>".$name;
                
                echo "</td></tr>";
                echo "<tr><td>會員帳號：</td><td>".$userid;
                
                echo "</td></tr>";
                echo "<tr><td>會員密碼：</td><td>".$passchk;
                
                echo "</td></tr>";
                echo "<tr><td>會員生日：</td><td>".$birth;
                
                echo "</td></tr>";
                echo "<tr><td>連絡電話：</td><td>".$phone;
                
                echo "</td></tr>";
            echo "</table>";



            //header("Location: page005-2.php?name=$name&passchk=$passchk&birth=$birth&phone=$phone");
                    
        }
    } else{
        echo "失敗";
    }
    $conn->close();


?>