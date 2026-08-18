<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Invoice</li>
      </ol>
    </section>


    <section class="invoice printableArea">
 
<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>".$LANG["status0"]."</div>";
}else{
?>
<?php
if(!isset($_GET["sc"])){ 
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>Data Transaksi (Invoice) Tidak ditemukan!</div>";
}else{
if(isset($_GET["sc"])); $sc = $_GET["sc"];
?>
<?php
$results = $_GET['result'];
if($results == "successpay") { 
echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>Invoice ".$_GET['co']." have been successfully paid using your wallet balance. Thank you for making a payment.</div>";
}
?>
<?
$query35 = "SELECT * FROM ticket_order WHERE coed='$sc'"; 
$result35 = mysql_query($query35);
$ceks1 = mysql_num_rows($result35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$ticket = $row35['amount'];
$tgl = $row35['tgl'];
$exp = $row35['tglproses'];
$kode = $row35['coed'];
$status = $row35['status'];
$payments = $row35['pay'];
$angkaunik = $row35['angkaunik'];
$harga = $row35['harga'];
$bayar = $row35['bayar'];
$tgle = date('d/m/Y', strtotime($tgl));
		$email = $db->dataku("email", $username);
		$nama = $db->dataku("nama", $username);
		$alamat = $db->dataku("alamat", $username);
		$hp = $db->dataku("hp", $username);
		
	$jumlah=$bayar;	
	$bayaridrnya=$jumlah;
		
		$jumlahdepone = rupiah($jumlah);	
		$bayare = $jumlah;	
		
		$bayarpointnya=$jumlah/$kursidr_wd;
$bayarpointnya=sprintf("%.2f",$bayarpointnya);
		
$prodd="Buy PIN Activation";
		
		
?>


    <!-- Main content -->
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            INVOICE <span class="text-danger"><small class="font-weight-600">  <?php if($status == 1){?><span class="text-success"> (PAID)</span><?php } else { ?><span class="text-danger"> (UNPAID)</span><?php } ?></small></span>
            <small class="pull-right">Date: <?php echo $tgle;?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row align-items-center invoice-info">
        <div class="col-md-3 invoice-col">
          From
          <address>
            <strong class="text-info"><?php echo $namaeadmin;?></strong><br>
            <?php echo $alamatadmin;?><br>
            Phone: <?php echo $hpadmin;?><br>
            Email: <?php echo $emailadmin;?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-md-3 invoice-col">
          To
          <address>
            <strong class="text-primary"><?php echo $nama;?> (<?php echo $user_session;?>)</strong><br>
            <?php echo $alamat;?><br>
            Phone: <?php echo $hp;?><br>
            Email: <?php echo $email;?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col invoice-col">
			<div class="invoice-details row no-margin bg-dark">
			  <div class="col-md-6 col-lg-4"><b>Invoice </b>#<?php echo $kode;?></div>
			  <div class="col-md-6 col-lg-4"><b>Order Date:</b> <?php echo $tgle;?></div>
			  <div class="col-md-6 col-lg-4"><b>Account:</b> <?php echo $user_session;?></div>
			</div>
		</div>
      <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-bordered">
            <thead>
            <tr class="bg-pale-dark">
              <th>#</th>
              <th>Description</th>
              <th class="text-right">Quantity</th>
              <th class="text-right">Unit Cost</th>
              <th class="text-right">Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td><?= $prodd; ?></td>
              <td class="text-right"><?= $ticket; ?></td>
              <td class="text-right"><?= rupiah($harga); ?></td>
              <td class="text-right"><?= $jumlahdepone; ?></td>
            </tr>
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



<?php if($status == 0){?>

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-12 col-sm-6">
			<p class="lead">&nbsp;</p>
			<p class="lead"><b>Payment Methods:</b>
			
			</p>
            
            
                         
            
            
         <?php if($rekbanke == 1){?>
                            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Transfer Bank</h3>
            </div>
            <div class="box-body">     
            
           
                    
                  
                        
                        <?php $db->bannerrek2a(); ?>
                      
                        
                     </div></div>                    
                     <?php } ?>   
            
            
  <?php if($btcnepay == 1 || $ltcpay == 1 || $bchpay == 1 || $dogepay == 1 || $dashpay == 1 || $ethpay == 1 || $usdtpay == 1 || $ovopay == 1 || $danapay == 1 || $gopay == 1){ ?>
            
             <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Other Payment</h3>
            </div>
            <div class="box-body">     
            
           <table class='table' style='width:100%;'>
<?php if($btcnepay == 1){ ?>
<tr>
<td><img src='../themes/btc.png' width='130' title='Pay BTC'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#bitcoinpay' data-original-title='Payment Bitcoin'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($ltcpay == 1){ ?>
<tr>
<td><img src='../themes/ltc.png' width='130' title='Pay Litecoin'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#ltcpay' data-original-title='Payment Litecoin'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($bchpay == 1){ ?>
<tr>
<td><img src='../themes/bch.png' width='130' title='Pay Bitcoincash'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#bchpay' data-original-title='Payment Bitcoincash'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($dogepay == 1){ ?>
<tr>
<td><img src='../themes/doge.png' width='130' title='Pay Doge'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#dogepay' data-original-title='Payment DOGE'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($dashpay == 1){ ?>
<tr>
<td><img src='../themes/dash.png' width='130' title='Pay Dash'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#dashpay' data-original-title='Payment Dash'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($ethpay == 1){ ?>
<tr>
<td><img src='../themes/eth.png' width='130' title='Pay Ethereum'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#ethpay' data-original-title='Payment Ethereum'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($usdtpay == 1){ ?>
<tr>
<td><img src='../themes/usdt.png' width='130' title='Pay USDT'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#usdtpay' data-original-title='Payment USDT'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($ovopay == 1){ ?>
<tr>
<td><img src='../themes/ovo.png' width='130' title='Pay OVO'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#ovopay' data-original-title='Payment OVO'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($danapay == 1){ ?>
<tr>
<td><img src='../themes/dana.png' width='130' title='Pay DANA'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#danapay' data-original-title='Payment DANA'>Pay Now</button></td>
</tr>
<?php } ?>
<?php if($gopay == 1){ ?>
<tr>
<td><img src='../themes/gopay.png' width='130' title='Pay GOPAY'/></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#gopay' data-original-title='Payment GOPAY'>Pay Now</button></td>
</tr>
<?php } ?>
</table>
                      
                        
                        
                                  
                        
    <div class="modal fade" id="bitcoinpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:550px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="paybitcoin.php?sc=<?php echo $kode; ?>&p=tiket" style="width:600px;height:550px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>
                                        
     
                                        
           <div class="modal fade" id="dogepay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:550px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="paydoge.php?sc=<?php echo $kode; ?>&p=tiket" style="width:600px;height:550px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>                                      
                                        
                  <div class="modal fade" id="ltcpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:550px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="payltc.php?sc=<?php echo $kode; ?>&p=tiket" style="width:600px;height:550px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>       
                                        
               <div class="modal fade" id="bchpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:500px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="paybch.php?sc=<?php echo $kode; ?>&p=tiket" style="width:600px;height:550px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>                               
                                        
                    
            <div class="modal fade" id="dashpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:500px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="paydash.php?sc=<?php echo $kode; ?>&p=tiket" style="width:600px;height:550px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>        
              
              
              
                <div class="modal fade" id="ethpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:370px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="payeth.php?sc=<?php echo $kode; ?>&p=tiket" style="width:600px;height:370px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>          
                                        
                                        
                   <div class="modal fade" id="usdtpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:370px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="payusdt.php?sc=<?php echo $kode; ?>&p=tiket" style="width:600px;height:370px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>                              
                                            
                                        
                 <div class="modal fade" id="ovopay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:330px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="payovo.php?sc=<?php echo $kode; ?>&p=tiket" style="width:500px;height:330px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>          
                                        
                  <div class="modal fade" id="danapay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:330px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="paydana.php?sc=<?php echo $kode; ?>&p=tiket" style="width:500px;height:330px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>          
                                                              
                      <div class="modal fade" id="gopay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Payment <?php echo $kode; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
										</div>
										<div class="modal-body" style="height:330px; overflow:auto;overflow-y: hidden;" align="center">
                                       
										<iframe src="paygopay.php?sc=<?php echo $kode; ?>&p=tiket" style="width:500px;height:330px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>                                            
                        
                     </div></div>                           
            
                            
                     <?php } ?>   
            
            
            
            
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
           Please make confirm manualy if you already payment and system not automaticaly confirm your payment.<br />
            <a href="index.php?go=confirmpayment&sc=<?php echo $kode; ?>&jn=2&jm=<?php echo $bayare;?>"><button id="print" type="button" class="btn btn-warning" style="margin-top:10px;"> <span><i class="fa fa-envelope"></i>&nbsp;&nbsp;Confirmation</span></button></a>
          </p>
        </div>
        
        
        
       
        
        
        
        
        
        
        
        
        
        
        <!-- /.col -->
        <div class="col-12 col-sm-6 text-right">
			
         	<div>
         		<p>Sub - Total amount  :  <?= $jumlahdepone; ?></p>
         		
         	</div>
         	<div class="total-payment">
         		<h3><b>Total :</b> <?= $jumlahdepone; ?></h3>
         	</div>
         
         
         
         
           
			
            
            
                          
                            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Wallet Point Balance</h3>
            </div>
            <div class="box-body">   
            
            
             <div class="controls-row" style="margin-top:10px;">
        <div class='alert alert-info alert-dismissable'><i class="fa fa-info-circle"></i>&nbsp;<strong>Notice:</strong><br>Pay with your Wallet Point Balance<br />Total <?php echo point($bayarpointnya); ?> (Rate <?php echo idr($kursidr_wd); ?> /Point)</div></div>
            
            
            
            
            
            
        	<?php
if (isset($_GET['payment']) && $_GET['payment'] == 1) {

$usernameku = anti_injection($_POST['user']);	
$kodeku = anti_injection($_POST['kode']);	
$amountku = anti_injection($_POST['amount']);	
$kodetagihan = anti_injection($_POST['kodetagihan']);
$toticket = anti_injection($_POST['toticket']);

$querycekdata = "SELECT * FROM ticket_order WHERE coed='$kodetagihan' and username='$usernameku'"; 
$rescekdata = mysql_query($querycekdata);
$numecekdata = mysql_num_rows($rescekdata);
if(!$numecekdata){
	header("location: index.php?go=payment_ticket&sc=".$sc."&result=no_transaction");
	exit;
} else {			

$authgoogles=$db->dataku("authgoogle", $usernameku);
$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: index.php?go=payment_ticket&sc=".$sc."&result=wrong_auth");
exit;
} else {

$pincods = md5($_POST['pincode']);	
$sqlc = mysql_query("SELECT * FROM pincode WHERE username='$usernameku'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){
$tgl = formatgl($rowc['tgl']);
$pin = $rowc['pin'];
$sts = $rowc['status'];
$lock = $rowc['locks'];
	}
	if($usepins == 1 && !$numc) {
	header("location: index.php?go=payment_ticket&sc=".$sc."&result=no_pin");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=payment_ticket&sc=".$sc."&result=wrong_pin");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=payment_ticket&sc=".$sc."&result=pin_lock");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=payment_ticket&sc=".$sc."&result=pin_off");
	exit;
} else {	


$saldotobayar = $db->mycwalet($usernameku);
$pendingtobayar = $db->mycwaletpending($usernameku);
$saldokutobayar = $saldotobayar-$pendingtobayar;

if($saldokutobayar < $amountku){
header("location: index.php?go=payment_ticket&sc=".$sc."&result=insufficient");
exit;
} else {

$cekadane = mysql_query("select kode from datacwalet where kode='$kodeku' and username='$usernameku'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
$db->insert("datacwalet", "", "'', '$kodeku', '$usernameku', '$amountku', 'Payment Buy PIN Activation $kodetagihan', 'administrator', '$clientdate', 1, '$clientdate'"); }	
}
$db->update("ticket_order", "status='1', tglproses ='$clientdate', pay='1'", "coed='$kodetagihan'");	


	for($i=0;$i<$toticket;$i++) {
					$serial = substr(str_shuffle(str_repeat("27850134690123456789ACDEFGHKL981771683026080MNBPRSTUX0123456789ACDEFGHYZ501346900123456789981771683026080MNBPR", 24)), 0, 12);	
					$x = $serial;
				$db->insert("ticket", "", "'', '$usernameku', '$x', '1', '$clientdate', 'Order $kodetagihan', '$hargaticket','','','$kodetagihan','',''");
		}	



$emailku = $db->dataku("email", $usernameku);
$namaku = $db->dataku("nama", $usernameku);
$hpku = $db->dataku("hp", $usernameku);	
		
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$namaku." (".$usernameku."),</p>
<p>Order PIN Activation has been paid using your wallet starter balance.</p>
<p><strong>No: ".$kodetagihan."<br>
Amount PIN: ".$toticket." Ticket<br>
Pay: ".rupiah($amountku)."<br>
Date: ".$clientdate."<br>
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
        $mail3->addAddress($emailku, $namaku);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$namaku.', Order PIN Activation '.$kodetagihan.' has been paid';
        $mail3->msgHTML($isimail);
	  //  $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	


if($hpku){
$isipesan = "Hello ".$namaku.", Order PIN Activation No ".$kodetagihan." has been paid using your wallet starter balance.";
	//mysql_query("insert into outbox values('', '', '$usere', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
	if($smsgtw == 1 && $jsms == 1){
	$hpne = preg_replace('/\D+/', '', $hpku);
	$sms = new smsreguler();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 1 && $jsms == 2){
	$hpne = preg_replace('/\D+/', '', $hpku);
	$sms = new smsmasking();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 2){
	sendsms($hpku, $isipesan) ;
	}else{}
sendwa($hpku, $isipesan, $apikeywoowa);	
}

header("location: index.php?go=payment_ticket&sc=".$sc."&result=successpay&co=$kodetagihan");
exit;



}
}
}
}
}
}
} else {
?>
	  
		  
		  
  <?php
$results = $_GET['result'];
if($results == "insufficient") { 
echo "<div class='alert alert-danger'>Your Wallet balance is insufficient to pay this transaction!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "no_transaction") { 
echo "<div class='alert alert-danger'>Transaction data not found!</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="no_pin"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_NO_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_pin"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_WRONG_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_lock"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_BLOCK_PIN."</div>";
}
?>  

 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_off"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_OFF_PIN."</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_auth") { 
echo "<div class='alert alert-danger'>You're enable two factor authentication at your account, Please enter your google authenticator six-digit code!</div>";
}
?>    
 <?php
$results = $_GET['result'];
if($results == "wrong_authx") { 
echo "<div class='alert alert-danger'>Wrong google authenticator six-digit code!</div>";
}
?>      
      <?php    
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);
?> 		  
		  
			  
		  <script>
  function confirmActionne(){
   swal('Oops...', 'Your Point Wallet Balance is not enough to pay this invoice!', 'error').done();
 
}
</script> 
        
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
function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
		function confirmtpayment(){
      var session_valuexx=document.getElementById('kodetagihan').value;
      var session_valuex=document.getElementById('amount').value;
	 
      var confirmed = confirm("You will make an invoice payment "+session_valuexx+"\ Amount: " + " " + ""+session_valuex+" Using Your Wallet Balance.\n" + "If you select OK this transaction cannot be canceled.");
      return confirmed;
}
</script> 

         
 <form id="tab2" name="wallet_depo" method="post" action="index.php?go=payment_ticket&sc=<?php echo $sc;?>&payment=1">
<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>" readonly="readonly"/>
<input type="hidden" id="user" name="user" value="<?php echo $username; ?>" readonly="readonly"/>
<input type="hidden" id="kodetagihan" name="kodetagihan" value="<?php echo $kode; ?>" readonly="readonly"/>
<input type="hidden" id="toticket" name="toticket" value="<?php echo $ticket; ?>" readonly="readonly"/>
<input type="hidden" id="amount" name="amount" value="<?php echo $bayarpointnya; ?>" readonly="readonly"/>
            <div class="controls-row" style=" margin-top:10px;">

            <label>Available Balance &nbsp;&nbsp;(<strong><a href="index.php?go=walletregister&page=buybalance">Add Balance</a></strong>)</label>
            <?php 
			 $saldobwallete = $db->mycwalet($username);
			 $pendingbwallete = $db->mycwaletpending($username);
			 $totalbwalete = $saldobwallete-$pendingbwallete;
			 if($totalbwalete > 0){
			 ?>
            <input type="text" value="<?php echo point($totalbwalete); ?>" class="form-control" disabled="disabled" style="background:#222;"/>
            <?php }else{ ?>
            <input type="text" value="No Balance" class="form-control" disabled="disabled" style="background:#222;"/>
            <?php } ?>
          </div>
          <?php if($usepins == 1){ ?>
          <div class="controls-row" style="margin-top:10px;">

            <label>Secure PIN</label>
           <input type="password" class="form-control" placeholder="Enter Your Secure PIN" name="pincode" required='required'<?php echo $diss3; ?><?php echo $diss4; ?><?php echo $diss4b; ?>>
                                                          

          </div>
          <?php } ?>
<?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
         <div class="controls-row" style="margin-top:10px;">

            <label>2FA Code</label>
           <input type="text" class="form-control" placeholder="Only if you enable 2FA" name="one_time_password">

          </div>
          <?php } ?>
          
          
          
 <div>

           &nbsp;

          </div>
          <div>
         <?php  if($totalbwalete < $bayarpointnya) {?>
           <button class='btn btn-warning' type='button' name='sendnow' onclick='return confirmActionne()'>Pay Now</button>
            <?php } else { ?>
            <input type="submit" value="Pay Now" class="btn btn-success" name="addbalance" onclick='return confirmtpayment()'>
         <?php } ?>
          </div>

        </form>
        
 <?php } ?> 
        
        </div></div>
         
         
         
         
         
        </div>
        <!-- /.col -->
        
        
        
        
        
        
        
        
        
     
        
        
        
        
        
      </div>
      <!-- /.row -->
      

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-12">
       
           </div>
      </div>
      
               
                     <?php } ?>   
















<?php }} ?>
    </section>
