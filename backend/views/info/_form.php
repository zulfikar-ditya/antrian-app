<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$infoKategori = \common\models\InfoKategori::find()->all();
/* @var $this yii\web\View */
/* @var $model common\models\Info */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-form">
    <?php $form = ActiveForm::begin(['options' => [
            'enctype' => 'multipart/form-data'
    ]]); ?>
    <div class="row">
                <div class="col-md-6">
                <?= $form->field($model, 'info_kategori_id')->dropDownList([ArrayHelper::map($infoKategori, 'id', 'nama')]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'detail_1')->textarea(['rows' => 6]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'detail_2')->textarea(['rows' => 6]) ?>

        </div>
                <div class="col-md-6">
                <?= $form->field($model, 'gambar')->fileInput(['maxlength' => true]) ?>

        </div>
            </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bg-teal border']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
