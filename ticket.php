<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  $tick =$_GET["tick"];

  if ($tick==1){
      ?>
    <script>alert('請登入會員');</script>
  <?php
    } elseif ($tick==2) {
      ?>
      <script>alert('請選擇種類');</script>
  <?php
    } elseif ($tick==3) {
      ?>
      <script>alert('請選擇張數');</script>
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
  <h5>請選擇欲購票種類及張數</h5>
  <table align="center" width="40%">
    <tr><td>
      <img src="pc/ticket01.png" align="center" width="100%">
   </td></tr>
  </table>

</div>
  <div class="alert alert-light" role="alert" style="width: 100%">
    <div class="alert alert-secondary" role="alert" style="width:80%;margin:0 auto;">
      

      <table align="center" width="70%">
       



        <form method=POST action=cartticket.php>
          <tr align="center"><td>
              <label style="font-size:20px;">購票種類</label>
              <select  name="species" style="font-size:20px;">
                <option value="">請選擇種類</option>
                <option value="220">一般票</option>
                <option value="150">愛心票</option>
                <option value="180">軍警票</option>
                <option value="110">兒童票</option>
              </select>
              <br>
              <label style="font-size:20px;">購票張數</label>
              <select  name="num" style="font-size:20px;">
                <option value="">請選擇張數</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
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
      
      <table class="table table-striped" bgcolor="#f0f0f5">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">票種</th>
              <th scope="col">票價</th>
              <th scope="col">身分</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>一般票</td>
              <td>$220</td>
              <td>一般民眾</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>愛心票</td>
              <td>$150</td>
              <td>須持有:敬老卡(包含原住民敬老卡)、愛心卡、愛心陪伴卡(限搭配愛心卡使用後)</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>軍警票</td>
              <td>$180</td>
              <td>須持有:軍警證明</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>兒童票</td>
              <td>$110</td>
              <td>須持有:學生卡、兒童卡為優待票價(30元)</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>


  <?php require "includes/footer.php";?>
</div>
</body>
</html>