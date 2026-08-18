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
	var answer = confirm("Yakin akan menghapus data transfer ini? jika member tersebut memiliki balance dibawah yang anda hapus maka saldo akan minus!")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=transwallet&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Transfer Balance</h2>
<?php
if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["type"])){ $type = $_GET["type"]; }
			

			$databasenya="datacwalet";
			$databaseorder="datacwalet2c";
			$jenisnya="Wallet Balance";
	
		$db->update("dataewalet2c", "status='$pub'", "id='$no'");
		$db->update("$databaseorder", "status='$pub'", "kode='$kode'");		
        $db->update("$databasenya", "status='1', tglproses='$clientdate'", "kode='$kode'");

		header("location: ?go=transwallet");
		exit;
?>
<?php		
}else if (isset($_GET['page']) && $_GET['page'] == "unpublish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["type"])){ $type = $_GET["type"]; }


			$databasenya="datacwalet";
			$databaseorder="datacwalet2c";
			$jenisnya="Wallet Balance";
$db->update("$databasenya", "status='0', tglproses=''", "kode='$kode'");
$db->update("dataewalet2c", "status='$pub'", "id='$no'");
$db->update("$databaseorder", "status='$pub'", "kode='$kode'");
	
		header("location: ?go=transwallet");
		exit;		
?>

<?php		
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		
$query35 = "SELECT * FROM dataewalet2c WHERE kode='$no'"; 
$result35 = mysql_query($query35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$type = $row35['jenis'];


			$databasenya="datacwalet";
			$databaseorder="datacwalet2c";	
		
$db->delete("$databasenya", "kode='$no'");
$db->delete("$databaseorder", "kode='$no'");
$db->delete("dataewalet2c", "kode='$no'");
		
		header("location: ?go=transwallet");
		exit;
?>



<?php
}else{
?>
 
 
   
 <script>
		function confirmActionproccess(){
      var confirmed = confirm("Anda yakin akan mengaktifkan data transfer ini?");
      return confirmed;
}
</script>
<script>
		function confirmActionbatalproccess(){
      var confirmed = confirm("Anda yakin akan menonaktifkan data transfer ini? apabila saldo member tersebut dibawah nilai ini maka saldo member akan minus!");
      return confirmed;
}
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
if(isset($_POST['submit'])){
	$keywrd = $_POST['keywrd'];
	$kat = $_GET['kat'];
	$filter = "username='$keywrd' or kode='$keywrd' or tgl='$keywrd' or jenis='$keywrd' or tujuan='$keywrd'";
	$where = "username='$keywrd' or kode='$keywrd' or tgl='$keywrd' or jenis='$keywrd' or tujuan='$keywrd'";
} 


//if($uidm == 001) {
if(isset($_GET['user'])){
//$db->select("*", "member", $kat);
	$numrows = $db->count_records("dataewalet2c", "username='".$_GET['user']."'");	
	$db->select("id, kode, username, jumlah, uraian, tujuan, tgl, status, jenis, fee,jumlahnet,accid,accid2", "dataewalet2c", "username='".$_GET['user']."'", "tgl", "", "", "$start, $limit");

}else{
	
$numrows = $db->count_records("dataewalet2c", "");	
	$db->select("id, kode, username, jumlah, uraian, tujuan, tgl, status, jenis, fee,jumlahnet,accid,accid2", "dataewalet2c", "", "tgl", "", "", "$start, $limit");
if(isset($kat) == "2") {
$db->select("id, kode, username, jumlah, uraian, tujuan, tgl, status, jenis, fee,jumlahnet,accid,accid2", "dataewalet2c", $where, "tgl", "", "", "$start, $limit");
}	
}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=transwallet&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Data :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />&nbsp;&nbsp;&nbsp;&nbsp;<i>Tgl/Username/Kode/Tujuan</i>
  </label>
</form><br />
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
   <td width="6%"><strong>No.</strong></td>
    <td width="15%"><strong>Tanggal</strong></td>
	<td width="8%"><strong>Kode</strong></td>
    <td width="8%"><strong>Username</strong></td>
    <td width="10%"><strong>Tujuan</strong></td>
    <td width="10%"><strong>Jumlah</strong></td>
    <td width="7%"><strong>Status</strong></td>
    <td width="5%"><strong>Del</strong></td>
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
	$type = $db->result($i, "type");
	
			
	$statuse = $db->result($i, "status");
	$nomornya = $db->result($i, "id");
	$kodenya = $db->result($i, "kode");
	$typex = $db->result($i, "jenis");
			if($statuse > 0) {
		$img = "<a href='?go=transwallet&page=unpublish&pub=0&no=$nomornya&mid=$username&kode=$kodenya&type=$typex'><button class='primadetail' style='padding:2px 6px;font-size:11px;' onMouseover=\"ddrivetip('Cancel')\" onMouseout='hideddrivetip()' onclick='return confirmActionbatalproccess()'>Done</button></a>";
	} else {
		$img = "<a href='?go=transwallet&page=publish&pub=1&no=$nomornya&mid=$username&kode=$kodenya&type=$typex'><button class='primaback' style='padding:2px 6px;font-size:11px;' onMouseover=\"ddrivetip('Proses')\" onMouseout='hideddrivetip()' onclick='return confirmActionproccess()'>Pending</button></a>";
	}		
	$tglex = $db->result($i, "tglproses"); 
	if($tglex == '0000-00-00 00:00:00') {
	$tgx = "-";
	} else {
		$tgx = $tglex;
	} 	
	
	
if($db->result($i, "jenis") == "pv") {
				$typene = "<span class='badge badge-success'>PV POIN</span>";
			} else if($db->result($i, "jenis") == "cash") {
				$typene = "<span class='badge badge-info'>CASH POIN</span";
			} else if($db->result($i, "jenis") == "register") {
				$typene = "<span class='badge badge-warning'>REGISTER POIN</span";
			} else if($db->result($i, "jenis") == "purchase") {
				$typene = "<span class='badge badge-inverse'>REGISTER POIN</span";
			}	else{}	
							
?> 
  <tr class="<?= $class; ?>">
    <td align="center"><?= $nom; ?>    </td>
    <td align="center"><?= $db->result($i, "tgl"); ?></td>
    <td align="center"><?= $db->result($i, "kode"); ?></td>
    <td align="center"><a href="?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=<?php echo $db->result($i, "username"); ?>" target="_blank"><?= $db->result($i, "username"); ?></a></td>
    <td align="center"><a href="?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=<?php echo $db->result($i, "tujuan"); ?>" target="_blank"><?= $db->result($i, "tujuan"); ?></a></td>
    <td align="center"><?= rupiah($db->result($i, "jumlah")); ?></td>
    <td align="center"><?= $img; ?></td>
   <td align="center" bordercolor="#999999" bgcolor="#FFFFFF" ><a href="#" onClick="confirmation('<?php echo $kodenya; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Transaction" /></a></td>
     
 
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
  <a href="?go=transwallet&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=transwallet&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=transwallet&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=transwallet&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=transwallet&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>
<?php } ?>