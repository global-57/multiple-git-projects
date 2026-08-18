<?php ob_start(); ?>
<?php
error_reporting(0);
	/* 
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
?>
<?php
(@include ('../dt_page/lic.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy;2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/common.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Database failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
(@include ('../dt_page/classMySQL.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>System failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");
$db = new db_mysql($server_name, $userdb, $passdb, $databasename,"");
(@include ('../dt_page/function.php')) or die("<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>Function failed, you can not access this script.<br>Please contact us to fix this error.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date("Y")." www.primadesain.com</p>");

require_once('../dt_page/class.phpmailer.php');
include("../dt_page/class.smtp.php");
?>

<?php
if (isset($_GET['do']) && $_GET['do'] == "update") {
	
if(isset($_GET["sess"])){ $sesine = anti_injection($_GET["sess"]); }
if(isset($_GET["token"])){ $token = anti_injection($_GET["token"]); }


$cek=md5(md5(date('\i\t \i\s \t\h\e jS \d\a\y g a')).md5($sesine));
if(!$sesine || !$token || $token<>$cek){
header("location: ./forgotpass.php?result=no_session");
exit;

}else{

		
$username = anti_injection($_POST['username']);
	  $emails = anti_injection($_POST['email']);
    
	if(!$username){ 
       header("location:./forgotpass.php?sess=".$sesine."&token=".$token."&result=wrong_user");
    } else {
    // quick check to see if record exists   
   $sqlx = mysql_query("SELECT * FROM admin WHERE userid='$username'");
   $numx = mysql_num_rows($sqlx);
   while($rowx = mysql_fetch_array($sqlx)){
   $nama = $rowx['nama'];
   $email = $rowx['email'];
   $hp = $rowx['telp'];
   }
   if(!$numx){ 
		header("location:./forgotpass.php?sess=".$sesine."&token=".$token."&result=wrong_user");
    } else {
	
	
	if($email <> $emails){ 
	 header("location:./forgotpass.php?sess=".$sesine."&token=".$token."&result=wrong_mail");
       // exit(); 
    } else {
	
	
    // Everything looks ok, generate password, update it and send it!
    $random_password = makeRandomPassword();
    $db_password = md5($random_password);
    //$sql = "UPDATE member SET pass='$db_password' WHERE username='$username'";
	$db->update("admin", "pass='$db_password'", "userid='$username'");
	//myquery($sql);
    $tgl = formatgl($clientdate);
	$waktu = date("H:i:s");
	
	
$isimail2="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$nama." (".$username."),</p>
<p>Password Admin Anda Telah Diubah Melalui Reset Password.</p>
<p><strong>Password Baru: ".$random_password."<br>
Tanggal: ".$clientdate."<br>
</p>
<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";


 $mail3b = new PHPMailer;
 if($mailset == 1){	
$mail3b->IsSMTP(); // telling the class to use SMTP
$mail3b->Host       = $smtphost; // SMTP server
$mail3b->SMTPAuth   = true;                  // enable SMTP authentication
$mail3b->Host       = $smtphost; // sets the SMTP server
$mail3b->Port       = $smtport;                    // set the SMTP port for the GMAIL server
$mail3b->Username   = $smtpuser; // SMTP account username
$mail3b->Password   = $smtpass;        // SMTP account password
}
        $mail3b->setFrom($emailadmin, $bisnisname);
        $mail3b->addAddress($email, $nama);
	    $mail3b->IsHTML(true);       
        $mail3b->Subject = ''.$nama.', password baru anda';
        $mail3b->msgHTML($isimail2);
        $mail3b->send();	
	
if($hp){
$isipesan = "Hello Admin (".$username."), this is your new password ".$random_password."";
sendwa($hp, $isipesan, $apikeywoowa);	
	}		
	
$ussy=base64_encode($emails); 
	header("location:./login.php?result=success&m=$ussy");
	exit;	
}
}
}
	}
}else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <meta name="author" content="<?php echo $db->config("domain"); ?>"/>
<meta name="description" content="<?php echo $db->config("description"); ?>" />
<meta name="keywords" content="<?php echo $db->config("keyword"); ?>" />
<meta name="robots" content="all,index,follow" />
<title>Forgot Password | <?php echo $db->config("title"); ?></title>
    <link href="../images/banner/<?php echo $db->config("fcon"); ?>" rel="SHORTCUT ICON" /><!--favicon-->


        <!-- Bootstrap -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/waves.min.css" type="text/css" rel="stylesheet">
        <!--        <link rel="stylesheet" href="css/nanoscroller.css">-->
        <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
        <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style>
video#bgvid { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url(bg-login-jpg.jpg) no-repeat;
    background-size: cover; 
}video#bgvid {
    transition: 1s opacity;
}@media screen and (max-device-width: 800px) {
    .account {
         background: url(../assets/bg-login-jpg.jpg) #000 no-repeat center center fixed;
    }
    #bgvid {
        display: none;
    }
}
.stopfade { opacity: .5; }

.boxe {
background-color: grey;
    background: rgb(204, 204, 204); /* Fallback for older browsers without RGBA-support */
    background: rgba(204, 204, 204, 0.7);
border-radius:4px;
padding: 10px;
border: 2px solid rgba(255, 255, 255, 0.7);
}
.form-group,h1,h3,button {
color: black;
}
a{
    word-wrap: break-word;
}
.account {
padding: 0;
}
.account-col h3 {
color: black;
}
</style>


    </head>
    <body class="account">
<video playsinline muted poster="../assets/bg-login-jpg.jpg" id="bgvid">
   
</video>
                    <center><img src="../assets/BETA.png" style="margin-top:100px; margin-bottom:20px;width:160px;"></center>
        <div class="container">
            <div class="row">
            
           
            
<?php
if(isset($_GET['result'])&&$_GET['result']=="no_session"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Session and token does not exist, you can not change the password at this time, run the process properly.</div>";
}
?>
<?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_user"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>User ID not found! please enter valid administrator.</a></span></div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_mail"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Incorrect Email Address.</a></span></div>";
}
?> 
      
            
            
                <div class="account-col text-center boxe" id="au">
                    <h3 color=black;><b>Forgot Password</b></h3>
                    <?php
$sess = substr(str_shuffle(str_repeat("ABCaqDEFG345678HIJKLMNOPQ345678RSTUVWXYZ0123456789abcdefghijklmnop32q34STUVW5678rstuvwxyz", 96)), 0, 96);
$token = md5(md5(date('\i\t \i\s \t\h\e jS \d\a\y g a')).md5($sess));
?>     

<form class="m-t" action="./forgotpass.php?do=update&sess=<?php echo $sess;?>&token=<?php echo $token;?>" method="post" accept-charset="utf-8" >
   
<input type="hidden" name="refer_url" id="refer_url" value="<?php echo $refer; ?>"/>
                    
                    
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                        </div>
                        <button type="submit" class="btn btn-success btn-block ">Reset Password</button>
                        <br><a href="login.php"><strong>Login Admin?</strong></a>
               
                <br><br>
                <p>Copyright &copy;  <?php echo $footer; ?></p>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/pace.min.js"></script>
<script>
$(document).ready(function() {
var myVideo = document.getElementById('bgvid');
if (typeof myVideo.loop == 'boolean') { // loop supported
  myVideo.loop = true;
} else { // loop property not supported
  myVideo.addEventListener('ended', function () {
    this.currentTime = 0;
    this.play();
  }, false);
}
//...
myVideo.play();
});
</script>
    </body>
</html>
<?php } ?>
<?php ob_flush(); ?>	