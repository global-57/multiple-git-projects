<?php ob_start(); 
error_reporting(0);
(@include ('./dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('./dt_page/classMySQL.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
(@include ('./dt_page/function.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Function failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('./dt_page/affiliate.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Refferal system failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
if($db->config("maintenance") == 1){ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--
	/* 
	#######################
	http://primadesain.com
	primapc57@gmail.com
    +62 8122222044
	#######################
	*/
-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $db->config("title"); ?></title>
<link href="images/banner/<?php echo $db->config("fcon"); ?>" rel="SHORTCUT ICON" />
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style>
 html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .content {
                text-align: center;
				margin-top:50px;
            }

			.linetext {
                font-size: 20px;
                padding: 20px;
				max-width:600px;
				font-weight:bold;
				line-height:160%;
            }
			</style>
</head>
<body>
<div class="flex-center">
<div class="content">
<img src="images/maintenance.png" style="max-width:600px; width:100%;">
<div class="linetext"><?php echo $db->config("maintenance_info"); ?></div>
</div>
</div>
</body>
</html>
<?php } else { 
if($lang == 1){
include("./dt_page/langid.php");
}else{
include("./dt_page/langen.php");
}
require_once('./dt_page/class.phpmailer.php');
include("./dt_page/class.smtp.php");

if ($blockie == 1 && preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) ||
preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))) {
include ('./block_ie.php');
exit;
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="<?php echo WEB_DOMAIN; ?>"/>
    <meta name="description" content="<?php echo WEB_DESC; ?>" />
    <meta name="keywords" content="<?php echo WEB_KEYWORDS; ?>" />
	<title>Update Password - <?php echo WEB_TITLE; ?></title>
    <link href="images/banner/<?php echo WEB_FAVCONS; ?>" rel="SHORTCUT ICON" /><!--favicon-->
    <link rel="stylesheet" href="assets_landing/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_landing/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets_landing/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap">
    <link rel="stylesheet" href="assets_landing/css/styles.css">
    <script src="assets_landing/js/jquery.min.js"></script>
    <script src="assets_landing/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets_landing/js/all.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="js/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="css/sweetalert.css">  
	
	
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website"> 
	<meta property="og:title" content="<?php echo WEB_TITLE; ?>">
	<meta property="og:description" content="<?php echo WEB_TITLE; ?>">
	<meta property="og:image" content="image/default.png">
	 
	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image"> 
	<meta property="twitter:title" content="<?php echo WEB_TITLE; ?>">
	<meta property="twitter:description" content="<?php echo WEB_TITLE; ?>">
	<meta property="twitter:image" content="images/default.png">
</head><body>
<?php
include("header2.php");
?>

			<div class="container-main-div  pb-5">
            
            
            
         

<?php $results = $_GET['result']; if($results == "wrong_captcha") {;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error Login! </strong> Invaid Recaptcha.
</div> 	
<?php } ?>   

<?php $results = $_GET['result']; if($results == "no_session") { ?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Session Error</strong> Session Not Found!<br>Please update passwords through a link that we sent to your email.
</div> 	
<?php } ?>      				 

<?php $results = $_GET['result']; if($results == "wrong_code") { ?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Wrong Validation Code
</div> 	
<?php } ?>  

<?php $results = $_GET['result']; if($results == "wrong_pass") { ?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Both passwords must be the same and should not be empty.
</div> 	
<?php } ?>



			
<h5 class="mb-0" style="color:#666666;">Update Password </h5>
<p style="color:#666666;"> Please Enter detail to update password </p> 
<hr>





 <?php
if (isset($_GET['do']) && $_GET['do'] == "send") {
if(isset($_GET["sess"])){ $sesine = anti_injection($_GET["sess"]); }
if(isset($_GET["token"])){ $token = anti_injection($_GET["token"]); }


	 $ssn = $_POST['sessi'];
	$tkn= $_POST['token'];
    $user= $_POST['user'];
	$pass1 = $_POST["password"];
	$pass2 = $_POST["password2"];
	

if(empty($sesine) || empty($token)){
header("location: resetpass.php?result=wrong_session&sess=$sesine&token=$token");
	exit;
} else {
	
	
$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';
$secret_key = $secret_key_google; //masukkan secret key-nya berdasarkan secret key masig-masing saat create api key nya
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
   $recaptcha = file_get_contents($url);
   $recaptcha = json_decode($recaptcha, true);
   if ($usecaptcha==1 && !$recaptcha['success']) { 
         header("location: forgotpass.php?result=wrong_captcha");
      } else {
		
	
$sql2 = mysql_query("SELECT * FROM changepass WHERE sess='".mysql_real_escape_string($sesine)."' AND token='".mysql_real_escape_string($token)."' AND username='".mysql_real_escape_string($user)."'");
$num2 = mysql_num_rows($sql2);
$rw2=mysql_fetch_array($sql2);
$users2 = $rw2['username'];
$ssions2 = $rw2['sess'];
$tokens2 = $rw2['token'];
if(empty($num2) || $ssn <> $ssions2 || $tkn <> $tokens2) {

header("location: resetpass.php?result=wrong_session&sess=$sesine&token=$token");
	exit;
}else{
	if(empty($pass1) || empty($pass2)){	
		header("location:./resetpass.php?sess=".$sesine."&token=".$token."&result=wrong_pass");
		
		}else{
		if($pass1 <> $pass2){
				header("location:./resetpass.php?sess=".$sesine."&token=".$token."&result=wrong_pass");
		
		} else {
			$pswd=md5($pass1);
				$db->update("member", "pass='$pswd'", "username='$users2'");
			$db->update("acc", "pass='$pass1'", "username='$users2'");
				

$nama = $db->dataku("nama", $users2);
		$email = $db->dataku("email", $users2);
		$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");
		$firstname = $db->dataku("nama", $users2);
		$hp = $db->dataku("hp", $users2);

$stkode = strtotime(date("Y-m-d H:i:s"));	
if($sms_request_status == 1){
$datasms3 = $sms_request_isi;
	$datasms3 = preg_replace("/{firstname}/", $firstname, $datasms3);	
	$datasms3 = preg_replace("/{user}/", $users2, $datasms3);					
    $datasms3 = preg_replace("/{pass}/", $pass1, $datasms3);	
	$isipesan = $datasms3;
	mysql_query("insert into outbox values('', '$stkode', '".mysql_real_escape_string($username)."', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
	sendsms($hp, $isipesan) ;
	}
if($hp){
$isipesane = "Hello ".$nama.", your new password in ".$bisnisname." is ".$pass1."";
sendwa($hp, $isipesane, $apikeywoowa);	
}	


$isimail1="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>Your password has been updated</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail1 = new PHPMailer;
	if($mailset == 1){	
//$mail3b->IsSMTP(); // telling the class to use SMTP
$mail1->Host       = $smtphost; // SMTP server
$mail1->SMTPAuth   = true;                  // enable SMTP authentication
$mail1->Host       = $smtphost; // sets the SMTP server
$mail1->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail1->Username   = $smtpuser; // SMTP account username
$mail1->Password   = $smtpass;        // SMTP account password
}
        
        $mail1->setFrom($emailadmin, $nama_bisnis);
        $mail1->addAddress($email, $nama);
	    $mail1->IsHTML(true);       
        $mail1->Subject = ''.$nama.', Update Password';
        $mail1->msgHTML($isimail1);
        $mail1->send();	

$db->delete("changepass", "username='$users2'");
 header("location: login.php?result=success_psw&u=$users2&p=$pass1");
  exit;

}
}
}
}
}
}else{
?>
   <?
if(isset($_GET["sess"])){ $sesine = anti_injection($_GET["sess"]); }
if(isset($_GET["token"])){ $token = anti_injection($_GET["token"]); }

$sql = mysql_query("SELECT * FROM changepass WHERE sess='".mysql_real_escape_string($sesine)."' AND token='".mysql_real_escape_string($token)."'");
$num = mysql_num_rows($sql);
$rw=mysql_fetch_array($sql);
$users = $rw['username'];
$ssions = $rw['sess'];
$tokens = $rw['token'];
$waktune = $rw['date'];
$time=time();
$times=$time-86400; 

?>    	
	
			
	
	<?php
if(isset($_GET["sess"])){ $sesine = anti_injection($_GET["sess"]); }
if(isset($_GET["token"])){ $token = anti_injection($_GET["token"]); }
if(empty($sesine) || empty($token)){ 

echo "<div class='alert alert-danger'>Session Not Found! Please update passwords through a link that we sent to your email.</div>";
$disse="disabled";
} 

if($waktune && $waktune < $times) {
$db->delete("changepass", "sess='".mysql_real_escape_string($sesine)."' and token='".mysql_real_escape_string($token)."'");	

echo "<div class='alert alert-danger'>Session Expired! Please do reset password again.</div>";	  
	  $disse2="disabled";
}

?>


<form method="post"  action="resetpass.php?do=send&sess=<?php echo $sesine;?>&token=<?php echo $token;?>"> 
                <input name="user" id="user" type="hidden" size="19" value="<?php echo $users; ?>">
        <input name="sessi" type="hidden" size="19" value="<?php echo $ssions; ?>">
	<input name="token" type="hidden" size="19" value="<?php echo $tokens; ?>">
<div class="div-card bg-2">	
	 
	 
	<label>New Password *</label>
	 <input class="form-control" placeholder="Type your new password" required name="password" type="password" <?php echo $disse;?> <?php echo $disse2;?> <?php echo $disse3;?> <?php echo $disse4;?> style="background:#161616; border:none; margin-bottom:10px;">       
	
	<label>Re-Type New Password *</label>
	<input class="form-control" placeholder="Retype your new password" required name="password2" type="password" <?php echo $disse;?> <?php echo $disse2;?> <?php echo $disse3;?> <?php echo $disse4;?> style="background:#161616; border:none; margin-bottom:10px;">  
                <?php if($usecaptcha==1){ ?>
    <br />  
	<div class="g-recaptcha" data-sitekey="<?php echo $site_key_google; ?>"></div>
      <?php } ?>                
	<br />
	 
	<button class="btn btn-dark form-control" type="submit" name="login" <?php echo $disse;?> <?php echo $disse2;?> <?php echo $disse3;?> <?php echo $disse4;?>><i class="la la-sign-in mr-1"></i>Update Password</button>
	
	
	
</div>
</form>

<?php } ?> 
<br>
<div align="center">
<a href="login.php">Login Dashboard?</a>

</div>
</div>
<br><br>
			



</div>
</div>
<?php
include("footer.php");
?>
</section>
</main>
<script>
var width = $('.g-recaptcha').parent().width();
if (width < 302) {
	var scale = width / 302;
	$('.g-recaptcha').css('transform', 'scale(' + scale + ')');
	$('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
	$('.g-recaptcha').css('transform-origin', '0 0');
	$('.g-recaptcha').css('-webkit-transform-origin', '0 0');
}
</script><?php if($stchat == 1) { include("tawkto.php"); 
} else if($stchat == 2) { include("whatshelp.php"); 
} else if($stchat == 3) { include("whatshelptawk.php"); 
} ?> 
</body>
</html>
<?php } ?>