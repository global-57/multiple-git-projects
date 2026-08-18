<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:100px; font-size:20px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Accessing files directly is prohibited.</p><p style='font-family:Arial, Helvetica, sans-serif; margin-top:20px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." <a href='http://www.primadesain.com'>www.primadesain.com</a></p>";
echo "<meta http-equiv=\"refresh\" content=\"5; url=../index.php\">";
exit();} 
// // #-----------------------------------------------------------------------------#
// // #-------------------------------.*PRIMADESAIN*.-------------------------------#
// // #-------------------------------: Script COIN :-------------------------------#
// // #------------------- Copyright 2009-2014 Primadesain.com ---------------------#
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

if(isset($_POST['submit'])){

$hptest = $_POST['hp'];
$isipesan2="Hello this is your test sms... :)";


if($smsgtw == 1 && $jsms == 1){
	$hpne2 = preg_replace('/\D+/', '', $hptest);
	$sms2 = new smsreguler();
	$sms2->username = $userkey;
		$sms2->password = $passkey;
		$sms2->apikey   = $apikey;
		$sms2->setTo($hpne2);
		$sms2->setText($isipesan2);
	$sts=$sms2->smssend();
		$idreport=explode('|',$sts);
		setcookie("idreport", $idreport[1], time()+3600);
		if (substr($sts,0,1)=='0') {
			echo "sms sent";			
		} else {	
			echo "sms not sent";		
		}
		
	}else if($smsgtw == 1 && $jsms == 2){
	$hpne2 = preg_replace('/\D+/', '', $hptest);
	$sms2 = new smsmasking();
	$sms2->username = $userkey;
		$sms2->password = $passkey;
		$sms2->apikey   = $apikey;
		$sms2->setTo($hpne2);
		$sms2->setText($isipesan2);
		$sts=$sms2->smssend();
		$idreport=explode('|',$sts);
		setcookie("idreport", $idreport[1], time()+3600);
		if (substr($sts,0,1)=='0') {
			echo "sms sent";	
		} else {	
			echo "sms not sent";	
		}
		
		
		
	}else if($smsgtw == 2){
	 if (sendsms($hptest, $isipesan2)){
       echo "sms sent";
    } else {
       echo "sms sent";
    }
	}else{}






}else{

?>
 <div class="form_style">
<form id="form" name="form" method="post">
          <label> No.HP :
            <input name="hp" type="text" id="hp" />
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
		<?php }  ?>