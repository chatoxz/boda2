<?php
/* @var $this yii\web\View */
/*
colores
#C7B38A
#FFE8B2
#8B7D62
*/
use yii\helpers\Url;

$this->title = Yii::t('app', Yii::$app->name);
$carpeta = '/themes/light/img/carlaybeto/';
?>
<div id="slider">
    <figure>
        <img src="<?= $carpeta ?>silviayjuan.jpg" alt>
        <img src="<?= $carpeta ?>silviayjuan.jpg" alt>
        <img src="<?= $carpeta ?>silviayjuan.jpg" alt>
        <img src="<?= $carpeta ?>silviayjuan.jpg" alt>
        <img src="<?= $carpeta ?>silviayjuan.jpg" alt>
    </figure>
</div>
<div class="seccion animatedParent" style="width: 50%">
    <div class="titulo_nombres slowest  animated bounceInDown">Carla & Angel</div>
    <div class="nos_casamos slowest  animated bounceInDown">Nos Casamos</div>
    <div class="texto_nos_casamos slowest  animated bounceInDown">
        Porque desde la primera vez que nos vimos soñamos
        con este momento, queremos que formes parte de nuestra
        mágica historia que abrirá un nuevo capítulo...
    </div>
</div>
</div>
<div class="seccion animatedParent">
    <!-- RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ RELOJ -->
    <div class="container countdown slowest  animated bounceInDown" style="text-align: center">
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
<div class="seccion animatedParent">
    <img class="anillos slowest  animated bounceInDown" src="<?= $carpeta ?>anillos.png" width="100%" alt="">
</div>
<!-- IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA IGLESIA -->
<div class="seccion animatedParent">
    <div class="titulo_nombres slowest  animated bounceInDown">Ceremonia Religiosa</div>
    <div class="texto_nos_casamos slowest  animated bounceInDown width_70">
        La Ceremonia se realizará en la Parroquia San Isidro Labrador, calle E Canton 216, a las 21.30 hs el Sábado
        16 de Marzo de 2019
    </div>
</div>
<!-- COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR IGLESIA COMO LLEGRAR-->
<div class="seccion animatedParent">
    <a href="https://goo.gl/maps/PSEZZhBbRzw" target="_blank">
        <button class="btn btn-como-llegar slowest  animated bounceInDown">
            <i class="fas fa-map-marked-alt"></i> <span> Como llegar</span>
        </button>
    </a>
</div>
<!--  -->

<div class="seccion animatedParent">
    <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>brindis.png" width="" height="133" alt="">
</div>
<!-- SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON -->
<div class="seccion animatedParent">
    <div class="titulo_nombres slowest  animated bounceInDown">Fiesta</div>
    <div class="texto_nos_casamos slowest  animated bounceInDown width_70">
        Te esperamos luego de la ceremonia religiosa en el Salón Narcizo Eventos, lules, de 22hr a 05.30 hs
    </div>
    <!-- DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE -->
    <div class="texto_nos_casamos slowest  animated bounceInDown wrap_dress_code">
        <img src="<?= $carpeta ?>dress-code.png" alt="" width="100">
        <div> Dresscode:<br> Formal </div>
    </div>
</div>
<!-- COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL  -->
<div class="seccion animatedParent">
    <a href="https://goo.gl/maps/TFRkMRvT3EM2" target="_blank">

        <button class="btn btn-como-llegar slowest  animated bounceInDown">
            <i class="fas fa-map-marked-alt"></i><span> Como llegar</span>
        </button>
    </a>
</div>
<div class="wrap_testigos_padrinos seccion">
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest  animated bounceInDown">Los Testigos</div>
        <div class="nos_casamos slowest  animated bounceInDown">De la Novia</div>
    </div>
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Iglesia</div>
    </div>
    <div class="wrap_imagenes_padrinos animatedParent">
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo.jpg" width="338" alt="">
        </div>
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo2.jpg" width="338" alt="">
        </div>
    </div>
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Civil</div>
    </div>
    <div class="wrap_imagenes_padrinos animatedParent">
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo.jpg" width="338" alt="">
        </div>
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo2.jpg" width="338" alt="">
        </div>
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo.jpg" width="338" alt="">
        </div>
    </div>
    <div class="seccion animatedParent">
        <div class="nos_casamos slowest  animated bounceInDown">Del Novio</div>
    </div>
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Iglesia</div>
    </div>
    <div class="wrap_imagenes_padrinos animatedParent">
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo.jpg" width="338" alt="">
        </div>
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo2.jpg" width="338" alt="">
        </div>
    </div>
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Civil</div>
    </div>
    <div class="wrap_imagenes_padrinos animatedParent">
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo.jpg" width="338" alt="">
        </div>
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo2.jpg" width="338" alt="">
        </div>
        <div class="div_foto_padrinx slowest  animated bounceInDown">
            <img src="<?= $carpeta ?>testigo.jpg" width="338" alt="">
        </div>
    </div>
</div>
<div class="seccion animatedParent">
    <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>regalos.png" width="100%" alt="">
</div>
<div class="seccion animatedParent">
    <div class="titulo_nombres slowest  animated bounceInDown">¿Pensaste en regalos?</div>
    <div class=" slowest  animated bounceInDown">Realmente somos afortunados y no necesitamos nada. Pero...
        nos podes ayudar con nuestra Luna de Miel</div>
</div>
<div class="seccion animatedParent">
    <button class="btn btn-como-llegar slowest  animated bounceInDown modalButton" title="Regalo!" value="regalos">
        <i class="fas fa-gifts"></i><span> Regalar!</span>
    </button>
</div>
<div class="seccion seccion_background_gray animatedParent">
    <div class="slowest  animated bounceInDown">
        <div>¡Te esperamos para compartir!</div>
        <button class="btn btn-como-llegar slowest  animated bounceInDown modalButton" title="Angel y Carla" value="confirmar">
            <i class="fas fa-star"></i><span> Confirmar asistencia</span>
        </button>
    </div>
</div>


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
