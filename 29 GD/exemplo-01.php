<?php 

header("Content-Type: image/png");

$image = imagecreate(256, 256); // Largura e Altura em px

// Alocando a primeira cor, que será a cor de fundo (R,G,B)
$black = imagecolorallocate($image, 0, 0, 0); 

$red = imagecolorallocate($image, 255, 0, 0); 

// Recurso, Tamanho da fonte (1-5), eixo X, Y, frase, cor do texto
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

imagepng($image);

imagedestroy($image);

 ?>