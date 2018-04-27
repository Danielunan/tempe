<?php 

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\grid\GridView;

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
	<?=
		GridView::widget([
		    'dataProvider' => $dataProvider,
		    'columns' => [
		        ['class' => 'yii\grid\SerialColumn'],
		        'nama',
            	'email',
            	'alamat',
            	'kode_pos',
		        [
		        	'attribute' => 'domisili',
		        	'value' => function($data) {
		        		return $data->kota->nama_kota;
		        	}
		        ],
		        ['class' => 'yii\grid\ActionColumn'],
		    ],
		]);
	?>
	</table>