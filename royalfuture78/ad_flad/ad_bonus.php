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
header("location: index.php?go=bonus");
	exit;

}else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }	
if(isset($_GET["no"])){ $no = $_GET["no"]; }	
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }	

$db->delete("komisi", "id='$no'");
header("location: index.php?go=bonus");
	exit;}else{
?>

<?
//---pagination----------------
$limit = '50'; // How many results should be shown at a time
$scroll = '2'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '20'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);


$keywrd = $_GET["keywrd"];
if(isset($_GET["keywrd"])){ 
	$where = "and username='$keywrd'";
} else {
	$where = "";
}	

if(isset($_GET["bulan"]) && isset($_GET["tahun"])){	
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun']; 
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
$where3 = "and (tglbayar between '$dtfrom' and '$dtto')";

}else{

$where3 = "";
}
if(isset($_GET["from"]) && isset($_GET["to"])){	
$from = $_GET["from"];
$to = $_GET["to"];
$dtfroms = "$from 00:00:00";
$dttos = "$to 23:59:59";
$where4 = "and (tglbayar between '$dtfroms' and '$dttos')";

}else{

$where4 = "";
}

$numrows = $db->count_records("komisi", "jenis<>'komshare' $where $where3 $where4");	
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis<>'komshare' $where $where3 $where4", "tglbayar DESC", "", "", "$start, $limit");




?>
<script>
		function confirmActionx2d(){
      var confirmed = confirm("Anda akan menghapus data bonus member, anda yakin?");
      return confirmed;
}
</script>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="58%"><form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="bonus" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong>Bonus Bulan&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</strong> </td>
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
	for($t=18;$t<$jthn;$t++) {
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
<input name="cari" type="hidden" id="cari" value="<?= $_GET['cari']; ?>"/>	
<?php	}
	?>
<button type='submit' class="submitkecil">Lihat</button>
 <a href="?go=bonus"><button type="button" class="submitkecil"/>Lihat Semua</button></a>
</td>
        </tr>
      </table>
    </form>
<br />
<form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="bonus" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong>Lihat Periode&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</strong> </td>
          <td width="80%">
          <?php $tglnowe = date('d-m-Y', strtotime($clientdate)); ?>
          <input name="from" type="text" id="from" value="<?php echo $_GET["from"]; ?>" style="width:80px;">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="from_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "from",
                ifFormat : "%Y-%m-%d",
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
                ifFormat : "%Y-%m-%d",
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
<input name="cari" type="hidden" id="cari" value="<?= $_GET['cari']; ?>"/>	
<?php	}?>
<button type='submit' class="submitkecil">Lihat</button>
</td>
        </tr>
      </table>
    </form>
<br />





	</td>
    <td width="42%" align="right">
    <form name="keyword" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="bonus" />
 
 
    <strong>Cari &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</strong>
    
    <input name="keywrd" type="text" id="keywrd" value="<?= $_GET['keywrd']; ?>"/>
       <?php if(isset($_GET["bulan"]) && isset($_GET["tahun"])){ ?>	
	<input name="bulan" type="hidden" id="bulan" value="<?= $_GET['bulan']; ?>" />
      <input name="tahun" type="hidden" id="tahun" value="<?= $_GET['tahun']; ?>" />
<?php	}
	?>
      <button type='submit' class="submitkecil">Cari Data</button>

                    </form></td>
  </tr>
</table>
<br />
                   <br /> 
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#EEEEEE">
  <tr class="tbl_header">
                        <td width="7%" align="center">#</td> 
                        <td width="15%" align="center">Date</td> 
                        <td width="10%" align="center">Kode</td> 
                        <td width="10%" align="center">To</td>
                        <td width="10%" align="center">From</td> 
                        <td width="15%" align="center">Bonus</td> 
                        <td width="10%" align="center">Nilai</td>
                        <td width="5%" align="center">#</td>
                    </tr> 
               
<?

$j=$db->num_rows();
//while($row = $db->fetch_row()) {
for($i=0;$i<$j;$i++) {
	$nom = $i + 1 + $start;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 

  
  
  
  
			if($db->result($i, "jenis") == "komsponsor"){
			$jenise = "Refferal Bonus";
			}else if($db->result($i, "jenis") == "matchingpro1"){
			$jenise = "Matching Profit Level 1";
			}else if($db->result($i, "jenis") == "matchingpro2"){
			$jenise = "Matching Profit Level 2";
			}else if($db->result($i, "jenis") == "matchingpro3"){
			$jenise = "Matching Profit Level 3";
			}else if($db->result($i, "jenis") == "matchingpro4"){
			$jenise = "Matching Profit Level 4";
			}else if($db->result($i, "jenis") == "matchingpro5"){
			$jenise = "Matching Profit Level 5";
			
			}else if($db->result($i, "jenis") == "komsponsor2"){
			$jenise = "Refferal Bonus Level 2";
			
			}else if($db->result($i, "jenis") == "komsponsor3"){
			$jenise = "Refferal Bonus Level 3";
			
			}else if($db->result($i, "jenis") == "komsponsor4"){
			$jenise = "Refferal Bonus Level 4";
			
			}else if($db->result($i, "jenis") == "komsponsor5"){
			$jenise = "Refferal Bonus Level 5";
			
			}else if($db->result($i, "jenis") == "komsponsor6"){
			$jenise = "Refferal Bonus Level 6";
			
			}else if($db->result($i, "jenis") == "komsponsor7"){
			$jenise = "Refferal Bonus Level 7";
			
			}else if($db->result($i, "jenis") == "komsponsor8"){
			$jenise = "Refferal Bonus Level 8";
			
			}else if($db->result($i, "jenis") == "komsponsor9"){
			$jenise = "Refferal Bonus Level 9";
			
			}else if($db->result($i, "jenis") == "komsponsor10"){
			$jenise = "Refferal Bonus Level 10";
			
			}else if($db->result($i, "jenis") == "komsponsor11"){
			$jenise = "Refferal Bonus Level 11";
			
			}else if($db->result($i, "jenis") == "komsponsor12"){
			$jenise = "Refferal Bonus Level 12";
			
			}else if($db->result($i, "jenis") == "komsponsor13"){
			$jenise = "Refferal Bonus Level 13";
			
			}else if($db->result($i, "jenis") == "komsponsor14"){
			$jenise = "Refferal Bonus Level 14";
			
			}else if($db->result($i, "jenis") == "komsponsor15"){
			$jenise = "Refferal Bonus Level 15";
			
			}else if($db->result($i, "jenis") == "kompasangan"){
			$jenise = "Pairing Bonus";
			
			}else{
			
			}
  
  
  
  
				
$user1=$db->result($i, "username");
$kode=$db->result($i, "kode");
$no=$db->result($i, "id");

	$stylec="";
if($db->result($i, "gett") == 1) {
		$getbonus = "<a href='?go=bonus&page=lock&lock=0&no=".$no."&mid=".$user1."&kode=".$kode."'><button class='primaback' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Unlock This Bonus')\" onMouseout='hideddrivetip()'>Locked</button></a>";

		}else{
		$getbonus = "<a href='?go=bonus&page=lock&lock=1&no=".$no."&mid=".$user1."&kode=".$kode."'><button class='mmm_blue' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Lock This Bonus')\" onMouseout='hideddrivetip()'>Active</button></a>";
		}		
?>

<tr  class="<?php echo $class; ?>" > 
    <td align="center"><?php echo $nom; ?></td>
                            
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo formatgl($db->result($i, "tglbayar")); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $db->result($i, "kode"); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $db->result($i, "username"); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $db->result($i, "dari"); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $jenise; ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo rupiah($db->result($i, "bayar")); ?></font></td>
                             <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><a href='?go=bonus&page=delete&mid=<?php echo $db->result($i, "username"); ?>&no=<?php echo $db->result($i, "id"); ?>&kode=<?php echo $db->result($i, "kode"); ?>' onclick='return confirmActionx2d()'><img src='images/icon-32-delete_resize.png' border=0 title='Click to Delete'></a></font></td>
  </tr>


<?php
 $nom++;
 }

 
 ?>
</table>
  
<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
    <div class=paging>
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
	$frome = "&from=".$_GET["from"]."";
}
if(isset($_GET["to"])){
	$toe = "&to=".$_GET["to"]."";
}
// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;

	
?>
  <span class='prevnext'><a href="?go=bonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=bonus&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a></span> |
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
<span class=current>
<?php echo $i ?>
</span>
<?php
			
		} else {
			
?>
<a href="?go=bonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a>
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <span class='prevnext'><a href="?go=bonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a></span> | <span class='prevnext'><a href="?go=bonus&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a></span>
<?php

}
//
?>
</div>
    </td>
  </tr>
</table>



<?php 
}?>             