<?php
// Caminho para a imagem original
$imagePath = 'Arquivos/Capas/6538269be3168.jpg';

// Defina as novas dimensões
$newWidth = 2500;
$newHeight = 2500;

// Carregue a imagem original
$originalImage = imagecreatefromjpeg($imagePath);

// Crie uma nova imagem com as dimensões desejadas
$resizedImage = imagecreatetruecolor($newWidth, $newHeight);

// Redimensione a imagem original para as novas dimensões
imagecopyresized($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, imagesx($originalImage), imagesy($originalImage));

// Salve a imagem redimensionada em um arquivo local
$destPath = 'Arquivos/Capas/aedg.jpg'; // Substitua pelo caminho desejado
imagejpeg($resizedImage, $destPath);

// Libere a memória
imagedestroy($originalImage);
imagedestroy($resizedImage);
?>
