<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\JenisPasien */

$this->title = 'Create Jenis Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-pasien-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
