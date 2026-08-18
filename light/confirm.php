<?php
ob_start();
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

if(isset($_GET["sess"])){ $sesine = anti_injection($_GET["sess"]); }
if(isset($_GET["token"])){ $token = anti_injection($_GET["token"]); }
if(isset($_GET["rg"])){ $rg = anti_injection($_GET["rg"]); }

$mail=base64_decode($rg);

if(empty($sesine) || empty($token) || empty($rg)){
header("location: login.php?result=link_not_valid");
exit;

} else {

$query = "SELECT * FROM validation WHERE sess='".mysql_real_escape_string($sesine)."' AND token='".mysql_real_escape_string($token)."' AND email='".mysql_real_escape_string($mail)."'"; 
$result = mysql_query($query);
$num = mysql_num_rows($result);	
$row = mysql_fetch_array($result);
$usernamex = $row['username'];
if (empty($num)){ 
header("location: login.php?result=error_validation");
exit;

} else {

$query2 = "SELECT * FROM member WHERE username='$usernamex'"; 
$result2 = mysql_query($query2);
$row2 = mysql_fetch_array($result2);
$username = $row2['username'];
$hp = $row2['hp'];
$email = $row2['email'];
$nama = $row2['nama'];
$negara = $row2['negara'];
$password1 = $row2['pass'];
$sponsore = $row2['sponsor'];
$upline = $row2['upline'];
$ccidmd=$row2['accid'];
$tgl=$row2['tgl'];

$pass=md5($password1);

$query3 = "SELECT * FROM pincode WHERE username='$username'"; 
$result3 = mysql_query($query3);
$row3 = mysql_fetch_array($result3);
$pin = $row3['pin'];

$pine=md5($pin);
		
$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");
		$spnsnama = $db->dataku("nama", $sponsore);
		$spnsmail = $db->dataku("email", $sponsore);



$db->aktivasi($username);

if($usepins == 1){
	$pinsesms=", Secure PIN: ".$pin."";
	$pinsemail="Secure PIN : ".$pin."";
}else{
	$pinsesms="";
	$pinsemail="";
}

if($hp){
$isipesan = "Hello ".$nama.", Thank you for signed up at ".$bisnisname.", your login details, Username: ".$username.", Password: ".$password1."".$pinsesms.".";
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
sendwa($hp, $isipesan, $apikeywoowa);	
}


$tt = date('d-m-Y', strtotime($clientdate));
$jame = date('H:i', strtotime($clientdate));

$tkk = date('d-m-Y-H-i-s', strtotime($clientdate));
$tokens = md5(md5(date("Y-m-d H:i:s")));
$stmpkode = strtotime(date("Y-m-d H:i:s"));
	
$isimail1="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama_bisnis.",</p>
<p>Someone has signed up at ".$bisnisname.".</p>

<p>
Username : ".$username."<br>
Name : ".$nama."<br>
Email : ".$email."<br>
Password : ".$password1."<br>
".$pinsemail."
</p>
<p>
<strong>Network:</strong><br>
Sponsor : ".$sponsore."
</p>

<p>
Date Register : ".$tgl."
</p>

<p><br><br><br>
Regards,<br>
<b><a href='http://".$domain."' target='_blank'>".$bisnisname."</a></b><br>
Email: ".$emailadmin."<br>Phone: ".$hpadmin."</p>";
	   
	    $mail1 = new PHPMailer;
		//$mail1->IsSMTP(); // telling the class to use SMTP
        $mail1->Host       = $smtphost; // SMTP server
        $mail1->SMTPAuth   = true;                  // enable SMTP authentication
        $mail1->Host       = $smtphost; // sets the SMTP server
        $mail1->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail1->Username   = $smtpuser; // SMTP account username
        $mail1->Password   = $smtpass;        // SMTP account password
        $mail1->setFrom($email, $nama);
        $mail1->addAddress($emailadmin, $bisnisname);
	    $mail1->IsHTML(true);       
        $mail1->Subject = ''.$bisnisname.', New signup at '.$bisnisname.'';
        $mail1->msgHTML($isimail1);
        $mail1->send();	
	
	
	
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>Thank you for signed up at ".$bisnisname.".<br>Your registration has been successfully confirmed.</p>

<p>
Username : ".$username."<br>
Name : ".$nama."<br>
Email : ".$email."<br>
Password : ".$password1."<br>
".$pinsemail."
</p>
<p>
<strong>Network:</strong><br>
Sponsor : ".$sponsore."
</p>

<p>
Date Register : ".$tgl."
</p>

<p><br><br><br>
Regards,<br>
<b><a href='http://".$domain."' target='_blank'>".$bisnisname."</a></b><br>
Email: ".$emailadmin."<br>Phone: ".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
		//$mail2->IsSMTP(); // telling the class to use SMTP
        $mail2->Host       = $smtphost; // SMTP server
        $mail2->SMTPAuth   = true;                  // enable SMTP authentication
        $mail2->Host       = $smtphost; // sets the SMTP server
        $mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail2->Username   = $smtpuser; // SMTP account username
        $mail2->Password   = $smtpass;        // SMTP account password
        $mail2->setFrom($emailadmin, $bisnisname);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Your signup at '.$bisnisname.'';
        $mail2->msgHTML($isimail2);
        $mail2->send();	


$db->delete("validation", "username='$username'");
$db->update("member", "pass='$pass'", "username='$username'");
$db->update("pincode", "pin='$pine'", "username='$username'");
$db->update("ewalet", "password='$pass'", "username='$username'");
$db->update("acc", "pass='$password1', pin='$pin'", "username='$username'");


  header("location: login.php?result=authenticated&u=$username&p=$password1");
  exit;
 }
}
ob_flush(); ?>