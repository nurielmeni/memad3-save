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
    
    <meta property="og:image" content="<?= Url::to('@web/images/logo.png') ?>" />

    <link rel="icon" type="image/png" href="<?= Url::to('@web/images/logo.png') ?>" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body dir="rtl">
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img(Url::to('@web/images/logo.png'), ['height' => '76', 'alt' => 'Memad3 Logo', 'style' => 'margin-top: -30px;']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-sttaic-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'בית', 'url' => ['/site/index']],
            ['label' => 'עלינו', 'url' => ['/site/about']],
            ['label' => 'לוח המשרות', 'url' => ['/site/jobs']],
            ['label' => 'חברי צוות', 'url' => ['/staff/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'כניסה', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'יציאה (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
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

<footer class="footer">
    <?= $this->render('footer', ['model' => $this->params['serachFormModel']]) ?>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
