<?php

namespace app\controllers;

use app\models\SearchForm;

class MemadController extends \yii\web\Controller
{
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $model = new SearchForm();
        $this->view->params['model'] = $model;
    }
}
