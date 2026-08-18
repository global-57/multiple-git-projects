/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	$(".menu_tabs > li").click(function(e){
		switch(e.target.id){
			case "tabs_01":
				//change status & style menu
				$("#tabs_01").addClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").fadeIn();
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_02":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").addClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").fadeIn();
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_03":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").addClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").fadeIn();
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_04":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").addClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").fadeIn();
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_05":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").addClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").fadeIn();
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_06":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").addClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").fadeIn();
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_07":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").addClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").fadeIn();
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_08":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").addClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").fadeIn();
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_09":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").addClass("active");
				$("#tabs_10").removeClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").fadeIn();
				$("div.tabs_10").css("display", "none");
			break;
			case "tabs_10":
				//change status & style menu
				$("#tabs_01").removeClass("active");
				$("#tabs_02").removeClass("active");
				$("#tabs_03").removeClass("active");
				$("#tabs_04").removeClass("active");
				$("#tabs_05").removeClass("active");
				$("#tabs_06").removeClass("active");
				$("#tabs_07").removeClass("active");
				$("#tabs_08").removeClass("active");
				$("#tabs_09").removeClass("active");
				$("#tabs_10").addClass("active");
				//display selected division, hide others
				$("div.tabs_01").css("display", "none");
				$("div.tabs_02").css("display", "none");
				$("div.tabs_03").css("display", "none");
				$("div.tabs_04").css("display", "none");
				$("div.tabs_05").css("display", "none");
				$("div.tabs_06").css("display", "none");
				$("div.tabs_07").css("display", "none");
				$("div.tabs_08").css("display", "none");
				$("div.tabs_09").css("display", "none");
				$("div.tabs_10").fadeIn();
			break;
		}
		//alert(e.target.id);
		return false;
	});
});

/*-------{ tabs Plan Responsive }--------*/
$(document).ready(function(){
	$(".menu_tabs > li").click(function(e){
		switch(e.target.id){
			case "tabsR_01":
				//change status & style menu
				$("#tabsR_01").addClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").fadeIn();
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_02":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").addClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").fadeIn();
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_03":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").addClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").fadeIn();
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_04":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").addClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").fadeIn();
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_05":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").addClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").fadeIn();
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_06":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").addClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").fadeIn();
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_07":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").addClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").fadeIn();
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_08":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").addClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").fadeIn();
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_09":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").addClass("active");
				$("#tabsR_10").removeClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").fadeIn();
				$("div.tabsR_10").css("display", "none");
			break;
			case "tabsR_10":
				//change status & style menu
				$("#tabsR_01").removeClass("active");
				$("#tabsR_02").removeClass("active");
				$("#tabsR_03").removeClass("active");
				$("#tabsR_04").removeClass("active");
				$("#tabsR_05").removeClass("active");
				$("#tabsR_06").removeClass("active");
				$("#tabsR_07").removeClass("active");
				$("#tabsR_08").removeClass("active");
				$("#tabsR_09").removeClass("active");
				$("#tabsR_10").addClass("active");
				//display selected division, hide others
				$("div.tabsR_01").css("display", "none");
				$("div.tabsR_02").css("display", "none");
				$("div.tabsR_03").css("display", "none");
				$("div.tabsR_04").css("display", "none");
				$("div.tabsR_05").css("display", "none");
				$("div.tabsR_06").css("display", "none");
				$("div.tabsR_07").css("display", "none");
				$("div.tabsR_08").css("display", "none");
				$("div.tabsR_09").css("display", "none");
				$("div.tabsR_10").fadeIn();
			break;
		}
		//alert(e.target.id);
		return false;
	});
});