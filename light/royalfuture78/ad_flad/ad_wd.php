<?php
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
function confirmation(mid, page, action) {
	var answer = confirm("Proses Withdrawl tgl : " + mid )
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=wd";
		
	}
	
}
//-->
</script>
<script type="text/javascript">
<!--
function confirmation2(id) {
	var answer = confirm("Yakin akan menghapus data ini?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=wd&page=delete&kode=" + id;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Add Withdrawl</h2>
<?php 
if (isset($_GET['page']) && $_GET['page'] == "addnew") {

?>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<?php      
$initiale = substr(str_shuffle(str_repeat("ABCEFGHIJKLMNPRSTUVWXYZ", 36)), 6, 2);
$stkode = strtotime(date("Y-m-d H:i:s"));
$kodecontribute = $initiale."".$stkode;
?>
<form name="form1" method="post" action="?go=wd&page=submit">

  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#EEEEEE">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">ADD WITHDRAWAL BONUS</font></strong></div></td>
    </tr>
     <tr> 
      <td colspan="2" align="center" bgcolor="#fff"><div style="width:500px;">

<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-message successx'>Sukses : Withdrawal Profit berhasil dibuat!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "err1") { 
echo "<div class='alert-message errorx'>Error : Rekening Bank user withdrawal belum di update / kosong!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "err2") { 
echo "<div class='alert-message errorx'>Error : Saldo user tidak mencukupi!</div>";
}
?>
</div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">Username (ada saldo)
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="mid" onchange="value" class="form"  required="required" >
          <option value="">-- Pilih username --</option>
         <?php
					
					$sql=mysql_query("select username from member order by username");
					while($sto=mysql_fetch_row($sql)) {
						$mide=$sto[0];
					$ttlbonusee = total_komisi_memberx($mide);
$ttlwdbonusee = total_wdbonus_member($mide);
$tarik = $ttlbonusee-$ttlwdbonusee;
					if($tarik > 0){
					//	$dss = "";
					//}else{
					//	$dss = "style='background-color:#B50404; color:#FFF;' disabled='disabled'";
					//}
					?>
          <option value="<?php echo $sto[0]; ?>" <?php echo $dss; ?>> 
          <?php echo $sto[0]; ?> - Saldo Bonus <?php echo rupiah($tarik); ?> - <?php echo $db->dataku("bank", $mide); ?>
          <?php
					}
					}
					?>
        </select>
        </label></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Jumlah Withdrawal:      </td>
      <td bgcolor="#FFFFFF"><input name="jumlah" type="text" id="jumlah" onkeypress="return isNumberKey(event)"  required="required" >
	  <input name="kodedp" type="hidden" id="kodedp" value="<?php echo $kodecontribute; ?>">
       <input name="status" type="hidden" id="status" value="1">
        </td>
    </tr>
      <tr> 
      <td align="right" bgcolor="#FFFFFF">Jumlah Fee:      </td>
      <td bgcolor="#FFFFFF"><input name="fee" type="text" id="fee" onkeypress="return isNumberKey(event)"  required="required" >
	 
        </td>
    </tr>
	<tr> 
      <td align="right" bgcolor="#FFFFFF">Tujuan:      </td>
      <td bgcolor="#FFFFFF"><select name="payid" id="payid" style="width:220px"  required="required" >
       <option value='' selected="selected">-- Tujuan --</option>
        <option value='1'>Bank</option>
        <option value='2'>Wallet</option>
 
		  </select> 
	 
        </td>
    </tr>
                
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Tanggal :</td>
      <?php  $tt = date('Y-m-d', strtotime($clientdate)); ?>
	  <td bgcolor="#FFFFFF">
	  <input name="tanggal" id="tanggal" size="20" maxlength="30" value="<?= $tt; ?>"  required="required" />  &nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tanggal_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "tanggal",
                ifFormat : "%Y-%m-%e",
                button : "tanggal_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("tanggal_trig").observe("click", showCalendar);

            function showCalendar(event){
                var element = event.element(event);
                var offset = $(element).viewportOffset();
                var scrollOffset = $(element).cumulativeScrollOffset();
                var dimensionsButton = $(element).getDimensions();
                var index = $("widget-chooser").getStyle("zIndex");

                $$("div.calendar").each(function(item){
                    if ($(item).visible()) {
                        var dimensionsCalendar = $(item).getDimensions();

                        $(item).setStyle({
                            "zIndex" : index + 1,
                            "left" : offset[0] + scrollOffset[0] - dimensionsCalendar.width + dimensionsButton.width + "px",
                            "top" : offset[1] + scrollOffset[1] + dimensionsButton.height + "px"
                        });
                    };
                });
            };
        </script>  
      </td>
    </tr>
	 
    <tr>
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF"><label></label></td>
      <td bgcolor="#FFFFFF">
	 
	  <input type="submit" name="Submit" value="Submit" class="submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>

<?php
}else if (isset($_GET['page']) && $_GET['page'] == "submit") {

$mid = $_POST['mid'];
$amounts = $_POST['jumlah'];
$kodedp = $_POST['kodedp'];
$tanggal = $_POST['tanggal'];
$payid = $_POST['payid'];
$status = $_POST['status'];
$fee = $_POST['fee'];

$tanggale = $tanggal." ".$clienttime;

$bank = $db->dataku("bank", $mid);
$namane = $db->dataku("nama", $mid);


if($payid == 1){
	$tujuane=$db->dataku("bank", $mid);
}else{
	$tujuane="Wallet ID ".$mid;
}


if($fee > 0){
$amount = $amounts-$fee;
$fees = rupiah($fee);
}else{
$amount = $amounts;
$fees = "free";
	}

$payment = "Bank ".$bank;


$jmlidrnyax=($amount*$kurswd);
$jmlidrnya=sprintf("%.0f",$jmlidrnyax);

if($payid == 1 && !$bank){
header("location: ?go=wd&page=addnew&result=err1");	
exit;
}else{
	

$ttlbonusee = total_komisi_memberx($mid);
$ttlwdbonusee = total_wdbonus_member($mid);
$tarik = $ttlbonusee-$ttlwdbonusee;


	
if($tarik < $amounts){
header("location: ?go=wd&page=addnew&result=err2");	
exit;
}else{	
	

$jumlahdepone = rupiah($amount);
$tt = date('d-m-Y', strtotime($clientdate));
$jame = date('H:i', strtotime($clientdate));

	if($status == 1){
	$tanggale2 = $tanggale;
	}else{
	$tanggale2="";
	}
	
	
$cekadane = mysql_query("select kode from wd where kode='$kodedp' and userid='$mid'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
	$uraian1 = "Fee ".$fees."";
	$db->insert("wd", "", "'', '$mid', '$tanggale', '$tanggale2', '$amounts', '$fee', '$amount', '$status', 'Withdrawal - $uraian1 - $tujuane', '$kodedp', '1', '$ipne', '$payid'. '$jmlidrnya'"); 		
}	
	
if($payid == 2){	
$cekadane2 = mysql_query("select kode from dataewalet where kode='$kodedp' and tujuan='$mid'");
$ada_adane2 = mysql_num_rows($cekadane2); 
if(!$ada_adane2) {
$db->insert("dataewalet", "", "'', '$kodedp', 'administrator', '$amount', 'Withdrawal Bonus', '$mid', '$tanggale', '1', '$tanggale2', 'administrator', '".$db->dataku("accid", $mid)."'"); 
$db->update("wd", "status='1', tglbayar='$clientdate'", "kode='$kodedp'");		
}		
}

			
	$nama = $db->dataku("nama", $mid);
		$email = $db->dataku("email", $mid);
		$hp = $db->dataku("hp", $mid);
		$jumlahdepone = rupiah($amounts);

if($status == 1){
	$tglproses=formatgl($tanggale);
	$info="";
}else{
	$tglproses="pending";
	$info="<p>Mohon tunggu admin akan segera proses withdrawal bonus anda.</p>";
}
	

if($hp){
$isipesan = "Halo ".$nama.", Bonus anda sebesar ".$jumlahdepone.". telah ditransfer ke ".$tujuane.".";
	//mysql_query("insert into outbox values('', '', '$mid', '$hp', '$isipesan', '$clientdate', '1')");
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
}


$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$nama." (".$mid."),</p>
<p>Withdrawal bonus anda.</p>
<p><strong>Kode ".$kodedp."</strong><br>
Jumlah ".rupiah($amounts)."<br>
Fee WD ".$fees."<br>
Di Transfer ".rupiah($amount)."<br>
Di Transfer (IDR) ".idr($jmlidrnya)."<br>
Tujuan ".$tujuane."<br>
Tanggal Withdrawal".formatgl($tanggale)."<br>
Tanggal Proses ".$tglproses."<br>
</p>
".$info."
<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
		if($smaile == 1){	
$mail3->IsSMTP(); // telling the class to use SMTP
$mail3->Host       = $smtphost; // SMTP server
$mail3->SMTPAuth   = true;                  // enable SMTP authentication
$mail3->Host       = $smtphost; // sets the SMTP server
$mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3->Username   = $smtpuser; // SMTP account username
$mail3->Password   = $smtpass;        // SMTP account password
}
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Withdrawal Bonus Anda';
        $mail3->msgHTML($isimail);
     $mail3->send();	


header("location: ?go=wd&page=addnew&result=success");	
exit;
}
}
?>









<?php 
} else if (isset($_GET['page']) && $_GET['page'] == "addnewx") {

?>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<?php      
$initiale = substr(str_shuffle(str_repeat("ABCEFGHIJKLMNPRSTUVWXYZ", 36)), 6, 2);
$stkode = strtotime(date("Y-m-d H:i:s"));
$kodecontribute = $initiale."".$stkode;
?>
<form name="form1" method="post" action="?go=wd&page=submitx">

  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#EEEEEE">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">ADD WITHDRAWAL PROFIT</font></strong></div></td>
    </tr>
     <tr> 
      <td colspan="2" align="center" bgcolor="#fff"><div style="width:500px;">

<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-message successx'>Sukses : Withdrawal Profit berhasil dibuat!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "err1") { 
echo "<div class='alert-message errorx'>Error : Rekening Bank user withdrawal belum di update / kosong!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "err2") { 
echo "<div class='alert-message errorx'>Error : Saldo user tidak mencukupi!</div>";
}
?>
</div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">Username (ada saldo)
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="mid" onchange="value" class="form"  required="required" >
          <option value="">-- Pilih username --</option>
         <?php
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username from member order by username");
					while($sto=mysql_fetch_row($sql)) {
						$mide=$sto[0];
					
				$ttlprofitee = total_profit_member($mide);
$ttlwdprofitee = total_wdprofit_member($mide);
$tarik = $ttlprofitee-$ttlwdprofitee;
					if($tarik > 0){
					?>
          <option value="<?php echo $sto[0]; ?>" <?php echo $pilih; ?>> 
          <?php echo $sto[0]; ?> - Saldo Profit <?php echo rupiah($tarik); ?> - <?php echo $db->dataku("bank", $mide); ?>
          <?php
					}
					}
					?>
        </select>
        </label></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Jumlah Withdrawal:      </td>
      <td bgcolor="#FFFFFF"><input name="jumlah" type="text" id="jumlah" onkeypress="return isNumberKey(event)"  required="required" >
	  <input name="kodedp" type="hidden" id="kodedp" value="<?php echo $kodecontribute; ?>">
       <input name="status" type="hidden" id="status" value="1">
        </td>
    </tr>
      <tr> 
      <td align="right" bgcolor="#FFFFFF">Jumlah Fee:      </td>
      <td bgcolor="#FFFFFF"><input name="fee" type="text" id="fee" onkeypress="return isNumberKey(event)"  required="required" >
	 
        </td>
    </tr>
	<tr> 
      <td align="right" bgcolor="#FFFFFF">Tujuan:      </td>
      <td bgcolor="#FFFFFF"><select name="payid" id="payid" style="width:220px"  required="required" >
       <option value='' selected="selected">-- Tujuan --</option>
        <option value='1'>Bank</option>
        <option value='2'>Wallet</option>
 
		  </select> 
	 
        </td>
    </tr>
              
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Tanggal :</td>
      <?php  $tt = date('Y-m-d', strtotime($clientdate)); ?>
	  <td bgcolor="#FFFFFF">
	  <input name="tanggal" id="tanggal" size="20" maxlength="30" value="<?= $tt; ?>"  required="required" />  &nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tanggal_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "tanggal",
                ifFormat : "%Y-%m-%e",
                button : "tanggal_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("tanggal_trig").observe("click", showCalendar);

            function showCalendar(event){
                var element = event.element(event);
                var offset = $(element).viewportOffset();
                var scrollOffset = $(element).cumulativeScrollOffset();
                var dimensionsButton = $(element).getDimensions();
                var index = $("widget-chooser").getStyle("zIndex");

                $$("div.calendar").each(function(item){
                    if ($(item).visible()) {
                        var dimensionsCalendar = $(item).getDimensions();

                        $(item).setStyle({
                            "zIndex" : index + 1,
                            "left" : offset[0] + scrollOffset[0] - dimensionsCalendar.width + dimensionsButton.width + "px",
                            "top" : offset[1] + scrollOffset[1] + dimensionsButton.height + "px"
                        });
                    };
                });
            };
        </script>  
      </td>
    </tr>
	 
    <tr>
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF"><label></label></td>
      <td bgcolor="#FFFFFF">
	 
	  <input type="submit" name="Submit" value="Submit" class="submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>

<?php
}else if (isset($_GET['page']) && $_GET['page'] == "submitx") {

$mid = $_POST['mid'];
$amounts = $_POST['jumlah'];
$kodedp = $_POST['kodedp'];
$tanggal = $_POST['tanggal'];
$payid = $_POST['payid'];
$status = $_POST['status'];
$fee = $_POST['fee'];

$tanggale = $tanggal." ".$clienttime;

$bank = $db->dataku("bank", $mid);
$namane = $db->dataku("nama", $mid);


if($payid == 1){
	$tujuane=$db->dataku("bank", $mid);
}else{
	$tujuane="Wallet ID ".$mid;
}


if($fee > 0){
$amount = $amounts-$fee;
$fees = rupiah($fee);
}else{
$amount = $amounts;
$fees = "free";
	}

$payment = "Bank ".$bank;
$jmlidrnyax=($amount*$kurswd);
$jmlidrnya=sprintf("%.0f",$jmlidrnyax);

if($payid == 1 && !$bank){
header("location: ?go=wd&page=addnewx&result=err1");	
exit;
}else{
	

$ttlbonusee = total_profit_member($mid);
$ttlwdbonusee = total_wdprofit_member($mid);
$tarik = $ttlbonusee-$ttlwdbonusee;


	
if($tarik < $amounts){
header("location: ?go=wd&page=addnewx&result=err2");	
exit;
}else{	
	

$jumlahdepone = rupiah($amount);
$tt = date('d-m-Y', strtotime($clientdate));
$jame = date('H:i', strtotime($clientdate));

	if($status == 1){
	$tanggale2 = $tanggale;
	}else{
	$tanggale2="";
	}
	
	
$cekadane = mysql_query("select kode from wd where kode='$kodedp' and userid='$mid'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
	$uraian1 = "Fee ".$fees."";
	$db->insert("wd", "", "'', '$mid', '$tanggale', '$tanggale2', '$amounts', '$fee', '$amount', '$status', 'Withdrawal - $uraian1 - $tujuane', '$kodedp', '2', '$ipne', '$payid', '$jmlidrnya'"); 		
}	
	
if($payid == 2){	
$cekadane2 = mysql_query("select kode from dataewalet where kode='$kodedp' and tujuan='$mid'");
$ada_adane2 = mysql_num_rows($cekadane2); 
if(!$ada_adane2) {
$db->insert("dataewalet", "", "'', '$kodedp', 'administrator', '$amount', 'Withdrawal Bonus', '$mid', '$tanggale', '1', '$tanggale2', 'administrator', '".$db->dataku("accid", $mid)."'"); 
$db->update("wd", "status='1', tglbayar='$clientdate'", "kode='$kodedp'");		
}		
}

			
	$nama = $db->dataku("nama", $mid);
		$email = $db->dataku("email", $mid);
		$hp = $db->dataku("hp", $mid);
		$jumlahdepone = rupiah($amounts);

if($status == 1){
	$tglproses=formatgl($tanggale);
	$info="";
}else{
	$tglproses="pending";
	$info="<p>Mohon tunggu admin akan segera proses withdrawal bonus anda.</p>";
}
	

if($hp){
$isipesan = "Halo ".$nama.", profit anda sebesar ".$jumlahdepone.". telah ditransfer ke ".$tujuane.".";
	//mysql_query("insert into outbox values('', '', '$mid', '$hp', '$isipesan', '$clientdate', '1')");
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
}


$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$nama." (".$mid."),</p>
<p>Withdrawal profit anda.</p>
<p><strong>Kode ".$kodedp."</strong><br>
Jumlah ".rupiah($amounts)."<br>
Fee WD ".$fees."<br>
Di Transfer ".rupiah($amount)."<br>
Di Transfer (IDR) ".idr($jmlidrnya)."<br>
Tujuan ".$tujuane."<br>
Tanggal Withdrawal".formatgl($tanggale)."<br>
Tanggal Proses ".$tglproses."<br>
</p>
".$info."
<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
		$mail3->IsSMTP(); // telling the class to use SMTP
        $mail3->Host       = $smtphost; // SMTP server
        $mail3->SMTPAuth   = true;                  // enable SMTP authentication
        $mail3->Host       = $smtphost; // sets the SMTP server
        $mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail3->Username   = $smtpuser; // SMTP account username
        $mail3->Password   = $smtpass;        // SMTP account password
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Withdrawal Profit Anda';
        $mail3->msgHTML($isimail);
     $mail3->send();	


header("location: ?go=wd&page=addnewx&result=success");	
exit;
}
}
?>






<?php } else {} ?>