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
	var answer = confirm("Are You sure to delete this download?")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=downldmember&page=delete&no=" + noid;
		
	}
	
}
//-->
</script>
<script type="text/javascript">
<!--
function confirmation2(noid) {
	var answer = confirm("Yakin mau menghapus file ini? jika hanya menghapus link saja tanpa menghapus file, silahkan hapus nama file pada field kuning saja!")
	if (answer){
		//alert("Bye bye!")
		window.location = "?go=downldmember&page=delete2&no=" + noid;
		
	}
	
}
//-->
</script>
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Download Member Manager</h2>
<?php
$res = $_GET['result'];
if($res == "success") { 
echo "<div class='alert-box successs'><span>sukses: </span><br />Download berhasil di buat!</div>";
}
?>


<?php
if (isset($_GET['page']) && $_GET['page'] == "addnew") {
if(isset($_GET["edit"])){ $edit = $_GET["edit"]; }
if(isset($_GET["no"])){ $no = $_GET["no"]; }
$ckode1 = strtolower(substr(str_shuffle(str_repeat("8262694361ABSDGETRUPLGDBC189378411466653906604210743441164550433665334ABSDGETRUPLGDBC37446114443371012", 34)), 24, 13));
		if($edit > 0) {
			$db->select("id, nama, deskripsi, created, published, harga, catid, gambar, file, expire, kode, hargab, member", "product3", "id='$no'");
			$title = $db->result(0, "nama"); 
			$harga = $db->result(0, "harga"); 
			$kode = $db->result(0, "kode"); 
			$crdate = $db->result(0, "created"); 
			$publish = $db->result(0, "published"); 
			$foto = $db->result(0, "gambar");
			$catid = $db->result(0, "catid"); 
			$myfile = $db->result(0, "file"); 
			$maintext = $db->result(0, "deskripsi"); 
			$expire = $db->result(0, "expire"); 
			$hargab = $db->result(0, "hargab"); 
			$member = $db->result(0, "member"); 
	        if(empty($kode)){ $kode = $ckode1; }
			$judul = "";
			$edit = "1"; 
		} else {
			$author = $valid_admin; 
			$crdate = $clientdate; 
			if(empty($title)){ $title = ""; }
	        if(empty($harga)){ $harga = ""; }
	        if(empty($kode)){ $kode = $ckode1; }
	        if(empty($crdate)){ $crdate = ""; }
	        if(empty($publish)){ $publish = ""; }
	        if(empty($gbr)){ $gbr = ""; }
	        if(empty($catid)){ $catid = ""; }
	        if(empty($myfile)){ $myfile = ""; }
	        if(empty($maintext)){ $maintext = ""; }
	        if(empty($hargab)){ $hargab = ""; }
	        if(empty($member)){ $member = ""; }
			$judul = "";
		}
		
		
?>
<?php
$res = $_GET['result'];
if($res == "success2") { 
echo "<div class='alert-box successs'><span>sukses: </span><br />Download berhasil di update!</div>";
}
?>
<form action="?go=downldmember&page=submit" method="post" enctype="multipart/form-data" name="form1" onsubmit="return Validate(this);">
        <input name="kode" type="hidden" id="kode" value="<?php echo $kode; ?>" size="50">
  <table width="99%" height="350" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="4"><h4><?php echo $judul; ?></h4></td>
    </tr>
    <tr>
      <td width="13%" align="right"><strong>Nama</strong> :&nbsp;</td>
      <td><label>
        <input name="title" type="text" id="title" value="<?php echo $title; ?>" size="50">
      </label></td>
      <td align="right"></td>
      <td></td>
    </tr>
   
    <tr>
      <td align="right" valign="top"></td>
      <td></td>
      <td colspan="2" align="right"></td>
    </tr>
    
	 <tr>
                <td align="right" valign="top"><div align="right">File Download  : </div>
                  <div align="right"></div></td>
                <td valign="top">
      <?php
		  	$adafoto = $myfile;
	$dirfoto = "../userfiles/files/$myfile";
	if (!empty($adafoto) && (file_exists($dirfoto))){
		$gambar = "<a href='".$dirfoto."' target='_blank'><img src='../images/download.png'></a>";
		}
	else
		{
		$gambar = "---";
		} 	
		?>
                  <?= $gambar; ?>
	  <br /><br />
                       <input name="img1" type="file" class="form" id="img1">         
                      <input name="myfile" type="hidden" class="form" id="myfile" value="<?= $myfile; ?>" size="12" /><br />
                      <i style="color:#F00;">Hanya file PDF, DOC, GIF, JPG, ZIP, RAR dan PNG</i>
				</td>
              </tr>
	<tr>
      <td align="right" >Link Download :&nbsp;</td>
      <td colspan="3"><textarea name="harga" cols="80" id="harga"><?php echo $harga; ?></textarea></td>
    </tr>
    <tr>
      <td align="right">Link Atau File :&nbsp;</td>
      <td colspan="3">
      <?php if ($hargab == 1){?>
          <input name="hargab" type="radio"  value="0">Link
          <input type="radio" name="hargab" value="1" checked>File
          <?php } else { ?>
          <input name="hargab" type="radio" value="0"  checked>Link
          <input type="radio" name="hargab" value="1">File
          <?php } ?> &nbsp;&nbsp;&nbsp;<i style="color:#F00;">pilih file apabila anda upload file, pilih link apabila anda mengisikan link download</i>
      </td>
    </tr>
	  <tr>
      <td align="right">Published :&nbsp;</td>
      <td colspan="3">
         <?php if ($publish == 1){?>
          <input name="publish" type="radio" id="publish_0" value="1" checked>Yes
          <input type="radio" name="publish" value="0" id="publish_1">No
           <?php } else { ?>
          <input name="publish" type="radio" id="publish_0" value="1">Yes
          <input type="radio" name="publish" value="0" id="publish_1" checked>No
          <?php } ?>
        <input name="no" type="hidden" id="no" value="<?php echo $no; ?>" size="20">
        <input name="edit" type="hidden" id="edit" value="<?php echo $edit; ?>" size="20">
      </td>
    </tr>
     <tr>
      <td align="right">Status Download :&nbsp;</td>
      <td colspan="3">
      <?php if ($member == 1){?>
          <input name="member" type="radio"  value="0">Semua Member
          <input type="radio" name="member" value="1" checked>Hanya Member Aktif
          <?php } else { ?>
          <input name="member" type="radio" value="0"  checked>Semua Member
          <input type="radio" name="member" value="1">Hanya Member Aktif
          <?php } ?> 
      </td>
    </tr>
    <tr>
      <td height="173" align="right" >Deskripsi :&nbsp;</td>
      <td colspan="3"><textarea name="deskripsi" cols="70" rows="10" id="deskripsi"><?php echo $maintext; ?></textarea></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td colspan="3"><label>
        <?php if($demomode == 1){ ?>
	  <input type="button" onclick='return confirmActiondemomode()' name="submit"  value="SAVE" class="submit">
      <?php } else { ?>
        <input type="submit"  value="SAVE" class="submit">
            <?php } ?>
        
      </label><label><input type="button" name="cancel" id="cancel" value="CANCEL" onClick="javascript:history.go(-1)" class="submit">
      </label></td>
    </tr>
  </table>
</form>
  <script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("title","req","Nama Produk harus diisi, silahkan ulangi lagi!");

</script>  
 <script type="text/javascript">
var _validFileExtensions = [".pdf", ".doc", ".gif", ".jpg", ".png", ".jpeg", ".docx", ".zip", ".rar"];

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
                    alert("Maaf, " + sFileName + " tidak di ijinkan, silahkan upload hanya file " + _validFileExtensions.join(", "));
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
} else if (isset($_GET['page']) && $_GET['page'] == "submit") {

$created = $_POST['created'];	
$title = $_POST['title'];
$harga = $_POST['harga'];
$publish = $_POST['publish'];
$deskripsi = $_POST['deskripsi'];	
$edit = $_POST['edit'];
$hargab = $_POST['hargab'];
$no = $_POST['no'];
$member = $_POST['member'];
$kode = $_POST['kode'];
	    $myfile = $_POST['myfile'];
		
		
		$time = date("Ymd-His");
	   $sess = substr(str_shuffle(str_repeat("WZTYG31113I3N16ZU3F4248V2JY1Q86NYRIL233V5JD3U356BG3Q182Y5I2J598C3VPJ8S213MI741UD84Z1Z", 125)), 34, 48);
	   $logo  = "files_".$sess."_".$time;
	   $temp = explode(".", $_FILES["img1"]["name"]);
$thumbName = $logo. '.' . end($temp);
move_uploaded_file($_FILES["img1"]["tmp_name"], "../userfiles/" . $thumbName);
	   
	   if(!empty($_FILES['img1']['name'])){
		   $thumbName = $thumbName;
	   }else{
		   $thumbName = $myfile;
	   }
	   
	   
		if($edit > 0) {
			$db->update("product3", "nama='$title', harga='$harga', deskripsi='$deskripsi', published='$publish', created='$clientdate', file='$thumbName', hargab='$hargab', member='$member', kode='$kode'", "id='$no'");
		header("location: ?go=downldmember&page=addnew&edit=1&no=$no&result=success2");
			
	} else {
			$db->insert("product3", "catid, nama, deskripsi, harga, gambar, published, created, file, expire, komisi, hargab, hargac, hargad, download, member, kode", "'', '$title', '$deskripsi', '$harga', '', '$publish', '$clientdate', '$thumbName', '', '', '$hargab', '', '', '', '$member', '$kode'");
			
		
		header("location: ?go=downldmember&result=success");
	}		
		
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "publish") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
if(isset($_GET["pub"])){ $pub = $_GET["pub"]; }
		$db->update("product3", "published='$pub'", "id='$no'");
		header("location: ?go=downldmember");
?>
<?php
} else if (isset($_GET['page']) && $_GET['page'] == "delete") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }		//echo "delete no $no";
		$sqlber = mysql_query("SELECT * FROM product3 WHERE id='$no'");
        $numbr = mysql_num_rows($sqlber);
        while($rowbr = mysql_fetch_array($sqlber)){
        $fotoe = $rowbr['gambar'];
		unlink("../produk/images/$fotoe");
		}
		$db->delete("product3", "id=$no");
		header("location: ?go=downldmember");
?>
<?php
} else  if (isset($_GET['page']) && $_GET['page'] == "delete2") {
if(isset($_GET["no"])){ $no = $_GET["no"]; }
		//echo "delete no $no";
			$sqlc = mysql_query("SELECT file FROM product3 WHERE id='$no'");
$numc = mysql_num_rows($sqlc);
while($rowc = mysql_fetch_array($sqlc)){
 $data = $rowc['file'];
 unlink("../produk/file/$data"); 
		$db->update("product3", "file=''", "id='$no'");
		header("location: ?go=downldmember&page=addnew&edit=1&no=$no");
		}
?>
<?php } else { ?>

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr class="tbl_header">
    <td width="7%" align="center">#</td>
    <td width="41%" align="center">Title</td>
    <td width="7%" align="center">Published</td>
    <td width="21%" align="center">File/Link</td>
    <td width="5%" align="center">Hits</td>
    <td width="5%" align="center">Download</td>
    <td width="10%" align="center">Status</td>
	<td width="6%" align="center">Edit</td>
    <td width="6%" align="center">Hapus</td>
  </tr>
<?php
//---pagination----------------
$limit = '20'; // How many results should be shown at a time
$scroll = '0'; // Do you want the scroll function to be on (1 = YES, 2 = NO)
$scrollnumber = '20'; // How many elements to the record bar are shown at a time when the scroll function is on
//-------------pagination--------------
if (!isset ($_GET['show'])) {

	$display = 1;
	
} else {

	$display = $_GET['show'];
	
}
$start = (($display * $limit) - $limit);



//--------------------------------------
$numrows = $db->count_records("product2", "");

if(isset($Submit) == "CARI") {
	$filter = "nama like '%$keywrd%'";
	$where = "nama like '%$keywrd%'";
$db->select("id, nama, harga, published, created, catid, file, hit, expire, kode, download, member", "product3", $where, "id desc", "", "", "$start, $limit");

} else {

$db->select("id, nama, harga, published, created, catid, file, hit, expire, kode, download, member", "product3", "", "id desc", "", "", "$start, $limit");
}
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
		$img = "<a href='?go=downldmember&page=publish&pub=0&no=".$db->result($i, "id")."'><img src='images/tick.png' border=0 title='Click to Unpublish'></a>";
	} else {
		$img = "<a href='?go=downldmember&page=publish&pub=1&no=".$db->result($i, "id")."'><img src='images/publish_x.png' border=0 title='Click to Publish'></a>";
	} 	
	
	if($db->result($i, "member") > 0) {
		$imgc = "<span class='badge badge-success'>Member Aktif</span>";
	} else {
		$imgc = "<span class='badge badge-warning'>Semua Member</span>";
	} 	
	
?>
 
  <tr class="<?php echo $class; ?>">
    <td width="7%"align="center"><?php echo $nom; ?> </td>
   
    <td align="center"><?php echo $db->result($i, "nama"); ?></td>
    <td align="center"><?php echo $img; ?></td>
   
    <td><?php
	$st = $db->result($i, "harga");
	if(!empty($st)) {
		$sts = "Link";
	} else {
		$sts = "File";
	} 	
	?>
	<?php echo $sts; ?>&nbsp;:&nbsp;<?php echo $db->result($i, "file"); ?><?php echo $db->result($i, "harga"); ?></td>
    <td align="center"><?php echo $db->result($i, "hit"); ?></td>
    <td align="center"><a href="?go=datadownload&kode=<?php echo $db->result($i, "kode"); ?>" target="_blank"><?php echo $db->result($i, "download"); ?></a></td>
    <td align="center"><?php echo $imgc; ?></td>
   <td align="center"><a href="?go=downldmember&page=addnew&edit=1&no=<?php echo $db->result($i, "id"); ?>"><img src='images/edit_f2.png' border=0 title='Click to Edit'></a></td>
     <td align="center">
    <?php if($demomode == 1){ ?>
     <a href="#" onClick='return confirmActiondemomode()' style='cursor:hand; padding-left:15px'><img src="../images/stop_f2.png" title="Hapus Foto" alt="" name="images" width="32" height="32" /></a>
     <?php } else { ?>
   <a href="#" onClick='confirmation(<?php echo $db->result($i, "id"); ?>)' style='cursor:hand; padding-left:15px'><img src="../images/stop_f2.png" title="Hapus Foto" alt="" name="images" width="32" height="32" /></a>
    <?php } ?>
     </td>
  </tr>
<?php
	}
?>	  
</table>
<br />
<table width="90%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center">
     <?php
$paging = ceil ($numrows / $limit);

// Display the navigation
if ($display > 1) {
	
	$previous = $display - 1;
	
?>
  <a href="?go=downldmember&kat=<?php echo $kat; ?>&show=1" style="font-size:10px; color:#0000CC"><< Awal </a> | <a href="?go=downldmember&kat=<?php echo $kat; ?>&show=<?php echo $previous; ?>" style="font-size:10px; color:#0000CC">< Sebelumnya </a> |
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
[ <a href="?go=downldmember&kat=<?php echo $kat; ?>&show=<?php echo $i; ?>" style="font-size:10px; color:#0000CC">
<?php echo $i; ?>
</a> ]
<?php
		
		}
	
	}

}

if ($display < $paging) {

	$next = $display + 1;
	
?>
| <a href="?go=downldmember&kat=<?php echo $kat; ?>&show=<?php echo $next; ?>" style="font-size:10px; color:#0000CC">Selanjutnya ></a> | <a href="?go=downldmember&kat=<?php echo $kat; ?>&show=<?php echo $paging; ?>" style="font-size:10px; color:#0000CC">Terakhir >></a>
<?php

}
//
?>

    </td>
  </tr>
</table>
<?php }  ?>