<?php

/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 29/6/2018
 * Time: 19:39
 */

use kartik\form\ActiveForm;
use kartik\helpers\Html;
use kartik\select2\Select2;

?>

<div class="invitado-update" style=" ">

    <div class="titulo_2_black animatedParent" style="margin-bottom: 30px">
        Confirmanos y dejanos un saludo
        <img class="slowest animated slideInLeft" src="/themes/light/img/walteryvaleria/algo.png" height="60">
    </div>
    <?php //$form = ActiveForm::begin(['type' => ActiveForm::TYPE_INLINE, 'options' => ['enctype' => 'multipart/form-data', 'id' => 'id_form_confirmar']]);
    ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'id_form_confirmar']]); ?>

    <div style="display: none">
        <?= $form->field($model, 'id_boda')->widget(\kartik\widgets\Select2::classname(), [
            'data' => \yii\helpers\ArrayHelper::map(\app\models\Boda::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
            'options' => ['placeholder' => 'Choose Boda'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label(false); ?>
    </div>
    <div class="row" style="margin: auto; text-align: center;">
        <div class="wrap_input_confirmacion" style="">
            <?= $form->field($model, 'id')->widget(Select2::classname(), [
                'data' => $invitados,
                'theme' => Select2::THEME_BOOTSTRAP,
                'options' => ['placeholder' => 'Escriba su nombre'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ])->label('Nombre')->error(false); ?>
        </div>
        <div class="wrap_input_confirmacion" style="">
            <?= $form->field($model, 'id_confirmacion')->label('Confirmar Asistencia')->dropDownList(['1' => 'Alli estare!', '2' => 'No podre...']); ?>
        </div>
        <div class="wrap_input_confirmacion" style="">
            <?= $form->field($model, 'mensaje')->textInput() ?>
        </div>
        <div class="wrap_input_confirmacion" style="margin-top: 20px">
            <?= $form->field($model, 'id_comida')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Comida::find()->orderBy('id')->asArray()->all(), 'id', 'nombre'),
                'options' => ['placeholder' => ''],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ])->label('Selecciona su comida'); ?>
        </div>
        <div class="wrap_input_confirmacion" style="">
            <?= Html::submitButton('Confirmar', ['class' => 'btn btn-confirmar']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>