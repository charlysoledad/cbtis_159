<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic</title>
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
                    <li><a href="../basic/index.php?lesson=1">B&aacute;sico de EV3</a></li>
                </ul>
        </nav>
        <section class="contenedor contenido">
            <div class="lessons-content">
                <ul class="lessons">
                    <li><a href="../basic/index.php?lesson=1">El robot LEGO EV3</a></li>
                    <li><a href="../basic/index.php?lesson=2">¿Qu&eacute; es un Robot?</a></li>
                    <li><a href="../basic/index.php?lesson=3">Componentes de LEGO EV3</a></li>
                    <li><a href="../basic/index.php?lesson=4">Motores</a></li>
                    <li><a href="../basic/index.php?lesson=5">Sensores</a></li>
                    <li><a href="../basic/index.php?lesson=6">Sensor Ultras&oacute;nico</a></li>
                    <li><a href="../basic/index.php?lesson=7">Sensor de Color</a></li>
                    <li><a href="../basic/index.php?lesson=8">Sensor de Giro</a></li>
                    <li><a href="../basic/index.php?lesson=9">Sensor T&aacute;ctil</a></li>
                    <li><a href="../basic/index.php?lesson=10">Otros Sensores</a></li>
                    <li><a href="../basic/index.php?lesson=11">El Bloque EV3</a></li>
                    <li><a href="../basic/index.php?lesson=12">Estados del Bloque</a></li>
                    <li><a href="../basic/index.php?lesson=13">Bateria del Bloque</a></li>
                    <li><a href="../basic/index.php?lesson=14">Encender-Apagar el Bloque</a></li>
                    <li><a href="../basic/index.php?lesson=15">Conexiones del Bloque</a></li>
                    <li><a href="../basic/index.php?lesson=16">Construcci&oacute;n de modelos</a></li>
                    <li><a href="../basic/index.php?lesson=17">Interfaz del Bloque</a></li>
                    <li><a href="../basic/index.php?lesson=18">Ejecutar Reciente</a></li>
                    <li><a href="../basic/index.php?lesson=19">Navegaci&oacute;n de archivos</a></li>
                    <li><a href="../basic/index.php?lesson=20">Aplicaciones del bloque</a></li>
                    <li><a href="../basic/index.php?lesson=21">Brick Program</a></li>
                    <li><a href="../basic/index.php?lesson=22">Ajustes</a></li>
                </ul>
            </div>
            <div class="contenido-pdf">
            <embed id="pdf-file" 
            src="
            <?php 
                switch ($lesson) {
                    case 1: echo '../resources/basic/1. El Robot LEGO EV3.pdf' ; break;
                    case 2: echo '../resources/basic/1.1 Que es un Robot.pdf' ; break;
                    case 3: echo '../resources/basic/1.2 Componentes de LEGO EV3.pdf' ; break;
                    case 4: echo '../resources/basic/1.3 Motores.pdf' ; break;
                    case 5: echo '../resources/basic/1.4 Sensores.pdf' ; break;
                    case 6: echo '../resources/basic/1.4.1 Sensor Ultrasonico.pdf' ; break;
                    case 7: echo '../resources/basic/1.4.2 Sensor de Color.pdf' ; break;
                    case 8: echo '../resources/basic/1.4.3 Girosensor.pdf' ; break;
                    case 9: echo '../resources/basic/1.4.4 Sensor Tactil.pdf' ; break;
                    case 10: echo '../resources/basic/1.4.5 Otros Sensores.pdf' ; break;
                    case 11: echo '../resources/basic/1.5 El Bloque EV3.pdf' ; break;
                    case 12: echo '../resources/basic/1.5.1 Estados del Bloque.pdf' ; break;
                    case 13: echo '../resources/basic/1.5.2 Bateria del Bloque.pdf' ; break;
                    case 14: echo '../resources/basic/1.5.3 Encender-Apagar el Bloque.pdf' ; break;
                    case 15: echo '../resources/basic/1.5.4 Conexiones del Bloque.pdf' ; break;
                    case 16: echo '../resources/basic/1.6 Construccion de Modelos.pdf' ; break;
                    case 17: echo '../resources/basic/1.7 La Interfas del Bloque EV3.pdf' ; break;
                    case 18: echo '../resources/basic/1.7.1 Ejecutar Reciente.pdf' ; break;
                    case 19: echo '../resources/basic/1.7.2 Navegación de Archivos.pdf' ; break;
                    case 20: echo '../resources/basic/1.7.3 Aplicaciones del Bloque.pdf' ; break;
                    case 21: echo '../resources/basic/1.7.4 Brick Program.pdf' ; break;
                    case 22: echo '../resources/basic/1.7.5 Ajustes.pdf' ; break;
                    default: echo '../resources/basic/ev3-model-core-set-color-sorter.pdf' ; break;
                }
            ?> " class="lector-pdf">
            </div>
        </section>
    </section>

    <footer>
        
    </footer>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>