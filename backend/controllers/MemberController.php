<?php

namespace backend\controllers;

use Yii;
use app\models\Admin;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;
use yii\imagine\Image;



/**
 * MemberController implements the CRUD actions for Admin model.
 */
class MemberController extends Controller
{
    
   
    
    
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Admin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Admin::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Admin model.
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
     * Creates a new Admin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
      
         $model = new Admin();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->memberRegister()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
                'model' => $model,
            ]);
        
       
    }

    /**
     * Updates an existing Admin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Admin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
     /**
     * Deletes an existing Admin model.
     * change password for login admin.
     * @param integer $id
     * @return mixed
     */
    public function actionChangepassword()
    {
        $model = $this->findModel(Yii::$app->user->id);
        $model->scenario = 'changepassword';
                
   
         if ($model->load(Yii::$app->request->post()) && $model->validate()) {
             
             $arrPost =  Yii::$app->request->post('Admin');
             
          
             $validCurrentPas = $model->validateCurrentPassword(Yii::$app->user->id, $arrPost['current_password']);
             //$validPasswordrul = $model->validateStrongPassword($arrPost['new_password']);
             
             if(isset($validCurrentPas))
             {
                 
                 if($insertData = $model->updateAdmintable($arrPost))
                 {
                      Yii::$app->getSession()->setFlash('success', 'Your password has been changed successfully.');
                     return $this->render('changepassword', array('model' => $model));
                     
                 }
              
             }
   
        }
        
        return $this->render('changepassword', array('model' => $model));
         
    }
    
    
    /**
     * editprofile an existing Admin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionEditprofile()
    {
        $model = $this->findModel(Yii::$app->user->id);
          $model->scenario = 'editprofile';
        if ($model->load(Yii::$app->request->post())) {
            
             $image = UploadedFile::getInstance($model, 'picture');
            $rannumber = time();
             
             $model->picture = $rannumber.'_'.$image->name;
             
               if ($model->picture && $model->validate()) {
                   
                     $path = \Yii::getAlias('@webroot').'/uploaded_files/member/';
                     $paththumb = \Yii::getAlias('@webroot').'/uploaded_files/member/thumb/';
                                        
                 $image->saveAs($path . $rannumber.'_'.$image->baseName . '.' . $rannumber.'_'.$image->extension);
                 
                 Image::thumbnail($path.$model->picture, 120, 120)->save($paththumb.$model->picture, ['quality' => 80]);
             
           }
             
            
          
        } else {
            return $this->render('editprofile', [
                'model' => $model,
            ]);
        }
    }
   

    
    /**
     * Finds the Admin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Admin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Admin::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
