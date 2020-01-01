<?php

/* @var $this yii\web\View */
use app\widgets\memadSearch\MemadSearchWidget;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <section class="header">
        <div class="memad3-jumbotron">
            <h1 class="text-extra-light fg-blue">Let’s catch your next</h1>
            <h1 class="text-extra-bold fg-blue">Job opportunity</h1>


            <p class="actions">
                <a class="btn btn-md memad3 white" href="http://www.yiiframework.com">הגש קו"ח</a>
                <a class="btn btn-md memad3 blue" href="http://www.yiiframework.com">חפש משרה</a>
            </p>
        </div>
        
        <?= MemadSearchWidget::widget([
            'model' => $model,
            'inline' => true,
            'wrapClass' => 'flex center',
            'intro' => 'מחפש משרה ספציפית?',
        ]) ?>
    </section>
    <section class="about">
        <div class="row">
            <div class="col-sm-6 col-xs-12 text-center logo-side">
                <img src="<?= Url::to('@web/images/logo.png') ?>" alt="Memed3 Logo" >
                <p>המימד השלישי</p>
                <p>גיוס והשמה</p>
            </div>
            <div class="col-sm-6 col-xs-12 text-side">
                
            </div>
        </div>
    </section>
</div>
