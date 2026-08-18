<?php
(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
$lic=$license;if(!$lic){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
   
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        History
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
				
<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["status0"]."</div>";
}else{
?>


    <script src="tema1/js/jquery-min.js"></script>          


           
<div id="div_element"></div>     


  <div class="row">
            	<div class="col-md-12">
                
                  <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title"><?php if($co){ ?>My Trade <?php echo $co; ?>
                            
        <?php } else { ?> 
              My Trade
        <?php } ?>  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">            
                  
                  
                                                <thead class="bg-primary-600">



                <tr>
                 <th>Date</th> 
                        <th>No</th> 
                        <th>Package</th> 
                        <th>Market</th> 
                        <th>Amount</th> 
                        <th>Date End</th> 
                        <th>Status</th> 
                        <th>Win/Lost</th>
                        <th>Rate Trade</th>
                        <th>Rate End</th>
                </tr>
              </thead>
              <tbody>
     <?
	 
	 if($co){
	$db->select("id, username, amount, tgl, timestake, status, kode, pilihan, lostwin, tglstop, wine, prosene, ratein, rateout, market, curr, symarket", "lostwin", "username='$user_session' and kode='$co'", "id desc");
	 }else{
	$db->select("id, username, amount, tgl, timestake, status, kode, pilihan, lostwin, tglstop, wine, prosene, ratein, rateout, market, curr, symarket", "lostwin", "username='$user_session'", "id desc");
	 }
	
		while($row=$db->fetch_row()) {
			
			
			if(is_odd($nom) == 0) {
				$class = "even";
			} else {
				$class = "odd";
			} 	
			
			
	$curre=$row[15];
	$symarket=$row[16];
	$idata=$row[0];
			
	if($row[13] < $row[12]){
		$ratenex="<font color=#FF0000'><i class='fa fa-arrow-circle-down'></i>&nbsp;".$curre($row[13])."</font>";
	}else{
		$ratenex="<font color='#00CC00'><i class='fa fa-arrow-circle-up'></i>&nbsp;".$curre($row[13])."</font>";
	}
	
	if($row[8] == 1) {
		$sts = "<span class='btn btn-success' style='font-size:12px;'><i class='fa fa-check'></i>&nbsp;WIN</span>";
		$jmlgette = rupiah($row[10])." ".$row[11]."%";
		$rateends = $ratenex;
	}else if($row[8] == 2) {
		$sts = "<span class='btn btn-danger' style='font-size:12px;'><i class='fa fa-ban'></i>&nbsp;LOST</span>";
		$jmlgette = rupiah($row[10])." ".$row[11]."%";
		$rateends = $ratenex;
	}else{
		$sts = "<span class='btn btn-warning' style='font-size:12px;'><i class='fa fa-spinner'></i>&nbsp;PENDING</span>";
		$jmlgette = "---";
		$rateends = "---";
	}		
?>				
                             
                    <tr> 
                            
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            <td><?php echo strtoupper($row[7]); ?> <?php echo strtoupper($row[4]); ?></td>
                            <td><?php echo $row[14]; ?></td>
                            <td><?php echo rupiah($row[2]); ?></td>
                            <td><?php echo $row[9]; ?></td>
                            <td><div id="submit<?php echo $idata; ?>"><?php echo $sts; ?></div>
                             <script> 
$('#submit<?php echo $idata; ?>').click(function(event){ 
   $("#div_element").load('lihat.php?id=<?php echo $idata; ?>');  

}); 
</script> 
                            </td>
                            <td><?php echo $jmlgette; ?></td>
                            
                            <td><?php echo $curre($row[12]); ?></td>
                            <td><?php echo $rateends; ?></td>
                          
                        </tr>
                        <?php } ?>
              </tbody>
            </table>
						</div>
							</div>
							</div>
							</div>
							</div>




                        <?php } ?>
</section>
    <!-- /.content -->