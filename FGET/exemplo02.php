<?php 

$filename = "coca1.jpg";

$base64 = base64_encode(file_get_contents($filename)); //le o conteudo inteiro 

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:".$mimetype.";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a>

<img src="<?=$base64encode?>">