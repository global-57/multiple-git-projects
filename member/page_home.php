<?php ob_start(); 
error_reporting(0);
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:100px; font-size:20px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Accessing files directly is prohibited.</p><p style='font-family:Arial, Helvetica, sans-serif; margin-top:20px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." <a href='https://www.primadesain.com'>www.primadesain.com</a></p>";
echo "<meta http-equiv=\"refresh\" content=\"5; url=./index.php\">";
exit();} 

require_once '../lib/GoogleAuthenticator.php';
$authenticator = new PHPGangsta_GoogleAuthenticator();

if(!$db->dataku("2fa", $user_session)){
$secret = $authenticator->createSecret();
$db->update("member", "2fa='".$secret."'", "username='".$user_session."'");
}else{
$secret = $db->dataku("2fa", $user_session);
}
$website   = $webz2fa; 
$title     = $ttl2fa;
$tolerance = $tlrz2fa;
$QRCode    = $authenticator->getQRCodeGoogleUrl($title,$secret,$website);
$cekassx = mysql_query("select * from deposit where username='".$user_session."'");
$ada_assx = mysql_num_rows($cekassx); //---flush out hari ini
if(isset($_REQUEST['go'])){$go = $_REQUEST['go'];}
if($db->dataku("accpt", $user_session) == 1) {
				$btttdd="<b class='badge bg-success pull-right'>verified</b>";
				$scrnbt="<img src='../themes/img/verifiedx.png' width='60' height='60' /><br><p style='font-weight:bold; font-size:14px;margin-top:5px;'>Status Verified</p>";
			}else{
				$btttdd="<b class='badge bg-danger pull-right'>unverified</b>";
				$scrnbt="<img src='../themes/img/unverified.png' width='60' height='60' /><br><p style='font-weight:bold; font-size:14px;margin-top:5px;'>Status Unverified</p>";
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
	<title>Dashboard - <?php echo WEB_TITLE; ?></title>
    <link href="../images/banner/<?php echo WEB_FAVCONS; ?>" rel="SHORTCUT ICON" /><!--favicon-->
    <link rel="stylesheet" href="../assets_landing/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets_landing/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets_landing/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap">
    <link rel="stylesheet" href="../assets_landing/css/styles.css">
    <link rel="stylesheet" href="../assets_landing/css/font-awesome.min.css">
    <script src="../assets_landing/js/jquery.min.js"></script>
    <script src="../assets_landing/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets_landing/js/all.js"></script>
	<script src="../js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">
	
	<style>
	.bg-2{
	background: black!important}
.mainmenu input,
form select,
form input[type="file"],
form input[type="text"],
form input[type="number"],	
form input[type="password"],		
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
</head>
<body>
<script>
		function confirmActionx1(){
      var confirmed = swal({
  title: "Are you sure want to logout?",
  text: "",
  type: "info",
  showCancelButton: true,
  confirmButtonColor: "#AEDEF4",
  confirmButtonText: "OK, Logout",
  cancelButtonText: "No, Not Now!",
  closeOnConfirm: false,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "./index.php?do=logout&last_session=<?php echo $idax; ?>";
  } else {
	swal("Tidak", "Your imaginary file is safe :)", "error");
  }
});
     
}
</script>

<script>
		function confirmActionxstop(){
      var confirmed = swal({
  title: "Are you sure want to logout?",
  text: "",
  type: "info",
  showCancelButton: false,
  confirmButtonColor: "#AEDEF4",
  confirmButtonText: "OK",
  cancelButtonText: "No, Not Now!",
  closeOnConfirm: false,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "../login.php";
  } else {
	swal("Tidak", "Your imaginary file is safe :)", "error");
  }
});
     
}
</script>    
<script>
  function confirmActiondemomode(){
   swal('Oops...', 'not allowed in demo mode!', 'error').done();
 
}
</script>
<?php
$results = $_GET['result'];
if($results == "free") { 
echo '<script type=text/javascript>
              swal({
  title: "Free Balance",
  text: "Free balance mode is active",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#0099CC",
  confirmButtonText: "OK",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: true,
  closeOnCancel: false
});
              </script>';	
}
?>  
  <?php
$results = $_GET['result'];
if($results == "real") { 
echo '<script type=text/javascript>
              swal({
  title: "Real Balance",
  text: "Real balance mode is active",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#0099CC",
  confirmButtonText: "OK",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: true,
  closeOnCancel: false
});
              </script>';	
}
?>      

 <?php if (isset($_GET['toreal'])) {
		        $db->update("member", "free='0'", "username='$user_session'");
        header("location: index.php?result=real");
	 } ?>
       
 <?php if (isset($_GET['tofree'])) {
		        $db->update("member", "free='1'", "username='$user_session'");
        header("location: index.php?result=free");
	 } ?>

<? 
if($db->dataku("free", $user_session) == 1 && $freetradings == 1){ 
$saldocwalete = $db->myswalet($user_session);
			 $pendingcwalete = $db->myswaletpending($user_session);
			 $totalcwalete = $saldocwalete-$pendingcwalete; 
			 $totalcwaletec = "<a href='index.php?toreal' style='color:#F00;' title='Free Balance - Change to Real Balance'>".balance($saldocwalete-$pendingcwalete)."</a>"; 
			 $totalcwaletec2 = "<a href='index.php?toreal' title='Free Balance - Change to Real Balance'><i class='material-icons' style='color:#F00;'>refresh</i></a>"; 
			 $jnisewalete="Your Free Account";
			 $linknyawallete="index.php?go=walletfree";
}else{
$saldocwalete = $db->mycwalet($user_session);
			 $pendingcwalete = $db->mycwaletpending($user_session);
			 $totalcwalete = $saldocwalete-$pendingcwalete; 
			 $totalcwaletec = "<a href='index.php?tofree' style='color:#00EA75;' title='Real Balance - Change to Free Balance'>".balance($saldocwalete-$pendingcwalete)."</a>"; 
			 $totalcwaletec2 = "<a href='index.php?tofree' title='Real Balance - Change to Free Balance'><i class='material-icons' style='color:#00EA75;'>refresh</i></a>"; 
			 $jnisewalete="Your Real Account";
			 $linknyawallete="index.php?go=walletcash";
}
			  ?>
<script type="text/javascript">
    setInterval("my_function();",1000); 
    function my_function(){
      $('#cekballance').load(location.href + ' #cekballance');
    }
  </script>


<div class="l">
<div class="loading"  style="" >
		<div class="w-100" align="center">
			<img  style="margin:auto;"  src="../images/logoloading.png"   />
		</div>
	</div>
	</div>

    <main>
        <section class="section-mobile">
            <header>
                <div class="container h-100">
                    <div class="flex-header">
                        <a class="h-logo" href="index.php"><img src="../images/logo.png"></a>
                        <div class="h-info">
                            <div class="info-balance" id="cekballance">
								<?php echo $totalcwaletec2; ?>
								<span><strong><?php echo $totalcwaletec; ?></strong></span>
							</div>
                        </div>
                        <div class="h-menu" align="right"><a class="menu-toggle" href="#"><i class="la la-bars"></i></a></div>
                    </div>
                </div>
            </header>
			
			<div class="container container-main">
			<!-- cryptofinanceusd.com --> 
<div class="mainmenuel" ondblclick="toggleMenu();" align="right">
	<div class="mainmenu">
		
		  <?php 
			   
			   $namaku = $db->dataku("nama", $user_session);
			   $fotokupro = $db->dataku("foto", $user_session);
			 $dirfotopro = "./images/".$fotokupro."";
			
				   if (!empty($fotokupro) && (file_exists($dirfotopro))){
				   $fotoprofilku = "<img style='border-radius:10px; max-height:70px;'  src='".$dirfotopro."'>";
				   }else {
				   $fotoprofilku = "<img style='border-radius:10px; max-height:70px;'  src='../images/no_image.png'>";
				   } ?>
		<div class="mainmenu-profile-div">
				<div class="mainmenu-profile">
					<div class="mainmenu-profile-img"><?php echo $fotoprofilku;?></div>
					<div class="mainmenu-profile-info" align="left">
						<p class="mb-1">Welcome <?php echo $namaku;?> (<?php echo $user_session;?>)</p>
						<p class="fs-14 mb-0 info-balance-color"><?php echo $totalcwaletec; ?></strong></p>
					</div>
				</div><a href="#" onClick="return confirmActionx1()" class="btn btn-dark btn-sm w-100 mt-2" ><i class="la la-sign-out mr-1"></i>Sign Out</a>
			</div>
				
		
		<div class="main-menu-list" align="left">
			<a href="index.php"><i class='fa fa-home' style="margin-right:12px; font-size:16px;"></i>Homepage</a>
			 
			<a href="index.php?go=profile"><img src="../assets_landing/img/profile.svg" width="20" height="20">My Profile</a>
						
			
			
			<a href="index.php?go=walletcash"><i class='fa fa-money' style="margin-right:12px;"></i>Balance</a>
			 
			<?php if($buywalletcash == 1){ ?><a href="index.php?go=deposit"><img src="../assets_landing/img/deposit.svg" width="20" height="20">Deposit</a><?php } ?>
			<?php if($wdwalletcash == 1){ ?><a href="index.php?go=withdraw"><img src="../assets_landing/img/withdrawal.svg" width="20" height="20">Withdrawal</a> <?php } ?>
            <?php if($transwalletcash == 1){ ?><a href="index.php?go=transfer"><i class='fa fa-exchange' style="margin-right:12px; font-size:16px;"></i>Transfer</a><?php } ?> 
			<?php if($investment == 1) {?><a href="index.php?go=invest"><i class='fa fa-pie-chart' style="margin-right:12px; font-size:16px;"></i>Investment</a><?php } ?>
			<a href="index.php?go=password"><i class='fa fa-key' style="margin-right:12px; font-size:16px;"></i>Password & PIN </a>
			<?php  if($googleauntentic == 1){?><a href="index.php?go=secure"><i class='fa fa-shield' style="margin-right:12px; font-size:16px;"></i>Secure</a><?php } ?>
            <?php if($usekyc == 1){ ?><a href="index.php?go=kyc"><i class='fa fa-check-circle' style="margin-right:12px; font-size:16px;"></i>KYC Verification</a><?php } ?>
            <a href="index.php?go=datasp"><i class='fa fa-users' style="margin-right:12px; font-size:16px;"></i>Referral</a>
			<?php if($db->config("news") == 1){ ?><a href="index.php?go=blogs"><i class='fa fa-newspaper-o' style="margin-right:12px; font-size:16px;"></i>Promotions &amp; Information</a><?php } ?>
			<?php if($db->config("download") == 1){ ?><a href="index.php?go=download"><i class='fa fa-download' style="margin-right:12px; font-size:16px;"></i>Download</a><?php } ?>
						
			<a  target="_blank"  href="https://wa.me/<?php echo hpne($mywhatsapp); ?>?text=halo%20"><img src="../assets_landing/img/live-chat.svg" width="20" height="20">Contact Us</a>
		</div>
	</div>
    
</div>

			
            
            
            
            
            
            
            
            
            
            
            
            <?php 
		    $cekadadpo = mysql_query("select * from photoid where username='".$user_session."' and acc='1'");
$ada_dadpo = mysql_num_rows($cekadadpo); //---flush out hari ini
		   
		   
		   if($verifieds == 1 && !$ada_dadpo){ 
		   
		                if ($go=='')
								{ include("./mb_flad/mb_verifikasi.php"); }
								else 
								{ include("./mb_flad/mb_verifikasi.php"); }
									
		    
			
		   }else{
			?>
            
       <?php 
				
  if($db->dataku("act", $user_session) == 0 && $freetradings == 0){ 
		   
		                if ($go=='')
								{ include("./mb_flad/redre.php"); }
					else if ($go=='deposit')
								{ include("./mb_flad/mb_deposit.php"); }
					else if ($go=='payment_ecash')
								{ include("./mb_flad/mb_payment_ecash.php"); }	
								else 
								{ include("./mb_flad/redre.php"); }
									
		    
			
		   }else{
 
 ?>  
           
            <?php
				   
				   
				   
				   if($db->dataku("status", $user_session) == 1 && $db->dataku("blokir", $user_session) == 0) {
					if (empty($go)) $go = '';
					// PROSES OPEN ACCOUNT **************************************
					if 		($go=='')
								{ include("./mb_flad/mb_home.php"); }
					else if 	($go=='home')
								{ include("./mb_flad/mb_home.php"); }
					else if ($go=='profile')
								{ include("./mb_flad/mb_profile.php"); }
					else if ($go=='bonus')
								{ include("./mb_flad/mb_bonus.php"); }
					else if ($go=='gantipass')
								{ include("./mb_flad/mb_passwd.php"); }
					else if ($go=='confirm')
								{ include("./mb_flad/mb_confirm.php"); }
					else if ($go=='notif')
								{ include("./mb_flad/mb_notif.php"); }	
					else if ($go=='profits')
								{ include("./mb_flad/mb_profits.php"); }
					else if ($go=='profitrade')
								{ include("./mb_flad/mb_profitstrade.php"); }	
					else if ($go=='withdrawal')
								{ include("./mb_flad/mb_withdrawal.php"); }		
					else if ($go=='securepin')
								{ include("./mb_flad/mb_securepin.php"); }	
					else if ($go=='getsecurepin')
								{ include("./mb_flad/mb_getsecurepin.php"); }		
					else if ($go=='testimonial')
								{ include("./mb_flad/mb_testi.php"); }
					else if ($go=='testimoni')
								{ include("./mb_flad/mb_testimoni.php"); }		
					else if ($go=='news')
								{ include("./mb_flad/mb_news.php"); }	
					else if ($go=='datasp')
								{ include("./mb_flad/mb_datasp.php"); }
					else if ($investment == 1 && $go=='invest')
								{ include("./mb_flad/mb_givehelp.php"); }
					else if ($go=='register')
								{ include("./mb_flad/mb_reg.php"); }	
					else if ($go=='generation')
								{ include("./mb_flad/mb_generation.php"); }
					else if ($go=='download')
								{ include("./mb_flad/mb_download.php"); }
					else if ($go=='notif')
								{ include("./mb_flad/mb_notif.php"); }
					else if ($go=='blogs')
								{ include("./mb_flad/mb_blogs.php"); }	
					else if ($go=='withdraw')
								{ include("./mb_flad/mb_withdraw.php"); }
					else if ($go=='deposit')
								{ include("./mb_flad/mb_deposit.php"); }	
					else if ($go=='transfer')
								{ include("./mb_flad/mb_transfer.php"); }	
					//else if ($go=='withdrawal')
					//			{ include("./mb_flad/mb_withdrawal.php"); }		
					else if ($go=='password')
								{ include("./mb_flad/mb_password.php"); }	
					else if ($go=='verifikasi')
								{ include("./mb_flad/mb_verifikasi.php"); }	
					else if ($go=='secure')
								{ include("./mb_flad/mb_secure.php"); }	
					else if ($go=='kyc')
								{ include("./mb_flad/mb_verifikasi.php"); }	
					else if ($go=='ticket')
								{ include("./mb_flad/mb_ticket.php"); }					
					else if ($go=='walletcash')
								{ include("./mb_flad/mb_walletcash.php"); }		
					else if ($go=='confirmpayment')
								{ include("./mb_flad/mb_confirmpayment.php"); }	
					else if ($go=='payment_ecash')
								{ include("./mb_flad/mb_payment_ecash.php"); }
					else if ($go=='payment_ticket')
								{ include("./mb_flad/mb_payment_ticket.php"); }	
					else if ($go=='payment_invest')
								{ include("./mb_flad/mb_payment_invest.php"); }					
					else if ($tradings == 1 && $go=='trade')
								{ include("./mb_flad/mb_trade.php"); }							
					else if ($go=='historytrade')
								{ include("./mb_flad/mb_historytrade.php"); }					
					else if ($go=='walletfree')
								{ include("./mb_flad/mb_walletfree.php"); }				
					else if ($go=='faq')
								{ include("./mb_flad/mb_faq.php"); }	
								
					else 		{ include("./mb_flad/redr.php");  }
					} else {
					if 		(empty($go))
								{ include("./mb_flad/mb_home.php"); }
					else if ($go=='home')
								{ include("./mb_flad/mb_home.php"); }			
								
					else 		{ include("./mb_flad/redrx.php");  }
					
					} 
					
					
					?>
    
    
    
            <?php } ?>
            <?php } ?>
    
    
    
           














<footer>
	<div class="container h-100">
		<div class="footer-flex">
			<a class="footer-menu-flex" href="index.php">
				<div class="footer-menu-flex-2" align="center"><img src="../assets_landing/img/home%20(1).svg"><span>Homepage</span></div>
			</a>
			<a class="footer-menu-flex"  href="index.php?go=blogs">
				<div class="footer-menu-flex-2" align="center"><img src="../assets_landing/img/claims.svg"><span>Blogs</span></div>
			</a>
			
			 
			 <a class="footer-menu-flex" href="index.php?go=profile">
				<div class="footer-menu-flex-2 special-main" align="center"><img class="special" src="../assets_landing/img/profile.svg" width="60" height="60"><span>Profile</span></div>
			</a>
						
			
			
			<a class="footer-menu-flex" href="index.php?go=withdraw">
				<div class="footer-menu-flex-2" align="center"><img src="../assets_landing/img/reporting.svg" width="30" height="30"><span>Withdraw</span></div>
			</a>
			<a target="_blank" href="https://wa.me/<?php echo hpne($mywhatsapp); ?>?text=halo%20" class="footer-menu-flex">
				<div class="footer-menu-flex-2" align="center"><img src="../assets_landing/img/live-chat.svg" width="30" height="30" style="animation: pulse 3s infinite;"><span>Contact Us</span></div>
			</a>
		</div>
	</div>
</footer>





</section>
</main>
<script language="javascript" type="text/javascript">
    $(document).ready(function(){
			   setInterval(function() {
           $.ajax({
                type: "GET",
                url: "get_update.php" ,
                success : function() { 
                }
            }).error(function(){
          });
			}, 5000);
        });  
</script>
<script src="../themes/assets/js/hextracoin.js"></script>   
<script>
var width = $('.g-recaptcha').parent().width();
if (width < 302) {
	var scale = width / 302;
	$('.g-recaptcha').css('transform', 'scale(' + scale + ')');
	$('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
	$('.g-recaptcha').css('transform-origin', '0 0');
	$('.g-recaptcha').css('-webkit-transform-origin', '0 0');
}
</script><?php if($stchat == 1) { include("../tawkto.php"); 
} else if($stchat == 2) { include("../whatshelp.php"); 
} else if($stchat == 3) { include("../whatshelptawk.php"); 
} ?> 
</body>
</html>
<?php ob_flush(); ?>