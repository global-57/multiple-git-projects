<?php
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
<div class="cc01">
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> UPDATE TRANSACTION</h2>
<?php
if (isset($_GET['page']) && $_GET['page'] == "kirim") {
	
$kodene = $_POST['kodene'];
			$amount = $_POST['amount'];
			$lostwin = $_POST['lostwin'];
			$prosene = $_POST['prosene'];
			$wine = $_POST['wine'];
			$ratein = $_POST['ratein'];
			$rateout = $_POST['rateout'];
			$username = $_POST['usernya'];
			$pilihan = $_POST['pilihan'];
			$timestake = $_POST['timestake'];
			$freenya = $_POST['free'];
 
  $kodenex = $kodene."win";
			

if($freenya == 1){  
$dbasewalet="dataswalet";
}else{
$dbasewalet="datacwalet";
}			
			

$wine=($prosene/100)*$amount;
$wine=sprintf("%.2f",$wine);			
			
$plane=strtoupper($pilihan)." ".strtoupper($timestake);
			
$db->update("lostwin", "amount='$amount', lostwin='$lostwin', prosene='$prosene', wine='$wine', ratein='$ratein', rateout='$rateout', free='$freenya'", "kode='$kodene'");

if($lostwin == 1){
$cekadaprofe = mysql_query("select * from komisi where kode='$kodene' and jenis='komtrade' and username='$username'");
$ada_profe = mysql_num_rows($cekadaprofe); 
if($ada_profe) {
$db->update("komisi", "bayar='$wine', gett='$freenya'", "kode='".$kodene."' and username='$username' and jenis='komtrade'");
}else{
$db->insert("komisi", "", "'', '$username', '$wine', '$clientdate', '0', '', 'komtrade', '$plane', '$kodene', '$freenya', ''"); 
}
$cekadanewltee = mysql_query("select kode from ".$dbasewalet." where kode='$kodenex' tujuan='$username'");
$ada_adanewlete = mysql_num_rows($cekadanewltee); 
if(!$ada_adanewlete) {
$db->insert($dbasewalet, "", "'', '$kodenex', 'administrator', '$wine', 'WIN Stake (".$plane." ".$kodene.")', '$username', '$clientdate', 1, '$clientdate', '', ''");		
}else{
$db->update($dbasewalet, "jumlah='$wine'", "kode='".$kodenex."' and tujuan='$username'");
}

	
}else if($lostwin == 2){
$cekadaprofe = mysql_query("select * from komisi where kode='$kodene' and jenis='komshare' and username='$username'");
$ada_profe = mysql_num_rows($cekadaprofe); 
if($ada_profe) {	
$db->delete("komisi", "kode='".$kodene."' and username='$username' and jenis='komtrade'");
}
$cekadanewltee = mysql_query("select kode from ".$dbasewalet." where kode='$kodenex' tujuan='$username'");
$ada_adanewlete = mysql_num_rows($cekadanewltee); 
if(!$ada_adanewlete) {
$db->delete($dbasewalet, "kode='".$kodenex."' and tujuan='$username'");
}

}else if($lostwin == 0){
$cekadaprofe = mysql_query("select * from komisi where kode='$kodene' and jenis='komshare' and username='$username'");
$ada_profe = mysql_num_rows($cekadaprofe); 
if($ada_profe) {	
$db->delete("komisi", "kode='".$kodene."' and username='$username' and jenis='komtrade'");
}
$cekadanewltee = mysql_query("select kode from ".$dbasewalet." where kode='$kodenex' tujuan='$username'");
$ada_adanewlete = mysql_num_rows($cekadanewltee); 
if(!$ada_adanewlete) {
$db->delete($dbasewalet, "kode='".$kodenex."' and tujuan='$username'");
}
}
	
echo "<br><br><div class='successx'>Data berhasil diubah</div><br><br>";
?>

 <script language="Javascript">

        function redirectToFB(){
            window.opener.location.href="index.php?go=investe&kode=<?php echo $kodene; ?>";
            self.close();
        }

    </script>
 <a href="javascript:window.close()"><button type="button" class="nmnm" OnClick="redirectToFB()">Selesai</button></a>
<br /><br />
</center>
 </fieldset>
     
<?php
}else{ 	
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
	
$query113 = "SELECT * FROM lostwin WHERE kode='$kode'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$status = $row113['status'];
$lostwin = $row113['lostwin'];
$wine = $row113['wine'];
$prosene = $row113['prosene'];
$ratein = $row113['ratein'];
$rateout = $row113['rateout'];
$amount = $row113['amount'];
$username = $row113['username'];
$pilihan = $row113['pilihan'];
$timestake = $row113['timestake'];
$freenya = $row113['free'];
	?>
<form id="ewalet" name="form1" method="post" action="?go=updatestake&page=kirim">
       <input name="usernya" type="hidden" id="usernya" size="20" value="<?= $username; ?>" readonly="readonly"/>
       <input name="timestake" type="hidden" id="timestake" size="20" value="<?= $timestake; ?>" readonly="readonly"/>
       <input name="pilihan" type="hidden" id="pilihan" size="20" value="<?= $pilihan; ?>" readonly="readonly"/>
 <div class="form_style">
                        <fieldset>
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="4">
   
        <tr>
        <td width="50%" align="right" valign="top">&nbsp;</td>
        <td width="50%"><strong>
          &nbsp;
          </strong></td>
      </tr>
    <tr>
      <td width="50%" align="right">Kode Transaksi :</td>
      <td width="50%"><label>
       <input name="kodene" type="text" id="kodene" size="20" value="<?= $kode; ?>" readonly="readonly"/>
      </label></td>
    </tr>
      <tr>
      <td width="50%" align="right">Amount Stake :</td>
      <td width="50%"><label>
        <input name="amount" type="text" id="amount" value="<?= $amount; ?>" size="20" /> 
      </label></td>
    </tr>
    <tr>
      <td width="50%" align="right">Status :</td>
      <td width="50%"><label>
          <select id="lostwin" name="lostwin" class="form-control mb-2 mr-sm-2" required='required'>
          <?php if($lostwin == 1){ ?>
								<option value="1">Win</option>
                                <option value="2">Lost</option>
								<option value="0">Pending</option>
                              <?php } else if($lostwin == 2){ ?>
								<option value="1">Win</option>
                                <option value="2" selected="selected">Lost</option>
								<option value="0">Pending</option>
                              <?php } else if($lostwin == 0){ ?>
								<option value="1">Win</option>
                                <option value="2">Lost</option>
								<option value="0" selected="selected">Pending</option>
                                <?php } ?>
                            </select>
      </label></td>
    </tr>
    <tr>
      <td width="50%" align="right">Status Member :</td>
      <td width="50%"><label>
          <select id="free" name="free" class="form-control mb-2 mr-sm-2" required='required'>
          <?php if($freenya == 1){ ?>
								<option value="1" selected="selected">Member Free / Demo</option>
								<option value="0">Member Paid</option>
                              <?php } else if($freenya == 0){ ?>
								<option value="1">Member Free / Demo</option>
								<option value="0" selected="selected">Member Paid</option>
                                <?php } ?>
                            </select>
      </label></td>
    </tr>
    
   
    
     <tr>
      <td width="50%" align="right">Profit / Lost (%) :</td>
      <td width="50%"><label>
        <input name="prosene" type="text" id="prosene" value="<?= $prosene; ?>" size="5" /> %
      </label></td>
    </tr>
       <tr>
      <td width="50%" align="right">Profit / Lost (<?php echo $currencye; ?>) :</td>
      <td width="50%"><label>
        <input name="" type="text" id="" value="<?= $wine; ?>" size="20" disabled="disabled" />
      </label></td>
    </tr>
      
   <tr>
			
			
      <td width="50%" align="right">Rate Stake (<?php echo $currencye; ?>) :</td>
      <td width="50%"><label>
        <input name="ratein" type="text" id="ratein" value="<?= $ratein; ?>" size="20" />
      </label></td>
    </tr>
    
   <tr>
      <td width="50%" align="right">Rate End (<?php echo $currencye; ?>) :</td>
      <td width="50%"><label>
        <input name="rateout" type="text" id="rateout" value="<?= $rateout; ?>" size="20" /> 
      </label></td>
    </tr>
    
    <tr>
      <td colspan="2" align="center"><label>
        <button type="submit" name="submit" id="submit" class="submit" />UPDATE DATA</button>
      </label></td>
    </tr>
     <tr>
        <td width="50%" align="right" valign="top">&nbsp;</td>
        <td width="50%"><strong>
          &nbsp;
          </strong></td>
      </tr>
  </table>
   </fieldset>
   </div>
</form>
<p>&nbsp;</p>
<?php
}
?>