<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\JenisPasien */

$this->title = 'Update Jenis Pasien: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-pasien-update soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
