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
		Update   ::       2013 � Primadesain.Com
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
<h1><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Add Invest</h1>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
 <?php
$act = $_GET['act'];
if($act == 1) { 
echo "<div class='alert-box successs'><span>Success : </span>Deposit berhasil di input!</div>";
}
?>
<form name="addepo" method="post" id="addepo" action="?go=addepo&page=submit">

  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#EEEEEE">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">INPUT 
          INVESTASI</font></strong></div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">User ID
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="mid" onchange="value" class="form" required="required">
          <option value="" >-- Pilih username --</option>
         <?php
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username from member where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						if(isset($mid)&& $mid == $sto[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?php echo $sto[0]; ?>" <?php echo $pilih; ?>> 
          <?php echo $sto[0]; ?>
          <?php
					}
					?>
        </select>
        </label></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Pilih Invest  :      </td>
      <td bgcolor="#FFFFFF">
	  <select name="produk" id="produk" style="width:220px" required="required">
              <option value="" selected="selected">[ Pilih Paket]</option>
	 <?php
	
	for($i=0;$i<$batas_paket;$i++) {	
	 $ic = $i;
	 $icc = $i+1;
	 $produke = $lead[$ic];
	 $byay = rupiahx($by[$ic]);
	 $byay2 = rupiahx($byx[$ic]);
	 
	 echo"<option value='".$icc."' ".$dss.">$produke [$byay - $byay2]</option>";
	}
	 ?> 	  
		  </select> 
		 
        </td>
    </tr>
	    
	    <tr> 
      <td align="right" bgcolor="#FFFFFF">Amount :</td>
	  <td bgcolor="#FFFFFF">
	  <input name="amount" id="amount" size="20" required="required" onkeypress="return isNumberKey(event,this)"/>
			
      </td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Tanggal Deposit :</td>
      <?php  $tt = date('Y-m-d', strtotime($clientdate)); ?>
	  <td bgcolor="#FFFFFF">
	  <input name="tanggal" id="tanggal" size="20" maxlength="30" required="required"/>  &nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tanggal_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "tanggal",
                ifFormat : "%e-%m-%Y",
                button : "tanggal_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("tanggal_trig").observe("click", showCalendar);

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
      <td bgcolor="#FFFFFF">
	 
	  <input type="submit" name="Submit" value="Submit" class="submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("addepo");
  frmvalidator.addValidation("mid","dontselect=000","Pilih Username");
   frmvalidator.addValidation("produk","dontselect=000","Pilih Deposit");
</script>

<p>

<?php
if (isset($_GET['page']) && $_GET['page'] == "submit") {

$mid = $_POST['mid'];
$produk = $_POST['produk'];
$tgladd = $_POST['tanggal'];
$amount = $_POST['amount'];

$ttadd = date('Y-m-d', strtotime($tgladd));

$cstime    = (date ("H:i:s"));
$activesdate = $ttadd." ".$cstime;

  
  
  
  
  $produk = anti_injection($_POST['produk']);
if($produk == 1){
$biaya = $biaya1;
$biayax = $biayax1;
$myproduk = $jenis1;
$profite = $invest_profits1;
$priode = $inv_kontrak1;
$siklus = $invest_priod1;
$cashback = $cashbcke1;
}else if($produk == 2){
$biaya = $biaya2;
$biayax = $biayax2;
$myproduk = $jenis2;
$profite = $invest_profits2;
$priode = $inv_kontrak2;
$siklus = $invest_priod2;
$cashback = $cashbcke2;
}else if($produk == 3){
$biaya = $biaya3;
$biayax = $biayax3;
$myproduk = $jenis3;
$profite = $invest_profits3;
$priode = $inv_kontrak3;
$siklus = $invest_priod3;
$cashback = $cashbcke3;
}else if($produk == 4){
$biaya = $biaya4;
$biayax = $biayax4;
$myproduk = $jenis4;
$profite = $invest_profits4;
$priode = $inv_kontrak4;
$siklus = $invest_priod4;
$cashback = $cashbcke4;
}else if($produk == 5){
$biaya = $biaya5;
$biayax = $biayax5;
$myproduk = $jenis5;
$profite = $invest_profits5;
$priode = $inv_kontrak5;
$siklus = $invest_priod5;
$cashback = $cashbcke5;
}else if($produk == 6){
$biaya = $biaya6;
$biayax = $biayax6;
$myproduk = $jenis6;
$profite = $invest_profits6;
$priode = $inv_kontrak6;
$siklus = $invest_priod6;
$cashback = $cashbcke6;
}else if($produk == 7){
$biaya = $biaya7;
$biayax = $biayax7;
$myproduk = $jenis7;
$profite = $invest_profits7;
$priode = $inv_kontrak7;
$siklus = $invest_priod7;
$cashback = $cashbcke7;
}else if($produk == 8){
$biaya = $biaya8;
$biayax = $biayax8;
$myproduk = $jenis8;
$profite = $invest_profits8;
$priode = $inv_kontrak8;
$siklus = $invest_priod8;
$cashback = $cashbcke8;
}else if($produk == 9){
$biaya = $biaya9;
$biayax = $biayax9;
$myproduk = $jenis9;
$profite = $invest_profits9;
$priode = $inv_kontrak9;
$siklus = $invest_priod9;
$cashback = $cashbcke9;
}else if($produk == 10){
$biaya = $biaya10;
$biayax = $biayax10;
$myproduk = $jenis10;
$profite = $invest_profits10;
$priode = $inv_kontrak10;
$siklus = $invest_priod10;
$cashback = $cashbcke10;
}else{
}

  
 $hrgn= $produk;
 $pringkate =$myproduk;
//$amount = $biaya;
  
  //$ttlprofite=($priode/100)*$amount;
	$ttlmaxbonus=($priode/100)*$amount;
  


$angkaunik = substr(str_shuffle(str_repeat("12365478985823641257846982357418965", 24)), 0, 3);


if($siklus == "day"){
       $harine = date("d");	
	}else if($siklus == "week"){
       $harine = date("N");	
	}else if($siklus == "month"){
       $harine = date("m");	
	}else{}


$jumlahdepone = rupiah($amount);
$prodd="".$myproduk."";

$datev = $activesdate;
$datevs = strtotime($datev);

	//if($siklus == "day"){
//$kontrad_dt = ($priode/5);
//$tmbahan_dt = ($kontrad_dt*2);
//$ttlkontrak = $priode+$tmbahan_dt;
//}else{
$ttlkontrak = $priode;
//}

$dateve = strtotime("+".$ttlkontrak." ".$siklus."", $datevs);
$expired = date('Y-m-d H:i:s', $dateve);	


$tkk = date('d-m-Y-H-i-s', strtotime($clientdate));
$tokens = md5(md5(date("Y-m-d H:i:s")));

$initiale = substr(str_shuffle(str_repeat("ABCEFGHIJKLMNPRSTUVWXYZ", 36)), 6, 2);
$stkode = strtotime(date("Y-m-d H:i:s"));
$stmpkode = $initiale."".$stkode;
$uraian = "add from admin";

$sess0 = substr(str_shuffle(str_repeat("WZTYG31113I3N16ZU3F4248V2JY1Q86NYRIL233V5JD3U356BG3Q182Y5I2J598C3VPJ8S213MI741UD84Z1Z", 125)), 34, 48);


$invc = "add_package_".$mid."_".$tkk."_".$sess0;
$inv = "http://".$domain."/invoice/".$invc.".pdf";

$spnex = $db->dataku("sponsor", $mid);

	
	
		
$db->insert("dataewalet3", "", "'', '$stmpkode', '$mid', '$amount', '$angkaunik', '$activesdate', '$activesdate', '1', '$produk', '$pringkate', '$profite', '', '$priode', '$siklus', '$priode', '$ttlmaxbonus', '$ttlmaxbonus', '$priode', '$stmpkode'");
		
		
		
			 
				$db->update("member", "harga='$produk', stage='$pringkate', sto='1', act='1', tglaktif='$clientdate'", "username='$usere'");	
			
			$db->update("reinv", "status='1'", "username='$mid'");
			$cekadadepo = mysql_query("select * from deposit where kode='$stmpkode'");
$ada_deponec = mysql_num_rows($cekadadepo); 
if(!$ada_deponec) {
			$db->insert("deposit", "", "'', '$mid', '$stmpkode', '$amount', '1', '$datev', '$expired', '$produk', '$pringkate', '$profite', '$priode', '', '$siklus', '', '', '$ttlmaxbonus', '$priode', ''"); 
		//$db->insert("datacwalet", "", "'', '".$kode."cb', 'administrator', '$cashback', 'Cashback Investment $kode $planpaket', '$usere', '$clientdate', 1, '$clientdate', '', ''");	
}
			
		  
            //$db->insert("invoice", "", "'', '$mid', '$stmpkode', '$invc', 'clientdate'"); 
			
			
			
			    $trans_code=$stmpkode;
				$jumlahe=$amount;
				$users=$mid;
				$plan=$produk;
				$usere=$mid;
				$jumlah=$amount;
				$username=$mid;
				$kode=$stmpkode;
				
							
							
							
								
						$sponsore = $db->dataku("sponsor", $username);
$sponsore2 = $db->dataku("sponsor", $sponsore);
$sponsore3 = $db->dataku("sponsor", $sponsore2);
$sponsore4 = $db->dataku("sponsor", $sponsore3);
$sponsore5 = $db->dataku("sponsor", $sponsore4);
			
			$towaletcashe = $db->config("towaletcash");	
			$kmspons = explode("|", $db->config("komisi_sponsor"));	
			
			$komsponx = ($kmspons[0]/100)*$amount;
			$komsponx2 = ($kmspons[1]/100)*$amount;
			$komsponx3 = ($kmspons[2]/100)*$amount;
			$komsponx4 = ($kmspons[3]/100)*$amount;
			$komsponx5 = ($kmspons[4]/100)*$amount;
			
		
							if($sponsore && $komsponx > 0) { 
			$cekadakome = mysql_query("select * from komisi where jenis='komsponsor' and username='$sponsore' and dari='$username' and kode='".$kode."sp'");
$ada_komex = mysql_num_rows($cekadakome); 
if(!$ada_komex) {	
				$db->insert("komisi", "", "'', '$sponsore', '$komsponx', '$clientdate', '0', '', 'komsponsor', '$username', '".$kode."sp', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp', 'administrator', '$komsponx', 'Refferal Bonus Level 1 From $username', '$sponsore', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}
				
			if($sponsore2 && $komsponx2 > 0) { 
			$cekadakome2 = mysql_query("select * from komisi where jenis='komsponsor2' and username='$sponsore2' and dari='$username' and kode='".$kode."sp2'");
$ada_komex2 = mysql_num_rows($cekadakome2); 
if(!$ada_komex2) {	
				$db->insert("komisi", "", "'', '$sponsore2', '$komsponx2', '$clientdate', '0', '', 'komsponsor2', '$username', '".$kode."sp2', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp2', 'administrator', '$komsponx2', 'Refferal Bonus Level 2 From $username', '$sponsore2', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore2'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}	
				
				if($sponsore3 && $komsponx3 > 0) { 
			$cekadakome3 = mysql_query("select * from komisi where jenis='komsponsor3' and username='$sponsore3' and dari='$username' and kode='".$kode."sp3'");
$ada_komex3 = mysql_num_rows($cekadakome3); 
if(!$ada_komex3) {	
				$db->insert("komisi", "", "'', '$sponsore3', '$komsponx3', '$clientdate', '0', '', 'komsponsor3', '$username', '".$kode."sp3', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp3', 'administrator', '$komsponx3', 'Refferal Bonus Level 3 From $username', '$sponsore3', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore3'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}	
				
				if($sponsore4 && $komsponx4 > 0) { 
			$cekadakome4 = mysql_query("select * from komisi where jenis='komsponsor4' and username='$sponsore4' and dari='$username' and kode='".$kode."sp4'");
$ada_komex4 = mysql_num_rows($cekadakome4); 
if(!$ada_komex4) {	
				$db->insert("komisi", "", "'', '$sponsore4', '$komsponx4', '$clientdate', '0', '', 'komsponsor4', '$username', '".$kode."sp4', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp4', 'administrator', '$komsponx4', 'Refferal Bonus Level 4 From $username', '$sponsore4', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore4'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}	
				
				if($sponsore5 && $komsponx5 > 0) { 
			$cekadakome5 = mysql_query("select * from komisi where jenis='komsponsor5' and username='$sponsore5' and dari='$username' and kode='".$kode."sp5'");
$ada_komex5 = mysql_num_rows($cekadakome5); 
if(!$ada_komex5) {	
				$db->insert("komisi", "", "'', '$sponsore5', '$komsponx5', '$clientdate', '0', '', 'komsponsor5', '$username', '".$kode."sp5', '', ''");
				
				$db->insert("datacwalet", "", "'', '".$kode."sp5', 'administrator', '$komsponx5', 'Refferal Bonus Level 5 From $username', '$sponsore5', '$clientdate', 1, '$clientdate', '', ''");
		        $db->update("member", "free='0'", "username='$sponsore5'");
			//	$db->update("komisi", "gett='1'", "username='$sponsore' and kode='".$kode."sp'");
				}}
			  
			
						
			  $tgl_skr = (date("Y-m-d"));
			$dtfrom = "$tgl_skr 00:00:00";
			$dtto = "$tgl_skr 23:59:59";
				$level = $db->dataupline("level", $username);
				//$kompas = $db->config("kompasangan");
			    $kompas = explode("|", $db->config("kompasangan"));
				//$k_pas = ($kompas[0]/100)*$amount;
				$paketreg = $produk;
				
				 if($paketreg == 1){
				$k_pas = ($kompas[0]/100)*$amount;
			}else if($paketreg == 2){
				$k_pas = ($kompas[1]/100)*$amount;
			}else if($paketreg == 3){
				$k_pas = ($kompas[2]/100)*$amount;
			}else if($paketreg == 4){
				$k_pas = ($kompas[3]/100)*$amount;
			}else if($paketreg == 5){
				$k_pas = ($kompas[4]/100)*$amount;
			}else if($paketreg == 6){
				$k_pas = ($kompas[5]/100)*$amount;
			}else if($paketreg == 7){
				$k_pas = ($kompas[6]/100)*$amount;
			}else if($paketreg == 8){
				$k_pas = ($kompas[7]/100)*$amount;
			}else if($paketreg == 9){
				$k_pas = ($kompas[8]/100)*$amount;
			}else if($paketreg == 10){
				$k_pas = ($kompas[9]/100)*$amount;
			}else{}		
				
               
			    $flush = $db->config("flushout");
			    $fonee = explode("|", $flush);
			
		   
			
			if($k_pas > 0){
            for($i=0;$i<100;$i++) {
					$upli = $db->dataupline("upline$i", $username);
					$matchnow=$db->match($upli);
					$uql = mysql_query("select username from komisi where jenis='kompasangan' and username='$upli'"); 
					$matchkit = mysql_num_rows($uql); 
					
			 $paketregupli = $db->dataku("harga", $upli);
            if($paketregupli == 1){
				$flusheee=$fonee[0];
			}else if($paketregupli == 2){
				$flusheee=$fonee[1];
			}else if($paketregupli == 3){
				$flusheee=$fonee[2];
			}else if($paketregupli == 4){
				$flusheee=$fonee[3];
			}else if($paketregupli == 5){
				$flusheee=$fonee[4];
			}else if($paketregupli == 6){
				$flusheee=$fonee[5];
			}else if($paketregupli == 7){
				$flusheee=$fonee[6];
			}else if($paketregupli == 8){
				$flusheee=$fonee[7];
			}else if($paketregupli == 9){
				$flusheee=$fonee[8];
			}else if($paketregupli == 10){
				$flusheee=$fonee[9];
			}else{}		

            $cekjmlah=mysql_query("select SUM(bayar) from komisi where jenis='kompasangan' and username='$upli' and (tglbayar between '$dtfrom' and '$dtto')");
	                 while($rowcekjumlah=mysql_fetch_row($cekjmlah)) {
		             $ada_fo = $rowcekjumlah[0];
					 if($ada_fo>0){
						 $adafone=$ada_fo;
					 }else{
						 $adafone="0";
					 }
					 
		             }

                if($matchnow > $matchkit) {
					if($adafone < $flusheee) {
						
						
				//	$db->insert("komisi", "", "'', '$upli', '$k_pas', '$clientdate', '0', '', 'kompasangan', '$username', '".$kode."ps', '', ''");
                    
					if($towaletcashe == 1){
			//	$db->insert("datacwalet", "", "'', '$kode', 'administrator', '$k_pas', 'Pairing Bonus From $username', '$upli', '$clientdate', 1, '$clientdate', '', ''");
			//	$db->update("komisi", "gett='1'", "username='$upli' and kode='".$kode."ps'");
				}
					
					
						}else{
							
				//	$db->insert("komisi", "", "'', '$upli', '0', '$clientdate', '0', 'flush', 'kompasangan', '$username', '".$kode."ps', '', ''");
					}}
					}}
				
		

	$tgwal = formatgl($datev);
$tgend = formatgl($expired);

	
    $nama = $db->dataku("nama", $mid);
    $hp = $db->dataku("hp", $mid);
		$email = $db->dataku("email", $mid);
		$jumlahdepone = rupiah($amount);
		$jumlahdeponec = rupiahwa($amount);
		$keterangan = $uraian;
		 $tgl = formatgl($clientdate);
		$waktu = date("H:i:s");
		$hostaddress = gethostbyaddr($_SERVER['REMOTE_ADDR']);	
	    $paketnv = $myproduk;
		$pf = $profit;
	
$tgl_inv = date('d-m-Y', strtotime($clientdate));
$waktu_inv = date('H:i', strtotime($clientdate));

if($hp){
$isipesan = "Hello ".$nama.", Your investment has been active, ".$prodd.", Amount ".$jumlahdeponec.".";
	mysql_query("insert into outbox values('', '', '$mid', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
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

$isimail_e="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Helo ".$nama." (".$mid."),</p>
<p>Your Investment has been active.</p>
<p><strong>No: ".$stmpkode."</strong><br>
Package: ".$prodd."<br>
Amount: ".$jumlahdepone."<br>
Start day : ".$tgwal."<br>
End day : ".$tgend."<br>
</p>

<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
		if($smaile == 1){	
//$mail3b->IsSMTP(); // telling the class to use SMTP
$mail3b->Host       = $smtphost; // SMTP server
$mail3b->SMTPAuth   = true;                  // enable SMTP authentication
$mail3b->Host       = $smtphost; // sets the SMTP server
$mail3b->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3b->Username   = $smtpuser; // SMTP account username
$mail3b->Password   = $smtpass;        // SMTP account password
}
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($email, $nama);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$nama.', Your Investment has been active.';
        $mail3b->msgHTML($isimail_e);
	$mail3b->AddAttachment("../invoice/".$invc.".pdf");      // attachment
    $mail3b->send();	



		header("location: ?go=addepo&act=1");
		exit;
}

?>