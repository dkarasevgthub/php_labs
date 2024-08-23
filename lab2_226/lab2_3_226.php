<?php
$a = $_POST["a"];
$b = $_POST["b"];
if ($a == "" || $b == "") {
	echo "Неправильный формат ввода";
}
else {
	echo '<html><body>';
	echo '<table border=1 width=1000px height=100px>';
	for ($i = 1; $i <= $a; $i++) {
		echo '<tr>';
		for ($j = 1; $j <= $b; $j++) {
			echo "<td>   </td>";
		}
		echo '</tr>';
	}
	echo '</table>';
	echo '</body></html>';
}
?>
