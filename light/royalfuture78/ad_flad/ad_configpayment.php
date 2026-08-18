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
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Konfigurasi Payment </h2>

<div align="center">
 <div class="form_style" style="width:70%" align="center">
<?
if(isset($_POST['submit'])){
$no = $_POST['no'];

 $syswdnecc = $_POST['syswdbank']."|".$_POST['syswdbtc']."|".$_POST['syswddoge']."|".$_POST['syswdltc'];
		

$db->update("configuration", "bank='".mysql_real_escape_string($_POST['bank'])."', bank1='".mysql_real_escape_string($_POST['bank1'])."', bank2='".mysql_real_escape_string($_POST['bank2'])."', bank3='".mysql_real_escape_string($_POST['bank3'])."', bank4='".mysql_real_escape_string($_POST['bank4'])."', bank5='".mysql_real_escape_string($_POST['bank5'])."', bank6='".mysql_real_escape_string($_POST['bank6'])."', rekbank='".mysql_real_escape_string($_POST['rekbank'])."', paygateway='".mysql_real_escape_string($_POST['paygateway'])."', btcne='".mysql_real_escape_string($_POST['btcne'])."', bitcoin_api_key='".mysql_real_escape_string($_POST['bitcoin_api_key'])."', bitcoin_address='".mysql_real_escape_string($_POST['bitcoin_address'])."', api_secret='".mysql_real_escape_string($_POST['api_secret'])."', blockio='".mysql_real_escape_string($_POST['blockio'])."', privatekey='".mysql_real_escape_string($_POST['privatekey'])."', publickey='".mysql_real_escape_string($_POST['publickey'])."', ethaddress='".mysql_real_escape_string($_POST['ethaddress'])."', usdtaddress='".mysql_real_escape_string($_POST['usdtaddress'])."', ethpay='".mysql_real_escape_string($_POST['ethpay'])."', ltcpay='".mysql_real_escape_string($_POST['ltcpay'])."', dogepay='".mysql_real_escape_string($_POST['dogepay'])."', publickeydoge='".mysql_real_escape_string($_POST['publickeydoge'])."', privatekeydoge='".mysql_real_escape_string($_POST['privatekeydoge'])."', publickeyltc='".mysql_real_escape_string($_POST['publickeyltc'])."', privatekeyltc='".mysql_real_escape_string($_POST['privatekeyltc'])."', privatekeydash='".mysql_real_escape_string($_POST['privatekeydash'])."', publickeydash='".mysql_real_escape_string($_POST['publickeydash'])."', privatekeybch='".mysql_real_escape_string($_POST['privatekeybch'])."', btcpays='".mysql_real_escape_string($_POST['btcpays'])."', ratepaybtc='".mysql_real_escape_string($_POST['ratepaybtc'])."', bchpay='".mysql_real_escape_string($_POST['bchpay'])."', ethrate='".mysql_real_escape_string($_POST['ethrate'])."', ovopay='".mysql_real_escape_string($_POST['ovopay'])."', ovoaddress='".mysql_real_escape_string($_POST['ovoaddress'])."', gopay='".mysql_real_escape_string($_POST['gopay'])."', gopayaddress='".mysql_real_escape_string($_POST['gopayaddress'])."', danapay='".mysql_real_escape_string($_POST['danapay'])."', danaaddress='".mysql_real_escape_string($_POST['danaaddress'])."', kursbch='".mysql_real_escape_string($_POST['kursbch'])."', kursltc='".mysql_real_escape_string($_POST['kursltc'])."', kursdoge='".mysql_real_escape_string($_POST['kursdoge'])."', kursdash='".mysql_real_escape_string($_POST['kursdash'])."', kursbtc='".mysql_real_escape_string($_POST['kursbtc'])."', autorate='".mysql_real_escape_string($_POST['autorate'])."', waletpay='".mysql_real_escape_string($_POST['waletpay'])."', bankwd='".mysql_real_escape_string($_POST['bankwd'])."', wdwallet='".mysql_real_escape_string($_POST['wdwallet'])."', ratepayusd='".mysql_real_escape_string($_POST['ratepayusd'])."', paymyr='".mysql_real_escape_string($_POST['paymyr'])."', wdmyr='".mysql_real_escape_string($_POST['wdmyr'])."', wdbnd='".mysql_real_escape_string($_POST['wdbnd'])."', paybnd='".mysql_real_escape_string($_POST['paybnd'])."', bank10='".mysql_real_escape_string($_POST['bank10'])."', bank11='".mysql_real_escape_string($_POST['bank11'])."', bank7='".mysql_real_escape_string($_POST['bank7'])."', bank8='".mysql_real_escape_string($_POST['bank8'])."', bank9='".mysql_real_escape_string($_POST['bank9'])."', usdtwd='".mysql_real_escape_string($_POST['usdtwd'])."', usdtpay='".mysql_real_escape_string($_POST['usdtpay'])."', usdtaddress='".mysql_real_escape_string($_POST['usdtaddress'])."', rateusdt='".mysql_real_escape_string($_POST['rateusdt'])."', rateusdt_wd='".mysql_real_escape_string($_POST['rateusdt_wd'])."', kursbtc_wd='".mysql_real_escape_string($_POST['kursbtc_wd'])."', syswd='".$syswdnecc."'", "id='$no'");



 $f = fopen('../member/config.php', 'w') or die("can't open file");
    fwrite($f, '<?php
$gateway = array();
$gateway["bitcoin_api_key"] = "'.$_POST['bitcoin_api_key'].'";
$gateway["bitcoin_address"] = "'.$_POST['bitcoin_address'].'";
$gateway["secret"] = "'.$_POST['api_secret'].'";
$gateway["bitcoin_confirmations"] = "2";
?>');
    fclose($f);

mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['paypal'])."' WHERE id='10'") or die(mysql_error());
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['paypalid'])."' WHERE id='11'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['perfect'])."' WHERE id='48'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['perfectacc'])."' WHERE id='49'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['perfectname'])."' WHERE id='50'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['perfectpass'])."' WHERE id='51'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['bitpay'])."' WHERE id='52'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['bitpayapi'])."' WHERE id='53'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['bitpayspeed'])."' WHERE id='54'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['mailnotif'])."' WHERE id='2'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['namesender'])."' WHERE id='3'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['namesender'])."' WHERE id='41'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['mailsender'])."' WHERE id='42'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['mailsender'])."' WHERE id='4'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['subjectpay'])."' WHERE id='5'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['isipay'])."' WHERE id='6'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['subjectpayx'])."' WHERE id='7'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['isipayx'])."' WHERE id='8'") or die(mysql_error());
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['skrill'])."' WHERE id='25'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['skrillid'])."' WHERE id='26'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['skrillss'])."' WHERE id='27'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['enable_payza'])."' WHERE id='13'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['payzaid'])."' WHERE id='14'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['payza_sandbox'])."' WHERE id='15'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['enable_egopay'])."' WHERE id='28'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['egopay_store_id'])."' WHERE id='29'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['egopay_store_pass'])."' WHERE id='30'") or die(mysql_error());		
			 header("location: ?go=configpayment&result=success");
	exit;
	} else {
?>

 <?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Konfigurasi Web Berhasil disimpan!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "success_dell") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Username default berhasil dihapus!</div>";
}
?>
  <div align="center"><strong><a href="?go=configuration&sess=web"><button class="primagreen" type="button">Konfigurasi Web</button></a>&nbsp;<a href="?go=configuration&sess=admin"><button class="primagreen" type="button">Konfigurasi Admin</button></a>&nbsp;<a href="?go=configuration&sess=system"><button class="primagreen" type="button">Konfigurasi System</button></a>&nbsp;<a href="?go=configpayment"><button class="primagreen" type="button">Konfigurasi Payment</button></a>&nbsp;<a href="?go=configtrade"><button class="primagreen" type="button">Konfigurasi Trading</button></a></strong></div><p>&nbsp;</p>
<form id="form2" name="form2" method="POST" action="">
<input name="gourle" type="hidden" id="gourle" value="1" size="10" />
  <table width="90%" align="center" cellpadding="4" cellspacing="1">
  
 
 
  <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>USDT PAYMENT</strong></div></td>
    </tr>
   
     
    
    
    
    
    <?
	  $usdtpay = $db->config("usdtpay");
	  if($usdtpay == 1) {
		?>
	<tr> 
      <td align="right">USDT Payment :</td>
      <td colspan="5"><input type="radio" name="usdtpay" value="1" id="RadioGroup122_0ra" checked="checked"/>
         Aktif
          <input type="radio" name="usdtpay" value="0" id="RadioGroup122_1ra" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">USDT Payment :</td>
      <td colspan="5"><input type="radio" name="usdtpay" value="1" id="RadioGroup122_0ra"/>
         Aktif
          <input type="radio" name="usdtpay" value="0" id="RadioGroup122_1ra" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
    <?
	  $usdtwd = $db->config("usdtwd");
	  if($usdtwd == 1) {
		?>
	<tr> 
      <td align="right">USDT Withdrawal :</td>
      <td colspan="5"><input type="radio" name="usdtwd" value="1" id="RadioGroup122_0ra" checked="checked"/>
         Aktif
          <input type="radio" name="usdtwd" value="0" id="RadioGroup122_1ra" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">USDT Withdrawal :</td>
      <td colspan="5"><input type="radio" name="usdtwd" value="1" id="RadioGroup122_0ra"/>
         Aktif
          <input type="radio" name="usdtwd" value="0" id="RadioGroup122_1ra" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
    
     <tr> 
      <td align="right" >USDT Admin Address :<br /></td>
      <td colspan="5"><input name="usdtaddress" type="text" id="usdtaddress" value="<?= $db->config("usdtaddress"); ?>" size="60" /></td>
    </tr>
    
    
     <tr> 
      <td align="right" >Rate Payment :<br /></td>
      <td colspan="5"><input name="rateusdt" type="text" id="rateusdt" value="<?= $db->config("rateusdt"); ?>" size="10" /> USDT/<?php echo $currencye;?>&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk Deposit jika Currency aktif USD</td>
    </tr>
    
 
     <tr> 
      <td align="right" >Rate Withdrawal :<br /></td>
      <td colspan="5"><input name="rateusdt_wd" type="text" id="rateusdt_wd" value="<?= $db->config("rateusdt_wd"); ?>" size="10" /> USDT/<?php echo $currencye;?>&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk withdrawal jika Currency aktif USD</td>
    </tr>
 
 
   <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>PAYMENT BITCOIN</strong></div></td>
    </tr>
  <?
	  $btcne = $db->config("btcne");
	  if($btcne == 1) {
		?>
	<tr> 
      <td align="right">Bitcoin Pay :</td>
      <td colspan="5"><input type="radio" name="btcne" value="1" id="RadioGroup122_0rab" checked="checked" />
         Aktif
          <input type="radio" name="btcne" value="0" id="RadioGroup122_1rab" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Bitcoin Pay :</td>
      <td colspan="5"><input type="radio" name="btcne" value="1" id="RadioGroup122_0rab" />
         Aktif
          <input type="radio" name="btcne" value="0" id="RadioGroup122_1rab" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
    
    
    
    
    
    
    
    
      <?
	  $syswdbtc = $syswdne[1];
	  if($syswdbtc == 1) {
		?>
	<tr> 
      <td align="right">Withdrawal To BTC :</td>
      <td colspan="5"> <input type="radio" name="syswdbtc" value="1" id="RadioGroup111_0zd" checked="checked"/>
          Yes
          <input type="radio" name="syswdbtc" value="0" id="RadioGroup111_1zd"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Withdrawal To BTC :</td>
      <td colspan="5"> <input type="radio" name="syswdbtc" value="1" id="RadioGroup112_0zd" />
        Yes
          <input type="radio" name="syswdbtc" value="0" id="RadioGroup112_1zd" checked="checked" />
        No</td>
    </tr>
	<?
	}
	?>
    
    
   
    
    
    
    
    
    
     <?
	  $btcpays = $db->config("btcpays");
	  if($btcpays == 1) {
		?>
	<tr> 
      <td align="right">Type Payment :</td>
      <td colspan="5"><input type="radio" name="btcpays" value="1" id="RadioGroup122_0raf" checked="checked"/>
         GOURL
          <input type="radio" name="btcpays" value="2" id="RadioGroup122_1raf"/>
        Manual Address
        </td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Type Payment :</td>
      <td colspan="5"><input type="radio" name="btcpays" value="1" id="RadioGroup122_0raf"/>
         GOURL
          <input type="radio" name="btcpays" value="2" id="RadioGroup122_1raf" checked="checked"/>
        Manual Address
        </td>
    </tr>
	<?
	}
	?>
    <?php if($currencye<>"USD"){ ?>
     <tr> 
      <td align="right" ><?php echo $currencye;?> To USD Rate (GOURL) :<br /></td>
      <td colspan="5"><input name="ratepayusd" type="text" id="ratepayusd" value="<?= $db->config("ratepayusd"); ?>" size="10" /> USD /<?php echo $currencye;?> </td>
    </tr>
    <?php } ?>
     <tr> 
      <td align="right" ><?php echo $currencye;?> To BTC Rate (Manual Payment) :<br /></td>
      <td colspan="5"><input name="ratepaybtc" type="text" id="ratepaybtc" value="<?= $db->config("ratepaybtc"); ?>" size="10" /> BTC /<?php echo $currencye;?> </td>
    </tr>
    
     <?php if($currencye == "USD"){ ?>
     
    <?php } ?>
     <tr> 
      <td align="right" >To BTC Rate  Withdrawal :</td>
      <td colspan="5"><input name="kursbtc_wd" type="text" id="kursbtc_wd" value="<?= $db->config("kursbtc_wd"); ?>" size="10" /> BTC /<?php echo $currencye; ?></td>
    </tr>
    
    
       <tr> 
      <td align="right" >BTC Address :<br /></td>
      <td colspan="5"><input name="bitcoin_address" type="text" id="bitcoin_address" value="<?= $db->config("bitcoin_address"); ?>" size="60" /></td>
    </tr>
    
   
    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>GOURL IO BITCOIN</strong></div></td>
    </tr>
    
    <tr> 
      <td align="right" >Public Key :<br /></td>
      <td colspan="5"><input name="publickey" type="text" id="publickey" value="<?= $db->config("publickey"); ?>" size="60" /></td>
    </tr>
  
  <tr> 
      <td align="right" >Private Key :<br /></td>
      <td colspan="5"><input name="privatekey" type="text" id="privatekey" value="<?= $db->config("privatekey"); ?>" size="60" /></td>
    </tr>
 
 
 
 
 
 
 
 
  <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>PAYMENT BANK</strong></div></td>
    </tr>
    
    
    
    
    <?
	  $rekbank = $db->config("rekbank");
	  if($rekbank == 1) {
		?>
	<tr> 
      <td align="right">Payment With Bank :</td>
      <td colspan="5"><input type="radio" name="rekbank" value="1" id="RadioGroup122_0ra" checked="checked" onMouseover="ddrivetip('Aktifkan Rekening Bank')"; onMouseout="hideddrivetip()" />
         Aktif
          <input type="radio" name="rekbank" value="0" id="RadioGroup122_1ra" onMouseover="ddrivetip('Nonaktifkan Rekening Bank')"; onMouseout="hideddrivetip()" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Payment With Bank :</td>
      <td colspan="5"><input type="radio" name="rekbank" value="1" id="RadioGroup122_0ra" onMouseover="ddrivetip('Aktifkan Rekening Bank')"; onMouseout="hideddrivetip()" />
         Aktif
          <input type="radio" name="rekbank" value="0" id="RadioGroup122_1ra" checked="checked" onMouseover="ddrivetip('Nonaktifkan Rekening Bank')"; onMouseout="hideddrivetip()" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
   
 
      <tr> 
      <td align="right" >Data Bank 1 :<br /></td>
      <td colspan="5"><input name="bank" type="text" id="bank" value="<?= $db->config("bank"); ?>" size="60" /></td>
    </tr>
    <tr> 
      <td align="right" >Data Bank 2 :<br /></td>
      <td colspan="5"><input name="bank1" type="text" id="bank1" value="<?= $db->config("bank1"); ?>" size="60" /></td>
    </tr>
    <tr> 
      <td align="right" >Data Bank 3 :<br /></td>
      <td colspan="5"><input name="bank2" type="text" id="bank2" value="<?= $db->config("bank2"); ?>" size="60" /></td>
    </tr>
	 <tr> 
      <td align="right" >Data Bank 4 :<br /></td>
      <td colspan="5"><input name="bank3" type="text" id="bank3" value="<?= $db->config("bank3"); ?>" size="60" /></td>
    </tr>
     <tr> 
      <td align="right" >Data Bank 5 :<br /></td>
      <td colspan="5"><input name="bank4" type="text" id="bank4" value="<?= $db->config("bank4"); ?>" size="60" /></td>
    </tr>
    <tr> 
      <td align="right" >Data Bank 6 :<br /></td>
      <td colspan="5"><input name="bank5" type="text" id="bank5" value="<?= $db->config("bank5"); ?>" size="60" /></td>
    </tr>
    <tr> 
      <td align="right" >Data Bank 7 :<br /></td>
      <td colspan="5"><input name="bank6" type="text" id="bank6" value="<?= $db->config("bank6"); ?>" size="60" /></td>
    </tr>
	 <tr> 
      <td align="right" >Data Bank 8 :<br /></td>
      <td colspan="5"><input name="bank7" type="text" id="bank7" value="<?= $db->config("bank7"); ?>" size="60" /></td>
    </tr>
   
     <tr> 
      <td align="right" >Banner :<br /></td>
      <td colspan="5"><a href="./index.php?go=bannerrek" target="_blank"><button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Setting Banner Rekening</button></a></td>
    </tr>
          <?
	  $bankwd = $db->config("bankwd");
	  if($bankwd == 1) {
		?>
	<tr> 
      <td align="right">Withdrawal To Bank :</td>
      <td colspan="5"><input type="radio" name="bankwd" value="1" id="RadioGroup122_0rab" checked="checked" />
         Aktif
          <input type="radio" name="bankwd" value="0" id="RadioGroup122_1rab" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Withdrawal To Bank :</td>
      <td colspan="5"><input type="radio" name="bankwd" value="1" id="RadioGroup122_0rab" />
         Aktif
          <input type="radio" name="bankwd" value="0" id="RadioGroup122_1rab" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?> 
    
    
 
    
    
    
    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong> WALLET</strong></div></td>
    </tr>
        <?
	  $waletpay = $db->config("waletpay");
	  if($waletpay == 1) {
		?>
	<tr> 
      <td align="right">Payment With Wallet:</td>
      <td colspan="5"><input type="radio" name="waletpay" value="1" id="RadioGroup122_0rab" checked="checked" />
         Aktif
          <input type="radio" name="waletpay" value="0" id="RadioGroup122_1rab" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Payment With Wallet :</td>
      <td colspan="5"><input type="radio" name="waletpay" value="1" id="RadioGroup122_0rab" />
         Aktif
          <input type="radio" name="waletpay" value="0" id="RadioGroup122_1rab" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>   
    

    
    
 
 
	<tr> 
      <td colspan="6" bgcolor="#DDDDE1">&nbsp;</td>
    </tr>
	<tr> 
      <td colspan="6" >&nbsp;</td>
    </tr>
	<tr> 
      <td colspan="6" >
      <input name="no" type="hidden" id="no" value="1" size="10" />
     <?php if($demomode == 1){ ?>
	  <input type="button" onclick='return confirmActiondemomode()' name="submit" value="SAVE" class="button">
      <?php } else { ?>
      <input type="submit"  name="submit" value="SAVE" class="button">
        <?php } ?>   
        <input type="submit" name="cancel" id="cancel" value="CANCEL" onClick="javascript:history.go(-1)" class="button">
       </td>
    </tr>
	<tr> 
      <td colspan="6" >&nbsp;</td>
    </tr>
  </table>
  </form>
  
  
<p>&nbsp;</p>
<?php } ?>
