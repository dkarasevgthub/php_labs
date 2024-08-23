<?php
	echo '<table border=1>';
	for ($i = 0; $i <= 255; $i += 10) {
		for ($j = 0; $j <= 255; $j += 10) {
			for ($k = 0; $k <= 255; $k += 10) {
				echo '<tr>
				<td style="background-color:RGB('.$i.', '.$j.', '.$k.');" width=200px height=25></td>
				</tr>';
			}
		}
	}
	echo '</table>';
?>