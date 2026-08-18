<?php
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
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

<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Trade </h2>

<?php
$results = $_GET['result'];
if($results == "success_request") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>Thank You, Your REQUEST BONUS successfully saved. Please wait a few days, we will sent your bonus.</div></div>";
}
?>
<?php
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		//echo "delete no $no";
		$db->delete("lostwin", "kode='$no'");
		$db->delete("komisi", "kode='$no'");
		$db->delete("datacwalet", "kode='$no'");
		//$db->delete("dataswalet", "kode='$no'");
	header("location: ?go=investe");
	}else{
?>

<?
//---pagination----------------
$limit = '50'; // How many results should be shown at a time
$scroll = '2'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
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
	$where = "and username='$keywrd'";
} else {
	$where = "";
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
$from = $_GET["from"];
$to = $_GET["to"];
$dtfroms = "$from 00:00:00";
$dttos = "$to 23:59:59";
$where4 = "and (tgl between '$dtfroms' and '$dttos')";

}else{

$where4 = "";
}

$numrows = $db->count_records("lostwin", "username<>'' $where $where3 $where4");	
	$db->select("id, username, amount, tgl, timestake, status, kode, pilihan, lostwin, tglstop, wine, prosene, ratein, rateout, market, curr, free", "lostwin", "username<>'' $where $where3 $where4", "tgl DESC", "", "", "$start, $limit");




?>
<script>
		function confirmActionx2d(){
      var confirmed = confirm("Anda akan menghapus data lostwin, anda yakin?");
      return confirmed;
}
</script>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="58%"><form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="investe" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong>Trade Bulan&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</strong> </td>
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
 <a href="?go=investe"><button type="button" class="submitkecil"/>Lihat Semua</button></a>
</td>
        </tr>
      </table>
    </form>
<br />
<form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="investe" />
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
 <input id="go" name="go"  type="hidden" value="investe" />
 
 
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
                      <td width="10%">Date</td> 
                        <td width="5%">No</td> 
                        <td width="5%">Username</td> 
                        <td width="10%">Package</td> 
                        <td width="5%">Market</td> 
                        <td width="10%">Amount</td> 
                        <td width="10%">Date End</td> 
                        <td width="5%">Status</td> 
                        <td width="5%">Win/Lost</td>
                        <td width="5%">Update</td>
                        <td width="10%">Profit</td>
                        <td width="10%">Rate Stake</td>
                        <td width="10%">Rate End</td>
                        <td width="5%">#</td>
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

$kode = $db->result($i, "kode");	
$idne = $db->result($i, "id");	
$usr = $db->result($i, "username");	
$stats = $db->result($i, "status");	
$wine = $db->result($i, "wine");	
$prosene = $db->result($i, "prosene");	
$ratein = $db->result($i, "ratein");
$rateout = $db->result($i, "rateout");	
$pilihan = $db->result($i, "pilihan");	
$timestake = $db->result($i, "timestake");		
$market = $db->result($i, "market");			
$curre = $db->result($i, "curr");				
$freee = $db->result($i, "free");		

if($freee == 1){
	$statusemmber="<span class='badge badge-important'>demo</span>";	
}else{
	$statusemmber="";	
}

if($stats == 0) {
		$img = "<button class='primapc2'>Pending</button>";
	} else {
		$img = "<button class='primapc'>Done</button>";
	}

$lostwin = $db->result($i, "lostwin");	
if($lostwin == 2) {
		$sts = "<button class='pendings'>Lost</button>";
		$jmlgette = rupiah($wine)." ".$prosene."%";
		$rateends = $curre($rateout);
	}else if($lostwin == 1) {
		$sts = "<button class='donec'>Win</button>";
		$jmlgette = rupiah($wine)." ".$prosene."%";
		$rateends = $curre($rateout);
	}else{
		$sts = "<button class='pendingprima'>Pending</button>";
		$jmlgette = "---";
		$rateends = "---";
	}		



$namaspon1 = "SELECT * FROM member WHERE username='$usr'"; 
        $resultnamaspon1 = mysql_query($namaspon1);
$rownamaspon1 = mysql_fetch_array($resultnamaspon1);
$namaspone1 = $rownamaspon1['nama'];	

if($stats == 0 && $exp < $clientdate) {
	$styles=" style='color:#CE0000'";
}else{
	$styles="";
}
	
$kontrakd = $db->result($i, "kontrak");		
$foreverec = $db->result($i, "forever");	
$siklusd = $db->result($i, "siklus");	
if($foreverec == 1) {
	$kontraks="Forever";
}else{
	$kontraks=$kontrakd." ".$siklusd;
}
?>
  <tr class="<?php echo $class; ?>"> 
    <td width="4%" align="center"<?php echo $styles; ?>> 
    <?php echo formatgl($db->result($i, "tgl")); ?></td>
    <td width="13%" align="center"<?php echo $styles; ?>> 
      <?php echo $db->result($i, "kode"); ?>    </td>
   
   <td align="center"<?php echo $styles; ?>> 
      <?php echo $db->result($i, "username"); ?>
    </td>
	
	<td align="center"<?php echo $styles; ?>> 
     <?php echo strtoupper($pilihan); ?> <?php echo strtoupper($timestake); ?>
    </td>
	<td align="center"<?php echo $styles; ?>> 
      <?php echo $db->result($i, "market"); ?>
    </td>
	<td align="center"<?php echo $styles; ?>> 
      <?php echo rupiah($db->result($i, "amount")); ?>
    </td>
    <td align="center"<?php echo $styles; ?>> 
      <?php echo formatgl($db->result($i, "tglstop")); ?>
    </td>
      <td align="center"<?php echo $styles; ?>> 
      <?php echo $img; ?>
    </td>
    
 <td align="center"<?php echo $styles; ?>> 
 
 <?php echo $sts; ?>
 
     
    </td>
    
     <td align="center"<?php echo $styles; ?>> 
     <a href="#" onClick="window.open('page.php?go=updatestake&kode=<?php echo $db->result($i, "kode"); ?>','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false"><button class='updatestake'>Update</button></a>
   </td>
   
 <td  align="center"<?php echo $styles; ?>>
     <?php echo $jmlgette; ?>
    </td>
   
     <td  align="center"<?php echo $styles; ?>>
     <?php echo $curre($ratein); ?>
    </td>
    <td  align="center"<?php echo $styles; ?>>
     <?php echo $rateends; ?>
    </td>
     <td align="center"<?php echo $styles; ?>> 
      <?php echo $statusemmber; ?>
    </td>
   
<?php
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
  <span class='prevnext'><a href="?go=investe<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=investe&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a></span> |
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
<a href="?go=investe<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a>
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <span class='prevnext'><a href="?go=investe<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a></span> | <span class='prevnext'><a href="?go=investe&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a></span>
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