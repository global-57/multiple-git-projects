<?php ob_start();
(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
if(!$license){
 (@include ('../dt_page/lic_screen.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
exit; } 
(@include ('../dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/classMySQL.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
(@include ('../dt_page/function.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Function failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
require_once('../dt_page/class.phpmailer.php');
include("../dt_page/class.smtp.php");
if(isset($_GET["refer"])){ $refer = anti_injection($_GET["refer"]); }
$refer_url = base64_decode($refer);
?>
<?
$user = base64_decode($_GET['u']);
if(empty($user)){
header("location: ".$refer_url."&result=err_user");
exit;
} else {
	
$db->select("username, tgl, kode, phone, email, time, sess, batas", "otp", "username='".mysql_real_escape_string($user)."'");

if($db->num_rows() > 0) {
	//echo $db->result(0, "maintext");
	while($row = $db->fetch_row()) {
	 $username = $row[0];
     $tgl = $row[1];
     $kode = $row[2];
     $hp = $row[3];
     $email = $row[4];
     $times = $row[5];
     $batas = $row[7];
if($tgl > $clientdate){
$to_time = strtotime($tgl);
$from_time = strtotime($clientdate);
$remain = round(abs($to_time - $from_time) / 60). " minute";
header("location: ".$refer_url."&result=restricts");
exit;
} else {
$expired = date('Y-m-d H:i:s', strtotime("+ 1 minutes"));
$time=time();
$time_checks=$time+300; 
mysql_query("UPDATE otp SET tgl='$expired', batas=$row[7]+1, time='$time_checks' where username='".mysql_real_escape_string($username)."'");


$nama=$db->dataku("nama", $username);
if($otpnya == 1 || $otpnya == 3){
if($hp){	
$isipesan = $nama.", Kode OTP Withdrawal Anda ".$kode.".";
	//mysql_query("insert into outbox values('', '', '$username', '$hp', '$isipesan', '$clientdate', '1')");
	if($smsgtw == 1 && $jsms == 1){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsreguler();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 1 && $jsms == 2){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsmasking();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 2){
	sendsms($hp, $isipesan) ;
	}else{}
}
}

if($otpnya == 2 || $otpnya == 3){
	
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$nama." (".$username."),<br>
Kode OTP Withdrawal Anda:</p>
<p style='font-size:36px; color:#069; font-weight:bold;'>".$kode."</p>
<p>Kode hanya berlaku untuk 5 Menit</p>
<p><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
//$mail3->IsSMTP(); // telling the class to use SMTP
$mail3->Host       = $smtphost; // SMTP server
$mail3->SMTPAuth   = true;                  // enable SMTP authentication
$mail3->Host       = $smtphost; // sets the SMTP server
$mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3->Username   = $smtpuser; // SMTP account username
$mail3->Password   = $smtpass;        // SMTP account password
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Kode OTP Withdrawal';
        $mail3->msgHTML($isimail);
        $mail3->send();	
	
}

if($otpnya == 1){
$jnkr="send_sms&hx=$hp";	
}else if($otpnya == 2){
$jnkr="send_mail&em=$email";
}else if($otpnya == 3){
$jnkr="send_to&em=$email&hx=$hp";
}


header("location: ".$refer_url."&result=$jnkr");
exit;
}
}
}else{
header("location: ".$refer_url."&result=err_users");
exit;
}
}
?>
<?php ob_flush(); ?>