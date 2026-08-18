<?php
ob_start(); 
error_reporting(0);
(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/classMySQL.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
(@include ('../dt_page/function.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Function failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
if($lang == 1){
(@include ('../dt_page/langid.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Language file not found, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
}else{
(@include ('../dt_page/langen.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Language file not found, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
}
require '../dt_page/mail/PHPMailerAutoload.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="tema1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="tema1/css/icons.css">
  <link href="theme/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="tema1/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="tema1/plugins/morris/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="tema1/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="tema1/css/responsive.css">
</head>
<body style="font-size:12px; ">
<?php 
if(isset($_GET["u"])){ 
?>


    <script src="tema1/js/jquery-min.js"></script>   
 <div class="row">
  
    <div class="col-md-6 col-lg-6">
  <div class="card-body">
  
  
<div id="div_element"></div>     
  </div></div>
  
    <div class="col-md-12">
                   
                    <div class="card-body">   
                    
      
               
                    
                     
  
              <div class="table-responsive">
            <table class="table table-striped mb-0 table_s1 " id="data-tables" width="100%" cellspacing="0">



    
                    
              <thead>
                <tr>
                 <th>Date</th> 
                        <th>No</th> 
                        <th>Package</th> 
                        <th>Market</th> 
                        <th>Amount</th> 
                        <th>End</th> 
                        <th>Status</th> 
                        <th>Win/Lost</th>
                        <th>Rate</th>
                        <th>Rate End</th>
                </tr>
              </thead>
              <tbody>
     <?
	 
	$db->select("id, username, amount, tgl, timestake, status, kode, pilihan, lostwin, tglstop, wine, prosene, ratein, rateout, market, curr, symarket", "lostwin", "username='".$_GET["u"]."'", "id desc");
	
	
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
		$sts = "<span class='btn btn-success' style='font-size:10px;'><i class='fa fa-check'></i>&nbsp;WIN</span>";
		$jmlgette = rupiah($row[10])." ".$row[11]."%";
		$rateends = $ratenex;
	}else if($row[8] == 2) {
		$sts = "<span class='btn btn-danger' style='font-size:10px;'><i class='fa fa-ban'></i>&nbsp;LOST</span>";
		$jmlgette = rupiah($row[10])." ".$row[11]."%";
		$rateends = $ratenex;
	}else{
		$sts = "<span class='btn btn-warning' style='font-size:10px;'><i class='fa fa-spinner'></i>&nbsp;PENDING</span>";
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
   $("#div_element").load('lihathome.php?id=<?php echo $idata; ?>');  

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

<?php
} else {
echo "<div class='alert errorx notificationx' align='left'>Data Transaction Not Found</div>";	
}
?>
    <script src="tema1/js/jquery-min.js"></script>
    <script src="theme/vendor/datatables/jquery.dataTables.js"></script>
    <script src="theme/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="theme/js/admin-datatables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#data-tables').dataTable({
          'order': [[3, 'asc']]
        })
      })
    </script>   
</body>
</html>
<?php ob_flush(); ?>