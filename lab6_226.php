<?php
$imageWidth = 800;
$imageHeight = 600;
$imageOffset = 50;
$maxValue = 1000;
$maxCount = 50;

$arr = array();
$count = rand($maxCount / 10, $maxCount);
for ($i = 0; $i < $count; $i++) {
    $arr[] = rand($maxValue / 100, $maxValue);
}

$image = imagecreate($imageWidth + 1, $imageHeight + 1);
$colorBg = imagecolorallocate($image, 225, 225, 225);
$colorHandle = imagecolorallocate($image, 0, 0, 0);
imagesetthickness($image, 2);

imageline($image, $imageOffset, $imageOffset, $imageOffset, $imageHeight - $imageOffset, $colorHandle);
imageline($image, $imageOffset, $imageHeight / 2, $imageWidth - $imageOffset, $imageHeight / 2, $colorHandle);
$colWidth = ($imageWidth - $imageOffset * 2) / ($count * 2 - 1);
$maxValue = max($arr);
imagestring($image, 3, $imageOffset - 30, $imageOffset - 10, "$maxValue", $colorHandle);
imagestring($image, 3, $imageOffset - 30, $imageHeight - $imageOffset, "$maxValue", $colorHandle);
$multiplier = ($imageHeight - $imageOffset * 2) / $maxValue / 2;
$colNow = 0;
$start = $imageHeight / 2;
for ($i = $imageOffset + 1; $i < $imageWidth; $i += $colWidth + $colWidth) {
    $colorHandle = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
    $colHeightDown = $start + $arr[$colNow] * $multiplier;
    $colHeightUp = $start - $arr[$colNow] * $multiplier;
    if ($colNow % 2 == 0) {
        imagefilledrectangle($image, $i, 298, $i + $colWidth, $colHeightUp, $colorHandle);
        $colorHandle = imagecolorallocate($image, 0, 0, 0);
        imagestring($image, 3, $i + $colWidth / 2 - 8, $colHeightUp - 15, "$arr[$colNow]", $colorHandle);
    } else {
        imagefilledrectangle($image, $i, 301, $i + $colWidth, $colHeightDown, $colorHandle);
        $colorHandle = imagecolorallocate($image, 0, 0, 0);
        imagestring($image, 3, $i + $colWidth / 2 - 8, $colHeightDown + 5, "$arr[$colNow]", $colorHandle);
    }
    $colNow++;
    if ($colNow == $count) {
        break;
    }
}

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>