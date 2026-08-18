<?php
error_reporting(0);
$server = $_SERVER['SERVER_NAME'];
$c = curl_init(); 
curl_setopt($c, CURLOPT_URL, "http://www.primadesain.com/verifydomains.php"); 
curl_setopt($c, CURLOPT_TIMEOUT, 30); 
curl_setopt($c, CURLOPT_POST, 1); 
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 

$postfields = 'svr='.$server; 
curl_setopt($c, CURLOPT_POSTFIELDS, $postfields); 
$result = curl_exec($c); 

if ($result=="fail") { 
echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date ("Y")." www.primadesain.com</p>";
die(); }
if(isset($_POST['tujuan'])){$tujuan=$_POST['tujuan'];
(@include ('./lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('./common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");

	$db=mysql_connect($server_name,$userdb,$passdb) or die ("Unable to connect to Database Server.");
	mysql_select_db($databasename,$db) or die ("Could not select database.");
	$ambiltiket="select username, nama, hp from member where username='".$tujuan."'";
	$lihattiket=mysql_query($ambiltiket);
	$tampiltiket=mysql_fetch_array($lihattiket);
	$adatiket=mysql_num_rows($lihattiket);
	$tktne=$tampiltiket[0];
	$nama=$tampiltiket[1];
	$hptujuan=$tampiltiket[2];
	
	
	if(!$adatiket){
	echo '<font style="font-size:14px; color:#F00;">"'.$tujuan.'" Not Found</font>';
    } else {
	echo '<font style="font-size:14px; color:#0F0;"><i class="fa fa-check-circle" style="margin-right:12px;"></i>OK</font>';
	}}?>