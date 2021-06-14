<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Antrian Polis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container antrian-poli-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg mt-lg-3">
    <h2><?= $this->title ?></h2>

    <p>
        <?= Html::a('Create Antrian Poli', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'urutan',
            'tgl_antrian',
            // 'pasien_id',
            // 'poli_id',
            //'perkiraan_waktu',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
