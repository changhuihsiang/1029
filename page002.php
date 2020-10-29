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
   <?php require "includes/exhibition.php";?>
    <br>
  <br>

  <div class="alert alert-success" role="alert">
      <tr><td><h3><img src="pc/Sign2.png">近期展覽</h3></td></tr>
    <hr>
    <h5>「蛻變與新生」工程接近完工，入館動線更改。</h5>
    <h5>9月5日起進入美術館及廣場請改道，由美術館路停車場進入。</h5>
  </div>
  
<table width=70% align="center">
      <tr>
        <td>A</td>
        <td>《黑盒－幻魅於形》</td>
        <td><button type="button" class="btn btn-outline-success">前往欣賞</button></td>
      </tr>
      <tr>
        <td>B</td>
        <td>材料「長」這樣，藝術「展」</td>
        <td><button type="button" class="btn btn-outline-danger">前往欣賞</button></td>
      </tr>
      <tr>
        <td>C</td>
        <td>凝視與穿越：藝術典藏中的高雄百景</td>
        <td><button type="button" class="btn btn-outline-warning">前往欣賞</button></td>
      </tr>
    </table>

<?php require "includes/footer.php";?>

</div>
</body>
</html>