<?php

namespace app\modules\admin\controllers;
use yii\helpers\Url;

class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->language = 'am';
        \Yii::$app->response->redirect(Url::to('admin/products/index'));
    }
}
