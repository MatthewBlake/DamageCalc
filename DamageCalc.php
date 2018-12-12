<!DOCTYPE HTML>
<html lang="en">
	<head>

		<link rel="stylesheet" href="style">

		<meta charset="UTF-8">

		<title>Pok&eacute;mon Damage Calculator</title>

	</head>

	<body>

		<?php

			$mons = json_decode(file_get_contents('fileName.json'));
			$natures = json_decode(file_get_contents('natures.json'));

		?>

		<div id="mon1">

		<div id="monName">
			<?php 
				echo $mons[0] -> name; 
			?>
		</div>

		<div id="types">

			<div id="typeOne">
				<?php
					echo $mons[0] -> type1 -> type; 
				?>
			</div>

			<div id="typeTwo">
				<?php
					echo $mons[0] -> type2 -> type;
				?>
			</div>

			<?php 
				echo nl2br ("\n"); 
			?>
		</div>

		<br>
		
			<table>

				<thead>
					<th id="title"></th>
					<th scope="col">Base</th>
					<th scope="col">IVs</th>
					<th scope="col">EVs</th>
					<th scope="col">Total</th>
					<th scope="col">Modifiers</th>
				</thead>

				<tbody>
					<tr class="HP">
						<th scope="row">
							<label>HP</label>
						</th>
						<td>
							<input onchange="HPFunc()" id="HPBase1" value=<?php echo $mons[0] -> hp?>>
						</td>
						<td>
							<input onchange="HPFunc()" id="HPIVs1" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input onchange="HPFunc()" id="HPEVs1" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span id="HPTotal1"></span>
						</td>
					</tr>

					<tr class="atk">
						<th scope="row">
							<label>Attack</label>
						</th>
						<td>
							<input onchange="AtkFunc()" id="AtkBase1" value=<?php echo $mons[0] -> atk?>>
						</td>
						<td>
							<input onchange="AtkFunc()" id="AtkIVs1" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input onchange="AtkFunc()" id="AtkEVs1" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span id="AtkTotal1"><?php echo $mons[0] -> atk?></span>
						</td>
						<td>
							<select id="modifiers" class="calc-trigger">
								<option value="+6">+6</option>
								<option value="+5">+5</option>
								<option value="+4">+4</option>
								<option value="+3">+3</option>
								<option value="+2">+2</option>
								<option value="+1">+1</option>
								<option value="--" selected="selected">--</option>
								<option value="-1">-1</option>
								<option value="-2">-2</option>
								<option value="-3">-3</option>
								<option value="-4">-4</option>
								<option value="-5">-5</option>
								<option value="-6">-6</option>
							</select>
						</td>
					</tr>

					<tr class="def">
						<th scope="row">
							<label>Defence</label>
						</th>
						<td>
							<input onchange="DefFunc()" id="DefBase1" value=<?php echo $mons[0] -> def?>>
						</td>
						<td>
							<input onchange="DefFunc()" id="DefIVs1" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input onchange="DefFunc()" id="DefEVs1" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span id="DefTotal1"><?php echo $mons[0] -> def?></span>
						</td>
						<td>
							<select id="modifiers" class="calc-trigger">
								<option value="+6">+6</option>
								<option value="+5">+5</option>
								<option value="+4">+4</option>
								<option value="+3">+3</option>
								<option value="+2">+2</option>
								<option value="+1">+1</option>
								<option value="--" selected="selected">--</option>
								<option value="-1">-1</option>
								<option value="-2">-2</option>
								<option value="-3">-3</option>
								<option value="-4">-4</option>
								<option value="-5">-5</option>
								<option value="-6">-6</option>
							</select>
						</td>
					</tr>

					<tr class="spatk">
						<th scope="row">
							<label>Sp. Atk</label>
						</th>
						<td>
							<input onchange="SpAtkFunc()" id="SpAtkBase1" value=<?php echo $mons[0] -> spAtk?>>
						</td>
						<td>
							<input onchange="SpAtkFunc()" id="SpAtkIVs1" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input onchange="SpAtkFunc()" id="SpAtkEVs1" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span id="SpAtkTotal1" class="total"><?php echo ($mons[0] -> spAtk * 2) + 5?></span>
						</td>
						<td>
							<select id="modifiers" class="calc-trigger">
								<option value="+6">+6</option>
								<option value="+5">+5</option>
								<option value="+4">+4</option>
								<option value="+3">+3</option>
								<option value="+2">+2</option>
								<option value="+1">+1</option>
								<option value="--" selected="selected">--</option>
								<option value="-1">-1</option>
								<option value="-2">-2</option>
								<option value="-3">-3</option>
								<option value="-4">-4</option>
								<option value="-5">-5</option>
								<option value="-6">-6</option>
							</select>
						</td>
					</tr>

					<tr class="spdef">
						<th scope="row">
							<label>Sp. Def</label>
						</th>
						<td>
							<input onchange="SpDefFunc()" id="SpDefBase1" value=<?php echo $mons[0] -> spDef?>>
						</td>
						<td>
							<input onchange="SpDefFunc()" id="SpDefIVs1" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input onchange="SpDefFunc()" id="SpDefEVs1" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span id="SpDefTotal1"><?php echo $mons[0] -> spDef?></span>
						</td>
						<td>
							<select id="modifiers" class="calc-trigger">
								<option value="+6">+6</option>
								<option value="+5">+5</option>
								<option value="+4">+4</option>
								<option value="+3">+3</option>
								<option value="+2">+2</option>
								<option value="+1">+1</option>
								<option value="--" selected="selected">--</option>
								<option value="-1">-1</option>
								<option value="-2">-2</option>
								<option value="-3">-3</option>
								<option value="-4">-4</option>
								<option value="-5">-5</option>
								<option value="-6">-6</option>
							</select>
						</td>
					</tr>

					<tr class="spd">
						<th scope="row">
							<label>Speed</label>
						</th>
						<td>
							<input onchange="SpdFunc()" id="SpdBase1" value=<?php echo $mons[0] -> spd?>>
						</td>
						<td>
							<input onchange="SpdFunc()" id="SpdIVs1" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input onchange="SpdFunc()" id="SpdEVs1" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span id="SpdTotal1"></span>
						</td>
						<td>
							<select id="modifiers" class="calc-trigger">
								<option value="+6">+6</option>
								<option value="+5">+5</option>
								<option value="+4">+4</option>
								<option value="+3">+3</option>
								<option value="+2">+2</option>
								<option value="+1">+1</option>
								<option value="--" selected="selected">--</option>
								<option value="-1">-1</option>
								<option value="-2">-2</option>
								<option value="-3">-3</option>
								<option value="-4">-4</option>
								<option value="-5">-5</option>
								<option value="-6">-6</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>

			<br>

			<table>
				<tbody>
					<tr class="natures">
						<th scope="row" id="title">
							<label>Nature</label>
						</th>

						<td>
							<select id="nature">
								<option value="adamant"><?php echo $natures[0] -> name.' (+'.$natures[0] -> up.', -'.$natures[0] -> down.')'?></option>
								<option value="bashful" selected="selected"><?php echo $natures[1] -> name?></option>
							</select>
						</td>
					</tr>

					<tr>
						<th scope="row" id="title">
							<label>Ability</label>
						</th>

						<td>
							<select id="ability">
								<option value="adaptability">Adaptability</option>
							</select>
						</td>
					</tr>

					<tr>
						<th scope="row" id="title">
							<label>Item</label>
						</th>

						<td>
							<select id="item">
								<option id="abomasite">Abomasite</option>
							</select>
						</td>
					</tr>
					
				</tbody>
			</table>

			<script>

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

			function AtkFunc(){
				document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);
			}

			function DefFunc(){
				document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);
			}

			function SpAtkFunc(){
				document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);
			}

			function SpDefFunc(){
				document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);
			}

			function SpdFunc(){
				document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);
			}

			document.getElementById("HPTotal1").innerHTML = totalHP(document.getElementById("HPBase1").value, document.getElementById("HPIVs1").value, document.getElementById("HPEVs1").value);

			document.getElementById("AtkTotal1").innerHTML = total(document.getElementById("AtkBase1").value, document.getElementById("AtkIVs1").value, document.getElementById("AtkEVs1").value);

			document.getElementById("DefTotal1").innerHTML = total(document.getElementById("DefBase1").value, document.getElementById("DefIVs1").value, document.getElementById("DefEVs1").value);

			document.getElementById("SpAtkTotal1").innerHTML = total(document.getElementById("SpAtkBase1").value, document.getElementById("SpAtkIVs1").value, document.getElementById("SpAtkEVs1").value);

			document.getElementById("SpDefTotal1").innerHTML = total(document.getElementById("SpDefBase1").value, document.getElementById("SpDefIVs1").value, document.getElementById("SpDefEVs1").value);

			document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);

		</script>

	</body>

</html>