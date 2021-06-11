<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Role */

$this->title = 'Update Role: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="role-update soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
