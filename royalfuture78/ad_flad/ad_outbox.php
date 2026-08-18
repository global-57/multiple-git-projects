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
function confirmation(noid) {
	var answer = confirm("Yakin akan menghapus data transaksi ini?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=transaksi&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<?php
$sms = new smsreguler();
	$sms->username = $userkey;
	$sms->password = $passkey;
	$sms->apikey   = $apikey;
	$sts=$sms->smssaldo();	
	$statsms = explode("|", $sts);	
	if(!$userkey || !$passkey || !$apikey){
	$stsnesms = "<center><div class='infox' style='width:50%; text-align:left; font-size:16px; font-weight:bold;'>Anda belum memiliki account dan pulsa sms gateway.</div></center>";
	}else{
	$stsnesms = "<p style='font-size:18px; line-height:150%; font-weight:bold;' align='center'>Saldo : ".idr($statsms[0])."<br />Expired : ".formatglxy($statsms[1])."</p>";
		
	}
?>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Outbox </h2>
<?php echo $stsnesms ?>
<?php
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		$db->delete("outbox", "no='$no'");
	header("location: index.php?go=outbox&result=successdell");
			exit;

?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "send") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }

if($userkey && $passkey && $apikey){


$db->select("tujuan, pesan, username", "outbox", "no='".$no."'");

if($db->num_rows() > 0) {
	//echo $db->result(0, "maintext");
	while($row = $db->fetch_row()) {
	 $hp = $row[0];
     $isipesan = $row[1];
     $username = $row[2];
	
	mysql_query("insert into outbox values('', '', '$username', '$hp', '$isipesan', '$clientdate', '1')");
	if($smsgtw == 1 && $jsms == 1){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsreguler();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 1 && $jsms == 2){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsmasking();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 2){
	sendsms($hp, $isipesan) ;
	}else{}
	
	
header("location: index.php?go=outbox&result=send_success");
			exit;
			
}
			}			
}else{
header("location: index.php?go=outbox&result=send_error");
			exit;	
}
			
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "dell_all") {

$db->delete("outbox", "");
	header("location: index.php?go=outbox&result=successdell");
			exit;
?>
<?php } else { ?>
<p align="center"><font color="#FF0000"></font></p>
<?php
$results = $_GET['result'];
if($results == "successdell") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>SMS has been deleted!</a></span></div></div>";
}
?>

<?php
$results = $_GET['result'];
if($results == "send_success") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>SMS Has Been Sent!</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "send_error") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='errorx'>SMS Not Sent!</a></span></div></div>";
}
?>
<div align="right"><a href="?go=outbox&amp;page=dell_all"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Kirim ulang email validasi pendaftaran')\" onMouseout='hideddrivetip()'>Delete All</button></a></div>


<form id="form2" name="form2" method="post" action="?go=outbox&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Member :
            <input name="keywrd" type="text" id="keywrd" />
            </label>
          <label>
            <input type="submit" name="Submit" value="CARI" />
            </label>
        </form><br />
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EEEEEE">
                <thead> 
                    <tr> 
                        <th width="15%" align="center">Tanggal</th> 
                        <th width="15%" align="center">Tujuan</th> 
                        <th width="50%" align="center">Pesan</th> 
                        <th width="8%" align="center">Resend</th>
                        <th width="5%" align="center">Hapus</th>
                    </tr> 
                </thead> 
                <tbody> 




<?
$batas   = 100;
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
	$db->select("no, kode, username, tujuan, pesan, tgl, publish", "outbox", "username = '$keyword' or tujuan = '$keyword'", "tgl desc LIMIT $posisi,$batas");
	}else{
	$db->select("no, kode, username, tujuan, pesan, tgl, publish", "outbox", "", "tgl desc LIMIT $posisi,$batas");
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
	
		
?>				             
 <tr class="<?php echo $class; ?>"> 
                            
                            <td align="center"><?php echo $style; ?><?php echo formatgl($row[5]); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $row[3]; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $row[4]; ?></font></td>
                           <td align="center"> 
      <a href="?go=outbox&amp;page=send&no=<?php echo $row[0]; ?>"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Kirim ulang email validasi pendaftaran')\" onMouseout='hideddrivetip()'>Kirim Ulang</button></a>    </td>
    <td align="center"> 
     <a href="?go=outbox&page=delete&no=<?php echo $row[0]; ?>" onclick="return confirmActiondelete()"><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Member" /></a>    </td>
                        </tr>
                                                                    
             <?
		$nom++;
		}
	} else {
	?>
    	<tr>
            <td colspan="6" align="center"><strong>No Data</strong></td>
    </tr>
	<?
	}
	?>
	
			
</tbody></table>
		   
 <?
   //Langkah 3: Hitung total data dan halaman 
$tampil2 = mysql_query("SELECT * FROM outbox");
$jmldata = mysql_num_rows($tampil2);
$jmlhal  = ceil($jmldata/$batas);
if($jmldata > 100) {
echo "<br><div class=paging>";
// Link ke halaman sebelumnya (previous)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<span class=prevnext><a href=index.php?go=outbox&halaman=$prev>Prev</a></span> ";
}
else{ 
	echo "<span class=disabled>Prev</span> ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=index.php?go=outbox&halaman=$i>$i</a> ";
}
else{
	echo " <span class=current>$i</span> ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class=prevnext><a href=index.php?go=outbox&halaman=$next>Next</a></span>";
}
else{ 
	echo "<span class=disabled>Next</span>";
}
echo "</div>";
echo "<br>";
echo "<p align=center>Total : $jmldata SMS</p>";
echo "<br>";
}  
?>             















<?php } ?>