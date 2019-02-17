<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trafic */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Trafic',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trafic'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="trafic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
