<?php
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
if (empty($_SESSION["valid_admin"])){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";
exit();}
?>
<?php
	/* 
	############################[  <about> ] #######################
		S Name   ::       Inv-X Primadesain
		Update   ::       2013 © Primadesain.Com
		Author   ::       Agus Susanto S.kom
		Website  ::		  http://primadesain.com
		Contact  ::		  <primapc57@gmail.com> // +62 85228657360
	
	Primadesain melayani pembuatan website MLM dan Investasi
	( dengan sistem binary, trinary atau matrix dan matahari )
	juga menerima pembuatan website Iklan Baris, Website Profile,
	Reseller, Hyip, dll.
	############################[ </about> ] #######################
	*/
?>
<div class="cc01" style="font-family:Arial, Helvetica, sans-serif;">
<script type="text/javascript" src="./js/prototype.js"></script> 
		<script type="text/javascript" src="./js/effects.js"></script> 
		<script type="text/javascript" src="./js/newsbox.js"></script>	
		<style>
		@CHARSET "UTF-8";
#navigation {
    width:250px;
}

#content {
    width:700px;
}

#navigation,
#content {
    float:left;
    margin:10px;
}

.collapsible,
.page_collapsible {
	margin: 0;
	padding:10px;
	height:20px;
	border-top:#f0f0f0 1px solid;
	font-family: Arial, Helvetica, sans-serif;
	text-decoration:none;
	text-transform:uppercase;
	color: #FFFFFF;
	font-size:1.5em;
	background-color: #86aad1;
	font-weight: bold;
}

.collapse-open {
	color: #fff;
	background-color: #014a99;
}

.collapse-open span {
    display:block;
    float:right;
    padding:10px;
}

.collapse-open span {
    background:url(../images/minus.png) center center no-repeat;
}

.collapse-close span {
    display:block;
    float:right;
    background:url(../images/plus.png) center center no-repeat;
    padding:10px;
}

div.container {
    padding:0;
    margin:0;
}

div.content {
	margin: 0;
	padding:10px;
	font-size:1.0em;
	line-height:1.5em;
	font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
}

div.content ul, div.content p {
    margin:0;
    padding:3px;
}

div.content ul li {
    list-style-position:inside;
    line-height:25px;
}

div.content ul li a {
    color:#555555;
}

code {
    overflow:auto;
}

		</style>
<?php
if(isset($_GET["kode"])){$kode = anti_injection($_GET["kode"]);}

if(!$kode){
$string = 'Data Deposit Not Found!';
        echo "<script>alert(\"$string\");".
        "window.close()</script>";	
	exit;
} else {

$sql = mysql_query("select * from deposit where kode='$kode'");
$ada_sq = mysql_num_rows($sql);
if(!$ada_sq){
$string = 'Data Deposit Not Found!';
        echo "<script>alert(\"$string\");".
        "window.close()</script>";	
	exit;
} else {


while($row=mysql_fetch_row($sql)) {
$id = $row[0];
$username = $row[1];
$kode = $row[2];
$jumlah = $row[3];
$status = $row[4];
$nama = $db->dataku("nama", $username);
$email = $db->dataku("email", $username);
$hp = $db->dataku("hp", $username);
$tgldepo = $row[5];
$tglend = $row[6];
$kontrak = $row[11];
$plan = $row[7];
$profit = $row[9];
$cycle = $row[10];
$planpaket = $row[8];
$siklus = $row[12];

$ttlcycle = $kontrak - $getcycle;

if($ttlcycle > 0) {
	$stne = "<span class='badge badge-success'>$ttlcycle cycle</span>";
	} else {
	$stne = "<span class='badge badge-important'>End</span>";
	}
if($status > 0) {
	$stne2 = "<span class='badge badge-success'>Aktif</span>";
	} else {
	$stne2 = "<span class='badge badge-important'>Nonaktif</span>";
	}


$start = $tgldepo;
$end = date ("Y-m-d H:i:s");

$tgldepoxxx = date('Y-m-d', strtotime($tgldepo));
$tglendxxx = date('Y-m-d', strtotime($tglend));
$endxxx = date ("Y-m-d");

$srttgldepo = strtotime($tgldepoxxx);
$srttglend = strtotime($tglendxxx);
$srttglnow = strtotime($endxxx);


$aktifdy = "";	
$berjalandy = "";
$sisaktifdy = "";
$aktif = floor(abs($srttglend - $srttgldepo) / (60*60*24));
$berjalan = floor(abs($srttglnow - $srttgldepo) / (60*60*24));
$sisaktif = floor(abs($srttglend - $srttglnow) / (60*60*24));






?>
<form action="" id="order-form" method="post" class="form-horizontal">
           <div class="form_style">
                        <fieldset>
                            <legend>Detail Deposit No: <?php echo $kode; ?></legend>
						      
						    <table >
							<tr class="row2">
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">&nbsp;</label></td>
                               	  	<td width="64%" valign="top">&nbsp;
                                    </td>
                                </tr>
							<tr class="row2">
                               	  <td width="36%" align="right"><label class="control-label" for="username">Username :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="<?php echo $username; ?>" readonly="readonly"/>
                                     </div>
                                    	</div>
                                    </td>
                                </tr>
                            	<tr>
                               	  <td width="36%" align="right"><label class="control-label" for="username">Nama :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="<?php echo $nama; ?>" readonly="readonly"/>
                                     </div>
                                    	</div>
                                    </td>
                                </tr>
								<tr class="row2">
                               	  <td width="36%" align="right"><label class="control-label" for="username">Email :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="<?php echo $email; ?>"  readonly="readonly"/>
                                 </div>
                                    	</div>
                                    </td>
                                </tr>
								<tr class="row2">
                               	  <td width="36%" align="right"><label class="control-label" for="username">Handphone :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="<?php echo $hp; ?>"  readonly="readonly"/>
                                 </div>
                                    	</div>
                                    </td>
                                </tr>
								<tr>
                               	  <td width="36%" align="right"><label class="control-label" for="username">Kode :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="<?php echo $kode; ?>" readonly="readonly"/>
                                 </div>
                                    	</div>
                                    </td>
                                </tr>
								
								<tr>
                                	<td align="right"><label class="control-label" for="password1">Jumlah Deposit :</label></td>
                                  	<td valign="top">
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="<?php echo rupiah($jumlah); ?>" readonly="readonly"/>
                                  </div></div></td>

                                </tr>
								
								<tr>
                                	<td align="right"><label class="control-label" for="password1">Nilai Profit  :</label></td>
                                  	<td >
                                    	<div class="control-group"><div class="controls">
										<?php
										$nilaiprofit = $profit/100 * $jumlah;
										?>
            <input type="text" name="" id="" size="46" value="<?php echo $profit; ?>%/<?php echo $siklus; ?> = <?php echo rupiah($nilaiprofit); ?>/<?php echo $siklus; ?>" readonly="readonly"/>
                                   </div></div></td>

                                </tr>
                                
                                
								 <tr>
                                	<td align="right"><label class="control-label" for="password1">Tanggal Deposit :</label></td>
                                  	<td >
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="<?php echo formatgl($tgldepo); ?>" readonly="readonly"/>
                                    </div></div></td>

                                </tr>
								 <tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Perkiraan Tanggal Selesai :</label></td>
                                  	<td >
                                    	<div class="control-group"><div class="controls">
                <input type="text" name="" id="" size="46"value="<?php echo formatgl($tglend); ?>" readonly="readonly"/>                     
                               </div></div></td>

                                </tr>
                                 <tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Aktif :</label></td>
                                  	<td >
									
                                    	<div class="control-group"><div class="controls">
                <input type="text" name="" id="" size="46"value="<?php echo $aktif; ?> day" readonly="readonly"/>                     
                                     </div></div></td>

                                </tr>
								 <tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Berjalan :</label></td>
                                  	<td >
									
                                    	<div class="control-group"><div class="controls">
                <input type="text" name="" id="" size="46"value="<?php echo $berjalan; ?> day" readonly="readonly"/>                     
                                     </div></div></td>

                                </tr>
								 <tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Masa Aktif :</label></td>
                                  	<td >
									
                                    	<div class="control-group"><div class="controls">
                <input type="text" name="" id="" size="46"value="<?php echo $sisaktif; ?> day" readonly="readonly"/>                     
                                       </div></div></td>

                                </tr>
								<tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Status :</label></td>
                                  	<td >
                                    <div style="width:80px"><?php echo $stne2; ?>   </div>         
                                   </td>

                                </tr>
								<tr class="row2">
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">&nbsp;</label></td>
                               	  	<td width="64%" valign="top">&nbsp;
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <div class="clearBoth"></div>
                    </div></form>

 <div id="newsBox"><div class="newsItem"><a class="newsTitle" style="font-size:10px; font-weight:bold; cursor:pointer">
<div class="page_collapsible collapse-close" id="body-section2">PROFIT<span></span></div></a>		
<div style="display:none;">
<div class="newsContent" style="font-size:12px;">               	
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#E7E5D9">
      <tr>
        <td bgcolor="#E7E5D9"></td>
      </tr>
      <tr>
        <td bgcolor=""><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <td width="9%" align="center" bgcolor="#F2F1EC"><strong>No.</strong></td>
              <td width="16%" align="center" bgcolor="#F2F1EC"><strong>Tanggal</strong></td>
			  <td width="12%" align="center" bgcolor="#F2F1EC"><strong>Jam</strong></td>
              <td width="43%" align="center" bgcolor="#F2F1EC"><strong>Jenis Profit Investasi </strong></td>
              <td width="20%" align="center" bgcolor="#F2F1EC"><strong>Profit </strong></td>
            </tr>
     <?php
				
	$sbl=mysql_query("select * from komisi where jenis='komshare' and username='$username' and kode='$kode' order by tglbayar");
	$nom=1;
	$totinv = 0;
	while($row=mysql_fetch_row($sbl)) {
		echo "<tr>
          <td align=center bgcolor=#ffffff>$nom.</td>
           <td align=center bgcolor=#ffffff>".date("d-m-Y",strtotime($row[3]))."</td>
		    <td align=center bgcolor=#ffffff>".date("H:i:s",strtotime($row[3]))."</td>
          <td align=center bgcolor=#ffffff>$row[7]</td>
          <td bgcolor=#ffffff align=right>".rupiah($row[2])."</td>
        </tr>";
		$totinv = $totinv + $row[2];
		$nom++;
	}
	
	?>
            <tr>
              <td colspan="4" align="right" bgcolor="#E8E8E8">TOTAL PROFIT </td>
              <td bgcolor="#E8E8E8" align="right"><strong>
                <?php echo rupiah($totinv); ?>
              </strong></td>
            </tr>
        </table></td>
      </tr>
    </table>

</div>
                  </div>
              </div>
              <!-- end news items -->
            </div>

<!-- this script is required for your newsbox to work; also, modify the variables defined below to customize the look of the newbox contents. -->
	  <!-- bg = background color; fg = text color for your article; link = the color for your links -->
	  <!-- altbg = background color of alternating row ; altfg = text color for your article on an alternating row; altlink = the color for your links on an alernating row -->
<script type="text/javascript">newsBox = new newsBox({'bg':'#ffffff','fg':'#000000','link':'#0000cc','altbg':'#ffffff','altfg':'#000000','altlink':'#0000cc'});</script>	
	
	
<p>&nbsp;</p>
 <div class="clearBoth"></div>

<?
}
}
}?>
</div>