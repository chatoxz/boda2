<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\InvitadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Invitado */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use app\models\Invitado;
use app\models\Boda;
use app\models\Confirmacion;
use app\models\Mesa;
use app\models\Comida;

$this->title = 'Invitado';
?>
<div class="invitado-index">

    <h1><?= Html::encode($this->title) ?>
    </h1>
    <?php
    ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);
    ?>
    <div class="row">
        <div class="col-xs-12 col-md-12 wrap_invitados_buttons">
            <?php $url = Url::toRoute(['/invitado/index', 'id_confirmacion' => 3]); ?>
            <a class="btn btn-info" href="<?= $url ?>"><?= "Todos: " . $todos ?></a>
            <?php $url = Url::toRoute(['/invitado/index', 'id_confirmacion' => 0]); ?>
            <a class="btn btn-warning" href="<?= $url ?>"><?= "Sin confirmar: " . $sin_confirmar ?></a>
            <?php $url = Url::toRoute(['/invitado/index', 'id_confirmacion' => 1]); ?>
            <a class="btn btn-success" href="<?= $url ?>"><?= "Confirmados: " . $confirmados ?></a>
            <?php $url = Url::toRoute(['/invitado/index', 'id_confirmacion' => 2]); ?>
            <a class="btn btn-danger" href="<?= $url ?>"> <?= "No asistiran: " . $no_iran ?> </a>
            <?php $url = Url::toRoute(['/invitado/index', 'id_confirmacion' => 3, 'id_despues_doce' => 1]); ?>
            <a class="btn btn-primary" href="<?= $url ?>"> <?= "Despues de doce: " . $despues_doce ?> </a>
            <?php $url = Url::toRoute(['invitado/create']); ?>
            <?= Html::button('Agregar Invitado', ['value' => $url, 'class' => 'btn btn-success modalButton']) ?>
        </div>
        <!--<?php //echo Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button'])
            ?>-->
    </div>
    <div class="clearfix"></div>
    <?php

    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        //['attribute' => 'id', 'visible' => false],
        /*[

            ],*/
        //'nombre',
        [
            'attribute' => 'id',
            'label' => 'Nombre',
            'value' => function ($model) {
                return $model->nombre;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(
                Invitado::find()->where([
                    'id_boda' => Yii::$app->user->id
                ])->asArray()->all(),
                'id',
                'nombre'
            ),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Confirmacion', 'id' => 'grid-invitado-search-nombre']
        ],
        [
            'attribute' => 'id_confirmacion',
            'label' => 'Confirmacion',
            'value' => function ($model) {
                return $model->confirmacion->nombre;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(Confirmacion::find()->asArray()->all(), 'id', 'nombre'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Confirmacion', 'id' => 'grid-invitado-search-id_confirmacion']
        ],
        [
            'attribute' => 'mesa_nombre',
            'label' => 'Mesa',
            'value' => function ($model) {
                if ($model->mesaInvitado) {
                    return $model->mesaInvitado->mesa->nombre;
                } else {
                    return 'Sin mesa';
                }
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(Mesa::find()
                ->where(['id_boda' => Yii::$app->user->id])->asArray()->all(), 'id', 'nombre'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Mesa', 'id' => 'grid-invitado-search-mesa_nombre']
        ],
        [
            'attribute' => 'despues_doce',
            'label' => 'Despues de 12',
            'value' => function ($model) {
                return $model->despues_doce == 0 ? 'No' : 'Si';
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ['0' => 'No', '1' => 'Si'],
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Despues de doce', 'id' => 'grid-invitado-search-despues_doce']
        ],
        'mensaje:ntext',
        [
            'attribute' => 'id_comida',
            'label' => 'Comida',
            'value' => function ($model) {
                return $model->comida ? $model->comida->nombre : '';
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(Comida::find()->asArray()->all(), 'id', 'nombre'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Tipo de menú', 'id' => 'grid-invitado-search-id_comida']
        ],
        //'comida_comentario:ntext',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{update} {delete}',
        ],
    ];
    ?>
    <?php
    if (Yii::$app->user->id == 1) {
        $gridColumnsAdmin = [
            'id', [
                'attribute' => 'id_boda',
                'label' => 'Id Boda',
                'value' => function ($model) {
                    return $model->boda->id;
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => ArrayHelper::map(Boda::find()->asArray()->all(), 'id', 'id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Boda', 'id' => 'grid-invitado-search-id_boda']
            ],
        ];
        $gridColumn = array_merge($gridColumnsAdmin, $gridColumn);
    }
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'id_gridview']],
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
            ]),
        ],
    ]); ?>

</div>