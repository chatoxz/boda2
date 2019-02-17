<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\TraficSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = Yii::t('app', 'Trafic');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="trafic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Trafic'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        /* [
             'class' => 'kartik\grid\ExpandRowColumn',
             'width' => '50px',
             'value' => function ($model, $key, $index, $column) {
                 return GridView::ROW_COLLAPSED;
             },
             'detail' => function ($model, $key, $index, $column) {
                 return Yii::$app->controller->renderPartial('_expand', ['model' => $model]);
             },
             'headerOptions' => ['class' => 'kartik-sheet-style'],
             'expandOneOnly' => true
         ],
         ['attribute' => 'id', 'visible' => false],
         [
             'attribute' => 'id_boda',
             'label' => Yii::t('app', 'Id Boda'),
             'value' => function($model){
                 return $model->boda->id;
             },
             'filterType' => GridView::FILTER_SELECT2,
             'filter' => \yii\helpers\ArrayHelper::map(\app\models\Boda::find()->asArray()->all(), 'id', 'id'),
             'filterWidgetOptions' => [
                 'pluginOptions' => ['allowClear' => true],
             ],
             'filterInputOptions' => ['placeholder' => 'Boda', 'id' => 'grid-trafic-search-id_boda']
         ],*/
        [
            'attribute' => 'id_invitado',
            'label' => Yii::t('app', 'Invitado'),
            'value' => function($model){
                return $model->invitado->nombre;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Invitado::find()->where(['id_boda' => Yii::$app->user->id])->asArray()->all(), 'id', 'nombre'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Invitado', 'id' => 'grid-trafic-search-id_invitado']
        ],
        'telefono',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => ' {update} {delete}',
            'buttons' => [
                'save-as-new' => function ($url) {
                    return Html::a('<span class="glyphicon glyphicon-copy"></span>', $url, ['title' => 'Save As New']);
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-trafic']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'export' => false,
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumn,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'dropdownOptions' => [
                    'label' => 'Full',
                    'class' => 'btn btn-default',
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false
                ]
            ]) ,
        ],
    ]); ?>

</div>
