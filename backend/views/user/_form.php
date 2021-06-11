<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$role = \common\models\Role::find()->all();

/* @var $this yii\web\View */
/* @var $model common\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
                <div class="col-md-6">
                <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'role_id')->dropDownList([ArrayHelper::map($role, 'id', 'nama')]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'status')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'created_at')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'updated_at')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'verification_token')->textInput(['maxlength' => true]) ?>

        </div>
            </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bg-teal border']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
