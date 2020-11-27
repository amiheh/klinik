<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $tmptlahir_pasien
 * @property string $tgllahir_pasien
 * @property string $alamat_pasien
 * @property int $gender_pegawai
 * @property string $telepon_pasien
 * @property string $pekerjaan_pasien
 * @property int $usia_pasien
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'tmptlahir_pasien', 'tgllahir_pasien', 'alamat_pasien', 'telepon_pasien', 'pekerjaan_pasien', 'usia_pasien', 'status'], 'required'],
            [['tgllahir_pasien'], 'safe'],
            [['alamat_pasien'], 'string'],
            [['usia_pasien', 'status'], 'integer'],
            [['nama_pasien'], 'string', 'max' => 100],
            [['tmptlahir_pasien', 'pekerjaan_pasien'], 'string', 'max' => 50],
            [['telepon_pasien'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'tmptlahir_pasien' => 'Tempat Lahir Pasien',
            'tgllahir_pasien' => 'Tanggal Lahir Pasien',
            'alamat_pasien' => 'Alamat Pasien',
            'telepon_pasien' => 'Telepon Pasien',
            'pekerjaan_pasien' => 'Pekerjaan Pasien',
            'usia_pasien' => 'Usia Pasien',
            'status' => 'Status',
        ];
    }
}
