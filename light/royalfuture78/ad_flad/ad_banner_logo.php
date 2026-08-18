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
	var answer = confirm("Are You sure to delete this logo?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=bannerlogo&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" /> Banner Logo </h2>
<div id="menu_button2">
  <ul>
   <li></li>
  </ul>
</div>
';if(isset($_GET['page'])&&$_GET['page']=="addnew"){if(isset($_GET["edit"])){$edit=$_GET["edit"];}if(isset($_GET["no"])){$no=$_GET["no"];}if($edit==1){$db->select("id, nama, url, published, banner, hits","banner_logo","id=$no");$menutype=$db->result(0,"url");$menuitem=$db->result(0,"hits");$name_edit=$db->result(0,"nama");$foto=$db->result(0,"banner");$edit="1";}else {if(empty($menutype)){$menutype="";}if(empty($menuitem)){$menuitem="";}if(empty($name_edit)){$name_edit="";}if(empty($foto)){$foto="";}$edit="0";};echo '<form action="?go=bannerlogo&page=submit" method="post" enctype="multipart/form-data" name="form2" onsubmit="return Validate(this);">
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td colspan="2" align="center">
    ';if($edit>0){echo "<h4>Edit Banner Item</h4>";}else {echo "<h4>Create Banner Item</h4>";};echo '			</td>
    </tr>
    <tr>
      <td width="35%" align="right">Title :</td>
      <td width="65%"><label>
        <input name="title" type="text" id="title" value="';echo $name_edit;;echo '" size="50">
        <input name="type" type="hidden" id="type" value="';echo $menuitem;;echo '">
        <input name="no" type="hidden" id="no" value="';echo $no;;echo '" />
        <input name="edit" type="hidden" id="edit" value="';echo $edit;;echo '" />
      </label></td>
    </tr>

    <tr>
      <td align="right">Link/URL:</td>
      <td><input name="link" type="text" id="link" value="';echo $menutype;;echo '" size="50"></td>
    </tr>
    <tr>
      <td align="right">File Banner :</td>
      <td><label>
       ';$adafoto=$foto;$dirfoto="../images/banner/$adafoto";$ukr2=getimagesize($dirfoto);$w2=$ukr2[0];$h2=$ukr2[1];if($w2>100){$width="100px";}if(!empty($adafoto)&&(file_exists($dirfoto))){$gambar="<a href='../images/banner/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../images/banner/$adafoto' class='imgFloatLeft' width='$width'></a>";}else {$gambar="<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='200'></a>";};echo '                  ';echo $gambar;;echo '<br /><br />
                  <input name="img1" type="file" id="img1" size="40" class="form" />
                  </label>
                    <input name="fotone" type="hidden" class="form" id="fotone" value="';echo $foto;;echo '" size="12" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Published :</td>
      <td><p>
        <label>
          <input name="publish" type="radio" id="publish_0" value="1" checked>
          Yes</label> 
        <label>
          <input type="radio" name="publish" value="0" id="publish_1">
          No</label>
        <br>
      </p></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><label>
       
		
		'; if($demomode == 1){ ;echo '	  <input type="button" onclick=\'return confirmActiondemomode()\' name="submit" value="Simpan Gambar" class="submit">
      '; } else { ;echo '            <input type="submit" name="button2" id="button2" value="Simpan Gambar" class="submit">
            '; } ;echo '
		
		
      </label></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td></td>
    </tr>
  </table>
</form>
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
';}else if(isset($_GET['page'])&&$_GET['page']=="submit"){$title=$_POST['title'];$type=$_POST['type'];$no=$_POST['no'];$link=$_POST['link'];$publish=$_POST['publish'];$edit=$_POST['edit'];$fotone=$_POST['fotone'];$jenis_gambar=$_FILES['img1']['type'];if($jenis_gambar=="image/jpeg"||$jenis_gambar=="image/jpg"||$jenis_gambar=="image/gif"||$jenis_gambar=="image/png"){$gambar=$namafolder.basename($_FILES['img1']['name']);$time=date("Ymd-His");$sess=md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz",64)),0,24));$logo="logo_".$sess."_".$time;$extension=explode("/",$_FILES["img1"]["type"]);$thumbName=$logo.".".$extension[1];move_uploaded_file($_FILES["img1"]["tmp_name"],"../images/banner/".$logo.".".$extension[1]);if(!empty($_FILES["img1"]["tmp_name"])){$foto=$thumbName;unlink("../images/banner/$fotone");}else{$foto=$fotone;}if($edit>0){$db->update("banner_logo","nama='$title', banner='$foto', url='$link', published='$publish'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=bannerlogo'>";}else {$db->insert("banner_logo","nama, banner, url, hits, ordering, published","'$title', '$foto', '$link', 0, '$order', '$publish'");echo "<meta http-equiv='refresh' content='0;URL=?go=bannerlogo'>";}}else {echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";};echo '';}else if(isset($_GET['page'])&&$_GET['page']=="publish"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}$db->update("banner_logo","published='$pub'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=bannerlogo'>";;echo '';}else if(isset($_GET['page'])&&$_GET['page']=="delete"){if(isset($_GET["no"])){$no=$_GET["no"];}$sqlber=mysql_query("SELECT * FROM banner_logo WHERE id='$no'");$numbr=mysql_num_rows($sqlber);while($rowbr=mysql_fetch_array($sqlber)){$fotoe=$rowbr['banner'];unlink("../images/banner/$fotoe");}$db->delete("banner_logo","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=bannerlogo'>";;echo '';}else if(isset($_GET['page'])&&$_GET['page']=="ordering"){if(isset($_GET["ord"])){$ord=$_GET["ord"];}if(isset($_GET["step"])){$step=$_GET["step"];}if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["lastid"])){$lastid=$_GET["lastid"];}if(isset($_GET["nextid"])){$nextid=$_GET["nextid"];}if(isset($_GET["kat"])){$kat=$_GET["kat"];}$new_ord=$ord+$step;$new_ord1=$ord;if($step>0){$no_id=$nextid;}else {$no_id=$lastid;}$db->update("banner_logo","ordering='$new_ord'","id='$no'");$db->update("banner_logo","ordering='$new_ord1'","id='$no_id'");echo "<meta http-equiv='refresh' content='0;URL=?go=bannerlogo'>";;echo '';}else {;echo '<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="7%" height="30" align="center">#</td>
    <td width="24%" align="center">Judul</td>
    <td width="7%" align="center">Published</td>
    <td width="56%" align="center">Image</td>
    <td width="6%" align="center">Edit</td>
    <td width="6%" align="center">Hapus</td>
  </tr>
';$limit='20';$scroll='0';$scrollnumber='50';if(!isset($_GET['show'])){$display=1;}else {$display=$_GET['show'];}$start=(($display*$limit)-$limit);$numrows=$db->count_records("banner_logo","");$db->select("id, nama, url, banner, hits, published, ordering","banner_logo","","ordering","","","$start, $limit");$j=$db->num_rows();for($i=0;$i<$j;$i++){$nom=$i+1;$lid=$i-1;if(is_odd($i)==0){$class="tblrow_ganjil";}else {$class="tblrow_genap";}if($db->result($i,"published")>0){$img="<a href='?go=bannerlogo&page=publish&pub=0&no=".$db->result($i,"id")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";}else {$img="<a href='?go=bannerlogo&page=publish&pub=1&no=".$db->result($i,"id")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";}if($db->result($i,"ordering")==1){$ordering="<a href='?go=bannerlogo&page=ordering&step=1&ord=".$db->result($i,"ordering")."&nextid=".$db->result($nom,"id")."&no=".$db->result($i,"id")."'><img src='images/downarrow.png' border=0 title='Move Down'></a>";}else if($db->result($i,"ordering")>1 and $db->result($i,"ordering")<$j){$ordering="<a href='?go=bannerlogo&page=ordering&step=-1&ord=".$db->result($i,"ordering")."&lastid=".$db->result($lid,"id")."&no=".$db->result($i,"id")."'><img src='images/uparrow.png' border=0 title='Move Up'></a>&nbsp;&nbsp;<a href='?go=bannerlogo&page=ordering&step=1&ord=".$db->result($i,"ordering")."&nextid=".$db->result($nom,"id")."&no=".$db->result($i,"id")."'><img src='images/downarrow.png' border=0 title='Move Down'></a>";}else if($db->result($i,"ordering")==$j){$ordering="<a href='?go=bannerlogo&page=ordering&step=-1&ord=".$db->result($i,"ordering")."&lastid=".$db->result($lid,"id")."&no=".$db->result($i,"id")."'><img src='images/uparrow.png' border=0 title='Move Up'></a>";}$adafoto=$db->result($i,"banner");$dirfoto="../images/banner/$adafoto";$ukr2=getimagesize($dirfoto);$w2=$ukr2[0];$h2=$ukr2[1];if($w2>100){$width="100px";}if(!empty($adafoto)&&(file_exists($dirfoto))){$gambar="<a href='../images/banner/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../images/banner/$adafoto' class='imgFloatLeft' width='$width'></a>";}else {$gambar="<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='250'></a>";};echo ' 
 <tr class="';echo $class;;echo '">
    <td align="center">';echo $nom;;echo ' </td>
    <td align="center">';echo $db->result($i,"nama");;echo '</td>
    <td align="center">';echo $img;;echo '</td>
   <td align="center">';echo $gambar;;echo '</td>
    
	<td align="center"><a href="?go=bannerlogo&page=addnew&edit=1&no=';echo $db->result($i,"id");;echo '"><img src=\'images/edit_f2.png\' border=0 title=\'Click to Edit\'></a></td>
	 <td align="center" ><a href="#" onclick=\'confirmation(';echo $db->result($i,"id");;echo ')\' style=\'cursor:hand\'><img src="images/cancel_f2.png" border="0" title="Hapus Logo" /></a></td>
  </tr>
';};echo '	  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
';$paging=ceil($numrows/$limit);if($display>1){$previous=$display-1;;echo '  <a href="?go=bannerlogo&kat=';echo $kat;;echo '&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=bannerlogo&kat=';echo $kat;;echo '&show=';echo $previous;;echo '" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
';}if($numrows!=$limit){if($scroll==1){if($paging>$scrollnumber){$first=$display;$last=($scrollnumber-1)+$display;}}else {$first=1;$last=$paging;}if($last>$paging){$first=$paging-($scrollnumber-1);$last=$paging;}for($i=$first;$i<=$last;$i++){if($display==$i){;echo '[ <b>
';echo $i;echo '</b> ]
';}else {;echo '[ <a href="?go=bannerlogo&kat=';echo $kat;;echo '&show=';echo $i;;echo '" style="font-size:10px; color:#0000CC">
';echo $i;;echo '</a> ]
';}}}if($display<$paging){$next=$display+1;;echo '| <a href="?go=bannerlogo&kat=';echo $kat;;echo '&show=';echo $next;;echo '" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=bannerlogo&kat=';echo $kat;;echo '&show=';echo $paging;;echo '" style="font-size:10px; color:#0000CC">Terakhir >></a>
';};echo '    </td>
  </tr>
</table>
<p>&nbsp;</p>
';}?>