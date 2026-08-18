<?php
ob_start();
(@include ('../dt_page/lic.php')) or die("<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>");
$lic=$license;if(!$lic){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";}$svr=$_SERVER['SERVER_NAME'];$c=curl_init();curl_setopt($c,CURLOPT_URL,"http://www.primadesain.com/verifylicenses.php");curl_setopt($c,CURLOPT_TIMEOUT,30);curl_setopt($c,CURLOPT_POST,1);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);$postfields='svr='.$svr.'&lic='.$lic;curl_setopt($c,CURLOPT_POSTFIELDS,$postfields);$result=curl_exec($c);if($result=="fail"){echo "<script>alert(\"You not have a license to use this script on this domain, Please contact www.primadesain.com to purchase a license.\");"."window.location = './index.php'</script>";die();}
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";
exit();} 
?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Contact Us
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Contact Us</li>
      </ol>
    </section>


    <section class="content">
<?php // Your license key 
$server = $_SERVER['SERVER_NAME'];

$c = curl_init(); 
// Set the full url path to point to your verifyLicense.php on your server 
curl_setopt($c, CURLOPT_URL, "http://www.primadesain.com/verifydomains.php"); 
curl_setopt($c, CURLOPT_TIMEOUT, 30); 
curl_setopt($c, CURLOPT_POST, 1); 
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 

$postfields = 'svr='.$server; 
curl_setopt($c, CURLOPT_POSTFIELDS, $postfields); 
$result = curl_exec($c); 

if ($result=="fail") { 
echo "<p style='font-family:Arial, Helvetica, sans-serif; margin-top:80px; font-size:16px; line-height:180%; letter-spacing:2px;' align='center'><img src='https://primadesain.com/images/block.png' width='90' height='90' /></br></br>You not have a license to use this script on this domain,<br>Please contact us to purchase a license.<br><strong><a href='http://www.primadesain.com'>www.primadesain.com</a></strong></p><br><p style='font-family:Arial, Helvetica, sans-serif; margin-top:30px; font-size:12px; line-height:180%; letter-spacing:2px;' align='center'>&copy; 2009 - ".date ("Y")." www.primadesain.com</p>";
die(); }
?>

<?php
if($db->dataku("status", $user_session) == 0 || $db->dataku("blokir", $user_session) == 1) {
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".$LANG["status0"]."</div>";
}else{
?>
<?php
if (isset($_GET['page']) && $_GET['page'] == "read") {
if(isset($_GET["kode"])){ $kode = $_GET["kode"]; }


?>






<div class="row">
    
                          <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                      <h5 class="box-title">Detail Confirm <?php echo $kode;?></h5>
                    </div>
                    <div class="box-body">

 <?

	$db->select("kode, nama, username, email, tgl, judul, catatan, ip, hp, foto, balasan, status, tglproses", "konfirmasi", "username='$user_session'", "tgl desc");
	$row=$db->fetch_row();
			
			if($row[11] > 0) {
				$st = "<button class='btn btn-success btn-xs' type='button' onMouseover='ddrivetip(\"Dibaca tanggal ".formatgl($row[12])."\")'; onMouseout='hideddrivetip()'>Done</button>";	
				$style = "<font>";
			} else {
				$st = "<button class='btn btn-danger btn-xs' type='button' onMouseover='ddrivetip(\"Belum dibaca\")'; onMouseout='hideddrivetip()'>Pending</button>";
	             $style = "<font color='#F00000'>";
			}	
				$tt = formatgl($row[4]);
				$ttx = formatgl($row[12]);
				
$adafotow = $row[9];
	$dirfotow = "../images/confirm/$adafotow";
	if (!empty($adafotow) && (file_exists($dirfotow))){
		$gambarw = "<a href='".$dirfotow."' class='highslide' onclick='return hs.expand(this)'><img src='".$dirfotow."' alt='post img' class='pull-left img-responsive postImg img-thumbnail' style='padding:10px; border:none;width:400px;'></a>";
		}
	else
		{
		$gambarw = "<a href='../images/image-not-available.jpg' class='highslide' onclick='return hs.expand(this)'><img src='../images/image-not-available.jpg' alt='post img' class='pull-left img-responsive postImg img-thumbnail' style='padding:10px; border:none;width:400px;'></a>";
		} 			
	$balasan=$row[10];		
?>        
     <div class="col-md-10 blogShort">
                     <h1><?php echo $row[5];?></h1>
                     <?php echo $gambarw;?>
                     <article><p>
                        <?php echo $row[6];?>
                         </p>
                    
                          
                      <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo $tt;?> </span></li>
            <li>|</li>
            <span><?php echo $st;?></span>
			</ul>    
                         
             
             <hr />
             <?php if($balasan){ ?>
              <h4>Balasan</h4>
                     <p>
                       <i><?php echo $balasan;?></i>
                         </p>
                         <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo $ttx;?> </span></li>
			</ul>    
             <?php } ?>
             
             
             
                     
                     
                     </article>
                
                 </div>
	</div>
</div>

                 </div>
	</div>


<?php
} else if (isset($_GET['page']) && $_GET['page'] == "go") {


$_SESSION["judule"] = anti_injection($_POST["judul"]);
$_SESSION["catatane"] = anti_injection($_POST["catatan"]);

$pincods = md5($_POST['pincode']);	
$sqlc = mysql_query("SELECT * FROM pincode WHERE username='$user_session'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){
$tgl = formatgl($rowc['tgl']);
$pin = $rowc['pin'];
$sts = $rowc['status'];
$lock = $rowc['locks'];
	}
	if($usepins == 1 && !$numc) {
	header("location: index.php?go=confirm&result=no_pin");
	exit;
} else {
if($usepins == 1 && !$pincods || $usepins == 1 && $pincods <> $pin) {
	header("location: index.php?go=confirm&result=wrong_pin");
	exit;
} else {
if($usepins == 1 && $lock == 1) {
	header("location: index.php?go=confirm&result=pin_lock");
exit;
	} else {
if($usepins == 1 && $sts == 0) {
	header("location: index.php?go=confirm&result=pin_off");
	exit;
} else {	


	
$username = anti_injection($_POST['user']);	
$kode = anti_injection($_POST['kode']);	
$judul = anti_injectionx($_POST['judul']);	
$catatan = anti_injectionx($_POST['catatan']);	


$db->select("status", "konfirmasi", "status='0' and username='$username'");
				$ada = $db->num_rows();
if ($ada >= 3) {
  header("location: index.php?go=confirm&result=pending");
	exit;
} else {

$sql_sp3 = mysql_query("select username from konfirmasi where username='".$username."' and kode='".$kode."'");
$ada_sp3 = mysql_num_rows($sql_sp3);
if($ada_sp3){
header("location: index.php?go=confirm&result=err");
		exit;
} else {
	
	
	
$img = $_FILES['img1'];
	$allowed =  array('pdf','png','jpg','jpeg','PNG','gif','JPG');//allowed types
$filename = $_FILES['img1']['name'];//file name
$ext = pathinfo($filename, PATHINFO_EXTENSION);//extension checking
if(!empty($_FILES['img1']['name']) && !in_array($ext,$allowed) ){
	header("location: index.php?go=confirm&result=file_error");
	exit;
}else{	
	$type = substr($img['name'], strrpos($img['name'], '.') + 1);
	if(!empty($_FILES['img1']['name']) && $img['size'] > 1000000) {
		header("location: index.php?go=confirm&result=size_error");
	exit;
	} else {
		$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 48));
		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "confirm";
		$new_file_name = str_replace($namex,'',$special);
		$name  = $new_file_name.'_'.$user_session.'_'.$time.'_'.$sess;
		$thumbName		= $name.'.'.$type;
        if($type == "gif"){
			$imgObj = imagecreatefromgif($img['tmp_name']);
		} else if($type == "png"){
			$imgObj = imagecreatefrompng($img['tmp_name']);
		} else if($type == "jpeg"){
			$imgObj = imagecreatefromjpeg($img['tmp_name']);
		} else if($type == "JPG"){
			$imgObj = imagecreatefromjpeg($img['tmp_name']);
		} else if($type == "PNG"){
			$imgObj = imagecreatefrompng($img['tmp_name']);
		} else {
			$imgObj = imagecreatefromjpeg($img['tmp_name']);
		}
		$width = imageSX($imgObj);
		$height = imageSY($imgObj);
		if(!empty($_FILES['img1']['name']) && !$width || !empty($_FILES['img1']['name']) && !$height) {
		header("location: index.php?go=confirm&result=file_error2");
	    exit;
		}else{
		if($width > 1000) {
		 	$height = $height * (1000 / $width);
		 	$width = 1000;	
		}
		$thumbWidth = $width;
		$thumbHeight = $height;
		$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
		imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));
		if($type == "gif") {
			imagegif($newThumb, '../images/confirm/'.$thumbName);
		} else if($type == "png") {
			imagejpeg($newThumb, '../images/confirm/'.$thumbName);
		} else {
			imagejpeg($newThumb, '../images/confirm/'.$thumbName);
		}  
		imagedestroy($imgObj);
		imagedestroy($newThumb);

	if(!empty($_FILES['img1']['name'])) {	
	$newfilename = $thumbName;
	}else{
   $newfilename = "";
	}	
	
	
	


		$namaku = $db->dataku("nama", $username);
		$emailku = $db->dataku("email", $username);
		$hp = $db->dataku("hp", $username);
		$tgl = formatgl($clientdate);


$db->insert("konfirmasi", "", "'', '$kode', '$namaku', '$username', '$emailku', '$clientdate', '$judul', '$catatan', '".$_SERVER['REMOTE_ADDR']."', '$hp', '$newfilename', '', '0', ''");	
		
unset($_SESSION['judule']);
unset($_SESSION['catatane']);

	
$isimail="<a href='http://".$domain."'><img src='".$logoinvoice."' style='display:inline;outline-style:none;text-decoration:none;' /></a><br><br><br>
<p>Halo ".$namaku." (".$username."),</p>
<p>Anda telah mengirimkan konfirmasi.</p>
<p><strong>No: ".$kode."<br><br>
Judul: ".$judul."<br><br>
Catatan: ".$catatan."<br><br>
Tanggal: ".$tgl."<br>
</p>
<p>Terima kasih, secepatnya kami akan proses konfirmasi anda.</p>

<p><br><br><br>
Salam,<br>
<b>".$bisnisname."</b><br>
".$domain."<br>".$emailadmin."<br>".$hpadmin."</p>";
	   
	    $mail3 = new PHPMailer;
	//	$mail3->IsSMTP(); // telling the class to use SMTP
        $mail3->Host       = $smtphost; // SMTP server
        $mail3->SMTPAuth   = true;                  // enable SMTP authentication
        $mail3->Host       = $smtphost; // sets the SMTP server
        $mail3->Port       = $smtport;                    // set the SMTP port for the GMAIL server
        $mail3->Username   = $smtpuser; // SMTP account username
        $mail3->Password   = $smtpass;        // SMTP account password
        $mail3->setFrom($emailadmin, $bisnisname);
        $mail3->addAddress($emailku, $namaku);
	    $mail3->IsHTML(true);       
        $mail3->Subject = ''.$namaku.', Konfirmasi';
        $mail3->msgHTML($isimail);
	  //  $mail3->AddAttachment("../invoice/".$invc.".pdf");      // attachment
        $mail3->send();	

        header("location: index.php?go=confirm&result=success&co=".$kode."");
	exit;
}
}
}
	}
}
}
	  }
	}
}






 }else{
?>

<div class="row">
                <div class="col-md-4">
                
                   <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Send Message</h3>
            </div>
            <div class="box-body">   
              
          <?php  if($db->dataku("act", $user_session) == 0){ 
				 echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>to be able to use this facility you must have a deposit first.</div>";
				 $diss3b=" disabled='disabled'";
}else{
	$diss3b="";
}
				 
				  ?>    
              
              
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="size_error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Upload max size only 1 MB</div>";
}
?>  
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file_error"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Upload only file pdf, jpg, png, gif.</div>";
}
?> 
<?php
 if(isset($_GET['result'])&&$_GET['result']=="file_error2"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>File Dimension Error.</div>";
}
?>              
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pending"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Anda masih memiliki 3 konfirmasi yang belum di baca, untuk dapat mengirimkan kembali, tunggu konfirmasi anda sebelumnya di baca.</div>";
}
?>
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="err"){
$mx = $_GET['mx'];
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Konfirmasi ini sudah dikirim sebelumnya.</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="success"){
echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>Konfirmasi telah berhasil dikirim, (Kode ".$_GET['co'].") , tunggu secepatnya kami akan proses konfirmasi anda.</div>";
}
?>

<?php
 if(isset($_GET['result'])&&$_GET['result']=="no_pin"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_NO_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="wrong_pin"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_WRONG_PIN."</div>";
}
?>  
 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_lock"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_BLOCK_PIN."</div>";
}
?>  

 <?php
 if(isset($_GET['result'])&&$_GET['result']=="pin_off"){
echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>".LANG_FORGOT_OFF_PIN."</div>";
}


?>
   <?php
if(isset($_GET['result'])&&$_GET['result']=="wrong_captcha"){
echo "<div class='alert alert-danger'>Wrong Captcha!</div>";
}
?>	           
                 
                  
                                	
      <?php    
$initialex = substr(str_shuffle(str_repeat("ABEF123456789GHIJKLMNPR123456789KLEFGHILMNP123456789RRSTUVWXYZ", 46)), 22, 12);
?>           

         
                <form id="tab2" name="wallet_depo" method="post" action="?go=confirm&page=go" enctype="multipart/form-data" onsubmit="return Validate(this);">
<input type="hidden" id="kode" name="kode" value="<?php echo $initialex; ?>"/>
<input type="hidden" id="user" name="user" value="<?php echo $user_session; ?>"/>
                 

 

         

          

          <div class="controls-row">

            <label>Subject</label>
            <textarea name="judul" class="form-control"><?php echo $_SESSION["judule"]; ?></textarea>

          </div>  

         
         <div class="controls-row" style=" margin-top:10px;">



            <label>Message</label>
            <textarea maxlength="700" name="catatan" class="form-control" ><?php echo $_SESSION["catatane"]; ?></textarea>
            
            
          </div>  
             <div class="controls-row" style=" margin-top:10px;">

            <label>Image</label>
          <input name="img1" type="file" id="img1" style="margin-bottom:10px;">
          </div>

             <?php if($usepins == 1){ ?>
          
          <div class="controls-row" style=" margin-top:10px;">

            <label>Secure PIN</label>

           <input type="password" class="form-control" placeholder="Enter Your Secure PIN" name="pincode" required='required'>
                </div>                                         
<?php } ?>
          

          
          
 <div>

           &nbsp;

          </div>
          <div>
        
            <input type="submit" value="Submit"class="btn btn-<?php echo $buttone; ?>" name="addbalance">

          </div>

        </form>
        <script type="text/javascript">
var _validFileExtensions = [".jpg", ".jpeg", ".gif", ".png", ".pdf"];

function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Sorry, " + sFileName + " <?php echo $LANG["fotoproinfo2d"]?> : " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }

    return true;
}
</script>	
        <?php unset($_SESSION['judule']);
unset($_SESSION['catatane']); ?>
        
                </div></div>
                
                   
                </div><!--end .col-->
                
              <div class="col-md-8">
                  <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                      <thead class="bg-primary-600">
                                            <tr>
                           
                            <th width="15%">Date</th>
							<th width="50%">Subject</th>
							<th width="10%">Pict</th>
							<th width="15%">Status</th>
							<th width="15%">Read</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                           
                                               
                                        <?

	$db->select("kode, nama, username, email, tgl, judul, catatan, ip, hp, foto, balasan, status, tglproses", "konfirmasi", "username='$user_session'", "tgl desc");
	
		while($row=$db->fetch_row()) {
			
			if(is_odd($nom) == 0) {
				$class = "tblrow_ganjil";
			} else {
				$class = "tblrow_genap";
			} 	
			if($row[11] > 0) {
				$st = "<button class='btn btn-success btn-xs' type='button' onMouseover='ddrivetip(\"Dibaca tanggal ".formatgl($row[12])."\")'; onMouseout='hideddrivetip()'>Done</button>";	
				$style = "<font>";
			} else {
				$st = "<button class='btn btn-danger btn-xs' type='button' onMouseover='ddrivetip(\"Belum dibaca\")'; onMouseout='hideddrivetip()'>Pending</button>";
	             $style = "<font color='#F00000'>";
			}	
				$tt = formatgl($row[4]);
				
$adafotow = $row[9];
	$dirfotow = "../images/confirm/$adafotow";
	if (!empty($adafotow) && (file_exists($dirfotow))){
		$gambarw = "<a href='".$dirfotow."' class='highslide' onclick='return hs.expand(this)'><img src='../images/views.png' width='27' height='27' class='todo-userpic'></a>";
		}
	else
		{
		$gambarw = "---";
		} 			
				
?>
     	<tr>
							<td align="center"><?= $tt; ?></td>
							<td align="center"><?= $row[5]; ?></td>
							<td align="center"><?= $gambarw; ?></td>
							<td align="center"><?= $st; ?></td>
							<td align="center"><a href="index.php?go=confirm&page=read&kode=<?= $row[0]; ?>"><button class='btn btn-success btn-xs' type='button' onMouseover="ddrivetip('Baca Pesan')"; onMouseout="hideddrivetip()">Baca Pesan</button></a></td>
                            
            
						  </tr> 
	 
 

	<?
	
		}
	?>

                                                                                </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div><!-- End .panel -->                       
             








    
      <?php }  ?>
    <?php }  ?>
                    </section>
<?php ob_flush(); ?>