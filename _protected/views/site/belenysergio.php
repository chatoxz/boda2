<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 21/3/2019
 * Time: 15:40
 */
?>
<?php
/* @var $this yii\web\View */

/*
colores
#C7B38A
#FFE8B2
#8B7D62
*/

$this->title = Yii::t('app', Yii::$app->name);
$carpeta = '/themes/light/img/belenysergio/';
$titulo = 'Belen y Sergio';
$id_boda = 4;
?>

    <div style="background-color: rgba(255, 255, 255, 0.41); width: 100%">
        <div class="container container_carrousel" style="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                   <!-- <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>-->
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                   <!-- <div class="item active">
                        <img src="<?= $carpeta ?>/slider/slider.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="<?= $carpeta ?>/slider/slider2.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="<?= $carpeta ?>/slider/slider3.jpg" alt="" style="width:100%;">
                    </div>-->
                    <div class="item active">
                        <img src="<?= $carpeta ?>/slider/slider4.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="<?= $carpeta ?>/slider/slider5.jpg" alt="" style="width:100%;">
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
    <div class="seccion animatedParent width_70">
        <div class="titulo_nombres slowest animated bounceInDown">Belen & Sergio &ensp; </div>
        <div class="nos_casamos slowest animated bounceInDown">Nos Casamos</div>
        <div class="texto_nos_casamos slowest  animated bounceInDown">
            Hoy luego de una hermosa relación y gracias al amor que nos une, lo decidimos ¡NOS CASAMOS!
            Nos gustaría compartir este momento ÚNICO con las personas que queremos.
        </div>
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
        <img class="anillos slowest animated bounceInDown" src="<?= $carpeta ?>ceremonia.png" height="133" width="" alt="">
    </div>
    <!-- IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA -->
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest animated bounceInDown">Ceremonia Religiosa</div>
        <div class="texto_nos_casamos slowest animated bounceInDown width_70">
            La Ceremonia se realizará en la Iglesia Nuestra Señora del Valle, calle Florida Sur 251, a las 20.45 hs el Sábado
            04 de Mayo de 2019
        </div>
    </div>
    <!-- COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR-->
    <div class="seccion animatedParent">
        <a href="https://goo.gl/maps/XpQ14QqxYBJ2" target="_blank">
            <button class="btn btn-como-llegar slowest animated bounceInDown">
                <i class="fas fa-map-marked-alt"></i> <span> Como llegar</span>
            </button>
        </a>
    </div>
    <!-- brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis -->
    <div class="seccion animatedParent imagen_separadora">
        <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>brindis.png" width="" height="133" alt="">
    </div>
    <!-- SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON -->
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest animated bounceInDown">Fiesta</div>
        <div class="texto_nos_casamos slowest  animated bounceInDown width_70">
            <p>Te esperamos luego de la ceremonia religiosa en el Salón Florentina Av. Aconquija 3017, Yerba Buena a partir de las 22 hs</p>
        </div>
        <!-- DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE -->
        <div class="texto_nos_casamos slowest  animated bounceInDown wrap_dress_code">
            <img src="<?= $carpeta ?>dresscode.png" alt="" width="100">
            <div> Dresscode:<br> Formal </div>
        </div>
    </div>
    <!-- COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL  -->
    <div class="seccion animatedParent">
        <a href="https://goo.gl/maps/CoTriTqG9iF2" target="_blank">
            <button class="btn btn-como-llegar slowest  animated bounceInDown">
                <i class="fas fa-map-marked-alt"></i><span> Como llegar</span>
            </button>
        </a>
    </div>

    <!-- IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO -->
    <div class="seccion animatedParent imagen_separadora" style="margin-top: 50px;">
        <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>regalo.png" height="133" width="%" alt="">
    </div>
    <!-- ¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?-->
    <div class="seccion animatedParent width_70">
        <div class="titulo_nombres slowest  animated bounceInDown">¿Pensaste en regalos?</div>
        <div class=" slowest  animated bounceInDown ">
            Si desean hacernos un regalo, podes ayudarnos con nuestra luna de miel.
        </div>
    </div>
    <!-- BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS -->
    <div class="seccion animatedParent">
        <button class="btn btn-como-llegar slowest  animated bounceInDown modalButton" title="Regalos!" value="regalosbelenysergio">
            <i class="fas fa-gifts"></i><span> Regalar!</span>
        </button>
    </div>
    <!-- ¡Te esperamos para compartir!¡Te esperamos para compartir!¡Te esperamos para compartir!¡Te esperamos para compartir!-->
    <div class="seccion seccion_background_gray animatedParent">
        <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>compromiso.png" height="133" width="%" alt="">
        <div class="slowest  animated bounceInDown">
            <div class="titulo_nombres" style="font-size:60px">¡Te esperamos para compartir!</div>
            <button class="btn btn-como-llegar  modalButton" style="margin-top: 30px;" title=<?= $titulo ?> value="confirmar?id=<?= $id_boda?>">
                <i class="fas fa-star"></i><span> Confirmar asistencia</span>
            </button>
        </div>
    </div>

    <!-- ¡Guarda la fecha en tu calendario! ¡Guarda la fecha en tu calendario! ¡Guarda la fecha en tu calendario! ¡Guarda la fecha en tu calendario!-->
    <!--<div class="seccion seccion_background_gray animatedParent">
        <div class="slowest  animated bounceInDown">
            <div class="titulo_nombres" style="font-size:60px">¡Guarda la fecha en tu calendario!</div>
            <a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=M3J2bGs3Z2dlODdzYzVmdHJzdWJxMGI3amogY2FycmVyYXNzc2ViYXN0aWFuQG0&amp;tmsrc=carrerasssebastian%40gmail.com">
                <img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_es.gif">
            </a>
        </div>
    </div>
-->

<?php /*
        NOVIOS: Angel Alberto Varela y Carla Estefanía Cruz.
        IGLESIA: Parroquia San Isidro Labrador, calle E Canton 216, 21.30hrs. 16/03/2019
        SALÓN: Salón Narcizo Eventos, lules, 22hr a 5.30hr
        VESTIMENTA: Formal.
        PADRINOS DEL NOVIO: Silvia Gomez (madre), Martin Oscar Aranda (tío)
        PADRINOS DE LA NOVIA: Edith (madre), Carlos (padre)
        TESTIGOS DE LA NOVIA: Silvana (hna), Grisel (hna), Magalí (hna).
        TESTIGOS DEL NOVIO: Flavia (hna), Franco (hno), Roberto (amigo), Gustavo (amigo).
*/
// usuario angel pass angelycarla
