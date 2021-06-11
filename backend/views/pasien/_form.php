<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$jenisPasien = \common\models\JenisPasien::find()->all();
$pendidikan = \common\models\Pendidikan::find()->all();
$agama = \common\models\Agama::find()->all();
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
                <?= $form->field($model, 'jenis_pasien_id')->dropDownList([ArrayHelper::map($jenisPasien, 'id', 'nama')]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'no_bpjs')->textInput(['type' => 'number']) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'tgl_lahir')->textInput(['type' => 'date']) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'jenis_kelamin')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'pendidikan_id')->dropDownList([ArrayHelper::map($pendidikan, 'id', 'nama')]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'agama')->dropDownList([ArrayHelper::map($agama, 'id', 'nama')]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'status_pernikahan')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'telepon')->textInput(['type' => 'number']) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'tgl_masuk')->textInput(['type' => 'date']) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'tgl_akhir')->textInput(['type' => 'date']) ?>

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
