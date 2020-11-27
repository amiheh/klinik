<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekammedis".
 *
 * @property int $id_rkmd
 * @property int $id_pasien
 * @property string $tgl_rkmd
 * @property string $keluhan
 * @property string $tindakan
 * @property string $saran
 * @property int $id_dokter
 */
class Rekammedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekammedis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'tgl_rkmd', 'keluhan', 'tindakan', 'saran', 'id_dokter'], 'required'],
            [['id_pasien', 'id_dokter'], 'integer'],
            [['tgl_rkmd'], 'safe'],
            [['keluhan', 'tindakan', 'saran'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rkmd' => 'Id Rkmd',
            'id_pasien' => 'Id Pasien',
            'tgl_rkmd' => 'Tanggal Rekam Medis',
            'keluhan' => 'Keluhan',
            'tindakan' => 'Tindakan',
            'saran' => 'Saran',
            'id_dokter' => 'Id Dokter',
        ];
    }
}
