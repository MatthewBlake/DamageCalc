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

		?>

		<div id="mon1">

			<?php 
				echo $mons[0] -> name; 
				echo " - "; 
				echo $mons[0] -> type1 -> type; 
				echo ", "; 
				echo $mons[0] -> type2 -> type; 
				echo nl2br ("\n"); 
			?>

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
							<input class="base" value=<?php echo $mons[0] -> atk?>>
						</td>
						<td>
							<input class="IVs" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input class="EVs" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span class="total"><?php echo $mons[0] -> atk?></span>
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
							<input class="base" value=<?php echo $mons[0] -> def?>>
						</td>
						<td>
							<input class="IVs" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input class="EVs" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span class="total"><?php echo $mons[0] -> def?></span>
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
							<input class="base" value=<?php echo $mons[0] -> spAtk?>>
						</td>
						<td>
							<input class="IVs" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input class="EVs" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span id="SpAtk" class="total"><?php echo ($mons[0] -> spAtk * 2) + 5?></span>
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
							<input class="base" value=<?php echo $mons[0] -> spDef?>>
						</td>
						<td>
							<input class="IVs" type="number" min="0" max="31" step="1" value="31">
						</td>
						<td>
							<input class="EVs" type="number" min="0" max="252" step="4" value="0">
						</td>
						<td>
							<span class="total"><?php echo $mons[0] -> spDef?></span>
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

		</div>

		<script>

			function total(base, IVs, EVs){
				var x = base * 2 + 5;
				var y = IVs;
				var z = EVs / 4;
				var a = parseFloat(x) + parseFloat(y) + parseFloat(z);
				return a;
			}

			function totalHP(base, IVs, EVs){
				var x = base * 2 + 110;
				var y = IVs;
				var z = EVs / 4;
				var a = parseFloat(x) + parseFloat(y) + parseFloat(z);
				return a;
			}

			function HPFunc(){
				document.getElementById("HPTotal1").innerHTML = totalHP(document.getElementById("HPBase1").value, document.getElementById("HPIVs1").value, document.getElementById("HPEVs1").value);
			}

			function SpdFunc(){
				document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);
			}

			document.getElementById("HPTotal1").innerHTML = totalHP(document.getElementById("HPBase1").value, document.getElementById("HPIVs1").value, document.getElementById("HPEVs1").value);



			document.getElementById("SpdTotal1").innerHTML = total(document.getElementById("SpdBase1").value, document.getElementById("SpdIVs1").value, document.getElementById("SpdEVs1").value);

		</script>

	</body>

</html>