<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\models\Instancia;
use app\models\InstanciaUser;
use app\models\Torneo;
use app\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Breadcrumbs;

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
    <?php
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($actual_link != "http://www.angelycarla.appe.com.ar/" && !Yii::$app->user->isGuest) {
        echo "<link href='/themes/light/css/backend.css' rel='stylesheet'>";
        //echo '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">';
        echo '<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet" type="text/css">';
    }else{
        echo "<link href='/themes/light/css/beto.css' rel='stylesheet' rel='stylesheet' type='text/css'>"; ?>
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500|Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
                crossorigin="anonymous">
    <?php
    } ?>
    <?php $this->head() ?>
</head>
<?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/themes/light/img/favicon.png'])]); ?>

<body id="id_body" style="background-color: transparent !important;">
    <?php $this->beginBody() ?>
    <div class="wrap" style="">
        <?php
    $nav_sin_log = "";
    if (!Yii::$app->user->isGuest) {
        NavBar::begin([
            'brandLabel' => Yii::t('app', Yii::$app->name),
            //'brandLabel' => '<!--<img src="/themes/light/img/copa_mundo.jpg" />--> ProdeMaster Mundial!',
            //'brandUrl' => '/site/login',
            'options' => [
                'class' => 'navbar-default navbar-fixed-top ',
            ],
        ]);
    }

    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => Yii::t('app', 'Invitados'), 'url' => ['/invitado/index']];
        $menuItems[] = ['label' => Yii::t('app', 'Mesas'), 'url' => ['/mesa/index']];
        $menuItems[] = ['label' => Yii::t('app', 'Trafic'), 'url' => ['/trafic/index']];
        $menuItems[] = [
            'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        //$this->registerCss(".wrap { background: white !important; }");
        $this->registerCss(".navbar-default { height: 50px; background: white !important; }");
        //$this->registerCss(".navbar-collapse { height: auto; background: white !important; }");
        //$this->registerCss(".modal-body { color: black !important; }");
        //$this->registerJs('$($(".big_container div")[0]).css("color","black").css("margin","30px");',View::POS_LOAD,"id_script");
    } ?>
<?php

?>
        <!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
        <div class="">
            <?php echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container" style="display: flex;justify-content: space-around">
            <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?>
                <?= date('Y') ?>
            </p>
            <p class=""><a style="color: black;" target="_blank" href="http://www.appe.com.ar">Desarrollado por Appe
                    Studio</a> </p>
            <!--<p class="pull-right"><?= Yii::powered() ?>
            </p>-->
        </div>
    </footer>

    <?php
// MODAL PARA USARASE EN TODOS LAS VISTAS
Modal::begin([ 'options' => [
    'id' => 'modal','style' => 'color:black',
    'tabindex' => false // important for Select2 to work properly
], 'id' => 'modal', 'header' => '<div class="titulo_nombres">Boda</div>', 'size' => '']);
echo '<div id="modalContent" ></div>';
echo '<div class="alert alert-info resultado hidden" style=""></div>';
Modal::end();
?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
<?php //echo include_once(dirname(__FILE__) . '/../../../pa_antiadblock_1738158.php');
