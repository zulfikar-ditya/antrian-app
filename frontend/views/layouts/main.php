<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?> Pukesmas</title>
        <!-- <?php $this->head() ?> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://zulfikar-dityaa.github.io/base-css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <script src="https://pagecdn.io/lib/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"  ></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
            body {
                font-family: 'PT Sans', sans-serif;
            }
        </style>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <nav class="navbar navbar-expand-lg navbar-dark bg-teal fixed-top py-2">
                <div class="container-lg">
                    <a class="navbar-brand fs-4 fw-semi-bold" href="<?= Yii::$app->homeUrl ?>">Puskesmas</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= Url::to(['site/index'], $schema = true) ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= Url::to(['site/antrian'], $schema = true) ?>">Antrian Sekarang</a>
                            </li>
                            <?php if (Yii::$app->user->isGuest) { ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?= Url::to(['site/signup'], $schema = true) ?>">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active border border-white rounded-sm-2 px-2" aria-current="page" href="<?= Url::to(['site/login'], $schema = true) ?>">Sign In</a>
                                </li>
                            <?php } else{ ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?= Url::to(['antrian/index'], $schema = true) ?>">Antrian Saya</a>
                                </li>
                                <li class="nav-item">
                                    <?= Html::a('Logout', ['site/logout',], [
                                        'class' => 'nav-link active border border-white rounded-sm-2 px-2',
                                        // 'data' => [
                                        //     'method' => 'post',
                                        // ],
                                    ]) ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="" style="min-height: 100vh;">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
        <footer class="bg-blue-dark py-5 text-center">
            &copy; <?= Date('Y') ?> Zulfikar Ditya.
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script>
                feather.replace()
                </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
