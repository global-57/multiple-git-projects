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
	
	<h4 class="m-0" style="color:#666666;">FAQ</h4> 
	<p style="color:#666666;">Frequently Asked Questions</p> 
<hr>
					
				<div class="pt-2">
	 <div class="panel">
				<div class="panel-body">
				  <div class="tab-content">
					<!-- Categroy 1 -->
					<div class=" tab-pane animation-fade active" id="category-1" role="tabpanel">
					  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2" aria-multiselectable="true" role="tablist">
						<!-- Question 1 -->
						
                        
                        
           <?php
		   
		   $sqltesti = mysql_query("SELECT no, tanya, jawab FROM faq WHERE published='1'");
$numtesti = mysql_num_rows($sqltesti);
while($rowtesti = mysql_fetch_array($sqltesti)){
	?>
                        
                        
                        
                        
                        
                        
                        
                        <div class="panel" style="margin-bottom:10px;">
						  <div class="panel-heading" id="question-<?php echo $rowtesti[0];?>" role="tab">
							<a class="panel-title collapsed" aria-controls="answer-<?php echo $rowtesti[0];?>" aria-expanded="false" data-toggle="collapse" href="#answer-<?php echo $rowtesti[0];?>" data-parent="#accordion2">
							<?php echo $rowtesti[1];?>
						  </a>
						  </div>
						  <div class="panel-collapse collapse" id="answer-<?php echo $rowtesti[0];?>" aria-labelledby="question-<?php echo $rowtesti[0];?>" role="tabpanel" style="">
							<div class="panel-body">
							<?php echo $rowtesti[2];?>
							</div>
						  </div>
						</div>
                        
                        
                        <?php } ?>
						<!-- End Question 1 -->
					
					  </div>
					</div>
					<!-- End Categroy 4 -->
				  </div>
				</div>
			  </div>
	</div>
					
</div></div>
</div>







<?php } ?>