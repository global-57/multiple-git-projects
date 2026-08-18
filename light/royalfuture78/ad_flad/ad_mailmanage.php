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
	var answer = confirm("Yakin akan menghapus template email ini? Anda harus setting sistem email dari awal jika menghapus template!")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=email-manager&page=delete&id=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Email (EN)</h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=email-manager&amp;page=addnew&edit=0"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah Email</strong></a></li>
  </ul>
</div>
';if(isset($_GET['page'])&&$_GET['page']=="addnew"){if(isset($_GET["edit"])){$edit=$_GET["edit"];}if(isset($_GET["id"])){$id=$_GET["id"];}if($edit>0){$db->select("id, nama, subject, isimail, teks, tgl, published, protokol","mailtmp","id='".mysql_real_escape_string($id)."'");$id=$db->result(0,"id");$nama=$db->result(0,"nama");$isimail=$db->result(0,"isimail");$protokol=$db->result(0,"protokol");$teks=$db->result(0,"teks");$subject=$db->result(0,"subject");$published=$db->result(0,"published");$edit="1";}else {$id="";$nama="";$isimail="";$pengirim="";$protokol="";$teks="";$subject="";$published="";$edit="0";};echo '
<form action="?go=email-manager&amp;page=submit" method="post" enctype="multipart/form-data" name="myform">
  <div align="center">
    <center>
      <table border="0" cellpadding="5" cellspacing="5" style="border-collapse: collapse" width="99%" id="AutoNumber1" bordercolor="#EDEDE9">
        <tr>
          <td width="100%"><div style="width:640px; margin-left:125px">';$results=$_GET['act'];if($results=="1"){echo "<div class='alert-box successs' width='70%'><span>sukses : </span>Data telah berhasil diupdate !</div>";};echo '</div>
		</td>
        </tr>
        <tr>
          <td width="100%" style="border-style: none; border-width: medium"><div align="center">
            <table width="100%" border="0" cellspacing="5" cellpadding="3">
                <tr>
                <td width="12%" align="right"><div align="right">Nama Email : </div></td>
                <td width="88%"><input name="nama" type="text" class="form" id="nama" value="';echo $nama;;echo '" size="70" />
				<input name="id" type="hidden" id="id" value="';echo $id;;echo '" size="10" />
                    <input name="edit" type="hidden" id="edit" value="';echo $edit;;echo '"/>
                    <input name="tgl" type="hidden" id="tgl" value="';echo $clientdate;;echo '"/>
					<input name="published" type="hidden" id="published" value="';echo $published;;echo '"/>
				</td>
              </tr>
             <tr>
                <td width="12%" align="right"><div align="right">Subject Email : </div></td>
                <td width="88%"><input name="subject" type="text" class="form" id="subject" value="';echo $subject;;echo '" size="70" />
				
				</td>
              </tr>
			  <tr>
                <td width="12%" align="right"><div align="right">Status Pengiriman : </div></td>
                <td width="88%">
        <select name="publish" style="width:100px">
									 ';if($published>0){;echo '									 <option value="1" selected="selected">Aktif</option>
									 <option value="0">Nonaktif</option>
				                     ';}else {;echo '				                     <option value="1" >Aktif</option>
									 <option value="0" selected="selected">Nonaktif</option>
				                     ';};echo '                    </select>
        <br>
				
				</td>
              </tr>
            <!-- <tr>
                <td width="29%" align="right"><div align="right">Jenis Email Dikirim : </div></td>
                <td width="71%">
				 <select name="protokol" style="width:100px">
									 ';;echo '									 <option value="1" selected="selected">HTML</option>
									 <option value="0">Plain Text</option>
				                     ';;echo '				                     <option value="1" >HTML</option>
									 <option value="0" selected="selected">Plain Text</option>
				                     ';;echo '                                     </select>
				 
        <br>
				</td>
              </tr>

			   <tr>
                <td width="29%" align="right"><div align="right">Plain Text Email : </div></td>
                <td width="71%">
				  <textarea cols="70" id="teks" name="teks" rows="10">';;echo '</textarea>
				</td>
              </tr>-->
              <tr>
                <td align="right" valign="top"><div align="right">HTML Email  : </div>
                  <div align="right"></div></td>
                <td valign="top">
				 <textarea cols="70" id="editor1" name="editor1" rows="10">';echo $isimail;;echo '</textarea>
			<script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( \'editor1\',
					{
						fullPage: true,
	                    allowedContent: true
					});

			//]]>
			</script>
				</td>
              </tr>
			 
              <tr>
                <td align="right">&nbsp;</td>
                <td><label>
                <input type="submit"  value="SAVE" class="submit"  id="save"/>
</label>
                  <label>
                  <input type="button" name="cancel" id="cancel" value="CANCEL" onclick="javascript:history.go(-1)" class="submit" />
                  </label></td>
              </tr>
			   <tr>
                <td align="right">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td align="right">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
    </center>
  </div>
</form>

';}else if(isset($_GET['page'])&&$_GET['page']=="submit"){$subject=$_POST['subject'];$edit=$_POST['edit'];$id=$_POST['id'];$nama=$_POST['nama'];$teks=$_POST['teks'];$protokol=$_POST['protokol'];$isimail=$_POST['editor1'];$tgl=$_POST['tgl'];$published=$_POST['publish'];if($edit>0){$db->update("mailtmp","nama='".mysql_real_escape_string($nama)."', subject='".mysql_real_escape_string($subject)."', teks='".mysql_real_escape_string($teks)."', isimail='".$isimail."', tgl='$tgl', protokol='".mysql_real_escape_string($protokol)."', published='$published'","id='$id'");header("location: ?go=email-manager&page=addnew&act=1&id=$id&edit=1");exit;}else {$db->insert("mailtmp","","'', '".mysql_real_escape_string($nama)."', '".mysql_real_escape_string($subject)."', '".mysql_real_escape_string($isimail)."', '".mysql_real_escape_string($teks)."', '$tgl', '1', '$protokol'");header("location: ?go=email-manager&result=success");exit;};echo '';}else if(isset($_GET['page'])&&$_GET['page']=="publish"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}$db->update("mailtmp","published='$pub'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=email-manager'>";;echo '';}else if(isset($_GET['page'])&&$_GET['page']=="delete"){if(isset($_GET["id"])){$id=$_GET["id"];}$db->delete("mailtmp","id=$id");echo "<meta http-equiv='refresh' content='0;URL=?go=email-manager'>";;echo '';}else {;echo '';$limit='50';$scroll='0';$scrollnumber='50';if(!isset($_GET['show'])){$display=1;}else {$display=$_GET['show'];}$start=(($display*$limit)-$limit);$numrows=$db->count_records("mailtmp","");$db->select("id, nama, subject, isimail, teks, tgl, published, protokol","mailtmp","","nama ASC","","","$start, $limit");;echo '
';$results=$_GET['result'];if($results=="success"){echo "<div class='alert-box successs'><span>sukses : </span><br />Email berhasil dibuat!</div>";};echo '<table width="100%" border="0" cellspacing="0" cellpadding="5">
  
  <tr class="tbl_header">
    <td width="8%" align="center">#</td>
    <td width="70%" align="center">Nama Email</td>
	 <td width="7%" align="center">Status</td>
	 <td width="8%" align="center">Edit</td>
    <td width="7%" align="center">Hapus</td>
  </tr>
';$j=$db->num_rows();for($i=0;$i<$j;$i++){$nom=$i+1;$lid=$i-1;if(is_odd($i)==0){$class="tblrow_ganjil";}else {$class="tblrow_genap";}if($db->result($i,"published")>0){$img="<a href='?go=email-manager&page=publish&pub=0&no=".$db->result($i,"id")."'><img src='images/tick.png' border=0 title='Click to Disable'></a>";}else {$img="<a href='?go=email-manager&page=publish&pub=1&no=".$db->result($i,"id")."'><img src='images/publish_x.png' border=0 title='Click to Enable'></a>";}if($db->result($i,"protokol")>0){$protokol="HTML Email";}else {$protokol="Plain Text Email";}$id=$db->result($i,"id");$nama=$db->result($i,"nama");;echo ' 
  <tr class="';echo $class;;echo '">
    <td align="center" width="8%" >';echo $nom;;echo ' </td>
    <td align="left" width="70%" >';echo $nama;;echo '</td> 
    <td align="center" width="7%" >';echo $img;;echo '</td> 
   <td align="center" ><a href="?go=email-manager&page=addnew&edit=1&id=';echo $db->result($i,"id");;echo '"><img src=\'../images/edit_f2.png\' border=0 title=\'Edit Email\' width="24"></a></td>
    <td align="center" ><a href="#" onclick=\'confirmation(';echo $db->result($i,"id");;echo ')\' style=\'cursor:hand\'><img src="images/cancel_f2.png" border="0" title="Hapus Email" width="24"/></a></td>
  </tr>
';};echo '	  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
     ';$paging=ceil($numrows/$limit);if($display>1){$previous=$display-1;;echo '  <a href="?go=email-manager&kat=';echo $kat;;echo '&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=email-manager&kat=';echo $kat;;echo '&show=';echo $previous;;echo '" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
  ';}if($numrows!=$limit){if($scroll==1){if($paging>$scrollnumber){$first=$display;$last=($scrollnumber-1)+$display;}}else {$first=1;$last=$paging;}if($last>$paging){$first=$paging-($scrollnumber-1);$last=$paging;}for($i=$first;$i<=$last;$i++){if($display==$i){;echo '[ <b>
';echo $i;echo '</b> ]
';}else {;echo '[ <a href="?go=email-manager&kat=';echo $kat;;echo '&show=';echo $i;;echo '" style="font-size:10px; color:#0000CC">
';echo $i;;echo '</a> ]
';}}}if($display<$paging){$next=$display+1;;echo '| <a href="?go=email-manager&kat=';echo $kat;;echo '&show=';echo $next;;echo '" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=email-manager&kat=';echo $kat;;echo '&show=';echo $paging;;echo '" style="font-size:10px; color:#0000CC">Terakhir >></a>
';};echo '    </td>
  </tr>
</table>
<p>&nbsp;</p>
';}?>