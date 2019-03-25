<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RedSocial */

$this->title = 'Update Red Social: ' . ' ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Red Social', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="red-social-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
