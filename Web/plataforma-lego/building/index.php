<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Building</title>
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
                    <li><a href="../building/index.php?lesson=1">Color Sorter</a></li>
                    <li><a href="../building/index.php?lesson=2">Gyro Boy</a></li>
                    <li><a href="../building/index.php?lesson=3">Puppy</a></li>
                    <li><a href="../building/index.php?lesson=4">Robot Arm</a></li>
                    <li><a href="../building/index.php?lesson=5">Remote Control</a></li>
                    <li><a href="../building/index.php?lesson=6">Tank Bot</a></li>
                    <li><a href="../building/index.php?lesson=7">Cuboide</a></li>
                    <li><a href="../building/index.php?lesson=8">Base Motriz</a></li>
                    <li><a href="../building/index.php?lesson=9">Sensor Ultras&oacute;nico</a></li>
                    <li><a href="../building/index.php?lesson=10">Sensor de Color</a></li>
                    <li><a href="../building/index.php?lesson=11">Sensor de Giro</a></li>
                    <li><a href="../building/index.php?lesson=12">Motor Mediano</a></li>
                    <li><a href="../building/index.php?lesson=13">Sensor T&aacute;ctil</a></li>
                    <li><a href="../building/index.php?lesson=14">BOBB3E</a></li>
                </ul>
            </div>
            <div class="contenido-pdf">
            <embed id="pdf-file" 
            src="
            <?php 
                switch ($lesson) {
                    case 1: echo '../resources/build/ev3-model-core-set-color-sorter.pdf' ; break;
                    case 2: echo '../resources/build/ev3-model-core-set-gyro-boy.pdf' ; break;
                    case 3: echo '../resources/build/ev3-model-core-set-puppy.pdf' ; break;
                    case 4: echo '../resources/build/ev3-model-core-set-robot-arm.pdf' ; break;
                    case 5: echo '../resources/build/ev3-model-expansion-set-remote-control.pdf' ; break;
                    case 6: echo '../resources/build/ev3-model-expansion-set-tank-bot.pdf' ; break;
                    case 7: echo '../resources/build/00_cuboide.pdf' ; break;
                    case 8: echo '../resources/build/01_baseMotriz.pdf' ; break;
                    case 9: echo '../resources/build/02_sensorUltrasonico.pdf' ; break;
                    case 10: echo '../resources/build/03_colorSensor.pdf' ; break;
                    case 11: echo '../resources/build/04_giroSensor.pdf' ; break;
                    case 12: echo '../resources/build/05_motorMediano.pdf' ; break;
                    case 13: echo '../resources/build/06_tactilSensor.pdf' ; break;
                    case 14: echo '../resources/build/BOBB3E.pdf' ; break;
                    default: echo '../resources/build/ev3-model-core-set-color-sorter.pdf' ; break;
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