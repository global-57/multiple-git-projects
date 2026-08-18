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
$query35 = "SELECT * FROM dataewalet3 WHERE  username='".$user_session."' and kode='".$sc."'"; 
$result35 = mysql_query($query35);
$ceks1 = mysql_num_rows($result35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$tgl = $row35['tgl'];
$jumlah = $row35['jumlah'];
$exp = $row35['exp'];
$status = $row35['status'];
$plan = $row35['plan'];
$profit = $row35['profit'];
$cycle = $row35['uraian'];
$kontrak = $row35['kontrak'];
$siklus = $row35['siklus'];
$kode = $row35['kode'];
//$cashback = $row35['cashback'];
//$bayarnya = $row35['bayareusdp'];
$tgle = date('d/m/Y', strtotime($tgl));
		$jumlahdepone = rupiah($jumlah);	
		$jumlahbayare = rupiah($jumlah);	
		$bayare = $jumlah;	
		$bayarex = $jumlah;	
		
$payidre=$jumlah*$kursidr;
$payidre=sprintf("%.0f",$payidre);		

$paymyre=$jumlah*$kursmyr;
$paymyre=sprintf("%.2f",$paymyre);				

$paybtcne=$jumlah*$ratepaybtc;
$paybtcne=sprintf("%.8f",$paybtcne);
		
$prodd="Add Investment (Package ".$plan.")";

	  $email = $db->dataku("email", $username);
		$nama = $db->dataku("nama", $username);
		$hp = $db->dataku("hp", $username);	
		$alamat = $db->dataku("alamat", $username);	
		
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
              <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
            <tr class="bg-pale-dark">
              <th>#</th>
              <th>Description</th>
              <th class="text-right">Quantity</th>
              <th class="text-right">Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td><?= $prodd; ?></td>
              <td class="text-right"><?= $jumlahdepone; ?></td>
              <td class="text-right"><?= $jumlahdepone; ?></td>
            </tr>
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->




      <div class="row">
        <!-- accepted payments column -->
     
        
        
       
        
        
        
        
        
        
        
        
        
        
        <!-- /.col -->
        <div class="col-12 col-sm-12 text-right">
			
         	
         	<div class="total-payment">
         		<h3><b>Total Transfer :</b> <?= $jumlahbayare; ?></h3>
         	</div>
         
         
         
        
        
        
        
        
        
        
        
     
        
        
        
        
        
      </div>
      <!-- /.row -->
      
      
      
      
      
<?php if($status == 0){?>

      
      
      
       <?php if($db->config("btcne") == 1){ ?>               
                                            
    <div class="col-md-6">              
           <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Payment BTC</h3>
            </div>
            <div class="box-body">   
            
            
  <?php if($db->config("btcpays") == 1){ ?>     
             
              
          <table class='table' style='width:100%;'>

<tr>
<td><img src='../themes/btc.png' width='130' title='Pay BTC'/></td>
<td><button type='button' class="btn btn-warning" data-toggle='modal' data-target='#bitcoinpay' data-original-title='Payment Bitcoin'>Pay Now</button></td>
</tr>
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
                                       
										<iframe src="paybitcoin.php?sc=<?php echo $kode; ?>" style="width:600px; height:550px; overflow:auto;" frameborder="0" allowtransparency="true"></iframe>
										</div>
										
										</div>
										</div>
										</div>
                                        
        
              <?php } else { ?>      
                    
                    
                          <div class="controls-row" style="margin-top:10px;">
        <div class='alert alert-dark alert-dismissable'><i class="fa fa-info-circle"></i>&nbsp;<strong>Notice:</strong><br>Send <?= btc($paybtcne); ?> (Rate <?= btc($ratepaybtc); ?>/RM)<br />
           To BTC Address Below :
        </div></div>      
                  
                   
                <div class="input-group p-b-10" style="margin-bottom:30px;">
                    <input id="hxt_address" class="form-control" name="ref_url" type="text" value="<?php echo $db->config("bitcoin_address"); ?>">
                    <span class="input-group-btn">
                        <button id="copy-hxt-address" class="btn btn-warning" type="button" style="height:46px;">Copy</button>
                    </span>
                </div>             
                    
                    <?php } ?>
                    
                    
                    
                    
                    
                    
                    </div></div>      
            
            
        </div>
            <?php } ?>
     
                            
            
        <?php if($rekbanke == 1){?>   
      <div class="col-md-6">         
           <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Payment Bank</h3>
            </div>
            <div class="box-body">  
            
      <?php if($currencye == "USD" || $currencye == "EUR"){ ?>              
<?php if($exchangeidr == 1){ ?>   
            
            <div class="controls-row" style="margin-top:10px;">
        <div class='alert alert-dark alert-dismissable'><i class="fa fa-info-circle"></i>&nbsp;<strong>Notice:</strong><br>Send <?= idr($payidre); ?> (Rate <?= idr($kursidr); ?>/<?php echo $currencye;?>)<br />
           To Bank Account Below :
        </div></div>     
        <?php } ?>
        
<?php if($exchangerm == 1){ ?>   
            
            <div class="controls-row" style="margin-top:10px;">
        <div class='alert alert-dark alert-dismissable'><i class="fa fa-info-circle"></i>&nbsp;<strong>Notice:</strong><br>Send <?= rm($paymyre); ?> (Rate <?= rm($kursmyr); ?>/<?php echo $currencye;?>)<br />
           To Bank Account Below :
        </div></div>     
        <?php } ?>   
        <?php } else { ?>
         <div class="controls-row" style="margin-top:10px;">
        <div class='alert alert-dark alert-dismissable'><i class="fa fa-info-circle"></i>&nbsp;<strong>Notice:</strong><br>Please make payment To Bank Account Below :
        </div></div>     
           
        <?php } ?>
                        <?php $db->bannerrek2a(); ?>
                        
                        <div align="center">

<br /><br />
</div>
                        
                        
                     </div></div></div>
                     
                     
                     
                     <?php } ?>  
                     
                     
                     
                     
               
        <?php if($db->config("waletpay") == 1){?>    
      <div class="col-md-6">       
           <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pay With Wallet Balance</h3>
            </div>
            <div class="box-body">        
                     
                     
               <?php
if (isset($_GET['payment']) && $_GET['payment'] == 1) {

$usernameku = anti_injection($_POST['user']);	
$kodeku = anti_injection($_POST['kodepro']);	
$amountku = anti_injection($_POST['amount']);	
$kodetagihan = anti_injection($_POST['kodene']);

$querycekdata = "SELECT * FROM dataewalet3 WHERE kode='$kodetagihan' and username='$usernameku'"; 
$rescekdata = mysql_query($querycekdata);
$numecekdata = mysql_num_rows($rescekdata);
$rowcekdata = mysql_fetch_array($rescekdata);
if(!$numecekdata){
	header("location: index.php?go=payment_invest&sc=".$sc."&result=no_transaction");
	exit;
} else {	

$mtrans_codene = $rowcekdata[1];
		$muserene = $rowcekdata[2];
		$mjumlahne = $rowcekdata[3];
		$mplane = $rowcekdata[8];
		$mprofite = $rowcekdata[10];
		$mcyclee = $rowcekdata[11];
		$mplanpakete = $rowcekdata[9];
		$mkontrake = $rowcekdata[12];
		$msikluse = $rowcekdata[13];
		$mtgle = $rowcekdata[5];
		$mmaxbonus = $rowcekdata[15];
		$mmaxbonusprosen = $rowcekdata[14];


$authgoogles=$db->dataku("authgoogle", $usernameku);
$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: index.php?go=payment_invest&sc=".$sc."&result=wrong_auth");
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
	header("location: index.php?go=payment_invest&sc=".$sc."&result=no_pin");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=payment_invest&sc=".$sc."&result=wrong_pin");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=payment_invest&sc=".$sc."&result=pin_lock");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=payment_invest&sc=".$sc."&result=pin_off");
	exit;
} else {	


$saldotobayar = $db->mycwalet($usernameku);
$pendingtobayar = $db->mycwaletpending($usernameku);
$saldokutobayar = $saldotobayar-$pendingtobayar;

if($saldokutobayar < $mjumlahne){
header("location: index.php?go=payment_invest&sc=".$sc."&result=insufficient");
exit;
} else {

$cekadane = mysql_query("select kode from datacwalet where kode='$kodeku' and username='$usernameku'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
$db->insert("datacwalet", "", "'', '$kodeku', '$usernameku', '$amountku', 'Payment investment ".$mplanpakete." $kodetagihan', 'administrator', '$clientdate', 1, '$clientdate', '', ''"); }	
}

$db->update("dataewalet3", "status='1', exp='$clientdate'", "kode='$kodetagihan'");	
$db->update("reinv", "status='1'", "username='$usernameku'");
$db->update("member", "harga='$mplane', stage='$mplanpakete', act='1', tglaktif='$clientdate'", "username='$usernameku'");

$expired = date('Y-m-d H:i:s', strtotime("+".$mkontrake." ".$msikluse.""));

$cekadadepo = mysql_query("select * from deposit where kode='$kodetagihan'");
$ada_deponec = mysql_num_rows($cekadadepo); 
if(!$ada_deponec) {	
			$db->insert("deposit", "", "'', '$usernameku', '$kodetagihan', '$mjumlahne', '1', '$clientdate', '$expired', '$mplane', '$mplanpakete', '$mprofite', '$mkontrake', '', '$msikluse', '$mmaxbonus', '', '$mmaxbonus', '$mmaxbonusprosen', ''"); 
			
}



			
			$towaletcashe = $db->config("towaletcash");
			
			$username=$usernameku;	
			$kode=$kodetagihan;	
			//$kode=$kodetagihan;	
				
			
			
		$sponsore = $db->dataku("sponsor", $usernameku);
$sponsore2 = $db->dataku("sponsor", $sponsore);
$sponsore3 = $db->dataku("sponsor", $sponsore2);
$sponsore4 = $db->dataku("sponsor", $sponsore3);
$sponsore5 = $db->dataku("sponsor", $sponsore4);
			
			$towaletcashe = $db->config("towaletcash");	
			$kmspons = explode("|", $db->config("komisi_sponsor"));	
			
			$komsponx = ($kmspons[0]/100)*$mjumlahne;
			$komsponx2 = ($kmspons[1]/100)*$mjumlahne;
			$komsponx3 = ($kmspons[2]/100)*$mjumlahne;
			$komsponx4 = ($kmspons[3]/100)*$mjumlahne;
			$komsponx5 = ($kmspons[4]/100)*$mjumlahne;
			
		
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
			 
			
			  $tgl_skr = (date("Y-m-d"));
			$dtfrom = "$tgl_skr 00:00:00";
			$dtto = "$tgl_skr 23:59:59";
				$level = $db->dataupline("level", $username);
				//$kompas = $db->config("kompasangan");
			    $kompas = explode("|", $db->config("kompasangan"));
				//$k_pas = ($kompas[0]/100)*$mjumlahne;
				$paketreg = $mplane;
				
				 if($paketreg == 1){
				$k_pas = ($kompas[0]/100)*$mjumlahne;
			}else if($paketreg == 2){
				$k_pas = ($kompas[1]/100)*$mjumlahne;
			}else if($paketreg == 3){
				$k_pas = ($kompas[2]/100)*$mjumlahne;
			}else if($paketreg == 4){
				$k_pas = ($kompas[3]/100)*$mjumlahne;
			}else if($paketreg == 5){
				$k_pas = ($kompas[4]/100)*$mjumlahne;
			}else if($paketreg == 6){
				$k_pas = ($kompas[5]/100)*$mjumlahne;
			}else if($paketreg == 7){
				$k_pas = ($kompas[6]/100)*$mjumlahne;
			}else if($paketreg == 8){
				$k_pas = ($kompas[7]/100)*$mjumlahne;
			}else if($paketreg == 9){
				$k_pas = ($kompas[8]/100)*$mjumlahne;
			}else if($paketreg == 10){
				$k_pas = ($kompas[9]/100)*$mjumlahne;
			}else{}		
				
               
			    $flush = $db->config("flushout");
			    $fonee = explode("|", $flush);
			
		   
			
			if($k_pas > 0){
            for($i=0;$i<100;$i++) {
					$upli = $db->dataupline("upline$i", $username);
					$matchnow=$db->match($upli);
					$uql = mysql_query("select username from komisi where jenis='kompasangan' and username='$upli'"); 
					$matchkit = mysql_num_rows($uql); 
					
			 $paketregupli = $db->dataku("harga", $upli);
            if($paketregupli == 1){
				$flusheee=$fonee[0];
			}else if($paketregupli == 2){
				$flusheee=$fonee[1];
			}else if($paketregupli == 3){
				$flusheee=$fonee[2];
			}else if($paketregupli == 4){
				$flusheee=$fonee[3];
			}else if($paketregupli == 5){
				$flusheee=$fonee[4];
			}else if($paketregupli == 6){
				$flusheee=$fonee[5];
			}else if($paketregupli == 7){
				$flusheee=$fonee[6];
			}else if($paketregupli == 8){
				$flusheee=$fonee[7];
			}else if($paketregupli == 9){
				$flusheee=$fonee[8];
			}else if($paketregupli == 10){
				$flusheee=$fonee[9];
			}else{}		

            $cekjmlah=mysql_query("select SUM(bayar) from komisi where jenis='kompasangan' and username='$upli' and (tglbayar between '$dtfrom' and '$dtto')");
	                 while($rowcekjumlah=mysql_fetch_row($cekjmlah)) {
		             $ada_fo = $rowcekjumlah[0];
					 if($ada_fo>0){
						 $adafone=$ada_fo;
					 }else{
						 $adafone="0";
					 }
					 
		             }

                if($matchnow > $matchkit) {
					if($adafone < $flusheee) {
						
						
				//	$db->insert("komisi", "", "'', '$upli', '$k_pas', '$clientdate', '0', '', 'kompasangan', '$username', '".$kode."ps', '', ''");
                    
					if($towaletcashe == 1){
			//	$db->insert("datacwalet", "", "'', '$kode', 'administrator', '$k_pas', 'Pairing Bonus From $username', '$upli', '$clientdate', 1, '$clientdate', '', ''");
				//$db->update("komisi", "gett='1'", "username='$upli' and kode='".$kode."ps'");
				}
					
					
						}else{
							
				//	$db->insert("komisi", "", "'', '$upli', '0', '$clientdate', '0', 'flush', 'kompasangan', '$username', '".$kode."ps', '', ''");
					}}
					}}
				
				
			   
			
			
			
				
			   

$hpku=$db->dataku("hp", $usernameku);
$emailku=$db->dataku("email", $usernameku);
$namaku=$db->dataku("nama", $usernameku);
		
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$namaku." (".$usernameku."),</p>
<p>Payment investment use your ecash balance.</p>
<p><strong>No: ".$kodetagihan."<br>
Amount: ".rupiah($mjumlahne)."<br>
Investment: ".$mplanpakete."<br>
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
        $mail3->Subject = ''.$namaku.', Payment '.$kodetagihan.' use your ecash';
        $mail3->msgHTML($isimail);
	  //  $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	


if($hpku){
$isipesan = "Helo ".$nama.", Your investment package has been active, ".$mplanpakete.", Amount ".rupiahwa($mjumlahne).".";
	mysql_query("insert into outbox values('', '', '$usere', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
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
sendwa($hpku, $isipesan, $apikeywoowa);	
}

header("location: index.php?go=payment_invest&sc=".$sc."&result=successpay&co=$kodetagihan");
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
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 13);
?> 		  
			  
		<script>
  function confirmActionne(){
   swal('Oops...', 'Your Wallet Balance is not enough to pay this invoice!', 'error').done();
 
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
			return prefix == undefined ? rupiah : (rupiah ? 'USD ' + rupiah : '');
		}
		function confirmtpayment(){
      var session_valuexx=document.getElementById('kodene').value;
      var session_valuex=document.getElementById('amount').value;
	 
          var confirmed = confirm("You will make an Invoice payment "+session_valuexx+"\nAmount: IDR" + " " + ""+formatRupiah(session_valuex)+" Use Wallet Balance.\n" + "If you choose OK this transaction cannot be canceled.");
      return confirmed;
}
</script> 

      
 <form id="tab2" name="wallet_depo" method="post" action="index.php?go=payment_invest&sc=<?php echo $sc;?>&payment=1">

<input type="hidden" id="kodepro" name="kodepro" value="<?php echo $initialex; ?>" readonly="readonly"/>
<input type="hidden" id="user" name="user" value="<?php echo $username; ?>" readonly="readonly"/>
<input type="hidden" id="kodene" name="kodene" value="<?php echo $kode; ?>" readonly="readonly"/>
<input type="hidden" id="amount" name="amount" value="<?php echo $bayare; ?>" readonly="readonly"/>
<div class="controls-row" style=" margin-top:10px;">

            <label>Available Wallet Balance</label>
            <?php 
			 $saldobwallete = $db->mycwalet($username);
			 $pendingbwallete = $db->mycwaletpending($username);
			 $totalbwalete = $saldobwallete-$pendingbwallete;
			 if($totalbwalete > 0){
			 ?>
            <input type="text" value="<?php echo rupiah($totalbwalete); ?>" class="form-control" disabled="disabled" style=" background:#111;"/>
            <?php }else{ ?>
            <input type="text" value="No Balance" class="form-control" disabled="disabled" style=" background:#111;"/>
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
         <?php  if($totalbwalete < $bayare) {?>
           <button class='btn btn-warning' type='button' name='sendnow' onclick='return confirmActionne()'>Pay Now</button>
            <?php } else { ?>
            <input type="submit" value="Pay Now" class="btn btn-info" name="addbalance" onclick='return confirmtpayment()'>
         <?php } ?>
          </div>

        </form>
        
        
 <?php } ?>       
        
                     
                     </div></div>
                     
                     
                     
                     
                   
                     <?php } ?>    
                     
                       
            
            
            
      
                     
                     </div>   
      

      <!-- this row will not appear when printing -->
      <div class="row no-print" style="margin-left:15px;">
        <div class="col-12">
        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
           Please make confirm manualy if you already payment and system not automaticaly confirm your payment.<br /><br />
            <a href="index.php?go=confirmpayment&sc=<?php echo $kode; ?>&jn=1&jm=<?php echo $bayarex;?>"><button id="print" type="button" class="btn btn-warning"> <span><i class="fa fa-envelope"></i>&nbsp;&nbsp;Confirmation</span></button></a>
          </p>
           </div>
      </div>
      
               
                     <?php } ?>   



    






      </div>


<?php }} ?>
    </section>
