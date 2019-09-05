<?php
/* @var $this yii\web\View */


$this->title = Yii::t('app', Yii::$app->name);
$carpeta = '/themes/light/img/walteryvaleria/';
$titulo = 'Walter y Valeria';
$id_boda = 5;
?>
<?php /*
<div style="background-color: rgba(255, 255, 255, 0.41); width: 100%">
    <div class="container container_carrousel" style="margin: auto !important; padding: 0px !important;width: 80%;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?= $carpeta ?>/slider/slider1.jpg"" alt="" style=" width:100%;">
                </div>

                <div class="item">
                    <img src="<?= $carpeta ?>/slider/slider2.jpeg"" alt="" style=" width:100%;">
                </div>

                <div class="item">
                    <img src="<?= $carpeta ?>/slider/slider3.jpg"" alt="" style=" width:100%;">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
*/ ?>

<div style="background-color: rgba(255, 255, 255, 0.41); width: 100%; overflow-x: hidden;">
    <img src="<?= $carpeta ?>/slider/slider2.png" alt="" style="width:80%;">
</div>
<div class="seccion animatedParent width_70">
    <div class="titulo_nombres slowest animated bounceInDown">Nos Casamos &ensp; </div>
    <!-- <div class="nos_casamos slowest animated bounceInDown">Nos Casamos</div> -->
    <!-- <div class="texto_nos_casamos slowest  animated bounceInDown">
        Hoy luego de una hermosa relación y gracias al amor que nos une, lo decidimos <br> <b> ¡NOS CASAMOS!</b><br>
        Nos gustaría compartir este momento ÚNICO con las personas que queremos.
    </div> -->
</div>
<div class="seccion animatedParent">
    <!-- RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ -->
    <div class="container countdown slowest animated bounceInDown" style="text-align: center">
        <div class="number-wrap">
            <span class="number timer_dia">00</span>
            <span class="period display-7">Días</span>
        </div>
        <div class="separador-number-wrap">
            <span>:</span>
            <span></span>
        </div>
        <div class="number-wrap">
            <span class="number timer_hora">00</span>
            <span class="period display-7">Horas</span>
        </div>
        <div class="separador-number-wrap">
            <span>:</span>
            <span></span>
        </div>
        <div class="number-wrap">
            <span class="number timer_min">00</span>
            <span class="period display-7">Minutos</span>
        </div>
        <div class="separador-number-wrap">
            <span>:</span>
            <span></span>
        </div>
        <div class="number-wrap">
            <span class="number timer_seg">00</span>
            <span class="period display-7">Segundos</span>
        </div>
    </div>
</div>
<!-- ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS ANILLOS -->
<div class="seccion animatedParent imagen_separadora">
    <img class="anillos slowest animated bounceInDown" src="<?= $carpeta ?>horario.png" height="133" width="" alt="">
</div>
<!-- IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA -->
<div class="seccion animatedParent">
    <div class="titulo_nombres slowest animated bounceInDown">Ceremonia Religiosa</div>
    <div class="texto_nos_casamos slowest animated bounceInDown width_70">
        La Ceremonia se realizará en la Parroquia Nuestro Señor del Milagro y San Marón, Junín 494, a las 20.30 hs el Sábado
        19 de Octubre de 2019
    </div>
</div>
<!-- COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR-->
<div class="seccion animatedParent">
    <a href="https://goo.gl/maps/tE6SUgKC62Ztc8PK8" target="_blank">
        <div class="btn btn-como-llegar slowest animated bounceInDown">
            <i class="fas fa-map-marked-alt"></i> <span> Como llegar</span>
        </div>
    </a>
</div>
<!-- brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis -->
<div class="seccion animatedParent imagen_separadora">
    <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>salon.png" width="" height="133" alt="">
</div>
<!-- SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON -->
<div class="seccion animatedParent">
    <div class="titulo_nombres slowest animated bounceInDown">Fiesta</div>
    <div class="texto_nos_casamos slowest  animated bounceInDown width_70">
        <p>Te esperamos luego de la ceremonia religiosa en el Salón Florentina Av. Aconquija 3017, Yerba Buena</p>
    </div>
    <!-- DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE -->
    <div class="texto_nos_casamos slowest  animated bounceInDown wrap_dress_code">
        <div style="margin-right:50px"> Etiqueta:<br> Formal </div>
        <img src="<?= $carpeta ?>dresscode.png" alt="" width="100">
    </div>
</div>
<!-- COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL  -->
<div class="seccion animatedParent">
    <a href="https://goo.gl/maps/uYnY1c98Q8RL3cyY9" target="_blank">
        <button class="btn btn-como-llegar slowest  animated bounceInDown">
            <i class="fas fa-map-marked-alt"></i><span> Como llegar</span>
        </button>
    </a>
</div>

<!-- IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO -->
<!-- <div class="seccion animatedParent imagen_separadora" style="margin-top: 50px;">
    <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>regalo.png" height="133" width="%" alt="">
</div> --->
<!-- ¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?-->
<!--<div class="seccion animatedParent width_70">
    <div class="titulo_nombres slowest  animated bounceInDown">“Acompáñanos en el comienzo de nuestra nueva familia”</div>
    <div class=" slowest  animated bounceInDown ">
        Si desean hacernos un regalo, podes ayudarnos con nuestra luna de miel.
    </div>
</div>-->
<!-- BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS -->
<!--<div class="seccion animatedParent">
    <button class="btn btn-como-llegar slowest  animated bounceInDown modalButton" title="Regalos!" value="regalosbelenysergio">
        <i class="fas fa-gifts"></i><span> Regalar!</span>
    </button>
</div> -->


<!-- ¡Te esperamos para compartir!¡Te esperamos para compartir!¡Te esperamos para compartir!¡Te esperamos para compartir!-->
<div class="seccion animatedParent imagen_separadora">
    <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>compromiso.png" height="133" width="%" alt="">
</div>
<div class="seccion  animatedParent">
    <div class="slowest  animated bounceInDown">
        <div class="titulo_nombres" style="font-size:60px">Acompáñanos en el comienzo de nuestra nueva familia</div>
        <button class="btn btn-como-llegar  modalButton" style="margin-top: 30px;" title="<?= $titulo ?>" value="confirmar">
            <i class="fas fa-star"></i><span> Confirmar asistencia</span>
        </button>
    </div>
</div>

<!-- ¡Guarda la fecha en tu calendario! ¡Guarda la fecha en tu calendario! ¡Guarda la fecha en tu calendario! ¡Guarda la fecha en tu calendario!-->
<div class="seccion seccion_background_gray animatedParent">
    <div class="slowest  animated bounceInDown">
        <div class="titulo_nombres" style="font-size:60px">¡Guarda la fecha en tu calendario!</div>
        <a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=M3J2bGs3Z2dlODdzYzVmdHJzdWJxMGI3amogY2FycmVyYXNzc2ViYXN0aWFuQG0&amp;tmsrc=carrerasssebastian%40gmail.com">
            <img border="0" src="<?= $carpeta ?>calendario.png" height="133">
        </a>
    </div>
</div>