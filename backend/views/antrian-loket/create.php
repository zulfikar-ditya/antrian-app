<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AntrianLoket */

$this->title = 'Create Antrian Loket';
$this->params['breadcrumbs'][] = ['label' => 'Antrian Lokets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-loket-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
