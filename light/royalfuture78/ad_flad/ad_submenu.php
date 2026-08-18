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
?>
<script type="text/javascript">
function confirmation(noid, kat) {
	var answer = confirm("Are You sure to delete this menu?")
	if (answer){
		window.location = "?go=submenu&page=delete&no=" + noid + "&kat=" + kat;
	}
}
</script>
<script language="JavaScript" type="text/JavaScript">
 function showKab()
 {
<?php
 $query = "SELECT id, title FROM categories";
 $hasil = mysql_query($query);
 while ($data = mysql_fetch_array($hasil))
 {
   $idProp = $data['id'];
   echo "if (document.submenu.cat.value == \"".$idProp."\")";
   echo "{";
   $query2 = "SELECT id, title FROM content WHERE catid = '$idProp'";
   $hasil2 = mysql_query($query2);
   $content = "document.getElementById('itemid').innerHTML = \"";
   while ($data2 = mysql_fetch_array($hasil2))
   {
       $content .= "<option value='".$data2['id']."'>".$data2['title']."</option>";   
   }
   $content .= "\"";
   echo $content;
   echo "}\n";   
 }
?> 
 }
</script>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" />Sub Menu Manager</h2>
<?php
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }
?>
<div id="menu_button2">
  <ul>
   <li><a href="?go=submenu&page=newmenu&kat=<?php echo $kat; ?>"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah Sub Menu</strong></a></li>
  </ul>
</div>
<?php
if (isset($_GET['page']) && $_GET['page'] == "newmenu") {
?>
<?php
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }
if(isset($_GET["katm"])){ $katm = $_GET["katm"]; }
?>
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="1">
  <tr>
    <td><h4>Create Menu Item - <?php echo $kat; ?></h4>
    <p>Please select menu type :</p></td>
  </tr>
  <tr>
    <td><form name="form1" method="post" action="?go=submenu&page=addnew">
      <p><label><input type="radio" name="menuitem" value="Article" id="menuitem_0">Article </label>
      <label><input name="kat" type="hidden" id="kat" value="<?php echo $kat; ?>" /></label>
      <input name="katm" type="hidden" id="katm" value="<?php echo $katm; ?>" />
        <br>
        <label>
        <input type="radio" name="menuitem" value="Link" id="menuitem_2">External/Internal Link</label>
        <br></p>
        <p><label><input type="submit" name="button" id="button" value="NEXT STEP"></label>
       <br></p></form>
 </td></tr></table>
<p>&nbsp;</p>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "addnew") {
?>
<?php
if(isset($_GET["edit"]) == 1) {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }
if(isset($_GET["katm"])){ $katm = $_GET["katm"]; }
		$db->select("id, name, link, published, alias, type, menutype, class, image, namaid", "submenu", "id=$no");	
		$menutype = $db->result(0, "link");
		$menuitem = $db->result(0, "type");
		$name_edit = $db->result(0, "name");
		$alias_edit = $db->result(0, "alias");
		$titleid = $db->result(0, "namaid");
		$class = $db->result(0, "class");
		$menut = $db->result(0, "menutype");
		$icon = $db->result(0, "image");
		 $edit = "1";
		$li0 = array();
		$li = explode("=", $menutype);
        if (isset($li[2])){
		$li0 = $li[2];
		}
	} else {
		$edit = "0";
		if(empty($name_edit)){ $name_edit = ""; }
		if(empty($alias_edit)){ $alias_edit = ""; }
		if(isset($_POST['kat'])){ $kat = $_POST['kat']; }
		if(isset($_POST['ktm'])){ $ktm = $_POST['ktm']; }
		if($_POST['menuitem'] == "Article") {
		$menutype = "./page.php?do=article";
		}else{
		$menutype = "";
		}
	}
?>
<form name="submenu" method="post" action="?go=submenu&page=submit" id="submenu">
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr> 
      <td colspan="2" align="center"> 
       <?php
	 	if(isset($_GET["edit"]) > 0) {
			echo "<h4>Edit Menu Item</h4>";
		} else	{
			echo "<h4>Create Menu Item</h4>";
		}
	?>		
      </td>
    </tr>
    <tr> 
      <td align="right">Catagory Menu :</td>
      <td> 
        <?= $kat; ?>
      </td>
    </tr>
    <tr> 
      <td width="35%" align="right">Title :</td>
      <td width="65%"><label> 
        <input name="title" type="text" id="title" value="<?php echo $name_edit; ?>" size="30">
        <input name="type" type="hidden" id="type" value="<?php echo $menuitem; ?>">
        <input name="no" type="hidden" id="no" value="<?php echo $no; ?>" />
        <input name="edit" type="hidden" id="edit" value="<?php echo $edit; ?>" />
        <input name="kat" type="hidden" id="kat" value="<?php echo $kat; ?>" />
		<input name="menu" type="hidden" id="menu" value="<?php echo $menu; ?>" />
        </label></td>
    </tr>
	<tr>
      <td width="35%" align="right">Title (ID) :</td>
      <td width="65%"><label>
        <input name="titleid" type="text" id="titleid" value="<?php echo $titleid; ?>" size="30">
      </label></td>
    </tr>
    <tr> 
      <td align="right">Alias :</td>
      <td><input name="alias" type="text" id="alias" value="<?php echo $alias_edit; ?>" size="30"></td>
    </tr>
	<tr> 
      <td align="right">Icon :</td>
      <td><input name="icon" type="text" id="icon" value="<?php echo $icon; ?>" size="30"></td>
    </tr>
    <tr> 
      <td align="right">Link :</td>
      <td><input name="link" type="text" id="link" value="<?php echo $menutype; ?>" size="30"></td>
    </tr>
	 <tr> 
      <td align="right">class :</td>
      <td><input name="class" type="text" id="class" value="<?php echo $class; ?>" size="30"></td>
    </tr>
	<tr> 
      <td align="right">Info :</td>
      <td><input name="info" type="text" id="info" value="<?php echo $info; ?>" size="30"></td>
    </tr>
    <tr>
      <td align="right">Root Menu : </td>
      <td><select name="menu" id="menu">
          <option>- Select Root menu -</option>
          <?
		 $sql = $db->select("id, parent", "submenu", "id='$no'");
		 $p = $db->fetch_row($sql);
		 $parent = $p[1];
		 $li0 = $parent;
		if($edit == 1){
	 	$db->select("id, name", "menu", "menutype='$kat'");
		} else {
		$db->select("id, name", "menu", "menutype='$kat'");
		}
		$j=$db->num_rows();

for($i=0;$i<$j;$i++) {	

		if($li0 == $db->result($i, "id")) {
			$sel = " selected='selected'";
		} else {
			$sel = "";
		}	
		echo "<option value='".$db->result($i, "id")."' $sel>".$db->result($i, "name")."</option>";
	}	

	 ?>

        </select></td>
    </tr>
    <tr> 
      <td align="right">Published :</td>
      <td><p> 
          <label> <input name="publish" type="radio" id="publish_0" value="1" checked>Yes</label>
          <label> <input type="radio" name="publish" value="0" id="publish_1">No</label>
          <br>
        </p></td>
    </tr>

<?php
if(isset($_GET["edit"]) > 0) {
}else{
?>			
<?php
if($_POST['menuitem'] == "Article") {
?>
    <tr> 
      <td align="right">Category :</td>
      <td><label> 
        <select name="cat" id="cat" onChange="showKab()">
          <option></option>
       <?php
	 	$db->select("id, title", "categories", "section='content'");
		$j=$db->num_rows();
for($i=0;$i<$j;$i++) {	
		if($_GET['catid'] == $db->result($i, "id")) {
			$sel = " selected='selected'";
		} else {
			$sel = "";
		}	
		echo "<option value='".$db->result($i, "id")."' $sel>".$db->result($i, "title")."</option>";
	}	

	 ?>
        </select>
        </label></td>
    </tr>
    <tr> 
      <td align="right">Item ID :</td>
      <td>
	  <?php
	  if($edit > 0){
	  ?>
	  <select name="itemid" id="itemid">
          <option></option>
        <?php
		$sq = $db->select("id","content","catid='$catid'");
		$yy = $db->fetch_array($sq);
		$itemid = $yy[id];
	 	$db->select("id, title", "content", "catid = '$catid'");
		$k=$db->num_rows();
for($i=0;$i<$k;$i++) {	
		if($itemid == $db->result($i, "id")) {
			$sel = " selected='selected'";
		} else {
			$sel = "";
		}	
		echo "<option value='".$db->result($i, "id")."' $sel>".$db->result($i, "title")."</option>";
	}	

	 ?>
        </select>
	  
	  <?php } else { ?>
	  <select name="itemid" id="itemid">
        </select>
		<?php
		}
		?>
		</td>
    </tr>
<?php
} else {
}
}
?>
    <tr> 
      <td>&nbsp;</td>
      <td><label> 
        <input type="submit" name="button2" id="button2" value="SAVE MENU" class="submit" >
        </label></td>
    </tr><tr>
      <td>&nbsp;</td>
      <td></td>
    </tr>
  </table>
</form>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("submenu");
 frmvalidator.addValidation("title","req","Title harus diisi, silahkan ulangi lagi!");
 frmvalidator.addValidation("link","req","Link harus diisi, silahkan ulangi lagi!"); 
</script>
<?php    
} else if (isset($_GET['page']) && $_GET['page'] == "submit") {

$title = $_POST['title'];
	$type = $_POST['type'];
	$no = $_POST['no'];
	$edit = $_POST['edit'];
	$kat = $_POST['kat'];
	$alias = $_POST['alias'];
	$link = $_POST['link'];
	$publish = $_POST['publish'];
	$cat = $_POST['cat'];	
	$menu = $_POST['menu'];	
	$itemid = $_POST['itemid'];	
	$class = $_POST['class'];		
	$icon = $_POST['icon'];	
		$titleid = $_POST['titleid'];		
		
		$db->select("id, menutype, name, link, published, ordering, class, image", "submenu", "menutype='$kat'", "ordering");
		$j=$db->num_rows();
		$order = $j + 1;
	if(!$cat && !$itemid) {	
		$link = $link;
	} else {
		$link = "./page.php?do=article&catid=$cat";
	}	
	if($edit > 0) {
		$db->update("submenu", "name='$title', namaid='$titleid', alias='$alias', link='$link', parent='$menu', published='$publish', class='$class', image='$icon'", "id='$no'");

	} else {	
		$db->insert("submenu", "menutype, name, alias, link, type, published, parent, ordering, class, image, namaid", "'$kat', '$title', '$alias', '$link', '$type', '$publish', '$menu', '$order', '$class', '$icon', '$titleid'");

	}
	echo "<meta http-equiv='refresh' content='0;URL=?go=submenu&kat=$kat'>";
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		$db->update("submenu", "published='$pub'", "id='$no'");
		echo "<meta http-equiv='refresh' content='0;URL=?go=submenu&kat=$kat'>";
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }	
		$db->select("ordering", "submenu", "id=$no");
		$row=$db->fetch_row();
		$ada = $db->count_records("submenu", "menutype='$kat'");
		$db->delete("submenu", "id=$no");
		echo "<meta http-equiv='refresh' content='0;URL=?go=submenu&kat=$kat'>";
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "ordering") {
if(isset($_GET["ord"])){ $ord = $_GET["ord"]; }
if(isset($_GET["step"])){ $step = $_GET["step"]; }	
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["lastid"])){ $lastid = $_GET["lastid"]; }	
if(isset($_GET["nextid"])){ $nextid = $_GET["nextid"]; }	
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }	

		$new_ord = $_GET[ord] + $_GET[step];
		$new_ord1 = $_GET[ord];
		if($_GET[step] > 0 ) {
			$no_id = $_GET[nextid];
		} else {
			$no_id = $_GET[lastid];
		}	
		$db->update("submenu", "ordering='$new_ord'", "id='$no'");
		$db->update("submenu", "ordering='$new_ord1'", "id='$no'");
		echo "<meta http-equiv='refresh' content='0;URL=?go=submenu&kat=$kat'>";
?>
<?php
} else {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header"> 
    <td width="2%" align="center">#</td>
    <td width="26%" align="center">Menu Item</td>
    <td width="7%" align="center">Published</td>
    <td width="7%" align="center">Order</td>
    <td width="6%" align="center">Icon</td>
    <td width="11%" align="center">Main Menu</td>
    <td width="20%" align="center">URL</td>
    <td width="16%" align="center">Nama ID</td>
    <td width="5%" align="center">Hapus</td>
  </tr>
<?php
$db->select("id, name, link, published, ordering, parent, type, image, namaid", "submenu", "menutype='$kat'", "parent ASC, ordering ASC");
$catid = explode("=", $db->result(0, "link"));
$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1;
	if($i>0) $lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	$catid = explode("=", $db->result($i, "link"));
	if($db->result($i, "published") > 0) {

	$img = "<a href='?go=submenu&page=publish&pub=0&no=".$db->result($i, "id")."&kat=$kat'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
	$img = "<a href='?go=submenu&page=publish&pub=1&no=".$db->result($i, "id")."&kat=$kat'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 
	
	$adaicon = $db->result($i, "image");
	$diricon = "../images/$adaicon";
	$ukric2=getimagesize($diricon);
						$wic2=$ukric2[0];
						$hic2=$ukric2[1];
		if($wic2>50){	
		$width = "50px";		
		}	
	if (!empty($adaicon) && (file_exists($diricon))){
		$icone = "<img src='$diricon' width='$width'>";
		}
	else
		{
		$icone = "---";
		} 		
	
	$first = $db->result($i, "ordering");
	if($i == 0) {
		$ordering = "<a href='?go=submenu&page=ordering&step=1&ord=".$first."&nextid=".$db->result($nom, "id")."&no=".$db->result($i, "id")."&kat=$kat'><img src='images/downarrow.png' border=0 title='Move Down'></a>";
	} else if($db->result($i, "ordering") > $i and $db->result($i, "ordering") < $j) {
		$ordering = "<a href='?go=submenu&page=ordering&step=-1&ord=".$db->result($i, "ordering")."&lastid=".$db->result($lid, "id")."&no=".$db->result($i, "id")."&kat=$kat'><img src='images/uparrow.png' border=0 title='Move Up'></a>&nbsp;&nbsp;<a href='?go=submenu&page=ordering&step=1&ord=".$db->result($i, "ordering")."&nextid=".$db->result($nom, "id")."&no=".$db->result($i, "id")."&kat=$kat'><img src='images/downarrow.png' border=0 title='Move Down'></a>";	
	} else if($nom == $j) {	
		$ordering = "<a href='?go=submenu&page=ordering&step=-1&ord=".$db->result($i, "ordering")."&lastid=".$db->result($lid, "id")."&no=".$db->result($i, "id")."&kat=$kat'><img src='images/uparrow.png' border=0 title='Move Up'></a>";
	}
	$idmain = $db->result($i, "parent");	
?>
  <tr class="<?php echo $class; ?>"> 
    <td><?php echo $nom; ?></td>
    <td><a href="?go=submenu&page=addnew&edit=1&no=<?php echo $db->result($i, "id"); ?>&kat=<?php echo $kat; ?>&type=<?php echo $db->result($i, "type"); ?>&catid=<?php echo $catid[2]; ?>"><?php echo $db->result($i, "name"); ?></a></td>
    <td align="center"><?php echo $img; ?></td>
    <td align="center"><?php echo $ordering; ?></td>
    <td align="center"><?php echo $icone; ?></td>
    <td>
     <?php 
	 $idmain = $db->result($i, "parent");
	 $main=mysql_query("SELECT id, name FROM menu WHERE id='$idmain'");
     $r=mysql_fetch_array($main);
	 echo $r['name'];
	 ?>
    </td>
    <td><?php echo $db->result($i, "link"); ?></td>
    <td><?php echo $db->result($i, "namaid"); ?></td>
    <td align="center"><a href="#" onClick='confirmation(<?php echo $db->result($i, "id"); ?>, "<?php echo $kat; ?>")' style='cursor:hand'><img src="../images/icon-32-delete_resize.png" title="Hapus" /></a></td>
   </tr>
 <?php
	}
?>
</table>
<p>&nbsp;</p>
<?php
}
?>