<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AntrianNow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="antrian-now-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'tgl')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'loket_pendaftaran')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'poli_umun')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'poli_gigi')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'poli_kusta')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'poli_kandungan')->textInput() ?>
        </div>
        <div class="col-md-6">
                <?= $form->field($model, 'poli_kb')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'poli_mtbs')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'poli_jiwa')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'poli_lansia')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'imunisasi')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'labolatorium')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'pojok_gizi')->textInput() ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'klinik_sanitasi')->textInput() ?>

        </div>
            </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bg-teal border']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
