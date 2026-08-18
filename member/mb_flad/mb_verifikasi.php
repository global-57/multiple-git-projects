<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>



<div class="container-main-div  pb-5">
			


<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0">Know Your Customer (KYC) </h5>
	</div>

</div>
<p class="mb-0"> Please complete the verification form below and send it to get full access to your account</p> 	
<hr>

                 
<?php
$sqlcv = mysql_query("SELECT * FROM photoid WHERE username='$user_session'");
$numcv = mysql_num_rows($sqlcv);
$rowcaa = mysql_fetch_array($sqlcv);
if($numcv) {
$tglacc = $rowcaa["tglacc"];
if($tglacc){
	$tglaccne=formatgl($tglacc);
}else{
	$tglaccne="";
}

if($rowcaa["acc"]== 1){ ?>
        <div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'>Verified <?php echo $tglaccne;?></div>
          
   <?php } else {
	echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You have sent verification, please wait, we will process your verification as soon as possible.</div>";
   }
	?>      
        <?php } else{ ?>                
          
          
  <?php
if(isset($_POST['submitv'])){
	
$_SESSION["nama"] = anti_injection($_POST["nama"]);
$_SESSION["tglahir"] = anti_injection($_POST["tglahir"]);  
$_SESSION["alamat"] = anti_injection($_POST["alamat"]);  
$_SESSION["rtrw"] = anti_injection($_POST["rtrw"]);  
$_SESSION["kelurahan"] = anti_injection($_POST["kelurahan"]);  
$_SESSION["kecamatan"] = anti_injection($_POST["kecamatan"]);  
$_SESSION["agama"] = anti_injection($_POST["agama"]);  
$_SESSION["wnegara"] = anti_injection($_POST["wnegara"]);  
$_SESSION["status"] = anti_injection($_POST["status"]);  
$_SESSION["btc"] = anti_injection($_POST["btc"]);  
$_SESSION["bank"] = anti_injection($_POST["bank"]);  
$_SESSION["bank2"] = anti_injection($_POST["bank2"]);  
$_SESSION["bank3"] = anti_injection($_POST["bank3"]);  
	
	

$sqlcv = mysql_query("SELECT * FROM photoid WHERE username='$user_session'");
$numcv = mysql_num_rows($sqlcv);
if($numcv > 0){
	header("location: index.php?go=kyc&result=error");
	exit;
}else{	




$nama = anti_injection($_POST["nama"]);
$tglahir = anti_injection($_POST["tglahir"]);  
$alamat = anti_injection($_POST["alamat"]);  
$rtrw = anti_injection($_POST["rtrw"]);  
$kelurahan = anti_injection($_POST["kelurahan"]);  
$kecamatan = anti_injection($_POST["kecamatan"]);  
$agama = anti_injection($_POST["agama"]);  
$wnegara = anti_injection($_POST["wnegara"]);  
$status = anti_injection($_POST["status"]);  
$btc = anti_injection($_POST["btc"]);  
$bank = anti_injection($_POST["bank"]); 
$bank2 = anti_injection($_POST["bank2"]); 
$bank3 = anti_injection($_POST["bank3"]); 
$kode = anti_injection($_POST["kode"]); 
$email = anti_injection($_POST["email"]); 
$phone = anti_injection($_POST["phone"]); 

$banks=	$bank." ".$bank2." ".$bank3;

$smc2 = mysql_query("SELECT * FROM photoid WHERE kode='".$kode."'");
$cekode2 = mysql_num_rows($smc2);
if($cekode2) {
header("location: index.php?go=kyc&result=confirmed");
	exit;
}else{	






$target_dir = "../images/foto_id/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["uploadfile2"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);


if(!empty($_FILES['uploadfile']['name']) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG") {
   header("location: index.php?go=kyc&result=file1_error");
	exit;
  } else{

 if(!empty($_FILES['uploadfile2']['name']) && $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif" && $imageFileType2 != "PNG" && $imageFileType2 != "JPG") {
   header("location: index.php?go=kyc&result=file2_error");
	exit;
  } else{


$img = $_FILES['uploadfile'];
	$img2 = $_FILES['uploadfile2'];

$type = substr($img['name'], strrpos($img['name'], '.') + 1);
	$type2 = substr($img2['name'], strrpos($img2['name'], '.') + 1);

if($img['size'] > 1000000) {
    header("location: index.php?go=kyc&result=size1_error");
	exit;
		
	} else {

if($img2['size'] > 1000000) {
    header("location: index.php?go=kyc&result=size2_error");
	exit;
		
	} else {

$time = date("Ymd_His");
         $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 24));
      $sess2 = md5(substr(str_shuffle(str_repeat("3456789abcdeABCDEFGHIJKLMNOPqrstuQRSTUVWXYZ012fghijklmnopqrstuvwxyz", 64)), 0, 24));

if(!empty($_FILES['uploadfile']['name'])){
		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "ver_ktpkk_".$user_session."_a";
		$new_file_name = str_replace($namex,'',$special);
		$name  = $new_file_name.'_'.$sess.'_'.$time;
		$thumbName		= $name.'.'.$type;
		}
		if(!empty($_FILES['uploadfile2']['name'])){
		$namex2 = substr($img2['name'], 0, strrpos($img2['name'], '.'));	
		$special2 = "ver_fullbody_".$user_session."_b";
		$new_file_name2 = str_replace($namex2,'',$special2);
		$name2  = $new_file_name2.'_'.$sess2.'_'.$time;
		$thumbName2		= $name2.'.'.$type2;
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
		
		
		 if($type2 == "gif"){
			$imgObj2 = imagecreatefromgif($img2['tmp_name']);
		} else if($type2 == "png"){
			$imgObj2 = imagecreatefrompng($img2['tmp_name']);
		} else if($type2 == "jpeg"){
			$imgObj2 = imagecreatefromjpeg($img2['tmp_name']);
		} else if($type2 == "JPG"){
			$imgObj2 = imagecreatefromjpeg($img2['tmp_name']);
		} else if($type2 == "PNG"){
			$imgObj2 = imagecreatefrompng($img2['tmp_name']);
		} else {
			$imgObj2 = imagecreatefromjpeg($img2['tmp_name']);
		}

$width = imageSX($imgObj);
		$height = imageSY($imgObj);
		$width2 = imageSX($imgObj2);
		$height2 = imageSY($imgObj2);



		if(!empty($_FILES['uploadfile']['name']) && !$width || !empty($_FILES['uploadfile']['name']) && !$height) {
    header("location: index.php?go=kyc&result=file1_error2");
	exit;
		}else{
		if($width > 1000) {
		 	$height = $height * (1000 / $width);
		 	$width = 1000;	
		}
		
		
		if(!empty($_FILES['uploadfile2']['name']) && !$width2 || !empty($_FILES['uploadfile2']['name']) && !$height2) {
    header("location: index.php?go=kyc&result=file2_error2");
	exit;
		}else{
		if($width2 > 1000) {
		 	$height2 = $height2 * (1000 / $width2);
		 	$width2 = 1000;	
		}

$thumbWidth = $width;
		$thumbHeight = $height;
		$thumbWidth2 = $width2;
		$thumbHeight2 = $height2;

$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
		$newThumb2 = imagecreatetruecolor($thumbWidth2, $thumbHeight2);


imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));
		imagecopyresampled($newThumb2, $imgObj2, 0, 0, 0, 0, $thumbWidth2, $thumbHeight2, imageSX($imgObj2), imageSY($imgObj2));


if($type == "gif") {
			imagegif($newThumb, '../images/foto_id/'.$thumbName);
		} else if($type == "png") {
			imagejpeg($newThumb, '../images/foto_id/'.$thumbName);
		} else {
			imagejpeg($newThumb, '../images/foto_id/'.$thumbName);
		}       
		if($type2 == "gif") {
			imagegif($newThumb2, '../images/foto_id/'.$thumbName2);
		} else if($type2 == "png") {
			imagejpeg($newThumb2, '../images/foto_id/'.$thumbName2);
		} else {
			imagejpeg($newThumb2, '../images/foto_id/'.$thumbName2);
		}       
		
		
			imagedestroy($imgObj);
		imagedestroy($newThumb);
		imagedestroy($imgObj2);
		imagedestroy($newThumb2);
		
		
		
	
	
	
   $ip = $_SERVER['REMOTE_ADDR'];
	

$db->insert("photoid", "", "'', '$nama', '$tglahir', '$user_session', '$clientdate', '', '$alamat', '$rtrw', '$kelurahan', '$kecamatan', '$agama', '$wnegara', '$status', '$btc', '$banks', '$thumbName', '$thumbName2', '$acc', '$kode', '$phone', '$email'");	

	
	
	
	$tgl = formatgl($clientdate);
$waktu = date("H:i:s");
$namane = $nama;
$email = $db->dataku("email", $user_session);


$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Thank you for sending verification.</p>
<p>
Detail<br><br>
Username : ".$user_session."<br>
Name : ".$nama."<br>
Address : ".$alamat."<br>
</p>

<p>
Date : ".$tgl."<br><br>
You can download files that you send in attachments.
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
		$mail3->IsSMTP(); // telling the class to use SMTP
        $mail3->Host       = $smtphost; // SMTP server
        $mail3->SMTPAuth   = true;                  // enable SMTP authentication
        $mail3->Host       = $smtphost; // sets the SMTP server
        $mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail3->Username   = $smtpuser; // SMTP account username
        $mail3->Password   = $smtpass;        // SMTP account password
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Thank you for sending verification';
        $mail3->msgHTML($isimail);
		$mail3->AddAttachment('../images/foto_id/'.$thumbName);     // attachment
		$mail3->AddAttachment('../images/foto_id/'.$thumbName2);     // attachment
        $mail3->send();	



unset($_SESSION['nama']);
unset($_SESSION['tglahir']);
unset($_SESSION['alamat']);
unset($_SESSION['rtrw']);
unset($_SESSION['kelurahan']);
unset($_SESSION['kecamatan']);
unset($_SESSION['agama']);
unset($_SESSION['wnegara']);
unset($_SESSION['status']);
unset($_SESSION['btc']);
unset($_SESSION['bank']);

	
	header("location: index.php?go=kyc&result=success&co=$kode");
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
 if(isset($_GET['result'])&&$_GET['result']=="confirmed"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-success bg-success alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>This verification has been sent before!</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>You have sent verification before.</div>";
}
?> 
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="size1_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload Identity card file maximum size of 1MB</div>";
}
?> 
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="size2_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload full body photo maximum size of 1MB</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file1_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload Identity card only file jpg, png or gif.</div>";
}
?> 
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file2_error"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Upload full body photo only file jpg, png or gif.</div>";
}
?> 
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file1_error2"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Identity card photo is not valid.</div>";
}
?>              
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file2_error2"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Full body photo is not valid.</div>";
}
?> 
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="err"){
$mx = $_GET['mx'];
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>This confirmation has been sent before.</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="success"){
echo "<div style='color:white;border:0px; margin-top:20px;'  class='alert alert-danger bg-danger alert-dismissable'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Verification was sent successfully, (No ".$_GET['co'].") , please wait, we will process your verification as soon as possible.</div>";
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
$kodec = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);
?>                     
               
       
       
       
       
       
       
       
       
         
                     <form method="post" action="" enctype="multipart/form-data" onsubmit="return Validate(this);">
<?php
$codesms = substr(str_shuffle(str_repeat("121234567890123434567890567890011223344556677889900558877443365982541", 64)), 0, 7);
?><input type="hidden" id="kodex" name="kodex" value="<?php echo $codesms; ?>"/>
<input name="hp" id="hp" type="hidden" value="<?php echo $db->dataku("hp", $user_session); ?>" size="40"/> 
      <input name="kode" type="hidden" id="kode" value="<?php echo $kodec; ?>" readonly="readonly" />  


<div class="div-card bg-2">	


<label>Full Name</label>
 <input name="nama" type="text" class="form-control" id="nama" required='required' value="<?php echo $db->dataku("nama", $user_session); ?>" placeholder="Enter Your Name" readonly="readonly">
 
<div class="controls-row" style="margin-bottom:10px;">
  <label>Upload Identity Card</label><br />                              
 <input type="file" id="uploadfile" name="uploadfile" style="display:none; width:50px;" onchange="document.getElementById('filename').value=this.value" required='required' class="form-control">
 <div class="input-group">
<input type="text" id="filename" class="form-control" style="width:50%;" placeholder="Select File">
<span class="input-group-btn"><input type="button" value="Select File" onclick="document.getElementById('uploadfile').click()" class="btn btn-info">  
</span> </div>
</div>
<div class="controls-row" style="margin-bottom:20px;">
  <label>Upload Close Up Photo</label>  <br />                          
 <input type="file" id="uploadfile2" name="uploadfile2" style="display:none" onchange="document.getElementById('filename2').value=this.value" required='required' class="form-control">
 <div class="input-group">
<input type="text" id="filename2" class="form-control" style="width:50%;" placeholder="Select File">
<span class="input-group-btn"><input type="button" value="Select File" onclick="document.getElementById('uploadfile2').click()" class="btn btn-info">  
</span> </div>
</div>

    
    
    
	 
		   <?php if($demomode == 1){ ?>
	<button type="button" onclick='return confirmActiondemomode()'  name="submitv" class="btn btn-dark mt-2 form-control" ><i class="fa fa-envelope"></i>&nbsp; Send Verification</button> 
	<?php } else { ?>
	<button type="submit"  name="submitv" class="btn btn-dark mt-2 form-control" ><i class="fa fa-envelope"></i>&nbsp; Send Verification</button> 
	 <?php } ?>
	
</div>
</form>




 <br />    
<br />

<script type="text/javascript">
var _validFileExtensions = [".jpg", ".jpeg", ".gif", ".png"];

function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Maaf, " + sFileName + " <?php echo $LANG["fotoproinfo2d"]?> : " + _validFileExtensions.join(", "));
					window.location.reload();
                    return false;
                }
            }
        }
    }

    return true;
}
</script>	                 
                       
   <?php
   unset($_SESSION['nama']);
unset($_SESSION['tglahir']);
unset($_SESSION['alamat']);
unset($_SESSION['rtrw']);
unset($_SESSION['kelurahan']);
unset($_SESSION['kecamatan']);
unset($_SESSION['agama']);
unset($_SESSION['wnegara']);
unset($_SESSION['status']);
unset($_SESSION['btc']);
unset($_SESSION['bank']);
   ?>                    


<?php } ?>
<?php } ?>
 
<div class="div-card bg-2" align="center">	

<?php echo $scrnbt ?>
<br /><br />

</div>



</div>
</div>