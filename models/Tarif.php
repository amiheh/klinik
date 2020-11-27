<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarif".
 *
 * @property int $id_tarif
 * @property string $nama_tarif
 * @property int $tarif_dokter
 * @property int $tarif_asisten
 * @property int $tarif_klinik
 * @property int $tarif_bhp
 * @property int $total_tarif
 */
class Tarif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tarif', 'tarif_dokter', 'tarif_asisten', 'tarif_klinik', 'tarif_bhp', 'total_tarif'], 'required'],
            [['tarif_dokter', 'tarif_asisten', 'tarif_klinik', 'tarif_bhp', 'total_tarif'], 'integer'],
            [['nama_tarif'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tarif' => 'Id Tarif',
            'nama_tarif' => 'Nama Tarif',
            'tarif_dokter' => 'Tarif Dokter',
            'tarif_asisten' => 'Tarif Asisten',
            'tarif_klinik' => 'Tarif Klinik',
            'tarif_bhp' => 'Tarif Bhp',
            'total_tarif' => 'Total Tarif',
        ];
    }
}
