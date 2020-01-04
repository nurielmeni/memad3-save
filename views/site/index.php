<?php

/* @var $this yii\web\View */
use app\widgets\memadSearch\MemadSearchWidget;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <section class="header">
        <?= $this->render('sections/header', ['model' => $model]) ?>
    </section>
    
    <section class="about">
        <?= $this->render('sections/about') ?>
    </section>
    
    <section class="customers">
        <?= $this->render('sections/customers') ?>
    </section>
    
</div>
