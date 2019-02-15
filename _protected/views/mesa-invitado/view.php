<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\MesaInvitado */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mesa Invitado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mesa-invitado-view">
    <div class="row">
        <div class="col-sm-8">
            <h2><?= 'Mesa Invitado'.' '. Html::encode($this->title) ?>
            </h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
            <!--<?= Html::a('Guardar como nuevo', ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>-->
            <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => '¿Está seguro de eliminar este elemento?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
        <?php
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'mesa.nombre',
            'label' => ' Mesa',
        ],
        [
            'attribute' => 'invitado.nombre',
            'label' => ' Invitado',
        ],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); ?>
    <?php /*
    </div>
    <div class="row">
        <h4>Invitado
        </h4>
    </div>
    <?php
    $gridColumnInvitado = [
        [
        'attribute' => 'id', 'visible' => false],
        //'id_boda',
        'nombre',
        'confirmacion.nombre',
        'mensaje',
    ];
    echo DetailView::widget([
        'model' => $model->invitado,
        'attributes' => $gridColumnInvitado    ]);
    ?>
    <div class="row">
        <h4>Mesa
        </h4>
    </div>
    <?php
    $gridColumnMesa = [
        ['attribute' => 'id', 'visible' => false],
        'id_boda',
        'nombre',
        'numero',
    ];
    echo DetailView::widget([
        'model' => $model->mesa,
        'attributes' => $gridColumnMesa    ]);
    ?>
</div>
      */ ?>
