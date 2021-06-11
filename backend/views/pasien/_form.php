<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
                <div class="col-md-6">
                <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'jenis_pasien_id')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'no_bpjs')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'tgl_lahir')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'jenis_kelamin')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'pendidikan_id')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'agama_id')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'status_pernikahan')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'telepon')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'tgl_masuk')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'tgl_akhir')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'token')->textInput(['maxlength' => true]) ?>

        </div>
            </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bg-teal border']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
