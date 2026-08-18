<?php
date_default_timezone_set('Asia/Jakarta');
include("common.php");
include("classMySQL.php");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
include("function.php");
require_once('class.phpmailer.php');
include("class.smtp.php");
mysql_connect($server_name, $userdb, $passdb) or die ("Could not connect to database");
mysql_select_db($databasename);
$today = date("Y-m-d H:i:s");
if($auto_profits == 1) {
	
$sqljam="SELECT * FROM deposit WHERE status=1 and dy=0"; 
$dtjam=mysql_query($sqljam);
if($dtjam === FALSE) {
    die(mysql_error()); }
 while($rowjam = mysql_fetch_array($dtjam)){
  $usernamekujam = $rowjam['username'];
  $profitjam = $rowjam['profit'];
  $jenisnye = $rowjam['planame'];
  $jumlahkujam = $rowjam['jml'];
  $komisikujam = ($profitjam/100)*$jumlahkujam;
  $kodekujam = $rowjam['kode'];
  $tgldepo = $rowjam['tgldepo']; 
  $tgldepoxx = date('Y-m-d', strtotime($tgldepo));
  $myplans = $rowjam['plan'];
  $siklus = $rowjam['sc']; 
  $tanggale=date("Y-m-d H:i:s");
  $tanggalexx = date ("Y-m-d");
  $day1 = strtotime($tgldepoxx);
  $day2 = strtotime($tanggalexx);
  $interval = round(abs($day2 - $day1) / (60*60*24));
  $datevs = strtotime($tgldepo);
$dateve = strtotime("+1 day", $datevs);
$mulaiprofit = date('Y-m-d', $dateve);

$sponsorematch = $db->dataupline("upline0", $usernamekujam);
$sponsorematch2 = $db->dataupline("upline1", $usernamekujam);
$sponsorematch3 = $db->dataupline("upline2", $usernamekujam);
$sponsorematch4 = $db->dataupline("upline3", $usernamekujam);
$sponsorematch5 = $db->dataupline("upline4", $usernamekujam);
$kmatchpro = $db->config("matchpro");
				$kmatchprone = explode("|", $kmatchpro);
				$komatch1 = ($kmatchprone[0]/100)*$komisikujam;
				$komatch2 = ($kmatchprone[1]/100)*$komisikujam;
				$komatch3 = ($kmatchprone[2]/100)*$komisikujam;
				$komatch4 = ($kmatchprone[3]/100)*$komisikujam;
				$komatch5 = ($kmatchprone[4]/100)*$komisikujam;

	
if($mulaiprofit <= $tanggalexx ){
if(!empty($usernamekujam)){
	
	
		
  if($siklus == "day"){
  $ix = $interval;
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits day $sftrd";
  $sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
  $numo = mysql_num_rows($sqlo);
  if(!$numo) {
  mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$tanggale', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '')") or die(mysql_error());
  $db->insert("datacwalet", "", "'', '$kodekujam', 'administrator', '$komisikujam', '$jenisejam', '$usernamekujam', '$tanggale', 1, '$tanggale', '', ''");
  
  if($sponsorematch && $komatch1 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch', '$komatch1', '$tanggale', '0', '', 'matchingpro1', '$usernamekujam', '".$kodekujam."mch1', '".$kmatchprone[0]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch1', 'administrator', '$komatch1', 'Bonus Matching Profit Level 1 from $usernamekujam', '$sponsorematch', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch2 && $komatch2 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch2', '$komatch2', '$tanggale', '0', '', 'matchingpro2', '$usernamekujam', '".$kodekujam."mch2', '".$kmatchprone[1]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch2', 'administrator', '$komatch2', 'Bonus Matching Profit Level 2 from $usernamekujam', '$sponsorematch2', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch3 && $komatch3 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch3', '$komatch3', '$tanggale', '0', '', 'matchingpro3', '$usernamekujam', '".$kodekujam."mch3', '".$kmatchprone[2]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch3', 'administrator', '$komatch3', 'Bonus Matching Profit Level 3 from $usernamekujam', '$sponsorematch3', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch4 && $komatch4 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch4', '$komatch4', '$tanggale', '0', '', 'matchingpro4', '$usernamekujam', '".$kodekujam."mch4', '".$kmatchprone[3]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch4', 'administrator', '$komatch4', 'Bonus Matching Profit Level 4 from $usernamekujam', '$sponsorematch4', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch5 && $komatch5 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch5', '$komatch5', '$tanggale', '0', '', 'matchingpro5', '$usernamekujam', '".$kodekujam."mch5', '".$kmatchprone[4]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch5', 'administrator', '$komatch5', 'Bonus Matching Profit Level 5 from $usernamekujam', '$sponsorematch5', '$tanggale', '1', '$tanggale', '', ''");
	}
 
  }
  
  
  
  
} else if($siklus == "week"){
  $harine2 = date("N");
  $ix = floor($interval/7);
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits week $sftrd";
  if($ix > 0 && $tanggalexx > $tgldepoxx){
  $sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
  $numo = mysql_num_rows($sqlo);
  if(!$numo) {
  mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$tanggale', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '')") or die(mysql_error());
  $db->insert("datacwalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$tanggale', 1, '$tanggale', '', ''");
  if($sponsorematch && $komatch1 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch', '$komatch1', '$tanggale', '0', '', 'matchingpro1', '$usernamekujam', '".$kodekujam."mch1', '".$kmatchprone[0]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch1', 'administrator', '$komatch1', 'Bonus Matching Profit Level 1 from $usernamekujam', '$sponsorematch', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch2 && $komatch2 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch2', '$komatch2', '$tanggale', '0', '', 'matchingpro2', '$usernamekujam', '".$kodekujam."mch2', '".$kmatchprone[1]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch2', 'administrator', '$komatch2', 'Bonus Matching Profit Level 2 from $usernamekujam', '$sponsorematch2', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch3 && $komatch3 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch3', '$komatch3', '$tanggale', '0', '', 'matchingpro3', '$usernamekujam', '".$kodekujam."mch3', '".$kmatchprone[2]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch3', 'administrator', '$komatch3', 'Bonus Matching Profit Level 3 from $usernamekujam', '$sponsorematch3', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch4 && $komatch4 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch4', '$komatch4', '$tanggale', '0', '', 'matchingpro4', '$usernamekujam', '".$kodekujam."mch4', '".$kmatchprone[3]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch4', 'administrator', '$komatch4', 'Bonus Matching Profit Level 4 from $usernamekujam', '$sponsorematch4', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch5 && $komatch5 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch5', '$komatch5', '$tanggale', '0', '', 'matchingpro5', '$usernamekujam', '".$kodekujam."mch5', '".$kmatchprone[4]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch5', 'administrator', '$komatch5', 'Bonus Matching Profit Level 5 from $usernamekujam', '$sponsorematch5', '$tanggale', '1', '$tanggale', '', ''");
	}

  }
  }


} else if($siklus == "month"){
  $ix = floor($interval/28);
  $qryccv = mysql_query("SELECT * from komisi where username='$usernamekujam' and jenis='komshare' and kode='$kodekujam' ORDER BY username");
  $rrrccv=mysql_num_rows($qryccv);
  $sftrd = $rrrccv+1;
  $jenisejam = "Package $jenisnye profits month $sftrd";

  if($ix > 0 && $tanggalexx > $tgldepoxx){
  $sqlo = mysql_query("SELECT * FROM komisi WHERE username='$usernamekujam' and jenis='komshare' and total='$ix' and kode='$kodekujam'") or die(mysql_error());
  $numo = mysql_num_rows($sqlo);
  if(!$numo) {
  mysql_query("insert into komisi values('','$usernamekujam', '$komisikujam', '$tanggale', 0, '$ix', 'komshare', '$jenisejam', '$kodekujam', '', '')") or die(mysql_error());
  $db->insert("datacwalet", "", "'', '$kodekujam', 'admin', '$komisikujam', '$jenisejam', '$usernamekujam', '$tanggale', 1, '$tanggale', '', ''");
if($sponsorematch && $komatch1 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch', '$komatch1', '$tanggale', '0', '', 'matchingpro1', '$usernamekujam', '".$kodekujam."mch1', '".$kmatchprone[0]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch1', 'administrator', '$komatch1', 'Bonus Matching Profit Level 1 from $usernamekujam', '$sponsorematch', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch2 && $komatch2 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch2', '$komatch2', '$tanggale', '0', '', 'matchingpro2', '$usernamekujam', '".$kodekujam."mch2', '".$kmatchprone[1]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch2', 'administrator', '$komatch2', 'Bonus Matching Profit Level 2 from $usernamekujam', '$sponsorematch2', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch3 && $komatch3 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch3', '$komatch3', '$tanggale', '0', '', 'matchingpro3', '$usernamekujam', '".$kodekujam."mch3', '".$kmatchprone[2]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch3', 'administrator', '$komatch3', 'Bonus Matching Profit Level 3 from $usernamekujam', '$sponsorematch3', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch4 && $komatch4 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch4', '$komatch4', '$tanggale', '0', '', 'matchingpro4', '$usernamekujam', '".$kodekujam."mch4', '".$kmatchprone[3]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch4', 'administrator', '$komatch4', 'Bonus Matching Profit Level 4 from $usernamekujam', '$sponsorematch4', '$tanggale', '1', '$tanggale', '', ''");
	}
  if($sponsorematch5 && $komatch5 > 0) {
	$db->insert("komisi", "", "'', '$sponsorematch5', '$komatch5', '$tanggale', '0', '', 'matchingpro5', '$usernamekujam', '".$kodekujam."mch5', '".$kmatchprone[4]."', ''");
	$db->insert("datacwalet", "", "'', '".$kodekujam."mch5', 'administrator', '$komatch5', 'Bonus Matching Profit Level 5 from $usernamekujam', '$sponsorematch5', '$tanggale', '1', '$tanggale', '', ''");
	}
}
}

}


}
}
}
}
?>
<?php
mysql_close();
?>
