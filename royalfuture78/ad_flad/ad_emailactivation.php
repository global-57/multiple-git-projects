<?php ob_start(); ?>
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
function confirmation(mid, page, action) {
	var answer = confirm("Are You sure to " + action +  " this Data?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=emailvalidation&page=" + page + "&id=" + mid + "&action=" + action;
		
	}
	
}
//-->
</script>
<h1><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Email Activation</h1>
<?php
 if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["id"])){ $id = $_GET["id"]; }	
		//echo "delete no $no";
		
			$db->delete("validation", "id='$id'");
					
header("location: ?go=emailvalidation");
exit;

?>
<?php
}else if (isset($_GET['page']) && $_GET['page'] == "deleteall") {
if(isset($_GET["id"])){ $id = $_GET["id"]; }	
		//echo "delete no $no";
		
			$db->delete("validation", "");
					
header("location: ?go=emailvalidation");
exit;
		
 }else{
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


//if($uidm == 001) {

//$db->select("*", "member", $kat);
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }
if (isset($_POST["Submit"]) && $_POST["Submit"] == "CARI") {
$keywrd = $_POST["keywrd"];
	$filter = "email like '%$keywrd%' or username like '%$keywrd%'";
	$where = "email like '%$keywrd%' or username like '%$keywrd%'";
} else {
	$filter = "";
	$where = "";
}
//---
if(isset($_GET["kat"]) > 0 or (!isset($_GET["kat"]))) {
	$order = "id desc";
} else {
	$order = "id desc";
}		
if(isset($_GET["kat"]) == "") {
	$numrows = $db->count_records("validation", "");
	$db->select("id, username, pass, sess, email, token, pin, batas", "validation", "", $order, "", "", "$start, $limit");

	
} else {
	$numrows = $db->count_records("validation", "");	
	$db->select("id, username, pass, sess, email, token, pin, batas", "validation", $where, $order, "", "", "$start, $limit");
}

?> 
<script>
		function confirmActionx2xxx(){
      var confirmed = confirm("Anda yakin akan menghapus semu data ini?");
      return confirmed;
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="15" align="center" style="padding:0"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:0; margin:0">
      <tr>
        <td><form id="form2" name="form2" method="post" action="?go=emailvalidation&amp;kat=1" style="margin:0; padding:0">
          Cari Member / No Handphone :
            <input name="keywrd" type="text" id="keywrd" />
            <input type="submit" name="Submit" value="CARI" class="submitkecil" />
        </form></td>
        <td><a href="?go=emailvalidation&page=deleteall" onclick='return confirmActionx2xxx()'><button type="button" class="btn btn-info btn-xs">Delete All</button></a></td>
      </tr>
    </table></td>
  </tr>
  <tr class="tbl_header">
    <td width="6%" align="center">#</td>
    <td width="10%" align="center">Tanggal</td>
    <td width="10%" align="center">Username</td>
    <td width="16%" align="center">Email</td>
    <td width="14%" align="center">Link Aktivasi</td>
    <td width="2%" align="center">#</td>
    <td width="2%" align="center">D</td>
  </tr>
  <?


$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1 + $start;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 
		
	
$email=$db->result($i, "email");
$sess=$db->result($i, "sess");
$token=$db->result($i, "token");
$rgg=base64_encode($email);
$link_valid = $validations."?rg=".$rgg."&sess=".$sess."&token=".$token;
?>

<? $tglex = $db->result($i, "tglaktif"); 
	if($tglex == '0000-00-00 00:00:00') {
	$tgx = "-";
	} else {
		$tgx = date('d-m-Y', strtotime($tglex));
	} 
	?>
  <tr class="<?php echo $class; ?>">
    <td align="center"><?php echo $nom; ?>
    </td>
    <td align="center"><?php echo formatgl($db->result($i, "pin")); ?></td>
    <td align="center"><?php echo $db->result($i, "username"); ?></td>
    <td align="center"><?php echo $db->result($i, "email"); ?></td>
    <td align="center"><?php echo $link_valid; ?></td>
    <td align="center">
    <a href="#" onClick="window.open('page.php?go=send_validation&user=<?php echo $db->result($i, "username"); ?>','popup','width=600,height=400,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Send this ticket to mobile phone prospective members')\" onMouseout='hideddrivetip()'>Resend</button></a>
    </td>
    
    <td align="center"><a href="#" onclick="confirmation('<?php echo $db->result($i, "id"); ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Data" /></a></td>
	
  </tr>
<?php
	}
?>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
     <?php

//}
//
if(!isset($_GET["kat"])){ $kat = "1"; }
$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=emailvalidation&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=emailvalidation&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=emailvalidation&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=emailvalidation&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=emailvalidation&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>
<?php } ?>
<p>&nbsp;</p>
<?php ob_flush(); ?>