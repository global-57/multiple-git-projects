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
   <li><a href="?go=addtestimonial&amp;page=addnew&edit=0">Tambah Testimonial</a><a href="?m=testimonial"></a></li>
  </ul>
</div>
<?
//---pagination----------------
$limit = '10'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '50'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);


//if($uidm == 001) {

//$db->select("*", "member", $kat);

	$numrows = $db->count_records("testimonial", "");	
	$db->select("no, userid, nama, kota, testimoni, foto, published, tgl, judul", "testimonial", "", "tgl DESC", "", "", "$start, $limit");

?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  
  <tr class="tbl_header">
    <td width="4%" align="center">#</td>
    <td width="16%" align="center">Username</td>
    <td width="13%" align="center">Tgl</td>
	<td width="12%" align="center">Gambar</td>
    <td width="51%" align="center">Judul</td>
    <td width="7%" align="center">Published</td>
	 <td width="5%" align="center">Edit</td>
    <td width="4%" align="center">Hapus</td>
  </tr>
<?
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
		$img = "<a href='?go=addtestimonial&page=publish&pub=0&no=".$db->result($i, "no")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=addtestimonial&page=publish&pub=1&no=".$db->result($i, "no")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 
	$tanggale = formatgl($db->result($i, "tgl"));
$kotae = $db->result($i, "kota");
$judule = $db->result($i, "judul");
$isine = $db->result($i, "testimoni");
$namae = $db->result($i, "nama");
$usernye = $db->result($i, "userid");
$adafoto = $db->result($i, "foto");
	$dirfoto = "../images/foto_testimoni/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../images/foto_testimoni/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../images/foto_testimoni/$adafoto' class='imgFloatLeft' height='80' width='120'></a><div class='highslide-caption'>Dikirim oleh: $namae (username: $usernye)<br>Hari,Tanggal: $tanggale<br>Kota: $kotae<br><br><b>$judule</b><br>$isine</div>";
		}
	else
		{
		$gambar = "<a href='../images/photo_not_available.jpg' class='highslide' onclick='return hs.expand(this)'><img src='../images/photo_not_available.jpg' class='imgFloatLeft' height='80' width='120'></a><div class='highslide-caption'>Dikirim oleh: $namae (username: $usernye)<br>Hari,Tanggal: $tanggale<br>Kota: $kotae<br><br><b>$judule</b><br>$isine</div>";
		} 		
?>
 
  <tr class="<?php echo $class; ?>">
    <td align="center" width="4%" valign="top"><?php echo $nom; ?> </td>
    <td align="center" width="16%" valign="top"><?php echo $db->result($i, "userid"); ?></td> 
    <td align="center" valign="top"><?php echo $db->result($i, "tgl"); ?></td>
	<td align="center" valign="top"><?php echo $gambar; ?></td>
    <td align="center" valign="top"><?php echo $db->result($i, "judul"); ?></td>
    <td align="center" valign="top"><?php echo $img; ?></td>
   <td align="center" valign="top"><a href="?go=addtestimonial&page=addnew&edit=1&no=<?php echo $db->result($i, "no"); ?>"><img src='../images/edit_f2.png' border=0 title='Edit Iklan' width="24"></a></td>
    <td align="center" valign="top"><a href="#" onclick='confirmation(<?php echo $db->result($i, "no"); ?>)' style='cursor:hand'><img src="images/cancel_f2.png" border="0" title="Hapus Iklan" width="24"/></a></td>
  </tr>
<?php
	}
?>	  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
     <?php

//}
//

$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=testimonial&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=testimonial&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=testimonial&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=testimonial&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=testimonial&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>