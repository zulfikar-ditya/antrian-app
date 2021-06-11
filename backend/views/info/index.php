<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\Info */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Create Info', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'info_kategori_id',
            'judul',
            'detail_1:ntext',
            'detail_2:ntext',
            //'gambar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
