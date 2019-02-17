<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trafic */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="trafic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id_trafic')->textInput(['placeholder' => 'Id Trafic']) ?>

    <?= $form->field($model, 'id_boda')->textInput(['placeholder' => 'Id Boda']) ?>

    <?= $form->field($model, 'id_invitado')->textInput(['maxlength' => true, 'placeholder' => 'Id Invitado']) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'placeholder' => 'Telefono']) ?>

    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'create'): ?>
        <?= Html::submitButton(Yii::t('app', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
