<?php
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
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
<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Yakin akan menghapus data transaksi ini?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=datadownload&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Data Download</h2>

<?php		
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		

		
$db->delete("product3_down", "kode='$no'");
		
		header("location: ?go=datadownload");
		exit;
?>



<?php
}else{
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
if(isset($_POST['submit'])){
	$keywrd = $_POST['keywrd'];
	$kat = $_GET['kat'];
	$filter = "username='$keywrd' or kode='$keywrd' or date='$keywrd'";
	$where = "username='$keywrd' or kode='$keywrd' or date='$keywrd'";
} 


//if($uidm == 001) {
if(isset($_GET['user'])){
//$db->select("*", "member", $kat);
	$numrows = $db->count_records("product3_down", "kode='".$_GET['kode']."'");	
	$db->select("id, kode, judul, username, date", "product3_down", "kode='".$_GET['kode']."'", "date", "", "", "$start, $limit");

}else{
	
$numrows = $db->count_records("product3_down", "");	
	$db->select("id, kode, judul, username, date", "product3_down", "", "date", "", "", "$start, $limit");
if(isset($kat) == "2") {
$db->select("id, kode, judul, username, date", "product3_down", $where, "date", "", "", "$start, $limit");
}	
}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=datadownload&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Data :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />&nbsp;&nbsp;&nbsp;&nbsp;<i>Tgl/Username/Kode</i>
  </label>
</form><br />
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
    <td width="6%"><strong>No.</strong></td>
    <td width="9%"><strong>Tanggal</strong></td>
	<td width="8%"><strong>Kode</strong></td>
    <td width="12%"><strong>Username</strong></td>
    <td width="13%"><strong>Download </strong></td>
    <td width="6%"><strong>Del</strong></td>
  </tr>
<?php
$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1 + $start;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	$username = $db->result($i, "username");
	$nomornya = $db->result($i, "id");
	$kodenya = $db->result($i, "kode");
	$judulnye = $db->result($i, "judul");
	
							
?> 
  <tr class="<?= $class; ?>">
    <td align="center"><?= $nom; ?>    </td>
    <td align="center"><?= $db->result($i, "date"); ?></td>
    <td align="center"><a href="index.php?go=downldmember&kode=<?php echo $db->result($i, "kode"); ?>" target="_blank"><?= $db->result($i, "kode"); ?></a></td>
    <td align="center"><a href="?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=<?php echo $db->result($i, "username"); ?>" target="_blank"><?= $db->result($i, "username"); ?></a></td>
    <td align="center"><a href="index.php?go=downldmember&kode=<?php echo $db->result($i, "kode"); ?>" target="_blank"><?= $judulnye; ?></a></td>
   <td align="center"><a href="#" onClick="confirmation('<?php echo $kodenya; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Transaction" /></a></td>
   
  </tr>
<?php
	
	}
?>
</table>
<br />
<table width="95%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center">
     <?php

$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=datadownload&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=datadownload&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=datadownload&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=datadownload&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=datadownload&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>
<?php } ?>