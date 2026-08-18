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
	var answer = confirm("Are You sure to delete this video ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=addvideo&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<style type="text/css">
<!--
.style1 {font-size: x-small}
.style2 {font-size: x-small; color: #CCCCCC; }
.style3 {color: #FF0000}
.style5 {
	color: #99CC00;
	font-weight: bold;
}
-->
</style>

<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> YouTube Video Gallery </h2>
<div id="menu_button2"> 
  <ul>
    <li><a href="?go=addvideo&amp;page=addnew&edit=0">Tambah Video</a><a href="?m=newssilver"></a></li>
  </ul>
</div>
';if(isset($_GET['page'])&&$_GET['page']=="addnew"){if(isset($_GET["edit"])){$edit=$_GET["edit"];}if(isset($_GET["no"])){$no=$_GET["no"];}if($edit>0){$db->select("id_berita, id_user, judul, isi_berita, gambar, gambar2, tanggal, counter, published, kode, link","video","id_berita='$no'");$no=$db->result(0,"id_berita");$kode=$db->result(0,"kode");$foto=$db->result(0,"gambar");$foto2=$db->result(0,"gambar2");$isi=$db->result(0,"isi_berita");$judul=$db->result(0,"judul");$userid=$db->result(0,"id_user");$edit="1";}else {if(empty($isi)){$isi="";}if(empty($judul)){$judul="";}if(empty($no)){$no="";}if(empty($kode)){$kode="";}if(empty($foto)){$foto="";}if(empty($foto2)){$foto2="";}$edit="0";};echo '<form action="?go=addvideo&amp;page=submit" method="post" enctype="multipart/form-data">
  <div align="center">
    <center>
      <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber1" bordercolor="#EDEDE9">
        <tr class="tbl_header">
          <td width="100%" align="center">
		  ';if(isset($_GET['act'])==1){;echo '<div id="notice"><img src="images/notice-info.png" width="29" height="29" align="absmiddle" />Data telah berhasil diupdate ! </div>
	 ';};echo '            <b><font face="Arial">Input Postingan</font></b></td>
        </tr>
        <tr>
          <td width="100%" style="border-style: none; border-width: medium"><div align="center">
              <table width="100%" border="0" cellspacing="0" cellpadding="1">
                <tr> 
                  <td align="left"><div align="left"></div></td>
                </tr>
                <tr> 
                  <td align="left">
<p align="center" class="style5">Form Pengisian Artikel </p>
                    </td>
                </tr>
                <tr bgcolor="#FF9933"> 
                  <td align="left"><div align="center"><font color="#000000" size="2"><strong>JUDUL</strong></font></div></td>
                </tr>
                <tr> 
                  <td align="left"><div align="center"><span class="style5">Judul 
                      Video : </span><span class="style3">*</span> 
                      <input name="edit" type="hidden" id="edit" value="';echo $edit;;echo '" />
                      <input name="no" type="hidden" class="form" id="no" value="';echo $no;;echo '" size="10" />
                    </div></td>
                </tr>
                <tr> 
                  <td height="7" align="center"><textarea name="judul" cols="150" rows="2" class="form">';echo $judul;;echo '</textarea></td>
                </tr>
                <tr> 
                  <td align="left"><div align="center" class="style2"></div></td>
                </tr>
                <tr bgcolor="#FF9933"> 
                  <td align="left"><div align="center"><font color="#000000" size="2"><strong>ISI</strong></font></div></td>
                </tr>
                <tr> 
                  <td align="left"><div align="center"><span class="style5"><strong>Keterangan 
                      Video:</strong></span> <span class="style3">*</span> </div></td>
                </tr>
                <tr> 
                  <td align="center"><textarea name="testi" cols="150" rows="15" class="form" id="testi">';echo $isi;;echo '</textarea></td>
                </tr>
                <tr> 
                  <td align="center"><div align="center" class="style2"></div></td>
                </tr>
				 <tr> 
                  <td align="left"><div align="center"><span class="style5">Kode Video You tube 
                      Video : </span><span class="style3">*</span> 
                      <input name="kode" type="text" id="kode" value="';echo $kode;;echo '" size="30" />
					  <br /><br /> Contoh: http://youtu.be/<span class="style3">dFdV0OTQg3Q</span><-- warna merah
                    </div></td>
                </tr>
                <tr> 
                  <td align="center">&nbsp;</td>
                </tr>
                <tr> 
                  <td align="center"><div align="center" class="style5">Thumbnail Gambar
                      : </div></td>
                </tr>
                <tr> 
                  <td align="center"><div align="center"> 
                      <label> 
                      ';$adafoto=$foto;if(!empty($adafoto)){$gambar="<a href='$adafoto' class='highslide' onclick='return hs.expand(this)'><img src='$adafoto' class='imgFloatLeft' width='150'></a>";}else {$gambar="<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='150'></a>";};echo '                  ';echo $gambar;;echo '                     
                    </div></td>
                </tr>
                <tr> 
                  <td align="left"><div align="center" class="style1"></div></td>
                </tr>
				 <tr> 
                  <td align="center"><div align="center" class="style5">Embeded Video (Besar) 
                      : </div></td>
                </tr>
				  <tr> 
                  <td align="center"><div align="center"> 
                      <label> 
                     
		 ';$adafoto2=$foto2;if(!empty($adafoto2)){$gambar2=$foto2;}else {$gambar2="<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='150'></a>";};echo '                  ';echo $gambar2;;echo '		 
		 
		</label>
                     
                    </div></td>
                </tr>
                <tr> 
                  <td align="left">&nbsp;</td>
                </tr>
                <tr> 
                  <td align="left">&nbsp;</td>
                </tr>
                <tr> 
                  <td align="left"><div align="center"> 
                      <label> 
                      <input type="submit"  value="SAVE" class="button" />
                      </label>
                      <label> 
                      <input type="button" name="cancel" id="cancel" value="CANCEL" onclick="javascript:history.go(-1)" class="cancelbutton" />
                      </label>
                    </div></td>
                </tr>
              </table>
          </div></td>
        </tr>
      </table>
    </center>
  </div>
</form>
';}if(isset($_GET['page'])&&$_GET['page']=="submit"){$edit=$_POST['edit'];$no=$_POST['no'];$judul=mysql_real_escape_string($_POST['judul']);$testi=mysql_real_escape_string($_POST['testi']);$kode=$_POST['kode'];$uploadfile='http://img.youtube.com/vi/'.$kode.'/0.jpg';$uploadfile2='<iframe width="560" height="315" src="//www.youtube.com/embed/'.$kode.'" frameborder="0" allowfullscreen></iframe>';$link='http://www.youtube.com/v/'.$kode.'?version=3&amp;&autoplay=1&rel=0';if($edit>0){$tgl_sekarang=date("Y-m-d");$jam_sekarang=date("H:i:s");$clientdate=date("Y-m-d H:i:s");$db->update("video","isi_berita='$testi', judul='$judul', tanggal='$clientdate', gambar='$uploadfile', gambar2='$uploadfile2', kode='$kode', link='$link'","id_berita='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=addvideo&page=addnew&edit=1&no=$no'>";}else {$clientdate=date("Y-m-d H:i:s");$db->insert("video","","'', 'admin', '$judul', '$testi', '$uploadfile', '$uploadfile2', '$clientdate', 0, 0, '$kode', '$link'");echo "<meta http-equiv='refresh' content='0;URL=?go=video'>";};echo '';}if(isset($_GET['page'])&&$_GET['page']=="publish"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}$db->update("video","published='$pub'","id_berita='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=video'>";;echo '';}if(isset($_GET['page'])&&$_GET['page']=="delete"){if(isset($_GET["no"])){$no=$_GET["no"];}$db->delete("video","id_berita=$no");echo "<meta http-equiv='refresh' content='0;URL=?go=video'>";;echo '';}?>