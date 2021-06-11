<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RekamMedis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekam-medis-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
                <div class="col-md-6">
                <?= $form->field($model, 'tgl_periksa')->textInput(['type' => 'date']) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'pasien_id')->textInput(['type' => 'number']) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'anamnesa')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'terapi')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'askep')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'kie')->textInput(['maxlength' => true]) ?>

        </div>
            </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bg-teal border']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
