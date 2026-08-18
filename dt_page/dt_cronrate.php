<?php
date_default_timezone_set('America/New York');
include("common.php");
include("classMySQL.php");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
include("function.php");
require_once('class.phpmailer.php');
include("class.smtp.php");
mysql_connect($server_name, $userdb, $passdb) or die ("Could not connect to database");
mysql_select_db($databasename);


$getbtctousd = file_get_contents('https://www.bitstamp.net/api/ticker/btcusd');
$my_btctousd = json_decode($getbtctousd, true);
$datagetbtctousd = $my_btctousd['last'];
if(!empty($datagetbtctousd)){
mysql_query("UPDATE configurationx SET kursbtc='".$datagetbtctousd."' WHERE id='1'");	
}
$getbtctodoge = file_get_contents('https://api.cryptonator.com/api/ticker/doge-usd');
$my_btctodoge = json_decode($getbtctodoge, true);
$datagetbtctodoge = $my_btctodoge['ticker']["price"];
if(!empty($datagetbtctodoge)){
mysql_query("UPDATE configurationx SET kursdoge='".$datagetbtctodoge."' WHERE id='1'");	
}
$getbtctoeth = file_get_contents('https://api.bittrex.com/api/v1.1/public/getticker?market=BTC-ETH');
$my_btctoeth = json_decode($getbtctoeth, true);
$datagetbtctoeth = $my_btctoeth['result']["Last"];
if(!empty($datagetbtctoeth)){
mysql_query("UPDATE configurationx SET kurseth='".$datagetbtctoeth."' WHERE id='1'");	
}
$getbtctoltc = file_get_contents('https://api.bittrex.com/api/v1.1/public/getticker?market=BTC-LTC');
$my_btctoltc = json_decode($getbtctoltc, true);
$datagetbtctoltc = $my_btctoltc['result']["Last"];
if(!empty($datagetbtctoltc)){
mysql_query("UPDATE configurationx SET kursltc='".$datagetbtctoltc."' WHERE id='1'");	
}
$getbcdusd = file_get_contents('https://www.cryptonator.com/api/ticker/bcd-usd');
$my_bcdusd = json_decode($getbcdusd, true);
$datagetbcdusd = $my_bcdusd['ticker']["price"];
if(!empty($datagetbcdusd)){
mysql_query("UPDATE configurationx SET kursbcd='".$datagetbcdusd."' WHERE id='1'");	
}
$getbchusd = file_get_contents('https://www.cryptonator.com/api/ticker/bch-usd');
$my_bchusd = json_decode($getbchusd, true);
$datagetbchusd = $my_bchusd['ticker']["price"];
if(!empty($datagetbchusd)){
mysql_query("UPDATE configurationx SET kursbch='".$datagetbchusd."' WHERE id='1'");	
}
$getbtgusd = file_get_contents('https://www.cryptonator.com/api/ticker/btg-usd');
$my_btgusd = json_decode($getbtgusd, true);
$datagetbtgusd = $my_btgusd['ticker']["price"];
if(!empty($datagetbtgusd)){
mysql_query("UPDATE configurationx SET kursbtg='".$datagetbtgusd."' WHERE id='1'");	
}
$getdashusd = file_get_contents('https://www.cryptonator.com/api/ticker/dash-usd');
$my_dashusd = json_decode($getdashusd, true);
$datagetdashusd = $my_dashusd['ticker']["price"];
if(!empty($datagetdashusd)){
mysql_query("UPDATE configurationx SET kursdash='".$datagetdashusd."' WHERE id='1'");	
}
$getxlmusd = file_get_contents('https://www.cryptonator.com/api/ticker/xlm-usd');
$my_xlmusd = json_decode($getxlmusd, true);
$datagetxlmusd = $my_xlmusd['ticker']["price"];
if(!empty($datagetxlmusd)){
mysql_query("UPDATE configurationx SET kursxlm='".$datagetxlmusd."' WHERE id='1'");	
}
$getxrpusd = file_get_contents('https://www.cryptonator.com/api/ticker/xrp-usd');
$my_xrpusd = json_decode($getxrpusd, true);
$datagetxrpusd = $my_xrpusd['ticker']["price"];
if(!empty($datagetxrpusd)){
mysql_query("UPDATE configurationx SET kursxrp='".$datagetxrpusd."' WHERE id='1'");	
}
$getxauusd = file_get_contents('https://api.finage.co.uk/last/forex/XAUUSD?apikey=API_KEY49RQAWO4YGUWKY17HNZFE3RBXMJWJW7Z');
$my_xautousd = json_decode($getxauusd, true);
$datagetxautousd = $my_xautousd['bid'];
if(!empty($datagetxautousd)){
mysql_query("UPDATE configurationx SET kursxau='".$datagetxautousd."' WHERE id='1'");	
}
$geteurusd = file_get_contents('https://www.cryptonator.com/api/ticker/eur-usd');
$my_eurusd = json_decode($geteurusd, true);
$datageteurusd = $my_eurusd['ticker']["price"];
if(!empty($datageteurusd)){
mysql_query("UPDATE configurationx SET kurseur='".$datageteurusd."' WHERE id='1'");	
}
$geteurgbp = file_get_contents('https://www.cryptonator.com/api/ticker/eur-gbp');
$my_eurgbp = json_decode($geteurgbp, true);
$datageteurgbp = $my_eurgbp['ticker']["price"];
if(!empty($datageteurgbp)){
mysql_query("UPDATE configurationx SET kursgbp='".$datageteurgbp."' WHERE id='1'");	
}
$getgbpusd = file_get_contents('https://www.cryptonator.com/api/ticker/gbp-usd');
$my_gbpusd = json_decode($getgbpusd, true);
$datagetgbpusd = $my_gbpusd['ticker']["price"];
if(!empty($datagetgbpusd)){
mysql_query("UPDATE configurationx SET kursgbpus='".$datagetgbpusd."' WHERE id='1'");	
}
$getusdtojpy = file_get_contents('https://www.cryptonator.com/api/ticker/usd-jpy');
$my_usdtojpy = json_decode($getusdtojpy, true);
$datagetusdtojpy = $my_usdtojpy['ticker']["price"];
if(!empty($datagetusdtojpy)){
mysql_query("UPDATE configurationx SET kursjpy='".$datagetusdtojpy."' WHERE id='1'");	
}
$geteurtojpy = file_get_contents('https://www.cryptonator.com/api/ticker/eur-jpy');
$my_eurtojpy = json_decode($geteurtojpy, true);
$datageteurtojpy = $my_eurtojpy['ticker']["price"];
if(!empty($datageteurtojpy)){
mysql_query("UPDATE configurationx SET kurseurjpy='".$datageteurtojpy."' WHERE id='1'");	
}
$getusdtocad = file_get_contents('https://www.cryptonator.com/api/ticker/usd-cad');
$my_usdtocad = json_decode($getusdtocad, true);
$datagetusdtocad = $my_usdtocad['ticker']["price"];
if(!empty($datagetusdtocad)){
mysql_query("UPDATE configurationx SET kursusdcad='".$datagetusdtocad."' WHERE id='1'");	
}
$getgbptojpy = file_get_contents('https://www.cryptonator.com/api/ticker/gbp-jpy');
$my_gbptojpy = json_decode($getgbptojpy, true);
$datagetgbptojpy = $my_gbptojpy['ticker']["price"];
if(!empty($datagetgbptojpy)){
mysql_query("UPDATE configurationx SET kursgbpjpy='".$datagetgbptojpy."' WHERE id='1'");	
}
$getaudtousd = file_get_contents('https://www.cryptonator.com/api/ticker/aud-usd');
$my_audtousd = json_decode($getaudtousd, true);
$datagetaudtousd = $my_audtousd['ticker']["price"];
if(!empty($datagetaudtousd)){
mysql_query("UPDATE configurationx SET kursaud='".$datagetaudtousd."' WHERE id='1'");	
}
$getbnbtousd = file_get_contents('https://api.cryptonator.com/api/ticker/bnb-usd');
$my_bnbtousd = json_decode($getbnbtousd, true);
$datagetbnbtousd = $my_bnbtousd['ticker']["price"];
if(!empty($datagetbnbtousd)){
mysql_query("UPDATE configurationx SET kursbnb='".$datagetbnbtousd."' WHERE id='1'");	
}
mysql_close();
?>