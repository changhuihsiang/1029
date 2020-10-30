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

    <title>TR ART MUSEUM-購票預約</title>




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
<div role="alert">
    <tr><td><h3><img src="pc/Sign4.png">預約導覽</h3></td></tr>
  <hr>
  <h5>請選擇欲預約導覽的時間及人數</h5>
</div>
 
<div class="alert alert-light" role="alert" style="width: 100%">
    <div class="alert alert-secondary" role="alert" style="width:80%;margin:0 auto;">
      <table align="center" width="70%">
        <form method=POST action=cartticket.php>
          <tr align="center"><td>
              <label style="font-size:20px;">姓　　名</label>
              <input type="text" name="name">
              <br>
              <label style="font-size:20px;">電　　話</label>
              <input type="text" name="phone">
              <br>
              <label style="font-size:20px;">預約日期</label>
              <input type="date" name="date">
              <br>
              <label style="font-size:20px;">預約時間</label>
              <input type="text" name="time">
              <br>
              <label style="font-size:20px;">備註</label>
              <input type="text" name="remarks">
              <br>
              <label style="font-size:20px;">購票張數</label>
              <P align="center"><button type="submit" class="btn btn-dark" >放入購物車</button></P>
            </td></tr>
        </form>
      </table>
      <hr>
      <div class="alert alert-light" role="alert">
        <h5 style="text-align: center">購物車</h5>
        <?php require "showcar.php";?>
        <hr>
        <h5 style="text-align: center"><a href="checkout.php"><button type="button" class="btn btn-success">前往結帳</button></a></h5>
      </div>
      <hr>
      <div class="alert alert-light" role="alert">
        <h5 style="text-align: center">價位表</h5>
      </div>
      </div>
  </div>
















  <?php require "includes/footer.php";?>
</div>
</body>
</html>