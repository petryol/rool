// JavaScript Document
function change(what){
	if(what === 0){
		document.getElementsByClassName("logHeader")[1].setAttribute("style", "border-bottom: 2px solid rgba(255, 35, 35, 0) !important;");
		document.getElementsByClassName("logHeader")[0].setAttribute("style", "border-bottom: 2px solid rgba(255, 35, 35, 0.7) !important;");
		document.getElementById("register").style.marginLeft = "0px";
	}else if(what === 1){
		document.getElementsByClassName("logHeader")[0].setAttribute("style", "border-bottom: 2px solid rgba(255, 35, 35, 0) !important;");
		document.getElementsByClassName("logHeader")[1].setAttribute("style", "border-bottom: 2px solid rgba(255, 35, 35, 0.7) !important;");
		document.getElementById("register").style.marginLeft = "-600px";
	}
}
document.getElementsByClassName("logHeader")[0].addEventListener("click", function(){change(0)});
document.getElementsByClassName("logHeader")[1].addEventListener("click", function(){change(1)});