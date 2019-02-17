<?php
/**
 * Created by PhpStorm.
 * User: carre
 * Date: 16/2/2019
 * Time: 22:32
 */

use kartik\form\ActiveForm;
use kartik\helpers\Html;
use kartik\select2\Select2;
?>

<div class="invitado-update" style=" ">

    <div class="nos_casamos" style="font-size: 26px;" > Confirmanos si queres venir en trafic! </div>


    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_INLINE,'options' => ['enctype' => 'multipart/form-data', 'id' => 'id_form_confirmar']]); ?>

    <div style="display: none">
        <?= $form->field($model, 'id_boda')->widget(\kartik\widgets\Select2::classname(), [
            'data' => \yii\helpers\ArrayHelper::map(\app\models\Boda::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
            'options' => ['placeholder' => 'Choose Boda'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label(false); ?>
    </div>
    <div class="form-group" style="display: flex; justify-content: space-around;flex-wrap: wrap">
        <div style="padding: 0px !important;" >
            <?= $form->field($model, 'id')->widget(Select2::classname(), [
                'data' => $invitados,
                'theme' => Select2::THEME_BOOTSTRAP,
                'options' => ['placeholder' => 'Escriba su nombre'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ])->label('Nombre')->error(false); ?>
        </div>
       <!-- <div style="padding: 0px !important;">
            <?php //echo $form->field($model, 'id_confirmacion')->label('Confirmar Asistencia')->dropDownList(['1' => 'Alli estare!', '2' => 'No podre...']); ?>
        </div>-->
        <div style="padding: 0px !important;">
            <?= $form->field($model, 'mensaje',['autoPlaceholder' => false ])->textInput(['placeholder' => 'Dejanos tu Telefono!']); ?>
        </div>
        <div style="padding: 0px !important;">
            <?= Html::submitButton('Confirmar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
