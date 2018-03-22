// JavaScript Document
document.getElementById("test").onclick = function() {productIco()};
document.getElementById("closeProductCard").onclick = function() {closeProductCard()};

function productIco(){
	document.getElementById("productCard").setAttribute("style", "display: block;");
}

function closeProductCard(){
	document.getElementById("productCard").setAttribute("style", "display: none;");
}