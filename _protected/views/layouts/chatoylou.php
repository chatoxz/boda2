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
    <title><?= Html::encode($this->title) ?></title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/themes/light/img/favicon.png'])]); ?>

<body id="id_body">
    <?php $this->beginBody() ?>
    <div class="wrap">
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
        // everyone can see Home page
        //$menuItems[] = ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']];

        // we do not need to display About and Contact pages to employee+ roles
        if (!Yii::$app->user->can('default')) { }

        // USUARIO COMUN USUARIO COMUN USUARIO COMUN USUARIO COMUN USUARIO COMUN USUARIO COMUN USUARIO COMUN
        if (!Yii::$app->user->isGuest) {
            //$menuItems[] = ['label' => (DATE('H')-3).":".DATE('i'), 'options'=>['class'=>'hora' ]];
            //$menuItems[] = ['label' => Yii::t('app', 'Reglas'), 'url' => ['/partido/reglas']];
            /*$menuItems[] = '<li><a value="/partido/reglas" class="modalReglas"
                    style="cursor: pointer;" title="Reglas" size="modal-lg" href="#">Reglas</a></li>';
       */ }

        // ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN
        /*if (Yii::$app->user->can('admin')){
        //calcular puntos
        $subMenuAdmin[] = ['label' => Yii::t('app', 'Copas'), 'url' => ['/torneo/index']];
        $url = Url::toRoute(['/instancia/admin_torneo', 'id_user' => Yii::$app->user->id]);
        $subMenuAdmin[] = ['label' => Yii::t('app', 'Mis Torneos'), 'url' => $url];
        $menuItems[] =[
            'class' => '',
            'label' => 'Admin',
            'items' => $subMenuAdmin
        ];
    }*/

        // LOGIN SIGNUP LOGIN SIGNUP LOGIN SIGNUP LOGIN SIGNUP LOGIN SIGNUP LOGIN SIGNUP LOGIN SIGNUP LOGIN SIGNUP
        /* if (Yii::$app->user->isGuest) {
         $menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
         $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
     }*/

        if (!Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => Yii::t('app', 'Invitados'), 'url' => ['/invitado/index']];
            $menuItems[] = ['label' => Yii::t('app', 'Mesas'), 'url' => ['/mesa/index']];
            $menuItems[] = [
                'label' => Yii::t('app', 'Logout') . ' (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            $this->registerCss(".wrap { background: white !important; }");
            $this->registerCss(".navbar-default { height: 50px; background: white !important; }");
            //$this->registerCss(".navbar-collapse { height: auto; background: white !important; }");
            $this->registerCss(".modal-body { color: black !important; }");
            //$this->registerJs('$($(".big_container div")[0]).css("color","black").css("margin","30px");',View::POS_LOAD,"id_script");
        } ?>

        <!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
        <div class="container-fluid big_container">
            <?php echo Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer" style="color: #3899ea;font-size: 16px">
        <div class="container" style="display: flex;justify-content: space-around">
            <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class=""><a style="color: #3899ea;" target="_blank" href="http://www.appe.com.ar">Desarrollado por Appe Studio</a> </p>
            <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
        </div>
    </footer>

    <?php
    // MODAL PARA USARASE EN TODOS LAS VISTAS
    Modal::begin(['options' => [
        'id' => 'modal', 'style' => 'color:black',
        'tabindex' => false // important for Select2 to work properly
    ], 'id' => 'modal', 'header' => '<h2>Boda</h2>', 'size' => '']);
    echo '<div id="modalContent" ></div>';
    echo '<div class="alert alert-info resultado hidden" style="margin: 10px 30px;"></div>';
    Modal::end();
    ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
<?php //echo include_once(dirname(__FILE__) . '/../../../pa_antiadblock_1738158.php'); 
?>