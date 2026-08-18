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
$hp = anti_injection($_POST['hp']);	
$status = anti_injection($_POST['status']);	
$ticket = anti_injection($_POST['ticket']);	
$usere = anti_injection($_POST['usere']);	

if($status == 0){
header("location: ?go=send_sms_ticket&kode=$kode&result=inactive&kode=$kode&user=$usere");
	exit;
}else{

if($status == 2){
header("location: ?go=send_sms_ticket&kode=$kode&result=trans&kode=$kode&user=$usere");
	exit;
}else{

$smc = mysql_query("SELECT * FROM ticket WHERE ticket='".mysql_real_escape_string($kode)."' and username='$usere'");
$cekode = mysql_num_rows($smc);
if(!$cekode) {
header("location: ?go=send_sms_ticket&kode=$kode&result=error&kode=$kode&user=$usere");
	exit;
}else{

$db->update("ticket", "st2='1', info='Sent to ".$tujuan." - ".$hp."'", "ticket='$kode' and username='$usere'");
$from = "Administrator";



if($hp){
$isipesanreg = "Halo ".$tujuan.", PIN Registrasi anda di ".$bisnisname.", PIN: ".$ticket.".";
//	mysql_query("insert into outbox values('', '', '$username', '$hp', '".mysql_real_escape_string($isipesanreg)."', '$clientdate', '1')") or die(mysql_error());
	if($smsgtw == 1 && $jsms == 1){
	$hpne = preg_replace('/\D+/', '', $hp);
	$smsreg = new smsreguler();
	$smsreg->username = $userkey;
		$smsreg->password = $passkey;
		$smsreg->apikey   = $apikey;
		$smsreg->setTo($hpne);
		$smsreg->setText($isipesanreg);
		$smsreg->smssend();
	}else if($smsgtw == 1 && $jsms == 2){
	$hpne = preg_replace('/\D+/', '', $hp);
	$smsreg = new smsmasking();
	$smsreg->username = $userkey;
		$smsreg->password = $passkey;
		$smsreg->apikey   = $apikey;
		$smsreg->setTo($hpne);
		$smsreg->setText($isipesanreg);
		$smsreg->smssend();
	}else if($smsgtw == 2){
	sendsms($hp, $isipesanreg) ;
	}else{}
}

	
echo "<script type=text/javascript>
              alert('Ticket has been Sent to ".$hp.".');
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
$query = "SELECT * FROM ticket WHERE ticket='".mysql_real_escape_string($kode)."' and username='$user'"; 
	 
$result = mysql_query($query);

$rowc = mysql_fetch_array($result);

$status = $rowc['status'];
$amount = $rowc['amount'];
$ticket = $rowc['ticket'];
$usere = $rowc['username'];
	 
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
<form name="sendticket" id="sendticket" method="post" action="?go=send_sms_ticket&do=send" />
						
	 <div class="form_style">
                        <fieldset>
                            <legend><font style="font-size:15px; font-family:Arial, Helvetica, sans-serif">&nbsp;Kirim PIN Registrasi&nbsp;-&nbsp;<?php echo $kode; ?>&nbsp;</font></legend>
						      <input type="hidden" id="kode" name="kode" value="<?php echo $kode; ?>"/>
						<input type="text" id="status" name="status" value="<?php echo $status; ?>"/>
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
                           	  <td width="28%"><label class="control-label" for="username">&nbsp;&nbsp;Mobile :</label></td>
                               	  	<td width="72%">
            <input type="text" name="hp" id="hp" style="width:210px">
                              <div id='sendticket_hp_errorloc' style="font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; line-height:150%; color:#D72D2D" ></div>
                              </td>
                              </tr>
                            	
								
								
								
								
								
								<tr>
                                	<td valign="top" align="right">&nbsp;</td>
                                  	<td valign="top"><button class='mmm_blue' name='submit' type='submit' >Send</button></td>

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
	 frmvalidator.addValidation("hp","maxlen=20","&#9679;&nbsp;&nbsp;Max. 20 character");
    frmvalidator.addValidation("hp","req","&#9679;&nbsp;&nbsp;Enter Mobile Number");
//]]></script>  
	  </article><!-- end of post new article -->
			
	  <?php } ?>
	  
</div>