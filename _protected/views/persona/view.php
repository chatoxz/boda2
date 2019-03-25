<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Persona'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('app', 'Persona').' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
            <?= Html::a(Yii::t('app', 'Save As New'), ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
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
        'nombre',
        'apellido',
        'celular',
        'email:email',
        'pagina',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerBoda->totalCount){
    $gridColumnBoda = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                            ];
    echo Gridview::widget([
        'dataProvider' => $providerBoda,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-boda']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('app', 'Boda')),
        ],
        'export' => false,
        'columns' => $gridColumnBoda
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerPadrino->totalCount){
    $gridColumnPadrino = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        [
                'attribute' => 'tipo.nombre',
                'label' => Yii::t('app', 'Id Tipo')
            ],
            'titulo',
            'descripcion:ntext',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPadrino,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-padrino']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('app', 'Padrino')),
        ],
        'export' => false,
        'columns' => $gridColumnPadrino
    ]);
}
?>

    </div>
</div>
