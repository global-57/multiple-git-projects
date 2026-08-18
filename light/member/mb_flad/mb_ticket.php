<?php
ob_start();
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>   
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PIN Activation
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">PIN Activation</li>
      </ol>
    </section>


    <section class="content">
<?php // Your license key 
$server = $_SERVER['SERVER_NAME'];

$c = curl_init(); 
// Set the full url path to point to your verifyLicense.php on your server 
curl_setopt($c, CURLOPT_URL, "http://www.primadesain.com/verifydomains.php"); 
curl_setopt($c, CURLOPT_TIMEOUT, 30); 
curl_setopt($c, CURLOPT_POST, 1); 
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 

$postfields = 'svr='.$server; 
curl_setopt($c, CURLOPT_POSTFIELDS, $postfields); 
$result = curl_exec($c); 

if ($result=="fail") { 
echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date ("Y")." www.primadesain.com</p>";
die(); }
?>

<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["status0"]."</div>";
}else{
?>

<?php

if (isset($_GET['page']) && $_GET['page'] == "trans_go") {

if($transpine == 0){
	header("location: index.php?go=ticket&page=transfer&result=disable");
	exit;
} else {

$_SESSION["amounte"] = anti_injection($_POST["amount"]);
$_SESSION["username"] = anti_injection($_POST["tujuan"]);


$kode = anti_injection($_POST['kode']);
$amount = anti_injection($_POST['amount']);
$username = anti_injection($_POST['tujuan']);

$pine = md5($_POST['pincode']);	

if(!$amount){
	header("location: index.php?go=ticket&page=transfer&result=noamount");
	exit;
} else {

$balancetiketku = balance_ticket($user_session);
if(!$balancetiketku){ 
header("location: index.php?go=ticket&page=transfer&result=nobalance");
	exit;
} else {
	
if($amount > $balancetiketku){ 
header("location: index.php?go=ticket&page=transfer&result=maxtransfer&max=$balancetiketku");
	exit;
} else {


//$coed=substr(str_shuffle(str_repeat("445642037111211241472131411190667642037111211241472162223777", 64)), 0, 11);	 



$query35v = "SELECT * FROM member WHERE username='".mysql_real_escape_string($username)."'"; 
$result35v = mysql_query($query35v);
$ceks1v = mysql_num_rows($result35v);
if(!$ceks1v){ 
header("location: index.php?go=ticket&page=transfer&result=errorx");
	exit;
} else {	

$sqlc = mysql_query("SELECT * FROM pincode WHERE username='$user_session'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){
$pin = $rowc['pin'];
$tgl = formatgl($rowc['tgl']);
$status = $rowc['status'];
$lock = $rowc['locks'];
	}
	if(!$numc) {
	header("location: index.php?go=ticket&page=transfer&result=no_pin");
	exit;
	} else {
	if(!$pine || $pine <> $pin) {
	header("location: index.php?go=ticket&page=transfer&result=wrong_pin");
	exit;
	} else {
	
	if($lock == 1) {
	header("location: index.php?go=ticket&page=transfer&result=pin_lock");
	exit;
	} else {
	
	if($status == 0) {
	header("location: index.php?go=ticket&page=transfer&result=pin_off");
	exit;
	} else {


	
$nama = $db->dataku("nama", $username);
$email = $db->dataku("email", $username);	
$hp = $db->dataku("hp", $username);	
$namaku = $db->dataku("nama", $user_session);
$emailku = $db->dataku("email", $user_session);
$hpku = $db->dataku("hp", $user_session);
		
	
$sqlcv = mysql_query("SELECT * FROM ticket WHERE username='$user_session' and status='1' order by id asc limit ".$amount."");
$numcv = mysql_num_rows($sqlcv);
if($numcv < $amount){
	header("location: index.php?go=ticket&page=transfer&result=nopackage&am=$amount");
	exit;
	} else {

while($rowcv = mysql_fetch_array($sqlcv)){
$tickete = $rowcv['ticket'];
$pakete = $rowcv['paket'];
//$paketname = $rowcv['paketname'];
$db->insert("ticket_transfer", "", "'', '$user_session', '$namaku', '', '$username', '$nama', '', '$tickete', '', '$email', '$clientdate'"); 	
$db->update("ticket", "username='$username', info='transfered from $user_session - $clientdate'", "ticket='$tickete'");
	
}
	
unset($_SESSION['username']);
unset($_SESSION['amounte']);
unset($_SESSION['pakete']);



$isimail1="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$namaku.",</p>
<p>You have transferred PIN Activation.</p>

<p>
<strong>Recipient:</strong><br>
Username : ".$username."<br>
Name : ".$nama."<br>
Email : ".$email."<br>
</p>
<p>
<strong>PIN Activation:</strong><br>
Amount : ".$amount."
</p>
<p>
Transfer Date : ".$tgl."
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail1 = new PHPMailer;
	//	$mail1->IsSMTP(); // telling the class to use SMTP
        $mail1->Host       = $smtphost; // SMTP server
        $mail1->SMTPAuth   = true;                  // enable SMTP authentication
        $mail1->Host       = $smtphost; // sets the SMTP server
        $mail1->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail1->Username   = $smtpuser; // SMTP account username
        $mail1->Password   = $smtpass;        // SMTP account password
        $mail1->setFrom($emailadmin, $bisnisname);
        $mail1->addAddress($emailku, $namaku);
	    $mail1->IsHTML(true);       
        $mail1->Subject = ''.$namaku.', Transfer PIN Activation';
        $mail1->msgHTML($isimail1);
        $mail1->send();	
	
if($hpku){
$isipesanku = "Hello ".$namaku.", You have transferred PIN Activation, To Username: ".$username.", Name: ".$nama.", Amount: ".$amount.".";
sendwa($hpku, $isipesanku, $apikeywoowa);	
}


$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>You have received PIN Activation.</p>
<p>
<strong>PIN Activation:</strong><br>
Amount : ".$amount."
</p>
<p>
<strong>From:</strong><br>
Username : ".$user_session."<br>
Name : ".$namaku."<br>
Email : ".$emailku."<br>
</p>

<p>
Transfer Date : ".$tgl."
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
	//	$mail2->IsSMTP(); // telling the class to use SMTP
        $mail2->Host       = $smtphost; // SMTP server
        $mail2->SMTPAuth   = true;                  // enable SMTP authentication
        $mail2->Host       = $smtphost; // sets the SMTP server
        $mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail2->Username   = $smtpuser; // SMTP account username
        $mail2->Password   = $smtpass;        // SMTP account password
        $mail2->setFrom($emailadmin, $bisnisname);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Transfer PIN Activation';
        $mail2->msgHTML($isimail2);
        $mail2->send();	



if($hp){
$isipesane = "Hello ".$nama.", You have received transfer PIN Activation, From Username: ".$user_session.", Name: ".$namaku.", Amount: ".$amount.".";
sendwa($hp, $isipesane, $apikeywoowa);	
}




header("location: index.php?go=ticket&page=transfer&result=success_transfer&k=$kode");
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
?>









<?php
} else if (isset($_GET['page']) && $_GET['page'] == "transfer") {
	?>
    
    
 <div class="row">
                <div class="col-md-4">
                
                   <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Transfer</h3>
            </div>
            <div class="box-body">        
             
                <?php  if($db->dataku("act", $user_session) == 0){ 
				 echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Your membership is not active, you can not use this facility.</div>";
				 $diss3b=" disabled='disabled'";
}else{
	$diss3b="";
}
				 
				
				
				if($transpine == 0){
				 echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Transfer PIN Activation not available.</div>";
}else{
				
				  ?>
               
               <?

$blnctikete = balance_ticket($user_session);
if(!$blnctikete){ 
$stss="<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>You don't have an PIN Activation balance!</div>";
$diss=" disabled='disabled'";
}else{
$stss="";
$diss="";
}
$initiale = substr(str_shuffle(str_repeat("ABCEFGHIJKLMNPRSTUVWXYZ", 36)), 6, 2);
$stkode = strtotime(date("Y-m-d H:i:s"));
$kodec = $initiale."".$stkode;
	 
?>	
<?php
 if(isset($_GET['result'])&&$_GET['result']=="disable"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Transfer PIN Activation not available</div>";
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
 if(isset($_GET['result'])&&$_GET['result']=="error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>PIN Activation Not Found.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="nobalance"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>You don't have an PIN Activation balance.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="nopackage"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>You don't have an PIN Activation balance amount ".$_GET['am'].".</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="maxtransfer"){
echo "<div class='alert alert-danger'>Max Transfer ".$_GET['max']." PIN Activation.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="errorx"){
echo "<div class='alert alert-danger'>Username to be transferred not found</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="inactive"){
echo "<div class='alert alert-danger'>Engine PIN tidak dapat ditransfer.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="trans"){
echo "<div class='alert alert-danger'>Engine PIN can not transfered because already transfered before.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="noamount"){
echo "<div class='alert alert-danger'>Transfer amount must be filled in!</div>";
}
?>
 		<?php
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div class='alert alert-danger'>Wrong Captcha!</div>";
}
?>	  
<?php
if(isset($_GET['result'])&&$_GET['result']=="success_transfer"){
echo "<div class='alert alert-success'>Transfer PIN Activation Success (Transaction code ".$_GET['k'].")</div>";
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
      var confirmed = confirm("Are you sure you want to transfer PIN Activation:" + "\n" + "Amount: £"+session_valuex+"\n" + "Transfer To: "+session_value);
      return confirmed;
}
</script>              

<form method="post" id="tab2" name="transfer" action="?go=ticket&page=trans_go">
											 <input type="hidden" id="kode" name="kode" value="<?php echo $kodec; ?>"/>


          <div class="controls-row">

            <label>PIN Activation Balance</label>
          
            <?php if($blnctikete > 0){ ?>
            <input type="text" class="form-control" value="<?php if($blnctikete > 0){ echo $blnctikete." PIN"; }else{ echo "Kosong"; }?>" disabled="disabled" style="background-color:#090; color:#FFF;">
            <?php }else{ ?>
<input type="text" class="form-control" value="<?php if($blnctikete > 0){ echo $blnctikete." PIN"; }else{ echo "Kosong"; }?>" disabled="disabled" style="background-color:#DF0000; color:#FFF;">
           <?php }?>
          </div>
        
          <div class="controls-row" style="margin-top:10px;">

            <label>Amount Transfer</label>

           <input name="amount" class="form-control" type="number" id="amount" onkeypress="return isNumberKey(event,this)" value="<?php echo $_SESSION['amounte']; ?>" placeholder="Amount Transfer" required='required' autocomplete="off"<?php echo $diss; ?><?php echo $diss3b; ?>>

          </div>
          
          
          
           <div class="controls-row" style="margin-top:10px;">

            <label>Username Recipient</label>


           <input name="tujuan" class="form-control" id="tujuan"  placeholder="Username Recipient" required='required' <?php echo $diss; ?><?php echo $diss3b; ?>>
           <div id="uname_response" style="margin-top:5px;"></div>
          </div>
          
          
         

           <div class="controls-row" style="margin-top:10px;">

            <label>Secure PIN</label>
           <input name="pincode" class="form-control" id="pincode" type="password" placeholder="Your Secure PIN" required='required' autocomplete="off" <?php echo $diss; ?><?php echo $diss3b; ?>>

          </div>

        
 <div>

           &nbsp;

          </div>
          <div>
        <button type='submit' class='btn btn-<?php echo $buttone; ?>' name="addbalance" <?php echo $diss; ?><?php echo $diss3b; ?> >Transfer</button> 

          </div>

        </form>
        <?php
		unset($_SESSION['username']);
unset($_SESSION['amounte']);
unset($_SESSION['pakete']);
}
		?>
  <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  
 <SCRIPT type="text/javascript">
  
  
 $(document).ready(function(){

   $("#tujuan").keyup(function(){

     var tujuan = $(this).val().trim();

     if(tujuan != ''){
		 
$("#uname_response").html('&nbsp;<img src="../images/load.gif" align="absmiddle">&nbsp;&nbsp;Checking Username...');

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
              
        
                </div></div>
                   <div class="row">
                   
                   
                   	
                   </div>
                </div><!--end .col-->
                
             <div class="col-md-8">
                  <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Transfer History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                                <thead class="bg-primary-600">
                                            <tr>
                          <th>Date</th>
                                    <th>PIN Activation</th>
                                    <th>Recipient</th>
                                    <th>Info</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                           
<?
$db->select("id, username, nama, kota, tujuan, nama_tujuan, kota_tujuan, kode, info, email, date", "ticket_transfer", "username='$user_session'", "date desc");
		while($row=$db->fetch_row()) {
			
			if($row[3] == 1) {
				$sts = "<span class='badge badge-success'>Active</span>";
			} else if($row[3] == 2) {
				$sts = "<span class='badge badge-warning'>Transfered</span>";
			} else if($row[3] == 0) {
				$sts = "<span class='badge badge-important'>Used</span>";
			} 	
			if(is_odd($nom) == 0) {
				$class = "even";
			} else {
				$class = "odd";
			} 		
		$user=$row[1];
		$namaspon = "SELECT * FROM member WHERE username='$user'"; 
        $resultnamaspon = mysql_query($namaspon);
$rownamaspon = mysql_fetch_array($resultnamaspon);
$namaspone = $rownamaspon['nama'];	
$tujuan=$row[4];
$namaspon2 = "SELECT * FROM member WHERE username='$tujuan'"; 
        $resultnamaspon2 = mysql_query($namaspon2);
$rownamaspon2 = mysql_fetch_array($resultnamaspon2);
$namaspone2 = $rownamaspon2['nama'];	


?>				
<tr class="<?php echo $class; ?>"> 
                            
                            <td align="center"><?php echo $row[10]; ?></td>
                            <td align="center"><?php echo $row[7]; ?></td>
                            <td align="center"><?php echo $row[4]; ?> (<?php echo $row[5]; ?>)</td>
                            <td align="center"><?php echo $row[8]; ?></td>
                        </tr>
                                                                    
             <?
	
	} 
	?>
                                                                                </tbody>
                                    </table>
                                    </div>
                                </div>
<input type=hidden id='clr' value='yellow'>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- End .panel -->        
   



  



















































<?php
} else if (isset($_GET['page']) && $_GET['page'] == "addpin") {
	?>
    
    
          <div class="row">
                <div class="col-md-4">
                
                   <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Buy PIN</h3>
            </div>
            <div class="box-body">        
               
               
               <?

$initiale = substr(str_shuffle(str_repeat("ABCEFGHIJKLMNPRSTUVWXYZ", 36)), 6, 2);
$stkode = strtotime(date("Y-m-d H:i:s"));
$kodec = $initiale."".$stkode;

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
 if(isset($_GET['result'])&&$_GET['result']=="no_order"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>This transaction has been processed before.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="pending"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>You still have a pending order PIN Activation.</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="nobalance"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Stockist yang anda pilih tidak dapat melayani pembelian anda karena balance PIN aktivasi tidak mencukupi.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="nopackage"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Stokist yang anda pilih tidak memiliki saldo balance PIN Aktivasi paket ".$_GET['pg'].".</div>";
}
?>
 		<?php
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div class='alert alert-danger'>Wrong Captcha!</div>";
}
?>	  
<?php
if(isset($_GET['result'])&&$_GET['result']=="success"){
echo "<div class='alert alert-success'>Order PIN Activation Successful (Transaction code ".$_GET['k'].")</div>";
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
		if(isNaN(q)) {q = 0;temp=0;}
		if(q<0) {q = 0;temp=0;}
		document.getElementById('amount').value = temp;
		document.getElementById('total').value = format_num(roundNumber(q*p,2));
	}

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
 
	//-->
	</script>
    
    
    
    <?php

	
	//$dscpinee=($diskonpinee/100)*$hargatiket;
	$hargatiketnye=$hargatiket;
	 $hargatiketnye=sprintf("%.2f",$hargatiketnye);
		
		?>
    
    
<form method="post" id="tab2" name="transfer" action="?go=ticket&page=add_go">
		<input type="hidden" id="kode" name="kode" value="<?php echo $kodec; ?>"/>


        
          
         
          <div class="controls-row">

            <label>Amount PIN Activation</label>

           <input name="amount" class="form-control" type="number" id="amount" onKeyUp='cekQ();'; onkeypress="return isNumberKey(event,this)" value="<?php echo $_SESSION['amounte']; ?>" placeholder="Amount" required='required' autocomplete="off"<?php echo $diss3b; ?>>

          </div> 
          
          <div class="controls-row" style="margin-top:10px;">

            <label>Price</label>
            
          
		<input type="hidden" id="price" name="price" value="<?php echo $hargatiketnye; ?>"/>
           <input name="" id="" class="form-control" value="<?php echo rupiah($hargatiketnye); ?>" readonly="readonly" style="background:#222;">

          </div>  
          
           <div class="controls-row" style="margin-top:10px;">

            <label>Total Payment</label>
           
           <input name="total" id="total" class="form-control" value="0" disabled="disabled" style="background:#222;">

          </div> 

           <div class="controls-row" style="margin-top:10px;">

            <label>Secure PIN</label>
 
           <input name="pincode" class="form-control" id="pincode" type="password" placeholder="PIN" required='required' autocomplete="off" <?php echo $diss3b; ?>>

          </div>

         
 <div>

           &nbsp;

          </div>
          <div>
        
        <button type='submit' class='btn btn-<?php echo $buttone; ?>' name="addbalance" <?php echo $diss3b; ?> >Submit</button> 

          </div>

        </form>
        <?php
		unset($_SESSION['username']);
unset($_SESSION['amounte']);
unset($_SESSION['pakete']);
		?>
        
        
                </div></div>
                   <div class="row">
                   
                   
                   	
                   </div>
                </div><!--end .col-->
               <div class="col-md-8">
                  <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Buy History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                                <thead class="bg-primary-600">
                                            <tr>
                         <th>Date</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Pay</th>
                                   
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                           
<?
$db->select("id, username, orderto, status, tgl, tglproses, info, amount, coed, paket, paketname, harga, bayar", "ticket_order", "username='$user_session'", "id desc");
		while($row=$db->fetch_row()) {
			
			if($row[3] == 1) {
				$sts = "<button class='btn btn-success btn-xs' style='color:#FFF;'><i class='fa fa-check'></i> Done</a>";
				$sts2 = "---";
			} else {
				$sts = "<button class='btn btn-danger btn-xs' style='color:#FFF;'><i class='fa fa-check'></i> Pending</a>";
				$sts2 = "<a href='#' class='tooltips' data-original-title='Click here to delete this order' onClick='return confirmActiondelco()'><img src='../images/err1.png' height='22' border='0'/></a>";
			} 	
			if(is_odd($nom) == 0) {
				$class = "even";
			} else {
				$class = "odd";
			} 		
	

?>	


<tr class="<?php echo $class; ?>"> 
                            
                            <td align="center"><?php echo $row[4]; ?></td>
                            <td align="center"><?php echo $row[7]; ?></td>
                            <td align="center"><?php echo rupiah($row[11]); ?></td>
                            <td align="center"><?php echo rupiah($row[12]); ?></td>
                            <td align="center"><?php echo $sts; ?></td>
                            <td align="center">
							 <?php if($row[3] == 1){ ?>
                              <a href="index.php?go=payment_ticket&sc=<?php echo $row[8]; ?>" class='btn btn-success btn-xs' style='font-size:11px; font-weight:bold;'><i class="fa fa-money"></i>&nbsp;&nbsp;Pay Now</a>
                         
                          <?php } else{ ?>
                          <a href="index.php?go=payment_ticket&sc=<?php echo $row[8]; ?>" class='btn btn-danger btn-xs' style='font-size:11px; font-weight:bold;'><i class="fa fa-money"></i>&nbsp;&nbsp;Pay Now</a>
                          <?php } ?> 
                            
                            </td>
                             
                        </tr>
                                                                    
             <?
	
	} 
	?>
                                                                                </tbody>
                                    </table>
                                    </div>
                                </div>
<input type=hidden id='clr' value='yellow'>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- End .panel -->     






<?php
}else if (isset($_GET['page']) && $_GET['page'] == "add_go") {


$kode = anti_injection($_POST['kode']);
$amount = anti_injection($_POST['amount']);	


	//$dscpinee=($diskonpinee/100)*$hargatiket;
	$hargatiketnye=$hargatiket;
	 $hargatikete=sprintf("%.2f",$hargatiketnye);
		




$pine = md5($_POST['pincode']);	

$query35 = "SELECT * FROM ticket_order WHERE coed='".mysql_real_escape_string($kode)."'"; 
$result35 = mysql_query($query35);
$ceks1 = mysql_num_rows($result35);
if($ceks1){ 
header("location: index.php?go=ticket&page=addpin&result=no_order");
	exit;
} else {
	
$query35v = "SELECT * FROM ticket_order WHERE username='".$user_session."' and status='0'"; 
$result35v = mysql_query($query35v);
$ceks1v = mysql_num_rows($result35v);
if($ceks1v){ 
header("location: index.php?go=ticket&page=addpin&result=pending");
	exit;
} else {	
	
	

$sqlc = mysql_query("SELECT * FROM pincode WHERE username='$user_session'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){
$pin = $rowc['pin'];
$tgl = formatgl($rowc['tgl']);
$status = $rowc['status'];
$lock = $rowc['locks'];
	}
	if(!$numc) {
	header("location: index.php?go=ticket&page=addpin&result=no_pin");
	exit;
	} else {
	if(!$pine || $pine <> $pin) {
	header("location: index.php?go=ticket&page=addpin&result=wrong_pin");
	exit;
	} else {
	
	if($lock == 1) {
	header("location: index.php?go=ticket&page=addpin&result=pin_lock");
	exit;
	} else {
	
	if($status == 0) {
	header("location: index.php?go=ticket&page=addpin&result=pin_off");
	exit;
	} else {

$nama = $db->dataku("nama", $user_session);
$email = $db->dataku("email", $user_session);	
$hp = $db->dataku("hp", $user_session);	



$namasto = $bisnisname;
$emailsto = $emailadmin;	
$hpsto = $hpadmin;	

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


$jumlahdeponed=($amount*$hargatikete);	
	 $jumlahdeponed=sprintf("%.0f",$jumlahdeponed);
$db->insert("ticket_order", "", "'', '$user_session', 'administrator', '0', '$clientdate', '', '', '$amount', '$kode', '', '', '$hargatikete', '$jumlahdeponed'"); 	

if($hp){
$isipesane = "Hello ".$nama." (".$user_session."), Your Order PIN Activation (".$kode.") Amount: ".$amount.", please login and makse payment.";
sendwa($hp, $isipesane, $apikeywoowa);	
		}	

$tgl = formatgl($clientdate);	
$jumlahdepone=rupiah($jumlahdeponed);

$isimail1="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$namasto.",</p>
<p>Ada yang order PIN Activatio.</p>

<p>
Username : ".$user_session."<br>
Nama : ".$nama."<br>
Phone : ".$hp."<br>
Email : ".$email."<br>
</p>
<p>
<strong>Order PIN:</strong><br>
Jumlah : ".$amount."
</p>
<p>
Tanggal Order : ".$tgl."
</p>
<p>
Price: ".rupiah($hargatikete)."<br>
Total Transfer: ".$jumlahdepone."<br>
Transfer ke:<br>".$bankadmins."<br>
</p>
<p>
lakukan follow up untuk transfer dan konfirmasi.
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail1 = new PHPMailer;
		$mail1->IsSMTP(); // telling the class to use SMTP
        $mail1->Host       = $smtphost; // SMTP server
        $mail1->SMTPAuth   = true;                  // enable SMTP authentication
        $mail1->Host       = $smtphost; // sets the SMTP server
        $mail1->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail1->Username   = $smtpuser; // SMTP account username
        $mail1->Password   = $smtpass;        // SMTP account password
        $mail1->setFrom($email, $nama);
        $mail1->addAddress($emailsto, $namasto);
	    $mail1->IsHTML(true);       
        $mail1->Subject = ''.$namasto.', Order PIN Activatio';
        $mail1->msgHTML($isimail1);
        $mail1->send();	
	




$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>Your Order PIN Activation.</p>
<p>
<strong>Amount PIN:</strong><br>
Amount : ".$amount."
</p>
<p>
<strong>Administrator Contact:</strong><br>
Name : ".$namasto."<br>
Phone : ".$hpsto."<br>
Email : ".$emailsto."<br>
</p>

<p>
Order Date : ".$tgl."
</p>
<p>
Price: ".rupiah($hargatikete)."<br>
Total Payment: ".$jumlahdepone."<br>
Transfer To:<br>".$bankadmins."<br>
</p>
<p>
do the transfer and confirm to administrator.
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
		$mail2->IsSMTP(); // telling the class to use SMTP
        $mail2->Host       = $smtphost; // SMTP server
        $mail2->SMTPAuth   = true;                  // enable SMTP authentication
        $mail2->Host       = $smtphost; // sets the SMTP server
        $mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail2->Username   = $smtpuser; // SMTP account username
        $mail2->Password   = $smtpass;        // SMTP account password
        $mail2->setFrom($emailsto, $namasto);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Order PIN Activation';
        $mail2->msgHTML($isimail2);
        $mail2->send();	




header("location: ./index.php?go=ticket&page=addpin&k=".$kode."&result=success");
	exit;

	}
	}
	}
	}
	}

}

?>













<?php
} else {
?>












<?php
 if(isset($_GET['result'])&&$_GET['result']=="no_order"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>This transaction already submit before.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="no_stockist"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Stockist Not Found.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="inactive"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Ticket can not transfered because already used.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="no_balance"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Your stockist balance is not sufficient to process your order!</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="success_buy"){
if(isset($_GET['co'])) { $kodene = base64_decode($_GET['co']); } 
echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Order ticket with code ".$kodene." has been sent.</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="success_send"){
echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["transsnt"]."</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="success_transfer"){
if(isset($_GET['co'])) { $kodene = base64_decode($_GET['co']); } 
echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Ticket ".$kodene." has been successfully transferred.</div>";
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
 if(isset($_GET['result'])&&$_GET['result']=="error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Ticket Not Found.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="errorx"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Username Not Found.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="max_order"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Max order ticket from this stockist only ".$_GET['sd']." ticket.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="inactive"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Ticket can not transfered because already used.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="trans"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Ticket can not transfered because already transfered before.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="is_stockist"){
echo "<div class='alert alert-info alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Your status is now a stockist.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="min_amount"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Min amount stockist buy ".MIN_STOCKIST." tickets.</div>";
}
?>
<?php
$cf="PIN Activation";
$usst=base64_encode($cf); 
?>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  alert("Copied...");
  $temp.remove();
}
</script>
   <div class="row">
            	<div class="col-md-12">
                
                  <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Balance [<?  $sldtiket = balance_ticket($user_session);
			 if($sldtiket > 0){ echo $sldtiket." PIN Activation"; }else{ echo "Empty";} ?>]</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">            
                
                                                <thead class="bg-primary-600">
                <tr>
                	
                    	 <th>Tanggal</th>
                                    <th>PIN</th>
                                    <th>Info</th>
                                    <th>Copy</th>
                                    <th>Status</th>
                    
                    
                </tr>
              </thead>
              <tbody>          
<?

	$db->select("id, username, ticket, status, tgl, info, amount, st, st2, coed, paket, paketname", "ticket", "username='$user_session'", "tgl desc");
	
		while($row=$db->fetch_row()) {
			
			if($row[3] == 1) {
				$sts = "<button class='btn btn-success btn-xs' type='button' >Active</button>";
				$style = "<font>";
			//	$btrans = "<a href='#' onclick=\"window.open('page.php?go=transferticket&co=".$row[2]."','popup','width=500,height=450,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=200,top=200')\" style='cursor:hand' class='btn btn-xs green'>Transfer</a>";
			//	$btrans = "<a href='index.php?go=ticket&page=transfer&co=".$row[2]."' class='btn btn-xs green'>Transfer</a>";
				$btrans = "<a class='btn btn-success btn-xs' href='page.php?go=transfer_ticket&co=".$row[2]."' data-target='#ajax' data-toggle='modal'><i class='fa fa-exchange'></i>&nbsp;Transfer</a>";
				
				?>
	<!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
							
<!-- BEGIN PAGE HEADER-->
				<?php
				if($row[7] == 1) {	
				$btrans2 = "<a class='btn btn-success btn-xs' data-target='#mailtiket' data-toggle='modal'>Resend</a>";
			}else{
				$btrans2 = "<a class='btn btn-success btn-xs' data-target='#mailtiket' data-toggle='modal'>Email</a>";
			}	
				
			if($row[8] == 1) {	
				$btrans3 = "<a class='btn btn-warning btn-xs' data-target='#smstiket' data-toggle='modal'>Resend</a>";
			}else{
			$btrans3 = "<a class='btn btn-warning btn-xs' data-target='#smstiket' data-toggle='modal'>Resend</a>";
			}	
				
				
			} else if($row[3] == 2) {
				$sts = "<button class='btn btn-warning btn-xs' type='button' >Transfered</button>";
				$style = "<font color='#FF9E3E'>";
				$btrans = "";
				$btrans2 = "";
				$btrans3 = "";
			} else if($row[3] == 0) {
				$sts = "<button class='btn btn-danger btn-xs' type='button' >Used</button>";
				$style = "<font color='#F00000'>";
				$btrans = "";
				$btrans2 = "";
				$btrans3 = "";
			} 		
		$user=$row[1];
		

?>
 
                             
                        <tr> 
                            
                            <td align="center"><?php echo $style; ?><?php echo $row[4]; ?></font></td>
                           
                            
                            <td align="center"><?php echo $style; ?><?php echo $row[2]; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $row[5]; ?></font></td>
                             <td align="center"><?php echo $style; ?>
                            <button class='btn btn-warning btn-xs' onclick="copyToClipboard('#p<?php echo $row[0]; ?>')" style="font-size:12px;">Copy</button>
                            </font></td>
                            <td align="center"><?php echo $style; ?><?php echo $sts; ?></font></td>
                            
                           
                        </tr>
                                                                    
             <?
		}
	?>
              </tbody>
            </table>
                  </div>
                    </div>
                </div>
			</div>
								</div>     
<? 
}

} ?> 

</section>
<?php ob_flush(); ?>
 