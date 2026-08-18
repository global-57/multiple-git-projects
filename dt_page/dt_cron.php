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
?>
<?php
$clrdt = date("H");
$cekdt = "00";
if($clrdt == $cekdt) {
$sql="DELETE FROM useronline2";
$result=mysql_query($sql);
}
?>
<?php
$tg = date("d");
$cektg = "01";
$cektg2 = "07";
$cektg3 = "15";
$cektg4 = "22";
if($tg == $cektg || $tg == $cektg2 || $tg == $cektg3 || $tg == $cektg4) {

$sqla1="SELECT userid, time FROM adminlastlog order by time DESC limit 1"; 
$dta1=mysql_query($sqla1);
if($dta1 === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($rowa1 = mysql_fetch_array($dta1)){
  $usernameku = $rowa1['userid'];
  $ida = $rowa1['time'];

$sqla2="DELETE FROM adminlastlog WHERE userid='$usernameku' and time <> $ida";
$resulta2=mysql_query($sqla2);	   
}

$sqla3="SELECT userid, time FROM memberlog order by time DESC limit 1"; 
$dta3=mysql_query($sqla3);
if($dta3 === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($rowa3 = mysql_fetch_array($dta3)){
  $usernameku2 = $rowa3['userid'];
  $ida2 = $rowa3['time'];

$sqla4="DELETE FROM memberlog WHERE userid='$usernameku2' and time <> $ida2";
$resulta4=mysql_query($sqla4);	   

}
}
?>
<?php
$time0000=time();
$query113z = "SELECT * FROM otp WHERE time <= '$time0000'"; 
$result113z = mysql_query($query113z);
$numus9999 = mysql_num_rows($result113z);
if($numus9999) {
while($row113z = mysql_fetch_array($result113z)){
$userckp = $row113z['username'];
$timenya = $row113z['time'];
$db->delete("otp", "username='".$userckp."'");

}
}
?>

<?php
$datene = date("Y-m-d H:i:s");
$db->delete("unlockfield", "date<'$datene'");
?>

<?php
mysql_close();
?>
