<?php 
include("../dt_page/lic.php");
$lic=$license;if(!$lic){die();}
$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){die();}
date_default_timezone_set("Asia/Jakarta");
include("../dt_page/common.php");
include("../dt_page/classMySQL.php");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
include("../dt_page/function.php");





$user_session = $_COOKIE["user"];
$id = $_GET['id'];


if($_GET['cr']){
							$getcre="?cr=".$_GET['cr']."";
						}else{
							$getcre="";
						}
						
$queryceklostwine = "SELECT * FROM lostwin WHERE username='".$user_session."' and id='".$id."'"; 
$resultlostwine = mysql_query($queryceklostwine);
$numclostwine = mysql_num_rows($resultlostwine);
$rowclostwine = mysql_fetch_array($resultlostwine);
$tglstake=$rowclostwine['tgl'];
$tglstopstake=$rowclostwine['tglstop'];
$amountstake=$rowclostwine['amount'];
$timestake=$rowclostwine['timestake'];
$usernamestake=$rowclostwine['username'];
$kodestake=$rowclostwine['kode'];
$pilihanstake=$rowclostwine['pilihan'];
$lostwinstake=$rowclostwine['lostwin'];
$winestake=$rowclostwine['wine'];
$prosenestake=$rowclostwine['prosene'];
$rateinstake=$rowclostwine['ratein'];
$rateoutstake=$rowclostwine['rateout'];
$marketenya=$rowclostwine['market'];
$sysmarketenya=$rowclostwine['symarket'];
$currenya=$rowclostwine['curr'];
$freenyac=$rowclostwine['free'];

  $kodestakex = $rowclostwine['kode']."win";
  


if($rateoutstake < $rateinstake){
		$ratenex="<font color=#FF2828'><i class='fa fa-arrow-circle-down'></i>&nbsp;".$currenya($rateoutstake)."</font>";
	}else{
		$ratenex="<font color='#00CC33'><i class='fa fa-arrow-circle-up'></i>&nbsp;".$currenya($rateoutstake)."</font>";
	}

if($lostwinstake == 1) {
		$sts = "<span class='label label-success' style='color: #FFF;'><i class='fa fa-check-circle-o'></i>&nbsp;WIN</span>";
		$jmlgette = rupiah($winestake)." (".$prosenestake."%)";
		$rateends = $ratenex;
	}else if($lostwinstake == 2) {
		$sts = "<span class='label label-danger' style='color: #FFF;'><i class='fa fa-ban'></i>&nbsp;LOST</span>";
		$jmlgette = rupiah($winestake)." (".$prosenestake."%)";
		$rateends = $ratenex;
	}else{
		$sts = "<span class='label label-warning' style='color: #111;'><i class='fas fa-spinner fa-spin'></i>&nbsp;PENDING</span>";
		$jmlgette = "---";
		$rateends = "---";
	}		

if($pilihanstake == "buy") {
$planestake="<span class='label label-success' style='color: #FFF;'>".strtoupper($pilihanstake)." ".strtoupper($timestake)."</span>";
}else{
$planestake="<span class='label label-danger' style='color: #FFF;'>".strtoupper($pilihanstake)." ".strtoupper($timestake)."</span>";
}

						?> 
                
                
        
       
        
         <div class="wrapper" align="center">
       <?php  if($tglstopstake > $clientdate){ ?>
               
        <?php } else { ?>  
        <?php if($lostwinstake == 1){ ?> 
         
        
        <div class="controls-row"><div class='alert alert-success'><h4 style="font-weight:bold;">You WIN <?php echo $jmlgette; ?></h4></div></div>
        
        
        <?php }else{ ?>
        <div class="controls-row"><div class='alert alert-danger'><h4 style="font-weight:bold;">You LOSE <?php echo $jmlgette; ?></h4> </div></div>
        
        <?php } ?>
        <?php } ?>
       
        </div>
        
       
                       
                                    <table class="table table-top-campaign">
                                                        <tbody><tr>
                                                            <td width="200">Stake date : </td><td class="text-right"><strong><?php echo formatglx($tglstake); ?></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Market : </td><td class="text-right"><strong><?php echo $marketenya; ?></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount Stake : </td><td class="text-right"><strong><?php echo rupiah($amountstake); ?></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type : </td><td class="text-right"><strong><?php echo $planestake; ?></strong></td>
                                                        </tr>
                                                         <tr>
                                                            <td>Date End : </td><td class="text-right"><strong><?php echo formatglx($tglstopstake); ?></strong></td>
                                                        </tr>
                                                          <tr>
                                                            <td>Rate Stake : </td><td class="text-right"><strong><?php echo $currenya($rateinstake); ?></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rate End : </td><td class="text-right"><?php echo $rateends; ?></td>
                                                        </tr>
                                                          <tr>
                                                            <td>Status : </td><td class="text-right"><?php echo $sts; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Win/Lost : </td><td class="text-right"><?php echo $jmlgette; ?></td>
                                                        </tr>
                                                       
                                                    </tbody></table>

                                                  <br /><br />  
                                                
                                              
                                                                