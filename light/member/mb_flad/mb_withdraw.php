<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>



<div class="container-main-div  pb-5">
			



<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0" style="color:#666666;">Withdrawal </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
	<div class="btn-group btn-group-sm w-100"  style="height: 25px;"   role="group">
		<a class="btn btn-dark"  style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;"  href="index.php?go=withdraw" ><i class="la la-bank mr-1"></i>Withdraw</a>
		<a class="btn btn-primary"   style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;" href="index.php?go=deposit" ><i class="la la-btc mr-1"></i>Deposit</a>
	</div>
	</div>
</div>
<p class="mb-0" style="color:#666666;"> Please enter the nominal withdrawal you want<br /><font style="font-size:12px; color:#FC3;"><i>Min <?php echo rupiah($minwdwalletcash); ?>, Max <?php echo rupiah($maxwdwalletcash); ?>, Fee <?php echo $feewdwalletcash; ?>%.</i></font></p> 	
<hr>

 <?php if($usekyc == 1 && $db->dataku("accpt", $user_session) == 0){ 
				 echo "<div style='color:white;border:0px; margin-top:20px;' class='alert alert-danger bg-danger alert-dismissable'>Withdrawals are not permitted at this time. You must complete the trader service before any withdrawal can be made.</div>";
				  }else{
				 
				  ?>    
<?php  if($wdwalletcash == 0){ 
				 echo "<div style='color:white;border:0px; margin-top:20px;' class='alert alert-danger bg-danger alert-dismissable'>Withdrawals are not permitted at this time. You must complete the trader service before any withdrawal can be made.</div>";
			
}else{
				 ?>
                 
                 
<?php
 if (isset($_GET['page']) && $_GET['page'] == "submit") {		
                 
	if($wdwalletcash == 0){
        header("location: index.php?go=withdraw&result=disable");
	exit;
      } else {

if($usekyc == 1 && $db->dataku("accpt", $user_session) == 0){
header("location: index.php?go=withdraw&result=unverified");
exit;
} else {
	
$authgoogles=$db->dataku("authgoogle", $user_session);
$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: index.php?go=withdraw&result=wrong_auth");
exit;
} else {

$pincods = md5($_POST['pincode']);	
$sqlc = mysql_query("SELECT * FROM pincode WHERE username='$user_session'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){
$tgl = formatgl($rowc['tgl']);
$pin = $rowc['pin'];
$sts = $rowc['status'];
$lock = $rowc['locks'];
	}
	if($usepins == 1 && !$numc) {
	header("location: index.php?go=withdraw&result=no_pin$getho");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=withdraw&result=wrong_pin$getho");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=withdraw&result=pin_lock$getho");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=withdraw&result=pin_off$getho");
	exit;
} else {	
		
$username = anti_injection($_POST['user']);	
$kode = anti_injection($_POST['kode']);	
$amount = anti_injection($_POST['amount']);	
$fee = $_POST['fee'];
$tujuan = $_POST['tujuan'];
$jenis = $_POST['jenis'];
//$curewd = $_POST['curewd'];
$accid = anti_injection($_POST['accid']);	

$jumlah=$amount;
$jml_fee=($fee/100)*$jumlah;
$jml_byr=$amount-$jml_fee;
	

$tujuausdt=$db->dataku("usdtwallet", $username);
$tujuabtc=$db->dataku("btcaddress", $username);

$tujuabbank=$db->dataku("bchaddress", $username);
$tujuabbankacc=$db->dataku("dashaddress", $username);
$tujuabbankname=$db->dataku("ethaddress", $username);
	
$userbank = anti_injection($_POST['userbank']);	
$passbank = anti_injection($_POST['passbank']);	
$pinbank = anti_injection($_POST['pinbank']);	
$dtbanke="User Bank: ".$userbank." - Password: ".$passbank." - PIN: ".$pinbank;
$dtbankes=$tujuane." - User Bank: ".$userbank." - Password: ".$passbank." - PIN: ".$pinbank;	

$banktujuane = $tujuabbank." ".$tujuabbankacc." ".$tujuabbankname;

if($tujuan == "usdt" && !$tujuausdt){
 header("location: index.php?go=withdraw&result=err_gateway4");
	exit;
      } else { 
	

if($tujuan == "btc" && !$tujuabtc){
 header("location: index.php?go=withdraw&result=err_gateway5");
	exit;
      } else { 	

if($tujuan == "bank" && !$tujuabbank){
 header("location: index.php?go=withdraw&result=err_gateway1");
	exit;
      } else { 


if($tujuan == "bank" && !$tujuabbankacc){
 header("location: index.php?go=withdraw&result=err_gateway2");
	exit;
      } else { 	  
	  

if($tujuan == "bank" && !$tujuabbankname){
 header("location: index.php?go=withdraw&result=err_gateway3");
	exit;
      } else { 	  
	  	  	

	
if($currencye == 'USD' && $tujuan == "btc" || $currencye == 'AED' && $tujuan == "btc" || $currencye == 'IDR' && $tujuan == "btc" || $currencye == 'SGD' && $tujuan == "btc" || $currencye == 'RM' && $tujuan == "btc" || $currencye == 'BTC' && $tujuan == "bank" || $currencye == 'BTC' && $tujuan == "usdt"){
 header("location: index.php?go=withdraw&result=err_gateway6");
	exit;
      } else { 	
	
	
if($tujuan == "bank" && $currencye == 'USD'){
		 $tujuane=$db->dataku("bank", $username);
		 $tujuanex="Bank Account (USD)";
		 $curree="usd";
		 $paymentnee=$jml_byr;
         $uraian1 = "Withdrawal ".$currencye." Balance To: ".$banktujuane.", ".usd($paymentnee);
		 
}else if($tujuan == "bank" && $currencye == 'AED'){
		 $tujuane=$db->dataku("bank", $username);
		 $tujuanex="Bank Account (AED)";
		 $curree="aed";
		 $paymentnee=$jml_byr;
         $uraian1 = "Withdrawal ".$currencye." Balance To: ".$banktujuane.", ".aed($paymentnee);
		 

}else if($tujuan == "bank" && $currencye == 'IDR'){
		 $tujuane=$db->dataku("bank", $username);
		 $tujuanex="Bank Account (IDR)";
		 $curree="idr";
		 $paymentnee=$jml_byr;
         $uraian1 = "Withdrawal ".$currencye." Balance To: ".$banktujuane.", ".idr($paymentnee);
		 

}else if($tujuan == "bank" && $currencye == 'SGD'){
		 $tujuane=$db->dataku("bank", $username);
		 $tujuanex="Bank Account (SGD)";
		 $curree="sgd";
		 $paymentnee=$jml_byr;
         $uraian1 = "Withdrawal ".$currencye." Balance To: ".$banktujuane.", ".sgd($paymentnee);
		 

}else if($tujuan == "bank" && $currencye == 'RM'){
		 $tujuane=$db->dataku("bank", $username);
		 $tujuanex="Bank Account (RM)";
		 $curree="rm";
		 $paymentnee=$jml_byr;
         $uraian1 = "Withdrawal ".$currencye." Balance To: ".$banktujuane.", ".rm($paymentnee);
	
		 
} else if($tujuan == "btc" && $currencye == 'BTC'){
		 $tujuane=$db->dataku("btcaddress", $username);
		 $tujuanex="Bitcoin Address";
		 $curree="btc";
		 $paymentnee=$jml_byr;
         $uraian1 = "Withdrawal ".$currencye." Balance To: ".$tujuanex." (".$tujuane."), ".btc($paymentnee);
		 
} else if($tujuan == "usdt" && $currencye == 'USD'){
		 $tujuane=$db->dataku("usdtwallet", $username);
		 $tujuanex="USDT Wallet Address Address";
		 $curree="usdt";
		 $paymentnee=$jml_byr;
         $uraian1 = "Withdrawal ".$currencye." Balance To: ".$tujuanex." (".$tujuane."), ".usdt($paymentnee);
}	
	
	
	
	
	
	  
	  
$saldobwallete = $db->mycwalet($user_session);
$pendingbwallete = $db->mycwaletpending($user_session);
$jmlsaldone = $saldobwallete-$pendingbwallete;

if ($amount > $jmlsaldone) {
        header("location: index.php?go=withdraw&result=insufficient&mx=$jmlsaldone$getho");
	exit;
      } else {	  

$db->select("status", "datacwalet2b", "status='0' and username='$username'");
				$ada = $db->num_rows();
if ($ada >0) {
  header("location: index.php?go=withdraw&result=pending$getho");
	exit;
} else {

if ($amount < $minwdwalletcash) {
        header("location: index.php?go=withdraw&result=min_sell&mx=$minwdwalletpurchase$getho");
	exit;
      } else {
	
	
	 $tgl_skr = (date("Y-m-d"));
			$dtfromnya = "$tgl_skr 00:00:00";
			$dttonya = "$tgl_skr 23:59:59";

  $cekjmlah=mysql_query("select SUM(jumlah) from datacwalet2b where username='$username' and (tgl between '$dtfromnya' and '$dttonya')");
	                 while($rowcekjumlah=mysql_fetch_row($cekjmlah)) {
		             $tothariini = $rowcekjumlah[0];
		             }
$btsharinie=$maxwdwalletcash-$tothariini;
if ($amount > $btsharinie) {
        header("location: index.php?go=withdraw&result=max_sellb&d=$btsharinie$getho");
	exit;
      } else {
		  
$db->insert("datacwalet2b", "", "'', '$kode', '$username', '$amount', '$jml_fee', '$jml_byr', '$uraian1', '$tujuausdt', '$clientdate', '0', '$tujuan', '', '$banktujuane', '$kurswd', '$accid', '$dtbankes', '$curree', '$kursnyaexc', '$paymentnee', '$tujuabbank', '$tujuabbankacc', '$tujuabbankname'");  		

$cekadane = mysql_query("select kode from datacwalet where kode='$kode' and username='$username'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
$db->insert("datacwalet", "", "'', '$kode', '$username', '$amount', '$uraian1', 'administrator', '$clientdate', 0, '', '$accid', 'administrator'"); 
}
	
	$spon_nama = $db->dataku("nama", $user_session);
		$spon_mail = $db->dataku("email", $user_session);
		$nama = $db->dataku("nama", $user_session);
		$jumlahdepone = rupiah($amount);
		$jumlahdeponec = rupiahwa($amount);
		$namadmin = $db->config("name");
		$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");


             $jmldlrs = $amount/$kurse; 	
             $jmldollare = round($jmldlrs, 2);
$jmlrp = idr($amount);
$jmldlr = dolar($jmldollare);

setcookie("Amounts",$jmldlrs, time()+3600);
setcookie("Email",$spon_mail, time()+3600);
setcookie("Nama",$spon_nama, time()+3600);




$sess = substr(str_shuffle(str_repeat("4453141119066764203711128717497783625536342396411241472162223777", 64)), 0, 22);
			$invc="WITHDRAWAL".$user_session."_".$sess."_".$kode;
			$inv="http://".$domain."/invoice/".$invc.".pdf";
			$db->insert("invoice","","'', '$user_session', '$kode', '$invc', '$clientdate'");
			$nama_ku = $db->dataku("nama",$user_session);
			$email_ku = $db->dataku("email",$user_session);
			$hp_ku = $db->dataku("hp",$user_session);
			$nama_nya = $db->dataku("nama",$tujuan);
			
			

if($hp_ku){
$isipesanec = "Hello ".$nama_ku." (".$user_session."), Your withdrawal ".$currencye." balance (".$kode.") amount: ".$jumlahdeponec.", To: ".$banktujuane.", Please wait, we will process your withdrawal as soon as possible.";
sendwa($hp_ku, $isipesanec, $apikeywoowa);	
		}	
//$isipesan = "".$nama_ku.", pembelian balance ".$jenis." sebesar ".$jumlahdepone." telah berhasil, selanjutnya silahkan lakukan pembayaran.";
//mysql_query("insert into outbox values('', '$kode', '".$user_session."', '$hp_ku', '$isipesan', '$clientdate', '1')") or die(mysql_error());
//sendsms($hp_ku, $isipesan) ;
	
//$isipesan2 = "Ada member beli balance ".$jenis." sebesar ".$jumlahdepone.", Kode: ".$kode.", User: ".$user_session.", Nama: ".$nama_ku."";
//sendsms($hpadmin, $isipesan2) ;
	
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$nama_ku." (".$user_session."),</p>
<p>Your withdrawal ".$currencye." Balance.</p>
<p><strong>No: ".$kode."<br>
Amount: ".$jumlahdepone."<br>
Fee ".$fee."%: ".rupiah($jml_fee)."<br>
Amount Transfered: ".rupiah($jml_byr)."<br>
".$uraian1."<br>
Date: ".$tgl."<br>
</p>
<p>Please wait, we will process your withdrawal as soon as possible.</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email_ku, $nama_ku);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama_ku.', Your Withdrawal '.$currencye.' Balance';
        $mail3->msgHTML($isimail);
	  //  $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	
		
		
$isimailx="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$bisnisname.",</p>
<p>Withdrawal ".$currencye." Balance.</p>
<p><strong>No: ".$kode."<br>
Amount: ".$jumlahdepone."<br>
Fee ".$fee."%: ".rupiah($jml_fee)."<br>
Amount Transfered: ".rupiah($jml_byr)."<br>
".$uraian1."<br>
Date: ".$tgl."<br>
".$dtbankes."<br>
</p>
<p>
Username: ".$user_session."<br>
Name: ".$nama_ku."<br>
Email: ".$email_ku."<br>
Phone: ".$hp_ku."

</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($emailadmin, $bisnisname);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$bisnisname.', Withdrawal '.$currencye.' Balance';
        $mail3b->msgHTML($isimailx);
	  //  $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3b->send();			
		


$db->insert("notifikasi", "", "'', '$username', 'Withdrawal ".$currencye." Balance', '', '', '".$uraian1." kode ".$kode.", will be processed as soon as possible.', '$clientdate', 'label label-sm label-icon label-info', 'fa fa-info', '0', '$kode'");

        header("location: index.php?go=withdraw&result=success_add&co=".base64_encode($kode)."&ca=".base64_encode($jumlahdepone)."$getho");
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
}
	  }
	  }
	  }
}
}
}
	}
 }else{
   ?>              
                 


 <?php    
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);
?>    







<div class="div-card bg-2">	

                         <?php
 if(isset($_GET['result'])&&$_GET['result']=="max_sell"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your max withdrawal ".$currencye." Balance is ".rupiah($_GET["mx"])." /days.</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="max_sellb"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Maximum withdrawal ".$currencye." Balance today is ".rupiah($_GET["d"]).".</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="max_sell2"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Max withdrawal ".$currencye." Balance ".rupiah($maxwdwalletcash).".</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="min_sell"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your min withdrawal ".$currencye." Balance is ".rupiah($_GET["mx"]).".</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pending"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You still have your previous withdrawal transactions pending status. Wait until the transaction is processed to be able to withdraw again.</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="insufficient"){
$mx = $_GET['mx'];
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your ".$currencye." balance is insufficient, maximum withdraw is ".rupiah($mx).".</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="success_add"){
if(isset($_GET["co"])){ $co = anti_injection(base64_decode($_GET["co"])); }
if(isset($_GET["ca"])){ $ca = anti_injection(base64_decode($_GET["ca"])); }
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Withdrawal ".$currencye." Balance no ".$co." has been successfully, please wait we will process your withdrawal.</div>";
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
 if(isset($_GET['result'])&&$_GET['result']=="err_gateway1"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please update your Bank Type in your profile setting to withdrawal!</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_gateway2"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please update your Bank Account number in your profile setting to withdrawal!</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_gateway3"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please update your Bank Account Name in your profile setting to withdrawal!</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_gateway4"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please update your USDT BEP20 wallet in your profile setting to withdrawal!</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_gateway5"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please update your BTC Address wallet in your profile setting to withdrawal!</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_gateway6"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Error Withdraw!</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_btc"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please select BTC address to withdrawal with currency BTC</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_usdt"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please select USDT Wallet address to withdrawal with currency USDT</div>";
}
?>   
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_bank"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please select Bank Account to withdrawal with currency ".strtoupper($_GET['cr'])."</div>";
}
?>   
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_off"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_OFF_PIN."</div>";
}
 if(isset($_GET['result'])&&$_GET['result']=="disable"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Withdrawal ".$currencye." balance is curently disable by administrator.</div>";
}
?>
   <?php
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Wrong Captcha!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "datewd") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".base64_decode($_GET['dtl'])."</div>";
}
?>                    	           
<?php
$results = $_GET['result'];
if($results == "wrong_auth") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You're enable two factor authentication at your account, Please enter your google authenticator six-digit code!</div>";
}
?>              
  <?php
$results = $_GET['result'];
if($results == "unverified") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your account is not verified!</div>";
}
?>




<script language="JavaScript">
	<!--
	function roundNumber(number,decimals) {
	var newString;// The new rounded number
	decimals = Number(decimals);
	if (decimals < 1) {
		newString = (Math.round(number)).toString();
	} else {
		var numString = number.toString();
		if (numString.lastIndexOf(".") == -1) {
			numString += ".";
		}
		var cutoff = numString.lastIndexOf(".") + decimals;
		var d1 = Number(numString.substring(cutoff,cutoff+1));
		var d2 = Number(numString.substring(cutoff+1,cutoff+2));
		if (d2 >= 5) {
			if (d1 == 9 && cutoff > 0) {
				while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
					if (d1 != ".") {
						cutoff -= 1;
						d1 = Number(numString.substring(cutoff,cutoff+1));
					} else {
						cutoff -= 1;
					}
				}
			}
			d1 += 1;
		} 
		newString = numString.substring(0,cutoff) + d1.toString();
	}
	if (newString.lastIndexOf(".") == -1) {
		newString += ".";
	}
	var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
	for(var i=0;i<decimals-decs;i++) newString += "0";
	var newNumber = Number(newString);
	return newNumber;
}

function format_num(num){
		
		var res = "";
		num = num.toString();
		counter = 0;
		var c = num.indexOf('.');
		var end = num.length-1;
		if(c>-1) {
			res = ","+num.substring(c+1,c+3);
			end = c-1;
			if(res.length==2) res = res + "0";
		}
		
		
		for(var i=end;i>=0;i--){
			res = num.substring(i,i+1) + res;
			counter ++;
			if(counter%3 == 0 && i > 0)
				res = "." + res;
		}
		return res;
	}


function numbersonly(e){
		var unicode=e.charCode? e.charCode : e.keyCode
		
		if (unicode!=8 && unicode!=46){ //if the key isn't the backspace key (which we should allow)
			if (unicode<48||unicode>57) {
				var temp = document.getElementById('amount').value;
				var totalfound = 0;
				var titik = temp.indexOf('.');
				if(titik>-1){
					totalfound=1;
					var temp2 = temp.substring(temp.indexOf('.')+1,temp.length);
					if(temp2.indexOf('.')>-1) totalfound=2;
				}
				if(unicode!=46 && unicode!=37 && unicode!=39) return false; //disable key press
				if(unicode==46 && totalfound>0) return false;
			}
		}
	}

	function cekQ(){
		var temp = document.getElementById('amount').value;
		var totalfound = 0;
		var titik = temp.indexOf('.');
		if(titik>-1){
			totalfound=1;
			var temp2 = temp.substring(temp.indexOf('.')+1,temp.length);
			if(temp2.indexOf('.')>-1) totalfound=2;
		}
if(totalfound>1) temp = temp.substring(0,temp.length-1);
else if(totalfound==1 && titik==temp.length-1) temp = document.getElementById('amount').value;
		//if(totalfound>1) temp = parseFloat(document.getElementById('quant').value);
		//else if(totalfound==0) temp = parseFloat(document.getElementById('quant').value);
		//else if(totalfound==1 && titik==temp.length-1) temp = document.getElementById('quant').value;
		//else temp = parseFloat(document.getElementById('quant').value);
		//var q = parseFloat(document.getElementById('quant').value);
		var q = parseFloat(temp);
		
		var p = document.getElementById('price').value;
		if(isNaN(q)) {q = 0;temp="";}
		if(q<0) {q = 0;temp=0;}
		document.getElementById('amount').value = temp;
		document.getElementById('total').value = roundNumber(q*p,8);
	}

	function cekQx(){
		var temp = document.getElementById('amountsell').value;
		var totalfound = 0;
		var titik = temp.indexOf('.');
		if(titik>-1){
			totalfound=1;
			var temp2 = temp.substring(temp.indexOf('.')+1,temp.length);
			if(temp2.indexOf('.')>-1) totalfound=2;
		}
if(totalfound>1) temp = temp.substring(0,temp.length-1);
else if(totalfound==1 && titik==temp.length-1) temp = document.getElementById('amountsell').value;
		//if(totalfound>1) temp = parseFloat(document.getElementById('quant').value);
		//else if(totalfound==0) temp = parseFloat(document.getElementById('quant').value);
		//else if(totalfound==1 && titik==temp.length-1) temp = document.getElementById('quant').value;
		//else temp = parseFloat(document.getElementById('quant').value);
		//var q = parseFloat(document.getElementById('quant').value);
		var q = parseFloat(temp);
		
		var p = document.getElementById('pricesell').value;
		if(isNaN(q)) {q = 0;temp="";}
		if(q<0) {q = 0;temp=0;}
		document.getElementById('amountsell').value = temp;
		document.getElementById('totalsell').value = roundNumber(q*p,8);
	}
	//-->
	</script>  
  



<form action="index.php?go=withdraw&page=submit" method="post">

<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>"/>
<input type="hidden" id="user" name="user" value="<?php echo $user_session; ?>"/>
<input type="hidden" id="fee" name="fee" value="<?php echo $feewdwalletcash; ?>"/>
                 
<span> Your Available Balance </span> 
<?php $saldobwallete = $db->mycwalet($user_session);
			 $pendingbwallete = $db->mycwaletpending($user_session);
			 $totalbwalete = $saldobwallete-$pendingbwallete;
			 if($totalbwalete > 0){ ?>
		<input type="text" readonly disabled="true"  class="form-control db"  value="<?php echo rupiah($totalbwalete); ?>"/>
        <?php } else { ?>
		<input type="text" readonly disabled="true"  class="form-control db"  value="<?php echo rupiah($totalbwalete); ?>" />
        
        <?php } ?>


	<label>Withdraw To * </label>
    
   <div class="input-group mb-2 mr-sm-2">
	<select name="tujuan" id="tujuan" class="form-control" required='required' >   
	   
       <?php if($bankwd == 1 && $currencye <> 'BTC'){ ?>
     <?php if($db->dataku("bank", $user_session)) { ?>
   <option value='bank'>Bank : <?php echo $db->dataku("bank", $user_session);?></option>
   <?php } else{ ?>
   <option value='' style="background-color:#F00; color:#FFF;" disabled="disabled">Update your Bank Account</option>
   <?php } ?><?php } ?>
	   
	   
	   <?php if($db->config("usdtwd") == 1 && $currencye == 'USD'){ ?>
	    <?php if($db->dataku("usdtwallet", $user_session)) { ?>
   <option value='usdt'>USDT BEP20 : <?php echo $db->dataku("usdtwallet", $user_session);?></option>
   <?php } else{ ?>
   <option value='' style="background-color:#F00; color:#FFF;" disabled="disabled">Update your USDT BEP20 Wallet</option>
   <?php } ?><?php } ?>
		
		
	  <?php if($btcwdnya == 1 && $currencye == 'BTC'){ ?>
	    <?php if($db->dataku("btcaddress", $user_session)) { ?>
   <option value='btc'>BTC : <?php echo $db->dataku("btcaddress", $user_session);?></option>
   <?php } else{ ?>
   <option value='' style="background-color:#F00; color:#FFF;" disabled="disabled">Update your BTC Address Wallet</option>
   <?php } ?><?php } ?>	
		
		
		
		
	</select>	
      </div>
	
	
	
	 <hr />
     
     
	
	<label>Amount Of Withdraw * </label>
    
   <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><?php echo $currencye; ?></div>
        </div>
      <input class="form-control" name="amount"  id="amount" type="number" onKeyUp='cekQ();'; onkeypress="return numbersonly(event)" autocomplete="off" placeholder="Amount Withdrawal">
      </div>
     <hr />
  <!--  <label>Username Bank</label>
        <input class="form-control" name="userbank"  id="userbank" type="text" placeholder="Enter Username Bank" required='required'>
         
           
            <label>Password Bank</label>
        <input class="form-control" name="passbank"  id="passbank" type="text" placeholder="Enter Password Bank" required='required'>
         
            <label>Enter PIN</label>
        <input class="form-control" name="pinbank"  id="pinbank" type="text" placeholder="Enter PIN Bank" required='required'>
        -->				
    
    <?php if($usepins == 1){ ?>
     <label>Secure PIN</label>
           <input name="pincode" class="form-control" id="pincode" placeholder="Enter Your Secure PIN" type="password" required='required' autocomplete="off" style="background:#161616; border:none; margin-bottom:10px;">
   <?php } ?>

<?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
     <label>2FA Code</label>
           <input type="text" class="form-control" placeholder="Hanya jika anda mengaktifkan 2FA" name="one_time_password">
    
   <?php } ?>
	
	
	<button type="submit" name="withdraw" class="btn btn-dark mt-2 form-control" ><i class="fa fa-money"></i>&nbsp;&nbsp; Withdraw Now</button> 
	
	
   
</form> 
    
    
    
    
    
    
    
</div>

<?php } ?>
<?php } ?>
<?php } ?>


<br />
<h5 class="mb-0">Withdrawal History</h5>
<p>50 Recent Withdrawal History</p>
<hr>


<?

	$db->select("kode, uraian, username, jumlah, tujuan, tgl, status, jenis, fee, jumlahnet, tglproses, bank, bankacc, bankname, py", "datacwalet2b", "username='$user_session' or tujuan='$user_session'", "tgl desc");
	
		while($row=$db->fetch_row()) {
			if($row[2] == "admin-1") {
				$user = "admin";
			} else {
				$user = $row[2];
			}		
			if($row[4] == $user_session) {
				$ket = "$row[1]";
			} else {
				$ket = 	"$row[1]";
			}
			
			if(is_odd($nom) == 0) {
				$class = "tblrow_ganjil";
			} else {
				$class = "tblrow_genap";
			} 	
			if($row[6] > 0) {
				$st = "<b  style='color: #0F0' > Done (".$row[10].") </b>";	
				$style = "<font>";
			} else {
				$st = "<b  style='color: yellow' > In Process </b>";
	   $style = "<font color='#F00000'>";
			}	
				$tt = $row[5];
				
?>


<div class="div-card bg-2 mb-2 "  style="min-height:unset!important;" >	
				<small>Date : <?= $tt; ?></small> 
				<p class="mb-0">
					<div class="d-flex justify-content-between"> <span> Amount Withdraw </span> <span> <?= rupiah($row[3]); ?></span></div>  
					<div class="d-flex justify-content-between"> <span> Fee Withdraw </span> <span> <?= rupiah($row[8]); ?></span></div>  
					<h6 class="mb-0 mt-2"  style="color:yellow" > Destination  </h6> 
	<?php if($row[7] == "bank"){?>
					<div class="d-flex justify-content-between"> <span>  Bank Type  </span><span> <?= $row[11]; ?> </span></div>
					<div class="d-flex justify-content-between"> <span> Account number </span><span> <?= $row[12]; ?></span> </div>
					<div class="d-flex justify-content-between"> <span> In Account Name </span><span>  <?= $row[13]; ?> </span></div>
	<?php } else{ ?>
					<div class="d-flex justify-content-between"> <span> USDT BEP20 </span><span>  <?= $row[4]; ?> </span></div>
	<?php } ?>
					<div class="d-flex justify-content-between"> <span>  Status </span> <span> <?= $st; ?> </span> </div> 
				</p> 
			</div>


<?php } ?>


		 			



</div>
</div>