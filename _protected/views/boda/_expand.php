<?php
use yii\helpers\Html;
use kartik\tabs\TabsX;
use yii\helpers\Url;
$items = [
    [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Boda'),
        'content' => $this->render('_detail', [
            'model' => $model,
        ]),
    ],
                [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Foto'),
        'content' => $this->render('_dataFoto', [
            'model' => $model,
            'row' => $model->fotos,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Invitado'),
        'content' => $this->render('_dataInvitado', [
            'model' => $model,
            'row' => $model->invitados,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Mesa'),
        'content' => $this->render('_dataMesa', [
            'model' => $model,
            'row' => $model->mesas,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Regalo'),
        'content' => $this->render('_dataRegalo', [
            'model' => $model,
            'row' => $model->regalos,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Trafic'),
        'content' => $this->render('_dataTrafic', [
            'model' => $model,
            'row' => $model->trafics,
        ]),
    ],
    ];
echo TabsX::widget([
    'items' => $items,
    'position' => TabsX::POS_ABOVE,
    'encodeLabels' => false,
    'class' => 'tes',
    'pluginOptions' => [
        'bordered' => true,
        'sideways' => true,
        'enableCache' => false
    ],
]);
?>
