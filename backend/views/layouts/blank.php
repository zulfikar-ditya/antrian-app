<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

// AppAsset::register($this);
\loutrux\argon\ArgonAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - Admin | Giat Dana</title>
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://zulfikar-dityaa.github.io/base-css/style.css">

    <style>
        body {
                font-family: 'PT Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            letter-spacing: 2px;
            font-weight: 400!important;
        }
    </style>
</head>
<body class="blank bg-cyan">
<?php $this->beginBody() ?>

<div class="container">

    <div class="row justify-content-center aligns-items-center" style="min-height: 100vh;">
        <div class="col-md-4 align-self-center bg-white rounded-sm-2 soft-bg-cool-gray border-none py-lg-2 px-md-2 shadow">
            <?= $content ?>
        </div>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
