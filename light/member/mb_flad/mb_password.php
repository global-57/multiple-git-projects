<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
 
		
<div class="container-main-div  pb-5">
			
<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0" style="color:#666666;">Settings Password </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
	<div class="btn-group btn-group-sm w-100"  style="height: 25px;"   role="group">
		<a class="btn btn-dark"  style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;"  href="index.php?go=password" ><i class="la la-lock mr-1"></i>Password</a>
		<a class="btn btn-primary"   style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;" href="index.php?go=securepin" ><i class="la la-lock mr-1"></i>Secure PIN</a>
	</div>
	</div>
</div>
<p class="mb-0" style="color:#666666;"> Please Enter Your New And Old Password Correctly  </p> 	
<hr>

<?php
 if (isset($_GET['page']) && $_GET['page'] == "submitpass") {		
	
$passwordx = $_POST['passwordx'];

	$passworde=md5($passwordx);
    $db->select("pass", "member", "pass='$passworde' and username='$user_session'");
    if ($db->num_rows() > 0) {
	
	
	$ipne = $_SERVER['REMOTE_ADDR'];
	
	$user = $user_session;
	$pass1 = anti_injection($_POST["password1"]);
	$pass2 = anti_injection($_POST["password2"]);


	if(!$pass1 || !$pass2){	
		header("location: index.php?go=password&page=pass&result=wrong_pass");
		exit;
		} else {
		if($pass1 <> $pass2)
			{
			header("location: index.php?go=password&page=pass&result=wrong_pass");
			exit;

		} else {	
	

			
$pswd=md5($pass1);
			$db->update("member", "pass='$pswd'", "username='$user_session'");
		$db->update("acc", "pass='$pass1'", "username='$user_session'");

$nama = $db->dataku("nama", $user_session);
		$email = $db->dataku("email", $user_session);
		$hp = $db->dataku("hp", $user_session);
		$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");
		$hostaddress = gethostbyaddr($_SERVER['REMOTE_ADDR']);



$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>You have modified Password at ".$bisnisname.".</p>

<p>
Date : ".$tgl."<br>
Host : ".$hostaddress."<br>
Ip Address : ".$ipne."<br>
</p>
<p>
If you do not feel like changing your Password
please login and update your Password
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
		if($smaile == 1){	
//$mail2->IsSMTP(); // telling the class to use SMTP
$mail2->Host       = $smtphost; // SMTP server
$mail2->SMTPAuth   = true;                  // enable SMTP authentication
$mail2->Host       = $smtphost; // sets the SMTP server
$mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail2->Username   = $smtpuser; // SMTP account username
$mail2->Password   = $smtpass;        // SMTP account password
}
        $mail2->setFrom($emailadmin, $nama_bisnis);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Your Password has changed';
        $mail2->msgHTML($isimail2);
        $mail2->send();	


//$isipesan = "Hello ".$nama." (".$user."), your new password: ".$pass1.".";
//sendwa($hp, $isipesan, $apikeywoowa);	

		
		header("location: index.php?go=password&page=pass&result=successpass");
			exit;

}	
	}
	} else {

	
	header("location: index.php?go=password&page=pass&result=wrong_passx");
	exit;

	}
 }else{

?>




<?php
 if(isset($_GET['result'])&&$_GET['result']=="successpass"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your password has been changed successfully</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_pass"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your new password is incorrect</div>";
}
?>

 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_passx"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your old password is incorrect</div>";
}
?>


<div class="div-card bg-2">	


                   <form action="index.php?go=password&page=submitpass" method="post">
                                            <input type="hidden" class="form-control" name="usernya" value="<?php echo $user_session; ?>">
	
	<label>New Password *</label>
     <input type="password" class="form-control" placeholder="New Password" name="password1" required='required' style="background:#161616; border:none; margin-bottom:10px;">
	
	<label>Re-Type New Password *</label>
    <input type="password" class="form-control" placeholder="Re-Enter New Password" name="password2" required='required' style="background:#161616; border:none;">
	<hr>
	
	<label>Confirm - Old Password *</label>
	<input type="password" class="form-control" placeholder="Current Password" name="passwordx" required='required' style="background:#161616; border:none;">
	
	<br />
	 
		   <?php if($demomode == 1){ ?>
	<button class="btn btn-dark form-control" type="button" name="login" onclick='return confirmActiondemomode()'><i class="la la-edit mr-1"></i>Update Now</button>
	<?php } else { ?>
	<button class="btn btn-dark form-control" type="submit" name="login"><i class="la la-edit mr-1"></i>Update Now</button>
<?php } ?>

</form>

			
			
<?php } ?>


</div>
</div>
</div>