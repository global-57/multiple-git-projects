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
	var answer = confirm("Are You sure to delete this news ?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=berita&page=delete&no=" + noid;
	}
}
</script>
<style type="text/css">
<!--
.style1 {font-size: x-small}
.style2 {font-size: x-small; color: #CCCCCC; }
.style3 {color: #FF0000}
.style5 {
	color: #99CC00;
	font-weight: bold;
}
.style6 {color: #FF9933}
.style11 {
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
}
-->
</style>

<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Berita</h2>
<div id="menu_button2">
  <ul>
   <li><a href="?go=berita&amp;page=addnew&edit=0"><img src="images/add.png" width="12" align="absbottom" />&nbsp;&nbsp;<strong>Tambah Berita</strong></a></li>
  </ul>
</div>
<?php
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["no"])){ $no = $_GET["no"]; }

	if($edit > 0) {
	$db->select("id_berita, id_user, judul, isi_berita, gambar, tanggal, counter, published", "berita", "id_berita='$no'");
		//$db->select("no, userid, nama, kota, testimoni, foto, published, tgl, judul, website, email, hp, company, tayang", "newssilver", "no=$no");
		$no = $db->result(0, "id_berita");
		$foto = $db->result(0, "gambar");
		$isi = $db->result(0, "isi_berita");
		$judul = $db->result(0, "judul");
		$userid = $db->result(0, "id_user");
		$edit = "1";
		
	} else {
	if(empty($foto)){ $foto = ""; }
	if(empty($isi)){ $isi = ""; }
	if(empty($judul)){ $judul = ""; }
	if(empty($no)){ $no = ""; }
	if(empty($userid)){ $userid = ""; }
	$edit = "0";
	}	
	
?>
<form action="?go=berita&amp;page=submit" method="post" nama="berita" id="berita" enctype="multipart/form-data">
  <div align="center">
    <center>
      <table border="0" cellpadding="5" cellspacing="5" style="border-collapse: collapse" width="99%" id="AutoNumber1" bordercolor="#EDEDE9">
         <tr>
          <td width="70%"><div style="width:640px; margin-left:125px"><?php
$results = $_GET['result'];
if($results == "success") { 
echo "<div class='alert-box successs' width='70%'><span>sukses : </span>Data telah berhasil diupdate !</div>";
}
?></div>
		  
		</td>
		
        </tr>
        <tr>
          <td width="100%" style="border-style: none; border-width: medium"><div align="center">
            <table width="100%" border="0" cellspacing="5" cellpadding="3">
                <tr>
                <td width="9%" align="right"><div class="control-group"><div class="controls"><div align="right">Judul Berita : </div></td>
                <td width="91%"><input name="judul" type="text" class="form" id="judul" value="<?php echo $judul; ?>" size="100" />
				 <input name="userid" type="hidden" class="form" id="userid" value="<?php echo $userid; ?>" size="75" />
                      <input name="edit" type="hidden" id="edit" value="<?php echo $edit; ?>" />
                      <input name="no" type="hidden" class="form" id="no" value="<?php echo $no; ?>" size="10" /></div></div>
				</td>
              </tr>
            
              <tr>
                <td align="right" valign="top"><div align="right">Isi Berita  : </div>
                  <div align="right"></div></td>
                <td valign="top"><div class="control-group"><div class="controls">
				 <textarea name="testi" class="ckeditor" cols="150" type="text" rows="15"><?php echo $isi; ?></textarea>
				 </div></div>
				</td>
              </tr>
			 <tr>
                <td align="right" valign="top"><div align="right">Gambar  : </div>
                  <div align="right"></div></td>
                <td valign="top">
      <?php
		  	$adafoto = $foto;
	$dirfoto = "../images/foto_berita/$adafoto";
	$ukr2=getimagesize($dirfoto);
						$w2=$ukr2[0];
						$h2=$ukr2[1];
		if($w2>300){	
		$width = "300px";		
		}	
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='".$dirfoto."' class='highslide' onclick='return hs.expand(this)'><img src='".$dirfoto."' class='imgFloatLeft' width='$width'></a>";
		}
	else
		{
		$gambar = "<a href='../images/nomage.png' class='highslide' onclick='return hs.expand(this)'><img src='../images/nomage.png' class='imgFloatLeft' width='$width'></a>";
		} 	
		?>
                  <?= $gambar; ?>
	  <br /><br />
                       <input name="uploadfile" type="file" class="form" id="uploadfile">         
                      <input name="fotone" type="hidden" class="form" id="fotone" value="<?= $foto; ?>" size="12" />
				</td>
              </tr>
			   <tr>
                <td align="right">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><label>
                 <?php if($demomode == 1){ ?>
	  <input type="button" onclick='return confirmActiondemomode()' name="submit"  value="SAVE" class="submit">
      <?php } else { ?>
        <input type="submit"  value="SAVE" class="submit">
            <?php } ?>
</label>
                  <label>
                  <input type="button" name="cancel" id="cancel" value="CANCEL" onclick="javascript:history.go(-1)" class="submit" />
                  </label></td>
              </tr>
			   <tr>
                <td align="right">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td align="right">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
    </center>
  </div>
</form>
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../dt_page/script.js"></script>
<?php
function safe($value){
   return mysql_real_escape_string($value);
}
?> 
<?php	
}
else if (isset($_GET['page']) && $_GET['page'] == "submit") {

	$userid = $_POST['userid'];
	    $edit = $_POST['edit'];
	    $no = $_POST['no'];
	    $judul = $_POST['judul'];
	    $testi = stripslashes($_POST['testi']);
	    $fotone = $_POST['fotone'];
// SET VARIABLE FOR STORING FILE

	$img = $_FILES['uploadfile'];

	

	// GET THE FILE TYPE.  THE TYPE IS IDENTIFIED BY GRABBING THE STRING AFTER THE LAST DOT (.)

	$type = substr($img['name'], strrpos($img['name'], '.') + 1);

	if($type == ""){
	if($edit > 0) {
				$tgl_sekarang = date("Y-m-d");
				$jam_sekarang = date("H:i:s");
				$clientdate = date("Y-m-d H:i:s");
				$testie=mysql_real_escape_string($testi);
				$db->update("berita", "isi_berita='".$testie."', judul='$judul', tanggal='$clientdate', gambar='$fotone'", "id_berita='$no'");
				header("location: ?go=berita&page=addnew&edit=1&no=$no&result=success");
	            exit;
			} else {
				$clientdate = date("Y-m-d H:i:s");
				$testie=mysql_real_escape_string($testi);
				$db->insert("berita", "", "'', 'admin', '$judul', '$testie', '', '$clientdate', 0, 0");
				header("location: ?go=berita&result=success_add");
	            exit;
			}
}else{
	// IF IMAGE TYPE IS GIF / JPG AND SIZE LESS THAN 1MB

	if(($type == "gif" || $type == "jpg"  || $type == "jpeg"  || $type == "png" ) && $img['size'] < 3000000) {


		// INITIALISE VARIABLE WITH CURRENT TIME

		$time = date("Ymd_His");
        $sess = md5(substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz", 64)), 0, 20));
		

		// SET VARIABLE WITH NAME OF FILE BY GRABBING EVERYTHING BEFORE THE DOT (.)

		$namex = substr($img['name'], 0, strrpos($img['name'], '.'));	
		$special = "news-by_admin";
		$new_file_name = str_replace($namex,'',$special);
		
		$name  = $new_file_name.'_'.$sess.'_'.$time;

		// CREATE THE UNIQUE FILENAMES FOR THE THUMBNAIL AND FULLSIZE USING THE TIMESTAMP SET ABOVE

	
		$thumbName		= $name.'.'.$type;
		

		// CREATE A PHP IMAGE OBJECT FROM THE UPLOADED FILE BASED ON IMAGE TYPE

		if($type == "gif")

			$imgObj = imagecreatefromgif($img['tmp_name']);

		else if($type == "png")

			$imgObj = imagecreatefrompng($img['tmp_name']);

		else

			$imgObj = imagecreatefromjpeg($img['tmp_name']);

		

		// GET THE WIDTH AND HEIGHT OF THE UPLOADED FILE

		$width = imageSX($imgObj);

		$height = imageSY($imgObj);

		

		// PROPORTIONAlLY RESIZE THE IMAGE IF WIDTH GREATER THAN 600 PIXELS

		if($width > 600) {

		 	$height = $height * (600 / $width);

		 	$width = 600;	

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

			imagegif($newThumb, '../images/foto_berita/'.$thumbName);

		} else if($type == "png") {

			imagejpeg($newThumb, '../images/foto_berita/'.$thumbName);

		} else {

			imagejpeg($newThumb, '../images/foto_berita/'.$thumbName);

		}                      


		// DESTROY IMAGE OBJECTS TO SAVE SPACE ON THE SERVER

		imagedestroy($imgObj);


		imagedestroy($newThumb);

		//$nama = $db->dataku("nama", $userid);
	}
	
		if($edit > 0) {
				$tgl_sekarang = date("Y-m-d");
				$jam_sekarang = date("H:i:s");
				$clientdate = date("Y-m-d H:i:s");
				$db->update("berita", "isi_berita='$testi', judul='$judul', tanggal='$clientdate', gambar='$thumbName'", "id_berita='$no'");
				header("location: ?go=berita&page=addnew&edit=1&no=$no&result=success");
	            exit;
			} else {
				$clientdate = date("Y-m-d H:i:s");
				$db->insert("berita", "", "'', 'admin', '$judul', '$testi', '$thumbName', '$clientdate', 0, 0");
				
				header("location: ?go=berita&result=success_add");
	            exit;
			}

}		
?>
<?php			
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		$db->update("berita", "published='$pub'", "id_berita='$no'");
		header("location: ?go=berita&result=success");
	            exit;
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		$sqlber = mysql_query("SELECT * FROM berita WHERE id_berita='$no'");
        $numbr = mysql_num_rows($sqlber);
        while($rowbr = mysql_fetch_array($sqlber)){
        $fotoe = $rowbr['gambar'];
		unlink("../images/foto_berita/$fotoe");
		}
		$db->delete("berita", "id_berita=$no");
		header("location: ?go=berita&result=success_dell");
	            exit;
?>
<?php
} else {
?>
<?php
$results = $_GET['result'];
if($results == "success_add") { 
echo "<div class='alert-box successs'><span>sukses : </span>Data telah berhasil ditambahkan !</div>";
}
?>
<?php
$results = $_GET['result'];
if($results == "success_dell") { 
echo "<div class='alert-box successs'><span>sukses : </span>Data telah berhasil dihapus !</div>";
}
?>
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
	$numrows = $db->count_records("berita", "");	
	$db->select("id_berita, id_user, judul, isi_berita, gambar, tanggal, counter, published", "berita", "", "id_berita desc", "", "", "$start, $limit");
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="4%" align="center">#</td>
	 <td width="4%" align="center">ID</td>
    <td width="16%" align="center">Username</td>
    <td width="13%" align="center">Tgl</td>
    <td width="51%" align="center">Judul Berita</td>
    <td width="7%" align="center">Published</td>
	 <td width="5%" align="center">Edit</td>
    <td width="4%" align="center">Hapus</td>
  </tr>
<?php
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
		$img = "<a href='?go=berita&page=publish&pub=0&no=".$db->result($i, "id_berita")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=berita&page=publish&pub=1&no=".$db->result($i, "id_berita")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 	
?>
  <tr class="<?= $class; ?>">
    <td align="center" width="4%" valign="top"><?php echo $nom; ?> </td>
	 <td align="center" width="4%" valign="top"><?php echo $db->result($i, "id_berita"); ?></td>
    <td align="center" width="16%" valign="top"><?php echo $db->result($i, "id_user"); ?></td> 
    <td align="center" valign="top"><?php echo $db->result($i, "tanggal"); ?></td>
    <td align="center" valign="top"><?php echo $db->result($i, "judul"); ?></td>
    <td align="center" valign="top"><?php echo $img; ?></td>
    <td align="center" valign="top"><a href="?go=berita&page=addnew&edit=1&no=<?php echo $db->result($i, "id_berita"); ?>"><img src='../images/edit_f2.png' border=0 title='Edit Berita' width="24"></a></td>
	<td align="center" valign="top">
    
     <?php if($demomode == 1){ ?>
    <a href="#" onclick='return confirmActiondemomode()' style='cursor:hand'><img src="../images/icon-32-delete_resize.png" title="Hapus" /></a>
    <?php } else { ?>
    <a href="#" onclick='confirmation(<?php echo $db->result($i, "id_berita"); ?>)' style='cursor:hand'><img src="../images/icon-32-delete_resize.png" title="Hapus" /></a>
    
    <?php } ?>
    </td>
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
  <a href="?go=berita&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=berita&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=berita&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		}
	}
}
if ($display < $paging) {
	$next = $display + 1;
?>
| <a href="?go=berita&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=berita&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
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