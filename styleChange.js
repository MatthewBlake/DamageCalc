document.getElementById("monName").style.background = document.getElementById("typeOne").getAttribute("value");
document.getElementById("typeOne").style.background = document.getElementById("typeOne").getAttribute("value");
document.getElementById("typeTwo").style.background = document.getElementById("typeTwo").getAttribute("value");

document.getElementById("monName2").style.background = document.getElementById("typeOne2").getAttribute("value");
document.getElementById("typeOne2").style.background = document.getElementById("typeOne2").getAttribute("value");
document.getElementById("typeTwo2").style.background = document.getElementById("typeTwo2").getAttribute("value");

if("#eeeeee" === document.getElementById("typeTwo").getAttribute("value")){
	document.getElementById("typeTwo").style.color = "#eeeeee";
}

if("#eeeeee" === document.getElementById("typeTwo2").getAttribute("value")){
	document.getElementById("typeTwo2").style.color = "#eeeeee";
}