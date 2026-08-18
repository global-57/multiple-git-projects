<?php
error_reporting(0);
session_start();
require("config.php");
require("classes/block_io.php");
require("classes/gateway.php");
require("classes/configdb.php");

$apiKey = $gateway['bitcoin_api_key'];
$pin = $gateway['secret'];
$version = 2; // the API version
$block_io = new BlockIo($apiKey, $pin, $version);
$received = $block_io->get_transactions(array('type' => 'received', 'addresses' => $gateway['bitcoin_address']));
$payment_status="0";
	if($received->status == "success") {	
			$data = $received->data->txs;
			$dt = StdClass2array($data);
			foreach($dt as $k=>$v) {
				$txid = $v['txid'];
				$time = $v['time'];
				$amounts = $v['amounts_received'];
				$amounts = StdClass2array($amounts);
				foreach($amounts as $a => $b) {
					$recipient = $b['recipient'];
					$amount = $b['amount'];
				} 
				$senders = $v['senders'];
				$senders = StdClass2array($senders);
				foreach($senders as $c => $d) {
					$sender = $d;
				}
				$confirmations = $v['confirmations'];
				if($time+600 > time()) {
					if($gateway['bitcoin_confirmations'] > $confirmations) {
						if($amount == $_SESSION['btc_amount']) {
							$payment_status = "completed";
						}
					}
				}
	}
}



$sc = $_SESSION['kodeinvest']; 
$sql2 = "SELECT kode, username, jumlah, uraian, tgl, status, paket, plan, profit, cycle, kontrak, siklus, status, cashback, getamount FROM dataewalet3 WHERE kode='$sc'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    while($rows = $result2->fetch_assoc()) {
 
 $kode = $rows['kode'];
		$username = $rows['username'];
		$jumlah = $rows['jumlah'];
		$uraian = $rows['uraian'];
		$plan = $rows['paket'];
		$profite = $rows['profit'];
		$cyclee = $rows['cycle'];
		$planpaket = $rows['plan'];
		$kontrake = $rows['kontrak'];
		$siklus = $rows['siklus'];
		$tgle = $rows['tgl'];
        $status = $rows['status'];
		$cashback = $rows['cashback'];
		$getamount = $rows['getamount'];


$contractday=$kontrake." ".$siklus;
$expired = date('Y-m-d H:i:s', strtotime("+".$kontrake." ".$siklus.""));

$prodd="Add Investment ".$planpaket;
}
}
$sql3 = "SELECT nama, email, hp, accid, sponsor FROM member WHERE username='$username'";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
    while($row3 = $result3->fetch_assoc()) {
   $nama = $row3['nama'];
   $email = $row3['email'];
   $hp = $row3['hp'];
   $alamat = $row3['alamat'];
   $accid = $row3['accid'];
   $sponsore = $row3['sponsor'];
}
  }
		
if($payment_status == "completed") {
	// RUN YOUR CODE HERE TO PROCESS ORDER OR CHANGE STATUS
	
$clientdate = (date ("Y-m-d H:i:s"));
		$updatedataewalet2 = "UPDATE dataewalet3 SET status='1', tgl='$clientdate', exp='$clientdate' WHERE kode='$kode'";
        $conn->query($updatedataewalet2);
		
		$updatereinv = "UPDATE reinv SET status='1' WHERE username='$username'";
        $conn->query($updatereinv);
		
		$updatemember = "UPDATE member SET harga='$plan', stage='$planpaket', sto='1', act='1' WHERE username='$username'";
        $conn->query($updatemember);
		
		$updatekomisi = "UPDATE komisi SET gett='0' WHERE username='$username' and gett='1' and jenis<>'komshare'";
        $conn->query($updatekomisi);	
	
	    $sqlxc = "SELECT * FROM deposit WHERE kode='$kode' and username='$username'";
        $resultxc = $conn->query($sqlxc);
        if ($resultxc->num_rows == 0) {
		$insertdatawalet = "INSERT INTO deposit (username, kode, jml, status, tgldepo, tglend, plan, planame, profit, kontrak, dy, sc, getamount, cashback)
         VALUES ('$username', '$kode', '$jumlah', '1', '$clientdate', '$expired', '$plan', '$planpaket', '$profite', '$kontrake', '$harine2', '$siklus', '$getamount', '$cashback')";
         $conn->query($insertdatawalet);
	
	$sqlkomspon = "SELECT komisi_sponsor, wdtostore FROM configuration WHERE id='1'";
$resultkmspon = $conn->query($sqlkomspon);
if ($resultkmspon->num_rows > 0) {
    while($rowkmspn = $resultkmspon->fetch_assoc()) {
   $komisispone = $rowkmspn['komisi_sponsor'];
   $wdtostore = $rowkmspn['wdtostore'];
	}}	
	
	//$kmspons = explode("|", $komisispone);	
			$komsponx = ($komisispone/100)*$bayarbtc;
			
			$komspontostore = ($wdtostore/100)*$komsponx;	
			$komspontokom = $komsponx=$komspontostore;	
			
            $komspontostore=sprintf("%.8f",$komspontostore);
            $komspontokom=sprintf("%.8f",$komspontokom);
	
	  	  if($sponsore && $komsponx > 0) {  
		 $sqlxcekom1 = "SELECT * FROM komisi WHERE kode='".$kode."sp' and username='$sponsore'";
        $resultxcekom1 = $conn->query($sqlxcekom1);
        if ($resultxcekom1->num_rows == 0) {
		 $insertkomisi1 = "INSERT INTO komisi (username, bayar, tglbayar, status, total, jenis, dari, kode, gett)
         VALUES ('$sponsore', '$komspontokom', '$clientdate', '0', '', 'komsponsor', '$username', '".$kode."sp', '')";
         $conn->query($insertkomisi1);
		
		$insertkomisi1wl = "INSERT INTO dataswalet (kode, username, jumlah, uraian, tujuan, tgl, status, tglproses)
         VALUES ('".$kode."sp', 'administrator', '$komspontostore', '".$wdtostore."% from Reff Bonus ".$username."', '$sponsore', '$clientdate', '1', '$clientdate')";
         $conn->query($insertkomisi1wl);	
		
		
		 }}
		 
require '../dt_page/mail/PHPMailerAutoload.php';
		 
	$isimail_e="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$nama." (".$username."),</p>
<p>Your Investment package has been active.</p>
<p><strong>No: ".$kode."</strong><br>
Package: ".$planpaket."<br>
Amount: ".rupiah($jumlah)."<br>
Proccess Date : ".$clientdate."<br>
Active Date : ".$contractday."<br>
</p>

<p><br><br><br>

Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Your Investment Package has been active';
        $mail3->msgHTML($isimail);
	   // $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	
		}
	
	echo '<span class="text text-success"><i class="fa fa-check"></i> Payment was received! Your mining ('.$kode.') was processed.</span>';
} else {
	echo '<span class="text text-info"><i class="fa fa-spin fa-spinner"></i> Awaiting payment mining '.$kode.'...';
	
}
?>