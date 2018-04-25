<?php
/**
 * Created by PhpStorm.
 * User: docotel
 * Date: 23/04/18
 * Time: 11:30
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'nama'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'alamat'); ?>
    <?= $form->field($model, 'domisili'); ?>
    <?= $form->field($model, 'kode_pos'); ?>
     <!-- //$form->field($model, 'created_at');  -->
     <!-- //$form->field($model, 'updated_at');  -->

    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>