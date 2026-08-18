<?php /* 
	############################[  <about> ] #######################
		S Name   ::       MMM Primadesain
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
if(basename($_SERVER['SCRIPT_FILENAME'])==basename(__FILE__)){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";exit();};echo '';echo '';;echo '';if(isset($_POST['submit'])){$nama_logo=$_POST['nama_logo'];$jenis_gambar=$_FILES['img1']['type'];if($jenis_gambar=="image/jpeg"||$jenis_gambar=="image/jpg"||$jenis_gambar=="image/gif"||$jenis_gambar=="image/png"){$gambar=$namafolder.basename($_FILES['img1']['name']);$time=date("Ymd-His");$sess=md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz",64)),0,24));$logo=$nama_logo;$extension=explode("/",$_FILES["img1"]["type"]);$thumbName=$logo.".".$extension[1];if($thumbName==$mail_logo){header("location: ?go=logo-invoice&result=error");exit;}else{move_uploaded_file($_FILES["img1"]["tmp_name"],"../images/banner/".$logo.".".$extension[1]);if(!empty($_FILES["img1"]["tmp_name"])){$foto=$thumbName;}else{$foto=$fotone;}$db->update("configuration","invimage='$thumbName'","id='1'");header("location: ?go=logo-invoice&result=success");exit;}}else {header("location: ?go=logo-invoice&result=wrong");exit;}}else{;echo '	
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Logo Invoice Manager</h2>
';$results=$_GET['result'];if($results=="success"){echo "<br><div class='alert-box successs'><span>sukses: </span><br />Logo Invoice berhasil diupload!</div><br>";};echo '';$results=$_GET['result'];if($results=="wrong"){echo "<div class='alert-box errors'><span>error : </span>Jenis gambar yang anda kirim salah. Harus .jpg .gif .png!</div>";};echo '';$results=$_GET['result'];if($results=="error"){echo "<div class='alert-box errors'><span>error : </span>Gambar sudah diupload sebelumnya!</div>";};echo '<p align="left">Halaman ini digunakan untuk meng-upload gambar untuk Logo Invoice supaya terpasang di invoice yang dikirim.</p>
<p>Ketentuan Gambar :</p>
<ul>
  <li>File Image (jpg,jpeg,gif atau png) </li>
  <li>Ukuran file tidak boleh lebih dari 500 KB</li>
</ul>
';$tokens=md5(md5(date("Y-m-d H:i:s")));$nama_foto="logo_invoice_".$tokens;echo '<form action="" method="post" enctype="multipart/form-data" name="form1" onsubmit="return Validate(this);">
 
  ';$adafoto=$db->config("invimage");$dirfoto="../images/banner/$adafoto";$ukr2=getimagesize($dirfoto);$w2=$ukr2[0];$h2=$ukr2[1];if($w2>200){$width="200px";}if(!empty($adafoto)&&(file_exists($dirfoto))){$gambar="<a href='../images/banner/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../images/banner/$adafoto' class='imgFloatLeft' width='$width'></a>";}else {$gambar="<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='100'></a>";};echo '                  ';echo $gambar;;echo '  <p>&nbsp;</p>
  <p>
    <label>
    <input name="img1" type="file" id="img1" size="40" class="form" />
	<input name="nama_logo" type="hidden" id="nama_logo" size="30" value="';echo $nama_foto;;echo '" >
  </label>
    <!--<br /><br />
    <label>
	<p><font size="2" face="Times New Roman, Times, serif"></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
    <label>
    <input name="link" type="text" class="form" id="link" size="50">
  </label>-->
    <br /><br /><br />
    <label>
     	'; if($demomode == 1){ ;echo '	  <input type="button" onclick=\'return confirmActiondemomode()\' name="submit" value="UPLOAD GAMBAR" class="submit">
      '; } else { ;echo ' <input type="submit" name="submit" value="UPLOAD GAMBAR" class="submit">
            '; } ;echo '
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
';}?>