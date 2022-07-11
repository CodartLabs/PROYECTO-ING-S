<div class="resultado" > <!-- contents | none -->
			<h4>Resultado</h4>
			<h6>En un rango de 1 - 100</h6><br>
			<table id="table_medicion">
				<tr><td rowspan="100" class="medidor">
				</td><td class="altoAuto"><tr><td class="altoAuto"><?php if(95<$totalPuntaje && $totalPuntaje<=100) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr></td></tr>
				<tr><td class="altoAuto"><?php if(90<$totalPuntaje && $totalPuntaje<=95) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(85<$totalPuntaje && $totalPuntaje<=90) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(80<$totalPuntaje && $totalPuntaje<=85) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(75<$totalPuntaje && $totalPuntaje<=80) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(70<$totalPuntaje && $totalPuntaje<=75) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(65<$totalPuntaje && $totalPuntaje<=70) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(60<$totalPuntaje && $totalPuntaje<=65) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				
				<tr><td class="altoAuto"><?php if(55<$totalPuntaje && $totalPuntaje<=60) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(50<$totalPuntaje && $totalPuntaje<=55) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(45<$totalPuntaje && $totalPuntaje<=50) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(40<$totalPuntaje && $totalPuntaje<=45) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(35<$totalPuntaje && $totalPuntaje<=40) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(30<$totalPuntaje && $totalPuntaje<=35) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(25<$totalPuntaje && $totalPuntaje<=30) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(20<$totalPuntaje && $totalPuntaje<=25) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(15<$totalPuntaje && $totalPuntaje<=20) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(10<$totalPuntaje && $totalPuntaje<=15) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(5<$totalPuntaje && $totalPuntaje<=10) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje"; echo "</span>"; }?></td></tr>
				<tr><td class="altoAuto"><?php if(0<=$totalPuntaje && $totalPuntaje<=5) {echo '<span class="flecha">🠔</span><span class="puntaje"><b>Puntaje</b>: ' ;echo "$totalPuntaje" ; echo "</span>"; }?></td></tr>
				
			</table><br>
			<?php 
			if($totalPuntaje>70){
				echo '<span>Según su apreciación nuestro Sitio Web tiene una escala de Usabilidad de <b>';
				echo $totalPuntaje;
				echo '</b> Puntos, considerandola en un estado <p style="color:#64ff00;"><b>ACEPTABLE.</b></p></span>';
				}
			if($totalPuntaje>=50 && $totalPuntaje<=70){
				echo '<span>Según su apreciación nuestro Sitio Web tiene una escala de Usabilidad de <b>';
				echo $totalPuntaje;
				echo '</b> Puntos, considerandola en un estado <p style="color:#fc7800;"><b>MARGINAL.</b></p></span>';
				}
			if($totalPuntaje<50){
				echo '<span>Según su apreciación nuestro Sitio Web tiene una escala de Usabilidad de <b>';
				echo $totalPuntaje;
				echo '</b> Puntos, considerandola en un estado <p style="color:#ff0000;"><b>NO ACEPTABLE.</b></p></span>';
				}

			?>
			<!-- <div class="result_medicion">
				<div class="medidor">

				</div>
				<div class="valor">
				
				</div>
			</div> -->
		</div>