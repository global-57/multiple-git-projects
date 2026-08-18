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
			
<div class=""  style="border-radius:10px; overflow:hidden " >
	
	<h4 class="m-0">Download</h4> 
	
<hr>
					
				<div style="max-height:500px; overflow:auto;">
 
 
 
 
   <table id="example" width="100%" style="font-size:14px;">

                        <tbody>
                       
                <?
$db->select("id, nama, harga, gambar, deskripsi, hit, kode, hargab, hargac, hargad, file, created, download, member", "product3", "published=1", "created desc");
	
		while($row=$db->fetch_row()) {
			
$cekadadownloade = mysql_query("select * from product3_down where username='".$user_session."' and kode='".$row[6]."'");
$totldownloade = mysql_num_rows($cekadadownloade);
if($totldownloade>0){
	$ttldwnlde="<a href='index.php?go=download&page=detail&co=".$row[6]."'><span class='label label-primary'>".$totldownloade." Kali</label>";
}else{
	$ttldwnlde="<span class='label label-danger'>Belum Download</label>";
}			
			

$mngremember = "SELECT * FROM member WHERE username='$user_session'"; 
$resultmngere = mysql_query($mngremember);
$rownmngree = mysql_fetch_array($resultmngere);

//if($row[13] == 1 && $rownmngree['act'] == 1){ 

if($totldownloade >= $batasdownload){
$linknya="<a href='#'><button type='button' class='btn btn-warning' onclick='return confirmActionbatasdown()'><i class='fa fa-download'></i>&nbsp;Download</button></a>";
	$stylnya=" style='color:#FF915B'";
}else{
         
if($row[7] == 1){
	$linknya="<a href='download.php?u=".base64_encode($user_session)."&d=".$row[6]."' target='_blank'><button type='button' class='btn btn-success'><i class='fa fa-download'></i>&nbsp;Download</button></a>";
	$stylnya="";
}else{
	$linknya="<a href='download.php?u=".base64_encode($user_session)."&d=".$row[6]."' target='_blank'><button type='button' class='btn btn-success'><i class='fa fa-download'></i>&nbsp;Download</button></a>";
	$stylnya="";
}
}
//}else{
//	$linknya="<a href='#'><button type='button' class='btn btn-danger' onclick='return confirmActiondownloads()'><i class='fa fa-download'></i>&nbsp;Download</button></a>";
//	$stylnya=" style='color:#D00'";
//}
	
if($row[5] > 0){
	$hitse=$row[5];
}else{
	$hitse="0";
}
?>				             

 <div class="div-card mb-2 "  style="min-height:unset!important; font-size:14px;" >	
				<p class="mb-0">
					<font color='#999'>Title :</font> <?php echo $row[1]; ?> <br /> 
					<font color='#999'>Detail :</font> <?php echo $row[4]; ?><br /> 
					<font color='#999'>Hits :</font> <?php echo $hitse; ?> <br /> 
					<span><?php echo $linknya; ?> 	
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