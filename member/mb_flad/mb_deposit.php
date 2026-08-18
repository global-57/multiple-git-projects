<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>



<div class="container-main-div  pb-5">
			


<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0">Form Deposit </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
	<div class="btn-group btn-group-sm w-100"  style="height: 25px;"   role="group">
		<a class="btn btn-primary"  style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;"  href="index.php?go=deposit" ><i class="la la-bank mr-1"></i>Deposit</a>
		<a class="btn btn-dark"   style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;" href="index.php?go=withdraw" ><i class="la la-btc mr-1"></i>Withdraw</a>
	</div>
	</div>
</div>
<p class="mb-0"> Please enter the nominal deposit you want<br /><font style="font-size:12px; color:#FC3;"><i>Min <?php echo rupiah($minimalbuywalletcash); ?>, Max <?php echo rupiah($maksimalbuywalletcash); ?>, Fee <?php echo $feebuywalletcash; ?>%.</i></font></p> 	
<hr>
<?php  if($buywalletcash == 0){ 
				 echo "<div style='color:white;border:0px; margin-top:20px;' class='alert alert-danger bg-danger alert-dismissable'>Deposit ".$currencye." is curently disable by administrator.</div>";
			
}else{
				 ?>
                 
                 
<?php
 if (isset($_GET['page']) && $_GET['page'] == "submit") {		
                 
                 
  $authgoogles=$db->dataku("authgoogle", $user_session);
$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: index.php?go=deposit&result=wrong_auth");
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
	header("location: index.php?go=deposit&result=no_pin");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=deposit&result=wrong_pin");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=deposit&result=pin_lock");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=deposit&result=pin_off");
	exit;
} else {	



$kode = $_POST['kode'];
$username = anti_injection($_POST['user']);	
$accid = anti_injection($_POST['accid']);	
$amount = anti_injection($_POST['amount']);


$db->select("status", "datacwalet2", "status='0' and tujuan='$username'");
				$ada = $db->num_rows();
if ($ada >0) {
  header("location: index.php?go=deposit&result=pending");
	exit;
} else {

		

if (!$amount || $amount < $minimalbuywalletcash) {
        header("location: index.php?go=deposit&result=min_buy");
	exit;
      } else {

if ($amount > $maksimalbuywalletcash) {
        header("location: index.php?go=deposit&result=max_buy");
	exit;
      } else {


$db->insert("datacwalet2", "", "'', '$kode', '$username', '$amount', '', '$username', '$clientdate', '0', '', '', '$accid', ''"); 	
//$db->insert("dataewalet2", "", "'', '$kode', '$username', '$amount', '', '$username', '$clientdate', '0', '$kurspoin', '', '$accid', '', 'cash'"); 		
			

$spon_nama = $db->dataku("nama", $username);

		$spon_mail = $db->dataku("email", $username);
		$nama = $db->dataku("nama", $username);
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
			$invc="ADDBALANCE_".$user_session."_".$sess."_".$kode;
			$inv="http://".$domain."/invoice/".$invc.".pdf";
			$db->insert("invoice","","'', '$user_session', '$kode', '$invc', '$clientdate'");
			$nama_ku = $db->dataku("nama",$user_session);
			$email_ku = $db->dataku("email",$user_session);
			$hp_ku = $db->dataku("hp",$user_session);
			$nama_nya = $db->dataku("nama",$tujuan);
			
			
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


	if($hp_ku){
$isipesanec = "Hello ".$nama_ku." (".$user_session."), Your deposit (".$kode.") amount: ".$jumlahdeponec.", date: ".$tgl.". Please login and make payment.";
sendwa($hp_ku, $isipesanec, $apikeywoowa);	
		}	


$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$nama_ku." (".$user_session."),</p>
<p>Deposit ".$currencye." Balance</p>
<p><strong>No: ".$kode."<br>
Amount: ".$jumlahdepone."<br>
Date: ".$tgl."<br>
</p>
<p>Please login and make payment.</p>
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
        $mail3->Subject = ''.$nama_ku.', Deposit '.$currencye.' Balance';
        $mail3->msgHTML($isimail);
	//    $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	


$db->insert("notifikasi", "", "'', '$username', 'Deposit ".$currencye." Balance', '', '', 'Deposit ".$currencye." Balance No Transaction ".$kode.", Please make payment according to the value that you add balance', '$clientdate', 'label label-sm label-icon label-info', 'fa fa-info', '0', '$kode'");



 header("location: index.php?go=payment_ecash&sc=".$kode."&result=success");
	exit;


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
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Deposit ".$currencye." ".$co." has been successfully, please make payment your order".$ca.".</div>";
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
 if(isset($_GET['result'])&&$_GET['result']=="min_buy"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Minimum deposit ".$currencye." is ".rupiah($minimalbuywalletcash).".</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="max_buy"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Max deposit ".$currencye." Balance is ".rupiah($maksimalbuywalletcash).".</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pending"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You still have a deposit pending. Wait until the transaction is processed in order to be able to deposit ".$currencye." again.</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="success"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Deposit ".$currencye." balance Has been successfully submitted. Please make payment.</div>";
}
?>
<?php
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Wrong Captcha!</div>";
}
?>	
    <?php
$results = $_GET['result'];
if($results == "wrong_auth") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You're enable two factor authentication at your account, Please enter your google authenticator six-digit code!</div>";
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




<form action="index.php?go=deposit&page=submit" method="post">
<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>"/>
<input type="hidden" id="user" name="user" value="<?php echo $user_session; ?>"/>   
<input type="hidden" id="fee" name="fee" value="<?php echo $feebuywalletcash; ?>"/>  




<div class="div-card bg-2">	


	<label>Total Deposit * </label>
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
    
    
    
    
    
    
	 
	<button type="submit" name="deposit" class="btn btn-dark mt-2 form-control" ><i class="la la-bank mr-2">  </i>Deposit</button> 
	
	
</div>
</form>







<?php } ?>
<?php } ?>
<br />








 
<h5 class="mb-0">Deposit history </h5>
<p> Last Recent Deposit History </p> 
<hr>



<?

	$db->select("kode, uraian, username, jumlah, tujuan, tgl, status, tglproses, jenis", "datacwalet2", "username='$user_session'", "tgl desc");
	
		while($row=$db->fetch_row()) {
			if($row[8] == "ewalet") {
				$jenise = "Balance";
			} else if($row[8] == "bwalet") {
				$jenise = "B-Walet";
			} else {
				$jenise = "R-Walet";
			}		
			
			
			
			if(is_odd($nom) == 0) {
				$class = "tblrow_ganjil";
			} else {
				$class = "tblrow_genap";
			} 	
			if($row[6] > 0) {
				$st = "<b  style='color: lawngreen' > Paid </b>";
				$sxt = "";
				$style = "<font>";
			} else {
				$st = "<b  style='color: yellow' > Waiting Payment </b>";
				$sxt = '<a href="index.php?go=payment_ecash&sc='.$row[0].'" class="btn btn-danger btn-sm ml-2"> Pay Now </a>';
				$style = "<font color='#F00000'>";
			}	
			
			
				$tt = $row[5];
?> 


<div class="div-card bg-2 mb-2 "  style="min-height:unset!important;" >	
				<small>Date : <?php echo $row[5];?> </small> 
				<p class="mb-0">
					Total Deposit : <?php echo rupiah($row[3]);?> <br /> 
					<span> Status : <?php echo $st;?>   
						<?php echo $sxt;?>					
                        </span> 
				</p> 
			</div>


<?php } ?>





</div>
</div>