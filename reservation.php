<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  $tick = 0;
  $tick = $_GET["tick"];

  if ($tick==1){
      ?>
    <script>alert('請登入會員');</script>
  <?php
    } elseif ($tick==2) {
      ?>
      <script>alert('請輸入姓名');</script>
  <?php
    } elseif ($tick==3) {
      ?>
      <script>alert('請輸入電話');</script>
  <?php
    } elseif ($tick==4) {
      ?>
      <script>alert('請輸入日期');</script>
  <?php
    } elseif ($tick==5) {
      ?>
      <script>alert('請選擇時段');</script>
  <?php
    } elseif ($tick==6) {
      ?>
      <script>alert('請選擇人數');</script>
  <?php
    } elseif ($tick==7) {
      ?>
      <script>alert('預約成功');</script>
  <?php
    } 


  require "includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    
  $sql = "SELECT * FROM mem WHERE id='$user_type'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $phone =$row["phone"];
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
<div  class="alert alert-warning" role="alert">
    <tr><td><h3><img src="pc/Sign.png">購票預約<small>-預約導覽</small></h3></td></tr>
  <hr>

 
<div class="alert alert-light" role="alert" style="width: 100%">
    <div class="alert alert-light" role="alert" style="width:80%;margin:0 auto;">
      <table align="center" width="70%">
        <form method=POST action=reservationorder.php>
          <tr align="left"><td>
              <label style="font-size:20px;">*姓　　名</label>
              <?php echo "<input type='text' class='form-control' name='name' value='$name'>";?>
              <br>
              <label style="font-size:20px;">*電　　話</label>
              <?php echo "<input type='text' class='form-control' name='phone' value='$phone'>";?>
              <br>
              <label style="font-size:20px;">*預約日期</label>
              <input type="date" name="date" class='form-control' value="2020-11-18">
              <br>
              <label style="font-size:20px;">*預約時間</label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="time" id="inlineRadio1" value="上午8:00">
                <label class="form-check-label" for="inlineRadio1">上午8:00</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="time" id="inlineRadio2" value="下午14:00">
                <label class="form-check-label" for="inlineRadio2">下午14:00</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="time" id="inlineRadio3" value="下午16:00">
                <label class="form-check-label" for="inlineRadio3">下午16:00</label>
              </div>
              <br>
              <label class="my-1 mr-2" style="font-size:20px;">*預約人數</label>
              <select class="custom-select" id="inlineFormCustomSelectPref" name="peo">
                  <option value= "" name="">選擇...</option>
                  <option value="5人以下" name="peo">5人以下</option>
                  <option value="5-10人" name="peo">5-10人</option>
                  <option value="10-20人" name="peo">10-20人</option>
                  <option value="20人以上" name="peo">20人以上</option>
              </select>
              <br>
              <label style="font-size:20px;">備　　註</label>
              <textarea name="remarks" rows="3" cols="40" style=width:100%></textarea>
              <br>
              <P align="center"><button type="submit" class="btn btn-dark">確認預約</button></P>
            </td></tr>
        </form>
      </table>
      <hr>

     
      </div>
  </div>


</div>













  <?php require "includes/footer.php";?>
</div>
</body>
</html>