<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\InfoKategori */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Info Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-kategori-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Create Info Kategori', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
