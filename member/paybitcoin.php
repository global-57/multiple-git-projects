<?php
ob_start(); 
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src='paybox/js/cryptobox.min.js' type='text/javascript'></script>
<style type="text/css">

body {
background-color: transparent;
color: #eee;
}

</style>
</head>
<body style='font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#999;margin:0'>
<style>
.alert				{ margin:3px; padding:5px 10px 5px 35px; display:block; line-height:20px; font-family:Tahoma; background:#f5f5f5;
					  border:1px solid; text-shadow:none; box-shadow:0 0 0 1px rgba(255,255,255,0.1); -webkit-transition: all 100ms linear; 
					  -moz-transition: all 100ms linear; -o-transition: all 100ms linear; -ms-transition: all 100ms linear; 
					  transition: all 100ms linear; font-weight:normal; }
	.successx		{ color:#00632e; border-color:#339933; background:#d1e8d2 url(../img/frontend/tick_circle.png) no-repeat 10px 7px; }
	.errorx			{ color:#820101; border-color:#dc1c1c; background:#facfcf url(../img/frontend/cross_circle.png) no-repeat 10px 7px; }
	.warningx		{ color:#675100; border-color:#d4b64b; background:#fdefbd url(../img/frontend/exclamation.png) no-repeat 10px 7px; }
	.infox			{ color:#00357b; border-color:#9dbfea; background:#d8e7fa url(../img/frontend/information.png) no-repeat 10px 7px; }
	.notex			{ color:#4d4d4d; border-color:#bdbdbd; background:#f4f4f4 url(../img/frontend/notebook.png) no-repeat 10px 7px; }
.alert:hover		{ opacity:0.8; }
.notificationx		{ cursor:pointer; }
</style>
<?php
if(!isset($_GET["sc"]) || !$_GET["sc"]){ 
echo "<div class='alert errorx notificationx' align='left'>Transaction Not Found</div>";		
exit;
}else{
$sc = $_GET["sc"]; 
$ccc="sc";
$sd = $_GET["sd"]; 



	
	
	
	
	

	require_once( "paybox/lib/cryptobox.class.php" );
	
if(!$privatekeys || !$publickeys){ 
echo "<div class='alert errorx notificationx' align='left'>Error Payment System</div>";		
exit;
}else{	 
	

$sql2 = "SELECT kode, username, jumlah, tgl, status FROM datacwalet2 WHERE kode='$sc'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    while($rows = $result2->fetch_assoc()) {
 
 $kode = $rows['kode'];
		$username = $rows['username'];
		$jumlah = $rows['jumlah'];
		$tgle = $rows['tgl'];
        $status = $rows['status'];

$prodd="Add USD Balance ".rupiah($jumlah);
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
     
   if(!$result2){
echo "<div class='alert errorx notificationx' align='left'>Data Transaction Not Found</div>";	
	exit;
} else {	
  
  
?>

<?php
/**
 * @category    Example11 - Pay-Per-Membership (single crypto currency in payment box)
 * @package     GoUrl Cryptocurrency Payment API 
 * copyright 	(c) 2014-2018 Delta Consultants
 * @crypto      Supported Cryptocoins -	Bitcoin, BitcoinCash, Litecoin, Dash, Dogecoin, Speedcoin, Reddcoin, Potcoin, Feathercoin, Vertcoin, Peercoin, MonetaryUnit, UniversalCurrency
 * @website     https://gourl.io/bitcoin-payment-gateway-api.html#p6
 * @live_demo   https://gourl.io/lib/examples/pay-per-membership.php
 */ 

	/********************** NOTE - 2018 YEAR *******************************************************************************/ 
	/*****                                                                                                             *****/ 
	/*****     This is iFrame Bitcoin Payment Box Example (2014 - 2017)                                                *****/ 
	/*****                                                                                                             *****/ 
	/*****     Available - new 2018 version; mobile friendly JSON payment box (own logo, white label product)          *****/
	/*****     New Demo with generation php payment box code - https://gourl.io/lib/examples/example_customize_box.php *****/
	/*****         White Theme - https://gourl.io/lib/examples/example_customize_box.php?theme=black                   *****/
	/*****         Black Theme - https://gourl.io/lib/examples/example_customize_box.php?theme=default     		   *****/
	/*****         Your Own Logo - https://gourl.io/lib/examples/example_customize_box.php?theme=default&logo=custom   *****/
	/*****                                                                                                             *****/ 
	/***********************************************************************************************************************/


	
	

	
	/**** CONFIGURATION VARIABLES ****/ 
	
	$userID 		= $username."_".$kode;							// place your registered userID or md5(userID) here (user1, user7, ko43DC, etc).
													// your user should have already registered on your website before   
	$userFormat		= "COOKIE";						// this variable ignored when you use $userID 
	$orderID 		= "INVESTMENT";			// premium membership order
	$amountUSD		= $jumlah;							// price per membership - 79 USD
	$period			= "NOEXPIRY";					// one month membership; after need to pay again
	$def_language	= "en";				// default Payment Box Language
	$public_key		= $publickeys; // from gourl.io
	$private_key	= $privatekeys;// from gourl.io

	// IMPORTANT: Please read description of options here - https://gourl.io/api-php.html#options  
	
	/********************************/


	
	
	
	/** PAYMENT BOX **/
	$options = array(
			"public_key"  => $public_key, 	// your public key from gourl.io
			"private_key" => $private_key, 	// your private key from gourl.io
			"webdev_key"  => "", 		// optional, gourl affiliate key
			"orderID"     => $orderID, 		// order id
			"userID"      => $userID, 		// unique identifier for every user
			"userFormat"  => $userFormat, 	// save userID in COOKIE, IPADDRESS or SESSION
			"amount"   	  => 0,				// price in coins OR in USD below
			"amountUSD"   => $amountUSD,	// we use price in USD
			"period"      => $period, 		// payment valid period
			"language"	  => $def_language  // text on EN - english, FR - french, etc
	);

	// Initialise Payment Class
	$box = new Cryptobox ($options);
	
	// coin name
	$coinName = $box->coin_name(); 
	
	
	// Successful Cryptocoin Payment received
	// Please use also IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") for update db records, etc
	if ($box->is_paid())
	{
		// one time action
		

		$clientdate = (date ("Y-m-d H:i:s"));
		$updatedataewalet2 = "UPDATE datacwalet2 SET status='1', tglproses='$clientdate' WHERE kode='$kode'";
        $conn->query($updatedataewalet2);
		
		$insertdatawalet = "INSERT INTO datacwalet (kode, username, jumlah, uraian, tujuan, tgl, status, tglproses, accid, accid2)
         VALUES ('$kode', 'administrator', '$jumlah', '', '$username', '$clientdate', '1', '$clientdate', '', '')";
         $conn->query($insertdatawalet);
		
		 
require '../dt_page/mail/PHPMailerAutoload.php';
		 
	$isimail_e="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama." (".$username."),</p>
<p>Your Add USD Balance has been paid</p>
<p><strong>No: ".$kode."</strong><br>
Amount: ".rupiah($jumlah)."<br>
Date : ".$clientdate."<br>
</p>

<p><br><br><br>

Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Add USD Balance has been paid';
        $mail3->msgHTML($isimail);
	   // $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	
	
		
		
		
		if (!$box->is_processed())
		{
			// One time action after payment has been made
		
		$clientdate = (date ("Y-m-d H:i:s"));
		$updatedataewalet2 = "UPDATE datacwalet2 SET status='1', tglproses='$clientdate' WHERE kode='$kode'";
        $conn->query($updatedataewalet2);
		
		$insertdatawalet = "INSERT INTO datacwalet (kode, username, jumlah, uraian, tujuan, tgl, status, tglproses, accid, accid2)
         VALUES ('$kode', 'administrator', '$jumlah', '', '$username', '$clientdate', '1', '$clientdate', '', '')";
         $conn->query($insertdatawalet);
		
		 
require '../dt_page/mail/PHPMailerAutoload.php';
		 
	$isimail_e="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama." (".$username."),</p>
<p>Your Add USD Balance has been paid</p>
<p><strong>No: ".$kode."</strong><br>
Amount: ".btc($jumlah)."<br>
Date : ".$clientdate."<br>
</p>

<p><br><br><br>

Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Add USD Balance has been paid';
        $mail3->msgHTML($isimail);
	   // $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	
					

		 
			
			$message = "<div class='alert'>Thank you (".$orderID.", ".$kode."). We have added the value of your deposit</div>";
	
			// Set Payment Status to Processed
			$box->set_status_processed();
		}
		else $message = "<div class='alert successx notificationx' align='left'>You have successfully added a deposit</div>";
	}
	
	
	// Optional - Language selection list for payment box (html code)
	$languages_list = display_language_box($def_language);





	// ...
	// Also you need to use IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") 
	// for send confirmation email, update database, update user membership, etc.
	// You need to modify file - cryptobox.newpayment.php, read more - https://gourl.io/api-php.html#ipn
	// ...
	
?>
<?php if ($box->is_paid()): ?>

	<!-- User already paid premium membership -->
	<!-- You can use this function - $box->is_paid() on all other your premium webpages, it will return true during all user paid period (1 month) --> 
	<!-- Your Premium Pages Code Here -->

	<br>
	<?php echo $message; ?>
	<br>
	
	
<?php else: ?>

	 <!-- Awaiting Payment -->
	
	
<?php endif; ?> 	

	<div style='font-size:12px;margin:10px 0 5px 300px'>Language: &#160; <?php echo $languages_list; ?></div>
	<?php echo $box->display_cryptobox(true, 540, 230, "padding:3px 6px;margin:10px;border:10px solid #f7f5f2;"); ?>


<?php }} ?>
<?php } ?>
</body>
</html>
<?php ob_flush(); ?>