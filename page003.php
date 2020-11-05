<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  $lovemem = 0;
  $lovemem=$_GET["lovemem"];
  if ($lovemem==1){
    ?>
  <script>alert('請登入會員');</script>
<?php
  }

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
    <div class="row">
      <div align="left" class="col" style="width: 50%">
        <h3><img src="pc/Sign3.png">創客作品<small>-作品分享</small></h3>
      </div>
      <div align="right" class="col" style="width: 50%">
          <?php  
            if ($user_type!=NULL) {
              echo "<table width='100%  border='1px'><tr><td align='right'><a href='addworks.php'><button type'button' class='btn btn-outline-danger'>＋作品</button></a></td></tr></table>";
            } else  {
              echo "<table width='100%  border='1px'><tr><td align='right'>＊登入會員即可分享作品</td></tr></table>";
            }
          ?>
      </div>
    </div>
</div>
<div  class="alert alert-light" role="alert">
  <hr>
  <h5>來自每一位創作者的手</h5>
  <h5>你的邂逅、你的早晨、你的每一天……</h5>
  <h5>將你周遭的人事物，透過創作，記錄下來吧！</h5>

  
</div>



<hr>

    <div class='row' align="center">
<?php
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
           $lovework = 0;
           $lovenum = 0;
           //算愛心
           $sqll = "SELECT * FROM lovework WHERE wid='$wid'";
           $ress = $conn->query($sqll);
           if ($ress->num_rows > 0) {
             while($row = $ress->fetch_assoc()) {
               $lovework = $row["lovework"];
               if($lovework==1){
                $lovenum=$lovenum+1;
                $lovework=0;
              }
             }
           }
          //找愛心
           $sqll = "SELECT * FROM lovework WHERE mid='$user_type'and wid='$wid'";
           $ress = $conn->query($sqll);
           if ($ress->num_rows > 0) {
             while($row = $ress->fetch_assoc()) {
               $lovework = $row["lovework"];
             }
           }
          if($lovework==0){
            $lovework=2;
          }


          //找作者
          $sql = "SELECT * FROM mem WHERE id='$mid'";
          $res = $conn->query($sql);
          if ($res->num_rows > 0) {
              while($row = $res->fetch_assoc()) {
                $mwname = $row["name"];
  ?>
        <div class='col-md-4 col-sm-6 col-xs-12'style="width: 20rem">
          <div class="card" style="width: 20rem;height: 30rem;" align="center">
                <table width="70%" align="center">
                  <tr><td  align="center">
                <?php
                    $tags="<img src='uploads/^^^^'class='card-img-top;' style='height: 12rem;' >"; 
                    echo str_replace("^^^^",$wlink,$tags);
                ?>
              </td></tr>
            </table>
            <div class="card-body" style="width: 20rem" align="left">
                <h5 class="card-title">
                <?php if($lovework==2){;?>
                    
                    <?php echo "<a href='loveworks.php?wid=$wid&lovework=$lovework' style='color:#000000;'>";  ?>
                    <p>
                      <img src='pc/love2.png' onmouseover='this.src="pc/love1.png";' onmouseout='this.src="pc/love2.png";'>
                       <?php echo "</a>";?>
                      <?php echo "$lovenum"; ?>
                    </p>
                      
                  <?php } elseif($lovework==1){ ?> 
                    <?php echo "<a href='loveworks.php?wid=$wid&lovework=$lovework' style='color:#000000;'>";  ?>
                    <p>
                      <img src='pc/love1.png' onmouseover='this.src="pc/love2.png";' onmouseout='this.src="pc/love1.png";'>
                      <?php echo "$lovenum"; ?>
                    </p>
                      <?php echo "</a>";?>

                  <?php } ?> 
                
                  作品名稱l<?php echo "$wname"; ?>
                
                </h5>
                <p class="card-text"><?php echo "$wshort"; ?></p>
                <p class="card-text">創作者－<?php echo "$mwname"; ?></p>
                <p align="right">
                  <?php echo "<a href='works.php?wid=$wid' class='btn btn-dark'>欣賞</a>";?>
                </p>
              </div>
          </div>
          <hr>
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