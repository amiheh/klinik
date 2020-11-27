<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_bayar
 * @property int $id_rkmd
 * @property int $subtotal
 * @property int $diskon
 * @property int $total
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rkmd', 'subtotal', 'diskon', 'total'], 'required'],
            [['id_rkmd', 'subtotal', 'diskon', 'total'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bayar' => 'Id Bayar',
            'id_rkmd' => 'Id Rkmd',
            'subtotal' => 'Subtotal',
            'diskon' => 'Diskon',
            'total' => 'Total',
        ];
    }
}
