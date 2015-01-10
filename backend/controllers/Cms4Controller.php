<?php

namespace backend\controllers;

use Yii;
use app\models\cms;
use yii\filters\AccessControl;
use app\models\searchcms;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CmsController implements the CRUD actions for cms model.
 */
class CmsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['create', 'update', 'index', 'delete', 'view', 'changeStatus','multipledelete'],
                        'allow' => true,
                    ],
                    
                ],
                
            ],
            
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all cms models.
     * @return mixed
     */
    public function actionIndex()
    {
         /*$modelcms = new cms();
         $model = $modelcms->search();
		//$model->unsetAttributes();  
		
		if (isset($_GET['cms']))
		    $model->attributes = $_GET['cms'];
	
		$this->render('index', [
		    'model' => $model,
		]); */
        
        $searchModel = new searchcms();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single cms model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new cms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new cms();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             Yii::$app->session->setFlash('create', true);
                 return   $this->redirect(['index']);
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing cms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             Yii::$app->session->setFlash('update', true);
                 return   $this->redirect(['index']);
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing cms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
           Yii::$app->session->setFlash('deletecms', true);
        return $this->redirect(['index']);
    }
    
    /**
	   * Change discontinued Status
	   */ 
	public function actionMultipledelete()
	{
		
		  $model = new Cms();
                  
		if(isset($_POST['cmsStatus'])){
		    $model->actionTaken(['data'=>$_POST['id'],'status'=>$_POST['cmsStatus']]);
                     
		}
	
	}
        

    /**
     * Finds the cms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return cms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = cms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
