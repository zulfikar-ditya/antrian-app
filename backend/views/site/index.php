<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$user = \common\models\Users::find()->count();
$pasien = \common\models\Pasien::find()->count();
$poli = \common\models\Poli::find()->count();

$this->title = 'Dashboard';
?>

<?php 
if (Yii::$app->user->identity->role_id == 1) { ?>
<div class="bg-white shadow rounded-sm-2 p-md-1">
    <div class="row justify-content-center">
        <div class="col-md-4 p-3">
            <div class="card shadow rounded-sm-2 p-3 border border-cyan">
                <div class="card-body">
                    <div class="text-center">
                        <i data-feather="users" class="soft-bg-rose rounded-circle shadow text-rose p-2 border border-rose" style="width: 90px; height: 90px"></i>
                        <div class="my-4">
                            <h3 class="mb-0">Users</h3>
                            <span class="mb-0 text-gray"><?= $user ?></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <?= Html::a('Create', ['user/create'], $options = ['class' => 'btn btn-block bg-rose text-white border-white']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card shadow rounded-sm-2 p-3 border border-emarald">
                <div class="card-body">
                    <div class="text-center">
                        <i data-feather="users" class="soft-bg-emarald rounded-circle shadow text-emarald p-2 border border-emarald" style="width: 90px; height: 90px"></i>
                        <div class="my-4">
                            <h3 class="mb-0">Pasien</h3>
                            <span class="mb-0 text-gray"><?= $pasien ?></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <?= Html::a('Create', ['pasien/create'], $options = ['class' => 'btn btn-block bg-emarald text-white border-white']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card shadow rounded-sm-2 p-3 border border-amber">
                <div class="card-body">
                    <div class="text-center">
                        <i data-feather="users" class="soft-bg-amber rounded-circle shadow text-amber p-2 border border-amber" style="width: 90px; height: 90px"></i>
                        <div class="my-4">
                            <h3 class="mb-0">Poli</h3>
                            <span class="mb-0 text-gray"><?= $poli?></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <?= Html::a('Create', ['poli/create'], $options = ['class' => 'btn btn-block bg-amber text-white border-white']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php } ?>
    <?php 
    if (Yii::$app->user->identity->role_id == 2) { ?>
        <div class="bg-white shadow rounded-sm-2 p-md-1">
            <div class="row justify-content-center">
                <div class="col-md-4 p-3">
                    <div class="card shadow rounded-sm-2 p-3 border border-cyan">
                        <div class="card-body">
                            <div class="text-center">
                                <i data-feather="users" class="soft-bg-rose rounded-circle shadow text-rose p-2 border border-rose" style="width: 90px; height: 90px"></i>
                                <div class="my-4">
                                    <h3 class="mb-0">Users</h3>
                                    <span class="mb-0 text-gray"><?= $user ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <?= Html::a('Create', ['user/create'], $options = ['class' => 'btn btn-block bg-rose text-white border-white']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php 
    if (Yii::$app->user->identity->role_id == 3) { ?>

    <?php } ?>
    <?php 
    if (Yii::$app->user->identity->role_id == 4) { ?>

    <?php } ?>

<div class="bg-white shadow rounded-sm-2 p-md-1 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-3 p-2">
            <div class="card soft-bg-rose shadow rounded-sm-2 p-3 border border-rose">
                <h6 class="fw-light mb-0 text-rose" style="letter-spacing: 0px;">Loket Pendaftaran</h6>
                <div class="my-3">
                    <?php 
                        if($antrian->loket_pendaftaran == null) $antrian->loket_pendaftaran = 0;
                    ?>
                    <h3 class="mb-0"><?php echo $antrian->loket_pendaftaran; ?></h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-loket'], $schema = true) ?>" class="btn btn-block bg-rose rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-orange shadow rounded-sm-2 p-3 border border-orange">
                <h6 class="fw-light mb-0 text-orange" style="letter-spacing: 0px;">Poli Umum</h6>
                <div class="my-3">
                    <?php 
                    if($antrian->poli_umun == null) $antrian->poli_umun = 0;
                    ?>
                    <h3 class="mb-0"><?= $antrian->poli_umun ?></h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'2'], $schema = true) ?>" class="btn btn-block bg-orange rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-yellow shadow rounded-sm-2 p-3 border border-yellow">
                <h6 class="fw-light mb-0 text-yellow" style="letter-spacing: 0px;">Poli Gigi</h6>
                <div class="my-3">
                <?php 
                if($antrian->poli_gigi == null) $antrian->poli_gigi = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->poli_gigi ?></h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'3'], $schema = true) ?>" class="btn btn-block bg-yellow rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-lime shadow rounded-sm-2 p-3 border border-lime">
                <h6 class="fw-light mb-0 text-lime" style="letter-spacing: 0px;">Poli Kusta</h6>
                <div class="my-3">
                <?php 
                if($antrian->poli_kusta == null) $antrian->poli_kusta = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->poli_kusta ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'4'], $schema = true) ?>" class="btn btn-block bg-lime rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-emarald shadow rounded-sm-2 p-3 border border-emarald">
                <h6 class="fw-light mb-0 text-emarald" style="letter-spacing: 0px;">Poli Kandungan</h6>
                <div class="my-3">
                    <?php 
                    if($antrian->poli_kandungan == null) $antrian->poli_kandungan = 0;
                    ?>
                    <h3 class="mb-0"><?= $antrian->poli_kandungan ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'5'], $schema = true) ?>" class="btn btn-block bg-emarald rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-teal shadow rounded-sm-2 p-3 border border-teal">
                <h6 class="fw-light mb-0 text-teal" style="letter-spacing: 0px;">Poli Kb</h6>
                <div class="my-3">
                <?php 
                if($antrian->poli_kb == null) $antrian->poli_kb = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->poli_kb ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'6'], $schema = true) ?>" class="btn btn-block bg-teal rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-light-blue shadow rounded-sm-2 p-3 border border-light-blue">
                <h6 class="fw-light mb-0 text-light-blue" style="letter-spacing: 0px;">Poli MTBS</h6>
                <div class="my-3">
                <?php 
                if($antrian->poli_mtbs == null) $antrian->poli_mtbs = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->poli_mtbs ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'7'], $schema = true) ?>" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-indigo shadow rounded-sm-2 p-3 border border-indigo">
                <h6 class="fw-light mb-0 text-indigo" style="letter-spacing: 0px;">Poli Jiwa</h6>
                <div class="my-3">
                <?php 
                if($antrian->poli_jiwa == null) $antrian->poli_jiwa = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->poli_jiwa ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'8'], $schema = true) ?>" class="btn btn-block bg-indigo rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-violet shadow rounded-sm-2 p-3 border border-violet">
                <h6 class="fw-light mb-0 text-violet" style="letter-spacing: 0px;">Poli Lansia</h6>
                <div class="my-3">
                <?php 
                if($antrian->poli_lansia == null) $antrian->poli_lansia = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->poli_lansia ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'9'], $schema = true) ?>" class="btn btn-block bg-violet rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-purple shadow rounded-sm-2 p-3 border border-purple">
                <h6 class="fw-light mb-0 text-purple" style="letter-spacing: 0px;">Imunisasi</h6>
                <div class="my-3">
                <?php 
                if($antrian->imunisasi == null) $antrian->imunisasi = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->imunisasi ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'10'], $schema = true) ?>" class="btn btn-block bg-purple rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-fuchsia shadow rounded-sm-2 p-3 border border-fuchsia">
                <h6 class="fw-light mb-0 text-fuchsia" style="letter-spacing: 0px;">Labolatorium</h6>
                <div class="my-3">
                <?php 
                if($antrian->labolatorium == null) $antrian->labolatorium = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->labolatorium ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'11'], $schema = true) ?>" class="btn btn-block bg-fuchsia rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-pink shadow rounded-sm-2 p-3 border border-pink">
                <h6 class="fw-light mb-0 text-pink" style="letter-spacing: 0px;">Pojok Gizi</h6>
                <div class="my-3">
                <?php 
                if($antrian->pojok_gizi == null) $antrian->pojok_gizi = 0;
                ?>
                    <h3 class="mb-0"><?= $antrian->pojok_gizi ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'12'], $schema = true) ?>" class="btn btn-block bg-pink rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-rose shadow rounded-sm-2 p-3 border border-rose">
                <h6 class="fw-light mb-0 text-rose" style="letter-spacing: 0px;">Klinik Sanitasi</h6>
                <div class="my-3">
                    <?php 
                        if($antrian->klinik_sanitasi == null) $antrian->klinik_sanitasi = 0;
                    ?>
                    <h3 class="mb-0"><?= $antrian->klinik_sanitasi ?></h3
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="<?= Url::to(['site/update-antrian-poli?poli_id='.'13'], $schema = true) ?>" class="btn btn-block bg-rose rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
    </div>
</div>