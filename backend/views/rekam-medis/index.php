<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\RekamMedis */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Rekam Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekam-medis-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Create Rekam Medis', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tgl_periksa',
            'pasien_id',
            'anamnesa',
            'diagnosa',
            //'terapi',
            //'askep',
            //'kie',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
