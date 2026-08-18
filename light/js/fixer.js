function adjustPos()
{var h=$('#wrapper').height();var t=(window.innerHeight- h)/3;if(t<0){t=0;}
$('#wrapper').css('margin-top',t.toString()+'px')}
$(document).ready(function(){adjustPos();});$(window).resize(function(){adjustPos();});