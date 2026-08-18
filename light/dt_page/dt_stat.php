<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=./index.php\">";
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
<?php
$vtmemonline = $db->config("memonline"); 
$vtwdnya = $db->config("vwd");
$totvistnya = $db->config("totvist");
$vistodaynya = $db->config("vistoday");
$vistonline = $db->config("vistol");
$startsdays = $db->config("startday");
$vtdpe = $db->config("totdepo");

 $clndatexx = date ("Y-m-d");
   $day1 = strtotime($startsdays);
  $day2 = strtotime($clndatexx);
$runsdays = round(abs($day2 - $day1) / (60*60*24));
if($runsdays > 0){
	$rndyse=$runsdays;
}else{
	$rndyse="0";
}




$ipne = $_SERVER['REMOTE_ADDR'];
$tm    = (date ("H:i:s"));
$dy    = (date ("d.m.Y"));
$clr = (date('d.m.Y',strtotime("-1 days")));
$time=time();
$time_check=$time-300; 

$sql221="SELECT * FROM useronline WHERE session='$session'";
$result221=mysql_query($sql221);
$count=mysql_num_rows($result221);

if($count=="0"){
$sql1="INSERT INTO useronline(id, session, username, ip, time, file, tst, tsa)VALUES('', '$session', '$tm', '$ipne', '$time', '', '1', '1')";
$result1=mysql_query($sql1);
$sql1a="INSERT INTO useronline2(id, session, username, ip, time, file)VALUES('', '$session', '$tm', '$ipne', '$time', '')";
$result1a=mysql_query($sql1a);
} else {
$sql2="UPDATE useronline SET time='$time' WHERE session = '$session'";
$result2=mysql_query($sql2);
}

$sql3="SELECT * FROM useronline";
$result3=mysql_query($sql3);
$count_user_online=mysql_num_rows($result3);
$user_online = $count_user_online+$vistonline;

$sql4="DELETE FROM useronline WHERE time<$time_check";
$result4=mysql_query($sql4);

$sql5="SELECT visit FROM visit"; 
$dt5=mysql_query($sql5);
$config5=mysql_fetch_array($dt5);
$visitor = $config5['visit']+$totvistnya;
$totvis=$visitor;
$newvisitor = $visitor+1;
mysql_query("UPDATE visit SET visit ='$newvisitor'");
?>
<?php
$tanggal=date("Y-m-d");
$perintah2="SELECT * FROM member where tgl='$tanggal'";
$jumlahmember2=mysql_query($perintah2);
$smuamember2=mysql_num_rows($jumlahmember2);
?>		
<?php
$sblxx2=mysql_query("select SUM(jml) from deposit");
while($row=mysql_fetch_row($sblxx2)) {
$totalex2 = $row[0]+$vtdpe;
if($totalex2 <=0) {
$totaldepo = "---";
} else {
$totaldepo = rupiah($totalex2);
}		
}
?>
<?php
$sblxx3=mysql_query("select SUM(jumlah) from dataewalet2b");
while($row3=mysql_fetch_row($sblxx3)) {
$totalex3 = $row3[0]+$vtwdnya;
if(!$totalex3) {
$totalwd = "---";
} else {
$totalwd = rupiah($totalex3);
}		
}
?>	
<?php

$virtprofit = $db->config("profitmanual");  
$sblxx3cc=mysql_query("select SUM(bayar) from komisi where jenis='komshare'");
while($row3cc=mysql_fetch_row($sblxx3cc)) {
$totalex3cc = $row3cc[0]+$virtprofit;
if($totalex3cc <=0 || $totalex3cc == '') {
$totalprofits = "---";
} else {
$totalprofits = rupiah($totalex3cc);
}		
}
?>		  					  
<?php
$perintah5="SELECT * FROM memberonline";
$jumlahmember5=mysql_query($perintah5);
$smuamember5z=mysql_num_rows($jumlahmember5);
$smuamember5=$smuamember5z+$vtmemonline;
?>		

<?php
$sql="SELECT visit FROM visit"; 
$dt=mysql_query($sql);
$config=mysql_fetch_array($dt);
$visitor = $config['visit'];
?>
<?php
$perintah5x="SELECT * FROM useronline2";
$jumlahmember5x=mysql_query($perintah5x);
$smuamember5xx=mysql_num_rows($jumlahmember5x);
$smuamember5x=$smuamember5xx+$vistodaynya;
?>		
<?php
$sql0 = mysql_query("SELECT * FROM ipblock WHERE ip='$ipne'");
$num0 = mysql_num_rows($sql0);
if($num0 > 0) {
header("location: https://www.google.com");
exit();
}
?>
