<?php

use yii\helpers\Html;
//use kartick\widgets\ActiveForm;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Invitado */
/* @var $form kartik\widgets\ActiveForm */

?>

<div class="invitado-form">


    <?php //var_dump($model) ;?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'id_form']]); ?>

    <div style="display: none">
        <?= $form->errorSummary($model); ?>
        <?= $form->field($model, 'id')->textInput() ?>
        <?= $form->field($model, 'id_boda')->textInput() ?>
    </div>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'placeholder' => 'Nombre']) ?>

    <?= $form->field($model, 'id_confirmacion')->label('Confirmacion')->dropDownList(['0' => 'Sin confirmar', '1' => 'Confirmar', '2' => 'No asistira']); ?>

    <?= $form->field($model, 'mensaje')->textarea(['rows' => 2]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
