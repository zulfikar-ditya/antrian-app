<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Query\AntrianNow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="antrian-now-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tgl') ?>

    <?= $form->field($model, 'loket_pendaftaran') ?>

    <?= $form->field($model, 'poli_umun') ?>

    <?= $form->field($model, 'poli_gigi') ?>

    <?php // echo $form->field($model, 'poli_kusta') ?>

    <?php // echo $form->field($model, 'poli_kandungan') ?>

    <?php // echo $form->field($model, 'poli_kb') ?>

    <?php // echo $form->field($model, 'poli_mtbs') ?>

    <?php // echo $form->field($model, 'poli_jiwa') ?>

    <?php // echo $form->field($model, 'poli_lansia') ?>

    <?php // echo $form->field($model, 'imunisasi') ?>

    <?php // echo $form->field($model, 'labolatorium') ?>

    <?php // echo $form->field($model, 'pojok_gizi') ?>

    <?php // echo $form->field($model, 'klinik_sanitasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
