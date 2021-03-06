<?php
use app\rbac\models\AuthItem;
use kartik\password\PasswordInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $user app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="user-form">
    <?php $form = ActiveForm::begin(['id' => 'form-user']); ?>

    <?= $form->field($user, 'username')->textInput(
        ['placeholder' => Yii::t('app', 'Crear username'), 'autofocus' => true]) ?>

    <?= $form->field($user, 'email')->input('email', ['placeholder' => Yii::t('app', 'Enter e-mail')]) ?>

    <?php if ($user->scenario === 'create'): ?>

        <?= $form->field($user, 'password')->widget(PasswordInput::classname(),
            ['options' => ['placeholder' => Yii::t('app', 'Crear password')]]) ?>

    <?php else: ?>

        <?= $form->field($user, 'password')->widget(PasswordInput::classname(),
            ['options' => ['placeholder' => Yii::t('app', 'Change password ( if you want )')]]) ?>

    <?php endif ?>

    <?php
    $rol = \app\rbac\models\Role::findOne(['user_id' => Yii::$app->user->id]);
    //if($user->getRole()->all()[0]['item_name'] == 'theCreator'){
    if($rol->item_name == 'theCreator'){ ?>
        <div class="row">
            <div class="col-md-6">

                <?= $form->field($user, 'status')->dropDownList($user->statusList) ?>

                <?php foreach (AuthItem::getRoles() as $item_name): ?>
                    <?php $roles[$item_name->name] = $item_name->name ?>
                <?php endforeach ?>
                <?= $form->field($user, 'item_name')->dropDownList($roles) ?>

            </div>
        </div>
    <?php } ?>
    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? Yii::t('app', 'Create')
            : Yii::t('app', 'Update'), ['class' => $user->isNewRecord
            ? 'btn btn-success' : 'btn btn-primary']) ?>

        <?= Html::a(Yii::t('app', 'Cancel'), ['user/index'], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
