<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="admin-panel">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">Paradis admin-panel </div>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= Url::to(['../admin/products']) ?>">Products</a></li>
                    <li class="active"><a href="<?= Url::to(['../admin/partners']) ?>">Partners</a></li>
                    <li class="active"><a href="<?= Url::to(['../admin/brands']) ?>">Brands</a></li>
                </ul>
                <div class="navbar-brand pull-right">
                    <a href="<?= Url::to(['../site/logout']) ?>" data-method="post">log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
