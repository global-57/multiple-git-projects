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
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Konfirmasi </h2>
<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Are You sure to delete this record ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=konfirmasi&page=konfirm&id=$id";
		
	}
	
}
//-->
</script>
<?php
//---pagination----------------
$limit = '50'; // How many results should be shown at a time
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
	$numrows = $db->count_records("konfirmasi", "");	
	$db->select("id, kode, nama, username, email, tgl, judul, catatan, ip, hp, foto, balasan, status, tglproses", "konfirmasi", "", "", "", "", "$start, $limit");

?>

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
   <td width="3%" align="center">No.</td>
	<td width="5%" align="center">Kode</td>
	<td width="10%" align="center">Tanggal</td>
    <td width="10%" align="center">Username </td>
	<td width="10%" align="center">Nama </td>
	<td width="30%" align="center">Judul </td>
	 <td width="8%" align="center">Status </td>
	<td width="8%" align="center">Detail</td>
	 <td width="8%" align="center">Delete </td>
  </tr>
  <?


$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1 + $start;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	//$nama = $db->result($i, "nama");
$tgl = $db->result($i, "tgl");	
$jm = formatgl($tgl);
$stats=$db->result($i, "status");	
	if($stats == 0) {
	$stne = "<span class='badge badge-important'>Pending</span>";
	} else {
	$stne = "<span class='badge badge-success'>Dibaca</span>";
	}
?>
  <tr class="<?php echo $class; ?>">
     <td width="3%" align="center"><?php echo $nom; ?>    </td>
	 <td width="5%" align="center"><?= $db->result($i, "kode"); ?></td>
	 <td width="5%" align="center"><?= $jm; ?></td>
   
    <td  align="center"><?php echo $db->result($i, "username"); ?></td>
    <td  align="center"><?php echo $db->result($i, "nama"); ?></td>
    <td  align="center"><?php echo $db->result($i, "judul"); ?></td>
    <td  align="center"><?php echo $stne; ?></td>
    <td align="center"><font style="color:#555555"><a href="#" onClick="window.open('page.php?go=detailconfirm&id=<?php echo $db->result($i, "id"); ?>','popup','width=700,height=700,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><img src="../images/view.png" title="Detail Konfirmasi" width="17" /></a></font></td>
	 <td  align="center"> <a href="?go=konfirmasi&page=delete&id=<?php echo $db->result($i, "id"); ?>"><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Member" /></a></td>
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

//}
//

$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=konfirmasi&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=konfirmasi&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=konfirmasi&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=konfirmasi&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=konfirmasi&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>
<?php
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["id"])){ $id = $_GET["id"]; }
  $db->delete("konfirmasi", "id=$id");
  echo "<meta http-equiv='refresh' content='0;URL=?go=konfirmasi'>";
}		
?>