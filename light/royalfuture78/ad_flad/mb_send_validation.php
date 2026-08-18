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

$username = anti_injection($_POST['username']);	
$emaile = anti_injection($_POST['email']);	
$nama = $db->dataku("nama", $username);
$db->select("username, sess, email, token, pin, pass, batas", "validation", "username='".mysql_real_escape_string($username)."'");

if($db->num_rows() > 0) {
	//echo $db->result(0, "maintext");
	while($row = $db->fetch_row()) {
	 $username = $row[0];
     $sess = $row[1];
     $email = $row[2];
     $token = $row[3];
     $datenya = $row[4];
     $pass = $row[5];
     $batas = $row[6];

$expired = date('Y-m-d H:i:s', strtotime("+ 1 minutes"));
mysql_query("UPDATE validation SET pin='$expired', email='$emaile', batas=$row[6]+1 where username='".mysql_real_escape_string($username)."'");	

$rgg=base64_encode($emaile);
$link_valid = $validations."?rg=".$rgg."&sess=".$sess."&token=".$token;
	
$mail = new PHPMailer(); // defaults to using php "mail()"
$data = $mail_regconfirm_isi;
	$data = preg_replace("/{nama}/", $nama, $data);			
    $data = preg_replace("/{logomail}/", $logomail, $data);	
    $data = preg_replace("/{logourl}/", $logourl, $data);	
	$data = preg_replace("/{hpadmin}/", $hpadmin, $data);			
    $data = preg_replace("/{alamatadmin}/", $alamatadmin, $data);
    $data = preg_replace("/{contactpage}/", $contactpage, $data);
    $data = preg_replace("/{login}/", $login, $data);
    $data = preg_replace("/{bisnisname}/", $bisnisname, $data);
    $data = preg_replace("/{logomail}/", $logomail, $data);
    $data = preg_replace("/{logourl}/", $logourl, $data);
    $data = preg_replace("/{emailadmin}/", $emailadmin, $data);
    $data = preg_replace("/{domain}/", $domain, $data);
    $data = preg_replace("/{link_valid}/", $link_valid, $data);
    $data = preg_replace("/{contactpage}/", $contactpage, $data);
	$body = $data;
	
	$datax = $mail_regconfirm_subject;
	$datax = preg_replace("/{nama}/", $nama, $datax);	
	$subject_confirmregs = $datax;


if($mailset == 1){	
//$mail->IsSMTP(); // telling the class to use SMTP
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
	$mail->Subject    = "".$subject_confirmregs."";
	$mail->AltBody    = "Pesan HTML, Untuk melihat pesan, silakan menggunakan peninjau HTML email yang kompatibel!"; // Alt Body
	$mail->MsgHTML($body);
$mail->Send();
}
}else{
header("location: ?go=send_validation&user=$username&result=wrong_user");
exit;
}

echo "<script type=text/javascript>
              alert('Ticket has been Sent to ".$email.".');
              window.close();
              </script>";	
	exit;

?>



<?php
}else{


?>
<sectionx id="main" class="column" >
<?
$user = anti_injection($_GET["user"]);
$db->select("username, sess, email, token, pin, pass, batas", "validation", "username='".mysql_real_escape_string($user)."'");
if($db->num_rows() > 0) {
	//echo $db->result(0, "maintext");
	while($row = $db->fetch_row()) {
	 $username = $row[0];
     $sess = $row[1];
     $email = $row[2];
     $token = $row[3];
     $datenya = $row[4];
     $pass = $row[5];
     $batas = $row[6];
	}}
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
<form name="sendticket" id="sendticket" method="post" action="?go=send_validation&do=send" />
						
	 <div class="form_style">
                        <fieldset>
                            <legend><font style="font-size:15px; font-family:Arial, Helvetica, sans-serif">&nbsp;RESEND EMAIL ACTIVATION&nbsp;-&nbsp;<?php echo $kode; ?>&nbsp;</font></legend>
						<input type="hidden" id="username" name="username" value="<?php echo $username; ?>"/>
						    <table width="90%" >
							<tr>
                               	  <td width="28%" align="right">&nbsp;</td>
                               	  	<td width="72%">&nbsp;                                    </td>
                              </tr>
							<tr>
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;Username :</label></td>
                               	  	<td width="72%">
                                    	
              <input type="text" name="" id="" style="width:210px" value="<?php echo $username; ?>" readonly="true">
                              </td>
                              </tr>
							
						
								
							<tr class="row2">
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;Email :</label></td>
                               	  	<td width="72%">
            <input type="text" name="email" id="email" value="<?php echo $email; ?>" style="width:210px" >
                              <div id='sendticket_email_errorloc' style="font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; line-height:150%; color:#D72D2D" ></div>
                              </td>
                              </tr>
                            	
								
								
								<tr>
                                	<td valign="top" align="right">&nbsp;</td>
                                  	<td valign="top"><button class='mmm_blue' name='submit' type='submit'>Send</button></td>

                                </tr>
                        </table>

				</form>		

	  </article><!-- end of post new article -->
			
	  <?php } ?>
	  
	</div>