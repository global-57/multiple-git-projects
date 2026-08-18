<?php
(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
$lic=$license;if(!$lic){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=./index.php\">";
exit();} 
?>
<?php
if (empty($_SESSION["valid_admin"])){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();}
?>
<div class="cc01">
<?php
if (isset($_POST['submit'])) {
	
$balasane=anti_injection($_POST['balas']);	
$kode=anti_injection($_POST['kode']);	
	
$db->update("konfirmasi", "balasan='$balasane', tglproses='$clientdate'", "kode='$kode'");	

}
?>




<?php
if(isset($_GET["id"])){$id = anti_injection($_GET["id"]);}
$sql = mysql_query("select * from konfirmasi where id='$id'");
while($row=mysql_fetch_row($sql)) {
$id = $row[0];
$kode = $row[1];
$nama = $row[2];
$username = $row[3];
$email = $row[4];
$tgl = $row[5];
$judul = $row[6];
$catatan = $row[7];
$ip = $row[8];
$hp = $row[9];
$foto = $row[10];
$balasan = $row[11];
$status = $row[12];
$tglpro = $row[13];

$db->update("konfirmasi", "status='1'", "kode='$kode' and status=0");	
	$dirfoto = "../images/confirm/$foto";
?>
            <div class="form_style">
                        <fieldset>
                        <form action="" method="post" accept-charset="utf-8" id="form" name="form">
            <input name="kode" id="kode" type="hidden" value="<?php echo $kode;?>" readonly="readonly"/>
                            <legend>Detail Data Konfirmasi <?php echo $kode; ?></legend>
						      <font style="font-size:14px">
						    <table width="90%" height="521" >
                            
							 <tr>
                                	 <td width="36%" valign="top" align="right">&nbsp;</td>
                                  <td width="64%" valign="top">&nbsp;</td>
                                </tr>
                               
							<tr class="row2">
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">Username :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $username; ?></div>
                                    	</div>
                                    </td>
                              </tr>
                            	<tr>
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">Nama :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $nama; ?></div>
                                    	</div>
                                    </td>
                                </tr>
								<tr class="row2">
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">HP :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $hp; ?></div>
                                    	</div>
                                    </td>
                                </tr>
								
								 <tr>
                                	<td valign="top" align="right"><label class="control-label" for="password1">Email :</label></td>
                                  	<td valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $email; ?></div></div></td>

                                </tr>
								
								<tr class="row2">
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">Judul :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $judul; ?></div>
                                    	</div>
                                    </td>
                                </tr>
							
                            	<tr class="row2">
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">Memo :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $catatan; ?></div>
                                    	</div>
                                    </td>
                                </tr>
                            
								 <tr>
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">Tanggal :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $tgl; ?></div>
                                    	</div>
                                    </td>
                                </tr>
								<?php if (!empty($adafoto) && (file_exists($dirfoto))){ ?>
								 <tr>
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">Upload Gambar :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><a href="../images/confirm/<?php echo $foto; ?>" class="highslide" onClick="return hs.expand(this)"><button>Lihat Gambar</button></a>
                                        <a href="../images/confirm/<?php echo $foto; ?>" download="<?php echo $foto; ?>" title="<?php echo $foto; ?>"><button>Download Gambar</button></a>
                                        
                                        </div></div>
                                    </td>
                                </tr><?php } else { ?>
                                <tr>
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">Upload Gambar :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls">Tidak Ada</div></div>
                                    </td>
                                </tr>
                                <?php } ?>
								
								
								 <tr class="row2">
                               	  <td width="36%" valign="top" align="right"><label class="control-label" for="username">IP :</label></td>
                               	  	<td width="64%" valign="top">
                                    	<div class="control-group"><div class="controls"><?php echo $ip; ?></div>
                                    	</div>
                                    </td>
                                </tr> 
                                
                                
                                <tr class="row2">
                                	<td valign="top" align="right"><label for="alamat">Balasan :</label></td>
                                  	<td valign="top"><span>
                                    <textarea name="balas" id="balas" style="width:180px"><?php echo $balasan; ?></textarea>

                                  </span></td>
                                </tr>
                                 <tr class="row2">
                                	<td valign="top"><label for="kontak">&nbsp;</label></td>
                                    <td>
                                    <button type="submit" class="primapc"  name="submit">Update</button>
                                    </td>
                                </tr>
                                
                                
								 <tr>
                                	<td valign="top">&nbsp;</td>
                                    <td valign="top">&nbsp;
									</td>
                                </tr>
                            </table></font>
                            </form>
                        </fieldset>
                        <div class="clearBoth"></div>
                    </div>
<p>&nbsp;</p>
<?php } ?>
</div>