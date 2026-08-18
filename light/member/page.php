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
if($db->config("maintenance") == 1){ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $db->config("title"); ?></title>
<link href="../images/banner/<?php echo $db->config("fcon"); ?>" rel="SHORTCUT ICON" />
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style>
 html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 36px;
                padding: 20px;
            }
			.linetext {
                font-size: 18px;
                padding: 20px;
				max-width:500px;
				font-weight:bold;
				line-height:160%;
            }
			</style>
</head>
<body>
<div class="flex-center position-ref full-height">
<div class="content">
<img src="../images/electrician-guy.png">
<div class="linetext"><?php echo $db->config("maintenance_info"); ?></div>
</div>
</div>
</body>
</html>
<?php } else { 
require '../dt_page/mail/PHPMailerAutoload.php';

$sql0 = mysql_query("SELECT * FROM ipblock WHERE ip='".$_SERVER['REMOTE_ADDR']."'");
$num0 = mysql_num_rows($sql0);
if($num0 > 0) {
	$string = 'Your IP Address '.$_SERVER['REMOTE_ADDR'].' has been blocked from this website.\n\nPlease contact administrator\n'.ADMIN_NAME.' - '.WEB_NAME.'\n'.BUSSINESS_ADDRESS.'\nEmail: '.BUSSINESS_EMAIL.'\nPhone: '.BUSSINESS_MOBILE.'';
        echo "<script>alert(\"$string\");".
        "window.parent.closeModal();</script>";
		
		
		
exit();
}
if(SSL_ON==1&&$_SERVER["HTTPS"]!="on"){
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
exit();}

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

if($privatelogin == 1)
{
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
} }

if (IE_BLOCKED == 1 && preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) ||
preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))) {
echo "<script type=text/javascript>
              alert('Internet Explorer is blocked from this site!');
              window.parent.closeModal();
              </script>";	
exit;
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

</head>
<body>
      <?php 
					if(isset($_REQUEST['go'])){$go = $_REQUEST['go'];}
					if (empty($go)) $go = '';
					// PROSES OPEN ACCOUNT **************************************
					if ($go=='transfer_ticket')
								{ include("./mb_flad/mb_trans_ticket.php"); }
					else if ($go=='proccess_ticket')
								{ include("./mb_flad/mb_proccess_ticket.php"); }
					else if ($go=='cancel_ticket')
								{ include("./mb_flad/mb_cancel_ticket.php"); }
					else if ($go=='buy_ticket')
								{ include("./mb_flad/mb_buy_ticket.php"); }
					else if ($go=='network')
								{ include("./mb_flad/mb_networktree.php"); }
					else if ($go=='report')
								{ include("./mb_flad/mb_report.php"); }
					else if ($go=='unlock')
								{ include("./mb_flad/mb_profilex.php"); }
					else if ($go=='buy_stockist')
								{ include("./mb_flad/mb_buy_stockist.php"); }
					else if ($go=='takeover')
								{ include("./mb_flad/mb_get_takeover.php"); }
					else if ($go=='payment')
								{ include("./mb_flad/mb_payment.php"); }
					else if ($go=='payments')
								{ include("./mb_flad/mb_payments.php"); }
					else if ($go=='get_bonus')
								{ include("./mb_flad/mb_wdbonus.php"); }
					else if ($go=='get_profit')
								{ include("./mb_flad/mb_wdprofit.php"); }
					else if ($go=='detail_ph')
								{ include("./mb_flad/mb_detailph.php"); }
					else if ($go=='detail_ph2')
								{ include("./mb_flad/mb_detailph2.php"); }
					else if ($go=='detail_phx')
								{ include("./mb_flad/mb_detailphx.php"); }
					else if ($go=='detail_user')
								{ include("./mb_flad/mb_detailuser.php"); }
					else if ($go=='detail_gh')
								{ include("./mb_flad/mb_detailgh.php"); }
					else if ($go=='detail_confirm')
								{ include("./mb_flad/mb_detailconfirm.php"); }
					else if ($go=='detail_confirmx')
								{ include("./mb_flad/mb_detailconfirmx.php"); }
					else if ($go=='add_ph')
								{ include("./mb_flad/mb_add_ph.php"); }
					else if ($go=='stop_ph')
								{ include("./mb_flad/mb_stop_ph.php"); }
					else if ($go=='add_gh')
								{ include("./mb_flad/mb_add_gh.php"); }
					else if ($go=='add_balance')
								{ include("./mb_flad/mb_add_balance.php"); }
					else if ($go=='trans_balance')
								{ include("./mb_flad/mb_trans_balance.php"); }
					else if ($go=='conv_balance')
								{ include("./mb_flad/mb_conv_balance.php"); }
					else if ($go=='wd_balance')
								{ include("./mb_flad/mb_wd_balance.php"); }
					else if ($go=='add_invest')
								{ include("./mb_flad/mb_add_invest.php"); }
					else if ($go=='blockuser')
								{ include("./mb_flad/mb_blockuser.php"); }
					else if ($go=='confirm')
								{ include("./mb_flad/mb_detailph.php"); }
					else if ($go=='waletepay')
								{ include("./mb_flad/mb_waletepay.php"); }
					else if ($go=='payment_walet')
								{ include("./mb_flad/mb_paymentwalet.php"); }
					else if ($go=='payment_waletpv')
								{ include("./mb_flad/mb_paymentpv.php"); }
					else if ($go=='payment_waletcash')
								{ include("./mb_flad/mb_paymentcash.php"); }
					else if ($go=='payment_waletpurchase')
								{ include("./mb_flad/mb_paymentpurchase.php"); }
					else if ($go=='payment_waletregister')
								{ include("./mb_flad/mb_paymentregister.php"); }
					else if ($go=='paymentpin')
								{ include("./mb_flad/mb_paymentpin.php"); }
					else if ($go=='waletepays')
								{ include("./mb_flad/mb_waletepay2.php"); }
					else if ($go=='paymentorder')
								{ include("./mb_flad/mb_payment3.php"); }
					else 		{ include("./mb_flad/redr.php");  }
					?>

<div class="spacer"></div>
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