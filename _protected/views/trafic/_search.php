<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TraficSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-trafic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_trafic')->textInput(['placeholder' => 'Id Trafic']) ?>

    <?= $form->field($model, 'id_boda')->textInput(['placeholder' => 'Id Boda']) ?>

    <?= $form->field($model, 'id_invitado')->textInput(['maxlength' => true, 'placeholder' => 'Id Invitado']) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'placeholder' => 'Telefono']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
