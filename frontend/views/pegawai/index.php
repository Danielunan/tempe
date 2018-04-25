<?php 

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

?>

<style>
	table th, td {
		padding: 10px;
	}
</style>

<?= Html::a('Create', ['pegawai/create'], ['class'=>'btn btn-success']); ?>

<?php
echo Breadcrumbs::widget([
	'itemTemplate' => "<li>{link}</li>\n", // template breadcrumbs untuk semua link
	'links' => [
		'Daftar Pegawai',
	],
]);
?>

<table border="1">
	<tr>
		<th>nama</th>
		<th>email</th>
		<th>alamat</th>
		<th>domisili</th>
		<th>kode pos</th>
		<th>action</th>
	</tr>
	<?php foreach ($model as $field) { ?>
		<tr>
			<td><?= $field->nama; ?></td>
			<td><?= $field->email; ?></td>
			<td><?= $field->alamat; ?></td>
			<td><?= $field->domisili; ?></td>
			<td><?= $field->kode_pos; ?></td>
			<td><?= Html::a("Edit", [
				'pegawai/edit', 'id'=>$field->id]); ?> | <?= Html::a("Delete", [
						'pegawai/delete', 
						'id'=>$field->id
					]); 
				?>		
			</td>
		</tr>
		<?php } ?>
	</table>