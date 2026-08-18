<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>



<div class="container-main-div  pb-5">
			


<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0" style="color:#666666;">Transfer Balance </h5>
	</div>
	
</div>
<p class="mb-0" style="color:#666666;"> Please enter detail transfer you want<br /><font style="font-size:12px; color:#FC3;"><i>Min <?php echo rupiah($mintranswalletcash); ?>, Max <?php echo rupiah($maxtranswalletcash); ?>, Fee <?php echo $feetranswalletcash; ?>%.</i></font></p> 	
<hr>

 <?php if($usekyc == 1 && $db->dataku("accpt", $user_session) == 0){ 
				 echo "<div style='color:white;border:0px; margin-top:20px;' class='alert alert-danger bg-danger alert-dismissable'>Transfer ".$currencye." Balance is disable, to be able Transfer your ".$currencye." Balance you must verification first.  <a class='btn btn-primary'  style='height: 25px;padding-top:0px; padding-bottom:0px; align-items:center;'  href='index.php?go=kyc' >Verification Here</a></div>";
				  }else{
				 
				  ?>   


<?php  if($transwalletcash == 0){ 
				 echo "<div style='color:white;border:0px; margin-top:20px;' class='alert alert-danger bg-danger alert-dismissable'>Transfer ".$currencye." is curently disable by administrator.</div>";
			
}else{
				 ?>
                 
                 
<?php
 if (isset($_GET['page']) && $_GET['page'] == "submit") {		
                 
                 
  $authgoogles=$db->dataku("authgoogle", $user_session);
$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: index.php?go=transfer&result=wrong_auth");
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
	header("location: index.php?go=transfer&result=no_pin");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=transfer&result=wrong_pin");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=transfer&result=pin_lock");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=transfer&result=pin_off");
	exit;
} else {	



$kode = $_POST['kode'];
$username = anti_injection($_POST['user']);	
$accid = anti_injection($_POST['accid']);	
$amount = anti_injection($_POST['amount']);
$tujuan = anti_injection($_POST['tujuan']);	
$fee = anti_injection($_POST['fee']);	


$queryupline = "SELECT username FROM upline WHERE 
username='$username' and upline0='$tujuan' or 
username='$username' and upline1='$tujuan' or username='$username' and upline2='$tujuan' or 
username='$username' and upline3='$tujuan' or username='$username' and upline4='$tujuan' or 
username='$username' and upline5='$tujuan' or username='$username' and upline6='$tujuan' or 
username='$username' and upline7='$tujuan' or username='$username' and upline8='$tujuan' or 
username='$username' and upline9='$tujuan' or username='$username' and upline10='$tujuan' or 
username='$username' and upline11='$tujuan' or username='$username' and upline12='$tujuan' or 
username='$username' and upline13='$tujuan' or username='$username' and upline14='$tujuan' or 
username='$username' and upline15='$tujuan' or username='$username' and upline16='$tujuan' or 
username='$username' and upline17='$tujuan' or username='$username' and upline18='$tujuan' or 
username='$username' and upline19='$tujuan' or username='$username' and upline20='$tujuan' or 
username='$username' and upline21='$tujuan' or username='$username' and upline22='$tujuan' or 
username='$username' and upline23='$tujuan' or username='$username' and upline24='$tujuan' or 
username='$username' and upline25='$tujuan' or username='$username' and upline26='$tujuan' or 
username='$username' and upline27='$tujuan' or username='$username' and upline28='$tujuan' or 
username='$username' and upline29='$tujuan' or username='$username' and upline30='$tujuan' or 
username='$username' and upline31='$tujuan' or username='$username' and upline32='$tujuan' or 
username='$username' and upline33='$tujuan' or username='$username' and upline34='$tujuan' or 
username='$username' and upline35='$tujuan' or username='$username' and upline36='$tujuan' or 
username='$username' and upline37='$tujuan' or username='$username' and upline38='$tujuan' or 
username='$username' and upline39='$tujuan' or username='$username' and upline40='$tujuan' or 
username='$username' and upline41='$tujuan' or username='$username' and upline42='$tujuan' or 
username='$username' and upline43='$tujuan' or username='$username' and upline44='$tujuan' or 
username='$username' and upline45='$tujuan' or username='$username' and upline46='$tujuan' or 
username='$username' and upline47='$tujuan' or username='$username' and upline48='$tujuan' or 
username='$username' and upline49='$tujuan' or username='$username' and upline50='$tujuan' or 
username='$username' and upline51='$tujuan' or username='$username' and upline52='$tujuan' or 
username='$username' and upline53='$tujuan' or username='$username' and upline54='$tujuan' or 
username='$username' and upline55='$tujuan' or username='$username' and upline56='$tujuan' or 
username='$username' and upline57='$tujuan' or username='$username' and upline58='$tujuan' or 
username='$username' and upline59='$tujuan' or username='$username' and upline60='$tujuan' or 
username='$username' and upline61='$tujuan' or username='$username' and upline62='$tujuan' or 
username='$username' and upline63='$tujuan' or username='$username' and upline64='$tujuan' or 
username='$username' and upline65='$tujuan' or username='$username' and upline66='$tujuan' or 
username='$username' and upline67='$tujuan' or username='$username' and upline68='$tujuan' or 
username='$username' and upline69='$tujuan' or username='$username' and upline70='$tujuan' or 
username='$username' and upline71='$tujuan' or username='$username' and upline72='$tujuan' or 
username='$username' and upline73='$tujuan' or username='$username' and upline74='$tujuan' or 
username='$username' and upline75='$tujuan' or username='$username' and upline76='$tujuan' or 
username='$username' and upline77='$tujuan' or username='$username' and upline78='$tujuan' or 
username='$username' and upline79='$tujuan' or username='$username' and upline80='$tujuan' or 
username='$username' and upline81='$tujuan' or username='$username' and upline82='$tujuan' or 
username='$username' and upline83='$tujuan' or username='$username' and upline84='$tujuan' or 
username='$username' and upline85='$tujuan' or username='$username' and upline86='$tujuan' or 
username='$username' and upline87='$tujuan' or username='$username' and upline88='$tujuan' or 
username='$username' and upline89='$tujuan' or username='$username' and upline90='$tujuan' or 
username='$username' and upline91='$tujuan' or username='$username' and upline92='$tujuan' or 
username='$username' and upline93='$tujuan' or username='$username' and upline94='$tujuan' or 
username='$username' and upline95='$tujuan' or username='$username' and upline96='$tujuan' or 
username='$username' and upline97='$tujuan' or username='$username' and upline98='$tujuan' or 
username='$username' and upline99='$tujuan' or username='$username' and upline100='$tujuan'"; 
$resultupline = mysql_query($queryupline);
$ada_upline = mysql_num_rows($resultupline); 


$querydownline = "SELECT username FROM upline WHERE 
username='$tujuan' and upline0='$username' or 
username='$tujuan' and upline1='$username' or username='$tujuan' and upline2='$username' or 
username='$tujuan' and upline3='$username' or username='$tujuan' and upline4='$username' or 
username='$tujuan' and upline5='$username' or username='$tujuan' and upline6='$username' or 
username='$tujuan' and upline7='$username' or username='$tujuan' and upline8='$username' or 
username='$tujuan' and upline9='$username' or username='$tujuan' and upline10='$username' or 
username='$tujuan' and upline11='$username' or username='$tujuan' and upline12='$username' or 
username='$tujuan' and upline13='$username' or username='$tujuan' and upline14='$username' or 
username='$tujuan' and upline15='$username' or username='$tujuan' and upline16='$username' or 
username='$tujuan' and upline17='$username' or username='$tujuan' and upline18='$username' or 
username='$tujuan' and upline19='$username' or username='$tujuan' and upline20='$username' or 
username='$tujuan' and upline21='$username' or username='$tujuan' and upline22='$username' or 
username='$tujuan' and upline23='$username' or username='$tujuan' and upline24='$username' or 
username='$tujuan' and upline25='$username' or username='$tujuan' and upline26='$username' or 
username='$tujuan' and upline27='$username' or username='$tujuan' and upline28='$username' or 
username='$tujuan' and upline29='$username' or username='$tujuan' and upline30='$username' or 
username='$tujuan' and upline31='$username' or username='$tujuan' and upline32='$username' or 
username='$tujuan' and upline33='$username' or username='$tujuan' and upline34='$username' or 
username='$tujuan' and upline35='$username' or username='$tujuan' and upline36='$username' or 
username='$tujuan' and upline37='$username' or username='$tujuan' and upline38='$username' or 
username='$tujuan' and upline39='$username' or username='$tujuan' and upline40='$username' or 
username='$tujuan' and upline41='$username' or username='$tujuan' and upline42='$username' or 
username='$tujuan' and upline43='$username' or username='$tujuan' and upline44='$username' or 
username='$tujuan' and upline45='$username' or username='$tujuan' and upline46='$username' or 
username='$tujuan' and upline47='$username' or username='$tujuan' and upline48='$username' or 
username='$tujuan' and upline49='$username' or username='$tujuan' and upline50='$username' or 
username='$tujuan' and upline51='$username' or username='$tujuan' and upline52='$username' or 
username='$tujuan' and upline53='$username' or username='$tujuan' and upline54='$username' or 
username='$tujuan' and upline55='$username' or username='$tujuan' and upline56='$username' or 
username='$tujuan' and upline57='$username' or username='$tujuan' and upline58='$username' or 
username='$tujuan' and upline59='$username' or username='$tujuan' and upline60='$username' or 
username='$tujuan' and upline61='$username' or username='$tujuan' and upline62='$username' or 
username='$tujuan' and upline63='$username' or username='$tujuan' and upline64='$username' or 
username='$tujuan' and upline65='$username' or username='$tujuan' and upline66='$username' or 
username='$tujuan' and upline67='$username' or username='$tujuan' and upline68='$username' or 
username='$tujuan' and upline69='$username' or username='$tujuan' and upline70='$username' or 
username='$tujuan' and upline71='$username' or username='$tujuan' and upline72='$username' or 
username='$tujuan' and upline73='$username' or username='$tujuan' and upline74='$username' or 
username='$tujuan' and upline75='$username' or username='$tujuan' and upline76='$username' or 
username='$tujuan' and upline77='$username' or username='$tujuan' and upline78='$username' or 
username='$tujuan' and upline79='$username' or username='$tujuan' and upline80='$username' or 
username='$tujuan' and upline81='$username' or username='$tujuan' and upline82='$username' or 
username='$tujuan' and upline83='$username' or username='$tujuan' and upline84='$username' or 
username='$tujuan' and upline85='$username' or username='$tujuan' and upline86='$username' or 
username='$tujuan' and upline87='$username' or username='$tujuan' and upline88='$username' or 
username='$tujuan' and upline89='$username' or username='$tujuan' and upline90='$username' or 
username='$tujuan' and upline91='$username' or username='$tujuan' and upline92='$username' or 
username='$tujuan' and upline93='$username' or username='$tujuan' and upline94='$username' or 
username='$tujuan' and upline95='$username' or username='$tujuan' and upline96='$username' or 
username='$tujuan' and upline97='$username' or username='$tujuan' and upline98='$username' or 
username='$tujuan' and upline99='$username' or username='$tujuan' and upline100='$username'"; 
$resultdownline = mysql_query($querydownline);
$ada_downline = mysql_num_rows($resultdownline); 
	
	
if(!$ada_upline && !$ada_downline){	
	    header("location: index.php?go=transfer&result=nocrossline");
	exit;
	
      } else {		

if (!$tujuan) {
        header("location: index.php?go=transfer&result=nouser");
	exit;
      } else {
		  
if ($username == $tujuan) {
        header("location: index.php?go=transfer&result=nosame");
	exit;
      } else {	

$saldobwallete = $db->mycwalet($user_session);
$pendingbwallete = $db->mycwaletpending($user_session);
$jmlsaldone = $saldobwallete-$pendingbwallete;

$fee = $_POST['fee'];
$jumlah=$amount;	

$jml_fee=($fee/100)*$amount;

$jml_byr=$amount-$jml_fee;
$jmlfeex = rupiah($jml_fee);
$jmlrecx = rupiah($jml_byr);

if ($amount > $jmlsaldone) {
        header("location: index.php?go=transfer&result=insufficient&mx=$jmlsaldone");
	exit;
      } else {		 

$db->select("status", "datacwalet2c", "status='0' and username='$username'");
				$ada = $db->num_rows();
if ($ada >0) {
  header("location: index.php?go=transfer&result=pending");
	exit;
} else {


	  
		  
$cektujuan = mysql_query("select * from member where username='$tujuan'");
$ada_tujuan = mysql_num_rows($cektujuan); //---flush out hari ini
if (!$ada_tujuan) {
header("location: index.php?go=transfer&result=usernotfound");
	exit;
}else{	

if (!$amount || $amount < $mintranswalletcash) {
        header("location: index.php?go=transfer&result=min_trans");
	exit;
      } else {


$tgl_skr = (date("Y-m-d"));
			$dtfromnya = "$tgl_skr 00:00:00";
			$dttonya = "$tgl_skr 23:59:59";
  $cekjmlah=mysql_query("select SUM(jumlah) from datacwalet2c where username='$username' and (tgl between '$dtfromnya' and '$dttonya')");
	                 while($rowcekjumlah=mysql_fetch_row($cekjmlah)) {
		             $tothariini = $rowcekjumlah[0];
		             }
$btsharinie=$maxtranswalletcash-$tothariini;
if ($amount > $btsharinie) {
        header("location: index.php?go=transfer&result=max_trans");
	exit;
      } else {	  

$db->insert("datacwalet2c", "", "'', '$kode', '$username', '$jumlah', '$uraian', '$tujuan', '$clientdate', '1', '$jenis', '$jml_fee', '$jml_byr', '$accid', '$accid2'");


if($fee > 0){	
$uraian1 = "Transfer Fee ".$fee."% (".rupiah($jml_fee).")";
}else{
$uraian1 = "Transfer";
}
		
$cekadane = mysql_query("select kode from datacwalet where kode='$kode'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
$db->insert("datacwalet", "", "'', '$kode', '$username', '$jml_byr', '".mysql_real_escape_string($uraian1)."', '$tujuan', '$clientdate', 1, '$clientdate', '$accid', '$accid2'");		
if($jml_fee > 0){
$db->insert("datacwalet", "", "'', '$kode', '$username', '$jml_fee', '".mysql_real_escape_string($uraian1)."', 'administrator', '$clientdate', 1, '$clientdate', '$accid', 'administrator'"); 
}	
}	
	$spon_nama = $db->dataku("nama", $user_session);
		$spon_mail = $db->dataku("email", $user_session);
		$nama = $db->dataku("nama", $user_session);
		$jumlahdepone = rupiah($amount);
		$jumlahdeponec = rupiahwa($amount);
		$namadmin = $db->config("name");
		$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");


$sess = substr(str_shuffle(str_repeat("4453141119066764203711128717497783625536342396411241472162223777", 64)), 0, 22);
			$invc="TRANSFER".$user_session."_".$sess."_".$kode;
			$inv="http://".$domain."/invoice/".$invc.".pdf";
			$db->insert("invoice","","'', '$user_session', '$kode', '$invc', '$clientdate'");
			$nama_ku = $db->dataku("nama",$user_session);
			$email_ku = $db->dataku("email",$user_session);
			$hp_ku = $db->dataku("hp",$user_session);
			$nama_nya = $db->dataku("nama",$tujuan);
			$hptujuan = $db->dataku("hp",$tujuan);
			$emailtujuan = $db->dataku("email",$tujuan);
	

if($hp_ku){
$isipesane = "Hello ".$nama_ku." (".$user_session."), You have to transfer ".$currencye." balance (".$kode.") To: ".$nama_nya." (".$tujuan."), amount: ".$jumlahdeponec.", date: ".$tgl.".";
sendwa($hp_ku, $isipesane, $apikeywoowa);	
		}	
		
			if($hptujuan){
$isipesanec = "Hello ".$nama_nya." (".$tujuan."), You have get transfer ".$currencye." balance (".$kode.") From: ".$nama_ku." (".$user_session."), amount: ".$jumlahdeponec.", date: ".$tgl.".";
sendwa($hptujuan, $isipesanec, $apikeywoowa);	
		}	
//$isipesan = "".$nama_ku.", pembelian balance ".$jenis." sebesar ".$jumlahdepone." telah berhasil, selanjutnya silahkan lakukan pembayaran.";
//mysql_query("insert into outbox values('', '$kode', '".$user_session."', '$hp_ku', '$isipesan', '$clientdate', '1')") or die(mysql_error());
//sendsms($hp_ku, $isipesan) ;
	
//$isipesan2 = "Ada member beli balance ".$jenis." sebesar ".$jumlahdepone.", Kode: ".$kode.", User: ".$user_session.", Nama: ".$nama_ku."";
//sendsms($hpadmin, $isipesan2) ;
	
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama_ku." (".$user_session."),</p>
<p>You have to transfer ".$currencye." balance,</p>
<p>No: ".$kode."<br>
Amount: ".$jumlahdepone."<br>
Fee ".$fee."%: ".rupiah($jml_fee)."<br>
Transfer: ".$jmlrecx."<br>
Recipient: ".$nama_nya."<br>
Date: ".$tgl."<br>
Status: success<br>
<p>
Notes: ".$uraian."
</p>
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
		if($smaile == 1){	
//$mail3->IsSMTP(); // telling the class to use SMTP
$mail3->Host       = $smtphost; // SMTP server
$mail3->SMTPAuth   = true;                  // enable SMTP authentication
$mail3->Host       = $smtphost; // sets the SMTP server
$mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3->Username   = $smtpuser; // SMTP account username
$mail3->Password   = $smtpass;        // SMTP account password
}
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email_ku, $nama_ku);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama_ku.', your transfer '.$currencye.' balance';
        $mail3->msgHTML($isimail);
	   // $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();		
	
	

$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama_nya." (".$tujuan."),</p>
<p>You have to get the ".$currencye." Balance,</p>
<p>No: ".$kode."<br>
Amount: ".$jumlahdepone."<br>
Fee ".$fee."%: ".rupiah($jml_fee)."<br>
Transfer: ".$jmlrecx."<br>
From: ".$nama_ku."<br>
Date: ".$tgl."<br>
Status: success<br>
<p>
Notes: ".$uraian."
</p>
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";


 $mail3b = new PHPMailer;
 if($smaile == 1){	
//$mail3b->IsSMTP(); // telling the class to use SMTP
$mail3b->Host       = $smtphost; // SMTP server
$mail3b->SMTPAuth   = true;                  // enable SMTP authentication
$mail3b->Host       = $smtphost; // sets the SMTP server
$mail3b->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3b->Username   = $smtpuser; // SMTP account username
$mail3b->Password   = $smtpass;        // SMTP account password
}
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($emailtujuan, $nama_nya);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$nama_nya.', you get '.$currencye.' Balance';
        $mail3b->msgHTML($isimail2);
        $mail3b->send();		

$db->insert("notifikasi", "", "'', '$username', 'Transfer ".$currencye." Balance', '', '', 'Transfer ".$currencye." Balance ".$kode." has been processed.', '$clientdate', 'label label-sm label-icon label-info', 'fa fa-info', '0', '$kode'");

$db->insert("notifikasi", "", "'', '$tujuan', 'Transfer ".$currencye." Balance', '', '', 'You get a ".$currencye." Balance ".$kode." from ".$accid." (".$nama_ku.").', '$clientdate', 'label label-sm label-icon label-info', 'fa fa-info', '0', '$kode'");

  header("location: index.php?go=transfer&result=success_add&co=".base64_encode($kode)."&ca=".base64_encode($jumlahdepone)."&cd=".base64_encode($accid2)."");
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
 }else{
   ?>              
                 
                 
                 
                 
                                	
      <?php    
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);
?> 
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="success_add"){
if(isset($_GET["co"])){ $co = anti_injection(base64_decode($_GET["co"])); }
if(isset($_GET["ca"])){ $ca = anti_injection(base64_decode($_GET["ca"])); }
if(isset($_GET["cd"])){ $cd = anti_injection(base64_decode($_GET["cd"])); }
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Transfer ".$currencye." Balance no ".$co." to user ".$cd." has been sent.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="nocrossline"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You can only transfer ".$currencye." Balance to upline or downline, not to crossline.</div>";
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
 if(isset($_GET['result'])&&$_GET['result']=="min_trans"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Min transfer ".$currencye." Balance is ".rupiah($mintranswalletcash).".</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="max_trans"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Max transfer ".$currencye." Balance is ".rupiah($maxtranswalletcash).".</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pending"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You still have a ".$currencye." Balance transfer transaction previously pending status. Wait until the transaction is processed in order to be able to transfer ".$currencye." Balance again.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="nouser"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Users want to transfer can not be empty.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="usernotfound"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Transfer destination user is not found.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="errors"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You can not transfer ".$currencye." balance to your self.</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="insufficient"){
$mx = $_GET['mx'];
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your ".$currencye." Balance is insufficient, max transfer is ".rupiah($mx).".</div>";
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

 		<?php
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Wrong Captcha!</div>";
}
?>	 
 
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
 <script>
		function confirmtransfer(){
      var session_value=document.getElementById('tujuan').value;
      var session_valuex=document.getElementById('amount').value;
      var confirmed = confirm("Are you sure you want to transfer <?php echo $currencye; ?> Balance:" + "\n" + "Amount: "+session_valuex+" USD\n" + "Transfer To User ID: "+session_value);
      return confirmed;
}
</script>    



<form action="index.php?go=transfer&page=submit" method="post">
<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>"/>
<input type="hidden" id="user" name="user" value="<?php echo $user_session; ?>"/>
<input type="hidden" id="fee" name="fee" value="<?php echo $feetranswalletcash; ?>"/>




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


    <div class="controls-row" style="margin-bottom:20px;">
       <label>Username Recipient</label>
           <input name="tujuan" class="form-control" type="text" id="tujuan"  placeholder="Username Recipient" required='required' <?php echo $diss3; ?><?php echo $diss4; ?><?php echo $diss3b; ?>>
           <div id="uname_response"></div>
</div>



	<label>Total Transfer * </label>
 <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><?php echo $currencye; ?></div>
        </div>
      <input name="amount" id="amount" type="number" class="form-control" onKeyUp='cekQ();'; placeholder="Enter Amount" onkeypress="return numbersonly(event)" required='required' autocomplete="off">
      </div>


	
    
    <?php if($usepins == 1){ ?>
     <label>Secure PIN</label>
           <input name="pincode" class="form-control" id="pincode" placeholder="Enter Your Secure PIN" type="password" required='required' autocomplete="off" style="background:#161616; border:none; margin-bottom:10px;">
   <?php } ?>

<?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
     <label>2FA Code</label>
           <input type="text" class="form-control" placeholder="Hanya jika anda mengaktifkan 2FA" name="one_time_password">
    
   <?php } ?>
    
    
    
    
    
    
	 
	<button type="submit" name="deposit" class="btn btn-dark mt-2 form-control" onclick='return confirmtransfer()'><i class='fa fa-exchange' style="margin-right:12px;"></i>Transfer</button> 
	
	
</div>
</form>



<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  
 <SCRIPT type="text/javascript">
  
  
 $(document).ready(function(){

   $("#tujuan").keyup(function(){

     var tujuan = $(this).val().trim();

     if(tujuan != ''){
		 
$("#uname_response").html('&nbsp;<i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Checking Username...');

        $.ajax({
           url: '../dt_page/checkuser.php',
           type: 'post',
           data: {tujuan:tujuan},
           success: function(response){

              $("#uname_response").html(response);

           }
        });
     }else{
        $("#uname_response").html("");
     }

  });

}); 
  
  
//-->
</SCRIPT>  





<?php } ?>
<?php } ?>
<br />








 
<h5 class="mb-0">Transfer history </h5>
<p> Last Recent Transfer History </p> 
<hr>


<?

	$db->select("kode, uraian, username, jumlah, tujuan, tgl, status, jenis, fee, jumlahnet", "datacwalet2c", "username='$user_session'", "tgl desc");
	
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
				$st = "<b  style='color: #0F0' > Done </b>";
				$style = "<font>";
			} else {
				$st = "<b  style='color: yellow' > In Process </b>";
			
	   $style = "<font color='#F00000'>";
			}	
			$tt = $row[5];
				
?>


<div class="div-card bg-2 mb-2 "  style="min-height:unset!important;" >	
				<small>Date : <?php echo $row[5];?> </small> 
				<p class="mb-0">
					Total Transfer : <?php echo rupiah($row[3]);?> <br /> 
					User Destination : <?php echo $row[4];?> <br /> 
					<span> Status : <?php echo $st;?>   	
                        </span> 
				</p> 
			</div>


<?php } ?>
<?php } ?>




</div>
</div>