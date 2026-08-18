<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
<div class="container-main-div  pb-5">
			

<h5 class="mb-0" style="color:#666666;">Payment Deposit </h5>
<p style="color:#666666;"> Make sure to send to the registered account number, <a class="btn btn-dark btn-sm" href="index.php?go=deposit" style="margin-top:10px;"> Back To Deposit History </a>  </p> 
<hr>


<div class="div-card bg-2 mb-2 "  style="min-height:unset!important;" >	


<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Deposit ".$currencye." Has been successfully submitted. Please make payment.</div>";
}
?>




<?php
if (isset($_GET['page']) && $_GET['page'] == "submit") {


$_SESSION["amount"] = anti_injection($_POST["amount"]);
$_SESSION["hash"] = anti_injection($_POST["hash"]);
$_SESSION["tujuan"] = anti_injection($_POST["tujuan"]);
$_SESSION["info"] = anti_injection($_POST["info"]);


$invoice = anti_injectionx($_POST['invoice']);	
$jn = anti_injectionx($_POST['jenis']);
$jm = anti_injectionx($_POST['amount']);

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
	header("location: index.php?go=payment_ecash&result=no_pin&sc=$invoice");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=payment_ecash&result=wrong_pin&sc=$invoice");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=payment_ecash&result=pin_lock&sc=$invoice");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=payment_ecash&result=pin_off&sc=$invoice");
	exit;
} else {	

$img = $_FILES['img1'];
	$allowed =  array('pdf','png','jpg','jpeg','PNG','gif','JPG');//allowed types
$filename = $_FILES['img1']['name'];//file name
$ext = pathinfo($filename, PATHINFO_EXTENSION);//extension checking
if(!empty($_FILES['img1']['name']) && !in_array($ext,$allowed) ){
	header("location: index.php?go=payment_ecash&result=file_error&sc=$invoice");
	exit;
}else{	
	$type = substr($img['name'], strrpos($img['name'], '.') + 1);
	if(!empty($_FILES['img1']['name']) && $img['size'] > 500000) {
		header("location: index.php?go=payment_ecash&result=size_error&sc=$invoice");
	exit;
	} else {
		$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 48));
		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "confirm";
		$new_file_name = str_replace($namex,'',$special);
		$name  = $new_file_name.'_'.$user_session.'_'.$time.'_'.$sess;
		$thumbName		= $name.'.'.$type;
        if($type == "gif"){
			$imgObj = imagecreatefromgif($img['tmp_name']);
		} else if($type == "png"){
			$imgObj = imagecreatefrompng($img['tmp_name']);
		} else if($type == "jpeg"){
			$imgObj = imagecreatefromjpeg($img['tmp_name']);
		} else if($type == "JPG"){
			$imgObj = imagecreatefromjpeg($img['tmp_name']);
		} else if($type == "PNG"){
			$imgObj = imagecreatefrompng($img['tmp_name']);
		} else {
			$imgObj = imagecreatefromjpeg($img['tmp_name']);
		}
		$width = imageSX($imgObj);
		$height = imageSY($imgObj);
		if(!empty($_FILES['img1']['name']) && !$width || !empty($_FILES['img1']['name']) && !$height) {
		header("location: index.php?go=payment_ecash&result=file_errors&sc=$invoice");
	    exit;
		}else{
		if($width > 1000) {
		 	$height = $height * (1000 / $width);
		 	$width = 1000;	
		}
		$thumbWidth = $width;
		$thumbHeight = $height;
		$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
		imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));
		if($type == "gif") {
			imagegif($newThumb, '../images/confirm/'.$thumbName);
		} else if($type == "png") {
			imagejpeg($newThumb, '../images/confirm/'.$thumbName);
		} else {
			imagejpeg($newThumb, '../images/confirm/'.$thumbName);
		}  
		imagedestroy($imgObj);
		imagedestroy($newThumb);

$username = anti_injection($_POST['user']);	
$kode = anti_injection($_POST['kode']);	
$hash = anti_injection($_POST['hash']);	
$amount = anti_injection($_POST['amount']);	
//$tujuan = anti_injection($_POST['rekeningtujuan']);	
$info = anti_injection($_POST['info']);	
$rekeningtujuan = anti_injection($_POST['rekeningtujuan']);	


	$cekdatanya="datacwalet2";
	$typne="Deposit Balance";
	$typnce="kode";

	
$sql_sp5 = mysql_query("select * from $cekdatanya where username='".$username."' and ".$typnce."='".$invoice."'");
$ada_sp5 = mysql_num_rows($sql_sp5);
if(!$ada_sp5){
header("location: index.php?go=payment_ecash&result=errinvoice&sc=$invoice");
		exit;
} else {
	
	
$sql_sp6 = mysql_query("select username from konfirmasipayment where username='".$username."' and invoice='".$invoice."'");
$ada_sp6 = mysql_num_rows($sql_sp6);
if($ada_sp6 > 0){
header("location: index.php?go=payment_ecash&result=errors&sc=$invoice");
		exit;
} else {	

$sql_sp3 = mysql_query("select username from konfirmasipayment where username='".$username."' and kode='".$kode."'");
$ada_sp3 = mysql_num_rows($sql_sp3);
if($ada_sp3){
header("location: index.php?go=payment_ecash&result=err&sc=$invoice");
		exit;
} else {
	
		$namaku = $db->dataku("nama", $username);
		$emailku = $db->dataku("email", $username);
		$hp = $db->dataku("hp", $username);
		$tgl = formatgl($clientdate);


$db->insert("konfirmasipayment", "", "'', '$kode', '3', '$namaku', '$username', '$emailku', '$amount', '$rekeningtujuan', '$clientdate', '$info', '".$_SERVER['REMOTE_ADDR']."', '$hp', '$invoice', '$thumbName'");	
		
unset($_SESSION['amount']);
unset($_SESSION['hash']);
		unset($_SESSION['tujuan']);
		unset($_SESSION['info']);

	
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$namaku." (".$username."),</p>
<p>You have sent confirmation.</p>
<p>No Trx: ".$kode."<br>
Invoice: ".$invoice."<br>
Type: ".$typne."<br>
Amount: ".rupiah($amount)."<br>
Transfer To: ".$rekeningtujuan."<br>
Info: ".$info."<br>
Date: ".$tgl."<br>
</p>
<p>Thank you, we will process your confirmation as soon as possible.</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
		//$mail3->IsSMTP(); // telling the class to use SMTP
        $mail3->Host       = $smtphost; // SMTP server
        $mail3->SMTPAuth   = true;                  // enable SMTP authentication
        $mail3->Host       = $smtphost; // sets the SMTP server
        $mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail3->Username   = $smtpuser; // SMTP account username
        $mail3->Password   = $smtpass;        // SMTP account password
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($emailku, $namaku);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$namaku.', Payment Confirmation';
        $mail3->msgHTML($isimail);
	    $mail3->AddAttachment("../images/confirm/".$thumbName."");      // attachment
        $mail3->send();	
		
		
		
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$bisnisname.",</p>
<p>Member have sent confirmation.</p>
<p>No Trx: ".$kode."<br>
Invoice: ".$invoice."<br>
Type: ".$typne."<br>
Amount: ".rupiah($amount)."<br>
Transfer To: ".$rekeningtujuan."<br>
Info: ".$info."<br>
Date: ".$tgl."<br>
</p>
<p>Member Details:<br>
Name: ".$namaku."<br>
Username: ".$username."<br>
Email: ".$emailku."<br>
Phone: ".$hp."<br>
</p>


<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
		//$mail3->IsSMTP(); // telling the class to use SMTP
        $mail3b->Host       = $smtphost; // SMTP server
        $mail3b->SMTPAuth   = true;                  // enable SMTP authentication
        $mail3b->Host       = $smtphost; // sets the SMTP server
        $mail3b->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail3b->Username   = $smtpuser; // SMTP account username
        $mail3b->Password   = $smtpass;        // SMTP account password
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($emailadmin, $bisnisname);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$bisnisname.', Payment Confirmation';
        $mail3b->msgHTML($isimail2);
	    $mail3b->AddAttachment("../images/confirm/".$thumbName."");      // attachment
        $mail3b->send();		
		

        header("location: index.php?go=payment_ecash&result=successconfirm&co=".$kode."&sc=$invoice");
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
 }else{
?>





  <?php
 if(isset($_GET['result'])&&$_GET['result']=="size_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload only 500KB file size!</div>";
}
?>              
  <?php
 if(isset($_GET['result'])&&$_GET['result']=="file_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload only jpg, png, gif file!</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file_errors"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>File not allowed! Upload only jpg, png, gif file!</div>";
}
?>    
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="errors"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Maximum send confirmation is only 1 for 1 invoice. Confirmation for this invoice (".$_GET['sc'].") has been sent before</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="err"){
$mx = $_GET['mx'];
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>This confirmation has been sent before.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="errinvoice"){
$mx = $_GET['mx'];
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Invoice not found, make sure your confirmation type selection is correct.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="successconfirm"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Confirmation for invoive ".$_GET['sc']." was sent successfully, (No ".$_GET['co']."), please wait we will process your confirmation as soon as possible.</div>";
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
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Wrong Captcha!</div>";
}
?>	           
                 
                  
                                	
      <?php    
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);


if(!isset($_GET["sc"])){ 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'>Deposit Not Found!</div>";
}else{
if(isset($_GET["sc"])); $sc = $_GET["sc"];
?>	 
<?
$query35 = "SELECT * FROM datacwalet2 WHERE  username='".$user_session."' and kode='".$sc."'"; 
$result35 = mysql_query($query35);
$ceks1 = mysql_num_rows($result35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$tgl = $row35['tgl'];
$jumlah = $row35['jumlah'];
$status = $row35['status'];
$kode = $row35['kode'];
//$produk = $row35['produk'];
$tgle = date('d/m/Y', strtotime($tgl));
		$jumlahdepone = rupiah($jumlah);	
		$bayare = $jumlah;	
		$bayarex = $jumlah;	
		
$paybtcne=$jumlah*$ratepaybtc;
$payidre=$jumlah*$kursidr;	

$paymyre=$jumlah*$kursmyr;	

$payusdtne=$jumlah*$rateusdt;	


$prodd="Buy ".$currencye." Balance";

	  $email = $db->dataku("email", $username);
		$nama = $db->dataku("nama", $username);
		$hp = $db->dataku("hp", $username);	
		$alamat = $db->dataku("alamat", $username);	
?>
<?php 
   $sql_spxx = mysql_query("select * from konfirmasipayment where invoice='".$sc."'");
$ada_spxx = mysql_num_rows($sql_spxx);
if($ada_spxx){ ?>
<form method="post" action="#" enctype="multipart/form-data"> 
<?php } else {  ?>  
	<form method="post" action="index.php?go=payment_ecash&page=submit&sc=<?php echo $sc;?>" enctype="multipart/form-data"> 
		<?php } ?>
<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>"/>
<input type="hidden" id="user" name="user" value="<?php echo $user_session; ?>"/>
<input type="hidden" id="jn" name="jn" value="3"/>
<input type="hidden" id="jenis" name="jenis" value="3"/>
<input type="hidden" id="invoice" name="invoice" value="<?php echo $sc; ?>"/>
<input type="hidden" id="amount" name="amount" value="<?php echo $bayare; ?>"/>
        
		<input type="hidden" required class="form-control" name="id" value="1446" placeholder=""    />
		
		
		<span> Trx </span> 
		<input type="text" readonly disabled="true"  class="form-control"  value="<?php echo $sc; ?>" placeholder=""    />
		<span> Total Deposit </span> 
		<input type="text" readonly disabled="true"  class="form-control"  value="<?= $jumlahdepone; ?>" placeholder=""    />
		<span> Current Status of Your Deposit </span> 
		<?php if($status == 1){?>
		<p><font color="#00FF00">Done</font></p> 
        <?php } else { ?>
		<p><font color="#FF0000"><i class='fa fa-spinner fa-spin'></i>&nbsp; Waiting Payment</font></p> 
        <?php } ?>
		<hr>
        
        <?php if($rekbanke == 1){?> 
		<h6> Bank of payment </h6> 
        <?php $db->bannerrek2d(); ?>
        <br />
        <?php } ?>
       
       
       
        <?php if($db->config("usdtpay") == 1){ ?>
        <h6> USDT payment BEP20</h6>
         <div class="input-group p-b-10" style="margin-bottom:30px;">
                    <input id="hxt_address" class="form-control" name="ref_url" type="text" value="<?php echo $db->config("usdtaddress"); ?>">
                    <span class="input-group-btn">
                        <button id="copy-hxt-address" class="btn btn-success" type="button">Copy</button>
                    </span>
                </div>
        <?php } ?>
        
        <?php if($db->config("btcne") == 1){ ?> 
        <h6> Bitcoin payment<br /><font style="font-size:12px; color:#999;"><i>(Send <?= btc($paybtcne); ?> (Rate <?= btc($ratepaybtc); ?>/<?php echo $currencye;?>)</i></font></h6>
         <div class="input-group p-b-10" style="margin-bottom:30px;">
                    <input id="eth_address" class="form-control" name="ref_url" type="text" value="<?php echo $db->config("bitcoin_address"); ?>">
                    <span class="input-group-btn">
                        <button id="copy-eth-address" class="btn btn-success" type="button">Copy</button>
                    </span>
                </div>
        <?php } ?>
        
        
        
        
		<hr>
        
       <?php if($ada_spxx){ ?> 
        <div style='color:white;border:0px; margin-top:20px;'  class='alert alert-info bg-info alert-dismissable'>You already sent proof of payment, please wait, we will immediately process your deposit.</div>
        <?php } else { ?>
        
        
		<h6> Proof of payment </h6> 
		
        
         <label>Payment To * </label>
         <select name="rekeningtujuan" id="rekeningtujuan" class="form-control" required='required' >
            <option value=""> [ Select Payment ] </option>
         <?
		
		  if($db->config("usdtpay") == 1){
		echo " <option value='USDT BEP20 Address: ".$db->config("usdtaddress")."'>USDT BEP20 Address: ".$db->config("usdtaddress")."</option>";}
		
		  if($db->config("btcne") == 1){
		echo " <option value='BTC Wallet Address:".$db->config("bitcoin_address")."'>BTC Wallet Address:".$db->config("bitcoin_address")."</option>";}
		  if($rekbanke == 1){
		$query1 = "SELECT * FROM banner_rek WHERE published=1"; 
$result1 = mysql_query($query1);
$ceks1 = mysql_num_rows($result1);  
	while($row1 = mysql_fetch_array($result1)){
    echo " <option value='".$row1["nama"]."' selected>".$row1["nama"]."</option>";
	}}	
	 
		?>
		  </select>
        
        
        <label>Upload * </label>
        <input name="img1" type="file" id="img1" class="form-control ">
        
		
		  <?php if($usepins == 1){ ?>
     <label>Secure PIN</label>
           <input name="pincode" class="form-control" id="pincode" placeholder="Enter Your Secure PIN" type="password" required='required' autocomplete="off" style="background:#161616; border:none; margin-bottom:10px;">
   <?php } ?>

<?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
     <label>2FA Code</label>
           <input type="text" class="form-control" placeholder="Hanya jika anda mengaktifkan 2FA" name="one_time_password">
    
   <?php } ?>
    
		
		
		<br /> 
        <?php if(!$ada_spxx){ ?>
        
        
		   <?php if($demomode == 1){ ?>
		<button type="button" class="btn btn-dark form-control" name="kirim_bukti" onclick='return confirmActiondemomode()' >Send proof of payment </button>
	<?php } else { ?>
		<button type="submit" class="btn btn-dark form-control" name="kirim_bukti" >Send proof of payment </button>
        <?php } ?><?php } ?>
	
	
	</form>
    
    
		
    
    <?php } ?>
 <?php } ?>   
 <?php } ?>  
    
    
    
    
</div> 
			



</div>
</div>