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
<?php if (isset($_GET['page']) && $_GET['page'] == "history") { ?>

<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> History Transaksi</h2>
<div id="menu_button2">
  <ul>
    <li><a href="?go=ewalet">E-Money</a></li>
    <li><a href="#" onClick="window.open('page.php?go=emoney&page=addfund','popup','width=800,height=600,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false">Add Fund</a></li>
  </ul>
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
	$filter = "username like '%$keywrd%'";
	$where = "username like '%$keywrd%'";
} 


//if($uidm == 001) {

//$db->select("*", "member", $kat);
$numrows = $db->count_records("dataewalet", "");	
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "dataewalet", "", "id desc", "", "", "$start, $limit");
if(isset($kat) == "2") {
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "dataewalet", $where, "id desc", "", "", "$start, $limit");

}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=ewalet&page=history&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Member :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />
  </label>
</form>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
 <td align="center">NO.</td>
            
            <td align="center">NO. TRANSAKSI</td>
            <td align="center">TANGGAL</td>
            <td align="center">USERNAME</td>
            <td width="16%" align="center">JUMLAH</td>
            <td width="32%" align="center">URAIAN</td>
            <td width="32%" align="center">INVOICE</td>
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
	//$nama = $db->result($i, "nama");
	$jam = date("H:i:s");
	$tujuan = $db->result($i, "tujuan");
	
	$cdo = $db->result($i, "kode");		
$sqlc = mysql_query("SELECT * FROM invoice WHERE kode='$cdo'");
$numc = mysql_num_rows($sqlc);
$rowc = mysql_fetch_array($sqlc);
$invc = $rowc['file'];
?>
  <tr class="<?= $class; ?>">
    <td width="8%" align="center"><?= $nom; ?> </td>
    <td width="12%" align="center"><?= $db->result($i, "kode"); ?></td>
    <td width="18%" align="center"><?= formatgl($db->result($i, "tgl")); ?></td>
    <td width="14%" align="center"><?= $tujuan; ?></td>
    <td  align="center"><?= rupiah($db->result($i, "jumlah")); ?></td>
    <td  align="center"><?= $db->result($i, "uraian"); ?></td>
    <td  align="center">  <?php if($numc){; ?><?php if($tujuan <> "admin"){; ?>
            <a href='../invoice/<?php echo $invc;?>.pdf' download='<?php echo $invc;?>.pdf'><img src='../images/pdf16.png' border='0' /></a>
            <?php } ?><?php } ?></td>
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
  <a href="?go=ewalet&page=history&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=ewalet&page=history&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=ewalet&page=history&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=ewalet&page=history&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=ewalet&page=history&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>






















<?php } else if (isset($_GET['page']) && $_GET['page'] == "swalet") { ?>

<?php  if(isset($_GET["user"])){ $user = $_GET["user"]; } ?>
<script>
		function confirmActionpvpoin(){
      var confirmed = confirm("Anda yakin akan menghapus data ini?");
      return confirmed;
}
</script>	

<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> History Free (User: <?php echo $user;?>)</h2>
<?php
$res = $_GET['res'];
$kodec = $_GET['kod'];
$tj = $_GET['tj'];
if($res == "success") { 
echo "<div class='alert-box successs'><span>sukses: </span><br />Debet balance user ".$user." telah berhasil ditransfer ke user ".$tj."! (Kode Transaksi ".$kodec.".)</div>";
}
?>

<div id="menu_button2">
  <ul>
    <li><a href="?go=ewalet">E-Wallet</a></li>
    <li><a href="#" onClick="window.open('page.php?go=emoney&page=addfund','popup','width=800,height=600,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false">Add Fund</a></li>
  </ul>
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
	//$filter = "tgl like '%$keywrd%' and username='$user' or tujuan='$user'";
	$where = "kode like '%$keywrd%' or tgl like '%$keywrd%'";
} 
//if($uidm == 001) {

//$db->select("*", "member", $kat);
$numrows = $db->count_records("dataswalet", "username='$user' or tujuan='$user'");	
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "dataswalet", "username='$user' or tujuan='$user'", "id desc", "", "", "$start, $limit");
if(isset($kat) == "2") {
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "dataswalet", $where, "id desc", "", "", "$start, $limit");

}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=ewalet&page=swalet&kat=2&user=<?php echo $user;?>" style="margin:0; padding:0">
          <label> Cari Data (Tgl/Kode) :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />
  </label>
</form>
<br />
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
 <td align="center">NO.</td>
            
<td width="11%" align="center">NO. TRANSAKSI</td>
            <td width="11%" align="center">TANGGAL</td>
            <td width="11%" align="center">JUMLAH</td>
            <td width="8%" align="center">TYPE</td>
            <td width="40%" align="center">URAIAN</td>
            <td width="5%" align="center">#</td>
            <td width="5%" align="center">#</td>
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
	//$nama = $db->result($i, "nama");
	$jam = date("H:i:s");
	$tujuan = $db->result($i, "tujuan");
	
	$cdo = $db->result($i, "kode");		
$sqlc = mysql_query("SELECT * FROM invoice WHERE kode='$cdo'");
$numc = mysql_num_rows($sqlc);
$rowc = mysql_fetch_array($sqlc);
$invc = $rowc['file'];
if($db->result($i, "username") == $user) {
				$typene = "<span class='badge badge-important'>Debet</span>";
			} else {
				$typene = "<span class='badge badge-success'>Credit</span";
			}	
?>
  <tr class="<?= $class; ?>">
    <td width="4%" align="center"><?= $nom; ?> </td>
    <td width="8%" align="center"><?= $db->result($i, "kode"); ?></td>
    <td width="10%" align="center"><?= formatgl($db->result($i, "tgl")); ?></td>
    <td  align="center"><?= rupiah($db->result($i, "jumlah")); ?></td>
    <td  align="center"><?= $typene; ?></td>
    <td  align="center"><?= $db->result($i, "uraian"); ?></td>
    
<td align="center"><a href="?go=ewalet&page=deleteswalet&user=<?= $tujuan; ?>&kode=<?= $db->result($i, "kode"); ?>"  onclick="return confirmActionpvpoin()"><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Hapus Data" /></a></td> 
           <td align="center"><a href="#" onClick="window.open('page.php?go=emoney&page=edit&jn=free&user=<?php echo $db->result($i, "username"); ?>&kode=<?= $db->result($i, "kode"); ?>','popup','width=500,height=400,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover="ddrivetip('Edit Transaksi <?= $db->result($i, "kode"); ?>')"; onMouseout="hideddrivetip()">Edit</button></a></td>
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
  <a href="?go=ewalet&page=swalet&show=1&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=ewalet&page=swalet&show=<?php echo $previous; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=ewalet&page=swalet&show=<?php echo $i; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=ewalet&page=swalet&show=<?php echo $next; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=ewalet&page=swalet&show=<?php echo $paging; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>



















<?php } else if (isset($_GET['page']) && $_GET['page'] == "cwalet") { ?>

<?php  if(isset($_GET["user"])){ $user = $_GET["user"]; } ?>
<script>
		function confirmActioncashpoin(){
      var confirmed = confirm("Anda yakin akan menghapus data ini?");
      return confirmed;
}
</script>	

<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> History Wallet (User: <?php echo $user;?>)</h2>
<?php
$res = $_GET['res'];
$kodec = $_GET['kod'];
$tj = $_GET['tj'];
if($res == "success") { 
echo "<div class='alert-box successs'><span>sukses: </span><br />Debet balance user ".$user." telah berhasil ditransfer ke user ".$tj."! (Kode Transaksi ".$kodec.".)</div>";
}
?>

<div id="menu_button2">
  <ul>
    <li><a href="?go=ewalet">E-Wallet</a></li>
    <li><a href="#" onClick="window.open('page.php?go=emoney&page=addfund','popup','width=800,height=600,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false">Add Fund</a></li>
  </ul>
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
	//$filter = "tgl like '%$keywrd%' and username='$user' or tujuan='$user'";
	$where = "kode like '%$keywrd%' or tgl like '%$keywrd%'";
} 
//if($uidm == 001) {

//$db->select("*", "member", $kat);
$numrows = $db->count_records("datacwalet", "username='$user' or tujuan='$user'");	
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "datacwalet", "username='$user' or tujuan='$user'", "id desc", "", "", "$start, $limit");
if(isset($kat) == "2") {
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "datacwalet", $where, "id desc", "", "", "$start, $limit");

}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=ewalet&page=cwalet&kat=2&user=<?php echo $user;?>" style="margin:0; padding:0">
          <label> Cari Data (Tgl/Kode) :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />
  </label>
</form>
<br />
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
 <td align="center">NO.</td>
            
    <td width="11%" align="center">NO. TRANSAKSI</td>
    <td width="11%" align="center">TANGGAL</td>
    <td width="11%" align="center">JUMLAH</td>
    <td width="8%" align="center">TYPE</td>
    <td width="40%" align="center">URAIAN</td>
            <td width="5%" align="center">#</td>
            <td width="5%" align="center">#</td>
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
	//$nama = $db->result($i, "nama");
	$jam = date("H:i:s");
	$tujuan = $db->result($i, "tujuan");
	
	$cdo = $db->result($i, "kode");		
$sqlc = mysql_query("SELECT * FROM invoice WHERE kode='$cdo'");
$numc = mysql_num_rows($sqlc);
$rowc = mysql_fetch_array($sqlc);
$invc = $rowc['file'];

if($db->result($i, "username") == $user) {
				$typene = "<span class='badge badge-important'>Debet</span>";
			} else {
				$typene = "<span class='badge badge-success'>Credit</span";
			}	

?>
  <tr class="<?= $class; ?>">
    <td width="4%" align="center"><?= $nom; ?> </td>
    <td width="8%" align="center"><?= $db->result($i, "kode"); ?></td>
    <td width="10%" align="center"><?= formatgl($db->result($i, "tgl")); ?></td>
    <td  align="center"><?= rupiah($db->result($i, "jumlah")); ?></td>
    <td  align="center"><?= $typene; ?></td>
    <td  align="center"><?= $db->result($i, "uraian"); ?></td>
    
     <td align="center"><a href="?go=ewalet&page=deletecwalet&user=<?= $tujuan; ?>&kode=<?= $db->result($i, "kode"); ?>"  onclick="return confirmActioncashpoin()"><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Hapus Data" /></a></td> 
           <td align="center"><a href="#" onClick="window.open('page.php?go=emoney&page=edit&jn=cash&user=<?php echo $user;?>&kode=<?= $db->result($i, "kode"); ?>','popup','width=500,height=400,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover="ddrivetip('Edit Transaksi <?= $db->result($i, "kode"); ?>')"; onMouseout="hideddrivetip()">Edit</button></a></td>
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
  <a href="?go=ewalet&page=cwalet&show=1&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=ewalet&page=cwalet&show=<?php echo $previous; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=ewalet&page=cwalet&show=<?php echo $i; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=ewalet&page=cwalet&show=<?php echo $next; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=ewalet&page=cwalet&show=<?php echo $paging; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>
















<?php } else if (isset($_GET['page']) && $_GET['page'] == "bwalet") { ?>

<?php  if(isset($_GET["user"])){ $user = $_GET["user"]; } ?>
<script>
		function confirmActionpurchasepoin(){
      var confirmed = confirm("Anda yakin akan menghapus data ini?");
      return confirmed;
}
</script>	

<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> History Store Wallet (User: <?php echo $user;?>)</h2>
<?php
$res = $_GET['res'];
$kodec = $_GET['kod'];
$tj = $_GET['tj'];
if($res == "success") { 
echo "<div class='alert-box successs'><span>sukses: </span><br />Debet balance user ".$user." telah berhasil ditransfer ke user ".$tj."! (Kode Transaksi ".$kodec.".)</div>";
}
?>

<div id="menu_button2">
  <ul>
    <li><a href="?go=ewalet">E-Wallet</a></li>
    <li><a href="#" onClick="window.open('page.php?go=emoney&page=addfund','popup','width=800,height=600,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false">Add Fund</a></li>
  </ul>
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
	//$filter = "tgl like '%$keywrd%' and username='$user' or tujuan='$user'";
	$where = "kode like '%$keywrd%' or tgl like '%$keywrd%'";
} 
//if($uidm == 001) {

//$db->select("*", "member", $kat);
$numrows = $db->count_records("databwalet", "username='$user' or tujuan='$user'");	
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "databwalet", "username='$user' or tujuan='$user'", "id desc", "", "", "$start, $limit");
if(isset($kat) == "2") {
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "databwalet", $where, "id desc", "", "", "$start, $limit");

}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=ewalet&page=bwalet&kat=2&user=<?php echo $user;?>" style="margin:0; padding:0">
          <label> Cari Data (Tgl/Kode) :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />
  </label>
</form>
<br />
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
 <td align="center">NO.</td>
            
            <td width="11%" align="center">NO. TRANSAKSI</td>
            <td width="11%" align="center">TANGGAL</td>
            <td width="11%" align="center">JUMLAH</td>
            <td width="8%" align="center">TYPE</td>
            <td width="40%" align="center">URAIAN</td>
            <td width="5%" align="center">#</td>
            <td width="5%" align="center">#</td>
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
	//$nama = $db->result($i, "nama");
	$jam = date("H:i:s");
	$tujuan = $db->result($i, "tujuan");
	
	$cdo = $db->result($i, "kode");		
$sqlc = mysql_query("SELECT * FROM invoice WHERE kode='$cdo'");
$numc = mysql_num_rows($sqlc);
$rowc = mysql_fetch_array($sqlc);
$invc = $rowc['file'];

if($db->result($i, "username") == $user) {
				$typene = "<span class='badge badge-important'>Debet</span>";
			} else {
				$typene = "<span class='badge badge-success'>Credit</span";
			}	

?>
  <tr class="<?= $class; ?>">
    <td width="4%" align="center"><?= $nom; ?> </td>
    <td width="8%" align="center"><?= $db->result($i, "kode"); ?></td>
    <td width="10%" align="center"><?= formatgl($db->result($i, "tgl")); ?></td>
    <td  align="center"><?= rupiah($db->result($i, "jumlah")); ?></td>
    <td  align="center"><?= $typene; ?></td>
    <td  align="center"><?= $db->result($i, "uraian"); ?></td>
    
     <td align="center"><a href="?go=ewalet&page=deletebwalet&user=<?= $tujuan; ?>&kode=<?= $db->result($i, "kode"); ?>"  onclick="return confirmActionpurchasepoin()"><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Hapus Data" /></a></td> 
           <td align="center"><a href="#" onClick="window.open('page.php?go=emoney&page=edit&jn=purchase&user=<?php echo $user;?>&kode=<?= $db->result($i, "kode"); ?>','popup','width=500,height=400,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover="ddrivetip('Edit Transaksi <?= $db->result($i, "kode"); ?>')"; onMouseout="hideddrivetip()">Edit</button></a></td>
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
  <a href="?go=ewalet&page=bwalet&show=1&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=ewalet&page=bwalet&show=<?php echo $previous; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=ewalet&page=bwalet&show=<?php echo $i; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=ewalet&page=bwalet&show=<?php echo $next; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=ewalet&page=bwalet&show=<?php echo $paging; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>












<?php } else if (isset($_GET['page']) && $_GET['page'] == "dwalet") { ?>

<?php  if(isset($_GET["user"])){ $user = $_GET["user"]; } ?>
<script>
		function confirmActionregpoin(){
      var confirmed = confirm("Anda yakin akan menghapus data ini?");
      return confirmed;
}
</script>	

<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> History REGISTER POIN (User: <?php echo $user;?>)</h2>
<?php
$res = $_GET['res'];
$kodec = $_GET['kod'];
$tj = $_GET['tj'];
if($res == "success") { 
echo "<div class='alert-box successs'><span>sukses: </span><br />Debet balance user ".$user." telah berhasil ditransfer ke user ".$tj."! (Kode Transaksi ".$kodec.".)</div>";
}
?>

<div id="menu_button2">
  <ul>
    <li><a href="?go=ewalet">E-Wallet</a></li>
    <li><a href="#" onClick="window.open('page.php?go=emoney&page=addfund','popup','width=800,height=600,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false">Add Fund</a></li>
  </ul>
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
	//$filter = "tgl like '%$keywrd%' and username='$user' or tujuan='$user'";
	$where = "kode like '%$keywrd%' or tgl like '%$keywrd%'";
} 
//if($uidm == 001) {

//$db->select("*", "member", $kat);
$numrows = $db->count_records("datadwalet", "username='$user' or tujuan='$user'");	
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "datadwalet", "username='$user' or tujuan='$user'", "id desc", "", "", "$start, $limit");
if(isset($kat) == "2") {
	$db->select("kode, uraian, username, jumlah, tujuan, tgl", "datadwalet", $where, "id desc", "", "", "$start, $limit");

}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=ewalet&page=dwalet&kat=2&user=<?php echo $user;?>" style="margin:0; padding:0">
          <label> Cari Data (Tgl/Kode) :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />
  </label>
</form>
<br />
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
 <td align="center">NO.</td>
            
            <td width="11%" align="center">NO. TRANSAKSI</td>
            <td width="11%" align="center">TANGGAL</td>
            <td width="11%" align="center">JUMLAH</td>
            <td width="8%" align="center">TYPE</td>
            <td width="40%" align="center">URAIAN</td>
            <td width="5%" align="center">#</td>
            <td width="5%" align="center">#</td>
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
	//$nama = $db->result($i, "nama");
	$jam = date("H:i:s");
	$tujuan = $db->result($i, "tujuan");
	
	$cdo = $db->result($i, "kode");		
$sqlc = mysql_query("SELECT * FROM invoice WHERE kode='$cdo'");
$numc = mysql_num_rows($sqlc);
$rowc = mysql_fetch_array($sqlc);
$invc = $rowc['file'];

if($db->result($i, "username") == $user) {
				$typene = "<span class='badge badge-important'>Debet</span>";
			} else {
				$typene = "<span class='badge badge-success'>Credit</span";
			}	

?>
  <tr class="<?= $class; ?>">
    <td width="4%" align="center"><?= $nom; ?> </td>
    <td width="8%" align="center"><?= $db->result($i, "kode"); ?></td>
    <td width="10%" align="center"><?= formatgl($db->result($i, "tgl")); ?></td>
    <td  align="center"><?= rupiah($db->result($i, "jumlah")); ?></td>
    <td  align="center"><?= $typene; ?></td>
    <td  align="center"><?= $db->result($i, "uraian"); ?></td>
    
     <td align="center"><a href="?go=ewalet&page=deletedwalet&user=<?= $tujuan; ?>&kode=<?= $db->result($i, "kode"); ?>"  onclick="return confirmActionregpoin()"><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Hapus Data" /></a></td> 
           <td align="center"><a href="#" onClick="window.open('page.php?go=emoney&page=edit&jn=register&user=<?php echo $db->result($i, "username"); ?>&kode=<?= $db->result($i, "kode"); ?>','popup','width=500,height=400,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover="ddrivetip('Edit Transaksi <?= $db->result($i, "kode"); ?>')"; onMouseout="hideddrivetip()">Edit</button></a></td>
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
  <a href="?go=ewalet&page=dwalet&show=1&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=ewalet&page=dwalet&show=<?php echo $previous; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=ewalet&page=dwalet&show=<?php echo $i; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=ewalet&page=dwalet&show=<?php echo $next; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=ewalet&page=dwalet&show=<?php echo $paging; ?>&user=<?php echo $user;?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>







<?php	
} else if (isset($_GET['page']) && $_GET['page'] == "deletedwalet") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["user"])){ $user = $_GET["user"]; }
		//echo "delete no $no";


$query113 = "SELECT * FROM invoice WHERE kode='$kode'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$file = $row113['file'];
//$kode = $row113['kode'];
		
		unlink("../invoice/$file.pdf");	
$db->delete("datadwalet", "kode='$kode'");
//$db->delete("dataewalet", "kode='$kode'");
$db->delete("invoice", "kode='$kode'");

header("location: ./index.php?go=ewalet&page=dwalet&user=$user");
exit;
?>
<?php	
} else if (isset($_GET['page']) && $_GET['page'] == "deletecwalet") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["user"])){ $user = $_GET["user"]; }
		//echo "delete no $no";


$query113 = "SELECT * FROM invoice WHERE kode='$kode'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$file = $row113['file'];
//$kode = $row113['kode'];
		
		unlink("../invoice/$file.pdf");	
$db->delete("datacwalet", "kode='$kode'");
//$db->delete("dataewalet", "kode='$kode'");
$db->delete("invoice", "kode='$kode'");

header("location: ./index.php?go=ewalet&page=cwalet&user=$user");
exit;
?>

<?php	
} else if (isset($_GET['page']) && $_GET['page'] == "deleteswalet") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["user"])){ $user = $_GET["user"]; }

$query113 = "SELECT * FROM invoice WHERE kode='$kode'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$file = $row113['file'];
//$kode = $row113['kode'];
		
		unlink("../invoice/$file.pdf");	

$db->delete("dataswalet", "kode='$kode'");
$db->delete("invoice", "kode='$kode'");
header("location: ./index.php?go=ewalet&page=swalet&user=$user");
exit;
?>


<?php	
} else if (isset($_GET['page']) && $_GET['page'] == "deletebwalet") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["user"])){ $user = $_GET["user"]; }
		//echo "delete no $no";

$query113 = "SELECT * FROM invoice WHERE kode='$kode'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$file = $row113['file'];
//$kode = $row113['kode'];
		
		unlink("../invoice/$file.pdf");	
$db->delete("databwalet", "kode='$kode'");
//$db->delete("dataewalet", "kode='$kode'");
$db->delete("invoice", "kode='$kode'");

header("location: ./index.php?go=ewalet&page=bwalet&user=$user");
exit;
?>





<?php } else { ?>

<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> E-Wallet</h2>
<div id="menu_button2">
  <ul>
    <li><a href="?go=ewalet">E-Wallet</a></li>
    <li><a href="#" onClick="window.open('page.php?go=emoney&page=addfund','popup','width=800,height=600,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false">Add Fund</a></li>
  </ul>
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
	$filter = "username like '%$keywrd%'";
	$where = "username like '%$keywrd%'";
} 


//if($uidm == 001) {
if(isset($_GET['user'])){
//$db->select("*", "member", $kat);
	$numrows = $db->count_records("member", "username='".$_GET['user']."'");	
	$db->select("id, username, nama, accid", "member", "username='".$_GET['user']."'", "username", "", "", "$start, $limit");

}else{
	
$numrows = $db->count_records("member", "");	
	$db->select("id, username, nama, accid", "member", "", "username", "", "", "$start, $limit");
if(isset($kat) == "2") {
$db->select("id, username, nama, accid", "member", $where, "username", "", "", "$start, $limit");
}	
}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=ewalet&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Member :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />
  </label>
</form>
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
    <td width="6%" align="center">No.</td>
    <td width="8%" align="center">Username</td>
    <td width="8%" align="center">Wallet ID</td>
    <td width="15%" align="center">Nama </td>
    <td width="12%" align="center">Free</td>
    <td width="12%" align="center">Balance</td>
    <td width="10%" align="center">#</td>
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
	//$nama = $db->result($i, "nama");
	$jam = date("H:i:s");
	
			
								
?> 
  <tr class="<?= $class; ?>">
    <td align="center"><?= $nom; ?> <?= $freebalance; ?> </td>
    <td align="center"><?= $db->result($i, "username"); ?></td>
    <td align="center"><?= $db->result($i, "accid"); ?></td>
    <td align="center"><?= $db->result($i, "nama"); ?></td>
   
   
  <td align="center"><?php echo $style; ?><?  $saldoswallete = $db->myswalet($username);
			 $pendingswallete = $db->myswaletpending($username);
			 $totalswalete = $saldoswallete-$pendingswallete; 
			 echo "<a href='?go=ewalet&page=swalet&user=$username'>".rupiah($totalswalete)."</a>";?></font></td>        
  
             
    <td align="center"><?php echo $style; ?><?  $saldocwallete = $db->mycwalet($username);
			 $pendingcwallete = $db->mycwaletpending($username);
			 $totalcwalete = $saldocwallete-$pendingcwallete; 
			 echo "<a href='?go=ewalet&page=cwalet&user=$username'>".rupiah($totalcwalete)."</a>";?></font></td>        
             
        
  
    <td align="center"><a href="#" onClick="window.open('page.php?go=emoney&page=addfund&user=<?php echo $db->result($i, "username"); ?>','popup','width=800,height=600,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover="ddrivetip('Tambahkan saldo untuk user : <?php echo $db->result($i, 'username'); ?>')"; onMouseout="hideddrivetip()">Add Fund</button></a></td>
  
 
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
  <a href="?go=ewalet&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=ewalet&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=ewalet&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=ewalet&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=ewalet&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>
<?php } ?>