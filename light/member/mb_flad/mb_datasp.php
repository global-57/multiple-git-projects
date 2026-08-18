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
		<h5 class="mb-0" style="color:#666666;">Referral </h5>
	</div>
	<div class=""  style="min-width:190px;" align="right" >
		<a class="btn btn-primary"  style="height: 25px;padding-top:0px; padding-bottom:0px; align-items:center;"  href="index.php?go=bonus" ><i class='fa fa-money' style="margin-right:12px;"></i>Bonus</a>
	</div>
</div>
<p class="mb-0" style="color:#666666;"> Total Referral: <?php $ceksponku="SELECT * FROM member where sponsor='".$user_session."'";
$queryspone=mysql_query($ceksponku);
$totalespone=mysql_num_rows($queryspone); if($totalespone>0){ echo $totalespone.""; } else { echo "0";} ?></p> 	
<hr>
<div class="input-group p-b-10">
                    <input id="ref_url" class="form-control" name="ref_url" type="text" value="https://<?php echo $domain; ?>/?<?php echo $reffa; ?>=<?php echo $user_session; ?>">
                    <span class="input-group-btn">
                        <button id="copy-ref-url" class="btn btn-primary" type="button">Copy Reff URL</button>
                    </span>
                </div>
<hr>
					
				<div style="max-height:500px; overflow:auto;">
 
 
 
 
   <table id="example" width="100%" style="font-size:14px;">

                        <tbody>
                       
                <?
$db->select("id, username, nama, foto, kota, propinsi, email, hp, status, sponsor, tgl", "member", "sponsor='$user_session'", "id desc");
	$ada = $db->num_rows();
		while($row=$db->fetch_row()) {
			
		$userspon=$row[9];
		$namaspon = "SELECT * FROM member WHERE username='$userspon'"; 
        $resultnamaspon = mysql_query($namaspon);


$rownamaspon = mysql_fetch_array($resultnamaspon);
$namaspone = $rownamaspon['nama'];	
?>				             

 <div class="div-card mb-2 "  style="min-height:unset!important; font-size:14px;" >	
				<small>Date : <?php echo $row[10];?> </small> 
				<p class="mb-0">
					<font color='#999'>Name :</font> <?php echo $namaspone; ?> (ID: <?php echo $row[1]; ?>)<br /> 
					<font color='#999'>Email :</font> <?php echo $row[6]; ?><br /> 
					<font color='#999'>Phone :</font> <?php echo $row[7]; ?><br /> 
					<span><?php if($row[7]){ ?>
        <a class="btn btn-success"  style="height: 25px;padding-top:0px; padding-bottom:0px; align-items:center; margin-top:4px;" href="https://wa.me/<?php echo hpne($row[7]); ?>?text=halo%20<?php echo $row[2]; ?>"><i class="fa fa-whatsapp" style=" margin-right:5px;"></i>whatsapp</a><?php } else { echo ""; } ?>	
        
        
                        </span> 
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