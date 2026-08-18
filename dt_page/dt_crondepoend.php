<?php
date_default_timezone_set('Asia/Jakarta');
include("common.php");
include("classMySQL.php");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
include("function.php");
require_once('class.phpmailer.php');
include("class.smtp.php");
mysql_connect($server_name, $userdb, $passdb) or die ("Could not connect to database");
mysql_select_db($databasename);
$today = date("Y-m-d H:i:s");
$queryvvv = "SELECT * FROM deposit WHERE status='1'"; 
$resultvvv = mysql_query($queryvvv) or die(mysql_error());
while($rowvvv = mysql_fetch_array($resultvvv)){
 $usernameku = $rowvvv['username'];
  $kode = $rowvvv['kode'];
  $ends = $rowvvv['kontrak'];
  $planame = $rowvvv['planame'];
  $jumlah = rupiah($rowvvv['jml']);
  $jumlahs = $rowvvv['jml'];
  $status = $rowvvv['status'];
  $tgldepow = $rowvvv['tgldepo'];
  $maxbonusw = $rowvvv['maxbonus'];
  $tgldepo = formatglxy($rowvvv['tgldepo']);
  $jame = date("H:i:s",strtotime($rowvvv['tgldepo']));
  $nama = $db->dataku("nama", $usernameku);
  $email = $db->dataku("email", $usernameku);
  $hp = $db->dataku("hp", $usernameku);
  $clientdate = (date ("Y-m-d H:i:s"));
$tgl = formatglxy($clientdate);


 $qrycc = mysql_query("SELECT * from komisi where username='$usernameku' and jenis='komshare' and kode='$kode' ORDER BY username");
$rrrcc=mysql_num_rows($qrycc);

if($ends > 0 && $rrrcc == $ends){
$db->update("deposit", "status='0'", "kode='$kode'");
if($balikmodal == 1)
$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernameku' and jenis='komshare' and total='capital' and kode='$kode'");
$numo = mysql_num_rows($sqlo);
if(!$numo) {
mysql_query("insert into komisi values('','$usernameku', '$jumlahs', '$clientdate', 0, 'capital', 'komshare', 'Return Of Investment ".$kode."', '".$kode."bm', '', '')") or die(mysql_error());
$db->insert("datacwalet", "", "'', '".$kode."bm', 'administrator', '$jumlahs', 'Return Of Investment Capital ".$kode."', '$usernameku', '$clientdate', '1', '$clientdate', '', ''");
}}

$isimailexp="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama." (".$usernameku."),</p>
<p>Your investment packages today has completed,</p>
<p><strong>No: ".$kode."<br>
Package: ".$planame."<br>
Amount: ".$jumlah."<br>
Date of Deposit: ".$tgldepo."<br>
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3a = new PHPMailer;
        $mail3a->setFrom($emailadmin, $bisnisname);
        $mail3a->addAddress($email, $nama);
	    $mail3a->IsHTML(true);       
        $mail3a->Subject = ''.$nama.', investment completed';
        $mail3a->msgHTML($isimailexp);
     //   $mail3a->send();

if($hp){
$isipesan = "Hello ".$nama.", Your investment packages (Package: ".$planame." ".$jumlah.") today has completed.";
	//mysql_query("insert into outbox values('', '', '$username', '$hp', '$isipesan', '$clientdate', '1')");
	if($smsgtw == 1 && $jsms == 1){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsreguler();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
	//	$sms->smssend();
	}else if($smsgtw == 1 && $jsms == 2){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsmasking();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
	//	$sms->smssend();
	}else if($smsgtw == 2){
	//sendsms($hp, $isipesan) ;
	}else{}
//sendwa($hp, $isipesan, $apikeywoowa);	
}	
}
?>
<?php
mysql_close();
?>
