<?php ob_start(); ?>
<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
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
<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert-box errors'><span>error : </span>Keanggotaan anda tidak aktif atau sedang di blokir!</div>";
echo "<div align='center'><a href='javascript:history.go(-1)'><button class='primaback'>Back</button></a><br /></div>";
}else{
?>
<script src="../js/jquery-1.7.1.min.js"></script>
<link href="payment/css/udb.css" rel="stylesheet">
<script src="payment/js/udb-jsonp.js"></script>
 <link href="../css/invoice.css" rel="stylesheet">
 
 
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/gateway.css" rel="stylesheet" type="text/css">
		<script src="assets/js/jquery-2.1.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/gateway.js"></script>
 
 
 <style>
.table					{ margin:0 0 15px 0; padding:0px; width:100%; font-size:12px; border-collapse:collapse; box-shadow:0px 5px 0px #f4f4f4; }
.table th				{ padding:7px 5px; font-family:"Oswald", Tahoma; color:#3074bb; text-shadow:1px 1px rgba(255,255,255,0.2); text-align:center;
						  text-transform: uppercase; font-weight:500; border:1px solid #ded9e4; box-shadow:inset 0px 1px 0px #fff,inset 0px 0px 0px 1px #f3f7fb;
						  background:#eceaee; background:-moz-linear-gradient(top, #f8fafd 0%, #eff0f1 100%); background:-webkit-linear-gradient(top, #f8fafd 0%, #eff0f1 100%); }
.table td				{ padding:7px; border:1px solid #ded9e4; font-weight:; text-align:center; }
.table tr					{ background:#f8f8f9; }
.table tr:nth-of-type(even)	{ background:#f3f4f5; } 
.table tr:hover				{ background:#fff; color:#3074bb; }

@media only screen and (min-width: 0px) and (max-width: 767px) {
	.table, .table thead, .table tbody, .table th, .table td, .table tr { display: block; }
	.table thead tr 		{ position: absolute; top: -9999px; left: -9999px; } 
	.table tr				{ border: 1px solid #ddd; border-bottom:0px; margin-bottom:5px; } 
	.table td				{ border: none; border-bottom: 1px solid #ddd; position: relative; padding-left:45%; text-align:left; } 
	
	.table td:before		{ position: absolute; top:5px; left:10px; width:39%; padding-right: 10px; color:#3074bb; white-space:nowrap; }
	.table td:before		{ content: attr(data-title); }
	.table tr:hover td:before	{ color:#555; }
}

.paywl1 {
	-moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
	box-shadow:inset 0px 1px 0px 0px #f29c93;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
	background:-moz-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:-webkit-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:-o-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:-ms-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100',GradientType=0);
	background-color:#fe1a00;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #d83526;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:4px 18px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.paywl1:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00));
	background:-moz-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:-webkit-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:-o-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:-ms-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00',GradientType=0);
	background-color:#ce0100;
}
.paywl1:active {
	position:relative;
	top:1px;
}

.paywl2 {
	-moz-box-shadow:inset 0px 1px 0px 0px #caefab;
	-webkit-box-shadow:inset 0px 1px 0px 0px #caefab;
	box-shadow:inset 0px 1px 0px 0px #caefab;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77d42a), color-stop(1, #5cb811));
	background:-moz-linear-gradient(top, #77d42a 5%, #5cb811 100%);
	background:-webkit-linear-gradient(top, #77d42a 5%, #5cb811 100%);
	background:-o-linear-gradient(top, #77d42a 5%, #5cb811 100%);
	background:-ms-linear-gradient(top, #77d42a 5%, #5cb811 100%);
	background:linear-gradient(to bottom, #77d42a 5%, #5cb811 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77d42a', endColorstr='#5cb811',GradientType=0);
	background-color:#77d42a;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #268a16;
	display:inline-block;
	cursor:pointer;
	color:#306108;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:4px 18px;
	text-decoration:none;
	text-shadow:0px 1px 0px #aade7c;
}
.paywl2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cb811), color-stop(1, #77d42a));
	background:-moz-linear-gradient(top, #5cb811 5%, #77d42a 100%);
	background:-webkit-linear-gradient(top, #5cb811 5%, #77d42a 100%);
	background:-o-linear-gradient(top, #5cb811 5%, #77d42a 100%);
	background:-ms-linear-gradient(top, #5cb811 5%, #77d42a 100%);
	background:linear-gradient(to bottom, #5cb811 5%, #77d42a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cb811', endColorstr='#77d42a',GradientType=0);
	background-color:#5cb811;
}
.paywl2:active {
	position:relative;
	top:1px;
}
.nmnm {
	-moz-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	-webkit-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	box-shadow:inset 0px 1px 3px 0px #91b8b3;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
	background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
	background-color:#768d87;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #566963;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:6px 18px;
	text-decoration:none;
	text-shadow:0px -1px 0px #2b665e;
}
.nmnm:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #6c7c7c), color-stop(1, #768d87));
	background:-moz-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-webkit-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-o-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-ms-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:linear-gradient(to bottom, #6c7c7c 5%, #768d87 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c7c7c', endColorstr='#768d87',GradientType=0);
	background-color:#6c7c7c;
}
.nmnm:active {
	position:relative;
	top:1px;
}


			
  </style>
  <?php

if(isset($_GET["sc"])){ 
$sc = $_GET["sc"]; 
$ccc="sc";
$query35 = "SELECT * FROM dataewalet3 WHERE kode='$sc' and status='0'"; 
$result35 = mysql_query($query35);
$ceks1 = mysql_num_rows($result35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$jumlah = $row35['jumlah'];
$uraian = $row35['uraian'];
$tgl = $row35['tgl'];
$exp = $row35['exp'];
$plan = $row35['paket'];
$pf = $row35['profit'];
$pd = $row35['plan'];
$lm = $row35['kontrak'];
$kode = $row35['kode'];
$angkaunik = $row35['cycle'];
$status = $row35['status'];
$tgle = date('d/m/Y', strtotime($tgl));
		$email = $db->dataku("email", $username);
		$nama = $db->dataku("nama", $username);
		$alamat = $db->dataku("alamat", $username);
		$jumlahdepone = rupiah($jumlah);
		
		 $idrnya = $jumlah*$kursdepo; 	
            // $idrnya = rupiah($itungane);	
			 
			
		$btcnya	=$jumlah*$kursbtcne;
        $btcnya=sprintf("%.8f",$btcnya); 
			 
		$usdtnya	=$jumlah*$kursusdt;
        $usdtnya=sprintf("%.4f",$usdtnya); 
			 
		$ethnya	=$jumlah*$kurseth;
        $ethnya=sprintf("%.8f",$ethnya); 
		
		$idrnya	=$jumlah*$kursidr;
        $idrnya=sprintf("%.0f",$idrnya); 
		

setcookie("Amounts",$jumlah, time()+3600);
setcookie("Email",$email, time()+3600);
setcookie("Nama",$nama, time()+3600);


$csd=base64_encode($ccc);
$ptt=base64_encode($kode);

$query113 = "SELECT * FROM invoice WHERE kode='$sc'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$file = $row113['file'];
$prodd="Package ".$pd."";
  
  $ptt=base64_encode($kode);
  
}
  

  
  $saldoewalete = $db->mycwalet($user_session);
			 $pendingewalete = $db->mycwaletpending($user_session);
			 $totalewalete = $saldoewalete-$pendingewalete; 
  
  
  
   if(!$ceks1){
	  
	  echo "<script type=text/javascript>
              alert('Transaction Not Found!');
              window.close()
              </script>";		
	  
	exit;
} else {	
  
?>
<script>
		function confirmActionx2(){
      var confirmed = confirm("Your balance is not sufficient for the payment of this transaction (<?= rupiah($totalewalete); ?>)");
      return confirmed;
}
</script>
<div class="wrapper">


<table class="header"><tr><td width="50%" nowrap>

<p><img src="../images/banner/<?php echo $invlogos; ?>" title="<?php echo $bisnisname;?>" width="200px"/></p>
</td><td width="50%" align="center">

<br /><br />
<table width="200" border="0">
  <tr>
    <td align="center" ><?php  if($status == 1){ ?>
    <font style="font-size:20px; color:#060; font-weight:bold;">PAID</font><br /><?php echo formatgl($exp);?>
    <?php } else { ?>
    <font style="font-size:20px; color:#D70000; font-weight:bold;">UNPAID</font><br />Expired: <?php echo formatgl($exp);?>
    <?php } ?></td>
    </tr>
  <tr>
    <td align="center">
    <?php  if($status == 0){ ?>
	<?php  if($totalewalete >= $jumlah){ ?>
	<a href="?go=waletepay&iv=<?php echo $ptt;?>"><button type="button" class="paywl2" style="margin-top:5px;">Pay With USD Wallet</button></a>
    <?php } else { ?><button type="button" class="paywl1" onclick="return confirmActionx2()" style="margin-top:5px;">Pay With USD Wallet</button><?php } ?><?php } ?>
    </td>
  </tr>
  </table>
<p>&nbsp;</p>

</td></tr></table>



<table class="items"><tr><td width="50%">

<div class="addressbox">

<strong>Invoiced To</strong><br />
<?php echo $nama;?><br />
<?php echo $alamat;?><br />
Email: <?php echo $email;?>

</div>

</td><td width="50%">

<div class="addressbox">

<strong>Payment To</strong><br />
<?php echo $bisnisname;?><br />
<?php echo $alamat_bisnis;?><br />
Email: <?php echo $email_bisnis;?><br />
Website: www.<?php echo $domain;?>

</div>

</td></tr></table>

<div class="row">
<span class="title">Invoice No: <?= $kode; ?></span><br />
Invoice Date: <?php echo $tgle;?>
</div>

<table class="items">
    <tr class="title textcenter">
        <td width="70%">Description</td>
        <td width="30%">Amount</td>
    </tr>
    <tr>
        <td align="center"><?= $prodd; ?></td>
        <td class="textcenter"><?= $jumlahdepone; ?></td>
    </tr>
    <tr class="title">
        <td class="textright">Sub Total:</td>
        <td class="textcenter"><?= $jumlahdepone; ?></td>
    </tr>
            <tr class="title">
        <td class="textright">Credit:</td>
        <td class="textcenter"><?= rupiah(0); ?></td>
    </tr>
    <tr class="title">
        <td class="textright">Total:</td>
        <td class="textcenter"><?= $jumlahdepone; ?></td>
    </tr>
</table>
<br />

<div class="udb-box" data-id="1" data-rel="form-nourl"></div>
<?php if($rekbanke == 1){?>
<br />
<table class="items">
    <tr class="title textcenter">
        <td width="70%">Pay with IDR (Kurs 1 USD = <?php echo idr($kursdepo); ?>)</td>
        <td width="30%">Total Pay</td>
    </tr>
    <tr>
        <td align="center"><?= $prodd; ?></td>
        <td class="textcenter"><?= idr($idrnya); ?></td>
    </tr>
   
</table>
<br />
<?php $db->bannerrek2a(); ?>
<br />
<?php } ?>

<br />
<table class="items">
    <tr class="title textcenter">
        <td width="70%">Pay with USDT (Kurs 1USD = <?php echo usdt($kursusdt); ?>)</td>
        <td width="30%">Total Pay</td>
    </tr>
    <tr>
        <td align="center"><?= $prodd; ?></td>
        <td class="textcenter"><?= usdt($usdtnya); ?></td>
    </tr>
    <tr>
        <td colspan="2" align="center" style="padding:10px;">Pay To USDT Wallet Address Below : <br /><font style="font-weight:bold; color:#B00000; font-size:16px; line-height:180%;"><?php echo $db->config("usdtaddress"); ?></font></td>
    </tr>
   
</table>
<br />

<br />
<table class="items">
    <tr class="title textcenter">
        <td width="70%">Pay with ETH (Kurs 1USD = <?php echo eth($kurseth); ?>)</td>
        <td width="30%">Total Pay</td>
    </tr>
    <tr>
        <td align="center"><?= $prodd; ?></td>
        <td class="textcenter"><?= eth($ethnya); ?></td>
    </tr>
    <tr>
        <td colspan="2" align="center" style="padding:10px;">Pay To ETH Wallet Address Below : <br /><font style="font-weight:bold; color:#B00000; font-size:16px; line-height:180%;"><?php echo $db->config("ethaddress"); ?></font></td>
    </tr>
   
</table>
<br />

<?php if($btcnepay == 1){ ?>
<?php if($blockio == 1){ ?>
<br />
<table class="items">
    <tr class="title textcenter">
        <td width="70%">Pay with BTC (Kurs 1 USD = <?php echo btc($kursbtcne); ?>)</td>
        <td width="30%">Total Pay</td>
    </tr>
    <tr>
        <td align="center"><?= $prodd; ?></td>
        <td class="textcenter"><?= btc($btcnya); ?></td>
    </tr>
   
</table>
<br />
<div class="row">
<span class="subtitle"></span>
</div>
<div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				<?php
				$box = new BtcGateway();
				echo $box->create_payment_box($btcnya);
				?>
				</div>
			</div>
		</div>

<?php } ?>
	


<?php if($gourle == 1){ ?>
<br />
<div align="center">
<a href="paydepo.php?sc=<?php echo $kode; ?>"><img src="../images/btcpay.png" title="Pay Now" alt="Pay With BTC" width="350"/></a>
</div>

<?php } ?>
<?php } ?>
</div>



<?
}
}
?>
<?php ob_flush(); ?>