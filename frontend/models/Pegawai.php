<?php
/**
 * Created by PhpStorm.
 * User: docotel
 * Date: 23/04/18
 * Time: 11:43
 */
namespace app\models;

use Yii;

class Pegawai extends \yii\db\ActiveRecord // untuk membuat model, pakai activeRecord
{
    public static function tableName() // fungsi namatabel di database
    {
        return 'pegawai'; // tabel pegawai adalah target dari model pegawai
    }

    public function rules() // fungsi rules() dipakai filtering hasil inputan kita
    {
        return [
            [[
                'nama',
                'email',
                'alamat',
                'domisili',
                'kode_pos'
                    // jangan menampilkan bila tidak ada data yang ingin dimasukkan di kolom view nya
                // 'created_at',  
                // 'updated_at'
            ], 'required'],
            [['nama', 'email'], 'string', 'max' => 255],
            [['kode_pos'], 'string', 'max' => 32],
            [['domisili'], 'integer'],
        ]; 
    }

    public function getKota()
    {
        return $this->hasOne(Kota::className(), ['id' => 'domisili']);
    }
}