<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

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
    <link href='/themes/light/css/walteryvaleria.css' rel='stylesheet' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <?php $this->registerJsFile('@web/themes/light/js/timer.js', ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <?php $this->registerJsFile('@web/themes/light/js/css3-animate-it-min.js', ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <?php $this->head() ?>
</head>
<?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/themes/light/img/favicon.png'])]); ?>
<?php $this->registerCss(".navbar-default { height: 50px; background: white !important; }"); ?>

<body id="id_body">
    <?php $this->beginBody() ?>
    <?php
    if (!Yii::$app->user->isGuest) {
        NavBar::begin([
            'brandLabel' => Yii::t('app', Yii::$app->name),
            //'brandLabel' => '<!--<img src="/themes/light/img/copa_mundo.jpg" />--> ProdeMaster Mundial!',
            //'brandUrl' => '/site/login',
            'options' => [
                'class' => 'navbar-default navbar-fixed-top ',
            ],
        ]);

        $menuItems[] = ['label' => Yii::t('app', 'Administracion'), 'url' => ['/invitado/index']];
        $subMenuItemsUsuario[] = [
            'label' => Yii::t('app', 'Logout') . ' (' . Yii::$app->user->identity->username . ')',
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
    } ?>

    <div class="wrap_contenido_pagina">
        <?= $content ?>
    </div>
    <!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
    <footer class="footer">
        <div class="container" style="font-size: 28px">
            <p class="pull-left">
                &copy; <?= Yii::t('app', Yii::$app->name) ?>
                <?= date('Y') ?>
            </p>
            <p class=""><a style="color: black;" target="_blank" href="http://www.appe.com.ar">Desarrollado por Appe
                    Studio</a> </p>
            <!--<p class="pull-right">
                <?php //echo Yii::powered()
                ?>
            </p>-->
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