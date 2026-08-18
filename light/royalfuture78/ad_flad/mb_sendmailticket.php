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
<div class="cc01">
<?php
if (isset($_GET['do']) && $_GET['do'] == "send") {

$tujuan = anti_injection($_POST['tujuan']);		
$kode = anti_injection($_POST['kode']);	
$email = anti_injection($_POST['email']);	
$status = anti_injection($_POST['status']);	
$ticket = anti_injection($_POST['ticket']);	
$usere = anti_injection($_POST['usere']);	


if($status == 0){
header("location: ?go=send_mail_ticket&kode=$kode&result=inactive&kode=$kode&user=$usere");
	exit;
}else{

if($status == 2){
header("location: ?go=send_mail_ticket&kode=$kode&result=trans&kode=$kode&user=$usere");
	exit;
}else{

$smc = mysql_query("SELECT * FROM ticket WHERE ticket='".mysql_real_escape_string($kode)."' and username='$usere'");
$cekode = mysql_num_rows($smc);
if(!$cekode) {
header("location: ?go=send_mail_ticket&kode=$kode&result=error&kode=$kode&user=$usere");
	exit;
}else{

$db->update("ticket", "st='1', info='Sent to ".$tujuan." - ".$email."'", "ticket='$kode' and username='$usere'");

$from = "Administrator";



 $isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$nama_tujuan." (".$tujuan."),</p>
<p>PIN Registrasi Anda</p>
<p>
PIN: ".$ticket."<br>
Tanggal: ".$tgl."<br>
</p>


<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($email, $tujuan);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$tujuan.', PIN Registrasi Anda';
        $mail3->msgHTML($isimail);
        $mail3->send();	














if($mail_kirimticket_status == 1){
$tgl = formatgl($clientdate);
		$waktu = date("H:i:s");
$mail2 = new PHPMailer(); // defaults to using php "mail()"
$data2 = $mail_kirimticket_isi;
	$data2 = preg_replace("/{nama}/", $tujuan, $data2);			
    $data2 = preg_replace("/{username}/", $tujuan, $data2);
    $data2 = preg_replace("/{tgl}/", $tgl, $data2);
    $data2 = preg_replace("/{email}/", $email, $data2);
    $data2 = preg_replace("/{waktu}/", $waktu, $data2);	
    $data2 = preg_replace("/{from}/", $from, $data2);
    $data2 = preg_replace("/{user}/", $user_session, $data2);
    $data2 = preg_replace("/{ticket}/", $ticket, $data2);	
    $data2 = preg_replace("/{ipne}/", $ipne, $data2);	
	$data2 = preg_replace("/{hpadmin}/", $hpadmin, $data2);			
    $data2 = preg_replace("/{alamatadmin}/", $alamatadmin, $data2);
    $data2 = preg_replace("/{contactpage}/", $contactpage, $data2);
    $data2 = preg_replace("/{login}/", $login, $data2);
    $data2 = preg_replace("/{bisnisname}/", $bisnisname, $data2);
    $data2 = preg_replace("/{logomail}/", $logomail, $data2);
    $data2 = preg_replace("/{logourl}/", $logourl, $data2);
    $data2 = preg_replace("/{emailadmin}/", $emailadmin, $data2);
	$body2 = $data2;
	
	$data2x = $mail_kirimticket_subject;
	$data2x = preg_replace("/{nama}/", $tujuan, $data2x);	
	$subject_kirimticket_member = $data2x;

if($mailset == 1){	
$mail2->IsSMTP(); // telling the class to use SMTP
$mail2->Host       = $smtphost; // SMTP server
$mail2->SMTPAuth   = true;                  // enable SMTP authentication
$mail2->Host       = $smtphost; // sets the SMTP server
$mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail2->Username   = $smtpuser; // SMTP account username
$mail2->Password   = $smtpass;        // SMTP account password
}
$mail2->SetFrom(''.$emailadmin.'', ''.$bisnisname.'');
	$address2 = $email;
	$mail2->AddAddress($address2, "".$tujuan."");
	$mail2->IsHTML(true);      
	$mail2->Subject    = "".$subject_kirimticket_member."";
	$mail2->AltBody    = "Pesan HTML, Untuk melihat pesan, silakan menggunakan peninjau HTML email yang kompatibel!"; // Alt Body
	$mail2->MsgHTML($body2);

$mail2->Send();
}
echo "<script type=text/javascript>
              alert('Ticket has been Sent to ".$email.".');
              window.close();
              </script>";	
	exit;
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

$query = "SELECT status, amount, ticket, username, paketname FROM ticket WHERE ticket='".mysql_real_escape_string($kode)."' and username='$user'"; 
	 
$result = mysql_query($query);

$rowc = mysql_fetch_array($result);

$status = $rowc[0];
$amount = $rowc[1];
$ticket = $rowc[2];
$usere = $rowc[3];
$paketname = $rowc[4];
	 
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
<form name="sendticket" id="sendticket" method="post" action="?go=send_mail_ticket&do=send" />
						
	 <div class="form_style">
                        <fieldset>
                            <legend><font style="font-size:15px; font-family:Arial, Helvetica, sans-serif">&nbsp;Kirim PIN Registrasi&nbsp;-&nbsp;<?php echo $kode; ?>&nbsp;</font></legend>
						      <input type="hidden" id="kode" name="kode" value="<?php echo $kode; ?>"/>
						<input type="hidden" id="status" name="status" value="<?php echo $status; ?>"/>
						<input type="hidden" id="amount" name="amount" value="<?php echo $amount; ?>"/>
						<input type="hidden" id="ticket" name="ticket" value="<?php echo $ticket; ?>"/>
						<input type="hidden" id="usere" name="usere" value="<?php echo $usere; ?>"/>
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
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;Name :</label></td>
                               	  	<td width="72%">
                                    	
             <input type="text" name="tujuan" id="tujuan" style="width:210px" >
                                <div id='sendticket_tujuan_errorloc' style="font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; line-height:150%; color:#D72D2D" ></div>
                              </td>
                              </tr>
								
							<tr class="row2">
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;Email :</label></td>
                               	  	<td width="72%">
            <input type="text" name="email" id="email" style="width:210px" >
                              <div id='sendticket_email_errorloc' style="font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; line-height:150%; color:#D72D2D" ></div>
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
  var frmvalidator  = new Validator("sendticket");
  frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("tujuan","req","&#9679;&nbsp;&nbsp;Please Enter Name<br><br>");
   frmvalidator.addValidation("php_captcha","req","&#9679;&nbsp;&nbsp;Please Enter Captcha<br><br>");
    frmvalidator.addValidation("email","email","&#9679;&nbsp;&nbsp;Email Not Valid");
	 frmvalidator.addValidation("email","maxlen=100","&#9679;&nbsp;&nbsp;Max. 100 character");
    frmvalidator.addValidation("email","req","&#9679;&nbsp;&nbsp;Enter Email Address");
//]]></script>  
	  </article><!-- end of post new article -->
			
	  <?php } ?>
	  
	</div>