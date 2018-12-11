		<div id="mon2">

			<?php 
				echo $mons[1] -> name; 
				echo " - "; 
				echo $mons[1] -> type1 -> type; 
				echo ", "; 
				echo $mons[1] -> type2 -> type; 
				echo nl2br ("\n"); 
			?>

		<table>

			<thead>
				<th id="title"></th>
				<th scope="col">Base</th>
				<th scope="col">IVs</th>
				<th scope="col">EVs</th>
				<th wascope="col">Total</th>
				<th scope="col">Modifiers</th>
			</thead>

			<tbody>
				<tr class="HP">
					<th scope="row">
						<label>HP</label>
					</th>
					<td>
						<input class="base" value=<?php echo $mons[1] -> hp?>>
					</td>
					<td>
						<input class="IVs" type="number" min="0" max="31" step="1" value="31">
					</td>
					<td>
						<input class="EVs" type="number" min="0" max="252" step="4" value="0">
					</td>
					<td>
						<span class="total"><?php echo $mons[1] -> hp?></span>
					</td>
				</tr>

				<tr class="atk">
					<th scope="row">
						<label>Attack</label>
					</th>
					<td>
						<input class="base" value=<?php echo $mons[1] -> atk?>>
					</td>
					<td>
						<input class="IVs" type="number" min="0" max="31" step="1" value="31">
					</td>
					<td>
						<input class="EVs" type="number" min="0" max="252" step="4" value="0">
					</td>
					<td>
						<span class="total"><?php echo $mons[1] -> atk?></span>
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
						<input class="base" value=<?php echo $mons[1] -> def?>>
					</td>
					<td>
						<input class="IVs" type="number" min="0" max="31" step="1" value="31">
					</td>
					<td>
						<input class="EVs" type="number" min="0" max="252" step="4" value="0">
					</td>
					<td>
						<span class="total"><?php echo $mons[1] -> def?></span>
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
						<input class="base" value=<?php echo $mons[1] -> spAtk?>>
					</td>
					<td>
						<input class="IVs" type="number" min="0" max="31" step="1" value="31">
					</td>
					<td>
						<input class="EVs" type="number" min="0" max="252" step="4" value="0">
					</td>
					<td>
						<span id="SpAtk" class="total"><?php echo ($mons[1] -> spAtk * 2) + 5?></span>
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
						<input class="base" value=<?php echo $mons[1] -> spDef?>>
					</td>
					<td>
						<input class="IVs" type="number" min="0" max="31" step="1" value="31">
					</td>
					<td>
						<input class="EVs" type="number" min="0" max="252" step="4" value="0">
					</td>
					<td>
						<span class="total"><?php echo $mons[1] -> spDef?></span>
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
						<input onchange="func(this.value)" id="SpdBase2" value=<?php echo $mons[1] -> spd?>>
					</td>
					<td>
						<input onchange="func(this.value)" id="SpdIVs2" type="number" min="0" max="31" step="1" value="31">
					</td>
					<td>
						<input onchange="func(this.value)" id="SpdEVs2" type="number" min="0" max="252" step="4" value="0">
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