<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  $lost = $_GET["lost"];
  $name = $_GET["name"];
  $userid = $_GET["userid"];
  $pass = $_GET["pass"];
  $passs = $_GET["passs"];
  $birth = $_GET["birth"];
  $phone = $_GET["phone"];



  if ($user_type !=NULL){
    header("Location: page005-2.php");
    }  elseif ($lost==1) {
      ?>
      <script>alert('名稱不可為白');</script>
  <?php
    }elseif ($lost==2) {
      ?>
      <script>alert('帳號不可為白');</script>
  <?php
    } elseif ($lost==3) {
      ?>
      <script>alert('密碼不可為白');</script>
  <?php
    } elseif ($lost==4) {
      ?>
      <script>alert('生日不可為白');</script>
  <?php
    } elseif ($lost==5) {
      ?>
      <script>alert('電話不可為白');</script>
  <?php
    } elseif ($lost==6) {
      ?>
      <script>alert('密碼確認錯誤');</script>
  <?php
    } elseif ($lost==7) {
      ?>
      <script>alert('帳號已有人使用');</script>
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

    <title>TR ART MUSEUM-身分登入</title>




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

<br>

  <div class="alert alert-light" role="alert">
    <tr><td><h3><img src="pc/Sign5.png">會員註冊</h3></td></tr>
    <hr>
  </div>
<div class="alert alert-light" role="alert" style="width: 100%">
  <div class="alert alert-secondary" role="alert" style="width:60%;margin:0 auto;">
    
   <table align="center" width="70%">
    <tr><td height="20px"></td></tr>
    <tr>
      <td width="30%" align="center">
        <form method=POST action=login.php>
          <div class="form-group">
           <?php  echo "會員姓名：<input type=text name=name value=$name>" ?>
          </div>
          <div class="form-group">
            <?php  echo "會員帳號：<input type=email name=userid value=$userid> " ?>
          </div>
          <div class="form-group">
            <?php  echo "會員密碼：<input type=password name=pass value=$pass> " ?>
          </div>
          <div class="form-group">
           <?php  echo " 確認密碼：<input type=password name=passs value=$passs> " ?>
          </div>
          <div class="form-group">
           <?php  echo " 會員生日：<input type=date name=birth value=$birth> " ?>
          </div>
          <div class="form-group">
           <?php  echo " 會員電話：<input type=text name=phone value=$phone> " ?>
          </div>
          <br>
          <P align="center"><a href="login.php"><button type="submit" class="btn btn-dark" style="width: 220px">註冊</button></a></P>
        </form>
    </td></tr>
  </table>




  </div>





</div>

<br>
<br>
<br>
 <?php require "includes/footer.php";?>
</div>
</body>
</html>