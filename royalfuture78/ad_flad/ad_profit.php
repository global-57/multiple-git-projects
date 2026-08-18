<?php
if(basename($_SERVER['SCRIPT_FILENAME'])==basename(__FILE__)){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../index.php\">";exit();};echo '';if(empty($_SESSION["valid_admin"])){echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";echo "<meta http-equiv=\"refresh\" content=\"2; url=../../index.php\">";exit();};echo '';;echo '<h2><img src="images/icon-48-user.png" width="48" height="48" align="absmiddle" /> Add Profit Manual </h2>
';if(isset($_GET['page'])&&$_GET['page']=="submit"){$mid=$_POST['mid'];$jumlah=$_POST['jumlah'];$dari=$_POST['dari'];$tglkom=$_POST['tglkom'];$profit1=$jumlah;$stkode=strtotime(date("Y-m-d H:i:s"));$tglkom2=$tglkom." ".$clienttime;mysql_query("insert into komisi values('','$mid', '$profit1', '$tglkom2', 0, '', 'komshare', '$dari', '$stkode', '0')");$string='Profit berhasil ditambahkan.';echo "<script>alert(\"$string\");"."window.location = 'index.php?go=manual'</script>";}else {;echo '
<form name="form1" method="post" action="?go=manual&page=submit">

  <table width="90%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tr> 
      <td colspan="2" bgcolor="#E2E2E2"><div align="center"><strong><font size="2">INPUT 
          PROFIT MANUAL </font></strong></div></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="47%" align="right" bgcolor="#FFFFFF">User ID Penerima Profit
        : </td>
      <td width="53%" bgcolor="#FFFFFF"><label> 
        <select name="mid" onchange="value" class="form">
		  <option value="000" selected="selected">-- Pilih Member --</option>
              ';$tanggal=date("Y-m-d");$sql=mysql_query("select username from member where status=1 order by username");while($sto=mysql_fetch_row($sql)){if(isset($mid)&&$mid==$sto[0]){$pilih="selected";}else {$pilih="";};echo '          <option value="';echo $sto[0];;echo '" ';echo $pilih;;echo '> 
          ';echo $sto[0];;echo '          ';};echo '        </select>
        <input name="edit" type="hidden" id="edit" value="1" size="5">
        <input name="no" type="hidden" id="no" value="';echo $row[0];;echo '" size="5">
        ';$db->select("komisi_sponsor","configuration","id=1");$jumlahku=$db->result(0,"komisi_sponsor");;echo '        <input name="status" type="hidden" id="status" value="0">
';$sql2="SELECT kontrak, persen_profit FROM configuration";$dt2=mysql_query($sql2);$config2=mysql_fetch_array($dt2);$forex=explode("|",$config2['kontrak']);$tgl_awal=$forex[0]." 00:00:00";$tgl_akhir=$forex[1]." 23:59:59";$batashari=$forex[2];$sql2a="SELECT komisi_sponsor FROM configuration";$dt2a=mysql_query($sql2a);$config2a=mysql_fetch_array($dt2a);$k_spon=explode("|",$config2a['komisi_sponsor']);$komspon=$k_spon[0];$profit=explode("|",$config2['persen_profit']);$profit1=$profit[0];;echo '        </label></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Nilai Profit yang akan dibayarkan: 
      </td>
      <td bgcolor="#FFFFFF">
        <input name="jumlah" type="text" id="jumlah" value="" size="10"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">Jenis Profit : </td>
      <td bgcolor="#FFFFFF"><input name="jenis" type="hidden" id="jenis" value="komshare">
	  
	  <select id="dari" name="dari" style="width:200px;">
	   <option value="000" selected="selected">-- Jenis Profit --</option>
  ';for($ix=1;$ix<=15;$ix=$ix+1){echo "<option value='Profit Cycle $ix' class='1'>Profit cycle ".$ix."</option>";};echo '</select>
      </td>
    </tr>
    <tr> 
	
      <td align="right" bgcolor="#FFFFFF">Tanggal Pemberian Profit :</td>
      <td bgcolor="#FFFFFF"><input name="tglkom" type="text" id="tglkom" value="';$tanggal=date("Y-m-d H:i:s");echo "$tanggal";;echo '">&nbsp;<img src="../images/calendar_select_none.png" alt="Kalender" id="tglkom_trig" title="Date selector" align="absmiddle" width="24px"/>
					<script type="text/javascript">
            Calendar.setup({
                inputField : "tglkom",
                ifFormat : "%Y-%m-%e",
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
        </script>
      <span class="style1"></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF"><label></label></td>
      <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Submit" class="submit"></td>
    </tr>
    <tr> 
      <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>

</form>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("form1");
  frmvalidator.addValidation("mid","dontselect=000","Pilih Username");
  frmvalidator.addValidation("dari","dontselect=000","Pilih Jenis");
   frmvalidator.addValidation("jumlah","req","Masukan jumlah");
   frmvalidator.addValidation("tanggal","req","Masukan Tanggal");
</script>
<p>

</p>
';}?>