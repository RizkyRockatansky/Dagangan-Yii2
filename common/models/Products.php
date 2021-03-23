<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $harga
 * @property string $deskripsi
 * @property int $kategori
 * @property string $gambar
 * @property int $status
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'harga', 'deskripsi', 'kategori', 'gambar', 'status'], 'required'],
            [['harga', 'kategori', 'status'], 'integer'],
            [['deskripsi'], 'string'],
            [['nama_produk', 'gambar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'nama_produk' => 'Nama Produk',
            'harga' => 'Harga',
            'deskripsi' => 'Deskripsi',
            'kategori' => 'Kategori',
            'gambar' => 'Gambar',
            'status' => 'Status',
        ];
    }
}
