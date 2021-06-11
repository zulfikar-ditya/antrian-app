<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RekamMedis */

$this->title = 'Create Rekam Medis';
$this->params['breadcrumbs'][] = ['label' => 'Rekam Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekam-medis-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
