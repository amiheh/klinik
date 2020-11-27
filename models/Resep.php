<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resep".
 *
 * @property int $id_resep
 * @property int $id_obat
 * @property int $jumlah_obat
 * @property string $ket_obat
 * @property int $id_rkmd
 */
class Resep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_obat', 'jumlah_obat', 'ket_obat', 'id_rkmd'], 'required'],
            [['id_obat', 'jumlah_obat', 'id_rkmd'], 'integer'],
            [['ket_obat'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_resep' => 'Id Resep',
            'id_obat' => 'Id Obat',
            'jumlah_obat' => 'Jumlah Obat',
            'ket_obat' => 'Ket Obat',
            'id_rkmd' => 'Id Rekam Medis',
        ];
    }
}
