<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AntrianPoli */

$this->title = 'Create Antrian Poli';
$this->params['breadcrumbs'][] = ['label' => 'Antrian Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container antrian-poli-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg mt-lg-3">
    <h2><?= $this->title ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
