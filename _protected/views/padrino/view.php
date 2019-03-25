<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Padrino */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Padrino', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="padrino-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= 'Padrino'.' '. Html::encode($this->title) ?></h2>
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
            'attribute' => 'persona.nombre',
            'label' => 'Id Persona',
        ],
        [
            'attribute' => 'tipo.nombre',
            'label' => 'Id Tipo',
        ],
        'titulo',
        'descripcion:ntext',
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
        'model' => $model->persona,
        'attributes' => $gridColumnPersona    ]);
    ?>
    <div class="row">
        <h4>TipoPadrino<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnTipoPadrino = [
        ['attribute' => 'id', 'visible' => false],
        'nombre',
        'descripcion:ntext',
    ];
    echo DetailView::widget([
        'model' => $model->tipo,
        'attributes' => $gridColumnTipoPadrino    ]);
    ?>
</div>
