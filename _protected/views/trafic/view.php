<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Trafic */

$this->title = $model->id_trafic;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trafic'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trafic-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('app', 'Trafic').' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
            <?= Html::a(Yii::t('app', 'Save As New'), ['save-as-new', 'id' => $model->id_trafic], ['class' => 'btn btn-info']) ?>            
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_trafic], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_trafic], [
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
        'id_trafic',
        'id_boda',
        'id_invitado',
        'telefono',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>
