<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>

<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["status0"]."</div>";
}else{
?>
<div class="container-main-div  pb-5">
			


<div class="d-flex justify-content-between align-items-center" >
	<div class="">
		<h5 class="mb-0" style="color:#666666;">Bonus </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
		<a class="btn btn-primary"  style="height: 25px;padding-top:0px; padding-bottom:0px; align-items:center;"  href="index.php?go=profits" ><i class='fa fa-money' style="margin-right:12px;"></i>Profit</a>
	</div>
</div>
<p class="mb-0" style="color:#666666;"> Total Bonus: <?php
		$ttlbonusee = total_komisi_memberx($user_session);
if($ttlbonusee>0) { echo rupiah($ttlbonusee); }else{ echo rupiah(0); }
?></p> 	
<hr>


					
				<div style="max-height:500px; overflow:auto;">
 
 
 
 
   <table id="example" width="100%" style="font-size:14px;">

                        <tbody>
                       
             										<?
										

	
$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis<>'komshare' and jenis<>'komtrade' and username='$user_session'", "tglbayar desc");
	
		while($row=$db->fetch_row()) {
             if($row[6] == "komsponsor"){
			$jenise = "Refferal Bonus";
			}else if($row[6] == "matchingpro1"){
			$jenise = "Matching Profit Level 1";
			}else if($row[6] == "matchingpro2"){
			$jenise = "Matching Profit Level 2";
			}else if($row[6] == "matchingpro3"){
			$jenise = "Matching Profit Level 3";
			}else if($row[6] == "matchingpro4"){
			$jenise = "Matching Profit Level 4";
			}else if($row[6] == "matchingpro5"){
			$jenise = "Matching Profit Level 5";
			
			}else if($row[6] == "komsponsor2"){
			$jenise = "Refferal Bonus Level 2";
			
			}else if($row[6] == "komsponsor3"){
			$jenise = "Refferal Bonus Level 3";
			
			}else if($row[6] == "komsponsor4"){
			$jenise = "Refferal Bonus Level 4";
			
			}else if($row[6] == "komsponsor5"){
			$jenise = "Refferal Bonus Level 5";
			
			}else if($row[6] == "komsponsor6"){
			$jenise = "Refferal Bonus Level 6";
			
			}else if($row[6] == "komsponsor7"){
			$jenise = "Refferal Bonus Level 7";
			
			}else if($row[6] == "komsponsor8"){
			$jenise = "Refferal Bonus Level 8";
			
			}else if($row[6] == "komsponsor9"){
			$jenise = "Refferal Bonus Level 9";
			
			}else if($row[6] == "komsponsor10"){
			$jenise = "Refferal Bonus Level 10";
			
			}else if($row[6] == "komsponsor11"){
			$jenise = "Refferal Bonus Level 11";
			
			}else if($row[6] == "komsponsor12"){
			$jenise = "Refferal Bonus Level 12";
			
			}else if($row[6] == "komsponsor13"){
			$jenise = "Refferal Bonus Level 13";
			
			}else if($row[6] == "komsponsor14"){
			$jenise = "Refferal Bonus Level 14";
			
			}else if($row[6] == "komsponsor15"){
			$jenise = "Refferal Bonus Level 15";
			
			}else if($row[6] == "kompasangan"){
			$jenise = "Pairing Bonus";
			
			}else{
			
			}


?>	
 <div class="div-card mb-2 "  style="min-height:unset!important; font-size:14px;" >	
				<small><font color='#999'>Date :</font> <?php echo $row[3];?> </small> 
				<p class="mb-0">
					<font color='#999'>Amount :</font> <?php echo rupiah($row[2]); ?><br /> 
					<font color='#999'>Info :</font> <?php echo $jenise; ?><br /> 
					<font color='#999'>From :</font> <?php echo $row[7]; ?>
				</p> 
			</div>
	<?
		}
	?>
                        </tbody>
                    </table>


</div>
    <br />
    <br />
    <br />
</div>
</div>
<?php } ?>