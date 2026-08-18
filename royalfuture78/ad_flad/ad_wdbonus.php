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
		window.location = "?go=wdbonus&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<script>
		function confirmActionx2ce(){
      var confirmed = confirm("Anda akan memproses withdrawal, apakah anda yakin?");
      return confirmed;
}
</script>
<script>
		function confirmActionx2cex(){
      var confirmed = confirm("Anda akan membatalkan proses withdrawal, apakah anda yakin?");
      return confirmed;
}
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Withdrawal Bonus</h2>
<p align="center">&nbsp;</p>

<?php
if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
			
		$db->update("wd", "status='$pub', tglbayar='$clientdate'", "id='$no'");
		$username = $mid;
		
		$query35 = "SELECT * FROM wd WHERE kode='$kode'"; 
$result35 = mysql_query($query35);
$row35 = mysql_fetch_array($result35);
$username = $row35['userid'];
$jumlah = $row35['total'];
$uraian = $row35['tujuan'];
$jml_fee = $row35['charge'];
$tgle = $row35['tglminta'];
$jml_byr = $row35['rp'];
$tjn = $row35['tjn'];
$jml_byridr = $row35['idr'];

		
	if($tjn == 2){
//$db->update("dataewalet", "status='1'", "kode='$kode' and tujuan='$username'");	
}	
		
		
		$nama = $db->dataku("nama", $username);
		$email = $db->dataku("email", $username);
		$hp = $db->dataku("hp", $username);
		$emailadmin = $db->config("email");
		$keterangan = $uraian;
		$invne = rupiah($jumlah);
		$tgl = formatgl($clientdate);
		$jumlahdepone = rupiah($jumlah);
		$jumlahdepone2 = rupiah($jumlah);
		$jumlahdeponec = rupiahwa($jumlah);
		
		
		$balance = $balances;
		$waktu = date("H:i:s");



if($hp){ 
$isipesan = "Selamat ".$nama.", withdrawal bonus anda senilai ".$jumlahdeponec." telah diproses.";
	mysql_query("insert into outbox values('', '', '$username', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
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
sendwa($hp, $isipesan, $apikeywoowa);	
}
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$nama." (".$username."),</p>
<p>Withdraw bonus anda telah diproses.</p>
<p><strong>Kode: ".$kode."<br>
Jumlah: ".$jumlahdepone."<br>
Fee Admin: ".rupiah($jml_fee)."<br>
Dibayarkan: ".rupiah($jml_byr)."<br>
Tujuan: ".$uraian."<br>
Tanggal: ".$tgl."<br>
</p>
<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
		if($smaile == 1){	
//$mail3->IsSMTP(); // telling the class to use SMTP
$mail3->Host       = $smtphost; // SMTP server
$mail3->SMTPAuth   = true;                  // enable SMTP authentication
$mail3->Host       = $smtphost; // sets the SMTP server
$mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3->Username   = $smtpuser; // SMTP account username
$mail3->Password   = $smtpass;        // SMTP account password
}
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $nama);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama.', Proses withdrawal bonus';
        $mail3->msgHTML($isimail);
	  //  $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	


header("location: ?go=wdbonus");
		exit;
?>
<?php		
} else if (isset($_GET['page']) && $_GET['page'] == "unpublish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }


$query35 = "SELECT * FROM wd WHERE kode='$kode'"; 
$result35 = mysql_query($query35);
$row35 = mysql_fetch_array($result35);

$username = $row35['userid'];
$jumlah = $row35['amount'];
$uraian = $row35['tujuan'];
$jml_fee = $row35['fee'];
$jml_byr = $row35['pay'];
$tgle = $row35['tglminta'];
$tjn = $row35['tjn'];

$db->update("wd", "status='$pub'", "id='$no'");
if($tjn == 2){
//$db->update("datacwalet", "status='0'", "kode='$kode' and tujuan='$username'");	
}
header("location: ?go=wdbonus");
		exit;
?>
<?php		
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		
$query35 = "SELECT * FROM wd WHERE kode='$no'"; 
$result35 = mysql_query($query35);
$row35 = mysql_fetch_array($result35);
$username = $row35['userid'];
$jumlah = $row35['amount'];
$jumlahdepone = rupiah($jumlah);


	$nama = $db->dataku("nama", $username);
		$email = $db->dataku("email", $username);
		$hp = $db->dataku("hp", $username);
	
		$db->delete("wd", "kode='$no'");
		//$db->delete("datacwalet", "kode='$no' and tujuan='$username'");
		
	
header("location: ?go=wdbonus");
		exit;
?>
<?php } else { ?>

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
	$where = "jenis='1' and userid = '".$_GET["keywrd"]."'";
} else {
	$where = "jenis='1'";
}	

if(isset($_GET["bulan"]) && isset($_GET["tahun"])){	
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun']; 
$dtfrom = "$tahun-$bulan-01 00:00:00";
$dtto = "$tahun-$bulan-31 23:59:59";
$where3 = "and (tglminta between '$dtfrom' and '$dtto')";

}else{

$where3 = "";
}
if(isset($_GET["from"]) && isset($_GET["to"])){	
$from = date('Y-m-d', strtotime($_GET["from"]));
$to = date('Y-m-d', strtotime($_GET["to"]));
$dtfrom = "$from 00:00:00";
$dtto = "$to 23:59:59";
$where4 = "and (tglminta between '$dtfrom' and '$dtto')";

}else{

$where4 = "";
}

//$db->select("*", "member", $kat);
	$numrows = $db->count_records("wd", "$where $where3 $where4");	
	$db->select("id, userid, tglminta, tglbayar, total, charge, rp, status, tujuan, kode, jenis, tjn", "wd", "$where $where3 $where4", "tglminta DESC", "", "", "$start, $limit");


?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="58%"><form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="wdbonus" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong>Withdrawal Bonus Bulan : </strong> </td>
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
 <a href="?go=wdbonus"><button type="button" class="submitkecil"/>LIHAT SEMUA</button></a>
</td>
        </tr>
      </table>
    </form>
<br />
<form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="wdbonus" />
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
 <input id="go" name="go"  type="hidden" value="wdbonus" />
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
                       <td width="6%"><strong>No.</strong></td>
    <td width="12%"><strong>Tanggal</strong></td>
	<td width="8%"><strong>Kode</strong></td>
    <td width="8%"><strong>Username</strong></td>
    <td width="10%"><strong>Jumlah</strong></td>
    <td width="10%"><strong>Fee</strong></td>
    <td width="10%"><strong>Bayar</strong></td>
    <td width="20%"><strong>Tujuan</strong></td>
    <td width="7%"><strong>Status</strong></td>
	 <td width="12%"><strong>Tanggal Proses</strong></td>
    <td width="5%"><strong>Del</strong></td>
    <td width="5%"><strong>Detail</strong></td>
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
	$username = $db->result($i, "userid");
	$kode = $db->result($i, "kode");
	$no = $db->result($i, "id");
	
if($db->result($i, "status") > 0) {
		$img = "<a href='?go=wdbonus&page=publish&pub=0&no=".$no."&mid=".$username."&kode=".$kode."'><button class='primadetail' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Klik disini untuk batalkan proses')\" onMouseout='hideddrivetip()' onclick='return confirmActionx2cex()'>Done</button></a>";
	} else {
		$img = "<a href='?go=wdbonus&page=publish&pub=1&no=".$no."&mid=".$username."&kode=".$kode."'><button class='primaback' style='padding:0px 7px;font-size:11px;' onMouseover=\"ddrivetip('Klik disini untuk proses')\" onMouseout='hideddrivetip()' onclick='return confirmActionx2ce()'>Pending</button></a>";
	}
	if($db->result($i, "tglbayar") == "0000-00-00 00:00:00"){
		$dtpros = "---";
	}else{
		$dtpros = formatgl($db->result($i, "tglbayar"));
	}		
?>
 
 <tr class="<?php echo $class; ?>"> 
                            <td align="center"><?php echo $nom; ?></td>
                            
                            <td align="center"><?php echo $style; ?><?php echo formatgl($db->result($i, "tglminta")); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $db->result($i, "kode"); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $db->result($i, "userid"); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo rupiah($db->result($i, "total")); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo rupiah($db->result($i, "charge")); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo rupiah($db->result($i, "rp")); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $db->result($i, "tujuan"); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $img; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $dtpros; ?></font></td>
                           <td align="center" bordercolor="#999999" bgcolor="#FFFFFF" ><a href="#" onClick="confirmation('<?php echo $kode; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Transaction" /></a></td>
    <td align="center"><font style="color:#555555"><a class='iframe7' href='page.php?go=detail-wd&kode=<?php echo $kode; ?>'><img src="../images/view.png" title="Detail Order" width="17" /></a></font></td>
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

  <a href="?go=wdbonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=wdbonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=wdbonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $i; ?>" style="font-size:10px; color:#0000CC">
<?= $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=wdbonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=wdbonus<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?>&show=<?= $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
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