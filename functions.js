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

function Func2(){
	var e = document.getElementById("nature2");
	var strUser = e.options[e.selectedIndex].text;
	var plus = strUser.indexOf("+");
	var comma = strUser.indexOf(",");
	var minus = strUser.indexOf("-");
	var bracket = strUser.indexOf(")");
	var boost = strUser.substring(plus+1, comma);
	var loss = strUser.substring(minus+1, bracket);

	if(boost === "Atk"){
		document.getElementById("AtkTotal2").innerHTML = parseInt(total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value)*1.1);

		document.getElementById("DefTotal2").innerHTML = total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value);

		document.getElementById("SpAtkTotal2").innerHTML = total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value);

		document.getElementById("SpDefTotal2").innerHTML = total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value);

		document.getElementById("SpdTotal2").innerHTML = total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value);
	}

	else if(boost === "Def"){
		document.getElementById("AtkTotal2").innerHTML = total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value);

		document.getElementById("DefTotal2").innerHTML = parseInt(total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value)*1.1);

		document.getElementById("SpAtkTotal2").innerHTML = total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value);

		document.getElementById("SpDefTotal2").innerHTML = total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value);

		document.getElementById("SpdTotal2").innerHTML = total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value);
	}

	else if(boost === "SpAtk"){
		document.getElementById("AtkTotal2").innerHTML = total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value);

		document.getElementById("DefTotal2").innerHTML = total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value);

		document.getElementById("SpAtkTotal2").innerHTML = parseInt(total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value)*1.1);

		document.getElementById("SpDefTotal2").innerHTML = total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value);

		document.getElementById("SpdTotal2").innerHTML = total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value);
	}

	else if(boost === "SpDef"){

		document.getElementById("AtkTotal2").innerHTML = total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value);

		document.getElementById("DefTotal2").innerHTML = total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value);

		document.getElementById("SpAtkTotal2").innerHTML = total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value);

		document.getElementById("SpDefTotal2").innerHTML = parseInt(total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value)*1.1);

		document.getElementById("SpdTotal2").innerHTML = total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value);
	}

	else if(boost === "Spe"){
		document.getElementById("AtkTotal2").innerHTML = total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value);

		document.getElementById("DefTotal2").innerHTML = total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value);

		document.getElementById("SpAtkTotal2").innerHTML = total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value);

		document.getElementById("SpDefTotal2").innerHTML = total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value);

		document.getElementById("SpdTotal2").innerHTML = parseInt(total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value)*1.1);
	}

	else{
		document.getElementById("AtkTotal2").innerHTML = total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value);

		document.getElementById("DefTotal2").innerHTML = total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value);

		document.getElementById("SpAtkTotal2").innerHTML = total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value);

		document.getElementById("SpDefTotal2").innerHTML = total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value);

		document.getElementById("SpdTotal2").innerHTML = total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value);
	}

	if(loss === "Atk"){
		document.getElementById("AtkTotal2").innerHTML = parseInt(total(document.getElementById("AtkBase2").value, document.getElementById("AtkIVs2").value, document.getElementById("AtkEVs2").value)*0.9);
	}

	else if(loss === "Def"){
		document.getElementById("DefTotal2").innerHTML = parseInt(total(document.getElementById("DefBase2").value, document.getElementById("DefIVs2").value, document.getElementById("DefEVs2").value)*0.9);
	}

	else if(loss === "SpAtk"){
		document.getElementById("SpAtkTotal2").innerHTML = parseInt(total(document.getElementById("SpAtkBase2").value, document.getElementById("SpAtkIVs2").value, document.getElementById("SpAtkEVs2").value)*0.9);
	}

	else if(loss === "SpDef"){
		document.getElementById("SpDefTotal2").innerHTML = parseInt(total(document.getElementById("SpDefBase2").value, document.getElementById("SpDefIVs2").value, document.getElementById("SpDefEVs2").value)*0.9);
	}

	else if(loss === "Spe"){
		document.getElementById("SpdTotal2").innerHTML = parseInt(total(document.getElementById("SpdBase2").value, document.getElementById("SpdIVs2").value, document.getElementById("SpdEVs2").value)*0.9);
	}
}