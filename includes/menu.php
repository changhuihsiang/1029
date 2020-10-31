<nav class="navbar fixed-top alert alert-secondary"  style="height: 4rem;">
        <h4><img src="pc/LOGOsmall.png"><a href="index.php" style="color:black;"> TR ART MUSEUM</a></h4>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <h4>
       <a href="page001.php"><button type="button" class="btn btn-light">參觀資訊</button></a>
        <a href="page002.php"> <button type="button" class="btn btn-light">近期展覽</button></a>
        <a href="page003.php"> <button type="button" class="btn btn-light">創客作品</button></a>
        <a href="page004.php"> <button type="button" class="btn btn-light">購票預約</button></a>
    </h4>
    </div>



<?php if ($user_type!=NULL) {  ?>
    <div class="my-2 my-lg-0">
      <a href="page005-2.php"><button type="button" class="btn btn-outline-dark">會員中心</button></a>
      <a href="logout.php"><button type="button" class="btn btn-outline-dark">會員登出</button></a>
    </div>
<?php  } else{  ?>
  <div class="my-2 my-lg-0">
    <a href="page005-1.php"><button type="button" class="btn btn-outline-dark">註冊會員</button></a>
    <a href="page005.php"> <button type="button" class="btn btn-outline-dark">身分登入</button></a>
  </div>
<?php } ?>

    </nav>



