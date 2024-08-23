<?php
$file = fopen("lab3_3_226.txt", "r");
$dict = [];
if ($file) {
    while (($line = fgets($file)) !== false) {
        if (!array_key_exists($line, $dict)) {
			$dict[$line] = 1;
		}
		else {
			$dict[$line] += 1;
		}
    }
	fclose($file);
}
echo "<table border=1>";
echo "<tr>
		<td width=200px height=25><b>Строка</b></td>
		<td width=200px height=25 ><b>Кол-во повторений</b></td>
			</tr>";
foreach ($dict as $key => $value) {
    echo "<tr>
		<td width=200px height=25>$key</td>
		<td width=200px height=25>$value</td>
			</tr>";
}
echo "</table>";
?>