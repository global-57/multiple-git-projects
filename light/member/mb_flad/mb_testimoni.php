<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonial
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Testimonial</li>
      </ol>
    </section>


    <section class="content">



 <div class="row">

          <div class="col-lg-12 col-12">
            <div class="box">
				<div class="box-header with-border">
              		<h5 class="box-title">Testimonial</h5>
				</div>
				<div class="box-body p-0">
				  <div class="media-list media-list-hover media-list-divided">
				
                <?php

$db->select("no, userid, nama, kota, testimoni, foto, tgl, published, judul", "testimonial", "published=1", "no desc");

	while($row = $db->fetch_row()) {
	$judul = $row[8];
	$isine = $row[4];
	$tgl = formatgl($row[6]);
	$idne = anti_injection($row[0]);
   $foto = $row[5];
   $namane = $row[2];
   $kotane = $row[3];
	
	?>  
                    
                 	<a class="media media-single" href="#">
                    <?php 
$dirfoto = "../images/foto_testimoni/$foto";
if(!empty($foto) && (file_exists($dirfoto))){?>
     <img src='../images/foto_testimoni/<?php echo $foto; ?>' style="width:150px; height:150px;">
     <?php }else { echo "---";} ?>
					  <div class="media-body">
						<h3><strong><?php echo $judul; ?></strong><br /><font style="font-size:14px; line-height:130%;"><?php echo $isine; ?></font></h3>
						<br /><small class="text-fader"><?php echo $namane; ?> (<?php echo $kotane; ?>)<br /><?php echo $tgl; ?></small>
					  </div>
					</a>
                    
                                            
        
	<?
		}
	?>
                
                
                
                    
                    
                    
                    
				  </div>
				</div>
             
            </div>
          </div>



</div>
</section>