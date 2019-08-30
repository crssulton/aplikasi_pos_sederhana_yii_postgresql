<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $transaksi_id
 * @property string $transaksi_nama
 * @property string $transaksi_harga
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transaksi_nama', 'transaksi_jumlah'], 'required'],
            [['transaksi_nama', 'transaksi_jumlah'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transaksi_id' => 'Transaksi ID',
            'transaksi_nama' => 'Transaksi Nama',
            'transaksi_jumlah' => 'Transaksi Jumlah',
            'transaksi_harga' => 'Transaksi Harga',
        ];
    }

    public function getBarangAll()
    {
        $query = new \yii\db\Query();
        return $query->select('*')->from('barang')->all();
    }

    public function getHargaOne($nama)
    {
        $query = new \yii\db\Query();
        return $query->select('barang_harga')->from('barang')->where(['barang_nama' => $nama])->all();
    }

    public function getBarangAllByName()
    {
        // SELECT transaksi_nama, SUM(transaksi_jumlah), SUM(transaksi_harga) FROM transaksi GROUP BY transaksi_nama
        $query = new \yii\db\Query();
        return $query->select('transaksi_nama, SUM(transaksi_jumlah) AS transaksi_jumlah, SUM(transaksi_harga) AS transaksi_harga')->from('public.transaksi')->groupBy('transaksi_nama')->all();
    }
}
