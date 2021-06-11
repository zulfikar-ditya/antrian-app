<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\Pasien */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Create Pasien', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'jenis_pasien_id',
            'no_bpjs',
            'tgl_lahir',
            //'jenis_kelamin',
            //'alamat',
            //'pendidikan_id',
            //'pekerjaan',
            //'agama_id',
            //'status_pernikahan',
            //'telepon',
            //'tgl_masuk',
            //'tgl_akhir',
            //'token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
