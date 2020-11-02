<?php
  $name = $_GET["name"];
  $id = $_GET["id"];
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
  if($user_type!=34){
    header("Location: ../page005.php");
  } else {
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

    
<?php require "../includes/menumanagement.php";?>
<div class="container" style="margin:0px auto">
    <br>
    <br>
  <div class="alert alert-light" role="alert">
      <br>
      <tr><td><h3>管理會員資料</h3></td></tr>
    <hr>
    <h5>對於會員資料可為:</h5>
    <h5>查閱/刪除/</h5>
  </div>
  <div class="alert alert-light" role="alert" style="width: 100%">
  <div class="alert alert-secondary" role="alert" style="width:90%;margin:0 auto;">
    <div class="alert alert-light" role="alert">
            <h3>會員-<?php echo "$name"; ?></h3>
            <div align="right">
               <a href="page006.php"><button type="button" class="btn btn-outline-dark">ＢＡＣＫ</button></a>
            </div>
            <div  role="alert" align="center">
                <h4  class="alert-heading">個別會員資料</h4>
                <table align="center" width="100%">
                  <tr>
                    <td colspan="2">
                      <hr style="width:80%;margin:0 auto;border: 0;height: 2px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0))";>
                      <br>
                    </td>
                  </tr>
                  <tr align="center">
                      <td><h5>
                        
<?php
  require "../includes/db.php";
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    

  $sql = "SELECT * FROM mem where id = $id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
        echo "    <table class='table'>";
        echo "        <thead class='thead-dark'>";
        echo "            <tr align='center'>";
        echo "                <th scope='col'>名稱</th>";
        echo "                <th scope='col'>帳號</th>";
        echo "                <th scope='col'>密碼</th>";
        echo "                <th scope='col'>生日</th>";
        echo "                <th scope='col'>電話</th>";
        echo "            </tr>";
        echo "        </thead>";
        echo "        <tbody>";
    while($row = $result->fetch_assoc()) {
        $username = $row["username"];
        $password = $row["password"];
        $birth = $row["birth"];
        $phone = $row["phone"];
        echo "            <tr align='center'>";
        echo "                <th scope='row'>$name</th>";
        echo "                <td>$username</td>";
        echo "                <td>$password</td>";
        echo "                <td>$birth</td>";
        echo "                <td>$phone</td>";
        echo "            </tr>";
    }
    echo "        </tbody>";
    echo "    </font></table>";
  }

$conn->close();
?>
















                      </h5></td>
                  </tr>
                </table>

            </div>
          </div>
    </div>
  </div>

</div>
</body>
</html>


<?php
  }
?>