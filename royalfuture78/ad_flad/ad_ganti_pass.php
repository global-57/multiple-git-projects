<?php /* 
	############################[  <about> ] #######################
		S Name   ::       MMM Primadesain
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
if(basename($_SERVER['SCRIPT_FILENAME'])==basename(__FILE__)){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";exit();};echo '';if(empty($_SESSION["valid_admin"])){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";exit();};echo '';;echo '<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Ganti Password</h2>
<div align="center">
 <div class="form_style" style="width:60%" align="center">
';if(isset($_GET['page'])&&$_GET['page']=="ganti"){;echo '';$results=$_GET['result'];if($results=="wrong"){echo "<div class='alert-box errors'><span>error : </span>Password Salah!</div>";};echo '';$results=$_GET['result'];if($results=="error"){echo "<div class='alert-box errors'><span>error : </span>Password Lama!</div>";};echo '';$results=$_GET['result'];if($results=="success"){echo "<br><div class='alert-box successs'><span>sukses: </span><br />Password Berhasil di Update!</div><br>";};echo '<table width="99%" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td height="23" bgcolor="#DDDDE1"><span class="title">&nbsp;&nbsp;<strong>Ganti Password  Admin</strong><u></u></span></td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
      <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" class="kotak">
        <tr>
          <td align="center"></td>
        </tr>
        <tr>
          <td><form name="min_pass_update" method="post" action="?go=changepass&page=send" id="min_pass_update">
              <table border="0" align="center" class="bodytext">
                <tr>
                  <td>Masukkan password Lama</td>
                  <td>:</td>
                  <td>';$results=$_GET['result'];if($results=="error"){echo "<div class='control-group'><div class='controls'><input class='text' name='passwordx' size='12' maxlength='25' id='passwordx' placeholder='Password Salah' type='password' style='border-color:#950000; background-color:#FFEAEA;color:#950000'></div></div>";}else {echo "<div class='control-group'><div class='controls'><input class='text' name='passwordx' size='12' maxlength='25' id='passwordx' type='password'></div></div>";};echo '</td>
                </tr>
				<tr>
                  <td>Masukkan password baru</td>
                  <td>:</td>
                  <td><div class="control-group"><div class="controls">
				  <input type="password" name="password1" maxlength="20">
				  </div></div></td>
                </tr>
                <tr>
                  <td>Masukkan kembali password baru</td>
                  <td>:</td>
                  <td><div class="control-group"><div class="controls">
				  <input type="password" name="password2" maxlength="20">
				  </div></div></td>
                </tr>
				  <tr>
                  <td></td>
                  <td></td>
                  <td><div class="control-group"><div class="controls">
				    <input type="submit" name="submit" value=" GANTI PASSWORD " class="button">
				  </div></div></td>
                </tr>
              </table>
              <div align="center"><br />
              
              </div>
          </form><div align="center"><br /><br />Lupa Password lama? <a href="./forgotpass.php">KLIK DISINI</a></div>
	<!-- Validate plugin -->
		<script src="../js/jquery.validate.min.js"></script>


<!-- Scripts specific to this page -->
		<script src="../dt_page/script.js"></script>
		  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      ';}if(isset($_GET['page'])&&$_GET['page']=="send"){$passwordx=$_POST['passwordx'];$password1=$_POST['password1'];$password2=$_POST['password2'];$passworde=md5($passwordx);$db->select("userid, email","admin","pass='$passworde'");if($db->num_rows()>0){if($password1<>$password2){header("location: index.php?go=changepass&page=ganti&result=wrong");exit;}else {$pswd=md5($password1);$db->update("admin","pass='$pswd'","userid='$valid_admin'");header("location: index.php?go=changepass&page=ganti&result=success");exit;}}else{header("location: index.php?go=changepass&page=ganti&result=error");exit;}};echo '      <p align="center">&nbsp;</p>
    <p></p></td>
  </tr>
</table>
</div></div>';?>