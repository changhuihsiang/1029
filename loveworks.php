<?php
    $wid = $_GET["wid"];
    $lovework = $_GET["lovework"];
    if($lovework==NULL){
        $lovework=1;
    } elseif($lovework==1){
        $lovework=2;
    } elseif($lovework==2){
        $lovework=1;
    }
    echo "$wid";
    session_start();
    //先從Session中取出user_type
    //以備後續確認瀏覽者的身份別
    $user_type = $_SESSION["user_type"];
    if($user_type==NULL){
        header("Location: page003.php?lovemem=1");
    } else{
    require "includes/db.php";
    $sqll = "INSERT INTO lovework( mid, wid, lovework) VALUES ('$user_type','$wid','$lovework')";
    if ($conn->query($sqll) === TRUE) {
        echo "成功";
        header("Location: page003.php");
      } else {
        echo "Error: " . $sqll . "<br>" . $conn->error;
      }

      $conn->close();
      }
?>