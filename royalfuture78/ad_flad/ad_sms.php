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
function confirmation(noid) {
	var answer = confirm("Are You sure to delete this news ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?m=listforex&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<?php
$sms = new smsreguler();
	$sms->username = $userkey;
	$sms->password = $passkey;
	$sms->apikey   = $apikey;
	$sts=$sms->smssaldo();	
	$statsms = explode("|", $sts);	
	if(!$userkey || !$passkey || !$apikey){
	$stsnesms = "<center><div class='infox' style='width:50%; text-align:left; font-size:16px; font-weight:bold;'>Anda belum memiliki account dan pulsa sms gateway.</div></center>";
	$diss = " disabled='disabled'";	
	}else{
	$stsnesms = "<p style='font-size:18px; line-height:150%; font-weight:bold;' align='center'>Saldo : ".idr($statsms[0])."<br />Expired : ".formatglxy($statsms[1])."</p>";
	$diss = "";	
	}
?>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" />SMS </h2>
<?php echo $stsnesms ?>
<?php
if(isset($_POST['submit'])){
if($userkey && $passkey && $apikey){	
	
$hp  = $_POST['no_hp'];
$isipesan = $_POST['pesan'];

	mysql_query("insert into outbox values('', '', 'administrator', '$hp', '$isipesan', '$clientdate', '1')");
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

header("location: index.php?go=sms&act=1");
	exit;	
}else{
header("location: index.php?go=sms&act=2");
	exit;	
}
		

}else{

?>
	
	
	
	
	<form name='submit_form' method='post' action=''>

  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#EEEEEE">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">SMS</font></strong></div></td>
    </tr>
     <?php
$act = $_GET['act'];
if($act == 1) { 
echo "<tr><td colspan='2' bgcolor='#FFFFFF'><div class='alert-box successs'><span>Sukses : </span>SMS berhasil dikirim</div></td></tr>";
}
?>
     <?php
$act = $_GET['act'];
if($act == 2) { 
echo "<tr><td colspan='2' bgcolor='#FFFFFF'><div class='alert-box errors'><span>Error : </span>SMS Gagal dikirim</div></td></tr>";
}
?>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">No. Handphone
        : </td>
      <td width="53%" bgcolor="#FFFFFF">
     <input type='text' name='no_hp' <?php echo $diss ?> value='<?php echo $no_hp; ?>' maxlength='13'  class='textbox' style='width:150px;' />
       </td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Isi pesan :      </td>
      <td bgcolor="#FFFFFF">
	<textarea name='pesan' cols='150' <?php echo $diss ?> rows='3' class='textbox' style='width:350px;'><?php echo $pesan; ?></textarea>
		 
        </td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF"><label></label></td>
      <td bgcolor="#FFFFFF">
	 
	 <input type='submit' <?php echo $diss ?> name='submit' value='Kirim Sms' class='submit'/>
      </td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

  </table>

</form>
    
    
<? }
?>





