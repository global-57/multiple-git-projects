<?php ob_start();
error_reporting(0);
(@include ('./dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
if(!$license){
 (@include ('./dt_page/lic_screen.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
exit; } 
(@include ('./dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('./dt_page/classMySQL.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
(@include ('./dt_page/function.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Function failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");

require_once('./dt_page/class.phpmailer.php');
include("./dt_page/class.smtp.php");
?>
<?
$user = base64_decode($_GET['u']);

if(empty($_GET['u'])){
header("location: login.php?result=wrong_user_verification");
exit;
} else {
$db->select("username, sess, email, token, pin, pass", "validation", "username='".mysql_real_escape_string($user)."'");

if($db->num_rows() > 0) {
	//echo $db->result(0, "maintext");
	while($row = $db->fetch_row()) {
	 $username = $row[0];
     $sess = $row[1];
     $email = $row[2];
     $token = $row[3];
     $datenya = $row[4];
     $pass = $row[5];
$nama = $db->dataku("nama", $username);
$hp = $db->dataku("hp", $username);

if($datenya > $clientdate){

$to_time = strtotime($datenya);
$from_time = strtotime($clientdate);
$remain = round(abs($to_time - $from_time) / 60). " minute";

header("location: login.php?result=restrict&user=$username&rem=$remain");
exit;
} else {

//$db->select("username, pin, tgl, status, locks", "pincode", "username='$usere'");

//if($db->num_rows() > 0) {
	//echo $db->result(0, "maintext");
	//while($rowx = $db->fetch_row()) {
	// $userex = $rowx[0];
 //    $pin = $rowx[1];
  //  $tgl = formatgl($rowx[2]);
  //  $status = $rowx[3];
  //  $lock = $rowx[4];
	
//	if(!$pine || $pine <> $pin) {
	//echo "<br><center><img src='images/block_user_pic.png' width='75' height='75' border='0' /><br><br><font style='font-size:13pt;font-family:Verdana;color:#FF0000;line-height:160%'><b>Pin Salah !</b></font><br><font style='font-size:10pt;font-family:Verdana;line-height:160%'>Masukan PIN Anda dengan benar.</font><br><br><a href='javascript:history.go(-1)'><img src='images/my_btn_back.gif' width='59' height='27' border='0'></a><br><br></center>";
  //  } else {
	//if($lock == 1) {
//	echo "<br><center><img src='images/block_user_pic.png' width='75' height='75' border='0' /><br><br><font style='font-size:13pt;font-family:Verdana;color:#FF0000;line-height:160%'><b>Pin sedang di blokir !</b></font><br><font style='font-size:10pt;font-family:Verdana;line-height:160%'>Silahkan hubungi Admin/Pengelola.</font><br><br><a href='javascript:history.go(-1)'><img src='images/my_btn_back.gif' width='59' height='27' border='0'></a><br><br></center>";
  //  } else {
	//if($status == 0) {
//	echo "<br><center><img src='images/block_user_pic.png' width='75' height='75' border='0' /><br><br><font style='font-size:13pt;font-family:Arial;color:#FF0000;line-height:160%'><b>PIN tidak Aktif !</b></font><br><font style='font-size:10pt;font-family:Verdana;line-height:160%'>Silahkan hubungi Admin/Pengelola.</font><br><br><a href='javascript:history.go(-1)'><img src='images/my_btn_back.gif' width='59' height='27' border='0'></a><br><br></center>";
 //   } else {
	

//$stkodexx = substr(str_shuffle(str_repeat("4453B141119667642A03711128717497783C6255363423ABCYWTGEHDLPMBTEF", 64)), 0, 10);
$rgg=base64_encode($email);
$link_valid = $validations."?rg=".$rgg."&sess=".$sess."&token=".$token;

$mail = new PHPMailer(); // defaults to using php "mail()"
$data = $mail_regconfirm_isi;
	$data = preg_replace("/{nama}/", $nama, $data);			
    $data = preg_replace("/{logomail}/", $logomail, $data);	
    $data = preg_replace("/{logourl}/", $logourl, $data);	
	$data = preg_replace("/{hpadmin}/", $hpadmin, $data);			
    $data = preg_replace("/{alamatadmin}/", $alamatadmin, $data);
    $data = preg_replace("/{contactpage}/", $contactpage, $data);
    $data = preg_replace("/{login}/", $login, $data);
    $data = preg_replace("/{bisnisname}/", $bisnisname, $data);
    $data = preg_replace("/{logomail}/", $logomail, $data);
    $data = preg_replace("/{logourl}/", $logourl, $data);
    $data = preg_replace("/{emailadmin}/", $emailadmin, $data);
    $data = preg_replace("/{domain}/", $domain, $data);
    $data = preg_replace("/{link_valid}/", $link_valid, $data);
    $data = preg_replace("/{contactpage}/", $contactpage, $data);
	$body = $data;
	
	$datax = $mail_regconfirm_subject;
	$datax = preg_replace("/{nama}/", $nama, $datax);	
	$subject_confirmregs = $datax;


if($mailset == 1){	
//$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = $smtphost; // SMTP server
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = $smtphost; // sets the SMTP server
$mail->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail->Username   = $smtpuser; // SMTP account username
$mail->Password   = $smtpass;        // SMTP account password
}
$mail->SetFrom(''.$emailadmin.'', ''.$bisnisname.'');
	$address = $email;
	$mail->AddAddress($address, "".$bisnisname."");
	$mail->IsHTML(true);      
	$mail->Subject    = "".$subject_confirmregs."";
	$mail->AltBody    = "Pesan HTML, Untuk melihat pesan, silakan menggunakan peninjau HTML email yang kompatibel!"; // Alt Body
	$mail->MsgHTML($body);
$mail->Send();
$isipesane = "Hello ".$nama.", please check your email ".$email." to confirm your registration.";
sendwa($hp, $isipesane, $apikeywoowa);	

$expired = date('Y-m-d H:i:s', strtotime("+ 10 minutes"));
mysql_query("UPDATE validation SET  pin = '$expired' where username='".mysql_real_escape_string($username)."'");

header("location: login.php?result=send_mail&user=$username&mail=$email");
exit;
}
}
}else{
header("location: login.php?result=wrong_user_confirm");
exit;
}
}
?>
<?php ob_flush(); ?>