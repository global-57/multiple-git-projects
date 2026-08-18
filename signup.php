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
	<title>Register - <?php echo WEB_TITLE; ?></title>
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
	
	<style>
	.bg-2{
	background: black!important}
.mainmenu input,
form select,
form input[type="file"],
form input[type="text"],
form input[type="number"],		
.special,
header, 
footer {
 background: #161616!important; 
}

form input{
box-shadow:0px 0px 10px 0px black!important;
}
.homeflex-depo {
  background: #400b67;
}

.div-card {
 background: #161616;	
}
.mainmenu {
 background: #161616!important;	
}


.loading,	
body,
.section-mobile {
  background: black!important;
}

	</style>
		 
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
	<strong>Error ! </strong> Invalid Captcha!
</div> 	
<?php } ?>   

<?php $results = $_GET['result']; if($results == "pass_err") { ?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error ! </strong> Password not match!
</div> 	
<?php } ?>      				 

<?php $results = $_GET['result']; if($results == "alnum") { ?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Use username only leters and numbers!
</div> 	
<?php } ?>  

<?php $results = $_GET['result']; if($results == "restrict_user") { ?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Use another username!
</div> 	
<?php } ?>

<?php $results = $_GET['result']; if($results == "wrong_email") { 
;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Email already registered!
</div> 	
<?php } ?>
<?php $results = $_GET['result']; if($results == "wrong_hp") { 
;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Mobile Number already registered!
</div> 	
<?php } ?>
<?php $results = $_GET['result']; if($results == "wrong_sponsor") { 
;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Sponsor Not Found!
</div> 	
<?php } ?>
<?php $results = $_GET['result']; if($results == "wrong_user") { 
;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Username already registered!
</div> 	
<?php } ?>
<?php $results = $_GET['result']; if($results == "email_not_valid") { 
;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Email not valid!
</div> 	
<?php } ?>
<?php $results = $_GET['result']; if($results == "err_phone") { 
;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> Phone number not valid!
</div> 	
<?php } ?>
<?php $results = $_GET['result']; if($results == "err_pin") { 
;?>
<div  style="width : 300px; max-width:100%; color:white;border:0px; position:absolute; right:0px; top:0px;"  class="alert alert-danger bg-danger alert-dismissable">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error! </strong> PIN Register not valid! Please contact your sponsor or administrator
</div> 	
<?php } ?>



            

			
<h5 class="mb-0">Register Member </h5>
<p> Please Enter detail to register new members </p> 
<hr>



  <?php

if(isset($_POST['submitreg'])){	
	
 
$sponsore = anti_injection($_POST['sponsore']);	
$sponsorex = anti_injection($_POST['sponsorex']);	

$usernamed = str_replace(' ', '', strtolower($_POST['username']));	
$username = anti_injection($usernamed);	

if(!$sponsore){
$sponsore=$sponsorex;	
}else{ 
$sponsore=$sponsore;
}
 
$_SESSION["namae"] = anti_injection($_POST["name"]);
$_SESSION["passworde"] = $_POST["password"];
$_SESSION["passworde2"] = $_POST["password_confirmation"];
$_SESSION["emaile"] = anti_injection($_POST["email"]);
$_SESSION["username"] = anti_injection($_POST["username"]);	
$_SESSION["hp"] = anti_injection($_POST["hp"]);
$_SESSION["country"] = anti_injection($_POST["country"]);
$_SESSION["tickete"] = anti_injection($_POST["ticket"]);


$sql_ckusr = mysql_query("select username from member where username='".$username."' ");
$ada_ckusr = mysql_num_rows($sql_ckusr);
if($userbysystem == 1 && $ada_ckusr){
$idregblkg = substr(str_shuffle(str_repeat("1234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567898912345678912345678912345678912345678912345678912345678912345678912345678912345678912345678912345678989123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789", $acakee)), 0, $idblakange);		
$username=$idregdepan.$idregblkg;
}else{
$username=$username;
}
	


if(!ctype_alnum($username)){
header('location: signup.php?result=alnum');	
	exit;
}else{ 


$hp = anti_injection($_POST['hp']);	
$phone = anti_injection($_POST['hp']);	

$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';
$secret_key = $secret_key_google; //masukkan secret key-nya berdasarkan secret key masig-masing saat create api key nya
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
   $recaptcha = file_get_contents($url);
   $recaptcha = json_decode($recaptcha, true);
   if ($usecaptcha==1 && !$recaptcha['success']) { 
         header("location: signup.php?result=wrong_captcha");
      } else {
		  
		  
$ticket = anti_injection($_POST['ticket']);
$sql_sp9s = mysql_query("select ticket, username from ticket where ticket='".mysql_real_escape_string($ticket)."' and status='1'");
$ada_sp9s = mysql_num_rows($sql_sp9s);
$row35s = mysql_fetch_array($sql_sp9s);
$usertiket = $row35s['username'];
if($usetiket == 1 && !$ada_sp9s){
header("location: signup.php?result=err_pin");
	exit;
} else {	

$nama = anti_injection($_POST['name']);
$email = anti_injection($_POST['email']);
//$phone = anti_injection($_POST['phone']);
$password1 = anti_injection($_POST['password']);
$password2 = anti_injection($_POST['password_confirmation']);
$cid = anti_injection($_POST['cid']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
header("location: signup.php?result=email_not_valid");
	exit;
} else {
	

$pin = substr(str_shuffle(str_repeat("44531411190667642037112717497783625536342396411241472162223777", 64)), 0, 5);


$sql_sp3 = mysql_query("select username from member where username='".mysql_real_escape_string($sponsore)."' and status=1");
$ada_sp3 = mysql_num_rows($sql_sp3);
if(!$ada_sp3){
header("location: signup.php?result=wrong_sponsor");
exit;
} else {	

$sql_sp32 = mysql_query("select accid from member where accid='".mysql_real_escape_string($cid)."'");
$ada_sp32 = mysql_num_rows($sql_sp32);
if($ada_sp32 > 0){
$sqlckid=mysql_query("select accid from member where accid like '".$cptidne."%' order by id desc");
		if(mysql_num_rows($sqlckid) > 0) {
		$mbrckid = mysql_fetch_row($sqlckid);

		$lastck_id = substr($mbrckid[0], -8);
		} else {
		$lastck_id = $lastidne;
		}		
		$kodecid = $cptidne;
		$newc_id = ($lastck_id + 1);
		$newc_id2 = $kodecid.$newc_id;
		$ccidne = $newc_id2;		
}else{
$ccidne = $cid;
}





$upline = $sponsore;
$posisi = spillover("pos", $sponsore);
$level = $db->dataupline("level", $upline);



 $upline0= $db->dataupline("upline0", $upline);
		$upline1= $db->dataupline("upline1", $upline);
		$upline2= $db->dataupline("upline2", $upline);
		$upline3= $db->dataupline("upline3", $upline);
		$upline4= $db->dataupline("upline4", $upline);
		$upline5= $db->dataupline("upline5", $upline);
		$upline6= $db->dataupline("upline6", $upline);
		$upline7= $db->dataupline("upline7", $upline);
		$upline8= $db->dataupline("upline8", $upline);
		$upline9= $db->dataupline("upline9", $upline);
		$upline10= $db->dataupline("upline10", $upline);
		$upline11= $db->dataupline("upline11", $upline);
		$upline12= $db->dataupline("upline12", $upline);
		$upline13= $db->dataupline("upline13", $upline);
		$upline14= $db->dataupline("upline14", $upline);
		$upline15= $db->dataupline("upline15", $upline);
		$upline16= $db->dataupline("upline16", $upline);
		$upline17= $db->dataupline("upline17", $upline);
		$upline18= $db->dataupline("upline18", $upline);
		$upline19= $db->dataupline("upline19", $upline);
		$upline20= $db->dataupline("upline20", $upline);
		$upline21= $db->dataupline("upline21", $upline);
		$upline22= $db->dataupline("upline22", $upline);
		$upline23= $db->dataupline("upline23", $upline);
		$upline24= $db->dataupline("upline24", $upline);
		$upline25= $db->dataupline("upline25", $upline);
		$upline26= $db->dataupline("upline26", $upline);
		$upline27= $db->dataupline("upline27", $upline);
		$upline28= $db->dataupline("upline28", $upline);
		$upline29= $db->dataupline("upline29", $upline);
		$upline30= $db->dataupline("upline30", $upline);
		$upline31= $db->dataupline("upline31", $upline);
		$upline32= $db->dataupline("upline32", $upline);
		$upline33= $db->dataupline("upline33", $upline);
		$upline34= $db->dataupline("upline34", $upline);
		$upline35= $db->dataupline("upline35", $upline);
		$upline36= $db->dataupline("upline36", $upline);
		$upline37= $db->dataupline("upline37", $upline);
		$upline38= $db->dataupline("upline38", $upline);
		$upline39= $db->dataupline("upline39", $upline);
		$upline40= $db->dataupline("upline40", $upline);
		$upline41= $db->dataupline("upline41", $upline);
		$upline42= $db->dataupline("upline42", $upline);
		$upline43= $db->dataupline("upline43", $upline);
		$upline44= $db->dataupline("upline44", $upline);
		$upline45= $db->dataupline("upline45", $upline);
		$upline46= $db->dataupline("upline46", $upline);
		$upline47= $db->dataupline("upline47", $upline);
		$upline48= $db->dataupline("upline48", $upline);
		$upline49= $db->dataupline("upline49", $upline);
		$upline50= $db->dataupline("upline50", $upline);
		$upline51= $db->dataupline("upline51", $upline);
		$upline52= $db->dataupline("upline52", $upline);
		$upline53= $db->dataupline("upline53", $upline);
		$upline54= $db->dataupline("upline54", $upline);
		$upline55= $db->dataupline("upline55", $upline);
		$upline56= $db->dataupline("upline56", $upline);
		$upline57= $db->dataupline("upline57", $upline);
		$upline58= $db->dataupline("upline58", $upline);
		$upline59= $db->dataupline("upline59", $upline);
		$upline60= $db->dataupline("upline60", $upline);
	    $upline61= $db->dataupline("upline61", $upline);
		$upline62= $db->dataupline("upline62", $upline);
		$upline63= $db->dataupline("upline63", $upline);
		$upline64= $db->dataupline("upline64", $upline);
		$upline65= $db->dataupline("upline65", $upline);
		$upline66= $db->dataupline("upline66", $upline);
		$upline67= $db->dataupline("upline67", $upline);
		$upline68= $db->dataupline("upline68", $upline);
		$upline69= $db->dataupline("upline69", $upline);

		$upline70= $db->dataupline("upline70", $upline);
		$upline71= $db->dataupline("upline71", $upline);
		$upline72= $db->dataupline("upline72", $upline);
		$upline73= $db->dataupline("upline73", $upline);
		$upline74= $db->dataupline("upline74", $upline);
		$upline75= $db->dataupline("upline75", $upline);
		$upline76= $db->dataupline("upline76", $upline);
		$upline77= $db->dataupline("upline77", $upline);
		$upline78= $db->dataupline("upline78", $upline);
		$upline79= $db->dataupline("upline79", $upline);
		$upline80= $db->dataupline("upline80", $upline);
	    $upline81= $db->dataupline("upline81", $upline);
		$upline82= $db->dataupline("upline82", $upline);
		$upline83= $db->dataupline("upline83", $upline);
		$upline84= $db->dataupline("upline84", $upline);
		$upline85= $db->dataupline("upline85", $upline);
		$upline86= $db->dataupline("upline86", $upline);
		$upline87= $db->dataupline("upline87", $upline);
		$upline88= $db->dataupline("upline88", $upline);
		$upline89= $db->dataupline("upline89", $upline);
		$upline90= $db->dataupline("upline90", $upline);
		$upline91= $db->dataupline("upline91", $upline);
		$upline92= $db->dataupline("upline92", $upline);
		$upline93= $db->dataupline("upline93", $upline);
		$upline94= $db->dataupline("upline94", $upline);
		$upline95= $db->dataupline("upline95", $upline);
		$upline96= $db->dataupline("upline96", $upline);
		$upline97= $db->dataupline("upline97", $upline);
		$upline98= $db->dataupline("upline98", $upline);
		$upline99= $db->dataupline("upline99", $upline);
		$upline100= $db->dataupline("upline100", $upline);


	$db->select("username", "member", "username='$username'");
	$chkd_user = $db->num_rows();
	
if ($chkd_user!= "") {
	 	header("location: signup.php?result=wrong_user");
exit;
} else {
	

	
	
	
	
	
	$usernames = strtolower($username);
if ($usernames== "admin" || $usernames== "administrator" || $usernames== "pengelola") {
	 	header("location: signup.php?result=restrict_user");
exit;
} else {	
	
	
$cekhpmaile = mysql_query("select * from member where email='".mysql_real_escape_string($email)."'");
$ada_maile = mysql_num_rows($cekhpmaile); //---flush out hari ini
if ($ada_maile > 0) {
header("location: signup.php?result=wrong_email");
exit;
}else{
	
//---------masukkan data new member ke dalam database---------------
	//$db->select("id", "tree", "username='$sponsore'");
		$pass=md5($password1);
        $pins=md5($pin);
		$levele = $level + 1;
		if($levele > 100){
		$levele = "100";
		}
		
		

$stmpkodene = substr(str_shuffle(str_repeat("4453B141119A06676420371LPMBTEFWX112D8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 12);
$stkodexx = substr(str_shuffle(str_repeat("4453B141119A06676420371112D8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 10);


if($mailconfirm == 1){	
$db->insert("member", "", "'', '".mysql_real_escape_string($username)."', '$password1', '$nama', '$sponsore', '$upline', '".mysql_real_escape_string($email)."', '', '', '', '', '".mysql_real_escape_string($phone)."', '', '', '".$_SERVER['REMOTE_ADDR']."', '', '', '$clientdate', '$clientdate', '1', '', '0', '0','','','','','".mysql_real_escape_string($negara)."','','$sponsore','$stmpkodene','','$country','', '', '$ccidne','','','1','','','','','','','','','','','','','','','','','','1','0'");
$db->insert("acc", "", "'', '$username', '$password1', '$pin'");
$db->insert("pincode", "", "'', '$username', '$pin', '1', '$clientdate', '', ''");
$db->insert("ewalet", "", "'', '$username', '$password1', '$clientdate', '1', '', '$ccidne'");
}else{
$db->insert("member", "", "'', '".mysql_real_escape_string($username)."', '$pass', '$nama', '$sponsore', '$upline', '".mysql_real_escape_string($email)."', '', '', '', '', '".mysql_real_escape_string($phone)."', '', '', '".$_SERVER['REMOTE_ADDR']."', '', '', '$clientdate', '$clientdate', '1', '', '0', '0','','','','','".mysql_real_escape_string($negara)."','','$sponsore','$stmpkodene','','$country','', '', '$ccidne','','','1','','','','','','','','','','','','','','','','','','1','0'");
$db->insert("acc", "", "'', '$username', '$password1', '$pin'");
$db->insert("pincode", "", "'', '$username', '$pins', '1', '$clientdate', '', ''");
$db->insert("ewalet", "", "'', '$username', '$pass', '$clientdate', '1', '', '$ccidne'");
}

	$db->insert("upline", "", "'', '".mysql_real_escape_string($username)."', '$sponsore', '', '', '', '', '', '', '', '', '', '', '', '$upline', '$upline0', '$upline1', '$upline2', '$upline3', '$upline4', '$upline5', '$upline6', '$upline7', '$upline8', '$upline9', '$upline10', '$upline11', '$upline12', '$upline13', '$upline14', '$upline15', '$upline16', '$upline17', '$upline18', '$upline19', '$upline20', '$upline21', '$upline22', '$upline23', '$upline24', '$upline25', '$upline26', '$upline27', '$upline28', '$upline29', '$upline30', '$upline31', '$upline32', '$upline33', '$upline34', '$upline35', '$upline36', '$upline37', '$upline38', '$upline39', '$upline40', '$upline41', '$upline42', '$upline43', '$upline44', '$upline45', '$upline46', '$upline47', '$upline48', '$upline49', '$upline50', '$upline51', '$upline52', '$upline53', '$upline54', '$upline55', '$upline56', '$upline57', '$upline58', '$upline59', '$upline60', '$upline61', '$upline62', '$upline63', '$upline64', '$upline65', '$upline66', '$upline67', '$upline68', '$upline69', '$upline70', '$upline71', '$upline72', '$upline73', '$upline74', '$upline75', '$upline76', '$upline77', '$upline78', '$upline79', '$upline80', '$upline81', '$upline82', '$upline83', '$upline84', '$upline85', '$upline86', '$upline87', '$upline88', '$upline89', '$upline90', '$upline91', '$upline92', '$upline93', '$upline94', '$upline95', '$upline96', '$upline97', '$upline98', '$upline99', '$levele', '0', '0', '0', '1'");
	//if($posisi == "L1") {
	//		$db->update("upline", "L1='".mysql_real_escape_string($username)."'", "username='".mysql_real_escape_string($upline)."'");
	//	} elseif($posisi == "L2") {
	//		$db->update("upline", "L2='".mysql_real_escape_string($username)."'", "username='".mysql_real_escape_string($upline)."'");
			
	//}	
$db->insert("dataswalet", "", "'', '$stmpkodene', 'administrator', '$freebalance', 'Free Register Balance', '$username', '$clientdate', '1', '$clientdate', '', ''");	
	if($usetiket == 1){
	$db->update("ticket", "status='0', info='Use for registration member $username'", "ticket='$ticket' and status='1' and ticket <> '9999999999'");	
	}	
//$angkaunik = substr(str_shuffle(str_repeat("12365478985823641257846982357418965", 24)), 0, 3);
//$expired = date('Y-m-d H:i:s', strtotime("+".$batastransfere." minutes"));	
	
//$db->insert("dataewalet3", "", "'', '$stmpkodene', '$username', '$biaya', '', '$clientdate', '$expired', '0', '$produk', '$myproduk', '$profite', '$angkaunik', '$priode', '$siklus'");

	
//$db->insert("notifikasi", "", "'', '$username', 'Registrasi', '', '', 'Make deposit payment package you choose, amount ".rupiah($amount)."', '$clientdate', 'label label-sm label-icon label-info', 'fa fa-info', '0', '$stmpkodene'");

if($mailconfirm == 1){	
//$db->aktivasi($username);
$tgl = formatgl($clientdate);

$spnsnama = $db->dataku("nama", $sponsore);
$spnsmail = $db->dataku("email", $sponsore);

$stkodexx = substr(str_shuffle(str_repeat("4453B141119667642A03711128717497783C6255363423ABCYWTGEHDLPMBTEF", 64)), 0, 10);
$rgg=base64_encode($email);
$sess = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 32);
$token = md5(date("H:i:s").md5($sess));
mysql_query("insert into validation values('','".mysql_real_escape_string($username)."', '$stkodexx', '$sess', '".mysql_real_escape_string($email)."', '$token', '$clientdate', '')") or die(mysql_error());
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


if($hp){
$isipesan = "Hello ".$nama.", please check your email ".$email." to confirm your registration at ".$bisnisname.".";
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

unset($_SESSION['namae']);
unset($_SESSION['emaile']);
unset($_SESSION["phone"]);
unset($_SESSION["username"]);
unset($_SESSION["passworde"]);
unset($_SESSION["passworde2"]);
unset($_SESSION["hdccoin"]);


header("location: login.php?result=verification&n=".base64_encode($nama)."&m=".base64_encode($email)."&c=1");
exit;


}else{





$db->aktivasi($username);
$tgl = formatgl($clientdate);

$spnsnama = $db->dataku("nama", $sponsore);
$spnsmail = $db->dataku("email", $sponsore);

if($usepins == 1){
	$pinsesms=", Secure PIN: ".$pin."";
	$pinsemail="Secure PIN : ".$pin."";
}else{
	$pinsesms="";
	$pinsemail="";
}

if($hp){
$isipesan = "Hello ".$nama.", Thank you for signed up at ".$bisnisname.", your login details, Username: ".$username.", Password: ".$password1."".$pinsesms.".";
	
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
Phone : ".$phone."<br>
Email : ".$email."<br>
Password : ".$password1."<br>
".$pinsemail."
</p>
<p>
<strong>Network:</strong><br>
Sponsor : ".$sponsore."
</p>

<p>
Date Register : ".$tgl."<br>
PIN Register : ".$ticket."
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail1 = new PHPMailer;
		if($smaile == 1){	
//$mail1->IsSMTP(); // telling the class to use SMTP
$mail1->Host       = $smtphost; // SMTP server
$mail1->SMTPAuth   = true;                  // enable SMTP authentication
$mail1->Host       = $smtphost; // sets the SMTP server
$mail1->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail1->Username   = $smtpuser; // SMTP account username
$mail1->Password   = $smtpass;        // SMTP account password
}
        $mail1->setFrom($email, $nama);
        $mail1->addAddress($emailadmin, $nama_bisnis);
	    $mail1->IsHTML(true);       
        $mail1->Subject = ''.$nama_bisnis.', New signup at '.$bisnisname.'';
        $mail1->msgHTML($isimail1);
        $mail1->send();	
	
	
	
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>Thank you for signed up at ".$bisnisname.".</p>

<p>
Username : ".$username."<br>
Name : ".$nama."<br>
Phone : ".$phone."<br>
Email : ".$email."<br>
Password : ".$password1."<br>
".$pinsemail."
</p>
<p>
<strong>Network:</strong><br>
Sponsor : ".$sponsore."
</p>

<p>
Date Register : ".$tgl."<br>
PIN Register : ".$ticket."
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
		if($smaile == 1){	
//$mail2->IsSMTP(); // telling the class to use SMTP
$mail2->Host       = $smtphost; // SMTP server
$mail2->SMTPAuth   = true;                  // enable SMTP authentication
$mail2->Host       = $smtphost; // sets the SMTP server
$mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail2->Username   = $smtpuser; // SMTP account username
$mail2->Password   = $smtpass;        // SMTP account password
}
        $mail2->setFrom($emailadmin, $nama_bisnis);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', your signup at '.$bisnisname.'';
        $mail2->msgHTML($isimail2);
        $mail2->send();	
	
	
unset($_SESSION['namae']);
unset($_SESSION['emaile']);
unset($_SESSION["phone"]);
unset($_SESSION["username"]);
unset($_SESSION["passworde"]);
unset($_SESSION["passworde2"]);


header("location: login.php?result=successreg&n=".$nama."");

exit;

}
}
}
}
}
}
}
}
}


} else {
?>
    
 <?php $session_sponsore = $_SESSION["sponsor"];
		
		$sql_sp3xx = mysql_query("select username from member where username='".$session_sponsore."' and status=1");
$ada_sp3xx = mysql_num_rows($sql_sp3xx);
if(!$ada_sp3xx){
		$session_sponsor = "member";
}else{
	$session_sponsor = $session_sponsore;
}

 $namasspne = $db->dataku("nama", $session_sponsor);
		 $hpsspne = $db->dataku("hp", $session_sponsor);
		 $emailsspne = $db->dataku("email", $session_sponsor);
		

		
if($userbysystem == 1){	
$idregblkg = substr(str_shuffle(str_repeat("1234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567898912345678912345678912345678912345678912345678912345678912345678912345678912345678912345678912345678989123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789", $acakee)), 0, $idblakange);		
$autousere=$idregdepan.$idregblkg;
}	

		
$sqlckid=mysql_query("select accid from member where accid like '".$cptidne."%' order by id desc");
		if(mysql_num_rows($sqlckid) > 0) {
		$mbrckid = mysql_fetch_row($sqlckid);
		$lastck_id = substr($mbrckid[0], -8);
		} else {
		$lastck_id = $lastidne;
		}		
		$kodecid = $cptidne;
		$newc_id = ($lastck_id + 1);
		$newc_id2 = $kodecid.$newc_id;
		$cidne = $newc_id2;		
		
		?>       
            
            
             <?php if($regpublic == 0){ 
			echo "<div class='alert alert-info'>new member registration is temporarily closed, try again later.</div>";
			}else{
			?>
            

 <form action="" method="POST">
            <input name="sponsorex" id="sponsorex" type="hidden" value="<?php echo $session_sponsor;?>" readonly="readonly"/>
            <input name="cid" id="sponsore" type="hidden" value="<?php echo $cidne;?>" readonly="readonly"/>
            <input name="produk" id="produk" type="hidden" value="1" readonly="readonly"/>
            
           

<div class="div-card bg-2">	
	<label>Refferal ID *</label>
                   <input class="form-control" placeholder="Enter Refferal ID required name="sponsore" type="text" value="<?php echo $session_sponsor;?>">   
	 
	<label>Full Name *</label>
                   <input class="form-control" placeholder="Enter Full Name" required name="name" type="text" value="<?php echo $_SESSION["namae"]; ?>">  
	
	<label>Email Address *</label>
                      <input class="form-control" required name="email" type="text" value="<?php echo $_SESSION["emaile"]; ?>" placeholder="Enter Email Address">
      
	<label>Phone Number *</label>
                      <input class="form-control" required name="hp" type="text" oninput="value=value.replace(/[^\d]/g,'')" placeholder="Enter Phone Number">     <?php if($userbysystem == 1){?>
            <input name="username" id="username" type="hidden" value="<?php echo $autousere;?>" readonly="readonly"/>
                     <?php } else{ ?>              
    <label>Username *</label>
                      <input class="form-control" required name="username" type="text" value="<?php echo $_SESSION["username"]; ?>" placeholder="Enter Username">
                     <?php } ?> 
           <label>Password *</label>
    <input class="form-control" required name="password" id="password" type="password" value="<?php echo $_SESSION["passworde"]; ?>" placeholder="Enter Password" style="background:#161616; border:none;">          
    
                <?php if($usecaptcha==1){ ?>
    <br />  
	<div class="g-recaptcha" data-sitekey="<?php echo $site_key_google; ?>"></div>
      <?php } ?>                
	<br />
	<div class="d-flex align-items-center ">
		<input id="checkbox" class="mr-2 m-0"  type="checkbox" required  name="check" value="Yes" placeholder=""    />
		<label for="checkbox" class="m-0"> I agree <a href="terms.php" style="color:#FC0;">Terms and Conditions</a></label> 
	</div>
	
	<br />
    
    
    
    
	 
	<button class="btn btn-dark form-control" type="submit" name="submitreg" onclick="if(!this.form.checkbox.checked){alert('You must agree to the Terms and Conditions <?php echo $bisnisname; ?>.');return false}"><i class="la la-edit mr-1"></i>Register New Member</button>
	
	
	
</div>
</form>
<?php

unset($_SESSION['namae']);
unset($_SESSION['emaile']);
unset($_SESSION["hp"]);
unset($_SESSION["username"]);
unset($_SESSION["passworde"]);
unset($_SESSION["passworde2"]);
unset($_SESSION["tickete"]);
unset($_SESSION["pine"]);     
unset($_SESSION["usdtwallete"]);     
?>
<?php } ?> 
<?php } ?> 
<br>

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