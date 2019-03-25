<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Boda */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Boda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boda-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= 'Boda'.' '. Html::encode($this->title) ?></h2>
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
        [
            'attribute' => 'novio.nombre',
            'label' => 'Id Novio',
        ],
        [
            'attribute' => 'novia.nombre',
            'label' => 'Id Novia',
        ],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Persona<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPersona = [
        ['attribute' => 'id', 'visible' => false],
        'nombre',
        'apellido',
        'celular',
        'email',
        'pagina',
    ];
    echo DetailView::widget([
        'model' => $model->novia,
        'attributes' => $gridColumnPersona    ]);
    ?>
    <div class="row">
        <h4>Persona<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPersona = [
        ['attribute' => 'id', 'visible' => false],
        'nombre',
        'apellido',
        'celular',
        'email',
        'pagina',
    ];
    echo DetailView::widget([
        'model' => $model->novio,
        'attributes' => $gridColumnPersona    ]);
    ?>
    
    <div class="row">
<?php
if($providerCliente->totalCount){
    $gridColumnCliente = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        'nombre',
            'telefono',
            'telefono2',
            'email:email',
            'email2:email',
            'direccion',
            'documento',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerCliente,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-cliente']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Cliente'),
        ],
        'export' => false,
        'columns' => $gridColumnCliente
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerContactoInvitado->totalCount){
    $gridColumnContactoInvitado = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        'mensaje:ntext',
            'nombre',
            'email:email',
            'titulo',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerContactoInvitado,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-contacto-invitado']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Contacto Invitado'),
        ],
        'export' => false,
        'columns' => $gridColumnContactoInvitado
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerFoto->totalCount){
    $gridColumnFoto = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        [
                'attribute' => 'seccion.nombre',
                'label' => 'Id Seccion'
            ],
            'nombre',
            'carpeta',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerFoto,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-foto']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Foto'),
        ],
        'export' => false,
        'columns' => $gridColumnFoto
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerInvitado->totalCount){
    $gridColumnInvitado = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        'nombre',
            'id_confirmacion',
            'mensaje:ntext',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerInvitado,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-invitado']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Invitado'),
        ],
        'export' => false,
        'columns' => $gridColumnInvitado
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerMesa->totalCount){
    $gridColumnMesa = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        'nombre',
            'numero',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerMesa,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-mesa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Mesa'),
        ],
        'export' => false,
        'columns' => $gridColumnMesa
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerRegalo->totalCount){
    $gridColumnRegalo = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        'link',
            'title',
            'descripcion',
            'boton',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerRegalo,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-regalo']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Regalo'),
        ],
        'export' => false,
        'columns' => $gridColumnRegalo
    ]);
}
?>

    </div>
</div>
