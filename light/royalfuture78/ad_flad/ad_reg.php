<?php ob_start(); ?>
<?php 
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:100px; font-size:20px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Accessing files directly is prohibited.</p><p style='font-family:Arial, Helvetica, sans-serif; margin-top:20px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." <a href='http://www.primadesain.com'>www.primadesain.com</a></p>";
echo "<meta http-equiv=\"refresh\" content=\"5; url=../index.php\">";
exit();} 

// // #-----------------------------------------------------------------------------#
// // #-------------------------------.*PRIMADESAIN*.-------------------------------#
// // #-------------------------------: Script COIN :-------------------------------#
// // #------------------- Copyright 2009-2015 Primadesain.com ---------------------#
// // #----------- Email: primapc57@gmail.com Phone: +62 852 2865 7360 -------------#
// // #--------- http://www.primadesain.com - http://www.primadesain.net -----------#
// // #-----------------------------------------------------------------------------#
// // #------------- Primadesain.Com | Jasa Webdesain Bisnis Online ----------------#
// // #--- Website Bisnis MLM, Bisnis Investasi, Forex, Hyip, Binary, Trinary, -----#
// // #------- Matrix 4 -- 10, Toko Online, Iklan Baris, Profil, Reseller. ---------#
// // #-----------------------------------------------------------------------------#
// // # This software is  furnished  under a  license and may  be used and   copied #
// // # only  in accordance with the terms of such  license and with  the inclusion #
// // # of  the above copyright notice.  This software or any other  copies thereof #
// // # may not be  provided or otherwise made available  to any other person.   No #
// // # title to and  ownership of the software is hereby transferred.              #
// // #                                                                             #
// // # You  may  not  reverse   engineer,  decompile,  defeat  license  encryption #
// // # mechanisms, or  disassemble  this  software  product  or software   product #
// // # license. We  may terminate  this license if you  don't comply  with any  of #
// // # the terms and   conditions set forth   in our  End  User  License Agreement #
// // # (EULA). In  such event, licensee  agrees to return licensor or  destroy all #
// // # copies of software upon termination  of the license.                        #
// // # Please see the EULA file for the full End User License Agreement.           #
// // ###############################################################################
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
?>
<?php
if (empty($_SESSION["valid_admin"])){
$string = "Your are not valid administrator, please login valid admin to access this page."; 
echo "<script>alert(\"$string\");"."window.location = './login.php'</script>";
}else{
?>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" /> Register</h2>
<?php

if (isset($_GET['dt']) && $_GET['dt'] == "send") {
	

$_SESSION["namae"] = anti_injection($_POST["nama"]);
$_SESSION["passworde"] = $_POST["password1"];
$_SESSION["pine"] = $_POST["pin"];
$_SESSION["emaile"] = $_POST["email"];
$_SESSION["hpne"] = $_POST["hp"];	
$_SESSION["username"] = $_POST["username"];	
$_SESSION["pine"] = $_POST["pin"];
$_SESSION["kotane"] = $_POST["kota"];	
$_SESSION["produke"] = anti_injection($_POST["produk"]);	
$_SESSION["amounte"] = anti_injection($_POST["amount"]);
$_SESSION["banke"] = $_POST["bank"];
$_SESSION["bankacc"] = $_POST["bankacc"];
$_SESSION["bankname"] = $_POST["bankname"];			


$nama = anti_injection($_POST['nama']);
$hp = anti_injection($_POST['hp']);
$email = anti_injection($_POST['email']);
$password1 = anti_injection($_POST['password1']);
$kota = anti_injection($_POST['kota']);
$bank = anti_injection($_POST['bank']);
$bankacc = anti_injection($_POST['bankacc']);
$bankname = anti_injection($_POST['bankname']);

$usernamed = str_replace(' ', '', $_POST['username']);	
$username = anti_injection($usernamed);	


$pin = substr(str_shuffle(str_repeat("44531411190667642037112717497783625536342396411241472162223777", 64)), 0, 5);


$banks = $bank." ".$bankacc;
$bnkcek = preg_replace('/\s+/','',$banks);
$bankcek = strtolower($bnkcek);
$pygtway = $banks;


$sponsore = anti_injection($_POST['sponsore']);
$dtt = anti_injection($_POST['dtt']);
if($dtt == 1){
$upline = anti_injection($_POST['upline']);
$posisi = anti_injection($_POST['posisi']);
$sttss="&sp=$sponsore&up=$upline&pos=$posisi&dt=1";
}else{
$upline = spillover("random", $sponsore);
$posisi = spillover("pos", $sponsore);
$sttss="";
}

$fsr = explode(" ", $nama);
$firstname = $fsr[0];	
$lastname = $fsr[1];

if(!ctype_alnum($usernamed)){
header('location: ?go=register&result=alnum$sttss');	
	exit;
}else{ 


$cid = anti_injection($_POST['cid']);

$sql_sp32 = mysql_query("select accid from member where accid='".mysql_real_escape_string($cid)."'");
$ada_sp32 = mysql_num_rows($sql_sp32);
if($ada_sp32 > 0){
$sqlckid=mysql_query("select accid from member where accid like '".$cptidne."%' order by id desc");
		if(mysql_num_rows($sqlckid) > 0) {
		$mbrckid = mysql_fetch_row($sqlckid);
		$lastck_id = substr($mbrckid[0], -6);
		} else {
		$lastck_id = $lastidne;
		}		
		$kodecid = $cptidne;
		$newc_id = ($lastck_id + 1);
		$newc_id2 = $kodecid.$newc_id;
		$ccidne = $newc_id2;		
}else{
$ccidne = $cid;
}



$sql_sp3 = mysql_query("select username from member where username='".mysql_real_escape_string($sponsore)."' and status=1");
$ada_sp3 = mysql_num_rows($sql_sp3);
if(!$ada_sp3){
header("location: ?go=register&result=wrong_sponsor$sttss");
exit;

} else {	
	

$level = $db->dataupline("level", $upline);

 $upline0= $db->dataupline("upline0", $upline);
		$upline1= $db->dataupline("upline1", $upline);
		$upline2= $db->dataupline("upline2", $upline);
		$upline3= $db->dataupline("upline3", $upline);
		$upline4= $db->dataupline("upline4", $upline);
		$upline5= $db->dataupline("upline5", $upline);
		$upline6= $db->dataupline("upline6", $upline);
		$upline7= $db->dataupline("upline7", $upline);
		$upline8= $db->dataupline("upline8", $upline);
		$upline9= $db->dataupline("upline9", $upline);
		$upline10= $db->dataupline("upline10", $upline);
		$upline11= $db->dataupline("upline11", $upline);
		$upline12= $db->dataupline("upline12", $upline);
		$upline13= $db->dataupline("upline13", $upline);
		$upline14= $db->dataupline("upline14", $upline);
		$upline15= $db->dataupline("upline15", $upline);
		$upline16= $db->dataupline("upline16", $upline);
		$upline17= $db->dataupline("upline17", $upline);
		$upline18= $db->dataupline("upline18", $upline);
		$upline19= $db->dataupline("upline19", $upline);
		$upline20= $db->dataupline("upline20", $upline);
		$upline21= $db->dataupline("upline21", $upline);
		$upline22= $db->dataupline("upline22", $upline);
		$upline23= $db->dataupline("upline23", $upline);
		$upline24= $db->dataupline("upline24", $upline);
		$upline25= $db->dataupline("upline25", $upline);
		$upline26= $db->dataupline("upline26", $upline);
		$upline27= $db->dataupline("upline27", $upline);
		$upline28= $db->dataupline("upline28", $upline);
		$upline29= $db->dataupline("upline29", $upline);
		$upline30= $db->dataupline("upline30", $upline);
		$upline31= $db->dataupline("upline31", $upline);
		$upline32= $db->dataupline("upline32", $upline);
		$upline33= $db->dataupline("upline33", $upline);
		$upline34= $db->dataupline("upline34", $upline);
		$upline35= $db->dataupline("upline35", $upline);
		$upline36= $db->dataupline("upline36", $upline);
		$upline37= $db->dataupline("upline37", $upline);
		$upline38= $db->dataupline("upline38", $upline);
		$upline39= $db->dataupline("upline39", $upline);
		$upline40= $db->dataupline("upline40", $upline);
		$upline41= $db->dataupline("upline41", $upline);
		$upline42= $db->dataupline("upline42", $upline);
		$upline43= $db->dataupline("upline43", $upline);
		$upline44= $db->dataupline("upline44", $upline);
		$upline45= $db->dataupline("upline45", $upline);
		$upline46= $db->dataupline("upline46", $upline);
		$upline47= $db->dataupline("upline47", $upline);
		$upline48= $db->dataupline("upline48", $upline);
		$upline49= $db->dataupline("upline49", $upline);
		$upline50= $db->dataupline("upline50", $upline);
		$upline51= $db->dataupline("upline51", $upline);
		$upline52= $db->dataupline("upline52", $upline);
		$upline53= $db->dataupline("upline53", $upline);
		$upline54= $db->dataupline("upline54", $upline);
		$upline55= $db->dataupline("upline55", $upline);
		$upline56= $db->dataupline("upline56", $upline);
		$upline57= $db->dataupline("upline57", $upline);
		$upline58= $db->dataupline("upline58", $upline);
		$upline59= $db->dataupline("upline59", $upline);
		$upline60= $db->dataupline("upline60", $upline);
	    $upline61= $db->dataupline("upline61", $upline);
		$upline62= $db->dataupline("upline62", $upline);
		$upline63= $db->dataupline("upline63", $upline);
		$upline64= $db->dataupline("upline64", $upline);
		$upline65= $db->dataupline("upline65", $upline);
		$upline66= $db->dataupline("upline66", $upline);
		$upline67= $db->dataupline("upline67", $upline);
		$upline68= $db->dataupline("upline68", $upline);
		$upline69= $db->dataupline("upline69", $upline);
		$upline70= $db->dataupline("upline70", $upline);
		$upline71= $db->dataupline("upline71", $upline);
		$upline72= $db->dataupline("upline72", $upline);
		$upline73= $db->dataupline("upline73", $upline);
		$upline74= $db->dataupline("upline74", $upline);
		$upline75= $db->dataupline("upline75", $upline);
		$upline76= $db->dataupline("upline76", $upline);
		$upline77= $db->dataupline("upline77", $upline);
		$upline78= $db->dataupline("upline78", $upline);
		$upline79= $db->dataupline("upline79", $upline);
		$upline80= $db->dataupline("upline80", $upline);
	    $upline81= $db->dataupline("upline81", $upline);
		$upline82= $db->dataupline("upline82", $upline);
		$upline83= $db->dataupline("upline83", $upline);
		$upline84= $db->dataupline("upline84", $upline);
		$upline85= $db->dataupline("upline85", $upline);
		$upline86= $db->dataupline("upline86", $upline);
		$upline87= $db->dataupline("upline87", $upline);
		$upline88= $db->dataupline("upline88", $upline);
		$upline89= $db->dataupline("upline89", $upline);
		$upline90= $db->dataupline("upline90", $upline);
		$upline91= $db->dataupline("upline91", $upline);
		$upline92= $db->dataupline("upline92", $upline);
		$upline93= $db->dataupline("upline93", $upline);
		$upline94= $db->dataupline("upline94", $upline);
		$upline95= $db->dataupline("upline95", $upline);
		$upline96= $db->dataupline("upline96", $upline);
		$upline97= $db->dataupline("upline97", $upline);
		$upline98= $db->dataupline("upline98", $upline);
		$upline99= $db->dataupline("upline99", $upline);
		$upline100= $db->dataupline("upline100", $upline);



	$db->select("username", "member", "username='$username'");
	$chkd_user = $db->num_rows();
	
if ($chkd_user!= "") {
	 	header("location: ?go=register&result=wrong_user$sttss");

exit;
} else {
	
	$usernames = strtolower($username);
	if ($usernames== "admin" || $usernames== "administrator" || $usernames== "pengelola") {
	 	header("location: ?go=register&result=restrict_user$sttss");
exit;
} else {	
	
	
$cekhpmaile = mysql_query("select email from member where email='".mysql_real_escape_string($email)."'");
$ada_maile = mysql_num_rows($cekhpmaile); //---flush out hari ini
if ($mail_batase > 0 && $ada_maile > $mail_batase) {
header("location: ?go=register&result=wrong_email$sttss");
exit;

}else{
$cekhpmaile2 = mysql_query("select hp from member where hp='".mysql_real_escape_string($hp)."'");
$ada_maile2 = mysql_num_rows($cekhpmaile2); //---flush out hari ini
if ($hp_batase > 0 && $ada_maile2 > $hp_batase) {
header("location: ?go=register&result=wrong_hp$sttss");
exit;

}else{
//---------masukkan data new member ke dalam database---------------
	//$db->select("id", "tree", "username='$sponsore'");
		$pass=md5($password1);
        $pins=md5($pin);
		$levele = $level + 1;
		if($levele > 100){
		$levele = "100";
		}
	
	
	
$stmpkodene = substr(str_shuffle(str_repeat("4453B141119A06676420371LPMBTEFWX112D8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 12);
$stkodexx = substr(str_shuffle(str_repeat("4453B141119A06676420371112D8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 10);


	$db->insert("member", "", "'', '".mysql_real_escape_string($username)."', '$pass', '$nama', '$sponsore', '$upline', '".mysql_real_escape_string($email)."', '".mysql_real_escape_string($alamat)."', '".mysql_real_escape_string($kota)."', '', '".mysql_real_escape_string($kodepos)."', '".mysql_real_escape_string($hp)."', '', '$banks', '".$_SERVER['REMOTE_ADDR']."', 'foto', '$amount', '$clientdate', '$clientdate', '1', '$hrgn', '0', '0','','','kodeblokir','','".mysql_real_escape_string($negara)."','','','$stmpkodene','$pringkate','','','$bankcek', '$ccidne','','','','','','','','','','','','','','','','','','','','','1','0'");

//$db->update("ticket", "status='0', info='regstrasi member $username'", "ticket='".mysql_real_escape_string($ticket)."' and status='1' and ticket <> '9999999999'");
	$db->insert("dataswalet", "", "'', '$stmpkodene', 'administrator', '$freebalance', 'Free Register Balance', '$username', '$clientdate', '1', '$clientdate', '', ''");	
$db->insert("acc", "", "'', '$username', '$password1', '$pin'");
$db->insert("pincode", "", "'', '$username', '$pins', '1', '$clientdate', '', ''");
$db->insert("ewalet", "", "'', '$username', '$pass', '$clientdate', '1', '', '$ccidne'");
		
	$db->insert("upline", "", "'', '$username', '$sponsore', '$posisi', '$L1', '$L2', '', '', '', '', '', '', '', '', '$upline', '$upline0', '$upline1', '$upline2', '$upline3', '$upline4', '$upline5', '$upline6', '$upline7', '$upline8', '$upline9', '$upline10', '$upline11', '$upline12', '$upline13', '$upline14', '$upline15', '$upline16', '$upline17', '$upline18', '$upline19', '$upline20', '$upline21', '$upline22', '$upline23', '$upline24', '$upline25', '$upline26', '$upline27', '$upline28', '$upline29', '$upline30', '$upline31', '$upline32', '$upline33', '$upline34', '$upline35', '$upline36', '$upline37', '$upline38', '$upline39', '$upline40', '$upline41', '$upline42', '$upline43', '$upline44', '$upline45', '$upline46', '$upline47', '$upline48', '$upline49', '$upline50', '$upline51', '$upline52', '$upline53', '$upline54', '$upline55', '$upline56', '$upline57', '$upline58', '$upline59', '$upline60', '$upline61', '$upline62', '$upline63', '$upline64', '$upline65', '$upline66', '$upline67', '$upline68', '$upline69', '$upline70', '$upline71', '$upline72', '$upline73', '$upline74', '$upline75', '$upline76', '$upline77', '$upline78', '$upline79', '$upline80', '$upline81', '$upline82', '$upline83', '$upline84', '$upline85', '$upline86', '$upline87', '$upline88', '$upline89', '$upline90', '$upline91', '$upline92', '$upline93', '$upline94', '$upline95', '$upline96', '$upline97', '$upline98', '$upline99', '$levele', '0', '0', '0', '1'");
		
		
	//$db->insert("tree", "", "'', '$username', '$id_up', '$id_upline', '$ket'");


if($posisi == "L1") {
			$db->update("upline", "L1='$username'", "username='$upline'");
	} elseif($posisi == "L2") {
		$db->update("upline", "L2='$username'", "username='$upline'");
	}	
		



$expdy=formatgl($expired);
	



$jumlahdepone = rupiah($biaya);
$prodd="Package ".$myproduk."";


	
	//mysql_close();
//--------isi mail ke admin-------------	
	//$db->aktivasi($username);		
//if($sms_activations == 1) {
	//$codesms = substr(number_format(time() * mt_rand(),0,'',''),0,7);
	//mysql_query("insert into sms_validation values('','".mysql_real_escape_string($username)."', '$stkode', '$codesms', '$hp', '".mysql_real_escape_string($email)."', '', '$clientdate')") or die(mysql_error());
	//if($sms_activation_status == 1){	
//	$datasms = $sms_activation_isi;
//	$datasms = preg_replace("/{firstname}/", $firstname, $datasms);	
//	$datasms = preg_replace("/{domain}/", $domain, $datasms);					
 //   $datasms = preg_replace("/{codesms}/", $codesms, $datasms);	
//	$isipesan = $datasms;
//	mysql_query("insert into outbox values('', '$stkode', '".mysql_real_escape_string($username)."', '$hp', '$isipesan', '$clientdate', '1')") or die(mysql_error());
//	sendsms($hp, $isipesan) ;
	//}
	//}
//$db->aktivasi($username);


$tkk = date('dmYHis', strtotime($clientdate));
$tokens = substr(str_shuffle(str_repeat("4453B141119A06676420371112GEHDLPD8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 48);

$invc = "REG_".strtoupper($username)."_".$tkk."_".$stmpkodene."_".$tokens;
$inv = "http://".$domain."/invoice/".$invc.".pdf";
$db->insert("invoice", "", "'', '$username', '$stmpkodene', '$invc', '$clientdate'");   

 $bank = $db->config("bank");if($bank){ $banke = $bank; }
 $bank1 = $db->config("bank1");if($bank1){ $banke1 = $bank1; }
 $bank2 = $db->config("bank2");if($bank2){ $banke2 = $bank2; }
 $bank3 = $db->config("bank3");if($bank3){ $banke3 = $bank3; }


$spnsnama = $db->dataku("nama", $sponsore);
		$spnsmail = $db->dataku("email", $sponsore);

$db->aktivasi($username);

if($hp){
$isipesan = "Helo ".$nama.", thanks for joined with ".$bisnisname.". Your login detail, Username: ".$username.", Password: ".$password1.", PIN: ".$pin.".";
	mysql_query("insert into outbox values('', '', '$username', '$hp', '$isipesan', '$clientdate', '1')");
	if($smsgtw == 1 && $jsms == 1){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsreguler();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 1 && $jsms == 2){
	$hpne = preg_replace('/\D+/', '', $hp);
	$sms = new smsmasking();
	$sms->username = $userkey;
		$sms->password = $passkey;
		$sms->apikey   = $apikey;
		$sms->setTo($hpne);
		$sms->setText($isipesan);
		$sms->smssend();
	}else if($smsgtw == 2){
	sendsms($hp, $isipesan) ;
	}else{}
}

$tt = date('d-m-Y', strtotime($clientdate));
$jame = date('H:i', strtotime($clientdate));

$tkk = date('d-m-Y-H-i-s', strtotime($clientdate));
$tokens = md5(md5(date("Y-m-d H:i:s")));
$stmpkode = strtotime(date("Y-m-d H:i:s"));

$isimail1="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama_bisnis.",</p>
<p>Someone has signed up at ".$bisnisname.".</p>

<p>
Username : ".$username."<br>
Name : ".$nama."<br>
Phone : ".$phone."<br>
Email : ".$email."<br>
Password : ".$password1."<br>
PIN : ".$pin."
Wallet ID : ".$ccidne."
</p>
<p>
<strong>Network:</strong><br>
Sponsor : ".$sponsore."<br>
Upline : ".$upline."
</p>

<p>
Date Register : ".$tgl."
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail1 = new PHPMailer;
		$mail1->IsSMTP(); // telling the class to use SMTP
        $mail1->Host       = $smtphost; // SMTP server
        $mail1->SMTPAuth   = true;                  // enable SMTP authentication
        $mail1->Host       = $smtphost; // sets the SMTP server
        $mail1->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail1->Username   = $smtpuser; // SMTP account username
        $mail1->Password   = $smtpass;        // SMTP account password
        $mail1->setFrom($email, $nama);
        $mail1->addAddress($emailadmin, $nama_bisnis);
	    $mail1->IsHTML(true);       
        $mail1->Subject = ''.$nama_bisnis.', New signup at '.$bisnisname.'';
        $mail1->msgHTML($isimail1);
        $mail1->send();	
	
	
	
	$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Hello ".$nama.",</p>
<p>Thank you for signed up at ".$bisnisname.".</p>

<p>
Username : ".$username."<br>
Name : ".$nama."<br>
Phone : ".$phone."<br>
Email : ".$email."<br>
Password : ".$password1."<br>
PIN : ".$pin."
Wallet ID : ".$ccidne."
</p>
<p>
<strong>Network:</strong><br>
Sponsor : ".$sponsore."<br>
Upline : ".$upline."
</p>

<p>
Date Register : ".$tgl."
</p>

<p><br><br><br>
Regards,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail2 = new PHPMailer;
		$mail2->IsSMTP(); // telling the class to use SMTP
        $mail2->Host       = $smtphost; // SMTP server
        $mail2->SMTPAuth   = true;                  // enable SMTP authentication
        $mail2->Host       = $smtphost; // sets the SMTP server
        $mail2->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail2->Username   = $smtpuser; // SMTP account username
        $mail2->Password   = $smtpass;        // SMTP account password
        $mail2->setFrom($emailadmin, $nama_bisnis);
        $mail2->addAddress($email, $nama);
	    $mail2->IsHTML(true);       
        $mail2->Subject = ''.$nama.', your signup at '.$bisnisname.'';
        $mail2->msgHTML($isimail2);
        $mail2->send();	


	
  echo "<div class='alert-message'><a href='' class='close'><img src='../images/crosss.gif' ></a><div class='successx'>Selamat Administrator, Anda telah berhasil mendaftarkan member baru (username: ".$username." | Nama: ".$nama.").</div></div>";
}
}
}
}
}
}

?>
<?php
	} else {
?>	
<?php
$results = $_GET['result'];
if($results == "wrong_ticket") { 
echo "<div class='errorx'>PIN Aktivasi salah! Silahkan hubungi sponsor anda untuk mendapatkan PIN Registrasi.</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_ticket2") { 
echo "<div class='errorx'>PIN Aktivasi salah! Username PIN aktivasi harus sama dengan username sponsor atau untuk random PIN gunakan PIN milik administrator.</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_sponsor") { 
echo "<div class='errorx'>Sponsor not found - Enter correct sponsor!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "batasreg") { 
echo "<div class='errorx'>Batas register member baru adalah ".$_GET['bts']." member perhari.</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_email") { 
echo "<div class='errorx'>Email address already used!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_hp") { 
echo "<div class='errorx'>Mobile phone already used!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_sponsor") { 
echo "<div class='errorx'>Sponsor Not Found!</div>";
}
?>

<?php
$results = $_GET['result'];
if($results == "wrong_pos") { 
echo "<div class='errorx'>Posision already used!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_upline") { 
echo "<div class='errorx'>Upline Not Found!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_user") { 
echo "<div class='errorx'>Username already used - Use another username!</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin_none") { 
echo "<div class='errorx'>You do not have a PIN! Please create a PIN to PIN menu.</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin_lock") { 
echo "<div class='errorx'>Your PIN blocked! Please contact Administrator.</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin_invalid") { 
echo "<div class='errorx'>Your PIN is not active! Please Enable PIN in the menu PIN Activation.</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_pin") { 
echo "<div class='errorx'>Wrong PIN! Please enter your PIN correctly.</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "wrong_captcha") { 
echo "<div class='errorx'>Wrong Captcha!</div>";
}
?>


<?php
 if(isset($_GET['result'])&&$_GET['result']=="amount"){
echo "<div class='errorx'>Nilai Investasi harus di isi!</div>";
}
?>
<?php
if(isset($_GET['result'])&&$_GET['result']=="min"){
$pck = base64_decode($_GET['pk']);
$min = base64_decode($_GET['mn']);	
	
echo "<div class='errorx'>Paket yang anda pilih ".$pck.", Minimal Nilai Investasi adalah ".rupiah($min).".</div>";
}
?>
<?php
if(isset($_GET['result'])&&$_GET['result']=="max"){
$pck = base64_decode($_GET['pk']);
$max = base64_decode($_GET['mx']);
	
echo "<div class='errorx'>Paket yang anda pilih ".$pck.", Maksimal Nilai Investasi adalah ".rupiah($max).".</div>";
}
?>


<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<?php
if(isset($_GET["sp"])){ $sp = $_GET["sp"]; }
if(isset($_GET["up"])){ $up = $_GET["up"]; }
if(isset($_GET["pos"])){ $pos = $_GET["pos"]; }
if(isset($_GET["dt"])){ $dt = $_GET["dt"]; }

if($sp && $up && $pos && $dt) {
	$sponsorex = $sp;
	$uplix = $up;
	$posisix = $pos;
	$dte = $dt;
} 

$stkodexxx = substr(str_shuffle(str_repeat("4453B141119A06676420371112D8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 13);

		
		
		
$sqlckid=mysql_query("select accid from member where accid like '".$cptidne."%' order by id desc");
		if(mysql_num_rows($sqlckid) > 0) {
		$mbrckid = mysql_fetch_row($sqlckid);
		$lastck_id = substr($mbrckid[0], -8);
		} else {
		$lastck_id = $lastidne;
		}		
		$kodecid = $cptidne;
		$newc_id = ($lastck_id + 1);
		$newc_id2 = $kodecid.$newc_id;
		$cidne = $newc_id2;	
		
		if($userbysystem == 1){	
$idregblkg = substr(str_shuffle(str_repeat("1234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567891234567898912345678912345678912345678912345678912345678912345678912345678912345678912345678912345678912345678989123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789", $acakee)), 0, $idblakange);		
$autousere=$idregdepan.$idregblkg;
}			
?>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>

<div class="form_style">
 <form action="?go=register&dt=send" id="daftar-formxx" name="daftar-formxx" method="post">
          <input name="paket" type="hidden" id="paket" value="1"/>
            <input name="cid" id="cid" type="hidden" value="<?php echo $cidne;?>" readonly="readonly"/>
<table width="95%" class="input">
<tr>
<td width="213" align="left"><h3>Network</h3></td>
<td width="10" align="center">&nbsp;</td>
<td width="820">&nbsp;</td>
</tr>

<tr>
<td align="left">Sponsor</td>
<td align="center">:</td>
<td>
<?php
if($sp && $up && $pos && $dt) {
	$sponsorex = $sp;
	$uplix = $up;
	$posisix = $pos;
	$dte = $dt;
?>
<input name="" style="width:180px" value="<?php echo $sponsorex ?>" disabled="disabled"/>
 <input name="sponsore" id="sponsore" value="<?php echo $sponsorex ?>" readonly="readonly" type="hidden"/>
 <input name="upline" id="upline" value="<?php echo $uplix ?>" readonly="readonly" type="hidden"/>
 <input name="posisi" id="posisi" value="<?php echo $posisix ?>" readonly="readonly" type="hidden"/>
 <input name="dtt" id="dtt" value="1" readonly="readonly" type="hidden"/>
<?php
} else {
?>
<input name="dtt" id="dtt" value="0" readonly="readonly" type="hidden"/>
 <select name="sponsore" onchange="value" class="form" style="width:190px">
          <option value="000">-- Pilih Sponsor --</option>
         <?php
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username from member where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						if(isset($mid)&& $mid == $sto[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?php echo $sto[0]; ?>" <?php echo $pilih; ?>> 
          <?php echo $sto[0]; ?>
          <?php
					}
					?>
        </select>
<?php } ?>
</td>
</tr>


<?php
if($sp && $up && $pos && $dt) {
?>
<tr>
<td align="left">Upline</td>
<td align="center">:</td>
<td>
<input name="" id="" value="<?php echo $uplix ?>"  disabled="disabled" style="width:180px"/>
</td>
</tr>
<?php } ?>

<?php
if($sp && $up && $pos && $dt) {
?>
<tr>
<td align="left">Posisi</td>
<td align="center">:</td>
<td>
<?php
if($posisix == "L1"){ $pssi = "KIRI"; }else { $pssi = "KANAN"; }

?>
<input name="" id="" value="<?php echo $pssi ?>"  disabled="disabled" style="width:180px"/>
</td>
</tr>
<?php } ?>
<tr>
<td align="left">&nbsp;</td>
<td align="center">&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td width="213" align="left"><h3>Member Data</h3></td>
<td width="10" align="center">&nbsp;</td>
<td width="820">&nbsp;</td>
</tr>

<tr>
<td align="left">Nama</td>
<td align="center">:</td>
<td>
 <input name="nama" id="nama" required="required" style="width:180px" value="<?php echo $_SESSION["namae"]; ?>"/>
</td>
</tr>
<tr>
<td align="left">No. HP</td>
<td align="center">:</td>
<td>
 <input id="hp" type="tel" name="hp" required='required' style="width:180px"  value="<?php echo $_SESSION["hpne"]; ?>">
                                  <?php if($hp_batase > 0){ ?><div id="stshp" style="margin-top:3px;"></div><?php } ?>
</td>
</tr>
<tr>
<td align="left">Email</td>
<td align="center">:</td>
<td>
 <input name="email" class='email' required="required" type="email" style="width:180px"  value="<?php echo $_SESSION["emaile"]; ?>"/>
						
					<?php if($mail_batase > 0){ ?><div id="stsmaile" style="margin-top:3px;"></div><?php } ?>
</td>
</tr>


<tr>
<td align="left">&nbsp;</td>
<td align="center">&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td width="213" align="left"><h3>Detail Login</h3></td>
<td width="10" align="center">&nbsp;</td>
<td width="820">&nbsp;</td>
</tr>
<tr>
<td align="left">Username</td>
<td align="center">:</td>

<td>
 <input name="username" id="username" required='required' value="<?php echo $autousere; ?>"/>
 <div id="statuse" style="margin-top:3px;"></div>
</td>
</tr>
<tr>
<td align="left">Password</td>
<td align="center">:</td>
<td>
 <input name="password1" id="password1" type="password" value="<?php echo $_SESSION["passworde"]; ?>" required='required'/>
</td>
</tr>

<tr>
<td align="left">&nbsp;</td>
<td align="center">&nbsp;</td>
<td>&nbsp;</td>
</tr>


<tr>
<td align="left">&nbsp;</td>
<td align="center">&nbsp;</td>
<td>
<button type="submit" name="submit" class="submit" style="margin-top:5px;"  onclick="if(!this.form.checkbox.checked){alert('You must agree our Terms Of Service (TOS).');return false}"/>Register</button></form></td>
</tr>
<tr>
<td align="left">&nbsp;</td>
<td align="center">&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</div>

<?php
	unset($_SESSION['namae']);
	unset($_SESSION['passworde']);
	unset($_SESSION['pine']);
	unset($_SESSION['kotane']);
unset($_SESSION["bankacc"]);
unset($_SESSION["banke"]);
unset($_SESSION["bankname"]);
unset($_SESSION["emaile"]);
unset($_SESSION["hpne"]);
unset($_SESSION["username"]);
?>

<?php
}
}
?>  
<?php ob_flush(); ?>