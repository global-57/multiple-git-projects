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
<h2><img src="images/coins.png" width="48" height="48" align="absmiddle" /> Profit Member </h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=profit-data&amp;page=addnew&edit=0"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah Profit</strong></a></li>
  </ul>
</div>
<?php
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["id"])){ $id = $_GET["id"]; }
?>
<?php	
	
	if($edit > 0) {
		$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "id='".mysql_real_escape_string($id)."'");
		$username = $db->result(0, "username");
		$bayar = $db->result(0, "bayar");
		$tglbayar = $db->result(0, "tglbayar");
		$status = $db->result(0, "status");
		$total = $db->result(0, "total");
		$jenis = $db->result(0, "jenis");
		$dari = $db->result(0, "dari");
		$kode = $db->result(0, "kode");
		$gett = $db->result(0, "gett");
		$edit = "1";
		$judulnya = "EDIT PROFIT";
		
	$jns = explode(" ", $dari);	
	$jnsx = $jns[1];
	$pkte = $jns[3]." ".$jns[4]." ".$jns[5];
	$tgldex = date('d-m-Y', strtotime($tglbayar));
		
	} else {
	$id = "";
	$username = "";
	$bayar = ""; 
	$tglbayar = "";
	$status = "";
	$total = "";
	$jenis = "";
	$dari = "";
	$kode = "";
	$gett = "";
	$edit = "0";
		$judulnya = "TAMBAHKAN PROFIT";
	}	
?>
<script>
function isNumberKey(evt) {
    debugger;
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 46 && evt.srcElement.value.split('.').length>1) {
        return false;
    }
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<form name="form1" id="form1" method="post" action="?go=profit-data&page=submit">
<input name="edit" type="hidden" id="edit" value="<?php echo $edit; ?>" size="5">
<input name="id" type="hidden" id="id" value="<?php echo $id; ?>" size="5">
  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#EEEEEE">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2"><?php echo $judulnya; ?></font></strong></div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">User ID Penerima Profit
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="kode" onchange="value" class="form" style="width:200px;"  required="required">
            <?php if ($edit > 0){ ?>
             <option value="<?php echo $kode; ?>"  selected="selected"><?php echo $username; ?> - Deposit <?php echo $kode; ?></option>
             <?php } else { ?>
             <option value="" selected="selected"> -- Pilih User -- </option>
             <?php } ?>
             <?php
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username, kode from deposit where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						if(isset($mid)&& $mid == $sto[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?php echo $sto[1]; ?>" <?php echo $pilih; ?>> 
          <?php echo $sto[0]; ?> - Deposit <?php echo $sto[1]; ?>
          <?php
					}
					?>
        </select>

        </label></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Profit yang akan dibayarkan : 
      </td>
      <td bgcolor="#FFFFFF"><input name="jumlah" type="text" id="jumlah" onkeypress="return isNumberKey(event)" size="10" value="<?php echo $bayar; ?>"  required="required"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Jenis Paket : </td>
      <td bgcolor="#FFFFFF"><input name="jenis" type="hidden" id="jenis" value="komshare"  required="required">
	   <select id="produk" name="produk" style="width:200px;">
       
            <?php if ($edit > 0){ ?>
             <option value="<?php echo $jnsx; ?>"  selected="selected"><?php echo $jnsx; ?></option>
             <?php } else { ?>
             <option value="" selected="selected">-- Paket --</option>
             <?php } ?>
       
       
	  
	  <?php
        for ($i= 1; $i <= $batas_paket; $i=$i+1)
     {
	 $ic = $i-1;
	 $produke = $lead[$ic];
	 echo"<option value='".$produke."' $dss>$produke</option>";
	 } ?>
	   </select>
      </td>
    </tr>
     <tr> 
      <td align="right" bgcolor="#FFFFFF">Jenis Profit : </td>
      <td bgcolor="#FFFFFF">
	  <select id="dari" name="dari" style="width:200px;"  required="required">
      
       <?php if ($edit > 0){ ?>
             <option value="<?php echo $pkte; ?>"  selected="selected"><?php echo $pkte; ?></option>
             <?php } else { ?>
              <option value="" selected="selected">-- Jenis Profit --</option>
             <?php } ?>
      
     
	  
  <?php
 for($ix=1;$ix<=365;$ix=$ix+1){
	  echo "<option value='profits day $ix' class='1'>Profit Day ".$ix."</option>";
	  }
	for($ixx=1;$ixx<=100;$ixx=$ixx+1){
	  echo "<option value='profits week $ixx' class='1'>Profit Week ".$ixx."</option>";
	  }  
	  for($ixxx=1;$ixxx<=48;$ixxx=$ixxx+1){
	  echo "<option value='profits month $ixxx' class='1'>Profit Month ".$ixxx."</option>";
	  }  
  ?>
  </select>
      </td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">Masukan Ke Wallet :</td>
      <td width="53%" bgcolor="#FFFFFF"><input type="radio" name="towalet" value="1" id="RadioGroupa1ds_0"/>
          Ya
          <input type="radio" name="towalet" value="0" id="RadioGroupa1ds_1" checked="checked"/>
        Tidak</td>
    </tr>
    <tr> 
	
      <td align="right" bgcolor="#FFFFFF">Tanggal Pemberian Profit :</td>
      <td bgcolor="#FFFFFF">
     <input name="tglkom" type="text" id="tglkom" value="<?php echo $tgldex; ?>"  required="required">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tglkom_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "tglkom",
                ifFormat : "%d-%m-%Y",
                button : "tglkom_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("tglkom_trig").observe("click", showCalendar);

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
     </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF"><label></label></td>
      <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Submit" class="submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("form1");
	  frmvalidator.addValidation("kode","dontselect=000","Pilih User");
	  frmvalidator.addValidation("produk","dontselect=000","Pilih Paket");
	  frmvalidator.addValidation("dari","dontselect=000","Pilih Jenis");
	  frmvalidator.addValidation("jumlah","req","Masukan nilai profit");
	  frmvalidator.addValidation("tglkom","req","Masukan tanggal");
	
//]]></script>  
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "submit") {

$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];
$jenis = $_POST['jenis'];
$produk = $_POST['produk'];
$id = $_POST['id'];
$dari = $_POST['dari'];
$edit = $_POST['edit'];
$tglkom = $_POST['tglkom'];
$tgldexx = date('Y-m-d', strtotime($tglkom));
$tanggalkom = $tgldexx." ".$clienttime;
$jenisejam = "Package $produk $dari";
$towalet = $_POST['towalet'];


$sqljam="SELECT * FROM deposit WHERE kode='".$kode."'"; 
$dtjam=mysql_query($sqljam);
$rowjam = mysql_fetch_array($dtjam);
$usernamenya = $rowjam['username'];



$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamenya' and jenis='komshare' and dari='$jenisejam' and kode='$kode'") or die(mysql_error());

$rowjamd = mysql_fetch_array($sqlo);
$tglby = $rowjamd['tglbayar'];

$numo = mysql_num_rows($sqlo);
if($numo) {
	
	
	
	
$string = 'Profit '.$jenisejam.' sudah ada sebelumnya pada tanggal: '.formatgl($tglby).'.';
        echo "<script>alert(\"$string\");".
        "window.location = '".$_SERVER['REQUEST_URI']."'</script>";
	exit;	
	
}else {

if($edit > 0) {
	$db->update("komisi", "username='".$usernamenya."', bayar='".$jumlah."', tglbayar='".$tanggalkom."', dari='".$jenisejam."', kode='".$kode."'", "id='".$id."'");
	
	header("location: ?go=profit-data&page=addnew&result=success_edit&id=$id&edit=1");
	exit;
	
	} else {
		
	$db->insert("komisi", "", "'', '".$usernamenya."', '".$jumlah."', '".$tanggalkom."', '0', '', 'komshare', '".$jenisejam."', '".$kode."', '0'");
			
	if($towalet == 1){
$db->insert("datacwalet", "", "'', '".$kode."', 'administrator', '$jumlah', '$jenisejam', '$usernamenya', '$tanggalkom', 1, '$tanggalkom', '', ''");
$db->update("komisi", "gett='1'", "username='$usernamenya' and kode='".$kode."'");
}	
			
			 header("location: ?go=profit-data&result=success_add");
	exit;
			
}		
}

?>




<?php
} else if (isset($_GET['page']) && $_GET['page'] == "addnew2") {
?>
<script>
function isNumberKey(evt) {
    debugger;
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 46 && evt.srcElement.value.split('.').length>1) {
        return false;
    }
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<form name="form2" id="form2" method="post" action="?go=profit-data&page=submit2">
  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#EEEEEE">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">TAMBAH PROFIT PER TANGGAL</font></strong></div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">User Deposit Penerima Profit
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="kode" onchange="value" class="form" style="width:200px;"  required="required">
            
             <option value="1" selected="selected"> -- Semua -- </option>
            
             <?php
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username, kode from deposit where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						if(isset($mid)&& $mid == $sto[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?php echo $sto[1]; ?>" <?php echo $pilih; ?>> 
          <?php echo $sto[0]; ?> - Deposit <?php echo $sto[1]; ?>
          <?php
					}
					?>
        </select>

        </label></td>
    </tr>
   
    <tr> 
	
      <td align="right" bgcolor="#FFFFFF">Tanggal Pemberian Profit :</td>
      <td bgcolor="#FFFFFF">
     <input name="tglkom" type="text" id="tglkom" value="<?php echo $tgldex; ?>"  required="required">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tglkom_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "tglkom",
                ifFormat : "%d-%m-%Y",
                button : "tglkom_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("tglkom_trig").observe("click", showCalendar);

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
     </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF"><label></label></td>
      <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Submit" class="submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("form1");
	  frmvalidator.addValidation("kode","dontselect=000","Pilih User");
	  frmvalidator.addValidation("jumlah","req","Masukan nilai profit");
	  frmvalidator.addValidation("tglkom","req","Masukan tanggal");
	
//]]></script>  





<?php
} else if (isset($_GET['page']) && $_GET['page'] == "submit2") {

$kode = $_POST['kode'];
$tglkom = $_POST['tglkom'];
$tgldexx = date('Y-m-d', strtotime($tglkom));
$tanggalkom = $tgldexx." ".$clienttime;

if($kode == 1){

$sqljam="SELECT * FROM deposit WHERE status=1"; 
$dtjam=mysql_query($sqljam);


 while($rowjam = mysql_fetch_array($dtjam)){
  $usernamekujam = $rowjam['username'];
  $profitjam = $rowjam['profit'];
  $jenisnye = $rowjam['planame'];
  $jumlahkujam = $rowjam['jml'];
  $nulkode = $rowjam['request'];
  $komisikujam = ($profitjam/100)*$jumlahkujam;
  $kodekujam = $rowjam['kode'];
  $tgldepo = $rowjam['tgldepo']; 
  $harine = $rowjam['dy']; 
  $siklus = $rowjam['sc']; 
  $tgldepoxx = date('Y-m-d', strtotime($tgldepo));
  $jamdepoxx = date('H', strtotime($tgldepo));
  $dydepoxx = date('d', strtotime($tgldepo));
  $jamdepoxxw = date('H:i:s', strtotime($tgldepo));
  $jambayar=$tgldexx." ".$jamdepoxxw;
  
  date_default_timezone_set('Asia/Jakarta');
  $tanggale=$tanggalkom;
  $tanggalexx = date('Y-m-d', strtotime($tanggalkom));
  $daytanggalexx = date('d', strtotime($tanggalkom));
  $daytanggalexx = date('H', strtotime($tanggalkom));
  $xx = ":00";
  $jam = $times."".$xx;
  $day1 = strtotime($tgldepoxx);
  $day2 = strtotime($tanggalexx);
  $interval = round(abs($day2 - $day1) / (60*60*24));
  

if($tgldepoxx <= $tanggalexx){

  
if($siklus == "day"){
  $ix = $interval+1;
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits day $sftrd";

$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
$numo = mysql_num_rows($sqlo);
if(!$numo) {

if(!empty($usernamekujam)){
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '$kodekujam')") or die(mysql_error());
//$db->insert("dataewalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$jambayar', 1, '$jambayar', 'administrator', '".$db->dataku("accid", $usernamekujam)."'");

}
}
} else if($siklus == "week"){
  $harine2 = date("N");
  $ix = floor($interval/7);
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits week $sftrd";

if($harine == $harine2 && $tanggalexx > $tgldepoxx){
$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
$numo = mysql_num_rows($sqlo);
if(!$numo) {

if(!empty($usernamekujam)){
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '$kodekujam')") or die(mysql_error());
//$db->insert("dataewalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$jambayar', 1, '$jambayar', 'administrator', '".$db->dataku("accid", $usernamekujam)."'");

}
}
}
} else if($siklus == "month"){
  $ix = floor($interval/28);
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits month $sftrd";

if($dydepoxx == $daytanggalexx && $tanggalexx > $tgldepoxx){
$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
$numo = mysql_num_rows($sqlo);
if(!$numo) {

if(!empty($usernamekujam)){
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '$kodekujam')") or die(mysql_error());
//$db->insert("dataewalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$jambayar', 1, '$jambayar', 'administrator', '".$db->dataku("accid", $usernamekujam)."'");

}
}
}


}
}

} 
} else {
	
	
$sqljam="SELECT * FROM deposit WHERE kode='$kode' and status=1"; 
$dtjam=mysql_query($sqljam);


 while($rowjam = mysql_fetch_array($dtjam)){
  $usernamekujam = $rowjam['username'];
  $profitjam = $rowjam['profit'];
  $jenisnye = $rowjam['planame'];
  $jumlahkujam = $rowjam['jml'];
  $nulkode = $rowjam['request'];
  $komisikujam = ($profitjam/100)*$jumlahkujam;
  $kodekujam = $rowjam['kode'];
  $tgldepo = $rowjam['tgldepo']; 
  $harine = $rowjam['dy']; 
  $siklus = $rowjam['sc']; 
  $tgldepoxx = date('Y-m-d', strtotime($tgldepo));
  $jamdepoxx = date('H', strtotime($tgldepo));
  $dydepoxx = date('d', strtotime($tgldepo));
  $jamdepoxxw = date('H:i:s', strtotime($tgldepo));
  $jambayar=$tgldexx." ".$jamdepoxxw;
  
  date_default_timezone_set('Asia/Jakarta');
  $tanggale=$tanggalkom;
  $tanggalexx = date('Y-m-d', strtotime($tanggalkom));
  $daytanggalexx = date('d', strtotime($tanggalkom));
  $daytanggalexx = date('H', strtotime($tanggalkom));
  $xx = ":00";
  $jam = $times."".$xx;
  $day1 = strtotime($tgldepoxx);
  $day2 = strtotime($tanggalexx);
  $interval = round(abs($day2 - $day1) / (60*60*24));
  

if($tgldepoxx <= $tanggalexx){

  
if($siklus == "day"){
  $ix = $interval+1;
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits day $sftrd";

$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
$numo = mysql_num_rows($sqlo);
if(!$numo) {

if(!empty($usernamekujam)){
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '$kodekujam')") or die(mysql_error());
//$db->insert("dataewalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$jambayar', 1, '$jambayar'");

}
}
} else if($siklus == "week"){
  $harine2 = date("N");
  $ix = floor($interval/7);
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits week $sftrd";

if($harine == $harine2 && $tanggalexx > $tgldepoxx){
$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
$numo = mysql_num_rows($sqlo);
if(!$numo) {

if(!empty($usernamekujam)){
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '$kodekujam')") or die(mysql_error());
//$db->insert("dataewalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$jambayar', 1, '$jambayar'");

}
}
}
} else if($siklus == "month"){
  $ix = floor($interval/28);
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits month $sftrd";

if($dydepoxx == $daytanggalexx && $tanggalexx > $tgldepoxx){
$sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
$numo = mysql_num_rows($sqlo);
if(!$numo) {

if(!empty($usernamekujam)){
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '$kodekujam')") or die(mysql_error());
//$db->insert("dataewalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$jambayar', 1, '$jambayar'");

}
}
}


}
}

} 	
	
	
	
	
	
	
	
	
	
}
 header("location: ?go=profit-data&result=success_add");
?>





<?php
} else if(isset($_GET['page'])&&$_GET['page']=="delete"){
	if(isset($_GET["id"])){$id=$_GET["id"];}
	$db->delete("komisi","id='$id'");
	header("location: ?go=profit-data");
?>






<?php } else { ?><br /><br />
<form id="form2" name="form2" method="post" action="?go=profit-data&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Member :
            <input name="keywrd" type="text" id="keywrd" />
            </label>
          <label>
            <input type="submit" name="Submit" value="CARI" />
            </label>
        </form><br /><br />
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EEEEEE">
                <thead> 
                    <tr> 
                        <th width="7%" align="center">#</th> 
                        <th width="15%" align="center">Date</th> 
                        <th width="15%" align="center">To</th>
                        <th width="20%" align="center">Type</th> 
                        <th width="15%" align="center">Amount</th>
                        <th width="5%" align="center">Edit</th> 
                        <th width="5%" align="center">Del</th> 
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
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis='komshare' and username = '$keyword'", "tglbayar desc LIMIT $posisi,$batas");
	}else{
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis='komshare'", "tglbayar desc LIMIT $posisi,$batas");
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
		$user1=$row[1];
		$namaspon1 = "SELECT * FROM member WHERE username='$user1'"; 
        $resultnamaspon1 = mysql_query($namaspon1);
        $rownamaspon1 = mysql_fetch_array($resultnamaspon1);
        $namaspone1 = $rownamaspon1['nama'];	
		
		
?>				             
                     <tr class="<?php echo $class; ?>"> 
                            <td align="center"><?php echo $nom; ?></td>
                            
                            <td align="center"><?php echo $style; ?><?php echo formatgl($row[3]); ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo $namaspone1; ?> (<?php echo $row[1]; ?>)</font></td>
                            <td align="center"><?php echo $style; ?><?php echo $row[7]; ?></font></td>
                            <td align="center"><?php echo $style; ?><?php echo rupiah($row[2]); ?></font></td>
                            <td align="center"><?php echo $style; ?><a href="?go=profit-data&page=addnew&edit=1&id=<?php echo $row[0]; ?>"><img src='../images/edit_f2.png' border=0 title='Edit Data' width="24"></a></font></td>
                             <td align="center"><?php echo $style; ?><a href="?go=profit-data&page=delete&id=<?php echo $row[0]; ?>"><img src='../images/errormsg.png' border=0 title='Delete Data' width="24"></a></font></td>
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
$tampil2 = mysql_query("SELECT * FROM komisi WHERE jenis='komshare' and username='$user_session'");
$jmldata = mysql_num_rows($tampil2);
$jmlhal  = ceil($jmldata/$batas);
if($jmldata > 25) {
echo "<br><div class=paging>";
// Link ke halaman sebelumnya (previous)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<span class=prevnext><a href=index.php?go=profit-data&halaman=$prev>Prev</a></span> ";
}
else{ 
	echo "<span class=disabled>Prev</span> ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=index.php?go=profit-data&halaman=$i>$i</a> ";
}
else{
	echo " <span class=current>$i</span> ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class=prevnext><a href=index.php?go=profit-data&halaman=$next>Next</a></span>";
}
else{ 
	echo "<span class=disabled>Next</span>";
}
echo "</div>";
echo "<br>";
}   ?>  

<?php } ?>           