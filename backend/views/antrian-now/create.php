<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AntrianNow */

$this->title = 'Create Antrian Now';
$this->params['breadcrumbs'][] = ['label' => 'Antrian Nows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-now-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
