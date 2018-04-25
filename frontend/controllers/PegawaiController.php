<?php
/**
 * Created by PhpStorm.
 * User: docotel
 * Date: 23/04/18
 * Time: 10:42
 */
namespace frontend\controllers;

use Yii;
use app\models\Pegawai;
use yii\web\Controller;

// manual CRUD
class PegawaiController extends Controller
{
    // CREATE
    public function actionCreate()
    {
        $model = new Pegawai();

        // data baru
        if($model->load(Yii::$app->request->post()) && $model->save()) {
            // var_dump($model->validate());
            // exit();
            return $this->redirect(['index']);
        }
            return $this->render('create', ['model' => $model]);
    }

    // READ
    public function actionIndex()
    {
        $pegawai = Pegawai::find()->all();

        return $this->render('index', ['model'=>$pegawai]);
    }

    // UPDATE or EDIT
    public function actionEdit($id)
    {
        $model = Pegawai::find()->where(['id' => $id])->one();

        // $id tidak ketemu di dalam database 
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');

            // update record 
            if($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }

            return $this->render('edit', ['model' => $model]);
    }

    // DELETE 
    public function actionDelete($id)
    {
        $model = Pegawai::findOne($id);

        // $id not found in database
        if ($model === null) 
            throw new NotFoundHttpException('The requested page does not exist.');
        
        // deleted record 
        $model->delete();

        return $this->redirect(['index']);
    }
}