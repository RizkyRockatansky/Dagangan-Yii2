<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $harga
 * @property string $deskripsi
 * @property int $id_kategori
 * @property string $gambar
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'harga', 'deskripsi', 'id_kategori', 'gambar'], 'required'],
            [['harga', 'id_kategori'], 'integer'],
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
            'id_kategori' => 'Id Kategori',
            'gambar' => 'Gambar',
        ];
    }
}
