<?php
    session_start();
    $userid = $_POST["userid"];
 


    $servername = "localhost";
    $username = "root";
    $password = "00000000";
    $dbname = "gallery";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // 以下建立SQL查詢指令
    // $sql = "SELECT * FROM news order by id desc";
    //使用 insert into    
    $sql = "SELECT * FROM mem WHERE username='$userid'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];  
            $name = $row["name"];
            $passchk = $row["password"];
			echo "帳號是：$userid";
			echo "<br>密碼是：$passchk";
			echo "<hr>請洽管理者0800-000-000";
			echo "<br><a href='page005-3.php'><button type='submit' class='btn btn-dark'>BACK</button></a>";
            }
    } else{
        echo "查無此帳號";
    }
    $conn->close();






// require("phpMailer/class.phpmailer.php");

// $mail = new PHPMailer();
// // $mail->SMTPDebug = 2;
// $mail->IsSMTP();
// $mail->SMTPAuth = true; // turn on SMTP authentication
// //這幾行是必須的


// $mail->Username = "ac123456dk@gmail.com";
// $mail->Password = "q2574112";
// //這邊是你的gmail帳號和密碼

// $mail->FromName = "ac123456dk@gmail.com";
// // 寄件者名稱(你自己要顯示的名稱)
// $webmaster_email = "新的密碼是:";
// //回覆信件至此信箱


// $email="accc123456dk@gmail.com";
// // 收件者信箱
// $name="accc123456dk@gmail.com";
// // 收件者的名稱or暱稱
// $mail->From = $webmaster_email;


// $mail->AddAddress($email,$name);
// $mail->AddReplyTo($webmaster_email,"Squall.f");
// //這不用改

// $mail->WordWrap = 50;
// //每50行斷一次行

// //$mail->AddAttachment("/XXX.rar");
// // 附加檔案可以用這種語法(記得把上一行的//去掉)

// $mail->IsHTML(true); // send as HTML

// $mail->Charset='UTF-8';

// $mail->Subject = "mail subject";
// // 信件標題
// $mail->Body = "this is mail content";
// //信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
// $mail->AltBody = "this is mail content";
// //信件內容(純文字版)

// $mail->SMTPOptions = array(
// 	'ssl' => array(
// 		'verify_peer' => false,
// 		'verify_peer_name' => false,
// 		'allow_self_signed' => true
// 	)
// );

// if(!$mail->Send()){
// 	echo "Send error：" . $mail->ErrorInfo;
// 	//如果有錯誤會印出原因
// }
// else{
// 	echo "Send success";
// }

//-----------------------------------------------------------------

	// include("PHPMailer.php"); //匯入PHPMailer類別  
	 
	// $mail= new PHPMailer(); //建立新物件   
	
	// echo "HI";
	// $mail->IsSMTP(); //設定使用SMTP方式寄信   
	// $mail->SMTPAuth = true; //設定SMTP需要驗證   
	// $mail->Host = "localhost"; //設定SMTP主機   
	// $mail->Port = 25; //設定SMTP埠位，預設為25埠  
	// $mail->CharSet = "big5"; //設定郵件編碼   
	
	// $mail->Username = "ac123456dk@gmail.com"; //設定驗證帳號   
	// $mail->Password = "***********"; //設定驗證密碼   
	 
	// $mail->From = "ac123456dk@gmail.com"; //設定寄件者信箱   
	// $mail->FromName = "測試人員"; //設定寄件者姓名   
	 
	// $mail->Subject = "PHPMailer 測試信件"; //設定郵件標題   
	// $mail->Body = "大家好, 這是一封測試信件! "; //設定郵件內容 
	// $mail->IsHTML(true); //設定郵件內容為HTML   
	// $mail->AddAddress("$userid", "下地獄"); //設定收件者郵件及名稱   
	// if(!$mail->Send()) {   
	// echo "Mailer Error: " . $mail->ErrorInfo;   
	// } else {   
	// echo "Message sent!";   
	// }






//-----------------------------------------------------------------
	// $to ="$userid"; //收件者
	// $subject = "test"; //信件標題
	// $msg = "smtp發信測試";//信件內容
	// $headers = "From: admin@your.com"; //寄件者

	// if(mail("$to", "$subject", "$msg", "$headers")):
	// echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
	// else:
	// echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
	// endif;
//---------------------------------------------------------------

	
// 	class Config {
//     const BASE_URL = "http://127.0.0.1/";
//     const MAIL_FROM = "ac123456dk@gmail.com";
//     const MAIL_FROM_NAME = "your name";  
//     const MAIL_USER_NAME = "ac123456dk@gmail.com"; // 用來寄信的 GMAIL 帳號
//     const MAIL_USER_PASSWROD = "q2574112";      // 用來寄信的 GMAIL 密碼


// 	use PHPMailer\PHPMailer;

// 	class Mail extends PHPMailer\PHPMailer {
//     public $Host     = 'smtp.gmail.com';
//     public $Mailer   = 'smtp';
//     public $SMTPAuth = true;
//     public $Username = 'ac123456dk@gmail.com';
//     public $Password = 'q2574112';
//     public $SMTPSecure = 'tls';
//     public $WordWrap = 75;

//     public function __construct($Username, $Password){
//         $this->Username = $Username;
//         $this->Password = $Password;
//     }

//     public function subject($subject) {
//         $this->Subject = $subject;
//     }

//     public function body($body) {
//         $this->Body = $body;
//     }

//     public function send() {
//         $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
//         $this->AltBody = str_replace(" ", "\n\n", $this->AltBody);
//         return parent::send();
//     }
// }


// switch($route->getParameter(1)){
//     case "do_mail"; // 網址就會是 http://127.0.0.1/game/do_mail
//       try { 
//         $to = "$userid";
//         $subject = "77777";
//         $body = "sample content";
//         $mail = new Mail(Config::MAIL_USER_NAME, Config::MAIL_USER_PASSWROD);
//         $mail->setFrom(Config::MAIL_FROM, Config::MAIL_FROM_NAME);
//         $mail->addAddress($to);
//         $mail->subject($subject);
//         $mail->body($body);
//         if($mail->send()){
//             echo "success";
//         }else{
//             echo "fail";
//         }
//       } catch(Exception $e) {
//         echo 'Caught exception: ',  $e->getMessage();
//         $error[] = $e->getMessage();
//       }
//     break;
// }

//------------------------------------------------------------------------------------

	// Pear Mail Library
	// require_once "Mail.php";
	// $from = '<accc123456dk@gmail.com>';
	// $to = '<$userid>';
	// $subject = 'Hi!';
	// $body = "Hi,\n\nHow are you?";

	// $headers = array(
	//     'From' => $from,
	//     'To' => $to,
	//     'Subject' => $subject
	// );

	// $smtp = Mail::factory('smtp', array(
	//         'host' => 'ssl://smtp.gmail.com',
	//         'port' => '465',
	//         'auth' => true,
	//         'username' => 'acccc123456dk@gmail.com',
	//         'password' => 'q2574112'
	//     ));

	// $mail = $smtp->send($to, $headers, $body);

	// if (PEAR::isError($mail)) {
	//     echo('<p>' . $mail->getMessage() . '</p>');
	// } else {
	//     echo('<p>Message successfully sent!</p>');
	// }





	?>