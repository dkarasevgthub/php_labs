<?php
$dirname = $_POST["dirname"];
if (!is_dir($dirname)) {
	mkdir($dirname);
	echo "Директория $dirname создана";
} else {
	echo "Директория $dirname существует";
}
?>