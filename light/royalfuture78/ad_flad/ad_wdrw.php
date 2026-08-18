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
		window.location = "?go=wdrw&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Withdrawal Reward</h2>
<p align="center">&nbsp;</p>
<p align="center"><font color="#FF0000"></font></p>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EEEEEE">
  <tr align="center"> 
    <td width="6%"><strong>No.</strong></td>
    <td width="15%"><strong>Tanggal</strong></td>
	<td width="8%"><strong>Kode</strong></td>
    <td width="8%"><strong>Username</strong></td>
    <td width="10%"><strong>Reward</strong></td>
    <td width="10%"><strong>Bonus Reward</strong></td>
    <td width="30%"><strong>Info</strong></td>
    <td width="7%"><strong>Status</strong></td>
	 <td width="15%"><strong>Tanggal Proses</strong></td>
    <td width="5%"><strong>Del</strong></td>
  </tr>
  <script>
		function confirmActionx1(){
      var confirmed = confirm("Yakin akan lakukan proses?");
      return confirmed;
}
</script>
  <script>
		function confirmActionx2(){
      var confirmed = confirm("Yakin akan lakukan pembatalan proses?");
      return confirmed;
}
</script>
<?php
$batas   = 25;
if(isset($_GET['halaman'])) { $halaman = anti_injection($_GET['halaman']); } 
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{
	$posisi = ($halaman-1) * $batas;
} 
$sql = mysql_query("select * from wd_reward order by id desc LIMIT $posisi,$batas");
$nom = 1;
while($row=mysql_fetch_row($sql)) {
if(is_odd($nom) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	}
if($row[6] > 0) {
		$img = "<a href='?go=wdrw&page=publish&pub=0&no=$row[0]&mid=$row[2]&kode=$row[1]'><button class='primapc' style='padding:4px 8px;font-size:11px;' onMouseover=\"ddrivetip('Klik disini untuk batalkan proses')\" onMouseout='hideddrivetip()' onclick='return confirmActionx2()'>Proses</button></a>";
	} else {
		$img = "<a href='?go=wdrw&page=publish&pub=1&no=$row[0]&mid=$row[2]&kode=$row[1]'><button class='primapc2' style='padding:4px 8px;font-size:11px;' onMouseover=\"ddrivetip('Klik disini untuk proses')\" onMouseout='hideddrivetip()' onclick='return confirmActionx1()'>Pending</button></a>";
	}
	if($row[8] == "0000-00-00 00:00:00"){
		$dtpros = "---";
	}else{
		$dtpros = formatgl($row[8]);
	}
		
?> 
  <tr  class="<?php echo $class; ?>" > 
    <td align="right" bordercolor="#999999" bgcolor="#FFFFFF"> 
      <div align="center">
        <?php echo $nom; ?>
    </div></td>
    <td bordercolor="#999999" bgcolor="#FFFFFF"> 
      <div align="center">
        <?php echo formatgl($row[7]); ?>
    </div></td>
    <td bordercolor="#999999" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php echo $row[1]; ?>
    </div></td>
     <td bordercolor="#999999" bgcolor="#FFFFFF"> 
      <div align="center">
        <?php echo $row[2]; ?>
    </div></td>
  
   
    <td align="center" bordercolor="#999999" bgcolor="#FFFFFF"> 
      <?php echo $row[3]; ?>    </td>
       <td align="center" bordercolor="#999999" bgcolor="#FFFFFF"> 
      <?php echo $row[5]; ?>    </td>
       <td align="center" bordercolor="#999999" bgcolor="#FFFFFF"> 
      <?php echo $row[9]; ?>    </td>
      
    <td align="center" bordercolor="#999999" bgcolor="#FFFFFF" ><?php echo $img; ?></td>
	 <td align="center" bordercolor="#999999" bgcolor="#FFFFFF" ><?php echo $dtpros; ?></td>
    <td align="center" bordercolor="#999999" bgcolor="#FFFFFF" ><a href="#" onClick="confirmation('<?php echo $row[1]; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Transaction" /></a></td>
   
  </tr>
<?php
 $nom++;
 }
 ?>
</table>
<P>&nbsp;</P>
<?php
//Langkah 3: Hitung total data dan halaman 
$tampil2 = mysql_query("SELECT * FROM wd_reward");
$jmldata = mysql_num_rows($tampil2);
$jmlhal  = ceil($jmldata/$batas);
if($jmldata > 25){
echo "<div class=paging>";
// Link ke halaman sebelumnya (previous)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<span class=prevnext><a href=?go=wdrw&halaman=$prev>Prev</a></span> ";
}
else{ 
	echo "<span class=disabled>Prev</span> ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=?go=wdrw&halaman=$i>$i</a> ";
}
else{
	echo " <span class=current>$i</span> ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class=prevnext><a href=?go=wdrw&halaman=$next>Next</a></span>";
}
else{ 
	echo "<span class=disabled>Next</span>";
}
echo "</div>";
echo "<br>";
echo "<p align=center>Total : <b>$jmldata</b> Deposit</p>";
}
?>
<?php
if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
			
		$db->update("wd_reward", "status='$pub', tglproses='$clientdate'", "id='$no'");
		
		echo "<meta http-equiv='refresh' content='0;URL=?go=wdrw'>";
?>
<?php		
} if (isset($_GET['page']) && $_GET['page'] == "unpublish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }

$db->update("wd_reward", "status='$pub', tglproses=''", "id='$no'");
		
		echo "<meta http-equiv='refresh' content='0;URL=?go=wdrw'>";
?>
<?php		
} if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }

$db->delete("wd_reward", "kode='$no'");


		echo "<meta http-equiv='refresh' content='0;URL=?go=wdrw'>";
?>
<?php
}
?>