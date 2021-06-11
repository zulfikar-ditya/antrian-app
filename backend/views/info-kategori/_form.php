<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\InfoKategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-kategori-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
                <div class="col-md-6">
                <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        </div>
            </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bg-teal border']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
