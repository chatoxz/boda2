<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comida */

$this->title = 'Crear Comida';
/*$this->params['breadcrumbs'][] = ['label' => 'Comida', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="comida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>