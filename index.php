<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="fonts\GOTHIC.TTF">
    <link rel="stylesheet" href="fonts\Montara-Gothic.OTF">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <h1>Panes y Panas</h1>

    <?php
    $controladorNombre = isset($_GET['controlador']) ? ucfirst($_GET['controlador']) : 'Panes';
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

    $rutaControlador = 'controladores/' . $controladorNombre . '.php';

    include_once $rutaControlador;
    $c = new $controladorNombre();
    $c->$actionName();
    ?>

    <div class="LR">
        <div class="button-left"><a href="index.php?controlador=panes&action=index">Ver lista</a></div>
        &nbsp;
        <div class="button-right"><a href="index.php?controlador=panes&action=agregar">Agregar panes</a></div>
    </div>
</body>

</html>