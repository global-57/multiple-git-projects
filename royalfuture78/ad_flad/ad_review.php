<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();}
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
if (empty($_SESSION["valid_admin"])){
echo "<script>alert(\"You must login to acces this page.\");"."window.location = './index.php'</script>";
exit();}
?>
<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Yakin akan menghapus data transaksi ini?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=review-produk&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Review Produk</h2>

<p align="center"><font color="#FF0000"></font></p>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#EEEEEE">
  <tr align="center"> 
    <td width="3%"><strong>No.</strong></td>
    <td width="8%"><strong>Tanggal</strong></td>
    <td width="8%"><strong>Nama</strong></td>
    <td width="10%"><strong>Email</strong></td>
    <td width="15%"><strong>Produk</strong></td>
    <td width="30%"><strong>Review </strong></td>
    <td width="5%"><strong>Status</strong></td>
    <td width="5%"><strong>Hapus</strong></td>
  </tr>
<?php
	
$sql = mysql_query("select * from review order by tgl desc");
$nom = 1;
while($row=mysql_fetch_row($sql)) {

if(is_odd($nom) == 0) {

		$class = "tblrow_ganjil";

	} else {

		$class = "tblrow_genap";

	}

if($row[7] > 0) {
		$img = "<a href='?go=review-produk&page=unpublish&pub=0&no=$row[0]'><img src='images/tick.png' border=0 title='Click to Cancel'></a>";
	} else {
		$img = "<a href='?go=review-produk&page=publish&pub=1&no=$row[0]&mid=$row[1]&qty=$row[5]'><img src='images/publish_x.png' border=0 title='Click to Approved'></a>";
	}



$sqlx = mysql_query("select * from iklan WHERE kode='".$row[10]."'");
$rowx=mysql_fetch_row($sqlx);
$produk = $rowx[8];
?>
  <tr  class="<?php echo $class; ?>" > 
    <td align="right"> 
      <div align="center">
       <?php echo $nom; ?>
      </div></td>
    <td> 
      <div align="center">
       <?php echo formatgl($row[6]); ?>
      </div></td>
	  <td align="right"> 
      <div align="center">
       <?php echo $row[2]; ?>
      </div></td>
    <td> 
      <div align="center">
       <?php echo $row[8]; ?>
      </div></td>
    <td> 
      <div align="center">
       <?php echo $produk; ?>
      </div></td>
       <td> 
      <div align="center">
       <?php echo $row[4]; ?>
      </div></td>
    <td> 
      <div align="center">
       <?php echo $img; ?>
      </div></td>
   
    <td align="center"><a href="#" onClick="confirmation('<?php echo $row[0]; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Transaction" /></a></td>
	
  </tr>
<?php
 $nom++;
 }

 
 ?>
</table>
<?php
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		$db->delete("review", "no='$no'");
	echo "<meta http-equiv='refresh' content='0;URL=?go=review-produk'>";
?>
<?php
} if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
		//echo "delete no $no";
$db->update("review", "published='$pub'", "no='$no'");
		
	
		echo "<meta http-equiv='refresh' content='0;URL=?go=review-produk'>";
?>
<?php
} if (isset($_GET['page']) && $_GET['page'] == "unpublish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
$db->update("review", "published='$pub'", "no='$no'");
		
	
		echo "<meta http-equiv='refresh' content='0;URL=?go=review-produk'>";?>
<?php
}
?>