<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\memadLogoNav\MemadLogoNav;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="language" content="Hebrew">
    <meta name="author" content="Meni Nuriel">
    <meta charset="<?= Yii::$app->charset ?>">
    
    <meta property="og:title" content="<?= Yii::$app->name ?>" />
    <meta property="og:url" content="http://memad3.com/" />
    <meta property="og:image" content="<?= Url::to('@web/images/logo.png') ?>" />

    <link rel="icon" type="image/png" href="<?= Url::to('@web/images/logo.png') ?>" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body dir="rtl">
<?php $this->beginBody() ?>

<div class="wrap">
    <?=  MemadLogoNav::widget(['wrapClass' => 'visible-xs']) ?>

    <?php
    NavBar::begin([
        'brandUrl' => false,
        'renderInnerContainer' => true,
        'headerContent' => \app\widgets\Memad3Social::widget(),
        'options' => [
            'class' => 'navbar navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'בית', 'url' => ['/site/index']],
            ['label' => 'עלינו', 'url' => ['/site/about']],
            ['label' => 'לוח המשרות', 'url' => ['/site/jobs']],
            ['label' => 'צרו קשר', 'url' => ['/site/contact']],
            ['label' => 'מעסיקים', 'url' => ['/site/employers'], 'options'=> ['class'=>'nav-item-employers bg-blue fg-white'],],
            
            /**
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
             * 
             */
        ],
    ]);
    echo MemadLogoNav::widget(['wrapClass' => 'hidden-xs']);
    NavBar::end();
    ?>

    <main>
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>
</div>

<footer class="footer">
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
