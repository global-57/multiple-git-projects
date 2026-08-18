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
$string = "Your are not valid administrator, please login valid admin to access this page."; 
echo "<script>alert(\"$string\");"."window.location = './login.php'</script>";
}else{
?>
<style>
.imgFloatCenters	{ float:center; margin:0 0 2px 0; overflow:hidden; padding:2px; background:#fff; border:1px solid #FFFFFF; margin-bottom:-5px; }

</style>

<?
if(!$awal) $awal = $_GET["mid"];
?>
<?
if(isset($_GET["mid"])){ $mid = $_GET["mid"]; }
if(!isset($mid)) {
$mid = $_GET["mid"];
	}
?>
<?
if(isset($_POST['submit'])){
$mid = $_POST['mid'];
//---levelku--
			$mylev = $db->dataupline("level", $mid);
			$lev_uid = $db->dataupline("level", $mid);
			$tttx = $db->dataku("tgl", $mid);
			$ttt = $db->dataku("tgl", $mid);
				if($tttx < $ttt) {
				$mid = $user_session;
				echo "<div style='margin-left:12px'><div class='errorx'>Forbiden Access.</div></div>";
				}else{
				$mid = $mid;
			}
			
		
}
?>			

                        <table class="table">
                        <thead>
                          <tr>
                            <th width="11%" >Username</th>
							<th width="17%"><?php echo $LANG["name"];?></th>
                            <th width="14%">Refferal</th>
							<th width="13%">Upline</th>
							<th width="11%"><?php echo $LANG["left"];?></th>
							<th width="10%"><?php echo $LANG["right"];?></th>
							<th width="9%">Status</th>
                          </tr>
                        </thead>
                        <tbody>			

<tr>
							<td align="center"><font style='font-size:11px'><?= $mid; ?></font></td>
							<td align="center"><font style='font-size:11px'><?= $db->dataku("nama", $mid); ?></font></td>
							<td align="center"><font style='font-size:11px'><?= $db->dataku("sponsor", $mid); ?></font></td>
							<td align="center"><font style='font-size:11px'> <?= $db->dataupline("upline0", $mid); ?></font></td>
							<td align="center"><font style='font-size:11px'><?= memberL1($mid, $dtgl); ?></font></td>
							<td align="center"><font style='font-size:11px'><?= memberL2($mid, $dtgl); ?></font></td>
							<td align="center"><font style='font-size:11px'> <? $sts = $db->dataku("status", $mid);
							if($sts>0){
							echo "Active";
							}else{
							echo "Inactive";
							
							} ?></font></td>
							
						  </tr></tbody></table>
               
												
										
												<div align="center">
													<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0" width="750">
														<tbody><tr>
															<td align="center"><strong></strong><br></td>
														</tr>
														<tr>
															<td height="20">&nbsp;</td>
														</tr>
														<tr>
															<td>
																<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tbody><tr>
																		<td align="center" width="331">
																			<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
																				<tbody><tr>
																					<td align="right"></td>
																				  <td align="center" width="10"></td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
	
  <?
$namae = $db->dataku("nama", $mid);
$kota = $db->dataku("kota", $mid);
$spne = $db->dataku("sponsor", $mid);
$stsk = $db->dataku("status", $mid);
$pkt = $db->dataupline("paket", $mid);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek = "../images/free.jpg";
}

$upne = $db->dataupline("upline0", $mid);
$adafoto = $db->dataku("foto", $mid);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $mid<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($mid, $dtgl)." ID<br>Kaki Kanan: ".memberL2($mid, $dtgl)." ID<br></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $mid<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($mid, $dtgl)." ID<br>Kaki Kanan: ".memberL2($mid, $dtgl)." ID<br></div>";
		} 	

 ?> 
   
    																				<td align="center" background="<?= $bgnek; ?>" height="125" width="81"><table class="tbl03" cellpadding="0" cellspacing="0"><tbody><tr><td align="center" height="75" width="75"><?= $gambar; ?><p style="line-height:110%; font-size:12px; color:#222222;"><?= memberL1($mid, $dtgl); ?> | <?= memberL2($mid, $dtgl); ?><br><strong><?= $mid; ?><br /><?= $namae; ?><br /><?= $kota; ?></strong></p></td></tr></tbody></table></td>
																				</tr>
																			</tbody></table>
																		</td>
																	  <td align="center" width="301">&nbsp;</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														<tr>
															<td align="center" background="../images/tree01.gif" height="50"></td>
														</tr>
														<tr>
															<td>
																<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tbody><tr>
																		<td align="center" width="165"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
																					
  
  <?
$db->select("L1, L2", "upline", "username='$mid'");
$idki = $db->result(0, "L1");
$namae = $db->dataku("nama", $idki);
$kota = $db->dataku("kota", $idki);
$spne = $db->dataku("sponsor", $idki);
$stsk = $db->dataku("status", $idki);
$pkt = $db->dataupline("paket", $idki);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek1 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek1 = "../images/free.jpg";
}
	
$upne = $db->dataupline("upline0", $idki);
$adafoto = $db->dataku("foto", $idki);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Paket: $pkt ID<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki) {
   echo "<td align='center' background='$bgnek1' height='125' width='80'>";
   		

   		$kiri = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px; color:#222222;'>".memberL1($idki, $dtgl)." | ".memberL2($idki, $dtgl)."<br><strong>".$idki."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";

   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$mid&pos=L1&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri;

   $kosong = "";
 
 ?>                                                         </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="280"></td>
																		<td align="center" width="81">
                                                                        <table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
  <?
$db->select("L1, L2", "upline", "username='$mid'");
$idka = $db->result(0, "L2");
$namae = $db->dataku("nama", $idka);
$kota = $db->dataku("kota", $idka);
$spne = $db->dataku("sponsor", $idka);
$stsk = $db->dataku("status", $idka);
$pkt = $db->dataupline("paket", $idka);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek2 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek2 = "../images/free.jpg";
}
	
$upne = $db->dataupline("upline0", $idka);
$adafoto = $db->dataku("foto", $idka);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idka<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Paket: $pkt ID<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idka, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idka, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idka'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idka<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idka, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idka, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idka'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idka) {
   echo "<td align='center' background='$bgnek2' height='125' width='80'>";
   		

   		$kanan = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px; color:#222222;'>".memberL1($idka, $dtgl)." | ".memberL2($idka, $dtgl)."<br><strong>".$idka."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";

   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kanan = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$mid&pos=L2&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kanan;

   $kosong = "";
 
 ?>		
																		</td></tr></tbody></table></td>
																		<td align="center" width="139"></td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														<tr>
															<td align="center" background="../images/tree02.gif" height="50"></td>
														</tr>
														<tr>
															<td>
																<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tbody><tr>
																		<td align="center" width="60"></td>
																		<td align="center" width="81">
                                                                        <table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
<?
if(!$idki) {
   echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idki'");
		$idki2 = $db->result(0, "L1");
$namae = $db->dataku("nama", $idki2);
$kota = $db->dataku("kota", $idki2);
$spne = $db->dataku("sponsor", $idki2);
$stsk = $db->dataku("status", $idki2);
$pkt = $db->dataupline("paket", $idki2);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek4 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek4 = "../images/free.jpg";
}
 

$upne = $db->dataupline("upline0", $idki2);
$adafoto = $db->dataku("foto", $idki2);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki2<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki2, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki2, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki2'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki2<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki2, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki2, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki2'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki2) {
   echo "<td align='center' background='$bgnek4' height='125' width='80'>";
   		
$kiri2 = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki2, $dtgl)." | ".memberL2($idki2, $dtgl)."<br><strong>".$idki2."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri2 = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idki&pos=L1&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri2;
}
 ?>                
                    
                    														
																			</td>
																				</tr>
																			</tbody></table>
                                                                        </td>
																		<td align="center" width="91"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
<?
if(!$idki) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idki'");
		$idki2b = $db->result(0, "L2");
$namae = $db->dataku("nama", $idki2b);
$kota = $db->dataku("kota", $idki2b);
$spne = $db->dataku("sponsor", $idki2b);
$stsk = $db->dataku("status", $idki2b);
$pkt = $db->dataupline("paket", $idki2b);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek4 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek4 = "../images/free.jpg";
}

$upne = $db->dataupline("upline0", $idki2b);
$adafoto = $db->dataku("foto", $idki2b);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki2b<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki2b, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki2b, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki2b'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki2b<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki2b, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki2b, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki2b'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki2b) {
   echo "<td align='center' background='$bgnek4' height='125' width='80'>";
   		
$kiri2b = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki2b, $dtgl)." | ".memberL2($idki2b, $dtgl)."<br><strong>".$idki2b."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
		$kiri2b = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idki&pos=L2&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri2b;
}
 ?>                                                                              
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="91"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
<?
if(!$idka) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idka'");
		$idka2 = $db->result(0, "L1");
$namae = $db->dataku("nama", $idka2);
$kota = $db->dataku("kota", $idka2);
$spne = $db->dataku("sponsor", $idka2);
$stsk = $db->dataku("status", $idka2);
$pkt = $db->dataupline("paket", $idka2);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek5 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek5 = "../images/free.jpg";
}

$upne = $db->dataupline("upline0", $idka2);
$adafoto = $db->dataku("foto", $idka2);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idka2<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idka2, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idka2, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idka2'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idka2<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idka2, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idka2, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idka2'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idka2) {
   echo "<td align='center' background='$bgnek5' height='125' width='80'>";
   		
$kanan2 = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idka2, $dtgl)." | ".memberL2($idka2, $dtgl)."<br><strong>".$idka2."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
		$kanan2 = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idka&pos=L1&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";
		

   }

   echo $kanan2;
}
 ?>   
	                                                                 
                                                                                    
                                                                                    </td>
																				</tr>
																			</tbody></table>	
																		</td>
																		<td align="center" width="91"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
	<?
if(!$idka) {
   echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idka'");
		$idka2b = $db->result(0, "L2");
$namae = $db->dataku("nama", $idka2b);
$kota = $db->dataku("kota", $idka2b);
$spne = $db->dataku("sponsor", $idka2b);
$stsk = $db->dataku("status", $idka2b);
$pkt = $db->dataupline("paket", $idka2b);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek6 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek6 = "../images/free.jpg";
}

$upne = $db->dataupline("upline0", $idka2b);
$adafoto = $db->dataku("foto", $idka2b);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idka2b<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idka2b, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idka2b, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idka2b'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idka2b<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idka2b, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idka2b, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idka2b'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idka2b) {
   echo "<td align='center' background='$bgnek6' height='125' width='80'>";
   		
$kanan2b = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idka2b, $dtgl)." | ".memberL2($idka2b, $dtgl)."<br><strong>".$idka2b."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kanan2b = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idka&pos=L2&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kanan2b;
}
 ?>        
                                                                     
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="43"></td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														<tr>
															<td align="center" background="../images/tree03.gif" height="50">
                                                                                                 
                                                            </td>
														</tr>
														<tr>
															<td>
																<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tbody><tr>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
																			        
                                 
	<?
if(!$idki2) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idki2'");
		$idki3 = $db->result(0, "L1");
$namae = $db->dataku("nama", $idki3);
$kota = $db->dataku("kota", $idki3);
$spne = $db->dataku("sponsor", $idki3);
$stsk = $db->dataku("status", $idki3);
$pkt = $db->dataupline("paket", $idki3);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek7 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek7 = "../images/free.jpg";
}

$upne = $db->dataupline("upline0", $idki3);
$adafoto = $db->dataku("foto", $idki3);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3) {
   echo "<td align='center' background='$bgnek7' height='125' width='80'>";
   		
$kiri3 = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3, $dtgl)." | ".memberL2($idki3, $dtgl)."<br><strong>".$idki3."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3 = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idki2&pos=L1&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3;
}
 ?>                                                   
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="5"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
	<?
if(!$idki2) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idki2'");
		$idki3b = $db->result(0, "L2");
$namae = $db->dataku("nama", $idki3b);
$kota = $db->dataku("kota", $idki3b);
$spne = $db->dataku("sponsor", $idki3b);
$stsk = $db->dataku("status", $idki3b);
$pkt = $db->dataupline("paket", $idki3b);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek8 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek8 = "../images/free.jpg";
}
	
$upne = $db->dataupline("upline0", $idki3b);
$adafoto = $db->dataku("foto", $idki3b);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3b<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3b, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3b, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3b'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3b<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3b, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3b, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3b'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3b) {
   echo "<td align='center' background='$bgnek8' height='125' width='80'>";
   		
$kiri3b = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3b, $dtgl)." | ".memberL2($idki3b, $dtgl)."<br><strong>".$idki3b."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3b = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idki2&pos=L2&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3b;
}
 ?>                                                                                                
                           
                                                                                                           
                                                                                    
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="5"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
		<?
if(!$idki2b) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idki2b'");
		$idki3c = $db->result(0, "L1");
$namae = $db->dataku("nama", $idki3c);
$kota = $db->dataku("kota", $idki3c);
$spne = $db->dataku("sponsor", $idki3c);
$stsk = $db->dataku("status", $idki3c);
$pkt = $db->dataupline("paket", $idki3c);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek8 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek8 = "../images/free.jpg";
}

$upne = $db->dataupline("upline0", $idki3c);
$adafoto = $db->dataku("foto", $idki3c);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3c<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3c, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3c, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3c'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3c<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3c, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3c, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3c'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3c) {
   echo "<td align='center' background='$bgnek8' height='125' width='80'>";
   		
$kiri3c = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3c, $dtgl)." | ".memberL2($idki3c, $dtgl)."<br><strong>".$idki3c."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3c = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idki2b&pos=L1&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3c;
}
 ?>                                                                                 
                 
				 
                                                                              
                                                                                    
                                                                                    </td>
																				</tr>
																			</tbody></table>	
																		</td>
																		<td align="center" width="5"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
					<?
if(!$idki2b) {
   echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idki2b'");
		$idki3d = $db->result(0, "L2");
$namae = $db->dataku("nama", $idki3d);
$kota = $db->dataku("kota", $idki3d);
$spne = $db->dataku("sponsor", $idki3d);
$stsk = $db->dataku("status", $idki3d);
$pkt = $db->dataupline("paket", $idki3d);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek8 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek8 = "../images/free.jpg";
}
	
$upne = $db->dataupline("upline0", $idki3d);
$adafoto = $db->dataku("foto", $idki3d);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3d<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3d, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3d, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3d'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3d<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3d, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3d, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3d'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3d) {
   echo "<td align='center' background='$bgnek8' height='125' width='80'>";
   		
$kiri3d = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3d, $dtgl)." | ".memberL2($idki3d, $dtgl)."<br><strong>".$idki3d."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3d = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idki2b&pos=L2&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3d;
}
 ?>                                                                         
                                                                           
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="5"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
						<?
if(!$idka2) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idka2'");
		$idki3e = $db->result(0, "L1");
$namae = $db->dataku("nama", $idki3e);
$kota = $db->dataku("kota", $idki3e);
$spne = $db->dataku("sponsor", $idki3e);
$stsk = $db->dataku("status", $idki3e);
$pkt = $db->dataupline("paket", $idki3e);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek8 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek8 = "../images/free.jpg";
}
	
$upne = $db->dataupline("upline0", $idki3e);
$adafoto = $db->dataku("foto", $idki3e);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3e<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3e, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3e, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3e'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3e<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3e, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3e, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3e'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3e) {
   echo "<td align='center' background='$bgnek8' height='125' width='80'>";
   		
$kiri3e = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3e, $dtgl)." | ".memberL2($idki3e, $dtgl)."<br><strong>".$idki3e."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3e = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idka2&pos=L1&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3e;
}
 ?>                        
	                                                                        
                                                                                                  
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="5"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
							<?
if(!$idka2) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idka2'");
		$idki3f = $db->result(0, "L2");
$namae = $db->dataku("nama", $idki3f);
$kota = $db->dataku("kota", $idki3f);
$spne = $db->dataku("sponsor", $idki3f);
$stsk = $db->dataku("status", $idki3f);
$pkt = $db->dataupline("paket", $idki3f);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek8 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek8 = "../images/free.jpg";
}
	
$upne = $db->dataupline("upline0", $idki3f);
$adafoto = $db->dataku("foto", $idki3f);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3f<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3f, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3f, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3f'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3f<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3f, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3f, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3f'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3f) {
   echo "<td align='center' background='$bgnek8' height='125' width='80'>";
   		
$kiri3f = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3f, $dtgl)." | ".memberL2($idki3f, $dtgl)."<br><strong>".$idki3f."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3f = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idka2&pos=L2&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3f;
}
 ?>                      
		                                                               
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td align="center" width="5"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
										<?
if(!$idka2b) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idka2b'");
		$idki3g = $db->result(0, "L1");
$namae = $db->dataku("nama", $idki3g);
$kota = $db->dataku("kota", $idki3g);
$spne = $db->dataku("sponsor", $idki3g);
$stsk = $db->dataku("status", $idki3g);
$pkt = $db->dataupline("paket", $idki3g);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek8 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek8 = "../images/free.jpg";
}

$upne = $db->dataupline("upline0", $idki3g);
$adafoto = $db->dataku("foto", $idki3g);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3g<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3g, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3g, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3g'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3g<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3g, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3g, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3g'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3g) {
   echo "<td align='center' background='$bgnek8' height='125' width='80'>";
   		
$kiri3g = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3g, $dtgl)." | ".memberL2($idki3g, $dtgl)."<br><strong>".$idki3g."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3g = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idka2b&pos=L1&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3g;
}
 ?>                                                                                         
                                                                                    </td>
																				</tr>
																			</tbody></table>	
																		</td>
																		<td align="center" width="5"></td>
																		<td align="center" width="81">
																			<table class="tbl03" style="border-collapse: collapse;" border="1" cellpadding="2" cellspacing="0" height="116" width="100%">
																				<tbody><tr>
												<?
if(!$idka2b) {
   	echo "<td align='center' bgcolor='#CCCCCC' height='155' width='80'>";
	echo $kosong;
	} else {
$db->select("L1, L2", "upline", "username='$idka2b'");
		$idki3h = $db->result(0, "L2");
$namae = $db->dataku("nama", $idki3h);
$kota = $db->dataku("kota", $idki3h);
$spne = $db->dataku("sponsor", $idki3h);
$stsk = $db->dataku("status", $idki3h);
$pkt = $db->dataupline("paket", $idki3h);
if($stsk > 0){
$statusk = "Member Aktif";
$bgnek8 = "../images/silver.jpg";
}else{
$statusk = "Member Free";
$bgnek8 = "../images/free.jpg";
}
 
	
$upne = $db->dataupline("upline0", $idki3h);
$adafoto = $db->dataku("foto", $idki3h);
	$dirfoto = "./images/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='./images/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='./images/".$adafoto."' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3h<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3h, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3h, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3h'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		}
	else
		{
		$gambar = "<a href='../images/nopic.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nopic.png' class='imgFloatCenters' height='75' width='75'></a><div class='highslide-caption'>Username: $idki3h<br>Nama: $namae<br>Sponsor: $spne<br>Upline: $upne<br>Kota: $kota<br>Status: $statusk<br><br>Kaki Kiri: ".memberL1($idki3h, $dtgl)." ID<br>Kaki Kanan: ".memberL2($idki3h, $dtgl)." ID<br><br><a href='?go=genealogi&mid=$idki3h'><strong><img src='../images/bulltx.png'>&nbsp;Lihat Genealogi</strong></a></div>";
		} 	

 
  if($idki3h) {
   echo "<td align='center' background='$bgnek8' height='125' width='80'>";
   		
$kiri3h = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'>$gambar<p style='line-height:110%; font-size:12px;color:#222222;'>".memberL1($idki3h, $dtgl)." | ".memberL2($idki3h, $dtgl)."<br><strong>".$idki3h."<br />".$namae."<br />".$kota."</strong></p></td></tr></tbody></table>";
  
   } else {

   			echo "<td align='center' background='../images/red.jpg' height='125' width='80'>";
	$kiri3h = "<table class='tbl03' cellpadding='0' cellspacing='0'><tbody><tr><td align='center' height='75' width='75'><a href='?go=register&sp=$mid&up=$idka2b&pos=L2&dt=1'><img src='../images/add_user.png' ></a></td></tr></tbody></table>";

		

   }

   echo $kiri3h;
}
 ?>                                                                           
                                     
									 
								                                                            
                                                                                    </td>
																				</tr>
																			</tbody></table>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
													</tbody></table>
												</div>
												<div align="center">
													<table style="border-collapse: collapse;" border="0" bordercolor="#111111" cellpadding="0" width="100%">
														<tbody><tr>
															<td align="center" width="15">&nbsp;</td>
															<td align="center"><br><br>
															<span style="color: rgb(128, 128, 128);"><br>
															<br>
														    <br>
														    <br></span></td>
															<td align="center" width="15">&nbsp;</td>
														</tr>
													</tbody></table>
												</div>
												</td>
											</tr>
										</tbody></table>


</table>
	</div>

<?php } ?>
	