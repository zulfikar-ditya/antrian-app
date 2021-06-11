<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

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
                            <span class="mb-0 text-gray">50</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <?= Html::a('Create', ['user/create'], $options = ['class' => 'btn btn-block bg-rose text-white border-white']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card shadow rounded-sm-2 p-3 border border-cyan">
                <div class="card-body">
                    <div class="text-center">
                        <i data-feather="users" class="soft-bg-rose rounded-circle shadow text-rose p-2 border border-rose" style="width: 90px; height: 90px"></i>
                        <div class="my-4">
                            <h3 class="mb-0">Users</h3>
                            <span class="mb-0 text-gray">50</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <?= Html::a('Create', ['user/create'], $options = ['class' => 'btn btn-block bg-rose text-white border-white']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card shadow rounded-sm-2 p-3 border border-cyan">
                <div class="card-body">
                    <div class="text-center">
                        <i data-feather="users" class="soft-bg-rose rounded-circle shadow text-rose p-2 border border-rose" style="width: 90px; height: 90px"></i>
                        <div class="my-4">
                            <h3 class="mb-0">Users</h3>
                            <span class="mb-0 text-gray">50</span>
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
                                    <span class="mb-0 text-gray">50</span>
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
    <div class="row justify-content">
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card soft-bg-cyan shadow rounded-sm-2 p-3 border border-cyan">
                <h6 class="fw-light mb-0 text-cyan" style="letter-spacing: 0px;">Nama Poli</h6>
                <div class="my-3">
                    <h3 class="mb-0">70</h3>
                    <small class="text-gray mb-0">Antrian Sekarang</small>
                </div>
                <a href="#" class="btn btn-block bg-light-blue rounded-sm-2 border-white text-white">Next</a>
            </div>
        </div>
    </div>
</div>