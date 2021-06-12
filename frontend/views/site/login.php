<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login mt-5">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-5">
            <div class="card bg-white shadow-lg px-5 py-lg-2 border border-teal">
                <h3 class="fw-light text-center"><?= Html::encode($this->title) ?></h3>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <div class="my-lg-1">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                
                        <?= $form->field($model, 'password')->passwordInput() ?>
                
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </div>
            
                    <div style="color:#999;margin:1em 0" class="text-center mb-3">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        <br>
                        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                    </div>
            
                    <div class="d-flex justify-content-center">
                        <?= Html::submitButton('Login', ['class' => 'btn bg-teal', 'name' => 'login-button']) ?>
                    </div>
            
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
        </div>
    </div>
</div>
