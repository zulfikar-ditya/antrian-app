<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pendidikan */

$this->title = 'Update Pendidikan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendidikan-update soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
