<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>



<div class="container-main-div  pb-5">
			


                 




<?php
 if (isset($_GET['page']) && $_GET['page'] == "cancel") {
if(isset($_GET["sc"])){$sc = anti_injection($_GET["sc"]);}


if($cancelinvest == 0){
header("location: index.php?go=invest&page=details&result=disable&co=$sc");
	exit;
}else{	

$sqlc = mysql_query("SELECT * FROM deposit WHERE username='$user_session' and kode='$sc'");
$numc = mysql_num_rows($sqlc);
if (!$numc) {
header("location: index.php?go=invest&page=details&result=error&co=$sc");
	exit;
}else{	

while($rowc = mysql_fetch_array($sqlc)){
$amount = $rowc['jml'];
$kode = $rowc['kode'];
$username = $rowc['username'];
$myproduk = $rowc['planame'];
}

//$bayareactivation=(50/100)*$amount;
//$bayarekeepfunds=(50/100)*$amount;


$feenya=($feecancel/100)*$amount;
$amountrefundact=$amount-$feenya;

$koderefund = $kode."reff";


$cekadane2 = mysql_query("select kode from datacwalet where kode='$koderefund'");
$ada_adane2 = mysql_num_rows($cekadane2); 
if(!$ada_adane2) {	
$db->insert("datacwalet", "", "'', '$koderefund', 'administrator', '$amountrefundact', 'Refund Investment ".$myproduk." ".rupiah($amount)." ".$kode." (Fee ".$feecancel."% ".rupiah($feenya).")', '$username', '$clientdate', 1, '$clientdate', '', ''");		
}

$db->update("deposit", "status='0', dy='1'", "kode='$kode'");
$db->update("dataewalet3", "cycle='1'", "kode='$kode'");

header("location: index.php?go=invest&page=details&result=canceled&co=$sc");
	exit;
}
}
?>


<?php
 } else if (isset($_GET['page']) && $_GET['page'] == "details") {
if(isset($_GET["co"])){ $co = $_GET["co"]; }	

?>


<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0">Investment</h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
		<a class="btn btn-primary"  style="height: 25px;padding-top:0px; padding-bottom:0px; align-items:center;"  href="index.php?go=profits" ><i class='fa fa-money' style="margin-right:14px;"></i>Profit</a>
	</div>
</div>
<p class="mb-0">Detail Investment <?php echo $co;?></p> 	
<hr>





<script>
		function confirmActionstopprograme(){
      var confirmed = confirm("You will STOP profit and get your capital to wallet balance (this will charge fee <?php echo $feecancel;?>% from your capital balance), are you sure?");
      return confirmed;
}
</script>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Investment ".$_GET['co']." not found.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="canceled"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Investment ".$_GET['co']." has been successfully canceled.</div>";
}
?>



 <?

	$db->select("id, username, kode, jml, status, tgldepo, tglend, planame, profit, kontrak, cashback, maxbonus, sc, dy", "deposit", "username='$user_session' and kode='$co'", "id desc");
	
		while($row=$db->fetch_row()) {
			
			
			if(is_odd($nom) == 0) {
				$class = "even";
			} else {
				$class = "odd";
			} 	
			
			$stats = $row[8];	
  
	$cccc=base64_encode($row[1]);
	
	if(!$row[11]) {
		$sts = "<b  style='color: #F00' > Waiting </b>";
	}else{
		$sts = $row[11];
	}
	
	if($row[13] == 1) {
				$st = "<b  style='color: #F00' > Canceled </b>";
				$stx = "";
				

				
	}else{
	
if($row[4] > 0) {
				$st = "<b  style='color: lawngreen' > Active </b>";
				$cnclbtn = "<a href='index.php?go=invest&page=cancel&sc=".$row[2]."' onclick='return confirmActionstopprograme()'><span class='btn btn-danger btn-xs' style='margin-top:10px;'>Cancel Investment</span></a>";
				$stx = "";
			} else {
				$st = "<b  style='color: #F00' > Not Active </b>";
				$cnclbtn = "---";
				$stx = "";
			}	
				}	
			
			$pkt_invs2 = "Package ".$row[7]."";
			$dinone = $row[5];
			$akhire = $row[6]; 
$days = ceil((strtotime("$akhire") - time())/(60*60*24));

$dinone = $days;
$dinone2 = $dinone." days";
if ($dinone <= 0) {
     $statuse = "<span class='btn btn-danger btn-xs'>".$LANG["mbdepo_stop"]."</span>";
     $tox = $row[6];
	 $dinone2 = "--";
				$style = "<font color='#F00000'>";

} else {
     $statuse = "<span class='btn btn-success btn-xs'>".$LANG["mbdepo_active"]."</span>";
     $tox = $row[6];
	  $dinone2 = $dinone2;
				$style = "<font>";
}
$total_depositex = total_deposit_member($user_session);
if($total_depositex > 0){
$total_deposite = rupiah($total_depositex);
}else{
$total_deposite = "0";
}

if($row[5] == "0000-00-00 00:00:00"){
$dtdepo = "----";
}else{
$dtdepo = formatgl($row[5]);
}

if($tox == "0000-00-00 00:00:00" || !$tox){
$dtexp = "----";
}else{
$dtexp = formatgl($tox);
}
$siklus=$row[12];	
	
	   if($siklus == "day"){
		   $pdd = "Daily";
		   $pddx = "Day";
	   }else if($siklus == "week"){
		   $pdd = "Weekly";
		   $pddx = "Week";
	   }else if($siklus == "month"){
		   $pdd = "Monthly";
		   $pddx = "Month";
	   }else{
		   $pdd = "Yearly";
		   $pddx = "Year";
	   }
	   
	
  $ttlprofite=($row[8]/100)*$row[3];
  $ttlroine=$ttlprofite*$row[9];   
		
?>				




<form style="line-height:200%;">

<span><font color='#999'>Date :</font> <?php echo $dtdepo; ?></span> <br />
<span><font color='#999'>Package :</font> <?php echo $pkt_invs2; ?></span> <br />

<span><font color='#999'>Amount :</font> <?php echo rupiah($row[3]); ?></span> <br />



<span><font color='#999'>Profit  :</font> <?php echo $row[8]; ?>% <?php echo $pdd; ?> (<?php echo rupiah($ttlprofite); ?>)</span> <br />
		
<span><font color='#999'>Contract  :</font> <?php echo $row[9]; ?> <?php echo $pddx; ?> (<?php echo rupiah($ttlroine); ?>)</span>  <br />
	
<span><font color='#999'>Status  :</font> <?php echo $st; ?><?php echo $stsdt; ?></span> <br />
		
<span><?php echo $cnclbtn; ?></span> 


</form> 


<?php } ?>

<br />
<hr>

<h5 class="mb-0">Profit History </h5>
<p> Total Profits : <?php
		$ttlbonusee =total_profit_member_kode($user_session, $co);;
if($ttlbonusee>0) { echo rupiah($ttlbonusee); }else{ echo rupiah(0); }
?> </p> 
<hr>



<div style="max-height:400px; overflow:auto;">
 
 
 
 
   <table id="example" width="100%" style="font-size:14px;">

                        <tbody>
                       
             				<?
							
			$sqlfuturez = mysql_query("SELECT * FROM komisi WHERE username='$user_session' and jenis='komshare' and kode='".$co."' ORDER BY id DESC");
$numfuturez = mysql_num_rows($sqlfuturez);
while($rowfuturez = mysql_fetch_array($sqlfuturez)){
	$tglnyadepoz=$rowfuturez["tglbayar"];
	$jumlahdepoz=$rowfuturez["bayar"];
	$kodedeponeeftz=$rowfuturez["kode"];
	$darinee=$rowfuturez["dari"];					
							
?>				
 <div class="div-card mb-2 "  style="min-height:unset!important; font-size:14px;" >	
				<small><font color='#999'>Date :</font> <?php echo $tglnyadepoz;?> </small> 
				<p class="mb-0">
					<font color='#999'>Amount :</font> <?php echo rupiah($jumlahdepoz); ?><br /> 
					<font color='#999'>Info :</font> <?php echo $darinee; ?><br /> 
				</p> 
			</div>
	<?
		}
	?>
                        </tbody>
                    </table>














<?php
 } else  if (isset($_GET['page']) && $_GET['page'] == "submit") {		
                 
                 
$authgoogles=$db->dataku("authgoogle", $user_session);
$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: index.php?go=invest&result=wrong_auth");
exit;
} else {	  	
	
	

$username = anti_injection($_POST['user']);	
$kode = anti_injection($_POST['kode']);	
$produk = anti_injection($_POST['produk']);
$upgrade = anti_injection($_POST['upgrade']);
$lastdepo = anti_injection($_POST['lastdepo']);

$amount = anti_injection($_POST['amount']);
if($produk == 1){
$biaya = $biaya1;
$biayax = $biayax1;
$myproduk = $jenis1;
$profite = $invest_profits1;
$priode = $inv_kontrak1;
$siklus = $invest_priod1;
$cashback = $cashbcke1;
}else if($produk == 2){
$biaya = $biaya2;
$biayax = $biayax2;
$myproduk = $jenis2;
$profite = $invest_profits2;
$priode = $inv_kontrak2;
$siklus = $invest_priod2;
$cashback = $cashbcke2;
}else if($produk == 3){
$biaya = $biaya3;
$biayax = $biayax3;
$myproduk = $jenis3;
$profite = $invest_profits3;
$priode = $inv_kontrak3;
$siklus = $invest_priod3;
$cashback = $cashbcke3;
}else if($produk == 4){
$biaya = $biaya4;
$biayax = $biayax4;
$myproduk = $jenis4;
$profite = $invest_profits4;
$priode = $inv_kontrak4;
$siklus = $invest_priod4;
$cashback = $cashbcke4;
}else if($produk == 5){
$biaya = $biaya5;
$biayax = $biayax5;
$myproduk = $jenis5;
$profite = $invest_profits5;
$priode = $inv_kontrak5;
$siklus = $invest_priod5;
$cashback = $cashbcke5;
}else if($produk == 6){
$biaya = $biaya6;
$biayax = $biayax6;
$myproduk = $jenis6;
$profite = $invest_profits6;
$priode = $inv_kontrak6;
$siklus = $invest_priod6;
$cashback = $cashbcke6;
}else if($produk == 7){
$biaya = $biaya7;
$biayax = $biayax7;
$myproduk = $jenis7;
$profite = $invest_profits7;
$priode = $inv_kontrak7;
$siklus = $invest_priod7;
$cashback = $cashbcke7;
}else if($produk == 8){
$biaya = $biaya8;
$biayax = $biayax8;
$myproduk = $jenis8;
$profite = $invest_profits8;
$priode = $inv_kontrak8;
$siklus = $invest_priod8;
$cashback = $cashbcke8;
}else if($produk == 9){
$biaya = $biaya9;
$biayax = $biayax9;
$myproduk = $jenis9;
$profite = $invest_profits9;
$priode = $inv_kontrak9;
$siklus = $invest_priod9;
$cashback = $cashbcke9;
}else if($produk == 10){
$biaya = $biaya10;
$biayax = $biayax10;
$myproduk = $jenis10;
$profite = $invest_profits10;
$priode = $inv_kontrak10;
$siklus = $invest_priod10;
$cashback = $cashbcke10;
}else{
}


$saldoawallete = $db->mycwalet($user_session);
			 $pendingawallete = $db->mycwaletpending($user_session);
			 $totalawalete = $saldoawallete-$pendingawallete;


if($totalawalete < $amount){
header("location: index.php?go=invest&result=err_balance&pk=".$myproduk."&min=".$amount."");
exit;
}else{

if($amount < $biaya){
header("location: index.php?go=invest&result=min&pk=".base64_encode($myproduk)."&mn=".base64_encode($biaya)."");
exit;
} else {
	
if($amount > $biayax){
header("location: index.php?go=invest&result=max&pk=".base64_encode($myproduk)."&mx=".base64_encode($biayax)."");
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
	header("location: index.php?go=invest&result=no_pin");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=invest&result=wrong_pin");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=invest&result=pin_lock");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=invest&result=pin_off");
	exit;
} else {	
	
	
	
$sql_sp9d2w = mysql_query("select * from dataewalet3 where username='".$username."' and status=0");
$ada_sp9d2w = mysql_num_rows($sql_sp9d2w);
if($ada_sp9d2w){
header("location: index.php?go=invest&result=errors1");
	exit;
} else {	


$sql_sp9d2e = mysql_query("select * from deposit where username='".$username."' and status=1");
$ada_sp9d2e = mysql_num_rows($sql_sp9d2e);
if($ada_sp9d2e >= $maksinvest){
header("location: index.php?go=invest&result=errors2");
	exit;
} else {	
	

$sql_sp9d2 = mysql_query("select * from dataewalet3 where kode='$kode' and username='".$username."'");
$ada_sp9d2 = mysql_num_rows($sql_sp9d2);
if($ada_sp9d2){
header("location: index.php?go=invest&result=errors");
	exit;
} else {	


$angkaunike = substr(str_shuffle(str_repeat("1234567898765432123456987458236521458795463215874568998765432123456987458236512345678987", 48)), 12, 3);
 // $ttlprofite=($priode/100)*$amount;

  $ttlprofite=($profite/100)*$amount;
  $ttlroine=$ttlprofite*$priode;

$expired = date('Y-m-d H:i:s', strtotime("+".$batastransfere." hour"));	
$expireddepo = date('Y-m-d H:i:s', strtotime("+".$priode." ".$siklus.""));		
$db->insert("dataewalet3", "", "'', '$kode', '$username', '$amount', '$angkaunike', '$clientdate', '$expired', '0', '$produk', '$myproduk', '$profite', '', '$priode', '$siklus', '$priode', '$ttlroine', '$ttlroine', '$priode', '$kode'");


$cekadane = mysql_query("select kode from datacwalet where kode='$kode' and username='$user_session'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
$db->insert("datacwalet", "", "'', '$kode', '$user_session', '$amount', 'Payment investment ".$myproduk." $kode', 'administrator', '$clientdate', 1, '$clientdate', '', ''"); }	
}


$db->update("dataewalet3", "status='1', exp='$clientdate'", "kode='$kode'");	
$db->update("reinv", "status='1'", "username='$username'");
$db->update("member", "harga='$produk', stage='$myproduk', act='1', tglaktif='$clientdate'", "username='$username'");

$expired = date('Y-m-d H:i:s', strtotime("+".$priode." ".$siklus.""));

$cekadadepo = mysql_query("select * from deposit where kode='$kode'");
$ada_deponec = mysql_num_rows($cekadadepo); 
if(!$ada_deponec) {	
			
$db->insert("deposit", "", "'', '$username', '$kode', '$amount', '1', '$clientdate', '$expired', '$produk', '$myproduk', '$profite', '$priode', '', '$siklus', '$ttlroine', '', '$ttlroine', '$priode', ''"); 


	$sponsore = $db->dataku("sponsor", $username);
$sponsore2 = $db->dataku("sponsor", $sponsore);
$sponsore3 = $db->dataku("sponsor", $sponsore2);
$sponsore4 = $db->dataku("sponsor", $sponsore3);
$sponsore5 = $db->dataku("sponsor", $sponsore4);

$kmspons = explode("|", $db->config("komisi_sponsor"));	
			
			$komsponx = ($kmspons[0]/100)*$amount;
			$komsponx2 = ($kmspons[1]/100)*$amount;
			$komsponx3 = ($kmspons[2]/100)*$amount;
			$komsponx4 = ($kmspons[3]/100)*$amount;
			$komsponx5 = ($kmspons[4]/100)*$amount;
			
			if($sponsore && $komsponx > 0) { 
			$cekadakome = mysql_query("select * from komisi where jenis='komsponsor' and username='$sponsore' and dari='$username' and kode='".$kode."sp'");
$ada_komex = mysql_num_rows($cekadakome); 
if(!$ada_komex) {	
				$db->insert("komisi", "", "'', '$sponsore', '$komsponx', '$clientdate', '0', '', 'komsponsor', '$username', '".$kode."sp', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp', 'administrator', '$komsponx', 'Refferal Bonus Level 1 From $username', '$sponsore', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}
				
			if($sponsore2 && $komsponx2 > 0) { 
			$cekadakome2 = mysql_query("select * from komisi where jenis='komsponsor2' and username='$sponsore2' and dari='$username' and kode='".$kode."sp2'");
$ada_komex2 = mysql_num_rows($cekadakome2); 
if(!$ada_komex2) {	
				$db->insert("komisi", "", "'', '$sponsore2', '$komsponx2', '$clientdate', '0', '', 'komsponsor2', '$username', '".$kode."sp2', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp2', 'administrator', '$komsponx2', 'Refferal Bonus Level 2 From $username', '$sponsore2', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore2'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}	
				
				if($sponsore3 && $komsponx3 > 0) { 
			$cekadakome3 = mysql_query("select * from komisi where jenis='komsponsor3' and username='$sponsore3' and dari='$username' and kode='".$kode."sp3'");
$ada_komex3 = mysql_num_rows($cekadakome3); 
if(!$ada_komex3) {	
				$db->insert("komisi", "", "'', '$sponsore3', '$komsponx3', '$clientdate', '0', '', 'komsponsor3', '$username', '".$kode."sp3', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp3', 'administrator', '$komsponx3', 'Refferal Bonus Level 3 From $username', '$sponsore3', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore3'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}	
				
				if($sponsore4 && $komsponx4 > 0) { 
			$cekadakome4 = mysql_query("select * from komisi where jenis='komsponsor4' and username='$sponsore4' and dari='$username' and kode='".$kode."sp4'");
$ada_komex4 = mysql_num_rows($cekadakome4); 
if(!$ada_komex4) {	
				$db->insert("komisi", "", "'', '$sponsore4', '$komsponx4', '$clientdate', '0', '', 'komsponsor4', '$username', '".$kode."sp4', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp4', 'administrator', '$komsponx4', 'Refferal Bonus Level 4 From $username', '$sponsore4', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore4'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}	
				
				if($sponsore5 && $komsponx5 > 0) { 
			$cekadakome5 = mysql_query("select * from komisi where jenis='komsponsor5' and username='$sponsore5' and dari='$username' and kode='".$kode."sp5'");
$ada_komex5 = mysql_num_rows($cekadakome5); 
if(!$ada_komex5) {	
				$db->insert("komisi", "", "'', '$sponsore5', '$komsponx5', '$clientdate', '0', '', 'komsponsor5', '$username', '".$kode."sp5', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp5', 'administrator', '$komsponx5', 'Refferal Bonus Level 5 From $username', '$sponsore5', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore5'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}




$db->insert("notifikasi", "", "'', '$username', 'Add Investment', '', '', 'Your add investment, package ".$myproduk.", amount ".rupiah($amount)."', '$clientdate', 'label label-sm label-icon label-info', 'fa fa-info', '0', '$kode'");

	
$jumlahdepone = rupiah($amount);
$jumlahdeponec = rupiahwa($amount);
$jumlahbayare = rupiah($amountpay);
$prodd="Add Investment ".$myproduk."";
$nama = $db->dataku("nama", $username);
$hp = $db->dataku("hp", $username);
$email = $db->dataku("email", $username);
$accid = $db->dataku("accid", $username);
	
$tkk = date('dmYHis', strtotime($clientdate));
$tokens = substr(str_shuffle(str_repeat("4453B141119A06676420371112GEHDLPD8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 48);

$invc = "REG_".strtoupper($username)."_".$tkk."_".$stmpkodene."_".$tokens;
$inv = "http://".$domain."/invoice/".$invc.".pdf";
//$db->insert("invoice", "", "'', '$username', '$kode', '$invc', '$clientdate'");   

 $bank = $db->config("bank");if($bank){ $banke = $bank."<br>"; }
 $bank1 = $db->config("bank1");if($bank1){ $banke1 = $bank1."<br>"; }
 $bank2 = $db->config("bank2");if($bank2){ $banke2 = $bank2."<br>"; }
 $bank3 = $db->config("bank3");if($bank3){ $banke3 = $bank3."<br>"; }
 $bank4 = $db->config("bank4");if($bank4){ $banke4 = $bank4."<br>"; }
 $bank5 = $db->config("bank5");if($bank5){ $banke5 = $bank5."<br>"; }
 $bank6 = $db->config("bank6");if($bank6){ $banke6 = $bank6.""; }
 
 if($bank){ $bankex = $bank.", "; }
 if($bank1){ $bankex1 = $bank1.", "; }
 if($bank2){ $bankex2 = $bank2.", "; }
 if($bank3){ $bankex3 = $bank3.", "; }
 if($bank4){ $bankex4 = $bank4.", "; }
 if($bank5){ $bankex5 = $bank5.", "; }
 if($bank6){ $bankex6 = $bank6.""; }
 
 $bankadmins=$banke."".$banke1."".$banke2."".$banke3."".$banke4."".$banke5."".$banke6;
 $bankadminsx=$bankex."".$bankex1."".$bankex2."".$bankex3."".$bankex4."".$bankex5."".$bankex6;


$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama." (".$username."),</p>
<p>Your Add Investment.</p>
<p><strong>No: ".$kode."<br>
Package: ".$myproduk."<br>
Amount: ".$jumlahdepone."<br>
Date: ".$tgl."<br>
</p>

<p><br><br><br>
Regards,<br>
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
        $mail3->Subject = ''.$nama.', Your Add Investment';
        $mail3->msgHTML($isimail);
	  //  $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	



if($hp){
$isipesan = "Hello ".$nama.", your add investment, Package ".$myproduk.", No: ".$kode.", Amount: ".$jumlahdeponec.". please login and make payment";
	mysql_query("insert into outbox values('', '', '$username', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
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

header("location: index.php?go=invest&result=success&pk=".$myproduk."&co=".$kode."");
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
 }else{
   ?>              
            
<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0">Form Investment </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
		<a class="btn btn-primary"  style="height: 25px;padding-top:0px; padding-bottom:0px; align-items:center;"  href="index.php?go=profits" ><i class='fa fa-money' style="margin-right:14px;"></i>Profit</a>
	</div>
</div>
<p class="mb-0"> Please select package investment you want.<br /><font style="font-size:12px; color:#FC3;"><i>Purchasing investment package will reduce your <?php echo $currencye; ?> balance.</i></font></p> 	
<hr>
     
<?php  if($investment == 0){ 
				 echo "<div style='color:white;border:0px; margin-top:20px;' class='alert alert-danger bg-danger alert-dismissable'>Add Investment is curently disable by administrator.</div>";
			
}else{
				 ?>
                 

<?php
 if(isset($_GET['result'])&&$_GET['result']=="success"){
if(isset($_GET["co"])){ $co = $_GET["co"]; }
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Add Investment ".$_GET["pk"]." (".$co.") has been active.</div>";
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
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Amount Investment must be filled!</div>";
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
 if(isset($_GET['result'])&&$_GET['result']=="errors1"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You have add investment and not yet processed! Wait for buy package previously processed to be able to buy package again.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="err_balance"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your ".$currencye." balance is insufficient to purchase package ".$_GET['pk'].".</div>";
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
if(isset($_GET['result'])&&$_GET['result']=="min"){
$pck = base64_decode($_GET['pk']);
$min = base64_decode($_GET['mn']);	
	
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You choose package ".$pck.", Minimal investment for this package is ".rupiah($min).".</div>";
}
?>
<?php
if(isset($_GET['result'])&&$_GET['result']=="max"){
$pck = base64_decode($_GET['pk']);
$max = base64_decode($_GET['mx']);
	
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You choose package ".$pck.", Max Investment for this package is ".rupiah($max).".</div>";
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
		document.getElementById('total').value = format_num(roundNumber(q*p,2));
	}

	
	//-->
	</script>	               


 <?php    
  
$initiale = substr(str_shuffle(str_repeat("ABCEFGHIJKLMNPRSTUVWXYZ", 36)), 6, 2);
$stkode = strtotime(date("Y-m-d H:i:s"));
$kodec = $initiale."".$stkode;
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);


?>    <style>
optgroup { font-size:14px; font-family:Verdana, Geneva, sans-serif; }
</style>    

<form action="index.php?go=invest&page=submit" method="post">
<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>"/>
<input type="hidden" id="user" name="user" value="<?php echo $user_session; ?>"/> 




<div class="div-card bg-2">	

<span> Your Available Balance </span> 
<?php $saldobwallete = $db->mycwalet($user_session);
			 $pendingbwallete = $db->mycwaletpending($user_session);
			 $totalbwalete = $saldobwallete-$pendingbwallete;
			 if($totalbwalete > 0){ ?>
		<input type="text" readonly disabled="true"  class="form-control db"  value="<?php echo rupiah($totalbwalete); ?>"/>
        <?php } else { ?>
		<input type="text" readonly disabled="true"  class="form-control db"  value="<?php echo rupiah($totalbwalete); ?>" />
        
        <?php } ?>



  


	<label>Invest Package * </label>
 
      <select name="produk" id="produk"  class="form-control" required="required">
  <optgroup>
              <option value="" selected="selected" style="font-size:12px;">[ Select Investment Package]</option>
	 <?php
	
	for($i=0;$i<$batas_paket;$i++) {	
	 $ic = $i;
	 $icc = $i+1;
	 $produke = $lead[$ic];
	 $byay = rupiahx($by[$ic]);
	 $byay2 = rupiahx($byx[$ic]);
	 $proffte = $invest_pf[$ic];
	 $sharepro = $inv_kont[$ic];
	 $priddee = $priod_pf[$ic];
	 
	  if($priddee == "day"){
		   $pdd = "daily";
		   $pddx = "day";
	   }else if($priddee == "week"){
		   $pdd = "weekly";
		   $pddx = "week";
	   }else{
		   $pdd = "monthly";
		   $pddx = "month";
	   }
	 
	 
	 echo"<option value='".$icc."'>".$produke." (".$proffte."% ".$pdd.", ".$sharepro." ".$pddx.") ".$byay."-".$byay2."</option>";
	}
	 ?> </optgroup>	  
		  </select> 


	<label>Amount Invest * </label>
 <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><?php echo $currencye; ?></div>
        </div>
      <input name="amount" type="number" class="form-control" id="amount" onKeyUp='cekQ();'; placeholder="Enter Amount" onkeypress="return numbersonly(event)" required='required' autocomplete="off">
      </div>


	
    
    <?php if($usepins == 1){ ?>
     <label>Secure PIN</label>
           <input name="pincode" class="form-control" id="pincode" placeholder="Enter Your Secure PIN" type="password" required='required' autocomplete="off" style="background:#161616; border:none; margin-bottom:10px;">
   <?php } ?>

<?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
     <label>2FA Code</label>
           <input type="text" class="form-control" placeholder="Hanya jika anda mengaktifkan 2FA" name="one_time_password">
    
   <?php } ?>
    
    
    
    
    <br />
 <script>
		function confirmActionbuyy(){
      var confirmed = confirm("Invest Now?");
      return confirmed;
}
</script>   
	 
	<button type="submit" name="deposit" onclick='return confirmActionbuyy()' class="btn btn-dark mt-2 form-control" ><i class='fa fa-pie-chart' style="margin-right:12px;"></i>Invest Now</button> 
	
	
</div>
</form>


<br />


<h5 class="mb-0">Invest history </h5>
<p> Last Recent Invest History </p> 
<hr>

 <?

	$db->select("id, username, jumlah, tgl, status, plan, cashback, getamount, kode, cycle", "dataewalet3", "username='$user_session'", "id desc");
	
		while($row=$db->fetch_row()) {
			
			
			if(is_odd($nom) == 0) {
				$class = "even";
			} else {
				$class = "odd";
			} 	
			
			$stats = $row[8];	
  
	$cccc=base64_encode($row[1]);
	
	if($row[9] == 1) {
				$st = "<b  style='color: #F00' > Canceled </b>";
				$stx = "";
	}else{
	if($row[4] > 0) {
				$st = "<b  style='color: lawngreen' > Active </b>";
			} else {
				$st = "<b  style='color: #F00' > Not Active </b>";
			}		
			}
			$pkt_invs2 = "".$row[5]."";
	
	
			

if($row[5] == "0000-00-00 00:00:00"){
$dtdepo = "----";
}else{
$dtdepo = formatgl($row[5]);
}

if($tox == "0000-00-00 00:00:00" || !$tox){
$dtexp = "----";
}else{
$dtexp = formatgl($tox);
}
	
	
	
		
?>				


<div class="div-card bg-2 mb-2 "  style="min-height:unset!important;" >	
				<small><font color='#999'>Date :</font> <?php echo $row[3];?> </small> 
				<p class="mb-0">
					<font color='#999'>Package :</font> <?php echo $pkt_invs2; ?> <?php echo rupiah($row[2]);?><br /> 
					<font color='#999'>Status :</font> 
					 <?php
							if($row[9] == 1) { ?>
				<b  style='color: #F90' > Canceled </b>
                <?php }else {
							$sql_ckdepones = mysql_query("select * from deposit where username='".$user_session."' and kode='".$row[8]."' and status='1'");
$ada_ckdepones = mysql_num_rows($sql_ckdepones);
if($ada_ckdepones>0){ ?>
                            <b  style='color: lawngreen' > Active </b>
                            <?php } else {?>
                           <b  style='color: #F00' > Not Active </b>

<?php }} ?>
                    
                    
                    
                    <br /> 
                    
					<span> 
                    <?php
							$sql_ckdepone = mysql_query("select * from deposit where username='".$user_session."' and kode='".$row[8]."'");
$ada_ckdepone = mysql_num_rows($sql_ckdepone);
if($ada_ckdepone>0){ ?>
<a class="btn btn-primary"  style="height: 25px;padding-top:0px; padding-bottom:0px; align-items:center; margin-top:4px;" href="index.php?go=invest&page=details&co=<?php echo $row[8]; ?>"><i class="fa fa-search" style=" margin-right:5px;"></i>Details</a>
                            <?php } else { echo ""; } ?>
                    
                        </span> 
				</p> 
			</div>


<?php } ?>



<?php } ?>
<?php } ?>








 





</div>
</div>
</div>