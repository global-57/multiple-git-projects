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
        Generation
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Generation</li>
      </ol>
    </section>


    <section class="content">
<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["status0"]."</div>";
}else{
?>


  <div class="row">
            <div class="col-md-6" style="margin-bottom:15px;">
                <div class="input-group p-b-10">
                    <input id="ref_url" class="form-control" name="ref_url" type="text" value="https://<?php echo $domain; ?>/?<?php echo $reffa; ?>=<?php echo $user_session; ?>">
                    <span class="input-group-btn">
                        <button id="copy-ref-url" class="btn btn-<?php echo $buttone; ?>" type="button" style="height:46px;">Copy Reff URL</button>
                    </span>
                </div>
                </div>

            </div>



<div class="row">
            	
                <div class="col-md-12">
                     <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Generation</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">     


                    
                    
              
                    
   <div class="accordion" id="accordionExample">
                          
    <?	
$user = $_GET['user'];
if($user){
$user_session = $user;
}else{
$user_session = $user_session;
}

	//echo "<div id='module'><h3>NETWORK TREE</h3><p>&nbsp;</p>";
	$tkt = "10";
	$tktkt = explode("|", $tkt);
	$btslevele=$tktkt[0];
		$lv=$btslevele;
		for($i=0;$i<$lv;$i++) {
			$j = $i + 1;
			//$db->select("username", "upline", "upline$i='$mid'");
			$ja = $db->jmlmember($user_session, "a.status=1 and b.upline$i='$user_session'"); //jml mbr aktif per level
			$jf = $db->jmlmember($user_session, "a.status=0 and blokir=0 and b.upline$i='$user_session'"); //jml mbr free per level
			$jb = $db->jmlmember($user_session, "a.blokir=1 and b.upline$i='$user_session'"); //jml mbr blokir per level
			
			if($ja > 0 or $jf > 0) {
?>    
                                
                              		
                                     <div class="box">
    <div class="box-header with-border" id="heading<?= $j; ?>">
       <h3 class="box-title">
        <button class="btn btn-<?php echo $buttone; ?> btn-sm" type="button" data-toggle="collapse" data-target="#collapse<?= $j; ?>" aria-expanded="true" aria-controls="collapse<?= $j; ?>">
          <i class="fa fa-sitemap"></i>&nbsp;Level <?= $j; ?> Details
        </button>
      </h3><hr style="margin-top:10px; margin-bottom:0px;">
    </div>
                                    
                                    
                                     <div id="collapse<?= $j; ?>" class="collapse" aria-labelledby="heading<?= $j; ?>" data-parent="#accordionExample">
      <div class="card-body">
                                    
                                            <?
					 
		//$csq=myfetch("SELECT konten FROM konten WHERE url='caragabung'");
		//echo $db->jumlahdl($mid, "1");
		$db->select("a.username, a.nama, a.status, a.blokir, a.hp, a.email, a.tglaktif, a.upline, b.sponsor, b.posisi, a.act", "member as a inner join upline as b on a.username=b.username", "b.upline$i='$user_session'");
		
		?>
                                     
                                        
                                         <!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-inverse">
                       <div class="table-responsive">
            <table class="table table-hover mb-0 table_s1 " id="data-table" width="100%" cellspacing="0"> 
							<thead>
							<tr>
							 <th><strong>#</strong></font></th>
        <th><strong>Username</strong></font></th>
        <th><strong>Name</strong></font></th>
        <th><strong>Sponsor</strong></font></th>
        <th><strong>Upline</strong></font></th>
        <th><strong>Status</strong></font></th>
							</tr>
							</thead>
							<tbody>
 <?
	$ada = $db->num_rows();
	if($ada > 0) {
   		$n=1;
		while($row = $db->fetch_row()) {
			
			if($row[9] == "L2") {
				$pose = "Kanan";	
				} else {
				$pose = "Kiri";		
				}
			if(is_odd($n) == 0) {
				$class = "even";
			} else {
				$class = "odd";
			} 	
			
			if($row[10] > 0) {
				$stylec="";
				$status = "<button class='btn btn-success btn-xs' type='button'>Aktif</button>";
			} else {
				$status = "<button class='btn btn-danger btn-xs' type='button'>Belum Deposit</button>";
				$stylec=" style='color:#F00;'";
			}		
   ?>  
   
	  <tr class="<?php echo $class; ?>"> 
        <td<?php echo $stylec; ?>><?= $n; ?></td>
        <td<?php echo $stylec; ?>><?= $row[0]; ?></td>
        <td<?php echo $stylec; ?>><?= $row[1]; ?></td>
        <td<?php echo $stylec; ?>><?= $row[8]; ?></td>
        <td<?php echo $stylec; ?>><?= $row[7]; ?></td>
       
        <td<?php echo $stylec; ?> align="center"><?= $status; ?></td>
      </tr>
	 <?
	 	$n++;
		 }
	} else {	 
	 ?> 
	 <tr>
            <td colspan="6" align="center"><strong>No Data.</strong></td>
    </tr>
	<?
	}
	?>        
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
					</div>
					</div>
					</div>
			<!-- END PAGE CONTENT -->    
			
                   
	  <?
			  }else{
				echo "";  
			  }
			  }
	?>
	 
</div>	
</div>
</div>
</div>
           
        
           
           
           
           
        
                      
                            
                             <div class="modal fade" id="ajax" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											<img src="../assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
											<span>
											&nbsp;&nbsp;Loading... </span>
										</div>
									</div>
								</div>
							</div>
                    <?php } ?>
</section>