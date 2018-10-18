<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-light ',
        ],
    ]);
    //    echo '<li><div class="btn-group" role="group" aria-label="Basic example">
    //    <button type="button" class="btn btn-secondary" href="/site/index">Home</button>
    //    <button type="button" class="btn btn-secondary" href="/site/about">About</button>
    //    <button type="button" class="btn btn-secondary" href="/site/contact">Contact</button>
    //</div></li>';

    $menuItems = [];
    $menuItems[] = '<li class="btn-secondary"><div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" href="/site/index">Home</button>
    <button type="button" class="btn btn-secondary" href="/site/about">About</button>
    <button type="button" class="btn btn-secondary" href="/site/contact">Contact</button>
</div></li>';
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registration', 'url' => ['/site/registration'], 'options' => ['class' => 'btn-secondary']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login'], 'options' => ['class' => 'btn-secondary']];
    } else {
        $menuItems[] = '<li role = "presentation" class="dropdown" > <a href = "#" class="dropdown-toggle" data - toggle = "dropdown" role = "button" aria - haspopup = "true" aria - expanded = "false" > <i class="fas fa-bell"></i> <span class="caret" ></span > </a > <ul class="dropdown-menu" > <li ><a href = "#" > Action</a ></li > <li ><a href = "#" > Another action </a ></li > <li ><a href = "#" > Something else here </a ></li > <li role = "separator" class="divider" ></li > <li ><a href = "#" > Separated link </a></li > </ul > </li >';
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                Yii::$app->user->identity->username . ' <i class="fas fa-power-off"></i>',
                ['class' => 'btn-secondary logout']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<a href="#" class="float">
    <i class="fa fa-plus my-float"></i>
</a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
