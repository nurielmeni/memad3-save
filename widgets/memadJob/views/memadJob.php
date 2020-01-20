<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use app\components\Helper;
use app\widgets\socialShare\SocialShare;
use yii\helpers\Url;

?>
<div class="memad-job-wrapper <?= $wrapClass ?>" dir="<?= $direction ?>">
    <div class="panel panel-default">
        
        <div class="panel-heading">
            <h2 class="job-title fg-blue text-light"><?= Html::a(Helper::arrayStrVal($job, 'JobTitle'), $jobUrl . Helper::arrayStrVal($job, 'JobId')) ?></h2>
            <span class="update-date text-light"><?= date_format(date_create(Helper::arrayStrVal($job, 'UpdateDate', date('c'))), 'd/m/Y') ?></span>
        </div>
        
        <div class="panel-body">
            <div class="requirements">
                <?php if ($showHeaders) : ?>
                <h2 class="header-title">Requirements</h2>
                <?php endif; ?>
                <?= Helper::arrayStrVal($job, 'Requiremets') ?>
            </div>
            <div class="Skills">
                <?php if ($showHeaders) : ?>
                <h2 class="header-title">Skills</h2>
                <?php endif; ?>
                <?= Helper::arrayStrVal($job, 'Skills') ?>
            </div>
        </div>

        <div class="panel-footer">     
            <div class="actions flex space-between">
                <button class="btn memad3 trans fg-blue show-ajax-modal" data-ajax-form-url="<?= Url::to($submitUrl) ?>">שלח קו״ח</button>
                <?= SocialShare::widget([
                    'shareUrl' => Url::to($jobUrl . Helper::arrayStrVal($job, 'JobId'), true),
                    'shareText' => Helper::arrayStrVal($job, 'JobTitle'),
                    ]) ?>
            </div>
        </div>
    </div>    
</div>
