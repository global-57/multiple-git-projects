<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
<?php
if (empty($_SESSION["valid_admin"])){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";
exit();}


?>
<?php
	/* 
	############################[  <about> ] #######################
		S Name   ::       Inv-X Primadesain
		Update   ::       2013 � Primadesain.Com
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
<script type="text/javascript">
<!--
function confirmation(mid, page, action) {
	var answer = confirm("Are You sure to " + action +  " this Member: " + mid + " ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=memberlist&page=" + page + "&mid=" + mid + "&action=" + action;
		
	}
	
}
//-->
</script>
<h1><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Member Manager</h1>
<?php
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
?>
<div align="center">
  <div class="form_style" style="width:70%" align="center">
    <form action="?go=memberlist&amp;page=submit" method="post" enctype="multipart/form-data">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="70%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EDEDE9" id="AutoNumber1" style="border-collapse: collapse">
        <tr class="tbl_header">
          <td width="100%" align="center"><?php
$act = $_GET['act'];
if($act == 1) { 
echo "<div class='alert-box successs'><span>Sukses : </span>Data member telah berhasil diupdate!</div>";
}
?>
              <?php
$results = $_GET['result'];
if($results == "success_dell") { 
echo "<div class='alert-box successs'><span>Sukses : </span>Data Rekening Pembayaran Member berhasil di hapus!</div>";
}
?>
<?php
             $query8 = "SELECT * FROM acc WHERE username='$mid'"; 
$result8 = mysql_query($query8);
$row8 = mysql_fetch_array($result8);
$passe= $row8['pass'];
$pinee= $row8['pin'];
?>
              <?php
$results = $_GET['result'];
if($results == "success_reset2fa") { 
echo "<div class='alert-box successs'><span>Sukses : </span>2FA berhasil di reset, selanjutnya member tersebut harus aktivasi ulang di member area!</div>";
}
?>
             
             </td>
        </tr>
        <tr>
          <td width="100%" style="border-style: none; border-width: medium"><div align="left">
            <table height="50" cellspacing="0" cellpadding="0" width="100%" border="0" style="border-collapse: collapse">
              <tbody>
                <tr class = "tblrow_genap">
                  <td colspan="2" height="30px"><strong>&nbsp;Data Register</strong></td>
                </tr>
                <tr class = "tblrow_genap">
                  <td>&nbsp;Tanggal Daftar </td>
                  <td>: <?php echo formatgl($db->dataku("tgl", $mid));
						  ?> </td>
                </tr>
                <tr class = "tblrow_genap">
                  <td>&nbsp;Tanggal Aktif </td>
                  <td>:
                    <?php
				   $tglex = $db->dataku("tglaktif", $mid);
	if($tglex == '0000-00-00 00:00:00') {
	echo "belum aktif";
	} else {
	echo formatgl($tglex);
	} 
	?>
                  </td>
                </tr>
                 <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr class = "tblrow_genap">
                  <td colspan="2" height="30px"><b>&nbsp;Data 
                    Keanggotaan</b></td>
                </tr>
                <tr>
                  <td width="43%" height="1">&nbsp;Username</td>
                  <td width="82%" height="1">: <b><input name="" type="" size="15" value="<?php echo $mid; ?>" disabled="disabled" style="background-color:#DDDDDD;"/>
                    <input name="username" id="username" value="<?php echo $mid; ?>" size="15" maxlength="30" type="hidden" />
                        <input name="edit" type="hidden" id="edit" value="<?php echo $_GET["edit"]; ?>" size="20" />
                        <input name="mid" type="hidden" id="mid" value="<?php echo $mid; ?>" size="20" />
                        </p></td>
                </tr>
				
                <tr>
                  <td width="43%">&nbsp;Password</td>
                  <td width="82%">:
                    <input name="password" type="text" size="15" maxlength="30" value="<?php echo $passe; ?>" />
                    &nbsp; </td>
                </tr>
                 <tr>
                  <td width="43%">&nbsp;PIN</td>
                  <td width="82%">:
                    <input name="pin" type="text" size="15" maxlength="30" value="<?php echo $pinee; ?>" />
                    &nbsp; </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" height="30px"><b>&nbsp;Data 
                    Pribadi</b></td>
                </tr>
                <tr class="row2">
                  <td width="43%" align="left" valign="top"><label class="control-label" for="nama">&nbsp;&nbsp;Full Name :</label></td>
                  <td width="82%" valign="top"><div class="control-group">
                    <div class="controls">
                      <input name="nama" id="nama" type="text" value="<?php echo $db->dataku("nama", $mid); ?>" size="30" />
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td valign="top" align="left"><label class="control-label" for="alamat">&nbsp;&nbsp;Address :</label></td>
                  <td valign="top"><div class="control-group">
                    <div class="controls">
                      <textarea name="alamat" cols="30"><?php echo $db->dataku("alamat", $mid); ?></textarea>
                    </div>
                  </div></td>
                </tr>
                <tr class="row2">
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;Handphone :</label></td>
                  <td valign="top"><div class="control-group">
                    <div class="controls">
                      <input name="hp" id="hp" type="text" value="<?php echo $db->dataku("hp", $mid); ?>" size="30"/>
                      </div>
                    </div></td>
                </tr>
                 <tr class="row2">
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;WhatsApp :</label></td>
                  <td valign="top"><div class="control-group">
                    <div class="controls">
                      <input name="whatsapp" id="whatsapp" type="text" value="<?php echo $db->dataku("whatsapp", $mid); ?>" size="30"/>
                      </div>
                    </div></td>
                </tr>
                <tr>
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;Email :</label></td>
                  <td valign="top"><div class="control-group">
                      <div class="controls">
                        <input name="email" id="email" type="text" value="<?php echo $db->dataku("email", $mid); ?>" size="30"/>
                      </div>
                  </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;Bank:</label></td>
                  <td valign="top"><div class="control-group">
                    <div class="controls">
                      <input name="bank" type="text" id="bank" value="<?php echo $db->dataku("bank", $mid); ?>" size="60" />
                      </div>
                    </div></td>
                </tr>
                <tr>
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;Bitcoin Address:</label></td>
                  <td valign="top"><div class="control-group">
                    <div class="controls">
                      <input name="btcaddress" type="text" id="btcaddress" value="<?php echo $db->dataku("btcaddress", $mid); ?>" size="60" />
                      </div>
                    </div></td>
                </tr>
                
                <tr>
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;USDT Wallet Address:</label></td>
                  <td valign="top"><div class="control-group">
                    <div class="controls">
                      <input name="usdtwallet" type="text" id="usdtwallet" value="<?php echo $db->dataku("usdtwallet", $mid); ?>" size="60" />
                      </div>
                    </div></td>
                </tr>
           
                
             
                <?
			$defaultse = $db->dataku("defaults", $mid);
			if($defaultse == 2) {
			?>
	<tr> 
      <td align="right">Setting Default :</td>
      <td colspan="5"> <input type="radio" name="defaults" value="2" id="RadioGroupa1dsd_0dec" checked="checked"/>
          Always Win
          <input type="radio" name="defaults" value="1" id="RadioGroupa1dsd_1dec"/>
        Always Lost
          <input type="radio" name="defaults" value="0" id="RadioGroupa1dsd_1dec"/>
        Normal
        
        </td>
    </tr>
    <tr> 
      <td align="right"></td>
      <td colspan="5">
        <i style="color:#F00;">Always WIN: semua member pasti WIN, Always LOST: semua member pasti LOST,  Normal: mengikuti system. </i>
        </td>
    </tr>
	<?
	} else if($defaultse == 1) {
	?>
    <tr> 
      <td align="right">Setting Default :</td>
      <td colspan="5"> <input type="radio" name="defaults" value="2" id="RadioGroupa1dsd_0dec"/>
          Always Win
          <input type="radio" name="defaults" value="1" id="RadioGroupa1dsd_1dec" checked="checked"/>
        Always Lost
          <input type="radio" name="defaults" value="0" id="RadioGroupa1dsd_1dec"/>
        Normal
        
        </td>
    </tr>
    <tr> 
      <td align="right"></td>
      <td colspan="5">
        <i style="color:#F00;">Always WIN: semua member pasti WIN, Always LOST: semua member pasti LOST,  Normal: mengikuti system. </i>
        </td>
    </tr>
	<?
	} else {
	?>
	
    <tr> 
      <td align="right">Setting Default :</td>
      <td colspan="5"> <input type="radio" name="defaults" value="2" id="RadioGroupa1dsd_0dec"/>
          Always Win
          <input type="radio" name="defaults" value="1" id="RadioGroupa1dsd_1dec"/>
        Always Lost
          <input type="radio" name="defaults" value="0" id="RadioGroupa1dsd_1dec" checked="checked"/>
        Normal
        
        </td>
    </tr>
        <tr> 
      <td align="right"></td>
      <td colspan="5">
        <i style="color:#F00;">Always WIN: semua member pasti WIN, Always LOST: semua member pasti LOST,  Normal: mengikuti system. </i>
        </td>
    </tr>
        
	<?
	}
	?>    
                
         
                <?
			$authgoogle = $db->dataku("authgoogle", $mid);
			if($authgoogle == 1) {
			?>
	<tr> 
      <td align="right">Google Authenticator :</td>
      <td colspan="5"> <input type="radio" name="authgoogle" value="1" id="RadioGroupa1dsd_0dec" checked="checked"/>
          Yes
          <input type="radio" name="authgoogle" value="0" id="RadioGroupa1dsd_1dec"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Google Authenticator :</td>
      <td colspan="5"> <input type="radio" name="authgoogle" value="1" id="RadioGroupa2dsd_0dec"/>
          Yes
          <input type="radio" name="authgoogle" value="0" id="RadioGroupa2dsd_1dec" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?> 
    <tr>
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;</label></td>
                  <td valign="top"><div class="control-group">
                      <div class="controls">
                    <?php if($db->dataku("2fa", $mid)){ ?>
					  <a href="?go=memberlist&amp;page=reset2fa&mid=<?php echo $mid; ?>&edit=1"><button class='primapc' type='button'>Reset 2FA Google Authentication</button></a>
                      <?php } else{ ?>
					  <a href="?go=memberlist&amp;page=reset2fa&mid=<?php echo $mid; ?>&edit=1"><button class='primapc2' type='button'>Reset 2FA Google Authentication</button></a>
                      <?php } ?>
                      </div>
                  </div></td>
                </tr>
     <?
			$logmembers = $db->dataku("logmember", $mid);
			if($logmembers == 1) {
			?>
	<tr> 
      <td align="right">Email Notifikasi Login :</td>
      <td colspan="5"> <input type="radio" name="logmembers" value="1" id="RadioGroupa1dsd_0decf" checked="checked"/>
          Yes
          <input type="radio" name="logmembers" value="0" id="RadioGroupa1dsd_1decf"/>
        No</td>
    </tr>
	<?
	} else {
	?>
	<tr> 
      <td align="right">Email Notifikasi Login :</td>
      <td colspan="5"> <input type="radio" name="logmembers" value="1" id="RadioGroupa2dsd_0decf"/>
          Yes
          <input type="radio" name="logmembers" value="0" id="RadioGroupa2dsd_1decf" checked="checked"/>
        No</td>
    </tr>
	<?
	}
	?>          

          
				 <tr>
                  <td valign="top" align="left"><label class="control-label" for="email">&nbsp;&nbsp;</label></td>
                  <td valign="top"><div class="control-group">
                      <div class="controls">
                    
					  <a href="?go=memberlist&amp;page=loginmember&mid=<?php echo $mid; ?>" target="_blank"><button class='primapc2' type='button'>Login Member Area</button></a>
                      </div>
                  </div></td>
                </tr>
				 <tr>
                  <td valign="top" align="left"><label class="control-label" for="email"></label></td>
                  <td valign="top"><div class="control-group">
                     </td>
                </tr>
                <tr>
                  <td width="43%" valign="top"><p align="left"> </p></td>
                  <style>
.imgFloatLeft	{ overflow:hidden; padding:5px; background:rgba(255,255,255,0.7); box-shadow:0 0 2px rgba(0,0,0,0.4); }
</style>
                  <td><label>
                    <?php $fotoku1 = $db->dataku("foto", $mid);

				  	$adafoto = $fotoku1;
	$dirfoto = "../member/images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../member/images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../member/images/$adafoto' class='imgFloatLeft' width='150'></a>";
		}
	else
		{
		$gambar = "<a href='../images/no_image.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/no_image.png' class='imgFloatLeft' width='150'></a>";
		} 	

				    ?>
                    <?php echo $gambar; ?><br />
                    <br />
                    <input name="uploadfile" type="file" class="form" id="uploadfile" />
                    </label>
                        <input name="fotone" type="hidden" class="form" id="fotone" value="<?php echo $fotoku1; ?>" size="12" /></td>
                </tr>
                <tr>
                  <td height="36" colspan="2" align="center">
                  <?php if($demomode == 1){ ?>
                  <input name="submit2" type="button" onclick='return confirmActiondemomode()' class="button"  value="SAVE" />
      <?php } else { ?>
                  <input name="submit2" type="submit" class="button"  value="SAVE" />
        <?php } ?>
                        <input type="button" name="cancel" id="cancel" value="CANCEL" onclick="javascript:history.go(-1)" class="button" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10" bgcolor="#FFFFFF">&nbsp;</td>
        <td><p>&nbsp;</p></td>
      </tr>
    </form>
  </div>
</div>
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
                    alert("Maaf, " + sFileName + " tidak di ijinkan di upload untuk foto profile, silahkan upload hanya file image : " + _validFileExtensions.join(", "));
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
} else if (isset($_GET['page']) && $_GET['page'] == "submit") {

$username = $_POST['username'];
$edit = $_POST['edit'];
$mid = $_POST['mid'];
$password = $_POST['password'];
$pin = $_POST['pin'];

$nama = anti_injection($_POST['nama']);
$alamat = anti_injection($_POST['alamat']);
$kota = anti_injection($_POST['kota']);
$hp = anti_injection($_POST['hp']);
$email = anti_injection($_POST['email']);
$emails = anti_injection($_POST['emails']);
$bank = anti_injection($_POST['bank']);
$fotone = $_POST['fotone'];
$edit = $_POST['edit'];
$btcaddress = anti_injection($_POST['btcaddress']);
$dogeaddress = anti_injection($_POST['dogeaddress']);
$ethaddress = anti_injection($_POST['ethaddress']);
$ltcaddress = anti_injection($_POST['ltcaddress']);
$bchaddress = anti_injection($_POST['bchaddress']);
$usdtwallet = anti_injection($_POST['usdtwallet']);
$perfectmoney = anti_injection($_POST['perfectmoney']);
$paypal = anti_injection($_POST['paypal']);
$skrill = anti_injection($_POST['skrill']);
$ovo = anti_injection($_POST['ovo']);
$dana = anti_injection($_POST['dana']);
$gopay = anti_injection($_POST['gopay']);
$whatsapp = anti_injection($_POST['whatsapp']);
$defaults = anti_injection($_POST['defaults']);

	
	
	$logmember = anti_injection($_POST['logmember']);
$authgoogle = anti_injection($_POST['authgoogle']);
	
	
// SET VARIABLE FOR STORING FILE

	$img = $_FILES['uploadfile'];

	

	// GET THE FILE TYPE.  THE TYPE IS IDENTIFIED BY GRABBING THE STRING AFTER THE LAST DOT (.)

	$type = substr($img['name'], strrpos($img['name'], '.') + 1);

	

	// IF IMAGE TYPE IS GIF / JPG AND SIZE LESS THAN 1MB

	if(($type == "gif" || $type == "jpg"  || $type == "jpeg"  || $type == "png" ) && $img['size'] < 3000000) {


		// INITIALISE VARIABLE WITH CURRENT TIME

		$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 16));
		

		// SET VARIABLE WITH NAME OF FILE BY GRABBING EVERYTHING BEFORE THE DOT (.)

		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = $mid."_up-by_admin";
		$new_file_name = str_replace($namex,'',$special);
		
		$name  = $new_file_name.'_'.$sess.'_'.$time;

		// CREATE THE UNIQUE FILENAMES FOR THE THUMBNAIL AND FULLSIZE USING THE TIMESTAMP SET ABOVE

	
		$thumbName		= $name.'.'.$type;

		

		// CREATE A PHP IMAGE OBJECT FROM THE UPLOADED FILE BASED ON IMAGE TYPE

		if($type == "gif")

			$imgObj = imagecreatefromgif($img['tmp_name']);

		else if($type == "png")

			$imgObj = imagecreatefrompng($img['tmp_name']);

		else

			$imgObj = imagecreatefromjpeg($img['tmp_name']);


		

		// GET THE WIDTH AND HEIGHT OF THE UPLOADED FILE

		$width = imageSX($imgObj);

		$height = imageSY($imgObj);

		

		// PROPORTIONAlLY RESIZE THE IMAGE IF WIDTH GREATER THAN 600 PIXELS

		if($width > 650) {

		 	$height = $height * (650 / $width);

		 	$width = 650;	

		}

		$thumbWidth = $width;
		$thumbHeight = $height;

		

		// CREATE THE NEW IMAGE OBJECTS

		$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);

		

		// COPY THE OLD IMAGE OBJECT ATTRIBUTES TO THE NEW ONES

		imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));

		

		// MOVE IMAGES TO RELEVANT DESTINATION BASED ON TYPE

		// CHANGE uploads/ PATH TO WHATEVER / WHEREVER YOUR FOLDER IS CALLED / LOCATED

		if($type == "gif") {

			imagegif($newThumb, '../member/images/'.$thumbName);

		} else if($type == "png") {

			imagejpeg($newThumb, '../member/images/'.$thumbName);

		} else {

			imagejpeg($newThumb, '../member/images/'.$thumbName);

		}                                        

		

		// DESTROY IMAGE OBJECTS TO SAVE SPACE ON THE SERVER

		imagedestroy($imgObj);


		imagedestroy($newThumb);

}

   $fotone = $_POST['fotone'];
		if(!empty($thumbName)){ 
		$foto = $thumbName; 
		}else{
		$foto = $fotone; 
		}
		
		if($edit > 0) {
			
			if(!empty($password)) {
				$pass = md5($password);
				$db->update("member", "nama='$nama', pass='$pass', alamat='$alamat', kota='$kota', hp='$hp', email='$email', bank='$bank', foto='$foto', logmember='$logmember', authgoogle='$authgoogle', btcaddress='$btcaddress', ltcaddress='$ltcaddress', ethaddress='$ethaddress', dogeaddress='$dogeaddress', bchaddress='$bchaddress', usdtwallet='$usdtwallet', perfectmoney='$perfectmoney', paypal='$paypal', skrill='$skrill', ovo='$ovo', gopay='$gopay', dana='$dana', whatsapp='$whatsapp', defaults='$defaults'", "username='$mid'");
	             $db->update("acc", "pass='$password'", "username='$mid'");
			} else{
				$db->update("member", "nama='$nama', alamat='$alamat', kota='$kota', hp='$hp', email='$email', bank='$bank', foto='$foto', logmember='$logmember', authgoogle='$authgoogle', btcaddress='$btcaddress', ltcaddress='$ltcaddress', ethaddress='$ethaddress', dogeaddress='$dogeaddress', bchaddress='$bchaddress', usdtwallet='$usdtwallet', perfectmoney='$perfectmoney', paypal='$paypal', skrill='$skrill', ovo='$ovo', gopay='$gopay', dana='$dana', whatsapp='$whatsapp', defaults='$defaults'", "username='$mid'");
			}	
	
	if(!empty($pin)) {
				$pine = md5($pin);
	$db->update("pincode", "pin='$pine'", "username='$mid'");
	$db->update("acc", "pin='$pin'", "username='$mid'");
	}
	
			 header("location: ?go=memberlist&page=addnew&act=1&mid=$mid&edit=1");
	exit;
		
			
	} 	
			
?>
<?	 

} else if (isset($_GET['page']) && $_GET['page'] == "logmember") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }

		$db->update("member", "logmember='$pub'", "username='$mid'");	
		header("location: ?go=memberlist");
?>	
<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "act2fa") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		
		if($pub == 0){
		$db->update("member", "authgoogle='$pub', 2fa=''", "username='$mid'");
		$nama=$db->dataku("nama", $mid);	
$email=$db->dataku("email", $mid);	
		
$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>

<p>We reset your 2FA Google Autenticator<br>
Please login member area and and reactivation.
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
        $mail2->setFrom($emailadmin, $nama_bisnis);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Reset 2FA Google Autenticator';
        $mail2->msgHTML($isimail2);
        $mail2->send();			
		}else{
		$db->update("member", "authgoogle='$pub'", "username='$mid'");	
		}
		header("location: ?go=memberlist");




} else if (isset($_GET['page']) && $_GET['page'] == "reset2fa") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
		
		$db->update("member", "2fa=''", "username='$mid'");
$nama=$db->dataku("nama", $mid);	
$email=$db->dataku("email", $mid);	
		
$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>

<p>We reset your 2FA Google Autenticator<br>
Please login member area and and reactivation.
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
        $mail2->setFrom($emailadmin, $nama_bisnis);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', Reset 2FA Google Autenticator';
        $mail2->msgHTML($isimail2);
        $mail2->send();			
		
		header("location: ?go=memberlist&page=addnew&edit=$edit&mid=$mid&result=success_reset2fa");
?>	
<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "resetbank") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
		
		$db->update("member", "bank=''", "username='$mid'");
		
		header("location: ?go=memberlist&page=addnew&edit=$edit&mid=$mid&result=success_dell");
exit;
?>	
<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "resethp") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
		
		$db->update("member", "hp='', email=''", "username='$mid'");
		
		header("location: ?go=memberlist&page=addnew&edit=$edit&mid=$mid&result=success_dell");
exit;
?>	
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "loginmember") {

if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	

$db->select("username, pass, nama, sponsor, email, status, blokir", "member", "username='".mysql_real_escape_string($mid)."'");
if ($db->num_rows() > 0)
  {
  // echo("Username Ada<br>");
  // echo "Proses Login Berhasil<br>";
   
   
   $ipne = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ipne);
$browser = $_SERVER['HTTP_USER_AGENT'];
$http_refer = $_SERVER['HTTP_REFERER'];
$time=time();
$time_check=$time-1800; //We Have Set Time 5 Minutes
$token = md5(md5(date("j, n, Y")).md5($session));

$sqlc="SELECT usermember FROM memberonline WHERE usermember = '".mysql_real_escape_string($mid)."'"; 
$dtc=mysql_query($sqlc) or die(mysql_error());
$numc = mysql_num_rows($dtc);

if(!empty($numc)){
mysql_query("UPDATE memberonline SET time='$time', sessionslog='$token', ip='$ipne', date='$browser' WHERE usermember='".mysql_real_escape_string($mid)."'") or die(mysql_error());
}else{
mysql_query("insert into memberonline values('','$session', '$token', '".mysql_real_escape_string($mid)."', '$ipne', '$time', '$browser')") or die(mysql_error());
}

$sblxx=mysql_query("select time from memberlog WHERE userid='".mysql_real_escape_string($mid)."' ORDER BY time DESC LIMIT 1") or die(mysql_error());
while($rows=mysql_fetch_row($sblxx)) {
$ida = $rows[0]+1;
}
mysql_query("insert into memberlog values('','$token', '".mysql_real_escape_string($mid)."', '$ipne', '$hostaddress', '$browser', '$clientdate', '', '$ida', 'none')") or die(mysql_error());

$sql4="DELETE FROM memberonline WHERE time<$time_check";
$result4=mysql_query($sql4) or die(mysql_error()); // after 5 minutes, session will be deleted

   
   
    session_start();
	session_regenerate_id(true);

	$_SESSION["user_session"] = $db->result(0, "username");
	$_SESSION["user_password"] = $db->result(0, "pass");
	$_SESSION["user_nama"] = $db->result(0, "nama");
	$_SESSION["user_email"] = $db->result(0, "email");
	$_SESSION["user_sponsor"] = $db->result(0, "sponsor");
	$_SESSION["user_blokir"] = $db->result(0, "blokir");
	$_SESSION["user_status"] = $db->result(0, "status");
	$_SESSION["user_log"] = $token;
	$_SESSION["ipne"] = $ipne;
	$_SESSION["browser"] = $_SERVER['HTTP_USER_AGENT'];
	$_SESSION["LAST_ACTIVITY"] = time();
	
	setcookie("user", $db->result(0, "username"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("pass", $db->result(0, "pass"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("sts", $db->result(0, "status"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("bkr", $db->result(0, "blokir"), strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("browser", $_SERVER['HTTP_USER_AGENT'], strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("userlog", $token, strtotime( '+1 days' ), "/", "", "", TRUE);
	setcookie("ipnya", $ipne, strtotime( '+1 days' ), "/", "", "", TRUE);
	
	
	
	header("Location: ../member/");
	}
	
?>
	<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "act") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		
		$db->update("member", "act='$pub'", "username='$mid'");
		
		header("location: ?go=memberlist");

?>
<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "deff") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		
		$db->update("member", "defaults='$pub'", "username='$mid'");
		
		header("location: ?go=memberlist");

?>
<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "accpt") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		
		$db->update("member", "accpt='$pub'", "username='$mid'");
		
		header("location: ?go=memberlist");

?>
<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "free") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		
		$db->update("member", "free='$pub'", "username='$mid'");
		
		header("location: ?go=memberlist");

?>
	<?	 
} else if (isset($_GET['page']) && $_GET['page'] == "sto") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		
		$db->update("member", "sto='$pub'", "username='$mid'");
		
		header("location: ?go=memberlist");

?>	
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
		//echo "delete no $no";
		
		$sqlcekdata = mysql_query("select username from upline where upline0='$mid'");    
			$ada_mmbree = mysql_num_rows($sqlcekdata);
			if ($ada_mmbree > 0) {
header("location: ?go=memberlist&act=5");
exit;
			}else{
				
		        $up1 = $db->dataupline("upline0", $mid);
				$pos1 = $db->dataupline("posisi", $mid);
		//	$db->update("upline", "".$pos1."=''", "username='$up1'");
		
		
		
			$db->delete("member", "username='$mid'");
				$db->delete("komisi", "username='$mid'");
				$db->delete("upline", "username='$mid'");
				$db->delete("deposit", "username='$mid'");
				$db->delete("dataewalet3", "username='$mid'");
				$db->delete("dataewalet", "username='$mid'");
				$db->delete("ewalet", "username='$mid'");
				$db->delete("pincode", "username='$mid'");
				$db->delete("acc", "username='$mid'");
			
			$mlv = $db->dataupline("level", $mid) - 1;
			
			for($i=0;$i<$mlv;$i++) {
				$sqlupdate = mysql_query("select upline$i from upline where username like '%$mid%'");
				$upli=mysql_fetch_row($sqlupdate);
				$newsp = $db->jumlahsp($upli[0]);
				$newdl = $db->jumlahdl($upli[0], "1");
				 $newkp = $db->bonuspasangan($upli[0], $dtgl); 
				$db->update("upline", "dl='$newdl', kp='$newkp', sp='$newsp'", "username='$upli[0]'");
				$db->updatejaringandelete($upli[0]);
			}	}
			
		header("location: ?go=memberlist");
?>

<?php
} else if (isset($_GET['page']) && $_GET['page'] == "activation") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
		
		if (isset($_GET['action']) && $_GET['action'] == "Disable") {
				
				$db->update("member", "status=0, tglaktif=''", "username='$mid'");
				
			 } else { 
			
$db->aktivasi($mid);	



		}
			
		header("location: ?go=memberlist");	
		?>

<?php
} else if (isset($_GET['page']) && $_GET['page'] == "blokir") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
		//echo "delete no $no";
		
		if (isset($_GET['action']) && $_GET['action'] == "Blocked") {
			$blocked = 1;
		} else {
			$blocked = 0;
		}		
		$db->update("member", "blokir='$blocked'", "username='$mid'");
		
		header("location: ?go=memberlist");
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "detilkomisi") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
	$db->select("username, nama, sponsor, email, kota, tglaktif", "member", "username='$mid'");
	
	?>
	<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr class="tbl_header">
        <td colspan="2" align="center" style="padding:0"><strong>DETAIL  KOMISI : 
        <?php echo $mid; ?>
        s/d tgl <?= date("d-m-Y"); ?></strong></td>
      </tr>
      <tr>
        <td width="4%" align="right">Nama Lengkap : </td>
        <td width="10%"><b><?php echo $db->dataku("nama", $mid); ?></b></td>
      </tr>
      <tr>
        <td align="right">Sponsor : </td>
        <td><?php echo $db->dataku("sponsor", $mid)." (".$db->dataku("nama", $db->dataku("sponsor", $mid)).")"; ?></td>
      </tr>
	   <tr>
        <td align="right">Tanggal Join : </td>
        <td><?php echo date('d-m-Y', strtotime($db->dataku("tgl", $mid))); ?></td>
      </tr>
      <tr>
        <td align="right">Tanggal Aktivasi : </td>
        <td>
		<?php  $tglex = $db->dataku("tglaktif", $mid); 
	if($tglex == '0000-00-00 00:00:00') {
	$tgx = "-";
	} else {
		$tgx = date('d-m-Y', strtotime($tglex));
	} 
	?>
		<?php echo $tgx; ?></td>
      </tr>
	   <tr>
        <td align="right">Total Investasi : </td>
        <td><?php
	$userex = $db->dataku("username", $mid);
	 $sblxx2=mysql_query("select SUM(jml) from deposit where username='$userex' and status='1'");
	
	while($row=mysql_fetch_row($sblxx2)) {
		$totalex2 = $row[0];
		if($totalex2 <=0) {
				$totaldepo = "<font color=red>belum deposit</font>";
			} else {
				$totaldepo = rupiah($totalex2);
			}		
		
		echo "<b>$totaldepo</b>";
		}
						  ?>		</td>
      </tr>
    </table><br />
<form action="" method="post" name="form1" id="form1">
      <table width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
          <td width="17%"><div align="right">Komisi Bulan&nbsp;:&nbsp;</div></td>
          <td width="83%">
            <? 
		$thn=substr($clientdate, 0, 4);
	    $bln=substr($clientdate, 5, 2);
	    $tgl=substr($clientdate, 8, 2);
        if(isset($_POST['bulan'])){ $bulan = $_POST['bulan']; }	
        if(isset($_POST['tahun'])){ $tahun = $_POST['tahun']; }	
		
		echo "<select name='bulan' class='form' style='width:120px;height:21px'>";
	$bulan0=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$jbln=count($bulan0);
	if($bulan =="") {
		$bulan2 = $bln;
	} else {
		$bulan2 = $bulan;
	}
	for($b=0;$b<$jbln;$b++) {
		if($bulan2-1 == $b) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
			if($b+1 < 10) {
			$k2=$b+1;
			$k="0$k2";
			} else {
			$k=$b+1;
			}
		echo "<option value='".$k."' $pil>$bulan0[$b]</option>";
	}
	echo "</select>";
	echo "&nbsp;&nbsp;Tahun&nbsp;:&nbsp;";
	echo "<select name='tahun' size=1 class='form' style='width:70px;height:21px'>";
	$jthn=25;
	for($t=14;$t<$jthn;$t++) {
		$thn2 = 2000 + $t;	
		if($tahun == $thn2) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
		echo "<option value='20$t' $pil>$thn2</option>";
	}
	echo "</select>&nbsp;&nbsp;";
	$tgaktif = $db->dataku("tglaktif", $mid); 
?>
<input type="submit" name="Submit2" value="LIHAT KOMISI" class="submitkecil" />
</td></tr></table></form>
<?php
if(isset($_POST['Submit2'])) {
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
}else{
$tahun=$_GET['tahun'];
$bulan=$_GET['bulan'];
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
}
?>
<p>&nbsp;</p>
  <link rel="stylesheet" type="text/css" href="../css/tabcontent.css" />
<script type="text/javascript" src="../js/tabcontent.js"></script>


<div id="pettabs" class="indentmenu" style="margin-left:100px;">
<ul >
<li><a href="#" rel="dog1" class="selected">BONUS SPONSOR</a></li>
<li><a href="#" rel="dog2">BONUS PASANGAN</a></li>
<li><a href="#" rel="dog3">BONUS MATCHING</a></li>
<li><a href="#" rel="dog4">PROFIT INVESTASI</a></li>
<li><a href="#" rel="dog5">RINGKASAN</a></li>
</ul>
<br style="clear: left" />
</div>

<div style="border:1px solid #CCCCCC; width:1000px; height: auto; padding: 5px; margin-left:100px;">

<div id="dog1" class="tabcontent">
<table width="99%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#E7E5D9">
     <tr bgcolor="#CCCCCC">
            <td colspan="6" align="left" style="line-height:200%">&nbsp;&nbsp;<strong>BONUS SPONSOR</strong></td>
    </tr>
      <tr>
        <td bgcolor="#E7E5D9"><table width="100%" height="105" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <td width="7%" height="38" align="center" bgcolor="#F2F1EC"><strong>No.</strong></td>
              <td width="21%" align="center" bgcolor="#F2F1EC"><strong>Tanggal</strong></td>
              <td width="16%" align="center" bgcolor="#F2F1EC"><strong>Dari</strong></td>
              <td width="37%" align="center" bgcolor="#F2F1EC"><strong>Nama</strong></td>
              <td width="19%" align="center" bgcolor="#F2F1EC"><strong>Bonus</strong></td>
            </tr>
            <?
	$sbl=mysql_query("select * from komisi where jenis='komsponsor' and username='$user_session' and (tglbayar between '$dtfrom' and '$dtto') order by tglbayar");
	$num = mysql_num_rows($sbl);
	if($num > 0) {
	$nom=1;
	$tot = 0;
	while($row=mysql_fetch_row($sbl)) {
		echo "<tr bgcolor=#FFFFFF>
          <td align=center>$nom.</td>
           <td align=center>".date("d-m-Y H:i",strtotime($row[3]))."</td>
          <td align=center>$row[7]</td>
          <td align=center>".$db->dataku("nama", $row[7])."</td>
          <td align=right>".rupiah($row[2])."&nbsp;&nbsp;</td>
        </tr>";
		$tot = $tot + $row[2];
		$nom++;
		}
	} else {
	?>
    	<tr bgcolor=#FFFFFF>
            <td colspan="5" align="center"><strong>Belum ada Bonus.</strong></td>
    </tr>
	<?
	}
	?>
            <tr>
              <td colspan="4" align="right" bgcolor="#E8E8E8">TOTAL BONUS&nbsp;&nbsp;</td>
              <td bgcolor="#E8E8E8" align="right"><strong>
                <?= rupiah($tot); ?>&nbsp;&nbsp;
              </strong></td>
            </tr>
        </table></td>
      </tr>
</table>

<p>&nbsp;</p>
</div>
<div id="dog2" class="tabcontent">
<table width="99%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#E7E5D9">
     <tr bgcolor="#CCCCCC">
            <td colspan="6" align="left" style="line-height:200%">&nbsp;&nbsp;<strong>BONUS PASANGAN</strong></td>
    </tr>
      <tr>
        <td bgcolor="#E7E5D9"><table width="100%" height="105" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <td width="7%" height="38" align="center" bgcolor="#F2F1EC"><strong>No.</strong></td>
              <td width="21%" align="center" bgcolor="#F2F1EC"><strong>Tanggal</strong></td>
              <td width="16%" align="center" bgcolor="#F2F1EC"><strong>Dari</strong></td>
              <td width="37%" align="center" bgcolor="#F2F1EC"><strong>Nama</strong></td>
              <td width="19%" align="center" bgcolor="#F2F1EC"><strong>Bonus</strong></td>
            </tr>
            <?
	$sbl=mysql_query("select * from komisi where jenis='matchingpro1' and username='$mid' and (tglbayar between '$dtfrom' and '$dtto') order by tglbayar");
	$num = mysql_num_rows($sbl);
	if($num > 0) {
	$nom=1;
	$totps = 0;
	while($row=mysql_fetch_row($sbl)) {
		echo "<tr bgcolor=#FFFFFF>
          <td align=center>$nom.</td>
           <td align=center>".date("d-m-Y H:i",strtotime($row[3]))."</td>
          <td align=center>$row[7]</td>
          <td align=center>".$db->dataku("nama", $row[7])."</td>
          <td align=right>".rupiah($row[2])."&nbsp;&nbsp;</td>
        </tr>";
		$totps = $totps + $row[2];
		$nom++;
		}
	} else {
	?>
    	<tr bgcolor=#FFFFFF>
            <td colspan="5" align="center"><strong>Belum ada Bonus.</strong></td>
    </tr>
	<?
	}
	?>
            <tr>
              <td colspan="4" align="right" bgcolor="#E8E8E8">TOTAL BONUS&nbsp;&nbsp;</td>
              <td bgcolor="#E8E8E8" align="right"><strong>
                <?= rupiah($totps); ?>&nbsp;&nbsp;
              </strong></td>
            </tr>
        </table></td>
      </tr>
</table>
 <p>&nbsp;</p>
 </div>
<div id="dog3" class="tabcontent">
    <table width="99%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#E7E5D9">
  <tr bgcolor="#CCCCCC">
            <td colspan="6" align="left" style="line-height:200%">&nbsp;&nbsp;<strong>BONUS MATCHING PROFIT</strong></td>
    </tr>
   <tr>
        <td bgcolor="#E7E5D9"><table width="100%" height="105" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <td width="5%" height="38" align="center" bgcolor="#F2F1EC"><strong>No.</strong></td>
              <td width="15%" align="center" bgcolor="#F2F1EC"><strong>Tanggal</strong></td>
              <td width="15%" align="center" bgcolor="#F2F1EC"><strong>Dari</strong></td>
              <td width="27%" align="center" bgcolor="#F2F1EC"><strong>Nama</strong></td>
              <td width="15%" align="center" bgcolor="#F2F1EC"><strong>Level</strong></td>
              <td width="23%" align="center" bgcolor="#F2F1EC"><strong>Bonus</strong></td>
            </tr>
            <?
	$sbl=mysql_query("select * from komisi where username='$mid' and (tglbayar between '$dtfrom' and '$dtto') order by tglbayar");
	$num = mysql_num_rows($sbl);
	if($num > 0) {
	$nom=1;
	$totlevel = 0;
	while($row=mysql_fetch_row($sbl)) {
	if(substr($row[6],0,11) == "matchingpro") {
		echo "<tr bgcolor=#FFFFFF>
          <td align=center>$nom.</td>
           <td align=center>".date("d-m-Y H:i",strtotime($row[3]))."</td>
          <td align=center>$row[7]</td>
          <td align=center>".$db->dataku("nama", $row[7])."</td>
          <td align=center>$row[6]</td>
          <td align=right>".rupiah($row[2])."&nbsp;&nbsp;</td>
        </tr>";
		$totlevel = $totlevel + $row[2];
		$nom++;
		}
		}
	} else {
	?>
    	<tr bgcolor=#FFFFFF>
            <td colspan="6" align="center"><strong>Belum ada Bonus.</strong></td>
    </tr>
	<?
	}
	?>
          <tr>
            <td colspan="5" align="right" bgcolor="#E8E8E8">TOTAL BONUS </td>
            <td bgcolor="#E8E8E8" align="right"><strong>
              <?= rupiah($totlevel); ?>
            </strong></td>
          </tr>
      </table></td>
    </tr>
  </table>
   <p>&nbsp;</p>
  </div>

<div id="dog4" class="tabcontent">
  <table width="99%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#E7E5D9">
  <tr bgcolor="#CCCCCC">
            <td colspan="4" align="left" style="line-height:200%">&nbsp;&nbsp;<strong>PROFIT INVESTASI</strong></td>
    </tr>
   <tr>
        <td bgcolor="#E7E5D9"><table width="100%" height="105" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <td width="16%" height="38" align="center" bgcolor="#F2F1EC"><strong>No.</strong></td>
              <td width="30%" align="center" bgcolor="#F2F1EC"><strong>Tanggal</strong></td>
              <td width="31%" align="center" bgcolor="#F2F1EC"><strong>Jenis</strong></td>
              <td width="23%" align="center" bgcolor="#F2F1EC"><strong>Bonus</strong></td>
            </tr>
            <?
	$sbl=mysql_query("select * from komisi where jenis='komshare' and username='$mid' and (tglbayar between '$dtfrom' and '$dtto') order by tglbayar");
	$num = mysql_num_rows($sbl);
	if($num > 0) {
	$nom=1;
	$totshare = 0;
	while($row=mysql_fetch_row($sbl)) {
		echo "<tr bgcolor=#FFFFFF>
          <td align=center>$nom.</td>
           <td align=center>".date("d-m-Y H:i",strtotime($row[3]))."</td>
          <td align=center></td>
          <td align=right>".rupiah($row[2])."&nbsp;&nbsp;</td>
        </tr>";
		$totshare = $totshare + $row[2];
		$nom++;
		}
	} else {
	?>
    	<tr bgcolor=#FFFFFF>
            <td colspan="4" align="center"><strong>Belum ada Bonus.</strong></td>
    </tr>
	<?
	}
	?>
          <tr>
            <td colspan="3" align="right" bgcolor="#E8E8E8">TOTAL BONUS </td>
            <td bgcolor="#E8E8E8" align="right"><strong>
              <?= rupiah($totshare); ?>
            </strong></td>
          </tr>
      </table></td>
    </tr>
  </table>

   <p>&nbsp;</p>
  </div>
  <div id="dog5" class="tabcontent">
 <table width="99%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#E7E5D9">
      <tr>
        <td bgcolor="#E7E5D9"><strong>RINGKASAN</strong></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="5%" align="center" bgcolor="#FFFFFF">1</td>
              <td width="67%" bgcolor="#FFFFFF">Bonus Sponsor</td>
              <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo rupiah($tot); ?>
              </td>
            </tr>
             <tr>
              <td width="5%" align="center" bgcolor="#FFFFFF">2</td>
              <td width="67%" bgcolor="#FFFFFF">Bonus Pasangan</td>
              <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo rupiah($totps); ?>
              </td>
            </tr>
             <tr>
              <td width="5%" align="center" bgcolor="#FFFFFF">3</td>
              <td width="67%" bgcolor="#FFFFFF">Bonus Matching</td>
              <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo rupiah($totlevel); ?>
              </td>
            </tr>
            <tr>
              <td width="5%" align="center" bgcolor="#FFFFFF">4</td>
              <td width="67%" bgcolor="#FFFFFF">Profit Investasi</td>
              <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo rupiah($totshare); ?>
              </td>
            </tr>
               
            <tr>
              <td colspan="2" align="right" bgcolor="#E8E8E8"><strong> TOTAL KOMISI</strong> </td>
              <td align="right" bgcolor="#E8E8E8"><strong>
            <?php
			//$totbln = $totblev + $bon_star + $broyalti + $unilevel;
			$saldo = $tot + $totshare + $totlevel + $totps;
			echo rupiah($saldo); 
			//----------total downlline--------
			?>
              </strong></td>
            </tr>
        </table></td>
      </tr>
    </table>

   <p>&nbsp;</p>
  </div>
</div>	
	
<script type="text/javascript">
var mypets=new ddtabcontent("pettabs")
mypets.setpersist(true)
mypets.setselectedClassTarget("link")
mypets.init()
</script>
 
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
} else if (isset($_GET['page']) && $_GET['page'] == "addmember") {?>
	<fieldset>
<legend>ADD NEW MEMBER </legend> 
 <?php
 if( isset($_POST['submit'])) {
 	$db->select("username", "member", "username='$sponsorid' and status=1");
	
	if($db->num_rows() > 0) {
 ?>
      <p>Sponsor Username : <strong><?= $sponsorid; ?></strong><br />
      Sponsor Name : <strong><?= $db->dataku("nama", $sponsorid); ?></strong></p>
      <p>Add New Member with this sponsor?</p>
      <p><a href="?go=join&amp;id=<?= $sponsorid; ?>&off=1">YES</a> | <a href="?go=memberlist&page=addmember">NO</a></p>
      
  <?php
  	} else {
	
		echo "<p align=center><b>There is no member with username: $sponsorid<b><br>Please try again!</p>";
	}
}		
	?>      
        
         <form name="form1" method="post" action="">
         <table width="100%" border="0" cellspacing="1" cellpadding="2">
          <tr>
            <td width="50%" align="right"><label>Enter username SPONSOR  :</label>            </td>
            <td width="50%"><input name="sponsorid" type="text" id="sponsorid" size="20" class="form"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="ADD NEW MEMBER" class="tombol"></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </form>
      <p>&nbsp;</p>

	</fieldset>
<?php
}
else if (isset($_GET['page']) && $_GET['page'] == "komisi") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	

	//---pagination----------------
$limit = '50'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '50'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);


if(isset($_POST["keywrd"])){ $keywrd = $_POST["keywrd"]; }	
if(!empty($keywrd)) {
	$where = " and a.nama like '%$keywrd%' or a.username like '%$keywrd%' and a.status=1";
} else {
	$where = "";
}		
//$db->select("*", "member", $kat);
	$numrows = $db->count_records("member", "status=1");	
	$db->select("a.username, a.nama, a.sponsor, a.email, a.kota, a.tglaktif, b.paket", "member as a inner join upline as b on a.username=b.username", "a.status=1 and a.paket=1 $where", "a.nama", "", "", "$start, $limit");

?>
<fieldset>
<legend>KOMISI MEMBER</legend>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="58%"><form action="?go=memberlist&amp;page=komisi" method="post" name="form1" id="form3">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="33%" align="right"><strong>Komisi  Bulan</strong> </td>
          <td width="67%">
          <? 
		$thn=substr($clientdate, 0, 4);
	    $bln=substr($clientdate, 5, 2);
	    $tgl=substr($clientdate, 8, 2);
       if(isset($_POST['bulan'])){ $bulan = $_POST['bulan']; }	
	   if(isset($_POST['tahun'])){ $tahun = $_POST['tahun']; }	
		echo "<select name='bulan' class='form' style='width:120px;height:21px'>";
	$bulan0=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$jbln=count($bulan0);
	if($bulan =="") {
		$bulan2 = $bln;
	} else {
		$bulan2 = $bulan;
	}
	for($b=0;$b<$jbln;$b++) {
		if($bulan2-1 == $b) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
			if($b+1 < 10) {
			$k2=$b+1;
			$k="0$k2";
			} else {
			$k=$b+1;
			}
		echo "<option value='".$k."' $pil>$bulan0[$b]</option>";
	}
	echo "</select>";
	echo "<select name='tahun' size=1 class='form' style='width:70px;height:21px'>";
	$jthn=25;
	for($t=13;$t<$jthn;$t++) {
		$thn2 = 2000 + $t;	
		if($tahun == $thn2) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
		echo "<option value='20$t' $pil>$thn2</option>";
	}
	echo "</select>";
?>
 <input type="submit" name="Submit3" value="LIHAT KOMISI" class="submitkecil"/>
</td>
        </tr>
      </table>
    </form>

	</td>
    <td width="42%" align="right"><form id="form4" name="form2" method="post" action="?go=memberlist&amp;page=komisi" style="margin:0; padding:0">
    Cari Member :
      <input name="keywrd" type="text" id="keywrd" />
      <input name="bulan" type="hidden" id="bulan" value="<?= $bulan; ?>" />
      <input name="tahun" type="hidden" id="tahun" value="<?= $tahun; ?>" />
      <input type="submit" name="Submit4" value="CARI" class="submitkecil"/>

                    </form></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
 
  <tr class="tbl_header">
    <td width="4%" align="center">#</td>
    <td width="18%" align="center">Username</td>
    <td width="21%" align="center">Bulan Lalu  </td>
    <td width="13%" align="center">Bulan Ini  </td>
    <td width="14%" align="center">Dibayarkan</td>
    <td width="12%" align="center">SALDO</td>
  </tr>
<?php
if(isset($_POST['Submit3'])) {
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
}else{
$tahun=$_GET['tahun'];
$bulan=$_GET['bulan'];
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
}
?>	
<?
$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1 + $start;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	$username = $db->result($i, "username");
	$nama = $db->result($i, "nama");
	$paket = $db->result($i, "paket");
	$bl0 = $bulan - 1;
	$jam = date("H:i:s");
	//$tgaktif = $db->result($i, "tglaktif"); 
	//$db->select("tglbayar", "komisi", "username='$user_session'", "tglbayar asc");
	$sql=mysql_query("select tglbayar from komisi where username='$username' order by tglbayar asc");
	$row=mysql_fetch_row($sql);	
	$dtto0 = "$tahun-$bl0-31 23:59:59";
	$dtfrom0 = "$tahun-$bl0-01 00:00:00";
	
	$totalbayar = $db->bayarkomisi($username, "AND (tglbayar BETWEEN '$dtfrom0' AND '$dtto')");
	//$totkom = $db->totalkomisi($username, "AND status=1 AND (tglbayar BETWEEN '$dtfrom' AND '$dtto')");
	if($totalbayar > 0) {
		$link_hi = "<a href='?go=withdrawl&mid=$username&bulan=$bulan&tahun=$tahun'>".rupiah($totalbayar)."</a>";
	} else {
		$link_hi = 0;
	}	
	
	
	//if($db->totalkomisi($username, "AND status=0 AND (tglbayar BETWEEN '$dtfrom' AND '$dtto')") > 0) {
	$totkom = $db->totalkomisi($username, "AND (tglbayar BETWEEN '$dtfrom' AND '$dtto')");	
		$totlalu = $db->totalkomisi($username, "AND (tglbayar BETWEEN '$dtfrom0' AND '$dtto0')");
		$totsaldo = $db->totalkomisi($username, "AND status=0 AND (tglbayar BETWEEN '$dtfrom0' AND '$dtto')") - $totalbayar;
	
	
	if($totsaldo > 0) {
		$link_bayar = "<a href='?go=withdrawl&page=proses&mid=$username&jumlah=$totsaldo&w=0'>".rupiah($totsaldo)."</a>";
	} else {
		$link_bayar = 0;
	}		
?>
 
  <tr class="<?= $class; ?>">
    <td width="4%"><?= $nom; ?> </td>
    <td width="18%"><a href="?go=memberlist&page=detilkomisi&mid=<?= $username; ?>&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>"><?= $username; ?></a></td>
    <td align="right"><?= rupiah($totlalu); ?></td>
    <td align="right"><?= rupiah($totkom); ?></td>
    <td align="right"><?= $link_hi; ?></td>
    <td align="right"><?= $link_bayar; ?></td>
  </tr>
  
<?
	//}
	}
?>	  
</table>
</fieldset>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
     <?php

//}
//

$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?m=member&page=komisi&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?m=member&page=komisi&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>&show=<?= $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
  <?php

}

if ($numrows != $limit) {
	
	if ($scroll == 1) {
	
		if ($paging > $scrollnumber) {
			
			$first = $display;
			
			$last = ($scrollnumber - 1) + $display;
			
		}
	
	} else {
	
		$first = 1;
			
		$last = $paging;
			
	}
	
	if ($last > $paging ) {
			
		$first = $paging - ($scrollnumber - 1);
			
		$last = $paging;
			
	}
	
	for ($i = $first;$i <= $last;$i++){
		
		if ($display == $i) {
			
?>
[ <b>
<?= $i ?>
</b> ]
<?php
			
		} else {
			
?>
[ <a href="?m=member&page=komisi&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>&show=<?= $i; ?>" style="font-size:10px; color:#0000CC">
<?= $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?m=member&page=komisi&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>&show=<?= $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?m=member&page=komisi&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>&show=<?= $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>

<?php
} else {
?>	
<?php
$act = $_GET['act'];
if($act == 5) { 
echo "<div class='alert-box errors'><span>Error : </span>Member tidak bisa dihapus karena ada downline!</div>";
}
?>


<?
//---pagination----------------
$limit = '50'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '50'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);


//if($uidm == 001) {

//$db->select("*", "member", $kat);
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }
if (isset($_POST["Submit"]) && $_POST["Submit"] == "CARI") {
$keywrd = $_POST["keywrd"];
	$filter = "nama like '%$keywrd%' or username like '%$keywrd%'";
	$where = "nama like '%$keywrd%' or username like '%$keywrd%'";
} else {
	
	$filter = "status=$kat";
	$where = "status=$kat";
}
//---
if(isset($_GET["kat"]) > 0 or (!isset($_GET["kat"]))) {
	$order = "id desc";
} else {
	$order = "id desc";
}		
if(isset($_GET["kat"]) == "") {
	$numrows = $db->count_records("member", "");
	$db->select("id, username, nama, sponsor, email, kota, adminrp, tgl, tglaktif, status, blokir, harga, sto, act, defaults, accpt, authgoogle, 2fa, logmember, free", "member", "", $order, "", "", "$start, $limit");

	
} else {
	$numrows = $db->count_records("member", "status=$kat");	
	$db->select("id, username, nama, sponsor, email, kota, adminrp, tgl, tglaktif, status, blokir, harga, sto, act, defaults, accpt, authgoogle, 2fa, logmember, free", "member", $where, $order, "", "", "$start, $limit");
}

$sel = "selected";
$thn=substr($clientdate, 0, 4);
	    $bln=substr($clientdate, 5, 2);
	    $tgl=substr($clientdate, 8, 2);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="15" align="center" style="padding:0"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:0; margin:0">
      <tr>
        <td><form action="" method="post" name="form1" id="form1" style="margin:0; padding:0">
          Katagori Member :
           <select name="select" onchange="location =  this.options[this.selectedIndex].value" class="form">
            <option value="?go=memberlist" selected="selected" <? echo $pilih; ?>>Semua Member</option>
            <option value="?go=memberlist&amp;kat=0&amp;sel2=<?= $sel; ?>" <? echo $_GET['sel2']; ?>>Free Member</option>
            <option value="?go=memberlist&amp;kat=1&amp;sel3=<?= $sel; ?>" <? echo $_GET['sel3']; ?>>Active Member</option>
            </select>
          &nbsp;&nbsp;
          Total: <b>
            <?php echo $numrows; ?>
            </b> orang
        </form></td>
        <td><form id="form2" name="form2" method="post" action="?go=memberlist&amp;kat=1" style="margin:0; padding:0">
          Cari Member :
            <input name="keywrd" type="text" id="keywrd" />
            <input type="submit" name="Submit" value="CARI" class="submitkecil" />
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr class="tbl_header">
    <td width="6%" align="center">#</td>
    <td width="16%" align="center">Username</td>
    <td width="24%" align="center">Nama Lengkap</td>
    <td width="20%" align="center">Email</td>
    <td width="5%" align="center">Network </td>
	<td width="12%" align="center">Tgl Join </td>
    <td width="12%" align="center">Tgl Aktif </td>
    <td width="5%" align="center">Status</td>
    <td width="5%" align="center">Trading</td>
    <td width="5%" align="center">Default</td>
    <td width="2%" align="center">KYC </td>
    <td width="2%" align="center">2FA</td>
    <td width="2%" align="center">LG</td>
    <td width="2%" align="center">A</td>
	<td width="2%" align="center">B</td>
    <td width="2%" align="center">D</td>
    <td width="2%" align="center">#</td>

    <td width="2%" align="center">#</td>
  </tr>
  <?


$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1 + $start;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 
		
	if($db->result($i, "status") > 0) {
		$aktif = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'activation', 'Disable')\" style='cursor:hand'><img src='images/icon-16-checkin.png' title='Change to Disable' border=0 /></a>";
	} else {
		$aktif = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'activation', 'Activated')\" style='cursor:hand'><img src='images/publish_x.png' title='Change to Active Member' border=0 /></a>";
	}
	if($db->result($i, "blokir") > 0) {
		$blokir = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'blokir', 'UnBlocked')\" style='cursor:hand'><img src='images/icon-16-checkin.png' title='Change to Enable/UnBlocked' border=0 /></a>";
	} else {
		$blokir = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'blokir', 'Blocked')\" style='cursor:hand'><img src='images/publish_x.png' title='Click here to Blocked this Member' border=0 /></a>";
	}
$userw = $db->result($i, "username");
if($db->result($i, "sto") == 0) {
		$imgw = "<a href='index.php?go=memberlist&page=sto&pub=1&mid=$userw' ><button class='primapc2' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Click for show')\" onMouseout='hideddrivetip()' onclick='return ray.ajax()'>Hidden</button></a>";
	} else {
		$imgw = "<a href='index.php?go=memberlist&page=sto&pub=0&mid=$userw' ><button class='primapc' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Click for hidden')\" onMouseout='hideddrivetip()' onclick='return ray.ajax()'>Show</button></a>";
	}
if($db->result($i, "act") == 0) {
		$imgwx = "<a href='index.php?go=memberlist&page=act&pub=1&mid=$userw' ><button class='primapc2' onMouseover=\"ddrivetip('Click for activated')\" onMouseout='hideddrivetip()' onclick='return ray.ajax()'>Disable</button></a>";
	} else {
		$imgwx = "<a href='index.php?go=memberlist&page=act&pub=0&mid=$userw' ><button class='primapc' onMouseover=\"ddrivetip('Click for disable')\" onMouseout='hideddrivetip()' onclick='return ray.ajax()'>Active</button></a>";
	}	
	
	if($db->result($i, "logmember") == 0) {
		$imglg = "<a href='index.php?go=memberlist&page=logmember&pub=1&mid=$userw' ><img src='images/publish_x.png' title='Klik untuk aktifkan email notifikasi login' border=0 /></a>";
	} else {
		$imglg = "<a href='index.php?go=memberlist&page=logmember&pub=0&mid=$userw' ><img src='images/icon-16-checkin.png' title='Klik untuk disable email notifikasi login' border=0 /></a>";
	}
	
if($db->result($i, "authgoogle") == 0) {
		$imggg = "<a href='index.php?go=memberlist&page=act2fa&pub=1&mid=$userw' ><img src='images/publish_x.png' title='Klik untuk aktifkan 2FA Google authenticator' border=0 /></a>";
	} else {
		$imggg = "<a href='index.php?go=memberlist&page=act2fa&pub=0&mid=$userw' ><img src='images/icon-16-checkin.png' title='Klik untuk disable 2FA Google authenticator' border=0 /></a>";
	}	
	
	if($db->result($i, "accpt") == 0) {
		$imgggz = "<a href='index.php?go=memberlist&page=accpt&pub=1&mid=$userw' ><img src='images/publish_x.png' title='Klik untuk terverifikasi' border=0 /></a>";
	} else {
		$imgggz = "<a href='index.php?go=memberlist&page=accpt&pub=0&mid=$userw' ><img src='images/icon-16-checkin.png' title='Klik untuk belum terverifikasi' border=0 /></a>";
	}	
	
if($db->result($i, "free") == 1) {
		$imgwxtd = "<a href='index.php?go=memberlist&page=free&pub=0&mid=$userw' ><button class='primapc2' onMouseover=\"ddrivetip('Click for activated')\" onMouseout='hideddrivetip()' onclick='return ray.ajax()'>Free</button></a>";
	} else {
		$imgwxtd = "<a href='index.php?go=memberlist&page=free&pub=1&mid=$userw' ><button class='primapc' onMouseover=\"ddrivetip('Click for disable')\" onMouseout='hideddrivetip()' onclick='return ray.ajax()'>Real</button></a>";
	}
	
	
	if($db->result($i, "defaults") == 2) {
		$imgwdeff = "<a href='?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=$userw'><button class='deffButton1'>Always Win</button></a>";
	} else if($db->result($i, "defaults") == 1) {
		$imgwdeff = "<a href='?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=$userw'><button class='deffButton2'>Always Lost</button></a>";
	}else{
		$imgwdeff = "<a href='?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=$userw'><button class='deffButton0'>Normal</button></a>";
	}
?>

<? $tglex = $db->result($i, "tglaktif"); 
	if($tglex == '0000-00-00 00:00:00') {
	$tgx = "-";
	} else {
		$tgx = date('d-m-Y', strtotime($tglex));
	} 
	?>
  <tr class="<?php echo $class; ?>">
    <td align="center"><?php echo $nom; ?>
    </td>
    <td align="center">
      <?php echo $db->result($i, "username"); ?></td>
    <td align="center"><a href="?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=<?php echo $db->result($i, "username"); ?>">
      <?php echo $db->result($i, "nama"); ?>
    </a></td>
  
    <td align="center"><?php echo $db->result($i, "email"); ?></td>
     <td align="center"><a href="#null" onclick="newWindow('./page.php?go=network&mid=<?= $db->result($i, "username"); ?>','','800','650','resizable,scrollbars,status')"><img src="images/group.png" width="16" height="16" border="0" title="Network Tree" /></a> </td>
    <td align="center"><?php echo date('d-m-Y', strtotime($db->result($i, "tgl"))); ?></td>
    <td align="center"><?php echo $tgx; ?></td>
	<td align="center"><?php echo $imgwx; ?></td>
	<td align="center"><?php echo $imgwxtd; ?></td>
	<td align="center"><?php echo $imgwdeff; ?></td>
    
	<td align="center"><?php echo $imgggz; ?></td>
	<td align="center"><?php echo $imggg; ?></td>
	<td align="center"><?php echo $imglg; ?></td>
    <td align="center"><?php echo $aktif; ?></td>
	<td align="center"><?php echo $blokir; ?></td>
    <td align="center"><a href="#" onclick="confirmation('<?php echo $db->result($i, "username"); ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Member" /></a></td>
	<td align="center"><a href="?go=memberlist&amp;page=detilkomisi&amp;bulan=<?= $bln; ?>&amp;tahun=<?= $thn; ?>&amp;mid=<?= $db->result($i, "username"); ?>"><img src="../images/coins4.png" title="Detail Komisi Member" width="17" /></a></td>
 <td align="center"><a href="?go=memberlist&page=addnew&edit=1&mid=<?= $db->result($i, "username"); ?>"><img src="../images/view.png" title="Detail Member" width="17" /></a></td>
  </tr>
<?php
	}
?>
</table>
<br />
<div id="keterangan">
  <p>Keterangan : </p>
  <p><strong>2FA</strong> : 2FA Google Authenticatr (jika anda disable maka member harus setting ulang di member area)<br /><strong>LG</strong>: Notifikasi Email saat member login<br /><strong>A</strong>: Status Member (Aktif/Disable)<br /><strong>B</strong>: Blokir Member<br /><strong>D</strong>: Delete Member<br /><strong>KYC</strong> : ubah status terverifikasi maupun belum terverifikasi.<br /></p>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
     <?php

//}
//
if(!isset($_GET["kat"])){ $kat = "1"; }
$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=memberlist&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=memberlist&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
  <?php

}

if ($numrows != $limit) {
	
	if ($scroll == 1) {
	
		if ($paging > $scrollnumber) {
			
			$first = $display;
			
			$last = ($scrollnumber - 1) + $display;
			
		}
	
	} else {
	
		$first = 1;
			
		$last = $paging;
			
	}
	
	if ($last > $paging ) {
			
		$first = $paging - ($scrollnumber - 1);
			
		$last = $paging;
			
	}
	
	for ($i = $first;$i <= $last;$i++){
		
		if ($display == $i) {
			
?>
[ <b>
<?php echo $i ?>
</b> ]
<?php
			
		} else {
			
?>
[ <a href="?go=memberlist&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=memberlist&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=memberlist&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>
<?php } ?>

<p>&nbsp;</p>