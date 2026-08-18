<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
 
		
<div class="container-main-div  pb-5">
			
<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0"> Balance </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
	<div class="btn-group btn-group-sm w-100"  style="height: 25px;"   role="group">
		<a class="btn btn-success"  style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;"  href="index.php?go=walletcash" ><i class="la la-lock mr-1"></i>Real Balance</a>
		<a class="btn btn-danger"   style="height: 25px;padding-top:0px; padding-bottom:0px; display:flex; align-items:center;" href="index.php?go=walletcash&page=free" ><i class="la la-lock mr-1"></i>Free Balance</a>
	</div>
	</div>
</div> 
<?php if (isset($_GET['page']) && $_GET['page'] == "free") {?>	

<p class="mb-0"> Your Available Free Balance<br /> 
<font style="font-size:24px; color:#F00;"><?  $saldoawalete = $db->myswalet($user_session);
			 $pendingawalete = $db->myswaletpending($user_session);
			 $totalawalete = $saldoawalete-$pendingawalete; 
			 if($totalawalete > 0){ echo rupiah($totalawalete); }else{ echo rupiah(0);} ?></font>
</p> 
<?php } else { ?>
<p class="mb-0"> Your Available Real Balance<br /> 
<font style="font-size:24px; color:#0F0;"><?  $saldoawalete = $db->mycwalet($user_session);
			 $pendingawalete = $db->mycwaletpending($user_session);
			 $totalawalete = $saldoawalete-$pendingawalete; 
			 if($totalawalete > 0){ echo rupiah($totalawalete); }else{ echo rupiah(0);} ?></font>
</p> 
<?php } ?>	
<hr>

<?php if (isset($_GET['page']) && $_GET['page'] == "free") {?>	
<div style="max-height:500px; overflow:auto;">
 <table id="example" width="100%" style="font-size:14px;">

                        <tbody>
                       <?


	$db->select("kode, uraian, username, jumlah, tujuan, tgl, status, tglproses, accid, accid2", "dataswalet", "username='$user_session' or tujuan='$user_session'", "tgl desc");
	
		while($row=$db->fetch_row()) {
			if($row[2] == "admin-1") {
				$user = "admin";
			} else {
				$user = $row[2];
			}		
			if($row[2] == "administrator" || $row[4] == "administrator"){
				$ket = 	"$row[1]";
		}else{
		if($row[4] == $user_session) {
				$ket = "$row[1] (Credit ".$row[2].")";
			} else {
				$ket = 	"$row[1] (Debit ".$row[4].")";
			}	
			}
			if($row[2] == $user_session) {
				$type = "<font color='#FF0000'>Debet</font>";
			} else {
				$type = "<font color='#00FF00'>Credit</font>";
			}	
			if(is_odd($nom) == 0) {
				$class = "tblrow_ganjil";
			} else {
				$class = "tblrow_genap";
			} 	
			if($row[7] == "0000-00-00 00:00:00"){
		$dtpros = "<font color='#00FF00'><i class='fa fa-check'></i>&nbsp;Done</font>";
	}else{
		$dtpros = "<font color='#00FF00'><i class='fa fa-check'></i>&nbsp;Done</font>";
	}
			if($row[6] > 0) {
				$st = $dtpros;
			} else {
				$st = "<font color='#FF6600'><i class='fa fa-spinner fa-spin'></i>&nbsp;Waiting</font>";
			}	
			
			if($row[2] == $user_session) {
				$style = "<font color='#FF6600'>";
			} else {
				$style = "<font>";
			}	
			
			
				
?>
       
 <div class="div-card mb-2 "  style="min-height:unset!important;" >	
				<small><font color='#999'>Date :</font> <?= $row[5]; ?> </small> 
				<p class="mb-0">
					<font color='#999'>Type :</font> <?php echo $type; ?> <br /> 
					<font color='#999'>Amount :</font> <?php echo rupiah($row[6]); ?><br /> 
					<font color='#999'>Trx :</font> <?= $ket; ?> <br /> 
					<span> <font color='#999'>Status :</font> <?php echo $st;?>  	
                        </span> 
				</p> 
			</div>
	<?
		}
	?>
                        </tbody>
                    </table>





<?php } else { ?>

<div style="max-height:500px; overflow:auto;">
 
 
 
 
   <table id="example" width="100%" style="font-size:14px;">

                        <tbody>
                       
                       
                      
                       
                       
                       <?


	$db->select("kode, uraian, username, jumlah, tujuan, tgl, status, tglproses, accid, accid2", "datacwalet", "username='$user_session' or tujuan='$user_session'", "tgl desc");
	
		while($row=$db->fetch_row()) {
			if($row[2] == "admin-1") {
				$user = "admin";
			} else {
				$user = $row[2];
			}		
			if($row[2] == "administrator" || $row[4] == "administrator"){
				$ket = 	"$row[1]";
		}else{
		if($row[4] == $user_session) {
				$ket = "$row[1] (Credit ".$row[2].")";
			} else {
				$ket = 	"$row[1] (Debit ".$row[4].")";
			}	
			}
			if($row[2] == $user_session) {
				$type = "<font color='#FF0000'>Debet</font>";
			} else {
				$type = "<font color='#00FF00'>Credit</font>";
			}	
			if(is_odd($nom) == 0) {
				$class = "tblrow_ganjil";
			} else {
				$class = "tblrow_genap";
			} 	
			if($row[7] == "0000-00-00 00:00:00"){
		$dtpros = "<font color='#00FF00'><i class='fa fa-check'></i>&nbsp;Done</font>";
	}else{
		$dtpros = "<font color='#00FF00'><i class='fa fa-check'></i>&nbsp;Done</font>";
	}
			if($row[6] > 0) {
				$st = $dtpros;
			} else {
				$st = "<font color='#FF6600'><i class='fa fa-spinner fa-spin'></i>&nbsp;Waiting</font>";
			}	
			
			if($row[2] == $user_session) {
				$style = "<font color='#FF6600'>";
			} else {
				$style = "<font>";
			}		
			
		
?>


 <div class="div-card mb-2 "  style="min-height:unset!important;" >	
				<small><font color='#999'>Date :</font> <?= $row[5]; ?> </small> 
				<p class="mb-0">
					<font color='#999'>Type :</font> <?php echo $type; ?> <br /> 
					<font color='#999'>Amount :</font> <?php echo rupiah($row[3]); ?><br /> 
					<font color='#999'>Trx :</font> <?= $ket; ?> <br /> 
					<span> <font color='#999'>Status :</font> <?php echo $st;?>  	
                        </span> 
				</p> 
			</div>
	<?
		}
	?>
                        </tbody>
                    </table>

<?
		}
	?>
</div>
    <br />
    <br />
    <br />
</div>
</div>