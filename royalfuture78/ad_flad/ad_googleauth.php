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


if(isset($_POST['submit'])) {
  
  $user = anti_injection($_POST['user']);	
  $email = anti_injection($_POST['email']);
  $nama = anti_injection($_POST['nama']);
  $code    = anti_injection($_POST['one_time_password']);
  $actdsb    = anti_injection($_POST['authgoogle']);
  $result  = $authenticator->verifyCode($secret,$code,$tolerance);
  if($result) {
    // Jika TRUE maka akan menampilkan pesan code valid
    // Code yang akan di eksekusi jika valid misalnya berhail login / apa gitu
	
	
	if($actdsb == 1){
	$db->update("admin", "bank='$actdsb'", "userid='$user'");
	$jncvv="activated";
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>You have enabled 2FA Google Autenticator in your access admin area.
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
	
	}else{
	$db->update("admin", "bank='$actdsb', norek=''", "userid='$user'");
	$jncvv="disabled";
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>You have disable 2FA Google Autenticator in your access admin area.
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
	
	
	}
	
	
	
	header("location: ?go=googleauth&result=success&s=$jncvv");
	exit;
	
    } else {
    // Jika FALSE maka menampilkan kode tidak valid
    // Code yang akan di eksekusi jika tidak valid, misal error / apa gitu
    header("location: ?go=googleauth&result=error");
	exit;
  }

} else{
?>  
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> 2FA Google Authenticator For Admin</h2>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<br><div class='alert-box successs'><span>sukses: </span><br />Two factor authentication has been successfully ".$_GET['s'].".</div><br>";
}
?>
<?php
$results = $_GET['result'];
if($results == "error") { 
echo "<div class='alert-box errors'><span>error : </span>Incorrect 2FA Code! Please enter your google authenticator six-digit code!</div>";
}
?>

<p>To setup two factor authentication you first need to download Google Authenticator:</p>
                        <p><i class="fa fa-android"></i>  <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank" class="text-black">Google Authenticator for Android (Play Store)</a></p>
                        <p><i class="fa fa-apple"></i>  <a href="https://itunes.apple.com/en/app/google-authenticator/id388497605?mt=8" target="_blank" class="text-black">Google Authenticator for iOS (Apple App Store)</a></p>
                        <p>Then scan the below barcode or, if you are not able to scan the barcode, you can enter the "Security Key" manually.</p>
<div align="left">
 <h4>Security Key:<br /><span style="font-family:Courier;color:#B90000;letter-spacing:2px;font-size:22px;"><?php echo $secret; ?></span><br /><small class="text-black"><em>(Time Based Code)</em></small></h4>
<?php echo "<img src='" . $QRCode . "'></img>"; ?>
</div>
<form method="POST" action="" accept-charset="UTF-8">
                   <input type="hidden" class="form-control" name="user" value="<?php echo $valid_admin; ?>">
  <p>Status :
    <label>
      <?php if($db->datamin("bank", $valid_admin) == 1){ ?>
                                    <label class="radio-inline text-white"><input checked="checked" name="authgoogle" type="radio" value="1" id="enable2fa"> On</label>
                                    <label class="radio-inline text-white"><input name="authgoogle" type="radio" value="0" id="enable2fa"> Off</label>
                                    <?php } else { ?>
                                    <label class="radio-inline text-white"><input name="authgoogle" type="radio" value="1" id="enable2fa"> On</label>
                                    <label class="radio-inline text-white"><input checked="checked" name="authgoogle" type="radio" value="0" id="enable2fa"> Off</label>
                                    <?php } ?>
  </label>
  </p>
  <p>Enter 2FA Code
    <label>
    <input name="one_time_password" type="text">
  </label>
   </p>
    <label>
	<p>Enter the 6 digit code generated by Google Authenticator in the 2FA Code box and switch "Enable Two-Factor" to On</p>
    <label>
   
    <br />
    <label>
            <?php if($demomode == 1){ ?>
     <input type="button" onclick='return confirmActiondemomode()' name="submit" value="Submit" class="submit">
      <?php } else { ?>
     <input type="submit" name="submit" value="Submit" class="submit">
                                    <?php } ?>
  </label>
</form><p>&nbsp;</p>

<?php
}
?>