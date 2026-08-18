<?php
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
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
		Update   ::       2013 � Primadesain.Com
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


<div class="cc01">
<h2><img src="images/coins.png" width="48" height="48" align="absmiddle"> ADD FUND BTC PIN</h2>
<?php
if (isset($_GET['page']) && $_GET['page'] == "edit") {
	
if(isset($_GET["user"])){ $user = $_GET["user"]; }
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }
if(isset($_GET["jn"])){ $jn = $_GET["jn"]; }
	//---tgl mbr pertama aktif--
if($jn == 1){
	$jns="datacwalet";
}else{ }
	
$query113 = "SELECT * FROM $jns WHERE kode='$kode'"; 
$result113 = mysql_query($query113);
$row113 = mysql_fetch_array($result113);
$nilai = $row113['jumlah'];
$kodene = $row113['kode'];
$usere = $row113['username'];
$tujuan = $row113['tujuan'];
$accid = $row113['accid'];
$accid2 = $row113['accid2'];
		
	?>
<form id="ewalet" name="form1" method="post" action="?go=emoneys&page=editgo">
 <div class="form_style">
                        <fieldset>
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="4" class="table">
   <tr class="tbl_header">
        <td colspan="2" align="left"><h3></h3></td>
      </tr>
    <tr>
      <td width="50%" align="right">Wallet ID :</td>
      <td width="50%"><label>
       <input name="" type="text" id="" size="20" disabled="disabled"  value="<?php echo $accid; ?>"/>
       <input name="user" type="hidden" id="user" size="20" value="<?php echo $usere; ?>"/>
       <input name="tujuan" type="hidden" id="tujuan" size="20" value="<?php echo $tujuan; ?>"/>
       <input name="jn" type="hidden" id="jn" size="20" value="<?php echo $jn; ?>"/>
       <input name="accid" type="hidden" id="accid" size="20" value="<?php echo $accid; ?>"/>
       <input name="accid2" type="hidden" id="accid2" size="20" value="<?php echo $accid2; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td width="50%" align="right">Kode Transaksi :</td>
      <td width="50%"><label>
       <input name="kodene" type="text" id="kodene" size="20" value="<?= $kodene; ?>" readonly="readonly"/>
      </label></td>
    </tr>
    <tr>
      <td width="50%" align="right">Nilai :</td>
      <td width="50%"><label>
       <input name="jumlah" type="text" id="jumlah" size="20" value="<?= $nilai; ?>"/>
      </label></td>
    </tr>
   
    <tr>
      <td colspan="2" align="center"><label>
        <button type="submit" name="submit" id="submit" class="submit"  onclick="return confirmActionedit()"/>Edit</button>
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
  
  
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "editgo") {
	

$user = $_POST['user'];
			$jumlah = $_POST['jumlah'];
			$kodene = $_POST['kodene'];
			$tujuan = $_POST['tujuan'];
			$accid = $_POST['accid'];
			$accid2 = $_POST['accid2'];
			$jn = $_POST['jn'];
			$jumlahdepone = rupiah($jumlah);

if($jn == 1){
	$jns="datacwalet";
$uraian = "BTC PIN Balance";

}else{ }

$nama = $db->dataku("nama", $tujuan);
		$email = $db->dataku("email", $tujuan);
		$hp = $db->dataku("hp", $tujuan);


$db->update("$jns", "jumlah='$jumlah'", "kode='$kodene'");

//$db->update("dataewalet", "jumlah='$jumlah'", "kode='$kodene'");



echo "<br><br><div class='successx'>Data berhasil diubah</div><br><br>";


?>




<?php
}else if (isset($_GET['page']) && $_GET['page'] == "kirim") {
	$tujuan = $_POST['tujuan'];
			$jumlah = $_POST['jumlah'];
			$ket = $_POST['ket'];
			$kode = $_POST['kode'];
			$jenis = $_POST['jenis'];
			//$accid = $_POST['accid'];
			$usertujuan=$db->datane("username", $tujuan);
		
			$infokirim = $_POST['infokirim'];
			if($jenis == "cwallet"){
			$db->select("kode", "datacwalet", "kode='$kode'");
			}
			$ada = $db->num_rows();

if ($ada >0) {
    echo "<br><br><div class='errorx'>Transaksi ini sudah diproses sebelumnya</div><br><br>";
	
} else {
			
	if($jenis == "cwallet"){
$uraian = "BTC PIN Balance";
$uraian2 = "Add BTC PIN Balance from Administrator";
$db->insert("datacwalet", "", "'', '$kode', 'administrator', '$jumlah', '$uraian2 (Memo: $ket)', '$usertujuan', '$clientdate', 1, '$clientdate', 'administrator', '$tujuan'"); 	


}else{ }		
			
			
			//$mastere = $valid_admin
		//	$db->insert("dataewalet", "", "'', '$kode', 'admin-1', '$jumlah', '$uraian2 untuk $tujuan (Memo: $ket)', '$tujuan', '$clientdate', 1"); 		
		
	
	
	$nama = $db->dataku("nama", $tujuan);
		$email = $db->dataku("email", $tujuan);
		$hp = $db->dataku("hp", $tujuan);
		$emailadmin = $db->config("email");
		$keterangan = $uraian2." untuk ".$tujuan>" (Memo: $ket)";
		$invne = rupiah($jumlah);
		$tgl = formatgl($clientdate);
		$jumlahdepone = rupiah($jumlah);
		$jumlahdepone2 = rupiah($jumlah);
		$balances = $db->myewalet($tujuan);
		$balance = rupiah($balances);
		$waktu = date("H:i:s");
		
		
		
		
		$sess = substr(str_shuffle(str_repeat("4453141119066764203711128717497783625536342396411241472162223777", 64)), 0, 22);
			$invc="invoice_".$tujuan."_".$sess."_".$kode;
			$inv="http://".$domain."/invoice/".$invc.".pdf";
		//	$db->insert("invoice","","'', '$tujuan', '$kode', '$invc', '$clientdate'");
//


	
		$from="Administrator";
	
	
	if($infokirim == 1){
	
	
	if($mail_tambah_saldo_wallet_status == 1){
$mail = new PHPMailer(); // defaults to using php "mail()"
$data = $mail_tambah_saldo_wallet_isi;
	$data = preg_replace("/{nama}/", $nama, $data);			
    $data = preg_replace("/{user}/", $tujuan, $data);
    $data = preg_replace("/{tgl}/", $tgl, $data);
    $data = preg_replace("/{waktu}/", $waktu, $data);	
    $data = preg_replace("/{kode}/", $kode, $data);
    $data = preg_replace("/{type}/", $uraian, $data);
    $data = preg_replace("/{info}/", $ket, $data);
    $data = preg_replace("/{amount}/", $jumlahdepone, $data);	
    $data = preg_replace("/{keterangan}/", $keterangan, $data);
    $data = preg_replace("/{ipne}/", $ipne, $data);	
	$data = preg_replace("/{hpadmin}/", $hpadmin, $data);			
    $data = preg_replace("/{alamatadmin}/", $alamatadmin, $data);
    $data = preg_replace("/{contactpage}/", $contactpage, $data);
    $data = preg_replace("/{login}/", $login, $data);
    $data = preg_replace("/{bisnisname}/", $bisnisname, $data);
    $data = preg_replace("/{logomail}/", $logomail, $data);
    $data = preg_replace("/{logourl}/", $logourl, $data);
    $data = preg_replace("/{emailadmin}/", $emailadmin, $data);
	$data = preg_replace("/{from}/", $from, $data);
	$body = $data;
	
	$datax = $mail_tambah_saldo_wallet_subject;
	$datax = preg_replace("/{nama}/", $nama, $datax);	
	$mail_tambah_saldo_wallet_subjectx = $datax;

if($mailset == 1){	
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = $smtphost; // SMTP server
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = $smtphost; // sets the SMTP server
$mail->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail->Username   = $smtpuser; // SMTP account username
$mail->Password   = $smtpass;        // SMTP account password
}
$mail->SetFrom(''.$emailadmin.'', ''.$bisnisname.'');
	$address = $email;
	$mail->AddAddress($address, "".$nama."");
	$mail->IsHTML(true);      
	$mail->Subject    = "".$mail_tambah_saldo_wallet_subjectx."";
	$mail->AltBody    = "Pesan HTML, Untuk melihat pesan, silakan menggunakan peninjau HTML email yang kompatibel!"; // Alt Body
	$mail->MsgHTML($body);
	//$mail->AddAttachment("../invoice/".$invc.".pdf");      // attachment
	
$mail->Send();
}}




	?>
    
<fieldset>
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr class="tbl_header">
        <td colspan="2" align="center" style="color:#FF0000"><h3>ADD BALANCE BTC PIN SUCCESS!</h3></td>
      </tr>
      <tr>
        <td align="right">Nomor kwitansi :</td>
        <td><strong>
        <?php echo $kode; ?>
        </strong></td>
      </tr>
      <tr>
        <td width="50%" align="right">Wallet ID tujuan : </td>
        <td width="50%"><strong>
        <?php echo $tujuan; ?>
        </strong></td>
      </tr>
       
      <tr>
        <td align="right">Jumlah ditambahkan : </td>
        <td><strong><?php echo rupiah($jumlah); ?></strong></td>
      </tr>
      <tr>
        <td align="right">Keterangan :</td>
        <td><?php echo $ket; ?></td>
      </tr>
        <tr>
        <td align="right">Invoice :</td>
        <td><a href='../invoice/<?php echo $invc;?>.pdf' download='<?php echo $invc;?>.pdf'><img src='../images/pdf.png' border='0' /></a></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><strong>Telah berhasil ditambahkan!</strong></td>
      </tr>
     
</table>
<center>
<br /><br />
 <script language="Javascript">

        function redirectToFB(){
            window.opener.location.href="index.php?go=coins";
            self.close();
        }

    </script>
 <a href="javascript:window.close()"><button type="button" class="nmnm" OnClick="redirectToFB()">Selesai</button></a>
<br /><br />
</center>
 </fieldset>
    			
	
 
     
<?php
}
?>
<?php

}else if (isset($_GET['page']) && $_GET['page'] == "addfund") {
	if(isset($_GET["user"])){ $user = $_GET["user"]; }
$kode = substr(str_shuffle(str_repeat("4453B141119A06676420371LPMBTEFWX112D8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 13);

 ?>
<form id="ewalet" name="form1" method="post" action="?go=emoneys&page=kirim">
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
      <td width="50%" align="right">ID Wallet tujuan :</td>
      <td width="50%"><label>
        <select name="tujuan" id="tujuan">
      
      <option value="000" selected="selected">[ Pilih ID Wallet ]</option>
      <?php if($accid){ ?>
      <option value="<?php echo $accid; ?>" selected="selected"><?php echo $accid; ?></option>
      <?php } ?>
      <?php
	 	$db->select("accid", "member", "", "accid");
		while($row=$db->fetch_row()) {
			echo "<option value='$row[0]'>$row[0]</option>";
		}
		?>	
        </select>
      </label></td>
    </tr>
   
    <tr>
      <td align="right">Jumlah balancee :</td>
      <td><input name="jumlah" type="text" id="jumlah" size="20" required='required'/>
	   <input name="kode" type="hidden" id="kode" value="<?php echo $kode; ?>" size="15" />
       <input name="jenis" type="hidden" id="jenis" value="cwallet" size="15" />
	  </td>
    </tr>
    <tr>
      <td align="right" valign="top">Catatan :</td>
      <td><textarea name="ket" cols="40" rows="5" id="ket"></textarea></td>
    </tr>

      <tr>
      <td width="50%" align="right">Kirim Email :</td>
      <td width="50%"><label>
       <select name="infokirim" id="infokirim" >
              <option value="0" selected="selected">Tidak</option>
              <option value="1" >Ya</option>
		  </select> 
      </label></td>
    </tr>
    
    <tr>
      <td colspan="2" align="center"><label>
        <button type="submit" name="submit" id="submit" class="submit" />SEND</button>
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
