<?php
  $userid =$_GET["userid"];
  $name =$_GET["name"];
  $past =$_GET["past"];

  echo"$userid";
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  if ($user_type==NULL) {
      echo "123";
      header("Location: page005.php");
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

    <title>TR ART MUSEUM-會員中心</title>

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

<?php 
if ($user_type==NULL) {
// 沒有登入跳登入畫面
 } else{  ?>

<div class="alert alert-light" role="alert">
    <tr><td><h3><img src="pc/Sign5.png">會員中心<small>-管理作品</small></h3></td></tr>
    <hr>
    
  </div>
<div class="alert alert-light" role="alert" style="width: 100%">
  <div class="alert alert-secondary" role="alert" style="width:90%;margin:0 auto;">
    <div class="alert alert-light" role="alert">
            <h3>管理作品</h3>checking order
            <div align="right">
               <a href="page005-2.php"><button type="button" class="btn btn-outline-dark">ＢＡＣＫ</button></a>
            </div>
            <div  role="alert" align="center">
                <h4  class="alert-heading">管理作品</h4>
                

                <table align="center" width="80%">
                  <tr>
                    <td>
                      <hr style="width:80%;margin:0 auto;border: 0;height: 2px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0))";>
                      <br>
                    </td>


                  </tr>
                  <tr align="center">
                    <td><h5><?php require "checkworks.php";?></h5></td>
                  </tr>
                </table>



            </div>
          </div>
    
</div>
</div>



<?php } ?>






 <?php require "includes/footer.php";?>
</div>
</body>
</html>