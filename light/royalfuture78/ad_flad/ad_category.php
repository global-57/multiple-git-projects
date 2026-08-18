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
if(basename($_SERVER['SCRIPT_FILENAME'])==basename(__FILE__)){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";exit();};echo '';if(empty($_SESSION["valid_admin"])){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";exit();};echo '';;echo '';if(isset($_GET["type"])){$type=$_GET["type"];}if($type=="content"){$jdlhlm="Category Manager";}else if($type=="faq"){$jdlhlm="FAQ Category";}else {$jdlhlm="Product Category";};echo '<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Are You sure to delete this Category?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=category&page=delete&type=';echo $type;;echo '&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle">';echo $jdlhlm;;echo '</h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=category&page=addnew&edit=0&type=';echo $type;;echo '"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah Category</strong></a></li>
  </ul>
</div>
';if(isset($_GET['page'])&&$_GET['page']=="addnew"){if(isset($_GET["edit"])){$edit=$_GET["edit"];}if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["type"])){$type=$_GET["type"];}if($edit>0){$db->select("id, parent_id, title, published","categories","id='$no'");$title=$db->result(0,"title");$publish=$db->result(0,"published");$pid=$db->result(0,"parent_id");$judul="Edit a Category";}else {$author=$valid_admin;$crdate=$clientdate;if(empty($title)){$title="";}$judul="Create New Category";};echo '<form name="form_category" method="post" action="?go=category&page=submit">
  <table width="98%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="4"><h4>';echo $judul;;echo '</h4></td>
    </tr>
    <tr>
      <td align="right">Parent :</td>
      <td><label>
        <select name="parent" id="parent">
          <option value="0">0</option>
    ';$db->select("id, parent_id, title, published","categories","section='$type' and parent_id=0");while($data=$db->fetch_row()){if($pid==$data[0]){$sel="selected";}else {$sel="";}echo "<option value=$data[0] $sel>$data[2]</option>";$sql=mysql_query("select id, parent_id, title, published from categories where section='$type' and parent_id=$data[0]");while($row=mysql_fetch_row($sql)){echo "<option value=$row[0]>&nbsp;| $row[2]</option>";}};echo '	     
        </select>
      </label></td>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="10%" align="right">Title :</td>
      <td width="52%"><label>
        <input name="title" type="text" id="title" value="';echo $title;;echo '" size="50">
      </label></td>
      <td width="16%" align="right">&nbsp;</td>
      <td width="22%">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="top">Published :</td>
      <td colspan="3"><p>
        <label>
          <input name="publish" type="radio" id="publish_0" value="1" checked>
          Yes</label> 
        <label>
          <input type="radio" name="publish" value="0" id="publish_1">
          No</label>
        <input name="no" type="hidden" id="no" value="';echo $no;;echo '" size="20">
        <input name="edit" type="hidden" id="edit" value="';echo $edit;;echo '" size="20">
        <input name="type" type="hidden" id="type" value="';echo $type;;echo '" size="20" />
        <br>
      </p></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td colspan="3"><label>
        <input type="submit"  value="SAVE" class="submit">
        
      </label><label><input type="button" name="cancel" id="cancel" value="CANCEL" onClick="javascript:history.go(-1)" class="submir">
      </label></td>
    </tr>
  </table>
</form>
  <script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("form_category");
 frmvalidator.addValidation("title","req","Title harus diisi, silahkan ulangi lagi!");
</script>  
';}else if(isset($_GET['page'])&&$_GET['page']=="submit"){$title=$_POST['title'];$parent=$_POST['parent'];$publish=$_POST['publish'];$no=$_POST['no'];$edit=$_POST['edit'];$type=$_POST['type'];if($edit>0){$db->update("categories","parent_id='$parent', title='$title', published='$publish'","id='$no'");}else {$db->insert("categories","parent_id, title, alias, section, published","'$parent', '$title', '$title', '$type', $publish");}echo "<meta http-equiv='refresh' content='0;URL=?go=category&type=$type'>";;echo '';}else if(isset($_GET['page'])&&$_GET['page']=="publish"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}if(isset($_GET["type"])){$type=$_GET["type"];}$db->update("categories","published='$pub'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=category&type=$type'>";;echo '';}else if(isset($_GET['page'])&&$_GET['page']=="delete"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["type"])){$type=$_GET["type"];}$db->delete("categories","id=$no");echo "<meta http-equiv='refresh' content='0;URL=?go=category&type=$type'>";;echo '';}else if(isset($_GET['page'])&&$_GET['page']=="frontpage"){if(isset($_GET["no"])){$no=$_GET["no"];}if(isset($_GET["pub"])){$pub=$_GET["pub"];}if(isset($_GET["type"])){$type=$_GET["type"];}$db->update("categories","frontpage='$pub'","id='$no'");echo "<meta http-equiv='refresh' content='0;URL=?go=category&type=$type'>";;echo '';}else {;echo '	
<table width="90%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
    <td width="5%" align="center">#</td>
    <td width="6%" align="center">ID</td>
    <td width="59%" align="center">Title</td>
    <td width="16%" align="center">Published</td>
    <td width="14%" align="center">Hapus</td>
  </tr>
';$db->select("id, parent_id, title, published","categories","section='$type' and parent_id=0","title");$j=$db->num_rows();for($i=0;$i<$j;$i++){$nom=$i+1;$lid=$i-1;if(is_odd($i)==0){$class="tblrow_ganjil";}else {$class="tblrow_genap";}if($db->result($i,"published")>0){$img="<a href='?go=category&page=publish&type=".$type."&pub=0&no=".$db->result($i,"id")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";}else {$img="<a href='?go=category&page=publish&type=".$type."&pub=1&no=".$db->result($i,"id")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";};echo '  <tr class="';echo $class;;echo '">
    <td width="5%">';echo $nom;;echo ' </td>
    <td width="6%">';echo $db->result($i,"id");;echo '</td>
    <td>
   
   <a href="?go=category&page=addnew&edit=1&type=';echo $type;;echo '&no=';echo $db->result($i,"id");;echo '">';echo $db->result($i,"title");;echo '</a></td>
    <td align="center">';echo $img;;echo '</td>
    <td align="center"><a href="#" onClick=\'confirmation(';echo $db->result($i,"id");;echo ')\' style=\'cursor:hand\'><img src=\'images/icon-32-delete_resize.png\' border=0 title=\'Click to Hapus\'></a></td>
  </tr>
';$sql=mysql_query("select id, parent_id, title, published from categories where section='$type' and parent_id=".$db->result($i,"id")."");$nome=$nom+1;while($row=mysql_fetch_row($sql)){;echo '			<tr class="';echo $class;;echo '">
        <td width="5%">';echo $nome;;echo ' </td>
        <td width="6%">';echo $row[0];;echo '</td>
        <td>&nbsp;|
       
       <a href="?go=category&page=addnew&edit=1&type=';echo $type;;echo '&no=';echo $row[0];;echo '">';echo $row[2];;echo '</a></td>
        <td align="center">';echo $img;;echo '</td>
        <td align="center"><div id="delete"><a href="#" onClick=\'confirmation(';echo $row[0];;echo ')\' style=\'cursor:hand; padding-left:15px\'>Delete</a></div></td>
      </tr>
        ';$nome++;}};echo '	  
</table>
<p>&nbsp;</p>
';}?>