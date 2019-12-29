<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<div class="memad-search-wrapper <?= $wrapClass ?>">

    <div class="intro">
        <?= $intro ?>
    </div>

    <?php if (isset($action)) : ?>
        <?php $form = ActiveForm::begin([
            'action' => [$action], 
            'id' => 'search-form' . $name,
            'options' => ['class' => 'flex ' . ($inline ? 'row' : 'column')]
        ]); ?>   
    <?php else : ?>
        <?php $form = ActiveForm::begin([
            'id' => 'search-form' . $name,
            'options' => ['class' => 'text-center flex ' . ($inline ? 'row' : 'column')]
        ]); ?>   
    <?php endif; ?>

        <?= $form->field($model, 'location')->textInput(['autofocus' => true, 'placeholder' => $model->getAttributeLabel('location')])->label(false) ?>

        <?= $form->field($model, 'profession')->textInput(['placeholder' => $model->getAttributeLabel('profession')])->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton($submitLabel, ['class' => 'btn memad3 gradiant', 'name' => 'search-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>


</div>
