<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0,0,0);
$gray = imagecolorallocate($image, 100,100,100);

imagettftext($image, 32, 0, 320,250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Fabinho Flauzino");
imagestring($image, 3, 440, 370, "Comcluido em: ". date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, "concluido-".date("Y-m-d").".jpg");

imagedestroy($image);

?>