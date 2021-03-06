<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mesa */

$this->title = 'Actualizar Mesa: ' . ' ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Mesa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'id_boda' => $model->id_boda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mesa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
