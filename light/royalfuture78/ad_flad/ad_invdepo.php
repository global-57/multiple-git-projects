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
function confirmation(kode, page, action) {
	var answer = confirm("Yakin Mau menghapus " + action +  " Deposit No kode: " + kode + " ? Menghapus data ini tidak akan menghapus profit yang didapat dari deposit ini, anda harus hapus profit secara manual.")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=invdepo&page=" + page + "&kode=" + kode + "&action=" + action;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Data Deposit</h2>

<?php
if (isset($_GET['page']) && $_GET['page'] == "stop") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["st"])){ $st = $_GET["st"]; }

if($st == 0){
$db->update("deposit", "status='$st'", "kode='$kode'");
}else{
$db->update("deposit", "status='$st'", "kode='$kode'");
}



header("location: ./index.php?go=invdepo&result=successstop&kode=$kode");
exit;




} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
		//echo "delete no $no";

$db->delete("deposit", "kode='$kode'");
$db->delete("dataewalet3", "kode='$kode'");
header("location: ./index.php?go=invdepo&result=success");
exit;

?>




<?php } else { ?>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-box successs'><span>Deposit has been delete!</span></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "successstop") { 
echo "<div class='alert-box successs'><span>Profit has been Stop!</span></div>";
}
?>
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


$kat = $_GET['kat'];
$keywrd = $_POST["keywrd"];	
//$db->select("*", "member", $kat);
if(isset($_POST["Submit"]) == "CARI") {
	$filter = "kode like '%$keywrd%' or username like '%$keywrd%'";
	$where = "b.kode like '%$keywrd%' or a.username like '%$keywrd%'";
} else {
	
	$filter = "status=1";
	$where = "a.status=1";
}
//---
if(isset($kat) > 0 or empty($kat)) {
	$order = "b.username desc";
} else {
	$order = "b.username desc";
}	


if(isset($_GET['kode'])) {
$numrows = $db->count_records("deposit", "b.kode='".$_GET['kode']."'");
	$db->select("a.id, a.username, a.nama, b.kode, b.jml, b.tgldepo, b.tglend, b.planame, b.kontrak, b.status, b.sc, b.maxbonus, b.maxbonusprosen", "member as a inner join deposit as b on a.username=b.username", "b.kode='".$_GET['kode']."'", $order, "", "", "$start, $limit");
}else{

	
if(isset($kat) == "") {
	$numrows = $db->count_records("deposit", "");
	$db->select("a.id, a.username, a.nama, b.kode, b.jml, b.tgldepo, b.tglend, b.planame, b.kontrak, b.status, b.sc, b.maxbonus, b.maxbonusprosen", "member as a inner join deposit as b on a.username=b.username", "a.status=1", $order, "", "", "$start, $limit");

	
} else {
	$numrows = $db->count_records("deposit", "status=$kat");	
	$db->select("a.id, a.username, a.nama, b.kode, b.jml, b.tgldepo, b.tglend, b.planame, b.kontrak, b.status, b.sc, b.maxbonus, b.maxbonusprosen", "member as a inner join deposit as b on a.username=b.username", $where, $order, "", "", "$start, $limit");
}
}
$sel = "selected";
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="13" align="center" style="padding:0"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:0; margin:0">
      <tr>
        <td><form id="form2" name="form2" method="post" action="?go=invdepo&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Member / Kode :
            <input name="keywrd" type="text" id="keywrd" />
            </label>
          <label>
            <input type="submit" name="Submit" value="CARI" />
            </label>
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr class="tbl_header">
    <td width="3%" align="center">#</td>
    <td width="8%" align="center">Username</td>
    <td width="13%" align="center">Nama Lengkap</td>
	<td width="8%" align="center">Kode</td>
    <td width="8%" align="center">Paket</td>
    <td width="12%" align="center">Nilai</td>
    <td width="12%" align="center">Tgl Deposit </td>
    <td width="8%" align="center">Kontrak</td>
    <td width="12%" align="center">End</td>
    <td width="8%" align="center">Profit</td>
    <td width="8%" align="center">Bonus</td>
    <td width="8%" align="center">Status</td>
    <td width="4%" align="center">D</td>
    <td width="4%" align="center">#</td>
    <td width="4%" align="center">Profit</td>
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
	
if($db->result($i, "status")==0){
		$statuse="<img src='../images/publish_x.png' title='Selesai' border=0 />&nbsp;<font style='font-size:9pt;font-family:Arial;color:#FF0000'>Selesai</font>";
		}else {
		$statuse="<img src='../images/icon-16-checkin.png' title='Aktif' border=0 />&nbsp;<font style='font-size:9pt;font-family:Arial;color:#009900'>Aktif</font>";
		}
		
?>
  <tr class="<?php echo $class; ?>">
    <td width="3%"><?php echo $nom; ?>    </td>
    <td align="center"><a href="?go=memberstat&amp;page=detilkomisi&amp;bulan=<?php echo $bln; ?>&amp;tahun=<?php echo $thn; ?>&amp;mid=<?php echo $db->result($i, "username"); ?>">
      <?php echo $db->result($i, "username"); ?>
    </a></td>
    <td align="center"><a href="?go=memberstat&amp;page=addnew&amp;edit=1&amp;mid=<?php echo $db->result($i, "username"); ?>">
     <?php echo $db->result($i, "nama"); ?>
    </a></td>
     <td align="center">
	<?php echo $db->result($i, "kode"); ?>
	
	</td>
    <td align="center">
	<?php echo $db->result($i, "planame"); ?>
	
	</td>
    <td align="center">
	<?php echo rupiah($db->result($i, "jml")); ?>
	
	</td>
    <td align="center"><?= formatgl($db->result($i, "tgldepo")); ?></td>
	  <td align="center">
	<?php echo $db->result($i, "kontrak"); ?> Day
	
	</td>
    
    <td align="center"><?= formatgl($db->result($i, "tglend")); ?></td>
	 <td align="center">
   <?php 
   $kode=$db->result($i, "kode");
   $user=$db->result($i, "username");
$ttlprofite=total_profit_member_kode($user, $kode);
if($ttlprofite>0){	
$ttlprofitee=rupiah($ttlprofite);
}else{
$ttlprofitee=rupiah(0);
}
echo $ttlprofitee;
 ?>
</td>
 <td align="center">
   <?php 
   $kode=$db->result($i, "kode");
   $user=$db->result($i, "username");
$ttlbonuse=total_bonus_member_kode($user, $kode);
if($ttlbonuse>0){	
$ttlbonusee=rupiah($ttlbonuse);
}else{
$ttlbonusee=rupiah(0);
}

echo $ttlbonusee;
 ?>
</td>
  
  
  
    <td align="center"><?php echo $statuse; ?></td>
    <td align="center"><a href="#" onclick="confirmation('<?php echo $db->result($i, "kode"); ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Hapus Deposit" /></a></td>
	<td align="center"><font style="color:#555555"><a href="#" onClick="window.open('page.php?go=detail-depo&kode=<?php echo $db->result($i, "kode"); ?>','popup','width=800,height=700,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><img src="../images/view.png" title="Detail Deposit" width="17" /></a></font></td>
    
    
    <td align="center">
	
	<?php 
	$statusmya=$db->result($i,"status");
	if($statusmya == 1){; ?>
    <a href="?go=invdepo&page=stop&kode=<?php echo $db->result($i, "kode"); ?>&st=0"><button class='primapc' style='padding:0px 7px;font-size:11px;'>Jalan</button></a>
    <?php } else { ?>
    <a href="?go=invdepo&page=stop&kode=<?php echo $db->result($i, "kode"); ?>&st=1"><button class='primapc2' style='padding:0px 7px;font-size:11px;'>Stop</button></a>
    <?php } ?>
    </td>
    
    
  </tr>
<?php
	}
?>
</table>
<br />
<div id="keterangan">
  <p>&nbsp;</p>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
     <?php

$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=invdepo&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=invdepo&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=invdepo&kat=<?php echo $kat; ?>&show=<?= $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=invdepo&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=invdepo&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<?php	

}
?>	