<?
error_reporting(0);
include("../dt_page/lic.php");
$lic=$license;if(!$lic){die();}
$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){die();}
date_default_timezone_set("Asia/Jakarta");
include("../dt_page/common.php");

include("../dt_page/classMySQL.php");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
include("../dt_page/function.php");
$user_session = $_COOKIE["user"];
$limit = $_GET['limit'];
$db->select("id, username, nama, tgl, timestake, tglstop, amount, kode, pilihan, status, lostwin, wine, prosene, ratein, rateout, market, symarket, curr", "lostwin", "username='$user_session'", "id desc limit $limit");


while ($row = $db->fetch_row()) {
$curre=$row[17];	
$minus = "";
 if ($row[10] == 1) {
        $sts = "<font color='#008040'><i class='lni-stats-up'></i>&nbsp;+&nbsp;".rupiah($row[11])."</font>";
		$minus = "+";
    } else if ($row[10] == 2) {
        $sts = "<font color=#D50000'><i class='lni-stats-down'></i>&nbsp;-&nbsp;".rupiah($row[11])."</font>";
		$minus = "-";
    } else {
        $sts = "<font color='#FF6600'><i class='fa fa-spinner'></i>&nbsp;Pending</font>";
		
    }


    if ($row[10] == 0) {
		$ratenex = "<font color='#FF6600'><i class='fa fa-spinner'></i>&nbsp;Pending</font>";
	}else{
    if($row[14] < $row[13]){
		$ratenex="<font color=#D50000'><i class='fa fa-arrow-circle-down'></i>&nbsp;".$curre($row[14])."</font>";
	}else{
		$ratenex="<font color='#008040'><i class='fa fa-arrow-circle-up'></i>&nbsp;".$curre($row[14])."</font>";
	}}
	
	  if($row[8]=="sell"){
		$plihane="<font color=#D50000'>".strtoupper($row[8])."</font>";
	}else{
		$plihane="<font color='#008040'>".strtoupper($row[8])."</font>";
	}

$idata=$row[0];	
$tglstopstake=$row[5];
$tglstake=$row[3];	
$start    = strtotime($tglstake); 
                        $finish   = strtotime($tglstopstake);
                        $diff     = $finish - $start;
$progress = time() - $start;
                        $procent  = ($progress / $diff)*100;
                        $width    = round($procent);
                        if($width >=100){
                        $prosents="100";
                        }else if($width<=0){
                        $prosents="0";
                        }else{
                        $prosents=$width;
                         } 	
    ?>				
    <tr> 
       
        <td align="center"><?php echo $row[15]; ?><br /><?php echo $plihane; ?></td>
		 <td align="center"><?php echo rupiah($row[6]); ?></td>
        
        <td align="right"><?php echo $sts; ?></td>
        <td align="center"><div id="submit<?php echo $idata; ?>"><button class='btn btn-dark' style="font-size:10px;"><i class='fa fa-search'></i>&nbsp;Detail</button></div>
        <script> 
$('#submit<?php echo $idata; ?>').click(function(event){ 
   $("#div_element").load('lihathome.php?id=<?php echo $idata; ?>');  

}); 
</script> 
        </td>
    </tr>
<?php } ?> 