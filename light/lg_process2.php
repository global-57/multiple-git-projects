<?php
ob_start();
error_reporting(0);
// // #-----------------------------------------------------------------------------#
// // #-------------------------------.*PRIMADESAIN*.-------------------------------#
// // #-------------------------------: Script MMM3 :-------------------------------#
// // #------------------- Copyright 2009-2014 Primadesain.com ---------------------#
// // #----------- Email: primapc57@gmail.com Phone: +62 852 2865 7360 -------------#
// // #--------- http://www.primadesain.com - http://www.primadesain.net -----------#
// // #-----------------------------------------------------------------------------#
// // #------------- Primadesain.Com | Jasa Webdesain Bisnis Online ----------------#
// // #--- Website Bisnis MLM, Bisnis Investasi, Forex, Hyip, Binary, Trinary, -----#
// // #------- Matrix 4 -- 10, Toko Online, Iklan Baris, Profil, Reseller. ---------#
// // #-----------------------------------------------------------------------------#
// // # This software is  furnished  under a  license and may  be used and   copied #
// // # only  in accordance with the terms of such  license and with  the inclusion #
// // # of  the above copyright notice.  This software or any other  copies thereof #
// // # may not be  provided or otherwise made available  to any other person.   No #
// // # title to and  ownership of the software is hereby transferred.              #
// // #                                                                             #
// // # You  may  not  reverse   engineer,  decompile,  defeat  license  encryption #
// // # mechanisms, or  disassemble  this  software  product  or software   product #
// // # license. We  may terminate  this license if you  don't comply  with any  of #
// // # the terms and   conditions set forth   in our  End  User  License Agreement #
// // # (EULA). In  such event, licensee  agrees to return licensor or  destroy all #
// // # copies of software upon termination  of the license.                        #
// // # Please see the EULA file for the full End User License Agreement.           #
// // ###############################################################################
session_start();
session_regenerate_id(true);
$session=session_id();

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

$refer_url = base64_decode($_POST['refer_url']);
$refurl=$_POST['refer_url'];
if($refer_url){
$go_url=$refer_url;
$useref="&refer=".$refurl;
}else{
$go_url="./member/";
$useref="";
}
		   
$userlogin = base64_decode($_POST['userlogin']); 
$passlogin=base64_decode($_POST['passlogin']);


$query113z = "SELECT * FROM ckpoint WHERE username = '".$userlogin."'"; 
$result113z = mysql_query($query113z);
$numus9999 = mysql_num_rows($result113z);
$row113z = mysql_fetch_array($result113z);
$times0000 = $row113z['time'];
$time0000=time();
$init = $times0000-$time0000;
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;
if($seconds > 0){ $scc=$seconds." detik";}else{ $scc=""; }
if($minutes > 0){ $mnt=$minutes." menit";}else{ $mnt="0 menit"; }
$ttmmm = "$mnt $scc";	
$rty=base64_encode($ttmmm);		
if($numus9999) {
header("location: ./login.php?result=cekpoint&tc=$rty".$useref."");
exit;
}else{

	
//$cekvalid = mysql_query("SELECT * FROM validation WHERE username='$userlogin'");
//$ckvalid = mysql_num_rows($cekvalid);

//$cekvalidsms = mysql_query("SELECT * FROM sms_validation WHERE username='$userlogin'");
//$ckvalidsms = mysql_num_rows($cekvalidsms);

//if(!$ckvalid && !empty($ckvalidsms)){
//header("location: ./login.php?result=noactive_sms&user=".$userlogin."".$useref."");
//exit;
//} else if(!empty($ckvalid) && !$ckvalidsms){
//header("location: ./login.php?result=noactive_mail&user=".$userlogin."".$useref."");
//exit;
//} else {

$sqlbk="SELECT blokir, status, authgoogle, 2fa FROM member WHERE username = '".mysql_real_escape_string($userlogin)."'"; 
$dtbk=mysql_query($sqlbk);
$conbk=mysql_fetch_array($dtbk);
$bk = $conbk['blokir']; 		 
$st = $conbk['status']; 
$cfa = $conbk['2fa']; 
$authgoogles = $conbk['authgoogle']; 			  		 
	if($bk == 1){
		echo "<script type=text/javascript>
              alert('Access Denied! Your membership is still blocked!');
              window.location = ' ./login.php?result=blocked&co=$userlogin'
              </script>";	
			  } else {


require_once 'lib/GoogleAuthenticator.php';
$authenticator = new PHPGangsta_GoogleAuthenticator();
$secret = $cfa;
$website   = $webz2fa; 
$title     = $ttl2fa;
$tolerance = $tlrz2fa;

$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$code){
header("location: ./verification.php?u=".$_POST['userlogin']."&p=".$_POST['passlogin']."&result=wrong_auth".$useref."");
exit;
} else {	

if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: ./verification.php?u=".$_POST['userlogin']."&p=".$_POST['passlogin']."&result=wrong_authx".$useref."");
exit;
} else {	


$sqlus="SELECT username FROM member WHERE username = '".mysql_real_escape_string($userlogin)."'"; 
$dtus=mysql_query($sqlus) or die(mysql_error());
$numus = mysql_num_rows($dtus);
if(!$numus) {
header("location: ./login.php?result=wrong_user&co=$userlogin".$useref."");
exit;
} else {

$db->select("username, pass, nama, sponsor, email, status, blokir, logmember, hp", "member", "username='".mysql_real_escape_string($userlogin)."' and pass='$passlogin'");
if ($db->num_rows() > 0)
  {
$ipne = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ipne);
$browser = $_SERVER['HTTP_USER_AGENT'];
$http_refer = $_SERVER['HTTP_REFERER'];
$time=time();
$time_check=$time-1800; //We Have Set Time 5 Minutes
$token = md5(md5(date("j, n, Y")).md5($session));

$pageetipne = file_get_contents('http://api.ipstack.com/'.$ipne.'?access_key='.$accesskeys.'');
$my_arrayipne = json_decode($pageetipne, true);
$dataregion = $my_arrayipne['city']." - ".$my_arrayipne['region_name']." - ".$my_arrayipne['country_name'];

$sqlc="SELECT usermember FROM memberonline WHERE usermember = '".mysql_real_escape_string($userlogin)."'"; 
$dtc=mysql_query($sqlc) or die(mysql_error());
$numc = mysql_num_rows($dtc);

if(!empty($numc)){
mysql_query("UPDATE memberonline SET time='$time', sessionslog='$token', ip='$ipne', date='$browser' WHERE usermember='".mysql_real_escape_string($userlogin)."'") or die(mysql_error());
}else{
mysql_query("insert into memberonline values('','$session', '$token', '".mysql_real_escape_string($userlogin)."', '$ipne', '$time', '$browser')") or die(mysql_error());
}

$sblxx=mysql_query("select time from memberlog WHERE userid='".mysql_real_escape_string($userlogin)."' ORDER BY time DESC LIMIT 1") or die(mysql_error());
while($rows=mysql_fetch_row($sblxx)) {
$ida = $rows[0]+1;
}
mysql_query("insert into memberlog values('','$token', '".mysql_real_escape_string($userlogin)."', '$ipne', '$hostaddress', '$browser', '$clientdate', '', '$ida', '$dataregion')") or die(mysql_error());

$sql4="DELETE FROM memberonline WHERE time<$time_check";
$result4=mysql_query($sql4) or die(mysql_error()); // after 5 minutes, session will be deleted

  // echo("Username Ada<br>");
  // echo "Proses Login Berhasil<br>";
    session_start();
	session_regenerate_id(true);

	$_SESSION["user_session"] = $db->result(0, "username");
	$_SESSION["user_password"] = $db->result(0, "pass");
	$_SESSION["user_nama"] = $db->result(0, "nama");
	$_SESSION["user_email"] = $db->result(0, "email");
	$_SESSION["user_sponsor"] = $db->result(0, "sponsor");
	$_SESSION["user_blokir"] = $db->result(0, "blokir");
	$_SESSION["user_status"] = $db->result(0, "status");
	$_SESSION["user_log"] = $token;
	$_SESSION["ipne"] = $ipne;
	$_SESSION["browser"] = $_SERVER['HTTP_USER_AGENT'];
	$_SESSION["LAST_ACTIVITY"] = time();
	
	setcookie("user", $db->result(0, "username"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("pass", $db->result(0, "pass"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("sts", $db->result(0, "status"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("bkr", $db->result(0, "blokir"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("browser", $_SERVER['HTTP_USER_AGENT'], strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("userlog", $token, strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("ipnya", $ipne, strtotime( '+1 days' ), "/", "", "", TRUE);
	
	mysql_query("UPDATE member SET batas = '0' where username='".mysql_real_escape_string($userlogin)."'");
	$nama = $_SESSION["user_nama"];
	$email = $_SESSION["user_email"];
	$emailadmin = $db->config("email");
	$tgl = formatgl($clientdate);
	$waktu = date("H:i:s");
	$hostaddress = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$hp = $db->result(0, "hp");

if($logmembere == 1){

if($db->result(0, "logmember") == 1){

	$isimail_e="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Someone has logged in member area using your userid.</p>
<p>User ID: ".$userlogin."</strong><br>
IP Address: ".$ipne."<br>
Hostnamme: ".$hostaddress."<br>
Browser : ".$browser."<br>
Refer : ".$http_refer."<br>
Date : ".$tgl."
</p>

<p><br><br><br>
Regards,<br>
<b><a href='http://".$domain."' target='_blank'>".$bisnisname."</a></b><br>
Email: ".$emailadmin."<br>Phone: ".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
		if($mailset == 1){	
$mail3b->IsSMTP(); // telling the class to use SMTP
$mail3b->Host       = $smtphost; // SMTP server
$mail3b->SMTPAuth   = true;                  // enable SMTP authentication
$mail3b->Host       = $smtphost; // sets the SMTP server
$mail3b->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3b->Username   = $smtpuser; // SMTP account username
$mail3b->Password   = $smtpass;        // SMTP account password
}
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($email, $nama);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$nama.', Login Device Notification';
        $mail3b->msgHTML($isimail_e);
    $mail3b->send();	
if($hp){
$isipesan = "Hello ".$nama.", Someone has logged in member area (".$domain.") using your userid (".$userlogin."), Date: ".$tgl.", IP: ".$ipne.".";	
sendwa($hp, $isipesan, $apikeywoowa);	
}		
}


}
	
	
	header("Location: ".$go_url."");
  // exit;
   } else {

 mysql_query("UPDATE member SET batas = batas + 1 where username='".mysql_real_escape_string($userlogin)."'") or die(mysql_error());
        
	$sqlg="SELECT batas, nama, email FROM member WHERE username = '".mysql_real_escape_string($userlogin)."'"; 
$dtg=mysql_query($sqlg) or die(mysql_error());
$a=mysql_fetch_array($dtg) or die(mysql_error());
$b=$a['batas'];	
		$bataslog = $db->config("log_salah");
		
        if($b >= $bataslog){
     	$sess = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 32);
	
$time=time();
$time_checks=$time+300; 


		
$sql = mysql_query("SELECT * FROM ckpoint WHERE username='$userlogin'");
$num = mysql_num_rows($sql);

 if ($num == 0){
		$db->insert("ckpoint", "", "'', '$sess', '$userlogin', '$time_checks'");
		
		}

 $init = $time_checks-$time;
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;
if($seconds > 0){ $scc=$seconds." detik";}else{ $scc=""; }
if($minutes > 0){ $mnt=$minutes." menit";}else{ $mnt="0 menit"; }

$ttmmm = "$mnt $scc";	
$rty=base64_encode($ttmmm);		
		
 header("Location: ./login.php?result=cekpoint&tc=$rty".$useref."");
	  
   }
        else{
	
  	header("location: ./login.php?result=wrong_pass&co=$userlogin".$useref."");
	}
	}
	}
	}
	}
	}
}
//}
//----------------------------------
?>