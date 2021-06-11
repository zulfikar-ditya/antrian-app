<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-sm-12 col-lg-9 align-self-center rounded-sm-2 shadow-lg p-lg-3 text-center text-white border border-white" style="background: linear-gradient(150deg, var(--indigo), var(--cyan), var(--purple) )">
            <h1 class="display-1 text-white mb-lg-3" style="font-weight: 500!important; letter-spacing: 5px;">Opps!!!</h1>
            <h1 class="text-white"><?= Html::encode($this->title) ?></h1>
        
            <div class="my-md-3">
                <p class="fs-4">
                    <?= nl2br(Html::encode($message)) ?>
                </p>
            </div>
        </div>
    </div>


</div>
