<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
<?php
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
<?php
if(isset($_GET["kode"])){$kode = anti_injection($_GET["kode"]);}
$sql = mysql_query("select * from dataewalet2 where kode='$kode'");
while($row=mysql_fetch_row($sql)) {
$id = $row[0];
$username = $row[2];
$kode = $row[1];
$jumlah = $row[3];
$status = $row[7];
$nama = $db->dataku("nama", $username);
$email = $db->dataku("email", $username);
$hp = $db->dataku("hp", $username);
$tgl = $row[6];
$tglpros = $row[9];
$uraian = $row[4];
$type = $row[12];

if($type == "pv") {
				$typene = "<span class='badge badge-success'>PV POIN</span>";
			} else if($type == "cash") {
				$typene = "<span class='badge badge-info'>CASH POIN</span";
			} else if($type == "register") {
				$typene = "<span class='badge badge-warning'>REGISTER POIN</span";
			} else if($type == "purchase") {
				$typene = "<span class='badge badge-inverse'>REGISTER POIN</span";
			}	else{}	

if($tglpros == "0000-00-00 00:00:00"){
		$tglproses = "---";
	}else{
		$tglproses = formatgl($row[9]);
	}
		

if($status > 0) {
		$img = "<span class='badge badge-success'>Sudah di Proses</span>";
	} else {
		$img = "<span class='badge badge-important'>Pending</span>";
		
	}
	

?>
<form action="" id="order-form" method="post" class="form-horizontal">
           <div class="form_style">
                        <fieldset>
                            <legend>Detail Buy Balance No: <?php echo $kode; ?></legend>
						      
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
                               	  <td width="36%" align="right"><label class="control-label" for="username">Kode  :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="<?php echo $kode; ?>" readonly="readonly"/>
                                 </div>
                                    	</div>
                                    </td>
                               </tr>
                            
								<tr>
                                	<td align="right"><label class="control-label" for="password1">Jumlah Add Balance :</label></td>
                                  	<td valign="top">
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="<?php echo rupiah($jumlah); ?>" readonly="readonly"/>
                                  </div></div></td>

                                </tr>
							
								 <tr>
                                	<td align="right"><label class="control-label" for="password1">Tanggal :</label></td>
                                  	<td >
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="<?php echo formatgl($tgl); ?>" readonly="readonly"/>
                                    </div></div></td>

                                </tr>
								 <tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Tanggal Proses :</label></td>
                                  	<td >
                                    	<div class="control-group"><div class="controls">
                <input type="text" name="" id="" size="46"value="<?php echo $tglproses; ?>" readonly="readonly"/>                     
                               </div></div></td>

                                </tr>
							
							
								<tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Status :</label></td>
                                  	<td >
                                    <div style="width:80px"><?php echo $img; ?>   </div>         
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


	
<p>&nbsp;</p>
 <div class="clearBoth"></div>

<?

}?>
</div>