<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  $wid = $_GET["wid"];


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
    $sql = "SELECT * FROM works WHERE wid='$wid'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           $mid = $row["mid"];
           $wname = $row["wname"];
           $wintroduction = $row["wintroduction"];
           $wshort = $row["wshort"];
           $wlink = $row["wlink"];
          
          $sql = "SELECT * FROM mem WHERE id='$mid'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $mwname = $row["name"];
              }
          }

        }
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
              echo "<table width='100%  border='1px'>
                      <tr><td align='right'>
                        <a href='page003.php'><button type'button' class='btn btn-outline-danger'>BACK</button></a>
                        <a href='addworks.php'><button type'button' class='btn btn-outline-danger'>＋作品</button></a>
                      </td></tr> 
                    </table>";
            } else  {
              echo "<table width='100%  border='1px'><tr><td align='right'>＊登入會員即可分享作品</td></tr></table>";
            }
          ?>
      </div>
    </div>
    </div>
 <h3 align="center"><b><?php echo "$wname"; ?></b></h3>

<div class="alert alert-light" role="alert" style="width: 100%" >
<table align="center" width="80%">
  <tr>
    <td align="center">
      
          <?php
          $tags="<img src='uploads/^^^^' style='height: 30rem;'>"; 
          echo str_replace("^^^^",$wlink,$tags);
      ?>
        
    </td>
  </tr>

  <tr>
    <td>
      <table align="center" width="80%">
        <tr><td colspan="3"><hr></td></tr>
        <tr height="30%">
          <td width="29.75%" align="right" bgcolor="#f0f8ff">
            <font size="5">作者</font>
           </td>
          <td width="0.5%" bgcolor="#ffffff"></td>
          <td width="69.5%" align="left" bgcolor="#fafdff">
            <font size="5"><?php echo "$mwname"; ?></font>
          </td>
        </tr>

        <tr>
          <hr>
          <td width="29.75%" align="right" bgcolor="#f0f8ff">
            <font size="5">作品介紹</font>
          </td>
          <td width="0.5%" bgcolor="#ffffff" ></td>
          <td width="69.7%" align="left" bgcolor="#fafdff">
            <font size="3"><?php echo "$wintroduction"; ?></font>
          </td>
        </tr>
      </table>



    </td>
  </tr>



  <tr>
    <td>
      <table align="center" width="80%" bgcolor="#f0f8ff">
        <tr><td bgcolor="#ffffff"  colspan="2"><hr></td></tr>
        <tr><td bgcolor="#e3e3e3"   colspan="2">留言表</td></tr>
        <tr><td colspan="2" height="2px" bgcolor="#000000"></td></tr>

          <?php 
          $sql = "SELECT * FROM message WHERE wid='$wid'";

              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                $number = 1;
                while($row = $result->fetch_assoc()) {
                     $mid = $row["mid"];
                     $message = $row["message"];
                     $messageid = $row["messageid"];
                     $sql = "SELECT * FROM mem WHERE id='$mid'";
                     $res = $conn->query($sql);
                      if ($res->num_rows > 0) {
                        while($row = $res->fetch_assoc()) {
                                $mname = $row["name"];
                                $ckid  = $row["id"];
                          }}
                     
          ?>

        <tr><td   colspan="2">FLOOR：<?php echo"$number"; ?></td></tr>
        <tr><td>
            <?php echo"<p>$mname"."："."$message</p>"; ?>
            <hr>
            </td>
            <td align="right">
              <?php
              if($ckid==$user_type){
                echo "<a href='deletemessage.php?messageid=$messageid&wid=$wid' style='color:#000000;'>刪除</a>";
              }
              ?>
            </td>
        </tr>

          <tr><td colspan="2" height="2px" bgcolor="#e0e0e0"></td></tr>
          <?php $number = $number+1;  } } $conn->close(); ?>
      </table>









    </td>
  </tr>

  <?php if ($user_type!=NULL) { ?>
      <tr>
        <td>
          <table align="center" width="80%" bgcolor="#e3e3e3">
            <form method="POST" action="message.php">
            <tr>
              <td width="10%" align="right">
                留言：
              </td>
              <td width="80%">
                <textarea name="message" rows="3" cols="40" style=width:100% required></textarea>
               <?php echo "<input type='hidden' name='wid' value='$wid' size='15'>"; ?>
              </td>
              <td width="10%">
                <P align="center"><button type="submit" class="btn btn-dark" >留言</button></P>
              </td>
            </tr>
            
            </form>
          </table>
        </td>
      </tr>
  <?php } ?>



</table>


</div>

    <hr>
      <?php require "includes/footer.php";?>
    </div>
</body>
</html>