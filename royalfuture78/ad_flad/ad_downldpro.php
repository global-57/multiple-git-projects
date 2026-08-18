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
if(basename($_SERVER['SCRIPT_FILENAME'])==basename(__FILE__)){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";exit();};echo '';if(empty($_SESSION["valid_admin"])){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";exit();};echo '';;echo '<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Are You sure to delete this Article?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=prodownld&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<script type="text/javascript">
<!--
function confirmation2(noid) {
	var answer = confirm("Yakin mau menghapus file ini? jika hanya menghapus link saja tanpa menghapus file, silahkan hapus nama file pada field kuning saja!")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=prodownld&page=delete2&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Download Manager</h2>
';if(isset($_GET['page'])&&$_GET['page']=="addnew"){if(isset($_GET["edit"])){$edit=$_GET["edit"];}if(isset($_GET["no"])){$no=$_GET["no"];}if($edit>0){$db->select("id, nama, deskripsi, created, published, harga, catid, gambar, file, expire, kode","product2","id='$no'");$title=$db->result(0,"nama");$harga=$db->result(0,"harga");$kode=$db->result(0,"kode");$crdate=$db->result(0,"created");$publish=$db->result(0,"published");$foto=$db->result(0,"gambar");$catid=$db->result(0,"catid");$myfile=$db->result(0,"file");$maintext=$db->result(0,"deskripsi");$expire=$db->result(0,"expire");$judul="Edit Produk";$edit="1";}else {$author=$valid_admin;$crdate=$clientdate;if(empty($title)){$title="";}if(empty($harga)){$harga="";}if(empty($kode)){$kode="";}if(empty($crdate)){$crdate="";}if(empty($publish)){$publish="";}if(empty($gbr)){$gbr="";}if(empty($catid)){$catid="";}if(empty($myfile)){$myfile="";}if(empty($maintext)){$maintext="";}}$judul="Create New Download";}$kodenew=substr(number_format(time()*rand(),0,'',''),0,5);$kode=$db->result(0,"kode");if(!$kode){$kodex=$kodenew;}else {$kodex=$kode;};echo '<form action="?go=prodownld&page=submit" method="post" enctype="multipart/form-data" name="form1">
  <table width="99%" height="483" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="4"><h4>';echo $judul;;echo '</h4></td>
    </tr>
    <tr>
      <td width="13%" align="right"><strong>Nama</strong> :&nbsp;</td>
      <td><label>
        <input name="title" type="text" id="title" value="';echo $title;;echo '" size="50">
      </label></td>
      <td align="right"></td>
      <td></td>
    </tr>
   
    <tr>
      <td align="right" valign="top"></td>
      <td></td>
      <td colspan="2" align="right"></td>
    </tr>
    <tr>
      <td align="right" > Gambar : &nbsp;</td>
      <td valign="top"><label>
      ';if($edit==1){$adafoto=$foto;$dirfoto="../produk/images/$adafoto";if(!empty($adafoto)&&(file_exists($dirfoto))){$gambar="<a href='../produk/images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../produk/images/$adafoto' class='imgFloatLeft' width='200'></a>";}else {$gambar="<a href='../images/nullimages.jpg' class='highslide' onclick='return hs.expand(this)'><img src='../images/nullimages.jpg' class='imgFloatLeft' width='200'></a>";}echo $gambar;;echo '                  ';};echo '<br /><br />
                 <input name="uploadfile" type="file" class="form" id="uploadfile">
                  </label>
                    <input name="fotone" type="hidden" class="form" id="fotone" value="';echo $adafoto;;echo '" size="12" /></label></td>
      <td align="right" valign="top"></td>
      <td valign="top"></td>
    </tr>
	
	<tr>
      <td align="right" >Link Download :&nbsp;</td>
      <td colspan="3">
        <input name="harga" type="text" id="harga" value="';echo $harga;;echo '" size="80"></td>
    </tr>
    <tr>
      <td align="right" valign="top">Published :&nbsp;</td>
      <td colspan="3">
        
          <input name="publish" type="radio" id="publish_0" value="1" checked>Yes
          <input type="radio" name="publish" value="0" id="publish_1">No
        <input name="no" type="hidden" id="no" value="';echo $no;;echo '" size="20">
        <input name="edit" type="hidden" id="edit" value="';echo $edit;;echo '" size="20">
      </td>
    </tr>
	 
    <tr>
      <td height="173" align="right" >Deskripsi :&nbsp;</td>
      <td colspan="3"><textarea name="deskripsi" cols="70" rows="10" id="deskripsi">';echo $maintext;;echo '</textarea></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td colspan="3"><label>
        <input type="submit"  value="SAVE" class="submit">
        
      </label><label><input type="button" name="cancel" id="cancel" value="CANCEL" onClick="javascript:history.go(-1)" class="submit">
      </label></td>
    </tr>
  </table>
</form>
  <script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("title","req","Nama Produk harus diisi, silahkan ulangi lagi!");

</script>  
';if(isset($_GET['page'])&&$_GET['page']=="submit"){$img=$_FILES['uploadfile'];$type=substr($img['name'],strrpos($img['name'],'.')+1);if(($type=="gif"||$type=="jpg"||$type=="jpeg"||$type=="png")&&$img['size']<3000000){$time=date("Ymd_His");$sess=md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz",64)),0,24));$namex=substr($img['name'],0,strrpos($img['name'],'.'));$special="download";$new_file_name=str_replace($namex,'',$special);$name=$new_file_name.'_'.$sess.'_'.$time;$thumbName=$name.'.'.$type;if($type=="gif")$imgObj=imagecreatefromgif($img['tmp_name']);else if($type=="png")$imgObj=imagecreatefrompng($img['tmp_name']);else $imgObj=imagecreatefromjpeg($img['tmp_name']);$width=imageSX($imgObj);$height=imageSY($imgObj);if($width>600){$height=$height*(600/$width);$width=600;}$thumbWidth=$width;$thumbHeight=$height;$newThumb=imagecreatetruecolor($thumbWidth,$thumbHeight);imagecopyresampled($newThumb,$imgObj,0,0,0,0,$thumbWidth,$thumbHeight,imageSX($imgObj),imageSY($imgObj));if($type=="gif"){imagegif($newThumb,'../produk/images/'.$thumbName);}else if($type=="png"){imagejpeg($newThumb,'../produk/images/'.$thumbName);}else {imagejpeg($newThumb,'../produk/images/'.$thumbName);}imagedestroy($imgObj);imagedestroy($newThumb);$created=$_POST['created'];$title=$_POST['title'];$harga=$_POST['harga'];$publish=$_POST['publish'];$deskripsi=$_POST['deskripsi'];$edit=$_POST['edit'];$no=$_POST['no'];$fotone=$_POST['fotone'];if(!empty($thumbName)){$foto=$thumbName;}else{$foto=$fotone;}if($edit>0){$db->update("product2","nama='$title', harga='$harga', deskripsi='$deskripsi', published='$publish', gambar='$foto', created='$clientdate'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=prodownld&page=addnew&edit=1&no=$no'>";}else {$db->insert("product2","catid, nama, deskripsi, harga, kode, gambar, published, created, file, expire, komisi, hargab, hargac, hargad","'', '$title', '$deskripsi', '$harga', '', '$foto', '$publish', '$clientdate', '', '', '', '', '', ''");echo "<meta http-equiv='refresh' content='0;URL=?go=downld'>";}}else {echo "<script type=\"text/javascript\">alert('File Gambar salah!, Silahkan Upload file hanya jpeg, jpg, png atau gif');</script>";};echo '';}if(isset($_GET['page'])&&$_GET['page']=="publish"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}$db->update("product2","published='$pub'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=downld'>";;echo '';}if(isset($_GET['page'])&&$_GET['page']=="delete"){if(isset($_GET["no"])){$no=$_GET["no"];}$sqlber=mysql_query("SELECT * FROM product2 WHERE id='$no'");$numbr=mysql_num_rows($sqlber);while($rowbr=mysql_fetch_array($sqlber)){$fotoe=$rowbr['gambar'];unlink("../produk/images/$fotoe");}$db->delete("product2","id=$no");echo "<meta http-equiv='refresh' content='0;URL=?go=downld'>";;echo '';}if(isset($_GET['page'])&&$_GET['page']=="delete2"){if(isset($_GET["no"])){$no=$_GET["no"];}$sqlc=mysql_query("SELECT file FROM product2 WHERE id='$no'");$numc=mysql_num_rows($sqlc);while($rowc=mysql_fetch_array($sqlc)){$data=$rowc['file'];unlink("../produk/file/$data");$db->update("product2","file=''","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=downld&page=addnew&edit=1&no=$no'>";};echo '';}if(isset($_GET['page'])&&$_GET['page']=="frontpage"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}$db->update("product2","frontpage='$pub'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=downld'>";;echo '';}?>