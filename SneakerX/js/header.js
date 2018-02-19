// JavaScript Document
window.onscroll = function() {isOffset(), scrlUp()};
document.getElementById("scrlBtn").onclick = function() {scrollTop()};

function isOffset(){
	var elemRect = document.getElementById("wrap").getBoundingClientRect(),
		offset   = elemRect.top;
	if(offset <= -35 && !document.getElementById("headerStripe")){
		var element = document.createElement("div"),
			elementSec = document.createElement("img"),
			elementTh = document.createElement("div");
		element.setAttribute("id", "headerStripe");
		elementTh.setAttribute("id", "headerStripeInside");
		elementSec.setAttribute("class", "logo logoSec");
		elementSec.setAttribute("title", "logo");
		elementSec.setAttribute("src", "picsDodelat/Logo1.png");
		document.body.appendChild(element);
		document.getElementById("headerStripe").appendChild(elementTh);
		document.getElementById("headerStripeInside").appendChild(elementSec);
	} else if(offset >= -35 && document.getElementById("headerStripe")){
		document.getElementById("headerStripe").parentNode.removeChild(document.getElementById("headerStripe"));
	}
}
function scrlUp(){
	var elemRect = document.getElementById("wrap").getBoundingClientRect(),
		offset   = elemRect.top;
	if(offset <= -300 && document.getElementById("scrlBtn").style.opacity !== "1"){
		document.getElementById("scrlBtn").style.opacity = "1";
		document.getElementById("scrlBtn").style.cursor = "pointer";
	} else if(offset >= -300 && document.getElementById("scrlBtn").style.opacity !== "0"){
		document.getElementById("scrlBtn").style.opacity = "0";
		document.getElementById("scrlBtn").style.cursor = "auto";
	}
}
function scrollTop(){
	window.scrollTo(0,0);
}
