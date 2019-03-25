<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\TipoPadrino */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Padrino', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-padrino-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= 'Tipo Padrino'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
            <?= Html::a('Save As New', ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
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
        'descripcion',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerPadrino->totalCount){
    $gridColumnPadrino = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
            [
                'attribute' => 'persona.nombre',
                'label' => 'Id Persona'
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
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Padrino'),
        ],
        'export' => false,
        'columns' => $gridColumnPadrino
    ]);
}
?>

    </div>
</div>
