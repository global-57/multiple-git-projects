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
<script type="text/javascript">
<!--
function confirmation(noid) {
	var answer = confirm("Are You sure to delete this banner?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=bannerrek&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" /> Banner Rekening </h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=bannerrek&page=addnew&edit=0"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah Banner Rekening</strong></a></li>
  </ul>
</div>	
<?php
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["no"])){ $no = $_GET["no"]; }
	
	if($edit == 1) {
	$db->select("id, nama, url, published, banner, hits, namabank, norek, pemilik, ordering", "banner_rek", "id=$no");	
		$menutype = $db->result(0, "url");
		$menuitem = $db->result(0, "hits");
		$name_edit = $db->result(0, "nama");
		$name_bank = $db->result(0, "namabank");
		$norek = $db->result(0, "norek");
		$pemilik = $db->result(0, "pemilik");
		$foto = $db->result(0, "banner");
		$edit = "1";
		
	} else {
		if(empty($menutype)){ $menutype = ""; }
	if(empty($menuitem)){ $menuitem = ""; }
	if(empty($name_edit)){ $name_edit = ""; }
	if(empty($name_bank)){ $name_bank = ""; }
	if(empty($norek)){ $norek = ""; }
	if(empty($pemilik)){ $pemilik = ""; }
	if(empty($foto)){ $foto = ""; }
	$edit = "0";
		
	}
?>
<form action="?go=bannerrek&page=submit" method="post" enctype="multipart/form-data" name="image_upload_form" id="image_upload_form" onsubmit="return Validate(this);">
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td colspan="2" align="center">
     <?php
	 	if($edit > 0 ) {
			echo "<h4>Edit Banner Item</h4>";
		} else	{
			echo "<h4>Create Banner Item</h4>";
		}
	?>			</td>
    </tr>
    <tr>
      <td width="35%" align="right">Nama Bank  :</td>
      <td width="65%"><label>
        <input name="namabank" type="text" id="namabank" value="<?php echo $name_bank; ?>" size="50">
        <input name="type" type="hidden" id="type" value="<?php echo $menuitem; ?>">
        <input name="no" type="hidden" id="no" value="<?php echo $no; ?>" />
        <input name="edit" type="hidden" id="edit" value="<?php echo $edit; ?>" />
		<input name="order" type="hidden" id="order" value="10" />
      </label></td>
    </tr>

    <tr>
      <td align="right">Nomor Rekening :</td>
      <td><input name="norek" type="text" id="norek" value="<?php echo $norek; ?>" size="50"></td>
    </tr>
	<tr>
      <td align="right">Pemilik :</td>
      <td><input name="pemilik" type="text" id="pemilik" value="<?php echo $pemilik; ?>" size="50"></td>
    </tr>
    <tr>
      <td align="right">File Banner :<br />
        ukuran banner maksimal lebar 200 px</td>
      <td><label>
         <?php
		  	$adafoto = $foto;
	$dirfoto = "../images/banner/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../images/banner/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../images/banner/$adafoto' class='imgFloatLeft' width='150'></a>";
		}
	else
		{
		$gambar = "<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='150'></a>";
		} 	
		?>
                  <?= $gambar; ?><br /><br />
                  <input name="uploadfile" type="file" id="uploadfile" size="40" class="form" />
                  </label>
                    <input name="fotone" type="hidden" class="form" id="fotone" value="<?php echo $foto; ?>" size="12" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Published :</td>
      <td><p>
        <label>
          <input name="publish" type="radio" id="publish_0" value="1" checked>
          Yes</label> 
        <label>
          <input type="radio" name="publish" value="0" id="publish_1">
          No</label>
        <br>
      </p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
          <?php if($demomode == 1){ ?>
	  <input type="button" onclick='return confirmActiondemomode()' name="submit" value="Simpan Gambar" class="submit">
      <?php } else { ?>
            <input type="submit" name="button2" id="button2" value="Simpan Gambar" class="submit">
            <?php } ?>
      </label></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td></td>
    </tr>
  </table>
</form>
 <script type="text/javascript">
var _validFileExtensions = [".jpg", ".jpeg", ".gif", ".png"];

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
                    alert("Maaf, " + sFileName + " tidak di ijinkan di upload untuk gambar rekening, silahkan upload hanya file image : " + _validFileExtensions.join(", "));
					window.location.reload();
                    return false;
                }
            }
        }
    }

    return true;
}
</script>
<?php 
}
else if (isset($_GET['page']) && $_GET['page'] == "submit") {

$type = $_POST['type'];
$no = $_POST['no'];
$namabank = $_POST['namabank'];
$norek = $_POST['norek'];
$pemilik = $_POST['pemilik'];
$publish = $_POST['publish'];
$edit = $_POST['edit'];

$bankee=$namabank." ".$norek." ".$pemilik;
// SET VARIABLE FOR STORING FILE

$target_dir = "../images/banner/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// GET THE FILE TYPE.  THE TYPE IS IDENTIFIED BY GRABBING THE STRING AFTER THE LAST DOT (.)
 if(!empty($_FILES['uploadfile']['name']) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG") {
   echo "<div class='alert-box errors'><span>Error : </span>Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.&nbsp;&nbsp;<button onclick='history.go(-1);'>Go back</button></div>";
  } else{


	$img = $_FILES['uploadfile'];
	$type = substr($img['name'], strrpos($img['name'], '.') + 1);

	

	// IF IMAGE TYPE IS GIF / JPG AND SIZE LESS THAN 1MB

	if(!empty($_FILES['uploadfile']['name']) && $img['size'] > 4000000) {
		echo "<div class='alert-box errors'><span>Error : </span>Sorry, max files size are allowed to upload is 3MB.&nbsp;&nbsp;<button onclick='history.go(-1);'>Go back</button></div>";
		
	} else {


		// INITIALISE VARIABLE WITH CURRENT TIME

		$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 20));
		

		// SET VARIABLE WITH NAME OF FILE BY GRABBING EVERYTHING BEFORE THE DOT (.)

		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "rekening";
		$new_file_name = str_replace($namex,'',$special);
		
		$name  = $new_file_name.'_'.$sess.'_'.$time;

		// CREATE THE UNIQUE FILENAMES FOR THE THUMBNAIL AND FULLSIZE USING THE TIMESTAMP SET ABOVE

	
		$thumbName		= $name.'.'.$type;
		

		// CREATE A PHP IMAGE OBJECT FROM THE UPLOADED FILE BASED ON IMAGE TYPE

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


		

		// GET THE WIDTH AND HEIGHT OF THE UPLOADED FILE

		$width = imageSX($imgObj);

		$height = imageSY($imgObj);

		

		// PROPORTIONAlLY RESIZE THE IMAGE IF WIDTH GREATER THAN 600 PIXELS

		if($width > 500) {

		 	$height = $height * (500 / $width);

		 	$width = 500;	

		}

		$thumbWidth = $width;
		$thumbHeight = $height;

		

		// CREATE THE NEW IMAGE OBJECTS

		$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);

		

		// COPY THE OLD IMAGE OBJECT ATTRIBUTES TO THE NEW ONES

		imagecopyresampled($newThumb, $imgObj, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imageSX($imgObj), imageSY($imgObj));

		

		// MOVE IMAGES TO RELEVANT DESTINATION BASED ON TYPE

		// CHANGE uploads/ PATH TO WHATEVER / WHEREVER YOUR FOLDER IS CALLED / LOCATED

		if($type == "gif") {

			imagegif($newThumb, '../images/banner/'.$thumbName);

		} else if($type == "png") {

			imagejpeg($newThumb, '../images/banner/'.$thumbName);

		} else {

			imagejpeg($newThumb, '../images/banner/'.$thumbName);

		}                      


		// DESTROY IMAGE OBJECTS TO SAVE SPACE ON THE SERVER

		imagedestroy($imgObj);


		imagedestroy($newThumb);

		//$nama = $db->dataku("nama", $userid);
	    $db->select("ordering", "banner_rek", "", "ordering");
		$j=$db->num_rows();
		$order = $j + 1;
		$fotone = $_POST['fotone'];
		if(!empty($_FILES['uploadfile']['name'])){ 
		unlink("../images/banner/$fotone");
		$foto = $thumbName; 
		}else{
		$foto = $fotone; 
		}

		if($edit > 0) {
		
				$db->update("banner_rek", "namabank='$namabank', banner='$foto', norek='$norek', pemilik='$pemilik', published='$publish', nama='$bankee'", "id='$no'");
				
        header("location: ?go=bannerrek");
	exit;		
	
	} else {	
		$db->insert("banner_rek", "nama, banner, url, hits, ordering, published, namabank, norek, pemilik", "'$bankee', '$foto', '$link', 0, '$order', '$publish', '$namabank', '$norek', '$pemilik'");
		

        header("location: ?go=bannerrek");
	exit;		
		
			}
	}
	}
		
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		$db->update("banner_rek", "published='$pub'", "id='$no'");
        header("location: ?go=bannerrek");
	exit;		
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		$sqlber = mysql_query("SELECT * FROM banner_rek WHERE id='$no'");
        $numbr = mysql_num_rows($sqlber);
        while($rowbr = mysql_fetch_array($sqlber)){
        $fotoe = $rowbr['banner'];
		unlink("../images/banner/$fotoe");
		}
		//echo "delete no $no";
		$db->delete("banner_rek", "id=$no");
        header("location: ?go=bannerrek");
	exit;		
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "ordering") {
if(isset($_GET["ord"])){ $ord = $_GET["ord"]; }
if(isset($_GET["step"])){ $step = $_GET["step"]; }	
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["lastid"])){ $lastid = $_GET["lastid"]; }	
if(isset($_GET["nextid"])){ $nextid = $_GET["nextid"]; }	
if(isset($_GET["kat"])){ $kat = $_GET["kat"]; }	
		$new_ord = $ord + $step;
		$new_ord1 = $ord;
		if($step > 0 ) {
			$no_id = $nextid;
		} else {
			$no_id = $lastid;
		}		
		$db->update("banner_rek", "ordering='$new_ord'", "id='$no'");
		$db->update("banner_rek", "ordering='$new_ord1'", "id='$no_id'");
        header("location: ?go=bannerrek");
	exit;		
?>
<?php
} else {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="3%" align="center">#</td>
    <td width="17%" align="center">Logo</td>
    <td width="21%" align="center">Nama Bank</td>
    <td width="19%" align="center">No.Rekening</td>
	<td width="23%" align="center">Pemilik</td>
    <td width="6%" align="center">Published</td>
    <td width="6%" align="center">Edit</td>
    <td width="5%" align="center">&nbsp;</td>
  </tr>
<?php
//---pagination----------------
$limit = '20'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '50'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {
	$display = 1;
} else {
	$display = $_GET['show'];
}
$start = (($display * $limit) - $limit);
	$numrows = $db->count_records("banner_rek", "");
	
$db->select("id, nama, url, banner, hits, published, ordering, namabank, norek, pemilik", "banner_rek", "", "ordering", "", "", "$start, $limit");

$j=$db->num_rows();
for($i=0;$i<$j;$i++) {
	$nom = $i + 1;
	$lid = $i - 1;
	if(is_odd($i) == 0) {
		$class = "tblrow_ganjil";
	} else {
		$class = "tblrow_genap";
	} 	
	if($db->result($i, "published") > 0) {
		$img = "<a href='?go=bannerrek&page=publish&pub=0&no=".$db->result($i, "id")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=bannerrek&page=publish&pub=1&no=".$db->result($i, "id")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 	
	//---ordering---
	if($db->result($i, "ordering") == 1) {
		$ordering = "<a href='?go=bannerrek&page=ordering&step=1&ord=".$db->result($i, "ordering")."&nextid=".$db->result($nom, "id")."&no=".$db->result($i, "id")."'><img src='images/downarrow.png' border=0 title='Move Down'></a>";
	} else if($db->result($i, "ordering") > 1 and $db->result($i, "ordering") < $j) {
		$ordering = "<a href='?go=bannerrek&page=ordering&step=-1&ord=".$db->result($i, "ordering")."&lastid=".$db->result($lid, "id")."&no=".$db->result($i, "id")."'><img src='images/uparrow.png' border=0 title='Move Up'></a>&nbsp;&nbsp;<a href='?go=bannerrek&page=ordering&step=1&ord=".$db->result($i, "ordering")."&nextid=".$db->result($nom, "id")."&no=".$db->result($i, "id")."'><img src='images/downarrow.png' border=0 title='Move Down'></a>";	
	} else if($db->result($i, "ordering") == $j) {	
		$ordering = "<a href='?go=bannerrek&page=ordering&step=-1&ord=".$db->result($i, "ordering")."&lastid=".$db->result($lid, "id")."&no=".$db->result($i, "id")."'><img src='images/uparrow.png' border=0 title='Move Up'></a>";
	}	
	$adafoto = $db->result($i, "banner");
	$dirfoto = "../images/banner/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../images/banner/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../images/banner/$adafoto' class='imgFloatLeft' width='150'></a>";
		}
	else
		{
		$gambar = "<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='150'></a>";
		} 	
?>
 
  <tr class="<?php echo $class; ?>">
    <td><?php echo $nom; ?> </td>
    <td align="center"><?php echo $gambar; ?></td>
    <td align="center"><?php echo $db->result($i, "namabank"); ?></td>
    <td align="center"><?php echo $db->result($i, "norek"); ?></td>
    <td align="center"><?php echo $db->result($i, "pemilik"); ?></td>
    <td align="center"><?php echo $img; ?></td>
    <td align="center"><a href="?go=bannerrek&page=addnew&edit=1&no=<?php echo $db->result($i, "id"); ?>"><img src='images/edit_f2.png' border=0 title='Click to Edit'></a></td>
	
	<td align="center"><a href="#" onClick='confirmation(<?php echo $db->result($i, "id"); ?>)' style='cursor:hand'><img src='images/cancel_f2.png' border=0 title='Click to Edit'></a></td>
 
  </tr>
<?php
	}
?>	  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
<?php
$paging = ceil ($numrows / $limit);
if ($display > 1) {
	$previous = $display - 1;
?>
  <a href="?go=bannerrek&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=bannerrek&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
<?php
}
if ($numrows != $limit) {
	if ($scroll == 1) {
		if ($paging > $scrollnumber) {
			$first = $display;
			$last = ($scrollnumber - 1) + $display;
		}
	} else {
		$first = 1;
		$last = $paging;
	}
	if ($last > $paging ) {
		$first = $paging - ($scrollnumber - 1);
		$last = $paging;
	}
	for ($i = $first;$i <= $last;$i++){
		if ($display == $i) {
?>
[ <b>
<?php echo $i ?>
</b> ]
<?php
		} else {
?>
[ <a href="?go=bannerrek&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		}
	}
}
if ($display < $paging) {
	$next = $display + 1;
?>
| <a href="?go=bannerrek&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=bannerrek&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php
}
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
}
?>