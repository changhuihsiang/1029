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
    <tr><td><h3><img src="pc/Sign4.png">購票中心</h3></td></tr>
  <hr>
  <h5>確認訂單</h5>
  <table align="center" width="40%">
    <tr><td>
      <img src="pc/ticket02.png" align="center" width="100%">
   </td></tr>
  </table>
</div>
  <div class="alert alert-light" role="alert" style="width: 100%">
    <div class="alert alert-secondary" role="alert" style="width:80%;margin:0 auto;">
      <div class="alert alert-light" role="alert">
        <h5 style="text-align: center">訂單明細</h5>
        <?php require "showcar.php";?>
        <hr>
        <h5 style="text-align: center"><a href="ticket.php"><button type="button" class="btn btn-success">繼續選購</button></a></h5>
      </div>

      <table align="center" width="70%">
        <form method=POST action=ticketorder.php>
          <tr align="center"><td>
              <label style="font-size:20px;">結帳方式</label>
              <select  name="payment" style="font-size:20px;">
                <option value="1">現場付款</option>
                <option value="2">LINE Pay</option>
                <option value="3">信用卡付款</option>
                <option value="4">超商代碼付款</option>
              </select>
              <br>
              <label style="font-size:20px;">取票方式</label>
              <select  name="gettickets" style="font-size:20px;">
                <option value="1">現場代碼取票</option>
                <option value="2">超商代碼取票</option>
                <option value="3">手機電子票</option>
              </select>
              <hr>
              <P align="center"><button type="submit" class="btn btn-dark" >送出訂單</button></P>
            </td></tr>
        </form>
      </table>




     
      

      </div>
  </div>
  <?php require "includes/footer.php";?>
</div>
</body>
</html>