<?php

namespace app\controllers;
use Yii;
use app\models\Interlocutorcomercial;
use app\models\InterlocutorcomercialSearch;
use yii\web\Controller;
use app\models\Zona;
use app\models\Distrito;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class InterlocutorcomercialController extends Controller
{
   public function actionConsultor(){
        
        $model = new \app\models\Interlocutorcomercial;
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            
            $model->save();
            return $this->render('confirmarconsultor', ['model' => $model]);
        }
        else{
            
            return $this->render("consultor",["model"=>$model]);
            
        }
    }
    
    public function actionCliente(){
        
        $model = new \app\models\Interlocutorcomercial;
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            return $this->render('confirmarcliente', ['model' => $model]);
        }
        else{
            
            return $this->render("cliente",["model"=>$model]);
        }
    }
    
public function actionAsignarlider(){

        $model = new \app\models\Interlocutorcomercial;
        $searchModel = new InterlocutorcomercialSearch();
        $dataProvider = $searchModel->search3(Yii::$app->request->queryParams);

        return $this->render('asignarlider', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionModificar1(){
        
        $searchModel = new InterlocutorcomercialSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionModificar2(){
        
        $searchModel = new InterlocutorcomercialSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams);

        return $this->render('clientesearch', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->codigo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    protected function findModel($id)
    {
        if (($model = Interlocutorcomercial::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionDelete($id)
    {   
        $interlocutor = new \app\models\Interlocutorcomercial;
        $inter = $interlocutor->findOne($id);

        $anterior='index';

        if($inter->Rol == 'Consultor' ){
            $anterior = 'index';
        }
        if($inter->Rol == 'Persona' || $inter->Rol == 'Empresa' ){
            $anterior = 'clientesearch';
        }

        $this->findModel($id)->delete();

        $searchModel = new InterlocutorcomercialSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render($anterior, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionView2($id)
    {
        return $this->render('view2', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCliente1()
    {
        $model = new \app\models\Interlocutorcomercial;
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            
            $model->save();
            return $this->render('confirmarcliente', ['model' => $model]);
        }
        else{
            
            return $this->render("persona",["model"=>$model]);
            
        }
    }

    public function actionEmpresa1()
    {
        $model = new \app\models\Interlocutorcomercial;
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            
            $model->save();
            return $this->render('confirmarcliente', ['model' => $model]);
        }
        else{
            
            return $this->render("empresa",["model"=>$model]);
            
        }
    }
        
    public function actionZonas($id){
        echo HtmlHelpers::dropDownList(Zona::className(), 'codigo', $id, 'codigo', 'Nombre');
    }
    
    public function actionListzona($id){
        
        $countzona = Zona::find()->where(['Distrito' => $id])->count();
        
        $zona = Zona::find()->where(['Distrito' => $id])->all();
        
        if($countzona > 0){            
            foreach($zona as $result) echo "<option value = '".$result->codigo."'>".$result->Nombre."</option>";
        } else {
            echo "<option>-</option>";            
        }
        
    }

    public function findShowpersona()
    {
        echo $this->render('_formcliente', [
        'model' => $model,
    ]);
    }

    public function findShowempresa()
    {
        echo $this->render('_formempresa', [
        'model' => $model,
    ]);
    }

    public function actionMostrar($id){
        
        if($id=='Persona'){

            return $this->render('_formcliente', [
        'model' => $model,
    ]);
        } else {

            if($id=='Empresa'){

            return $this->render('_formempresa', [
        'model' => $model,
    ]);
                        }

        }
        

    }

    
}
