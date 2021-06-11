<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="info-view soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

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
            'info_kategori_id',
            'judul',
            'detail_1:ntext',
            'detail_2:ntext',
            'gambar',
        ],
    ]) ?>

</div>
