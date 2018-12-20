<!DOCTYPE HTML>
<html lang="en">
	<head>

		<?php
			$mons = json_decode(file_get_contents('fileName.json'));
			$natures = json_decode(file_get_contents('natures.json'));
			$x = 1;
			$y = 2;
		?>

		<link rel="stylesheet" href="style.css">

		<meta charset="UTF-8">

		<title>Pok&eacute;mon Damage Calculator</title>

	</head>

	<body>

		<div id="mons">

			<div id="mon1">

				<div id="mon1Moves">
					<form action="">
						<div id="mon1move1" class="move">
							<label>
								<input type="radio" name="moveSelect" value="1" checked="checked">
									<?php
										echo $mons[$x] -> moveset[0] -> moveName;
										echo nl2br("\n");
									?>
								<br>
							</label>
						</div>

						<div id="mon1move2" class="move">
							<label>
								<input type="radio" name="moveSelect" value="2">
									<?php
										echo $mons[$x] -> moveset[1] -> moveName ."  ";
										echo nl2br("\n");
									?>
								<br>
							</label>
						</div>

						<div id="mon1move3" class="move">
							<label>
								<input type="radio" name="moveSelect" value="3">
									<?php
										echo $mons[$x] -> moveset[2] -> moveName ."  ";
										echo nl2br("\n");
									?>
								<br>
							</label>
						</div>

						<div id="mon1move4" class="move">
							<label>
								<input type="radio" name="moveSelect" value="4">
									<?php
										echo $mons[$x] -> moveset[3] -> moveName ."  ";
										echo nl2br("\n");
		 							?>
		 						<br>
		 					</label>
		 				</div>

					</div>

				<br>
				<br>	

				<div id="monName">
					<?php 
						echo $mons[$x] -> name; 
					?>
				</div>

				<div id="types">

					<div id="typeOne" value=<?php echo $mons[$x] -> type1 -> colour; ?>>
						<?php
							echo $mons[$x] -> type1 -> type; 
						?>
					</div>

					<div id="typeTwo" value=<?php echo $mons[$x] -> type2 -> colour; ?>>
						<?php
							echo $mons[$x] -> type2 -> type;
						?>
					</div>

					<br>
					<br>

				</div>

				<br>
		
				<table>

					<thead>
						<th scope="col" id="title"></th>
						<th scope="col">Base</th>
						<th scope="col">IVs</th>
						<th scope="col">EVs</th>
						<th scope="col" id="total"></th>
						<th scope="col" id="modifiers"></th>
					</thead>

					<tbody>
						<tr class="HP">
							<th scope="row">
								<label>HP</label>
							</th>
							<td>
								<input onchange="HPFunc()" id="HPBase1" value=<?php echo $mons[$x] -> hp?>>
							</td>
							<td>
								<input onchange="HPFunc()" id="HPIVs1" type="number" min="0" max="31" step="1" value="31" placeholder="0">
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
								<input onchange="Func()" id="AtkBase1" value=<?php echo $mons[$x] -> atk?>>
							</td>
							<td>
								<input onchange="Func()" id="AtkIVs1" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func()" id="AtkEVs1" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="AtkTotal1"></span>
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
								<input onchange="Func()" id="DefBase1" value=<?php echo $mons[$x] -> def?>>
							</td>
							<td>
								<input onchange="Func()" id="DefIVs1" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func()" id="DefEVs1" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="DefTotal1"></span>
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
								<input onchange="Func()" id="SpAtkBase1" value=<?php echo $mons[$x] -> spAtk?>>
							</td>
							<td>
								<input onchange="Func()" id="SpAtkIVs1" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func()" id="SpAtkEVs1" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="SpAtkTotal1"></span>
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
								<input onchange="Func()" id="SpDefBase1" value=<?php echo $mons[$x] -> spDef?>>
							</td>
							<td>
								<input onchange="Func()" id="SpDefIVs1" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func()" id="SpDefEVs1" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="SpDefTotal1"></span>
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
								<input onchange="Func()" id="SpdBase1" value=<?php echo $mons[$x] -> spd?>>
							</td>
							<td>
								<input onchange="Func()" id="SpdIVs1" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func()" id="SpdEVs1" type="number" min="0" max="252" step="4" value="0">
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
								<select onchange="Func()" id="nature">
									<option value="adamant"><?php echo $natures[0] -> name.' (+'.$natures[0] -> up.', -'.$natures[0] -> down.')'?></option>
									<option value="bashful" selected="selected"><?php echo $natures[1] -> name?></option>
									<option value="bold"><?php echo $natures[2] -> name.' (+'.$natures[2] -> up.', -'.$natures[2] -> down.')'?></option>
									<option value="brave"><?php echo $natures[3] -> name.' (+'.$natures[3] -> up.', -'.$natures[3] -> down.')'?></option>
									<option value="calm"><?php echo $natures[4] -> name.' (+'.$natures[4] -> up.', -'.$natures[4] -> down.')'?></option>
									<option value="careful"><?php echo $natures[5] -> name.' (+'.$natures[5] -> up.', -'.$natures[5] -> down.')'?></option>
									<option value="docile"><?php echo $natures[6] -> name?></option>
									<option value="gentle"><?php echo $natures[7] -> name.' (+'.$natures[7] -> up.', -'.$natures[7] -> down.')'?></option>
									<option value="hardy"><?php echo $natures[8] -> name?></option>
									<option value="hasty"><?php echo $natures[9] -> name.' (+'.$natures[9] -> up.', -'.$natures[9] -> down.')'?></option>
									<option value="impish"><?php echo $natures[10] -> name.' (+'.$natures[10] -> up.', -'.$natures[10] -> down.')'?></option>
									<option value="jolly"><?php echo $natures[11] -> name.' (+'.$natures[11] -> up.', -'.$natures[11] -> down.')'?></option>
									<option value="lax"><?php echo $natures[12] -> name.' (+'.$natures[12] -> up.', -'.$natures[12] -> down.')'?></option>
									<option value="lonely"><?php echo $natures[13] -> name.' (+'.$natures[13] -> up.', -'.$natures[13] -> down.')'?></option>
									<option value="mild"><?php echo $natures[14] -> name.' (+'.$natures[14] -> up.', -'.$natures[14] -> down.')'?></option>
									<option value="modest"><?php echo $natures[15] -> name.' (+'.$natures[15] -> up.', -'.$natures[15] -> down.')'?></option>
									<option value="naive"><?php echo $natures[16] -> name.' (+'.$natures[16] -> up.', -'.$natures[16] -> down.')'?></option>
									<option value="naughty"><?php echo $natures[17] -> name.' (+'.$natures[17] -> up.', -'.$natures[17] -> down.')'?></option>
									<option value="quiet"><?php echo $natures[18] -> name.' (+'.$natures[18] -> up.', -'.$natures[18] -> down.')'?></option>
									<option value="quirky"><?php echo $natures[19] -> name?></option>
									<option value="rash"><?php echo $natures[20] -> name.' (+'.$natures[20] -> up.', -'.$natures[20] -> down.')'?></option>
									<option value="relaxed"><?php echo $natures[21] -> name.' (+'.$natures[21] -> up.', -'.$natures[21] -> down.')'?></option>
									<option value="sassy"><?php echo $natures[22] -> name.' (+'.$natures[22] -> up.', -'.$natures[22] -> down.')'?></option>
									<option value="serious"><?php echo $natures[23] -> name?></option>
									<option value="timid"><?php echo $natures[24] -> name.' (+'.$natures[24] -> up.', -'.$natures[24] -> down.')'?></option>
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
			</div>

			<div id="mon2">

				<div id="mon2Moves">
					<form action="">
						<div id="mon2move1" class="move">
							<label>
								<input type="radio" name="moveSelect" value="1">
									<?php
										echo $mons[$y] -> moveset[0] -> moveName;
										echo nl2br("\n");
									?>
								<br>
							</label>
						</div>

						<div id="mon2move2" class="move">
							<label>
								<input type="radio" name="moveSelect" value="2">
									<?php
										echo $mons[$y] -> moveset[1] -> moveName ."  ";
										echo nl2br("\n");
									?>
								<br>
							</label>
						</div>

						<div id="mon2move3" class="move">
							<label>
								<input type="radio" name="moveSelect" value="3">
									<?php
										echo $mons[$y] -> moveset[2] -> moveName ."  ";
										echo nl2br("\n");
									?>
								<br>
							</label>
						</div>

						<div id="mon2move4" class="move">
							<label>
								<input type="radio" name="moveSelect" value="4">
									<?php
										echo $mons[$y] -> moveset[3] -> moveName ."  ";
										echo nl2br("\n");
		 							?>
		 						<br>
		 					</label>
		 				</div>

					</div>

				<br>
				<br>

				<div id="monName2">
					<?php 
						echo $mons[$y] -> name; 
					?>
				</div>

				<div id="types2">

					<div id="typeOne2" value=<?php echo $mons[$y] -> type1 -> colour; ?>>
						<?php
							echo $mons[$y] -> type1 -> type; 
						?>
					</div>

					<div id="typeTwo2" value=<?php echo $mons[$y] -> type2 -> colour; ?>>
						<?php
							echo $mons[$y] -> type2 -> type;
						?>
					</div>

					<br>
					<br>

				</div>

				<br>
		
				<table>

					<thead>
						<th scope="col" id="title"></th>
						<th scope="col">Base</th>
						<th scope="col">IVs</th>
						<th scope="col">EVs</th>
						<th scope="col" id="total"></th>
						<th scope="col" id="modifiers"></th>
					</thead>

					<tbody>
						<tr class="HP">
							<th scope="row">
								<label>HP</label>
							</th>
							<td>
								<input onchange="HPFunc2()" id="HPBase2" value=<?php echo $mons[$y] -> hp?>>
							</td>
							<td>
								<input onchange="HPFunc2()" id="HPIVs2" type="number" min="0" max="31" step="1" value="31" placeholder="0">
							</td>
							<td>
								<input onchange="HPFunc2()" id="HPEVs2" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="HPTotal2"></span>
							</td>
						</tr>

						<tr class="atk">
							<th scope="row">
								<label>Attack</label>
							</th>
							<td>
								<input onchange="Func2()" id="AtkBase2" value=<?php echo $mons[$y] -> atk?>>
							</td>
							<td>
								<input onchange="Func2()" id="AtkIVs2" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func2()" id="AtkEVs2" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="AtkTotal2"></span>
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
								<input onchange="Func2()" id="DefBase2" value=<?php echo $mons[$y] -> def?>>
							</td>
							<td>
								<input onchange="Func2()" id="DefIVs2" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func2()" id="DefEVs2" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="DefTotal2"></span>
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
								<input onchange="Func2()" id="SpAtkBase2" value=<?php echo $mons[$y] -> spAtk?>>
							</td>
							<td>
								<input onchange="Func2()" id="SpAtkIVs2" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func2()" id="SpAtkEVs2" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="SpAtkTotal2"></span>
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
								<input onchange="Func2()" id="SpDefBase2" value=<?php echo $mons[$y] -> spDef?>>
							</td>
							<td>
								<input onchange="Func2()" id="SpDefIVs2" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func2()" id="SpDefEVs2" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="SpDefTotal2"></span>
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
								<input onchange="Func2()" id="SpdBase2" value=<?php echo $mons[$y] -> spd?>>
							</td>
							<td>
								<input onchange="Func2()" id="SpdIVs2" type="number" min="0" max="31" step="1" value="31">
							</td>
							<td>
								<input onchange="Func2()" id="SpdEVs2" type="number" min="0" max="252" step="4" value="0">
							</td>
							<td>
								<span id="SpdTotal2"></span>
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
								<select onchange="Func2()" id="nature2">
									<option value="adamant"><?php echo $natures[0] -> name.' (+'.$natures[0] -> up.', -'.$natures[0] -> down.')'?></option>
									<option value="bashful" selected="selected"><?php echo $natures[1] -> name?></option>
									<option value="bold"><?php echo $natures[2] -> name.' (+'.$natures[2] -> up.', -'.$natures[2] -> down.')'?></option>
									<option value="brave"><?php echo $natures[3] -> name.' (+'.$natures[3] -> up.', -'.$natures[3] -> down.')'?></option>
									<option value="calm"><?php echo $natures[4] -> name.' (+'.$natures[4] -> up.', -'.$natures[4] -> down.')'?></option>
									<option value="careful"><?php echo $natures[5] -> name.' (+'.$natures[5] -> up.', -'.$natures[5] -> down.')'?></option>
									<option value="docile"><?php echo $natures[6] -> name?></option>
									<option value="gentle"><?php echo $natures[7] -> name.' (+'.$natures[7] -> up.', -'.$natures[7] -> down.')'?></option>
									<option value="hardy"><?php echo $natures[8] -> name?></option>
									<option value="hasty"><?php echo $natures[9] -> name.' (+'.$natures[9] -> up.', -'.$natures[9] -> down.')'?></option>
									<option value="impish"><?php echo $natures[10] -> name.' (+'.$natures[10] -> up.', -'.$natures[10] -> down.')'?></option>
									<option value="jolly"><?php echo $natures[11] -> name.' (+'.$natures[11] -> up.', -'.$natures[11] -> down.')'?></option>
									<option value="lax"><?php echo $natures[12] -> name.' (+'.$natures[12] -> up.', -'.$natures[12] -> down.')'?></option>
									<option value="lonely"><?php echo $natures[13] -> name.' (+'.$natures[13] -> up.', -'.$natures[13] -> down.')'?></option>
									<option value="mild"><?php echo $natures[14] -> name.' (+'.$natures[14] -> up.', -'.$natures[14] -> down.')'?></option>
									<option value="modest"><?php echo $natures[15] -> name.' (+'.$natures[15] -> up.', -'.$natures[15] -> down.')'?></option>
									<option value="naive"><?php echo $natures[16] -> name.' (+'.$natures[16] -> up.', -'.$natures[16] -> down.')'?></option>
									<option value="naughty"><?php echo $natures[17] -> name.' (+'.$natures[17] -> up.', -'.$natures[17] -> down.')'?></option>
									<option value="quiet"><?php echo $natures[18] -> name.' (+'.$natures[18] -> up.', -'.$natures[18] -> down.')'?></option>
									<option value="quirky"><?php echo $natures[19] -> name?></option>
									<option value="rash"><?php echo $natures[20] -> name.' (+'.$natures[20] -> up.', -'.$natures[20] -> down.')'?></option>
									<option value="relaxed"><?php echo $natures[21] -> name.' (+'.$natures[21] -> up.', -'.$natures[21] -> down.')'?></option>
									<option value="sassy"><?php echo $natures[22] -> name.' (+'.$natures[22] -> up.', -'.$natures[22] -> down.')'?></option>
									<option value="serious"><?php echo $natures[23] -> name?></option>
									<option value="timid"><?php echo $natures[24] -> name.' (+'.$natures[24] -> up.', -'.$natures[24] -> down.')'?></option>
								</select>
							</td>
						</tr>

						<tr>
							<th scope="row" id="title">
								<label>Ability</label>
							</th>

							<td>
								<select id="ability2">
									<option value="adaptability">Adaptability</option>
								</select>
							</td>
						</tr>

						<tr>
							<th scope="row" id="title">
								<label>Item</label>
							</th>

							<td>
								<select id="item2">
									<option id="abomasite">Abomasite</option>
								</select>
							</td>
						</tr>	
					</tbody>
				</table>
			</div>
		</div>

		<script src="totals.js"></script>
		<script src="styleChange.js"></script>
		<script src="hpFunctions.js"></script>

	</body>
</html>