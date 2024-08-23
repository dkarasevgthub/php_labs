<?php
for ($j = 0; $j < 100; $j++) {
	for ($i = 10; $i <= 23; $i++) {
		if ($i < 12 || $i > 16) {
			echo $i;
			echo ' ';
		}
		else {
			if ($i < 16) {
				echo $i;
				echo ' ';
				echo $i;
				echo ' ';
			}
		}
	}
	echo '<br>';
}
?>