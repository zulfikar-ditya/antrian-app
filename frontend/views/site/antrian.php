<?php
$this->title = 'Antrian -'
?>
<div class="container-lg my-5">
    <div class="bg-white shadow rounded-sm-2 p-md-3 mt-5">
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
                </div>
            </div>
        </div>
    </div>
</div>