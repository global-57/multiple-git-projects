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
	var answer = confirm("Are You sure to delete this news ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?m=listforex&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Bonus </h2>

<?php
$results = $_GET['result'];
if($results == "success_request") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>Thank You, Your REQUEST BONUS successfully saved. Please wait a few days, we will sent your bonus.</div></div>";
}
?>
<?php
if (isset($_GET['page']) && $_GET['page'] == "lock") {
if(isset($_GET["lock"])){ $lock = $_GET["lock"]; }	
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
if(isset($_GET["no"])){ $no = $_GET["no"]; }	
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }	

$db->update("komisi", "gett='$lock'", "id='$no'");

$stringbw = 'Bonus User-ID '.$mid.' kode: '.$kode.' Telah di aktifkan';
 echo "<script>alert(\"$stringbw\");".
        "window.location = './index.php?go=bonus'</script>";

}else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
if(isset($_GET["no"])){ $no = $_GET["no"]; }	
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }	

$db->delete("komisi", "id='$no'");
$stringbw = 'Bonus User-ID '.$mid.' kode: '.$kode.' Telah di hapus';
 echo "<script>alert(\"$stringbw\");".
        "window.location = './index.php?go=bonus'</script>";
}else{
?>
<form id="form2" name="form2" method="post" action="?go=bonus&amp;kat=2" style="margin:0; padding:0">
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
                        <th width="15%" align="center">To</th>
                        <th width="15%" align="center">From</th> 
                        <th width="15%" align="center">Bonus</th> 
                        <th width="15%" align="center">Amount</th>
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
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis not like '%komshare%' and username = '$keyword'", "tglbayar desc LIMIT $posisi,$batas");
	}else{
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis not like '%komshare%'", "tglbayar desc LIMIT $posisi,$batas");
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
			if($row[6] == "komsponsor"){
			$jenise = "Refferal Bonus";
			}else if($row[6] == "matchingpro1"){
			$jenise = "Matching Profit Level 1";
			}else if($row[6] == "matchingpro2"){
			$jenise = "Matching Profit Level 2";
			}else if($row[6] == "matchingpro3"){
			$jenise = "Matching Profit Level 3";
			}else if($row[6] == "matchingpro4"){
			$jenise = "Matching Profit Level 4";
			}else if($row[6] == "matchingpro5"){
			$jenise = "Matching Profit Level 5";
			
			}else if($row[6] == "komsponsor2"){
			$jenise = "Refferal Bonus Level 2";
			
			}else if($row[6] == "komsponsor3"){
			$jenise = "Refferal Bonus Level 3";
			
			}else if($row[6] == "komsponsor4"){
			$jenise = "Refferal Bonus Level 4";
			
			}else if($row[6] == "komsponsor5"){
			$jenise = "Refferal Bonus Level 5";
			
			}else if($row[6] == "komsponsor6"){
			$jenise = "Refferal Bonus Level 6";
			
			}else if($row[6] == "komsponsor7"){
			$jenise = "Refferal Bonus Level 7";
			
			}else if($row[6] == "komsponsor8"){
			$jenise = "Refferal Bonus Level 8";
			
			}else if($row[6] == "komsponsor9"){
			$jenise = "Refferal Bonus Level 9";
			
			}else if($row[6] == "komsponsor10"){
			$jenise = "Refferal Bonus Level 10";
			
			}else if($row[6] == "komsponsor11"){
			$jenise = "Refferal Bonus Level 11";
			
			}else if($row[6] == "komsponsor12"){
			$jenise = "Refferal Bonus Level 12";
			
			}else if($row[6] == "komsponsor13"){
			$jenise = "Refferal Bonus Level 13";
			
			}else if($row[6] == "komsponsor14"){
			$jenise = "Refferal Bonus Level 14";
			
			}else if($row[6] == "komsponsor15"){
			$jenise = "Refferal Bonus Level 15";
			
			}else if($row[6] == "kompasangan"){
			$jenise = "Pairing Bonus";
			
			}else{
			
			}
		
		if($row[9] == 2) {
		$getbonus = "<a href='?go=bonus&page=lock&lock=0&no=".$row[0]."&mid=".$row[1]."&kode=".$row[8]."'><button class='primaback' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Unlock This Bonus')\" onMouseout='hideddrivetip()'>Locked</button></a>";
		}else{
		$getbonus = "<a href='?go=bonus&page=lock&lock=1&no=".$row[0]."&mid=".$row[1]."&kode=".$row[8]."'><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Lock This Bonus')\" onMouseout='hideddrivetip()'>Active</button></a>";
		}
		$user1=$row[1];
		$namaspon1 = "SELECT * FROM member WHERE username='$user1'"; 
        $resultnamaspon1 = mysql_query($namaspon1);
        $rownamaspon1 = mysql_fetch_array($resultnamaspon1);
        $namaspone1 = $rownamaspon1['nama'];	
	


?>				             
                     <tr class="<?php echo $class; ?>"> 
                            <td align="center"><?php echo $nom; ?></td>
                            
                            <td align="center"><?php echo $style; ?><?php echo formatgl($row[3]); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $row[8]; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $namaspone1; ?> (<?php echo $row[1]; ?>)</font></td>
                            <td align="center"><?php echo $style; ?><?php echo $namaspone; ?> (<?php echo $row[7]; ?>)</font></td>
                            <td align="center"><?php echo $style; ?><?php echo $jenise; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo rupiah($row[2]); ?></font></td>
                            <td align="center"><?php echo $style; ?><a href='?go=bonus&page=delete&mid=<?php echo $row[1]; ?>&no=<?php echo $row[0]; ?>&kode=<?php echo $row[8]; ?>' onclick='return confirmAction79()'><img src='images/icon-32-delete_resize.png' border=0 title='Click to Delete'></a></font></td>
                        </tr>
                                                                    
             <?
		$nom++;
		}
	} else {
	?>
    	<tr>
            <td colspan="7" align="center"><strong>No Bonus</strong></td>
    </tr>
	<?
	}
	?>
	
			
</tbody></table>
		   
		  <?
   //Langkah 3: Hitung total data dan halaman 
$tampil2 = mysql_query("SELECT * FROM komisi WHERE jenis not like '%komshare%' and username='$user_session'");
$jmldata = mysql_num_rows($tampil2);
$jmlhal  = ceil($jmldata/$batas);
if($jmldata > 25) {
echo "<br><div class=paging>";
// Link ke halaman sebelumnya (previous)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<span class=prevnext><a href=index.php?go=bonus&halaman=$prev>Prev</a></span> ";
}
else{ 
	echo "<span class=disabled>Prev</span> ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=index.php?go=bonus&halaman=$i>$i</a> ";
}
else{
	echo " <span class=current>$i</span> ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class=prevnext><a href=index.php?go=bonus&halaman=$next>Next</a></span>";
}
else{ 
	echo "<span class=disabled>Next</span>";
}
echo "</div>";
echo "<br>";
}  
}?>             