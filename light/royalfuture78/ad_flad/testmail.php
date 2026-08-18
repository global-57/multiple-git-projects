<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
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

if(isset($_POST['submit'])){

$emailtest = $_POST['email'];

$mail_isi="Hello this is your test email... :)";
$subject_mailku = "Hello this is your test email";
$mail = new PHPMailer(); // defaults to using php "mail()"
$data = $mail_isi;
$body = $data;

		if($smaile == 1){	
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = $smtphost; // SMTP server
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = $smtphost; // sets the SMTP server
$mail->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail->Username   = $smtpuser; // SMTP account username
$mail->Password   = $smtpass;        // SMTP account password
}
$mail->SetFrom(''.$emailadmin.'', ''.$bisnisname.'');
	$address = $emailtest;
	$mail->AddAddress($address, "".$bisnisname."");
	$mail->IsHTML(true);      
	$mail->Subject    = "".$subject_mailku."";
	$mail->AltBody    = "Pesan HTML, Untuk melihat pesan, silakan menggunakan peninjau HTML email yang kompatibel!"; // Alt Body
	$mail->MsgHTML($body);

 if ($mail->Send()){
       echo "email sent";
    } else {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }


}else{

echo $smaile;
?>
 <div class="form_style">
<form id="form" name="form" method="post">
          <label> Email :
            <input name="email" type="text" id="email" />
            </label>
          <label>
            <?php if($demomode == 1){ ?>
	  <input type="button" onclick='return confirmActiondemomode()' name="submit" value="submit">
      <?php } else { ?>
            <input type="submit" name="submit" value="Send" />
            <?php } ?>
            </label>
        </form>
		</div>
		<?php } ?>