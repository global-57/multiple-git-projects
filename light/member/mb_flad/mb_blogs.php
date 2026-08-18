<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>

<?php
if (isset($_GET['catid'])) {
$sqlc = mysql_query("SELECT * FROM berita WHERE published='1' and id_berita=".$_GET['catid']."");
$numc = mysql_num_rows($sqlc);
if($numc){
$rowc = mysql_fetch_array($sqlc);
$gambaree = $rowc['gambar'];
$judulee = $rowc['judul'];
$isi_beritaee = $rowc['isi_berita'];
$tanggalee = $rowc['tanggal'];
$id_beritaee = $rowc['id_berita'];

$adafoto = $gambaree;
	$dirfoto = "../images/foto_berita/".$adafoto."";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$fotokuee = "<img src='$dirfoto' class='w-100'/>";
		}
		else
		{
		$fotokuee = "<img src='../images/no-image.jpg' class='w-100'/>";
		} 
?>

<div class="container-main-div  pb-5">
			
<div class=""  style="border-radius:10px; overflow:hidden " >
	
	<h4 class="m-0"><?php echo $judulee;?></h4> 
	<small class="d-block">Published At  : <?php echo $tanggalee;?></small> 
<hr>
					<div class="card-img">
				<?php echo $fotokuee;?>
				</div>
				<div class="pt-2">
	<p><?php echo $isi_beritaee;?></p> 
	</div>
					
</div></div>
</div>

<?php } ?>
<?php } else { ?>

<div class="container-main-div  pb-5">
			<h5 class="mb-0" style="color:#666666;">Promotions / Information </h5>
<p style="color:#666666;"> Here are some of the latest promos/information  </p> 
<hr>



   <?php
				   $sqlc = mysql_query("SELECT * FROM berita WHERE published='1'");
$numc = mysql_num_rows($sqlc);
if($numc){
while($rowc = mysql_fetch_array($sqlc)){
$gambaree = $rowc['gambar'];
$judulee = $rowc['judul'];
$isi_beritaee = $rowc['isi_berita'];
$tanggalee = $rowc['tanggal'];
$id_beritaee = $rowc['id_berita'];

$adafoto = $gambaree;
	$dirfoto = "../images/foto_berita/".$adafoto."";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$fotokuee = "<img src='$dirfoto' class='w-100'/>";
		}
		else
		{
		$fotokuee = "<img src='../images/no-image.jpg' class='w-100'/>";
		} 
?> 







 
			<a class="card" href="index.php?go=blogs&catid=<?php echo $id_beritaee;?>">
				<div class="card-img">
				<?php echo $fotokuee;?>
				</div>
				<div class="card-body">
					<small>Published At  : <?php echo $tanggalee;?></small> 
					<h4 class="title"><?php echo $judulee;?></h4> 				
				</div>
			</a>
		 			

<?php } ?>
<?php } else { ?>
<div class="card-body">
					
					<h4 class="title">No Article</h4> 				
				</div>
<?php } ?>

</div>
</div>
<?php } ?>