<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Rafael Valentim", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em: " . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

// Recurso, nome do arquivo, Qualidade (0-100)
imagejpeg($image, "certificado-".date("d.m.Y").".jpg", 100);

imagedestroy($image);

 ?>