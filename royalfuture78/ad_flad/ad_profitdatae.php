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
<h2><img src="images/coins.png" width="48" height="48" align="absmiddle" /> Profit Trade </h2>
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
      <td bgcolor="#FFFFFF"><input name="jumlah" type="text" id="jumlah" onkeypress="return isNumberKey(event)" size="10" value="<?php echo $bayar; ?>"  required="required"> BTC</td>
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
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '')") or die(mysql_error());
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
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '')") or die(mysql_error());
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
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '')") or die(mysql_error());
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
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '')") or die(mysql_error());
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
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '')") or die(mysql_error());
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
mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$jambayar', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '')") or die(mysql_error());
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






<?php } else { ?>

<?
//---pagination----------------
$limit = '50'; // How many results should be shown at a time
$scroll = '1'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
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

$numrows = $db->count_records("komisi", "jenis='komtrade' $where $where3 $where4");	
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis='komtrade' $where $where3 $where4", "tglbayar DESC", "", "", "$start, $limit");




?>
<script>
		function confirmActionx2d(){
      var confirmed = confirm("Anda akan menghapus data profit member, anda yakin?");
      return confirmed;
}
</script>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="58%"><form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="profit-datae" />
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="right"><strong>Profit Bulan&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</strong> </td>
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
 <a href="?go=profit-datae"><button type="button" class="submitkecil"/>Lihat Semua</button></a>
</td>
        </tr>
      </table>
    </form>
<br />
<form name="search" method="GET" action="index.php" >
 <input id="go" name="go"  type="hidden" value="profit-datae" />
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
 <input id="go" name="go"  type="hidden" value="profit-datae" />
 
 
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
                        <td width="10%" align="center">User</td>
                        <td width="20%" align="center">Profit</td> 
                        <td width="10%" align="center">Nilai</td>
                        <th width="5%" align="center">Type</th> 
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

$user1=$db->result($i, "username");
$kode=$db->result($i, "kode");
$no=$db->result($i, "id");

	$stylec="";
if($db->result($i, "gett") == 1) {
		$typene = "<span class='badge badge-important'>Demo</span>";

		}else{
		$typene = "";
		}		
?>

<tr  class="<?php echo $class; ?>" > 
    <td align="center"><?php echo $nom; ?></td>
                            
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo formatgl($db->result($i, "tglbayar")); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $db->result($i, "kode"); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $db->result($i, "username"); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $db->result($i, "dari"); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo rupiah($db->result($i, "bayar")); ?></font></td>
                            <td align="center"<?php echo $stylec; ?>><?php echo $style; ?><?php echo $typene; ?></font></td>
                          
                             <td align="center"><?php echo $style; ?><a href="?go=profit-datae&page=delete&id=<?php echo $row[0]; ?>"><img src='../images/errormsg.png' border=0 title='Delete Data' width="24"></a></font></td>
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
  <span class='prevnext'><a href="?go=profit-datae<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=profit-datae&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a></span> |
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
<a href="?go=profit-datae<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a>
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <span class='prevnext'><a href="?go=profit-datae<?= $blndt; ?><?= $thndt; ?><?= $kwde; ?><?= $frome; ?><?= $toe; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a></span> | <span class='prevnext'><a href="?go=profit-datae&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a></span>
<?php

}
//
?>
</div>
    </td>
  </tr>
</table>


<?php } ?>           