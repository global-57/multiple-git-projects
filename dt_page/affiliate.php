<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=./index.php\">";
exit();} 
(@include ('./dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('./dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
function konekdb() {
	 global $server_name, $userdb, $passdb, $databasename;
		mysql_connect( $server_name, $userdb, $passdb ) ;
		mysql_select_db( $databasename );
}
$ip = $_SERVER['REMOTE_ADDR'];
session_start();
$session=session_id();

$resul1 = mysql_query( "SELECT username FROM member WHERE status='1'" );
	 $i = 0;
     while( $rowe = mysql_fetch_array( $resul1 ) )
          {
           $rsponsor1[$i]=$rowe['username'];
           $i++;
          }
     $acak1 = array_rand($rsponsor1,1) ;
     $id1=$rsponsor1[$acak1];
$sqlc1 = mysql_query("SELECT usrd FROM configuration WHERE id='1'");
$numc1 = mysql_num_rows($sqlc1);
while($rowc1 = mysql_fetch_array($sqlc1)){
 $ucd1 = $rowc1['usrd'];
 if (!$ucd1){
 $usernmc1 = $id1;
 } else {
 $usernmc1 = $ucd1;
 }
}
if($_GET[$reffa]){
konekdb();
$id = anti_injection($_GET[$reffa]);
$seleksi = mysql_query( "SELECT username, status, act, nama, email, hp, alamat, kota FROM member WHERE username='".mysql_real_escape_string($id)."'");
$data = mysql_fetch_array( $seleksi );

if( mysql_num_rows( $seleksi ) != 1 ) {
$seleksi1 = mysql_query( "SELECT username, nama, sponsor, email, alamat, kota, hp FROM member WHERE username='$usernmc1'" );
$data1 = mysql_fetch_array( $seleksi1 );
echo "<script type=\"text/javascript\">alert('Maaf, data Sponsor $id tidak ada didalam database kami, Sponsor akan dialihkan secara random');".
     "window.location = './signup.php'</script>";
session_start();
$_SESSION["sponsor"] = $data1[0];
	$_SESSION["nama"] = $data1[1];
	$_SESSION["email"] = $data1[3];
	$_SESSION["alamat"] = $data1[4];
	$_SESSION["kota"] = $data1[5];
	$_SESSION["hp"] = $data1[6];
	$_SESSION["random"] = "1";
}else{
$status="0";
if ($data[1] == $status) {
$seleksi2 = mysql_query( "SELECT username, nama, sponsor, email, alamat, kota, hp FROM member WHERE username='$usernmc1'" );
$data2 = mysql_fetch_array( $seleksi2 );
echo "<script type=\"text/javascript\">alert('Maaf, data Sponsor $id  belum aktif, Sponsor akan dialihkan secara random');".
     "window.location = './signup.php'</script>";
session_start();
$_SESSION["sponsor"] = $data2[0];
	$_SESSION["nama"] = $data2[1];
	$_SESSION["email"] = $data2[3];
	$_SESSION["alamat"] = $data2[4];
	$_SESSION["kota"] = $data2[5];
	$_SESSION["hp"] = $data2[6];	
	$_SESSION["random"] = "1";
	
	} else {
	
	//mysql_query("UPDATE member SET hits=hits+1 WHERE username='$data[1]'") or error( mysql_error() );
	
	//echo "<meta http-equiv='refresh' content='0;URL=./signup.php'>";
	mysql_query("UPDATE member SET hits=hits+1 WHERE username='$data[1]'");
	
	session_start();
	$_SESSION["sponsor"] = $data[0];
	$_SESSION["nama"] = $data[3];
	$_SESSION["email"] = $data[4];
	$_SESSION["alamat"] = $data[6];
	$_SESSION["kota"] = $data[7];
	$_SESSION["hp"] = $data[5];
	$_SESSION["random"] = "0";
	
	
    return true;
	//exit;
  }
}
}
else
{
if(isset($_SESSION["sponsor"])) 
  {
     return true;
  }
  else
  {
     konekdb();
	 //$status="aktif";
	 $resul = mysql_query( "SELECT username FROM member WHERE status='1'" );
	 $i = 0;
     while( $row = mysql_fetch_array( $resul ) )
          {
           $rsponsor[$i]=$row['username'];
           $i++;
          }
     $acak = array_rand($rsponsor,1) ;
     $id=$rsponsor[$acak];
	 
	 $sqlc = mysql_query("SELECT usrd FROM configuration WHERE id='1'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){
 $ucd = $rowc['usrd'];
 if (!$ucd){
 $usernmc = $id;
 } else {
 $usernmc = $ucd;
 }
}
     $seleksi = mysql_query( "SELECT username, nama, email, kota, hp FROM member WHERE username='$usernmc'" );
     $data = mysql_fetch_array( $seleksi );
   
    //mysql_query("UPDATE member SET hits=hits+1 WHERE username='$data[1]'") or error( mysql_error() );
	if (!isset($_COOKIE['hits'])) {
	mysql_query("UPDATE member SET hits=hits+1 WHERE username='$data[1]'") ;
	setcookie("hits", "yes", time() + 31536000, "/", "", "0");
	}
	
	$_SESSION["sponsor"] = $data[0];
	$_SESSION["nama"] = $data[1];
	$_SESSION["email"] = $data[2];
	$_SESSION["kota"] = $data[3];
	$_SESSION["hp"] = $data[4];
	$_SESSION["random"] = "1";

    return true;
   }			
}
?>