<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
<?php
if (empty($_COOKIE["usermin"])){
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

<div class="cc01">
<?php
if (isset($_GET['do']) && $_GET['do'] == "send") {

$tujuan = anti_injection($_POST['tujuan']);		
$kode = anti_injection($_POST['kode']);	
$memo = anti_injection($_POST['memo']);	
$status = anti_injection($_POST['status']);	
$amount = anti_injection($_POST['amount']);	
$ticket = anti_injection($_POST['ticket']);	
$usere = anti_injection($_POST['usere']);	
$paket = anti_injection($_POST['paket']);	
$paketnama = anti_injection($_POST['paketnama']);	


if($tujuan == $usere){
header("location: ?go=transfer_ticket&kode=$kode&result=sameuser");
	exit;
}else{

if($status == 0){
header("location: ?go=transfer_ticket&kode=$kode&result=inactive");
	exit;
}else{

if($status == 2){
header("location: ?go=transfer_ticket&kode=$kode&result=trans");
	exit;
}else{


$smcs = mysql_query("SELECT * FROM member WHERE username='".mysql_real_escape_string($tujuan)."'");
$cekodes = mysql_num_rows($smcs);
if(!$cekodes) {
header("location: ?go=transfer_ticket&kode=$kode&result=errorx");
	exit;
}else{


$nama = $db->dataku("nama", $usere);
$kota = $db->dataku("kota", $usere);
$nama_tujuan = $db->dataku("nama", $tujuan);
$kota_tujuan = $db->dataku("kota", $tujuan);
$email_tujuan = $db->dataku("email", $tujuan);

$db->insert("ticket_transfer", "", "'', '$usere', '$nama', '$kota', '$tujuan', '$nama_tujuan', '$kota_tujuan', '$kode', '$memo', '$email_tujuan', '$clientdate'"); 	
$db->update("ticket", "status='2', info='transfered to $tujuan'", "ticket='$kode' and username='$usere'");
$db->insert("ticket", "", "'', '$tujuan', '$kode', '1', '$clientdate', 'transfered from $usere', '', '', '', '', '$paket', '$paketnama'");





 $isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$nama_tujuan." (".$tujuan."),</p>
<p>Anda mendapatkan PIN Registrasi.</p>
<p>
PIN: ".$ticket."<br>
Paket: ".$paketnama."<br>
Tanggal: ".$tgl."<br>
</p>


<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email_tujuan, $nama_tujuan);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$nama_tujuan.', PIN Registrasi';
        $mail3->msgHTML($isimail);
        $mail3->send();	


echo "<script type=text/javascript>
              alert('Ticket has been transfered to ".$nama_tujuan.".');
              window.close();
              </script>";	
	exit;
}
}
}
}
?>



<?php
}else{


?>
<sectionx id="main" class="column" >
<?
$kode = anti_injection($_GET["kode"]);
$user = anti_injection($_GET["user"]);
$query = "SELECT * FROM ticket WHERE ticket='".mysql_real_escape_string($kode)."' and username='$user'"; 
	 
$result = mysql_query($query);

$rowc = mysql_fetch_array($result);

$status = $rowc['status'];
$amount = $rowc['amount'];
$ticket = $rowc['ticket'];
$usere = $rowc['username'];
$paket = $rowc['paket'];
$paketnama = $rowc['paketname'];
	 
?>	
<?php
$results = $_GET['result'];
if($results == "error") { 
echo "<div style='margin-left:12px'><div class='errorx'>Ticket Not Found!</div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "errorx") { 
echo "<div style='margin-left:12px'><div class='errorx'>Username Not Found!</div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "inactive") { 
echo "<div style='margin-left:12px'><div class='errorx'>Ticket can not transfered because already used!</div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "trans") { 
echo "<div style='margin-left:12px'><div class='errorx'>Ticket can not transfered because already transfered before!</div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin_none") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='errorx'>You do not have a PIN! Please create a PIN on the PIN menu.</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin_lock") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='errorx'>Your PIN has been blocked! Please contact Admin.</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin_invalid") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='errorx'>Your PIN is not active! Please Activated your PIN in the PIN Activation menu.</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='errorx'>Wrong PIN Code!</a></span></div></div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "sameuser") { 
echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='errorx'>Can Not transfer to same user!</a></span></div></div>";
}
?>
<form name="transticket" id="transticket" method="post" action="?go=transfer_ticket&do=send" />
             <div class="form_style">
                        <fieldset>
                            <legend><font style="font-size:15px; font-family:Arial, Helvetica, sans-serif">&nbsp;Transfer PIN Registrasi&nbsp;-&nbsp;<?php echo $kode; ?>&nbsp;</font></legend>
						      <input type="hidden" id="kode" name="kode" value="<?php echo $kode; ?>"/>
						<input type="hidden" id="status" name="status" value="<?php echo $status; ?>"/>
						<input type="hidden" id="amount" name="amount" value="<?php echo $amount; ?>"/>
						<input type="hidden" id="ticket" name="ticket" value="<?php echo $ticket; ?>"/>
						<input type="hidden" id="usere" name="usere" value="<?php echo $usere; ?>"/>
						<input type="hidden" id="paket" name="paket" value="<?php echo $paket; ?>"/>
						<input type="hidden" id="paketnama" name="paketnama" value="<?php echo $paketnama; ?>"/>
						    <table width="90%" >
							<tr>
                               	  <td width="28%" align="right">&nbsp;</td>
                               	  	<td width="72%">&nbsp;                                    </td>
                              </tr>
							<tr>
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;PIN Registrasi :</label></td>
                               	  	<td width="72%">
                                    	
             <input type="text" name="" id="" style="width:210px" value="<?php echo $kode; ?>" readonly="true">
                              </td>
                              </tr>
							
							<tr>
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;Username :</label></td>
                               	  	<td width="72%">
                                    	
            <select name="tujuan" onchange="value" class="form" required="required">
          <option value="">-- Pilih username tujuan--</option>
         <?php
				
					$sql=mysql_query("select username from member where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						
					?>
          <option value="<?php echo $sto[0]; ?>"> 
          <?php echo $sto[0]; ?>
          <?php
					}
					?>
        </select>
                              </td>
                              </tr>
								
							<tr class="row2">
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;Memo :</label></td>
                               	  	<td width="72%">
            <textarea name="memo" rows="5" id="memo" style="width:350px" >Hi, I am already transfer ticket to you, Ticket Code: <?php echo $kode; ?>.</textarea>
                              
                              </td>
                              </tr>
                            	
								
								
								<tr>
                                	<td valign="top" align="right">&nbsp;</td>
                                  	<td valign="top"><button class='mmm_blue' name='submit' type='submit'>Send</button></td>

                                </tr>
                        </table>

				</form>
				
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("transticket");
  frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("tujuan","req","&#9679;&nbsp;&nbsp;Please Enter Username<br><br>");
   frmvalidator.addValidation("php_captcha","req","&#9679;&nbsp;&nbsp;Please Enter Captcha<br><br>");
  frmvalidator.addValidation("memo","maxlen=200","&#9679;&nbsp;&nbsp;Memo max 200 character");
//]]></script>  
	  </article><!-- end of post new article -->
			
	  <?php } ?>
	  </div>