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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $db->config("title"); ?></title>
<link href="images/banner/<?php echo $db->config("fcon"); ?>" rel="SHORTCUT ICON" />
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
<?php
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
	<title><?php echo WEB_TITLE; ?></title>
    <link href="images/banner/<?php echo WEB_FAVCONS; ?>" rel="SHORTCUT ICON" /><!--favicon-->
    <link rel="stylesheet" href="assets_landing/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_landing/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets_landing/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap">
    <link rel="stylesheet" href="assets_landing/css/styles.css">
    <script src="assets_landing/js/jquery.min.js"></script>
    <script src="assets_landing/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets_landing/js/all.js"></script>
	
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
include("header.php");
?>
		

<h6 class="mt-3">Trade</h6>
<form enctype="multipart/form-data"> 
  <select class="form-control"  onchange="location =  this.options[this.selectedIndex].value" style="font:Verdana, Geneva, sans-serif;">
                                            
                                            
                                             <?php 
											 
										if($_GET['cr'] == "ethbtc"){
			 echo "<option value='index.php?cr=ethbtc'>ETH/BTC</option>";
		 }else if($_GET['cr'] == "bnbbtc"){
			 echo "<option value='index.php?cr=bnbbtc'>BNB/BTC</option>";
		 }else if($_GET['cr'] == "ltcbtc"){
			 echo "<option value='index.php?cr=ltcbtc'>LTC/BTC</option>";
		 }else if($_GET['cr'] == "snteth"){
			 echo "<option value='index.php?cr=snteth'>SNT/ETH</option>";
		 }else if($_GET['cr'] == "bnteth"){
			 echo "<option value='index.php?cr=bnteth'>BNT/ETH</option>";
		 }else if($_GET['cr'] == "btcusdt"){
			 echo "<option value='index.php?cr=btcusdt'>BTC/USDT</option>";
		 }else if($_GET['cr'] == "ethusdt"){
			 echo "<option value='index.php?cr=ethusdt'>ETH/USDT</option>";
		 }else if($_GET['cr'] == "dashbtc"){
			 echo "<option value='index.php?cr=dashbtc'>DASH/BTC</option>";
		 }else if($_GET['cr'] == "dasheth"){
			 echo "<option value='index.php?cr=dasheth'>DASH/ETH</option>";
		 }else if($_GET['cr'] == "xrpbtc"){
			 echo "<option value='index.php?cr=xrpbtc'>XRP/BTC</option>";
		 }else if($_GET['cr'] == "xrpeth"){
			 echo "<option value='index.php?cr=xrpeth'>XRP/ETH</option>";
		 }else if($_GET['cr'] == "bnbusdt"){
			 echo "<option value='index.php?cr=bnbusdt'>BNB/USDT</option>";
		 }else if($_GET['cr'] == "bcceth"){
			 echo "<option value='index.php?cr=bcceth'>BCC/ETH</option>";	
		 }else if($_GET['cr'] == "bccusdt"){
			 echo "<option value='index.php?cr=bccusdt'>BCC/USDT</option>";	
		 }else if($_GET['cr'] == "bccbnb"){
			 echo "<option value='index.php?cr=bccbnb'>BCC/BNB</option>";
		 }else if($_GET['cr'] == "ltcusdt"){
		     echo "<option value='index.php?cr=ltcusdt'>LTC/USDT</option>";
		 }else if($_GET['cr'] == "ltcbnb"){
			 echo "<option value='index.php?cr=ltcbnb'>LTC/BNB</option>";
		 }else if($_GET['cr'] == "adabtc"){
			 echo "<option value='index.php?cr=adabtc'>ADA/BTC</option>";
		 }else if($_GET['cr'] == "adaeth"){
			 echo "<option value='index.php?cr=adaeth'>ADA/ETH</option>";
		}else if($_GET['cr'] == "wavesbnb"){
			 echo "<option value='index.php?cr=wavesbnb'>WAVES/BNB</option>";	 
		}else if($_GET['cr'] == "atombnb"){
			 echo "<option value='index.php?cr=atombnb'>ATOM/BNB</option>";	 
		}else if($_GET['cr'] == "atombtc"){
			 echo "<option value='index.php?cr=atombtc'>ATOM/BTC</option>";	 
		}else if($_GET['cr'] == "dogebtc"){
			 echo "<option value='index.php?cr=dogebtc'>DOGE/BTC</option>";	  
		}else if($_GET['cr'] == "dogeusdt"){
			 echo "<option value='index.php?cr=dogeusdt'>DOGE/USDT</option>";	  
		}else if($_GET['cr'] == "adausdt"){
			 echo "<option value='index.php?cr=adausdt'>ADA/USDT</option>";	  
		
		 }else{
			 }
			 ?>
             
            
             
             
          <?php if($ethbtc_status == 1){ ?><option value='index.php?cr=ethbtc'>ETH/BTC</option><?php } ?>
          <?php if($bnbbtc_status == 1){ ?><option value='index.php?cr=bnbbtc'>BNB/BTC</option><?php } ?>
          <?php if($ltcbtc_status == 1){ ?><option value='index.php?cr=ltcbtc'>LTC/BTC</option><?php } ?>
          <?php if($snteth_status == 1){ ?><option value='index.php?cr=snteth'>SNT/ETH</option><?php } ?>
          <?php if($bnteth_status == 1){ ?><option value='index.php?cr=bnteth'>BNT/ETH</option><?php } ?>
          <?php if($btcusdt_status == 1){ ?><option value='index.php?cr=btcusdt'>BTC/USDT</option><?php } ?>
          <?php if($ethusdt_status == 1){ ?><option value='index.php?cr=ethusdt'>ETH/USDT</option><?php } ?>

          <?php if($dashbtc_status == 1){ ?><option value='index.php?cr=dashbtc'>DASH/BTC</option><?php } ?>
          <?php if($dasheth_status == 1){ ?><option value='index.php?cr=dasheth'>DASH/ETH</option><?php } ?>
          <?php if($xrpbtc_status == 1){ ?><option value='index.php?cr=xrpbtc'>XRP/BTC</option><?php } ?>
          <?php if($xrpeth_status == 1){ ?><option value='index.php?cr=xrpeth'>XRP/ETH</option><?php } ?>
          <?php if($bnbusdt_status == 1){ ?><option value='index.php?cr=bnbusdt'>BNB/USDT</option><?php } ?>
          <?php if($bcceth_status == 1){ ?><option value='index.php?cr=bcceth'>BCC/ETH</option><?php } ?>
          <?php if($bccusdt_status == 1){ ?><option value='index.php?cr=bccusdt'>BCC/USDT</option><?php } ?>
          <?php if($bccbnb_status == 1){ ?><option value='index.php?cr=bccbnb'>BCC/BNB</option><?php } ?>
          <?php if($ltcusdt_status == 1){ ?><option value='index.php?cr=ltcusdt'>LTC/USDT</option><?php } ?>
          <?php if($ltcbnb_status == 1){ ?><option value='index.php?cr=ltcbnb'>LTC/BNB</option><?php } ?>
          <?php if($adabtc_status == 1){ ?><option value='index.php?cr=adabtc'>ADA/BTC</option><?php } ?>
          <?php if($adaeth_status == 1){ ?><option value='index.php?cr=adaeth'>ADA/ETH</option><?php } ?>
          <?php if($wavesbnb_status == 1){ ?><option value='index.php?cr=wavesbnb'>WAVES/BNB</option><?php } ?>
          <?php if($atombnb_status == 1){ ?><option value='index.php?cr=atombnb'>ATOM/BNB</option><?php } ?>
          <?php if($atombtc_status == 1){ ?><option value='index.php?cr=atombtc'>ATOM/BTC</option><?php } ?>
          <?php if($dogebtc_status == 1){ ?><option value='index.php?cr=dogebtc'>DOGE/BTC</option><?php } ?>
          <?php if($dogeusdt_status == 1){ ?><option value='index.php?cr=dogeusdt'>DOGE/USDT</option><?php } ?>
          <?php if($adausdt_status == 1){ ?><option value='index.php?cr=adausdt'>ADA/USDT</option><?php } ?>
          
          
         
                                            </select>
 
					
<style>
#form-B span.input-group-addon{margin-right: 10px; display:flex; align-items:center;}
#form-B > div:last-child{width : 100%; display:flex; align-items:center;}
center{
	width : 100%!important;
}
	.sendsell,
	.sendbuy{
		width : 49.5%;
		padding-top:0px;padding-bottom:0px;padding-left:10px; padding-right:10px; height: 40px;display:inline-flex; align-items:center;font-size : 14px; 
	}
</style>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container"> 
<div class="tradingview-widget-copyright" style="width: 100%;"></div>

	

  <?php if($_GET['cr'] == "wthbtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ETHBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "bnbbtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:BNBBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "ltcbtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:LTCBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "snteth"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:SNTETH",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "bnteth"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:BNTETH",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "btcusdt"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:BTCUSDT",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "ethusdt"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ETHUSDT",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "dashbtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:DASHBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "dasheth"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:DASHETH",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "xrpbtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:XRPBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "xrpeth"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:XRPETH",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "bnbusdt"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:BNBUSDT",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "bcceth"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:BCCETH",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "bccusdt"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:BCCUSDT",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "bccbnb"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:BCCBNB",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "ltcusdt"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:LTCUSDT",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "ltcbnb"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:LTCBNB",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "adabtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ADABTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "adaeth"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ADAETH",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "wavesbnb"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:WAVESBNB",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } else if($_GET['cr'] == "atombnb"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ATOMBNB",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "atombtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ATOMBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "dogebtc"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:DOGEBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "dogeusdt"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:DOGEUSDT",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->
<?php } else if($_GET['cr'] == "adausdt"){?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ADAUSDT",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_b36b9"
}
  );
  </script>
<!-- TradingView Widget END -->


<?php } else { ?>
<!-- TradingView Widget BEGIN -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 440,
  "symbol": "BINANCE:ETHBTC",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "<?php echo $themeforex;?>",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "PSAR@tv-basicstudies"
  ],
  "container_id": "tradingview_cc245"
}
  );
  </script>
<!-- TradingView Widget END -->

<?php } ?>                        
</form> 


<div class="btn-group w-100 mt-2">
	<a class="btn btn-dark" href="login.php"> Buy </a> 
	<a class="btn btn-danger" href="login.php"> Sell </a> 

</div>


</div> 
<h6 class="mt-3">Coin Charts</h6>
<div class="div-card bg-2 flex-vertical">	
	<script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> 
	<div class="livecoinwatch-widget-1" lcw-coin="BTC" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1" >
	</div>

	<div class="livecoinwatch-widget-1" lcw-coin="ETH" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1" >
	</div>
	<div class="livecoinwatch-widget-1" lcw-coin="LTC" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1" >
	</div>
	
	

</div>





<h6 class="mt-3">Recomended Coin</h6>
<div class="div-card"><script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>

	<div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">
	</div>
	<div class="coinmarketcap-currency-widget" data-currencyid="1027" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">
	</div>
	<div class="coinmarketcap-currency-widget" data-currencyid="825" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">
	</div>
	<div class="coinmarketcap-currency-widget" data-currencyid="1839" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">
	</div>
	<div class="coinmarketcap-currency-widget" data-currencyid="74" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">
	</div>

</div>



<h6 class="mt-3">Realtime Forex</h6>
<div class="div-card">

	   <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
  {
  "width": "100%",
  "height": "100%",
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "CNY"
  ],
  "isTransparent": true,
  "colorTheme": "dark",
  "locale": "ms_MY"
}
  </script>
</div>
<!-- TradingView Widget END -->

</div>
			
 

<?php if($db->config("appdownload") == 1){ ?>        
                    <div align="center" style="margin-top:30px;"><a href="<?php echo $db->config("applinkdownload1");?>"><img src="images/app3.png" alt="app" style="width:180px;"></a></div>
                    <?php } ?>  


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
<?php ob_flush(); ?>