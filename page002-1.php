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

    <title>TR ART MUSEUM-近期展覽</title>




  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    
<?php require "includes/menu.php";?>
<div class="container" style="margin:0px auto">
    <br>
    <br>
    <br>
    <br>

  <div class="alert alert-light" role="alert">
      <table style="width: 100%;" align="center">
            <tr><td><h2><img src="pc/ex/01.jpg" width="100%"><br></h2></td></tr>
            <tr><td><hr></td></tr>
            <tr><td><h3>《黑盒－幻魅於形》</h3></td></tr>
            <tr><td width="90%"><h5>本館為因應防疫，年度國際特展《黑盒－幻魅於形：湯尼．奧斯勒》自原定4月11日順延至明年一月開展，並預計於4月起，陸續推出《黑盒－幻魅於形》線上前導展，除特別邀請藝術家奧斯勒與大眾對話、分享台灣獨家「留臉忘返」徵臉創作活動之回饋，期間更透過精選作品介紹、國內外藝術名人導賞，及兒童版本線上導覽，陸續為高美館帶出「防疫不防藝」的藝術能量，而本館官方網站及社群平台也將釋出展覽影片與精彩花絮，進而為年底展覽提前暖身。</h5></td></tr>
      </table>
  </div>
  
<table width=95% align="center">
      <tr align="center">
        <td width="50%"><img src="pc/ex/01-1.jpg" width="70%"></td>
        <td width="50%"  align="center" valign="center">
            <p>LUMA Foundation、立木畫廊﹙紐約、香港、首爾﹚</p>
            <p>里森畫廊﹙倫敦、紐約、上海)</p>
            <p>Bernier / Eliades Gallery﹙雅典﹚、Galería Moisés Pérez de Albéniz﹙馬德里﹚</p>
        </td>
      </tr>
      <tr align="center"><td colspan="2"><hr></td></tr>

      <tr align="center">
        <td width="50%"  align="center" valign="center">
            <p>湯尼·奥斯勒（Tony Oursler）為美國錄像藝術之先鋒 </p>
            <p>作品結合獨特且創新的錄像雕塑、雕塑與展演，將影像自二維空間中解放</p>
            <p>實驗影像虛實交錯的介面，</p>
        </td>
        <td width="50%"><img src="pc/ex/01-2.jpg" width="70%"></td>
      </tr>
      <tr align="center"><td colspan="2"><hr></td></tr>
      <tr align="center">
        <td width="50%"><img src="pc/ex/01-3.jpg" width="70%"></td>
        <td width="50%"  align="center" valign="center">
            <p>《黑盒-幻魅於形》（Black Box） 一在光影，影像科技，展開啟顯影空間內部的神秘未知及源起</p>
            <p>透過光線與科學喻象所展開之無限可能。在光影，影像科技，聲音與詩文交錯之間一展開啟顯影空間內部的神秘未知及源起Bernier / Eliades Gallery﹙雅典﹚、Galería Moisés Pérez de Albéniz﹙馬德里﹚</p>
        </td>
      </tr>
      <tr align="center"><td colspan="2"><hr></td></tr>

      <tr align="center">
        <td width="50%"  align="center" valign="center">
            <p>湯尼·奥斯勒（Tony Oursler）為美國錄像藝術之先鋒 </p>
            <p>模擬人類和情感特徵，創造宛如附有生命的雕塑個體，並以幽默又譏諷的語彙，引領觀者穿梭於影像空間，探索個體心靈、精神及大眾文化及現代科技之虛實。</p>
        </td>
        <td width="50%"><img src="pc/ex/01-4.jpg" width="70%"></td>
      </tr>
      <tr align="center"><td colspan="2"><hr></td></tr>
      
    </table>
    <?php require "includes/excom.php";?>

<?php require "includes/footer.php";?>

</div>
</body>
</html>