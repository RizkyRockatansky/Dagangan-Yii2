<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $id_penjualan
 * @property string $created_at
 * @property string $time_at
 * @property string $nama_produk
 * @property int $harga
 * @property int $bayar
 * @property int $kembalian
 * @property int $metode
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'nama_produk', 'harga', 'bayar', 'kembalian', 'metode'], 'required'],
            [['created_at', 'time_at'], 'safe'],
            [['harga', 'bayar', 'kembalian'], 'integer'],
            [['nama_produk', 'metode'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penjualan' => 'Id Penjualan',
            'created_at' => 'Dibuat Pada    :' ,
            'time_at' => 'Jam               :',
            'nama_produk' => 'Nama Produk   :',
            'harga' => 'Harga               :',
            'bayar' => 'Bayar               :',
            'kembalian' => 'Kembalian       :',
            'metode' => 'Metode Pembayaran  :',
        ];
    }

    public function getproduk()
    {
        return $this->hasOne(Produk::className(), ['id_produk' => 'id_produk']);
    }
}
