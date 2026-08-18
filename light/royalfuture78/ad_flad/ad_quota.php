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
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Quota Iklan</h2>
<div id="menu_button2"></div>
<?php
//---pagination----------------
$limit = '25'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '50'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);

$numrows = $db->count_records("member", "status='1'");	
$db->select("id, username, nama, sponsor, email, kota, quota", "member", "status='1'", "", "", "", "$start, $limit");

?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="12" align="center" style="padding:0"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:0; margin:0">
      
    </table></td>
  </tr>
  <tr class="tbl_header">
    <td width="5%" align="center">#</td>
    <td width="10%" align="center">Username</td>
    <td width="20%" align="center">Nama Lengkap</td>
    <td width="15%" align="center">Quota</td>
    <td width="15%" align="center">Tampil</td>
    <td width="15%" align="center">Sisa</td>
    <td width="8%" align="center">#</td>
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
		
	if($db->result($i, "status") > 0) {
		$aktif = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'activation', 'Disable')\" style='cursor:hand'><img src='images/icon-16-checkin.png' title='Change to Disable' border=0 /></a>";
	} else {
		$aktif = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'activation', 'Activated')\" style='cursor:hand'><img src='images/publish_x.png' title='Change to Active Member' border=0 /></a>";
	}
	if($db->result($i, "blokir") > 0) {
		$blokir = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'blokir', 'UnBlocked')\" style='cursor:hand'><img src='images/icon-16-checkin.png' title='Change to Enable/UnBlocked' border=0 /></a>";
	} else {
		$blokir = "<a href='#' onclick=\"confirmation('".$db->result($i, "username")."', 'blokir', 'Blocked')\" style='cursor:hand'><img src='images/publish_x.png' title='Click here to Blocked this Member' border=0 /></a>";
	}
?>
<?php $tglex = $db->result($i, "tglaktif"); 
	if($tglex == '0000-00-00 00:00:00') {
	$tgx = "-";
	} else {
		$tgx = formatgl($tglex);
	} 
	
	$qotya = $db->result($i, "quota");
	if($qotya > 0){
	$quotaiklan = $qotya." Iklan";
}else{
	$quotaiklan = "--";
}
	?>
  <tr class="<?php echo $class; ?>">
    <td align="center"><?php echo $nom; ?>
    </td>
    <td align="center"><?php echo $db->result($i, "username"); ?>
   </td>
    <td align="center"><?php echo $db->result($i, "nama"); ?></td>
   <td align="center"><?php echo $quotaiklan; ?></td>
    <td align="center">
	<?php
	$usere = $db->result($i, "username");
	 $sblxx=mysql_query("select * from iklan where userid='$usere'");
	$numee = mysql_num_rows($sblxx);
	
		if($numee == 0) {
				$totaldepo = "<font color=red>Belum Ada Iklan</font>";
			} else {
				$totaldepo = $numee." Iklan";
			}		
		echo $totaldepo;
						  ?>
	
	</td>
   
    <td align="center">
	<?php $ss = $db->result($i, "quota"); 
	$sisa = $ss-$numee;
	echo $sisa." Iklan";
	?>
	</td>
     <td align="center">
	<a href="./index.php?go=addquota&mid=<?php echo $db->result($i, "username");?>" target="_blank"><button class='mmm_blue' style='padding:2px 6px;font-size:11px;' type="button">Add Quota</button></a>
	</td>
  </tr>
  <?php
	}
?>
</table>
<br />
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
  <a href="?go=quota&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=quota&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=quota&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=quota&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=quota&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>