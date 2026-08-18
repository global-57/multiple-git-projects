<?php
/**
 *  ... Please MODIFY this file ...
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */
$servername="localhost";
	$userdb="royanpox_teg6495";
	$passdb="b3JcMwj4Gc^P";
	$databasename="royanpox_rydbasenya";
	
 define("DB_HOST", 	$servername);				// hostname
 define("DB_USER", 	$userdb);		// database username
 define("DB_PASSWORD", 	$passdb);		// database password
 define("DB_NAME", 	$databasename);	// database name





$conn = new mysqli($servername, $userdb, $passdb, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT domain, bisnisname, alamat, email, invimage, hpsms FROM configuration";
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
	
    }
}
/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional)", "etc...");
 */
 function rupiah($amount)
{
$new_amount= "\$".number_format($amount,2);
  return $new_amount;
}
 function btc($amount)
{
$new_amount= "BTC ".number_format($amount,8);
  return $new_amount;
}

?>