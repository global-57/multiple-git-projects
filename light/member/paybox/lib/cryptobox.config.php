<?php
/**
 *  ... Please MODIFY this file ...
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

$server_name="localhost";
	$userdb="bdrckt73_cdpsmr9";
	$passdb="VwQz~A)7D]tP";
	$databasename="bdrckt73_dbpemfhbs7";


 define("DB_HOST", 	$servername);				// hostname
 define("DB_USER", 	$userdb);		// database username
 define("DB_PASSWORD", 	$passdb);		// database password
 define("DB_NAME", 	$databasename);	// database name





$conn = new mysqli($servername, $userdb, $passdb, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT privatekey, publickey, domain, bisnisname, alamat, email, invimage, hpsms, kurs, kursidr FROM configuration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $publickeys=$row["publickey"];
    $privatekeys=$row["privatekey"];
    $bisnisname=$row["bisnisname"];
    $alamat_bisnis=$row["alamat"];
    $email_bisnis=$row["email"];
    $domain=$row["domain"];
	$invlogos=$row["invimage"];
	$emailadmin=$row["email"];
	$hpadmin=$row["hpsms"];
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
 function btc($amount)
{
$new_amount= number_format($amount,8)." BTC";
  return $new_amount;
}
function point($amount) {
    $new_amount = number_format($amount, 2)." Point";
    return $new_amount;
}


 $cryptobox_private_keys = array($privatekeys);




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys);

?>