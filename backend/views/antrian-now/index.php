<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\AntrianNow */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Antrian Nows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-now-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Create Antrian Now', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tgl',
            'loket_pendaftaran',
            'poli_umun',
            'poli_gigi',
            //'poli_kusta',
            //'poli_kandungan',
            //'poli_kb',
            //'poli_mtbs',
            //'poli_jiwa',
            //'poli_lansia',
            //'imunisasi',
            //'labolatorium',
            //'pojok_gizi',
            //'klinik_sanitasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
