<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
 
		
<div class="container-main-div  pb-5">
			
<h5 class="mb-0" style="color:#666666;">Profile Settings</h5>
<p style="color:#666666;"> Please Enter Data Properly And Correctly</p> 
<hr>
<?php
if(isset($_GET['submitpro'])){
	
$usernya = $_POST['usernya'];	
$kodex = $_POST['kodex'];

$nama = anti_injection($_POST['nama']);
$alamat = anti_injection($_POST['alamat']);
$kota = anti_injection($_POST['kota']);
$negara = anti_injection($_POST['negara']);
$phone = anti_injection($_POST['phone']);
$email = anti_injection($_POST['email']);
$emails = anti_injection($_POST['emails']);
$hp = anti_injection($_POST['hp']);
$logmember = anti_injection($_POST['logmember']);
$btcaddress = anti_injection($_POST['btcaddress']);
$ltcaddress = anti_injection($_POST['ltcaddress']);
$ethaddress = anti_injection($_POST['ethaddress']);
$dogeaddress = anti_injection($_POST['dogeaddress']);
$bchaddress = anti_injection($_POST['bchaddress']);
$dashaddress = anti_injection($_POST['dashaddress']);
$usdtwallet = anti_injection($_POST['usdtwallet']);
$paypal = anti_injection($_POST['paypal']);
$skrill = anti_injection($_POST['skrill']);
$ovo = anti_injection($_POST['ovo']);
$dana = anti_injection($_POST['dana']);
$gopay = anti_injection($_POST['gopay']);
$whatsapp = anti_injection($_POST['whatsapp']);

$authgoogles=$db->dataku("authgoogle", $user_session);
$code    = anti_injection($_POST['one_time_password']);	  
$result  = $authenticator->verifyCode($secret,$code,$tolerance);
if($googleauntentic == 1 && $authgoogles == 1 && !$result){
header("location: index.php?go=profile&result=wrong_auth");
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
	header("location: index.php?go=profile&result=no_pin_pro");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=profile&result=wrong_pin_pro");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=profile&result=pin_lock_pro");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=profile&result=pin_off_pro");
	exit;
} else {	


$bank = $bchaddress." ".$dashaddress." ".$ethaddress;
$bnkcek = preg_replace('/\s+/','',$banks);


$target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if(!empty($_FILES['uploadfile']['name']) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG") {
   header("location: ?go=profile&result=type_error");
	exit;
  } else{
	
	
	$img = $_FILES['uploadfile'];
	$type = substr($img['name'], strrpos($img['name'], '.') + 1);
	if($img['size'] > 2000000) {
		header("location: ?go=profile&result=size_error");
	exit;
	} else {
			
	$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 24));
		if(!empty($_FILES['uploadfile']['name'])){
		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "iklan-".$usernya."_a";
		$new_file_name = str_replace($namex,'',$special);
		$name  = $new_file_name.'_'.$sess.'_'.$time;
		$thumbName		= $name.'.'.$type;
		}
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
		
		if(!empty($_FILES['uploadfile']['name']) && !$width || !empty($_FILES['uploadfile']['name']) && !$height) {
    header("location: ?go=profile&result=file_error");
	exit;
		}else{
		if($width > 1600) {
		 	$height = $height * (1600 / $width);
		 	$width = 1600;	
		}
		$thumbWidth = $width;
		$thumbHeight = $height;
		$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
		imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));
		if($type == "gif") {
			imagegif($newThumb, 'images/'.$thumbName);
		} else if($type == "png") {
			imagejpeg($newThumb, 'images/'.$thumbName);
		} else {
			imagejpeg($newThumb, 'images/'.$thumbName);
		}    
		imagedestroy($imgObj);
		imagedestroy($newThumb);
		
		$fotolama = $_POST['fotolama'];
		if(!empty($thumbName)){ 
		$foto = $thumbName; 
		unlink("images/$fotolama");
		}else{
		$foto = $fotolama; 
		}
	

	
	$db->update("member", "nama='$nama', alamat='".mysql_real_escape_string($alamat)."', kota='$kota', kodepos='$kodepos', hp='$hp', negara='$negara', email='$email', bank='".$bank."', bnkcek='$bnkcek', logmember='$logmember', btcaddress='$btcaddress', ltcaddress='$ltcaddress', ethaddress='$ethaddress', dogeaddress='$dogeaddress', bchaddress='$bchaddress', dashaddress='$dashaddress', paypal='$paypal', skrill='$skrill', ovo='$ovo', gopay='$gopay', dana='$dana', whatsapp='$whatsapp', usdtwallet='$usdtwallet', foto='$foto'", "username='$usernya'");

	
$tgl = formatgl($clientdate);


header("location: index.php?go=profile&result=success");
			exit;
			
	}}}}}	}}}
	
}else{
?>	            
            
       <?php
 if(isset($_GET['result'])&&$_GET['result']=="unlock"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Unlock field have been successful!</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="success"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Profil has been updated!</div>";
}
?>  
  <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_code"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>SMS code is wrong</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="no_pin_pro"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_NO_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_pin_pro"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_WRONG_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_lock_pro"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_BLOCK_PIN."</div>";
}
?>  
     <?php
$results = $_GET['result'];
if($results == "wrong_auth") { 
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You're enable two factor authentication at your account, Please enter your google authenticator six-digit code!</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_off_pro"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>".LANG_FORGOT_OFF_PIN."</div>";
}
?>                       
<?php
 if(isset($_GET['result'])&&$_GET['result']=="noupload"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Photo profile not updated!</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="size_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload max size only 1 MB</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="type_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload only file pdf, jpg, png, gif.</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload only file pdf, jpg, png, gif.</div>";
}
?>                                          
                        
 <?php
if(isset($_GET['usertake'])) { $usertake = $_GET['usertake']; } 
if($usertake){
	$sql_sp38c = mysql_query("select * from member where username='".mysql_real_escape_string($usertake)."'");
$ada_sp38c = mysql_num_rows($sql_sp38c);
if($ada_sp38c > 0){
	
	
	$sql_sp83 = mysql_query("select * from membertake where username='".$usertake."' and usergets='".$user_session."'");
$ada_sp83 = mysql_num_rows($sql_sp83);
if($ada_sp83 == 0){
	$myusere = $user_session;
	$ckudd="<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You do not have authority to access or view or edit profile user ".$usertake.".</div>";
	
} else {	
	$myusere = $usertake;
	$ckudd="";
}
	
	
}else{
	$myusere = $user_session;

}
}else{
	$myusere = $user_session;
}



?>

<?php echo $ckudd;?>
                       
                        

                                
                                
                                         
                   <form method="post" action="index.php?go=profile&submitpro" enctype="multipart/form-data"> 
                                            <input type="hidden" class="form-control" name="usernya" value="<?php echo $myusere; ?>">
<div class="div-card bg-2">	
	<label>Full Name </label>
	<input type="text" class="form-control" placeholder="Name" name="nama" required='required' value="<?php echo $db->dataku("nama", $myusere); ?>">
	
    
    <?php if($lockprofile == 1 && $db->dataku("email", $myusere)){ ?>
	<label>Email Address &nbsp;&nbsp;<i class='fa fa-lock' style="color:#F00;"></i></label>
       <input type="text" class="form-control" name="email" value="<?php echo $db->dataku("email", $myusere); ?>" readonly="readonly">
	   <?php } else { ?>
	<label>Email Address</label>
       <input type="text" class="form-control" placeholder="Email" name="email" required='required' value="<?php echo $db->dataku("email", $myusere); ?>">
	   <?php } ?>
    
    
    
	<?php if($lockprofile == 1 && $db->dataku("hp", $myusere)){ ?>
	<label>Phone Number &nbsp;&nbsp;<i class='fa fa-lock' style="color:#F00;"></i></label>
       <input type="text" class="form-control" name="hp" value="<?php echo $db->dataku("hp", $myusere); ?>" readonly="readonly">
    <?php } else { ?>
	<label>Phone Number</label>
     <input class="form-control" placeholder="Phone" oninput="value=value.replace(/[^\d]/g,'')" type="text" name="hp" value="<?php echo $db->dataku("hp", $myusere); ?>" >
    <?php } ?>
	
	<label>Profile Image </label>
    <?php  $adafoto = $db->dataku("foto", $myusere); ?>
	<input name="fotolama" type="hidden" value="<?php echo $adafoto;?>">
           <input name="uploadfile" id="uploadfile" type="file" class="form-control">
	
	
	<hr>
	<h6 class="m-0"> Withdraw </h6> 
	<p> Make sure the bank data is correct to expedite the withdrawal process </p> 
	
	<?php if($db->config("usdtwd") == 1){ ?>
	<?php if($lockprofile == 1 && $db->dataku("usdtwallet", $myusere)){ ?>
	<label>USDT BEP20 &nbsp;&nbsp;<i class='fa fa-lock' style="color:#F00;"></i></label>
	<input name="usdtwallet" required type="text" class="form-control"  value="<?php echo $db->dataku("usdtwallet", $myusere); ?>" readonly="readonly">
	<?php } else { ?>
	<label>USDT BEP20 </label>
	<input name="usdtwallet" required type="text" class="form-control"  value="<?php echo $db->dataku("usdtwallet", $myusere); ?>" placeholder="Enter USDT BEP20">
    <?php } ?>
    <?php } ?>
	
	<?php if($bankwd == 1){ ?>
	
	<?php if($lockprofile == 1 && $db->dataku("bchaddress", $myusere)){ ?>
	<label>Bank Type &nbsp;&nbsp;<i class='fa fa-lock' style="color:#F00;"></i></label>
	<input name="bchaddress" required type="text" class="form-control"  value="<?php echo $db->dataku("bchaddress", $myusere); ?>" readonly="readonly">
	<?php } else { ?>
	<label>Bank Type </label>
	<input name="bchaddress" required type="text" class="form-control"  value="<?php echo $db->dataku("bchaddress", $myusere); ?>" placeholder="Enter Bank Name">
    <?php } ?>
	
	<?php if($lockprofile == 1 && $db->dataku("dashaddress", $myusere)){ ?>
	<label>Account number &nbsp;&nbsp;<i class='fa fa-lock' style="color:#F00;"></i></label>
	<input name="dashaddress" required type="text" class="form-control"  value="<?php echo $db->dataku("dashaddress", $myusere); ?>" readonly="readonly">
	<?php } else { ?>
	<label>Account number </label>
	<input name="dashaddress" required type="text" class="form-control"  value="<?php echo $db->dataku("dashaddress", $myusere); ?>" placeholder="Account number">
    <?php } ?>
	
	<?php if($lockprofile == 1 && $db->dataku("ethaddress", $myusere)){ ?>
	<label>Account Owner Name &nbsp;&nbsp;<i class='fa fa-lock' style="color:#F00;"></i></label>
	<input name="ethaddress" required type="text" class="form-control"  value="<?php echo $db->dataku("ethaddress", $myusere); ?>"   placeholder="Account Owner Name ">
	<?php } else { ?>
	<label>Account Owner Name </label>
	<input name="ethaddress" required type="text" class="form-control"  value="<?php echo $db->dataku("ethaddress", $myusere); ?>"   placeholder="Account Owner Name ">
	 <?php } ?>
    <?php } ?>
    
    
      <?php if($logmembere == 1){ ?>    
	<hr>
       <label>Notification Login</label>
        
       <select name="logmember" class="form-control">
                             
                     <?php if($db->dataku("logmember", $myusere) == 1){ ?>        
                             <option value="0">Don't Send Me Email When Login</option>
                             <option value="1" selected="selected">Send Me Email When Login</option>
                             <?php } else { ?>  
                             <option value="0" selected="selected">Don't Send Me Email When Login</option>
                             <option value="1">Send Me Email When Login</option>
                             <?php } ?>

     </select>
       <?php } ?> 
    
    
    <hr>
    <?php if($usepins == 1){ ?>
     <label>Secure PIN</label>
           <input name="pincode" class="form-control" id="pincode" placeholder="Enter Your Secure PIN" type="password" required='required' autocomplete="off" style="background:#161616; border:none; margin-bottom:10px;">
   <?php } ?>

<?php if($db->dataku("authgoogle", $user_session) == 1){ ?>
     <label>2FA Code</label>
           <input type="text" class="form-control" placeholder="Hanya jika anda mengaktifkan 2FA" name="one_time_password">
    
   <?php } ?>
    
    
	<br />
    
    
		   <?php if($demomode == 1){ ?>
	<button class="btn btn-dark form-control" type="button" name="edit" onclick='return confirmActiondemomode()'><i class="la la-sign-in mr-1"></i>Update Profile</button>
	<?php } else { ?>
	<button class="btn btn-dark form-control" type="submit" name="edit"><i class="la la-sign-in mr-1"></i>Update Profile</button>
    <?php } ?>
	
</div>
</div>
</form>                          
                                         
        <?php } ?>    
 
</div>
</div>