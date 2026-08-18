<?php
if(basename($_SERVER['SCRIPT_FILENAME'])==basename(__FILE__)){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";exit();};echo '';;echo '    <script type="text/javascript" src="../js/prototype.js"></script> 
		<script type="text/javascript" src="../js/effects.js"></script> 
		<script type="text/javascript" src="../js/newsbox.js"></script>	
		<style>
		.status_active {
	font-weight: bold;
	background-color: #CEFFCE;
}
.status_free {
	font-weight: bold;
	background-color:#FFDDDD;
}
.status_blokir {
	font-weight: bold;
	background-color:#FFDDDD;
}
		</style>
<div id="skip-content" class="db-content db-grid db-g9 db-mp2" role="main">
<h2 style="font-family:Arial, Helvetica, sans-serif">Network Tree</h2>
';if(isset($_GET["mid"])){$mid=$_GET["mid"];};echo '';$lv=20;for($i=0;$i<$lv;$i++){$j=$i+1;$ja=$db->jmlmember($user_session,"a.status=1 and b.upline$i='$mid'");$jf=$db->jmlmember($user_session,"a.status=0 and blokir=0 and b.upline$i='$mid'");$jb=$db->jmlmember($user_session,"a.blokir=1 and b.upline$i='$mid'");if($ja>0 or $jf>0){;echo '
<div style="width: 98%; padding: 2px; margin: 0;">
            <div id="newsBox">
              <!-- NEWS ITEMS GO HERE - Repeat Sections as many times as you want -->
              <!--NEWS ITEM-->
              <div class="newsItem"><a class="newsTitle" style="font-size:10px; font-weight:bold; cursor:pointer">
			  <div class="page_collapsible collapse-close" id="body-section2">LEVEL ';echo $j;;echo ' DETAILS<span></span></div>
			  </a>
                  <div style="display:none;">
                    <div class="newsContent">
                      ';$db->select("a.username, a.nama, a.status, a.blokir, a.hp, a.email, a.tglaktif, a.upline, b.sponsor, b.posisi","member as a inner join upline as b on a.username=b.username","b.upline$i='$mid'");;echo '  <table class="mGrid" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_ucdirects_griddirectsleft" style="width:100%;border-collapse:collapse;">
  <thead>
      <tr>
        <th><strong>#</strong></font></th>
        <th><strong>Username</strong></font></th>
        <th><strong>Name</strong></font></th>
        <th><strong>Sponsor</strong></font></th>
        <th><strong>Upline</strong></font></th>
        <th><strong>Position</strong></font></th>
        <th><strong>Mobile/Phone</strong></font></th>
        
        <th><strong>Status</strong></font></th>
      </tr>
	  </thead><tbody>
   ';$n=1;while($row=$db->fetch_row()){if($row[2]>0){$status=date("Y-m-d",strtotime($row[7]));$cl_status="status_active";}else if($row[3]>0){$status="BLOKIR";$cl_status="status_blokir";}else {$status="FREE";$cl_status="status_free";}if($row[9]=="L2"){$pose="RIGHT";}else {$pose="LEFT";};echo '  
   
	  <tr>
        <td>';echo $n;;echo '</td>
        <td>';echo $row[0];;echo '</td>
        <td>';echo $row[1];;echo '</td>
        <td>';echo $row[8];;echo '</td>
        <td>';echo $row[7];;echo '</td>
        <td>';echo $pose;;echo '</td>
        <td>';echo $row[4];;echo '/';echo $row[5];;echo '</td>
       
        <td class="';echo $cl_status;;echo '" align="center">';echo $status;;echo '</td>
      </tr>
	 ';$n++;};echo ' 
   </tbody> </table>  </div>
                  </div>
              </div>
              <!-- end news items -->
            </div>
</div>
	
	  ';}};echo '	 <!-- this script is required for your newsbox to work; also, modify the variables defined below to customize the look of the newbox contents. -->
	  <!-- bg = background color; fg = text color for your article; link = the color for your links -->
	  <!-- altbg = background color of alternating row ; altfg = text color for your article on an alternating row; altlink = the color for your links on an alernating row -->
<script type="text/javascript">newsBox = new newsBox({\'bg\':\'#ffffff\',\'fg\':\'#000000\',\'link\':\'#0000cc\',\'altbg\':\'#ffffff\',\'altfg\':\'#000000\',\'altlink\':\'#0000cc\'});</script>
<script language="javascript" type="text/javascript">
<!--
/****************************************************
     Author: Eric King
     Url: http://redrival.com/eak/index.shtml
     This script is free to use as long as this info is left in
     Featured on Dynamic Drive script library (http://www.dynamicdrive.com)
****************************************************/
var win=null;
function NewWindow(mypage,myname,w,h,scroll,pos){
if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:100;}
else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
settings=\'width=\'+w+\',height=\'+h+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no\';
win=window.open(mypage,myname,settings);}
// -->
</script>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p align="center">&nbsp;</p>

</div></div>';?>