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
<div class="alert alert-warning" role="alert">
    <tr><td><h3><img src="pc/Sign.png">購票預約<small>-預約導覽<small>-成功預約</small></small></h3></td></tr>
  <hr>

  <div class="alert alert-light" role="alert" style="width: 100%">
    <div class="alert alert-light" role="alert" style="width:80%;margin:0 auto;">
      <div class="alert alert-light" role="alert">
        <h3 style="text-align: center">成功預約</h3>
        <h5 style="text-align: center">請於24HR之後至會員中心確認預約狀態</h5>
        <hr>
        <h5 style="text-align: center"><a href="page004.php"><button type="button" class="btn btn-outline-dark">回預約導覽</button></a></h5>
        <h5 style="text-align: center"><a href="page005-2-2-2.php"><button type="button" class="btn btn-outline-dark">查看訂單</button></a></h5>
      </div>
      </div>
  </div>
 </div> 
  <?php require "includes/footer.php";?>
</div>
</body>
</html>