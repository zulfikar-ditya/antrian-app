<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Role */

$this->title = 'Create Role';
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
