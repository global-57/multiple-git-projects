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
$time0000=time();
$query113z = "SELECT * FROM ckpoint WHERE time <= '$time0000'"; 
$result113z = mysql_query($query113z);
$numus9999 = mysql_num_rows($result113z);
if($numus9999) {
while($row113z = mysql_fetch_array($result113z)){
$userckp = $row113z['username'];
$db->delete("ckpoint", "username='".$userckp."'");
$db->update("member", "batas='0'", "username='".$userckp."'");
}
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
	<title>2FA - <?php echo WEB_TITLE; ?></title>
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
            
            
            
           
               

<?php $results = $_GET['result']; if($results == "wrong_auth") {;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error Login! </strong> You are enable two factor authentication at your account, Please enter your google authenticator six-digit code!
</div> 	
<?php } ?>   
           
               

<?php $results = $_GET['result']; if($results == "wrong_authx") {;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error Login! </strong> You are enable two factor authentication at your account, Please enter your google authenticator six-digit code!
</div> 	
<?php } ?>   


            
            
			
<h5 class="mb-0" style="color:#666666;">Enter Dashboard </h5>
<p style="color:#666666;"> You're enable two factor authentication, Please enter your google authenticator six-digit code! </p> 
<hr>

<form method="post"  action="lg_process2.php"> 
                    <input name="userlogin" type="hidden" value="<?php echo $_GET['u']; ?>" readonly>
                    <input name="passlogin" type="hidden" value="<?php echo $_GET['p']; ?>" readonly>
                    <input name="usereff" type="hidden" value="<?php echo $_GET['r']; ?>" readonly>
<div class="div-card bg-2">	
	 
	 
	<label>2FA Gogle Authenticator*</label>
	<input name="one_time_password" required type="text" class="form-control" placeholder="2FA Gogle Authenticator Code">
	
	 
	<br />
	 
	<button class="btn btn-dark form-control" type="submit" name="login"><i class="la la-sign-in mr-1"></i>Login To Dashboard</button>
	
	
</div>
</div>
</form>

	
			



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