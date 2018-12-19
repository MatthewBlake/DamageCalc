function HPFunc(){
	document.getElementById("HPTotal1").innerHTML = totalHP(document.getElementById("HPBase1").value, document.getElementById("HPIVs1").value, document.getElementById("HPEVs1").value);
}

function HPFunc2(){
	document.getElementById("HPTotal2").innerHTML = totalHP(document.getElementById("HPBase2").value, document.getElementById("HPIVs2").value, document.getElementById("HPEVs2").value);
}