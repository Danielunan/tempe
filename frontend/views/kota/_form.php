<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model, 'nama_kota'); ?>

	<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', 
		[
			'class' => $model->isNewRecord ? 
			'btn btn-success' : 'btn btn-primary'
		]); 
	?>

<?php ActiveForm::end(); ?>