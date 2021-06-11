<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Query\AntrianPoli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="antrian-poli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'urutan') ?>

    <?= $form->field($model, 'tgl_antrian') ?>

    <?= $form->field($model, 'pasien_id') ?>

    <?= $form->field($model, 'poli_id') ?>

    <?php // echo $form->field($model, 'perkiraan_waktu') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
