<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Partners;
use app\modules\admin\models\PartnersSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PartnersController implements the CRUD actions for Partners model.
 */
class PartnersController extends AppAdminController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Partners models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PartnersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Partners model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Partners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Partners();
        if ($model->load(Yii::$app->request->post())) {

            $model->image = UploadedFile::getInstance($model, 'image');
            $uniqe = 'f' . time() . '.' . $model->image->extension;
            if ($model->image && $model->validate()) {
                if (!is_dir(yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'uploads'.DIRECTORY_SEPARATOR.'partner'))
                    mkdir(yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'uploads'.DIRECTORY_SEPARATOR.'partner');
                $model->image->saveAs(yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'uploads' .DIRECTORY_SEPARATOR.'partner'. DIRECTORY_SEPARATOR . $uniqe);
                $model->image = $uniqe;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Partners model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->oldLink = $model->image ;


        if ($model->load(Yii::$app->request->post()))
        {
            $model->image = UploadedFile::getInstance($model, 'image');

            if(!$model->image) {
                $model->image = $model->oldLink ;
            }
            else
            {
                $uniqu = 'f'.time().'.'.$model->image->extension;
                if(!is_dir(yii::getAlias('@app').DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'partner'))
                    mkdir(yii::getAlias('@app').DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'partner');
                $model->image->saveAs(yii::getAlias('@app').DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'partner'.DIRECTORY_SEPARATOR. $uniqu);
                $model->image = $uniqu;
                if($model->oldLink)
                    if(is_file(yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'uploads'.DIRECTORY_SEPARATOR.'partner' . DIRECTORY_SEPARATOR . $model->oldLink))
                        unlink(yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'uploads'.DIRECTORY_SEPARATOR.'partner' . DIRECTORY_SEPARATOR . $model->oldLink );
            }

            if ($model->validate())
            {
                $model->save();

            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Partners model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $uniqu = $model->image;

        $this->findModel($id)->delete();
        if($uniqu)
            if(is_file(yii::getAlias('@app').DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'partner'.DIRECTORY_SEPARATOR. $uniqu))
                unlink(yii::getAlias('@app').DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'partner'.DIRECTORY_SEPARATOR. $uniqu );


        return $this->redirect(['index']);
    }

    /**
     * Finds the Partners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Partners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Partners::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
