<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Trafic */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trafic'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trafic-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('app', 'Trafic').' '. Html::encode($this->title) ?></h2>
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
        [
            'attribute' => 'boda.id',
            'label' => Yii::t('app', 'Id Boda'),
        ],
        [
            'attribute' => 'invitado.nombre',
            'label' => Yii::t('app', 'Id Invitado'),
        ],
        'telefono',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Boda<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnBoda = [
        ['attribute' => 'id', 'visible' => false],
        'id_novio',
        'id_novia',
    ];
    echo DetailView::widget([
        'model' => $model->boda,
        'attributes' => $gridColumnBoda    ]);
    ?>
    <div class="row">
        <h4>Invitado<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnInvitado = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'boda.id',
            'label' => Yii::t('app', 'Id Boda'),
        ],
        'nombre',
        'id_confirmacion',
        'mensaje',
    ];
    echo DetailView::widget([
        'model' => $model->invitado,
        'attributes' => $gridColumnInvitado    ]);
    ?>
</div>
