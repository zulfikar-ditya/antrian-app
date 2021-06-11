<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

use loutrux\argon\widgets\Nav;
use loutrux\argon\widgets\NavBar;
use loutrux\argon\widgets\Alert;

\loutrux\argon\ArgonAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
        <title><?= Html::encode($this->title) ?> - Admin | Pukesmas</title>
        <?php $this->head() ?>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://zulfikar-dityaa.github.io/base-css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <style>
            body {
                font-family: 'PT Sans', sans-serif;
            }
            h1, h2, h3, h4, h5, h6 {
                letter-spacing: 2px;
                font-weight: 400!important;
            }

            label {
                font-weight: 800;
            }

            td {
                font-size: 14px;
            }

            .navbar-brand {
                font-weight: 400!important;
                font-size: 24px;
                text-align: left;
                letter-spacing: 2px;
            }

            .nav-link {
                color: var(--dark)!important;
            }

            .nav-item:hover,
            .nav-item.active,
            .nav-item:hover a.nav-link,
            .nav-item.active a.nav-link {
                background: var(--cyan);
                border-radius: var(--sm-1);
                color: var(--white)!important;
            }
        </style>
    </head>
    <body class="soft-bg-cyan">
        <?php $this->beginBody() ?>
        <?= Html::tag('span','',['id' => 'global_prefixUrl', 'data-content' => \Yii::$app->request->BaseUrl]); ?>
        <div class="main-content">
            <!-- Navbar -->
        <?php
            if(!Yii::$app->user->isGuest) {
                if (Yii::$app->user->identity->role_id == 1) {
                    $menuItems = [
                        ['label' => 'Dashboard', 'url' => ['/site/index']],
                        ['label' => 'Agama', 'url' => ['agama/index']],
                        ['label' => 'Antrian Loket', 'url' => ['antrian-loket/index']],
                        ['label' => 'Antrian Now', 'url' => ['antrian-now/index']],
                        ['label' => 'Antrian Poli', 'url' => ['antrian-poli/index']],
                        ['label' => 'Info', 'url' => ['info/index']],
                        ['label' => 'Info Kategori', 'url' => ['info-kategori/index']],
                        ['label' => 'jenis Pasien', 'url' => ['jenis-pasien/index']],
                        ['label' => 'Pasien', 'url' => ['pasien/index']],
                        ['label' => 'Pendidikan', 'url' => ['pendidikan/index']],
                        ['label' => 'Poli', 'url' => ['poli/index']],
                        ['label' => 'Rekam Medis', 'url' => ['rekam-medis/index']],
                        ['label' => 'Role', 'url' => ['role/index']],
                        ['label' => 'user', 'url' => ['user/index']],
                    ];
                }

                if (Yii::$app->user->identity->role_id == 2) {
                    $menuItems = [
                        ['label' => 'Dashboard', 'url' => ['/site/index']],
                        ['label' => 'Antrian Loket', 'url' => ['antrian-loket/index']],
                        ['label' => 'Antrian Now', 'url' => ['antrian-now/index']],
                        ['label' => 'Antrian Poli', 'url' => ['antrian-poli/index']],
                        ['label' => 'Info', 'url' => ['info/index']],
                        ['label' => 'Pasien', 'url' => ['pasien/index']],
                    ];
                }

                if (Yii::$app->user->identity->role_id == 3) {
                    $menuItems = [
                        ['label' => 'Dashboard', 'url' => ['/site/index']],
                        ['label' => 'Antrian Loket', 'url' => ['antrian-loket/index']],
                        ['label' => 'Antrian Now', 'url' => ['antrian-now/index']],
                        ['label' => 'Antrian Poli', 'url' => ['antrian-poli/index']],
                    ];
                }

                if (Yii::$app->user->identity->role_id == 4) {
                    
                }


                $menuItems[] = '<li class="nav-item">'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout',
                    [
                        'class' => 'nav-link border-none',
                        'style' => 'background: none;'
                    ]
                )
                . Html::endForm()
                . '</li>';
            }

                // Dynamic menu item added in view with the 'additionalsMenuItems' block
                if (($additionalsMenuItems = ArrayHelper::getValue($this->blocks,['additionalsMenuItems'])) !== null)
                    $menuItems[] = $additionalsMenuItems;
                    
                NavBar::begin([
                        'brandLabel'          => ArrayHelper::getValue($this->blocks,['brandLabel'],Yii::$app->name),
                        'brandUrl'            => ArrayHelper::getValue($this->blocks,['brandUrl'],Yii::$app->homeUrl),
                        'brandScrollContent'  => ArrayHelper::getValue($this->blocks,['navbarScrollContent'],false),
                        'brandAfter'          => ArrayHelper::getValue($this->blocks,['brandAfter'],false),
                        // uncollapsed menu showed in mobile view
                        'headerContent' => Nav::widget([
                            'options' => ['class' => 'd-md-none_ align-items-center'],
                            'encodeLabels' => false,
                            'items' => ($additionalsMenuItems)?[$additionalsMenuItems]:[],
                        ]),
                        'options' => [
                                'class' => 'navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white',
                        ],
                        'innerContainerOptions' => ['class' => 'container px-4']

                ]);

                echo Nav::widget([
                        'options' => ['class' => 'navbar-nav ml-auto_'],
                        'encodeLabels' => false,
                        'items' => $menuItems,
                ]);
                NavBar::end();
        ?>
        <div class="main-content">
            <!-- Header -->
            <div class="header bg-cyan p-4">
                <div class="container-fluid" style="max-width: 100%!important;">
                    <div class="header-body mb-7 py-4">
                        <h3 class="text-white mb-0"><?= $this->title ?></h3>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="container-fluid main-container mt--9 py-4 mb-lg-2" style="max-width: 100%!important;">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
            <!-- Content -->
        </div>
        <?php $this->endBody() ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>
</html>
<?php $this->endPage() ?>
