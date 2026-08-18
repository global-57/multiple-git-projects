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
		Update   ::       2013 � Primadesain.Com
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
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Konfirmasi Order</h2>
<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Are You sure to delete this record ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=confirmorder&page=konfirm&id=$id";
		
	}
	
}
//-->
</script>
<?php
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }

  $db->delete("konfirmasiorder", "nota=$kode");
$db->update("transaksiproduk", "confirm='0'", "stmpkode='$kode'");
  
  header("location: ?go=confirmorder");
exit;		

}else{
?> 

<script>
		function confirmAccept(){
      var confirmed = confirm("Anda yakin mau menhapus konfirmasi ini? menghapus konfirmasi akan mengubah status konfirmasi order.");
      return confirmed;
}
</script>

<?php
//---pagination----------------
$limit = '100'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '20'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);

$keywrd = $_GET["keywrd"];
if(isset($_GET["keywrd"])){ 
	$where = "kode = '".$_GET["keywrd"]."'";
} else {
	$where = "";
}	

 if(isset($_GET["bulan"]) && isset($_GET["tahun"])){	
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun']; 
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
$where3 = "(tgl between '$dtfrom' and '$dtto')";

}else{

$where3 = "";
}
if($where && $where3){
	$wheree=$where." and ".$where3;
}else if(!$where && !$where3){
	$wheree="";
}else if(!$where && $where3){
	$wheree=$where3;
}else if($where && !$where3){
	$wheree=$where;
}

//$db->select("*", "member", $kat);
	$numrows = $db->count_records("konfirmasiorder", "$wheree");	
	$db->select("id, kode, nota, username, jumlah, rektujuan, tgl, catatan, ip, foto, status", "konfirmasiorder", "$wheree", "tgl desc", "", "", "$start, $limit");

?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="58%"><form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="confirmorder" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong> Bulan : </strong> </td>
          <td width="80%">
          <? 
		$thn=substr($clientdate, 0, 4);
	    $bln=substr($clientdate, 5, 2);
	    $tgl=substr($clientdate, 8, 2);
       $bulan = $_GET['bulan'];	
	   $tahun = $_GET['tahun'];	
		echo "<select name='bulan' class='form' style='width:120px;height:21px'>";
	$bulan0=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$jbln=count($bulan0);
	if($bulan =="") {
		$bulan2 = $bln;
	} else {
		$bulan2 = $bulan;
	}
	for($b=0;$b<$jbln;$b++) {
		if($bulan2-1 == $b) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
			if($b+1 < 10) {
			$k2=$b+1;
			$k="0$k2";
			} else {
			$k=$b+1;
			}
		echo "<option value='".$k."' $pil>$bulan0[$b]</option>";
	}
	echo "</select>";
	echo "<select name='tahun' size=1 class='form' style='width:70px;height:21px'>";
	$jthn=25;
	for($t=16;$t<$jthn;$t++) {
		$thn2 = 2000 + $t;	
		if($tahun == $thn2) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
		echo "<option value='20$t' $pil>$thn2</option>";
	}
	echo "</select>";
?>
<?php if(isset($_GET["keywrd"])){ ?>
<input name="keywrd" type="hidden" id="keywrd" value="<?= $_GET['keywrd']; ?>"/>	
<?php	}
	?>
<button type='submit' class="submitkecil">LIHAT TANGGAL</button>
 <a href="?go=confirmorder"><button type="button" class="submitkecil"/>LIHAT SEMUA</button></a>
</td>
        </tr>
      </table>
    </form>
<br />
	</td>
    <td width="42%" align="right">
    <form name="keyword" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="confirmorder" />
    Cari Kode : <input name="keywrd" type="text" id="keywrd" value="<?= $_GET['keywrd']; ?>"/>
       <?php if(isset($_GET["bulan"]) && isset($_GET["tahun"])){ ?>	
	<input name="bulan" type="hidden" id="bulan" value="<?= $_GET['bulan']; ?>" />
      <input name="tahun" type="hidden" id="tahun" value="<?= $_GET['tahun']; ?>" />
<?php	}
	?>
      <button type='submit' class="submitkecil">CARI</button>

                    </form></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
   <td width="3%" align="center">No.</td>
	<td width="5%" align="center">Kode</td>
	<td width="5%" align="center">Order</td>
	<td width="10%" align="center">Tanggal</td>
    <td width="5%" align="center">Username </td>
    <td width="20%" align="center">Tujuan </td>
	<td width="8%" align="center">Jumlah </td>
	<td width="3%" align="center">Gambar</td>
	 <td width="3%" align="center">Delete </td>
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
$tt = date('d-m-Y', strtotime($tgl));
$jame = date('H:i', strtotime($tgl));
$jm = $tt."/".$jame;
$stats = $db->result($i, "status");	
$kode = $db->result($i, "kode");	
$mide = $db->result($i, "username");	
$nota = $db->result($i, "nota");		
	if($stats == 0) {
	$stne = "<span class='badge badge-warning'>Pending</span>";
		$img = "<a href='?go=konfirmasix&page=publish&pub=1&no=$kode&mid=$mide' ><button class='primapc2' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Click untuk proses konfirmasi ini')\" onMouseout='hideddrivetip()'  onclick='return confirmAccept()'>Proses</button></a>";
		$img2 = "<a href='?go=konfirmasix&page=cancel&no=$kode&mid=$mide' ><button class='primapc2' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Click untuk menolak konfirmasi ini')\" onMouseout='hideddrivetip()'>Tolak</button></a>";
	} else if($stats == 1) {
	$stne = "<span class='badge badge-success'>Aktif</span>";
		$img = "<a href='?go=konfirmasix&page=unpublish&pub=0&no=$kode&mid=$mide' ><button class='primapc' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Click for cancel process')\" onMouseout='hideddrivetip()' onclick='return ray.ajax()'>Done</button></a>";
		$img2 = "----";
	} else {
		$img = "----";
		$stne = "<span class='badge badge-important'>Nonaktif</span>";
		$img2 = "----";
	}
	
	
?>
  <tr class="<?php echo $class; ?>">
     <td width="3%" align="center"><?php echo $nom; ?>    </td>
	 <td width="5%" align="center"><?= $kode; ?></td>
	 <td width="5%" align="center"><a href='index.php?go=orderproduk&nota=<?= $nota; ?>'><?= $nota; ?></a></td>
	 <td width="5%" align="center"><?= $tgl; ?></td>
   
    <td  align="center"><?php echo $db->result($i, "username"); ?></td>
    <td  align="center"><?php echo $db->result($i, "rektujuan"); ?></td>
    <td  align="center"><?php echo rupiah($db->result($i, "jumlah")); ?></td>
   
     
     <td  align="center">
     
<?php $foto = $db->result($i, "foto");	
if($foto){?>
     <a href="../images/confirm/<?php echo $foto; ?>" class="highslide" onClick="return hs.expand(this)"><img src="../images/view.png" title="Lihat Gambar" width="17" /></a>
     <?php } ?>
     </td>
     
   
	 <td  align="center">
     <a href="?go=confirmorder&page=delete&kode=<?php echo $nota; ?>" onclick="return confirmAccept()"><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Hapus Konfirmasi" /></a>
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

//}
//

$paging = ceil ($numrows / $limit);
if(isset($_GET["bulan"])){
	$blndt = "&bulan=".$_GET["bulan"]."";
}
if(isset($_GET["tahun"])){
	$thndt = "&tahun=".$_GET["tahun"]."";
}
if(isset($_GET["keywrd"])){
	$kwde = "&keywrd=".$_GET["keywrd"]."";
}
// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=konfirmasix<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=konfirmasix<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=konfirmasix<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=konfirmasix<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=konfirmasix<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>
<?php } ?>