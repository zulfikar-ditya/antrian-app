<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pasien */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

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
            'nama',
            'jenis_pasien_id',
            'no_bpjs',
            'tgl_lahir',
            'jenis_kelamin',
            'alamat',
            'pendidikan_id',
            'pekerjaan',
            'agama_id',
            'status_pernikahan',
            'telepon',
            'tgl_masuk',
            'tgl_akhir',
            'token',
        ],
    ]) ?>

</div>
