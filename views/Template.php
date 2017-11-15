<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=" <?php echo BASE_URL; ?> /assets/css/style.css">
    <title>Template</title>
</head>
<body>

<h1> Topo do meu site </h1>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<h1>Rodapé do site...</h1>
</body>
</html>