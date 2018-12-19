document.getElementById("HPTotal1").innerHTML = totalHP(document.getElementById("HPBase1").value, document.getElementById("HPIVs1").value, document.getElementById("HPEVs1").value);

document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);

document.getElementById("HPTotal2").innerHTML = totalHP(document.getElementById("HPBase2").value, document.getElementById("HPIVs2").value, document.getElementById("HPEVs2").value);

document.getElementById("AtkTotal2").innerHTML = total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value);

document.getElementById("DefTotal2").innerHTML = total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value);

document.getElementById("SpAtkTotal2").innerHTML = total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value);

document.getElementById("SpDefTotal2").innerHTML = total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value);

document.getElementById("SpdTotal2").innerHTML = total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value);

function total(base, IVs, EVs){
	var x = base * 2 + 5;
	var y = IVs;
	var z = EVs / 4;
	var a = parseInt(x) + parseInt(y) + parseInt(z);
	return a;
}

function totalHP(base, IVs, EVs){
	var x = base * 2 + 110;
	var y = IVs;
	var z = EVs / 4;
	var a = parseInt(x) + parseInt(y) + parseInt(z);
	return a;
}