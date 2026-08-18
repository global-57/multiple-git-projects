<?php ob_start(); ?>
<?php
ini_set('display_errors','Off');
	/* 
	############################[  <about> ] #######################
		S Name   ::       Inv-X Primadesain
		Update   ::       2013  Primadesain.Com
		Author   ::       Agus Susanto S.kom
		Website  ::		  http://primadesain.com
		Contact  ::		  <primapc57@gmail.com> // +62 85228657360
	
	Primadesain melayani pembuatan website MLM dan Investasi
	( dengan sistem binary, trinary atau matrix dan matahari )
	juga menerima pembuatan website Iklan Baris, Website Profile,
	Reseller, Hyip, dll.
	############################[ </about> ] #######################
	*/
?>
<?php
if(isset($_COOKIE["usermin"]) && isset($_COOKIE["passmin"])) { 
$valid_admin=$_COOKIE["usermin"];
$admin_password=$_COOKIE["passmin"];
$admin_nama=$_COOKIE["namamin"];
$ipmincheck=$_COOKIE["ipmin"];
$browsercheck=$_COOKIE["browser"];
$min_log=$_COOKIE["minlog"];
$minres=$_COOKIE["minres"];
$_SESSION["valid_admin"]=$valid_admin;
$_SESSION["admin_password"]=$admin_password;
$_SESSION["nama_admin"]=$admin_nama;
$_SESSION["ipmin"]=$ipmincheck;
$_SESSION["browser"]=$browsercheck;
$_SESSION["min_log"]=$min_log;
$_SESSION["minres"]=$minres;

} else if(isset($_SESSION["valid_admin"])){
$valid_admin=$_SESSION["valid_admin"];
$admin_password=$_SESSION["admin_password"];
$admin_nama=$_SESSION["nama_admin"];
$ipmincheck=$_SESSION["ipmin"];
$browsercheck=$_SESSION["browser"];
$min_log = $_SESSION["min_log"];
$minres = $_SESSION["minres"];


}else{ }

(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
if(!$license){
 (@include ('../dt_page/lic_screen.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
exit; }
(@include ('../dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/classMySQL.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
(@include ('../dt_page/function.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
if($lang == 1){
(@include ('../dt_page/langid.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Language file not found, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
}else{
(@include ('../dt_page/langen.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Language file not found, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
}

require_once('../dt_page/class.phpmailer.php');
include("../dt_page/class.smtp.php");
require_once '../lib/GoogleAuthenticator.php';
$authenticator = new PHPGangsta_GoogleAuthenticator();

if(!$db->datamin("norek", $valid_admin)){
$secret = $authenticator->createSecret();
$db->update("admin", "norek='".$secret."'", "userid='".$valid_admin."'");
}else{
$secret = $db->datamin("norek", $valid_admin);
}
$website   = $webz2fa; 
$title     = $ttl2fa;
$tolerance = $tlrz2fa;
$QRCode    = $authenticator->getQRCodeGoogleUrl($title,$secret,$website);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $db->config("title"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="<?php echo $domain ?>" />
<meta name="Robots" content="index,follow" />
<meta name="Description" content="<?php echo $db->config("description"); ?>" />
<meta name="Keywords" content="<?php echo $db->config("keyword"); ?>" />
<link href="../images/banner/<?php echo $db->config("fcon"); ?>" rel="SHORTCUT ICON" />
<link rel="stylesheet" href="../css/ph.css" type="text/css" media="all">
<script language="JavaScript" src="../js/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="../css/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = '../css/highslide/graphics/';
	hs.wrapperClassName = 'wide-border';
</script>
<SCRIPT LANGUAGE="JavaScript">
var win = null;
function newWindow(mypage,myname,w,h,features) {
  var winl = (screen.width-w)/2;
  var wint = (screen.height-h)/2;
  if (winl < 0) winl = 0;
  if (wint < 0) wint = 0;
  var settings = 'height=' + h + ',';
  settings += 'width=' + w + ',';
  settings += 'top=' + wint + ',';
  settings += 'left=' + winl + ',';
  settings += features;
  win = window.open(mypage,myname,settings);
  win.window.focus();
}
</script>
<link rel="stylesheet" type="text/css" href="../css/calendar-win2k-1.css" media="all" />
<script type="text/javascript" src="../js/calendar.js"></script>
<script type="text/javascript" src="../js/calendar-setup.js"></script>
	<link rel="stylesheet" href="../css/form-field-tooltip.css" media="screen" type="text/css">
<script type="text/javascript" src="../js/rounded-corners.js"></script>
	<script type="text/javascript" src="../js/form-field-tooltip.js"></script>
<script type="text/javascript">
//<![CDATA[
enUS = {"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}}; // en_US locale reference
Calendar._DN = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]; // full day names
Calendar._SDN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]; // short day names
Calendar._FD = 0; // First day of the week. "0" means display Sunday first, "1" means display Monday first, etc.
Calendar._MN = ["January","February","March","April","May","June","July","August","September","October","November","December"]; // full month names
Calendar._SMN = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]; // short month names
Calendar._am = "AM"; // am/pm
Calendar._pm = "PM";

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "About the calendar";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL. See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the \xab, \xbb buttons to select year\n" +
"- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

Calendar._TT["PREV_YEAR"] = "Prev. year (hold for menu)";
Calendar._TT["PREV_MONTH"] = "Prev. month (hold for menu)";
Calendar._TT["GO_TODAY"] = "Go Today";
Calendar._TT["NEXT_MONTH"] = "Next month (hold for menu)";
Calendar._TT["NEXT_YEAR"] = "Next year (hold for menu)";
Calendar._TT["SEL_DATE"] = "Select date";
Calendar._TT["DRAG_TO_MOVE"] = "Drag to move";
Calendar._TT["PART_TODAY"] = ' (' + "Today" + ')';

// the following is to inform that "%s" is to be the first day of week
Calendar._TT["DAY_FIRST"] = "Display %s first";

// This may be locale-dependent. It specifies the week-end days, as an array
// of comma-separated numbers. The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Close";
Calendar._TT["TODAY"] = "Today";
Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";


// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%b %e, %Y";
Calendar._TT["TT_DATE_FORMAT"] = "%B %e, %Y";

Calendar._TT["WK"] = "Week";
Calendar._TT["TIME"] = "Time:";


//]]>
</script>

<style>
.submit		{ width:auto; position:relative; cursor:pointer; margin:0 5px 0 0; padding:4px 8px; color:#767a7e; text-shadow:1px 1px 0px #ecf0f3; 
										  font-family:Tahoma; font-size:12px; font-weight:600; text-align:center; text-decoration:none; 
										  border:1px solid #b2c0cb; border-radius:3px; box-shadow:inset 0px 0px 0px 1px #fff, 0 1px 2px rgba(136,136,136,0.3);
										  background:#e3eaf0; background:-moz-linear-gradient(top, #f6f8f9 0%, #dde4ea 100%); 
										  background:-webkit-linear-gradient(top, #f6f8f9 0%, #dde4ea 100%); 
										  
										  }
.submit:hover{ color:#fff; text-shadow:1px 1px 0px #000000; border:1px solid #999999; background:#CCCCCC; 
										  background:-moz-linear-gradient(top, #999999 0%, #333333 100%); background:-webkit-linear-gradient(top, #CCCCCC 0%, #bb3c96 100%);
										  box-shadow:inset 0px 0px 0px 1px #CCCCCC, 0px 1px 2px 0px rgba(136,136,136,0.4); }
.submit:active{ color:#999999; text-shadow:1px 1px 0px #000000; }

.submitkecil		{ width:auto; position:relative; cursor:pointer; margin:0 5px 0 0; padding:2px 6px; color:#767a7e; text-shadow:1px 1px 0px #ecf0f3; 
										  font-family:Tahoma; font-size:12px; font-weight:600; text-align:center; text-decoration:none; 
										  border:1px solid #b2c0cb; border-radius:3px; box-shadow:inset 0px 0px 0px 1px #fff, 0 1px 2px rgba(136,136,136,0.3);
										  background:#e3eaf0; background:-moz-linear-gradient(top, #f6f8f9 0%, #dde4ea 100%); 
										  background:-webkit-linear-gradient(top, #f6f8f9 0%, #dde4ea 100%); 
										  
										  }
.submitkecil:hover{ color:#fff; text-shadow:1px 1px 0px #000000; border:1px solid #999999; background:#CCCCCC; 
										  background:-moz-linear-gradient(top, #999999 0%, #333333 100%); background:-webkit-linear-gradient(top, #CCCCCC 0%, #bb3c96 100%);
										  box-shadow:inset 0px 0px 0px 1px #CCCCCC, 0px 1px 2px 0px rgba(136,136,136,0.4); }
.submitkecil:active{ color:#999999; text-shadow:1px 1px 0px #000000; }

/*-------------{ table }------------------*/
.table					{ margin:0 0 15px 0; padding:0px; width:100%; font-size:12px; border-collapse:collapse; box-shadow:0px 5px 0px #f4f4f4; }
.table th				{ padding:7px 5px; font-family:"Oswald", Tahoma; color:#767a7e; text-shadow:1px 1px 0px #e8f7ff; text-align:center;
						  text-transform: uppercase; font-weight:600; border:1px solid #c7d2dc; box-shadow:inset 0px 1px 0px #fff,inset 0px 0px 0px 1px #f3f7fb;
						  background:#f9f9f9; background:-moz-linear-gradient(top, #f6f9fb 0%, #d9e1e9 100%); background:-webkit-linear-gradient(top, #f6f9fb 0%, #d9e1e9 100%); }
.table td				{ padding:7px; border:1px solid #dae2ea; font-weight:normal; text-align:;font-family:"Verdana";}
.table tr					{ background:#fcfcfc; }
.table tr:nth-of-type(odd)	{ background: #f4f6f8; } 
.table tr:hover				{ background:#CBDCED; color:#111111; font-weight:bold; }

@media only screen and (min-width: 0px) and (max-width: 767px) {
	.table, .table thead, .table tbody, .table th, .table td, .table tr { display: block; }
	.table thead tr 		{ position: absolute; top: -9999px; left: -9999px; } 
	.table tr				{ border: 1px solid #ddd; border-bottom:0px; margin-bottom:5px; } 
	.table td				{ border: none; border-bottom: 1px solid #ddd; position: relative; padding-left:45%; text-align:left; } 
	
	.table td:before		{ position: absolute; top:5px; left:10px; width:39%; padding-right: 10px; white-space:nowrap; }
	.table td:before		{ content: attr(data-title); }
}



/*------------------------------------------------------------{ Form table }-----------------------------------------------------------------------*/
.form_style						{ margin:20px 0; padding:0; width:100%; font-size:13px; }
.form_style fieldset			{ padding:0px; border:solid 1px #c7c7c7; border-radius:3px; -moz-border-radius:3px;
								  -khtml-border-radius:3px; -webkit-border-bottom-radius:3px; }
.form_style fieldset legend 	{ color:#444; border:solid 1px #c7c7c7; margin-left:10px; padding:5px 15px; font-weight:bold; border-radius:3px; }

.form_style table				{ margin:0 auto; padding:0; width:100%; border:none; border-collapse:collapse; }
.form_style table tr:nth-of-type(even)	{ background:#f8f8f9; }
.form_style table td			{ margin:0; padding:3px 5px; }
.form_style table td span		{ display:block; position:relative; }
.form_style table td label		{  }
.form_style table td input,
.form_style table td textarea, 
.form_style table td select			{ padding:3px 3px 4px 3px; color:#888; background:#fff; border:solid 1px #c7c7c7; }
.form_style table td input:hover,
.form_style table td textarea:hover, 
.form_style table td select:hover	{ color:#878a91; border:1px solid #878a91; }
.form_style table td input:focus,
.form_style table td textarea:focus, 
.form_style table td select:focus	{ background:#f4f0ea; color:#555; border:1px solid #555; box-shadow:inset 1px 1px 1px #ceccd1; }
.form_style table td textarea		{ width:300px; height:100px; }



.form_style span.textError		{ position:absolute; top:2px; left:200px; padding-left:7px; z-index:1; 
								  background:url(../images/span_error_bg2.png) no-repeat left center; }
.form_style span.textError p	{ margin:0; padding:3px 7px; line-height:normal; font-size:10px; color:#ccc; background:#000; 
								  background:rgba(0,0,0,0.9); border:1px solid #000; border-radius:3px; }
.form_style p					{ margin:0px; padding:0px; }
.notification					{ cursor:pointer; }
.form_style table td input.primapc {
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
	background-color:#007dc1;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:12px;
	padding:4px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
.form_style table td input.primapc:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}
.form_style table td input.primapc:active {
	position:relative;
	top:1px;
}
.form_style table td input.primapc2 {
	-moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
	-webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
	box-shadow:inset 0px 1px 0px 0px #cf866c;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d0451b), color-stop(1, #bc3315));
	background:-moz-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-webkit-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-o-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-ms-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d0451b', endColorstr='#bc3315',GradientType=0);
	background-color:#d0451b;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #942911;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:12px;
	padding:4px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #854629;
}
.form_style table td input.primapc2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc3315), color-stop(1, #d0451b));
	background:-moz-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-webkit-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-o-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-ms-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc3315', endColorstr='#d0451b',GradientType=0);
	background-color:#bc3315;
}
.form_style table td input.primapc2:active {
	position:relative;
	top:1px;
}

.form_style table td input.editbox_search2 {
	padding:3px 3px 4px 3px; color:#950000; background:#fff; border:solid 1px #BB0000;
}

.label,.badge{display:inline-block;padding:2px 4px;font-size:11.844px;font-weight:bold;line-height:14px;color:#ffffff;vertical-align:baseline;white-space:nowrap;text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);background-color:#999999;}
.label{-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
.badge{padding-left:9px;padding-right:9px;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;}
.label:empty,.badge:empty{display:none;}
a.label:hover,a.badge:hover{color:#ffffff;text-decoration:none;cursor:pointer;}
.label-important,.badge-important{background-color:#b94a48;}
.label-important[href],.badge-important[href]{background-color:#953b39;}
.label-warning,.badge-warning{background-color:#f89406;}
.label-warning[href],.badge-warning[href]{background-color:#c67605;}
.label-success,.badge-success{background-color:#468847;}
.label-success[href],.badge-success[href]{background-color:#356635;}
.label-info,.badge-info{background-color:#3a87ad;}
.label-info[href],.badge-info[href]{background-color:#2d6987;}
.label-inverse,.badge-inverse{background-color:#333333;}
.label-inverse[href],.badge-inverse[href]{background-color:#1a1a1a;}
.alert-box {
		color:#555;
		border-radius:10px;
		font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
		padding:10px 36px;
		margin:10px;
	}
	.alert-box span {
		font-weight:bold;
		text-transform:uppercase;
	}
	.errors {
		background:#ffecec url('../images/error.png') no-repeat 10px 50%;
		border:1px solid #f5aca6;
	}
	.successs {
		background:#e9ffd9 url('../images/success.png') no-repeat 10px 50%;
		border:1px solid #a6ca8a;
	}
	.warnings {
		background:#fff8c4 url('../images/warning.png') no-repeat 10px 50%;
		border:1px solid #f2c779;
	}
	.notices {
		background:#e3f7fc url('../images/notice.png') no-repeat 10px 50%;
		border:1px solid #8ed9f6;
	}
</style>
<style>
		@CHARSET "UTF-8";
#navigation {
    width:250px;
}

#content {
    width:700px;
}

#navigation,
#content {
    float:left;
    margin:10px;
}

.collapsible,
.page_collapsible {
	margin: 0;
	padding:10px;
	height:20px;
	border-top:#f0f0f0 1px solid;
	font-family: Arial, Helvetica, sans-serif;
	text-decoration:none;
	text-transform:uppercase;
	color: #FFFFFF;
	font-size:1.5em;
	background-color: #86aad1;
	font-weight: bold;
}

.collapse-open {
	color: #fff;
	background-color: #014a99;
}

.collapse-open span {
    display:block;
    float:right;
    padding:10px;
}

.collapse-open span {
    background:url(../images/minus.png) center center no-repeat;
}

.collapse-close span {
    display:block;
    float:right;
    background:url(../images/plus.png) center center no-repeat;
    padding:10px;
}

div.container {
    padding:0;
    margin:0;
}

div.content {
	margin: 0;
	padding:10px;
	font-size:1.0em;
	line-height:1.5em;
	font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
}

div.content ul, div.content p {
    margin:0;
    padding:3px;
}

div.content ul li {
    list-style-position:inside;
    line-height:25px;
}

div.content ul li a {
    color:#555555;
}

code {
    overflow:auto;
}
.primapc2 {
	-moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
	-webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
	box-shadow:inset 0px 1px 0px 0px #cf866c;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d0451b), color-stop(1, #bc3315));
	background:-moz-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-webkit-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-o-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-ms-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d0451b', endColorstr='#bc3315',GradientType=0);
	background-color:#d0451b;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #942911;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:12px;
	padding:4px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #854629;
}
.primapc2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc3315), color-stop(1, #d0451b));
	background:-moz-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-webkit-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-o-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-ms-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc3315', endColorstr='#d0451b',GradientType=0);
	background-color:#bc3315;
}
.primapc2:active {
	position:relative;
	top:1px;
}
.mGrid {
	width: 100%;
	background-color: #FFFFFF;
	margin: 5px 0 10px 0;
	border-collapse:collapse;
	color: #000000;
	border: 1px solid #666666;
}
    .mGrid td {
	padding: 2px;
	color: #666666;
	border: 1px solid #1c6bb4;
	font-size: 11px;
	text-align: center;
	font-family:Arial, Helvetica, sans-serif;
}
    .mGrid th {
	color: #FFFFFF;
	font-size: 11px;
	background-image: url(../images/grd_head.png);
	background-repeat: repeat-x;
	background-position: top;
	text-align: center;
	border: 1px solid #1c6bb4;
	padding-top: 6px;
	padding-right: 2px;
	padding-bottom: 6px;
	padding-left: 2px;
	height: 25px;
	background-color: #1d6cb4;
	font-family:Arial, Helvetica, sans-serif;
}
.mGrid .alt {
	background-color: #FF0000;
	background-image: url(../images/grd_alt.png);
	background-repeat: repeat-x;
	background-position: top;
}
.mGrid .pgr {
	background-color: #CFBF2C;
	background-image: url(../images/grd_pgr.png);
	background-repeat: repeat-x;
	background-position: top;
}
    .mGrid .pgr table {
	margin-top: 7px;
	margin-right: 0;
	margin-bottom: 7px;
	margin-left: 0;
}
    .mGrid .pgr td {
	padding: 0 6px;
	font-weight: normal;
	color: #fff;
	line-height: 12px;
	border-top-width: 0;
	border-right-width: 0;
	border-bottom-width: 0;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #FFFFFF;
}   
    .mGrid .pgr a {
	color: #CC0000;
	text-decoration: none;
}
    .mGrid .pgr a:hover { color: #000; text-decoration: none; }
.dollerhead {
	padding: 0px;
	font-size: 15px;
	color: #033d6f;
	font-weight: bold;
}
.alert-box {
		color:#555;
		border-radius:10px;
		font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
		padding:10px 36px;
		margin:10px;
	}
	.alert-box span {
		font-weight:bold;
		text-transform:uppercase;
	}
	.errors {
		background:#ffecec url('../images/error.png') no-repeat 10px 50%;
		border:1px solid #f5aca6;
	}
	.successs {
		background:#e9ffd9 url('../images/success.png') no-repeat 10px 50%;
		border:1px solid #a6ca8a;
	}
	.warnings {
		background:#fff8c4 url('../images/warning.png') no-repeat 10px 50%;
		border:1px solid #f2c779;
	}
	.notices {
		background:#e3f7fc url('../images/notice.png') no-repeat 10px 50%;
		border:1px solid #8ed9f6;
	}
	div.alert-message {
}


.infox, .successx, .warningx, .errorx, .validationx {
border: 4px solid;
margin: 10px 0px;
padding:15px 10px 15px 50px;
background-repeat: no-repeat;
background-position: 10px center;
font-family:Arial, Helvetica, sans-serif; 
font-size:13px;
box-shadow:2px 2px 10px #888;
-moz-border-radius:9px;
	-webkit-border-radius:9px;
	border-radius:9px;
}
.infox {
color: #006297;
background-color: #e3f7fc;
background-image: url('../images/infox.png');
border-color:#fff;
}
.successx {
color: #3E6718;
background-color: #DBFFC4;
background-image:url('../images/oke.png');
border-color:#fff;
}
.warningx {
color: #915000;
background-color: #fff8c4;
background-image: url('../images/alrt.png');
border-color:#fff;
}
.errorx {
color: #B5301A;
background-color: #ffecec;
background-image: url('../images/err1.png');
border-color:#fff;
}

.close {
	color: #333;
	float:right;
	margin-top:px;
	font-size: 17px;
	opacity: 0.5;
	padding: 10px;
}
.close:focus {
	opacity: 0.8;
}
		</style>
		 <SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "../images/loader.gif";

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 0)
{
$("#status").html('<img src="../images/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "../dt_page/check.php",  
    data: "username="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#username").removeClass('object_error'); // if necessary
		$("#username").addClass("object_ok");
		$(this).html('');
	}  
	else  
	{  
		$("#username").removeClass('object_ok'); // if necessary
		$("#username").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
	}

});

});

//-->
</SCRIPT>
<link rel="stylesheet" href="../css/build/css/intlTelInput.css"> 
<SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "../images/loader.gif";

$(document).ready(function(){

$("#sponsore").change(function() { 

var sp = $("#sponsore").val();

if(sp.length >= 0)
{
$("#spne").html('<img src="../images/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "../dt_page/checksp.php",  
    data: "sponsore="+ sp,  
    success: function(msg){  
   
   $("#spne").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#sponsore").removeClass('object_error'); // if necessary
		$("#sponsore").addClass("object_ok");
		$(this).html('');
	}  
	else  
	{  
		$("#sponsore").removeClass('object_ok'); // if necessary
		$("#sponsore").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#sponsore").removeClass('object_ok'); // if necessary
	$("#sponsore").addClass("object_error");
	}

});

});

//-->
</SCRIPT>
<SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "../images/loader.gif";

$(document).ready(function(){

$("#email").change(function() { 

var mails = $("#email").val();

if(mails.length >= 0)
{
$("#stsmaile").html('<img src="../images/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "../dt_page/checkmail.php",  
    data: "email="+ mails,  
    success: function(msg){  
   
   $("#stsmaile").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#email").removeClass('object_error'); // if necessary
		$("#email").addClass("object_ok");
		$(this).html('');
	}  
	else  
	{  
		$("#email").removeClass('object_ok'); // if necessary
		$("#email").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#stsmaile").html('');
	$("#email").removeClass('object_ok'); // if necessary
	$("#email").addClass("object_error");
	}

});

});

//-->
</SCRIPT>
	<SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "../images/loader.gif";

$(document).ready(function(){

$("#hp").change(function() { 

var hp = $("#hp").val();

if(hp.length >= 0)
{
$("#stshp").html('<img src="../images/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "../dt_page/checkhp.php",  
    data: "hp="+ hp,  
    success: function(msg){  
   
   $("#stshp").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#hp").removeClass('object_error'); // if necessary
		$("#hp").addClass("object_ok");
		$(this).html(' ');
	}  
	else  
	{  
		$("#hp").removeClass('object_ok'); // if necessary
		$("#hp").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#stshp").html('');
	$("#hp").removeClass('object_ok'); // if necessary
	$("#hp").addClass("object_error");
	}

});

});

//-->
</SCRIPT>	

</head><body>
<script>
function confirmActiondemomode() {
  alert("not allowed in demo mode!!");
}
</script>
<font face="Arial, Helvetica, sans-serif">
 <?php
                    session_start();
                    session_regenerate_id(true);
                   if(isset($_COOKIE["usermin"]) || isset($_SESSION["valid_admin"])){ ?>
					<?php 
					if(isset($_REQUEST['go'])){$go = $_REQUEST['go'];}
					if (empty($go)) $go = '';
					// PROSES OPEN ACCOUNT **************************************
					if 		($go=='genealogi')
								{ include("./ad_flad/ad_genealogi.php"); }
					
					else if  ($go=='network')
								{ include("./ad_flad/tree.php"); }			
					else if ($go=='jaringan')
								{ include("./ad_flad/memjar.php"); }
							
					else if ($go=='sponsoring')
								{ include("./ad_flad/jar.php"); }			
					else if ($go=='member-kanan')
								{ include("./ad_flad/jar2.php"); }			
					else if ($go=='member-tengah')
								{ include("./ad_flad/jar3.php"); }			
					else if ($go=='board')
								{ include("./ad_flad/netgrowth.php"); }	
							
					else if ($go=='testmail')
								{ include("./ad_flad/testmail.php"); }	
								else if ($go=='testsms')
								{ include("./ad_flad/testsms.php"); }	
					else if ($go=='detilkomisi')
								{ include("./ad_flad/detilkomisi.php"); }							
					else if ($go=='proccess_phgh')
								{ include("./ad_flad/ad_proccess_phgh.php"); }						
					else if ($go=='detail-contribute2')
								{ include("./ad_flad/ad_orderdetail2.php"); }							
					else if ($go=='detail-request')
								{ include("./ad_flad/ad_orderdetailx.php"); }								
					else if ($go=='detail-depo')
								{ include("./ad_flad/ad_depodetail.php"); }				
					else if ($go=='detailorder')
								{ include("./ad_flad/ad_order-detail.php"); }					
					else if ($go=='detailconfirm')
								{ include("./ad_flad/ad_confirmdetail.php"); }					
					else if ($go=='detail-order')
								{ include("./ad_flad/ad_orderprodukdetail.php"); }		
					else if ($go=='register')
								{ include("./ad_flad/ad_reg.php"); } 	
					else if ($go=='emoney')
								{ include("./ad_flad/ad_proewalet.php"); } 			
					else if ($go=='emoneys')
								{ include("./ad_flad/ad_proewalets.php"); } 			
					else if ($go=='send_mail_ticket')
								{ include("./ad_flad/mb_sendmailticket.php"); }
					else if ($go=='send_sms_ticket')
								{ include("./ad_flad/mb_sendsmsticket.php"); }	
					else if ($go=='transfer_ticket')
								{ include("./ad_flad/mb_transticket.php"); }		
					else if ($go=='logo-mail')
								{ include("./ad_flad/ad_maillogo.php"); }	
					else if ($go=='detail-sellwalet')
								{ include("./ad_flad/ad_detailsellwalet.php"); }	
					else if ($go=='detail-buywalet')
								{ include("./ad_flad/ad_detailbuywalet.php"); }	
					else if ($go=='fcon')
								{ include("./ad_flad/ad_fcon.php"); }	
					else if($go=='logo-invoice'){include("./ad_flad/ad_invlogo.php");}	
					else if ($go=='currency')
								{ include("./ad_flad/ad_curr.php"); }
					else if ($go=='googleauth')
								{ include("./ad_flad/ad_googleauth.php"); }	
					else if ($go=='detail-wd')
								{ include("./ad_flad/ad_detailwd.php"); }	
					else if ($go=='testwa')
								{ include("./ad_flad/testwa.php"); }	
					else if ($go=='rwimage')
								{ include("./ad_flad/ad_lgcoine.php"); }			
					else if($go=='send_validation'){include("./ad_flad/mb_send_validation.php");}	
					else if ($go=='updatestake')
								{ include("./ad_flad/ad_updatestake.php"); }									
					else 		{ include("./ad_flad/redr.php");  }
					?>
                    <?php } else { ?>
					<?php
					if(isset($_REQUEST['go'])){$go = $_REQUEST['go'];}
					if (empty($go)) $go = '';
					// PROSES OPEN ACCOUNT **************************************
					if 		($go=='loss_pass')
								{ include("./ad_flad/ad_lpswd.php"); }
								
					else 		{ include("./ad_flad/redr.php");  }
					?>
					<?php } ?></font>


</body>
</html>
<?php ob_flush(); ?>