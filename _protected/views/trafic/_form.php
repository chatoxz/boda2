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
<div style="display: none">
    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'id_boda')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Boda::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Boda')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
</div>
    <?= $form->field($model, 'id_invitado')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Invitado::find()->where(['id_boda' => Yii::$app->user->id])->orderBy('id')->asArray()->all(), 'id', 'nombre'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Invitado')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Invitado '); ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'placeholder' => 'Telefono']) ?>

    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
