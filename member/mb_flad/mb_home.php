<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
   <div class="container-main-div  pb-5">
       
    <?php if($db->config("tracker_forex") == 1){ ?>
			<script src="https://public.bnbstatic.com/unpkg/growth-widget/cryptoCurrencyWidget@0.0.9.min.js" ></script>
<div class="binance-widget-marquee" data-cmc-ids="1,1027,1839,3408,52,74,5426,3890,5805,7083,2010,6636" data-theme="dark" data-transparent="true" data-locale="en" data-powered-by="Powered by" data-disclaimer="Disclaimer" >
</div>
<?php } ?>


<div class="homeflex-depo" align="left">
	<a class="homeflex-item" href="index.php?go=deposit"><img src="../assets_landing/img/deposit.svg">Deposit</a>
	<a class="homeflex-item" href="index.php?go=withdraw"><img src="../assets_landing/img/withdrawal.svg" width="20" height="20">Withdraw</a>
	<a class="homeflex-item" href="index.php?go=profile"><img src="../assets_landing/img/profile.svg">Profile</a>
</div>



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



<?php
$results = $_GET['result'];
$mine = $_GET['min'];
$byye = $_GET['biy'];
if($results == "insufficient_walet") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your Wallet balance is insufficient. Max Stake is ".$_GET['tc'].".</div>";
}
?>
  
<?php
if(isset($_GET['result'])&&$_GET['result']=="min_stake"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Min. stake amount is ".rupiahx($_GET['mn']).".</div>";
}
?>
<?php
if(isset($_GET['result'])&&$_GET['result']=="max_stake"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Max. stake amount is ".rupiahx($_GET['mx']).".</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="success"){
if(isset($_GET["co"])){ $co = $_GET["co"]; }
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Add Stake ".$co." successfully created.</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="no_pin"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_NO_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_pin"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_WRONG_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_lock"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_BLOCK_PIN."</div>";
}
?>  

 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_off"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_OFF_PIN."</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="amount"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Amount Package must be filled!</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="errors"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>This transaction already submit before!</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="no_pass"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your membership is not valid, please contact administrator.</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_pass"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Wrong password</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="errors_max"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Max stake is ".$maksinvest." stake per days.</div>";
}
?>
		<?php
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Wrong Captcha!</div>";
}
?>	

  <?php
$results = $_GET['result'];
if($results == "error") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".$LANG["tctnotfnd"]."</div>";
}
?>

         <?php
$results = $_GET['result'];
if($results == "wrong_auth") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You're enable two factor authentication at your account, Please enter your google authenticator six-digit code!</div>";
}
?>       
      

<?php      
$initiale = substr(str_shuffle(str_repeat("ABCEFGHIJKLMNPRSTUVWXYZ", 36)), 6, 2);
$stkode = strtotime(date("Y-m-d H:i:s"));
$kodec = $initiale."".$stkode;
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);




?>


        

<script>
		function confirmActionaddinvest(){
      var confirmed = confirm("You not have <?php echo $currencye; ?> Balance! Please Upgrade your membership");
      return confirmed;
}
</script>

<script>
		function confirmActionaddinvestx(){
      var confirmed = confirm("You not have <?php echo $currencye; ?> Balance! Please Add <?php echo $currencye; ?> Balance.");
      return confirmed;
}
</script>

<script>
		function confirmActionbuyy(){
      var confirmed = confirm("Buy Now?");
      return confirmed;
}
</script>
<script>
		function confirmActionsell(){
      var confirmed = confirm("Sell Now?");
      return confirmed;
}
</script>
                        <script type="text/javascript">
         
                            function isNumberKey(evt, obj) {
         
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                var value = obj.value;
                                var dotcontains = value.indexOf(".") != -1;
                                if (dotcontains)
                                    if (charCode == 46) return false;
                                if (charCode == 46) return true;
                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                    return false;
                                return true;
                            }
         

         
                        </script>


<br />
 <form method="POST" action="set_bet.php" accept-charset="UTF-8" id="form-B" class="form-inline">
<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>" readonly="readonly"/>
<input type="hidden" id="user" name="user" value="<?php echo $user_session; ?>" readonly="readonly"/> 
<input type="hidden" id="sendnow" name="sendnow" value="" readonly="readonly"/> 
 <?php  if($_GET['cr'] == "ethbtc"){
			 echo "<input type='hidden' name='sysmarket' value='ethbtc' readonly='readonly'/>";
		 }else if($_GET['cr'] == "bnbbtc"){
			 echo "<input type='hidden' name='sysmarket' value='bnbbtc' readonly='readonly'/>";
		 }else if($_GET['cr'] == "ltcbtc"){
			 echo "<input type='hidden' name='sysmarket' value='ltcbtc' readonly='readonly'/>";
		 }else if($_GET['cr'] == "snteth"){
			 echo "<input type='hidden' name='sysmarket' value='snteth' readonly='readonly'/>";
		 }else if($_GET['cr'] == "bnteth"){
			 echo "<input type='hidden' name='sysmarket' value='bnteth' readonly='readonly'/>";
		 }else if($_GET['cr'] == "btcusdt"){
			 echo "<input type='hidden' name='sysmarket' value='btcusdt' readonly='readonly'/>";
		 }else if($_GET['cr'] == "ethusdt"){
			 echo "<input type='hidden' name='sysmarket' value='ethusdt' readonly='readonly'/>";
		 }else if($_GET['cr'] == "dashbtc"){
			 echo "<input type='hidden' name='sysmarket' value='dashbtc' readonly='readonly'/>";
		 }else if($_GET['cr'] == "dasheth"){
			 echo "<input type='hidden' name='sysmarket' value='dasheth' readonly='readonly'/>";
		 }else if($_GET['cr'] == "xrpbtc"){
			 echo "<input type='hidden' name='sysmarket' value='xrpbtc' readonly='readonly'/>";
		 }else if($_GET['cr'] == "xrpeth"){
			 echo "<input type='hidden' name='sysmarket' value='xrpeth' readonly='readonly'/>";
			 
		
		 }else if($_GET['cr'] == "bnbusdt"){
			 echo "<input type='hidden' name='sysmarket' value='bnbusdt' readonly='readonly'/>";
		 }else if($_GET['cr'] == "bcceth"){
			 echo "<input type='hidden' name='sysmarket' value='bcceth' readonly='readonly'/>";
		 }else if($_GET['cr'] == "bccusdt"){
			 echo "<input type='hidden' name='sysmarket' value='bccusdt' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "bccbnb"){
			 echo "<input type='hidden' name='sysmarket' value='bccbnb' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "ltcusdt"){
			 echo "<input type='hidden' name='sysmarket' value='ltcusdt' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "ltcbnb"){
			 echo "<input type='hidden' name='sysmarket' value='ltcbnb' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "adabtc"){
			 echo "<input type='hidden' name='sysmarket' value='adabtc' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "adaeth"){
			 echo "<input type='hidden' name='sysmarket' value='adaeth' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "wavesbnb"){
			 echo "<input type='hidden' name='sysmarket' value='wavesbnb' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "atombnb"){
			 echo "<input type='hidden' name='sysmarket' value='atombnb' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "atombtc"){
			 echo "<input type='hidden' name='sysmarket' value='atombtc' readonly='readonly'/>";	 
		 }else if($_GET['cr'] == "dogebtc"){
			 echo "<input type='hidden' name='sysmarket' value='dogebtc' readonly='readonly'/>";		 
		 }else if($_GET['cr'] == "dogeusdt"){
			 echo "<input type='hidden' name='sysmarket' value='dogeusdt' readonly='readonly'/>";	 	 
		 }else if($_GET['cr'] == "adausdt"){
			 echo "<input type='hidden' name='sysmarket' value='adausdt' readonly='readonly'/>";	 
			 
			 
		 }else{ 
			 echo "<input type='hidden' name='sysmarket' value='ethbtc' readonly='readonly'/>";
		 } ?>                                              

					
						
                             <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><?php echo $currencye; ?></div>
        </div>
       <input type="text" style="width:120px;" class="form-control" name="amount" id="inlineFormInputGroupUsername2" placeholder="Stake Amount" required='required' value="<?php echo $minpro; ?>" min="<?php echo $minpro; ?>" onkeypress="return isNumberKey(event,this)">
      </div>
                            
                            
                            
                            <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
        </div>

           <select id="gotime" name="gotime" class="form-control" required='required'>
								<?php if($seconds_10 == 1){ ?><option value="10s">10 Second</option><?php } ?>
								<?php if($seconds_30 == 1){ ?><option value="30s">30 Second</option><?php } ?>
								<?php if($minutes_1 == 1){ ?><option value="1m">1 Minutes</option><?php } ?>
								<?php if($minutes_2 == 1){ ?><option value="2m">2 Minutes</option><?php } ?>
								<?php if($minutes_3 == 1){ ?><option value="3m">3 Minutes</option><?php } ?>
                                <?php if($minutes_5 == 1){ ?><option value="5m">5 Minutes</option><?php } ?>
                                <?php if($minutes_10 == 1){ ?><option value="10m">10 Minutes</option><?php } ?>
                                <?php if($minutes_30 == 1){ ?><option value="30m">30 Minutes</option><?php } ?>
								<?php if($hours_1 == 1){ ?><option value="1h">1 Hour</option><?php } ?>
								<?php if($hours_2 == 1){ ?><option value="2h">2 Hour</option><?php } ?>
								<?php if($hours_3 == 1){ ?><option value="3h">3 Hour</option><?php } ?>
								<?php if($hours_6 == 1){ ?><option value="6h">6 Hour</option><?php } ?>
								<?php if($hours_12 == 1){ ?><option value="12h">12 Hour</option><?php } ?>
								<?php if($days_1 == 1){ ?><option value="1d">1 Days</option><?php } ?>
								<?php if($days_3 == 1){ ?><option value="3d">3 Days</option><?php } ?>
								<?php if($days_6 == 1){ ?><option value="6d">3 Days</option><?php } ?>
								<?php if($weeks_1 == 1){ ?><option value="1w">1 Week</option><?php } ?>
								<?php if($months_1 == 1){ ?><option value="1mo">1 Month</option><?php } ?>
                            </select>
                            </div>
                            
                        
                            

               
               <?php if($usepins == 1){ ?>
                 <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
        </div>
         <input type="password" class="form-control" placeholder="Enter Secure PIN" name="pincode" style="background:#161616; border:none;">
            </div>   
                         <?php } ?>     
 
 
         
          <?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
          <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-qrcode" aria-hidden="true"></i></div>
        </div>
         <input type="text" class="form-control" placeholder="2FA Google Authenticator" name="one_time_password">
            </div> 
          <?php } ?>

         
 
          <div>
        

<div class="btn-group w-100 mt-2">
<?php  if($db->dataku("free", $user_session) == 1 && $freetradings == 0){?>


           <button class='btn btn-dark btn-lg' type='button' onclick='return confirmActionaddinvest()'><i class='fa fa-chevron-circle-up'></i>&nbsp;&nbsp;Buy</button>
             <button class='btn btn-danger btn-lg' type='button' onclick='return confirmActionaddinvest()'><i class='fa fa-chevron-circle-down'></i>&nbsp;&nbsp;Sell</button> 
                 
  <?php } else { ?>  
  
  
  
<?php  if(!$totalcwalete) {?>
  
             
         <button class='btn btn-dark btn-lg' type='button' onclick='return confirmActionaddinvestx()'><i class='fa fa-chevron-circle-up'></i>&nbsp;&nbsp;Buy</button>
             <button class='btn btn-danger btn-lg' type='button' onclick='return confirmActionaddinvestx()'><i class='fa fa-chevron-circle-down'></i>&nbsp;&nbsp;Sell</button>     
              
    
           
            <?php } else { ?>
             <button class='btn btn-dark btn-lg sendbuy' type='submit' onclick="return confirmActionbuyy()"><i class='fa fa-chevron-circle-up'></i>&nbsp;&nbsp;Buy</button>
             <button class='btn btn-danger btn-lg sendsell' type='submit' onclick="return confirmActionsell()"><i class='fa fa-chevron-circle-down'></i>&nbsp;&nbsp;Sell</button>
             <?php } ?>   

      <?php } ?>
      
</div>


          </div>

        </form>
        


 <br />
 
    <script src="tema1/js/jquery-min.js"></script>                
<div id="dive_element"></div>     







<h6 class="mt-3">History</h6>
<div style="height:350px; overflow:auto; margin-bottom:30px;">
  <table id="examplex" width="100%" style="font-size:14px;">

                        <tbody>
                       
                       
                      
                       
                       
                        </tbody>
                    </table>
</div>

<script type="text/javascript">
<!--
var interval = null;
var intervalplay = null;



function loadHistoryPlay(limit){
	
			$.ajax({
			type: 'GET',
			url: 'get_history2.php',
			 dataType: "html",
			data: { 
				'limit': limit, 
			},
			success: function(response){
				
					//console.log(response);	
				if (limit == 1){
					var data=$(response).text();
					var beforekode = $("#examplex > tbody > tr:first > td")[2];
					//console.log($(beforekode).text().trim()+" "+data);
					var n = (data).indexOf($(beforekode).text().trim());
					
					if (n > -1){
						return;
					}
					$("#examplex > tbody > tr:first").before(response);
				}else{
					$("#examplex > tbody").html(response);
				}
				
				setTimeout(function() {
					$('#examplex > tbody > tr:first').addClass('blink-win');
				
						setTimeout(function() {$('#examplex > tbody > tr:first').removeClass('blink-win')}, 1000);
				}, 6);
				
				
				
			}
		});
}

$(document).ready(function() {	

setInterval(function(){ loadHistoryPlay(6); }, 1000);


		$(".sendbuy").click(function(){
		$("#sendnow").val("buy");

	});



	$(".sendsell").click(function(){
		$("#sendnow").val("sell");
	});
		
	
	
		
		
	$(".playnow").click(function(){
		var n = ($(".playnow").html()).indexOf("Play");
			if (n > -1){
			$(".playnow").html("<i class='fa fa-stop'></i> Stop Now");
			interval = setInterval(setBet,1000);
		}else{
			clearInterval(interval);
			$(".playnow").html("<i class='fa fa-play'></i> Play Now");
			
		}
		//
	});
	
  //alert( "ready!" );	
	loadHistory(10);
});

var isproses = false;
function setBet(){	
	if (!isproses){
		sendBet();
	}
}


function loadHistory(limit){		
		$.ajax({
			type: 'GET',
			url: 'get_transaksi.php',
			 dataType: "html",
			data: { 
				'limit': limit, 
			},
			success: function(response){
				//console.log(response);	
				if (limit == 1){
					var data=$(response).text();
					var beforekode = $("#table-transaksi > tbody > tr:first > td")[1];
					//console.log($(beforekode).text().trim()+" "+data);
					var n = (data).indexOf($(beforekode).text().trim());
					
					if (n > -1){
						return;
					}
					$("#table-transaksi > tbody > tr:first").before(response);
				}else{
					$("#table-transaksi > tbody").html(response);
				}
				
				setTimeout(function() {
					$('#table-transaksi > tbody > tr:first').addClass('blink-win');
				
						setTimeout(function() {$('#table-transaksi > tbody > tr:first').removeClass('blink-win')}, 500);
				}, 10);
		 
			}
			
		});
		
		loadHistoryPlay(limit);
			$.ajax({
			type: 'GET',
			url: 'get_sum.php',
			dataType: "json",
			data: { 
				'limit': limit, 
			},
			success: function(response){
				//console.log(response);	
			//	console.log(response);	   		
					
					
		     var obj = response;//JSON.parse();
			  // console.log(obj);
              //  alert(obj.result);			
			  //	console.log(obj);
			   if (obj.result == "success"){
				   
				      	$(".total-win").html(obj.win);
						$(".total-lose").html(obj.lose);
						$(".total-balance").html(obj.balance);
			   }
			}
		});
		
	}
		
$("#form-B").submit(function(e){
	isproses = true;
	e.preventDefault();
    sendBet();
	 return false;

});

function sendBet(){
	var form = $("#form-B");
	
    var action = form.attr('action');
    var data = form.serialize();
	
	
    $.ajax({
       type: 'POST',
       url: action,
       data: data,
	   dataType: "json",
       success: function (response) {
		   console.log(response);
		   
		   		
					
					
		     var obj = response;//JSON.parse();
			  // console.log(obj);
              //  alert(obj.result);
				
		   if (obj.result == "success"){
			  alert("success");
		   }else if (obj.result == "amount"){
				alert("Amount Error");
		   }else if (obj.result == "insufficient"){
				alert("Insufficient Wallet Balance");
		   }else if (obj.result == "min_stake"){
				alert("Min Stake is <?php echo rupiah($minpro);?>");
		   }else if (obj.result == "max_stake"){
				alert("Min Stake is <?php echo rupiah($maxpro);?>");
		   }else if (obj.result == "wrong_auth"){
				alert("Enter google authenticator six-digit code!");
		   }else if (obj.result == "wrong_pin"){
				alert("Wrong PIN!");
		   }else if (obj.result == "no_pin"){
				alert("Enter PIN!");
		   }else if (obj.result == "lock_pin"){
				alert("PIN Locked!");
		   }else if (obj.result == "off_pin"){
				alert("PIN Off!");
		   }
		   else{
				alert("Error");
		   }
		   
		   isproses = false;
           loadHistory(1);
        }
    });
}
	

</script>






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
			
            
            
            
            
            
            
            
            
 
</div>
</div>