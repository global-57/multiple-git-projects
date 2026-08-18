<?php
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
<?php
if (empty($_SESSION["valid_admin"])){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";
exit();}
?>
<?php
	/* 
	############################[  <about> ] #######################
		S Name   ::       Inv-X Primadesain
		Update   ::       2013 © Primadesain.Com
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
<script type="text/javascript">
<!--
function confirmation2(noid) {
	var answer = confirm("Yakin mau menghapus username default?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=configuration&page=delete2&no=" + noid;
		
	}
	
}
//-->
</script>
<script type="text/javascript">
<!--
function confirmation2(noid) {
	var answer = confirm("Ubah Sistem Pendaftaran?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=configuration&page=delete3&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Konfigurasi Sistem </h2>
<?
$db->select("kursbtc, kursusd, minpro, maxpro, vwd, profits, kursdoge, kurseth, kursltc, kurseur, kursgbp, kursjpy, freebalance, kursidr_wd, kursbtc_wd, kursltc_wd, kursdoge_wd, kursbcd, kursbch, kursbtg, kursdash, kursxlm, kursxrp, kursxau, kursgbpjpy, kursusdcad, kursaud, kursgbpus, kurseurjpy, kursbnb, maxinvest, tradings, cryptopay, freetradings, manualrate, forexe, cryptoe, deffstatus, kursbtc_win, kursbtc_lose, kursdoge_lose, kursdoge_win, kurseth_lose, kurseth_win, kursbch_win, kursbch_lose, kursbcd_lose, kursbcd_win, kursltc_win, kursltc_lose, kursbtg_win, kursbtg_lose, kursdash_win, kursdash_lose, kursxlm_win, kursxlm_lose, kursxrp_win, kursxrp_lose, kursbnb_win, kursbnb_lose, kursusdcad_win, kursusdcad_lose, kursaud_win, kursaud_lose, kursgbpus_win, kursgbpus_lose, kursjpy_win, kursjpy_lose, kursgbp_win, kursgbp_lose, kurseur_win, kurseur_lose, kursxau_lose, kursxau_win, kurseurjpy_win, kurseurjpy_lose, kursgbpjpy_lose, kursgbpjpy_win, userate, ethbtc_rate, ethbtc_rate_win, ethbtc_rate_loss, bnbbtc_rate, bnbbtc_rate_win, bnbbtc_rate_loss, ltcbtc_rate, ltcbtc_rate_win, ltcbtc_rate_loss, snteth_rate, snteth_rate_win, snteth_rate_loss, bnteth_rate, bnteth_rate_win, bnteth_rate_loss, btcusdt_rate, btcusdt_rate_win, btcusdt_rate_loss, ethusdt_rate, ethusdt_rate_win, ethusdt_rate_loss, dashbtc_rate, dashbtc_rate_win, dashbtc_rate_loss, dasheth_rate, dasheth_rate_win, dasheth_rate_loss, xrpbtc_rate, xrpbtc_rate_win, xrpbtc_rate_loss, xrpeth_rate, xrpeth_rate_win, xrpeth_rate_loss, bnbusdt_rate, bnbusdt_rate_win, bnbusdt_rate_loss, bcceth_rate, bcceth_rate_win, bcceth_rate_loss, bccusdt_rate, bccusdt_rate_win, bccusdt_rate_loss, bccbnb_rate, bccbnb_rate_win, bccbnb_rate_loss, ltcusdt_rate, ltcusdt_rate_win, ltcusdt_rate_loss, ltcbnb_rate, ltcbnb_rate_win, ltcbnb_rate_loss, adabtc_rate, adabtc_rate_win, adabtc_rate_loss, adaeth_rate, adaeth_rate_win, adaeth_rate_loss, wavesbnb_rate, wavesbnb_rate_win, wavesbnb_rate_loss, atombnb_rate, atombnb_rate_win, atombnb_rate_loss, atombtc_rate, atombtc_rate_win, atombtc_rate_loss, dogebtc_rate, dogebtc_rate_win, dogebtc_rate_loss, dogeusdt_rate, dogeusdt_rate_win, dogeusdt_rate_loss, adausdt_rate, adausdt_rate_win, adausdt_rate_loss, tradeonline, totreg", "configurationx", "id=1");
	
$ratestatus = explode("|", $db->result(0, "userate"));

?>
<div align="center">
 <div class="form_style" style="width:70%" align="center">
  <div align="center"><strong><a href="?go=configuration&sess=web"><button class="primagreen" type="button">Konfigurasi Web</button></a>&nbsp;<a href="?go=configuration&sess=admin"><button class="primagreen" type="button">Konfigurasi Admin</button></a>&nbsp;<a href="?go=configuration&sess=system"><button class="primagreen" type="button">Konfigurasi System</button></a>&nbsp;<a href="?go=configpayment"><button class="primagreen" type="button">Konfigurasi Payment</button></a>&nbsp;<a href="?go=configtrade"><button class="primagreen" type="button">Konfigurasi Trading</button></a></strong></div>
  <p>&nbsp;</p>


<?
if(isset($_POST['submit'])){
$no = $_POST['no'];


$selectimes = $_POST['seconds10']."|".$_POST['seconds30']."|".$_POST['minutes1']."|".$_POST['minutes2']."|".$_POST['minutes3']."|".$_POST['minutes5']."|".$_POST['minutes10']."|".$_POST['minutes30']."|".$_POST['hours1']."|".$_POST['hours2']."|".$_POST['hours3']."|".$_POST['hours6']."|".$_POST['hours12']."|".$_POST['days1']."|".$_POST['days3']."|".$_POST['days6']."|".$_POST['weeks1']."|".$_POST['month1'];

 $rateaktive = $_POST['ethbtc']."|".$_POST['bnbbtc']."|".$_POST['ltcbtc']."|".$_POST['snteth']."|".$_POST['bnteth']."|".$_POST['btcusdt']."|".$_POST['ethusdt']."|".$_POST['dashbtc']."|".$_POST['dasheth']."|".$_POST['xrpbtc']."|".$_POST['xrpeth']."|".$_POST['bnbusdt']."|".$_POST['bcceth']."|".$_POST['bccusdt']."|".$_POST['bccbnb']."|".$_POST['ltcusdt']."|".$_POST['ltcbnb']."|".$_POST['adabtc']."|".$_POST['adaeth']."|".$_POST['wavesbnb']."|".$_POST['atombnb']."|".$_POST['atombtc']."|".$_POST['dogebtc']."|".$_POST['dogeusdt']."|".$_POST['adausdt'];

		
		$db->update("configurationx", "kursbtc='".mysql_real_escape_string($_POST['kursbtc'])."', kursusd='".mysql_real_escape_string($_POST['kursusd'])."', minpro='".$_POST['minpro']."', maxpro='".$_POST['maxpro']."', vwd='".$_POST['vwd']."', profits='".$_POST['profits']."', kursdoge='".$_POST['kursdoge']."', kurseth='".$_POST['kurseth']."', kursltc='".$_POST['kursltc']."', kurseur='".$_POST['kurseur']."', kursgbp='".$_POST['kursgbp']."', kursjpy='".$_POST['kursjpy']."', freebalance='".$_POST['freebalance']."', kursidr_wd='".mysql_real_escape_string($_POST['kursidr_wd'])."', kursbtc_wd='".mysql_real_escape_string($_POST['kursbtc_wd'])."', kursltc_wd='".mysql_real_escape_string($_POST['kursltc_wd'])."', kursdoge_wd='".mysql_real_escape_string($_POST['kursdoge_wd'])."', kursbcd='".mysql_real_escape_string($_POST['kursbcd'])."', kursbch='".mysql_real_escape_string($_POST['kursbch'])."', kursbtg='".mysql_real_escape_string($_POST['kursbtg'])."', kursdash='".mysql_real_escape_string($_POST['kursdash'])."', kursxlm='".mysql_real_escape_string($_POST['kursxlm'])."', kursxrp='".mysql_real_escape_string($_POST['kursxrp'])."', kursxau='".mysql_real_escape_string($_POST['kursxau'])."', kursgbpjpy='".mysql_real_escape_string($_POST['kursgbpjpy'])."', kursusdcad='".mysql_real_escape_string($_POST['kursusdcad'])."', kursaud='".mysql_real_escape_string($_POST['kursaud'])."', kursgbpus='".mysql_real_escape_string($_POST['kursgbpus'])."', kurseurjpy='".mysql_real_escape_string($_POST['kurseurjpy'])."', kursbnb='".mysql_real_escape_string($_POST['kursbnb'])."', maxinvest='".mysql_real_escape_string($_POST['maxinvest'])."', tradings='".$_POST['tradings']."', freetradings='".mysql_real_escape_string($_POST['freetradings'])."', manualrate='".mysql_real_escape_string($_POST['manualrate'])."', cryptoe='".mysql_real_escape_string($_POST['cryptoe'])."', forexe='".mysql_real_escape_string($_POST['forexe'])."', deffstatus='".mysql_real_escape_string($_POST['deffstatus'])."', kursbtc_win='".mysql_real_escape_string($_POST['kursbtc_win'])."', kursbtc_lose='".mysql_real_escape_string($_POST['kursbtc_lose'])."', kursdoge_lose='".mysql_real_escape_string($_POST['kursdoge_lose'])."', kursdoge_win='".mysql_real_escape_string($_POST['kursdoge_win'])."', kurseth_lose='".mysql_real_escape_string($_POST['kurseth_lose'])."', kurseth_win='".mysql_real_escape_string($_POST['kurseth_win'])."', kursbch_win='".mysql_real_escape_string($_POST['kursbch_win'])."', kursbch_lose='".mysql_real_escape_string($_POST['kursbch_lose'])."', kursbcd_lose='".mysql_real_escape_string($_POST['kursbcd_lose'])."', kursbcd_win='".mysql_real_escape_string($_POST['kursbcd_win'])."', kursltc_win='".mysql_real_escape_string($_POST['kursltc_win'])."', kursltc_lose='".mysql_real_escape_string($_POST['kursltc_lose'])."', kursbtg_win='".mysql_real_escape_string($_POST['kursbtg_win'])."', kursbtg_lose='".mysql_real_escape_string($_POST['kursbtg_lose'])."', kursdash_win='".mysql_real_escape_string($_POST['kursdash_win'])."', kursdash_lose='".mysql_real_escape_string($_POST['kursdash_lose'])."', kursxlm_win='".mysql_real_escape_string($_POST['kursxlm_win'])."', kursxlm_lose='".mysql_real_escape_string($_POST['kursxlm_lose'])."', kursxrp_win='".mysql_real_escape_string($_POST['kursxrp_win'])."', kursxrp_lose='".mysql_real_escape_string($_POST['kursxrp_lose'])."', kursbnb_win='".mysql_real_escape_string($_POST['kursbnb_win'])."', kursbnb_lose='".mysql_real_escape_string($_POST['kursbnb_lose'])."', kursusdcad_win='".mysql_real_escape_string($_POST['kursusdcad_win'])."', kursusdcad_lose='".mysql_real_escape_string($_POST['kursusdcad_lose'])."', kursaud_win='".mysql_real_escape_string($_POST['kursaud_win'])."', kursaud_lose='".mysql_real_escape_string($_POST['kursaud_lose'])."', kursgbpus_win='".mysql_real_escape_string($_POST['kursgbpus_win'])."', kursgbpus_lose='".mysql_real_escape_string($_POST['kursgbpus_lose'])."', kursjpy_win='".mysql_real_escape_string($_POST['kursjpy_win'])."', kursjpy_lose='".mysql_real_escape_string($_POST['kursjpy_lose'])."', kursgbp_win='".mysql_real_escape_string($_POST['kursgbp_win'])."', kursgbp_lose='".mysql_real_escape_string($_POST['kursgbp_lose'])."', kurseur_win='".mysql_real_escape_string($_POST['kurseur_win'])."', kurseur_lose='".mysql_real_escape_string($_POST['kurseur_lose'])."', kursxau_lose='".mysql_real_escape_string($_POST['kursxau_lose'])."', kursxau_win='".mysql_real_escape_string($_POST['kursxau_win'])."', kurseurjpy_win='".mysql_real_escape_string($_POST['kurseurjpy_win'])."', kurseurjpy_lose='".mysql_real_escape_string($_POST['kurseurjpy_lose'])."', kursgbpjpy_lose='".mysql_real_escape_string($_POST['kursgbpjpy_lose'])."', kursgbpjpy_win='".mysql_real_escape_string($_POST['kursgbpjpy_win'])."', stake_time='".$selectimes."', userate='".$rateaktive."', ethbtc_rate='".mysql_real_escape_string($_POST['ethbtc_rate'])."', ethbtc_rate_win='".mysql_real_escape_string($_POST['ethbtc_rate_win'])."', ethbtc_rate_loss='".mysql_real_escape_string($_POST['ethbtc_rate_loss'])."', bnbbtc_rate='".mysql_real_escape_string($_POST['bnbbtc_rate'])."', bnbbtc_rate_win='".mysql_real_escape_string($_POST['bnbbtc_rate_win'])."', bnbbtc_rate_loss='".mysql_real_escape_string($_POST['bnbbtc_rate_loss'])."', ltcbtc_rate='".mysql_real_escape_string($_POST['ltcbtc_rate'])."', ltcbtc_rate_win='".mysql_real_escape_string($_POST['ltcbtc_rate_win'])."', ltcbtc_rate_loss='".mysql_real_escape_string($_POST['ltcbtc_rate_loss'])."', snteth_rate='".mysql_real_escape_string($_POST['snteth_rate'])."'	, snteth_rate_win='".mysql_real_escape_string($_POST['snteth_rate_win'])."', snteth_rate_loss='".mysql_real_escape_string($_POST['snteth_rate_loss'])."', bnteth_rate='".mysql_real_escape_string($_POST['bnteth_rate'])."', bnteth_rate_win='".mysql_real_escape_string($_POST['bnteth_rate_win'])."', bnteth_rate_loss='".mysql_real_escape_string($_POST['bnteth_rate_loss'])."', btcusdt_rate='".mysql_real_escape_string($_POST['btcusdt_rate'])."', btcusdt_rate_win='".mysql_real_escape_string($_POST['btcusdt_rate_win'])."', btcusdt_rate_loss='".mysql_real_escape_string($_POST['btcusdt_rate_loss'])."', ethusdt_rate='".mysql_real_escape_string($_POST['ethusdt_rate'])."', ethusdt_rate_win='".mysql_real_escape_string($_POST['ethusdt_rate_win'])."', ethusdt_rate_loss='".mysql_real_escape_string($_POST['ethusdt_rate_loss'])."', dashbtc_rate='".mysql_real_escape_string($_POST['dashbtc_rate'])."', dashbtc_rate_win='".mysql_real_escape_string($_POST['dashbtc_rate_win'])."', dashbtc_rate_loss='".mysql_real_escape_string($_POST['dashbtc_rate_loss'])."', dasheth_rate='".mysql_real_escape_string($_POST['dasheth_rate'])."', dasheth_rate_win='".mysql_real_escape_string($_POST['dasheth_rate_win'])."', dasheth_rate_loss='".mysql_real_escape_string($_POST['dasheth_rate_loss'])."', xrpbtc_rate='".mysql_real_escape_string($_POST['xrpbtc_rate'])."', xrpbtc_rate_win='".mysql_real_escape_string($_POST['xrpbtc_rate_win'])."', xrpbtc_rate_loss='".mysql_real_escape_string($_POST['xrpbtc_rate_loss'])."', xrpeth_rate='".mysql_real_escape_string($_POST['xrpeth_rate'])."', xrpeth_rate_win='".mysql_real_escape_string($_POST['xrpeth_rate_win'])."', xrpeth_rate_loss='".mysql_real_escape_string($_POST['xrpeth_rate_loss'])."', bnbusdt_rate='".mysql_real_escape_string($_POST['bnbusdt_rate'])."', bnbusdt_rate_win='".mysql_real_escape_string($_POST['bnbusdt_rate_win'])."', bnbusdt_rate_loss='".mysql_real_escape_string($_POST['bnbusdt_rate_loss'])."', bcceth_rate='".mysql_real_escape_string($_POST['bcceth_rate'])."', bcceth_rate_win='".mysql_real_escape_string($_POST['bcceth_rate_win'])."', bcceth_rate_loss='".mysql_real_escape_string($_POST['bcceth_rate_loss'])."', bccusdt_rate='".mysql_real_escape_string($_POST['bccusdt_rate'])."', bccusdt_rate_win='".mysql_real_escape_string($_POST['bccusdt_rate_win'])."', bccusdt_rate_loss='".mysql_real_escape_string($_POST['bccusdt_rate_loss'])."', bccbnb_rate='".mysql_real_escape_string($_POST['bccbnb_rate'])."', bccbnb_rate_win='".mysql_real_escape_string($_POST['bccbnb_rate_win'])."', bccbnb_rate_loss='".mysql_real_escape_string($_POST['bccbnb_rate_loss'])."', ltcusdt_rate='".mysql_real_escape_string($_POST['ltcusdt_rate'])."', ltcusdt_rate_win='".mysql_real_escape_string($_POST['ltcusdt_rate_win'])."', ltcusdt_rate_loss='".mysql_real_escape_string($_POST['ltcusdt_rate_loss'])."', ltcbnb_rate='".mysql_real_escape_string($_POST['ltcbnb_rate'])."', ltcbnb_rate_win='".mysql_real_escape_string($_POST['ltcbnb_rate_win'])."', ltcbnb_rate_loss='".mysql_real_escape_string($_POST['ltcbnb_rate_loss'])."', adabtc_rate='".mysql_real_escape_string($_POST['adabtc_rate'])."', adabtc_rate_win='".mysql_real_escape_string($_POST['adabtc_rate_win'])."', adabtc_rate_loss='".mysql_real_escape_string($_POST['adabtc_rate_loss'])."', adaeth_rate='".mysql_real_escape_string($_POST['adaeth_rate'])."', adaeth_rate_win='".mysql_real_escape_string($_POST['adaeth_rate_win'])."', adaeth_rate_loss='".mysql_real_escape_string($_POST['adaeth_rate_loss'])."', wavesbnb_rate='".mysql_real_escape_string($_POST['wavesbnb_rate'])."', wavesbnb_rate_win='".mysql_real_escape_string($_POST['wavesbnb_rate_win'])."', wavesbnb_rate_loss='".mysql_real_escape_string($_POST['wavesbnb_rate_loss'])."', atombnb_rate='".mysql_real_escape_string($_POST['atombnb_rate'])."', atombnb_rate_win='".mysql_real_escape_string($_POST['atombnb_rate_win'])."', atombnb_rate_loss='".mysql_real_escape_string($_POST['atombnb_rate_loss'])."', atombtc_rate='".mysql_real_escape_string($_POST['atombtc_rate'])."', atombtc_rate_win='".mysql_real_escape_string($_POST['atombtc_rate_win'])."', atombtc_rate_loss='".mysql_real_escape_string($_POST['atombtc_rate_loss'])."', dogebtc_rate='".mysql_real_escape_string($_POST['dogebtc_rate'])."', dogebtc_rate_win='".mysql_real_escape_string($_POST['dogebtc_rate_win'])."', dogebtc_rate_loss='".mysql_real_escape_string($_POST['dogebtc_rate_loss'])."', dogeusdt_rate='".mysql_real_escape_string($_POST['dogeusdt_rate'])."', dogeusdt_rate_win='".mysql_real_escape_string($_POST['dogeusdt_rate_win'])."', dogeusdt_rate_loss='".mysql_real_escape_string($_POST['dogeusdt_rate_loss'])."', adausdt_rate='".mysql_real_escape_string($_POST['adausdt_rate'])."', adausdt_rate_win='".mysql_real_escape_string($_POST['adausdt_rate_win'])."', adausdt_rate_loss='".mysql_real_escape_string($_POST['adausdt_rate_loss'])."', tradeonline='".mysql_real_escape_string($_POST['tradeonline'])."', totreg='".mysql_real_escape_string($_POST['totreg'])."'", "id='$no'");
		
			
//if($_POST['hrgghze1'] <> $hrg_ghze[0]){	
//	$db->update("dataewalet3", "cashback='".$_POST['hrgghze1']."'", "paket='1'");	
//	$db->update("deposit", "cashback='".$_POST['hrgghze1']."'", "plan='1'");	
//	}
//if($_POST['prinvest1'] <> $prode[0]){	
//	$db->update("dataewalet3", "siklus='".$_POST['prinvest1']."'", "paket='1'");	
//	$db->update("deposit", "sc='".$_POST['prinvest1']."'", "plan='1'");	
//	}    
//if($_POST['forex_profit1'] <> $profit[0]){	
//	$db->update("dataewalet3", "profit='".$_POST['forex_profit1']."'", "paket='1'");	
//	$db->update("deposit", "profit='".$_POST['forex_profit1']."'", "plan='1'");	
//	}    		
   

			 header("location: ?go=configtrade&result=success");
	exit;
	
	
	
} else if (isset($_GET['update']) && $_GET['update'] == "1") {
if(isset($_GET["curr"])){ $curr = $_GET["curr"]; }
	
	if($curr=="kurseur"){
	$geteurusd = file_get_contents('https://www.cryptonator.com/api/ticker/eur-usd');
$my_eurusd = json_decode($geteurusd, true);
$datageteurusd = $my_eurusd['ticker']["price"];
$db->update("configurationx", "kurseur='$datageteurusd'", "id='1'");
	}
		
		header("location: ?go=configtrade&result=successrate");	
	
	
	
	
	} else {
?>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Konfigurasi System Berhasil disimpan!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "successrate") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Rate berhasil di update</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "success_dell") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Paket Pendaftaran berhasil diubah!</div>";
}
?>

<form id="form" name="form" method="POST" action="">
  <table width="95%" border="0" align="center" cellpadding="4" cellspacing="1">
    

	<input name="tradeonline" type="hidden" id="tradeonline" value="1600" size="15" />
	<input name="totreg" type="hidden" id="totreg" value="600" size="15" />
	<input name="tradings" type="hidden" id="tradings" value="1" size="15" />
    
    

   <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>FREE ACCOUNT </strong></div></td>
    </tr>
 <tr>

    
     <?
			$freetradings = $db->result(0, "freetradings");
			if($freetradings == 1) {
			?>
	<tr> 
      <td align="right">Akun Free Trading :</td>
      <td colspan="6"> <input type="radio" name="freetradings" value="1" id="RadioGroup33_a0" checked="checked"/>
          Aktif
          <input type="radio" name="freetradings" value="0" id="RadioGroup33_a1" />
        Nonaktif </td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Akun Free Trading :</td>
      <td colspan="5"> <input type="radio" name="freetradings" value="1" id="RadioGroup43_a0" />
          Aktif
          <input type="radio" name="freetradings" value="0" id="RadioGroup43_a1" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
      <tr>
      <td width="185" align="right">Free Balance (Demo): </td> 
      <td colspan="5"><div align="left">
        <input name="freebalance" type="text" id="freebalance" value="<?= $db->result(0, "freebalance"); ?>" size="10"/> <?php echo $currencye; ?>
      </div></td>
    </tr>
	
  <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>SETTING </strong></div></td>
    </tr>
 <tr>
 
    
  <tr>
      <td width="185" align="right">Maks Stake Aktif: </td> 
      <td colspan="5"><div align="left">
        <input name="maxinvest" type="text" id="maxinvest" value="<?= $db->result(0, "maxinvest"); ?>" size="3"/>
      </div></td>
    </tr>
  <tr>
      <td width="185" align="right">Minimal Stake: </td> 
      <td colspan="5"><div align="left">
        <input name="minpro" type="text" id="minpro" value="<?= $db->result(0, "minpro"); ?>" size="20"/> <?php echo $currencye; ?>
      </div></td>
    </tr>
   
  <tr>
      <td width="185" align="right">Maksimal Stake: </td> 
      <td colspan="5"><div align="left">
        <input name="maxpro" type="text" id="maxpro" value="<?= $db->result(0, "maxpro"); ?>" size="20"/> <?php echo $currencye; ?>
      </div></td>
    </tr>
  <tr>
      <td width="185" align="right">Nilai WIN: </td> 
      <td colspan="5"><div align="left">
        <input name="profits" type="text" id="profits" value="<?= $db->result(0, "profits"); ?>" size="2"/> %&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Nilai Profit</i>
      </div></td>
    </tr>
  <tr>
      <td width="185" align="right">Nilai LOST: </td> 
      <td colspan="5"><div align="left">
        <input name="vwd" type="text" id="vwd" value="<?= $db->result(0, "vwd"); ?>" size="2"/> %&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Max 100%</i>
      </div></td>
    </tr>
    
      <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>TIME STAKE</strong></div></td>
    </tr>
      <? if($seconds_10 == 1) { ?>
	<tr> 
      <td align="right">10 Second :</td>
      <td colspan="5"> <input type="radio" name="seconds10" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="seconds10" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">10 Second :</td>
      <td colspan="5"> <input type="radio" name="seconds10" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="seconds10" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    
      <? if($seconds_30 == 1) { ?>
	<tr> 
      <td align="right">30 Second :</td>
      <td colspan="5"> <input type="radio" name="seconds30" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="seconds30" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">30 Second :</td>
      <td colspan="5"> <input type="radio" name="seconds30" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="seconds30" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    
     <? if($minutes_1 == 1) { ?>
	<tr> 
      <td align="right">1 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes1" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="minutes1" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">1 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes1" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="minutes1" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    <? if($minutes_2 == 1) { ?>
	<tr> 
      <td align="right">2 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes2" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="minutes2" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">2 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes2" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="minutes2" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    <? if($minutes_3 == 1) { ?>
	<tr> 
      <td align="right">3 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes3" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="minutes3" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">3 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes3" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="minutes3" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    <? if($minutes_5 == 1) { ?>
	<tr> 
      <td align="right">5 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes5" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="minutes5" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">5 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes5" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="minutes5" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    <? if($minutes_10 == 1) { ?>
	<tr> 
      <td align="right">10 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes10" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="minutes10" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">10 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes10" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="minutes10" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    <? if($minutes_30 == 1) { ?>
	<tr> 
      <td align="right">30 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes30" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="minutes30" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">30 Minutes :</td>
      <td colspan="5"> <input type="radio" name="minutes30" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="minutes30" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    <? if($hours_1 == 1) { ?>
	<tr> 
      <td align="right">1 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours1" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="hours1" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">1 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours1" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="hours1" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
      <? if($hours_2 == 1) { ?>
	<tr> 
      <td align="right">2 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours2" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="hours2" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">2 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours2" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="hours2" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
          <? if($hours_3 == 1) { ?>
	<tr> 
      <td align="right">3 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours3" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="hours3" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">3 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours3" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="hours3" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
          <? if($hours_6 == 1) { ?>
	<tr> 
      <td align="right">6 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours6" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="hours6" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">6 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours6" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="hours6" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
          <? if($hours_12 == 1) { ?>
	<tr> 
      <td align="right">12 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours12" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="hours12" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">12 Hour :</td>
      <td colspan="5"> <input type="radio" name="hours12" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="hours12" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
          <? if($days_1 == 1) { ?>
	<tr> 
      <td align="right">1 Day :</td>
      <td colspan="5"> <input type="radio" name="days1" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="days1" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">1 Day :</td>
      <td colspan="5"> <input type="radio" name="days1" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="days1" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
          <? if($days_3 == 1) { ?>
	<tr> 
      <td align="right">3 Day :</td>
      <td colspan="5"> <input type="radio" name="days3" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="days3" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">3 Day :</td>
      <td colspan="5"> <input type="radio" name="days3" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="days3" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
          <? if($days_6 == 1) { ?>
	<tr> 
      <td align="right">6 Day :</td>
      <td colspan="5"> <input type="radio" name="days6" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="days6" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">6 Day :</td>
      <td colspan="5"> <input type="radio" name="days6" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="days6" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
          <? if($weeks_1 == 1) { ?>
	<tr> 
      <td align="right">1 Week :</td>
      <td colspan="5"> <input type="radio" name="weeks1" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="weeks1" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">1 Week :</td>
      <td colspan="5"> <input type="radio" name="weeks1" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="weeks1" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?> <? if($months_1 == 1) { ?>
	<tr> 
      <td align="right">1 Month :</td>
      <td colspan="5"> <input type="radio" name="month1" value="1" id="RadioGroup111_0z" checked="checked"/>
          Show
          <input type="radio" name="month1" value="0" id="RadioGroup111_1z"/>
        Hide</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">1 Month :</td>
      <td colspan="5"> <input type="radio" name="month1" value="1" id="RadioGroup112_0z"/>
         Show
          <input type="radio" name="month1" value="0" id="RadioGroup112_1z" checked="checked"/>
        Hide</td>
    </tr>
	<?
	}
    ?>
    
    
    
    
    
    
	    
    
    
    

      <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE</strong></div></td>
    </tr>
         <?
	  $manualrate = $db->result(0, "manualrate");
	  if($manualrate == 1) {
		?>
	<tr> 
      <td align="right">Rate :</td>
      <td colspan="5"> <input type="radio" name="manualrate" value="1" id="RadioGroup111_0z" checked="checked"/>
          Manual
          <input type="radio" name="manualrate" value="0" id="RadioGroup111_1z"/>
        Realtime&nbsp;&nbsp;&nbsp;<i style="color:#F00;">System akan ambil rate dari internet (BINANCE)</i></td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Rate :</td>
      <td colspan="5"> <input type="radio" name="manualrate" value="1" id="RadioGroup112_0z"/>
         Manual
          <input type="radio" name="manualrate" value="0" id="RadioGroup112_1z" checked="checked"/>
        Realtime&nbsp;&nbsp;&nbsp;<i style="color:#F00;">System akan ambil rate dari internet (BINANCE)</i></td>
    </tr>
	<?
	}
    ?>
    
      
  <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>STATUS REALTIME RATE</strong></div></td>
    </tr>
    <tr> 
      <td align="right">Realtime :</td>
      <td colspan="5"><?php if(get_rate_binance("ETHBTC")){ ?>
        ACTIVE
        <?php } else { ?>
        INACTIVE
        
        <?php } ?></td>
    </tr>
    
    
    
   <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>DEFAULT STATUS</strong></div></td>
    </tr>
     <?
	  $deffstatus = $db->result(0, "deffstatus");
	  if($deffstatus == 2) {
		?>
	<tr> 
      <td align="right">Default Status :</td>
      <td colspan="5"> <input type="radio" name="deffstatus" value="2" id="RadioGroup111_0z" checked="checked"/>
          WIN
          <input type="radio" name="deffstatus" value="1" id="RadioGroup111_1z"/>
        LOST
          <input type="radio" name="deffstatus" value="0" id="RadioGroup111_1z"/>
        AUTO </td>
    </tr>
     <tr> <td align="right"></td>
          <td colspan="5"><i style="color:#F00;">WIN: semua member pasti WIN, LOST: semua member pasti LOST, AUTO: mengikuti system, untuk setting khusus tiap member ada di tabel all member. </i></td>
    </tr>
    <?php } else if($deffstatus == 1) { ?>
    <tr> 
      <td align="right">Default Status :</td>
      <td colspan="5"> <input type="radio" name="deffstatus" value="2" id="RadioGroup111_0z"/>
          WIN
          <input type="radio" name="deffstatus" value="1" id="RadioGroup111_1z" checked="checked"/>
        LOST
          <input type="radio" name="deffstatus" value="0" id="RadioGroup111_1z"/>
        AUTO &nbsp;&nbsp;&nbsp;</td>
      
    </tr>
     <tr> <td align="right"></td>
          <td colspan="5"><i style="color:#F00;">WIN: semua member pasti WIN, LOST: semua member pasti LOST, AUTO: mengikuti system, untuk setting khusus tiap member ada di tabel all member. </i></td>
    </tr>
    
	<?
	} else {
	?>
	 <tr> 
      <td align="right">Default Status :</td>
      <td colspan="5"> <input type="radio" name="deffstatus" value="2" id="RadioGroup111_0z"/>
          WIN
          <input type="radio" name="deffstatus" value="1" id="RadioGroup111_1z"/>
        LOST
          <input type="radio" name="deffstatus" value="0" id="RadioGroup111_1z" checked="checked"/>
        AUTO</td>
        </tr>
	 <tr> <td align="right"></td>
          <td colspan="5"><i style="color:#F00;">WIN: semua member pasti WIN, LOST: semua member pasti LOST, AUTO: mengikuti system, untuk setting khusus tiap member ada di tabel all member. </i></td>
    </tr>
	<?
	}
    ?>
    
    
    
    
    
    

        
    
          
  <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE ETH-BTC</strong></div></td>
    </tr>
    
     <?
	  if($ratestatus[0] == 1) {
		?>
	<tr> 
      <td align="right">ETH-BTC :</td>
      <td colspan="5"> <input type="radio" name="ethbtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="ethbtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">ETH-BTC :</td>
      <td colspan="5"> <input type="radio" name="ethbtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="ethbtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
   
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
       <a href='https://api.binance.com/api/v3/ticker/price?symbol=ETHBTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
      </div></td>
    </tr>

     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="ethbtc_rate" type="text" value="<?= $db->result(0, "ethbtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="ethbtc_rate_win" type="text" value="<?= $db->result(0, "ethbtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="ethbtc_rate_loss" type="text" value="<?= $db->result(0, "ethbtc_rate_loss"); ?>" size="10" /></td>
    </tr>
       <tr> <td align="right"></td>
          <td colspan="5"><i style="color:#F00;">Penambahan: penambahan nilai rate, Pengurangan: pengurangan nilai rate. nilai desimal harus sesuai rate.<br />penambahan ini dipergunakan untuk pilihan Default Status WIN atau LOST.<br />Realtime Rate warna merah Status OFF/Tidak Konek, anda bs cek manual di binance.</i><br /> <a href='https://api.binance.com/api/v3/ticker/price' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek All Rate</button></a></td>
    </tr>     
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE BNB-BTC</strong></div></td>
    </tr>
    
     <?
	  if($ratestatus[1] == 1) {
		?>
	<tr> 
      <td align="right">BNB-BTC :</td>
      <td colspan="5"> <input type="radio" name="bnbbtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="bnbbtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">BNB-BTC :</td>
      <td colspan="5"> <input type="radio" name="bnbbtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="bnbbtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
   
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
      
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=BNBBTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      </div></td>
    </tr>

     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="bnbbtc_rate" type="text" value="<?= $db->result(0, "bnbbtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="bnbbtc_rate_win" type="text" value="<?= $db->result(0, "bnbbtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="bnbbtc_rate_loss" type="text" value="<?= $db->result(0, "bnbbtc_rate_loss"); ?>" size="10" /></td>
    </tr>
    
            
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE LTC-BTC</strong></div></td>
    </tr>
    
     <?

	  if($ratestatus[2] == 1) {
		?>
	<tr> 
      <td align="right">LTC-BTC :</td>
      <td colspan="5"> <input type="radio" name="ltcbtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="ltcbtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">LTC-BTC :</td>
      <td colspan="5"> <input type="radio" name="ltcbtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="ltcbtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
   
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=LTCBTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      
      </div></td>
    </tr>

     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="ltcbtc_rate" type="text" value="<?= $db->result(0, "ltcbtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="ltcbtc_rate_win" type="text" value="<?= $db->result(0, "ltcbtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="ltcbtc_rate_loss" type="text" value="<?= $db->result(0, "ltcbtc_rate_loss"); ?>" size="10" /></td>
    </tr>
     
    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE SNT-ETH</strong></div></td>
    </tr>
    
     <?
	  if($ratestatus[3] == 1) {
		?>
	<tr> 
      <td align="right">SNT-ETH :</td>
      <td colspan="5"> <input type="radio" name="snteth" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="snteth" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">SNT-ETH :</td>
      <td colspan="5"> <input type="radio" name="snteth" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="snteth" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
   
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=SNTETH' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>

     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="snteth_rate" type="text" value="<?= $db->result(0, "snteth_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="snteth_rate_win" type="text" value="<?= $db->result(0, "snteth_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="snteth_rate_loss" type="text" value="<?= $db->result(0, "snteth_rate_loss"); ?>" size="10" /></td>
    </tr>
    
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE BNT-ETH</strong></div></td>
    </tr>
    
     <?
	  if($ratestatus[4] == 1) {
		?>
	<tr> 
      <td align="right">BNT-ETH :</td>
      <td colspan="5"> <input type="radio" name="bnteth" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="bnteth" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">BNT-ETH :</td>
      <td colspan="5"> <input type="radio" name="bnteth" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="bnteth" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
   
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=BNTETH' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>

     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="bnteth_rate" type="text" value="<?= $db->result(0, "bnteth_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="bnteth_rate_win" type="text" value="<?= $db->result(0, "bnteth_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="bnteth_rate_loss" type="text" value="<?= $db->result(0, "bnteth_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE BTC-USDT</strong></div></td>
    </tr>
    
     <?
	  if($ratestatus[5] == 1) {
		?>
	<tr> 
      <td align="right">BTC-USDT :</td>
      <td colspan="5"> <input type="radio" name="btcusdt" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="btcusdt" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">BTC-USDT :</td>
      <td colspan="5"> <input type="radio" name="btcusdt" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="btcusdt" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
   
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
        
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>

     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="btcusdt_rate" type="text" value="<?= $db->result(0, "btcusdt_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="btcusdt_rate_win" type="text" value="<?= $db->result(0, "btcusdt_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="btcusdt_rate_loss" type="text" value="<?= $db->result(0, "btcusdt_rate_loss"); ?>" size="10" /></td>
    </tr>
    
         <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE ETH-USDT</strong></div></td>
    </tr>
     <?
	  if($ratestatus[6] == 1) {
		?>
	<tr> 
      <td align="right">ETH-USDT :</td>
      <td colspan="5"> <input type="radio" name="ethusdt" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="ethusdt" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">ETH-USDT :</td>
      <td colspan="5"> <input type="radio" name="ethusdt" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="ethusdt" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
        
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=ETHUSDT' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="ethusdt_rate" type="text" value="<?= $db->result(0, "ethusdt_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="ethusdt_rate_win" type="text" value="<?= $db->result(0, "ethusdt_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="ethusdt_rate_loss" type="text" value="<?= $db->result(0, "ethusdt_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
    
    
    
    
    
           <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE DASH-BTC</strong></div></td>
    </tr>
     <?
	  if($ratestatus[7] == 1) {
		?>
	<tr> 
      <td align="right">DASH-BTC :</td>
      <td colspan="5"> <input type="radio" name="dashbtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="dashbtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">DASH-BTC :</td>
      <td colspan="5"> <input type="radio" name="dashbtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="dashbtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
        
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=DASHBTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="dashbtc_rate" type="text" value="<?= $db->result(0, "dashbtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="dashbtc_rate_win" type="text" value="<?= $db->result(0, "dashbtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="dashbtc_rate_loss" type="text" value="<?= $db->result(0, "dashbtc_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
    
    
               <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE DASH-ETH</strong></div></td>
    </tr>
     <?
	  if($ratestatus[8] == 1) {
		?>
	<tr> 
      <td align="right">DASH-ETH :</td>
      <td colspan="5"> <input type="radio" name="dasheth" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="dasheth" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">DASH-ETH :</td>
      <td colspan="5"> <input type="radio" name="dasheth" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="dasheth" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
        
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=DASHETH' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="dasheth_rate" type="text" value="<?= $db->result(0, "dasheth_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="dasheth_rate_win" type="text" value="<?= $db->result(0, "dasheth_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="dasheth_rate_loss" type="text" value="<?= $db->result(0, "dasheth_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
    
      <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE XRP-BTC</strong></div></td>
    </tr>
     <?
	  if($ratestatus[9] == 1) {
		?>
	<tr> 
      <td align="right">XRP-BTC :</td>
      <td colspan="5"> <input type="radio" name="xrpbtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="xrpbtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">XRP-BTC :</td>
      <td colspan="5"> <input type="radio" name="xrpbtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="xrpbtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
        
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=XRPBTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="xrpbtc_rate" type="text" value="<?= $db->result(0, "xrpbtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="xrpbtc_rate_win" type="text" value="<?= $db->result(0, "xrpbtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="xrpbtc_rate_loss" type="text" value="<?= $db->result(0, "xrpbtc_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
    
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE XRP-ETH</strong></div></td>
    </tr>
     <?
	  if($ratestatus[10] == 1) {
		?>
	<tr> 
      <td align="right">XRP-ETH :</td>
      <td colspan="5"> <input type="radio" name="xrpeth" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="xrpeth" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">XRP-ETH :</td>
      <td colspan="5"> <input type="radio" name="xrpeth" value="1" id="RadioGroup112_0z"/>

         Aktif
          <input type="radio" name="xrpeth" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=XRPETH' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="xrpeth_rate" type="text" value="<?= $db->result(0, "xrpeth_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="xrpeth_rate_win" type="text" value="<?= $db->result(0, "xrpeth_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="xrpeth_rate_loss" type="text" value="<?= $db->result(0, "xrpeth_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
    
         <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE BNB-USDT</strong></div></td>
    </tr>
     <?
	  if($ratestatus[11] == 1) {
		?>
	<tr> 
      <td align="right">BNB-USDT :</td>
      <td colspan="5"> <input type="radio" name="bnbusdt" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="bnbusdt" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">BNB-USDT :</td>
      <td colspan="5"> <input type="radio" name="bnbusdt" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="bnbusdt" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=BNBUSDT' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="bnbusdt_rate" type="text" value="<?= $db->result(0, "bnbusdt_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="bnbusdt_rate_win" type="text" value="<?= $db->result(0, "bnbusdt_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="bnbusdt_rate_loss" type="text" value="<?= $db->result(0, "bnbusdt_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE BCC-ETH</strong></div></td>
    </tr>
     <?
	  if($ratestatus[12] == 1) {
		?>
	<tr> 
      <td align="right">BCC-ETH :</td>
      <td colspan="5"> <input type="radio" name="bcceth" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="bcceth" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">BCC-ETH :</td>
      <td colspan="5"> <input type="radio" name="bcceth" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="bcceth" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=BCCETH' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="bcceth_rate" type="text" value="<?= $db->result(0, "bcceth_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="bcceth_rate_win" type="text" value="<?= $db->result(0, "bcceth_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="bcceth_rate_loss" type="text" value="<?= $db->result(0, "bcceth_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
    
    
    
    
    
    
    
    
         <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE BCC-USDT</strong></div></td>
    </tr>
     <?
	  if($ratestatus[13] == 1) {
		?>
	<tr> 
      <td align="right">BCC-USDT :</td>
      <td colspan="5"> <input type="radio" name="bccusdt" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="bccusdt" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">BCC-USDT :</td>
      <td colspan="5"> <input type="radio" name="bccusdt" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="bccusdt" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=BCCUSDT' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="bccusdt_rate" type="text" value="<?= $db->result(0, "bccusdt_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="bccusdt_rate_win" type="text" value="<?= $db->result(0, "bccusdt_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="bccusdt_rate_loss" type="text" value="<?= $db->result(0, "bccusdt_rate_loss"); ?>" size="10" /></td>
    </tr>
    
      <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE BCC-BNB</strong></div></td>
    </tr>
     <?
	  if($ratestatus[14] == 1) {
		?>
	<tr> 
      <td align="right">BCC-BNB :</td>
      <td colspan="5"> <input type="radio" name="bccbnb" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="bccbnb" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">BCC-BNB :</td>
      <td colspan="5"> <input type="radio" name="bccbnb" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="bccbnb" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=BCCBNB' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
      
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="bccbnb_rate" type="text" value="<?= $db->result(0, "bccbnb_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="bccbnb_rate_win" type="text" value="<?= $db->result(0, "bccbnb_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="bccbnb_rate_loss" type="text" value="<?= $db->result(0, "bccbnb_rate_loss"); ?>" size="10" /></td>
    </tr>
    
    
         <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE LTC-USDT</strong></div></td>
    </tr>
     <?
	  if($ratestatus[15] == 1) {
		?>
	<tr> 
      <td align="right">LTC-USDT :</td>
      <td colspan="5"> <input type="radio" name="ltcusdt" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="ltcusdt" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">LTC-USDT :</td>
      <td colspan="5"> <input type="radio" name="ltcusdt" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="ltcusdt" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=LTCUSDT' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
      
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="ltcusdt_rate" type="text" value="<?= $db->result(0, "ltcusdt_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="ltcusdt_rate_win" type="text" value="<?= $db->result(0, "ltcusdt_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="ltcusdt_rate_loss" type="text" value="<?= $db->result(0, "ltcusdt_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
             <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE LTC-BNB</strong></div></td>
    </tr>
     <?
	  if($ratestatus[16] == 1) {
		?>
	<tr> 
      <td align="right">LTC-BNB :</td>
      <td colspan="5"> <input type="radio" name="ltcbnb" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="ltcbnb" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">LTC-BNB :</td>
      <td colspan="5"> <input type="radio" name="ltcbnb" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="ltcbnb" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=LTCBNB' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
      
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="ltcbnb_rate" type="text" value="<?= $db->result(0, "ltcbnb_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="ltcbnb_rate_win" type="text" value="<?= $db->result(0, "ltcbnb_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="ltcbnb_rate_loss" type="text" value="<?= $db->result(0, "ltcbnb_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE ADA-BTC</strong></div></td>
    </tr>
     <?
	  if($ratestatus[17] == 1) {
		?>
	<tr> 
      <td align="right">ADA-BTC :</td>
      <td colspan="5"> <input type="radio" name="adabtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="adabtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">ADA-BTC :</td>
      <td colspan="5"> <input type="radio" name="adabtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="adabtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=ADABTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
      
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="adabtc_rate" type="text" value="<?= $db->result(0, "adabtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="adabtc_rate_win" type="text" value="<?= $db->result(0, "adabtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="adabtc_rate_loss" type="text" value="<?= $db->result(0, "adabtc_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
      <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE ADA-ETH</strong></div></td>
    </tr>
     <?
	  if($ratestatus[18] == 1) {
		?>
	<tr> 
      <td align="right">ADA-ETH :</td>
      <td colspan="5"> <input type="radio" name="adaeth" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="adaeth" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">ADA-ETH :</td>
      <td colspan="5"> <input type="radio" name="adaeth" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="adaeth" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
  <a href='https://api.binance.com/api/v3/ticker/price?symbol=ADAETH' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
      
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="adaeth_rate" type="text" value="<?= $db->result(0, "adaeth_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="adaeth_rate_win" type="text" value="<?= $db->result(0, "adaeth_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="adaeth_rate_loss" type="text" value="<?= $db->result(0, "adaeth_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
    
    
    
    
          <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE WAVES-BNB</strong></div></td>
    </tr>
     <?
	  if($ratestatus[19] == 1) {
		?>
	<tr> 
      <td align="right">WAVES-BNB :</td>
      <td colspan="5"> <input type="radio" name="wavesbnb" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="wavesbnb" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">WAVES-BNB :</td>
      <td colspan="5"> <input type="radio" name="wavesbnb" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="wavesbnb" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=WAVESBNB' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="wavesbnb_rate" type="text" value="<?= $db->result(0, "wavesbnb_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="wavesbnb_rate_win" type="text" value="<?= $db->result(0, "wavesbnb_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="wavesbnb_rate_loss" type="text" value="<?= $db->result(0, "wavesbnb_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
              <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE ATOM-BNB</strong></div></td>
    </tr>
     <?
	  if($ratestatus[20] == 1) {
		?>
	<tr> 
      <td align="right">ATOM-BNB :</td>
      <td colspan="5"> <input type="radio" name="atombnb" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="atombnb" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">ATOM-BNB :</td>
      <td colspan="5"> <input type="radio" name="atombnb" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="atombnb" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=ATOMBNB' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="atombnb_rate" type="text" value="<?= $db->result(0, "atombnb_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="atombnb_rate_win" type="text" value="<?= $db->result(0, "atombnb_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="atombnb_rate_loss" type="text" value="<?= $db->result(0, "atombnb_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
    
    
          <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE ATOM-BTC</strong></div></td>
    </tr>
     <?
	  if($ratestatus[21] == 1) {
		?>
	<tr> 
      <td align="right">ATOM-BTC :</td>
      <td colspan="5"> <input type="radio" name="atombtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="atombtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">ATOM-BTC :</td>
      <td colspan="5"> <input type="radio" name="atombtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="atombtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=ATOMBTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="atombtc_rate" type="text" value="<?= $db->result(0, "atombtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="atombtc_rate_win" type="text" value="<?= $db->result(0, "atombtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="atombtc_rate_loss" type="text" value="<?= $db->result(0, "atombtc_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
              <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE DOGE-BTC</strong></div></td>
    </tr>
     <?
	  if($ratestatus[22] == 1) {
		?>
	<tr> 
      <td align="right">DOGE-BTC :</td>
      <td colspan="5"> <input type="radio" name="dogebtc" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="dogebtc" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">DOGE-BTC :</td>
      <td colspan="5"> <input type="radio" name="dogebtc" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="dogebtc" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=DOGEBTC' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
        
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="dogebtc_rate" type="text" value="<?= $db->result(0, "dogebtc_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="dogebtc_rate_win" type="text" value="<?= $db->result(0, "dogebtc_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="dogebtc_rate_loss" type="text" value="<?= $db->result(0, "dogebtc_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
        
              <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE DOGE-USDT</strong></div></td>
    </tr>
     <?
	  if($ratestatus[23] == 1) {
		?>
	<tr> 
      <td align="right">DOGE-USDT :</td>
      <td colspan="5"> <input type="radio" name="dogeusdt" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="dogeusdt" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">DOGE-USDT :</td>
      <td colspan="5"> <input type="radio" name="dogeusdt" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="dogeusdt" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=DOGEUSDT' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="dogeusdt_rate" type="text" value="<?= $db->result(0, "dogeusdt_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="dogeusdt_rate_win" type="text" value="<?= $db->result(0, "dogeusdt_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="dogeusdt_rate_loss" type="text" value="<?= $db->result(0, "dogeusdt_rate_loss"); ?>" size="10" /></td>
    </tr> 
            
              <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>RATE ADA-USDT</strong></div></td>
    </tr>
     <?
	  if($ratestatus[24] == 1) {
		?>
	<tr> 
      <td align="right">ADA-USDT :</td>
      <td colspan="5"> <input type="radio" name="adausdt" value="1" id="RadioGroup111_0z" checked="checked"/>
          Aktif
          <input type="radio" name="adausdt" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">ADA-USDT :</td>
      <td colspan="5"> <input type="radio" name="adausdt" value="1" id="RadioGroup112_0z"/>
         Aktif
          <input type="radio" name="adausdt" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
    ?>
  <tr>
      <td width="185" align="right">Realtime Rate : </td> 
      <td colspan="5"><div align="left">
   <a href='https://api.binance.com/api/v3/ticker/price?symbol=ADAUSDT' target="_blank">
	   <button class='primapc2' style='padding:2px 6px;font-size:11px; margin-top:5px;' type="button">Cek Rate</button></a>
       
      </div></td>
    </tr>
     <tr> 
      <td align="right" >Nilai Rate :</td>
      <td colspan="5"><input name="adausdt_rate" type="text" value="<?= $db->result(0, "adausdt_rate"); ?>" size="10"/>
      &nbsp;&nbsp;&nbsp;&nbsp;Penambahan : <input name="adausdt_rate_win" type="text" value="<?= $db->result(0, "adausdt_rate_win"); ?>" size="10" />&nbsp;&nbsp;&nbsp;&nbsp;Pengurangan : <input name="adausdt_rate_loss" type="text" value="<?= $db->result(0, "adausdt_rate_loss"); ?>" size="10" /></td>
    </tr> 
    
    
    
    
    
     <tr>
      <td colspan="6" bgcolor=""></td>
    </tr>
	
    
    
    
	 <tr> 
      <td colspan="6" bgcolor="#DDDDE1">&nbsp;</td>
    </tr>
	<tr> 
      <td colspan="6" >&nbsp;</td>
    </tr>
   <tr> 
      <td colspan="6" bgcolor=""> 
	   <input name="no" type="hidden" id="no" value="1" size="10" />
	 <?php if($demomode == 1){ ?>
	  <input type="button" onclick='return confirmActiondemomode()' name="submit" value="SAVE" class="button">
      <?php } else { ?>
      <input type="submit"  name="submit" value="SAVE" class="button">
        <?php } ?>
        
        <input type="submit" name="cancel" id="cancel" value="CANCEL" onClick="javascript:history.go(-1)" class="button">       </td>
    </tr>
    <tr> 
      <td colspan="6" >&nbsp;</td>
    </tr>
  </table>
 
</form>
<p>&nbsp;</p>

<?php } ?>


  </div></div>