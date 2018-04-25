<?php
/**
 * Created by PhpStorm.
 * User: docotel
 * Date: 23/04/18
 * Time: 10:58
 */
namespace frontend\controllers; // namespace adalah cara enkapsulasi item nya

use Yii;
use app\models\Kota; // dipakai memanggil model
use yii\web\Controller;

class KotaController extends controller
{
    // CREATE
    public function actionCreate()
    {
        $model = new Kota();

        // data baru
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
        return $this->render('create', ['model' => $model]);
    }

    // READ 
    public function actionIndex()
    {
        $kota = Kota::find()->all();

        return $this->render('index', ['model' => $kota]);
    }

    // UPDATE or EDIT 
    public function actionEdit($id)
    {
        $model = Kota::find()->where(['id'=>$id])->one();

        // $id tidak ketemu di dalam database 
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');

            // update record nya edit
            if($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }

            // tampilkan hasil edit ke view
            return $this->render('edit', ['model' => $model]);
    }

    // DELETE 
    public function actionDelete($id)
    {
        $model = Kota::findOne($id);

        // $id not found in database
        if ($model == null)
            throw new NotFoundHttpException('The requested page does not exist.');
        
        // delete record nya
        $model->delete();
        
        return $this->redirect(['index']);
    }
}