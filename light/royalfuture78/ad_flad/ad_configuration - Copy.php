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
$db->select("id, title, description, keyword, name, email, alamat, hpsms, hpsms2, bank, bank1, bank2, bank3, biaya, biaya2, launching, komisi_sponsor, kompasangan, komlev, red_url, block_batas, log_salah, komjual, kedalaman, footer, ym, id_reg, id_reg2, flushout, add_widget, peringkat, testi, point, point_reward, kontrak, topsponsor, persen_profit, fb, twiter, fcon, gplus, gt, topmed, bnr1, bnr2, kurs, mwd, otos, usrd, otb, otn, bckp, mail_bckp, profits, mailset, smtphost, smtport, smtpuser, smtpass, min_invest, max_invest, kedalaman_paket, sess_time, mail_logo, invest_profits, periode_profits, kontrak_pro, domain, bisnisname, chats, peringkat2, mwd2, mwd3, mwd4, exptrans, defcurr, passkey, userkey, mail_batas, hp_batas, email_activation, sms_activation, admindir, onoto, usessl, jsms, lchat, blockie, lang, invimage, sysweb, reffa, api_sms, smsgtw, rekbank, paygateway, virt_member, virt_add, charge_transfer, fbshare, fblike, twitshare, fbsend, gplusshare, mailsend, instagr, fbrec, linkdin, blogger, pinterest, tumblr, stumbleupon, print, baidu, digg, membershare, fax, bbm, whatsapp, line, tracker_forex, office, hargatiket, latitude, longitude, cycle, ttcycle, min_ticket, useticket, buybalance, transbalance, convertbalance, mintrans, minbuy, maxbuy, maxtrans, minsell, feetrans, feesell, feeconv, sellbalance, maxsell, reinv, profitmanual, profitmanual2, memonline, vwd, totvist, vistoday, vistol, memonlineadd, vwdadd, totvistadd, vistodayadd, vistoladd, cancel_order, cancel_order_sto, hargatiketsto, ticketstockist, batasbank, maxinvest, startday, totdepo, totdepoadd, lockprofile, unlockpro, onelogin, regpublic, matchroi, batastransfer, minconvert, maxconvert, nilaiconvert, kursbtc, dtsellcoin, dtranscoin, dtconvertcoin, transcoin, sellcoin, convertcoin, wdcash, feewdcash, minwdcash, maxwdcash, wdro, minwdro, maxwdro, feewdro, autoex, googleauth, logmember, logadmin, kursusd, kurswd, kursvpc, seripin, minorderpin, kyc, regpaket, batastarik, download, testimoni, news, confirm, mailconfirm, maintenance, maintenance_info, kurspoin, kurspoinjual, walletpv, walletcash, walletpurchase, walletregister, transwalet, peringkat3, regiswalet, prosenbonus, rewards, rewards2, prosenprofit, kursidr, cashback, matching, kursdepo, matchpro, minpro, maxpro, autopro, kurseth, kursusdt, bspon, towaletcash, batasdownload, wdshow, minmax, showecash, useload,wdate,datewd,daywd,otp, usecaptcha, usepins, userbysystem, telegram, nilaikelipatan, rwdsponsor, unlockpro2, balikmodal, homeindex, cancelinvest, feecancel, investment, verifikasi, syswd, themes, faqmenu, appdownload, applinkdownload1, applinkdownload2, styletheme, currencyne, exchangerm, exchangeidr, exchangebnd, kursbnd, kursbnd_wd, transpine", "configuration", "id=1");
	
	
	$invest = explode("|", $db->result(0, "invest_profits"));
	$paketminimal = explode("|", $db->result(0, "paketminimal"));
	$paketmaksimal = explode("|", $db->result(0, "paketmaksimal"));
	$bonuswelcome = explode("|", $db->result(0, "bonuswelcome"));
	$kontrakpro = explode("|", $db->result(0, "kontrak_pro"));
	$prode = explode("|", $db->result(0, "periode_profits"));
	$flushoute = explode("|", $db->result(0, "flushout"));
	$profit = explode("|", $db->result(0, "persen_profit"));
	$kontrak = explode("|", $db->result(0, "kontrak"));
	$lead = explode("|", $db->result(0, "peringkat"));;
	$ksp = explode("|", $db->result(0, "komisi_sponsor"));
	$pasang = explode("|", $db->result(0, "kompasangan"));
	$pulsane = explode("|", $db->result(0, "pulsa"));
	$tw = explode("|", $db->result(0, "twiter"));
	$mwdne = explode("|", $db->result(0, "mwd"));
		$ym = explode("|", $db->result(0, "ym"));
	$rank = explode("|", $db->result(0, "peringkat2"));
	$rankx = explode("|", $db->result(0, "peringkat3"));
	$peringkate = explode("|", $db->result(0, "peringkat"));
	$jumlot = explode("|", $db->result(0, "jmlot"));
	$profitdowne = explode("|", $db->result(0, "profitdown"));
	 $dtsellc = explode("|", $db->result(0, "dtsellcoin"));
       $dttranc = explode("|", $db->result(0, "dtranscoin"));
	   $dtcnvr = explode("|", $db->result(0, "dtconvertcoin"));
	   $btstarik = explode("|", $db->result(0, "batastarik"));
	   
	   $wlpv = explode("|", $db->result(0, "walletpv"));
	   $wlch = explode("|", $db->result(0, "walletcash"));
	   $wlpc = explode("|", $db->result(0, "walletpurchase"));
	   $wlrg = explode("|", $db->result(0, "walletregister"));
	   $trnswl = explode("|", $db->result(0, "transwalet"));
	   $probon = explode("|", $db->result(0, "prosenbonus"));
	   $propro = explode("|", $db->result(0, "prosenprofit"));
	
	   $regwal = explode("|", $db->result(0, "regiswalet"));
	   $mtche = explode("|", $db->result(0, "matching"));
	   $mtcppr = explode("|", $db->result(0, "matchpro"));
	   $syswdne = explode("|", $db->result(0, "syswd"));
?>
<div align="center">
 <div class="form_style" style="width:70%" align="center">
  <div align="center"><strong><a href="?go=configuration&sess=web"><button class="primagreen" type="button">Konfigurasi Web</button></a>&nbsp;<a href="?go=configuration&sess=admin"><button class="primagreen" type="button">Konfigurasi Admin</button></a>&nbsp;<a href="?go=configuration&sess=system"><button class="primagreen" type="button">Konfigurasi System</button></a>&nbsp;<a href="?go=configpayment"><button class="primagreen" type="button">Konfigurasi Payment</button></a>&nbsp;<a href="?go=configtrade"><button class="primagreen" type="button">Konfigurasi Trading</button></a></strong></div>
  <p>&nbsp;</p>
<?php
if (isset($_GET['sess']) && $_GET['sess'] == "web") {
?>

<?
if(isset($_POST['submit'])){
$no = $_POST['no'];
		
		$twt = $_POST['twiter']."|".$_POST['twiter2'];
		$add_widget2=stripslashes($_POST['add_widget']);
		$add_widgets=mysql_real_escape_string($add_widget2);
		
		$startdays = $_POST['startday'];
$startday = date('Y-m-d', strtotime($startdays));
		
			$db->update("configuration", "title='".mysql_real_escape_string($_POST['title'])."', description='".mysql_real_escape_string($_POST['description'])."', keyword='".mysql_real_escape_string($_POST['keyword'])."', footer='".mysql_real_escape_string($_POST['footer'])."', launching='".mysql_real_escape_string($_POST['launching'])."', red_url='".mysql_real_escape_string($_POST['red_url'])."', block_batas='".mysql_real_escape_string($_POST['block_batas'])."', log_salah='".mysql_real_escape_string($_POST['log_salah'])."', usrd='".$_POST['usrd']."', otb='".$_POST['otb']."', otn='".$_POST['otn']."', bckp='".mysql_real_escape_string($_POST['bckp'])."', mail_bckp='".mysql_real_escape_string($_POST['mail_bckp'])."', mailset='".mysql_real_escape_string($_POST['mailset'])."', smtphost='".mysql_real_escape_string($_POST['smtphost'])."', smtport='".mysql_real_escape_string($_POST['smtport'])."', smtpuser='".mysql_real_escape_string($_POST['smtpuser'])."', smtpass='".mysql_real_escape_string($_POST['smtpass'])."', bnr1='".$_POST['bnr1']."', bnr2='".$_POST['br2']."', sess_time='".mysql_real_escape_string($_POST['sess_time'])."', domain='".mysql_real_escape_string($_POST['domain'])."', bisnisname='".mysql_real_escape_string($_POST['bisnisname'])."',passkey='".mysql_real_escape_string($_POST['passkey'])."',userkey='".mysql_real_escape_string($_POST['userkey'])."', testi='".mysql_real_escape_string($_POST['testi'])."', mail_batas='".mysql_real_escape_string($_POST['mail_batas'])."', hp_batas='".mysql_real_escape_string($_POST['hp_batas'])."', sms_activation='".mysql_real_escape_string($_POST['sms_activation'])."', email_activation='".mysql_real_escape_string($_POST['email_activation'])."', usessl='".mysql_real_escape_string($_POST['usessl'])."', jsms='".mysql_real_escape_string($_POST['jsms'])."', blockie='".mysql_real_escape_string($_POST['blockie'])."', lang='".mysql_real_escape_string($_POST['lang'])."', sysweb='".mysql_real_escape_string($_POST['sysweb'])."', reffa='".mysql_real_escape_string($_POST['reffa'])."', smsgtw='".mysql_real_escape_string($_POST['smsgtw'])."', api_sms='".mysql_real_escape_string($_POST['api_sms'])."', add_widget='".$add_widgets."', virt_member='".mysql_real_escape_string($_POST['virt_member'])."', virt_add='".mysql_real_escape_string($_POST['virt_add'])."', profitmanual='".mysql_real_escape_string($_POST['profitmanual'])."', profitmanual2='".mysql_real_escape_string($_POST['profitmanual2'])."', memonline='".$_POST['memonline']."', vwd='".$_POST['vwd']."', totvist='".$_POST['totvist']."', vistoday='".$_POST['vistoday']."', vistol='".$_POST['vistol']."', memonlineadd='".$_POST['memonlineadd']."', vwdadd='".$_POST['vwdadd']."', totvistadd='".$_POST['totvistadd']."', vistodayadd='".$_POST['vistodayadd']."', vistoladd='".$_POST['vistoladd']."', batasbank='".$_POST['batasbank']."', startday='".$startday."', totdepo='".$_POST['totdepo']."', totdepoadd='".$_POST['totdepoadd']."', lockprofile='".$_POST['lockprofile']."', unlockpro='".$_POST['unlockpro']."', onelogin='".mysql_real_escape_string($_POST['onelogin'])."', googleauth='".mysql_real_escape_string($_POST['googleauth'])."', logadmin='".mysql_real_escape_string($_POST['logadmin'])."', logmember='".mysql_real_escape_string($_POST['logmember'])."', unlockpro2='".mysql_real_escape_string($_POST['unlockpro2'])."', maintenance='".mysql_real_escape_string($_POST['maintenance'])."', maintenance_info='".mysql_real_escape_string($_POST['maintenance_info'])."', download='".mysql_real_escape_string($_POST['download'])."', testimoni='".mysql_real_escape_string($_POST['testimoni'])."', news='".mysql_real_escape_string($_POST['news'])."', confirm='".mysql_real_escape_string($_POST['confirm'])."', batasdownload='".mysql_real_escape_string($_POST['batasdownload'])."', useload='".mysql_real_escape_string($_POST['useload'])."', usecaptcha='".mysql_real_escape_string($_POST['usecaptcha'])."', usepins='".mysql_real_escape_string($_POST['usepins'])."', homeindex='".mysql_real_escape_string($_POST['homeindex'])."', themes='".mysql_real_escape_string($_POST['themes'])."', faqmenu='".$_POST['faqmenu']."', appdownload='".mysql_real_escape_string($_POST['appdownload'])."', applinkdownload1='".mysql_real_escape_string($_POST['applinkdownload1'])."', applinkdownload2='".mysql_real_escape_string($_POST['applinkdownload2'])."', styletheme='".$_POST['styletheme']."'", "id='$no'");
	//echo $komlev;
		
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['smtport'])."' WHERE id='44'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['smtpuser'])."' WHERE id='46'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['smtpass'])."' WHERE id='47'") or die(mysql_error());		
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['smtphost'])."' WHERE id='43'") or die(mysql_error());			
mysql_query("UPDATE udb_options SET options_value='".mysql_real_escape_string($_POST['smtp_secure'])."' WHERE id='45'") or die(mysql_error());	
mysql_query("UPDATE udb_options SET options_value='smtp' WHERE id='40'") or die(mysql_error());		

			 header("location: ?go=configuration&sess=web&result=success");
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
<form id="form2" name="form2" method="POST" action="">

  <table width="90%" align="center" cellpadding="4" cellspacing="1">
    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>MAINTENANCE WEB </strong></div></td>
    </tr>
  <?
			$maintenance = $db->result(0, "maintenance");
			if($maintenance == 1) {
			?>
	<tr> 
      <td align="right">Maintenance Website :</td>
      <td colspan="5"> <input type="radio" name="maintenance" value="1" id="RadioGroupa1ds_0" checked="checked"/>
          Yes
          <input type="radio" name="maintenance" value="0" id="RadioGroupa1ds_1"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Maintenance Website :</td>
      <td colspan="5"> <input type="radio" name="maintenance" value="1" id="RadioGroupa2ds_0" />
          Yes
          <input type="radio" name="maintenance" value="0" id="RadioGroupa2ds_1" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?>
   <tr> 
      <td align="right" valign="top">Info Maintenance : </td>
      <td colspan="5" valign="top"><textarea name="maintenance_info" cols="60" id="maintenance_info"><?= $db->result(0, "maintenance_info"); ?></textarea></td>
    </tr>
  
  
    
    
        <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>SETTING DOWNLOAD APP </strong></div></td>
    </tr>
    <?
	  $appdownload = $db->result(0, "appdownload");
	  if($appdownload == 1) {
		?>
	<tr> 
      <td align="right">Download Aplikasi :</td>
      <td colspan="5"><input type="radio" name="appdownload" value="1" id="RadioGroup131_0" checked="checked"/>
          Tampilkan 
            <input type="radio" name="appdownload" value="0" id="RadioGroup131_1" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Download Aplikasi :</td>
      <td colspan="5"><input type="radio" name="appdownload" value="1" id="RadioGroup132_0" />
        Tampilkan
        <input type="radio" name="appdownload" value="0" id="RadioGroup132_1" checked="checked" />
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
     <tr>
      <td align="right">Link Download Aplikasi  : </td>
      <td colspan="5"><div align="left">
        <textarea name="applinkdownload1" cols="60"><?= $db->result(0, "applinkdownload1"); ?></textarea>
      </div></td>
    </tr>
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>SETTING WEBSITE </strong></div></td>
    </tr>
    <tr> 
      <td width="125" align="right">Judul Website : </td>
      <td colspan="5"><label> 
        <input name="title" type="text" id="title" value="<?= $db->result(0, "title"); ?>" size="60" onMouseover="ddrivetip('Meta Tag Tittle')"; onMouseout="hideddrivetip()"/>
        <input name="no" type="hidden" id="no" value="1" size="10" />
      <input name="sysweb" type="hidden" id="sysweb" value="2"/>
      <input name="sms_activation" type="hidden" id="sms_activation" value="0"/>
      <input name="email_activation" type="hidden" id="email_activation" value="1"/>
      </label></td>
    </tr>
    <tr> 
      <td align="right" valign="top">Deskripsi : </td>
      <td colspan="5" valign="top"><input name="description" type="text" id="description" value="<?= $db->result(0, "description"); ?>" size="60" onMouseover="ddrivetip('Meta Tag Description')"; onMouseout="hideddrivetip()"/></td>
    </tr>
    <tr> 
      <td align="right" valign="top">Keyword :</td>
      <td colspan="5" valign="top"><input name="keyword" type="text" id="keyword" value="<?= $db->result(0, "keyword"); ?>" size="60" onMouseover="ddrivetip('Meta Tag Keyword')"; onMouseout="hideddrivetip()"/></td>
    </tr>
    <tr> 
      <td align="right" valign="top">Footer :</td>
      <td colspan="5" valign="top"><input name="footer" type="text" value="<?= $db->result(0, "footer"); ?>" size="60" onMouseover="ddrivetip('Footer Signature')"; onMouseout="hideddrivetip()"/></td>
    </tr>
	 <tr> 
      <td align="right" valign="top">Favicon :</td>
      <td colspan="5" valign="top">
	 
       <a class='iframe7' href='page.php?go=fcon'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button" onMouseover="ddrivetip('Upload Gambar Favicon')"; onMouseout="hideddrivetip()">Upload Image</button></a>
	  </td>
    </tr>
	 <tr> 
      <td align="right" valign="top">Logo Email :</td>
      <td colspan="5" valign="top">
	  
     <a class='iframe7' href='page.php?go=logo-mail'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button" onMouseover="ddrivetip('Upload Gambar Logo Email')"; onMouseout="hideddrivetip()">Upload Image</button></a>
	   </td>
    </tr>
	 <tr> 
      <td align="right" valign="top">Logo Invoice :</td>
      <td colspan="5" valign="top">
	 <a class='iframe7' href='page.php?go=logo-invoice'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button" onMouseover="ddrivetip('Upload Gambar Logo Invoice')"; onMouseout="hideddrivetip()">Upload Image</button></a>
	   </td>
    </tr>
    
	  <tr> 
      <td align="right">Nama Domain :</td>
      <td colspan="5"><input name="domain" type="text" id="domain" value="<?= $db->result(0, "domain"); ?>" size="40" onMouseover="ddrivetip('Nama domain, gunakan full subdomain apabila web anda di subdomain')"; onMouseout="hideddrivetip()"/></td>
    </tr>
    <tr> 
      <td align="right">Nama Bisnis :</td>
      <td colspan="5"><input name="bisnisname" type="text" id="bisnisname" value="<?= $db->result(0, "bisnisname"); ?>" size="40" onMouseover="ddrivetip('Nama Website')"; onMouseout="hideddrivetip()"/></td>
    </tr>
    
     <tr> 
      <td align="right">Link Refferal :</td>
      <td colspan="5">
      <select name="reffa" id="reffa" style="width:120px;" onMouseover="ddrivetip('System Refferal, ini digunakan untuk id refferal, contoh: http://<?php echo $domain; ?>/?reff=user')"; onMouseout="hideddrivetip()"  >
       <?
			$reffa = $db->result(0, "reffa");
			if($reffa == "aff") {
			?>
	   <option  value='aff' selected="selected">aff</option>
       <option  value='reff' >reff</option>
       <option  value='id'>id</option>
		<?
	} else if($reffa == "reff") {
	?>
       <option  value='aff'>aff</option>
	   <option  value='reff' selected="selected">reff</option>
       <option  value='id' >id</option>
       <?
	} else  {
	?>
       <option  value='aff' >aff</option>
	   <option  value='reff' >reff</option>
       <option  value='id' selected="selected">id</option>
		<?
	}
	?>
		</select>
      
      </td>
    </tr>
   <?
			$usessl = $db->result(0, "usessl");
			if($usessl == 1) {
			?>
	<tr> 
      <td align="right">Use SSL :</td>
      <td colspan="5"> <input type="radio" name="usessl" value="1" id="RadioGroupa1ds_0" checked="checked" onMouseover="ddrivetip('Aktifkan SSL, Sebelum aktifkan ini pastikan server/hosting anda sudah menggunakan SSL/https')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="usessl" value="0" id="RadioGroupa1ds_1" onMouseover="ddrivetip('Non SSL')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Use SSL :</td>
      <td colspan="5"> <input type="radio" name="usessl" value="1" id="RadioGroupa2ds_0" onMouseover="ddrivetip('Aktifkan SSL, Sebelum aktifkan ini pastikan server/hosting anda sudah menggunakan SSL/https')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="usessl" value="0" id="RadioGroupa2ds_1" checked="checked" onMouseover="ddrivetip('Non SSL')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	}
	?>
	<?
			$blockie = $db->result(0, "blockie");
			if($blockie == 1) {
			?>
	<tr> 
      <td align="right">Block IE :</td>
      <td colspan="5"> <input type="radio" name="blockie" value="1" id="RadioGroupa1ds_0" checked="checked" onMouseover="ddrivetip('Blokir Penggunaan Browser Internet Explorer')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="blockie" value="0" id="RadioGroupa1ds_1" onMouseover="ddrivetip('Jangan Blokir Penggunaan Browser Internet Explorer')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Block IE :</td>
      <td colspan="5"> <input type="radio" name="blockie" value="1" id="RadioGroupa2ds_0" onMouseover="ddrivetip('Blokir Penggunaan Browser Internet Explorer')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="blockie" value="0" id="RadioGroupa2ds_1" checked="checked" onMouseover="ddrivetip('Jangan Blokir Penggunaan Browser Internet Explorer')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	}
	?>
    <tr>
      <td align="right">Bahasa  :      </td>
      <td width="210">
	  <select name="lang" id="lang" style="width:120px; "onMouseover="ddrivetip('Bahasa Default')"; onMouseout="hideddrivetip()">
       <?
			$lang = $db->result(0, "lang");
			if($lang == 1) {
			?>
	   <option  value='1' selected="selected">Indonesia</option>
       <option  value='2' >English</option>
		<?
	} else {
	?>
	<option  value='1'>Indonesia</option>
       <option  value='2' selected="selected">English</option>
		<?
	}
	?>
		</select>
      </td>
      
      <td align="right">&nbsp;</td>
      <td><div align="left"></div></td>
      <td width="1" align="right">&nbsp;</td>
      <td width="5">&nbsp;</td>
    </tr>
   <tr>
      <td align="right">Maksimal Login Salah  :      </td>
      <td width="210"><input name="log_salah" type="text" id="log_salah" value="<?= $db->result(0, "log_salah"); ?>" size="5" onMouseover="ddrivetip('Sistem akan otomatis memblokir member yang bersangkutan jika salah password hingga maksimal login.')"; onMouseout="hideddrivetip()"/>
      </td>
      
      <td align="right">&nbsp;</td>
      <td><div align="left"></div></td>
      <td width="1" align="right">&nbsp;</td>
      <td width="5">&nbsp;</td>
    </tr>
	 <?
			$onelogin = $db->result(0, "onelogin");
			if($onelogin == 1) {
			?>
	<tr> 
      <td align="right">Private Login :</td>
      <td colspan="5"> <input type="radio" name="onelogin" value="1" id="RadioGroupa1ds_0" checked="checked" onMouseover="ddrivetip('Login hanya di satu tempat, tidak dapat multiple login dengan user yang sama.')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="onelogin" value="0" id="RadioGroupa1ds_1" onMouseover="ddrivetip('Dapat multiple login dengan user yang sama.')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Private Login :</td>
      <td colspan="5"> <input type="radio" name="onelogin" value="1" id="RadioGroupa2ds_0" onMouseover="ddrivetip('Login hanya di satu tempat, tidak dapat multiple login dengan user yang sama.')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="onelogin" value="0" id="RadioGroupa2ds_1" checked="checked" onMouseover="ddrivetip('Dapat multiple login dengan user yang sama.')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	}
	?>
	<tr>
      <td align="right">Redirect URL  :      </td>
      <td><input name="red_url" type="text" id="red_url" value="<?= $db->result(0, "red_url"); ?>" size="40"  onMouseover="ddrivetip('Sistem akan otomatis mengarahkan akses ke alamat ini apabila IP Address user terblokir. (isi tanpa http://)')"; onMouseout="hideddrivetip()"/>
      </td>
      
      <td align="right">&nbsp;</td>
      <td><div align="left"></div></td>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
 
	<tr> 
      <td align="right">Session Login :</td>
      <td colspan="5">
       <input name="sess_time" type="text" id="sess_time" value="<?= $db->result(0, "sess_time"); ?>" size="10" onMouseover="ddrivetip('Sistem akan otomatis logout dalam waktu ini (detik) jika tidak ada aktivitas.')";
 onMouseout="hideddrivetip()"/></td>
    </tr>
	
       <tr> 
         <td align="right">Pembatasan Email Registrasi :</td>
         <td colspan="5">
          <input name="mail_batas" type="text" id="mail_batas" value="<?= $db->result(0, "mail_batas"); ?>" size="10" onMouseover="ddrivetip('Batas maksimal email pendaftaran, sistem akan menolak email yang telah mendaftar sebanyak ini. Isi angka 0 untuk matikan pembatasan.')"; onMouseout="hideddrivetip()"/></td>
       </tr>
	<tr> 
      <td align="right">Pembatasan HP Registrasi :</td>
      <td colspan="5">
       <input name="hp_batas" type="text" id="hp_batas" value="<?= $db->result(0, "hp_batas"); ?>" size="10" onMouseover="ddrivetip('Batas maksimal HP pendaftaran, sistem akan menolak HP yang telah mendaftar sebanyak ini. Isi angka 0 untuk matikan pembatasan.')"; onMouseout="hideddrivetip()"/></td>
    </tr>
    <tr> 
      <td align="right">Pembatasan Payment Gateway :</td>
      <td colspan="5">
       <input name="batasbank" type="text" id="batasbank" value="<?= $db->result(0, "batasbank"); ?>" size="10" onMouseover="ddrivetip('Batas maksimal Payment Gateway pendaftaran, sistem akan menolak Payment Gateway yang telah mendaftar sebanyak ini. Isi angka 0 untuk matikan pembatasan.')"; onMouseout="hideddrivetip()"/></td>
    </tr>
	<?
			$lockprofile = $db->result(0, "lockprofile");
			if($lockprofile == 1) {
			?>
	<tr> 
      <td align="right">Lock Profile :</td>
      <td colspan="5"> <input type="radio" name="lockprofile" value="1" id="RadioGroupa1dsd_0" checked="checked" onMouseover="ddrivetip('member tidak dapat merubah data Payment Gateway, email, hp')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="lockprofile" value="0" id="RadioGroupa1dsd_1" onMouseover="ddrivetip('member dapat merubah data rekening Payment Gateway, email, hp')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Lock Profile :</td>
      <td colspan="5"> <input type="radio" name="lockprofile" value="1" id="RadioGroupa2dsd_0" onMouseover="ddrivetip('member tidak dapat merubah data rekening bank, email, hp')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="lockprofile" value="0" id="RadioGroupa2dsd_1" checked="checked" onMouseover="ddrivetip('member dapat merubah data rekening bank, email, hp')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	}
	?> 
    <?
			$unlockpro2 = $db->result(0, "unlockpro2");
			if($unlockpro2 == 1) {
			?>
	<tr> 
      <td align="right">Unlock Profile :</td>
      <td colspan="5"> <input type="radio" name="unlockpro2" value="1" id="RadioGroupa1dsd_0c" checked="checked" onMouseover="ddrivetip('tampilkan unlock button untuk merubah data Payment Gateway, email, hp dengan konfirmasi')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="unlockpro2" value="0" id="RadioGroupa1dsd_1c" onMouseover="ddrivetip('Sembunyikan unlock button')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Unlock Profile :</td>
      <td colspan="5"> <input type="radio" name="unlockpro2" value="1" id="RadioGroupa2dsd_0c" onMouseover="ddrivetip('tampilkan unlock button untuk merubah data Payment Gateway, email, hp dengan konfirmasi')"; onMouseout="hideddrivetip()"/>
          Yes
          <input type="radio" name="unlockpro2" value="0" id="RadioGroupa2dsd_1c" checked="checked" onMouseover="ddrivetip('Sembunyikan unlock button')"; onMouseout="hideddrivetip()"/>
        No</td>
    </tr>
	<?
	}
	?> 
	<tr> 
      <td align="right">Verifikasi Unlock Profile :</td>
      <td colspan="5">
      <select name="unlockpro" id="unlockpro" style="width:120px;" onMouseover="ddrivetip('System akan mengirimkan verifikasi kode untuk unlock field profile')"; onMouseout="hideddrivetip()"  >
       <?
			$unlockpro = $db->result(0, "unlockpro");
			if($unlockpro == 0) {
			?>
	   <option  value='0' selected="selected">Email</option>
       <option  value='1' >No HP</option>
       <option  value='2' >No HP & Email</option>
		
       <?
	} else  if($unlockpro == 1) { 
	?>
      <option  value='0'>Email</option>
       <option  value='1' selected="selected">No HP</option>
       <option  value='2' >No HP & Email</option>
		
    <?
	} else  {
	?>
      <option  value='0'>Email</option>
       <option  value='1'>No HP</option>
       <option  value='2' selected="selected">No HP & Email</option>
		<?
	}
	?>
		</select>
      
      </td>
    </tr>
	
   <?
			$logadmin = $db->result(0, "logadmin");
			if($logadmin == 1) {
			?>
	<tr> 
      <td align="right">Email Login (Admin) :</td>
      <td colspan="5"> <input type="radio" name="logadmin" value="1" id="RadioGroupa1dsd_0e" checked="checked"/>
          Yes
          <input type="radio" name="logadmin" value="0" id="RadioGroupa1dsd_1e"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Email Login (Admin) :</td>
      <td colspan="5"> <input type="radio" name="logadmin" value="1" id="RadioGroupa2dsd_0e"/>
          Yes
          <input type="radio" name="logadmin" value="0" id="RadioGroupa2dsd_1e" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?> 
    <?
			$logmember = $db->result(0, "logmember");
			if($logmember == 1) {
			?>
	<tr> 
      <td align="right">Email Login (Member) :</td>
      <td colspan="5"> <input type="radio" name="logmember" value="1" id="RadioGroupa1dsd_0de" checked="checked"/>
          Yes
          <input type="radio" name="logmember" value="0" id="RadioGroupa1dsd_1de"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Email Login (Member) :</td>
      <td colspan="5"> <input type="radio" name="logmember" value="1" id="RadioGroupa2dsd_0de"/>
          Yes
          <input type="radio" name="logmember" value="0" id="RadioGroupa2dsd_1de" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?> 
   <?
			$usepins = $db->result(0, "usepins");
			if($usepins == 1) {
			?>
	<tr> 
      <td align="right">Secure PIN Member :</td>
      <td colspan="5"> <input type="radio" name="usepins" value="1" id="RadioGroupa1dsd_0dec" checked="checked"/>
          Yes
          <input type="radio" name="usepins" value="0" id="RadioGroupa1dsd_1dec"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Secure PIN Member :</td>
      <td colspan="5"> <input type="radio" name="usepins" value="1" id="RadioGroupa2dsd_0dec"/>
          Yes
          <input type="radio" name="usepins" value="0" id="RadioGroupa2dsd_1dec" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?> 
     	<?
			$usecaptcha = $db->result(0, "usecaptcha");
			if($usecaptcha == 1) {
			?>
	<tr> 
      <td align="right">Google Captcha :</td>
      <td colspan="5"> <input type="radio" name="usecaptcha" value="1" id="RadioGroupa1dsd_0dec" checked="checked"/>
          Yes
          <input type="radio" name="usecaptcha" value="0" id="RadioGroupa1dsd_1dec"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Google Captcha :</td>
      <td colspan="5"> <input type="radio" name="usecaptcha" value="1" id="RadioGroupa2dsd_0dec"/>
          Yes
          <input type="radio" name="usecaptcha" value="0" id="RadioGroupa2dsd_1dec" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?> 
   
    <?
			$googleauth = $db->result(0, "googleauth");
			if($googleauth == 1) {
			?>
	<tr> 
      <td align="right">Google Authenticator :</td>
      <td colspan="5"> <input type="radio" name="googleauth" value="1" id="RadioGroupa1dsd_0dec" checked="checked"/>
          Yes
          <input type="radio" name="googleauth" value="0" id="RadioGroupa1dsd_1dec"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Google Authenticator :</td>
      <td colspan="5"> <input type="radio" name="googleauth" value="1" id="RadioGroupa2dsd_0dec"/>
          Yes
          <input type="radio" name="googleauth" value="0" id="RadioGroupa2dsd_1dec" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?> 
       <?
			$download = $db->result(0, "download");
			if($download == 1) {
			?>
	<tr> 
      <td align="right">Menu Download Member :</td>
      <td colspan="5"> <input type="radio" name="download" value="1" checked="checked"/>
          Tampilkan
          <input type="radio" name="download" value="0"/>
        Tidak</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Menu Download Member :</td>
      <td colspan="5"> <input type="radio" name="download" value="1"/>
          Tampilkan
          <input type="radio" name="download" value="0" checked="checked"/>
        Tidak</td>
    </tr>
	<?
	}
	?> 
     <tr> 
      <td align="right">Batas Download :</td>
      <td colspan="5">
       <input name="batasdownload" type="text" id="batasdownload" value="<?= $db->result(0, "batasdownload"); ?>" size="3" onMouseover="ddrivetip('Batas maksimal member download file.')"; onMouseout="hideddrivetip()"/></td>
    </tr>
      
     <?
			$testimoni = $db->result(0, "testimoni");
			if($testimoni == 1) {
			?>
	<tr> 
      <td align="right">Menu Testimoni Member :</td>
      <td colspan="5"> <input type="radio" name="testimoni" value="1" checked="checked"/>
          Tampilkan
          <input type="radio" name="testimoni" value="0"/>
        Tidak</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Menu Testimoni Member :</td>
      <td colspan="5"> <input type="radio" name="testimoni" value="1"/>
          Tampilkan
          <input type="radio" name="testimoni" value="0" checked="checked"/>
        Tidak</td>
    </tr>
	<?
	}
	?> 
    <tr>
      <td align="right">Maks. Testimonial:</td>
      <td colspan="5"><input name="testi" type="text" id="testi" value="<?= $db->result(0, "testi"); ?>" size="3" onMouseover="ddrivetip('Batas maksimal member membuat testimonial')"; onMouseout="hideddrivetip()"/>
      </td></tr>
     
    
    <?
			$news = $db->result(0, "news");
			if($news == 1) {
			?>
	<tr> 
      <td align="right">Menu News Member :</td>
      <td colspan="5"> <input type="radio" name="news" value="1" checked="checked"/>
          Tampilkan
          <input type="radio" name="news" value="0"/>
        Tidak</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Menu News Member :</td>
      <td colspan="5"> <input type="radio" name="news" value="1"/>
          Tampilkan
          <input type="radio" name="news" value="0" checked="checked"/>
        Tidak</td>
    </tr>
	<?
	}
	?> 
    
    <?
			$confirm = $db->result(0, "confirm");
			if($confirm == 1) {
			?>
	<tr> 
      <td align="right">Menu Contact Us :</td>
      <td colspan="5"> <input type="radio" name="confirm" value="1" checked="checked"/>
          Tampilkan
          <input type="radio" name="confirm" value="0"/>
        Tidak</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Menu Contact Us :</td>
      <td colspan="5"> <input type="radio" name="confirm" value="1"/>
          Tampilkan
          <input type="radio" name="confirm" value="0" checked="checked"/>
        Tidak</td>
    </tr>
	<?
	}
	?> 
    <?
			$faqmenu = $db->result(0, "faqmenu");
			if($faqmenu == 1) {
			?>
	<tr> 
      <td align="right">Menu FAQ :</td>
      <td colspan="5"> <input type="radio" name="faqmenu" value="1" checked="checked"/>
          Tampilkan
          <input type="radio" name="faqmenu" value="0"/>
        Tidak</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Menu FAQ :</td>
      <td colspan="5"> <input type="radio" name="faqmenu" value="1"/>
          Tampilkan
          <input type="radio" name="faqmenu" value="0" checked="checked"/>
        Tidak</td>
    </tr>
	<?
	}
	?> 
    
	 <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center">SPONSOR DEFAULT</div></td>
    </tr>
	
   <tr>   <td align="right">Username Default :</td>



      <td colspan="3">
	  <?
		$mydef = $db->result(0, "usrd");
		if(!empty($mydef)) {
		?>
		<input name="usrd" type="hidden" id="usrd" value="<?= $db->result(0, "usrd"); ?>" size="20" />
		<select name="" id="" style="width:120px; " disabled="disabled">
                                          <option  value='' selected="selected"><?= $db->result(0, "usrd"); ?></option>
										  </select>
		&nbsp;&nbsp;&nbsp;<a href="?go=configuration&page=delete&id=<?= $db->result(0, "id"); ?>" ><button class="submit" type="button">Hapus/Ganti</button></a>
	  <? } else { ?>
	   <select name="usrd" onchange="value" class="form" onMouseover="ddrivetip('Sponsor default jika anda setting username tertentu, maka setiap pengunjung yang datang tanpa link refferal akan diarahkan ke halaman refferal member tersebut.')"; onMouseout="hideddrivetip()">
          <option value="">-- Random --</option>
          <?
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username from member where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						if(isset($usrd) == $sto[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?= $sto[0]; ?>" <?= $pilih; ?>> 
          <?= $sto[0]; ?>
          <?
					}
					?>
        </select>
		<?
					}
					?>	  </td>
    </tr> 
   <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>SETTING BACKUP </strong></div></td>
    </tr>
		
    <?
	  $otne = $db->result(0, "otb");
	  if($otne == 1) {
		?>
	<tr> 
      <td align="right">Otomatisasi Backup :</td>
      <td colspan="5"> <input type="radio" name="otb" value="1" id="RadioGroup121_0" checked="checked" onMouseover="ddrivetip('Aktifkan Backup otomatis')"; onMouseout="hideddrivetip()"/>
          Aktif
          <input type="radio" name="otb" value="0" id="RadioGroup121_1"onMouseover="ddrivetip('Nonaktifkan Backup otomatis')"; onMouseout="hideddrivetip()"  />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Otomatisasi Backup :</td>
      <td colspan="5"> <input type="radio" name="otb" value="1" id="RadioGroup122_0" onMouseover="ddrivetip('Aktifkan Backup otomatis')"; onMouseout="hideddrivetip()" />
         Aktif
          <input type="radio" name="otb" value="0" id="RadioGroup122_1" checked="checked" onMouseover="ddrivetip('Nonaktifkan Backup otomatis')"; onMouseout="hideddrivetip()" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
	<?
	  $otn = $db->result(0, "otn");
	  if($otn == 1) {
		?>
	<tr> 
      <td align="right">Periode Backup :</td>
      <td colspan="5"><input name="bckp" type="text" id="bckp" value="<?= $db->result(0, "bckp"); ?>" size="5" />&nbsp;&nbsp;<input type="radio" name="otn" value="1" id="RadioGroup131_0" checked="checked"/>
          Jam 
            <input type="radio" name="otn" value="0" id="RadioGroup131_1" />
        Hari</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Periode Backup :</td>
      <td colspan="5"><input name="bckp" type="text" id="bckp" value="<?= $db->result(0, "bckp"); ?>" size="5" onMouseover="ddrivetip('Sistem akan otomatis melakukan backup database dalam waktu ini.')"; onMouseout="hideddrivetip()"/>&nbsp;&nbsp;<input type="radio" name="otn" value="1" id="RadioGroup132_0" />
        Jam
        <input type="radio" name="otn" value="0" id="RadioGroup132_1" checked="checked" />
        Hari</td>
    </tr>
	<?
	}
	?>
	
    
	 <tr>
      <td align="right">Kirim ke Email  : </td>
      <td colspan="5"><div align="left">
        <input name="mail_bckp" type="text" id="mail_bckp" value="<?= $db->result(0, "mail_bckp"); ?>" size="40" onMouseover="ddrivetip('Sistem akan otomatis mengirimkan backup database ke alamat email ini')"; onMouseout="hideddrivetip()"/>
      </div></td>
    </tr>

    
	<tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>SETTING SMTP </strong></div></td>
    </tr>
		

    <tr> 
      <td align="right">Encryption :</td>
      <td colspan="5"> 
      <input name="mailset" type="hidden" id="mailset" value="1" />
      <select id="smtp_secure" name="smtp_secure" class="span2" onMouseover="ddrivetip('SMTP Connection security')"; onMouseout="hideddrivetip()">';

					<option value="none" selected="selected">None</option>
					<option value="ssl">SSL</option>
					<option value="tls">TLS</option>				</select></td>
    </tr>
      <td align="right">Port :</td>
      <td colspan="5"> <input name="smtport" type="text" id="smtport" value="<?= $db->result(0, "smtport"); ?>" size="5" onMouseover="ddrivetip('SMTP Port Server hosting anda')"; onMouseout="hideddrivetip()"/></td>
    </tr>
	   <td align="right">SMTP Host 
	     
	     : </td>
	   <td><div align="left">
           <input name="smtphost" type="text" id="smtphost" value="<?= $db->result(0, "smtphost"); ?>" size="35" onMouseover="ddrivetip('SMTP Host server hosting anda')"; onMouseout="hideddrivetip()"/>
	   </div></td>
      <td width="119" align="right"><div align="left">
          
      </div></td>
      <td width="98">&nbsp;</td>
      <td align="right"></td>
      <td></td>
    </tr>
	 <tr>
	   <td align="right">SMTP User 
	     
	     : </td>
	   <td><div align="left">
           <input name="smtpuser" type="text" id="smtpuser" value="<?= $db->result(0, "smtpuser"); ?>" size="35" onMouseover="ddrivetip('SMTP User / alamat email anda')"; onMouseout="hideddrivetip()"/>
	   </div></td>
      <td width="119" align="right"><div align="left">
      </div></td>
      <td width="98">&nbsp;</td>
      <td align="right"></td>
      <td></td>
    </tr>
	 <tr>
	   <td align="right">SMTP Password 
	     
	     : </td>
	   <td><div align="left">
           <input name="smtpass" type="password" id="smtpass" value="<?= $db->result(0, "smtpass"); ?>" size="35" onMouseover="ddrivetip('SMTP Password / Password email anda')"; onMouseout="hideddrivetip()"/>
	   </div></td>
      <td width="119" align="right"><div align="left">
      </div></td>
      <td width="98">&nbsp;</td>
      <td align="right"></td>

      <td></td>
    </tr>
	 <tr>
	   <td align="right">Test Kirim Email
	     
	     : </td>
	   <td><div align="left">
          <a href="#" onClick="window.open('page.php?go=testmail','popup','width=280,height=100,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Test Email</button></a>
	   </div></td>
      <td width="119" align="right"><div align="left">
      </div></td>
      <td width="98">&nbsp;</td>
      <td align="right"></td>
      <td></td>
    </tr>
	 <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center" style="padding:5px;"><strong><i class="fa fa-gears"></i>&nbsp;&nbsp;SMS SETTING</strong></div></td>
    </tr>
	 <tr> 
      <td align="right">SMS Gateway :</td>
      <td colspan="5">
       <select name="smsgtw" class="form" onMouseover="ddrivetip('SMS Gateway default yang digunakan pada website ini adalah eksternal, yaitu menggunakan jasa sms gateway raja-sms.com atau zenziva.net, Untuk dapat menggunakan layanan sms gateway silahkan registrasi di website raja-sms.com atau zenziva.net. Anda bisa memilih produk sms regular atau sms masking.')"; onMouseout="hideddrivetip()">
         <? $smsgtw = $db->result(0, "smsgtw"); if($smsgtw == 1) { ?>
          <option value="">-- Pilih --</option>
          <option value="1" selected="selected">Raja-SMS (raja-sms.com)</option>
          <option value="2">Zenziva (zenziva.net)</option>
       <? } else if($smsgtw == 2) { ?>
          <option value="">-- Pilih --</option>
          <option value="1">Raja-SMS (raja-sms.com)</option>
          <option value="2" selected="selected">Zenziva (zenziva.net)</option>
       <? } else { ?>
          <option value="" selected="selected">-- Pilih --</option>
          <option value="1">Raja-SMS (raja-sms.com)</option>
          <option value="2">Zenziva (zenziva.net)</option>
       <? } ?>
       
        </select>
      </td>
    </tr>
	 
	 
	 
	 <?
	  $jsms = $db->result(0, "jsms");
	  if($jsms == 1) {
		?>
	<tr> 
      <td align="right">Jenis :</td>
      <td colspan="5"> <input type="radio" name="jsms" value="1" id="RadioGroup22m1_0" checked="checked" onMouseover="ddrivetip('SMS Reguler : Pengirim SMS Long Number (nomor HP).')"; onMouseout="hideddrivetip()"/>
          SMS Regular
          <input type="radio" name="jsms" value="2" id="RadioGroup22m1_1" onMouseover="ddrivetip('SMS Masking : Pengirim SMS adalah nama usaha.')"; onMouseout="hideddrivetip()"/>
        SMS Masking (WhatsApp Zenziva)</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Jenis :</td>
      <td colspan="5"> <input type="radio" name="jsms" value="1" id="RadioGroup22m2_0" onMouseover="ddrivetip('SMS Reguler : Pengirim SMS Long Number (nomor HP).')"; onMouseout="hideddrivetip()"/>
         SMS Regular
          <input type="radio" name="jsms" value="2" id="RadioGroup22m2_1" checked="checked" onMouseover="ddrivetip('SMS Masking : Pengirim SMS adalah nama usaha.')"; onMouseout="hideddrivetip()"/>
        SMS Masking (WhatsApp Zenziva)</td>
    </tr>
	<?
	}
	?>
	<tr class="row2">
	   <td align="right">Userkey / username
	     
	     : </td>
	   <td><div align="left">
           <input name="userkey" type="text" id="userkey" value="<?= $db->result(0, "userkey"); ?>" size="25" onMouseover="ddrivetip('Userkey zenziva.net / Username raja-sms.com.')"; onMouseout="hideddrivetip()"/>
	   </div></td>
      <td width="99" align="right"></td>
      <td width="143"></td>
      <td align="right"></td>
      <td></td>
    </tr>
    <tr>
      <td align="right">Passkey / Password  :      </td>
      <td><input name="passkey" type="password" id="passkey" value="<?= $db->result(0, "passkey"); ?>" size="25" onMouseover="ddrivetip('Passkey zenziva.net / Password raja-sms.com.')"; onMouseout="hideddrivetip()"/>
      </td>
      
      <td align="right">&nbsp;</td>
      <td><div align="left"></div></td>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td align="right">API :      </td>
      <td><input name="api_sms" type="text" id="api_sms" value="<?= $db->result(0, "api_sms"); ?>" size="25" onMouseover="ddrivetip('Kode API raja-sms.com.')"; onMouseout="hideddrivetip()"/>
      </td>
      
      <td align="right">&nbsp;</td>
      <td><div align="left"></div></td>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr class="row2">
	   <td align="right">Test Kirim SMS
	     
	     : </td>
	   <td><div align="left">
          <a href="#" onClick="window.open('page.php?go=testsms','popup','width=280,height=100,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button type="button" class='mmm_blue' style='padding:2px 6px;font-size:11px;'>Test SMS</button></a>
	   </div></td>
      <td width="99" align="right"><div align="left">
      </div></td>
      <td width="143">&nbsp;</td>
      <td align="right"></td>
      <td></td>
    </tr>
         <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center" style="padding:5px;"><strong><i class="fa fa-gears"></i>&nbsp;&nbsp;WHATSAPP</strong></div></td>
    </tr>
    <tr class="row2">
	   <td align="right">Test Kirim WhatsApp
	     
	     : </td>
	   <td><div align="left">
          <a href="#" onClick="window.open('page.php?go=testwa','popup','width=280,height=100,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button type="button" class='mmm_blue' style='padding:2px 6px;font-size:11px;'>Test WhatsApp</button></a>
	   </div></td>
      <td width="99" align="right"><div align="left">
      </div></td>
      <td width="143">&nbsp;</td>
      <td align="right"></td>
      <td></td>
    </tr>
    
    <tr> 
      <td align="right"></td>
      <td colspan="5"><i style="color:#F00;">Untuk dapat mengirimkan notofikasi WhatsApp, Berlangganan di https://woo-wa.com/ dan dapatkan API/Key<br />edit file public_html/dt_page/common.php, masukan API key di $apikeywoowa='api_key_anda';</i></td>
    </tr>
	<tr> 
      <td colspan="6" bgcolor="#DDDDE1">&nbsp;</td>
    </tr>
	<tr> 
      <td colspan="6" >&nbsp;</td>
    </tr>
	<tr> 
      <td colspan="6" > <?php if($demomode == 1){ ?>
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

<script type="text/javascript">
var tooltipObj = new DHTMLgoodies_formTooltip();
tooltipObj.setTooltipPosition('below');
tooltipObj.setPageBgColor('#FFFFFF');
tooltipObj.setTooltipCornerSize(15);
tooltipObj.initFormFieldTooltip();
</script> 
<?php } ?>

<?php
}
else if (isset($_GET['reset2fa'])) {
$db->update("admin", "norek='', bank=''", "userid='$valid_admin'");	
header("location: ?go=configuration&sess=admin&result=successreset");
exit;
?>
<?php
}
else if (isset($_GET['sess']) && $_GET['sess'] == "admin") {
?>
 <?
if(isset($_POST['submit'])){
$no = $_POST['no'];
		
		//$ym = $_POST['ym1']."|".$_POST['ym2']."|".$_POST['ym3']."|".$_POST['ym4'];
	//	$twt = $_POST['twiter']."|".$_POST['twiter2'];
		
		
			$db->update("configuration", "name='".mysql_real_escape_string($_POST['name'])."', email='".mysql_real_escape_string($_POST['email'])."', alamat='".mysql_real_escape_string($_POST['alamat'])."', hpsms='".mysql_real_escape_string($_POST['telepon'])."', hpsms2='".mysql_real_escape_string($_POST['telepon2'])."', ym='$ym', chats='".mysql_real_escape_string($_POST['chats'])."', fbshare='".mysql_real_escape_string($_POST['fbshare'])."', fblike='".mysql_real_escape_string($_POST['fblike'])."', twitshare='".mysql_real_escape_string($_POST['twitshare'])."', fbsend='".mysql_real_escape_string($_POST['fbsend'])."', gplusshare='".mysql_real_escape_string($_POST['gplusshare'])."', mailsend='".mysql_real_escape_string($_POST['mailsend'])."', instagr='".mysql_real_escape_string($_POST['instagr'])."', fbrec='".mysql_real_escape_string($_POST['fbrec'])."', linkdin='".mysql_real_escape_string($_POST['linkdin'])."', blogger='".mysql_real_escape_string($_POST['blogger'])."', pinterest='".mysql_real_escape_string($_POST['pinterest'])."', tumblr='".mysql_real_escape_string($_POST['tumblr'])."', stumbleupon='".mysql_real_escape_string($_POST['stumbleupon'])."', print='".mysql_real_escape_string($_POST['print'])."', baidu='".mysql_real_escape_string($_POST['baidu'])."', digg='".mysql_real_escape_string($_POST['digg'])."', membershare='".mysql_real_escape_string($_POST['membershare'])."', topmed='".$_POST['tm']."', fax='".mysql_real_escape_string($_POST['fax'])."', bbm='".mysql_real_escape_string($_POST['bbm'])."', whatsapp='".mysql_real_escape_string($_POST['whatsapp'])."', line='".mysql_real_escape_string($_POST['line'])."', fb='".$_POST['fb']."', twiter='".$_POST['twiter']."', topmed='".$_POST['tm']."', gt='".$_POST['gt']."', tracker_forex='".$_POST['tracker_forex']."', telegram='".$_POST['telegram']."', lchat='".mysql_real_escape_string($_POST['lchat'])."'", "id='$no'");
	//echo $komlev;
		
			
			 header("location: ?go=configuration&sess=admin&result=success");
	exit;
} else {
?>

<?php
$results = $_GET['result'];
if($results == "successreset") { 
echo "<div class='alert-box successs'><span>Sukses : </span>2FA berhasil di reset!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Konfigurasi Admin berhasi disimpan!</div>";
}
?>
<form id="form2" name="form2" method="POST" action="">
  <table width="90%" border="0" align="center" cellpadding="4" cellspacing="1">
    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>ADMINISTRATOR</strong></div></td>
    </tr>
	<?
			$chats = $db->result(0, "chats");
		if($chats == 1) {
			?>
	<tr> 
      <td align="right">Livechat :</td>
      <td colspan="5"> <input type="radio" name="chats" value="1" id="RadioGroup4t6_0" checked="checked"/>
          Tawk
          <input type="radio" name="chats" value="2" id="RadioGroup4t6_1" />
        Whatshelp
          
          <input type="radio" name="chats" value="3" id="RadioGroup4t6_1" />
        Tawk & Whatshelp
        
          <input type="radio" name="chats" value="0" id="RadioGroup4t6_1" />
        Nonaktifkan
        </td>
    </tr>
	 
	
	<?
		
		} else if($chats == 2) {
			?>
	<tr> 
      <td align="right">Livechat :</td>
      <td colspan="5"> <input type="radio" name="chats" value="1" id="RadioGroup4t6_0"/>
          Tawk
             <input type="radio" name="chats" value="2" id="RadioGroup4t6_1" checked="checked" />
        Whatshelp
        
         <input type="radio" name="chats" value="3" id="RadioGroup4t6_1" />
        Tawk & Whatshelp
        
          <input type="radio" name="chats" value="0" id="RadioGroup4t6_1" />
        Nonaktifkan</td>
    </tr>
	
	<?
		
		} else if($chats == 3) {
			?>
	<tr> 
      <td align="right">Livechat :</td>
      <td colspan="5"> <input type="radio" name="chats" value="1" id="RadioGroup4t6_0"/>
          Tawk
             <input type="radio" name="chats" value="2" id="RadioGroup4t6_1" />
        Whatshelp
        
         <input type="radio" name="chats" value="3" id="RadioGroup4t6_1" checked="checked" />
        Tawk & Whatshelp
        
          <input type="radio" name="chats" value="0" id="RadioGroup4t6_1" />
        Nonaktifkan</td>
    </tr>
	
	<?
	} else {
	?>
	<tr> 
      <td align="right">Livechat  :</td>
      <td colspan="5"> <input type="radio" name="chats" value="1" id="RadioGroup4t7_0" />
          Aktifkan
             <input type="radio" name="chats" value="2" id="RadioGroup4t6_1" />
        Whatshelp
          <input type="radio" name="chats" value="3" id="RadioGroup4t6_1" />
        Tawk & Whatshelp
          <input type="radio" name="chats" value="0" id="RadioGroup4t7_1" checked="checked" />
        Nonaktifkan</td>
    </tr>
	<?
}
	?>
      <tr> 
      <td align="right"></td>
      <td colspan="5"><i style="color:#F00;">Isi kode widget tawk.to ada di public_html/tawkto.php, isi kode widget Whatshelp di public_html/whatshelp.php</i></td>
    </tr>
	
     <tr> 
      <td align="right" valign="top">2FA Admin :</td>
      <td colspan="5" valign="top">
       <a class='iframe7' href='page.php?go=googleauth'>
	   <button class='primadetail' style='padding:2px 6px;font-size:13px;' type="button">2FA Admin</button></a>
     
       &nbsp;&nbsp;&nbsp;
	   <a href='index.php?go=configuration&reset2fa'><button class='submit' style='padding:2px 6px;font-size:13px;' type="button">Reset</button></a>
	  </td>
    </tr>
    <tr> 
      <td align="right">Nama :</td>
      <td colspan="5"><input name="name" type="text" id="name" value="<?= $db->result(0, "name"); ?>" size="40" /></td>
    </tr>
    <tr> 
      <td align="right">E-mail :</td>
      <td colspan="5"><input name="email" type="text" id="email" value="<?= $db->result(0, "email"); ?>" size="40" onMouseover="ddrivetip('Email ini harus satu domain dengan email SMTP yang anda setting di konfigurasi web.')"; onMouseout="hideddrivetip()"/></td>
    </tr>
    <tr> 
      <td align="right" >Alamat Lengkap :</td>
      <td colspan="5"><input name="alamat" type="text" id="email3" value="<?= $db->result(0, "alamat"); ?>" size="40" /></td>
    </tr>
  
    <tr> 
      <td align="right">HP :</td>
      <td colspan="5"><input name="telepon" type="text" id="telepon" value="<?= $db->result(0, "hpsms"); ?>" size="40" /></td>
    </tr>
	
    <tr> 
      <td align="right">WhatsApp :</td>
      <td colspan="5"><input name="whatsapp" type="text" id="whatsapp" value="<?= $db->result(0, "whatsapp"); ?>" size="40" /></td>
    </tr>
    
    <tr> 
      <td align="right">Telegram :</td>
      <td colspan="5"><input name="telegram" type="text" id="telegram" value="<?= $db->result(0, "telegram"); ?>" size="40" /></td>
    </tr>
  
     <tr> 
      <td align="right">FB :</td>
      <td colspan="5"><input name="fb" type="text" id="fb" value="<?= $db->result(0, "fb"); ?>" size="40" onMouseover="ddrivetip('Facebook FanPage Username (tanpa http://)')"; onMouseout="hideddrivetip()"/> 
     </td>
    </tr>
	
	<tr> 
      <td align="right">Twiter :</td>
      <td colspan="5"><input name="twiter" type="text" id="twiter" value="<?= $db->result(0, "twiter"); ?>" size="40" onMouseover="ddrivetip('Twitter')"; onMouseout="hideddrivetip()"/>
    </tr>
	
	
	<?
			$gtne = $db->result(0, "gt");
			if($gtne == 1) {
			?>
	<tr> 
      <td align="right">Google Translate :</td>
      <td colspan="5"> <input type="radio" name="gt" value="1" id="RadioGroupa1_0" checked="checked" onMouseover="ddrivetip('Tampilkan Widget Google Translate')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="gt" value="0" id="RadioGroupa1_1"  onMouseover="ddrivetip('Sembunyikan Widget Google Translate')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Google Translate :</td>
      <td colspan="5"> <input type="radio" name="gt" value="1" id="RadioGroupa2_0"  onMouseover="ddrivetip('Tampilkan Widget Google Translate')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="gt" value="0" id="RadioGroupa2_1" checked="checked"  onMouseover="ddrivetip('Sembunyikan Widget Google Translate')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
   <?
			$tracker_forex = $db->result(0, "tracker_forex");
			if($tracker_forex == 1) {
			?>
	<tr> 
      <td align="right">Forex Ticker :</td>
      <td colspan="5"> <input type="radio" name="tracker_forex" value="1" id="tracker_forex_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Widget Forex Ticker')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="tracker_forex" value="0" id="tracker_forex_1" onMouseover="ddrivetip('Sembunyikan Widget Forex Ticker')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Forex Ticker :</td>
      <td colspan="5"> <input type="radio" name="tracker_forex" value="1" id="tracker_forex_0" onMouseover="ddrivetip('Tampilkan Widget Forex Ticker')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="tracker_forex" value="0" id="tracker_forex_1" checked="checked" onMouseover="ddrivetip('Sembunykan Widget Forex Ticker')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
	   
   
	
	   
	   <?
			$tpmed = $db->result(0, "topmed");
			if($tpmed == 1) {
			?>
	<tr> 
      <td align="right">Share This :</td>
      <td colspan="5"> <input type="radio" name="tm" value="1" id="RadioGroup3_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Widget Sharethis')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="tm" value="0" id="RadioGroup3_1" onMouseover="ddrivetip('Sembunykan Widget Sharethis')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Share This :</td>
      <td colspan="5"> <input type="radio" name="tm" value="1" id="RadioGroup4_0" onMouseover="ddrivetip('Tampilkan Widget Sharethis')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="tm" value="0" id="RadioGroup4_1" checked="checked" onMouseover="ddrivetip('Sembunykan Widget Sharethis')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
	

<?
			$fbshare = $db->result(0, "fbshare");
			if($fbshare == 1) {
			?>
	<tr> 
      <td align="right">Facebok Share :</td>
      <td colspan="5"> <input type="radio" name="fbshare" value="1" id="RadioGroup3fb_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Facebook Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fbshare" value="0" id="RadioGroup3fb_1" onMouseover="ddrivetip('Sembunykan Facebook Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Facebok Share :</td>
      <td colspan="5"> <input type="radio" name="fbshare" value="1" id="RadioGroup4fb_0" onMouseover="ddrivetip('Tampilkan Facebook Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fbshare" value="0" id="RadioGroup4fb_1" checked="checked" onMouseover="ddrivetip('Sembunykan Facebook Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
<?
			$fblike = $db->result(0, "fblike");
			if($fblike == 1) {
			?>
	<tr> 
      <td align="right">Facebok Like :</td>
      <td colspan="5"> <input type="radio" name="fblike" value="1" id="RadioGroup3fbl_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Facebook Like')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fblike" value="0" id="RadioGroup3fbl_1" onMouseover="ddrivetip('Sembunykan Facebook Like')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Facebok Like :</td>
      <td colspan="5"> <input type="radio" name="fblike" value="1" id="RadioGroup4fbl_0" onMouseover="ddrivetip('Tampilkan Facebook Like')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fblike" value="0" id="RadioGroup4fbl_1" checked="checked" onMouseover="ddrivetip('Sembunykan Facebook Like')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>

<?
			$twitshare = $db->result(0, "twitshare");
			if($twitshare == 1) {
			?>
	<tr> 
      <td align="right">Twitter Share :</td>
      <td colspan="5"> <input type="radio" name="twitshare" value="1" id="RadioGroup3tw_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Twitter Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="twitshare" value="0" id="RadioGroup3tw_1" onMouseover="ddrivetip('Sembunykan Twitter Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Twitter Share :</td>
      <td colspan="5"> <input type="radio" name="twitshare" value="1" id="RadioGroup4tw_0" onMouseover="ddrivetip('Tampilkan Twitter Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="twitshare" value="0" id="RadioGroup4tw_1" checked="checked" onMouseover="ddrivetip('Sembunykan Twitter Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
<?
			$gplusshare = $db->result(0, "gplusshare");
			if($gplusshare == 1) {
			?>
	<tr> 
      <td align="right">Google Plus Share :</td>
      <td colspan="5"> <input type="radio" name="gplusshare" value="1" id="RadioGroup3gp_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Google Plus Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="gplusshare" value="0" id="RadioGroup3gp_1" onMouseover="ddrivetip('Sembunykan Google Plus Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Google Plus Share :</td>
      <td colspan="5"> <input type="radio" name="gplusshare" value="1" id="RadioGroup4gp_0" onMouseover="ddrivetip('Tampilkan Google Plus Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="gplusshare" value="0" id="RadioGroup4gp_1" checked="checked" onMouseover="ddrivetip('Sembunykan Google Plus Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>

<?
			$fbsend = $db->result(0, "fbsend");
			if($fbsend == 1) {
			?>
	<tr> 
      <td align="right">Facebook Send :</td>
      <td colspan="5"> <input type="radio" name="fbsend" value="1" id="RadioGroup3fbsd_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Facebook Send')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fbsend" value="0" id="RadioGroup3fbsd_1" onMouseover="ddrivetip('Sembunykan Facebook Send')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Facebook Send :</td>
      <td colspan="5"> <input type="radio" name="fbsend" value="1" id="RadioGroup4fbsd_0" onMouseover="ddrivetip('Tampilkan Facebook Send')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fbsend" value="0" id="RadioGroup4fbsd_1" checked="checked" onMouseover="ddrivetip('Sembunykan Facebook Send')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
<?
			$fbrec = $db->result(0, "fbrec");
			if($fbrec == 1) {
			?>
	<tr> 
      <td align="right">Facebook Recomended :</td>
      <td colspan="5"> <input type="radio" name="fbrec" value="1" id="RadioGroup3fbrec_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Facebook Recomended')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fbrec" value="0" id="RadioGroup3fbrec_1" onMouseover="ddrivetip('Sembunykan Facebook Recomended')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Facebook Recomended :</td>
      <td colspan="5"> <input type="radio" name="fbrec" value="1" id="RadioGroup4fbrec_0" onMouseover="ddrivetip('Tampilkan Facebook Recomended')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="fbrec" value="0" id="RadioGroup4fbrec_1" checked="checked" onMouseover="ddrivetip('Sembunykan Facebook Recomended')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
<?
			$mailsend = $db->result(0, "mailsend");
			if($mailsend == 1) {
			?>
	<tr> 
      <td align="right">Email Send :</td>
      <td colspan="5"> <input type="radio" name="mailsend" value="1" id="RadioGroup3mlsd_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Email Send')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="mailsend" value="0" id="RadioGroup3mlsd_1" onMouseover="ddrivetip('Sembunykan Email Send')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Email Send :</td>
      <td colspan="5"> <input type="radio" name="mailsend" value="1" id="RadioGroup4mlsd_0" onMouseover="ddrivetip('Tampilkan Email Send')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="mailsend" value="0" id="RadioGroup4mlsd_1" checked="checked" onMouseover="ddrivetip('Sembunykan Email Send')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>

<?
			$instagr = $db->result(0, "instagr");
			if($instagr == 1) {
			?>
	<tr> 
      <td align="right"> Instagram Share :</td>
      <td colspan="5"> <input type="radio" name="instagr" value="1" id="RadioGroup3instagr_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Instagram Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="instagr" value="0" id="RadioGroup3instagr_1" onMouseover="ddrivetip('Sembunykan Instagram Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> Instagram Share :</td>
      <td colspan="5"> <input type="radio" name="instagr" value="1" id="RadioGroup4instagr_0" onMouseover="ddrivetip('Tampilkan Instagram Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="instagr" value="0" id="RadioGroup4instagr_1" checked="checked" onMouseover="ddrivetip('Sembunykan Instagram Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>

<?
			$linkdin = $db->result(0, "linkdin");
			if($linkdin == 1) {
			?>
	<tr> 
      <td align="right"> LinkedIn Share :</td>
      <td colspan="5"> <input type="radio" name="linkdin" value="1" id="RadioGroup3linkdin_0" checked="checked"  onMouseover="ddrivetip('Tampilkan LinkedIn Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="linkdin" value="0" id="RadioGroup3linkdin_1" onMouseover="ddrivetip('Sembunykan LinkedIn Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> LinkedIn Share :</td>
      <td colspan="5"> <input type="radio" name="linkdin" value="1" id="RadioGroup4linkdin_0" onMouseover="ddrivetip('Tampilkan LinkedIn Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="linkdin" value="0" id="RadioGroup4linkdin_1" checked="checked" onMouseover="ddrivetip('Sembunykan LinkedIn Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
    
    <?
			$blogger = $db->result(0, "blogger");
			if($blogger == 1) {
			?>
	<tr> 
      <td align="right"> Blogger Share :</td>
      <td colspan="5"> <input type="radio" name="blogger" value="1" id="blogger_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Blogger Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="blogger" value="0" id="blogger_1" onMouseover="ddrivetip('Sembunykan Blogger Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> Blogger Share :</td>
      <td colspan="5"> <input type="radio" name="blogger" value="1" id="blogger_0" onMouseover="ddrivetip('Tampilkan Blogger Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="blogger" value="0" id="blogger_1" checked="checked" onMouseover="ddrivetip('Sembunykan Blogger Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
    
     <?
			$tumblr = $db->result(0, "tumblr");
			if($tumblr == 1) {
			?>
	<tr> 
      <td align="right"> Tumblr Share :</td>
      <td colspan="5"> <input type="radio" name="tumblr" value="1" id="tumblr_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Tumblr Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="tumblr" value="0" id="tumblr_1" onMouseover="ddrivetip('Sembunykan Tumblr Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> Tumblr Share :</td>
      <td colspan="5"> <input type="radio" name="tumblr" value="1" id="tumblr_0" onMouseover="ddrivetip('Tampilkan Tumblr Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="tumblr" value="0" id="tumblr_1" checked="checked" onMouseover="ddrivetip('Sembunykan Tumblr Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
    
         <?
			$pinterest = $db->result(0, "pinterest");
			if($pinterest == 1) {
			?>
	<tr> 
      <td align="right"> Pinterest Share :</td>
      <td colspan="5"> <input type="radio" name="pinterest" value="1" id="pinterest_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Pinterest Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="pinterest" value="0" id="pinterest_1" onMouseover="ddrivetip('Sembunykan Pinterest Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> Pinterest Share :</td>
      <td colspan="5"> <input type="radio" name="pinterest" value="1" id="pinterest_0" onMouseover="ddrivetip('Tampilkan Pinterest Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="pinterest" value="0" id="pinterest_1" checked="checked" onMouseover="ddrivetip('Sembunykan Pinterest Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
    
     <?
			$print = $db->result(0, "print");
			if($print == 1) {
			?>
	<tr> 
      <td align="right"> Print Button :</td>
      <td colspan="5"> <input type="radio" name="print" value="1" id="print_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Print Button')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="print" value="0" id="print_1" onMouseover="ddrivetip('Sembunykan Print Button')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> Print Button :</td>
      <td colspan="5"> <input type="radio" name="print" value="1" id="print_0" onMouseover="ddrivetip('Tampilkan Print Button')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="print" value="0" id="print_1" checked="checked" onMouseover="ddrivetip('Sembunykan Print Button')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
    <?
			$stumbleupon = $db->result(0, "stumbleupon");
			if($stumbleupon == 1) {
			?>
	<tr> 
      <td align="right"> StumbleUpon Share :</td>
      <td colspan="5"> <input type="radio" name="stumbleupon" value="1" id="stumbleupon_0" checked="checked"  onMouseover="ddrivetip('Tampilkan StumbleUpon Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="stumbleupon" value="0" id="stumbleupon_1" onMouseover="ddrivetip('Sembunykan StumbleUpon Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> StumbleUpon Share :</td>
      <td colspan="5"> <input type="radio" name="stumbleupon" value="1" id="stumbleupon_0" onMouseover="ddrivetip('Tampilkan StumbleUpon Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="stumbleupon" value="0" id="stumbleupon_1" checked="checked" onMouseover="ddrivetip('Sembunykan StumbleUpon Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
      <?
			$baidu = $db->result(0, "baidu");
			if($baidu == 1) {
			?>
	<tr> 
      <td align="right"> Baidu Share :</td>
      <td colspan="5"> <input type="radio" name="baidu" value="1" id="baidu_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Baidu Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="baidu" value="0" id="baidu_1" onMouseover="ddrivetip('Sembunykan Baidu Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> Baidu Share :</td>
      <td colspan="5"> <input type="radio" name="baidu" value="1" id="baidu_0" onMouseover="ddrivetip('Tampilkan Baidu Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="baidu" value="0" id="baidu_1" checked="checked" onMouseover="ddrivetip('Sembunykan Baidu Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
    
    <?
			$digg = $db->result(0, "digg");
			if($digg == 1) {
			?>
	<tr> 
      <td align="right"> Digg Share :</td>
      <td colspan="5"> <input type="radio" name="digg" value="1" id="digg_0" checked="checked"  onMouseover="ddrivetip('Tampilkan Digg Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="digg" value="0" id="baidu_1" onMouseover="ddrivetip('Sembunykan Digg Share')"; onMouseout="hideddrivetip()" />
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right"> Digg Share :</td>
      <td colspan="5"> <input type="radio" name="digg" value="1" id="digg_0" onMouseover="ddrivetip('Tampilkan Digg Share')"; onMouseout="hideddrivetip()"/>
          Tampilkan
          <input type="radio" name="digg" value="0" id="digg_1" checked="checked" onMouseover="ddrivetip('Sembunykan Digg Share')"; onMouseout="hideddrivetip()"/>
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
 <tr> 
      <td colspan="6" bgcolor="#DDDDE1">&nbsp;</td>
    </tr>
	<tr> 
      <td colspan="6" >
        <input name="no" type="hidden" id="no" value="1" size="10" />&nbsp;</td>
    </tr>
   <tr> 
      <td colspan="6" bgcolor=""> <?php if($demomode == 1){ ?>
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

<script type="text/javascript">
var tooltipObj = new DHTMLgoodies_formTooltip();
tooltipObj.setTooltipPosition('below');
tooltipObj.setPageBgColor('#FFFFFF');
tooltipObj.setTooltipCornerSize(15);
tooltipObj.initFormFieldTooltip();
</script> 
<?php } ?>
<?php
}
else if (isset($_GET['sess']) && $_GET['sess'] == "system") {

?>
<?
if(isset($_POST['submit'])){
$no = $_POST['no'];
		
			$komlev = $_POST['komlev0']."|".$_POST['komlev1']."|".$_POST['komlev2']."|".$_POST['komlev3']."|".$_POST['komlev4']."|".$_POST['komlev5']."|".$_POST['komlev6']."|".$_POST['komlev7']."|".$_POST['komlev8']."|".$_POST['komlev9']."|".$_POST['komlev10']."|".$_POST['komlev11']."|".$_POST['komlev12']."|".$_POST['komlev13']."|".$_POST['komlev14']."|".$_POST['komlev15']."|".$_POST['komlev16']."|".$_POST['komlev17']."|".$_POST['komlev18']."|".$_POST['komlev19']."|".$_POST['komlev20'];
			
			$komsponsor = $_POST['k_sponsor1']."|".$_POST['k_sponsor2']."|".$_POST['k_sponsor3']."|".$_POST['k_sponsor4']."|".$_POST['k_sponsor5']."|".$_POST['k_sponsor6']."|".$_POST['k_sponsor7']."|".$_POST['k_sponsor8']."|".$_POST['k_sponsor9']."|".$_POST['k_sponsor10']."|".$_POST['k_sponsor11']."|".$_POST['k_sponsor12']."|".$_POST['k_sponsor13']."|".$_POST['k_sponsor14']."|".$_POST['k_sponsor15']."|".$_POST['k_sponsor16'];
			
			$kompasangan = $_POST['k_pass1']."|".$_POST['k_pass2']."|".$_POST['k_pass3']."|".$_POST['k_pass4']."|".$_POST['k_pass5']."|".$_POST['k_pass6']."|".$_POST['k_pass7']."|".$_POST['k_pass8']."|".$_POST['k_pass9']."|".$_POST['k_pass10']."|".$_POST['k_pass11'];
			$sponcass = $_POST['spcass1']."|".$_POST['spcass2']."|".$_POST['spcass3']."|".$_POST['spcass4']."|".$_POST['spcass5']."|".$_POST['spcass6']."|".$_POST['spcass7']."|".$_POST['spcass8']."|".$_POST['spcass9']."|".$_POST['spcass10']."|".$_POST['spcass11'];
			$passcass = $_POST['passcass1']."|".$_POST['passcass2']."|".$_POST['passcass3']."|".$_POST['passcass4']."|".$_POST['passcass5']."|".$_POST['passcass6']."|".$_POST['passcass7']."|".$_POST['passcass8']."|".$_POST['passcass9']."|".$_POST['passcass10']."|".$_POST['passcass11'];
			$cass = $_POST['cass1']."|".$_POST['cass2']."|".$_POST['cass3']."|".$_POST['cass4']."|".$_POST['cass5']."|".$_POST['cass6']."|".$_POST['cass7']."|".$_POST['cass8']."|".$_POST['cass9']."|".$_POST['cass10']."|".$_POST['cass11'];
			
			$biaya = $_POST['biaya1']."|".$_POST['biaya2']."|".$_POST['biaya3']."|".$_POST['biaya4']."|".$_POST['biaya5']."|".$_POST['biaya6']."|".$_POST['biaya7']."|".$_POST['biaya8']."|".$_POST['biaya9']."|".$_POST['biaya10']."|".$_POST['biaya11']."|".$_POST['biaya12']."|".$_POST['biaya13']."|".$_POST['biaya14']."|".$_POST['biaya15']."|".$_POST['biaya16']."|".$_POST['biaya17']."|".$_POST['biaya18']."|".$_POST['biaya19']."|".$_POST['biaya20'];
			
			$biaya2 = $_POST['biayax1']."|".$_POST['biayax2']."|".$_POST['biayax3']."|".$_POST['biayax4']."|".$_POST['biayax5']."|".$_POST['biayax6']."|".$_POST['biayax7']."|".$_POST['biayax8']."|".$_POST['biayax9']."|".$_POST['biayax10']."|".$_POST['biayax11'];
			
			$cssbckk = $_POST['csbcke1']."|".$_POST['csbcke2']."|".$_POST['csbcke3']."|".$_POST['csbcke4']."|".$_POST['csbcke5']."|".$_POST['csbcke6']."|".$_POST['csbcke7']."|".$_POST['csbcke8']."|".$_POST['csbcke9']."|".$_POST['csbcke10'];
			
			
			
		
			$cycles = $_POST['cycle1']."|".$_POST['cycle2']."|".$_POST['cycle3']."|".$_POST['cycle4']."|".$_POST['cycle5']."|".$_POST['cycle6']."|".$_POST['cycle7']."|".$_POST['cycle8']."|".$_POST['cycle9']."|".$_POST['cycle10']."|".$_POST['cycle11'];
			
			$mwdne = $_POST['mwd1']."|".$_POST['mwd2']."|".$_POST['mwd3']."|".$_POST['mwd4']."|".$_POST['mwd5']."|".$_POST['mwd6']."|".$_POST['mwd7']."|".$_POST['mwd8']."|".$_POST['mwd9']."|".$_POST['mwd10'];
			$mwdnex = $_POST['mwdx1']."|".$_POST['mwdx2']."|".$_POST['mwdx3']."|".$_POST['mwdx4']."|".$_POST['mwdx5']."|".$_POST['mwdx6']."|".$_POST['mwdx7']."|".$_POST['mwdx8']."|".$_POST['mwdx9']."|".$_POST['mwdx10'];
			
			$ttcycles = $_POST['ttcycle1']."|".$_POST['ttcycle2']."|".$_POST['ttcycle3']."|".$_POST['ttcycle4']."|".$_POST['ttcycle5']."|".$_POST['ttcycle6']."|".$_POST['ttcycle7']."|".$_POST['ttcycle8']."|".$_POST['ttcycle9']."|".$_POST['ttcycle10']."|".$_POST['ttcycle11'];
			
			$peringkat = $_POST['peringkat1']."|".$_POST['peringkat2']."|".$_POST['peringkat3']."|".$_POST['peringkat4']."|".$_POST['peringkat5']."|".$_POST['peringkat6']."|".$_POST['peringkat7']."|".$_POST['peringkat8']."|".$_POST['peringkat9']."|".$_POST['peringkat10']."|".$_POST['peringkat11']."|".$_POST['peringkat12']."|".$_POST['peringkat13']."|".$_POST['peringkat14']."|".$_POST['peringkat15']."|".$_POST['peringkat16']."|".$_POST['peringkat17']."|".$_POST['peringkat18']."|".$_POST['peringkat19']."|".$_POST['peringkat20'];
			
			
		$peringkat2 = $_POST['jumlah1']."|".$_POST['rank1']."|".$_POST['reward1']."|".$_POST['gaji1']."|".$_POST['jumlah2']."|".$_POST['rank2']."|".$_POST['reward2']."|".$_POST['gaji2']."|".$_POST['jumlah3']."|".$_POST['rank3']."|".$_POST['reward3']."|".$_POST['gaji3']."|".$_POST['jumlah4']."|".$_POST['rank4']."|".$_POST['reward4']."|".$_POST['gaji4']."|".$_POST['jumlah5']."|".$_POST['rank5']."|".$_POST['reward5']."|".$_POST['gaji5']."|".$_POST['jumlah6']."|".$_POST['rank6']."|".$_POST['reward6']."|".$_POST['gaji6']."|".$_POST['jumlah7']."|".$_POST['rank7']."|".$_POST['reward7']."|".$_POST['gaji7']."|".$_POST['jumlah8']."|".$_POST['rank8']."|".$_POST['reward8']."|".$_POST['gaji8']."|".$_POST['jumlah9']."|".$_POST['rank9']."|".$_POST['reward9']."|".$_POST['gaji9']."|".$_POST['jumlah10']."|".$_POST['rank10']."|".$_POST['reward10']."|".$_POST['gaji10'];
		
		$peringkat3 = $_POST['jumlahx1']."|".$_POST['rankx1']."|".$_POST['rewardx1']."|".$_POST['gajix1']."|".$_POST['jumlahx2']."|".$_POST['rankx2']."|".$_POST['rewardx2']."|".$_POST['gajix2']."|".$_POST['jumlahx3']."|".$_POST['rankx3']."|".$_POST['rewardx3']."|".$_POST['gajix3']."|".$_POST['jumlahx4']."|".$_POST['rankx4']."|".$_POST['rewardx4']."|".$_POST['gajix4']."|".$_POST['jumlahx5']."|".$_POST['rankx5']."|".$_POST['rewardx5']."|".$_POST['gajix5']."|".$_POST['jumlahx6']."|".$_POST['rankx6']."|".$_POST['rewardx6']."|".$_POST['gajix6']."|".$_POST['jumlahx7']."|".$_POST['rankx7']."|".$_POST['rewardx7']."|".$_POST['gajix7']."|".$_POST['jumlahx8']."|".$_POST['rankx8']."|".$_POST['rewardx8']."|".$_POST['gajix8']."|".$_POST['jumlahx9']."|".$_POST['rankx9']."|".$_POST['rewardx9']."|".$_POST['gajix9']."|".$_POST['jumlahx10']."|".$_POST['rankx10']."|".$_POST['rewardx10']."|".$_POST['gajix10'];	
			
			
			$forex = $_POST['forex_kontrak']."|".$_POST['forex_kontrak2']."|".$_POST['forex_kontrak3']."|".$_POST['forex_kontrak4']."|".$_POST['forex_kontrak5']."|".$_POST['forex_kontrak6'];
			
			$forex_profit = $_POST['forex_profit1']."|".$_POST['forex_profit2']."|".$_POST['forex_profit3']."|".$_POST['forex_profit4']."|".$_POST['forex_profit5']."|".$_POST['forex_profit6']."|".$_POST['forex_profit7']."|".$_POST['forex_profit8']."|".$_POST['forex_profit9']."|".$_POST['forex_profit10']."|".$_POST['forex_profit11']."|".$_POST['forex_profit12'];
			$invest = $_POST['invest1']."|".$_POST['invest2']."|".$_POST['invest3']."|".$_POST['invest4']."|".$_POST['invest5']."|".$_POST['invest6']."|".$_POST['invest7']."|".$_POST['invest8']."|".$_POST['invest9']."|".$_POST['invest10']."|".$_POST['invest11']."|".$_POST['invest12']."|".$_POST['invest13']."|".$_POST['invest14']."|".$_POST['invest14']."|".$_POST['invest15']."|".$_POST['invest16']."|".$_POST['invest17']."|".$_POST['invest18']."|".$_POST['invest19']."|".$_POST['invest20'];
			
			$priode_invest = $_POST['prinvest1']."|".$_POST['prinvest2']."|".$_POST['prinvest3']."|".$_POST['prinvest4']."|".$_POST['prinvest5']."|".$_POST['prinvest6']."|".$_POST['prinvest7']."|".$_POST['prinvest8']."|".$_POST['prinvest9']."|".$_POST['prinvest10']."|".$_POST['prinvest11']."|".$_POST['prinvest12']."|".$_POST['prinvest13']."|".$_POST['prinvest14']."|".$_POST['prinvest14']."|".$_POST['prinvest15']."|".$_POST['prinvest16']."|".$_POST['prinvest17']."|".$_POST['prinvest18']."|".$_POST['prinvest19']."|".$_POST['prinvest20'];
			
			$kontrak_investasi = $_POST['k_inv1']."|".$_POST['k_inv2']."|".$_POST['k_inv3']."|".$_POST['k_inv4']."|".$_POST['k_inv5']."|".$_POST['k_inv6']."|".$_POST['k_inv7']."|".$_POST['k_inv8']."|".$_POST['k_inv9']."|".$_POST['k_inv10']."|".$_POST['k_inv11']."|".$_POST['k_inv12']."|".$_POST['k_inv13']."|".$_POST['k_inv14']."|".$_POST['k_inv14']."|".$_POST['k_inv15']."|".$_POST['k_inv16']."|".$_POST['k_inv17']."|".$_POST['k_inv18']."|".$_POST['k_inv19']."|".$_POST['k_inv20'];
			$masa_kontrak = $_POST['kontrak_persen']."|".$_POST['kontrak_hari'];
			$kdlman = $_POST['level']."|".$_POST['jual'];
			$flushout = $_POST['fs1']."|".$_POST['fs2']."|".$_POST['fs3']."|".$_POST['fs4']."|".$_POST['fs5']."|".$_POST['fs6']."|".$_POST['fs7']."|".$_POST['fs8']."|".$_POST['fs9']."|".$_POST['fs10'];
			$jmlote = $_POST['jmlt1']."|".$_POST['jmlt2']."|".$_POST['jmlt3']."|".$_POST['jmlt4']."|".$_POST['jmlt5']."|".$_POST['jmlt6'];
			$profitdwn = $_POST['prodw1']."|".$_POST['prodw2']."|".$_POST['prodw3']."|".$_POST['prodw4']."|".$_POST['prodw5']."|".$_POST['prodw6'];
			$dtconvrt = $_POST['minconvcoin']."|".$_POST['maxconvcoin']."|".$_POST['feecnvcoin'];
        $dtscne = $_POST['minselco']."|".$_POST['maxselco']."|".$_POST['feeselco'];
       $dttrne = $_POST['mintrnco']."|".$_POST['maxtrnco']."|".$_POST['feetrnco'];
       $btstarike = $_POST['btstarikbonus']."|".$_POST['btstarikprofit'];
	   
	 
	   $wltcsh = $_POST['buycsh']."|".$_POST['minbuycsh']."|".$_POST['maxbuycsh']."|".$_POST['feebuycsh']."|".$_POST['wdcsh']."|".$_POST['minwdcsh']."|".$_POST['maxwdcsh']."|".$_POST['feewdcsh']."|".$_POST['transcsh']."|".$_POST['mintranscsh']."|".$_POST['maxtranscsh']."|".$_POST['feetranscsh'];
	   
	 
	    $cspainex = $_POST['cspain']."|".$_POST['cspain2']."|".$_POST['cspain3'];
		$regwall = $_POST['regwale']."|".$_POST['regwale2'];
	    $proproex = $_POST['proproe']."|".$_POST['proproe2']."|".$_POST['proproe3'];
		
		
	    $mtchee = $_POST['matchx1']."|".$_POST['matchx2']."|".$_POST['matchx3']."|".$_POST['matchx4']."|".$_POST['matchx5'];
		
	    $mtcheexx = $_POST['mtcprox1']."|".$_POST['mtcprox2']."|".$_POST['mtcprox3']."|".$_POST['mtcprox4']."|".$_POST['mtcprox5']."|".$_POST['mtcprox6']."|".$_POST['mtcprox7']."|".$_POST['mtcprox8']."|".$_POST['mtcprox9']."|".$_POST['mtcprox10'];
		
		$mtcphaire = $_POST['mtcpair1']."|".$_POST['mtcpair2']."|".$_POST['mtcpair3']."|".$_POST['mtcpair4']."|".$_POST['mtcpair5'];
		
		$minprones = $_POST['mn_pro1']."|".$_POST['mn_pro2']."|".$_POST['mn_pro3']."|".$_POST['mn_pro4']."|".$_POST['mn_pro5']."|".$_POST['mn_pro6']."|".$_POST['mn_pro7']."|".$_POST['mn_pro8']."|".$_POST['mn_pro9']."|".$_POST['mn_pro10'];
		
		$maxprones = $_POST['mx_pro1']."|".$_POST['mx_pro2']."|".$_POST['mx_pro3']."|".$_POST['mx_pro4']."|".$_POST['mx_pro5']."|".$_POST['mx_pro6']."|".$_POST['mx_pro7']."|".$_POST['mx_pro8']."|".$_POST['mx_pro9']."|".$_POST['mx_pro10'];
	   $syswdnecc = $_POST['syswdbank']."|".$_POST['syswdbtc']."|".$_POST['syswddoge']."|".$_POST['syswdltc'];
		
			
		$db->update("configuration", "kurs='".$_POST['kurs']."', komisi_sponsor='".$komsponsor."', kompasangan='".$kompasangan."', komlev='$komlev', kedalaman='$kdlman', point='".$_POST['point']."', komjual='$komjual', id_reg='".$_POST['id_reg']."', id_reg2='".$_POST['id_reg2']."', flushout='".$flushout."', biaya='$biaya',peringkat='$peringkat', biaya2='".$biaya2."', point_reward='$point_reward', kontrak='$forex', topsponsor='".$_POST['topsponsor']."', persen_profit='".$forex_profit."', mwd='".$mwdne."', mwd2='".$mwdnex."', mwd3='".$_POST['mwd3']."', mwd4='".$_POST['mwd4']."', otos='".$_POST['otos']."', kedalaman_paket='".mysql_real_escape_string($_POST['kdlm_paket'])."', exptrans='".mysql_real_escape_string($_POST['exptrans'])."', invest_profits='$invest', periode_profits='".$priode_invest."', kontrak_pro='".$kontrak_investasi."', peringkat2='$peringkat2', defcurr='".$_POST['defcurr']."', onoto='".mysql_real_escape_string($_POST['onoto'])."', max_invest='".$_POST['max_invest']."', charge_transfer='".$_POST['charge_transfer']."', hargatiket='".$_POST['hargatiket']."', cycle='$cycles', ttcycle='$ttcycles', min_ticket='".$_POST['min_ticket']."', useticket='".mysql_real_escape_string($_POST['useticket'])."', buybalance='".$_POST['buybalance']."', transbalance='".$_POST['transbalance']."', convertbalance='".$_POST['convertbalance']."', mintrans='".$_POST['mintrans']."', minbuy='".$_POST['minbuy']."', maxbuy='".$_POST['maxbuy']."', maxtrans='".$_POST['maxtrans']."', minsell='".$_POST['minsell']."', feetrans='".$_POST['feetrans']."', feesell='".$_POST['feesell']."', feeconv='".$_POST['feeconv']."', sellbalance='".$_POST['sellbalance']."', maxsell='".$_POST['maxsell']."', reinv='".$_POST['reinv']."', hargatiketsto='".$_POST['hargatiketsto']."', cancel_order='".$_POST['cancel_order']."', cancel_order_sto='".$_POST['cancel_order_sto']."', ticketstockist='".mysql_real_escape_string($_POST['ticketstockist'])."', maxinvest='".$_POST['maxinvest']."', regpublic='".$_POST['regpublic']."', matchroi='".$_POST['matchroi']."', batastransfer='".$_POST['batastransfer']."', minconvert='".$_POST['minconvert']."', maxconvert='".$_POST['maxconvert']."', nilaiconvert='".$_POST['nilaiconvert']."', dtsellcoin='".$dtscne."', dtconvertcoin='".$dtconvrt."', dtranscoin='".$dttrne."', convertcoin='".$_POST['convertcoin']."', sellcoin='".$_POST['sellcoin']."', transcoin='".$_POST['transcoin']."', wdcash='".$_POST['wdcash']."', feewdcash='".$_POST['feewdcash']."', minwdcash='".$_POST['minwdcash']."', maxwdcash='".$_POST['maxwdcash']."', minwdro='".$_POST['minwdro']."', maxwdro='".$_POST['maxwdro']."', wdro='".$_POST['wdro']."', feewdro='".$_POST['feewdro']."', autoex='".$_POST['autoex']."', rewards='".$_POST['rewards']."', kursusd='".$_POST['kursusd']."', kurswd='".$_POST['kurswd']."', kursvpc='".$_POST['kursvpc']."', seripin='".$_POST['seripin']."', minorderpin='".$_POST['minorderpin']."', kyc='".$_POST['kyc']."', regpaket='".$_POST['regpaket']."', batastarik='".$btstarike."', mailconfirm='".$_POST['mailconfirm']."', kurspoin='".$_POST['kurspoin']."', kurspoinjual='".$_POST['kurspoinjual']."', walletpv='".$wltpvp."', walletcash='".$wltcsh."', walletpurchase='".$wltpch."', walletregister='".$wltrgs."', transwalet='".$transcoins."', prosenbonus='".$cspainex."', regiswalet='".$regwall."', peringkat3='".$peringkat3."', rewards2='".$_POST['rewards2']."', prosenprofit='".$proproex."', cashback='".$cssbckk."', matching='".$mtcphaire."', kursdepo='".$_POST['kursdepo']."', matchpro='".$mtcheexx."', minpro='".$minprones."', maxpro='".$maxprones."', autopro='".$_POST['autopro']."', towaletcash='".$_POST['towaletcash']."', kursusdt='".$_POST['kursusdt']."', wdshow='".$_POST['wdshow']."', minmax='".$_POST['minmax']."', showecash='".$_POST['showecash']."', wdate='".$_POST['wdate']."', datewd='".$_POST['datewd']."', daywd='".$_POST['daywd']."', otp='".$_POST['otp']."', userbysystem='".$_POST['userbysystem']."', nilaikelipatan='".$_POST['nilaikelipatan']."', rwdsponsor='".$_POST['rwdsponsor']."', balikmodal='".$_POST['balikmodal']."', cancelinvest='".$_POST['cancelinvest']."', feecancel='".$_POST['feecancel']."', investment='".$_POST['investment']."', verifikasi='".mysql_real_escape_string($_POST['verifikasi'])."', currencyne='".mysql_real_escape_string($_POST['currencyne'])."', kursmyr_wd='".mysql_real_escape_string($_POST['kursmyr_wd'])."', kursidr_wd='".mysql_real_escape_string($_POST['kursidr_wd'])."', exchangerm='".mysql_real_escape_string($_POST['exchangerm'])."', exchangeidr='".mysql_real_escape_string($_POST['exchangeidr'])."', kursmyr='".mysql_real_escape_string($_POST['kursmyr'])."', kursidr='".mysql_real_escape_string($_POST['kursidr'])."', exchangebnd='".mysql_real_escape_string($_POST['exchangebnd'])."', kursbnd='".mysql_real_escape_string($_POST['kursbnd'])."', kursbnd_wd='".mysql_real_escape_string($_POST['kursbnd_wd'])."', transpine='".mysql_real_escape_string($_POST['transpine'])."'", "id='$no'");
		
		
		
	if($_POST['peringkat1']){
	$db->update("dataewalet3", "plan='".$_POST['peringkat1']."'", "paket='1'");	
	$db->update("deposit", "planame='".$_POST['peringkat1']."'", "plan='1'");	
	}
	if($_POST['peringkat2']){
	$db->update("dataewalet3", "plan='".$_POST['peringkat2']."'", "paket='2'");	
	$db->update("deposit", "planame='".$_POST['peringkat2']."'", "plan='2'");	
	}
	if($_POST['peringkat3']){
	$db->update("dataewalet3", "plan='".$_POST['peringkat3']."'", "paket='3'");	
	$db->update("deposit", "planame='".$_POST['peringkat3']."'", "plan='3'");	
	}
	if($_POST['peringkat4']){
	$db->update("dataewalet3", "plan='".$_POST['peringkat4']."'", "paket='4'");	
	$db->update("deposit", "planame='".$_POST['peringkat4']."'", "plan='4'");	
	}
	if($_POST['peringkat5']){
	$db->update("dataewalet3", "plan='".$_POST['peringkat5']."'", "paket='5'");	
	$db->update("deposit", "planame='".$_POST['peringkat5']."'", "plan='5'");	
	}
	if($_POST['peringkat6']){
	$db->update("dataewalet3", "plan='".$_POST['peringkat6']."'", "paket='6'");	
	$db->update("deposit", "planame='".$_POST['peringkat6']."'", "plan='6'");	
	}
	if($_POST['peringkat7']){
	$db->update("dataewalet3", "plan='".$_POST['peringkat7']."'", "paket='7'");	
	$db->update("deposit", "planame='".$_POST['peringkat7']."'", "plan='7'");	
	}
		
	if($_POST['forex_profit1']){
	$db->update("dataewalet3", "profit='".$_POST['forex_profit1']."'", "paket='1'");	
	$db->update("deposit", "profit='".$_POST['forex_profit1']."'", "plan='1'");	
	}
	if($_POST['forex_profit2']){
	$db->update("dataewalet3", "profit='".$_POST['forex_profit2']."'", "paket='2'");	
	$db->update("deposit", "profit='".$_POST['forex_profit2']."'", "plan='2'");	
	}
	if($_POST['forex_profit3']){
	$db->update("dataewalet3", "profit='".$_POST['forex_profit3']."'", "paket='3'");	
	$db->update("deposit", "profit='".$_POST['forex_profit3']."'", "plan='3'");	
	}
	if($_POST['forex_profit4']){
	$db->update("dataewalet3", "profit='".$_POST['forex_profit4']."'", "paket='4'");	
	$db->update("deposit", "profit='".$_POST['forex_profit4']."'", "plan='4'");	
	}
	if($_POST['forex_profit5']){
	$db->update("dataewalet3", "profit='".$_POST['forex_profit5']."'", "paket='5'");	
	$db->update("deposit", "profit='".$_POST['forex_profit5']."'", "plan='5'");	
	}
	if($_POST['forex_profit6']){
	$db->update("dataewalet3", "profit='".$_POST['forex_profit6']."'", "paket='6'");	
	$db->update("deposit", "profit='".$_POST['forex_profit6']."'", "plan='6'");	
	}
	if($_POST['forex_profit7']){
	$db->update("dataewalet3", "profit='".$_POST['forex_profit7']."'", "paket='7'");	
	$db->update("deposit", "profit='".$_POST['forex_profit7']."'", "plan='7'");	
	}
	
	if($_POST['k_inv1']){
	$db->update("dataewalet3", "maxbonusprosen='".$_POST['k_inv1']."', kontrak='".$_POST['k_inv1']."'", "paket='1'");	
	$db->update("deposit", "maxbonusprosen='".$_POST['k_inv1']."', kontrak='".$_POST['k_inv1']."'", "plan='1'");	
	}
	if($_POST['k_inv2']){
	$db->update("dataewalet3", "maxbonusprosen='".$_POST['k_inv2']."', kontrak='".$_POST['k_inv2']."'", "paket='2'");	
	$db->update("deposit", "maxbonusprosen='".$_POST['k_inv2']."', kontrak='".$_POST['k_inv2']."'", "plan='2'");	
	}
	if($_POST['k_inv3']){
	$db->update("dataewalet3", "maxbonusprosen='".$_POST['k_inv3']."', kontrak='".$_POST['k_inv3']."'", "paket='3'");	
	$db->update("deposit", "maxbonusprosen='".$_POST['k_inv3']."', kontrak='".$_POST['k_inv3']."'", "plan='3'");	
	}
	if($_POST['k_inv4']){
	$db->update("dataewalet3", "maxbonusprosen='".$_POST['k_inv4']."', kontrak='".$_POST['k_inv4']."'", "paket='4'");	
	$db->update("deposit", "maxbonusprosen='".$_POST['k_inv4']."', kontrak='".$_POST['k_inv4']."'", "plan='4'");	
	}
	if($_POST['k_inv5']){
	$db->update("dataewalet3", "maxbonusprosen='".$_POST['k_inv5']."', kontrak='".$_POST['k_inv5']."'", "paket='5'");	
	$db->update("deposit", "maxbonusprosen='".$_POST['k_inv5']."', kontrak='".$_POST['k_inv5']."'", "plan='5'");	
	}
	if($_POST['k_inv6']){
	$db->update("dataewalet3", "maxbonusprosen='".$_POST['k_inv6']."', kontrak='".$_POST['k_inv6']."'", "paket='6'");	
	$db->update("deposit", "maxbonusprosen='".$_POST['k_inv6']."', kontrak='".$_POST['k_inv6']."'", "plan='6'");	
	}
	if($_POST['k_inv7']){
	$db->update("dataewalet3", "maxbonusprosen='".$_POST['k_inv7']."', kontrak='".$_POST['k_inv7']."'", "paket='7'");	
	$db->update("deposit", "maxbonusprosen='".$_POST['k_inv7']."', kontrak='".$_POST['k_inv7']."'", "plan='7'");	
	}
	
	if($_POST['prinvest1']){
	$db->update("dataewalet3", "siklus='".$_POST['prinvest1']."'", "paket='1'");	
	$db->update("deposit", "sc='".$_POST['prinvest1']."'", "plan='1'");	
	}
	if($_POST['prinvest2']){
	$db->update("dataewalet3", "siklus='".$_POST['prinvest2']."'", "paket='2'");	
	$db->update("deposit", "sc='".$_POST['prinvest2']."'", "plan='2'");	
	}
	if($_POST['prinvest3']){
	$db->update("dataewalet3", "siklus='".$_POST['prinvest3']."'", "paket='3'");	
	$db->update("deposit", "sc='".$_POST['prinvest3']."'", "plan='3'");	
	}
	if($_POST['prinvest4']){
	$db->update("dataewalet3", "siklus='".$_POST['prinvest4']."'", "paket='4'");	
	$db->update("deposit", "sc='".$_POST['prinvest4']."'", "plan='4'");	
	}
	if($_POST['prinvest5']){
	$db->update("dataewalet3", "siklus='".$_POST['prinvest5']."'", "paket='5'");	
	$db->update("deposit", "sc='".$_POST['prinvest5']."'", "plan='5'");	
	}
	if($_POST['prinvest6']){
	$db->update("dataewalet3", "siklus='".$_POST['prinvest6']."'", "paket='6'");	
	$db->update("deposit", "sc='".$_POST['prinvest6']."'", "plan='6'");	
	}
	if($_POST['prinvest7']){
	$db->update("dataewalet3", "siklus='".$_POST['prinvest7']."'", "paket='7'");	
	$db->update("deposit", "sc='".$_POST['prinvest7']."'", "plan='7'");	
	}
	
	
	
		

			 header("location: ?go=configuration&sess=system&result=success");
	exit;
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
if($results == "success_dell") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Paket Pendaftaran berhasil diubah!</div>";
}
?>

<form id="form" name="form" method="POST" action="">
  <table width="95%" border="0" align="center" cellpadding="4" cellspacing="1">
    


<tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>CURRENCY</strong></div></td>
    </tr>
     <?
			$currencyne = $db->result(0, "currencyne");
			if($currencyne == 1) {
			?>
	<tr> 
      <td align="right">Currency :</td>
      <td colspan="6"> <input type="radio" name="currencyne" value="1" id="RadioGroup33_a0" checked="checked"/>
          USD
          <input type="radio" name="currencyne" value="2" id="RadioGroup33_a1" />
        RM
          <input type="radio" name="currencyne" value="3" id="RadioGroup33_a1" />
        EUR
        <input type="radio" name="currencyne" value="4" id="RadioGroup33_a1"/>
        SGD
        <input type="radio" name="currencyne" value="5" id="RadioGroup33_a1"/>
        USDT
          <input type="radio" name="currencyne" value="0" id="RadioGroup33_a1" />
        IDR
        </td>
    </tr>
	<?
	} else if($currencyne == 2) {
	?>
    <tr> 
      <td align="right">Currency :</td>
      <td colspan="6"> <input type="radio" name="currencyne" value="1" id="RadioGroup33_a0"/>
          USD
          <input type="radio" name="currencyne" value="2" id="RadioGroup33_a1"  checked="checked"/>
        RM
          <input type="radio" name="currencyne" value="3" id="RadioGroup33_a1" />
        EUR
        <input type="radio" name="currencyne" value="4" id="RadioGroup33_a1"/>
        SGD
        <input type="radio" name="currencyne" value="5" id="RadioGroup33_a1"/>
        USDT
          <input type="radio" name="currencyne" value="0" id="RadioGroup33_a1" />
        IDR
        </td>
    </tr>
	<?
	} else if($currencyne == 3) {
	?>
    <tr> 
      <td align="right">Currency :</td>
      <td colspan="6"> <input type="radio" name="currencyne" value="1" id="RadioGroup33_a0"/>
          USD
          <input type="radio" name="currencyne" value="2" id="RadioGroup33_a1"/>
        RM
          <input type="radio" name="currencyne" value="3" id="RadioGroup33_a1" checked="checked" />
        EUR
        <input type="radio" name="currencyne" value="4" id="RadioGroup33_a1"/>
        SGD
        <input type="radio" name="currencyne" value="5" id="RadioGroup33_a1"/>
        USDT
          <input type="radio" name="currencyne" value="0" id="RadioGroup33_a1" />
        IDR
        </td>
    </tr>
	<?
	} else if($currencyne == 4) {
	?>
    <tr> 
      <td align="right">Currency :</td>
      <td colspan="6"> <input type="radio" name="currencyne" value="1" id="RadioGroup33_a0"/>
          USD
          <input type="radio" name="currencyne" value="2" id="RadioGroup33_a1"/>
        RM
          <input type="radio" name="currencyne" value="3" id="RadioGroup33_a1"/>
        EUR 
        <input type="radio" name="currencyne" value="4" id="RadioGroup33_a1" checked="checked" />
        SGD
        <input type="radio" name="currencyne" value="5" id="RadioGroup33_a1"/>
        USDT
          <input type="radio" name="currencyne" value="0" id="RadioGroup33_a1" />
        IDR
        </td>
    </tr>
	<?
	} else if($currencyne == 5) {
	?>
    <tr> 
      <td align="right">Currency :</td>
      <td colspan="6"> <input type="radio" name="currencyne" value="1" id="RadioGroup33_a0"/>
          USD
          <input type="radio" name="currencyne" value="2" id="RadioGroup33_a1"/>
        RM
          <input type="radio" name="currencyne" value="3" id="RadioGroup33_a1"/>
        EUR 
        <input type="radio" name="currencyne" value="4" id="RadioGroup33_a1" />
        SGD
        <input type="radio" name="currencyne" value="5" id="RadioGroup33_a1" checked="checked"/>
        USDT
          <input type="radio" name="currencyne" value="0" id="RadioGroup33_a1" />
        IDR
        </td>
    </tr>
    <?php } else { ?>
    
    <tr> 
      <td align="right">Currency :</td>
      <td colspan="6"> <input type="radio" name="currencyne" value="1" id="RadioGroup33_a0"/>
          USD
          <input type="radio" name="currencyne" value="2" id="RadioGroup33_a1" />
        RM
          <input type="radio" name="currencyne" value="3" id="RadioGroup33_a1" />
        EUR
        <input type="radio" name="currencyne" value="4" id="RadioGroup33_a1"/>
        SGD
        <input type="radio" name="currencyne" value="5" id="RadioGroup33_a1"/>
        USDT
          <input type="radio" name="currencyne" value="0" id="RadioGroup33_a1"  checked="checked"/>
        IDR
        </td>
    </tr>
	<?
	}
	?>
     <?
			$exchangeidr = $db->result(0, "exchangeidr");
			if($exchangeidr == 1) {
			?>
	<tr> 
      <td align="right">Exchange IDR :</td>
      <td colspan="6"> <input type="radio" name="exchangeidr" value="1" id="RadioGroup33_a0" checked="checked"/>
          Active
          <input type="radio" name="exchangeidr" value="0" id="RadioGroup33_a1" />
       Hidden &nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk Deposit dan Withdrawal jika Currency aktif USD/EUR/USDT</i>
       
        </td>
    </tr>
	<?
	} else {
	?>
   	<tr> 
      <td align="right">Exchange IDR :</td>
      <td colspan="6"> <input type="radio" name="exchangeidr" value="1" id="RadioGroup33_a0"/>
          Active
          <input type="radio" name="exchangeidr" value="0" id="RadioGroup33_a1" checked="checked"/>
        Hidden &nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk Deposit dan Withdrawal jika Currency aktif USD/EUR/USDT</i>
       
        </td>
    </tr>
 
	<?
	}
	?>
      <?
			$exchangerm = $db->result(0, "exchangerm");
			if($exchangerm == 1) {
			?>
	<tr> 
      <td align="right">Exchange RM :</td>
      <td colspan="6"> <input type="radio" name="exchangerm" value="1" id="RadioGroup33_a0" checked="checked"/>
          Active
          <input type="radio" name="exchangerm" value="0" id="RadioGroup33_a1" />
       Hidden &nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk Deposit dan Withdrawal jika Currency aktif USD/EUR/USDT</i>
       
        </td>
    </tr>
	<?
	} else {
	?>
   	<tr> 
      <td align="right">Exchange RM :</td>
      <td colspan="6"> <input type="radio" name="exchangerm" value="1" id="RadioGroup33_a0"/>
          Active
          <input type="radio" name="exchangerm" value="0" id="RadioGroup33_a1" checked="checked"/>
        Hidden &nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk Deposit dan Withdrawal jika Currency aktif USD/EUR/USDT</i>
       
        </td>
    </tr>
 
	<?
	}
	?>
     <?
			$exchangebnd = $db->result(0, "exchangebnd");
			if($exchangebnd == 1) {
			?>
	<tr> 
      <td align="right">Exchange SGD :</td>
      <td colspan="6"> <input type="radio" name="exchangebnd" value="1" id="RadioGroup33_a0" checked="checked"/>
          Active
          <input type="radio" name="exchangebnd" value="0" id="RadioGroup33_a1" />
       Hidden &nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk Deposit dan Withdrawal jika Currency aktif USD/EUR/USDT</i>
       
        </td>
    </tr>
	<?
	} else {
	?>
   	<tr> 
      <td align="right">Exchange SGD :</td>
      <td colspan="6"> <input type="radio" name="exchangebnd" value="1" id="RadioGroup33_a0"/>
          Active
          <input type="radio" name="exchangebnd" value="0" id="RadioGroup33_a1" checked="checked"/>
        Hidden &nbsp;&nbsp;&nbsp;<i style="color:#F00;">Untuk Deposit dan Withdrawal jika Currency aktif USD/EUR/USDT</i>
       
        </td>
    </tr>
 
	<?
	}
	?>
    <tr> 
      <td align="right" >RM Rate Deposit :</td>
      <td colspan="5"><input name="kursmyr" type="text" id="kursmyr" value="<?= $db->config("kursmyr"); ?>" size="15" />&nbsp;/&nbsp;USD/EUR/USDT</td>
    </tr>
       <tr> 
      <td align="right" >RM Rate Withdrawal :</td>
      <td colspan="5"><input name="kursmyr_wd" type="text" id="kursmyr_wd" value="<?= $db->config("kursmyr_wd"); ?>" size="15" />&nbsp;/&nbsp;USD/EUR/USDT</td>
    </tr>
    <tr> 
      <td align="right" >IDR Rate Deposit :</td>
      <td colspan="5"><input name="kursidr" type="text" id="kursidr" value="<?= $db->config("kursidr"); ?>" size="15" />&nbsp;/&nbsp;USD/EUR/USDT</td>
    </tr>
    <tr> 
      <td align="right" >IDR Rate Withdrawal :</td>
      <td colspan="5"><input name="kursidr_wd" type="text" id="kursidr_wd" value="<?= $db->config("kursidr_wd"); ?>" size="15" />&nbsp;/&nbsp;USD/EUR/USDT</td>
    </tr>
    <tr> 
      <td align="right" >SGD Rate Deposit :</td>
      <td colspan="5"><input name="kursbnd" type="text" id="kursbnd" value="<?= $db->config("kursbnd"); ?>" size="15" />&nbsp;/&nbsp;USD/EUR/USDT</td>
    </tr>
    <tr> 
      <td align="right" >SGD Rate Withdrawal :</td>
      <td colspan="5"><input name="kursbnd_wd" type="text" id="kursbnd_wd" value="<?= $db->config("kursbnd_wd"); ?>" size="15" />&nbsp;/&nbsp;USD/EUR/USDT</td>
    </tr>



 <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>ID REGISTER</strong></div></td>
    </tr>
      <?
			$userbysystem = $db->result(0, "userbysystem");
			if($userbysystem == 1) {
			?>
	<tr> 
      <td align="right">Username By System :</td>
      <td colspan="6"> <input type="radio" name="userbysystem" value="1" id="RadioGroup33_a0" checked="checked"/>
          Aktif
          <input type="radio" name="userbysystem" value="0" id="RadioGroup33_a1" />
        Nonaktif &nbsp;&nbsp;&nbsp;<i style="color:#F00;">System akan generate username saat registrasi jika aktif</i></td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Username By System :</td>
      <td colspan="5"> <input type="radio" name="userbysystem" value="1" id="RadioGroup43_a0" />
          Aktif
          <input type="radio" name="userbysystem" value="0" id="RadioGroup43_a1" checked="checked" />
        Nonaktif &nbsp;&nbsp;&nbsp;<i style="color:#F00;">System akan generate username saat registrasi jika aktif</i></td>
    </tr>
	<?
	}
	?>
     <tr>
      <td width="185" align="right">Huruf Inisial: </td> 
      <td colspan="5"><div align="left">
        <input name="id_reg" type="text" id="id_reg" value="<?= $db->result(0, "id_reg"); ?>" size="10" maxlength="10"/></div></td>
    </tr>
     
	
    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>KNOW YOUR CUSTOMER (KYC)</strong></div></td>
    </tr>
    <?
			$kyc = $db->result(0, "kyc");
			if($kyc == 1) {
			?>
	<tr> 
      <td align="right">KYC :</td>
      <td colspan="6"> <input type="radio" name="kyc" value="1" id="RadioGroup33_a0" checked="checked"/>
          Aktif
          <input type="radio" name="kyc" value="0" id="RadioGroup33_a1" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">KYC :</td>
      <td colspan="5"> <input type="radio" name="kyc" value="1" id="RadioGroup43_a0" />
          Aktif
          <input type="radio" name="kyc" value="0" id="RadioGroup43_a1" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
      <?
			$verifikasi = $db->result(0, "verifikasi");
			if($verifikasi == 1) {
			?>
	<tr> 
      <td align="right">Wajib KYC Setelah Daftar :</td>
      <td colspan="6"> <input type="radio" name="verifikasi" value="1" id="RadioGroup33_a0" checked="checked"/>
          Aktif
          <input type="radio" name="verifikasi" value="0" id="RadioGroup33_a1" />
        Nonaktif&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Jika Aktif member tidak dapat akses semua menu sebelum kyc dan di approve</i></td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Wajib KYC Setelah Daftar :</td>
      <td colspan="5"> <input type="radio" name="verifikasi" value="1" id="RadioGroup43_a0" />
          Aktif
          <input type="radio" name="verifikasi" value="0" id="RadioGroup43_a1" checked="checked" />
        Nonaktif&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Jika Aktif member tidak dapat akses semua menu sebelum kyc dan di approve</i></td>
    </tr>
	<?
	}
	?>
<tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>PIN AKTIVASI</strong></div></td>
    </tr>
  
	
   
	<?
			$spn = $db->result(0, "seripin");
			if($spn == 1) {
			?>
	<tr> 
      <td align="right">Gunakan PIN :</td>
      <td colspan="6"> <input type="radio" name="seripin" value="1" id="RadioGroup33_0" checked="checked"/>
          Aktif
          <input type="radio" name="seripin" value="0" id="RadioGroup33_1" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Gunakan PIN :</td>
      <td colspan="5"> <input type="radio" name="seripin" value="1" id="RadioGroup43_0" />
          Aktif
          <input type="radio" name="seripin" value="0" id="RadioGroup43_1" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
     <tr>
      <td width="185" align="right">Minimal Order: </td> 
      <td colspan="5"><div align="left">
       <input name="minorderpin" type="text" id="minorderpin" value="<?= $db->result(0, "minorderpin"); ?>" size="5"/>
      </div></td>
    </tr>
     <tr>
      <td width="185" align="right">Harga PIN: </td> 
      <td colspan="5"><div align="left">
       <input name="hargatiket" type="text" id="hargatiket" value="<?= $db->result(0, "hargatiket"); ?>" size="5"/> <?php echo $currencye; ?>
      </div></td>
    </tr>
      <?
			$transpine = $db->result(0, "transpine");
			if($transpine == 1) {
			?>
	<tr> 
      <td align="right">Transfer PIN :</td>
      <td colspan="6"> <input type="radio" name="transpine" value="1" id="RadioGroup33_0" checked="checked"/>
          Aktif
          <input type="radio" name="transpine" value="0" id="RadioGroup33_1" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Transfer PIN :</td>
      <td colspan="5"> <input type="radio" name="transpine" value="1" id="RadioGroup43_0" />
          Aktif
          <input type="radio" name="transpine" value="0" id="RadioGroup43_1" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
    
    
 <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>INVESTMENT PROGRAM</strong></div></td>
    </tr>
      <?
			$investment = $db->result(0, "investment");
			if($investment == 1) {
			?>
	<tr> 
      <td align="right">Investment Program :</td>
      <td colspan="6"> <input type="radio" name="investment" value="1" id="RadioGroup33_a0" checked="checked"/>
          Aktif
          <input type="radio" name="investment" value="0" id="RadioGroup33_a1" />
        Nonaktif </td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Investment Program :</td>
      <td colspan="5"> <input type="radio" name="investment" value="1" id="RadioGroup43_a0" />
          Aktif
          <input type="radio" name="investment" value="0" id="RadioGroup43_a1" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
    
    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>PAKET PENDAFTARAN</strong></div></td>
    </tr>

    
       <input name="minmax" type="hidden" id="minmax" value="0" size="5"/>
     <?
	  $balikmodal = $db->result(0, "balikmodal");
	  if($balikmodal == 1) {
		?>
	<tr> 
      <td align="right">Balik Modal :</td>
      <td colspan="5"> <input type="radio" name="balikmodal" value="1" id="RadioGroup121_0" checked="checked"/>
          Aktif
          <input type="radio" name="balikmodal" value="0" id="RadioGroup121_1"/>
        Nonaktif&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Jika Aktif modal akan dikembalikan bersama profit</i></td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Balik Modal :</td>
      <td colspan="5"> <input type="radio" name="balikmodal" value="1" id="RadioGroup122_0"/>
         Aktif
          <input type="radio" name="balikmodal" value="0" id="RadioGroup122_1" checked="checked"/>
        Nonaktif&nbsp;&nbsp;&nbsp;<i style="color:#F00;">Jika Aktif modal akan dikembalikan bersama profit</i></td>
    </tr>
	<?
	}
	?>
    
    
      <td align="right">Jumlah Pilihan Paket : </td>
      <td colspan="6">
      <select name="kedalaman_paket" id="kedalaman_paket" onchange="location =  this.options[this.selectedIndex].value" style="width:50px">
        <?
		  if(isset($_GET["ds"])){ $ds = $_GET["ds"]; }
		$lvs = 7;
		$kdlms = $db->result(0, "kedalaman_paket");
		$kds = $kdlms;
		for($is=1;$is<=$lvs;$is++) {
			if($kds == $ds or empty($ds)) {
				$kds = $kds;
			} else {
				$kds = $ds;
			}
			if($ds == $is or $kds == $is) {
				$sel = "selected='selected'";
			} else {
				$sel = "";
			}		
			echo "<option value='?go=configuration&sess=system&ds=$is' $sel>$is</option>";
		}
		?>
        </select></td>
    </tr>
	
   <?
	
		  if(isset($_GET["ds"])){ $ds = $_GET["ds"]; }
   $klevs = $db->result(0, "biaya");
   $klevso = $db->result(0, "biaya2");
    $klevse = $db->result(0, "peringkat");
    $cashbc = $db->result(0, "cashback");
    $klevsi = $db->result(0, "periode_profits");
	if($kds == $ds or empty($ds)) {
		$kds = $kds;
	} else {
		$kds = $ds;
	}
 //  if($pg == "komlev");
   	for($is=0;$is<$kds;$is++) {
		$biaya = explode("|", $klevs); 
		$biayax = explode("|", $klevso); 
		$peringkat = explode("|", $klevse); 
		$cashbck = explode("|", $cashbc); 
		$periode = explode("|", $klevsi); 
		$xs = $is+1;
		
		
?>
<?php
  if($periode[$is] == "hour"){
		   $pdd = "Perjam";
		   $pddx = "Jam";
	  }else if($periode[$is] == "day"){
		   $pdd = "Perhari";
		   $pddx = "Hari";
	   }else if($periode[$is] == "week"){
		   $pdd = "Perminggu";
		   $pddx = "Minggu";
	   }else{
		   $pdd = "Perbulan";
		   $pddx = "Bulan";
	   }
	   ?>
	<tr>
      <td align="right">Nama : </td>
      <td width="523" colspan="5"><div align="left">
      <input name="<?= "peringkat$xs"; ?>" type="text" value="<?= $peringkat[$is]; ?>" size="10" />&nbsp;&nbsp;&nbsp;
       
         Invest : 
             <input name="<?= "biaya$xs"; ?>" type="text" value="<?= $biaya[$is]; ?>" size="8" />&nbsp;&nbsp;&nbsp;
          Max : 
             <input name="<?= "biayax$xs"; ?>" type="text" value="<?= $biayax[$is]; ?>" size="8" />&nbsp;&nbsp;&nbsp;      
       
      
        Kontrak : <input name="<?= "k_inv$xs"; ?>" type="text" value="<?= $kontrakpro[$is]; ?>" size="4"/>&nbsp;<?= $pddx; ?>&nbsp;&nbsp;&nbsp;
     
        </div></td>
    </tr>
    <?
	}
//	}
?>





  <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>PAKET PENDAFTARAN</strong></div></td>
    </tr>
  <?
	
		  if(isset($_GET["ds"])){ $ds = $_GET["ds"]; }
    $klevsi = $db->result(0, "periode_profits");
    $cycle = $db->result(0, "cycle");
    $ttcycle = $db->result(0, "ttcycle");
    $kspon = $db->result(0, "komisi_sponsor");
    $mtcpp = $db->result(0, "matchpro");
    $fst = $db->result(0, "flushout");
    $kpas = $db->result(0, "kompasangan");
	if($kds == $ds or empty($ds)) {
		$kds = $kds;
	} else {
		$kds = $ds;
	}
 //  if($pg == "komlev");
   	for($is=0;$is<$kds;$is++) {
		$periode = explode("|", $klevsi); 
		$cyclex = explode("|", $cycle); 
		$ttcyclex = explode("|", $ttcycle); 
		$kspone = explode("|", $kspon); 
		$mtcpr = explode("|", $mtcpp); 
		$fse = explode("|", $fst); 
		$kpase = explode("|", $kpas); 
		$xs = $is+1;
		
		
?>
<?php
  if($periode[$is] == "hour"){
		   $pdd = "Perjam";
		   $pddx = "Jam";
	  }else if($periode[$is] == "day"){
		   $pdd = "Perhari";
		   $pddx = "Hari";
	   }else if($periode[$is] == "week"){
		   $pdd = "Perminggu";
		   $pddx = "Minggu";
	   }else{
		   $pdd = "Perbulan";
		   $pddx = "Bulan";
	   }
	   ?>
  

	<tr>
      <td align="right">Profit : </td>
      <td width="523" colspan="5"><div align="left">
     <input name="<?= "forex_profit$xs"; ?>" type="text" value="<?= $profit[$is]; ?>" size="3"/> %
             &nbsp;&nbsp;&nbsp;
         Siklus :  <select name="<?= "prinvest$xs"; ?>" onchange="value" class="form" style="width:100px;">
         <?php if($periode[$is]){ ?>
         <option value="<?= $periode[$is]; ?>" selected="selected"><?= $pdd; ?></option>
         <?php }else { ?>
          <option value="day" selected="selected">Perhari</option>
          <?php } ?>
          <option value="day">Perhari</option>
         <option value="week">Perminggu</option>
          <option value="month">Perbulan</option>
         
        </select>
         
      
        </div></td>
    </tr>
    <?
	}
//	}
?>

<tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>BONUS SPONSOR </strong></div></td>
    </tr>

<tr>
      <td width="185" align="right">Sponsor Level 1: </td> 
      <td colspan="5"><div align="left">
        <input name="k_sponsor1" type="text" id="mtcprox1" value="<?= $ksp[0]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 2: <input name="k_sponsor2" type="text" id="mtcprox2" value="<?= $ksp[1]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 3: <input name="k_sponsor3" type="text" id="mtcprox3" value="<?= $ksp[2]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 4: <input name="k_sponsor4" type="text" id="mtcprox4" value="<?= $ksp[3]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 5: <input name="k_sponsor5" type="text" id="mtcprox5" value="<?= $ksp[4]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
      </div></td>
    </tr>

<tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>PAKET PENDAFTARAN </strong></div></td>
    </tr>
        <input name="nilaikelipatan" type="hidden" id="nilaikelipatan" value="1000" size="15"/>

	<?
	  $ljke = $db->result(0, "otos");
	  if($ljke == 1) {
		?>
	<tr> 
      <td align="right">Otomatisasi Profit :</td>
      <td colspan="5"> <input type="radio" name="otos" value="1" id="RadioGroup111_0" checked="checked" onMouseover="ddrivetip('Otomatisasi input profit, jika nonaktif anda harus input manual.')"; onMouseout="hideddrivetip()"/>
          Aktif
          <input type="radio" name="otos" value="0" id="RadioGroup111_1" onMouseover="ddrivetip('Otomatisasi input profit, jika nonaktif anda harus input manual.')"; onMouseout="hideddrivetip()"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Otomatisasi Profit :</td>
      <td colspan="5"> <input type="radio" name="otos" value="1" id="RadioGroup112_0" onMouseover="ddrivetip('Otomatisasi input profit, jika nonaktif anda harus input manual.')"; onMouseout="hideddrivetip()"/>
         Aktif
          <input type="radio" name="otos" value="0" id="RadioGroup112_1" checked="checked" onMouseover="ddrivetip('Otomatisasi input profit, jika nonaktif anda harus input manual.')"; onMouseout="hideddrivetip()"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>
     
  <tr>
      <td width="185" align="right">Maks Investasi Aktif: </td> 
      <td colspan="5"><div align="left">
        <input name="maxinvest" type="text" id="maxinvest" value="<?= $db->result(0, "maxinvest"); ?>" size="3"/>
      </div></td>
    </tr>
    
       <?
			$cancelinvest = $db->result(0, "cancelinvest");
			if($cancelinvest == 1) {
			?>
	<tr> 
      <td align="right">Cancel Invest :</td>
      <td colspan="6"> <input type="radio" name="cancelinvest" value="1" id="RadioGroup33_a0" checked="checked"/>
          Aktif
          <input type="radio" name="cancelinvest" value="0" id="RadioGroup33_a1" />
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Cancel Invest :</td>
      <td colspan="5"> <input type="radio" name="cancelinvest" value="1" id="RadioGroup43_a0" />
          Aktif
          <input type="radio" name="cancelinvest" value="0" id="RadioGroup43_a1" checked="checked" />
        Nonaktif</td>
    </tr>
	<?
	}
	?>
  <tr>
      <td width="185" align="right">Fee Cancel: </td> 
      <td colspan="5"><div align="left">
       <input name="feecancel" type="text" id="feecancel" value="<?= $db->result(0, "feecancel"); ?>" size="2"/> %
      </div></td>
    </tr>
    
    
    
    
    
<tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>MATCHING PROFIT </strong></div></td>
    </tr>
 <tr>
      <td width="185" align="right">Matching Profit Level 1: </td> 
      <td colspan="5"><div align="left">
        <input name="mtcprox1" type="text" id="mtcprox1" value="<?= $mtcppr[0]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 2: <input name="mtcprox2" type="text" id="mtcprox2" value="<?= $mtcppr[1]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 3: <input name="mtcprox3" type="text" id="mtcprox3" value="<?= $mtcppr[2]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 4: <input name="mtcprox4" type="text" id="mtcprox4" value="<?= $mtcppr[3]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
        Level 5: <input name="mtcprox5" type="text" id="mtcprox5" value="<?= $mtcppr[4]; ?>" size="2"/> %&nbsp;&nbsp;&nbsp;
      </div></td>
    </tr>
   





   



    <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>SETTING </strong></div></td>
    </tr>
    
     <tr>
      <td width="185" align="right">Batas Transfer: </td> 
      <td colspan="5"><div align="left">
        <input name="batastransfer" type="text" id="batastransfer" value="<?= $db->result(0, "batastransfer"); ?>" size="2"/> Jam
      </div></td>
    </tr>
       <?
	  $regpublic = $db->result(0, "regpublic");
	  if($regpublic == 1) {
		?>
	<tr> 
      <td align="right">Register Publik :</td>
      <td colspan="5"> <input type="radio" name="regpublic" value="1" id="RadioGroup111_0za" checked="checked" onMouseover="ddrivetip('Register New Member From Home.')"; onMouseout="hideddrivetip()"/>
          Aktif
          <input type="radio" name="regpublic" value="0" id="RadioGroup111_1za" onMouseover="ddrivetip('Register New Member From Home.')"; onMouseout="hideddrivetip()"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Register Publik :</td>
      <td colspan="5"> <input type="radio" name="regpublic" value="1" id="RadioGroup112_0za" onMouseover="ddrivetip('Register New Member From Home.')"; onMouseout="hideddrivetip()"/>
         Aktif
          <input type="radio" name="regpublic" value="0" id="RadioGroup112_1za" checked="checked" onMouseover="ddrivetip('Register New Member From Home.')"; onMouseout="hideddrivetip()"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    	<?
	  $exptrans = $db->result(0, "exptrans");
	  if($exptrans == 1) {
		?>
	<tr> 
      <td align="right">Register Member Area :</td>
      <td colspan="5"> <input type="radio" name="exptrans" value="1" id="RadioGroup111_0z" checked="checked" onMouseover="ddrivetip('Register New Member From Member Area.')"; onMouseout="hideddrivetip()"/>
          Aktif
          <input type="radio" name="exptrans" value="0" id="RadioGroup111_1z" onMouseover="ddrivetip('Register New Member From Member Area.')"; onMouseout="hideddrivetip()"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Register Member Area :</td>
      <td colspan="5"> <input type="radio" name="exptrans" value="1" id="RadioGroup112_0z" onMouseover="ddrivetip('Register New Member From Member Area.')"; onMouseout="hideddrivetip()"/>
         Aktif
          <input type="radio" name="exptrans" value="0" id="RadioGroup112_1z" checked="checked" onMouseover="ddrivetip('Register New Member From Member Area.')"; onMouseout="hideddrivetip()"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>

    
     <?
	  $mailconfirm = $db->result(0, "mailconfirm");
	  if($mailconfirm == 1) {
		?>
	<tr> 
      <td align="right">Konfirmasi Email Register :</td>
      <td colspan="5"> <input type="radio" name="mailconfirm" value="1" id="RadioGroup111_0z" checked="checked" onMouseover="ddrivetip('Konfirmasi email saat registrasi.')"; onMouseout="hideddrivetip()"/>
          Aktif
          <input type="radio" name="mailconfirm" value="0" id="RadioGroup111_1z"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Konfirmasi Email Register :</td>
      <td colspan="5"> <input type="radio" name="mailconfirm" value="1" id="RadioGroup112_0z" onMouseover="ddrivetip('Konfirmasi email saat registrasi')"; onMouseout="hideddrivetip()"/>
         Aktif
          <input type="radio" name="mailconfirm" value="0" id="RadioGroup112_1z" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
     <tr>
      <td width="185" align="right">Max Register Per Day: </td> 
      <td colspan="5"><div align="left">
        <input name="max_invest" type="text" id="max_invest" value="<?= $db->result(0, "max_invest"); ?>" size="5" onMouseover="ddrivetip('Maksimal Member mendaftarkan member baru dalam sehari.')"; onMouseout="hideddrivetip()"/>
      </div></td>
    </tr>

 
  
    
    </tr>
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>BONUS REWARD</strong></div></td>
    </tr>
    
     <?
	  $rewards = $db->result(0, "rewards");
	  if($rewards == 1) {
		?>
	<tr> 
      <td align="right">Rewards :</td>
      <td colspan="5"> <input type="radio" name="rewards" value="1" id="RadioGroup111_0zar" checked="checked" />
          Aktif
          <input type="radio" name="rewards" value="0" id="RadioGroup111_1zar"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Rewards :</td>
      <td colspan="5"> <input type="radio" name="rewards" value="1" id="RadioGroup112_0zar"/>
         Aktif
          <input type="radio" name="rewards" value="0" id="RadioGroup112_1zar" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    
    
<tr>
      <td align="right">Total Omzet :</td>
      <td colspan="5"><div align="left"><input name="jumlah1" type="text" id="jumlah1" value="<?= $rank[0]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;Rank : <input name="rank1" type="text" id="rank1" value="<?= $rank[1]; ?>" size="20" />
      &nbsp;&nbsp;&nbsp;Reward : <input name="reward1" type="text" id="reward1" value="<?= $rank[2]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;<a class='iframe7' href='page.php?go=rwimage&rw=1'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Upload Image</button></a>
      </div></td>
      
    </tr>
   <tr>
      <td align="right">Total Omzet :</td>
      <td colspan="5"><div align="left"><input name="jumlah2" type="text" id="jumlah2" value="<?= $rank[4]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;Rank : <input name="rank2" type="text" id="rank2" value="<?= $rank[5]; ?>" size="20" />
      &nbsp;&nbsp;&nbsp;Reward : <input name="reward2" type="text" id="reward2" value="<?= $rank[6]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;<a class='iframe7' href='page.php?go=rwimage&rw=2'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Upload Image</button></a>
      </div></td>
      
    </tr>
     <tr>
      <td align="right">Total Omzet :</td>
      <td colspan="5"><div align="left"><input name="jumlah3" type="text" id="jumlah3" value="<?= $rank[8]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;Rank : <input name="rank3" type="text" id="rank3" value="<?= $rank[9]; ?>" size="20" />
      &nbsp;&nbsp;&nbsp;Reward : <input name="reward3" type="text" id="reward3" value="<?= $rank[10]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;<a class='iframe7' href='page.php?go=rwimage&rw=3'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Upload Image</button></a>
      </div></td>
      
    </tr>
      <tr>
      <td align="right">Total Omzet :</td>
      <td colspan="5"><div align="left"><input name="jumlah4" type="text" id="jumlah4" value="<?= $rank[12]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;Rank : <input name="rank4" type="text" id="rank4" value="<?= $rank[13]; ?>" size="20" />
      &nbsp;&nbsp;&nbsp;Reward : <input name="reward4" type="text" id="reward4" value="<?= $rank[14]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;<a class='iframe7' href='page.php?go=rwimage&rw=4'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Upload Image</button></a>
      </div></td>
      
    </tr>
 <tr>
      <td align="right">Total Omzet :</td>
      <td colspan="5"><div align="left"><input name="jumlah5" type="text" id="jumlah5" value="<?= $rank[16]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;Rank : <input name="rank5" type="text" id="rank5" value="<?= $rank[17]; ?>" size="20" />
      &nbsp;&nbsp;&nbsp;Reward : <input name="reward5" type="text" id="reward5" value="<?= $rank[18]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;<a class='iframe7' href='page.php?go=rwimage&rw=5'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Upload Image</button></a>
      </div></td>
      
    </tr>
<tr>
      <td align="right">Total Omzet :</td>
      <td colspan="5"><div align="left"><input name="jumlah6" type="text" id="jumlah6" value="<?= $rank[20]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;Rank : <input name="rank6" type="text" id="rank6" value="<?= $rank[21]; ?>" size="20" />
      &nbsp;&nbsp;&nbsp;Reward : <input name="reward6" type="text" id="reward6" value="<?= $rank[22]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;<a class='iframe7' href='page.php?go=rwimage&rw=6'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Upload Image</button></a>
      </div></td>
      
    </tr>
<tr>
      <td align="right">Total Omzet :</td>
      <td colspan="5"><div align="left"><input name="jumlah7" type="text" id="jumlah7" value="<?= $rank[24]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;Rank : <input name="rank7" type="text" id="rank7" value="<?= $rank[25]; ?>" size="20" />
      &nbsp;&nbsp;&nbsp;Reward : <input name="reward7" type="text" id="reward7" value="<?= $rank[26]; ?>" size="10" />
      &nbsp;&nbsp;&nbsp;<a class='iframe7' href='page.php?go=rwimage&rw=7'>
	   <button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Upload Image</button></a>
      </div></td>
      
    </tr>

      
      
    </tr>
     <tr class="tbl_header"> 
      <td colspan="6" bgcolor="#DDDDE1"><div align="center"><strong>SYSTEM BONUS & PROFIT </strong></div></td>
    </tr>
   
    <?
	  $wdshow = $db->result(0, "wdshow");
	  if($wdshow == 1) {
		?>
	<tr> 
      <td align="right">Withdrawal Bonus & Profit :</td>
      <td colspan="5"> <input type="radio" name="wdshow" value="1" id="RadioGroup111_0zd" checked="checked"/>
          Tampilkan
          <input type="radio" name="wdshow" value="0" id="RadioGroup111_1zd"/>
        Sembunyikan</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Withdrawal Bonus & Profit :</td>
      <td colspan="5"> <input type="radio" name="wdshow" value="1" id="RadioGroup112_0zd" />
        Tampilkan
          <input type="radio" name="wdshow" value="0" id="RadioGroup112_1zd" checked="checked" />
        Sembunyikan</td>
    </tr>
	<?
	}
	?>
    
    
     
    
     

    
     <tr>
      <td colspan="6" bgcolor=""></td>
    </tr>
  
       <tr class="tbl_header"> 
      <td colspan="6" align="center" bgcolor="#DDDDE1"><strong>SETTING WITHDRAWAL</strong></td>
    </tr>
     <?
			$wdate = $db->result(0, "wdate");
			if($wdate == 1) {
			?>
	<tr> 
      <td align="right">Batasan Withdrawal :</td>
      <td colspan="5"> <input type="radio" name="wdate" value="1" id="RadioGroupa1ds_0" checked="checked"/>
          Tanggal
          <input type="radio" name="wdate" value="2" id="RadioGroupa1ds_1"/>
        Hari
        <input type="radio" name="wdate" value="0" id="RadioGroupa1ds_1"/>
        Tidak
        </td>
    </tr>
	<?
	} else if($wdate == 2) {
	?>
	<tr> 
      <td align="right">Batasan Withdrawal :</td>
      <td colspan="5"> <input type="radio" name="wdate" value="1" id="RadioGroupa2ds_0"/>
          Tanggal
          <input type="radio" name="wdate" value="2" id="RadioGroupa2ds_1" checked="checked"/>
        Hari
        <input type="radio" name="wdate" value="0" id="RadioGroupa1ds_1"/>
        Tidak</td>
    </tr>
    <?
	} else {
	?>
	<tr> 
      <td align="right">Batasan Withdrawal :</td>
      <td colspan="5"> <input type="radio" name="wdate" value="1" id="RadioGroupa2ds_0"/>
          Tanggal
          <input type="radio" name="wdate" value="2" id="RadioGroupa2ds_1"/>
        Hari
        <input type="radio" name="wdate" value="0" id="RadioGroupa1ds_1" checked="checked"/>
        Tidak</td>
    </tr>

	<?
	}
	?>
       <tr>
      <td width="185" align="right">Tanggal Withdrawal: </td> 
      <td colspan="5"><div align="left">
       <select id="datewd" name="datewd" style="width:50px;"  required="required">
  <?php
 for($ix=1;$ix<=31;$ix=$ix+1){
	 if($db->result(0, "datewd") == $ix){
		 $dissee=" selected='selected'";
	 }else{
		 $dissee="";
	 }
	  echo "<option value='$ix' $dissee>".$ix."</option>";
	  }
	
  ?>
  </select>
      </div></td>
    </tr>
     <tr>
      <td width="185" align="right">Hari Withdrawal: </td> 
      <td colspan="5"><div align="left">
       <?php
      if($db->result(0, "daywd") == 0){
		   $hariwde = "Minggu";
	  }else if($db->result(0, "daywd") == 1){
		   $hariwde = "Senin";
	  }else if($db->result(0, "daywd") == 2){
		   $hariwde = "Selasa";
	  }else if($db->result(0, "daywd") == 3){
		   $hariwde = "Rabu";
	  }else if($db->result(0, "daywd") == 4){
		   $hariwde = "Kamis";
	  }else if($db->result(0, "daywd") == 5){
		   $hariwde = "Jumat";
	  }else if($db->result(0, "daywd") == 6){
		   $hariwde = "Sabtu";
	   }else{
	   }
	   ?>
      
      <select name="daywd" id="daywd" style="width:120px;" onMouseover="ddrivetip('penjualan balance coins')"; onMouseout="hideddrivetip()"  >
      
      <?php if($db->result(0, "daywd")) {?>
      <option  value='<?php echo $db->result(0, "daywd");?>' ><?php echo $hariwde;?></option>
      <?php } ?>
	   <option  value='0' >Minggu</option>
       <option  value='1'>Senin</option>
       <option  value='2'>Selasa</option>
       <option  value='3'>Rabu</option>
       <option  value='4'>Kamis</option>
       <option  value='5'>Jumat</option>
       <option  value='6'>Sabtu</option>
		</select>
      </div></td>
    </tr>
   
      <?
			$otp = $db->result(0, "otp");
			if($otp == 1) {
			?>
	<tr> 
      <td align="right">OTP Withdrawal :</td>
      <td colspan="5"> <input type="radio" name="otp" value="1" id="RadioGroupa1ds_0" checked="checked"/>
         SMS/WhatsApp
          <input type="radio" name="otp" value="2" id="RadioGroupa1ds_1"/>
        Email
        <input type="radio" name="otp" value="0" id="RadioGroupa1ds_1"/>
        Tidak
        </td>
    </tr>
	<?
	} else if($otp == 2) {
	?>
	<tr> 
      <td align="right">OTP Withdrawal :</td>
      <td colspan="5"> <input type="radio" name="otp" value="1" id="RadioGroupa2ds_0"/>
         SMS/WhatsApp
          <input type="radio" name="otp" value="2" id="RadioGroupa2ds_1" checked="checked"/>
        Email
        <input type="radio" name="otp" value="0" id="RadioGroupa1ds_1"/>
        Tidak</td>
    </tr>
    <?
	} else {
	?>
	<tr> 
      <td align="right">OTP Withdrawal :</td>
      <td colspan="5"> <input type="radio" name="otp" value="1" id="RadioGroupa2ds_0"/>
          SMS/WhatsApp
          <input type="radio" name="otp" value="2" id="RadioGroupa2ds_1"/>
        Email
        <input type="radio" name="otp" value="0" id="RadioGroupa1ds_1" checked="checked"/>
        Tidak</td>
    </tr>

	<?
	}
	?>
    
    
    
    
  <tr>
      <td colspan="6" bgcolor=""></td>
    </tr>
	  <tr class="tbl_header"> 
      <td colspan="6" align="center" bgcolor="#DDDDE1"><strong>SETTING ECASH</strong></td>
    </tr>
     <?
	  $showecash = $db->result(0, "showecash");
	  if($showecash == 1) {
		?>
	<tr> 
      <td align="right">Gunakan Wallet eCash :</td>
      <td colspan="5"> <input type="radio" name="showecash" value="1" id="RadioGroup111_0zar" checked="checked" />
          Aktif
          <input type="radio" name="showecash" value="0" id="RadioGroup111_1zar"/>
        Nonaktif</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Gunakan Wallet eCash :</td>
      <td colspan="5"> <input type="radio" name="showecash" value="1" id="RadioGroup112_0zar"/>
         Aktif
          <input type="radio" name="showecash" value="0" id="RadioGroup112_1zar" checked="checked"/>
        Nonaktif</td>
    </tr>
	<?
	}
	?>
    <tr>
      <td width="185" align="right">Buy balance: </td> 
      <td colspan="5"><div align="left">
        <select name="buycsh" id="buycsh" style="width:70px;" >
       <?
			$buycsh = $wlch[0];
			if($buycsh == 1) {
			?>
	   <option  value='0' >Tidak</option>
       <option  value='1' selected="selected">Ya</option>
		<?
	} else{
	?>
     
	   <option  value='0' selected="selected">Tidak</option>
       <option  value='1' >Ya</option>
      
		<?
	}
	?>
		</select>
        &nbsp;&nbsp;&nbsp;&nbsp;
        Minimal : <input name="minbuycsh" type="text" value="<?= $wlch[1]; ?>" size="10"/> <?php echo $currencye; ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;
        Maksimal : <input name="maxbuycsh" type="text" value="<?= $wlch[2]; ?>" size="10"/> <?php echo $currencye; ?> 
        &nbsp;/day&nbsp;&nbsp;&nbsp;&nbsp;
        Fee : <input name="feebuycsh" type="text" value="<?= $wlch[3]; ?>" size="2"/> % 
        </div></td>
    </tr>
    
    
  
    <tr>
      <td width="185" align="right">Withdrawal: </td> 
      <td colspan="5"><div align="left">
        <select name="wdcsh" id="wdcsh" style="width:70px;" >
       <?
			$wdcsh = $wlch[4];
			if($wdcsh == 1) {
			?>
	   <option  value='0' >Tidak</option>
       <option  value='1' selected="selected">Ya</option>
		
       <?
	} else  {
	?>
      <option  value='0' selected="selected">Tidak</option>
       <option  value='1' >Ya</option>
		<?
	}
	?>
		</select>
         &nbsp;&nbsp;&nbsp;&nbsp;
        Minimal : <input name="minwdcsh" type="text" value="<?= $wlch[5]; ?>" size="10"/> <?php echo $currencye; ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;
        Maksimal : <input name="maxwdcsh" type="text" value="<?= $wlch[6]; ?>" size="10"/> <?php echo $currencye; ?> 
        &nbsp;/day&nbsp;&nbsp;&nbsp;&nbsp;
         Fee : <input name="feewdcsh" type="text" value="<?= $wlch[7]; ?>" size="2"/> %
       
        </div></td>
    </tr>
    
        <tr>
      <td width="185" align="right">Transfer balance: </td> 
      <td colspan="5"><div align="left">
        <select name="transcsh" id="transbalance" style="width:70px;">
       <?
			$transcsh = $wlch[8];
			if($transcsh == 1) {
			?>
	   <option  value='0' >Tidak</option>
       <option  value='1' selected="selected">Ya</option>
		
       <?
	} else  {
	?>
      <option  value='0' selected="selected">Tidak</option>
       <option  value='1' >Ya</option>
		<?
	}
	?>
		</select>
       &nbsp;&nbsp;&nbsp;&nbsp;
        Minimal : <input name="mintranscsh" type="text" value="<?= $wlch[9]; ?>" size="10"/> <?php echo $currencye; ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;
        Maksimal : <input name="maxtranscsh" type="text" value="<?= $wlch[10]; ?>" size="10"/> <?php echo $currencye; ?> 
         &nbsp;/day&nbsp;&nbsp;&nbsp;&nbsp;
        Fee : <input name="feetranscsh" type="text" value="<?= $wlch[11]; ?>" size="2"/> %
        </div></td>
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
	  <input name="kdlm_paket" type="hidden" value="<?= $kds; ?>" size="10" /> 
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

<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["id"])){ $id = $_GET["id"]; }
		$db->update("configuration", "usrd=''", "id='$id'");
		
		header("location: ?go=configuration&sess=web&result=success_dell");
		
} else if (isset($_GET['page']) && $_GET['page'] == "set_assistance") {
if(isset($_GET["id"])){ $id = $_GET["id"]; }
		$db->update("configuration", "pilpkt='2'", "id='$id'");
		
		header("location: ?go=configuration&sess=system");		
		
} else if (isset($_GET['page']) && $_GET['page'] == "paket") {
if(isset($_GET["id"])){ $id = $_GET["id"]; }
if(isset($_GET["do"])){ $do = $_GET["do"]; }
		$db->update("configuration", "depo ='$do'", "id='$id'");
		
		header("location: ?go=configuration&sess=system&result=success_dell");		

?>	

  </div></div>
<?php
}
?>	