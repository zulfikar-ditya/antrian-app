<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\AntrianLoket */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Antrian Lokets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-loket-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Create Antrian Loket', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'urutan',
            'tgl_antrian',
            'pasien_id',
            'poli_id',
            //'perkiraan_waktu',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
