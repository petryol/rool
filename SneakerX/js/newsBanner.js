// JavaScript Document
function slideRight(){
	document.getElementsByClassName("newsArticle")[0].setAttribute("style", "margin-left: -730px");
	document.getElementsByClassName("newsBnrBarChck")[0].style.opacity = "0";
	document.getElementsByClassName("newsBnrBarChck")[1].style.opacity = "1";
}
function slideLeft(){
	document.getElementsByClassName("newsArticle")[0].setAttribute("style", "margin-left: 0px");
	document.getElementsByClassName("newsBnrBarChck")[1].style.opacity = "0";
	document.getElementsByClassName("newsBnrBarChck")[0].style.opacity = "1";
}
document.getElementById("newsRightArrow").addEventListener("click", slideRight, false);
document.getElementById("newsLeftArrow").addEventListener("click", slideLeft, false);