<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Query\RekamMedis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekam-medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tgl_periksa') ?>

    <?= $form->field($model, 'pasien_id') ?>

    <?= $form->field($model, 'anamnesa') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'terapi') ?>

    <?php // echo $form->field($model, 'askep') ?>

    <?php // echo $form->field($model, 'kie') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
