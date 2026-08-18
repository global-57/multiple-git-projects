<?php
(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
$lic=$license;if(!$lic){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonial
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Testimonial</li>
      </ol>
    </section>


    <section class="content">

<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["status0"]."</div>";
}else{
?>
<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("<?php echo $LANG["testinfo1"]?>")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=testimonial&page=delete&no=" + noid;
	}
}
//-->
</script>

           
<div class="row">

<?	
if (isset($_GET['page']) && $_GET['page'] == "submit") {

$jatahe = $db->config("testi");

$userid = $_POST['userid'];
$sql = mysql_query("SELECT * FROM testimonial WHERE userid='$userid'");
$num = mysql_num_rows($sql);
if($num >= $jatahe) {
	header("location: index.php?go=testimonial&result=maxtexti&jt=$jatahe");
	exit;
}else{
	

$_SESSION["namae"] = $_POST["nama"];
$_SESSION["kotae"] = $_POST["kota"];
$_SESSION["judule"] = $_POST["judul"];
$_SESSION["testimonie"] = $_POST["testimoni"];	
	
	
	

$userid = $_POST['userid'];
$nama = anti_injection($_POST['nama']); 
$website = anti_injection($_POST['website']);
$kota = anti_injection($_POST['kota']); 
$email = anti_injection($_POST['email']);
$hp = anti_injection($_POST['hp']);

$jd = anti_injection($_POST['judul']);
$tx = anti_injection($_POST['testimoni']);
$text = nl2br($tx);
$judule = nl2br($jd);
	// SET VARIABLE FOR STORING FILE

	$target_dir = "../images/foto_testimoni/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(!empty($_FILES['uploadfile']['name']) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG")   {
		
	header("location: index.php?go=testimonial&result=file_error");
	exit;
    } else{
	$img = $_FILES['uploadfile'];
	$type = substr($img['name'], strrpos($img['name'], '.') + 1);
	if($img['size'] > 1000000) {
	header("location: index.php?go=testimonial&result=size_error");
	exit;		
	} else {
	$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 24));
	if(!empty($_FILES['uploadfile']['name'])){
		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "testi-".$userid."_a";
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
		if($width > 1000) {
		 	$height = $height * (1000 / $width);
		 	$width = 1000;	
		}
	
		$thumbWidth = $width;
		$thumbHeight = $height;
		$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
		imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));
	    if($type == "gif") {
			imagegif($newThumb, '../images/foto_testimoni/'.$thumbName);
		} else if($type == "png") {
			imagejpeg($newThumb, '../images/foto_testimoni/'.$thumbName);
		} else {
			imagejpeg($newThumb, '../images/foto_testimoni/'.$thumbName);
		}    
	imagedestroy($imgObj);
		imagedestroy($newThumb);
		
		
		
       $fotone = $_POST['fotone'];
		if(!empty($thumbName)){ 
		$foto = $thumbName; 
		unlink("../images/foto_testimoni/$fotone");
		}else{
		$foto = $fotone; 
		}
		
	
	
		$db->insert("testimonial", "", "'', '$userid', '".mysql_real_escape_string($nama)."', '".mysql_real_escape_string($kota)."', '".mysql_real_escape_string($text)."', '$foto', '$clientdate', '0', '".mysql_real_escape_string($judule)."', '".mysql_real_escape_string($website)."', '".mysql_real_escape_string($email)."', '$hp'");
				
				header("location: ?go=testimonial&result=success");
	exit;
}				
}
}

} else if (isset($_GET['page']) && $_GET['page'] == "editgo") {



$userid = $_POST['userid'];
$nama = anti_injection($_POST['nama']); 
$website = anti_injection($_POST['website']);
$kota = anti_injection($_POST['kota']); 
$email = anti_injection($_POST['email']);
$hp = anti_injection($_POST['hp']);
//$fotone = $_POST['fotone'];
$edit = $_POST['edit'];
$no = $_POST['no'];
$jd = anti_injection($_POST['judul']);
$tx = anti_injection($_POST['testimoni']);
$text = nl2br($tx);
$judule = nl2br($jd);
	// SET VARIABLE FOR STORING FILE

	
	
	$target_dir = "../images/foto_testimoni/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(!empty($_FILES['uploadfile']['name']) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG")   {
		
	header("location: index.php?go=testimonial&result=file_error&page=edit&no=$no");
	exit;
    } else{
	$img = $_FILES['uploadfile'];
	$type = substr($img['name'], strrpos($img['name'], '.') + 1);
	if($img['size'] > 1000000) {
	header("location: index.php?go=testimonial&result=size_error&page=edit&no=$no");
	exit;		
	} else {
	$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 24));
	if(!empty($_FILES['uploadfile']['name'])){
		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "testi-".$userid."_a";
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
		if($width > 1000) {
		 	$height = $height * (1000 / $width);
		 	$width = 1000;	
		}
	
		$thumbWidth = $width;
		$thumbHeight = $height;
		$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
		imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));
	    if($type == "gif") {
			imagegif($newThumb, '../images/foto_testimoni/'.$thumbName);
		} else if($type == "png") {
			imagejpeg($newThumb, '../images/foto_testimoni/'.$thumbName);
		} else {
			imagejpeg($newThumb, '../images/foto_testimoni/'.$thumbName);
		}    
	    imagedestroy($imgObj);
		imagedestroy($newThumb);
		
		
		
        $fotone = $_POST['fotone'];
		if(!empty($thumbName)){ 
		$foto = $thumbName; 
		unlink("../images/foto_testimoni/$fotone");
		}else{
		$foto = $fotone; 
		}
	
		$db->update("testimonial", "testimoni='".mysql_real_escape_string($text)."', kota='".mysql_real_escape_string($kota)."', email='".mysql_real_escape_string($email)."', judul='".mysql_real_escape_string($judule)."', hp='$hp', foto='$foto'", "no='$no'");
			
			header("location: ?go=testimonial&page=edit&no=$no&result=success");
	exit;

}		
}	
	?>

<?
} else if (isset($_GET['page']) && $_GET['page'] == "edit") {
if(isset($_GET["no"])){ $no = anti_injection($_GET["no"]); }
	
		$db->select("no, userid, nama, kota, testimoni, foto, judul, referal, published, tgl, hp, email", "testimonial", "no='".mysql_real_escape_string($no)."' and userid='$user_session'");
		$fotone = $db->result(0, "foto");
		$judul = $db->result(0, "judul");
		$userid = $db->result(0, "userid");
		$kota = $db->result(0, "kota");
		$referal = $db->result(0, "referal");
		$testi = $db->result(0, "testimoni");
		$email = $db->result(0, "email");
		$hp = $db->result(0, "hp");
		$nama = $db->result(0, "nama");
		$kota = $db->result(0, "kota");
		$no = $db->result(0, "no");
?>
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
                    alert("Maaf, " + sFileName + " tidak di ijinkan, silahkan upload hanya file image : " + _validFileExtensions.join(", "));
					window.location.reload();
                    return false;
                }
            }
        }
    }

    return true;
}
</script>
  <div class="col-md-4">
                
                  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Testimonial</h3>
            </div>
            <div class="box-body">      
          
<?php
$results = $_GET['result'];
if($results == "wrong_captcha") { 
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["wrongcaptcha"]."</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["updtesti"]."</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="size_error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Upload max size only 1 MB</div>";
}
?>  

<?php
 if(isset($_GET['result'])&&$_GET['result']=="file_error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Upload only file pdf, jpg, png, gif.</div>";
}
?> 

										<!-- BEGIN FORM-->
										<form action="?go=testimonial&page=editgo" class="form-horizontal" method="post" name="edittestimonial" id="edittestimonial" enctype="multipart/form-data" onsubmit="return Validate(this);">
                                      
											   <input name="userid" type="hidden" class="inputText" id="userid" value="<?= $userid; ?>" size="20" />
			
                    <input name="edit" type="hidden" class="form" id="edit" value="1" size="10" />
					<input name="no" type="hidden" class="form" id="no" value="<?= $no; ?>" size="10" />
                <input name="website" type="hidden" id="website" value="<?= $referal; ?>"/>     
                                           <input name="hp" id="hp" type="hidden" value="<?= $hp; ?>" size="46"/>
                                           <input name="email" id="email" type="hidden" value="<?= $email; ?>" size="46"/>   
                                           <input name="nama" id="nama" type="hidden" value="<?= $nama; ?>" size="46"/>       
                                           <input name="kota" id="kota" type="hidden" value="<?= $kota; ?>" size="46"/>         
                                        
                                            
                                             <div class="controls-row" style="margin-top:20px;">
													<label>Judul</label>
													<input type="text" class="form-control" name="judul" required='required' value="<?= $judul; ?>" maxlength="150">
												</div>
                                            
                                             <div class="controls-row" style="margin-top:20px;">
													<label>Testimonials (max 350 chareacter)</label>
													 <textarea name="testimoni" class="form-control" required="required" maxlength="350"><?= $testi; ?></textarea>
												</div>
                                            <br /> <br />
                                               
                                                <?php
		  	$adapict = $fotone;
	$dirpict = "../images/foto_testimoni/$adapict";
	$ukr2=getimagesize($dirpict);
						$w2=$ukr2[0];
						$h2=$ukr2[1];
		if($w2>200){	
		$width = "200px";		
		}	
	
	if (!empty($adapict) && (file_exists($dirpict))){
		$picture = "<img src='".$dirpict."' width='$width'>";
		}
	else
		{
		$picture = "<img src='../images/no-image.jpg' width='200'>";
		} 
		echo $picture;
		?>                
									  <br />
									  <div class="controls-row" style="margin-top:20px;">
													<label>Image</label>
													<input name="uploadfile" type="file" id="uploadfile">
			   <input name="fotone" type="hidden" id="fotone" value="<?= $fotone; ?>"/>
												</div>
				
										<div class="controls-row" style="margin-top:20px;">
												<i>Upload only file pdf, jpg, png, gif. Max size upload 1 MB.</i>
											</div>
                                           
                                             <div>

           &nbsp;

          </div>
          <div>
        
           <button type="submit" class="btn btn-<?php echo $buttone; ?>"><i class="fa fa-check"></i>&nbsp;Update</button>
          </div>
                     
										</form>
										<!-- END FORM-->
								
                </div></div> </div>   


 <div class="col-md-8">
                  <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Data Testimonial
                            
                            <?php
$jatahe = $db->config("testi");					   
$tax = $db->count_records("testimonial", "username='$user_session'");
if($tax > $jatahe) {
	    echo "<a href='#'><button type='button' class='btn btn-danger' style='float:right'>Add New &nbsp;<i class='fa fa-plus'></i></button></a>";
} else {
		echo "<a href='?go=testimonial&page=addnew'><button class='btn btn-success' type='button' style='float:right'>Add New &nbsp;<i class='fa fa-plus'></i></button></a>";	
}	
?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">


                    
            <thead>
							<tr>
								 <th width="166"><?php echo $LANG["date"]?></th>
                            <th width="680"><?php echo $LANG["subject"]?></th>
                            <th width="71"><?php echo $LANG["updd_view"]?></th>
                            <th width="74"><?php echo $LANG["edt"]?></th>
                            <th width="70">Status</th>
							</tr>
							</thead>
							<tbody>
<?

$sql = mysql_query("select * from testimonial where userid='$user_session' order by tgl desc");

while($row=mysql_fetch_row($sql)) {

if($row[7] > 0) {
		$img = "<span class='btn btn-success btn-xs'>Active</span>";
	} else {
		$img = "<span class='btn btn-danger btn-xs'>Inactive</span>";
	}
$no = $row[0];
$namae = $row[2];
$usernye = $row[1];	
$tanggale = formatgl($row[6]);	
$kotae = $row[3];	
$judule = $row[8];	
$isine = $row[4];	
$adafoto = $row[5];
	$dirfoto = "../images/foto_testimoni/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../images/foto_testimoni/".$adafoto."' class='highslide' onclick='return hs.expand(this)' onMouseover=\"ddrivetip('".$LANG["vwdetail"]."')\" onMouseout='hideddrivetip()'><img src='../images/view.png'></a><div class='highslide-caption'>By: $namae (username: $usernye)<br>Date: $tanggale<br>City: $kotae<br><br><b>$judule</b><br>$isine</div>";
		}
	else
		{
		$gambar = "<a href='../images/photo_not_available.jpg' class='highslide' onclick='return hs.expand(this)' onMouseover=\"ddrivetip('".$LANG["vwdetail"]."')\" onMouseout='hideddrivetip()'><img src='../images/view.png' ></a><div class='highslide-caption'>By: $namae (username: $usernye)<br>Date: $tanggale<br>City: $kotae<br><br><b>$judule</b><br>$isine</div>";
		} 		

$tt = date('d-m-Y', strtotime($row[6]));

?>
 <tr> 
							
							<td align="center"><?php echo $tt; ?></td>
							<td align="center"><?php echo $row[8]; ?></td>
							<td align="center"><?php echo $gambar; ?></td>
							<td align="center"><a href="?go=testimonial&page=edit&no=<?= $no; ?>" onMouseover="ddrivetip('<?php echo $LANG["edtesti"];?>')"; onMouseout="hideddrivetip()"><img src='../images/edit_f2.png' border=0 title='Edit' width="22" ></a></td>
							<td align="center"><?php echo $img; ?></td>
						  </tr>
                       

 <?php
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
} else { 
?>
 <div class="col-md-4">
                
                 
                  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Testimonial</h3>
            </div>
            <div class="box-body">    
            
            
<?php
$jatahe = $db->config("testi");
$sql = mysql_query("SELECT * FROM testimonial WHERE userid='$user_session'");
$num = mysql_num_rows($sql);
if($num >= $jatahe) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["mxtesti"]."</div>";
}else{
?>
<?php
$results = $_GET['result'];
if($results == "wrong_captcha") { 
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["wrongcaptcha"]."</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["sbmtdtesti"]."</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="size_error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Upload max size only 1 MB</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="maxtexti"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Maksimal testimonial hanya ".$_GET['jt']."</div>";
}
?> 
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file_error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Upload only file pdf, jpg, png, gif.</div>";
}
?> 
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
                    alert("Maaf, " + sFileName + " tidak di ijinkan, silahkan upload hanya file image : " + _validFileExtensions.join(", "));
					window.location.reload();
                    return false;
                }
            }
        }
    }

    return true;
}
</script>

										<!-- BEGIN FORM-->
										<form action="?go=testimonial&page=submit" class="form-horizontal" method="post" name="addtestimonial" id="addtestimonial" enctype="multipart/form-data" onsubmit="return Validate(this);">
                                      
											 <input name="userid" type="hidden" class="inputText" id="userid" value="<?= $user_session; ?>" size="20" />
			<input name="nama" type="hidden" class="inputText" id="nama" value="<?= $db->dataku("nama", $user_session); ?>" size="46" />
                <input name="website" type="hidden" id="website" value="http://www.<?= $domain; ?>/?id=<?= $user_session; ?>"/>  
                                           <input name="email" id="email" type="hidden" value="<?= $db->dataku("email", $user_session); ?>" size="46"/> 
                                           <input name="hp" id="hp" type="hidden" value="<?= $db->dataku("hp", $user_session); ?>" size="46"/>       
                                           <input name="nama" id="nama" type="hidden" value="<?= $db->dataku("nama", $user_session); ?>" size="46"/>       
                                           <input name="kota" id="kota" type="hidden" value="<?= $db->dataku("kota", $user_session); ?>" size="46"/>       
                                            
                                            
                                            
                                             <div class="controls-row" style="margin-top:20px;">
													<label>Judul</label>
													<input type="text" class="form-control" name="judul" required='required' value="<?= $_SESSION["judule"]; ?>" maxlength="150">
												</div>
                                            
                                             <div class="controls-row" style="margin-top:20px;">
													<label>Testimonials (max 350 chareacter)</label>
													 <textarea name="testimoni" class="form-control" required="required" maxlength="350"><?= $_SESSION["testimonie"]; ?></textarea>
											</div>
									  <div class="controls-row" style="margin-top:20px;">
													<label>Image</label>
													<input name="uploadfile" type="file" id="uploadfile">
			   <input name="fotone" type="hidden" id="fotone" value="<?= $fotone; ?>"/>
												</div>
				
											<div class="controls-row" style="margin-top:20px;">
											<i>Upload only file pdf, jpg, png, gif. Max size upload 1 MB.</i>
											</div>
                                        
                                             <div>

           &nbsp;

          </div>
          <div>
        
           <button type="submit" class="btn btn-<?php echo $buttone; ?>"><i class="fa fa-check"></i>&nbsp;Send</button>
          </div>
                     
										</form>
                                        
                                     <div class="controls-row" style="margin-top:10px;">
        <div class='alert alert-info alert-dismissable'><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;<strong>Notice</strong><br />Maks Testimonial <?php echo $db->config("testi"); ?> Testimonial.</div>
        </div>  
                                        
                                        
										<!-- END FORM-->
									 </div>
									 </div>
	</div>





 <div class="col-md-8">
                  <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Data Testimonial</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    
                    
            <thead>
							<tr>
								 <th width="166"><?php echo $LANG["date"]?></th>
                            <th width="680"><?php echo $LANG["subject"]?></th>
                            <th width="71"><?php echo $LANG["updd_view"]?></th>
                            <th width="74"><?php echo $LANG["edt"]?></th>
                            <th width="70">Status</th>
							</tr>
							</thead>
							<tbody>
<?

$sql = mysql_query("select * from testimonial where userid='$user_session' order by tgl desc");

while($row=mysql_fetch_row($sql)) {

if($row[7] > 0) {
		$img = "<span class='btn btn-success btn-xs'>Active</span>";
	} else {
		$img = "<span class='btn btn-danger btn-xs'>Inactive</span>";
	}
$no = $row[0];
$namae = $row[2];
$usernye = $row[1];	
$tanggale = formatgl($row[6]);	
$kotae = $row[3];	
$judule = $row[8];	
$isine = $row[4];	
$adafoto = $row[5];
	$dirfoto = "../images/foto_testimoni/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../images/foto_testimoni/".$adafoto."' class='highslide' onclick='return hs.expand(this)' onMouseover=\"ddrivetip('".$LANG["vwdetail"]."')\" onMouseout='hideddrivetip()'><img src='../images/view.png'></a><div class='highslide-caption'>By: $namae (username: $usernye)<br>Date: $tanggale<br>City: $kotae<br><br><b>$judule</b><br>$isine</div>";
		}
	else
		{
		$gambar = "<a href='../images/photo_not_available.jpg' class='highslide' onclick='return hs.expand(this)' onMouseover=\"ddrivetip('".$LANG["vwdetail"]."')\" onMouseout='hideddrivetip()'><img src='../images/view.png' ></a><div class='highslide-caption'>By: $namae (username: $usernye)<br>Date: $tanggale<br>City: $kotae<br><br><b>$judule</b><br>$isine</div>";
		} 		

$tt = date('d-m-Y', strtotime($row[6]));

?>
 <tr> 
							
							<td align="center"><?php echo $tt; ?></td>
							<td align="center"><?php echo $row[8]; ?></td>
							<td align="center"><?php echo $gambar; ?></td>
							<td align="center"><a href="?go=testimonial&page=edit&no=<?= $no; ?>" onMouseover="ddrivetip('<?php echo $LANG["edtesti"];?>')"; onMouseout="hideddrivetip()"><img src='../images/edit_f2.png' border=0 title='Edit' width="22" ></a></td>
							<td align="center"><?php echo $img; ?></td>
						  </tr>
                       

 <?php
 }
 ?>
        
							</tbody>
							</table>
                        </div>
                    </div>
                </div>
                </div>
			</div>

<?php } ?>
			<!-- END PAGE CONTENT -->   
               
<?
	}
	}
	?>
</section>