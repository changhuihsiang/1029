<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>TR ART MUSEUM-參觀資訊</title>
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

    
  <div class="alert alert-warning" role="alert">
    <tr><td><h3><img src="pc/Sign.png">開館時間</h3></td></tr>
  <hr>
  <h5>「蛻變與新生」工程接近完工，入館動線更改。</h5>
  <h5>9月5日起進入美術館及廣場請改道，由美術館路停車場進入。</h5>
</div>

<table width=90% align="center">

<!-- <tr><td><img src="pc/Divider.jpg" align="right"></td></tr>
 -->
 <tr><td> <p><strong>本館預計自109年6月1日</strong>起進行館舍主體修繕、優化展館軟硬體使用機能，一至四樓展覽場域以及雕塑大廳、服務設施等主要公共空間將暫停開放至年末。年度館體空間修整期間，本館將持續為市民朋友帶來無縫接軌的藝文饗宴，結合地下樓演講廳、展覽室、文教大廳等公共空間，以「修館不休館」方式提供優質展覽、藝術講座、生態教育、創意市集以及多元的教育推廣服務。</p></td></tr>
 <tr><td>
 <ol>
  <li>修館期間，本館一樓北大廳、地下樓文教大廳以及藝術研究室維持原開放時間：</li>
  <li>週二至週五，上午11:30至下午5:30</li>
  <li>週六至週日，上午09:30至下午5:30</li>
  <li>(週一、除夕休館) </li>
 </ol>
</td></tr>
<tr><td><h4><img src="pc/Sign2.png">高美書屋搬遷公告</h4>
  <p>
  高美書屋每週二至週日上午9:30至下午5:30於B2 文教大廳服務(每週一休館)。
  工程噪音期結束後將遷回北大廳原址提供服務，詳情請鎖定高美館官網 / 粉絲團公告。</p></td></tr>


  <tr><td><h4><img src="pc/Sign2.png">兒童美術館</h4>
  <p>
  週二至週五 9:00~12:00(11:50清館) 13:30~16:30（中午休館清潔維護，16:20清館）

週六、日 9：30-17：30（中午不休館，17:20清館）
每逢週一休館，其餘必要之停止開放時間另行公告。
●團體參觀採預約制；個人或家庭參觀不需預約。
●為維持舒適參觀品質，週六、日及例假日恕不接受團體預約參觀。
●閉館前十分鐘不開放入場。</p></td></tr>


</table>






  <div class="alert alert-success" role="alert">
    <tr><td><h3><img src="pc/Sign.png">開館時間</h3></td></tr>
  <hr>
  <h5>「蛻變與新生」工程接近完工，入館動線更改。</h5>
  <h5>9月5日起進入美術館及廣場請改道，由美術館路停車場進入。</h5>
</div>

<table width=90% align="center">

<!-- <tr><td><img src="pc/Divider.jpg" align="right"></td></tr>
 -->
 <tr><td> <p><strong>本館預計自109年6月1日</strong>起進行館舍主體修繕、優化展館軟硬體使用機能，一至四樓展覽場域以及雕塑大廳、服務設施等主要公共空間將暫停開放至年末。年度館體空間修整期間，本館將持續為市民朋友帶來無縫接軌的藝文饗宴，結合地下樓演講廳、展覽室、文教大廳等公共空間，以「修館不休館」方式提供優質展覽、藝術講座、生態教育、創意市集以及多元的教育推廣服務。</p></td></tr>
 <tr><td>
 <ol>
  <li>修館期間，本館一樓北大廳、地下樓文教大廳以及藝術研究室維持原開放時間：</li>
  <li>週二至週五，上午11:30至下午5:30</li>
  <li>週六至週日，上午09:30至下午5:30</li>
  <li>(週一、除夕休館) </li>
 </ol>
</td></tr>
<tr><td><h4><img src="pc/Sign2.png">高美書屋搬遷公告</h4>
  <p>
  高美書屋每週二至週日上午9:30至下午5:30於B2 文教大廳服務(每週一休館)。
  工程噪音期結束後將遷回北大廳原址提供服務，詳情請鎖定高美館官網 / 粉絲團公告。</p></td></tr>


  <tr><td><h4><img src="pc/Sign2.png">兒童美術館</h4>
  <p>
  週二至週五 9:00~12:00(11:50清館) 13:30~16:30（中午休館清潔維護，16:20清館）

週六、日 9：30-17：30（中午不休館，17:20清館）
每逢週一休館，其餘必要之停止開放時間另行公告。
●團體參觀採預約制；個人或家庭參觀不需預約。
●為維持舒適參觀品質，週六、日及例假日恕不接受團體預約參觀。
●閉館前十分鐘不開放入場。</p></td></tr>


</table>

  <?php require "includes/footer.php";?>
</div>
</body>
</html>