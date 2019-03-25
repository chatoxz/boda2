<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Boda */

$this->title = 'Save As New Boda: '. ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Boda', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Save As New';
?>
<div class="boda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>