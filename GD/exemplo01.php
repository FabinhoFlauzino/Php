<?php 

header("Content-Type: image/png");

$image = imagecreate(256,256);

$black = imagecolorallocate($image,0,0,0);
$green = imagecolorallocate($image, 5,230,5);

imageString($image, 5,60,120, "Fabinho Flauzino", $green);

imagepng($image);

imagedestroy($image);
?>