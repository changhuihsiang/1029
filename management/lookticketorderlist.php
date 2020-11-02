<?php
  $toid = $_GET["toid"];
  $tostatus = $_GET["tostatus"];
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

    <title>TR ART MUSEUM-管理購票資訊</title>
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
      <h3>管理購票資訊</h3>
      <hr>
      <h5>對於管理購票資訊可為</h5>
      <h5>查看/修改狀態</h5>
  </div>
      
    <div class="alert alert-light" role="alert" style="width: 100%">
      <div class="alert alert-secondary" role="alert" style="width:90%;margin:0 auto;">
        <div class="alert alert-light" role="alert">
                <h3>管理購票資訊</h3>Manage ticket purchase information
                <div align="right">
                   <a href="page004.php"><button type="button" class="btn btn-outline-dark">ＢＡＣＫ</button></a>
                </div>
                <div  role="alert" align="center">
                    <h4  class="alert-heading">購票訂單-<?php echo "$toid"; ?></h4>
                    <table align="center" width="100%">
                      <tr align="center">
                        <td colspan="2">
                          <hr style="width:80%;margin:0 auto;border: 0;height: 2px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0))";>
                          <?php 
                           if($tostatus==1){
                                  $tostatu = "尚未繳款";
                                } elseif($tostatus==2){
                                  $tostatu = "訂單處理中";
                                } elseif($tostatus==3){
                                  $tostatu = "已收單";
                                }
                            echo "<h5> <br>";
							echo "<form method=POST action=updateticketorder.php?toid=$toid>";
							echo "<table width='50%'>";
							echo "<tr><td align='right'>訂單狀態：</td> <td align='left'>$tostatu---></td><td align='left'>";
                            echo "  <select id='inputState' class='form-control' name='tostatus'>";
                            echo "   <option value='1' name='1'>尚未繳款</option>";
                            echo "   <option value='2' name='2'>訂單處理中</option>";
                            echo "  <option value='3' name='3'>已收單</option>";
                            echo "  </select></td>";
                            echo "<td align='center'>";
                            echo "<button type='submit' class='btn btn-outline-dark'>修改</button>";
                            echo "</td></tr>";
                            echo "</table>";
							echo "</form>";
							echo "</h5>";



                          ?>
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
                              $sql = "SELECT * FROM ticketorderlist WHERE toid='$toid'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                              	echo "    <table class='table'>";
					            echo "        <thead class='thead-dark'>";
					            echo "            <tr align='center'>";
					            echo "                <th scope='col'>編號</th>";
					            echo "                <th scope='col'>票種</th>";
					            echo "                <th scope='col'>票價</th>";
					            echo "                <th scope='col'>張數</th>";
					            echo "                <th scope='col'>小計</th>";
					            echo "            </tr>";
					            echo "        </thead>";
					            echo "        <tbody>";
					            $n= 1;


                              while($row = $result->fetch_assoc()) {
                                $toid = $row["toid"];
                                $species = $row["species"];
                                $num = $row["num"];
                                $total = $species*$num;
								$totall= $total+$totall;
                                if($species==220){
                                  $specie = "一般票";
                                } elseif($species==180){
                                  $specie = "軍警票";
                                } elseif($species==150){
                                  $specie = "愛心票";
                                } elseif($species==110){
                                  $specie = "兒童票";
                                }
                                echo "            <tr align='center'>";
					            echo "                <th scope='row'>$n</th>";
					            echo "                <td>$specie</td>";
					            echo "                <td>$species</td>";
					            echo "                <td>$num</td>";
					            echo "                <td>$total</td>";
					            echo "            </tr>";
					            $n=$n+1;
                                }
                                echo "            <tr align='center'><td>總額</td><td></td><td></td><td></td><td>$totall</td></tr>";
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

<?php } ?>