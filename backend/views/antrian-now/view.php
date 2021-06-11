<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AntrianNow */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Antrian Nows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="antrian-now-view soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn bg-teal border']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn bg-rose border',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tgl',
            'loket_pendaftaran',
            'poli_umun',
            'poli_gigi',
            'poli_kusta',
            'poli_kandungan',
            'poli_kb',
            'poli_mtbs',
            'poli_jiwa',
            'poli_lansia',
            'imunisasi',
            'labolatorium',
            'pojok_gizi',
            'klinik_sanitasi',
        ],
    ]) ?>

</div>
