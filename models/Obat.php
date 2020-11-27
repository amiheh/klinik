<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property string $kandungan_obat
 * @property string $golongan_obat
 * @property string $tglbeli_obat
 * @property string $tglkl_obat
 * @property int $harga_obat
 * @property int $hargajual_obat
 * @property int $stok_obat
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'kandungan_obat', 'golongan_obat', 'tglbeli_obat', 'tglkl_obat', 'harga_obat', 'hargajual_obat', 'stok_obat'], 'required'],
            [['tglbeli_obat', 'tglkl_obat'], 'safe'],
            [['harga_obat', 'hargajual_obat', 'stok_obat'], 'integer'],
            [['nama_obat', 'golongan_obat'], 'string', 'max' => 100],
            [['kandungan_obat'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'kandungan_obat' => 'Kandungan Obat',
            'golongan_obat' => 'Golongan Obat',
            'tglbeli_obat' => 'Tglbeli Obat',
            'tglkl_obat' => 'Tglkl Obat',
            'harga_obat' => 'Harga Obat',
            'hargajual_obat' => 'Hargajual Obat',
            'stok_obat' => 'Stok Obat',
        ];
    }
}
