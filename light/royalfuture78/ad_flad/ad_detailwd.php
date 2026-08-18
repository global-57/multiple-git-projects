<?php 
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
;echo '';
if (empty($_SESSION['valid_admin'])){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";
exit();}
;echo '<div class="cc01" style="font-family:Arial, Helvetica, sans-serif;">
';
if(isset($_GET['kode'])){$kode = anti_injection($_GET['kode']);}
$sql = mysql_query("select * from wd where kode='$kode'");
while($row=mysql_fetch_row($sql)) {
$id = $row[0];
$username = $row[1];
$kode = $row[9];
$jumlah = $row[4];
$status = $row[7];
$nama = $db->dataku('nama', $username);
$email = $db->dataku('email', $username);
$hp = $db->dataku('hp', $username);
$tgl = $row[2];
$tglpros = $row[3];
$fee = $row[5];
$jumlahnet = $row[6];
$uraian = $row[8];
$jenis = $row[10];
if($tglpros == '0000-00-00 00:00:00'){
$tglproses = '---';
}else{
$tglproses = formatgl($row[3]);
}
if($status > 0) {
$img = "<span class='badge badge-success'>Sudah di Proses</span>";
} else {
$img = "<span class='badge badge-important'>Pending</span>";
}
if($jenis == 1) {
$imgee = 'Bonus';
$feee= $feewdbonuse;
} else {
$imgee = 'Profit';
$feee = $feewdprofite;
}	
$jmlrp = idr($jumlahnet*$kurse);
;echo '<form action="" id="order-form" method="post" class="form-horizontal">
           <div class="form_style">
                        <fieldset>
                            <legend>Detail Wthdrawal ';echo $imgee;;echo ' No: ';echo $kode;;echo '</legend>
						      
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
             <input type="text" name="" id="" size="46" value="';echo $username;;echo '" readonly="readonly"/>
                                     </div>
                                    	</div>
                                    </td>
                                </tr>
                            	<tr>
                               	  <td width="36%" align="right"><label class="control-label" for="username">Nama :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="';echo $nama;;echo '" readonly="readonly"/>
                                     </div>
                                    	</div>
                                    </td>
                                </tr>
								<tr class="row2">
                               	  <td width="36%" align="right"><label class="control-label" for="username">Email :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="';echo $email;;echo '"  readonly="readonly"/>
                                 </div>
                                    	</div>
                                    </td>
                                </tr>
								<tr class="row2">
                               	  <td width="36%" align="right"><label class="control-label" for="username">Handphone :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="';echo $hp;;echo '"  readonly="readonly"/>
                                 </div>
                                    	</div>
                                    </td>
                                </tr>
								<tr>
                               	  <td width="36%" align="right"><label class="control-label" for="username">Kode Pembayaran :</label></td>
                               	  	<td width="64%" >
                                    	<div class="control-group"><div class="controls">
             <input type="text" name="" id="" size="46" value="';echo $kode;;echo '" readonly="readonly"/>
                                 </div>
                                    	</div>
                                    </td>
                                </tr>
									 
								<tr>
                                	<td align="right"><label class="control-label" for="password1">Jumlah Withdrawal :</label></td>
                                  	<td valign="top">
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="';echo rupiah($jumlah);;echo '" readonly="readonly"/>
                                  </div></div></td>

                                </tr>
							<tr>
                                	<td align="right"><label class="control-label" for="password1">Fee :</label></td>
                                  	<td valign="top">
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="';echo rupiah($fee);;echo '" readonly="readonly"/>
                                  </div></div></td>

                                </tr>
                                <tr>
                                	<td align="right"><label class="control-label" for="password1">Jumlah Terima :</label></td>
                                  	<td valign="top">
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="';echo rupiah($jumlahnet);;echo '" readonly="readonly"/>
                                  </div></div></td>

                                </tr>
                                
                                
								 <tr>
                                	<td align="right"><label class="control-label" for="password1">Tanggal :</label></td>
                                  	<td >
                                    	<div class="control-group"><div class="controls">
            <input type="text" name="" id="" size="46" value="';echo formatgl($tgl);;echo '" readonly="readonly"/>
                                    </div></div></td>

                                </tr>
								 <tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Tanggal Proses :</label></td>
                                  	<td >
                                    	<div class="control-group"><div class="controls">
                <input type="text" name="" id="" size="46"value="';echo $tglproses;;echo '" readonly="readonly"/>                     
                               </div></div></td>

                                </tr>
							
								 <tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Uraian :</label></td>
                                  	<td >
									
                                    	<div class="control-group"><div class="controls">
                                          <textarea name="" cols="46" rows="3" readonly="readonly" id="">';echo $uraian;;echo '</textarea>                     
                                      </div></div></td>

                                </tr>
								<tr class="row2">
                                	<td align="right"><label class="control-label" for="password1">Status :</label></td>
                                  	<td >
                                    <div style="width:80px">';echo $img;;echo '   </div>         
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

';
};echo '</div>';
?>