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
		<h5 class="mb-0">Profit </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
		<a class="btn btn-primary"  style="height: 25px;padding-top:0px; padding-bottom:0px; align-items:center;"  href="index.php?go=bonus" ><i class='fa fa-money' style="margin-right:12px;"></i>Bonus</a>
	</div>
</div>
<p class="mb-0"> <?php if(isset($_GET["co"])){ ?>
              Total Profits : <?php
		$ttlbonusee =total_profit_member_kode($user_session, $_GET["co"]);;
if($ttlbonusee>0) { echo rupiah($ttlbonusee); }else{ echo rupiah(0); }
?>
<?php } else { ?>
 Total Profits : <?php
		$ttlbonusee = total_profit_member($user_session);
if($ttlbonusee>0) { echo rupiah($ttlbonusee); }else{ echo rupiah(0); }
?>
<?php } ?></p> 	
<hr>


					
				<div style="max-height:500px; overflow:auto;">
 
 
 
 
   <table id="example" width="100%" style="font-size:14px;">

                        <tbody>
                       
             				<?
if(isset($_GET["co"])){
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis='komshare' and username='$user_session' and kode='".$_GET["co"]."'", "tglbayar desc");
}else{
	$db->select("id, username, bayar, tglbayar, status, total, jenis, dari, kode, gett", "komisi", "jenis='komshare' and username='$user_session'", "tglbayar desc");
}
	
		while($row=$db->fetch_row()) {
			if(is_odd($nom) == 0) {
				$class = "even";
			} else {
				$class = "odd";
			} 	
		if($row[9] == 1) {
				$sts = "<span class='label label-primary'>To Wallet</span>";
			} 	else {
				$sts = "";
			}	
		$user=$row[7];
		$namaspon = "SELECT * FROM member WHERE username='$user'"; 
	 
        $resultnamaspon = mysql_query($namaspon);


$rownamaspon = mysql_fetch_array($resultnamaspon);
$namaspone = $rownamaspon['nama'];	

$ttprof = total_profit_member($user_session);
if($ttprof > 0){
$ttprofit = rupiah($ttprof);
}else{
$ttprofit = "0";
}
?>				
 <div class="div-card mb-2 "  style="min-height:unset!important; font-size:14px;" >	
				<small><font color='#999'>Date :</font> <?php echo $row[3];?> </small> 
				<p class="mb-0">
					<font color='#999'>Amount :</font> <?php echo rupiah($row[2]); ?><br /> 
					<font color='#999'>Info :</font> <?php echo $row[7]; ?><br /> 
					<font color='#999'>Investment :</font> <?php echo $row[8]; ?>
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