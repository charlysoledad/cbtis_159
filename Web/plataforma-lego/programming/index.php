<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programming</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Nova+Square" rel="stylesheet"> 
    <?php 
        if ($_GET["lesson"]) {
            $lesson = $_GET["lesson"];
        }
    ?>
</head>
<body>
    <section class="page-wrapper">
        <header>
            <div class="contenedor">
                <h1>Curso <b>Learn-E</b> LEGO Mindstorms EV3 </h1>
            </div>
        </header>
        <nav class="navigation">
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../programming/index.php?lesson=1">Programaci&oacute;n</a></li>
                    <li><a href="../building/index.php?lesson=1">Construcci&oacute;n</a></li>
                    <li><a href="../basic/index.php?lesson=1">Sobre EV3</a></li>
                </ul>
        </nav>
        <section class="contenedor contenido">
            <div class="lessons-content">
                <ul class="lessons">
                    <li><a href="../programming/index.php?lesson=1">Bloques de Acci&oacute;n</a></li>
                </ul>
            </div>
            <div class="contenido-pdf">
            <embed id="pdf-file" 
            src="
            <?php 
                switch ($lesson) {
                    case 1: echo '../resources/bloquesdeaccion.pdf' ; break;
                    case 2: echo '../resources/program-desc.pdf' ; break;
                    default:
                        # code...
                        break;
                }
            ?>
            "
            class="lector-pdf">
            
            </div>
        </section>
    </section>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>