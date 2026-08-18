<?php 
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
		$ratenex="<font color=#DF0000'><i class='fa fa-arrow-circle-down'></i>&nbsp;".$currenya($rateoutstake)."</font>";
	}else{
		$ratenex="<font color='#008040'><i class='fa fa-arrow-circle-up'></i>&nbsp;".$currenya($rateoutstake)."</font>";
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
		$sts = "<span class='label label-warning' style='color: #111;'><i class='fa fa-spinner'></i>&nbsp;PENDING</span>";
		$jmlgette = "---";
		$rateends = "---";
	}		

if($pilihanstake == "buy") {
$planestake="<span class='label label-success' style='color: #FFF;'>".strtoupper($pilihanstake)." ".strtoupper($timestake)."</span>";
}else{
$planestake="<span class='label label-danger' style='color: #FFF;'>".strtoupper($pilihanstake)." ".strtoupper($timestake)."</span>";
}

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
                 
              <script>
function myfunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>
               <!-- begin row -->
			<div class="row" id="myDIV">
				<!-- begin col-6 -->
                
					
  <div class="col-md-12 col-lg-12">
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false">
							
								<header>
                                <h2>Stake [<?php echo $kodestake;?>] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" data-click="panel-remove" onclick="myfunction()"><button type="button" class="btn btn-danger btn btn-xs" style="margin-top:15px;">Close</button></a></h2> 
								
				
								</header>
								<div>
									<div class="jarviswidget-editbox">
									</div>
									<div class="widget-body no-padding">
                
                
               
                	<div align="center">
   
  
  <script type="text/javascript" src="assets/js/functions.js"></script>
                        
                        <script type="text/javascript" src="assets/count/dscountdown.js"></script>
                        <link rel='stylesheet' href='assets/count/dscountdown.css' type='text/css' media='all' />
                        
                       <script>
			jQuery(document).ready(function($){
				
				$('.demo4').dsCountDown({
				    startDate: new Date("<?php echo formatglvv($clientdate); ?>"),
					endDate: new Date("<?php echo formatglvv($tglstopstake); ?>"),
					theme: '',
					titleDays: 'd',
					titleHours: 'h',
					titleMinutes: 'm',
					titleSeconds: 's'
					<?php if($lostwinstake == 0) { ?>
					,onFinish: function(){ 
					$.ajax({
			type: 'GET',
			url: 'get_update.php',
			
			beforeSend: function(){
			$("#loader").show();
   }
			});
			setTimeout(function(){
			$("#divider").hide();	
			$("#divide").load('lihathome2.php?id=<?php echo $id; ?>')
			}, 5000);
					<?php } ?>
					}
				});
			
				
			});
		</script>     
                  <div id='divide'></div>
        <div id='divider'>
         <?php  if($tglstopstake > $clientdate){ ?>
         <br />
        <h4 style="margin-bottom:20px; color:#444; font-weight:bold;">Time Remaining</h4>   
        <h3 style="color:#E60000; margin-top:-10px; font-weight:bold;"><div class="demo4"></div></h3> 
        <div id='loader' style='display: none;margin-top:10px; margin-bottom:10px;'><img src='loader.gif' width='60px' height='60px'></div>
       
        <?php } ?>
        
        
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
                                                
                                                </div>
							</div>
							</div>
							</div>            
                                                         