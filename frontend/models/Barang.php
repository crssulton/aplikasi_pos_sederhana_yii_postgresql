<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $barang_id
 * @property string $barang_nama
 * @property string $barang_harga
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['barang_nama', 'barang_harga'], 'required'],
            [['barang_nama', 'barang_harga'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'barang_id' => 'Barang ID',
            'barang_nama' => 'Barang Nama',
            'barang_harga' => 'Barang Harga',
        ];
    }
}
