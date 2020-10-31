<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  $Er = $_GET["Er"];
  if($Er==1){
    ?><script>alert('檔案並非圖片');</script><?php
  } elseif ($Er==2) {
    ?><script>alert('檔案名稱已有人使用');</script><?php
  } elseif ($Er==3) {
    ?><script>alert('檔案太大囉');</script><?php
  } elseif ($Er==4) {
    ?><script>alert('檔案只限 JPG, JPEG, PNG & GIF');</script><?php
  } elseif ($Er==5) {
    ?><script>alert('檔案無法上傳');</script><?php
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
        <h3><img src="pc/Sign3.png">創客作品<small>-作品分享<small>-新增作品</small></small></h3>
      </div>
      <div align="right" class="col" style="width: 50%">
          <?php  
            if ($user_type!=NULL) {
              echo "<table width='100%  border='1px'><tr><td align='right'><a href='page003.php'><button type'button' class='btn btn-danger'>BACK</button></a></td></tr></table>";
            } else  {
              echo "<table width='100%  border='1px'><tr><td align='right'>＊登入會員即可分享作品</td></tr></table>";
            }
          ?>
      </div>
    </div>
<hr>

<div class="alert alert-light" role="alert" style="width: 100%">
  <h5>請上傳您的創作，讓更多人看見不一樣的作品</h5>
  <div class="alert alert-light" role="alert" style="width:60%;margin:0 auto;">
    
<table align="center" width="70%">
  <tr><td>
    <form method="POST" action="doaddworks.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="wname">作品名稱</label>
        <input type="wname" id="wname"  name="wname">
      </div>
      <div class="form-group">
        <label for="wintroduction">作品介紹(200以下)</label>
        <textarea name="wintroduction" id="wintroduction" rows="4" cols="40" style=width:80% required maxlength="200"></textarea>
      </div>
      <div class="form-group">
        <label for="wshort">作品簡介(30字以下)</label>
        <textarea name="wshort" id="wshort" rows="4" cols="40" style=width:80% required maxlength="30"></textarea>
      </div>
      <div class="form-group">
        <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      <P align="center"><input type="submit" value="新增" name="submit" class="btn btn-dark"></P>
    </form>
  </td></tr>
</table>
</div>
</div>
</div>

<hr>
  <?php require "includes/footer.php";?>
</div>
</body>
</html>