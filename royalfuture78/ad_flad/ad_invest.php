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
<script type="text/javascript">
<!--
function confirmation(no) {
	var answer = confirm("Yakin akan menghapus data transaksi ini?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=invest&page=delete&no=" + no;
		
	}
	
}
//-->
</script>
<script>
		function confirmActionx2c(){
      var confirmed = confirm("Anda akan mengaktifkan investasi member, pastikan anda telah menerima pembayaran.");
      return confirmed;
}
</script>
<script>
		function confirmActionx2d(){
      var confirmed = confirm("Anda akan menonaktifkan investasi member.");
      return confirmed;
}
</script>
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Invest Deposit</h2>
<?php
//---pagination----------------
$limit = '20'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '20'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);

$kat = $_GET['kat'];
$keywrd = $_POST["keywrd"];	
if(isset($_POST["Submit"]) == "CARI") {
	$filter = "username='$keywrd' or kode='$keywrd' or uraian='$keywrd'";
	$where = "username='$keywrd' or kode='$keywrd' or uraian='$keywrd'";
} 
//--------------------------------------
$numrows = $db->count_records("dataewalet3", "");

$db->select("id, kode, username, jumlah, uraian, tgl, status, plan, profit, cycle, kontrak, paket, exp, cashback, getamount", "dataewalet3", "", "tgl desc", "", "", "$start, $limit");

if(isset($kat) == "2") {
$db->select("id, kode, username, jumlah, uraian, tgl, status, plan, profit, cycle, kontrak, paket, exp, cashback, getamount", "dataewalet3", $where, "tgl desc", "", "", "$start, $limit");
}
?>

<form id="form2" name="form2" method="post" action="?go=invest&amp;kat=2" style="margin:0; padding:0">
          <label> Cari Member / Invoice / Angka Unik:
            <input name="keywrd" type="text" id="keywrd" />
            </label>
          <label>
            <input type="submit" name="Submit" value="CARI" />
            </label>
        </form>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EEEEEE">
  <tr align="center"> 
	<td width="8%"><strong>Kode</strong></td>
    <td width="13%"><strong>Tanggal</strong></td>
	<td width="13%"><strong>Expired</strong></td>
    <td width="8%"><strong>Username</strong></td>
	<td width="8%"><strong>Paket</strong></td>
	<td width="13%"><strong>Nilai</strong></td>
	<td width="10%"><strong>Bayar</strong></td>
	<td width="10%"><strong>Confirm</strong></td>
	 <td width="6%"><strong>Status</strong></td>
    <td width="4%"><strong>Del</strong></td>
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
$produk = $db->result($i, "plan");	
$myproduk = $db->result($i, "plan");
$paket = $db->result($i, "paket");	
$jumlah = $db->result($i, "jumlah");	
$angkanik = $db->result($i, "uraian");		
$exp = $db->result($i, "exp");		
if($stats == 0) {
	$stne = "<span class='badge badge-warning'>Pending</span>";
		$img = "<a href='?go=invest&page=publish&pub=1&no=$kode&mid=$usr' ><button class='primapc2'' onMouseover=\"ddrivetip('Click for processed')\" onMouseout='hideddrivetip()' onclick='return confirmActionx2c()'>Pending</button></a>";
	} else if($stats == 1) {
	$stne = "<span class='badge badge-success'>Aktif</span>";
		$img = "<a href='?go=invest&page=unpublish&pub=0&no=$kode&mid=$usr' ><button class='primapc'' onMouseover=\"ddrivetip('Click for cancel process')\" onMouseout='hideddrivetip()' onclick='return confirmActionx2d()'>Process</button></a>";
	} else {
		$img = "----";
		$stne = "<span class='badge badge-important'>Nonaktif</span>";
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
	
?>
  <tr class="<?php echo $class; ?>"> 
    <td width="4%" align="center"<?php echo $styles; ?>> 
     <?php echo $db->result($i, "kode"); ?></td>
    <td width="13%" align="center"<?php echo $styles; ?>> 
      <?php echo formatgl($db->result($i, "tgl")); ?>    </td>
    <td align="center"<?php echo $styles; ?>> 
      <?php echo formatgl($db->result($i, "exp")); ?>
    </td>
   <td align="center"<?php echo $styles; ?>> 
      <?php echo $db->result($i, "username"); ?>
    </td>
	
	<td align="center"<?php echo $styles; ?>> 
      <?php echo $myproduk; ?>
    </td>
	<td align="center"<?php echo $styles; ?>> 
      <?php echo rupiah($db->result($i, "jumlah")); ?>
    </td>
 <td align="center"<?php echo $styles; ?>> 
      <?php echo rupiah($db->result($i, "jumlah")+$angkanik); ?>
    </td>
    <td align="center"<?php echo $styles; ?>> 
      <?php
$sql_sp9s = mysql_query("select hash from konfirmasipayment where invoice='".$kode."'");
$ada_sp9s = mysql_num_rows($sql_sp9s);
$row35s = mysql_fetch_array($sql_sp9s);
if($ada_sp9s){ ?>
<a href='?go=konfirmasipayment&invoice=<?php echo $kode;?>' target="_blank"><button class='myconfirm'>View Confirmation</button></a>
<?php }else { echo "---";}


   ?>


    </td>
 <td  align="center"<?php echo $styles; ?>>
     <?php echo $img; ?>
    </td>
   
     <td  align="center"<?php echo $styles; ?>>
      <a href="#" onClick="confirmation('<?php echo $kode; ?>', 'delete', 'delete')" style='cursor:hand'><img src="images/icon-32-delete_resize.png" width="17" height="22" border="0" title="Delete this Transaction" /></a>
    </td>
   
<?php
	}
?>
</table>

<br />
<table width="90%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center">
     <?php

$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=invest&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=invest&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=invest&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=invest&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=invest&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>

    </td>
  </tr>
</table>
<?php
if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		//echo "delete no $no";
		$db->delete("dataewalet3", "kode='$no'");
		$db->delete("deposit", "kode='$no'");
	header("location: ?go=invest");
?>
<?php
} if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
		//echo "delete no $no";
			
		
$sblxx2=mysql_query("select kode, username, jumlah, uraian, tgl, status, paket, plan, profit, cycle, kontrak, siklus, cashback, getamount, maxbonus, maxbonusprosen from dataewalet3 where kode='$no'");
	    while($rows=mysql_fetch_row($sblxx2)) {
		$trans_code = $rows[0];
		$usere = $rows[1];
		$jumlah = $rows[2];
		$uraian = $rows[3];
		$plan = $rows[6];
		$profite = $rows[8];
		$cyclee = $rows[9];
		$planpaket = $rows[7];
		$kontrake = $rows[10];
		$siklus = $rows[11];
		$tgle = $rows[4];
		$cashback = $rows[12];
		$getamount = $rows[13];
		$maxbonus = $rows[14];
		$maxbonusprosen = $rows[15];
		}

$mid=$tujuan;
$tokens = substr(str_shuffle(str_repeat("4453B141119A06676420371112GEHDLPD8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 24)), 0, 11);
$tokens2 = substr(str_shuffle(str_repeat("4453B255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777141119A06676420371112GEHDLPD8717497783C6", 36)), 0, 11);


	//if($siklus == "day"){
//$kontrad_dt = ($kontrake/5);
//$tmbahan_dt = ($kontrad_dt*2);
//$ttlkontrak = $kontrake+$tmbahan_dt;
//}else{
$ttlkontrak = $kontrake;

  //$ttlprofite=($kontrake/100)*$jumlah;

$expired = date('Y-m-d H:i:s', strtotime("+".$ttlkontrak." ".$siklus.""));
$spnex = $db->dataku("sponsor", $usere);
$pakete="Package ".$planpaket."";
$harine2 = date("N");
		
			$db->update("dataewalet3", "status='1', tgl='$clientdate', exp='$clientdate'", "kode='$trans_code'");
			$db->update("reinv", "status='1'", "username='$usere'");
			
				$db->update("member", "harga='$plan', stage='$pringkate', sto='1', act='1', tglaktif='$clientdate'", "username='$usere'");
			
			
			$cekadadepo = mysql_query("select * from deposit where kode='$trans_code'");
$ada_deponec = mysql_num_rows($cekadadepo); 
if(!$ada_deponec) {
			$db->insert("deposit", "", "'', '$usere', '$trans_code', '$jumlah', '1', '$clientdate', '$expired', '$plan', '$planpaket', '$profite', '$kontrake', '', '$siklus', '', '', '$maxbonus', '$maxbonusprosen', ''"); 
	//	$db->insert("datacwalet", "", "'', '".$trans_code."cb', 'administrator', '$cashback', 'Cashback Investment $kode $planpaket', '$usere', '$clientdate', 1, '$clientdate', '', ''");	
}
		
		
		
		
	
				
				
				$jumlahe=$jumlah;
				$users=$usere;
				$username=$usere;
				$amount=$jumlah;
				$kode=$trans_code;
				$produk=$plan;
				
					
			//$sponsore = $db->dataku("sponsor", $username);
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
				$paketreg = $plan;
				
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
							
			//		$db->insert("komisi", "", "'', '$upli', '0', '$clientdate', '0', 'flush', 'kompasangan', '$username', '".$kode."ps', '', ''");
					}}
					}}
			
				
		$tgwal = formatgl($clientdate);
$tgend = formatgl($expired);

	

$nama = $db->dataku("nama", $usere);
		$email = $db->dataku("email", $usere);
		$hp = $db->dataku("hp", $usere);
		$alamat = $db->dataku("alamat", $usere);
		$paketnv = $planpaket;
		$pf = $profite;
		$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");
		$jumlahdepone = rupiah($jumlah+$cyclee);
		$ket = $uraian;

$query113 = "SELECT * FROM invoice WHERE kode='$trans_code'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$file = $row113['file'];
$kode = $row113['kode'];
$tl = $row113['tgl'];
$tgl_inv = date('d-m-Y', strtotime($tl));
$waktu_inv = date('H:i', strtotime($tl));
$tgl_paid = date('d-m-Y', strtotime($clientdate));

$tgldepo = formatgl($clientdate);
  $tglakhir = formatgl($expired);
$pkt_invs = "".$planpaket;

$pkt_invs2 = "".$pakete."";
$prodd = "".$pakete."";

$cyclekontrak = $kontrake." cycle";



if($hp){
$isipesan = "Helo ".$nama.", Your investment package has been active, ".$pakete.", Amount ".rupiahwa($jumlah).".";
	mysql_query("insert into outbox values('', '', '$usere', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
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
<p>Helo ".$nama." (".$usere."),</p>
<p>Your Investment has been active.</p>
<p><strong>No: ".$trans_code."</strong><br>
Package: ".$pakete."<br>
Amount: ".rupiah($jumlah)."<br>
Start day : ".$tgwal."<br>
End day : ".$tgend."<br>
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3b = new PHPMailer;
	//	$mail3b->IsSMTP(); // telling the class to use SMTP
        $mail3b->Host       = $smtphost; // SMTP server
        $mail3b->SMTPAuth   = true;                  // enable SMTP authentication
        $mail3b->Host       = $smtphost; // sets the SMTP server
        $mail3b->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail3b->Username   = $smtpuser; // SMTP account username
        $mail3b->Password   = $smtpass;        // SMTP account password
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($email, $nama);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$nama.', Your Investment has been active.';
        $mail3b->msgHTML($isimail_e);
	//$mail3b->AddAttachment("../invoice/".$file.".pdf");      // attachment
    $mail3b->send();				
		


header("location: ?go=invest");


?>
<?php
} if (isset($_GET['page']) && $_GET['page'] == "unpublish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
		//echo "delete no $no";
$sblxx2=mysql_query("select kode, username, jumlah, uraian, tgl, status, paket, plan, profit, cycle, kontrak, siklus from dataewalet3 where kode='$no'");
	    while($rows=mysql_fetch_row($sblxx2)) {
		$trans_code = $rows[0];
		$usere = $rows[1];
		$jumlah = $rows[2];
		$uraian = $rows[3];
		$plan = $rows[6];
		$profite = $rows[8];
		$cyclee = $rows[9];
		$planpaket = $rows[7];
		$kontrake = $rows[10];
		$tgle = $rows[4];
		$siklus = $rows[11];
		}

$mid=$tujuan;


$spnex = $db->dataku("sponsor", $usere);

$pakete="Package ".$planpaket."";		
$db->update("dataewalet3", "status='0', tgl='$clientdate'", "kode='$trans_code'");
		$db->delete("deposit", "kode='$trans_code'");
		$db->delete("komisi", "kode='".$trans_code."sp'");
		//for ($i=1; $i <= 20; $i=$i++)	{
		//$db->delete("komisi", "kode='".$trans_code."".$i."'");
		$db->delete("datacwalet", "kode='".$trans_code."sp'");	
			
		//}
	

$nama = $db->dataku("nama", $usere);
		$email = $db->dataku("email", $usere);
		$hp = $db->dataku("hp", $usere);
		$alamat = $db->dataku("alamat", $usere);
		$paketnv = $planpaket;
		$pf = $profite;
		$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");
		$jumlahdepone = rupiah($jumlah+$cyclee);
		$ket = $uraian;

$query113 = "SELECT * FROM invoice WHERE kode='$trans_code'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$file = $row113['file'];
$kode = $row113['kode'];
$tl = $row113['tgl'];
$tgl_inv = date('d-m-Y', strtotime($tl));
$waktu_inv = date('H:i', strtotime($tl));
$tgl_paid = date('d-m-Y', strtotime($clientdate));

$tgldepo = formatgl($clientdate);
  $tglakhir = formatgl($expired);
$pkt_invs = "".$planpaket;

$pkt_invs2 = "".$planpaket."";
$prodd = "".$planpaket."";

		
		header("location: ?go=invest");
		
	
?>
<?php
}
?>