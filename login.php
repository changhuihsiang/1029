<?php
    $name = $_POST["name"];
    $userid = $_POST["userid"];
    $pass = $_POST["pass"];
    $passs = $_POST["passs"];
    $birth = $_POST["birth"];
    $phone = $_POST["phone"];


if ($name==NULL) {
    echo "名稱不可為白";
    header("Location: page005-1.php?lost=1&name=$name&userid=$userid&pass=$pass&passs=$passs&birth=$birth&phone=$phone");
} elseif ($userid==NULL) {
    echo "帳號不可為白";
    header("Location: page005-1.php?lost=2&name=$name&userid=$userid&pass=$pass&passs=$passs&birth=$birth&phone=$phone");
} elseif ($pass==NULL) {
    echo "密碼不可為白";
    header("Location: page005-1.php?lost=3&name=$name&userid=$userid&pass=$pass&passs=$passs&birth=$birth&phone=$phone");
} elseif ($birth==NULL) {
    echo "生日不可為白";
    header("Location: page005-1.php?lost=4&name=$name&userid=$userid&pass=$pass&passs=$passs&birth=$birth&phone=$phone");
} elseif ($phone==NULL) {
    echo "電話不可為白";
    header("Location: page005-1.php?lost=5&name=$name&userid=$userid&pass=$pass&passs=$passs&birth=$birth&phone=$phone");
} elseif($passs!=$pass){
    echo "密碼確認錯誤";
    header("Location: page005-1.php?lost=6&name=$name&userid=$userid&pass=$pass&passs=$passs&birth=$birth&phone=$phone");
}






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
    $sql = "SELECT * FROM mem WHERE username='$userid'";

    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                if ($id!=NULL)  {
                    echo "已有人使用該照號";
                    header("Location: page005-1.php?lost=7&name=$name&userid=$userid&pass=$pass&passs=$passs&birth=$birth&phone=$phone");
                }
                
                

            }

        } else {
            $sqll = "INSERT INTO mem( name, username, password, birth, phone) VALUES ('$name','$userid','$pass','$birth','$phone')";
                if ($conn->query($sqll) === TRUE) {
                    echo "成功";
                    header("Location: page005.php?userid=$userid");
                  } else {
                    echo "Error: " . $sqll . "<br>" . $conn->error;
                  }
        }

$conn->close();
    




    // $sql = "INSERT INTO mem( name, username, password, birth, phone) VALUES ('$name','$userid','$pass','$birth','$phone')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "成功";
    //     header("Location: page005.php?userid=$userid");
    //   } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //   }
    

?>