<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Poli */

$this->title = 'Create Poli';
$this->params['breadcrumbs'][] = ['label' => 'Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poli-create soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
