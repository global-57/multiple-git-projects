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
<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Yakin akan menghapus data transaksi ini?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=deposit&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Add Balance (Deposit)</h2>
 <?php
if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["type"])){ $type = $_GET["type"]; }
			
		

			$databasenya="datacwalet";
			$databaseorder="datacwalet2";
			$jenisnya="Wallet Balance";
		
		
		
		$db->update("datacwalet2", "status='$pub', tglproses='$clientdate'", "id='$no'");
		$db->update("$databaseorder", "status='$pub', tglproses='$clientdate'", "kode='$kode'");
		$db->update("member", "free='0'", "username='$mid'");
		$username = $mid;
		
		$query35 = "SELECT * FROM $databaseorder WHERE kode='$kode'"; 
$result35 = mysql_query($query35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$jumlah = $row35['jumlah'];
$uraian = $row35['uraian'];
$tgle = $row35['tgl'];

$cekadane = mysql_query("select kode from $databasenya where kode='$kode'");
$ada_adane = mysql_num_rows($cekadane); 
if(!$ada_adane) {
$db->insert("$databasenya", "", "'', '$kode', 'administrator', '$jumlah', 'Add Balance', '$username', '$clientdate', 1, '$clientdate', 'administrator', '".$db->dataku("accid", $username)."'"); 
}
		
		$nama = $db->dataku("nama", $username);
		$email = $db->dataku("email", $username);
		$hp = $db->dataku("hp", $username);
		$emailadmin = $db->config("email");
		$keterangan = $uraian;
		$invne = rupiah($jumlah);
		$jumlahdepone = rupiah($jumlah);
		$jumlahdepone2 = rupiah($jumlah);
		
		
		$balance = $balances;
		$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");




$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama." (".$username."),</p>
<p>Your Add wallet balance has been processed.</p>
<p><strong>No: ".$kode."<br>
Amount: ".$jumlahdepone."<br>
Fee: -<br>
Add: ".$jumlahdepone."<br>
Date: ".$tgl."<br>
</p>
<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Your Add wallet balance has been processed';
        $mail3->msgHTML($isimail);
	   // $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	

		header("location: ?go=deposit");
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
			$databaseorder="datacwalet2";
			$jenisnya="Wallet Balance";	
		


$query35 = "SELECT * FROM $databaseorder WHERE kode='$kode'"; 
$result35 = mysql_query($query35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$jenis = $row35['jenis'];
$jumlah = $row35['jumlah'];
$uraian = $row35['uraian'];
$tgle = $row35['tgl'];


$db->delete("$databasenya", "kode='$kode'");

		
			$db->update("datacwalet2", "status='$pub', tglproses=''", "id='$no'");
			$db->update("$databaseorder", "status='$pub', tglproses=''", "kode='$kode'");
			
		header("location: ?go=deposit");
		exit;
?>
<?php		
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		
$query35 = "SELECT * FROM dataewalet2 WHERE kode='$no'"; 
$result35 = mysql_query($query35);
$row35 = mysql_fetch_array($result35);
$username = $row35['username'];
$jenis = $row35['jenis'];
$type = $row35['type'];


			$databasenya="datacwalet";
			$databaseorder="datacwalet2";	
		
$db->delete("$databasenya", "kode='$no'");
$db->delete("$databaseorder", "kode='$no'");
$db->delete("dataewalet2", "kode='$no'");
		
		header("location: ?go=deposit");
		exit;
?>



<?php
}else{
?>
 
  
 <script>
		function confirmActionproccess(){
      var confirmed = confirm("Anda yakin akan memproses deposit ini?");
      return confirmed;
}
</script>
<script>
		function confirmActionbatalproccess(){
      var confirmed = confirm("Anda yakin akan membatalkan deposit ini?");
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
	$filter = "username='$keywrd' or kode='$keywrd' or tgl='$keywrd' or type='$keywrd'";
	$where = "username='$keywrd' or kode='$keywrd' or tgl='$keywrd' or type='$keywrd'";
} 


//if($uidm == 001) {
if(isset($_GET['user'])){
//$db->select("*", "member", $kat);
	$numrows = $db->count_records("datacwalet2", "username='".$_GET['user']."'");	
	$db->select("id, kode, username, jumlah, uraian, tujuan, tgl, status, jenis, tglproses,accid,accid2", "datacwalet2", "username='".$_GET['user']."'", "tgl", "", "", "$start, $limit");

}else{
	
$numrows = $db->count_records("datacwalet2", "");	
	$db->select("id, kode, username, jumlah, uraian, tujuan, tgl, status, jenis, tglproses,accid,accid2", "datacwalet2", "", "tgl", "", "", "$start, $limit");
if(isset($kat) == "2") {
$db->select("id, kode, username, jumlah, uraian, tujuan, tgl, status, jenis, tglproses,accid,accid2", "datacwalet2", $where, "tgl", "", "", "$start, $limit");
}	
}
?>
</div>
<form id="form2" name="form2" method="post" action="?go=deposit&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Data :
            <input name="keywrd" type="text" id="keywrd" />
  </label>
          <label>
            <input type="submit" name="submit" value="CARI" />&nbsp;&nbsp;&nbsp;&nbsp;<i>Tgl/Username/Kode</i></label>
</form><br />
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr class="tbl_header">
    <td width="6%"><strong>No.</strong></td>
    <td width="9%"><strong>Tanggal</strong></td>
	<td width="8%"><strong>Trx</strong></td>
    <td width="12%"><strong>Username</strong></td>
    <td width="13%"><strong>Jumlah </strong></td>
    <td width="7%"><strong>Status</strong></td>
	 <td width="12%"><strong>Tanggal Proses</strong></td>
    <td width="6%"><strong>Del</strong></td>
    <td width="6%"><strong>#</strong></td>
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
	$typex = $db->result($i, "type");
			if($statuse > 0) {
		$img = "<a href='?go=deposit&page=unpublish&pub=0&no=$nomornya&mid=$username&kode=$kodenya&type=$typex'><button class='primadetail' style='padding:2px 6px;font-size:11px;' onMouseover=\"ddrivetip('Cancel')\" onMouseout='hideddrivetip()' onclick='return confirmActionbatalproccess()'>Done</button></a>";
	} else {
		$img = "<a href='?go=deposit&page=publish&pub=1&no=$nomornya&mid=$username&kode=$kodenya&type=$typex'><button class='primaback' style='padding:2px 6px;font-size:11px;' onMouseover=\"ddrivetip('Proses')\" onMouseout='hideddrivetip()' onclick='return confirmActionproccess()'>Pending</button></a>";
	}		
	$tglex = $db->result($i, "tglproses"); 
	if($tglex == '0000-00-00 00:00:00') {
	$tgx = "-";
	} else {
		$tgx = $tglex;
	} 	
	
	
if($db->result($i, "type") == "pv") {
				$typene = "<span class='badge badge-success'>PV POIN</span>";
			} else if($db->result($i, "type") == "cash") {
				$typene = "<span class='badge badge-info'>CASH POIN</span";
			} else if($db->result($i, "type") == "register") {
				$typene = "<span class='badge badge-warning'>REGISTER POIN</span";
			} else if($db->result($i, "type") == "purchase") {
				$typene = "<span class='badge badge-inverse'>REGISTER POIN</span";
			}	else{}	
							
?> 
  <tr class="<?= $class; ?>">
    <td align="center"><?= $nom; ?>    </td>
    <td align="center"><?= $db->result($i, "tgl"); ?></td>
    <td align="center"><?= $db->result($i, "kode"); ?></td>
    <td align="center"><a href="?go=memberlist&amp;page=addnew&amp;edit=1&amp;mid=<?php echo $db->result($i, "username"); ?>" target="_blank"><?= $db->result($i, "username"); ?></a></td>
    <td align="center"><?= rupiah($db->result($i, "jumlah")); ?></td>
    <td align="center"><?= $img; ?></td>
    <td align="center"><?= $tgx; ?></td>
   <td align="center" bordercolor="#999999" bgcolor="#FFFFFF" ><a href="#" onClick="confirmation('<?php echo $kodenya; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Transaction" /></a></td>
     <td align="center"><font style="color:#555555"><a class='iframe7' href='page.php?go=detail-buywalet&kode=<?php echo $kodenya; ?>'><img src="../images/view.png" title="Detail Order" width="17" /></a></font></td>
 
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
  <a href="?go=deposit&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=deposit&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=deposit&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=deposit&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=deposit&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
</td></tr></table>
<?php } ?>