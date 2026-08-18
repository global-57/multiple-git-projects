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
	var answer = confirm("Are You sure to delete this testimonial ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=addtestimonial&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Testimonial Manager</h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=addtestimonial&amp;page=addnew&edit=0">Tambah Testimonial</a></li>
  </ul>
</div>
';if(isset($_GET['page'])&&$_GET['page']=="addnew"){if(isset($_GET["edit"])){$edit=$_GET["edit"];}if(isset($_GET["no"])){$no=$_GET["no"];}if($edit>0){$db->select("no, userid, nama, kota, testimoni, foto, published, tgl, judul, referal, email, hp","testimonial","no=$no");$foto=$db->result(0,"foto");$userid=$db->result(0,"userid");$kota=$db->result(0,"kota");$judul=$db->result(0,"judul");$testi=$db->result(0,"testimoni");$referal=$db->result(0,"referal");$nama=$db->result(0,"nama");$email=$db->result(0,"email");$hp=$db->result(0,"hp");$edit="1";}else {if(empty($foto)){$foto="";}if(empty($userid)){$userid="";}if(empty($kota)){$kota="";}if(empty($judul)){$judul="";}if(empty($testi)){$testi="";}if(empty($referal)){$referal="";}if(empty($nama)){$nama="";}$edit="0";};echo '
<form action="?go=addtestimonial&amp;page=submit" method="post" enctype="multipart/form-data" name="myform">
  <div align="center">
    <center>
      <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="70%" id="AutoNumber1" bordercolor="#EDEDE9">
        <tr class="tbl_header">
          <td width="100%" align="center">
		  ';if(isset($act)==1 or isset($act)){;echo '<div id="notice"><img src="images/notice-info.png" width="29" height="29" align="absmiddle" />Data telah berhasil diupdate ! </div>
	';};echo '		  <b><font face="Arial">UPDATE 
            DATA TESTIMONIAL MEMBER DI SINI</font></b></td>
        </tr>
        <tr>
          <td width="100%" style="border-style: none; border-width: medium"><div align="center">
            <table width="75%" border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td width="38%" align="right">Username  : </td>
                <td width="62%">
				<input name="userid" type="text" class="form" id="userid" value="';echo $userid;;echo '" size="20" />
                    <input name="no" type="hidden" class="form" id="no" value="';echo $no;;echo '" size="10" />
                    <input name="edit" type="hidden" class="form" id="edit" value="';echo $edit;;echo '" size="10" />
					<input name="email" type="hidden" class="form" id="email" value="';echo $email;;echo '" size="40" />
					<input name="hp" type="hidden" class="form" id="hp" value="';echo $hp;;echo '" size="40" />
                  <label></label></td>
              </tr>
              <tr>
                <td align="right">Nama : </td>
                <td><input name="nama" type="text" class="form" id="nama" value="';echo $nama;;echo '" size="40" /></td>
              </tr>
              <tr>
                <td align="right">Kota : </td>
                <td><input name="kota" type="text" class="form" id="kota" value="';echo $kota;;echo '" size="40" /></td>
              </tr>
              <tr>
                <td align="right">Foto : </td>
                <td><label>
		  ';$adafoto=$foto;$dirfoto="../images/foto_testimoni/$adafoto";if(!empty($adafoto)&&(file_exists($dirfoto))){$gambar="<a href='../images/foto_testimoni/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../images/foto_testimoni/$adafoto' class='imgFloatLeft' width='150'></a>";}else {$gambar="<a href='../images/no_image.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/no_image.png' class='imgFloatLeft' width='120'></a>";};echo '                  ';echo $gambar;;echo '<br /><br />
                 <input name="uploadfile" type="file" class="form" id="uploadfile">
                  </label>
                    <input name="fotone" type="hidden" class="form" id="fotone" value="';echo $foto;;echo '" size="12" />
					
					</td>
              </tr>
			   <tr>
                <td align="right">Judul : </td>
                <td><input name="judul" type="text" class="form" id="judul" value="';echo $judul;;echo '" size="40" /></td>
              </tr>
              <tr>
                <td align="right" valign="top">Testimoni  : </td>
                <td valign="top"><textarea name="testimoni" cols="50" rows="8" class="form" id="testimoni">';echo $testi;;echo '</textarea></td>
              </tr>
			  ';if(!empty($referal)){;echo '			  <tr>
                <td align="right">Referal : </td>
                <td>';echo $referal;;echo '</td>
              </tr>
			  ';};echo '			   <tr>
                <td align="right">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><label>
				'; if($demomode == 1){ ;echo '	  <input type="button" onclick=\'return confirmActiondemomode()\' name="submit" value="Simpan Testimonial" class="submit">
      '; } else { ;echo '            <input type="submit" name="button2" id="button2" value="Simpan Testimonial" class="submit">
            '; } ;echo '
				
				
</label>
                  <label>
                  </label></td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
    </center>
  </div>
</form>
<script language="JavaScript" type="text/javascript"
xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
var frmvalidator  = new Validator("myform");
frmvalidator.addValidation("userid","req","Userid harus di isi");
frmvalidator.addValidation("nama","req","Nama harus di isi.");
frmvalidator.addValidation("kota","req","Kota harus di isi.");
frmvalidator.addValidation("judul","req","Userid harus di isi");
frmvalidator.addValidation("testimoni","req","Userid harus di isi");
//]]></script>
';}if(isset($_GET['page'])&&$_GET['page']=="submit"){$userid=$_POST['userid'];$edit=$_POST['edit'];$no=$_POST['no'];$fotone=$_POST['fotone'];$testimoni=anti_injection($_POST['testimoni']);$nama=anti_injection($_POST['nama']);$kota=anti_injection($_POST['kota']);$judul=anti_injection($_POST['judul']);$referal="http://www.".$domain."/?id=".$_POST['userid'];$email=mysql_real_escape_string($_POST['email']);$hp=mysql_real_escape_string($_POST['hp']);$img=$_FILES['uploadfile'];$type=substr($img['name'],strrpos($img['name'],'.')+1);if($type==""){if($edit>0){$db->update("testimonial","testimoni='$testimoni', nama='$nama', kota='$kota', judul='$judul', foto='$fotone', referal='$referal', email='$email', hp='$hp'","no='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=addtestimonial&page=addnew&act=1&no=$no&edit=1'>";}else {echo "<br><center><img src='../images/block_user_pic.png' width='75' height='75' border='0' /><br><br><font style='font-size:13pt;font-family:Verdana;color:#FF0000;line-height:160%'><b>File Tidak Valid !</b></font><br><font style='font-size:10pt;font-family:Verdana;line-height:160%'>Silahkan Upload file hanya jpeg, jpg, png atau gif<br><br><a href='javascript:history.go(-1)'><img src='../images/my_btn_back.gif' width='59' height='27' border='0'></a><br><br><br></center>";}}else{if(($type=="gif"||$type=="jpg"||$type=="jpeg"||$type=="png")&&$img['size']<3000000){$time=date("Ymd_His");$sess=md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz",64)),0,24));$namex=substr($img['name'],0,strrpos($img['name'],'.'));$special=$userid."_testi_up_by_admin";$new_file_name=str_replace($namex,'',$special);$name=$new_file_name.'_'.$sess.'_'.$time;$thumbName=$name.'.'.$type;if($type=="gif")$imgObj=imagecreatefromgif($img['tmp_name']);else if($type=="png")$imgObj=imagecreatefrompng($img['tmp_name']);else $imgObj=imagecreatefromjpeg($img['tmp_name']);$width=imageSX($imgObj);$height=imageSY($imgObj);if($width>600){$height=$height*(600/$width);$width=600;}$thumbWidth=$width;$thumbHeight=$height;$newThumb=imagecreatetruecolor($thumbWidth,$thumbHeight);imagecopyresampled($newThumb,$imgObj,0,0,0,0,$thumbWidth,$thumbHeight,imageSX($imgObj),imageSY($imgObj));if($type=="gif"){imagegif($newThumb,'../images/foto_testimoni/'.$thumbName);}else if($type=="png"){imagejpeg($newThumb,'../images/foto_testimoni/'.$thumbName);}else {imagejpeg($newThumb,'../images/foto_testimoni/'.$thumbName);}imagedestroy($imgObj);imagedestroy($newThumb);if($edit>0){$db->update("testimonial","testimoni='$testimoni', nama='$nama', kota='$kota', judul='$judul', foto='$thumbName', referal='$referal', email='$email', hp='$hp'","no='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=addtestimonial&page=addnew&act=1&no=$no&edit=1'>";}else {$db->insert("testimonial","","'', '$userid', '$nama', '$kota', '$testimoni', '$thumbName', '$clientdate', 0, '$judul', '$referal', '$email', '$hp'");echo "<meta http-equiv='refresh' content='0;URL=?go=testimonial'>";}}else {echo "<br><center><img src='../images/block_user_pic.png' width='75' height='75' border='0' /><br><br><font style='font-size:13pt;font-family:Verdana;color:#FF0000;line-height:160%'><b>File Tidak Valid !</b></font><br><font style='font-size:10pt;font-family:Verdana;line-height:160%'>Silahkan Upload file hanya jpeg, jpg, png atau gif<br><br><a href='javascript:history.go(-1)'><img src='../images/my_btn_back.gif' width='59' height='27' border='0'></a><br><br><br></center>";}};echo '';}if(isset($_GET['page'])&&$_GET['page']=="publish"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}$db->update("testimonial","published='$pub'","no='$no'");if($pub==1){$sql=mysql_query("SELECT * FROM testimonial WHERE no='$no'");$num=mysql_num_rows($sql);while($row=mysql_fetch_array($sql)){$usr=$row['userid'];$judul=$row['judul'];$isi=$row['testimoni'];$referal=$row['referal'];$spon_nama=$db->dataku("nama",$usr);$spon_mail=$db->dataku("email",$usr);$tgl=formatgl($clientdate);$waktu=date("H:i:s");


$isimail_e="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$spon_nama." (".$mid."),</p>
<p>Your testimonial has been approved.</p>
<p><strong>Title: ".$judul."</strong><br>
Testimonials : ".$isi."<br>
Date : ".$tgl."<br>
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($spon_mail, $spon_nama);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$spon_nama.', Your testimonial has been approved.';
        $mail3b->msgHTML($isimail_e);
    $mail3b->send();	




}}


echo "<meta http-equiv='refresh' content='0;URL=?go=testimonial'>";;echo '';}if(isset($_GET['page'])&&$_GET['page']=="delete"){if(isset($_GET["no"])){$no=$_GET["no"];}$sqlc=mysql_query("SELECT * FROM testimonial WHERE no='$no'");$numc=mysql_num_rows($sqlc);while($rowc=mysql_fetch_array($sqlc)){$usr=$rowc['userid'];$jml=$rowc['hp'];$fotoe=$rowc['foto'];unlink("../images/foto_testimoni/$fotoe");}$db->delete("testimonial","no=$no");echo "<meta http-equiv='refresh' content='0;URL=?go=testimonial'>";;echo '';}?>