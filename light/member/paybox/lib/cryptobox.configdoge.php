<?php
$server = $_SERVER['SERVER_NAME'];

$c = curl_init(); 
// Set the full url path to point to your verifyLicense.php on your server 
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
/**
 *  ... Please MODIFY this file ...
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */
$server_name="localhost";
	$userdb="nmcn6348_vdj8954";
	$passdb="vLS]0xu)nicI";
	$databasename="nmcn6348_nmcdbase";


 define("DB_HOST", 	$servername);				// hostname
 define("DB_USER", 	$userdb);		// database username
 define("DB_PASSWORD", 	$passdb);		// database password
 define("DB_NAME", 	$databasename);	// database name



$conn = new mysqli($servername, $userdb, $passdb, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT domain, bisnisname, alamat, email, invimage, hpsms, privatekeydoge, publickeydoge, kurs, kursidr FROM configuration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $bisnisname=$row["bisnisname"];
    $alamat_bisnis=$row["alamat"];
    $email_bisnis=$row["email"];
    $domain=$row["domain"];
	$invlogos=$row["invimage"];
	$emailadmin=$row["email"];
	$hpadmin=$row["hpsms"];
    $publickeysdoge=$row["publickeydoge"];
    $privatekeysdoge=$row["privatekeydoge"];
	$kurs=$row["kurs"];
	$kursidr=$row["kursidr"];
	
    }
}
/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional)", "etc...");
 */
  function rupiah($amount)
{
$new_amount= "Rp ".number_format($amount,0);
  return $new_amount;
}
function dolar($amount) {
    $new_amount = "\$".number_format($amount, 2);
    return $new_amount;
}
function doge($amount)
{
$new_amount= number_format($amount,8)." DOGE";
  return $new_amount;
}
function point($amount) {
    $new_amount = number_format($amount, 2)." Point";
    return $new_amount;
}
 $cryptobox_private_keys = array($privatekeysdoge);




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys);

?>