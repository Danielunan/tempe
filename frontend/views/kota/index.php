<?php 
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
?>

<style>
	table th, td {
		padding: 10px;
	}
</style>

<?= Html::a('Create', ['kota/create'], ['class' => 'btn btn-success']); ?>

<?php
echo Breadcrumbs::widget([
	'itemTemplate' => "<li>{link}</li>\n", // template breadcrumbs untuk semua link
	'links' => [
		'Daftar Kota',
	],
]);
?>

<table border="1">
	<tr>
		<th>Kota</th> <!-- buat kolom data di view kota untuk nama kota -->
		<th>Action</th> <!-- buat kolom data di view kota untuk action -->
	</tr>
	<?php foreach ($model as $field) { ?>
	<tr>
		<td><?= $field->nama_kota; ?></td> <!-- 'nama_kota' data atribut yang,
		ingin ditampilkan ke view --> 
		<td><?= Html::a("Edit", [
				'kota/edit', 
				'id' => $field->id
			]); 
			?> | 
			<?= Html::a("Delete", ['kota/delete', 'id' => $field->id]); ?></td>
	</tr>
	<?php } ?>
</table>