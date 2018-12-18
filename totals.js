document.getElementById("monName").style.background = document.getElementById("typeOne").getAttribute("value");
document.getElementById("typeOne").style.background = document.getElementById("typeOne").getAttribute("value");
document.getElementById("typeTwo").style.background = document.getElementById("typeTwo").getAttribute("value");

if("lightgrey" === document.getElementById("typeTwo").getAttribute("value")){
	document.getElementById("typeTwo").style.color = "lightgrey";
}

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

function HPFunc(){
	document.getElementById("HPTotal1").innerHTML = totalHP(document.getElementById("HPBase1").value, document.getElementById("HPIVs1").value, document.getElementById("HPEVs1").value);
}

document.getElementById("HPTotal1").innerHTML = totalHP(document.getElementById("HPBase1").value, document.getElementById("HPIVs1").value, document.getElementById("HPEVs1").value);

document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);

function Func(){
	var e = document.getElementById("nature");
	var strUser = e.options[e.selectedIndex].text;
	var plus = strUser.indexOf("+");
	var comma = strUser.indexOf(",");
	var minus = strUser.indexOf("-");
	var bracket = strUser.indexOf(")");
	var boost = strUser.substring(plus+1, comma);
	var loss = strUser.substring(minus+1, bracket);

	if(boost === "Atk"){
		document.getElementById("AtkTotal1").innerHTML = parseInt(total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value)*1.1);

		document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

		document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

		document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

		document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);
	}

	else if(boost === "Def"){
		document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

		document.getElementById("DefTotal1").innerHTML = parseInt(total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value)*1.1);

		document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

		document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

		document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);
	}

	else if(boost === "SpAtk"){
		document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

		document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

		document.getElementById("SpAtkTotal1").innerHTML = parseInt(total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value)*1.1);

		document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

		document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);
	}

	else if(boost === "SpDef"){

		document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

		document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

		document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

		document.getElementById("SpDefTotal1").innerHTML = parseInt(total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value)*1.1);

		document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);
	}

	else if(boost === "Spe"){
		document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

		document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

		document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

		document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

		document.getElementById("SpdTotal1").innerHTML = parseInt(total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value)*1.1);
	}

	else{
		document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

		document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

		document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

		document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

		document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);
	}

	if(loss === "Atk"){
		document.getElementById("AtkTotal1").innerHTML = parseInt(total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value)*0.9);
	}

	else if(loss === "Def"){
		document.getElementById("DefTotal1").innerHTML = parseInt(total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value)*0.9);
	}

	else if(loss === "SpAtk"){
		document.getElementById("SpAtkTotal1").innerHTML = parseInt(total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value)*0.9);
	}

	else if(loss === "SpDef"){
		document.getElementById("SpDefTotal1").innerHTML = parseInt(total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value)*0.9);
	}

	else if(loss === "Spe"){
		document.getElementById("SpdTotal1").innerHTML = parseInt(total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value)*0.9);
	}
}