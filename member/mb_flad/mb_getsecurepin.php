<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
 
		
<div class="container-main-div  pb-5">
			
<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0">Request Secure PIN </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
	<div class="btn-group btn-group-sm w-100"  style="height: 25px;"   role="group">
		<a class="btn btn-success"  style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;"  href="index.php?go=password" ><i class="la la-lock mr-1"></i>Password</a>
		<a class="btn btn-primary"   style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;" href="index.php?go=securepin" ><i class="la la-lock mr-1"></i>Update PIN</a>
	</div>
	</div>
</div>
<p class="mb-0"> Please choose where new secure pin will be sent  </p> 	
<hr>

<?php
if (isset($_GET['page']) && $_GET['page'] == "submitlost") {		
	
$username = $_POST['username'];		
$infokirim = $_POST['infokirim'];

$nama = $db->dataku("nama", $username);
$email = $db->dataku("email", $username);
$hp = $db->dataku("hp", $username);

 $random_password = substr(str_shuffle(str_repeat("12365478985823641257846982357418965", 24)), 0, 5);
    $db_password = md5($random_password);
    //$sql = "UPDATE member SET pass='$db_password' WHERE username='$username'";
	$db->update("pincode", "pin='$db_password'", "username='$username'");
			$db->update("acc", "pin='$random_password'", "username='$username'");
	//myquery($sql);
    $tgl = formatgl($clientdate);



if($infokirim == 0){	

$kirim = "Whatsapp ".$db->dataku("hp", $username);
$hp = $db->dataku("hp", $username);

$isipesan = "Helo ".$nama." (user: ".$username."), Your new Secure PIN : ".$random_password.".";
	//mysql_query("insert into outbox values('', '', '$username', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
	

if($db->config("themes") == 1){
sendsms($hp, $isipesan);
}else{
sendwa($hp, $isipesan, $apikeywoowa);
}	



}else{
$kirim = "Email ".$email;


$isimailexp="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$nama." (".$username."),</p>
<p>Your new Secure PIN,</p>
<p><strong>Username: ".$username."<br>
PIN: ".$random_password."<br>
Date: ".$tgl."<br>
</p>

<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3a = new PHPMailer;
		if($smaile == 1){	
//$mail3a->IsSMTP(); // telling the class to use SMTP
$mail3a->Host       = $smtphost; // SMTP server
$mail3a->SMTPAuth   = true;                  // enable SMTP authentication
$mail3a->Host       = $smtphost; // sets the SMTP server
$mail3a->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3a->Username   = $smtpuser; // SMTP account username
$mail3a->Password   = $smtpass;        // SMTP account password
}
        $mail3a->setFrom($emailadmin, $bisnisname);
        $mail3a->addAddress($email, $nama);
	    $mail3a->IsHTML(true);       
        $mail3a->Subject = ''.$nama.', New Secure PIN';
        $mail3a->msgHTML($isimailexp);
        $mail3a->send();

}
	
	header("location: index.php?go=profile&page=lost&result=success_pin&nm=".base64_encode($kirim)."");
	exit;

 }else{

?>


<?php
 if(isset($_GET['result'])&&$_GET['result']=="success_pin"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>New PIN has sent to your ".base64_decode($_GET['nm'])."</div>";
}
?>   



<div class="div-card bg-2">	


                   <form action="index.php?go=getsecurepin&page=submitlost" method="post">
                                            <input type="hidden" class="form-control" name="usernya" value="<?php echo $user_session; ?>">
	
	<label>Request To *</label>
     <select name="infokirim" id="infokirim" class="form-control">
            <?php if($db->dataku("hp", $user_session)){ ?>
              <option value="0" selected="selected"><?php echo $db->dataku("hp", $user_session); ?></option>
              <?php } ?>
            <?php if($db->dataku("email", $user_session)){ ?>
              <option value="1" ><?php echo $db->dataku("email", $user_session); ?></option>
              <?php } ?>
		  </select> 
	
	<hr />
	 <?php if($demomode == 1){ ?>
	<button class="btn btn-dark form-control" type="button" name="login" onclick='return confirmActiondemomode()'><i class="la la-edit mr-1"></i>Request Now</button>
	<?php } else { ?>
	<button class="btn btn-dark form-control" type="submit" name="login"><i class="la la-edit mr-1"></i>Request Now</button>
<?php } ?>
	
 
	

</form>

			
			
<?php } ?>


</div>
</div>
</div>