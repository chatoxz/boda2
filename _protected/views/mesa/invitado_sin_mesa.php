<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\MesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Invitados sin mesa';
?>
<br>
<br>
<br>
<div class="mesa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Mesas', ['mesa/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $gridColumn = [
        [
            'class' => 'yii\grid\SerialColumn',
            'contentOptions' => ['style' => 'width: 20px;'],
        ],
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'nombre',
            'width' => '40%',
        ],
        [
            'attribute' => 'id_confirmacion',
            'width' => '40%',
        ],
        [
            'attribute' => 'mesaInvitado.id_mesa',
            'width' => '40%',
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'mesa-invitado',
            'template' => '{update} {delete}',
            'buttons' => [
                'update' => function ($model,$key,$index) {
                    $url = Url::toRoute(['/mesa-invitado/update','id' => $key->mesaInvitado->id]);
                    return Html::a(
                        '<span style="padding-right: 10px;" class="glyphicon glyphicon-pencil" title="Actualizar invitado"></span>','#',
                        $options = [
                            'class' => 'modalButton',
                            'value' => $url,
                            'title' => 'Actualizar alumno',
                        ]);
                },
                'delete' => function ($model,$key,$index) {
                    $url = Url::toRoute(['/mesa-invitado/delete','id' => $key->mesaInvitado->id]);
                    //$url = $column->createUrl($model, $key, $index, 'delete');
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                        'title' => Yii::t('yii', 'Delete'),
                        'data-confirm' => Yii::t('yii', '¿Está segur@ que desea sacar de la mesa al invitado?'),
                        'data-method' => 'post',
                    ]);
                },
            ],
        ],

    ];
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-mesa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'export' => false,
        // your toolbar can include the additional full export menu
    ]); ?>

</div>
