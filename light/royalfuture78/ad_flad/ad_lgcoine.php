<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
<?php
	
	$fotorw1 = $db->config("ftrwd1");
	$fotorw2 = $db->config("ftrwd2");
	$fotorw3 = $db->config("ftrwd3");
	$fotorw4 = $db->config("ftrwd4");
	$fotorw5 = $db->config("ftrwd5");
	$fotorw6 = $db->config("ftrwd6");
	$fotorw7 = $db->config("ftrwd7");
	$fotorw8 = $db->config("ftrwd8");

if(isset($_POST['submit'])){

$nama_logo = $_POST['nama_logo'];
$jenisreward = $_POST['jenisreward'];
$nama_gambar = $_POST['nama_gambar'];



    $jenis_gambar=$_FILES['img1']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
       $gambar = $namafolder . basename($_FILES['img1']['name']);       
       $time = date("Ymd-His");
	   $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 24));
	   $logo  = $nama_logo;
	   $extension = explode("/", $_FILES["img1"]["type"]);  //Use proper mime type here, $_FILES contents can be faked by remote user
	   $thumbName = $logo.".".$extension[1];
	   
	   
	   move_uploaded_file($_FILES["img1"]["tmp_name"], "../images/banner/".$logo.".".$extension[1]);
            
		if (!empty($_FILES["img1"]["tmp_name"])){ 
		$foto = $thumbName; 
		}else{
		$foto = $nama_gambar; 
		}
		
	
	
		if($jenisreward == 1){
    $db->update("configuration", "ftrwd1='$foto'", "id='1'");
	}else if($jenisreward == 2){
    $db->update("configuration", "ftrwd2='$foto'", "id='1'");
	}else if($jenisreward == 3){
    $db->update("configuration", "ftrwd3='$foto'", "id='1'");
	}else if($jenisreward == 4){
    $db->update("configuration", "ftrwd4='$foto'", "id='1'");
	}else if($jenisreward == 5){
    $db->update("configuration", "ftrwd5='$foto'", "id='1'");
	}else if($jenisreward == 6){
    $db->update("configuration", "ftrwd6='$foto'", "id='1'");
	}else if($jenisreward == 7){
    $db->update("configuration", "ftrwd7='$foto'", "id='1'");
	}else if($jenisreward == 8){
    $db->update("configuration", "ftrwd8='$foto'", "id='1'");
	
	
	}else{}	
	header("location: ?go=rwimage&result=success");
	exit;
	}		
 


}else{


?>	
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Gambar Reward Manager</h2>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<br><div class='alert-box successs'><span>sukses: </span><br />Gambar Reward berhasil diupload!</div><br>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong") { 
echo "<div class='alert-box errors'><span>error : </span>Jenis gambar yang anda kirim salah. Harus .jpg .gif .png!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "error") { 
echo "<div class='alert-box errors'><span>error : </span>Gambar sudah diupload sebelumnya!</div>";
}
?>
<p align="left">Halaman ini digunakan untuk meng-upload gambar reward.</p>

<?php 
$tkns = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz123456789123456789abcdefghijklmnopqrstuvwxyz123456789123456789abcdefghijklmnopqrstuvwxyz123456789123456789", 48)), 24, 18);
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" onsubmit="return Validate(this);">
  <p>&nbsp;</p>
  <?php
  

	
	if($_GET['rw'] == 1){
		$adafotone=$fotorw1;
	}else if($_GET['rw'] == 2){
		$adafotone=$fotorw2;
	}else if($_GET['rw'] == 3){
		$adafotone=$fotorw3;
	}else if($_GET['rw'] == 4){
		$adafotone=$fotorw4;
	}else if($_GET['rw'] == 5){
		$adafotone=$fotorw5;
	}else if($_GET['rw'] == 6){
		$adafotone=$fotorw6;
	}else if($_GET['rw'] == 7){
		$adafotone=$fotorw7;
	}else if($_GET['rw'] == 8){
		$adafotone=$fotorw8;
	
	
	}else{}
	
	
	
	$dirfoto = "../images/banner/$adafotone";
	$ukr2=getimagesize($dirfoto);
						$w2=$ukr2[0];
						$h2=$ukr2[1];
		if($w2>200){	
		$width = "200px";		
		}	
	if (!empty($adafotone) && (file_exists($dirfoto))){
		$gambar = "<a href='".$dirfoto."' class='highslide' onclick='return hs.expand(this)'><img src='".$dirfoto."' class='imgFloatLeft' width='$width'></a>";
		}
	else
		{
		$gambar = "<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='100'></a>";
		} 	
		?>
                  <?php echo $gambar; ?>
  <p>&nbsp;</p>
  <p>Upload gambar :
    <label>
    <input name="img1" type="file" id="img1" size="40" class="form" />
	<input name="nama_logo" type="hidden" id="nama_logo" size="30" value="<?= $tkns; ?>" >
	<input name="nama_gambar" type="hidden" id="nama_gambar" size="30" value="<?= $adafotone; ?>" >
	<input name="jenisreward" type="hidden" id="jenisreward" size="30" value="<?= $_GET['rw']; ?>" >
  </label>
    <!--<br /><br />
    <label>
	<p><font size="2" face="Times New Roman, Times, serif">Atau Masukan Link :</font><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
    <label>
    <input name="link" type="text" class="form" id="link" size="50">
  </label>-->
    <br /><br /><br />
    <label>
        <?php if($demomode == 1){ ?>
	  <input type="button" onclick='return confirmActiondemomode()' name="submit" value="UPLOAD GAMBAR" class="submit">
      <?php } else { ?>
            <input type="submit" name="button2" id="button2" value="UPLOAD GAMBAR" class="submit">
            <?php } ?>
     
     
  </label>
</form><p>&nbsp;</p>
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
}
?>