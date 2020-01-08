<?php
    use app\widgets\memadSearch\MemadSearchWidget;
?>

<div class="memad3-jumbotron">
    <h1 class="text-extra-light fg-blue">Let’s catch your next</h1>
    <h1 class="text-extra-bold fg-blue">Job opportunity</h1>


    <p class="actions">
        <a class="btn btn-md memad3 blue" href="http://www.yiiframework.com">חפש משרה</a>
        <a class="btn btn-md memad3 white" href="http://www.yiiframework.com">הגש קו"ח</a>
    </p>
</div>

<?= MemadSearchWidget::widget([
    'model' => $serachFormModel,
    'inline' => true,
    'wrapClass' => 'flex center fg-white',
    'intro' => 'מחפש משרה ספציפית?',
]) ?>
