<?php
function anti_injection($string) {
$string = trim($string); 
$string = stripslashes($string);
$string = strip_tags($string);
$string = preg_replace("/(show tables|drop table|alter table|#|\*|--|'|;|\\\\)/",'',$string);
return $string;
}
$today = date("Y-m-d H:i:s");
if(isset($_GET["u"])){ $u = anti_injection(base64_decode($_GET["u"])); }
if(isset($_GET["d"])){ $d = anti_injection($_GET["d"]); }
include "../dt_page/common.php";
include "../dt_page/classMySQL.php";
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
$db->select("kode, hargab, hit, download, harga, file, nama", "product3", "kode='".mysql_real_escape_string($d)."'");
$row = $db->fetch_row();
if($db->num_rows() > 0){
$newhit = $row[2] + 1;
$newdown = $row[3] + 1;
$db->update("product3", "hit='$newhit', download='$newdown'", "kode='".mysql_real_escape_string($d)."'");
$db->insert("product3_down", "", "'', '".$row[0]."', '".$row[6]."', '".$u."', '".$today."'");
if($row[1] == 1){
header("location: ../userfiles/".$row[5]."");
exit;
}else{
header("location: ".$row[4]."");
exit;
}
}else {
header("location:index.php?go=download&result=nodata");
exit;
}
?>