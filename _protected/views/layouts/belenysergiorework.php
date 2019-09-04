<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="shortcut icon" href="/themes/light/img/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?>
    </title>
    <link href='/themes/light/css/common.css' rel='stylesheet'>
    <link href='/themes/light/css/belenysergio.css' rel='stylesheet' rel='stylesheet' type='text/css'>
    <!--<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500|Rubik" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php //SETEAR LA FECHA Y HORA DEL CASAMIENTO PARA EL TIMER 
    ?>
    <?php $this->registerJs("var d = new Date();var countDownDate = new Date('May 04, '+d.getFullYear()+' 20:45:00').getTime();", View::POS_HEAD); ?>
    <?php $this->registerJsFile('@web/themes/light/js/timer.js', ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <?php $this->registerJsFile('@web/themes/light/js/css3-animate-it-min.js', ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cbf66bdc7f6b60012eed9e6&product=inline-share-buttons' async='async'></script>

    <?php $this->head() ?>
</head>
<?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/themes/light/img/favicon.png'])]); ?>

<body id="id_body">
    <?php $this->beginBody() ?>
    <?php
    /* if (!Yii::$app->user->isGuest) {
        NavBar::begin([
            'brandLabel' => Yii::t('app', Yii::$app->name),
            //'brandLabel' => '<!--<img src="/themes/light/img/copa_mundo.jpg" />--> ProdeMaster Mundial!',
            //'brandUrl' => '/site/login',
            'options' => [ 'class' => 'navbar-default navbar-fixed-top ', ],
        ]);

        $menuItems[] = ['label' => Yii::t('app', 'Administracion'), 'url' => ['/invitado/index']];
        $subMenuItemsUsuario[] = [
            'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
        $subMenuItemsUsuario[] = ['label' => 'Cambiar contraseña', 'url' => ['/user/update', 'id' => Yii::$app->user->id]];
        $menuItems[] = [
            'class' => '',
            'label' => 'Usuario',
            'items' => $subMenuItemsUsuario
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
    } */ ?>
    <div id="top_site"></div>
    <div class="fix_nav_bar" style="">
        <div class="wrap_nav_items">
            <a id="nombre_pareja" href="#inicio">Belen y Sergio</a>
            <?php if (!Yii::$app->user->isGuest) { ?>
                <a href="/invitado/index">Administración</a>
            <?php } ?>
            <a href="#id_ceremonia">Ceremonia</a>
            <a href="#id_fiesta">Fiesta</a>
            <a href="#id_regalos">Regalos</a>
            <a href="#id_confirmar">Confirmar</a>
            <a href="#id_calendario">Calendario</a>
            <a id="boton_compartir" href="#">Compartir</a>
            <div class="compartir">
                <div class="sharethis-inline-share-buttons "></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <? php //contenido de la pagina
    ?>
    <div class="wrap_contenido_pagina" id="inicio">

        <?php //echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) 
        ?>
        <?php //Alert::widget() 
        ?>
        <?= $content ?>
    </div>
    <!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
    <footer class="footer">
        <div class="container" style="">
            <p class="pull-left">Belen y Sergio</p>
            <p class="">
                <a style="margin-left: 15px;color: white;" target="_blank" href="http://www.appe.com.ar">By AppE Studio</a>
            </p>
            <!--<p class="pull-right"><?= Yii::powered() ?> </p>-->
        </div>
    </footer>

    <?php
    // MODAL PARA USARASE EN TODOS LAS VISTAS
    Modal::begin(['options' => [
        'id' => 'modal', 'style' => 'color:black',
        'tabindex' => false // important for Select2 to work properly
    ], 'id' => 'modal', 'header' => '<div class="titulo_nombres titulo_modal">Boda</div>', 'size' => '']);
    echo '<div id="modalContent" ></div>';
    echo '<div class="alert alert-info resultado hidden" style=""></div>';
    Modal::end();
    ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>