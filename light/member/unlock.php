<?php
ob_start(); 
error_reporting(0);

if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){
$user_session=$_COOKIE["user"];
$user_pass=$_COOKIE["pass"];
$user_blokir=$_COOKIE["bkr"];
$user_status=$_COOKIE["sts"];
$user_log=$_COOKIE["userlog"];
$browsercheck=$_COOKIE["browser"];
$ipcheck=$_COOKIE["ipnya"];
}

if(isset($_COOKIE["user"])){
$_SESSION["LAST_ACTIVITY"] = time();

(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/classMySQL.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
(@include ('../dt_page/function.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Function failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
if($lang == 1){
(@include ('../dt_page/langid.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Language file not found, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
}else{
(@include ('../dt_page/langen.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Language file not found, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
}
require '../dt_page/mail/PHPMailerAutoload.php';

$sql0 = mysql_query("SELECT * FROM ipblock WHERE ip='".$_SERVER['REMOTE_ADDR']."'");
$num0 = mysql_num_rows($sql0);
if($num0 > 0) {
	$string = 'Your IP Address '.$_SERVER['REMOTE_ADDR'].' has been blocked from this website.\n\nPlease contact administrator\n'.ADMIN_NAME.' - '.WEB_NAME.'\n'.BUSSINESS_ADDRESS.'\nEmail: '.BUSSINESS_EMAIL.'\nPhone: '.BUSSINESS_MOBILE.'';
        echo "<script>alert(\"$string\");".
        "window.parent.closeModal();</script>";
		
		
		
exit();
}


if (isset($_SESSION["LAST_ACTIVITY"])) {
    if (time() - $_SESSION["LAST_ACTIVITY"] > $sess_time) {
        session_start();
		setcookie("user", '', strtotime( '-5 days' ), '/'); 
setcookie("pass", '', strtotime( '-5 days' ), '/'); 
setcookie("bkr", '', strtotime( '-5 days' ), '/'); 
setcookie("sts", '', strtotime( '-5 days' ), '/');
setcookie("userlog", '', strtotime( '-5 days' ), '/'); 
setcookie("browser", '', strtotime( '-5 days' ), '/'); 
setcookie("ipnya", '', strtotime( '-5 days' ), '/');
 session_destroy();
		$string = 'Your login session has expired because no activity during '.$menite.' minutes \n\nClick OK to login again';
        echo "<script>alert(\"$string\");".
        "window.parent.closeModal();</script>";
    } else if (time() - $_SESSION["LAST_ACTIVITY"] > 60) {
        $_SESSION["LAST_ACTIVITY"] = time();
		mysql_query("UPDATE memberonline SET time='".time()."' where usermember='$user_session' and sessionslog='$user_log'");
    }
}

$sqlq = mysql_query("SELECT * FROM member WHERE username='$user_session'");
$numq = mysql_num_rows($sqlq);
while($rowq = mysql_fetch_array($sqlq)){
$pas = $rowq['pass'];
}
if($pas != $user_pass)
{
    session_start();
	setcookie("user", '', strtotime( '-5 days' ), '/'); 
setcookie("pass", '', strtotime( '-5 days' ), '/'); 
setcookie("bkr", '', strtotime( '-5 days' ), '/'); 
setcookie("sts", '', strtotime( '-5 days' ), '/');
setcookie("userlog", '', strtotime( '-5 days' ), '/'); 
setcookie("browser", '', strtotime( '-5 days' ), '/'); 
setcookie("ipnya", '', strtotime( '-5 days' ), '/');
 session_destroy(); 
    $string = 'System detects your password has been changed \n\nClick OK to login again';
    echo "<script>alert(\"$string\");".
     "window.parent.closeModal();</script>";
}
$sqlp = mysql_query("SELECT * FROM memberonline WHERE usermember='$user_session'");
$nump = mysql_num_rows($sqlp);
while($rowp = mysql_fetch_array($sqlp)){
$ip = $rowp['ip'];
$ssn = $rowp['sessionslog'];
$bws = $rowp['date'];
$hostaddress = gethostbyaddr($ip);
}
if($ip != $ipcheck || $ssn != $user_log)
{
    session_start();
	setcookie("user", '', strtotime( '-5 days' ), '/'); 
setcookie("pass", '', strtotime( '-5 days' ), '/'); 
setcookie("bkr", '', strtotime( '-5 days' ), '/'); 
setcookie("sts", '', strtotime( '-5 days' ), '/');
setcookie("userlog", '', strtotime( '-5 days' ), '/'); 
setcookie("browser", '', strtotime( '-5 days' ), '/'); 
setcookie("ipnya", '', strtotime( '-5 days' ), '/');
 session_destroy();
    $string = 'Someone has logged in somewhere else using your username \n\nUsername : '.$user_session.' \nIP Address : '.$ip.' \nHostname : '.$hostaddress.'  \nBrowser : '.$bws.' \n\nPlease use only one browser, login more than one session is not allowed.';
    echo "<script>alert(\"$string\");".
    "window.parent.closeModal();</script>";
}

if (IE_BLOCKED == 1 && preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) ||
preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))) {
echo "<script type=text/javascript>
              alert('Internet Explorer is blocked from this site!');
              window.parent.closeModal();
              </script>";	
exit;
}else{
?><style type="text/css">

body {
background-color:#333;
color: #eee;
}

</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="css/master_style.css">
        </head>
<body>
 <?php
 
if (isset($_GET['do']) && $_GET['do'] == "check") {
$kodex = substr(str_shuffle(str_repeat("121234567890123434567890567890011223344556677889900558877443365982541", 64)), 0, 5);
$pine = md5($_POST['pincode']);	
$fields = $_POST['fields'];	
$sendto = $_POST['sendto'];	

$nama = $db->dataku("nama", $user_session);
$email = $db->dataku("email", $user_session);
$hp = $db->dataku("hp", $user_session);

 
if($fields == 1){
	$jnse = "Bank Account";
}else if($fields == 2){
	$jnse = "Bitcoin Wallet Address";
}else if($fields == 3){
	$jnse = "Litecoin Address";
}else if($fields == 4){
	$jnse = "Ethereum Address";
}else if($fields == 5){
	$jnse = "Doge Address";
}else if($fields == 6){
	$jnse = "Bitcoincash Address";
}else if($fields == 7){
	$jnse = "Dash Address";
}else if($fields == 8){
	$jnse = "OGC Wallet Address";
}else if($fields == 9){
	$jnse = "Paypal Address";
}else if($fields == 10){
	$jnse = "Skrill Address";

}else if($fields == 11){
	$jnse = "Phone Number";
}else if($fields == 12){
	$jnse = "Email Account";
}else if($fields == 13){
	$jnse = "OVO Number";
}else if($fields == 14){
	$jnse = "DANA Number";
}else if($fields == 15){
	$jnse = "GOPAY Number";
}else if($fields == 16){
	$jnse = "WhatsApp Number";
}else if($fields == 17){
	$jnse = "USDT Wallet Address";
}else if($fields == 18){
	$jnse = "All Locked Field";
}else if($fields == 19){
	$jnse = "Bank (Malaysia)";
}else if($fields == 20){
	$jnse = "Bank (Thailand)";
}else{}

if($sendto == 0){
$tjnex = "email address";	
}else if($sendto == 1){
$tjnex = "mobile number";	
}else if($sendto == 2){
$tjnex = "mobile number and email";	
}
$expired = date('Y-m-d H:i:s', strtotime("+1 hours"));
$sqlocc = mysql_query("SELECT * FROM unlockfield WHERE username='$user_session'");
$numocc = mysql_num_rows($sqlocc);
if($numocc > 0) {
	
	header("location: unlock.php?result=wait&t=".base64_encode($tjnex)."");
	
	exit;
	
	
}else{
	mysql_query("insert into unlockfield values('','$user_session', '$fields', '$kodex', '$expired')");


if($sendto == 0 && $email){
$tjne = "Email Address ".$email;	
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama." (".$user_session."),</p>
<p>Enter verification code below to reset the field.</p>
<p style='font-size:24px; color:#06C;'><strong>Code: ".$kodex."</strong><br>
Field Reset: ".$jnse."<br>
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
		if($smaile == 1){	
//$mail3b->IsSMTP(); // telling the class to use SMTP
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
        $mail3b->Subject = ''.$nama.', verification code reset field';
        $mail3b->msgHTML($isimail);
    $mail3b->send();	
	
	
}else if($sendto == 1 && $hp){
$tjne = "Mobile Number ".$hp;	
	
$isipesan = "Hello ".$nama.", To reset field: ".$jnse.", enter this verification code: ".$kodex."";

	mysql_query("insert into outbox values('', '', '$user_session', '$hp', '$isipesan', '$clientdate', '1')");
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


}else if($sendto == 2){
	

$tjne = "Mobile Number ".$hp." & Email Address ".$email;		
	
if($email){
	
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama." (".$user_session."),</p>
<p>Enter verification code below to reset the field.</p>
<p style='font-size:24px; color:#06C;'><strong>Code: ".$kodex."</strong><br>
Field Reset: ".$jnse."<br>
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
		if($smaile == 1){	
//$mail3b->IsSMTP(); // telling the class to use SMTP
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
        $mail3b->Subject = ''.$nama.', verification code reset field';
        $mail3b->msgHTML($isimail);
    $mail3b->send();		
}
if($hp){	

	
$isipesan = "Hello ".$nama.", To reset field: ".$jnse.", enter this verification code: ".$kodex."";

	mysql_query("insert into outbox values('', '', '$user_session', '$hp', '$isipesan', '$clientdate', '1')");
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


}	
echo "<div class='alert alert-info alert-dismissable' style='width:250px;'>Verification code has been sent to your ".$tjne."</div>";

?>

<form name="addtime" id="addtime" method="post" action="unlock.php?do=submit" />
  <input type="hidden" id="fields" name="fields" value="<?php echo $fields; ?>"/>
    <div class="controls-row" style=" margin-top:10px;">

            <label>Enter Verification Code</label>
         
    <input name="kode" id="kode" type="text"  class="form-control" onMouseover="ddrivetip('enter  verification code sent to your <?php echo $tjne; ?>')"; onMouseout="hideddrivetip()"  required='required' style="width:240px;"/>
		  </select> 

          </div>
          
  
         <div class="controls-row" style=" margin-top:10px;">
        
            <button type="submit" class="btn btn-primary" name="subminaddtime"><i class="fa fa-paper-plane"></i>&nbsp;Send</button>

          </div>
  </form>
  





<?php
}
?>
<?php
}else if (isset($_GET['do']) && $_GET['do'] == "submit") {
$kode = anti_injection($_POST['kode']);
$kodex = anti_injection($_POST['kodex']);
$fields = anti_injection($_POST['fields']);

$sqlobb = mysql_query("SELECT * FROM unlockfield WHERE username='$user_session' and kode='$kode'");
$numobb = mysql_num_rows($sqlobb);
if(!$numobb) {
$db->delete("unlockfield", "username='$user_session'");
header("location: unlock.php?result=wrong_code");
	
	exit;

}else{

 


if($fields == 1){
	$fdne = "Field Bank Account";
mysql_query("UPDATE member SET bank='' WHERE username='$user_session'");
} else if($fields == 2){
	$fdne = "Field Bitcoin Wallet Address";
mysql_query("UPDATE member SET btcaddress='' WHERE username='$user_session'");
} else if($fields == 3){
	$fdne = "Field Litecoin Address";
mysql_query("UPDATE member SET ltcaddress='' WHERE username='$user_session'");
} else if($fields == 4){
	$fdne = "Field Ethereum Address";
mysql_query("UPDATE member SET ethaddress='' WHERE username='$user_session'");
} else if($fields == 5){
	$fdne = "Field Doge Address";
mysql_query("UPDATE member SET dogeaddress='' WHERE username='$user_session'");
} else if($fields == 6){
	$fdne = "Field Bitcoincash Address";
mysql_query("UPDATE member SET bchaddress='' WHERE username='$user_session'");
} else if($fields == 7){
	$fdne = "Field Dash Address";
mysql_query("UPDATE member SET dashaddress='' WHERE username='$user_session'");
} else if($fields == 8){
	$fdne = "Field OGC Wallet Address";
mysql_query("UPDATE member SET xrpaddress='' WHERE username='$user_session'");
} else if($fields == 9){
	$fdne = "Field Paypal Address";
mysql_query("UPDATE member SET paypal='' WHERE username='$user_session'");
} else if($fields == 10){
	$fdne = "Field Skrill Address";
mysql_query("UPDATE member SET skrill='' WHERE username='$user_session'");

} else if($fields == 11){
	$fdne = "Field Phone Number";
mysql_query("UPDATE member SET hp='' WHERE username='$user_session'");
} else if($fields == 12){
	$fdne = "Field Email Address";
mysql_query("UPDATE member SET email='' WHERE username='$user_session'");
} else if($fields == 13){
	$fdne = "Field OVO Number";
mysql_query("UPDATE member SET ovo='' WHERE username='$user_session'");
} else if($fields == 14){
	$fdne = "Field DANA Number";
mysql_query("UPDATE member SET dana='' WHERE username='$user_session'");
} else if($fields == 15){
	$fdne = "Field GOPAY Number";
mysql_query("UPDATE member SET gopay='' WHERE username='$user_session'");
} else if($fields == 16){
	$fdne = "Field WhatsApp Number";
mysql_query("UPDATE member SET whatsapp='' WHERE username='$user_session'");
} else if($fields == 17){
	$fdne = "Field USDT Wallet Address";
mysql_query("UPDATE member SET usdtwallet='' WHERE username='$user_session'");

} else if($fields == 18){
	$fdne = "All Locked Field";
mysql_query("UPDATE member SET bank='', email='', hp='', btcaddress='', ltcaddress='', ethaddress='', dogeaddress='', bchaddress='', dashaddress='', xrpaddress='', paypal='', skrill='', ovo='', dana='', gopay='', whatsapp='', usdtwallet='', bankmyr='', bankth=''  WHERE username='$user_session'");


} else if($fields == 19){
	$fdne = "Field Bank (Malaysia)";
mysql_query("UPDATE member SET bankmyr='' WHERE username='$user_session'");


} else if($fields == 20){
	$fdne = "Field Bank (Thailand)";
mysql_query("UPDATE member SET bankth='' WHERE username='$user_session'");



} else{}








$db->delete("unlockfield", "username='$user_session'");	

echo "<script>parent.document.location.href ='index.php?go=profile&result=success_unlock'</script>";
    echo "<script>parent.jQuery.fancybox.close();</script>";
	exit;

	}
}else{
?>

<?php
$results = $_GET['result'];
if($results == "wrong_code") { 
echo "<div class='alert alert-danger alert-dismissable' style='width:250px;'>Incorrect verification code!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wait") { 
echo "<div class='alert alert-danger alert-dismissable' style='width:250px;'>You already request verification code before to your ".base64_decode($_GET['t']).", please try again a few hours to request again.</div>";
}
?>

<?php
$hp = $db->dataku("hp", $user_session);
$email = $db->dataku("email", $user_session);
?>

            <div class="box-body">     
  <form name="addtime" id="addtime" method="post" action="unlock.php?do=check" />
  
    <div class="controls-row" style=" margin-top:10px;">

            <label>Select Field</label>
         
     <select name="fields" id="fields"  class="form-control" required='required' style="width:240px;">
       <option value="" selected="selected">[ Select Field ]</option>
      <option value="1" >Bank Account</option>
    <option value="2" >Bitcoin Wallet</option>
    <option value="17" >USDT Wallet Address</option>
	   <option value="11">Phone Number</option>
	   <option value="12">Email Account</option>
	   
       <option value="18">All Locked Field</option>
		  </select> 

          </div>
          
          
          
          <div class="controls-row" style="margin-top:10px;">

            <label>Send Verification Code To</label>

       <select name="sendto" id="sendto"  class="form-control" required='required' style="width:240px;">
       <?php if($unlockpro == 0){ ?>
       <option value="0" ><?php echo $email; ?></option>
      
       <?php } else if($unlockpro == 1){ ?>
       <option value="1" ><?php echo $email; ?></option>
       <?php } else{ ?>
	   <option value="2"><?php echo $hp; ?> & <?php echo $email; ?></option>
       <?php } ?>
		  </select> 		                                                

          </div>
          
          
  
         <div class="controls-row" style=" margin-top:10px;">
        
            <button type="submit" class="btn btn-primary" name="subminaddtime"><i class="fa fa-paper-plane"></i>&nbsp;Send</button>

          </div>
  </form>
   </div>
  

</body>
</html>
<?php
}
}
} else {
echo "<script type=text/javascript>
              alert('You must login to access this page!');
              window.parent.closeModal();
              </script>";	
}
?>
<?php ob_flush(); ?>