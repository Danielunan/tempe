<?php
/**
 * Created by PhpStorm.
 * User: docotel
 * Date: 23/04/18
 * Time: 10:31
 */
namespace app\models;

use Yii;

class Kota extends \yii\db\ActiveRecord
{
    public static function tableName() // memanggil ulang fungsi tablename(),
    // untuk menunjukkan model ke tabel yang dituju.
    {
        return 'kota'; // tabel kota adalah target dari model kota 
    }

    public function getKota()
    {
        return 'kota';
        // return $this->hasOne(Kota::className(), ['id' => 'kota_id']);
    }

    public function rules()
    {
        return [
            // [['nama_kota'], string],
            [['nama_kota'], 'string', 'max' => 255],
            // [['created_at', 'updated_at'], 'datetime']
        ];
    }
}