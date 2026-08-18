<?php
(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
$lic=$license;if(!$lic){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=./index.php\">";
exit();} 
?>
<?php
if (empty($_SESSION["valid_admin"])){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();}
?>
<script type="text/javascript">
<!--
function confirmation(noid, kat) {
	var answer = confirm("Yakin akan menghapus kode aktivasi ini?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=ticket&page=delete&no=" + noid + "&kat=" + kat;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" /> PIN Register</h2>
<?
//-------------password recovery & pin-------------
function randString ($pass_len) 
{ 
$allchars = 'abcdefghijklnmopqrstuvwxyz0123456789'; 
//$allchars = array ($a, "a", "b", "c", "5", "8");
$string = ''; 

mt_srand ((double) microtime() * 1000000); 

for ($i = 0; $i < $pass_len; $i++) { 

$string .= $allchars{mt_rand (0,strlen($allchars))}; 
} 

return $string; 
}
function randomPassword($length) {
$allow = "abcdefghijklnmopqrstuvwxyz0123456789";
$i = 1;

while ($i <= $length) {

$max = strlen($allow)-1;

$num = rand(0, $max);

$temp = substr($allow, $num, 1);

$ret = $ret . $temp;

$i++;

}

return $ret;

}

//--------
?>
<?
if (isset($_GET['page']) && $_GET['page'] == "transfer") {
?>
<?php
$results = $_GET['result'];
if($results == "sameuser") { 
echo "<div class='alert-message'><div class='errorx'>Tidak dapat transfer ke user yang sama!</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "error") { 
echo "<div class='alert-message'><div class='errorx'>Saldo tiket tidak mencukupi untuk transfer sesuai jumlah yang anda isi!</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-message'><div class='successx'>Tiket berhasil di transfer!</a></span></div></div>";
}
?>
<form name="form1" id="form1" method="post" action="?go=ticket&page=transfer_send">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" style="border:solid #CCCCCC 1px">
    <tr class="tbl_header">
      <td colspan="2" align="center">TRANSFER PIN REGISTER</td>
    </tr>
    <tr>
      <td width="48%" align="right">Username :</td>
      <td width="52%"><label>
       <select name="mid" onchange="value" class="form" required="required">
          <option value="" selected="selected">-- Pilih username --</option>
          <?php
					$sql=mysql_query("select username, nama from member order by username");
					while($sto=mysql_fetch_row($sql)) {
					$blnctikete = balance_ticket($sto[0]);	
						
						if($blnctikete > 0) {
					?>
          <option value="<?php echo $sto[0]; ?>"> 
          <?php echo $sto[0]; ?> (<?php echo $blnctikete; ?> Ticket)
          <?php
					}
					}
					?>
        </select>
      </label></td>
    </tr>
   
    <tr>
      <td align="right">Jumlah PIN yang akan ditransfer :</td>
      <td><label>
        <input name="jumlahkode" type="text" id="jumlahkode" size="10" required="required"/>
      </label></td>
    </tr>
    <tr>
      <td width="48%" align="right">Tujuan Transfer :</td>
      <td width="52%"><label>
       <select name="tujuan" onchange="value" class="form" required="required">
          <option value="" selected="selected">-- Pilih username --</option>
          <?php
					$sql2=mysql_query("select username, nama from member order by username");
					while($sto2=mysql_fetch_row($sql2)) {
					
					?>
          <option value="<?php echo $sto2[0]; ?>">
          <?php echo $sto2[0]; ?>
          <?php
					}
					?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" id="submit" class="submit"  value="TRANSFER">
      </label></td>
    </tr>
  </table>
</form>







<?
}else if (isset($_GET['page']) && $_GET['page'] == "transfer_send") {
	
	$jumlahkode = $_POST['jumlahkode'];
	$mid = $_POST['mid'];
	$tujuan = $_POST['tujuan'];
	$blnctikete = balance_ticket($mid);	
	
	if($mid == $tujuan){
	header("location: ?go=ticket&page=transfer&result=sameuser");
			exit;
	}else{
	
	if($blnctikete < $jumlahkode){
	header("location: ?go=ticket&page=transfer&result=error");
			exit;
	}else{


$namaku = $db->dataku("nama", $mid);
$nama = $db->dataku("nama", $tujuan);
$email = $db->dataku("email", $tujuan);
$coed=substr(str_shuffle(str_repeat("445642037111211241472131411190667642037111211241472162223777", 64)), 0, 11);	 


$sqlcv = mysql_query("SELECT * FROM ticket WHERE username='$mid' and status='1' order by id asc limit ".$jumlahkode."");
$numcv = mysql_num_rows($sqlcv);
while($rowcv = mysql_fetch_array($sqlcv)){
$tickete = $rowcv['ticket'];
	
$db->insert("ticket_transfer", "", "'', '$mid', '$namaku', '', '$tujuan', '$nama', '', '$tickete', '', '$email', '$clientdate'"); 	
$db->update("ticket", "status='2', info='transfered to $tujuan - $clientdate'", "ticket='$tickete'");
$db->insert("ticket", "", "'', '$tujuan', '$tickete', '1', '$clientdate', 'transfered from $mid - $clientdate', '', '', '', '$coed'");
	
}



		
header("location: ?go=ticket&page=transfer&result=success");
			exit;
 }
}
?>







<?
}else if (isset($_GET['page']) && $_GET['page'] == "generate") {
	if(isset($_POST['submit'])){	
	//---
	$jumlahkode = $_POST['jumlahkode'];
	$mid = $_POST['mid'];
	$produk = $_POST['paket'];
if($produk == 1){
$biaya = $biaya1;
$hargatiketnya = $hrg0tktne1;
$myproduk = $paketregister1;
}else if($produk == 2){
$biaya = $biaya2;
$hargatiketnya = $hrg0tktne2;
$myproduk = $paketregister2;
}else if($produk == 3){
$biaya = $biaya3;
$hargatiketnya = $hrg0tktne3;
$myproduk = $paketregister3;
}else if($produk == 4){
$biaya = $biaya4;
$hargatiketnya = $hrg0tktne4;
$myproduk = $paketregister4;
}else if($produk == 5){
$biaya = $biaya5;
$hargatiketnya = $hrg0tktne5;
$myproduk = $paketregister5;
}else{
}	


	for($i=0;$i<$jumlahkode;$i++) {
					$serial = substr(str_shuffle(str_repeat("278501346901232278501346901234567893026456789785013469012345678930264567894278501346901234567893026456789567893026456789", 24)), 0, 9);	
					$x = $serial;
				
				//echo randString ($u)."<br>";
				$db->insert("ticket", "", "'', '$mid', '$x', '1', '$clientdate', '', '$hargatiketnya','','','', '$produk', '$myproduk'");
			//mysql_close();
		}	
		
header("location: index.php?go=ticket&result=successadd");
			exit;
 
}
?>
<form name="form1" id="form1" method="post" action="">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" style="border:solid #CCCCCC 1px">
    <tr class="tbl_header">
      <td colspan="2" align="center">INPUT PIN REGISTER</td>
    </tr>
    <tr>
      <td width="48%" align="right">Username :</td>
      <td width="52%"><label>
       <select name="mid" onchange="value" class="form" required="required">
          <option value="" selected="selected">-- Pilih Username --</option>
		  <option value="administrator" selected="selected">Administrator</option>
          <?php
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username from member where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						if(isset($mid)&& $mid == $sto[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?php echo $sto[0]; ?>" <?php echo $pilih; ?>> 
          <?php echo $sto[0]; ?>
          <?php
					}
					?>
        </select>
      </label></td>
    </tr>
   
    <tr>
      <td align="right">Jumlah PIN yang akan digenerate :</td>
      <td><label>
        <input name="jumlahkode" type="text" id="jumlahkode" size="10" required="required"/>
      </label></td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" id="submit" class="submit"  value="GENERATE CODE">
      </label></td>
    </tr>
  </table>
</form>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("form1");
  frmvalidator.addValidation("mid","dontselect=000","Pilih Username");
 frmvalidator.addValidation("jumlahkode","req","Masukkan jumlah Kode Aktivasi yang akan digenerate!");
</script>
<?
}
else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }	
		//echo "delete no $no";
		//myquery("delete from member where username='$mid'");
		
		$db->delete("ticket", "id='$no'");
		//$up = dataupline("upline0", $mid);
		//$pos = dataupline("posisi", $mid);
		//update("upline", "$pos=''", "username='$up'");
		//myquery("delete from upline where username='$mid'");
		//mysql_close();
		header("location: index.php?go=ticket&result=successdell");
			exit;


}
else if (isset($_GET['page']) && $_GET['page'] == "edit") {
if(isset($_GET["noid"])){ $noid = $_GET["noid"]; }
	
if( isset($_POST['submit'])) {
$username = $_POST['username'];
	$kode = $_POST['kode'];
	$status = $_POST['status'];
	$info = $_POST['info'];
	$noid = $_POST['noid'];
	

	$db->update("ticket", "username='$username', ticket='$kode', status='$status', info='$info'", "id='$noid'");
	header("location: index.php?go=ticket&page=edit&noid=$noid&result=success");
			exit;

}

	$db->select("*", "ticket", "id='$noid'");	
?>
<?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>Ticket Updated!</a></span></div></div>";
}
?>
<form id="form2" name="form1" method="post" action="">
  <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr>
      <td width="44%" align="right">Username :</td>
      <td width="56%"><b>
        <input name="username" type="text" id="username" value="<?= $db->result(0, "username"); ?>" />
      </b></td>
    </tr>
    <tr>
      <td align="right">Kode :</td>
      <td><input name="kode" type="text" id="kode" value="<?= $db->result(0, "ticket");  ?>" />
	  <input name="noid" type="hidden" id="noid" value="<?= $noid;  ?>" />
	  </td>
    </tr>
    <tr>
      <td align="right">Status :</td>
      <td><select name="status">
									 <?php $status = $db->result(0, "status");
				                     if ($status == 1){
				                     ?>
									 <option value="1" selected="selected">Active</option>
									 <option value="2">Transfered</option>
									 <option value="0">Used</option>
				                     <?php } else if ($status == 2){ ?>
				                    <option value="1">Active</option>
									 <option value="2" selected="selected">Transfered</option>
									 <option value="0">Used</option>
									  <?php } else if ($status == 0){ ?>
				                    <option value="1">Active</option>
									 <option value="2">Transfered</option>
									 <option value="0" selected="selected">Used</option>
				                     <?php } ?>
                                     </select></td>
    </tr>
    
    <tr>
      <td align="right">Info : </td>
      <td><textarea name="info" cols="30" rows="3" id="info"><?= $db->result(0, "info");  ?>
      </textarea> 
      </td>
    </tr>
    
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="submit" id="submit" value="UPDATE" class="submit" />
      </label></td>
    </tr>
  </table>
</form>









<?
} else if (isset($_GET['page']) && $_GET['page'] == "cancel") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }

$cekmanage = "SELECT * FROM  ticket_order WHERE coed='$kode'"; 
$manageuser = mysql_query($cekmanage) or die(mysql_error());
$rowmanager = mysql_fetch_array($manageuser);
$jumlahkode = $rowmanager['amount'];
$status = $rowmanager['status'];

if($status == 1){
$db->update("ticket_order", "status='0'", "coed='$kode'");	
$db->delete("ticket", "coed='$kode'");
	
header("location: index.php?go=ticket&page=order");
			exit;
 
} else {
	$string = 'This transaction has never been proccess before!';
        echo "<script>alert(\"$string\");".
        "window.location = 'index.php?go=ticket&page=order'</script>";
			exit;
}

?>
<?
} else if (isset($_GET['page']) && $_GET['page'] == "deleteorder") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
$db->delete("ticket", "coed='$kode'");
$db->delete("ticket_order", "coed='$kode'");
	
header("location: index.php?go=ticket&page=order");
			exit;
 

?>

<?
} else if (isset($_GET['page']) && $_GET['page'] == "proccess") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
	
$cekmanage = "SELECT * FROM  ticket_order WHERE coed='$kode'"; 
$manageuser = mysql_query($cekmanage) or die(mysql_error());
$rowmanager = mysql_fetch_array($manageuser);
$jumlahkode = $rowmanager['amount'];
$status = $rowmanager['status'];

if($status == 0){
$db->update("ticket_order", "status='1', tglproses='$clientdate'", "coed='$kode'");	
//$db->update("member", "mngr='1'", "username='$mid' and mngr='0'");

	for($i=0;$i<$jumlahkode;$i++) {
					$serial = substr(str_shuffle(str_repeat("27850134690123456789ACDEFGHKL981771683026080MNBPRSTUXYZ501346900123456789", 24)), 0, 10);	
					$x = $serial;
				
				//echo randString ($u)."<br>";
				$db->insert("ticket", "", "'', '$mid', '$x', '1', '$clientdate', '', '','','','$kode','',''");
			//mysql_close();
		}	
		
header("location: index.php?go=ticket&page=order");
			exit;
 
} else {
	$string = 'This transaction already proccess before!';
        echo "<script>alert(\"$string\");".
        "window.location = 'index.php?go=ticket&page=order'</script>";
			exit;
}
	
?>












<?
} else if (isset($_GET['page']) && $_GET['page'] == "cancelmember") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }

$cekmanage = "SELECT * FROM  ticket_order WHERE coed='$kode'"; 
$manageuser = mysql_query($cekmanage) or die(mysql_error());
$rowmanager = mysql_fetch_array($manageuser);
$amount = $rowmanager['amount'];
$orderto = $rowmanager['orderto'];
$coed = $rowmanager['coed'];
$user = $rowmanager['username'];
$status = $rowmanager['status'];

if($status == 1){


$db->update("ticket_order", "status='0', info='Canceled proccess ".formatgl($clientdate)."'", "coed='".mysql_real_escape_string($coed)."'");

$sqlc = mysql_query("SELECT * FROM ticket WHERE coed='".$coed."'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){

	mysql_query("UPDATE ticket SET status='1', info='' WHERE ticket='".$rowc['ticket']."' AND coed=''");
	
	
}
$db->delete("ticket", "coed='$coed'");

header("location: index.php?go=ticket&page=order");
			exit;
 
} else {
	$string = 'This transaction has never been proccess before!';
        echo "<script>alert(\"$string\");".
        "window.location = 'index.php?go=ticket&page=order'</script>";
			exit;
}

?>

<?
} else if (isset($_GET['page']) && $_GET['page'] == "order") {
?>
<form id="form2" name="form2" method="post" action="go=ticket&page=order&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Member :
            <input name="keywrd" type="text" id="keywrd" />
            </label>
          <label>
            <input type="submit" name="Submit" value="CARI" />
            </label>
        </form>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EEEEEE">
                <thead> 
                    <tr> 
                        <th width="7%" align="center">#</th> 
                        <th width="15%" align="center">Date</th> 
                        <th width="15%" align="center">Kode</th> 
                        <th width="20%" align="center">User</th> 
                        <th width="12%" align="center">Jumlah</th> 
                        <th width="12%" align="center">Bayar</th> 
                        <th width="14%" align="center">Status</th>
                        <th width="14%" align="center">#</th>
                    </tr> 
                </thead> 
                <tbody> 
				
<?
$batas   = 25;
if(isset($_GET['halaman'])){ $halaman = anti_injection($_GET['halaman']); }
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{
	$posisi = ($halaman-1) * $batas;
}
	
	$kat = $_GET["kat"];
	$keyword = $_POST["keywrd"];
	if($kat == 2){
	$db->select("id, username, orderto, status, tgl, tglproses, info, amount, coed, paket, paketname", "ticket_order", "orderto='administrator' and username = '$keyword' or orderto='administrator' and coed = '$keyword'", "tgl desc LIMIT $posisi,$batas");
	}else{
	$db->select("id, username, orderto, status, tgl, tglproses, info, amount, coed, paket, paketname", "ticket_order", "orderto='administrator'", "tgl desc LIMIT $posisi,$batas");
	}
	$ada = $db->num_rows();
	if($ada > 0) {
		$nom=1;
		while($row=$db->fetch_row()) {
			if(is_odd($nom) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
			
		if($row[3] == 0) {
		$getbonus = "<a href='?go=ticket&page=proccess&kode=".$row[8]."&mid=".$row[1]."'><button class='primapc2' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Proccess This Order')\" onMouseout='hideddrivetip()'>Pending</button></a>";
		}else{
		$getbonus = "<a href='?go=ticket&page=cancel&kode=".$row[8]."&mid=".$row[1]."'><button class='primapc' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Cancel This Order')\" onMouseout='hideddrivetip()'>Proccess</button></a>";
		}
		$user1=$row[1];
		$namaspon1 = "SELECT * FROM member WHERE username='$user1'"; 
        $resultnamaspon1 = mysql_query($namaspon1);
        $rownamaspon1 = mysql_fetch_array($resultnamaspon1);
        $namaspone1 = $rownamaspon1['nama'];	

$pay = $row[7]*$hargatiket;

?>				             
                     <tr class="<?php echo $class; ?>"> 
                            <td align="center"><?php echo $nom; ?></td>
                            
                            <td align="center"><?php echo $style; ?><?php echo formatgl($row[4]); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $row[8]; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $namaspone1; ?> (<?php echo $row[1]; ?>)</font></td>
                            <td align="center"><?php echo $style; ?><?php echo $row[7]; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo idr($pay); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $getbonus; ?></font></td>
                            <td align="center"><?php echo $style; ?><a href='?go=ticket&page=deleteorder&kode=<?php echo $row[8]; ?>' onclick='return confirmAction79()'><img src='images/icon-32-delete_resize.png' border=0 title='Click to Delete'></a></font></td>
                        </tr>
                                                                    
             <?
		$nom++;
		}
	} else {
	?>
    	<tr>
            <td colspan="7" align="center"><strong>No Data Order</strong></td>
    </tr>
	<?
	}
	?>
	
			
</tbody></table>
		   
		  <?
   //Langkah 3: Hitung total data dan halaman 
$tampil2 = mysql_query("SELECT * FROM ticket_order WHERE orderto = 'administrator'");
$jmldata = mysql_num_rows($tampil2);
$jmlhal  = ceil($jmldata/$batas);
if($jmldata > 25) {
echo "<br><div class=paging>";
// Link ke halaman sebelumnya (previous)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<span class=prevnext><a href=index.php?go=ticket&page=order&halaman=$prev>Prev</a></span> ";
}
else{ 
	echo "<span class=disabled>Prev</span> ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=index.php?go=ticket&page=order&halaman=$i>$i</a> ";
}
else{
	echo " <span class=current>$i</span> ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class=prevnext><a href=index.php?go=ticket&page=order&halaman=$next>Next</a></span>";
}
else{ 
	echo "<span class=disabled>Next</span>";
}
echo "</div>";
echo "<br>";
 
}?>             





<?
} else {
?>	
<?
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
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }	
if($kat == 1) {
	$sql0 = $db->count_records("ticket", "status=1 and ticket <> '9999999999'");
	$sql = $db->select("*", "ticket", "status=1 and ticket <> '9999999999'", "", "", "", "$start, $limit");
	//mysql_close();
} else if($kat == "0") {
	$sql0 = $db->count_records("ticket", "status=0 and ticket <> '9999999999'");
	$sql = $db->select("*", "ticket", "status=0 and ticket <> '9999999999'", "id asc", "", "", "$start, $limit");
} else if($kat == "2") {
	$sql0 = $db->count_records("ticket", "status=2 and ticket <> '9999999999'");
	$sql = $db->select("*", "ticket", "status=2 and ticket <> '9999999999'", "id asc", "", "", "$start, $limit");	
} else {
	$sql0 = $db->count_records("ticket", "ticket <> '9999999999'");
	$sql = $db->select("*", "ticket", "ticket <> '9999999999'", "id asc", "", "", "$start, $limit");
}					
	$numrows = $sql0;
	
?>
<?php
$results = $_GET['result'];
if($results == "successdell") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>Ticket has been deleted!</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "successadd") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>Ticket has been created!</a></span></div></div>";
}
?>
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="1" style="border:solid #CCCCCC 1px">
  <tr class="tbl_header">
    <td colspan="5"> Daftar PIN Regsiter 
      <select name="select" onchange="location =  this.options[this.selectedIndex].value" class="form">
           <option value="?go=ticket&pilih0=selected" <? echo $_GET['pilih0']; ?>>Semua</option>
            <option value="?go=ticket&kat=1&pilih=selected" <? echo $_GET['pilih']; ?>>Active</option>
            <option value="?go=ticket&kat=2&pilih2=selected" <? echo $_GET['pilih2']; ?>>Transfered</option>
            <option value="?go=ticket&kat=0&sel=selected" <? echo $_GET['sel']; ?>>Used</option>
          </select> 
      Total : <?= $numrows; ?></td>
    <td colspan="5"><form id="form2" name="form2" method="post" action="?go=ticket&amp;kat=2" style="margin:0; padding:0">
          <label>
            Cari kode/username : 
            <input name="keywrd" type="text" id="keywrd" />
            </label>
          <label>
          <input type="submit" name="Submit" value="CARI" />
          </label>
        </form>  </td>
  </tr>
  <tr class="tbl_header">
    <td width="6%" align="center">NO</td>
    <td width="8%" align="center"><label>USERNAME</label></td>
    <td width="9%" align="center">KODE</td>
    <td width="12%" align="center">TANGGAL</td>
    <td width="8%" align="center">STATUS</td>
    <td width="20%" align="center">INFO</td>
    <td width="20%" align="center">#</td>
    <td width="10%" align="center">&nbsp;</td>
  </tr>
<?


$nom = 1 + $start;
while($row=$db->fetch_row($sql)) {
	$lid = $nom - 1;
	if(is_odd($nom) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	if($row[3] == 1) {
				$sts = "<span class='badge badge-success'>Active</span>";
				$style = "<font>";
				$btrans = "<a class='various5' data-fancybox-type='iframe' href='page.php?go=transfer_ticket&kode=$row[2]&user=$row[1]'><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Transfer this ticket to another manager')\" onMouseout='hideddrivetip()'>Transfer</button></a>";
				if($row[7] == 1) {	
				$btrans2 = "<a class='various5' data-fancybox-type='iframe' href='page.php?go=send_mail_ticket&kode=$row[2]&user=$row[1]'><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to email prospective members')\" onMouseout='hideddrivetip()'>Resend</button></a>";
				}else{
				$btrans2 = "<a class='various5' data-fancybox-type='iframe' href='page.php?go=send_mail_ticket&kode=$row[2]&user=$row[1]'><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to email prospective members')\" onMouseout='hideddrivetip()'>Email</button></a>";
			}	
				if($row[8] == 1) {
				$btrans3 = "<a class='various5' data-fancybox-type='iframe' href='page.php?go=send_sms_ticket&kode=$row[2]&user=$row[1]'><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to mobile prospective members')\" onMouseout='hideddrivetip()'>SMS</button></a>";
			}else{
			$btrans3 = "<a class='various5' data-fancybox-type='iframe' href='page.php?go=send_sms_ticket&kode=$row[2]&user=$row[1]'><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to mobile prospective members')\" onMouseout='hideddrivetip()'>SMS</button></a>";
			}
			
			
			} else if($row[3] == 2) {
				$sts = "<span class='badge badge-warning'>Transfered</span>";
				$style = "<font color='#FF9E3E'>";
				$btrans = "";
				$btrans2 = "";
				$btrans3 = "";
			} else if($row[3] == 0) {
				$sts = "<span class='badge badge-important'>Used</span>";
				$style = "<font color='#F00000'>";
				$btrans = "";
				$btrans2 = "";
				$btrans3 = "";
			} 	
	if($row[6] == "0000-00-00") {
		$tglkode = "Belum digunakan";
	} else {
		$tglkode = $row[6];
	}		
	
	
	
	//$nama=namaku("nama", $row[2]);	
	if($row[4] > 0) {

		$aktif = "<a href='#' style='cursor:hand'><img src='images/icon-16-checkin.png' title='Aktif' border=0 /></a>";

	} else {

		$aktif = "<a href='#' style='cursor:hand'><img src='images/publish_x.png' title='Belum digunakan' border=0 /></a>";

	}

?>  
  <tr class="<?= $class; ?>">
    <td align="center"><?= $nom; ?>.</td>
    <td align="center"><?= $row[1]; ?></td>
    <td align="center"><?= $row[2]; ?></td>
    <td align="center"><?= formatgl($row[4]); ?></td>
    <td align="center"><?= $sts; ?></td>
    <td align="center"><?= $row[5]; ?></td>
    <td align="center"><?php if($row[3] == 1) { ?>
	<a href="#" onClick="window.open('page.php?go=transfer_ticket&kode=<?php echo $row[2]; ?>&user=<?php echo $row[1]; ?>','popup','width=600,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Transfer this ticket to another manager')\" onMouseout='hideddrivetip()'>Transfer</button></a>
	<?php if($row[7] == 1) {	 ?>
	<a href="#" onClick="window.open('page.php?go=send_mail_ticket&kode=<?php echo $row[2]; ?>&user=<?php echo $row[1]; ?>','popup','width=600,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to email prospective members')\" onMouseout='hideddrivetip()'>Resend</button></a>
	<?php } else {	 ?>
	<a href="#" onClick="window.open('page.php?go=send_mail_ticket&kode=<?php echo $row[2]; ?>&user=<?php echo $row[1]; ?>','popup','width=600,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to email prospective members')\" onMouseout='hideddrivetip()'>Send Mail</button></a>
	<?php } ?>
	<?php if($row[7] == 1) {	 ?>
	<a href="#" onClick="window.open('page.php?go=send_sms_ticket&kode=<?php echo $row[2]; ?>&user=<?php echo $row[1]; ?>','popup','width=600,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to mobile phone prospective members')\" onMouseout='hideddrivetip()'>Resend</button></a>
	<?php } else {	 ?>
	<a href="#" onClick="window.open('page.php?go=send_sms_ticket&kode=<?php echo $row[2]; ?>&user=<?php echo $row[1]; ?>','popup','width=600,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to mobile phone prospective members')\" onMouseout='hideddrivetip()'>Send SMS</button></a>
	<?php } ?>
	
	
	
	<?php } ?>
	</td>
    <td align="center"><a href="?go=ticket&amp;page=edit&noid=<?= $row[0]; ?>"><img src="images/edit_f2.png" title="Edit Card" width="17" height="22" border="0" /></a> &nbsp;<a href="#" onclick="confirmation('<?= $row[0]; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Code" /></a></td>
  </tr>
<?
	$nom++;
}
?>	  
</table>
<br>
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
  <a href="?go=ticket&kat=<?= $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< First </a> | <a href="?go=ticket&kat=<?= $kat; ?>&show=<?= $previous; ?>" style="font-size:10px; color:#0000CC">< Previous </a> |
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
<?= $i ?>
</b> ]
<?php
			
		} else {
			
?>
[ <a href="?go=ticket&kat=<?= $kat; ?>&show=<?= $i; ?>" style="font-size:10px; color:#0000CC">
<?= $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=ticket&kat=<?= $kat; ?>&show=<?= $next; ?>" style="font-size:10px; color:#0000CC">Next ></a> | <a href="?go=ticket&kat=<?= $kat; ?>&show=<?= $paging; ?>" style="font-size:10px; color:#0000CC">Last >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>

<? } ?>