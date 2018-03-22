// JavaScript Document
document.getElementById("logIn").onclick = function() {logInBox()};

function logInBox(){
	document.body.style.overflow = "hidden";
	document.getElementById("logInBox").style.display = "block";
}
function logInBoxClose(){
	document.getElementById("logInBox").style.display = "none";
	document.body.style.overflow = "auto";
}

document.getElementById("closeLogIn").addEventListener("click", logInBoxClose, false); // = function() {logInBoxClose()};