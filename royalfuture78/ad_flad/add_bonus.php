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
<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Add Bonus</h2>
<div id="menu_button2">
 
</div>
<form name="form1" method="post" action="?go=addbonus&page=submit">

  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">INPUT 
          BONUS</font></strong></div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">User ID Penerima Bonus
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="mid" onchange="value" class="form" required="required">
					    <?php
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username from member where status=1");
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

        </label></td>
    </tr>
   
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Jenis Komisi : </td>
      <td bgcolor="#FFFFFF">
	  <select name="jenis" onchange="value" class="form" required="required">
		  <option value="komsponsor">Bonus Sponsor</option>
		  <option value="komsponsor2">Bonus Sponsor Level 2</option>
		  <option value="komsponsor3">Bonus Sponsor Level 3</option>
		  <option value="komsponsor4">Bonus Sponsor Level 4</option>
		  <option value="komsponsor5">Bonus Sponsor Level 5</option>
		  <option value="komsponsor6">Bonus Sponsor Level 6</option>
		  <option value="komsponsor7">Bonus Sponsor Level 7</option>
		  <option value="komsponsor8">Bonus Sponsor Level 8</option>
		  <option value="komsponsor9">Bonus Sponsor Level 9</option>
		  <option value="komsponsor10">Bonus Sponsor Level 10</option>
		  <option value="komsponsor11">Bonus Sponsor Level 11</option>
		  <option value="komsponsor12">Bonus Sponsor Level 12</option>
		  <option value="komsponsor13">Bonus Sponsor Level 13</option>
		  <option value="komsponsor14">Bonus Sponsor Level 14</option>
		  <option value="komsponsor15">Bonus Sponsor Level 15</option>
		
          <option value="matchingpro1">Bonus Matching Profit Level 1</option>
		  <option value="matchingpro2">Bonus Matching Profit Level 2</option>
		  <option value="matchingpro3">Bonus Matching Profit Level 3</option>
		  <option value="matchingpro4">Bonus Matching Profit Level 4</option>
		  <option value="matchingpro5">Bonus Matching Profit Level 5</option>
		  <option value="kompasangan">Bonus Pasangan</option>
        </select>
      </td>
    </tr>
	<tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">User ID Pemberi Bonus
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="mids" onchange="value" class="form" required="required">
					    <?php
					$tanggal=date("Y-m-d");
					$sqls=mysql_query("select username from member where status=1");
					while($stos=mysql_fetch_row($sqls)) {
						if(isset($mids)&& $mids == $stos[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?php echo $stos[0]; ?>" <?php echo $pilih; ?>> 
          <?php echo $stos[0]; ?>
          <?php
					}
					?>
        </select>

        </label></td>
    </tr>
     <tr> 
      <td align="right" bgcolor="#FFFFFF">Jumlah :</td>
      <td bgcolor="#FFFFFF"><input name="jumlah" required="required" type="text" >
        <span class="style2"></span> </td>
    </tr>
	
	<tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">Masukan Ke Wallet :</td>
      <td width="53%" bgcolor="#FFFFFF"><input type="radio" name="towalet" value="1" id="RadioGroupa1ds_0"/>
          Ya
          <input type="radio" name="towalet" value="0" id="RadioGroupa1ds_1" checked="checked"/>
        Tidak</td>
    </tr>
	
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Tanggal Pemberian :</td>
      <td bgcolor="#FFFFFF"> <input name="tglkom" type="text" id="tglkom" value="<?php echo $tgldex; ?>"  required="required">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tglkom_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "tglkom",
                ifFormat : "%d-%m-%Y",
                button : "tglkom_trig",
                align : "Bl",
                singleClick : true
            });
           

            $("tglkom_trig").observe("click", showCalendar);

            function showCalendar(event){
                var element = event.element(event);
                var offset = $(element).viewportOffset();
                var scrollOffset = $(element).cumulativeScrollOffset();
                var dimensionsButton = $(element).getDimensions();
                var index = $("widget-chooser").getStyle("zIndex");

                $$("div.calendar").each(function(item){
                    if ($(item).visible()) {
                        var dimensionsCalendar = $(item).getDimensions();

                        $(item).setStyle({
                            "zIndex" : index + 1,
                            "left" : offset[0] + scrollOffset[0] - dimensionsCalendar.width + dimensionsButton.width + "px",
                            "top" : offset[1] + scrollOffset[1] + dimensionsButton.height + "px"
                        });
                    };
                });
            };
        </script></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF"><label></label></td>
      <td bgcolor="#FFFFFF"><input type="submit" class="submit" name="Submit" value="Submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>

<p>

<?php

if (isset($_GET['page']) && $_GET['page'] == "submit") {

$mid = $_POST['mid'];
$mids = $_POST['mids'];
$jenis = $_POST['jenis'];
$towalet = $_POST['towalet'];

$tglkom = $_POST['tglkom'];
$tgldexx = date('Y-m-d', strtotime($tglkom));
$tanggalkom = $tgldexx." ".$clienttime;
$jumlah = $_POST['jumlah'];

$stkodexx = substr(str_shuffle(str_repeat("4453B141119A06676420371112D8717497783C6255363423ABCYWTGEHDLPMBTEFWXVU96411241472162223777", 64)), 0, 10);
$seldepospone = "SELECT kode, planame, maxbonus FROM deposit WHERE username='$mid' and status='1' order by id desc limit 1"; 
$resdepospone = mysql_query($seldepospone);
$ceksseldepospone = mysql_num_rows($resdepospone);
$rowcekdeponspne = mysql_fetch_array($resdepospone);
$kodedepospone=$rowcekdeponspne[0];


 if($jenis == "komsponsor"){
	$jnbayare = "Refferal Bonus";
} else if($jenis == "matchingpro1"){
	$jnbayare = "Matching Level 1 Bonus";
} else if($jenis == "matchingpro2"){
	$jnbayare = "Matching Level 2 Bonus";
} else if($jenis == "matchingpro3"){
	$jnbayare = "Matching Level 3 Bonus";
} else if($jenis == "matchingpro4"){
	$jnbayare = "Matching Level 4 Bonus";
} else if($jenis == "matchingpro5"){
	$jnbayare = "Matching Level 5 Bonus";
	
	
} else if($jenis == "komsponsor2"){
	$jnbayare = "Refferal Bonus Level 2";
} else if($jenis == "komsponsor3"){
	$jnbayare = "Refferal Bonus Level 3";
} else if($jenis == "komsponsor4"){
	$jnbayare = "Refferal Bonus Level 4";
} else if($jenis == "komsponsor5"){
	$jnbayare = "Refferal Bonus Level 5";
} else if($jenis == "kompasangan"){
	$jnbayare = "Pairing Bonus";
} else{
	$jnbayare = "";
}	


$db->insert("komisi", "", "'', '$mid', '$jumlah', '$tanggalkom', '0', '', '$jenis', '$mids', '$stkodexx', '', '$kodedepospone'"); 

if($towalet == 1){
$db->insert("datacwalet", "", "'', '".$stkodexx."', 'administrator', '$jumlah', '$jnbayare From $mids', '$mid', '$tanggalkom', 1, '$tanggalkom', '', ''");
$db->update("komisi", "gett='1'", "username='$mid' and kode='".$stkodexx."'");
}
$string = 'Bonus berhasil diinput.';
        echo "<script>alert(\"$string\");".
        "window.location = '?go=addbonus'</script>";
}

?>

</p>