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
	var answer = confirm("Are You sure to delete this download?")
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
<div id="menu_button">
  <ul>
    <li><a href="?go=prodownld&page=addnew&edit=0">Add New Download </a></li>
  </ul>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="7%" align="center">#</td>
    <td width="41%" align="center">Title</td>
    <td width="7%" align="center">Published</td>
    <td width="21%" align="center">File / Link</td>
    <td width="12%" align="center">Hits</td>
	<td width="6%" align="center">Edit</td>
    <td width="6%" align="center">Hapus</td>
  </tr>
<?php
//---pagination----------------
$limit = '20'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '20'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);



//--------------------------------------
$numrows = $db->count_records("product2", "");

if(isset($Submit) == "CARI") {
	$filter = "nama like '%$keywrd%'";
	$where = "nama like '%$keywrd%'";
$db->select("id, nama, harga, published, created, catid, file, hit, expire, kode", "product2", $where, "id desc", "", "", "$start, $limit");

} else {

$db->select("id, nama, harga, published, created, catid, file, hit, expire, kode", "product2", "", "id desc", "", "", "$start, $limit");
}
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
		$img = "<a href='?go=prodownld&page=publish&pub=0&no=".$db->result($i, "id")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=prodownld&page=publish&pub=1&no=".$db->result($i, "id")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 	
	
?>
 
  <tr class="<?php echo $class; ?>">
    <td width="7%"align="center"><?php echo $nom; ?> </td>
   
    <td align="center"><?php echo $db->result($i, "nama"); ?></td>
    <td align="center"><?php echo $img; ?></td>
   
    <td><?php
	$st = $db->result($i, "harga");
	if(!empty($st)) {
		$sts = "Link";
	} else {
		$sts = "File";
	} 	
	?>
	<?php echo $sts; ?>&nbsp;:&nbsp;<?php echo $db->result($i, "file"); ?><?php echo $db->result($i, "harga"); ?></td>
    <td align="center"><?php echo $db->result($i, "hit"); ?></td>
   <td align="center"><a href="?go=prodownld&page=addnew&edit=1&no=<?php echo $db->result($i, "id"); ?>"><img src='images/edit_f2.png' border=0 title='Click to Edit'></a></td>
     <td align="center">
     <?php if($demomode == 1){ ?>
     <a href="#" onClick='return confirmActiondemomode()' style='cursor:hand; padding-left:15px'><img src="../images/stop_f2.png" title="Hapus Foto" alt="" name="images" width="32" height="32" /></a>
     <?php } else { ?>
   <a href="#" onClick='confirmation(<?php echo $db->result($i, "id"); ?>)' style='cursor:hand; padding-left:15px'><img src="../images/stop_f2.png" title="Hapus Foto" alt="" name="images" width="32" height="32" /></a>
    <?php } ?>
     
     </td>
  </tr>
<?php
	}
?>	  
</table>
<br />
<table width="90%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center">
     <?php
$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=downld&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=downld&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
<?php

}

if ($numrows != $limit) {
	
	if ($scroll == 1) {
	
		if ($paging > $scrollnumber) {
			
			$first = $display;
			
			$last = ($scrollnumber - 1) + $display;
			
		}
	
	} else {
	
		$first = 1;
			
		$last = $paging;
			
	}
	
	if ($last > $paging ) {
			
		$first = $paging - ($scrollnumber - 1);
			
		$last = $paging;
			
	}
	
	for ($i = $first;$i <= $last;$i++){
		
		if ($display == $i) {
			
?>
[ <b>
<?php echo $i ?>
</b> ]
<?php
			
		} else {
			
?>
[ <a href="?go=downld&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=downld&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=downld&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>

    </td>
  </tr>
</table>