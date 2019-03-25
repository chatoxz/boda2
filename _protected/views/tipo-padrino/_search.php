<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoPadrinoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-tipo-padrino-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'placeholder' => 'Nombre']) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true, 'placeholder' => 'Descripcion']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
