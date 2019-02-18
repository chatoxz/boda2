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
                        <img src="<?= $carpeta ?>/slider/slider.jpeg"" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="<?= $carpeta ?>/slider/slider2_1.jpeg"" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="<?= $carpeta ?>/slider/slider3.jpeg"" alt="New york" style="width:100%;">
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
        <div class="titulo_nombres slowest  animated bounceInDown">Carla & Angel &ensp; </div>
        <div class="nos_casamos slowest  animated bounceInDown">Nos Casamos</div>
        <div class="texto_nos_casamos slowest  animated bounceInDown">
            Comenzamos siendo Amigos, pero afortunadamente no Funcionó, porque nos gustamos tanto que decidimos ser Novios.
             Hoy luego de una Hermosa Relación y Gracias al Amor que nos Une, lo decidimos ¡NOS CASAMOS!
            Nos gustaría compartir Este Momento UNICO con las personas que queremos.
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
    <div class="seccion animatedParent imagen_separadora">
        <img class="anillos slowest  animated bounceInDown" src="<?= $carpeta ?>ceremonia.png" height="133" width="" alt="">
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
    <!-- brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis brindis -->
    <div class="seccion animatedParent imagen_separadora">
        <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>brindis.png" width="" height="133" alt="">
    </div>
    <!-- SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON SALON -->
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest  animated bounceInDown">Fiesta</div>
        <div class="texto_nos_casamos slowest  animated bounceInDown width_70">
            <p>Te esperamos luego de la ceremonia religiosa en el Salón Narcizo Eventos, lules, de 22hr a 05.30 hs</p>
        </div>
        <!-- DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE DRESSCODE -->
        <div class="texto_nos_casamos slowest  animated bounceInDown wrap_dress_code">
            <img src="<?= $carpeta ?>dresscode.png" alt="" width="100">
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

    <!-- trafic trafic trafic trafic trafic trafic trafic trafic trafic trafic trafic trafic trafic trafic trafic trafic -->
    <div class="seccion animatedParent imagen_separadora">
        <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>car.png" width="" height="133" alt="">
    </div>
    <div class="seccion animatedParent">
        <div class="titulo_nombres slowest  animated bounceInDown">Trafic</div>
        <div class="texto_nos_casamos slowest  animated bounceInDown width_70">
            <p>Salida Av. Alem 595 a 20:30 hs hacia iglesia lules luego a salón Narcizo </p>
            <p>Regreso 05:30 a San miguel de Tucuman, a cada domicilio (opcional)</p>
        </div>
    </div>
    <!-- COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL COMO LLEGRAR CIVIL  -->
    <div class="seccion animatedParent">
        <button class="btn btn-como-llegar slowest  animated bounceInDown modalButton" title="Angel y Carla" value="trafic">
            <i class="fas fa-shuttle-van"></i></i><span> Ir en trafic!</span>
        </button>
    </div>
    <!-- -->
    <div class="wrap_testigos_padrinos seccion">
        <div class="seccion animatedParent">
            <div class="titulo_nombres slowest  animated bounceInDown">Los Testigos</div>
            <div class="nos_casamos slowest  animated bounceInDown">De la Novia</div>
        </div>
        <div class="seccion animatedParent">
            <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Iglesia</div>
        </div>
        <!-- PADRINOS DE LA NOVIA  PADRINOS DE LA NOVIA  PADRINOS DE LA NOVIA  PADRINOS DE LA NOVIA  PADRINOS DE LA NOVIA  PADRINOS DE LA NOVIA -->
        <div class="wrap_imagenes_padrinos animatedParent">
            <div class="" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/edith.jpeg" width="338" alt="" style="left: 0px; !important">
                </div>
                <div class="texto_padrinx slowest animated bounceInDown">Edith <br> Mamá</div>
            </div>
            <div style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/carlos.jpeg" width="338" alt="">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Carlos <br> Papá</div>
            </div>
        </div>
        <div class="seccion animatedParent">
            <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Civil</div>
        </div>
        <!-- TESTIGOS DE LA NOVIA TESTIGOS DE LA NOVIA TESTIGOS DE LA NOVIA TESTIGOS DE LA NOVIA TESTIGOS DE LA NOVIA TESTIGOS DE LA NOVIA -->
        <div class="wrap_imagenes_padrinos animatedParent">
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/silvana.jpeg" width="338" alt="" style="top: -22%;">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Silvana <br> Hermana</div>
            </div>
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/grisel.jpeg" width="338" alt="" style="left: -38px;">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Grisel <br> Hermana</div>
            </div>
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/magali.jpeg" width="338" alt="">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Magalí <br> Hermana</div>
            </div>
        </div>
        <div class="seccion animatedParent">
            <div class="nos_casamos slowest  animated bounceInDown">Del Novio</div>
        </div>
        <div class="seccion animatedParent">
            <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Iglesia</div>
        </div>
        <!-- PADRINOS DEL NOVIO PADRINOS DEL NOVIO PADRINOS DEL NOVIO PADRINOS DEL NOVIO PADRINOS DEL NOVIO PADRINOS DEL NOVIO PADRINOS DEL NOVIO -->
        <div class="wrap_imagenes_padrinos animatedParent">
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/silvia.jpeg" width="338" alt="" style="left: 0px">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Silvia <br> Mamá</div>
            </div>
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/martin.jpeg" width="450" alt="" style="left: -111px;top: 0%;">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Martin <br> Tío</div>
            </div>
        </div>
        <div class="seccion animatedParent">
            <div class="titulo_nombres slowest  animated bounceInDown" style="font-size: 70px">Civil</div>
        </div>
        <!-- TESTIGOS DEL NOVIO TESTIGOS DEL NOVIO TESTIGOS DEL NOVIO TESTIGOS DEL NOVIO TESTIGOS DEL NOVIO TESTIGOS DEL NOVIO TESTIGOS DEL NOVIO -->
        <div class="wrap_imagenes_padrinos animatedParent">
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/franco.jpeg" width="238" alt="" style="left: -15px;">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Franco <br> Hermano</div>
            </div>
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/flavia.jpeg" width="300" alt="" style=" left: -69px;top: -45%;">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Flavia <br> Hermana</div>
            </div>
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/roberto.jpeg" width="338" alt="">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Roberto <br> Amigo</div>
            </div>
            <div class="slowest  animated bounceInDown" style="display: flex;flex-direction: column">
                <div class="div_foto_padrinx slowest  animated bounceInDown">
                    <img src="<?= $carpeta ?>testigos/gustavo.jpeg" width="400" alt="" style="left: -0px;top: 0%;">
                </div>
                <div class=" texto_padrinx slowest animated bounceInDown">Gustavo <br> Amigo</div>
            </div>
        </div>
    </div>
    <!-- IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO IMAGEN REGALO -->
    <div class="seccion animatedParent imagen_separadora" style="margin-top: 50px;">
        <img class="brindis slowest  animated bounceInDown" src="<?= $carpeta ?>regalo.png" height="133" width="%" alt="">
    </div>
    <!-- ¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?¿Pensaste en regalos?-->
    <div class="seccion animatedParent width_70">
        <div class="titulo_nombres slowest  animated bounceInDown">¿Pensaste en regalos?</div>
        <div class=" slowest  animated bounceInDown ">
            Si desean hacernos un regalo, éste puede ser en 💵, ya que contamos con todo lo necesario para nuestro hogar.
        </div>
    </div>
    <!-- BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS BOTON-REGALOS -->
    <div class="seccion animatedParent">
        <button class="btn btn-como-llegar slowest  animated bounceInDown modalButton" title="Regalos!" value="regalos">
            <i class="fas fa-gifts"></i><span> Regalar!</span>
        </button>
    </div>
    <!-- ¡Te esperamos para compartir!¡Te esperamos para compartir!¡Te esperamos para compartir!¡Te esperamos para compartir!-->
    <div class="seccion seccion_background_gray animatedParent">
        <div class="slowest  animated bounceInDown">
            <div class="titulo_nombres" style="font-size:60px">¡Te esperamos para compartir!</div>
            <button class="btn btn-como-llegar  modalButton" style="margin-top: 30px;" title="Angel y Carla" value="confirmar">
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