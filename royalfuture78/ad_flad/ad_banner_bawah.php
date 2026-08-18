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
		window.location = "?go=fotogallery&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-menumgr.png" width="48" height="48" align="absmiddle" /> Gallery Foto</h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=fotogallery&page=addnew&edit=0"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah Foto Gallery</strong></a></li>
  </ul>
</div>
<?php
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["no"])){ $no = $_GET["no"]; }
	if($edit == 1) {
		$db->select("id, nama, detail, url, published, banner, hits", "banner_bawah", "id=$no");	
		$menutype = $db->result(0, "detail");
		$menuitem = $db->result(0, "hits");
		$name_edit = $db->result(0, "nama");
		$link = $db->result(0, "url");
		$foto = $db->result(0, "banner");
		$edit = "1";
		
	} else {
		if(empty($menutype)){ $menutype = ""; }
	if(empty($menuitem)){ $menuitem = ""; }
	if(empty($name_edit)){ $name_edit = ""; }
	if(empty($link)){ $link = ""; }
	if(empty($foto)){ $foto = ""; }
	$edit = "0";
		}

?>
<form action="?go=fotogallery&page=submit" method="post" enctype="multipart/form-data" name="form2" onsubmit="return Validate(this);">
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td colspan="2" align="center">
      <?php
$results = $_GET['result'];
if($results == "not_allowed") { 
echo "<div class='alert-box errors'><span>Error : </span>Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.</div>";
}
?>
     <?php
	 	if($edit > 0 ) {
			echo "<h4>Edit Foto</h4>";
		} else	{
			echo "<h4>Tambah Foto</h4>";
		}
	?>			</td>
    </tr>
	 <tr>
      <td width="35%" align="right">Judul Foto :</td>
      <td width="65%"><label>
		<input name="title" type="text" id="title" value="<?php echo $name_edit; ?>" size="50">
      </label></td>
    </tr>
	 <tr>
      <td align="right">Keterangan:</td>
      <td>
	  <textarea name="ket" cols="50" rows="4" class="form" id="ket"><?php echo $menutype; ?></textarea>
	  </td>
    </tr>
    <tr>
      <td width="35%" align="right">Link Album :</td>
      <td width="65%"><label>
		<select name="link" onchange="value" class="form">
         
		  <?php if($link){ ?>
          <option value="<?php echo $link; ?>" selected="selected"><?php echo $link; ?></option>
          <?php } else{ ?>
           <option value="000" selected="selected">--- Pilih Album ---</option>
          <?php } ?>
		  <?php
					
					$sql=mysql_query("select url from bannerhome where published=1");
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
        <input name="no" type="hidden" id="no" value="<?php echo $no; ?>" />
        <input name="edit" type="hidden" id="edit" value="<?php echo $edit; ?>" />
      </label></td>
    </tr>
	
    <tr>
      <td align="right">Foto :</td>
      <td><label>
         <?php
		  	$adafoto = $foto;
	$dirfoto = "../gallery/foto/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../gallery/foto/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../gallery/foto/$adafoto' class='imgFloatLeft' width='250'></a>";
		}
	else
		{
		$gambar = "<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='250'></a>";
		} 	
		?>
                 <?php echo $gambar; ?><br /><br />
       
                 <input name="uploadfile" type="file" class="form" id="uploadfile">
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
        <input type="submit" name="button2" id="button2" value="Simpan Foto" class="submit">
      </label></td>
    </tr><tr>
      <td>&nbsp;</td>
      <td></td>
    </tr>
  </table>
</form>
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("form2");
	  frmvalidator.addValidation("link","dontselect=000","Pilih Album");
	
//]]></script>  
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
                    alert("Maaf, " + sFileName + " tidak di ijinkan di upload untuk album foto, silahkan upload hanya file image : " + _validFileExtensions.join(", "));
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

$title = $_POST['title'];
$type = $_POST['type'];
$no = $_POST['no'];
$link = $_POST['link'];
$publish = $_POST['publish'];
$ket = $_POST['ket'];
$edit = $_POST['edit'];
	
$sql=mysql_query("select nama from bannerhome where url='$link'");
while($sto=mysql_fetch_row($sql)) {
$nalbum = $sto[0];	
	}
// SET VARIABLE FOR STORING FILE


	$target_dir = "../gallery/foto/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// GET THE FILE TYPE.  THE TYPE IS IDENTIFIED BY GRABBING THE STRING AFTER THE LAST DOT (.)
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG" ) {
   echo "<div class='alert-box errors'><span>Error : </span>Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.&nbsp;&nbsp;<button onclick='history.go(-1);'>Go back</button></div>";
  } else{


	$img = $_FILES['uploadfile'];
	$type = substr($img['name'], strrpos($img['name'], '.') + 1);

	

	// IF IMAGE TYPE IS GIF / JPG AND SIZE LESS THAN 1MB

	if($img['size'] > 4000000) {
		echo "<div class='alert-box errors'><span>Error : </span>Sorry, max files size are allowed to upload is 3MB.&nbsp;&nbsp;<button onclick='history.go(-1);'>Go back</button></div>";
		
	} else {


		// INITIALISE VARIABLE WITH CURRENT TIME

		$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 24));
		

		// SET VARIABLE WITH NAME OF FILE BY GRABBING EVERYTHING BEFORE THE DOT (.)

		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "Foto";
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

		if($width > 1025) {

		 	$height = $height * (1025 / $width);

		 	$width = 1025;	

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

			imagegif($newThumb, '../gallery/foto/'.$thumbName);

		} else if($type == "png") {

			imagejpeg($newThumb, '../gallery/foto/'.$thumbName);

		} else {

			imagejpeg($newThumb, '../gallery/foto/'.$thumbName);

		}                                        

		

		// DESTROY IMAGE OBJECTS TO SAVE SPACE ON THE SERVER

		imagedestroy($imgObj);


		imagedestroy($newThumb);


$db->select("ordering", "bannerhome", "", "ordering");
		$j=$db->num_rows();
		$order = $j + 1;
   $fotone = $_POST['fotone'];
		if(!empty($thumbName)){ 
		unlink("../gallery/foto/$fotone");
		$foto = $thumbName; 
		}else{
		$foto = $fotone; 
		}
		if($edit > 0) {
				$db->update("banner_bawah", "nama='$title', banner='$foto', album='$nalbum', url='$link', detail='$ket', published='$publish', tgl='$clientdate'", "id='$no'");
				echo "<meta http-equiv='refresh' content='0;URL=?go=fotogallery&page=addnew&edit=1&no=$no'>";
	
	
	} else {	
		$db->insert("banner_bawah", "nama, album, banner, detail, url, hits, ordering, published, tgl", "'$title', '$nalbum', '$foto', '$ket', '$link', 0, '$order', '$publish', '$clientdate'");
	echo "<meta http-equiv='refresh' content='0;URL=?go=fotogallery'>";
			}
		}
		} 
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		$db->update("banner_bawah", "published='$pub'", "id='$no'");
		echo "<meta http-equiv='refresh' content='0;URL=?go=fotogallery'>";
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		$sqlber = mysql_query("SELECT * FROM banner_bawah WHERE id='$no'");
        $numbr = mysql_num_rows($sqlber);
        while($rowbr = mysql_fetch_array($sqlber)){
        $fotoe = $rowbr['banner'];
		unlink("../gallery/foto/$fotoe");
		}
		$db->delete("banner_bawah", "id=$no");
		echo "<meta http-equiv='refresh' content='0;URL=?go=fotogallery'>";
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
		$db->update("banner_bawah", "ordering='$new_ord'", "id='$no'");
		$db->update("banner_bawah", "ordering='$new_ord1'", "id='$no_id'");
		echo "<meta http-equiv='refresh' content='0;URL=?go=fotogallery'>";
?>
<?php
} else {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="5%" align="center">#</td>
    <td width="19%" align="center">Nama</td>
    <td width="17%" align="center">Album</td>
    <td width="17%" align="center">Link</td>
    <td width="12%" align="center">Foto</td>
    <td width="16%" align="center">Detail</td>
    <td width="6%" align="center">Published</td>
	<td width="4%" align="center">Edit</td>
    <td width="4%" align="center">Hapus</td>
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
	$numrows = $db->count_records("banner_bawah", "");
$db->select("id, nama, album, detail, url, banner, hits, published, ordering", "banner_bawah", "", "ordering", "id desc", "", "$start, $limit");

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
		$img = "<a href='?go=fotogallery&page=publish&pub=0&no=".$db->result($i, "id")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=fotogallery&page=publish&pub=1&no=".$db->result($i, "id")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 	
	//---ordering---
	if($db->result($i, "ordering") == 1) {
		$ordering = "<a href='?go=fotogallery&page=ordering&step=1&ord=".$db->result($i, "ordering")."&nextid=".$db->result($nom, "id")."&no=".$db->result($i, "id")."'><img src='images/downarrow.png' border=0 title='Move Down'></a>";
	} else if($db->result($i, "ordering") > 1 and $db->result($i, "ordering") < $j) {
		$ordering = "<a href='?go=fotogallery&page=ordering&step=-1&ord=".$db->result($i, "ordering")."&lastid=".$db->result($lid, "id")."&no=".$db->result($i, "id")."'><img src='images/uparrow.png' border=0 title='Move Up'></a>&nbsp;&nbsp;<a href='?go=fotogallery&page=ordering&step=1&ord=".$db->result($i, "ordering")."&nextid=".$db->result($nom, "id")."&no=".$db->result($i, "id")."'><img src='images/downarrow.png' border=0 title='Move Down'></a>";	
	} else if($db->result($i, "ordering") == $j) {	
		$ordering = "<a href='?go=fotogallery&page=ordering&step=-1&ord=".$db->result($i, "ordering")."&lastid=".$db->result($lid, "id")."&no=".$db->result($i, "id")."'><img src='images/uparrow.png' border=0 title='Move Up'></a>";
	}	
	
	$isi_berita = nl2br($db->result($i, "detail"));
    	$isi = substr($isi_berita,0,100); // ambil sebanyak 410 karakter
   		 $isi = substr($isi_berita,0,strrpos($isi," ")); // spasi antar kalimat 
		$adafoto = $db->result($i, "banner");
	$dirfoto = "../gallery/foto/$adafoto";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='../gallery/foto/".$adafoto."' class='highslide' onclick='return hs.expand(this)'><img src='../gallery/foto/$adafoto' class='imgFloatLeft'width='50' height='50'></a>";
		}
	else
		{
		$gambar = "<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='50'height='50'></a>";
		} 		  
		 
?>
 
  <tr class="<?php echo $class; ?>">
    <td align="center"><?php echo $nom; ?> </td>
    <td align="center"><?php echo $db->result($i, "nama"); ?></td>
	<td align="center"><?php echo $db->result($i, "album"); ?></td>
	<td align="center"><?php echo $db->result($i, "url"); ?></td>
	<td align="center"><?php echo $gambar; ?></td>
	<td align="center"><?php echo $db->result($i, "detail"); ?></td>
    <td align="center"><?php echo $img; ?></td>
	 <td align="center"><a href="?go=fotogallery&page=addnew&edit=1&no=<?php echo $db->result($i, "id"); ?>"><img src='images/edit_f2.png' border=0 title='Click to Edit'></a></td>
    <td align="center"><a href="#" onClick='confirmation(<?php echo $db->result($i, "id"); ?>)' style='cursor:hand'><img src='images/stop_f2.png' border=0 title='Click to Edit'></a></td>
  </tr>
<?php
	}
?>	  
</table>
<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="center">
<?php
$paging = ceil ($numrows / $limit);
if ($display > 1) {
	$previous = $display - 1;
?>
  <a href="?go=fotogallery&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=fotogallery&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=fotogallery&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		}
	}
}
if ($display < $paging) {
	$next = $display + 1;
?>
| <a href="?go=fotogallery&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=fotogallery&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
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