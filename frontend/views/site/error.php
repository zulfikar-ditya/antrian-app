<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<style>
    .row .col-md-8 .card {
        background: linear-gradient(to top left, var(--teal), var(--indigo));
    }
</style>
<div class="site-error">
    
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-8 p-2">
            <div class="card shadow-lg border border-white p-lg-3 rounded-sm-2 text-white text-center">
                <h1 class="display-3 fw-bold"><?= Html::encode($this->title) ?></h1>
                <div class="my-5">
                    <div class="alert bg-rose border border-white">
                        <span class="fw-light fs-5">
                            <?= nl2br(Html::encode($message)) ?>
                        </span>
                    </div>
                </div>
            
                <p>
                    The above error occurred while the Web server was processing your request.
                </p>
                <p>
                    Please contact us if you think this is a server error. Thank you.
                </p>
            </div>
        </div>
    </div>


</div>
