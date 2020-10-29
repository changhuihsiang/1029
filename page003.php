<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>TR ART MUSEUM-創客作品</title>

  </head>
  <body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
<?php require "includes/menu.php";?>
<div class="container" style="margin:0px auto">
   <?php require "includes/exhibition.php";?>
    <br>



<div class="alert alert-danger" role="alert">
    <tr><td><h3><img src="pc/Sign3.png">創客作品</h3></td></tr>
  <hr>
  <h5>來自每一位創作者的手</h5>
  <h5>你的邂逅、你的早晨、你的每一天……</h5>
  <h5>將你周遭的人事物，透過創作，記錄下來吧！</h5>
</div>
<?php  
  if ($user_type!=NULL) {
    echo "<table width='100%  border='1px'><tr><td align='right'><a href='addworks.php'><button type'button' class='btn btn-danger'>新增</button></a></td></tr></table>";
  } else  {
    echo "<table width='100%  border='1px'><tr><td align='right'>＊登入會員即可分享作品</td></tr></table>";
  }
?>

<hr>

    <div class='row'>
       


<?php
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
    $sql = "SELECT * FROM works";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           $wid = $row["wid"]; 
           $mid = $row["mid"];
           $wname = $row["wname"];
           $wintroduction = $row["wintroduction"];
           $wshort = $row["wshort"];
           $wlink = $row["wlink"];


          $sql = "SELECT * FROM mem WHERE id='$mid'";
          $res = $conn->query($sql);
          if ($res->num_rows > 0) {
              while($row = $res->fetch_assoc()) {
                $mwname = $row["name"];
              
           
  ?>

        <div class='col-md-4 col-sm-6 col-xs-12'>
          <div class="card" style="width: 18rem;height: 27rem;">
           <?php
              $tags="<img src='uploads/^^^^' class='card-img-top' alt='...' style='height: 12rem;'>"; 
              echo str_replace("^^^^",$wlink,$tags);
           ?>
              <div class="card-body">

                <h5 class="card-title">作品名稱l<?php echo "$wname"; ?></h5>
                <p class="card-text"><?php echo "$wshort"; ?></p>
                <p class="card-text">創作者－<?php echo "$mwname"; ?></p>
                <p align="right">
                  <?php echo "<a href='works.php?wid=$wid' class='btn btn-dark'>欣賞</a>";?>
                </p>
              </div>
          </div>
        </div>
<?php
         }
       }
          
       }
      }
   $conn->close();



?>



  </div>
  <p></p>




  <hr>
  <?php require "includes/footer.php";?>
</div>
</body>
</html>