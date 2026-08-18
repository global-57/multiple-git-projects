<?php
ob_start(); 
error_reporting(0);

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
$protocol = 'http://'; } else { $protocol = 'https://'; }
$base_url = $protocol . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$bsurl=base64_encode($base_url);	

session_start();
session_regenerate_id(true);

if (isset($_GET['do']) && $_GET['do'] == "logout") {
if(isset($_GET["last_session"])){ $last_session = $_GET["last_session"]; }   
$user_session=$_COOKIE["user"];
$user_log = $_COOKIE["userlog"];
(@include ('../dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
mysql_connect($server_name,$userdb,$passdb);
mysql_select_db($databasename);       
$sql="DELETE FROM memberonline WHERE usermember='$user_session' and sessionslog='$user_log'";
$result=mysql_query($sql);	   
$date = (date ("Y-m-d H:i:s"));
	$sqla="UPDATE memberlog SET logoutdate='$date' WHERE userid='$user_session' and session='$user_log'";
    $resulta=mysql_query($sqla);	
	$sqlb="DELETE FROM memberlog WHERE userid='$user_session' and time <> $last_session";
    $resultb=mysql_query($sqlb);		 	   
	   
	   if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) { 
setcookie("user", '', strtotime( '-5 days' ), '/'); 
setcookie("pass", '', strtotime( '-5 days' ), '/'); 
setcookie("bkr", '', strtotime( '-5 days' ), '/'); 
setcookie("sts", '', strtotime( '-5 days' ), '/');
setcookie("userlog", '', strtotime( '-5 days' ), '/'); 
setcookie("browser", '', strtotime( '-5 days' ), '/'); 
setcookie("ipnya", '', strtotime( '-5 days' ), '/');  }
	   
	    session_destroy();
		header("location:../index.php");
	    exit();}

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
require '../dt_page/mail/PHPMailerAutoload.php';

$sql0 = mysql_query("SELECT * FROM ipblock WHERE ip='".$_SERVER['REMOTE_ADDR']."'");
$num0 = mysql_num_rows($sql0);
if($num0 > 0) {
	$string = 'Your IP Address '.$_SERVER['REMOTE_ADDR'].' has been blocked from this website.\n\nPlease contact administrator\n'.ADMIN_NAME.' - '.WEB_NAME.'\n'.BUSSINESS_ADDRESS.'\nEmail: '.BUSSINESS_EMAIL.'\nPhone: '.BUSSINESS_MOBILE.'';
        echo "<script>alert(\"$string\");".
        "window.location = '".REDIR_URL."'</script>";
exit();
}

$query113z = "SELECT * FROM ckpoint WHERE username = '".$user_session."'"; 
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

if($times0000 <= $time0000){
	
	 $db->delete("ckpoint", "username = '".$user_session."'");
	 $db->update("member", "batas='0'", "username='".$user_session."'");
	 
 session_start();
		setcookie("user", '', strtotime( '-5 days' ), '/'); 
setcookie("pass", '', strtotime( '-5 days' ), '/'); 
setcookie("bkr", '', strtotime( '-5 days' ), '/'); 
setcookie("sts", '', strtotime( '-5 days' ), '/');
setcookie("userlog", '', strtotime( '-5 days' ), '/'); 
setcookie("browser", '', strtotime( '-5 days' ), '/'); 
setcookie("ipnya", '', strtotime( '-5 days' ), '/');
 session_destroy();
  
  header("location: ../login.php?refer=".$bsurl."");	

}else { 

header("location: ../login.php?result=cekpoint&tc=$rty&refer=".$bsurl."");	
}

}else{




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
        "window.location = '../login.php?refer=".$bsurl."'</script>";
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
     "window.location = '../login.php?refer=".$bsurl."'</script>";
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
    $string = 'Someone has logged in somewhere else using your username \n\nUsername : '.$user_session.' \nIP Address : '.$ip.' \nHostname : '.$hostaddress.'  \nBrowser : '.$bws.' \n\nPlease use only one browser, login more than one session is not allowed.\n\n\nClick OK to login at here';
    echo "<script>alert(\"$string\");".
    "window.location = '../login.php?refer=".$bsurl."'</script>";
} }

if (IE_BLOCKED == 1 && preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) ||
preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))) {
header("location: ../index.php");
exit;
}else{
(@include ('./page_home.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Template failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");

}
}
}
} else {
header("location: ../login.php?refer=".$bsurl."");
}
?>
<?php ob_flush(); ?>