<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Boda */

$this->title = 'Create Boda';
$this->params['breadcrumbs'][] = ['label' => 'Boda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
