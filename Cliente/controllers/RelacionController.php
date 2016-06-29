<?php

namespace app\controllers;

use Yii;
use app\models\Relacion;
use app\models\RelacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RelacionController implements the CRUD actions for Relacion model.
 */
class RelacionController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Relacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RelacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Relacion model.
     * @param integer $Interlocutor1
     * @param integer $Interlocutor2
     * @return mixed
     */
    public function actionView($Interlocutor1, $Interlocutor2)
    {
        return $this->render('view', [
            'model' => $this->findModel($Interlocutor1, $Interlocutor2),
        ]);
    }

    /**
     * Creates a new Relacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Relacion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Interlocutor1' => $model->Interlocutor1, 'Interlocutor2' => $model->Interlocutor2]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Relacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Interlocutor1
     * @param integer $Interlocutor2
     * @return mixed
     */
    public function actionUpdate($Interlocutor1, $Interlocutor2)
    {
        $model = $this->findModel($Interlocutor1, $Interlocutor2);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Interlocutor1' => $model->Interlocutor1, 'Interlocutor2' => $model->Interlocutor2]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Relacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Interlocutor1
     * @param integer $Interlocutor2
     * @return mixed
     */
    public function actionDelete($Interlocutor1, $Interlocutor2)
    {
        $this->findModel($Interlocutor1, $Interlocutor2)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Relacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Interlocutor1
     * @param integer $Interlocutor2
     * @return Relacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Interlocutor1, $Interlocutor2)
    {
        if (($model = Relacion::findOne(['Interlocutor1' => $Interlocutor1, 'Interlocutor2' => $Interlocutor2])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
