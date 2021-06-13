<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Resend verification email';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row justify-content-center align-items-center mt-5" style="min-height: 100vh;">
    <div class="col-md-5">
        <div class="card bg-white shadow-lg px-5 py-lg-2 border border-teal">
            <h3 class="fw-light text-center"><?= Html::encode($this->title) ?></h3>
            <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

            <div class="d-flex justify-content-center">
                <?= Html::submitButton('Send', ['class' => 'btn bg-teal border border-white text-white']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
