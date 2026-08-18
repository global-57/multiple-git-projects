<?php
if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=./index.php\">";
exit();} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $db->config("description"); ?>" />
<meta name="keywords" content="<?php echo $db->config("keyword"); ?>" />
<meta name="copyright" content="Copyright (c) 2009-2014 | www.primadesain.com" />
<!--
	Copyright (c) 2009-2013 
	developed by  	: www.primadesain.com
-->
<meta name="revisit-after" content="10 days" />
<meta name="robots" content="all,index,follow" />
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta http-equiv="Content-Language" content="en-us" />
<meta NAME="Distribution" CONTENT="Global" />
<meta NAME="Rating" CONTENT="General" />

<title><?php echo $db->config("title"); ?></title>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Mobile Specific
    ================================================== -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="./images/banner/<?php echo $db->config("fcon"); ?>" rel="SHORTCUT ICON" /><!--favicon-->
<style>
body{margin:8px;background-color:#DAF3FD;font-family:Calibri, Tahoma, Arial;text-align:center;}
#layout{width:790px;margin-left:auto;margin-right:auto;background: #ffffff;
   filter: alpha(opacity=60);
   filter: progid:DXImageTransform.Microsoft.Alpha(opacity=60);
   opacity:0.6;
   -moz-opacity: 0.60; 
   zoom: 1;
 border:6px solid #000; padding:0px 5px 0px 5px;text-align:center;-webkit-border-radius: 9px;
-moz-border-radius: 9px;
border-radius: 9px;
-ms-border-radius: 9px	;
box-shadow:0px 0px 10px #ffffff; margin-top:100px;}
#background{position:fixed;left:0;top:0;width:100%;height:100%;background:url(./images/background.jpg) no-repeat;background-size:cover;z-index:-100;}
#layout .default{display:block;}
.selectLater{display:none;}
.browsers{width:500px;padding:10px 0 10px 0;overflow-x:auto;border:solid 1px #000; margin-bottom:30px;}
.browsers td{width:145px;padding-left:5px;padding-right:5px;padding-bottom:10px;vertical-align:top;font-size:90%;}
.browsers .browserImg{width:145px;height:50px;}
.browsers .browserTableLink{padding:1px;margin-left:0px;margin-right:2px;background-color:#66B9EB;border-bottom:solid 1px #29709C;border-right:solid 1px #29709C;border-top:solid 1px #45A9E6;font-size:105%;}
.browsers .browserTableLink a, .browsers .browserTableLink a:visited{display:block;width:138px;background-color:#51AEE7;border-bottom:solid 1px #A1D5F3;border-left:solid 1px #A1D5F3;border-right:solid 1px #A1D5F3;color:#FFF;font-size:105%;font-weight:normal;text-decoration:none;text-align:center;}
.termsHeader{font-weight:bold;}

</style>
<link rel="Stylesheet" type="text/css" href="../resources/css/page.css">
<title>Information Regarding Web Browsers</title>
</head>
<body>

<div id="layout">
<h1 id="heading">Internet Explorer blocked from this site,<br>Please use another browser(s)</h1>
<div align="center"><div id="browsers" class="browsers">
<table width="50%" id="_tableDescription" summary="Select your web browser(s)">
<tr>
<th><img class="browserImg" id="_img_3" alt="Mozilla Firefox" title="Mozilla Firefox" src="images/Mozilla_logo.png"></th>
<th><img class="browserImg" id="_img_1" alt="Google Chrome" title="Google Chrome" src="images/Chrome_logo.png"></th>
<th><img class="browserImg" id="_img_4" alt="Opera Web browser" title="Opera Web browser" src="images/Opera_logo.png"></th>
</tr>
<tr>
<td id="_description_3">Download Mozilla Firefox. Firefox is created by a global non-profit dedicated to putting individuals in control online. Get Firefox today!</td>
<td id="_description_1">Google Chrome is a browser that combines a minimal design with sophisticated technology to make the web faster, safer, and easier.</td>
<td id="_description_4">Cheaper internet with the latest browsers for phones, tablets and computers from Opera. Visit our website and get your new browser.</td>
</tr>
<tr>
<td>
<div class="browserTableLink"><a target="_blank" id="_installLink_3" href="https://www.mozilla.org/en-US/firefox/new/">Install</a></div></td>
<td>
<div class="browserTableLink"><a target="_blank" id="_installLink_1" href="https://www.google.com/chrome/browser/">Install</a></div></td>
<td>
<div class="browserTableLink"><a target="_blank" id="_installLink_4" href="http://www.opera.com/">Install</a></div></td>
</tr>
</table></div>
</div>
</div>
</body>
</html>