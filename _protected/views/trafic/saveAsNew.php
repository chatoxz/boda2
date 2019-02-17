<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trafic */

$this->title = Yii::t('app', 'Save As New {modelClass}: ', [
    'modelClass' => 'Trafic',
]). ' ' . $model->id_trafic;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trafic'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_trafic, 'url' => ['view', 'id' => $model->id_trafic]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Save As New');
?>
<div class="trafic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
