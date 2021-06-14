<?php

/* @var $this yii\web\View */

$this->title = 'Home - ';
?>
<div class="site-index">
    <div class="container-lg">
        <div class="row align-items-center flex-row-reverse" style="min-height: 100vh;">
            <div class="col-md-6 p-2">
                <img src="<?= \Yii::$app->params['frontendUrl'].$landing->gambar ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 p-2" style="text-align: justify;">
                <h1 class="mb-0 fw-light" style="letter-spacing: 4px;"><?= $landing->judul ?></h1>
                <hr class="border border-teal">
                <p><?= $landing->detail_1 ?></p>
                <?php  if (Yii::$app->user->isGuest) { ?>
                <div class="row">
                    <div class="col-md-6 p-2">
                        <a href="#" class="btn fs-6 fw-light py-2 w-100 bg-teal border border-white text-white">Sign In</a>
                    </div>
                    <div class="col-md-6 p-2">
                        <a href="#" class="btn fs-6 fw-light py-2 w-100 btn-outline-primary">Sign up</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="row justify-content-sm-between justify-content-md-center">
            <h1 class="text-center mb-5" data-aos="zoom-in-up" data-aos-duration="1500">Poli dan Layanan</h1>
            <?php foreach ($poli_layanan as $item) { ?>
                <div class="col-md-3 p-2">
                    <div class="card soft-bg-teal border-teal rounded-sm-2 shadow" data-aos="flip-up" data-aos-duration="1500">
                        <img src="<?= \Yii::$app->params['frontendUrl'].$item->gambar ?>" alt="" class="img-fluid">
                        <h6 class="fw-bold text-center my-4"><?= $item->judul ?> </h6>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <section id="visi" class="my-5 container-fluid text-white" data-aos="zoom-in-up" data-aos-duration="1500" style="background: linear-gradient(to top right, var(--teal), var(--indigo));">
        <blockquote class="container-lg blockquote w-75 text-center mx-auto mb-0 py-5">
            <p>
                <?= $visi->detail_1 ?>
            </p>
            <p>
                ______<?= $visi->judul ?>
            </p>
        </blockquote>
    </section>
    <div class="container">
        <div class="row justify-content-center flex-row-reverse align-items-center" style="min-height: 100vh;">
            <div class="col-md-6 p-2" data-aos="fade-up">
                <h2>Nikmati Pelayanan Profesional Kami</h2>
                <hr class="border border-teal">
                <div class="row">
                    <?php foreach ($layanan_pro as $item) { ?>
                        <div class="col-md-4 p-2" data-aos="flip-up">
                            <div class="card border border-teal soft-bg-teal rounded-sm-2 shadow">
                                <img src="<?= \Yii::$app->params['frontendUrl'].$item->gambar ?>" alt="" class="card-img-top">
                                <h5 class="fw-light text-center"><?= $item->judul ?></h5>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 p-2" data-aos="fade-up">
                <img src="https://image.freepik.com/free-vector/medical-doctor-clinic-giving-senior-man-injection-coronavirus-vaccine-immunity-health-vaccination-concept-hospital-covid-vaccine-shot-patient_90220-258.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <section id="visi" class="mt-5 container-fluid text-white" data-aos="zoom-in-up" data-aos-duration="1500" style="background: linear-gradient(to top right, var(--teal), var(--indigo));">
        <blockquote class="container-lg blockquote w-75 text-center mx-auto mb-0 py-5">
            <p>
                <?= $misi->detail_1 ?>
            </p>
            <p>
                ______<?= $misi->judul ?>
            </p>
        </blockquote>
    </section>
</div>
