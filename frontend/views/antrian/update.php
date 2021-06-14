<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AntrianPoli */

$this->title = 'Update Antrian Poli: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Antrian Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container antrian-poli-update soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg mt-lg-3">
    <h2><?= $this->title ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
