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
	var answer = confirm("Are You sure to delete this photo ID?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=verifikasi&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" /> 
  Verifikasi Member</h2>
<?php
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		$sqlber = mysql_query("SELECT * FROM photoid WHERE id='$no'");
        $numbr = mysql_num_rows($sqlber);
        while($rowbr = mysql_fetch_array($sqlber)){
        $fotoe = $rowbr['banner'];
		unlink("../images/foto_id/$fotoe");
		}
		$db->delete("photoid", "id=$no");
		
header("location: index.php?go=verifikasi");
			exit;
		
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "unpublish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
		$db->update("photoid", "acc='0', tglacc=''", "id='$no'");
		$db->update("member", "accpt='0'", "username='$mid'");
header("location: index.php?go=verifikasi");
			exit;

?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
		$db->update("photoid", "acc='1', tglacc='$clientdate'", "id='$no'");
		$db->update("member", "accpt='1'", "username='$mid'");
header("location: index.php?go=verifikasi");
			exit;
}else{
?>
<script>
		function confirmActionx2cex(){
      var confirmed = confirm("Proses verifikasi ini?");
      return confirmed;
}
</script>
<script>
		function confirmActionx2ce(){
      var confirmed = confirm("Batalkan verifikasi ini?");
      return confirmed;
}
</script>


<?php

	//---pagination----------------
$limit = '100'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '50'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);

$keywrd = $_GET["keywrd"];
if(isset($_GET["keywrd"])){ 
	$where = "kode<>'' and username = '".$_GET["keywrd"]."'";
} else {
	$where = "kode<>''";
}	

if(isset($_GET["bulan"]) && isset($_GET["tahun"])){	
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun']; 
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
$where3 = "and (tgl between '$dtfrom' and '$dtto')";

}else{

$where3 = "";
}
if(isset($_GET["from"]) && isset($_GET["to"])){	
$from = date('Y-m-d', strtotime($_GET["from"]));
$to = date('Y-m-d', strtotime($_GET["to"]));
$dtfrom = "$from 00:00:00";
$dtto = "$to 23:59:59";
$where4 = "and (tgl between '$dtfrom' and '$dtto')";

}else{

$where4 = "";
}

//$db->select("*", "member", $kat);
	$numrows = $db->count_records("photoid", "$where $where3 $where4");	
	$db->select("id, nama, username, tgl, tglacc, foto1, foto2, kode, acc, alamat", "photoid", "$where $where3 $where4", "tgl DESC", "", "", "$start, $limit");


?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="58%"><form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="verifikasi" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong>Bulan : </strong> </td>
          <td width="80%">
          <? 
		$thn=substr($clientdate, 0, 4);
	    $bln=substr($clientdate, 5, 2);
	    $tgl=substr($clientdate, 8, 2);
       $bulan = $_GET['bulan'];	
	   $tahun = $_GET['tahun'];	
		echo "<select name='bulan' class='form' style='width:120px;height:21px'>";
	$bulan0=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$jbln=count($bulan0);
	if($bulan =="") {
		$bulan2 = $bln;
	} else {
		$bulan2 = $bulan;
	}
	for($b=0;$b<$jbln;$b++) {
		if($bulan2-1 == $b) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
			if($b+1 < 10) {
			$k2=$b+1;
			$k="0$k2";
			} else {
			$k=$b+1;
			}
		echo "<option value='".$k."' $pil>$bulan0[$b]</option>";
	}
	echo "</select>";
	echo "<select name='tahun' size=1 class='form' style='width:70px;height:21px'>";
	$jthn=25;
	for($t=17;$t<$jthn;$t++) {
		$thn2 = 2000 + $t;	
		if($tahun == $thn2) {
			$pil="selected='selected'";
			} else {
			$pil="";
			}
		echo "<option value='20$t' $pil>$thn2</option>";
	}
	echo "</select>";
?>
<?php if(isset($_GET["keywrd"])){ ?>
<input name="keywrd" type="hidden" id="keywrd" value="<?= $_GET['keywrd']; ?>"/>	
<?php	}
	?>
<button type='submit' class="submitkecil">LIHAT TANGGAL</button>
 <a href="?go=verifikasi"><button type="button" class="submitkecil"/>LIHAT SEMUA</button></a>
</td>
        </tr>
      </table>
    </form>
<br />
<form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="verifikasi" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong>Lihat Periode : </strong> </td>
          <td width="80%">
          <?php $tglnowe = date('d-m-Y', strtotime($clientdate)); ?>
          <input name="from" type="text" id="from" value="<?php echo $_GET["from"]; ?>" style="width:80px;">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="from_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "from",
                ifFormat : "%d-%m-%Y",
                button : "from_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("from_trig").observe("click", showCalendar);

            function showCalendar(event){
                var element = event.element(event);
                var offset = $(element).viewportOffset();
                var scrollOffset = $(element).cumulativeScrollOffset();
                var dimensionsButton = $(element).getDimensions();
                var index = $("widget-chooser").getStyle("zIndex");

                $$("div.calendar").each(function(item){
                    if ($(item).visible()) {
                        var dimensionsCalendar = $(item).getDimensions();

                        $(item).setStyle({
                            "zIndex" : index + 1,
                            "left" : offset[0] + scrollOffset[0] - dimensionsCalendar.width + dimensionsButton.width + "px",
                            "top" : offset[1] + scrollOffset[1] + dimensionsButton.height + "px"
                        });
                    };
                });
            };
        </script>
          &nbsp;&nbsp;sampai&nbsp;&nbsp;
           <input name="to" type="text" id="to" value="<?php echo $_GET["to"]; ?>" style="width:80px;">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="to_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "to",
                ifFormat : "%d-%m-%Y",
                button : "to_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("to_trig").observe("click", showCalendar);

            function showCalendar(event){
                var element = event.element(event);
                var offset = $(element).viewportOffset();
                var scrollOffset = $(element).cumulativeScrollOffset();
                var dimensionsButton = $(element).getDimensions();
                var index = $("widget-chooser").getStyle("zIndex");

                $$("div.calendar").each(function(item){
                    if ($(item).visible()) {
                        var dimensionsCalendar = $(item).getDimensions();

                        $(item).setStyle({
                            "zIndex" : index + 1,
                            "left" : offset[0] + scrollOffset[0] - dimensionsCalendar.width + dimensionsButton.width + "px",
                            "top" : offset[1] + scrollOffset[1] + dimensionsButton.height + "px"
                        });
                    };
                });
            };
        </script>
<?php if(isset($_GET["keywrd"])){ ?>
<input name="keywrd" type="hidden" id="keywrd" value="<?= $_GET['keywrd']; ?>"/>	
<?php	}?>
<button type='submit' class="submitkecil">LIHAT PERIODE</button>
</td>
        </tr>
      </table>
    </form>
<br />





	</td>
    <td width="42%" align="right">
    <form name="keyword" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="verifikasi" />
    Cari Member : <input name="keywrd" type="text" id="keywrd" value="<?= $_GET['keywrd']; ?>"/>
       <?php if(isset($_GET["bulan"]) && isset($_GET["tahun"])){ ?>	
	<input name="bulan" type="hidden" id="bulan" value="<?= $_GET['bulan']; ?>" />
      <input name="tahun" type="hidden" id="tahun" value="<?= $_GET['tahun']; ?>" />
<?php	}
	?>
      <button type='submit' class="submitkecil">CARI</button>

                    </form></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
 
    <tr class="tbl_header">
   <td width="5%" align="center">#</td>
	<td width="10%" align="center">Tgl</td>
    <td width="10%" align="center">Username</td>
	<td width="15%" align="center">Nama</td>
    <td width="30%" align="center">Alamat</td>
    <td width="10%" align="center">Tgl Proses</td>
    <td width="5%" align="center">Foto 1</td>
    <td width="5%" align="center">Foto 2</td>
    <td width="5%" align="center">Confirm</td>
	<td width="5%" align="center">Delete</td>
                    </tr> 
<?php
if(isset($_POST['Submit3'])) {
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
}else{
$tahun=$_GET['tahun'];
$bulan=$_GET['bulan'];
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
}
?>	
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
	$username = $db->result($i, "username");
	$kode = $db->result($i, "kode");
	$no = $db->result($i, "id");

	if($db->result($i, "tglproses") == "0000-00-00 00:00:00"){
		$dtpros = "---";
	}else{
		$dtpros = formatgl($db->result($i, "tglproses"));
	}	

if($db->result($i, "acc") > 0) {
		$img = "<a href='?go=verifikasi&page=unpublish&pub=0&no=".$db->result($i, "id")."&mid=".$db->result($i, "username")."' onclick='return confirmActionx2ce()'><img src='images/success.png' border=0 title='Click to Unconfirm'></a>";
	} else {
		$img = "<a href='?go=verifikasi&page=publish&pub=1&no=".$db->result($i, "id")."&mid=".$db->result($i, "username")."' onclick='return confirmActionx2cec()'><img src='images/error.png' border=0 title='Click to Confirm'></a>";
	} 	
	//---ordering---
	
	$adafoto1 = $db->result($i, "foto1");
	$dirfoto1 = "../images/foto_id/$adafoto1";
	if (!empty($adafoto1) && (file_exists($dirfoto1))){
		$gambar1 = "<a href='../images/foto_id/".$adafoto1."' class='highslide' onclick='return hs.expand(this)'><img src='../images/foto_id/$adafoto1' class='imgFloatLeft' width='32' height='32'></a>";
		}
	else
		{
		$gambar1 = "----";
		} 	
		
		
	$adafoto2 = $db->result($i, "foto2");
	$dirfoto2 = "../images/foto_id/$adafoto";
	if (!empty($adafoto2) && (file_exists($dirfoto2))){
		$gambar2 = "<a href='../images/foto_id/".$adafoto2."' class='highslide' onclick='return hs.expand(this)'><img src='../images/foto_id/$adafoto2' class='imgFloatLeft' width='32' height='32'></a>";
		}
	else
		{
		$gambar2 = "----";
		} 		
		
		
	if($db->result($i, "tglacc") == "0000-00-00 00:00:00") {
		$tglkode = "----";
	} else {
		$tglkode = formatgl($db->result($i, "tglacc"));
	}			
?>
 
 <tr class="<?php echo $class; ?>"> 
                  <td align="center"><?= $nom; ?> </td>
   <td align="center"><?= formatgl($db->result($i, "tgl")); ?></td>
     <td align="center"><?= $db->result($i, "username"); ?></td>
	  <td align="center"><?= $db->result($i, "nama"); ?></td>
	  <td align="center"><?= $db->result($i, "alamat"); ?></td>
   <td align="center"><?= $tglkode ; ?></td>
    <td align="center"><?= $gambar1; ?></td>
   <td align="center"><?= $gambar2; ?></td>
   
     <td align="center"><?= $img; ?></td>
	 <td align="center" ><a href="#" onclick='confirmation(<?php echo $db->result($i, "id"); ?>)' style='cursor:hand'><img src="images/stop_f2.png" border="0" title="Hapus Data" /></a></td>
	
                        </tr>
  
<?
	//}
	}
?>	  
</table>
</fieldset>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
     <?php

//}
//

$paging = ceil ($numrows / $limit);
if(isset($_GET["bulan"])){
	$blndt = "&bulan=".$_GET["bulan"]."";
}
if(isset($_GET["tahun"])){
	$thndt = "&tahun=".$_GET["tahun"]."";
}
if(isset($_GET["keywrd"])){
	$kwde = "&keywrd=".$_GET["keywrd"]."";
}
if(isset($_GET["from"])){
	$thndt = "&from=".$_GET["from"]."";
}
if(isset($_GET["to"])){
	$thndt = "&to=".$_GET["to"]."";
}
// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>

  <a href="?go=verifikasi<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=verifikasi<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=verifikasi<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $i; ?>" style="font-size:10px; color:#0000CC">
<?= $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=verifikasi<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=verifikasi<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>








<?php
}
?>