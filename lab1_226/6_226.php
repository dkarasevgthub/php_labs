<?php
echo '<table border=1>';
$nums = range(1, 10);
echo "<tr>";
foreach ($nums as $x) {
	echo "<td>";
	foreach ($nums as $y) {
		echo "$x x $y = " .$x*$y. "<br>";
	}
	echo "</td>";
	if ($x == 5) {
		echo "</tr><tr>";
	}
}
	echo "</tr>";
	echo "</table>";
?>