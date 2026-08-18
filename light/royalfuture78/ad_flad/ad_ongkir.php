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
function confirmation(noid, kat) {
	var answer = confirm("Are You sure to delete this menu?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=editmenu&page=delete&no=" + noid + "&kat=" + kat;
		
	}
	
}
//-->
</script>
<script src="../js/gen_validatorv4.js"></script>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" /> Data Ongkos Kirim</h2>
<?php
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["no"])){ $no = $_GET["no"]; }
?>
<?php
if($edit == 1 && $no) {
		$db->select("no, destinations, kodearea, price, status", "ongkir", "no=$no");
		$no = $db->result(0, "no");
		$destinations = $db->result(0, "destinations");
		$kodearea = $db->result(0, "kodearea");
		$price = $db->result(0, "price");
		$status = $db->result(0, "status");
		$edit = "1";
		$no = $no;
	
	} else {
	$no = "";
		$destinations = "";
		$kodearea ="";
		$price = "";
		$status = "";
		$edit = "0";
		$no = "";
	}
	
?>
<form name="menu" id="menu" method="post" action="?go=ongkir&page=submit">
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="1">
 
  
   <tr>
      <td width="35%" align="right">Kode:</td>
      <td width="65%"><input name="kodearea" type="text" id="kodearea" value="<?php echo $kodearea; ?>" size="30">
       <input name="no" type="hidden" id="no" value="<?php echo $no; ?>" />
        <input name="edit" type="hidden" id="edit" value="<?php echo $edit; ?>" />
      </td>
    </tr>
	<tr>
      <td align="right">Kota :</td>
      <td><input name="destinations" type="text" id="destinations" value="<?php echo $destinations; ?>" size="30"></td>
    </tr>
    <tr>
      <td align="right">Harga :</td>
      <td><input name="price" type="text" id="price" value="<?php echo $price; ?>" size="30"></td>
    </tr>
     <tr>
      <td align="right">Harga :</td>
      <td><select required="required" name="status" style="width:190px">
      <option value="1">Aktif</option>
      <option value="0">Sembunyikan</option>
      </select>
      </td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button2" id="button2" class="submit" value="UPDATE">
      </label></td>
    </tr>
  </table>
</form>
<?php 
} else if (isset($_GET['page']) && $_GET['page'] == "submit") {

	$kodearea = $_POST['kodearea'];
	$destinations = $_POST['destinations'];
	$no = $_POST['no'];
	$edit = $_POST['edit'];
	$price = $_POST['price'];
	$status = $_POST['status'];
	
		
	
	if($edit > 0) {
		$db->update("ongkir", "kodearea='$kodearea', destinations='$destinations', price='$price', status='$status'", "no='$no'");
	} else {	
		$db->insert("ongkir", "'no', destinations, kodearea, price, status", "'', '$destinations', '$kodearea', '$price', '$status'");
	}
	header("location: ?go=ongkir");
	
?>
<?php	
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		$db->update("ongkir", "status='$pub'", "no='$no'");
		header("location: ?go=ongkir");
?>
<?php		
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
			
		$db->delete("ongkir", "no=$no");
		header("location: ?go=ongkir");
?>

<?php
}else{
?>
<?php
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }
?>
<div id="menu_button">
<a href="?go=ongkir&page=addnew&edit=0"><button class="submit">Tambah Ongkir</button></a>

</div>
 <br />
 <script>
		function confirmActionx2ds(){
      var confirmed = confirm("Anda akan menghapus data ongkir ini, anda yakin?");
      return confirmed;
}
</script>
<table width="99%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="8%" align="center">Id</td>
    <td width="19%" align="center">Kode</td>
    <td width="16%" align="center">Kota</td>
    <td width="17%" align="center">Harga</td>
    <td width="11%" align="center">Edit</td>
    <td width="8%" align="center">Published</td>
    <td width="8%" align="center">Dell</td>
  </tr>
<?php
$db->select("no, destinations, kodearea, price, status", "ongkir", "", "destinations ASC");

$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1;
	if($i>0) $lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	if($db->result($i, "status") > 0) {
		$img = "<a href='?go=ongkir&page=publish&pub=0&no=".$db->result($i, "no")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=ongkir&page=publish&pub=1&no=".$db->result($i, "no")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 	
	//---ordering---
	
?>
 
  <tr class="<?php echo $class; ?>">
	<td align="center"><?php echo $db->result($i, "no"); ?></td>
    <td align="center"><?php echo $db->result($i, "kodearea"); ?></td>
	<td align="center"><?php echo $db->result($i, "destinations"); ?></td>
    <td align="center"><?php echo rupiah($db->result($i, "price")); ?></td>
	<td align="center"><a href="?go=ongkir&page=addnew&edit=1&no=<?php echo $db->result($i, "no"); ?>">Ubah</a></td>
  <td align="center"><?php echo $img; ?></td>
   <td align="center"><a href="?go=ongkir&page=delete&no=<?php echo $db->result($i, "no"); ?>" onclick='return confirmActionx2ds()'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Data" /></a></td>
  </tr>
<?php
}
?>	  
  
</table>
<p>&nbsp;</p>
<?php
}
?>