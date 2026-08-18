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
<!--
function confirmation(noid) {
	var answer = confirm("Are You sure to delete this Article?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=faq&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> FAQ Manager</h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=faq&page=addnew&edit=0"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah FAQ</strong></a></li>
  </ul>
</div>


<?
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["no"])){ $no = $_GET["no"]; }
	//include("fckeditor/fckeditor.php") ;
		if($edit > 0) {
			$db->select("no, tanya, jawab, kat, published", "faq", "no='$no'");
			$title = $db->result(0, "tanya"); 
			$jawab = $db->result(0, "jawab"); 
			$edit = "1";
			$publish = $db->result(0, "published"); 
			$catid = $db->result(0, "kat"); 
			
			$judul = "Edit FAQ";
		} else {
		if(empty($title)){ $title = ""; }
	if(empty($jawab)){ $jawab = ""; }
			$author = $valid_admin; 
			$crdate = $clientdate; 
			$edit = "0";
			$judul = "Create New FAQ";
		}		
?>
<form name="faq" method="post" action="?go=faq&page=submit">
<input type="hidden" id="cat" name="cat" value="9" readonly="readonly"/>
  <table width="98%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="4"><h4><?= $judul; ?></h4></td>
    </tr>
    <tr>
      <td width="10%" align="right" valign="top">Question :</td>
      <td><label>
        <textarea name="title" cols="100" rows="2" id="title"><?= $title; ?></textarea>
      </label></td>
      <td align="right"></td>
      <td></td>
    </tr>
	
    <tr>
      <td align="right" valign="top">Answer : </td>
      <td width="52%"><textarea name="answer" class="ckeditor" cols="50" rows="5" id="answer"><?= $jawab; ?></textarea>
	  
	  </td>
      <td width="16%" align="right">&nbsp;</td>
      <td width="22%">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">Published :</td>
      <td colspan="3"><p>
        <label>
          <input name="publish" type="radio" id="publish_0" value="1" checked>
          Yes</label> 
        <label>
          <input type="radio" name="publish" value="0" id="publish_1">
          No</label>
        <input name="no" type="hidden" id="no" value="<?= $no; ?>" size="20">
        <input name="edit" type="hidden" id="edit" value="<?= $edit; ?>" size="20">
        <br>
      </p></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td colspan="3"><label>
        <input type="submit"  value="SAVE" class="submit">
        
      </label><label><input type="button" name="cancel" id="cancel" value="CANCEL" onClick="javascript:history.go(-1)" class="submit">
      </label></td>
    </tr>
	<tr>
      <td align="right">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
      <td align="right">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
 
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "submit") {
$edit = $_POST['edit'];
$title = $_POST['title'];
		$answer = $_POST['answer'];
		$cat = $_POST['cat'];
		$publish = $_POST['publish'];
		$no = $_POST['no'];
		
		if($edit > 0) {
			$db->update("faq", "tanya='$title', jawab='$answer', kat='$cat', published='$publish'", "no='$no'");
	} else {
			$db->insert("faq", "", "'', '$title', '$answer', $cat, $publish");
	}		
			echo "<meta http-equiv='refresh' content='0;URL=?go=faq'>";
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }	
		$db->update("faq", "published='$pub'", "no='$no'");
		echo "<meta http-equiv='refresh' content='0;URL=?go=faq'>";
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		//echo "delete no $no";
		$db->delete("faq", "no=$no");
		echo "<meta http-equiv='refresh' content='0;URL=?go=faq'>";
?>
<?php
}else {
?>	
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="5%" align="center">ID</td>
    <td width="56%" align="center">Question</td>
    <td width="9%" align="center">Published</td>
    <td width="12%" align="center">&nbsp;</td>
  </tr>
<?
$db->select("no, tanya, jawab, published, kat", "faq", "", "no asc");

$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	if($db->result($i, "published") > 0) {
		$img = "<a href='?go=faq&page=publish&pub=0&no=".$db->result($i, "no")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=faq&page=publish&pub=1&no=".$db->result($i, "no")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 	

?>
 
  <tr class="<?= $class; ?>">
    <td width="5%"><?= $db->result($i, "no"); ?></td>
    <td><a href="?go=faq&page=addnew&edit=1&no=<?= $db->result($i, "no"); ?>"><?= $db->result($i, "tanya"); ?></a></td>
    <td align="center"><?= $img; ?></td>
    <td align="center"><div id="delete"><a href="#" onClick='confirmation(<?= $db->result($i, "no"); ?>)' style='cursor:hand; padding-left:15px'>Delete</a></div></td>
  </tr>
<? 
} 
?>
</table>
<? 
} 
?>