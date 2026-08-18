<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>



<div class="container-main-div  pb-5">
			


<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0">Secure </h5>
	</div>

</div>
<p class="mb-0"> Two Factor Setup</p> 	
<hr>

                 
<?php
 if($googleauntentic == 1){

if(isset($_POST['submit'])) {
  
  
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
	header("location: index.php?go=secure&result=no_pin");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=secure&result=wrong_pin");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=secure&result=pin_lock");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=secure&result=pin_off");
	exit;
} else {	
  
  
  $user = anti_injection($_POST['user']);	
  $nama=$db->dataku("nama", $user);	
  $email=$db->dataku("email", $user);	
  $hp=$db->dataku("hp", $user);	
  
  
$ipne = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ipne);
$browser = $_SERVER['HTTP_USER_AGENT'];
	$tgl = formatgl($clientdate);

  $code    = anti_injection($_POST['one_time_password']);
  $actdsb    = anti_injection($_POST['authgoogle']);
  $result  = $authenticator->verifyCode($secret,$code,$tolerance);
  if($result) {
    // Jika TRUE maka akan menampilkan pesan code valid
    // Code yang akan di eksekusi jika valid misalnya berhail login / apa gitu
	
	
	
	
	
	
	

	
	
	
	
	
	
	if($actdsb == 1){
	$db->update("member", "authgoogle='$actdsb'", "username='$user'");
	$jncvv="activated";
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>You have enabled 2FA Google Autenticator in your acces member area.<br>
IP Address: ".$ipne."<br>
Hostnamme: ".$hostaddress."<br>
Browser : ".$browser."<br>
Date : ".$tgl."<br><br>
If you do not do this, please login, reset your Password and PIN and contact administrator to reset your 2FA Google Autenticator.
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
		//$mail2->IsSMTP(); // telling the class to use SMTP
        $mail2->Host       = $smtphost; // SMTP server
        $mail2->SMTPAuth   = true;                  // enable SMTP authentication
        $mail2->Host       = $smtphost; // sets the SMTP server
        $mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail2->Username   = $smtpuser; // SMTP account username
        $mail2->Password   = $smtpass;        // SMTP account password
        $mail2->setFrom($emailadmin, $nama_bisnis);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Enabled 2FA Google Autenticator';
        $mail2->msgHTML($isimail2);
        $mail2->send();	
$isipesan = "Hello ".$nama." (".$user."), You have enabled 2FA Google Autenticator in your acces member area.";
sendwa($hp, $isipesan, $apikeywoowa);			
	
	}else{
	$db->update("member", "authgoogle='$actdsb', 2fa=''", "username='$user'");
	$jncvv="disabled";
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>You have disable 2FA Google Autenticator in your acces member area.<br>
IP Address: ".$ipne."<br>
Hostnamme: ".$hostaddress."<br>
Browser : ".$browser."<br>
Date : ".$tgl."<br><br>
If you do not do this, please login, reset your Password and PIN and contact administrator to reset your 2FA Google Autenticator.
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
		//$mail2->IsSMTP(); // telling the class to use SMTP
        $mail2->Host       = $smtphost; // SMTP server
        $mail2->SMTPAuth   = true;                  // enable SMTP authentication
        $mail2->Host       = $smtphost; // sets the SMTP server
        $mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail2->Username   = $smtpuser; // SMTP account username
        $mail2->Password   = $smtpass;        // SMTP account password
        $mail2->setFrom($emailadmin, $nama_bisnis);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Disable 2FA Google Autenticator';
        $mail2->msgHTML($isimail2);
        $mail2->send();	
$isipesan = "Hello ".$nama." (".$user."), You have disable 2FA Google Autenticator in your acces member area.";
sendwa($hp, $isipesan, $apikeywoowa);			
	
	
	}
	header("location: ?go=secure&result=success&s=$jncvv");
	exit;
	
    } else {
    // Jika FALSE maka menampilkan kode tidak valid
    // Code yang akan di eksekusi jika tidak valid, misal error / apa gitu
    header("location: ?go=secure&result=error");
	exit;
  }
}
	}
}
}
} else{
?>         
                 
                 
   <?php if($db->dataku("authgoogle", $user_session) == 0){ ?>
                           
                            <p>To setup two factor authentication you first need to download Google Authenticator:</p>
                            <p><i class="fa fa-android"></i>  <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Google Authenticator for Android (Play Store)</a></p>
                            <p><i class="fa fa-apple"></i>  <a href="https://itunes.apple.com/en/app/google-authenticator/id388497605?mt=8" target="_blank">Google Authenticator for iOS (Apple App Store)</a></p>
                            <p>Then scan the below barcode or, if you are not able to scan the barcode, you can enter the "Security Key" manually.</p>
                            <h4>Security Key: <span style="font-family:Courier;color:#007DE7;letter-spacing:2px;font-size:22px;"><?php if($db->dataku("authgoogle", $user_session) == 1){ echo " xxxxxxxxxx"; }else{ echo $secret; }?></span> <small><em>(Time Based Code)</em></small></h4>

                            <br>
                            <center>
                            <?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
                            <?php echo "<img src='../themes/img/hidden.png' width='200'></img>"; ?>
                            <?php } else { ?>
                            <?php echo "<img src='" . $QRCode . "'></img>"; ?>
                            <?php } ?>
                      
</center>
                            <br>

                            <p>Enter the 6 digit code generated by Google Authenticator in the 2FA Code box and switch "Enable Two-Factor" to On</p>
                            <p><span class="label label-danger">Important</span> Save this secret code for future reference</p>
                            <p><em>Note: No Google account is required to use Google Authenticator; skip any Google logins</em></p>
                            
                            
                             <?php } else { ?>
                            <div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Google Two factor authentication is Active</div>
                            
                             <?php } ?>              
                 
                 
                 
                 
                 
                                	
     <?php
 if(isset($_GET['result'])&&$_GET['result']=="success"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Two factor authentication has been successfully ".$_GET['s'].".</div>";
}
?>

 <?php
 if(isset($_GET['result'])&&$_GET['result']=="error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Incorrect 2FA Code! Please enter your google authenticator six-digit code!</div>";
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


<form method="POST" action="">
                   <input type="hidden" class="form-control" name="user" value="<?php echo $user_session; ?>">


<div class="div-card bg-2">	


	<label>Enable 2FA * </label>
        <select name="authgoogle" id="enable2fa" class="form-control" required='required'>
									<?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
                                     <option value='1' selected="selected">On</option>  
									 <option value='0'>Off</option> 
									<?php } else { ?>
                                    <option value='1'>On</option>  
									 <option value='0' selected="selected">Off</option> 
                                     <?php } ?>
                                    </select>

<label>2FA Code</label>
           <input type="text" class="form-control" placeholder="Enter 2FA" name="one_time_password">
    
	
    
    <?php if($usepins == 1){ ?>
     <label>Secure PIN</label>
           <input name="pincode" class="form-control" id="pincode" placeholder="Enter Your Secure PIN" type="password" required='required' autocomplete="off" style="background:#161616; border:none; margin-bottom:10px;">
   <?php } ?>

    
    
    
	 
	<button type="submit" name="deposit" class="btn btn-dark mt-2 form-control" ><i class="fa fa-save"></i>&nbsp; Update</button> 
	
	
</div>
</form>







<?php } ?>
<?php } ?>
 





</div>
</div>