<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AntrianPoli */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Antrian Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container antrian-poli-view soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg mt-lg-3">
    <h2><?= $this->title ?></h2>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn bg-teal border']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'urutan',
            'tgl_antrian',
            'pasien_id',
            'poli_id',
            'perkiraan_waktu',
            'status',
        ],
    ]) ?>

</div>
