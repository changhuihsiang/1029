<?php
  $userid =$_GET["userid"];
  $name =$_GET["name"];
  $wid =$_GET["wid"];

  echo"$userid";
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

?>



  <div class="alert alert-light" role="alert">
    <tr><td><h3><img src="pc/Sign5.png">會員中心<small>-管理作品<small>-編輯作品</small></small></h3></td></tr>
    <hr>
  </div>
<div class="alert alert-light" role="alert" style="width: 100%">
  <div class="alert alert-secondary" role="alert" style="width:60%;margin:0 auto;">
    
<table align="center" width="50%">
  <tr><td>
    <form method=POST action=loginin.php>
      <div class="form-group">
        <label for="exampleInputEmail1">會員帳號</label>
        <?php
        echo "
        <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' value='$userid' name='userid'>
        ";
        ?>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">密碼</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <P align="center"><button type="submit" class="btn btn-dark" >登入</button></P>
      <P align="center"><a href="page005-1.php"  class="btn btn-link">尚未註冊?</a></P>
    </form>
  </td></tr>
</table>
</div>
</div>


<?php } else{  ?>

<div class="alert alert-light" role="alert">
    <tr><td><h3><img src="pc/Sign5.png">會員中心<small>-管理作品<small>-編輯作品</small></small></h3></td></tr>
    <hr>
    
  </div>

<div class="alert alert-light" role="alert" style="width: 100%">
  <div class="alert alert-secondary" role="alert" style="width:90%;margin:0 auto;">
    <div class="alert alert-light" role="alert">
            <h3>編輯作品</h3>Data modification
            <div align="right">
               <a href="page005-2-3.php"><button type="button" class="btn btn-outline-dark">ＢＡＣＫ</button></a>
            </div>
            <div  role="alert" align="center">
                <h4  class="alert-heading">編輯作品</h4>
                <table align="center" width="80%">
                  <tr>
                    <td>
                      <hr style="width:80%;margin:0 auto;border: 0;height: 2px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0))";>
                      <br>
                    </td>
                  </tr>
                  <tr align="center">
                    <td><h5>
<?php
    require "includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    
    $sql = "SELECT * FROM works WHERE wid='$wid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $wintroduction   = $row["wintroduction"];  
            $wname = $row["wname"];
            $wshort = $row["wshort"];  
            $wintroduction = $row["wintroduction"];  
            $wlink = $row["wlink"]; 
?>
     <?php echo " <form method='POST' action='doupdateworks.php?wid=$wid' enctype='multipart/form-data'>" ;?>
      <div class="form-group">
        <label for="wname">作品名稱</label>
        <?php echo "<input type='text' id='wname'  name='wname' value='$wname'>"; ?>
      </div>
      <div class="form-group">
        <label for="wintroduction">作品介紹(200以下)</label>

        <?php echo "<textarea name='wintroduction' rows='4' cols='40' style=width:80%  maxlength='200'>$wintroduction</textarea> ";?>
      </div>
      <div class="form-group">
        <label for="wshort">作品簡介(30字以下)</label>
        <?php echo "<textarea name='wshort' id='wshort' rows='4' cols='40' style=width:80% required maxlength='30'>$wshort</textarea>";?>
      </div>
      <P align="center"><input type="submit" value="更新" name="submit" class="btn btn-dark"></P>
      </form>
<?php
        }
      }

?>

                      </h5></td>
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