<?php
//incluir arquivo de helper para URLS
include_once("helpers/url.php");
print_r($BASE_URL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
<!--Usa a váriavel $BASE_URL para pegar o caminho dos arquivos -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    
</body>
</html>