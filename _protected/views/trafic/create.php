<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trafic */

$this->title = Yii::t('app', 'Create Trafic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trafic'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trafic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
