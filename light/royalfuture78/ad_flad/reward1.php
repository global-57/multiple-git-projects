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
<h2><img src="images/icon-48-article.png" width="48" height="48" align="absmiddle"> Add reward </h2>
<style type="text/css">

<!--

body,td,th {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 11px;

}
.style1 {
	color: #FF0000;
	font-style: italic;
}

-->

</style>


<form name="form1" method="post" action="?go=addreward&page=submit">

  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">INPUT 
          REWARD </font></strong></div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">User ID Penerima
        :&nbsp;</td>
      <td width="53%" bgcolor="#FFFFFF"><select name="mid" onchange="value" class="form">
          <option>-- Pilih username --</option>
     <?
					$tanggal=date("Y-m-d");
					$sql=mysql_query("select username from member where status=1 order by username");
					while($sto=mysql_fetch_row($sql)) {
						if($mid == $sto[0]) {
							$pilih = "selected";
						} else {	
							$pilih = "";
						}	
					?>
          <option value="<?= $sto[0]; ?>" <?= $pilih; ?>> 
          <?= $sto[0]; ?>
          <?
					}
					?>
        </select>
	   
        </td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Jenis Peringkat :&nbsp;
      </td>
      <td bgcolor="#FFFFFF"><select name="peringkat" >
              <option>-- Pilih Reward --</option>
			  <option value="1"> <?= $rankrw1; ?> - <?= $bonusrw1; ?></option>
              
	 <?
	 if(!empty($rankrw2)) {
	 ?> 	   
			  <option value="2"><?= $rankrw2; ?> - <?= $bonusrw2; ?></option>
	 <?
	 }
	 ?> 	  
	 <?
	 if(!empty($rankrw3)) {
	 ?> 	  	  
			  <option value="3"><?= $rankrw3; ?> - <?= $bonusrw3; ?></option>
		 <?
	 }
	 ?> 	  
	 <?
	 if(!empty($rankrw4)) {
	 ?> 	  
			  
			   <option value="4"> <?= $rankrw4; ?> - <?= $bonusrw4; ?></option>
		 <?
	 }
	 ?> 	  
	 <?
	 if(!empty($rankrw5)) {
	 ?> 	   
              <option value="5"><?= $rankrw5; ?> - <?= $bonusrw5; ?></option>
		 <?
	 }
	 ?> 	  
      <?
	 if(!empty($rankrw6)) {
	 ?> 	   
              <option value="6"><?= $rankrw6; ?> - <?= $bonusrw6; ?></option>
		 <?
	 }
	 ?> 	  
	 
          </select>
	 </td>
    </tr>
 
   <tr> 
      <td align="right" bgcolor="#FFFFFF">Tanggal Pemberian :</td>
      <td bgcolor="#FFFFFF"><input name="tglkom" type="text" id="tglkom" value="<?php echo $tgldex; ?>"  required="required">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tglkom_trig" title="Date selector" align="absmiddle" width="24px"/>
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
      <td bgcolor="#FFFFFF">&nbsp;<input type="submit" name="Submit" value="Submit" class="submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>

<p>

  <?
if (isset($_GET['page']) && $_GET['page'] == "submit") {

$peringkat = $_POST['peringkat'];

$sql="SELECT peringkat2 FROM configuration"; 
$dt=mysql_query($sql);
$config=mysql_fetch_array($dt);
$rank = explode("|", $config['peringkat2']);


if($peringkat == 1) {	
    $poin = $rank[0]; 
	$jnise = $rank[1];
	$rewarde = $rank[2];

} else if($peringkat == 2) {	
    $poin = $rank[4]; 
	$jnise = $rank[5];
	$rewarde = $rank[6];

} else if($peringkat == 3) {
    $poin = $rank[8]; 	
	$jnise = $rank[9];
	$rewarde = $rank[10];

} else if($peringkat == 4) {
    $poin = $rank[12]; 	
	$jnise = $rank[13];
	$rewarde = $rank[14];

} else if($peringkat == 5) {
    $poin = $rank[16]; 	
	$jnise = $rank[17];
	$rewarde = $rank[18];

} else if($peringkat == 6) {
    $poin = $rank[20]; 	
	$jnise = $rank[21];
	$rewarde = $rank[22];

	
} else {	
	
 }

$mid = $_POST['mid'];

$tglkome = $_POST['tglkom'];
$tgldexx = date('Y-m-d', strtotime($tglkome));
$tglkom = $tgldexx." ".$clienttime;

$kode = substr(number_format(time() * rand(),0,'',''),0,6);	
	
$statsmm = $db->dataku("statrwd", $mid);
$stss = $statsmm + $poin;	

$nama = $db->dataku("nama", $mid);	
$alamat = $db->dataku("alamat", $mid);	
$hp = $db->dataku("hp", $mid);	
$email = $db->dataku("email", $mid);	
$to = "To: ".$nama.", ".$alamat.", HP: ".$hp.", Email: ".$email.".";	

				

$db->insert("wd_reward", "", "'', '$kode', '$mid', '$jnise', '$point', '$rewarde', '1', '$tglkom', '', '$to', '$peringkat'"); 



echo "<center><br><b>Reward untuk $mid berhasil diinput</b></center>";
echo"<meta http-equiv=\"refresh\" content=\"2; url=./?go=wdrw\">";
}

?>

</p>

<p>&nbsp;</p>
