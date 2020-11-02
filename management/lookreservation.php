<?php
  $rid = $_GET["rid"];
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

    <title>TR ART MUSEUM-管理預約資訊</title>
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
      <tr><td><h3>管理預約資訊</h3></td></tr>
    <hr>
    <h5>對於管理預約資訊可為:</h5>
    <h5>查看/修改狀態</h5>
  </div>
      
    <div class="alert alert-light" role="alert" style="width: 100%">
      <div class="alert alert-secondary" role="alert" style="width:90%;margin:0 auto;">
        <div class="alert alert-light" role="alert">
                <h3>管理預約資訊</h3>Manage appointment information
                <div align="right">
                   <a href="page005.php"><button type="button" class="btn btn-outline-dark">ＢＡＣＫ</button></a>
                </div>
                <div  role="alert" align="center">
                    <h4  class="alert-heading">預約訂單-<?php echo "$rid"; ?></h4>
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
                              $sql = "SELECT * FROM reservation WHERE rid='$rid'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                $rid = $row["rid"];
                                $name = $row["name"];
                                $phone = $row["phone"];
                                $datet = $row["datet"];
                                $timet = $row["timet"];
                                $peo = $row["peo"];
                                $remarks = $row["remarks"];
                                if($remarks==NULL){
                                  $remarks = "無";
                                }


                                $restatus = $row["restatus"];
                                if($restatus==1){
                                  $restatu = "等待中";
                                } elseif($restatus==2){
                                  $restatu = "成功預約";
                                } elseif($restatus==3){
                                  $restatu = "失敗預約";
                                }

                                echo "<form method=POST action=updatereservation.php?rid=$rid>";
                                  echo "<table width='50%'>";
                                    echo "<tr><td>聯絡電話：</td> <td align='left'>$phone</td> <tr>";
                                    echo "<tr><td>預約日期：</td> <td align='left'>$datet</td></tr>";
                                    echo "<tr><td>預約時間：</td> <td align='left'>$timet</td></tr>";
                                    echo "<tr><td>預約人數：</td> <td align='left'>$peo</td></tr>";
                                    echo "<tr><td>預約狀態：</td> <td align='left'>$restatu------></td><td align='left'>";
                                    echo "  <select id='inputState' class='form-control' name='restatus'>";
                                    echo "   <option value='1' name='1'>等待中</option>";
                                    echo "   <option value='2' name='2'>成功預約</option>";
                                    echo "  <option value='3' name='3'>失敗預約</option>";
                                    echo "  </select></td></tr>";
                                    echo "<tr><td>備　　註：</td> <td align='left'>$remarks</td></tr>";
                                    echo "<tr><td align='center' colspan='3'>";
                                    echo "<br><P align='center'><button type='submit' class='btn btn-outline-dark'>修改</button></P>";
                                    echo "</td></tr>";
                                  echo "</table>";
                                echo "</form>";
                                }
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

<?php } ?>