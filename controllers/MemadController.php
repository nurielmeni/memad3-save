<?php

namespace app\controllers;

use app\models\SearchForm;

class MemadController extends \yii\web\Controller
{
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $serachFormModel = new SearchForm();
        $this->view->params['serachFormModel'] = $serachFormModel;
        $this->view->params['requestedRout'] = str_replace('/', '-', $module->requestedRoute);
    }
}
