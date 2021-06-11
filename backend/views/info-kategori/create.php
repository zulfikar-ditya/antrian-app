<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\InfoKategori */

$this->title = 'Create Info Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Info Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-kategori-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
